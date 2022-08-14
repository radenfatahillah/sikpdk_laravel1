<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Telepon;
use App\KgTelepon;

class TeleponController extends Controller
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
        $kgtelepon = KgTelepon::ambilSemua();
        return view('operatordesa.telepon.create', ['kgtelepon' => $kgtelepon]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $telepon = new Telepon;
        $telepon->kgtelepon_id = $request->kgtelepon_id;
        $telepon->desa_id = auth()->user()->desa_id;
        $telepon->jumlah = $request->jumlah;
        $telepon->created_at = now();
        $telepon->updated_at = now();
        $telepon->save();
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
        $kgtelepon = KgTelepon::ambilSemua();
        $telepon = Telepon::ambil($id);
        return view('operatordesa.telepon.edit', ['kgtelepon' => $kgtelepon, 'telepon' => $telepon]);
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
        $telepon = Telepon::ambil($id);
        $telepon->desa_id = auth()->user()->desa_id;
        $telepon->kgtelepon_id = $request->input('kgtelepon_id');
        $telepon->jumlah = $request->input('jumlah');
        $telepon->updated_at = now();
        $telepon->save();
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
        $telepon = Telepon::find($id);
        $telepon->delete();
        return redirect()->route('profil-desa.edit');
    }
}
