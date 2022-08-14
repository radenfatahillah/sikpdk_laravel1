<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BahanGalian;
use App\KgBahanGalian;

class BahanGalianController extends Controller
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
        $kgbahangalian = KgBahanGalian::ambilSemua();
        return view('operatordesa.bahangalian.create', ['kgbahangalian' => $kgbahangalian]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bahangalian = new BahanGalian;
        $bahangalian->kgbahangalian_id = $request->kgbahangalian_id;
        $bahangalian->desa_id = auth()->user()->desa_id;
        $bahangalian->keberadaan = $request->keberadaan;
        $bahangalian->skalaproduksi = $request->skalaproduksi;
        $bahangalian->kepemilikan = $request->kepemilikan;
        $bahangalian->created_at = now();
        $bahangalian->updated_at = now();
        $bahangalian->save();
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
        $kgbahangalian = KgBahanGalian::ambilSemua();
        $bahangalian = BahanGalian::ambil($id);
        return view('operatordesa.bahangalian.edit', ['kgbahangalian' => $kgbahangalian, 'bahangalian' => $bahangalian]);
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
        $bahangalian = BahanGalian::ambil($id);
        $bahangalian->desa_id = auth()->user()->desa_id;
        $bahangalian->kgbahangalian_id = $request->input('kgbahangalian_id');
        $bahangalian->keberadaan = $request->input('keberadaan');
        $bahangalian->skalaproduksi = $request->input('skalaproduksi');
        $bahangalian->kepemilikan = $request->input('kepemilikan');
        $bahangalian->updated_at = now();
        $bahangalian->save();
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
        $bahangalian = BahanGalian::find($id);
        $bahangalian->delete();
        return redirect()->route('profil-desa.edit');
    }
}
