<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PendidikanFormal;
use App\KgPendidikanFormal;

class PendidikanFormalController extends Controller
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
        $kgpendidikanformal = KgPendidikanFormal::ambilSemua();
        return view('operatordesa.pendidikanformal.create', ['kgpendidikanformal' => $kgpendidikanformal]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendidikanformal = new PendidikanFormal;
        $pendidikanformal->desa_id = auth()->user()->desa_id;
        $pendidikanformal->kgpendidikanformal_id = $request->kgpendidikanformal_id;
        $pendidikanformal->jumlah = $request->jumlah;
        $pendidikanformal->status = $request->status;
        $pendidikanformal->pemerintah = $request->pemerintah;
        $pendidikanformal->swasta = $request->swasta;
        $pendidikanformal->desa = $request->desa;
        $pendidikanformal->jumlah_pengajar = $request->jumlah_pengajar;
        $pendidikanformal->jumlah_siswa = $request->jumlah_siswa;
        $pendidikanformal->save();
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
        $kgpendidikanformal = KgPendidikanFormal::ambilSemua();
        $pendidikanformal = PendidikanFormal::ambil($id);
        return view('operatordesa.pendidikanformal.edit', ['kgpendidikanformal' => $kgpendidikanformal, 'pendidikanformal' => $pendidikanformal]);
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
        $pendidikanformal = PendidikanFormal::ambil($id);
        $pendidikanformal->desa_id = auth()->user()->desa_id;
        $pendidikanformal->kgpendidikanformal_id = $request->input('kgpendidikanformal_id');
        $pendidikanformal->jumlah = $request->input('jumlah');
        $pendidikanformal->status = $request->input('status');
        $pendidikanformal->pemerintah = $request->input('pemerintah');
        $pendidikanformal->swasta = $request->input('swasta');
        $pendidikanformal->desa = $request->input('desa');
        $pendidikanformal->jumlah_pengajar = $request->input('jumlah_pengajar');
        $pendidikanformal->jumlah_siswa = $request->input('jumlah_siswa');
        $pendidikanformal->updated_at = now();
        $pendidikanformal->save();
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
        $pendidikanformal = PendidikanFormal::find($id);
        $pendidikanformal->delete();
        return redirect()->route('profil-desa.edit');
    }
}
