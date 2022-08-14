<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgKualitasUdara;
use App\KualitasUdara;
use Illuminate\Http\Request;

class KualitasUdaraAdminController extends Controller
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
        $kgkualitasudara = KgKualitasUdara::ambilSemua();
        return view('admin.kualitasudara.create', ['kgkualitasudara' => $kgkualitasudara, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kualitasudara = new KualitasUdara;
        $kualitasudara->kgkualitasudara_id = $request->kgkualitasudara_id;
        $kualitasudara->desa_id = $request->desa_id;
        $kualitasudara->jumlah = $request->jumlah;
        $kualitasudara->polutan = $request->polutan;
        $kualitasudara->efek = $request->efek;
        $kualitasudara->pemerintah = $request->pemerintah;
        $kualitasudara->swasta = $request->swasta;
        $kualitasudara->perorangan = $request->perorangan;
        $kualitasudara->created_at = now();
        $kualitasudara->updated_at = now();
        $kualitasudara->save();
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
        $kgkualitasudara = KgKualitasUdara::ambilSemua();
        $kualitasudara = KualitasUdara::ambil($id);
        return view('admin.kualitasudara.edit', ['kgkualitasudara' => $kgkualitasudara, 'kualitasudara' => $kualitasudara]);
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
        $kualitasudara = KualitasUdara::ambil($id);
        $kualitasudara->desa_id = $request->input('desa_id');
        $kualitasudara->kgkualitasudara_id = $request->input('kgkualitasudara_id');
        $kualitasudara->jumlah = $request->input('jumlah');
        $kualitasudara->polutan = $request->input('polutan');
        $kualitasudara->efek = $request->input('efek');
        $kualitasudara->pemerintah = $request->input('pemerintah');
        $kualitasudara->swasta = $request->input('swasta');
        $kualitasudara->perorangan = $request->input('perorangan');
        $kualitasudara->updated_at = now();
        $kualitasudara->save();
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
        $kualitasudara = KualitasUdara::find($id);
        $kualitasudara->delete();
        return redirect()->back();
    }
}
