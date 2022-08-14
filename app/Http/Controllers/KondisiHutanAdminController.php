<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgKondisiHutan;
use App\KondisiHutan;
use Illuminate\Http\Request;

class KondisiHutanAdminController extends Controller
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
        $kgkondisihutan = KgKondisiHutan::ambilSemua();
        return view('admin.kondisihutan.create', ['kgkondisihutan' => $kgkondisihutan, 'desa_id' => $desa_id]);
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
        $kondisihutan->desa_id = $request->desa_id;
        $kondisihutan->baik = $request->baik;
        $kondisihutan->rusak = $request->rusak;
        $kondisihutan->total = $request->baik + $request->rusak;
        $kondisihutan->created_at = now();
        $kondisihutan->updated_at = now();
        $kondisihutan->save();
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
        $kgkondisihutan = KgKondisiHutan::ambilSemua();
        $kondisihutan = KondisiHutan::ambil($id);
        return view('admin.kondisihutan.edit', ['kgkondisihutan' => $kgkondisihutan, 'kondisihutan' => $kondisihutan]);
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
        $kondisihutan->desa_id = $request->input('desa_id');
        $kondisihutan->kgkondisihutan_id = $request->input('kgkondisihutan_id');
        $kondisihutan->baik = $request->input('baik');
        $kondisihutan->rusak = $request->input('rusak');
        $kondisihutan->total = $request->input('baik') + $request->input('rusak');
        $kondisihutan->updated_at = now();
        $kondisihutan->save();
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
        $kondisihutan = KondisiHutan::find($id);
        $kondisihutan->delete();
        return redirect()->back();
    }
}
