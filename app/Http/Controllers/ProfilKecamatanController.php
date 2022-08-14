<?php

namespace App\Http\Controllers;

use App\ProfilKecamatan;
use Illuminate\Http\Request;
use Auth;
use Symfony\Component\Console\Input\Input;

class ProfilKecamatanController extends Controller
{

    public function edit()
    {
        $profilkecamatan = ProfilKecamatan::where('kec', auth()->user()->role_id)->first();
        return view('admin.profil-kecamatan.index', compact('profilkecamatan'));
    }

    public function updateProfilKecamatan(Request $request, $id)
    {
        if ($image = $request->file('file_struktur_organisasi')) {
            $destinationPath = 'image/';
            $filename = $image->getClientOriginalName();
            $strukturorganisasiPath = $image->storeAs('image', $filename, 'public');
            $image->move($destinationPath, $filename);
        }

        if ($image1 = $request->file('file_logo')) {
            $destinationPath = 'image/';
            $filename1 = $image1->getClientOriginalName();
            $logoPath = $image1->storeAs('image', $filename1, 'public');
            $image1->move($destinationPath, $filename1);
        }

        $profilkecamatan = ProfilKecamatan::updateOrCreate([
            'kec' => Auth::user()->role_id,
        ], [
            'provinsi_id' => $request->provinsi_id,
            'kabupaten_id' => $request->kabupaten_id,
            'kecamatan_id' => $request->kecamatan_id,
            'provinsi_nama' => strtoupper($request->provinsi_nama),
            'kabupaten_nama' => strtoupper($request->kabupaten_nama),
            'kecamatan_nama' => strtoupper($request->kecamatan_nama),
            'alamat' => strtoupper($request->alamat),
            'kode_pos' => $request->kode_pos,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'tahun_pembentukan' => $request->tahun_pembentukan,
            'dasar_pembentukan' => $request->dasar_pembentukan,
            'nama_camat' => strtoupper($request->nama_camat),
            'sekretaris_camat' => strtoupper($request->sekretaris_camat),
            'kepsek_pemerintahan_umum' => strtoupper($request->kepsek_pemerintahan_umum),
            'kepsek_kesejahteraan_masyarakat' => strtoupper($request->kepsek_kesejahteraan_masyarakat),
            'kepsek_pemberdayaan_masyarakat' => strtoupper($request->kepsek_pemberdayaan_masyarakat),
            'kepsek_pelayanan_umum' => strtoupper($request->kepsek_pelayanan_umum),
            'kepsek_trantib' => strtoupper($request->kepsek_trantib),
            'file_struktur_organisasi' => $strukturorganisasiPath ?? $request->file_struktur_organisasi,
            'file_logo' => $logoPath ?? $request->file_logo,
            'visi' => strtoupper($request->visi),
            'misi' => strtoupper($request->misi),
        ]);
        return redirect()->back();
    }
}
