<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SaranaLaut;
use App\KgSaranaLaut;

class SaranaLautController extends Controller
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
        $kgsaranalaut = KgSaranaLaut::ambilSemua();
        return view('operatordesa.saranalaut.create', ['kgsaranalaut' => $kgsaranalaut]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saranalaut = new SaranaLaut;
        $saranalaut->kgsaranalaut_id = $request->kgsaranalaut_id;
        $saranalaut->desa_id = auth()->user()->desa_id;
        $saranalaut->jumlah = $request->jumlah;
        $saranalaut->created_at = now();
        $saranalaut->updated_at = now();
        $saranalaut->save();
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
        $kgsaranalaut = KgSaranaLaut::ambilSemua();
        $saranalaut = SaranaLaut::ambil($id);
        return view('operatordesa.saranalaut.edit', ['kgsaranalaut' => $kgsaranalaut, 'saranalaut' => $saranalaut]);
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
        $saranalaut = SaranaLaut::ambil($id);
        $saranalaut->desa_id = auth()->user()->desa_id;
        $saranalaut->kgsaranalaut_id = $request->input('kgsaranalaut_id');
        $saranalaut->jumlah = $request->input('jumlah');
        $saranalaut->updated_at = now();
        $saranalaut->save();
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
        $saranalaut = SaranaLaut::find($id);
        $saranalaut->delete();
        return redirect()->route('profil-desa.edit');
    }
}
