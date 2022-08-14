<?php

namespace App\Http\Controllers;

use App\DataUmumKecamatan;
use App\ProfilKecamatan;
use Illuminate\Http\Request;
use Auth;

class DataUmumKecamatanController extends Controller
{
    public function edit()
    {
        $profilkecamatan = ProfilKecamatan::where('kec', auth()->user()->role_id)->first();
        $dataumumkecamatan = DataUmumKecamatan::where('profil_id', auth()->user()->role_id)->first();
        return view('admin.profil-kecamatan.dataumum', compact('dataumumkecamatan', 'profilkecamatan'));
    }

    public function updateDataUmumKecamatan(Request $request, $id)
    {
        $dataumumkecamatan = DataUmumKecamatan::updateOrCreate([
            'profil_id' => Auth::user()->role_id,
        ], [

            'tipologi' => $request->tipologi,
            'ketinggian' => $request->ketinggian,
            'luas_wilayah' => $request->luas_wilayah,
            'bts_wil_utara' => $request->bts_wil_utara,
            'bts_wil_timur' => $request->bts_wil_timur,
            'bts_wil_selatan' => $request->bts_wil_selatan,
            'bts_wil_barat' => $request->bts_wil_barat,
        ]);
        return redirect()->back();
    }
}
