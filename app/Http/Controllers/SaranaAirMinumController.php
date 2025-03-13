<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SaranaAirMinum;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;

class SaranaAirMinumController extends Controller
{   

    public function getAll () {
       

        return  SaranaAirMinum::all();
    }

    public function store (Request $request) {

        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'kecamatan' => 'required|string|max:255',
            'puskesmas' => 'required|string|max:255',
            'jumlah_desa_kelurahan' => 'required|integer|min:0',
            'jumlah_sarana_air_minum' => 'required|integer|min:0',
            'jumlah_sarana_air_aman' => 'required|integer|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $jumlahSaranaAirMinum = $request->jumlah_sarana_air_minum;
        $jumlahSaranaAirAman = $request->jumlah_sarana_air_aman;
        $jumlahTotalPersentase = ($jumlahSaranaAirAman > 0 && $jumlahSaranaAirMinum > 0) 
            ? min(($jumlahSaranaAirMinum / $jumlahSaranaAirAman * 100), 100) 
            : 0;

        SaranaAirMinum::create([
            'kecamatan' => $request->kecamatan,
            'puskesmas' => $request->puskesmas,
            'jumlah_desa_kelurahan' => $request->jumlah_desa_kelurahan,
            'jumlah_sarana_air_minum' => $jumlahSaranaAirMinum,
            'jumlah_sarana_air_aman'  => $jumlahSaranaAirAman,
            'jumlah_persentase' => round($jumlahTotalPersentase, 2),
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    
    }
}
