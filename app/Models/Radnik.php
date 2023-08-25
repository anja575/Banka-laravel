<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Banka;
use App\Models\Transakcija;

class Radnik extends Model
{
    protected $table = 'radnici';
    use HasFactory;
    protected $fillable = [
        'ime',
        'prezime',
        'email',
        'broj_telefona',
        'pozicija',
        'banka_id'
       ];

    public function banka(){
        return $this->belongsTo(Banka::class);
    }

    public function transakcije(){
        return $this->hasMany(Transakcija::class);
    }


}
