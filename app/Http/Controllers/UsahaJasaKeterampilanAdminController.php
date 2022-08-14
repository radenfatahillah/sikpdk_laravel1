<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgUsahaJasaKeterampilan;
use App\UsahaJasaKeterampilan;
use Illuminate\Http\Request;

class UsahaJasaKeterampilanAdminController extends Controller
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
        $kgusahajasaketerampilan = KgUsahaJasaKeterampilan::ambilSemua();
        return view('admin.usahajasaketerampilan.create', ['kgusahajasaketerampilan' => $kgusahajasaketerampilan, 'desa_id' => $desa_id]);
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
        $usahajasaketerampilan->desa_id = $request->desa_id;
        $usahajasaketerampilan->jumlah = $request->jumlah;
        $usahajasaketerampilan->jenis_produk = $request->jenis_produk;
        $usahajasaketerampilan->jumlah_tenagakerja = $request->jumlah_tenagakerja;
        $usahajasaketerampilan->created_at = now();
        $usahajasaketerampilan->updated_at = now();
        $usahajasaketerampilan->save();
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
        $kgusahajasaketerampilan = KgUsahaJasaKeterampilan::ambilSemua();
        $usahajasaketerampilan = UsahaJasaKeterampilan::ambil($id);
        return view('admin.usahajasaketerampilan.edit', ['kgusahajasaketerampilan' => $kgusahajasaketerampilan, 'usahajasaketerampilan' => $usahajasaketerampilan]);
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
        $usahajasaketerampilan->desa_id = $request->input('desa_id');
        $usahajasaketerampilan->kgusahajasaketerampilan_id = $request->input('kgusahajasaketerampilan_id');
        $usahajasaketerampilan->jumlah = $request->input('jumlah');
        $usahajasaketerampilan->jenis_produk = $request->input('jenis_produk');
        $usahajasaketerampilan->jumlah_tenagakerja = $request->input('jumlah_tenagakerja');
        $usahajasaketerampilan->updated_at = now();
        $usahajasaketerampilan->save();
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
        $usahajasaketerampilan = UsahaJasaKeterampilan::find($id);
        $usahajasaketerampilan->delete();
        return redirect()->back();
    }
}
