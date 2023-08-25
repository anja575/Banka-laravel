<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Radnik;

class Banka extends Model
{
    protected $table = 'banke';
    use HasFactory;
    protected $fillable = [
        'naziv',
        'adresa',
        'email',
        'sajt',
        'broj_telefona'
    ];

    public function radnici(){
        return $this->hasMany(Radnik::class);
    }




}
