<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisPopulasiTernak;
use App\KgJenisPopulasiTernak;

class JenisPopulasiTernakController extends Controller
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
        $kgjenispopulasiternak = KgJenisPopulasiTernak::ambilSemua();
        return view('operatordesa.jenispopulasiternak.create', ['kgjenispopulasiternak' => $kgjenispopulasiternak]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenispopulasiternak = new JenisPopulasiTernak;
        $jenispopulasiternak->kgjenispopulasiternak_id = $request->kgjenispopulasiternak_id;
        $jenispopulasiternak->desa_id = auth()->user()->desa_id;
        $jenispopulasiternak->jumlahpemilik = $request->jumlahpemilik;
        $jenispopulasiternak->perkiraanjumlah = $request->perkiraanjumlah;
        $jenispopulasiternak->created_at = now();
        $jenispopulasiternak->updated_at = now();
        $jenispopulasiternak->save();
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
        $kgjenispopulasiternak = KgJenisPopulasiTernak::ambilSemua();
        $jenispopulasiternak = JenisPopulasiTernak::ambil($id);
        return view('operatordesa.jenispopulasiternak.edit', ['kgjenispopulasiternak' => $kgjenispopulasiternak, 'jenispopulasiternak' => $jenispopulasiternak]);
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
        $jenispopulasiternak = JenisPopulasiTernak::ambil($id);
        $jenispopulasiternak->desa_id = auth()->user()->desa_id;
        $jenispopulasiternak->kgjenispopulasiternak_id = $request->input('kgjenispopulasiternak_id');
        $jenispopulasiternak->jumlahpemilik = $request->input('jumlahpemilik');
        $jenispopulasiternak->perkiraanjumlah = $request->input('perkiraanjumlah');
        $jenispopulasiternak->updated_at = now();
        $jenispopulasiternak->save();
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
        $jenispopulasiternak = JenisPopulasiTernak::find($id);
        $jenispopulasiternak->delete();
        return redirect()->route('profil-desa.edit');
    }
}
