<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kebisingan;
use App\KgKebisingan;

class KebisinganController extends Controller
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
        $kgkebisingan = KgKebisingan::ambilSemua();
        return view('operatordesa.kebisingan.create', ['kgkebisingan' => $kgkebisingan]);
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
        $kebisingan->desa_id = auth()->user()->desa_id;
        $kebisingan->dampak = $request->dampak;
        $kebisingan->sumber = $request->sumber;
        $kebisingan->efek = $request->efek;
        $kebisingan->created_at = now();
        $kebisingan->updated_at = now();
        $kebisingan->save();
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
        $kgkebisingan = KgKebisingan::ambilSemua();
        $kebisingan = Kebisingan::ambil($id);
        return view('operatordesa.kebisingan.edit', ['kgkebisingan' => $kgkebisingan, 'kebisingan' => $kebisingan]);
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
        $kebisingan->desa_id = auth()->user()->desa_id;
        $kebisingan->kgkebisingan_id = $request->input('kgkebisingan_id');
        $kebisingan->dampak = $request->input('dampak');
        $kebisingan->sumber = $request->input('sumber');
        $kebisingan->efek = $request->input('efek');
        $kebisingan->updated_at = now();
        $kebisingan->save();
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
        $kebisingan = Kebisingan::find($id);
        $kebisingan->delete();
        return redirect()->route('profil-desa.edit');
    }
}
