<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgPrasaranaSaranaPendidikan;
use App\PrasaranaSaranaPendidikan;
use Illuminate\Http\Request;

class PrasaranaSaranaPendidikanAdminController extends Controller
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
        $kgprasaranasaranapendidikan = KgPrasaranaSaranaPendidikan::ambilSemua();
        return view('admin.prasaranasaranapendidikan.create', ['kgprasaranasaranapendidikan' => $kgprasaranasaranapendidikan, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prasaranasaranapendidikan = new PrasaranaSaranaPendidikan;
        $prasaranasaranapendidikan->kgprasaranasaranapendidikan_id = $request->kgprasaranasaranapendidikan_id;
        $prasaranasaranapendidikan->desa_id = $request->desa_id;
        $prasaranasaranapendidikan->sewa = $request->sewa;
        $prasaranasaranapendidikan->milik_sendiri = $request->milik_sendiri;
        $prasaranasaranapendidikan->created_at = now();
        $prasaranasaranapendidikan->updated_at = now();
        $prasaranasaranapendidikan->save();
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
        $kgprasaranasaranapendidikan = KgPrasaranaSaranaPendidikan::ambilSemua();
        $prasaranasaranapendidikan = PrasaranaSaranaPendidikan::ambil($id);
        return view('admin.prasaranasaranapendidikan.edit', ['kgprasaranasaranapendidikan' => $kgprasaranasaranapendidikan, 'prasaranasaranapendidikan' => $prasaranasaranapendidikan]);
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
        $prasaranasaranapendidikan = PrasaranaSaranaPendidikan::ambil($id);
        $prasaranasaranapendidikan->desa_id = $request->input('desa_id');
        $prasaranasaranapendidikan->kgprasaranasaranapendidikan_id = $request->input('kgprasaranasaranapendidikan_id');
        $prasaranasaranapendidikan->sewa = $request->input('sewa');
        $prasaranasaranapendidikan->milik_sendiri = $request->input('milik_sendiri');
        $prasaranasaranapendidikan->updated_at = now();
        $prasaranasaranapendidikan->save();
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
        $prasaranasaranapendidikan = PrasaranaSaranaPendidikan::find($id);
        $prasaranasaranapendidikan->delete();
        return redirect()->back();
    }
}
