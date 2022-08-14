<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlatProduksiLaut;
use App\KgAlatProduksiLaut;

class AlatProduksiLautController extends Controller
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
        $kgalatproduksilaut = KgAlatProduksiLaut::ambilSemua();
        return view('operatordesa.alatproduksilaut.create', ['kgalatproduksilaut' => $kgalatproduksilaut]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alatproduksilaut = new AlatProduksiLaut;
        $alatproduksilaut->kgalatproduksilaut_id = $request->kgalatproduksilaut_id;
        $alatproduksilaut->desa_id = auth()->user()->desa_id;
        $alatproduksilaut->jumlah = $request->jumlah;
        $alatproduksilaut->hasil = $request->hasil;
        $alatproduksilaut->created_at = now();
        $alatproduksilaut->updated_at = now();
        $alatproduksilaut->save();
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
        $kgalatproduksilaut = KgAlatProduksiLaut::ambilSemua();
        $alatproduksilaut = AlatProduksiLaut::ambil($id);
        return view('operatordesa.alatproduksilaut.edit', ['kgalatproduksilaut' => $kgalatproduksilaut, 'alatproduksilaut' => $alatproduksilaut]);
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
        $alatproduksilaut = AlatProduksiLaut::ambil($id);
        $alatproduksilaut->desa_id = auth()->user()->desa_id;
        $alatproduksilaut->kgalatproduksilaut_id = $request->input('kgalatproduksilaut_id');
        $alatproduksilaut->jumlah = $request->input('jumlah');
        $alatproduksilaut->hasil = $request->input('hasil');
        $alatproduksilaut->updated_at = now();
        $alatproduksilaut->save();
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
        $alatproduksilaut = AlatProduksiLaut::find($id);
        $alatproduksilaut->delete();
        return redirect()->route('profil-desa.edit');
    }
}
