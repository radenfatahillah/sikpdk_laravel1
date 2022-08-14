<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgPrasaranaHiburanWisata;
use App\PrasaranaHiburanWisata;
use Illuminate\Http\Request;

class PrasaranaHiburanWisataAdminController extends Controller
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
        $kgprasaranahiburanwisata = KgPrasaranaHiburanWisata::ambilSemua();
        return view('admin.prasaranahiburanwisata.create', ['kgprasaranahiburanwisata' => $kgprasaranahiburanwisata, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prasaranahiburanwisata = new PrasaranaHiburanWisata;
        $prasaranahiburanwisata->kgprasaranahiburanwisata_id = $request->kgprasaranahiburanwisata_id;
        $prasaranahiburanwisata->desa_id = $request->desa_id;
        $prasaranahiburanwisata->jumlah = $request->jumlah;
        $prasaranahiburanwisata->created_at = now();
        $prasaranahiburanwisata->updated_at = now();
        $prasaranahiburanwisata->save();
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
        $kgprasaranahiburanwisata = KgPrasaranaHiburanWisata::ambilSemua();
        $prasaranahiburanwisata = PrasaranaHiburanWisata::ambil($id);
        return view('admin.prasaranahiburanwisata.edit', ['kgprasaranahiburanwisata' => $kgprasaranahiburanwisata, 'prasaranahiburanwisata' => $prasaranahiburanwisata]);
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
        $prasaranahiburanwisata = PrasaranaHiburanWisata::ambil($id);
        $prasaranahiburanwisata->desa_id = $request->input('desa_id');
        $prasaranahiburanwisata->kgprasaranahiburanwisata_id = $request->input('kgprasaranahiburanwisata_id');
        $prasaranahiburanwisata->jumlah = $request->input('jumlah');
        $prasaranahiburanwisata->updated_at = now();
        $prasaranahiburanwisata->save();
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
        $prasaranahiburanwisata = PrasaranaHiburanWisata::find($id);
        $prasaranahiburanwisata->delete();
        return redirect()->back();
    }
}
