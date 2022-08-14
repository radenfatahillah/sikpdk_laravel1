<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgPrasaranaOlahraga;
use App\PrasaranaOlahraga;
use Illuminate\Http\Request;

class PrasaranaOlahragaAdminController extends Controller
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
        $kgprasaranaolahraga = KgPrasaranaOlahraga::ambilSemua();
        return view('admin.prasaranaolahraga.create', ['kgprasaranaolahraga' => $kgprasaranaolahraga, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prasaranaolahraga = new PrasaranaOlahraga;
        $prasaranaolahraga->kgprasaranaolahraga_id = $request->kgprasaranaolahraga_id;
        $prasaranaolahraga->desa_id = $request->desa_id;
        $prasaranaolahraga->jumlah = $request->jumlah;
        $prasaranaolahraga->created_at = now();
        $prasaranaolahraga->updated_at = now();
        $prasaranaolahraga->save();
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
        $kgprasaranaolahraga = KgPrasaranaOlahraga::ambilSemua();
        $prasaranaolahraga = PrasaranaOlahraga::ambil($id);
        return view('admin.prasaranaolahraga.edit', ['kgprasaranaolahraga' => $kgprasaranaolahraga, 'prasaranaolahraga' => $prasaranaolahraga]);
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
        $prasaranaolahraga = PrasaranaOlahraga::ambil($id);
        $prasaranaolahraga->desa_id = $request->input('desa_id');
        $prasaranaolahraga->kgprasaranaolahraga_id = $request->input('kgprasaranaolahraga_id');
        $prasaranaolahraga->jumlah = $request->input('jumlah');
        $prasaranaolahraga->updated_at = now();
        $prasaranaolahraga->save();
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
        $prasaranaolahraga = PrasaranaOlahraga::find($id);
        $prasaranaolahraga->delete();
        return redirect()->back();
    }
}
