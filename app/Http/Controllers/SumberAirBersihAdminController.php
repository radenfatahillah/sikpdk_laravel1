<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgSumberAirBersih;
use App\SumberAirBersih;
use Illuminate\Http\Request;

class SumberAirBersihAdminController extends Controller
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
        $kgsumberairbersih = KgSumberAirBersih::ambilSemua();
        return view('admin.sumberairbersih.create', ['kgsumberairbersih' => $kgsumberairbersih, 'desa_id' => $desa_id]);
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
        $sumberairbersih->desa_id = $request->desa_id;
        $sumberairbersih->jumlah = $request->jumlah;
        $sumberairbersih->kondisi = $request->kondisi;
        $sumberairbersih->pemanfaatan = $request->pemanfaatan;
        $sumberairbersih->kualitas = $request->kualitas;
        $sumberairbersih->created_at = now();
        $sumberairbersih->updated_at = now();
        $sumberairbersih->save();
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
        $kgsumberairbersih = KgSumberAirBersih::ambilSemua();
        $sumberairbersih = SumberAirBersih::ambil($id);
        return view('admin.sumberairbersih.edit', ['kgsumberairbersih' => $kgsumberairbersih, 'sumberairbersih' => $sumberairbersih]);
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
        $sumberairbersih->desa_id = $request->input('desa_id');
        $sumberairbersih->kgsumberairbersih_id = $request->input('kgsumberairbersih_id');
        $sumberairbersih->jumlah = $request->input('jumlah');
        $sumberairbersih->kondisi = $request->input('kondisi');
        $sumberairbersih->pemanfaatan = $request->input('pemanfaatan');
        $sumberairbersih->kualitas = $request->input('kualitas');
        $sumberairbersih->updated_at = now();
        $sumberairbersih->save();
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
        $sumberairbersih = SumberAirBersih::find($id);
        $sumberairbersih->delete();
        return redirect()->back();
    }
}
