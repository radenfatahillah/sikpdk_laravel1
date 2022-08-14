<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrasaranaKesehatan;
use App\KgPrasaranaKesehatan;

class PrasaranaKesehatanController extends Controller
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
        $kgprasaranakesehatan = KgPrasaranaKesehatan::ambilSemua();
        return view('operatordesa.prasaranakesehatan.create', ['kgprasaranakesehatan' => $kgprasaranakesehatan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prasaranakesehatan = new PrasaranaKesehatan;
        $prasaranakesehatan->kgprasaranakesehatan_id = $request->kgprasaranakesehatan_id;
        $prasaranakesehatan->desa_id = auth()->user()->desa_id;
        $prasaranakesehatan->jumlah = $request->jumlah;
        $prasaranakesehatan->created_at = now();
        $prasaranakesehatan->updated_at = now();
        $prasaranakesehatan->save();
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
        $kgprasaranakesehatan = KgPrasaranaKesehatan::ambilSemua();
        $prasaranakesehatan = PrasaranaKesehatan::ambil($id);
        return view('operatordesa.prasaranakesehatan.edit', ['kgprasaranakesehatan' => $kgprasaranakesehatan, 'prasaranakesehatan' => $prasaranakesehatan]);
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
        $prasaranakesehatan = PrasaranaKesehatan::ambil($id);
        $prasaranakesehatan->desa_id = auth()->user()->desa_id;
        $prasaranakesehatan->kgprasaranakesehatan_id = $request->input('kgprasaranakesehatan_id');
        $prasaranakesehatan->jumlah = $request->input('jumlah');
        $prasaranakesehatan->updated_at = now();
        $prasaranakesehatan->save();
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
        $prasaranakesehatan = PrasaranaKesehatan::find($id);
        $prasaranakesehatan->delete();
        return redirect()->route('profil-desa.edit');
    }
}
