<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrasaranaEnergiPenerangan;
use App\KgPrasaranaEnergiPenerangan;

class PrasaranaEnergiPeneranganController extends Controller
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
        $kgprasaranaenergipenerangan = KgPrasaranaEnergiPenerangan::ambilSemua();
        return view('operatordesa.prasaranaenergipenerangan.create', ['kgprasaranaenergipenerangan' => $kgprasaranaenergipenerangan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prasaranaenergipenerangan = new PrasaranaEnergiPenerangan;
        $prasaranaenergipenerangan->kgprasaranaenergipenerangan_id = $request->kgprasaranaenergipenerangan_id;
        $prasaranaenergipenerangan->desa_id = auth()->user()->desa_id;
        $prasaranaenergipenerangan->jumlah = $request->jumlah;
        $prasaranaenergipenerangan->created_at = now();
        $prasaranaenergipenerangan->updated_at = now();
        $prasaranaenergipenerangan->save();
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
        $kgprasaranaenergipenerangan = KgPrasaranaEnergiPenerangan::ambilSemua();
        $prasaranaenergipenerangan = PrasaranaEnergiPenerangan::ambil($id);
        return view('operatordesa.prasaranaenergipenerangan.edit', ['kgprasaranaenergipenerangan' => $kgprasaranaenergipenerangan, 'prasaranaenergipenerangan' => $prasaranaenergipenerangan]);
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
        $prasaranaenergipenerangan = PrasaranaEnergiPenerangan::ambil($id);
        $prasaranaenergipenerangan->desa_id = auth()->user()->desa_id;
        $prasaranaenergipenerangan->kgprasaranaenergipenerangan_id = $request->input('kgprasaranaenergipenerangan_id');
        $prasaranaenergipenerangan->jumlah = $request->input('jumlah');
        $prasaranaenergipenerangan->updated_at = now();
        $prasaranaenergipenerangan->save();
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
        $prasaranaenergipenerangan = PrasaranaEnergiPenerangan::find($id);
        $prasaranaenergipenerangan->delete();
        return redirect()->route('profil-desa.edit');
    }
}
