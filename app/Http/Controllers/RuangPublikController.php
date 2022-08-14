<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KgRuangPublik;
use App\RuangPublik;

class RuangPublikController extends Controller
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
        $kgruangpublik = KgRuangPublik::ambilSemua();
        return view('operatordesa.ruangpublik.create', ['kgruangpublik' => $kgruangpublik]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ruangpublik = new RuangPublik;
        $ruangpublik->kgruangpublik_id = $request->kgruangpublik_id;
        $ruangpublik->desa_id = auth()->user()->desa_id;
        $ruangpublik->keberadaan = $request->keberadaan;
        $ruangpublik->luas = $request->luas;
        $ruangpublik->status = $request->status;
        $ruangpublik->created_at = now();
        $ruangpublik->updated_at = now();
        $ruangpublik->save();
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
        $kgruangpublik = KgRuangPublik::ambilSemua();
        $ruangpublik = RuangPublik::ambil($id);
        return view('operatordesa.ruangpublik.edit', ['kgruangpublik' => $kgruangpublik, 'ruangpublik' => $ruangpublik]);
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
        $ruangpublik = RuangPublik::ambil($id);
        $ruangpublik->desa_id = auth()->user()->desa_id;
        $ruangpublik->kgruangpublik_id = $request->input('kgruangpublik_id');
        $ruangpublik->keberadaan = $request->input('keberadaan');
        $ruangpublik->luas = $request->input('luas');
        $ruangpublik->status = $request->input('status');
        $ruangpublik->updated_at = now();
        $ruangpublik->save();
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
        $ruangpublik = RuangPublik::find($id);
        $ruangpublik->delete();
        return redirect()->route('profil-desa.edit');
    }
}
