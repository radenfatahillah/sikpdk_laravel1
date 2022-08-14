<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Koran;
use App\KgKoran;

class KoranController extends Controller
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
        $kgkoran = KgKoran::ambilSemua();
        return view('operatordesa.koran.create', ['kgkoran' => $kgkoran]);
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
        $koran->desa_id = auth()->user()->desa_id;
        $koran->status = $request->status;
        $koran->created_at = now();
        $koran->updated_at = now();
        $koran->save();
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
        $kgkoran = KgKoran::ambilSemua();
        $koran = Koran::ambil($id);
        return view('operatordesa.koran.edit', ['kgkoran' => $kgkoran, 'koran' => $koran]);
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
        $koran->desa_id = auth()->user()->desa_id;
        $koran->kgkoran_id = $request->input('kgkoran_id');
        $koran->status = $request->input('status');
        $koran->updated_at = now();
        $koran->save();
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
        $koran = Koran::find($id);
        $koran->delete();
        return redirect()->route('profil-desa.edit');
    }
}
