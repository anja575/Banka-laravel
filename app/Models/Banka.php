<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banka extends Model
{
    protected $table = 'banke';
    use HasFactory;
    protected $fillable = [
        'naziv',
        'adresa',
        'email',
        'website',
        'brojTelefona'
    ];

    public function radnici(){
        return $this->hasMany(Radnik::class);
    }




}
