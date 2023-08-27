<?php

namespace App\Http\Controllers;

use App\Models\Banka;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\BankaResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BankaController extends Controller
{
    public function index()
    {
        $banke= Banka::all();
        return BankaResource::collection($banke);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
         'naziv' => 'required|string',
         'adresa' => 'required|string',
         'email' => 'required|email',
         'sajt' => 'required|string',
         'broj_telefona' => 'required|string'
       ]);

       if ($validator->fails()) {
             return response()->json(['Greska prilikom validacije.', $validator->errors()]);
     }

         $banka = Banka::create([
                'naziv' => $request->naziv,
                'adresa' => $request->adresa,
                'email' => $request->email,
                'sajt' => $request->sajt,
                'broj_telefona' => $request->broj_telefona,
                'user_id' => Auth::user()->id
             ]);

         return response()->json(['Banka je kreirana uspesno.', new BankaResource($banka)]);


    }
    public function show($id)
    {
        $banka =Banka::find($id);
         if ($banka) {
            return new BankaResource($banka);
         } else {
            return response()->json('Banka sa trazenim id ne postoji.');
            }
    }

    
}
