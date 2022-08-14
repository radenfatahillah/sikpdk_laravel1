<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgRadioTv;
use App\RadioTv;
use Illuminate\Http\Request;

class RadioTvAdminController extends Controller
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
        $kgradiotv = KgRadioTv::ambilSemua();
        return view('admin.radiotv.create', ['kgradiotv' => $kgradiotv, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $radiotv = new RadioTv;
        $radiotv->kgradiotv_id = $request->kgradiotv_id;
        $radiotv->desa_id = $request->desa_id;
        $radiotv->jumlah = $request->jumlah;
        $radiotv->created_at = now();
        $radiotv->updated_at = now();
        $radiotv->save();
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
        $kgradiotv = KgRadioTv::ambilSemua();
        $radiotv = RadioTv::ambil($id);
        return view('admin.radiotv.edit', ['kgradiotv' => $kgradiotv, 'radiotv' => $radiotv]);
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
        $radiotv = RadioTv::ambil($id);
        $radiotv->desa_id = $request->input('desa_id');
        $radiotv->kgradiotv_id = $request->input('kgradiotv_id');
        $radiotv->jumlah = $request->input('jumlah');
        $radiotv->updated_at = now();
        $radiotv->save();
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
        $radiotv = RadioTv::find($id);
        $radiotv->delete();
        return redirect()->back();
    }
}
