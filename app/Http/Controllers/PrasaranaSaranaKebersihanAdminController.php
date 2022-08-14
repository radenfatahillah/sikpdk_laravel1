<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgPrasaranaSaranaKebersihan;
use App\PrasaranaSaranaKebersihan;
use Illuminate\Http\Request;

class PrasaranaSaranaKebersihanAdminController extends Controller
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
        $kgprasaranasaranakebersihan = KgPrasaranaSaranaKebersihan::ambilSemua();
        return view('admin.prasaranasaranakebersihan.create', ['kgprasaranasaranakebersihan' => $kgprasaranasaranakebersihan, 'desa_id' => $desa_id]);
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
        $prasaranasaranakebersihan->desa_id = $request->desa_id;
        $prasaranasaranakebersihan->jumlah = $request->jumlah;
        $prasaranasaranakebersihan->created_at = now();
        $prasaranasaranakebersihan->updated_at = now();
        $prasaranasaranakebersihan->save();
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
        $kgprasaranasaranakebersihan = KgPrasaranaSaranaKebersihan::ambilSemua();
        $prasaranasaranakebersihan = PrasaranaSaranaKebersihan::ambil($id);
        return view('admin.prasaranasaranakebersihan.edit', ['kgprasaranasaranakebersihan' => $kgprasaranasaranakebersihan, 'prasaranasaranakebersihan' => $prasaranasaranakebersihan]);
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
        $prasaranasaranakebersihan->desa_id = $request->input('desa_id');
        $prasaranasaranakebersihan->kgprasaranasaranakebersihan_id = $request->input('kgprasaranasaranakebersihan_id');
        $prasaranasaranakebersihan->jumlah = $request->input('jumlah');
        $prasaranasaranakebersihan->updated_at = now();
        $prasaranasaranakebersihan->save();
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
        $prasaranasaranakebersihan = PrasaranaSaranaKebersihan::find($id);
        $prasaranasaranakebersihan->delete();
        return redirect()->back();
    }
}
