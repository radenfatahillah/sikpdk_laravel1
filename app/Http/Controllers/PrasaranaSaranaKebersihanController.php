<?php

namespace App\Http\Controllers;

use App\PrasaranaSaranaKebersihan;
use App\KgPrasaranaSaranaKebersihan;
use Illuminate\Http\Request;

class PrasaranaSaranaKebersihanController extends Controller
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
        $kgprasaranasaranakebersihan = KgPrasaranaSaranaKebersihan::ambilSemua();
        return view('operatordesa.prasaranasaranakebersihan.create', ['kgprasaranasaranakebersihan' => $kgprasaranasaranakebersihan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prasaranasaranakebersihan = new PrasaranaSaranaKebersihan;
        $prasaranasaranakebersihan->kgprasaranasaranakebersihan_id = $request->kgprasaranasaranakebersihan_id;
        $prasaranasaranakebersihan->desa_id = auth()->user()->desa_id;
        $prasaranasaranakebersihan->jumlah = $request->jumlah;
        $prasaranasaranakebersihan->created_at = now();
        $prasaranasaranakebersihan->updated_at = now();
        $prasaranasaranakebersihan->save();
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
        $kgprasaranasaranakebersihan = KgPrasaranaSaranaKebersihan::ambilSemua();
        $prasaranasaranakebersihan = PrasaranaSaranaKebersihan::ambil($id);
        return view('operatordesa.prasaranasaranakebersihan.edit', ['kgprasaranasaranakebersihan' => $kgprasaranasaranakebersihan, 'prasaranasaranakebersihan' => $prasaranasaranakebersihan]);
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
        $prasaranasaranakebersihan = PrasaranaSaranaKebersihan::ambil($id);
        $prasaranasaranakebersihan->desa_id = auth()->user()->desa_id;
        $prasaranasaranakebersihan->kgprasaranasaranakebersihan_id = $request->input('kgprasaranasaranakebersihan_id');
        $prasaranasaranakebersihan->jumlah = $request->input('jumlah');
        $prasaranasaranakebersihan->updated_at = now();
        $prasaranasaranakebersihan->save();
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
        $prasaranasaranakebersihan = PrasaranaSaranaKebersihan::find($id);
        $prasaranasaranakebersihan->delete();
        return redirect()->route('profil-desa.edit');
    }
}
