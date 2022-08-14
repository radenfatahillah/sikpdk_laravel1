<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgUsahaJasaHukum;
use App\UsahaJasaHukum;
use Illuminate\Http\Request;

class UsahaJasaHukumAdminController extends Controller
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
        $kgusahajasahukum = KgUsahaJasaHukum::ambilSemua();
        return view('admin.usahajasahukum.create', ['kgusahajasahukum' => $kgusahajasahukum, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usahajasahukum = new UsahaJasaHukum;
        $usahajasahukum->kgusahajasahukum_id = $request->kgusahajasahukum_id;
        $usahajasahukum->desa_id = $request->desa_id;
        $usahajasahukum->jumlah = $request->jumlah;
        $usahajasahukum->jenis_produk = $request->jenis_produk;
        $usahajasahukum->jumlah_tenagakerja = $request->jumlah_tenagakerja;
        $usahajasahukum->created_at = now();
        $usahajasahukum->updated_at = now();
        $usahajasahukum->save();
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
        $kgusahajasahukum = KgUsahaJasaHukum::ambilSemua();
        $usahajasahukum = UsahaJasaHukum::ambil($id);
        return view('admin.usahajasahukum.edit', ['kgusahajasahukum' => $kgusahajasahukum, 'usahajasahukum' => $usahajasahukum]);
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
        $usahajasahukum = UsahaJasaHukum::ambil($id);
        $usahajasahukum->desa_id = $request->input('desa_id');
        $usahajasahukum->kgusahajasahukum_id = $request->input('kgusahajasahukum_id');
        $usahajasahukum->jumlah = $request->input('jumlah');
        $usahajasahukum->jenis_produk = $request->input('jenis_produk');
        $usahajasahukum->jumlah_tenagakerja = $request->input('jumlah_tenagakerja');
        $usahajasahukum->updated_at = now();
        $usahajasahukum->save();
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
        $usahajasahukum = UsahaJasaHukum::find($id);
        $usahajasahukum->delete();
        return redirect()->back();
    }
}
