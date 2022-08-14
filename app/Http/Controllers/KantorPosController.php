<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KantorPos;
use App\KgKantorPos;

class KantorPosController extends Controller
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
        $kgkantorpos = KgKantorPos::ambilSemua();
        return view('operatordesa.kantorpos.create', ['kgkantorpos' => $kgkantorpos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kantorpos = new KantorPos;
        $kantorpos->kgkantorpos_id = $request->kgkantorpos_id;
        $kantorpos->desa_id = auth()->user()->desa_id;
        $kantorpos->jumlah = $request->jumlah;
        $kantorpos->created_at = now();
        $kantorpos->updated_at = now();
        $kantorpos->save();
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
        $kgkantorpos = KgKantorPos::ambilSemua();
        $kantorpos = KantorPos::ambil($id);
        return view('operatordesa.kantorpos.edit', ['kgkantorpos' => $kgkantorpos, 'kantorpos' => $kantorpos]);
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
        $kantorpos = KantorPos::ambil($id);
        $kantorpos->desa_id = auth()->user()->desa_id;
        $kantorpos->kgkantorpos_id = $request->input('kgkantorpos_id');
        $kantorpos->jumlah = $request->input('jumlah');
        $kantorpos->updated_at = now();
        $kantorpos->save();
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
        $kantorpos = KantorPos::find($id);
        $kantorpos->delete();
        return redirect()->route('profil-desa.edit');
    }
}
