<?php

namespace App\Http\Controllers;

use App\PrasaranaHiburanWisata;
use App\KgPrasaranaHiburanWisata;
use Illuminate\Http\Request;

class PrasaranaHiburanWisataController extends Controller
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
        $kgprasaranahiburanwisata = KgPrasaranaHiburanWisata::ambilSemua();
        return view('operatordesa.prasaranahiburanwisata.create', ['kgprasaranahiburanwisata' => $kgprasaranahiburanwisata]);
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
        $prasaranahiburanwisata->desa_id = auth()->user()->desa_id;
        $prasaranahiburanwisata->jumlah = $request->jumlah;
        $prasaranahiburanwisata->created_at = now();
        $prasaranahiburanwisata->updated_at = now();
        $prasaranahiburanwisata->save();
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
        $kgprasaranahiburanwisata = KgPrasaranaHiburanWisata::ambilSemua();
        $prasaranahiburanwisata = PrasaranaHiburanWisata::ambil($id);
        return view('operatordesa.prasaranahiburanwisata.edit', ['kgprasaranahiburanwisata' => $kgprasaranahiburanwisata, 'prasaranahiburanwisata' => $prasaranahiburanwisata]);
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
        $prasaranahiburanwisata->desa_id = auth()->user()->desa_id;
        $prasaranahiburanwisata->kgprasaranahiburanwisata_id = $request->input('kgprasaranahiburanwisata_id');
        $prasaranahiburanwisata->jumlah = $request->input('jumlah');
        $prasaranahiburanwisata->updated_at = now();
        $prasaranahiburanwisata->save();
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
        $prasaranahiburanwisata = PrasaranaHiburanWisata::find($id);
        $prasaranahiburanwisata->delete();
        return redirect()->route('profil-desa.edit');
    }
}
