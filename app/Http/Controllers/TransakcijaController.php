<?php

namespace App\Http\Controllers;

use App\Models\Transakcija;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\TransakcijaResource;

class TransakcijaController extends Controller
{
    public function index()
    {
        $transakcije= Transakcija::all();
        return TransakcijaResource::collection($transakcije);
    }

    public function show($id)
    {
        $transakcija =Transakcija::find($id);
         if ($transakcija) {
            return new TransakcijaResource($transakcija);
         } else {
            return response()->json('Transakcija sa trazenim id ne postoji.');
            }
    }

    public function destroy($id)
    {
        $transakcija= Transakcija::find($id);
        if(is_null($transakcija)){
            return response()->json('Transakcija sa datim id nije pronadjena.',404);
        }
        $transakcija->delete();
        return response()->json('Transakcija je uklonjena.');
    }

}
