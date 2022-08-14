<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desa;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desa = Desa::ambilSemua();
        return view('admin.master-data.desa.index', ['desa' => $desa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master-data.desa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $desa = new desa;
        $desa->name = $request->name;
        $desa->tahun_bentuk = $request->tahun_bentuk;
        $desa->koordinat_bujur = $request->koordinat_bujur;
        $desa->koordinat_lintang = $request->koordinat_lintang;
        $desa->save();
        return redirect()->route('masterdata-desa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $desa = Desa::ambil($id);
        return view('admin.master-data.desa.show', ['desa' => $desa]);
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
        return view('admin.master-data.desa.edit', ['desa' => $desa]);
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
        return redirect()->route('masterdata-desa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $desa = Desa::find($id);
        $desa->delete();
        toast('Hapus Data desa Berhasil!', 'success');
        //fungsi redirect untuk mengalihkan ke halaman desa index
        return redirect()->route('masterdata-desa.index');
    }
}
