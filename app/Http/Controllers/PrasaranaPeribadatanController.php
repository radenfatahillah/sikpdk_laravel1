<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrasaranaPeribadatan;
use App\KgPrasaranaPeribadatan;

class PrasaranaPeribadatanController extends Controller
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
        $kgprasaranaperibadatan = KgPrasaranaPeribadatan::ambilSemua();
        return view('operatordesa.prasaranaperibadatan.create', ['kgprasaranaperibadatan' => $kgprasaranaperibadatan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prasaranaperibadatan = new PrasaranaPeribadatan;
        $prasaranaperibadatan->kgprasaranaperibadatan_id = $request->kgprasaranaperibadatan_id;
        $prasaranaperibadatan->desa_id = auth()->user()->desa_id;
        $prasaranaperibadatan->jumlah = $request->jumlah;
        $prasaranaperibadatan->created_at = now();
        $prasaranaperibadatan->updated_at = now();
        $prasaranaperibadatan->save();
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
        $kgprasaranaperibadatan = KgPrasaranaPeribadatan::ambilSemua();
        $prasaranaperibadatan = PrasaranaPeribadatan::ambil($id);
        return view('operatordesa.prasaranaperibadatan.edit', ['kgprasaranaperibadatan' => $kgprasaranaperibadatan, 'prasaranaperibadatan' => $prasaranaperibadatan]);
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
        $prasaranaperibadatan = PrasaranaPeribadatan::ambil($id);
        $prasaranaperibadatan->desa_id = auth()->user()->desa_id;
        $prasaranaperibadatan->kgprasaranaperibadatan_id = $request->input('kgprasaranaperibadatan_id');
        $prasaranaperibadatan->jumlah = $request->input('jumlah');
        $prasaranaperibadatan->updated_at = now();
        $prasaranaperibadatan->save();
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
        $prasaranaperibadatan = PrasaranaPeribadatan::find($id);
        $prasaranaperibadatan->delete();
        return redirect()->route('profil-desa.edit');
    }
}
