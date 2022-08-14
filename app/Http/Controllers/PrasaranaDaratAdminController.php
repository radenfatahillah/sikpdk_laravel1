<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KategoriDarat;
use App\KgPrasaranaDarat;
use App\PrasaranaDarat;
use Illuminate\Http\Request;

class PrasaranaDaratAdminController extends Controller
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
        $kgprasaranadarat = KgPrasaranaDarat::ambilSemua();
        $kgdarat = KategoriDarat::ambilSemua();
        return view('admin.prasaranadarat.create', ['kgprasaranadarat' => $kgprasaranadarat, 'kgdarat' => $kgdarat, 'desa_id' => $desa_id]);
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
        $prasaranadarat->desa_id = $request->desa_id;
        $prasaranadarat->baik = $request->baik;
        $prasaranadarat->rusak = $request->rusak;
        $prasaranadarat->created_at = now();
        $prasaranadarat->updated_at = now();
        $prasaranadarat->save();
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
        $kgprasaranadarat = KgPrasaranaDarat::ambilSemua();
        $kgdarat = KategoriDarat::ambilSemua();
        $prasaranadarat = PrasaranaDarat::ambil($id);
        return view('admin.prasaranadarat.edit', ['kgprasaranadarat' => $kgprasaranadarat, 'prasaranadarat' => $prasaranadarat, 'kgdarat' => $kgdarat]);
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
        $prasaranadarat->desa_id = $request->input('desa_id');
        $prasaranadarat->kgprasaranadarat_id = $request->input('kgprasaranadarat_id');
        $prasaranadarat->kgdarat_id = $request->input('kgdarat_id');
        $prasaranadarat->baik = $request->input('baik');
        $prasaranadarat->rusak = $request->input('rusak');
        $prasaranadarat->updated_at = now();
        $prasaranadarat->save();
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
        $prasaranadarat = PrasaranaDarat::find($id);
        $prasaranadarat->delete();
        return redirect()->back();
    }
}
