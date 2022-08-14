<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KgKomoditasBuah;
use App\KomoditasBuah;

class KomoditasBuahController extends Controller
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
        $kgkomoditasbuah = KgKomoditasBuah::ambilSemua();
        return view('operatordesa.komoditasbuah.create', ['kgkomoditasbuah' => $kgkomoditasbuah]);
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
            'kgkomoditasbuah_id' => 'required',
            'luas' => 'required',
            'hasil' => 'required',
        ], [
            'kgkomoditasbuah_id.required' => 'Nama Komoditas wajib diisi',
            'luas.required' => 'Luas wajib diisi',
            'hasil.required' => 'Hasil Panen wajib diisi',
        ]);
        $komoditasbuah = new KomoditasBuah;
        $komoditasbuah->kgkomoditasbuah_id = $request->kgkomoditasbuah_id;
        $komoditasbuah->desa_id = auth()->user()->desa_id;
        $komoditasbuah->luas = $request->luas;
        $komoditasbuah->hasil = $request->hasil;
        $komoditasbuah->created_at = now();
        $komoditasbuah->updated_at = now();
        $komoditasbuah->save();
        return redirect()->route('profil-desa.edit');
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
        return view('operatordesa.komoditasbuah.edit', ['kgkomoditasbuah' => $kgkomoditasbuah, 'komoditasbuah' => $komoditasbuah]);
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
            'kgkomoditasbuah_id' => 'required',
            'luas' => 'required',
            'hasil' => 'required',
        ], [
            'kgkomoditasbuah_id.required' => 'Nama Komoditas wajib diisi',
            'luas.required' => 'Luas wajib diisi',
            'hasil.required' => 'Hasil Panen wajib diisi',
        ]);
        $komoditasbuah = KomoditasBuah::ambil($id);
        $komoditasbuah->desa_id = auth()->user()->desa_id;
        $komoditasbuah->kgkomoditasbuah_id = $request->input('kgkomoditasbuah_id');
        $komoditasbuah->luas = $request->input('luas');
        $komoditasbuah->hasil = $request->input('hasil');
        $komoditasbuah->updated_at = now();
        $komoditasbuah->save();
        return redirect()->route('profil-desa.edit');
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
        return redirect()->route('profil-desa.edit');
    }
}
