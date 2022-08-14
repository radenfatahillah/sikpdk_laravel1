<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgPemilikUsahaTernak;
use App\PemilikUsahaTernak;
use Illuminate\Http\Request;

class PemilikUsahaTernakAdminController extends Controller
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
        $kgpemilikusahaternak = KgPemilikUsahaTernak::ambilSemua();
        return view('admin.pemilikusahaternak.create', ['kgpemilikusahaternak' => $kgpemilikusahaternak, 'desa_id' => $desa_id]);
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
        $pemilikusahaternak->desa_id = $request->desa_id;
        $pemilikusahaternak->jumlah = $request->jumlah;
        $pemilikusahaternak->created_at = now();
        $pemilikusahaternak->updated_at = now();
        $pemilikusahaternak->save();
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
        $kgpemilikusahaternak = KgPemilikUsahaTernak::ambilSemua();
        $pemilikusahaternak = PemilikUsahaTernak::ambil($id);
        return view('admin.pemilikusahaternak.edit', ['kgpemilikusahaternak' => $kgpemilikusahaternak, 'pemilikusahaternak' => $pemilikusahaternak]);
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
        $pemilikusahaternak->desa_id = $request->input('desa_id');
        $pemilikusahaternak->kgpemilikusahaternak_id = $request->input('kgpemilikusahaternak_id');
        $pemilikusahaternak->jumlah = $request->input('jumlah');
        $pemilikusahaternak->updated_at = now();
        $pemilikusahaternak->save();
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
        $pemilikusahaternak = PemilikUsahaTernak::find($id);
        $pemilikusahaternak->delete();
        return redirect()->back();
    }
}
