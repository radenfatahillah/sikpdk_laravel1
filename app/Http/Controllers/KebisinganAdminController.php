<?php

namespace App\Http\Controllers;

use App\Desa;
use App\Kebisingan;
use App\KgKebisingan;
use Illuminate\Http\Request;

class KebisinganAdminController extends Controller
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
        $kgkebisingan = KgKebisingan::ambilSemua();
        return view('admin.kebisingan.create', ['kgkebisingan' => $kgkebisingan, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kebisingan = new Kebisingan;
        $kebisingan->kgkebisingan_id = $request->kgkebisingan_id;
        $kebisingan->desa_id = $request->desa_id;
        $kebisingan->dampak = $request->dampak;
        $kebisingan->sumber = $request->sumber;
        $kebisingan->efek = $request->efek;
        $kebisingan->created_at = now();
        $kebisingan->updated_at = now();
        $kebisingan->save();
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
        $kgkebisingan = KgKebisingan::ambilSemua();
        $kebisingan = Kebisingan::ambil($id);
        return view('admin.kebisingan.edit', ['kgkebisingan' => $kgkebisingan, 'kebisingan' => $kebisingan]);
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
        $kebisingan = Kebisingan::ambil($id);
        $kebisingan->desa_id = $request->input('desa_id');
        $kebisingan->kgkebisingan_id = $request->input('kgkebisingan_id');
        $kebisingan->dampak = $request->input('dampak');
        $kebisingan->sumber = $request->input('sumber');
        $kebisingan->efek = $request->input('efek');
        $kebisingan->updated_at = now();
        $kebisingan->save();
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
        $kebisingan = Kebisingan::find($id);
        $kebisingan->delete();
        return redirect()->back();
    }
}
