<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Radnik;
use App\Models\User;

class Banka extends Model
{
    protected $table = 'banke';
    use HasFactory;
    protected $fillable = [
        'naziv',
        'adresa',
        'email',
        'sajt',
        'broj_telefona',
        'user_id'
    ];

    public function radnici(){
        return $this->hasMany(Radnik::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }




}
