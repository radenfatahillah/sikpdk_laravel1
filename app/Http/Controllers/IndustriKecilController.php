<?php

namespace App\Http\Controllers;

use App\IndustriKecil;
use App\KgIndustriKecil;
use Illuminate\Http\Request;

class IndustriKecilController extends Controller
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
        $kgindustrikecil = KgIndustriKecil::ambilSemua();
        return view('operatordesa.industrikecil.create', ['kgindustrikecil' => $kgindustrikecil]);
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
        $industrikecil->desa_id = auth()->user()->desa_id;
        $industrikecil->jumlah = $request->jumlah;
        $industrikecil->kegiatan = $request->kegiatan;
        $industrikecil->pengurus = $request->pengurus;
        $industrikecil->created_at = now();
        $industrikecil->updated_at = now();
        $industrikecil->save();
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
        $kgindustrikecil = KgIndustriKecil::ambilSemua();
        $industrikecil = IndustriKecil::ambil($id);
        return view('operatordesa.industrikecil.edit', ['kgindustrikecil' => $kgindustrikecil, 'industrikecil' => $industrikecil]);
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
        $industrikecil->desa_id = auth()->user()->desa_id;
        $industrikecil->kgindustrikecil_id = $request->input('kgindustrikecil_id');
        $industrikecil->jumlah = $request->input('jumlah');
        $industrikecil->kegiatan = $request->input('kegiatan');
        $industrikecil->pengurus = $request->input('pengurus');
        $industrikecil->updated_at = now();
        $industrikecil->save();
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
        $industrikecil = IndustriKecil::find($id);
        $industrikecil->delete();
        return redirect()->route('profil-desa.edit');
    }
}
