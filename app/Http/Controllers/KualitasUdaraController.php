<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KualitasUdara;
use App\KgKualitasUdara;

class KualitasUdaraController extends Controller
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
        $kgkualitasudara = KgKualitasUdara::ambilSemua();
        return view('operatordesa.kualitasudara.create', ['kgkualitasudara' => $kgkualitasudara]);
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
        $kualitasudara->desa_id = auth()->user()->desa_id;
        $kualitasudara->jumlah = $request->jumlah;
        $kualitasudara->polutan = $request->polutan;
        $kualitasudara->efek = $request->efek;
        $kualitasudara->pemerintah = $request->pemerintah;
        $kualitasudara->swasta = $request->swasta;
        $kualitasudara->perorangan = $request->perorangan;
        $kualitasudara->created_at = now();
        $kualitasudara->updated_at = now();
        $kualitasudara->save();
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
        $kgkualitasudara = KgKualitasUdara::ambilSemua();
        $kualitasudara = KualitasUdara::ambil($id);
        return view('operatordesa.kualitasudara.edit', ['kgkualitasudara' => $kgkualitasudara, 'kualitasudara' => $kualitasudara]);
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
        $kualitasudara->desa_id = auth()->user()->desa_id;
        $kualitasudara->kgkualitasudara_id = $request->input('kgkualitasudara_id');
        $kualitasudara->jumlah = $request->input('jumlah');
        $kualitasudara->polutan = $request->input('polutan');
        $kualitasudara->efek = $request->input('efek');
        $kualitasudara->pemerintah = $request->input('pemerintah');
        $kualitasudara->swasta = $request->input('swasta');
        $kualitasudara->perorangan = $request->input('perorangan');
        $kualitasudara->updated_at = now();
        $kualitasudara->save();
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
        $kualitasudara = KualitasUdara::find($id);
        $kualitasudara->delete();
        return redirect()->route('profil-desa.edit');
    }
}
