<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{   
    public function login(Request $req)
    {
      $user = User::where("email", $req->email)->first();
      if (!$user || !Hash::check($req->password, $user->password)) {
        return response()->json([
          "error" => "Invalid credentials"
        ], 400);
      }
      return $user->createToken($user->email)->plainTextToken;
    }
    
    public function register(Request $req)
    {

      // $validator = Validator::make($request->all(),
      // [
      //   'name' => 'required|string|max:255',
      //   'email' => 'required|string|max:255|email|unique:users',
      //   'password' => 'required|string|min:8'
      // ]);

      // if($validator->fails()){
      //   return response()->json($validator->errors());
      // }

      // $user = User::create


      $user = User::where("email", $req->email)->first();
      if ($user) {
        return response()->json([
          "error" => "User with given email already exist"
        ], 400);
      }
      try {
        $user = User::create([
          "name" => $req->name,
          "email" => $req->email,
          "password" => Hash::make($req->password),
        ]);
        return $user->createToken($user->email)->plainTextToken;
      } catch (Exception $ex) {
        return response()->json([
          "error" => $ex->getMessage()
        ], 500);
      }
    }



  
    public function logout(Request $req) {
      $req->user()->currentAccessToken()->delete();
      return response()->noContent();
      }
}
