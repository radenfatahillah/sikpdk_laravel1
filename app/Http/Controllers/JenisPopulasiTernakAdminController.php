<?php

namespace App\Http\Controllers;

use App\Desa;
use App\JenisPopulasiTernak;
use App\KgJenisPopulasiTernak;
use Illuminate\Http\Request;

class JenisPopulasiTernakAdminController extends Controller
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
        $kgjenispopulasiternak = KgJenisPopulasiTernak::ambilSemua();
        return view('admin.jenispopulasiternak.create', ['kgjenispopulasiternak' => $kgjenispopulasiternak, 'desa_id' => $desa_id]);
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
        $jenispopulasiternak->desa_id = $request->desa_id;
        $jenispopulasiternak->jumlahpemilik = $request->jumlahpemilik;
        $jenispopulasiternak->perkiraanjumlah = $request->perkiraanjumlah;
        $jenispopulasiternak->created_at = now();
        $jenispopulasiternak->updated_at = now();
        $jenispopulasiternak->save();
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
        $kgjenispopulasiternak = KgJenisPopulasiTernak::ambilSemua();
        $jenispopulasiternak = JenisPopulasiTernak::ambil($id);
        return view('admin.jenispopulasiternak.edit', ['kgjenispopulasiternak' => $kgjenispopulasiternak, 'jenispopulasiternak' => $jenispopulasiternak]);
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
        $jenispopulasiternak->desa_id = $request->input('desa_id');
        $jenispopulasiternak->kgjenispopulasiternak_id = $request->input('kgjenispopulasiternak_id');
        $jenispopulasiternak->jumlahpemilik = $request->input('jumlahpemilik');
        $jenispopulasiternak->perkiraanjumlah = $request->input('perkiraanjumlah');
        $jenispopulasiternak->updated_at = now();
        $jenispopulasiternak->save();
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
        $jenispopulasiternak = JenisPopulasiTernak::find($id);
        $jenispopulasiternak->delete();
        return redirect()->back();
    }
}
