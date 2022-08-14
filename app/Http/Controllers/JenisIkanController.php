<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisIkan;
use App\KgJenisIkan;

class JenisIkanController extends Controller
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
        $kgjenisikan = KgJenisIkan::ambilSemua();
        return view('operatordesa.jenisikan.create', ['kgjenisikan' => $kgjenisikan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenisikan = new JenisIkan;
        $jenisikan->kgjenisikan_id = $request->kgjenisikan_id;
        $jenisikan->desa_id = auth()->user()->desa_id;
        $jenisikan->hasil = $request->hasil;
        $jenisikan->created_at = now();
        $jenisikan->updated_at = now();
        $jenisikan->save();
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
        $kgjenisikan = KgJenisIkan::ambilSemua();
        $jenisikan = JenisIkan::ambil($id);
        return view('operatordesa.jenisikan.edit', ['kgjenisikan' => $kgjenisikan, 'jenisikan' => $jenisikan]);
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
        $jenisikan = JenisIkan::ambil($id);
        $jenisikan->desa_id = auth()->user()->desa_id;
        $jenisikan->kgjenisikan_id = $request->input('kgjenisikan_id');
        $jenisikan->hasil = $request->input('hasil');
        $jenisikan->updated_at = now();
        $jenisikan->save();
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
        $jenisikan = JenisIkan::find($id);
        $jenisikan->delete();
        return redirect()->route('profil-desa.edit');
    }
}
