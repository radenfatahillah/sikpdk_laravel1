<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PotensiAirSda;
use App\KgPotensiAirSda;

class PotensiAirSdaController extends Controller
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
        $kgpotensiairsda = KgPotensiAirSda::ambilSemua();
        return view('operatordesa.potensiairsda.create', ['kgpotensiairsda' => $kgpotensiairsda]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $potensiairsda = new PotensiAirSda;
        $potensiairsda->kgpotensiairsda_id = $request->kgpotensiairsda_id;
        $potensiairsda->desa_id = auth()->user()->desa_id;
        $potensiairsda->debit = $request->debit;
        $potensiairsda->created_at = now();
        $potensiairsda->updated_at = now();
        $potensiairsda->save();
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
        $kgpotensiairsda = KgPotensiAirSda::ambilSemua();
        $potensiairsda = PotensiAirSda::ambil($id);
        return view('operatordesa.potensiairsda.edit', ['kgpotensiairsda' => $kgpotensiairsda, 'potensiairsda' => $potensiairsda]);
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
        $potensiairsda = PotensiAirSda::ambil($id);
        $potensiairsda->desa_id = auth()->user()->desa_id;
        $potensiairsda->kgpotensiairsda_id = $request->input('kgpotensiairsda_id');
        $potensiairsda->debit = $request->input('debit');
        $potensiairsda->updated_at = now();
        $potensiairsda->save();
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
        $potensiairsda = PotensiAirSda::find($id);
        $potensiairsda->delete();
        return redirect()->route('profil-desa.edit');
    }
}
