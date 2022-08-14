<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgUsahaJasaPerdagangan;
use App\UsahaJasaPerdagangan;
use Illuminate\Http\Request;

class UsahaJasaPerdaganganAdminController extends Controller
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
        $kgusahajasaperdagangan = KgUsahaJasaPerdagangan::ambilSemua();
        return view('admin.usahajasaperdagangan.create', ['kgusahajasaperdagangan' => $kgusahajasaperdagangan, 'desa_id' => $desa_id]);
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
        $usahajasaperdagangan->desa_id = $request->desa_id;
        $usahajasaperdagangan->jumlah = $request->jumlah;
        $usahajasaperdagangan->jenis_produk = $request->jenis_produk;
        $usahajasaperdagangan->jumlah_tenagakerja = $request->jumlah_tenagakerja;
        $usahajasaperdagangan->created_at = now();
        $usahajasaperdagangan->updated_at = now();
        $usahajasaperdagangan->save();
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
        $kgusahajasaperdagangan = KgUsahaJasaPerdagangan::ambilSemua();
        $usahajasaperdagangan = UsahaJasaPerdagangan::ambil($id);
        return view('admin.usahajasaperdagangan.edit', ['kgusahajasaperdagangan' => $kgusahajasaperdagangan, 'usahajasaperdagangan' => $usahajasaperdagangan]);
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
        $usahajasaperdagangan->desa_id = $request->input('desa_id');
        $usahajasaperdagangan->kgusahajasaperdagangan_id = $request->input('kgusahajasaperdagangan_id');
        $usahajasaperdagangan->jumlah = $request->input('jumlah');
        $usahajasaperdagangan->jenis_produk = $request->input('jenis_produk');
        $usahajasaperdagangan->jumlah_tenagakerja = $request->input('jumlah_tenagakerja');
        $usahajasaperdagangan->updated_at = now();
        $usahajasaperdagangan->save();
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
        $usahajasaperdagangan = UsahaJasaPerdagangan::find($id);
        $usahajasaperdagangan->delete();
        return redirect()->back();
    }
}
