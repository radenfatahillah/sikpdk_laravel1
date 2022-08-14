<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KgAlatProduksiTawar;
use App\AlatProduksiTawar;

class AlatProduksiTawarController extends Controller
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
        $kgalatproduksitawar = KgAlatProduksiTawar::ambilSemua();
        return view('operatordesa.alatproduksitawar.create', ['kgalatproduksitawar' => $kgalatproduksitawar]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alatproduksitawar = new AlatProduksiTawar;
        $alatproduksitawar->kgalatproduksitawar_id = $request->kgalatproduksitawar_id;
        $alatproduksitawar->desa_id = auth()->user()->desa_id;
        $alatproduksitawar->jumlah = $request->jumlah;
        $alatproduksitawar->hasil = $request->hasil;
        $alatproduksitawar->created_at = now();
        $alatproduksitawar->updated_at = now();
        $alatproduksitawar->save();
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
        $kgalatproduksitawar = KgAlatProduksiTawar::ambilSemua();
        $alatproduksitawar = AlatProduksiTawar::ambil($id);
        return view('operatordesa.alatproduksitawar.edit', ['kgalatproduksitawar' => $kgalatproduksitawar, 'alatproduksitawar' => $alatproduksitawar]);
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
        $alatproduksitawar = AlatProduksiTawar::ambil($id);
        $alatproduksitawar->desa_id = auth()->user()->desa_id;
        $alatproduksitawar->kgalatproduksitawar_id = $request->input('kgalatproduksitawar_id');
        $alatproduksitawar->jumlah = $request->input('jumlah');
        $alatproduksitawar->hasil = $request->input('hasil');
        $alatproduksitawar->updated_at = now();
        $alatproduksitawar->save();
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
        $alatproduksitawar = AlatProduksiTawar::find($id);
        $alatproduksitawar->delete();
        return redirect()->route('profil-desa.edit');
    }
}
