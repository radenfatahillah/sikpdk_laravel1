<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgPendidikanKeagamaan;
use App\PendidikanKeagamaan;
use Illuminate\Http\Request;

class PendidikanKeagamaanAdminController extends Controller
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
        $kgpendidikankeagamaan = KgPendidikanKeagamaan::ambilSemua();
        return view('admin.pendidikankeagamaan.create', ['kgpendidikankeagamaan' => $kgpendidikankeagamaan, 'desa_id' => $desa_id]);
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
        $pendidikankeagamaan->desa_id = $request->desa_id;
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
        $kgpendidikankeagamaan = KgPendidikanKeagamaan::ambilSemua();
        $pendidikankeagamaan = PendidikanKeagamaan::ambil($id);
        return view('admin.pendidikankeagamaan.edit', ['kgpendidikankeagamaan' => $kgpendidikankeagamaan, 'pendidikankeagamaan' => $pendidikankeagamaan]);
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
        $pendidikankeagamaan->desa_id = $request->input('desa_id');
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
        $pendidikankeagamaan = PendidikanKeagamaan::find($id);
        $pendidikankeagamaan->delete();
        return redirect()->back();
    }
}
