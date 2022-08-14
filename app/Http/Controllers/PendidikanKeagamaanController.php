<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PendidikanKeagamaan;
use App\KgPendidikanKeagamaan;

class PendidikanKeagamaanController extends Controller
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
        $kgpendidikankeagamaan = KgPendidikanKeagamaan::ambilSemua();
        return view('operatordesa.pendidikankeagamaan.create', ['kgpendidikankeagamaan' => $kgpendidikankeagamaan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendidikankeagamaan = new PendidikanKeagamaan;
        $pendidikankeagamaan->desa_id = auth()->user()->desa_id;
        $pendidikankeagamaan->kgpendidikankeagamaan_id = $request->kgpendidikankeagamaan_id;
        $pendidikankeagamaan->kategoripendidikan = $request->kategoripendidikan;
        $pendidikankeagamaan->jumlah = $request->jumlah;
        $pendidikankeagamaan->status = $request->status;
        $pendidikankeagamaan->pemerintah = $request->pemerintah;
        $pendidikankeagamaan->swasta = $request->swasta;
        $pendidikankeagamaan->dll = $request->dll;
        $pendidikankeagamaan->jumlah_pengajar = $request->jumlah_pengajar;
        $pendidikankeagamaan->jumlah_siswa = $request->jumlah_siswa;
        $pendidikankeagamaan->save();
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
        $kgpendidikankeagamaan = KgPendidikanKeagamaan::ambilSemua();
        $pendidikankeagamaan = PendidikanKeagamaan::ambil($id);
        return view('operatordesa.pendidikankeagamaan.edit', ['kgpendidikankeagamaan' => $kgpendidikankeagamaan, 'pendidikankeagamaan' => $pendidikankeagamaan]);
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
        $pendidikankeagamaan = PendidikanKeagamaan::ambil($id);
        $pendidikankeagamaan->desa_id = auth()->user()->desa_id;
        $pendidikankeagamaan->kgpendidikankeagamaan_id = $request->input('kgpendidikankeagamaan_id');
        $pendidikankeagamaan->kategoripendidikan = $request->input('kategoripendidikan');
        $pendidikankeagamaan->jumlah = $request->input('jumlah');
        $pendidikankeagamaan->status = $request->input('status');
        $pendidikankeagamaan->pemerintah = $request->input('pemerintah');
        $pendidikankeagamaan->swasta = $request->input('swasta');
        $pendidikankeagamaan->dll = $request->input('dll');
        $pendidikankeagamaan->jumlah_pengajar = $request->input('jumlah_pengajar');
        $pendidikankeagamaan->jumlah_siswa = $request->input('jumlah_siswa');
        $pendidikankeagamaan->updated_at = now();
        $pendidikankeagamaan->save();
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
        $pendidikankeagamaan = PendidikanKeagamaan::find($id);
        $pendidikankeagamaan->delete();
        return redirect()->route('profil-desa.edit');
    }
}
