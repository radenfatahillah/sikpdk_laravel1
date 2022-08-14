<?php

namespace App\Http\Controllers;

use App\KgUsahaJasaPengangkutan;
use App\UsahaJasaPengangkutan;
use Illuminate\Http\Request;

class UsahaJasaPengangkutanController extends Controller
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
        $kgusahajasapengangkutan = KgUsahaJasaPengangkutan::ambilSemua();
        return view('operatordesa.usahajasapengangkutan.create', ['kgusahajasapengangkutan' => $kgusahajasapengangkutan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usahajasapengangkutan = new UsahaJasaPengangkutan;
        $usahajasapengangkutan->kgusahajasapengangkutan_id = $request->kgusahajasapengangkutan_id;
        $usahajasapengangkutan->desa_id = auth()->user()->desa_id;
        $usahajasapengangkutan->kategorijasapengangkutan = $request->kategorijasapengangkutan;
        $usahajasapengangkutan->pemilik = $request->pemilik;
        $usahajasapengangkutan->jumlah = $request->jumlah;
        $usahajasapengangkutan->kapasitas = $request->kapasitas;
        $usahajasapengangkutan->jumlah_tenagakerja = $request->jumlah_tenagakerja;
        $usahajasapengangkutan->created_at = now();
        $usahajasapengangkutan->updated_at = now();
        $usahajasapengangkutan->save();
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
        $kgusahajasapengangkutan = KgUsahaJasaPengangkutan::ambilSemua();
        $usahajasapengangkutan = UsahaJasaPengangkutan::ambil($id);
        return view('operatordesa.usahajasapengangkutan.edit', ['kgusahajasapengangkutan' => $kgusahajasapengangkutan, 'usahajasapengangkutan' => $usahajasapengangkutan]);
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
        $usahajasapengangkutan = UsahaJasaPengangkutan::ambil($id);
        $usahajasapengangkutan->desa_id = auth()->user()->desa_id;
        $usahajasapengangkutan->kgusahajasapengangkutan_id = $request->input('kgusahajasapengangkutan_id');
        $usahajasapengangkutan->kategorijasapengangkutan = $request->input('kategorijasapengangkutan');
        $usahajasapengangkutan->jumlah = $request->input('jumlah');
        $usahajasapengangkutan->pemilik = $request->input('pemilik');
        $usahajasapengangkutan->kapasitas = $request->input('kapasitas');
        $usahajasapengangkutan->jumlah_tenagakerja = $request->input('jumlah_tenagakerja');
        $usahajasapengangkutan->updated_at = now();
        $usahajasapengangkutan->save();
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
        $usahajasapengangkutan = UsahaJasaPengangkutan::find($id);
        $usahajasapengangkutan->delete();
        return redirect()->route('profil-desa.edit');
    }
}
