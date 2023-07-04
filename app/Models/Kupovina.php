<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kupovina extends Model
{
    use HasFactory;

    protected $fillable = [
        'polaznik_id',
        'kurs_id',
        'datum',
         
    ];
    public function polaznik()
    {
        return $this->belongsTo(Polaznik::class);
    }

    public function kurs()
    {
        return $this->belongsTo(Kurs::class);
    }
}
