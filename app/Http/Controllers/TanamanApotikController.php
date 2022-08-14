<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TanamanApotik;
use App\KgTanamanApotik;

class TanamanApotikController extends Controller
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
        $kgtanamanapotik = KgTanamanApotik::ambilSemua();
        return view('operatordesa.tanamanapotik.create', ['kgtanamanapotik' => $kgtanamanapotik]);
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
        $tanamanapotik->desa_id = auth()->user()->desa_id;
        $tanamanapotik->luas = $request->luas;
        $tanamanapotik->hasil = $request->hasil;
        $tanamanapotik->created_at = now();
        $tanamanapotik->updated_at = now();
        $tanamanapotik->save();
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
        $kgtanamanapotik = KgTanamanApotik::ambilSemua();
        $tanamanapotik = TanamanApotik::ambil($id);
        return view('operatordesa.tanamanapotik.edit', ['kgtanamanapotik' => $kgtanamanapotik, 'tanamanapotik' => $tanamanapotik]);
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
        $tanamanapotik->desa_id = auth()->user()->desa_id;
        $tanamanapotik->kgtanamanapotik_id = $request->input('kgtanamanapotik_id');
        $tanamanapotik->luas = $request->input('luas');
        $tanamanapotik->hasil = $request->input('hasil');
        $tanamanapotik->updated_at = now();
        $tanamanapotik->save();
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
        $tanamanapotik = TanamanApotik::find($id);
        $tanamanapotik->delete();
        return redirect()->route('profil-desa.edit');
    }
}
