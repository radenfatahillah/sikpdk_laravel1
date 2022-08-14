<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgLembagaKemasyarakatan;
use App\LembagaKemasyarakatan;
use Illuminate\Http\Request;

class LembagaKemasyarakatanAdminController extends Controller
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
        $kglembagakemasyarakatan = KgLembagaKemasyarakatan::ambilSemua();
        return view('admin.lembagakemasyarakatan.create', ['kglembagakemasyarakatan' => $kglembagakemasyarakatan, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lembagakemasyarakatan = new LembagaKemasyarakatan;
        $lembagakemasyarakatan->desa_id = $request->desa_id;
        $lembagakemasyarakatan->kglembagakemasyarakatan_id = $request->kglembagakemasyarakatan_id;
        $lembagakemasyarakatan->dasarhukumpembentukan = $request->dasarhukumpembentukan;
        $lembagakemasyarakatan->jumlah_lembaga = $request->jumlah_lembaga;
        $lembagakemasyarakatan->jumlah_pengurus = $request->jumlah_pengurus;
        $lembagakemasyarakatan->ruang_lingkup_kegiatan = $request->ruang_lingkup_kegiatan;
        $lembagakemasyarakatan->jumlah_jenis_kegiatan = $request->jumlah_jenis_kegiatan;
        $lembagakemasyarakatan->save();
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
        $kglembagakemasyarakatan = KgLembagaKemasyarakatan::ambilSemua();
        $lembagakemasyarakatan = LembagaKemasyarakatan::ambil($id);
        return view('admin.lembagakemasyarakatan.edit', ['kglembagakemasyarakatan' => $kglembagakemasyarakatan, 'lembagakemasyarakatan' => $lembagakemasyarakatan]);
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
        $lembagakemasyarakatan = LembagaKemasyarakatan::ambil($id);
        $lembagakemasyarakatan->desa_id = $request->input('desa_id');
        $lembagakemasyarakatan->kglembagakemasyarakatan_id = $request->input('kglembagakemasyarakatan_id');
        $lembagakemasyarakatan->dasarhukumpembentukan = $request->input('dasarhukumpembentukan');
        $lembagakemasyarakatan->jumlah_lembaga = $request->input('jumlah_lembaga');
        $lembagakemasyarakatan->jumlah_pengurus = $request->input('jumlah_pengurus');
        $lembagakemasyarakatan->ruang_lingkup_kegiatan = $request->input('ruang_lingkup_kegiatan');
        $lembagakemasyarakatan->jumlah_jenis_kegiatan = $request->input('jumlah_jenis_kegiatan');
        $lembagakemasyarakatan->updated_at = now();
        $lembagakemasyarakatan->save();
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
        $lembagakemasyarakatan = LembagaKemasyarakatan::find($id);
        $lembagakemasyarakatan->delete();
        return redirect()->back();
    }
}
