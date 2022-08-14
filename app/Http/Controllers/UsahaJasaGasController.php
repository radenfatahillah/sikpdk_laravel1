<?php

namespace App\Http\Controllers;

use App\KgUsahaJasaGas;
use App\UsahaJasaGas;
use Illuminate\Http\Request;

class UsahaJasaGasController extends Controller
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
        $kgusahajasagas = KgUsahaJasaGas::ambilSemua();
        return view('operatordesa.usahajasagas.create', ['kgusahajasagas' => $kgusahajasagas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usahajasagas = new UsahaJasaGas;
        $usahajasagas->kgusahajasagas_id = $request->kgusahajasagas_id;
        $usahajasagas->desa_id = auth()->user()->desa_id;
        $usahajasagas->jumlah = $request->jumlah;
        $usahajasagas->jenis_produk = $request->jenis_produk;
        $usahajasagas->jumlah_tenagakerja = $request->jumlah_tenagakerja;
        $usahajasagas->created_at = now();
        $usahajasagas->updated_at = now();
        $usahajasagas->save();
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
        $kgusahajasagas = KgUsahaJasaGas::ambilSemua();
        $usahajasagas = UsahaJasaGas::ambil($id);
        return view('operatordesa.usahajasagas.edit', ['kgusahajasagas' => $kgusahajasagas, 'usahajasagas' => $usahajasagas]);
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
        $usahajasagas = UsahaJasaGas::ambil($id);
        $usahajasagas->desa_id = auth()->user()->desa_id;
        $usahajasagas->kgusahajasagas_id = $request->input('kgusahajasagas_id');
        $usahajasagas->jumlah = $request->input('jumlah');
        $usahajasagas->jenis_produk = $request->input('jenis_produk');
        $usahajasagas->jumlah_tenagakerja = $request->input('jumlah_tenagakerja');
        $usahajasagas->updated_at = now();
        $usahajasagas->save();
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
        $usahajasagas = UsahaJasaGas::find($id);
        $usahajasagas->delete();
        return redirect()->route('profil-desa.edit');
    }
}
