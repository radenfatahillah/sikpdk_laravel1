<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgPrasaranaEnergiPenerangan;
use App\PrasaranaEnergiPenerangan;
use Illuminate\Http\Request;

class PrasaranaEnergiPeneranganAdminController extends Controller
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
        $kgprasaranaenergipenerangan = KgPrasaranaEnergiPenerangan::ambilSemua();
        return view('admin.prasaranaenergipenerangan.create', ['kgprasaranaenergipenerangan' => $kgprasaranaenergipenerangan, 'desa_id' => $desa_id]);
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
        $prasaranaenergipenerangan->desa_id = $request->desa_id;
        $prasaranaenergipenerangan->jumlah = $request->jumlah;
        $prasaranaenergipenerangan->created_at = now();
        $prasaranaenergipenerangan->updated_at = now();
        $prasaranaenergipenerangan->save();
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
        $kgprasaranaenergipenerangan = KgPrasaranaEnergiPenerangan::ambilSemua();
        $prasaranaenergipenerangan = PrasaranaEnergiPenerangan::ambil($id);
        return view('admin.prasaranaenergipenerangan.edit', ['kgprasaranaenergipenerangan' => $kgprasaranaenergipenerangan, 'prasaranaenergipenerangan' => $prasaranaenergipenerangan]);
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
        $prasaranaenergipenerangan->desa_id = $request->input('desa_id');
        $prasaranaenergipenerangan->kgprasaranaenergipenerangan_id = $request->input('kgprasaranaenergipenerangan_id');
        $prasaranaenergipenerangan->jumlah = $request->input('jumlah');
        $prasaranaenergipenerangan->updated_at = now();
        $prasaranaenergipenerangan->save();
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
        $prasaranaenergipenerangan = PrasaranaEnergiPenerangan::find($id);
        $prasaranaenergipenerangan->delete();
        return redirect()->back();
    }
}
