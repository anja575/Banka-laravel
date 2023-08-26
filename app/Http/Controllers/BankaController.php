<?php

namespace App\Http\Controllers;

use App\Models\Banka;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\BankaResource;

class BankaController extends Controller
{
    public function index()
    {
        $banke= Banka::all();
        return BankaResource::collection($banke);
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
