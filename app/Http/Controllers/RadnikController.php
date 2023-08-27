<?php

namespace App\Http\Controllers;

use App\Models\Radnik;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\RadnikResource;
use App\Http\Resources\Radni;
use App\Http\Resources\RadniciCollection;

class RadnikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $radnici= Radnik::all();
        return new RadniciCollection($radnici);
    }

    public function show($id)
    {
        $radnik =Radnik::find($id);
         if ($radnik) {
            return new RadnikResource($radnik);
         } else {
            return response()->json('Radnik sa trazenim id ne postoji.');
            }
    }

}
