<?php

namespace App\Http\Controllers;

use App\AlatProduksiLaut;
use App\Desa;
use App\KgAlatProduksiLaut;
use Illuminate\Http\Request;

class AlatProduksiLautAdminController extends Controller
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
        $desa_id = Desa::get();
        $kgalatproduksilaut = KgAlatProduksiLaut::ambilSemua();
        return view('admin.alatproduksilaut.create', ['kgalatproduksilaut' => $kgalatproduksilaut, 'desa_id' => $desa_id]);
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
        $alatproduksilaut->desa_id = $request->desa_id;
        $alatproduksilaut->jumlah = $request->jumlah;
        $alatproduksilaut->hasil = $request->hasil;
        $alatproduksilaut->created_at = now();
        $alatproduksilaut->updated_at = now();
        $alatproduksilaut->save();
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
        $kgalatproduksilaut = KgAlatProduksiLaut::ambilSemua();
        $alatproduksilaut = AlatProduksiLaut::ambil($id);
        return view('admin.alatproduksilaut.edit', ['kgalatproduksilaut' => $kgalatproduksilaut, 'alatproduksilaut' => $alatproduksilaut]);
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
        $alatproduksilaut->desa_id = $request->input('desa_id');
        $alatproduksilaut->kgalatproduksilaut_id = $request->input('kgalatproduksilaut_id');
        $alatproduksilaut->jumlah = $request->input('jumlah');
        $alatproduksilaut->hasil = $request->input('hasil');
        $alatproduksilaut->updated_at = now();
        $alatproduksilaut->save();
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
        $alatproduksilaut = AlatProduksiLaut::find($id);
        $alatproduksilaut->delete();
        return redirect()->back();
    }
}
