<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PemilikUsahaTernak;
use App\KgPemilikUsahaTernak;

class PemilikUsahaTernakController extends Controller
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
        $kgpemilikusahaternak = KgPemilikUsahaTernak::ambilSemua();
        return view('operatordesa.pemilikusahaternak.create', ['kgpemilikusahaternak' => $kgpemilikusahaternak]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pemilikusahaternak = new PemilikUsahaTernak;
        $pemilikusahaternak->kgpemilikusahaternak_id = $request->kgpemilikusahaternak_id;
        $pemilikusahaternak->desa_id = auth()->user()->desa_id;
        $pemilikusahaternak->jumlah = $request->jumlah;
        $pemilikusahaternak->created_at = now();
        $pemilikusahaternak->updated_at = now();
        $pemilikusahaternak->save();
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
        $kgpemilikusahaternak = KgPemilikUsahaTernak::ambilSemua();
        $pemilikusahaternak = PemilikUsahaTernak::ambil($id);
        return view('operatordesa.pemilikusahaternak.edit', ['kgpemilikusahaternak' => $kgpemilikusahaternak, 'pemilikusahaternak' => $pemilikusahaternak]);
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
        $pemilikusahaternak = PemilikUsahaTernak::ambil($id);
        $pemilikusahaternak->desa_id = auth()->user()->desa_id;
        $pemilikusahaternak->kgpemilikusahaternak_id = $request->input('kgpemilikusahaternak_id');
        $pemilikusahaternak->jumlah = $request->input('jumlah');
        $pemilikusahaternak->updated_at = now();
        $pemilikusahaternak->save();
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
        $pemilikusahaternak = PemilikUsahaTernak::find($id);
        $pemilikusahaternak->delete();
        return redirect()->route('profil-desa.edit');
    }
}
