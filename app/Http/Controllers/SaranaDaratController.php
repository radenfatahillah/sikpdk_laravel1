<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SaranaDarat;
use App\KgSaranaDarat;

class SaranaDaratController extends Controller
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
        $kgsaranadarat = KgSaranaDarat::ambilSemua();
        return view('operatordesa.saranadarat.create', ['kgsaranadarat' => $kgsaranadarat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saranadarat = new SaranaDarat;
        $saranadarat->kgsaranadarat_id = $request->kgsaranadarat_id;
        $saranadarat->desa_id = auth()->user()->desa_id;
        $saranadarat->keberadaan = $request->keberadaan;
        $saranadarat->jumlah = $request->jumlah;
        $saranadarat->created_at = now();
        $saranadarat->updated_at = now();
        $saranadarat->save();
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
        $kgsaranadarat = KgSaranaDarat::ambilSemua();
        $saranadarat = SaranaDarat::ambil($id);
        return view('operatordesa.saranadarat.edit', ['kgsaranadarat' => $kgsaranadarat, 'saranadarat' => $saranadarat]);
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
        $saranadarat = SaranaDarat::ambil($id);
        $saranadarat->desa_id = auth()->user()->desa_id;
        $saranadarat->kgsaranadarat_id = $request->input('kgsaranadarat_id');
        $saranadarat->keberadaan = $request->input('keberadaan');
        $saranadarat->jumlah = $request->input('jumlah');
        $saranadarat->updated_at = now();
        $saranadarat->save();
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
        $saranadarat = SaranaDarat::find($id);
        $saranadarat->delete();
        return redirect()->route('profil-desa.edit');
    }
}
