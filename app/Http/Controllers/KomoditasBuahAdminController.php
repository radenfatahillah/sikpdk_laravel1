<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgKomoditasBuah;
use App\KomoditasBuah;
use Illuminate\Http\Request;

class KomoditasBuahAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desa_id = Desa::get();
        $kgkomoditasbuah = KgKomoditasBuah::ambilSemua();
        return view('admin.komoditasbuah.create', ['kgkomoditasbuah' => $kgkomoditasbuah, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'desa_id' => 'required',
            'kgkomoditasbuah_id' => 'required',
            'luas' => 'required',
            'hasil' => 'required',
        ], [

            'desa_id.required' => 'Desa wajib diisi',
            'kgkomoditasbuah_id.required' => 'Nama Komoditas wajib diisi',
            'luas.required' => 'Luas wajib diisi',
            'hasil.required' => 'Hasil Panen wajib diisi',
        ]);

        $komoditasbuah = new KomoditasBuah;
        $komoditasbuah->kgkomoditasbuah_id = $request->kgkomoditasbuah_id;
        $komoditasbuah->desa_id = $request->desa_id;
        $komoditasbuah->luas = $request->luas;
        $komoditasbuah->hasil = $request->hasil;
        $komoditasbuah->created_at = now();
        $komoditasbuah->updated_at = now();
        $komoditasbuah->save();
        return redirect()->route('profildesakecamatan.edit', $request->desa_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kgkomoditasbuah = KgKomoditasBuah::ambilSemua();
        $komoditasbuah = KomoditasBuah::ambil($id);
        return view('admin.komoditasbuah.edit', ['kgkomoditasbuah' => $kgkomoditasbuah, 'komoditasbuah' => $komoditasbuah]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'desa_id' => 'required',
            'kgkomoditasbuah_id' => 'required',
            'luas' => 'required',
            'hasil' => 'required',
        ], [
            'desa_id.required' => 'Desa wajib diisi',
            'kgkomoditasbuah_id.required' => 'Nama Komoditas wajib diisi',
            'luas.required' => 'Luas wajib diisi',
            'hasil.required' => 'Hasil Panen wajib diisi',
        ]);

        $komoditasbuah = KomoditasBuah::ambil($id);
        $komoditasbuah->desa_id = $request->input('desa_id');
        $komoditasbuah->kgkomoditasbuah_id = $request->input('kgkomoditasbuah_id');
        $komoditasbuah->luas = $request->input('luas');
        $komoditasbuah->hasil = $request->input('hasil');
        $komoditasbuah->updated_at = now();
        $komoditasbuah->save();
        return redirect()->route('profildesakecamatan.edit', $request->input('desa_id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $komoditasbuah = KomoditasBuah::find($id);
        $komoditasbuah->delete();
        return redirect()->back();
    }
}
