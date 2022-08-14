<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProduksiTernak;
use App\KgProduksiTernak;

class ProduksiTernakController extends Controller
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
        $kgproduksiternak = KgProduksiTernak::ambilSemua();
        return view('operatordesa.produksiternak.create', ['kgproduksiternak' => $kgproduksiternak]);
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
        $produksiternak->desa_id = auth()->user()->desa_id;
        $produksiternak->hasil = $request->hasil;
        $produksiternak->created_at = now();
        $produksiternak->updated_at = now();
        $produksiternak->save();
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
        $kgproduksiternak = KgProduksiTernak::ambilSemua();
        $produksiternak = ProduksiTernak::ambil($id);
        return view('operatordesa.produksiternak.edit', ['kgproduksiternak' => $kgproduksiternak, 'produksiternak' => $produksiternak]);
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
        $produksiternak->desa_id = auth()->user()->desa_id;
        $produksiternak->kgproduksiternak_id = $request->input('kgproduksiternak_id');
        $produksiternak->hasil = $request->input('hasil');
        $produksiternak->updated_at = now();
        $produksiternak->save();
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
        $produksiternak = ProduksiTernak::find($id);
        $produksiternak->delete();
        return redirect()->route('profil-desa.edit');
    }
}
