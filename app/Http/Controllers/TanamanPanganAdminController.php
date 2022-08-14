<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgTanamanPangan;
use App\TanamanPangan;
use Illuminate\Http\Request;

class TanamanPanganAdminController extends Controller
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
        $kgtanamanpangan = KgTanamanPangan::ambilSemua();
        return view('admin.tanamanpangan.create', ['kgtanamanpangan' => $kgtanamanpangan, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tanamanpangan = new TanamanPangan;
        $tanamanpangan->kgtanamanpangan_id = $request->kgtanamanpangan_id;
        $tanamanpangan->desa_id = $request->desa_id;
        $tanamanpangan->luas = $request->luas;
        $tanamanpangan->hasil = $request->hasil;
        $tanamanpangan->created_at = now();
        $tanamanpangan->updated_at = now();
        $tanamanpangan->save();
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
        $kgtanamanpangan = KgTanamanPangan::ambilSemua();
        $tanamanpangan = TanamanPangan::ambil($id);
        return view('admin.tanamanpangan.edit', ['kgtanamanpangan' => $kgtanamanpangan, 'tanamanpangan' => $tanamanpangan]);
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
        $tanamanpangan = TanamanPangan::ambil($id);
        $tanamanpangan->desa_id = $request->input('desa_id');
        $tanamanpangan->kgtanamanpangan_id = $request->input('kgtanamanpangan_id');
        $tanamanpangan->luas = $request->input('luas');
        $tanamanpangan->hasil = $request->input('hasil');
        $tanamanpangan->updated_at = now();
        $tanamanpangan->save();
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
        $tanamanpangan = TanamanPangan::find($id);
        $tanamanpangan->delete();
        return redirect()->back();
    }
}
