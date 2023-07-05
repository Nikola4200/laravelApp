<?php

namespace App\Http\Controllers;

use App\Models\Polaznik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PolaznikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Polaznik::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string|max:50',
            'prezime' => 'required|string|max:50',
            'jmbg' => 'required|string|max:13', 
            'brojTelefona' => 'required|string',
            'email' => 'required|string', 
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $d = Polaznik::create([
            'ime' => $request->ime, 
            'prezime' => $request->prezime, 
            'jmbg' => $request->jmbg,
            'brojTelefona' => $request->brojTelefona, 
            'email' => $request->email, 


        ]);
        $d->save();
        return response()->json(['Objekat je  kreiran', $d]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Polaznik  $polaznik
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Polaznik::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Polaznik  $polaznik
     * @return \Illuminate\Http\Response
     */
    public function edit(Polaznik $polaznik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Polaznik  $polaznik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'string|max:50',
            'prezime' => 'string|max:50',
            'brojTelefona' => 'string|max:50', 
            'jmbg' => 'string|max:13',
            'email' => 'string|max:50', 
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $d = Polaznik::find($id);
        if($d){
            $d->ime=$request->ime;
            $d->prezime=$request->prezime;
            $d->brojTelefona=$request->brojTelefona;
            $d->jmbg=$request->jmbg;
            $d->email=$request->email;

            $d->save();
            return response()->json( ["Uspesno izmenjeno!",$d]);
        }else{
            return response()->json("Objekat ne postoji u bazi");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Polaznik  $polaznik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p =  Polaznik::find($id);
       if($p){
            $p->delete();
            return response()->json(["Objekat obrisan",$p]);
       }else{
            return response()->json(["Greska"]);
       }
    }
}
