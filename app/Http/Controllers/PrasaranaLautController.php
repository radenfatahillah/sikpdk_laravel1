<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrasaranaLaut;
use App\KgPrasaranaLaut;

class PrasaranaLautController extends Controller
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
        $kgprasaranalaut = KgPrasaranaLaut::ambilSemua();
        return view('operatordesa.prasaranalaut.create', ['kgprasaranalaut' => $kgprasaranalaut]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prasaranalaut = new PrasaranaLaut;
        $prasaranalaut->kgprasaranalaut_id = $request->kgprasaranalaut_id;
        $prasaranalaut->desa_id = auth()->user()->desa_id;
        $prasaranalaut->jumlah = $request->jumlah;
        $prasaranalaut->created_at = now();
        $prasaranalaut->updated_at = now();
        $prasaranalaut->save();
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
        $kgprasaranalaut = KgPrasaranaLaut::ambilSemua();
        $prasaranalaut = PrasaranaLaut::ambil($id);
        return view('operatordesa.prasaranalaut.edit', ['kgprasaranalaut' => $kgprasaranalaut, 'prasaranalaut' => $prasaranalaut]);
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
        $prasaranalaut = PrasaranaLaut::ambil($id);
        $prasaranalaut->desa_id = auth()->user()->desa_id;
        $prasaranalaut->kgprasaranalaut_id = $request->input('kgprasaranalaut_id');
        $prasaranalaut->jumlah = $request->input('jumlah');
        $prasaranalaut->updated_at = now();
        $prasaranalaut->save();
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
        $prasaranalaut = PrasaranaLaut::find($id);
        $prasaranalaut->delete();
        return redirect()->route('profil-desa.edit');
    }
}
