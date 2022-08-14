<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgKoran;
use App\Koran;
use Illuminate\Http\Request;

class KoranAdminController extends Controller
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
        $kgkoran = KgKoran::ambilSemua();
        return view('admin.koran.create', ['kgkoran' => $kgkoran, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $koran = new Koran;
        $koran->kgkoran_id = $request->kgkoran_id;
        $koran->desa_id = $request->desa_id;
        $koran->status = $request->status;
        $koran->created_at = now();
        $koran->updated_at = now();
        $koran->save();
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
        $kgkoran = KgKoran::ambilSemua();
        $koran = Koran::ambil($id);
        return view('admin.koran.edit', ['kgkoran' => $kgkoran, 'koran' => $koran]);
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
        $koran = Koran::ambil($id);
        $koran->desa_id = $request->input('desa_id');
        $koran->kgkoran_id = $request->input('kgkoran_id');
        $koran->status = $request->input('status');
        $koran->updated_at = now();
        $koran->save();
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
        $koran = Koran::find($id);
        $koran->delete();
        return redirect()->back();
    }
}
