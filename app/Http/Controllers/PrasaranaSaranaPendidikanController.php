<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KgPrasaranaSaranaPendidikan;
use App\PrasaranaSaranaPendidikan;

class PrasaranaSaranaPendidikanController extends Controller
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
        $kgprasaranasaranapendidikan = KgPrasaranaSaranaPendidikan::ambilSemua();
        return view('operatordesa.prasaranasaranapendidikan.create', ['kgprasaranasaranapendidikan' => $kgprasaranasaranapendidikan]);
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
        $prasaranasaranapendidikan->desa_id = auth()->user()->desa_id;
        $prasaranasaranapendidikan->sewa = $request->sewa;
        $prasaranasaranapendidikan->milik_sendiri = $request->milik_sendiri;
        $prasaranasaranapendidikan->created_at = now();
        $prasaranasaranapendidikan->updated_at = now();
        $prasaranasaranapendidikan->save();
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
        $kgprasaranasaranapendidikan = KgPrasaranaSaranaPendidikan::ambilSemua();
        $prasaranasaranapendidikan = PrasaranaSaranaPendidikan::ambil($id);
        return view('operatordesa.prasaranasaranapendidikan.edit', ['kgprasaranasaranapendidikan' => $kgprasaranasaranapendidikan, 'prasaranasaranapendidikan' => $prasaranasaranapendidikan]);
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
        $prasaranasaranapendidikan->desa_id = auth()->user()->desa_id;
        $prasaranasaranapendidikan->kgprasaranasaranapendidikan_id = $request->input('kgprasaranasaranapendidikan_id');
        $prasaranasaranapendidikan->sewa = $request->input('sewa');
        $prasaranasaranapendidikan->milik_sendiri = $request->input('milik_sendiri');
        $prasaranasaranapendidikan->updated_at = now();
        $prasaranasaranapendidikan->save();
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
        $prasaranasaranapendidikan = PrasaranaSaranaPendidikan::find($id);
        $prasaranasaranapendidikan->delete();
        return redirect()->route('profil-desa.edit');
    }
}
