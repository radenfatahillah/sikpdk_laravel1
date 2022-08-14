<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgProduksiTernak;
use App\ProduksiTernak;
use Illuminate\Http\Request;

class ProduksiTernakAdminController extends Controller
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
        $kgproduksiternak = KgProduksiTernak::ambilSemua();
        return view('admin.produksiternak.create', ['kgproduksiternak' => $kgproduksiternak, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produksiternak = new ProduksiTernak;
        $produksiternak->kgproduksiternak_id = $request->kgproduksiternak_id;
        $produksiternak->desa_id = $request->desa_id;
        $produksiternak->hasil = $request->hasil;
        $produksiternak->created_at = now();
        $produksiternak->updated_at = now();
        $produksiternak->save();
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
        $kgproduksiternak = KgProduksiTernak::ambilSemua();
        $produksiternak = ProduksiTernak::ambil($id);
        return view('admin.produksiternak.edit', ['kgproduksiternak' => $kgproduksiternak, 'produksiternak' => $produksiternak]);
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
        $produksiternak = ProduksiTernak::ambil($id);
        $produksiternak->desa_id = $request->input('desa_id');
        $produksiternak->kgproduksiternak_id = $request->input('kgproduksiternak_id');
        $produksiternak->hasil = $request->input('hasil');
        $produksiternak->updated_at = now();
        $produksiternak->save();
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
        $produksiternak = ProduksiTernak::find($id);
        $produksiternak->delete();
        return redirect()->back();
    }
}
