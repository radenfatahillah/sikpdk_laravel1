<?php

namespace App\Http\Controllers;

use App\KgUsahaJasaKeterampilan;
use App\UsahaJasaKeterampilan;
use Illuminate\Http\Request;

class UsahaJasaKeterampilanController extends Controller
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
        $kgusahajasaketerampilan = KgUsahaJasaKeterampilan::ambilSemua();
        return view('operatordesa.usahajasaketerampilan.create', ['kgusahajasaketerampilan' => $kgusahajasaketerampilan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usahajasaketerampilan = new UsahaJasaKeterampilan;
        $usahajasaketerampilan->kgusahajasaketerampilan_id = $request->kgusahajasaketerampilan_id;
        $usahajasaketerampilan->desa_id = auth()->user()->desa_id;
        $usahajasaketerampilan->jumlah = $request->jumlah;
        $usahajasaketerampilan->jenis_produk = $request->jenis_produk;
        $usahajasaketerampilan->jumlah_tenagakerja = $request->jumlah_tenagakerja;
        $usahajasaketerampilan->created_at = now();
        $usahajasaketerampilan->updated_at = now();
        $usahajasaketerampilan->save();
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
        $kgusahajasaketerampilan = KgUsahaJasaKeterampilan::ambilSemua();
        $usahajasaketerampilan = UsahaJasaKeterampilan::ambil($id);
        return view('operatordesa.usahajasaketerampilan.edit', ['kgusahajasaketerampilan' => $kgusahajasaketerampilan, 'usahajasaketerampilan' => $usahajasaketerampilan]);
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
        $usahajasaketerampilan = UsahaJasaKeterampilan::ambil($id);
        $usahajasaketerampilan->desa_id = auth()->user()->desa_id;
        $usahajasaketerampilan->kgusahajasaketerampilan_id = $request->input('kgusahajasaketerampilan_id');
        $usahajasaketerampilan->jumlah = $request->input('jumlah');
        $usahajasaketerampilan->jenis_produk = $request->input('jenis_produk');
        $usahajasaketerampilan->jumlah_tenagakerja = $request->input('jumlah_tenagakerja');
        $usahajasaketerampilan->updated_at = now();
        $usahajasaketerampilan->save();
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
        $usahajasaketerampilan = UsahaJasaKeterampilan::find($id);
        $usahajasaketerampilan->delete();
        return redirect()->route('profil-desa.edit');
    }
}
