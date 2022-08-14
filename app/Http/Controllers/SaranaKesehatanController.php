<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SaranaKesehatan;
use App\KgSaranaKesehatan;

class SaranaKesehatanController extends Controller
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
        $kgsaranakesehatan = KgSaranaKesehatan::ambilSemua();
        return view('operatordesa.saranakesehatan.create', ['kgsaranakesehatan' => $kgsaranakesehatan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saranakesehatan = new SaranaKesehatan;
        $saranakesehatan->kgsaranakesehatan_id = $request->kgsaranakesehatan_id;
        $saranakesehatan->desa_id = auth()->user()->desa_id;
        $saranakesehatan->jumlah = $request->jumlah;
        $saranakesehatan->created_at = now();
        $saranakesehatan->updated_at = now();
        $saranakesehatan->save();
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
        $kgsaranakesehatan = KgSaranaKesehatan::ambilSemua();
        $saranakesehatan = SaranaKesehatan::ambil($id);
        return view('operatordesa.saranakesehatan.edit', ['kgsaranakesehatan' => $kgsaranakesehatan, 'saranakesehatan' => $saranakesehatan]);
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
        $saranakesehatan = SaranaKesehatan::ambil($id);
        $saranakesehatan->desa_id = auth()->user()->desa_id;
        $saranakesehatan->kgsaranakesehatan_id = $request->input('kgsaranakesehatan_id');
        $saranakesehatan->jumlah = $request->input('jumlah');
        $saranakesehatan->updated_at = now();
        $saranakesehatan->save();
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
        $saranakesehatan = SaranaKesehatan::find($id);
        $saranakesehatan->delete();
        return redirect()->route('profil-desa.edit');
    }
}
