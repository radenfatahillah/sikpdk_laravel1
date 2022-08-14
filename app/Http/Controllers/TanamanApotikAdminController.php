<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgTanamanApotik;
use App\TanamanApotik;
use Illuminate\Http\Request;

class TanamanApotikAdminController extends Controller
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
        $kgtanamanapotik = KgTanamanApotik::ambilSemua();
        return view('admin.tanamanapotik.create', ['kgtanamanapotik' => $kgtanamanapotik, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tanamanapotik = new TanamanApotik;
        $tanamanapotik->kgtanamanapotik_id = $request->kgtanamanapotik_id;
        $tanamanapotik->desa_id = $request->desa_id;
        $tanamanapotik->luas = $request->luas;
        $tanamanapotik->hasil = $request->hasil;
        $tanamanapotik->created_at = now();
        $tanamanapotik->updated_at = now();
        $tanamanapotik->save();
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
        $kgtanamanapotik = KgTanamanApotik::ambilSemua();
        $tanamanapotik = TanamanApotik::ambil($id);
        return view('admin.tanamanapotik.edit', ['kgtanamanapotik' => $kgtanamanapotik, 'tanamanapotik' => $tanamanapotik]);
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
        $tanamanapotik = TanamanApotik::ambil($id);
        $tanamanapotik->desa_id = $request->input('desa_id');
        $tanamanapotik->kgtanamanapotik_id = $request->input('kgtanamanapotik_id');
        $tanamanapotik->luas = $request->input('luas');
        $tanamanapotik->hasil = $request->input('hasil');
        $tanamanapotik->updated_at = now();
        $tanamanapotik->save();
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
        $tanamanapotik = TanamanApotik::find($id);
        $tanamanapotik->delete();
        return redirect()->back();
    }
}
