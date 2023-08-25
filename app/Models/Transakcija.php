<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Radnik;

class Transakcija extends Model
{
    protected $table = 'transakcije';
    use HasFactory;
    protected $fillable = [
        'sifra',
        'naziv',
        'korisnik',
        'radnik_id'
       ];

    public function radnik(){
        return $this->belongsTo(Radnik::class);
    }


}
