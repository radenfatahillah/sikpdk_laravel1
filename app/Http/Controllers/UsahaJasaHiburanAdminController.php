<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgUsahaJasaHiburan;
use App\UsahaJasaHiburan;
use Illuminate\Http\Request;

class UsahaJasaHiburanAdminController extends Controller
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
        $kgusahajasahiburan = KgUsahaJasaHiburan::ambilSemua();
        return view('admin.usahajasahiburan.create', ['kgusahajasahiburan' => $kgusahajasahiburan, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usahajasahiburan = new UsahaJasaHiburan;
        $usahajasahiburan->kgusahajasahiburan_id = $request->kgusahajasahiburan_id;
        $usahajasahiburan->desa_id = $request->desa_id;
        $usahajasahiburan->jumlah = $request->jumlah;
        $usahajasahiburan->jenis_produk = $request->jenis_produk;
        $usahajasahiburan->jumlah_tenagakerja = $request->jumlah_tenagakerja;
        $usahajasahiburan->created_at = now();
        $usahajasahiburan->updated_at = now();
        $usahajasahiburan->save();
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
        $kgusahajasahiburan = KgUsahaJasaHiburan::ambilSemua();
        $usahajasahiburan = UsahaJasaHiburan::ambil($id);
        return view('admin.usahajasahiburan.edit', ['kgusahajasahiburan' => $kgusahajasahiburan, 'usahajasahiburan' => $usahajasahiburan]);
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
        $usahajasahiburan = UsahaJasaHiburan::ambil($id);
        $usahajasahiburan->desa_id = $request->input('desa_id');
        $usahajasahiburan->kgusahajasahiburan_id = $request->input('kgusahajasahiburan_id');
        $usahajasahiburan->jumlah = $request->input('jumlah');
        $usahajasahiburan->jenis_produk = $request->input('jenis_produk');
        $usahajasahiburan->jumlah_tenagakerja = $request->input('jumlah_tenagakerja');
        $usahajasahiburan->updated_at = now();
        $usahajasahiburan->save();
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
        $usahajasahiburan = UsahaJasaHiburan::find($id);
        $usahajasahiburan->delete();
        return redirect()->back();
    }
}
