<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KgSumberAirBersih;
use App\SumberAirBersih;

class SumberAirBersihController extends Controller
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
        $kgsumberairbersih = KgSumberAirBersih::ambilSemua();
        return view('operatordesa.sumberairbersih.create', ['kgsumberairbersih' => $kgsumberairbersih]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sumberairbersih = new SumberAirBersih;
        $sumberairbersih->kgsumberairbersih_id = $request->kgsumberairbersih_id;
        $sumberairbersih->desa_id = auth()->user()->desa_id;
        $sumberairbersih->jumlah = $request->jumlah;
        $sumberairbersih->kondisi = $request->kondisi;
        $sumberairbersih->pemanfaatan = $request->pemanfaatan;
        $sumberairbersih->kualitas = $request->kualitas;
        $sumberairbersih->created_at = now();
        $sumberairbersih->updated_at = now();
        $sumberairbersih->save();
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
        $kgsumberairbersih = KgSumberAirBersih::ambilSemua();
        $sumberairbersih = SumberAirBersih::ambil($id);
        return view('operatordesa.sumberairbersih.edit', ['kgsumberairbersih' => $kgsumberairbersih, 'sumberairbersih' => $sumberairbersih]);
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
        $sumberairbersih = SumberAirBersih::ambil($id);
        $sumberairbersih->desa_id = auth()->user()->desa_id;
        $sumberairbersih->kgsumberairbersih_id = $request->input('kgsumberairbersih_id');
        $sumberairbersih->jumlah = $request->input('jumlah');
        $sumberairbersih->kondisi = $request->input('kondisi');
        $sumberairbersih->pemanfaatan = $request->input('pemanfaatan');
        $sumberairbersih->kualitas = $request->input('kualitas');
        $sumberairbersih->updated_at = now();
        $sumberairbersih->save();
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
        $sumberairbersih = SumberAirBersih::find($id);
        $sumberairbersih->delete();
        return redirect()->route('profil-desa.edit');
    }
}
