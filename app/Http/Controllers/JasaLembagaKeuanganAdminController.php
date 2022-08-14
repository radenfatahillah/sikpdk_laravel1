<?php

namespace App\Http\Controllers;

use App\Desa;
use App\JasaLembagaKeuangan;
use App\KgJasaLembagaKeuangan;
use Illuminate\Http\Request;

class JasaLembagaKeuanganAdminController extends Controller
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
        $kgjasalembagakeuangan = KgJasaLembagaKeuangan::ambilSemua();
        return view('admin.jasalembagakeuangan.create', ['kgjasalembagakeuangan' => $kgjasalembagakeuangan, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jasalembagakeuangan = new JasaLembagaKeuangan;
        $jasalembagakeuangan->kgjasalembagakeuangan_id = $request->kgjasalembagakeuangan_id;
        $jasalembagakeuangan->desa_id = $request->desa_id;
        $jasalembagakeuangan->jumlah = $request->jumlah;
        $jasalembagakeuangan->kegiatan = $request->kegiatan;
        $jasalembagakeuangan->pengurus = $request->pengurus;
        $jasalembagakeuangan->created_at = now();
        $jasalembagakeuangan->updated_at = now();
        $jasalembagakeuangan->save();
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
        $kgjasalembagakeuangan = KgJasaLembagaKeuangan::ambilSemua();
        $jasalembagakeuangan = JasaLembagaKeuangan::ambil($id);
        return view('admin.jasalembagakeuangan.edit', ['kgjasalembagakeuangan' => $kgjasalembagakeuangan, 'jasalembagakeuangan' => $jasalembagakeuangan]);
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
        $jasalembagakeuangan = JasaLembagaKeuangan::ambil($id);
        $jasalembagakeuangan->desa_id = $request->input('desa_id');
        $jasalembagakeuangan->kgjasalembagakeuangan_id = $request->input('kgjasalembagakeuangan_id');
        $jasalembagakeuangan->jumlah = $request->input('jumlah');
        $jasalembagakeuangan->kegiatan = $request->input('kegiatan');
        $jasalembagakeuangan->pengurus = $request->input('pengurus');
        $jasalembagakeuangan->updated_at = now();
        $jasalembagakeuangan->save();
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
        $jasalembagakeuangan = JasaLembagaKeuangan::find($id);
        $jasalembagakeuangan->delete();
        return redirect()->back();
    }
}
