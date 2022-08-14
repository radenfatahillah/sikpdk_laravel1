<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HasilHutan;
use App\KgHasilHutan;

class HasilHutanController extends Controller
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
        $kghasilhutan = KgHasilHutan::ambilSemua();
        return view('operatordesa.hasilhutan.create', ['kghasilhutan' => $kghasilhutan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hasilhutan = new HasilHutan;
        $hasilhutan->kghasilhutan_id = $request->kghasilhutan_id;
        $hasilhutan->desa_id = auth()->user()->desa_id;
        $hasilhutan->hasil = $request->hasil;
        $hasilhutan->created_at = now();
        $hasilhutan->updated_at = now();
        $hasilhutan->save();
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
        $kghasilhutan = KgHasilHutan::ambilSemua();
        $hasilhutan = HasilHutan::ambil($id);
        return view('operatordesa.hasilhutan.edit', ['kghasilhutan' => $kghasilhutan, 'hasilhutan' => $hasilhutan]);
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
        $hasilhutan = HasilHutan::ambil($id);
        $hasilhutan->desa_id = auth()->user()->desa_id;
        $hasilhutan->kghasilhutan_id = $request->input('kghasilhutan_id');
        $hasilhutan->hasil = $request->input('hasil');
        $hasilhutan->updated_at = now();
        $hasilhutan->save();
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
        $hasilhutan = HasilHutan::find($id);
        $hasilhutan->delete();
        return redirect()->route('profil-desa.edit');
    }
}
