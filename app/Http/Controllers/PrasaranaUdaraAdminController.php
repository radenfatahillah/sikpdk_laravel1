<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgPrasaranaUdara;
use App\PrasaranaUdara;
use Illuminate\Http\Request;

class PrasaranaUdaraAdminController extends Controller
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
        $kgprasaranaudara = KgPrasaranaUdara::ambilSemua();
        return view('admin.prasaranaudara.create', ['kgprasaranaudara' => $kgprasaranaudara, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prasaranaudara = new PrasaranaUdara;
        $prasaranaudara->kgprasaranaudara_id = $request->kgprasaranaudara_id;
        $prasaranaudara->desa_id = $request->desa_id;
        $prasaranaudara->jumlah = $request->jumlah;
        $prasaranaudara->created_at = now();
        $prasaranaudara->updated_at = now();
        $prasaranaudara->save();
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
        $kgprasaranaudara = KgPrasaranaUdara::ambilSemua();
        $prasaranaudara = PrasaranaUdara::ambil($id);
        return view('admin.prasaranaudara.edit', ['kgprasaranaudara' => $kgprasaranaudara, 'prasaranaudara' => $prasaranaudara]);
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
        $prasaranaudara = PrasaranaUdara::ambil($id);
        $prasaranaudara->desa_id = $request->input('desa_id');
        $prasaranaudara->kgprasaranaudara_id = $request->input('kgprasaranaudara_id');
        $prasaranaudara->jumlah = $request->input('jumlah');
        $prasaranaudara->updated_at = now();
        $prasaranaudara->save();
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
        $prasaranaudara = PrasaranaUdara::find($id);
        $prasaranaudara->delete();
        return redirect()->back();
    }
}
