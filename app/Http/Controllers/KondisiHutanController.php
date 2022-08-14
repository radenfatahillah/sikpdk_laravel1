<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KondisiHutan;
use App\KgKondisiHutan;

class KondisiHutanController extends Controller
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
        $kgkondisihutan = KgKondisiHutan::ambilSemua();
        return view('operatordesa.kondisihutan.create', ['kgkondisihutan' => $kgkondisihutan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kondisihutan = new KondisiHutan;
        $kondisihutan->kgkondisihutan_id = $request->kgkondisihutan_id;
        $kondisihutan->desa_id = auth()->user()->desa_id;
        $kondisihutan->baik = $request->baik;
        $kondisihutan->rusak = $request->rusak;
        $kondisihutan->total = $request->baik + $request->rusak;
        $kondisihutan->created_at = now();
        $kondisihutan->updated_at = now();
        $kondisihutan->save();
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
        $kgkondisihutan = KgKondisiHutan::ambilSemua();
        $kondisihutan = KondisiHutan::ambil($id);
        return view('operatordesa.kondisihutan.edit', ['kgkondisihutan' => $kgkondisihutan, 'kondisihutan' => $kondisihutan]);
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
        $kondisihutan = KondisiHutan::ambil($id);
        $kondisihutan->desa_id = auth()->user()->desa_id;
        $kondisihutan->kgkondisihutan_id = $request->input('kgkondisihutan_id');
        $kondisihutan->baik = $request->input('baik');
        $kondisihutan->rusak = $request->input('rusak');
        $kondisihutan->total = $request->input('baik') + $request->input('rusak');
        $kondisihutan->updated_at = now();
        $kondisihutan->save();
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
        $kondisihutan = KondisiHutan::find($id);
        $kondisihutan->delete();
        return redirect()->route('profil-desa.edit');
    }
}
