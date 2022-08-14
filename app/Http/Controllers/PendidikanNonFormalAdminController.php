<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgPendidikanNonFormal;
use App\PendidikanNonFormal;
use Illuminate\Http\Request;

class PendidikanNonFormalAdminController extends Controller
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
        $kgpendidikannonformal = KgPendidikanNonFormal::ambilSemua();
        return view('admin.pendidikannonformal.create', ['kgpendidikannonformal' => $kgpendidikannonformal, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendidikannonformal = new PendidikanNonFormal;
        $pendidikannonformal->desa_id = $request->desa_id;
        $pendidikannonformal->kgpendidikannonformal_id = $request->kgpendidikannonformal_id;
        $pendidikannonformal->jumlah = $request->jumlah;
        $pendidikannonformal->status = $request->status;
        $pendidikannonformal->kepemilikan = $request->kepemilikan;
        $pendidikannonformal->jumlah_pengajar = $request->jumlah_pengajar;
        $pendidikannonformal->jumlah_siswa = $request->jumlah_siswa;
        $pendidikannonformal->save();
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
        $kgpendidikannonformal = KgPendidikanNonFormal::ambilSemua();
        $pendidikannonformal = PendidikanNonFormal::ambil($id);
        return view('admin.pendidikannonformal.edit', ['kgpendidikannonformal' => $kgpendidikannonformal, 'pendidikannonformal' => $pendidikannonformal]);
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
        $pendidikannonformal = PendidikanNonFormal::ambil($id);
        $pendidikannonformal->desa_id = $request->input('desa_id');
        $pendidikannonformal->kgpendidikannonformal_id = $request->input('kgpendidikannonformal_id');
        $pendidikannonformal->jumlah = $request->input('jumlah');
        $pendidikannonformal->status = $request->input('status');
        $pendidikannonformal->kepemilikan = $request->input('kepemilikan');
        $pendidikannonformal->jumlah_pengajar = $request->input('jumlah_pengajar');
        $pendidikannonformal->jumlah_siswa = $request->input('jumlah_siswa');
        $pendidikannonformal->updated_at = now();
        $pendidikannonformal->save();
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
        $pendidikannonformal = PendidikanNonFormal::find($id);
        $pendidikannonformal->delete();
        return redirect()->back();
    }
}
