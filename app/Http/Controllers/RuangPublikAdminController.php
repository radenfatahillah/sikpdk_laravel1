<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgRuangPublik;
use App\RuangPublik;
use Illuminate\Http\Request;

class RuangPublikAdminController extends Controller
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
        $kgruangpublik = KgRuangPublik::ambilSemua();
        return view('admin.ruangpublik.create', ['kgruangpublik' => $kgruangpublik, 'desa_id' => $desa_id]);
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
        $ruangpublik->desa_id = $request->desa_id;
        $ruangpublik->keberadaan = $request->keberadaan;
        $ruangpublik->luas = $request->luas;
        $ruangpublik->status = $request->status;
        $ruangpublik->created_at = now();
        $ruangpublik->updated_at = now();
        $ruangpublik->save();
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
        $kgruangpublik = KgRuangPublik::ambilSemua();
        $ruangpublik = RuangPublik::ambil($id);
        return view('admin.ruangpublik.edit', ['kgruangpublik' => $kgruangpublik, 'ruangpublik' => $ruangpublik]);
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
        $ruangpublik->desa_id = $request->input('desa_id');
        $ruangpublik->kgruangpublik_id = $request->input('kgruangpublik_id');
        $ruangpublik->keberadaan = $request->input('keberadaan');
        $ruangpublik->luas = $request->input('luas');
        $ruangpublik->status = $request->input('status');
        $ruangpublik->updated_at = now();
        $ruangpublik->save();
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
        $ruangpublik = RuangPublik::find($id);
        $ruangpublik->delete();
        return redirect()->back();
    }
}
