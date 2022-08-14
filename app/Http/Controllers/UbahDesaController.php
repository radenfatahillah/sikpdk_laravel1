<?php

namespace App\Http\Controllers;

use App\Desa;
use Illuminate\Http\Request;

class UbahDesaController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $desa = Desa::ambil($id);
        return view('operatordesa.pengaturan.desa.edit', ['desa' => $desa]);
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
        $desa = Desa::ambil($id);
        $desa->name = $request->input('name');
        $desa->tahun_bentuk = $request->input('tahun_bentuk');
        $desa->koordinat_bujur = $request->input('koordinat_bujur');
        $desa->koordinat_lintang = $request->input('koordinat_lintang');
        $desa->save();
        toast('Update Data desa Berhasil!', 'success');
        return redirect()->route('pengaturan-desa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
