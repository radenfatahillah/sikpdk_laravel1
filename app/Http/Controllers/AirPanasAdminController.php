<?php

namespace App\Http\Controllers;

use App\AirPanas;
use App\Desa;
use App\KgAirPanas;
use Illuminate\Http\Request;

class AirPanasAdminController extends Controller
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
        $kgairpanas = KgAirPanas::ambilSemua();
        return view('admin.airpanas.create', ['kgairpanas' => $kgairpanas, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $airpanas = new AirPanas;
        $airpanas->kgairpanas_id = $request->kgairpanas_id;
        $airpanas->desa_id = $request->desa_id;
        $airpanas->jumlah = $request->jumlah;
        $airpanas->manfaat = $request->manfaat;
        $airpanas->pemerintah = $request->pemerintah;
        $airpanas->swasta = $request->swasta;
        $airpanas->perorangan = $request->perorangan;
        $airpanas->created_at = now();
        $airpanas->updated_at = now();
        $airpanas->save();
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
        $kgairpanas = KgAirPanas::ambilSemua();
        $airpanas = AirPanas::ambil($id);
        return view('admin.airpanas.edit', ['kgairpanas' => $kgairpanas, 'airpanas' => $airpanas]);
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
        $airpanas = AirPanas::ambil($id);
        $airpanas->desa_id = $request->input('desa_id');
        $airpanas->kgairpanas_id = $request->input('kgairpanas_id');
        $airpanas->jumlah = $request->input('jumlah');
        $airpanas->manfaat = $request->input('manfaat');
        $airpanas->pemerintah = $request->input('pemerintah');
        $airpanas->swasta = $request->input('swasta');
        $airpanas->perorangan = $request->input('perorangan');
        $airpanas->updated_at = now();
        $airpanas->save();
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
        $airpanas = AirPanas::find($id);
        $airpanas->delete();
        return redirect()->back();
    }
}
