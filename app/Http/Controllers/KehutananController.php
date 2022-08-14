<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kehutanan;
use App\KgKehutanan;

class KehutananController extends Controller
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
        $kgkehutanan = KgKehutanan::ambilSemua();
        return view('operatordesa.kehutanan.create', ['kgkehutanan' => $kgkehutanan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kehutanan = new Kehutanan;
        $kehutanan->kgkehutanan_id = $request->kgkehutanan_id;
        $kehutanan->desa_id = auth()->user()->desa_id;
        $kehutanan->miliknegara = $request->miliknegara;
        $kehutanan->perhutani = $request->perhutani;
        $kehutanan->milikadat = $request->milikadat;
        $kehutanan->milikmasyarakat = $request->milikmasyarakat;
        $kehutanan->totalluashutan = $request->miliknegara + $request->perhutani + $request->milikadat + $request->milikmasyarakat;
        $kehutanan->created_at = now();
        $kehutanan->updated_at = now();
        $kehutanan->save();
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
        $kgkehutanan = KgKehutanan::ambilSemua();
        $kehutanan = Kehutanan::ambil($id);
        return view('operatordesa.kehutanan.edit', ['kgkehutanan' => $kgkehutanan, 'kehutanan' => $kehutanan]);
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
        $kehutanan = Kehutanan::ambil($id);
        $kehutanan->desa_id = auth()->user()->desa_id;
        $kehutanan->kgkehutanan_id = $request->input('kgkehutanan_id');
        $kehutanan->miliknegara = $request->input('miliknegara');
        $kehutanan->perhutani = $request->input('perhutani');
        $kehutanan->milikadat = $request->input('milikadat');
        $kehutanan->milikmasyarakat = $request->input('milikmasyarakat');
        $kehutanan->totalluashutan = $request->input('miliknegara') + $request->input('perhutani') + $request->input('milikadat') + $request->input('milikmasyarakat');
        $kehutanan->updated_at = now();
        $kehutanan->save();
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
        $kehutanan = Kehutanan::find($id);
        $kehutanan->delete();
        return redirect()->route('profil-desa.edit');
    }
}
