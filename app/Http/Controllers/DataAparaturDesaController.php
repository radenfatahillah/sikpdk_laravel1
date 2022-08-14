<?php

namespace App\Http\Controllers;

use App\Alamat;
use App\AparaturDesa;
use App\BPD;
use App\Desa;
use App\PerangkatDesa;
use Illuminate\Http\Request;

class DataAparaturDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desa = Desa::get();
        return view('admin.data-aparatur-desa.index', compact('desa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($desa_id)
    {
        $perangkatdesa = PerangkatDesa::where('desa_id', $desa_id)->get();
        $bpddesa = BPD::where('desa_id', $desa_id)->get();
        $alamat = Alamat::where('desa_id', $desa_id)->get();
        $desa = Desa::where('id', $desa_id)->get();
        $aparaturdesa = AparaturDesa::where('desa_id', $desa_id)->first();
        return view('admin.data-aparatur-desa.edit', ['perangkatdesa' => $perangkatdesa, 'bpddesa' => $bpddesa, 'alamat' => $alamat, 'desa' => $desa, 'aparaturdesa' => $aparaturdesa]);
    }

    public function updateAparaturDesa(Request $request, $desa_id)
    {
        $aparaturdesa = AparaturDesa::updateOrCreate([
            'desa_id' => $desa_id,
        ], [
            'dasarhukumperdes' => $request->dasarhukumperdes,
            'dasarhukumbpd' => $request->dasarhukumbpd,
            'keberadaanbpd' => $request->keberadaanbpd,
        ]);
        return redirect()->back();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
