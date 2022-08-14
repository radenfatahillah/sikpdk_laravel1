<?php

namespace App\Http\Controllers;

use App\KgLembagaEkonomi;
use App\LembagaEkonomi;
use Illuminate\Http\Request;

class LembagaEkonomiController extends Controller
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
        $kglembagaekonomi = KgLembagaEkonomi::ambilSemua();
        return view('operatordesa.lembagaekonomi.create', ['kglembagaekonomi' => $kglembagaekonomi]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lembagaekonomi = new LembagaEkonomi;
        $lembagaekonomi->kglembagaekonomi_id = $request->kglembagaekonomi_id;
        $lembagaekonomi->desa_id = auth()->user()->desa_id;
        $lembagaekonomi->jumlah = $request->jumlah;
        $lembagaekonomi->kegiatan = $request->kegiatan;
        $lembagaekonomi->pengurus = $request->pengurus;
        $lembagaekonomi->created_at = now();
        $lembagaekonomi->updated_at = now();
        $lembagaekonomi->save();
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
        $kglembagaekonomi = KgLembagaEkonomi::ambilSemua();
        $lembagaekonomi = LembagaEkonomi::ambil($id);
        return view('operatordesa.lembagaekonomi.edit', ['kglembagaekonomi' => $kglembagaekonomi, 'lembagaekonomi' => $lembagaekonomi]);
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
        $lembagaekonomi = LembagaEkonomi::ambil($id);
        $lembagaekonomi->desa_id = auth()->user()->desa_id;
        $lembagaekonomi->kglembagaekonomi_id = $request->input('kglembagaekonomi_id');
        $lembagaekonomi->jumlah = $request->input('jumlah');
        $lembagaekonomi->kegiatan = $request->input('kegiatan');
        $lembagaekonomi->pengurus = $request->input('pengurus');
        $lembagaekonomi->updated_at = now();
        $lembagaekonomi->save();
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
        $lembagaekonomi = LembagaEkonomi::find($id);
        $lembagaekonomi->delete();
        return redirect()->route('profil-desa.edit');
    }
}
