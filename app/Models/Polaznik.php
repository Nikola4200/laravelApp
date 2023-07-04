<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polaznik extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'jmbg',
        'brojTelefona',
        'email'
    ];


    public function kupovina()
    {
        return $this->hasMany(Kupovina::class);
    }
}
