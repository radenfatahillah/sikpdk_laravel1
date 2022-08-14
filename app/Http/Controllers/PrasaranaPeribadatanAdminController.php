<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgPrasaranaPeribadatan;
use App\PrasaranaPeribadatan;
use Illuminate\Http\Request;

class PrasaranaPeribadatanAdminController extends Controller
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
        $kgprasaranaperibadatan = KgPrasaranaPeribadatan::ambilSemua();
        return view('admin.prasaranaperibadatan.create', ['kgprasaranaperibadatan' => $kgprasaranaperibadatan, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prasaranaperibadatan = new PrasaranaPeribadatan;
        $prasaranaperibadatan->kgprasaranaperibadatan_id = $request->kgprasaranaperibadatan_id;
        $prasaranaperibadatan->desa_id = $request->desa_id;
        $prasaranaperibadatan->jumlah = $request->jumlah;
        $prasaranaperibadatan->created_at = now();
        $prasaranaperibadatan->updated_at = now();
        $prasaranaperibadatan->save();
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
        $kgprasaranaperibadatan = KgPrasaranaPeribadatan::ambilSemua();
        $prasaranaperibadatan = PrasaranaPeribadatan::ambil($id);
        return view('admin.prasaranaperibadatan.edit', ['kgprasaranaperibadatan' => $kgprasaranaperibadatan, 'prasaranaperibadatan' => $prasaranaperibadatan]);
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
        $prasaranaperibadatan = PrasaranaPeribadatan::ambil($id);
        $prasaranaperibadatan->desa_id = $request->input('desa_id');
        $prasaranaperibadatan->kgprasaranaperibadatan_id = $request->input('kgprasaranaperibadatan_id');
        $prasaranaperibadatan->jumlah = $request->input('jumlah');
        $prasaranaperibadatan->updated_at = now();
        $prasaranaperibadatan->save();
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
        $prasaranaperibadatan = PrasaranaPeribadatan::find($id);
        $prasaranaperibadatan->delete();
        return redirect()->back();
    }
}
