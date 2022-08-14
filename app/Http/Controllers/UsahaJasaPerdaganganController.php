<?php

namespace App\Http\Controllers;

use App\KgUsahaJasaPerdagangan;
use App\UsahaJasaPerdagangan;
use Illuminate\Http\Request;

class UsahaJasaPerdaganganController extends Controller
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
        $kgusahajasaperdagangan = KgUsahaJasaPerdagangan::ambilSemua();
        return view('operatordesa.usahajasaperdagangan.create', ['kgusahajasaperdagangan' => $kgusahajasaperdagangan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usahajasaperdagangan = new UsahaJasaPerdagangan;
        $usahajasaperdagangan->kgusahajasaperdagangan_id = $request->kgusahajasaperdagangan_id;
        $usahajasaperdagangan->desa_id = auth()->user()->desa_id;
        $usahajasaperdagangan->jumlah = $request->jumlah;
        $usahajasaperdagangan->jenis_produk = $request->jenis_produk;
        $usahajasaperdagangan->jumlah_tenagakerja = $request->jumlah_tenagakerja;
        $usahajasaperdagangan->created_at = now();
        $usahajasaperdagangan->updated_at = now();
        $usahajasaperdagangan->save();
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
        $kgusahajasaperdagangan = KgUsahaJasaPerdagangan::ambilSemua();
        $usahajasaperdagangan = UsahaJasaPerdagangan::ambil($id);
        return view('operatordesa.usahajasaperdagangan.edit', ['kgusahajasaperdagangan' => $kgusahajasaperdagangan, 'usahajasaperdagangan' => $usahajasaperdagangan]);
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
        $usahajasaperdagangan = UsahaJasaPerdagangan::ambil($id);
        $usahajasaperdagangan->desa_id = auth()->user()->desa_id;
        $usahajasaperdagangan->kgusahajasaperdagangan_id = $request->input('kgusahajasaperdagangan_id');
        $usahajasaperdagangan->jumlah = $request->input('jumlah');
        $usahajasaperdagangan->jenis_produk = $request->input('jenis_produk');
        $usahajasaperdagangan->jumlah_tenagakerja = $request->input('jumlah_tenagakerja');
        $usahajasaperdagangan->updated_at = now();
        $usahajasaperdagangan->save();
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
        $usahajasaperdagangan = UsahaJasaPerdagangan::find($id);
        $usahajasaperdagangan->delete();
        return redirect()->route('profil-desa.edit');
    }
}
