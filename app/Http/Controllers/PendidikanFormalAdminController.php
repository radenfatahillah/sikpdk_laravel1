<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgPendidikanFormal;
use App\PendidikanFormal;
use Illuminate\Http\Request;

class PendidikanFormalAdminController extends Controller
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
        $kgpendidikanformal = KgPendidikanFormal::ambilSemua();
        return view('admin.pendidikanformal.create', ['kgpendidikanformal' => $kgpendidikanformal, 'desa_id' => $desa_id]);
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
        $pendidikanformal->desa_id = $request->desa_id;
        $pendidikanformal->kgpendidikanformal_id = $request->kgpendidikanformal_id;
        $pendidikanformal->jumlah = $request->jumlah;
        $pendidikanformal->status = $request->status;
        $pendidikanformal->pemerintah = $request->pemerintah;
        $pendidikanformal->swasta = $request->swasta;
        $pendidikanformal->desa = $request->desa;
        $pendidikanformal->jumlah_pengajar = $request->jumlah_pengajar;
        $pendidikanformal->jumlah_siswa = $request->jumlah_siswa;
        $pendidikanformal->save();
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
        $kgpendidikanformal = KgPendidikanFormal::ambilSemua();
        $pendidikanformal = PendidikanFormal::ambil($id);
        return view('admin.pendidikanformal.edit', ['kgpendidikanformal' => $kgpendidikanformal, 'pendidikanformal' => $pendidikanformal]);
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
        $pendidikanformal->desa_id = $request->input('desa_id');
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
        $pendidikanformal = PendidikanFormal::find($id);
        $pendidikanformal->delete();
        return redirect()->back();
    }
}
