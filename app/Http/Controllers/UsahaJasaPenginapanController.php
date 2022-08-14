<?php

namespace App\Http\Controllers;

use App\KgUsahaJasaPenginapan;
use App\UsahaJasaPenginapan;
use Illuminate\Http\Request;

class UsahaJasaPenginapanController extends Controller
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
        $kgusahajasapenginapan = KgUsahaJasaPenginapan::ambilSemua();
        return view('operatordesa.usahajasapenginapan.create', ['kgusahajasapenginapan' => $kgusahajasapenginapan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usahajasapenginapan = new UsahaJasaPenginapan;
        $usahajasapenginapan->kgusahajasapenginapan_id = $request->kgusahajasapenginapan_id;
        $usahajasapenginapan->desa_id = auth()->user()->desa_id;
        $usahajasapenginapan->jumlah = $request->jumlah;
        $usahajasapenginapan->jenis_produk = $request->jenis_produk;
        $usahajasapenginapan->jumlah_tenagakerja = $request->jumlah_tenagakerja;
        $usahajasapenginapan->created_at = now();
        $usahajasapenginapan->updated_at = now();
        $usahajasapenginapan->save();
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
        $kgusahajasapenginapan = KgUsahaJasaPenginapan::ambilSemua();
        $usahajasapenginapan = UsahaJasaPenginapan::ambil($id);
        return view('operatordesa.usahajasapenginapan.edit', ['kgusahajasapenginapan' => $kgusahajasapenginapan, 'usahajasapenginapan' => $usahajasapenginapan]);
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
        $usahajasapenginapan = UsahaJasaPenginapan::ambil($id);
        $usahajasapenginapan->desa_id = auth()->user()->desa_id;
        $usahajasapenginapan->kgusahajasapenginapan_id = $request->input('kgusahajasapenginapan_id');
        $usahajasapenginapan->jumlah = $request->input('jumlah');
        $usahajasapenginapan->jenis_produk = $request->input('jenis_produk');
        $usahajasapenginapan->jumlah_tenagakerja = $request->input('jumlah_tenagakerja');
        $usahajasapenginapan->updated_at = now();
        $usahajasapenginapan->save();
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
        $usahajasapenginapan = UsahaJasaPenginapan::find($id);
        $usahajasapenginapan->delete();
        return redirect()->route('profil-desa.edit');
    }
}
