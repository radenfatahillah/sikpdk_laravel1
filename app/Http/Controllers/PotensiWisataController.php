<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KgPotensiWisata;
use App\PotensiWisata;

class PotensiWisataController extends Controller
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
        $kgpotensiwisata = KgPotensiWisata::ambilSemua();
        return view('operatordesa.potensiwisata.create', ['kgpotensiwisata' => $kgpotensiwisata]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $potensiwisata = new PotensiWisata;
        $potensiwisata->kgpotensiwisata_id = $request->kgpotensiwisata_id;
        $potensiwisata->desa_id = auth()->user()->desa_id;
        $potensiwisata->luas = $request->luas;
        $potensiwisata->status = $request->status;
        $potensiwisata->created_at = now();
        $potensiwisata->updated_at = now();
        $potensiwisata->save();
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
        $kgpotensiwisata = KgPotensiWisata::ambilSemua();
        $potensiwisata = PotensiWisata::ambil($id);
        return view('operatordesa.potensiwisata.edit', ['kgpotensiwisata' => $kgpotensiwisata, 'potensiwisata' => $potensiwisata]);
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
        $potensiwisata = PotensiWisata::ambil($id);
        $potensiwisata->desa_id = auth()->user()->desa_id;
        $potensiwisata->kgpotensiwisata_id = $request->input('kgpotensiwisata_id');
        $potensiwisata->luas = $request->input('luas');
        $potensiwisata->status = $request->input('status');
        $potensiwisata->updated_at = now();
        $potensiwisata->save();
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
        $potensiwisata = PotensiWisata::find($id);
        $potensiwisata->delete();
        return redirect()->route('profil-desa.edit');
    }
}
