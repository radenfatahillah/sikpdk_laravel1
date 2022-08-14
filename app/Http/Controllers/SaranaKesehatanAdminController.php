<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgSaranaKesehatan;
use App\SaranaKesehatan;
use Illuminate\Http\Request;

class SaranaKesehatanAdminController extends Controller
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
        $kgsaranakesehatan = KgSaranaKesehatan::ambilSemua();
        return view('admin.saranakesehatan.create', ['kgsaranakesehatan' => $kgsaranakesehatan, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saranakesehatan = new SaranaKesehatan;
        $saranakesehatan->kgsaranakesehatan_id = $request->kgsaranakesehatan_id;
        $saranakesehatan->desa_id = $request->desa_id;
        $saranakesehatan->jumlah = $request->jumlah;
        $saranakesehatan->created_at = now();
        $saranakesehatan->updated_at = now();
        $saranakesehatan->save();
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
        $kgsaranakesehatan = KgSaranaKesehatan::ambilSemua();
        $saranakesehatan = SaranaKesehatan::ambil($id);
        return view('admin.saranakesehatan.edit', ['kgsaranakesehatan' => $kgsaranakesehatan, 'saranakesehatan' => $saranakesehatan]);
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
        $saranakesehatan = SaranaKesehatan::ambil($id);
        $saranakesehatan->desa_id = $request->input('desa_id');
        $saranakesehatan->kgsaranakesehatan_id = $request->input('kgsaranakesehatan_id');
        $saranakesehatan->jumlah = $request->input('jumlah');
        $saranakesehatan->updated_at = now();
        $saranakesehatan->save();
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
        $saranakesehatan = SaranaKesehatan::find($id);
        $saranakesehatan->delete();
        return redirect()->back();
    }
}
