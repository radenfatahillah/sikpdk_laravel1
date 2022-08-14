<?php

namespace App\Http\Controllers;

use App\KgIndustriKecil;
use App\IndustriKecil;
use App\Desa;
use Illuminate\Http\Request;

class IndustriKecilAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desa_id = Desa::get();
        $kgindustrikecil = KgIndustriKecil::ambilSemua();
        return view('admin.industrikecil.create', ['kgindustrikecil' => $kgindustrikecil, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $industrikecil = new IndustriKecil;
        $industrikecil->kgindustrikecil_id = $request->kgindustrikecil_id;
        $industrikecil->desa_id = $request->desa_id;
        $industrikecil->jumlah = $request->jumlah;
        $industrikecil->kegiatan = $request->kegiatan;
        $industrikecil->pengurus = $request->pengurus;
        $industrikecil->created_at = now();
        $industrikecil->updated_at = now();
        $industrikecil->save();
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
        $kgindustrikecil = KgIndustriKecil::ambilSemua();
        $industrikecil = IndustriKecil::ambil($id);
        return view('admin.industrikecil.edit', ['kgindustrikecil' => $kgindustrikecil, 'industrikecil' => $industrikecil]);
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
        $industrikecil = IndustriKecil::ambil($id);
        $industrikecil->desa_id = $request->input('desa_id');
        $industrikecil->kgindustrikecil_id = $request->input('kgindustrikecil_id');
        $industrikecil->jumlah = $request->input('jumlah');
        $industrikecil->kegiatan = $request->input('kegiatan');
        $industrikecil->pengurus = $request->input('pengurus');
        $industrikecil->updated_at = now();
        $industrikecil->save();
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
        $industrikecil = IndustriKecil::find($id);
        $industrikecil->delete();
        return redirect()->back();
    }
}
