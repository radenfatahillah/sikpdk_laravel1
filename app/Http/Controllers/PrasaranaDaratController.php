<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrasaranaDarat;
use App\KgPrasaranaDarat;
use App\KategoriDarat;

class PrasaranaDaratController extends Controller
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
        $kgprasaranadarat = KgPrasaranaDarat::ambilSemua();
        $kgdarat = KategoriDarat::ambilSemua();
        return view('operatordesa.prasaranadarat.create', ['kgprasaranadarat' => $kgprasaranadarat, 'kgdarat' => $kgdarat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prasaranadarat = new PrasaranaDarat;
        $prasaranadarat->kgprasaranadarat_id = $request->kgprasaranadarat_id;
        $prasaranadarat->kgdarat_id = $request->kgdarat_id;
        $prasaranadarat->desa_id = auth()->user()->desa_id;
        $prasaranadarat->baik = $request->baik;
        $prasaranadarat->rusak = $request->rusak;
        $prasaranadarat->created_at = now();
        $prasaranadarat->updated_at = now();
        $prasaranadarat->save();
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
        $kgprasaranadarat = KgPrasaranaDarat::ambilSemua();
        $kgdarat = KategoriDarat::ambilSemua();
        $prasaranadarat = PrasaranaDarat::ambil($id);
        return view('operatordesa.prasaranadarat.edit', ['kgprasaranadarat' => $kgprasaranadarat, 'prasaranadarat' => $prasaranadarat, 'kgdarat' => $kgdarat]);
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
        $prasaranadarat = PrasaranaDarat::ambil($id);
        $prasaranadarat->desa_id = auth()->user()->desa_id;
        $prasaranadarat->kgprasaranadarat_id = $request->input('kgprasaranadarat_id');
        $prasaranadarat->kgdarat_id = $request->input('kgdarat_id');
        $prasaranadarat->baik = $request->input('baik');
        $prasaranadarat->rusak = $request->input('rusak');
        $prasaranadarat->updated_at = now();
        $prasaranadarat->save();
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
        $prasaranadarat = PrasaranaDarat::find($id);
        $prasaranadarat->delete();
        return redirect()->route('profil-desa.edit');
    }
}
