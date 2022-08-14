<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgTelepon;
use App\Telepon;
use Illuminate\Http\Request;

class TeleponAdminController extends Controller
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
        $kgtelepon = KgTelepon::ambilSemua();
        return view('admin.telepon.create', ['kgtelepon' => $kgtelepon, 'desa_id' => $desa_id]);
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
        $telepon->desa_id = $request->desa_id;
        $telepon->jumlah = $request->jumlah;
        $telepon->created_at = now();
        $telepon->updated_at = now();
        $telepon->save();
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
        $kgtelepon = KgTelepon::ambilSemua();
        $telepon = Telepon::ambil($id);
        return view('admin.telepon.edit', ['kgtelepon' => $kgtelepon, 'telepon' => $telepon]);
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
        $telepon->desa_id = $request->input('desa_id');
        $telepon->kgtelepon_id = $request->input('kgtelepon_id');
        $telepon->jumlah = $request->input('jumlah');
        $telepon->updated_at = now();
        $telepon->save();
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
        $telepon = Telepon::find($id);
        $telepon->delete();
        return redirect()->back();
    }
}
