<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrasaranaOlahraga;
use App\KgPrasaranaOlahraga;

class PrasaranaOlahragaController extends Controller
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
        $kgprasaranaolahraga = KgPrasaranaOlahraga::ambilSemua();
        return view('operatordesa.prasaranaolahraga.create', ['kgprasaranaolahraga' => $kgprasaranaolahraga]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prasaranaolahraga = new PrasaranaOlahraga;
        $prasaranaolahraga->kgprasaranaolahraga_id = $request->kgprasaranaolahraga_id;
        $prasaranaolahraga->desa_id = auth()->user()->desa_id;
        $prasaranaolahraga->jumlah = $request->jumlah;
        $prasaranaolahraga->created_at = now();
        $prasaranaolahraga->updated_at = now();
        $prasaranaolahraga->save();
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
        $kgprasaranaolahraga = KgPrasaranaOlahraga::ambilSemua();
        $prasaranaolahraga = PrasaranaOlahraga::ambil($id);
        return view('operatordesa.prasaranaolahraga.edit', ['kgprasaranaolahraga' => $kgprasaranaolahraga, 'prasaranaolahraga' => $prasaranaolahraga]);
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
        $prasaranaolahraga = PrasaranaOlahraga::ambil($id);
        $prasaranaolahraga->desa_id = auth()->user()->desa_id;
        $prasaranaolahraga->kgprasaranaolahraga_id = $request->input('kgprasaranaolahraga_id');
        $prasaranaolahraga->jumlah = $request->input('jumlah');
        $prasaranaolahraga->updated_at = now();
        $prasaranaolahraga->save();
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
        $prasaranaolahraga = PrasaranaOlahraga::find($id);
        $prasaranaolahraga->delete();
        return redirect()->route('profil-desa.edit');
    }
}
