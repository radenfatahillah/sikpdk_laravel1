<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KantorPos;
use App\KgKantorPos;
use Illuminate\Http\Request;

class KantorPosAdminController extends Controller
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
        $kgkantorpos = KgKantorPos::ambilSemua();
        return view('admin.kantorpos.create', ['kgkantorpos' => $kgkantorpos, 'desa_id' => $desa_id]);
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
        $kantorpos->desa_id = $request->desa_id;
        $kantorpos->jumlah = $request->jumlah;
        $kantorpos->created_at = now();
        $kantorpos->updated_at = now();
        $kantorpos->save();
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
        $kgkantorpos = KgKantorPos::ambilSemua();
        $kantorpos = KantorPos::ambil($id);
        return view('admin.kantorpos.edit', ['kgkantorpos' => $kgkantorpos, 'kantorpos' => $kantorpos]);
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
        $kantorpos->desa_id = $request->input('desa_id');
        $kantorpos->kgkantorpos_id = $request->input('kgkantorpos_id');
        $kantorpos->jumlah = $request->input('jumlah');
        $kantorpos->updated_at = now();
        $kantorpos->save();
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
        $kantorpos = KantorPos::find($id);
        $kantorpos->delete();
        return redirect()->back();
    }
}
