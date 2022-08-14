<?php

namespace App\Http\Controllers;

use App\Desa;
use App\HasilPerkebunan;
use App\KgHasilPerkebunan;
use Illuminate\Http\Request;

class HasilPerkebunanAdminController extends Controller
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
        $kghasilperkebunan = KgHasilPerkebunan::ambilSemua();
        return view('admin.hasilperkebunan.create', ['kghasilperkebunan' => $kghasilperkebunan, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hasilperkebunan = new HasilPerkebunan;
        $hasilperkebunan->kghasilperkebunan_id = $request->kghasilperkebunan_id;
        $hasilperkebunan->desa_id = $request->desa_id;
        $hasilperkebunan->luasnegara = $request->luasnegara;
        $hasilperkebunan->hasilnegara = $request->hasilnegara;
        $hasilperkebunan->luasrakyat = $request->luasrakyat;
        $hasilperkebunan->hasilrakyat = $request->hasilrakyat;
        $hasilperkebunan->created_at = now();
        $hasilperkebunan->updated_at = now();
        $hasilperkebunan->save();
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
        $kghasilperkebunan = KgHasilPerkebunan::ambilSemua();
        $hasilperkebunan = HasilPerkebunan::ambil($id);
        return view('admin.hasilperkebunan.edit', ['kghasilperkebunan' => $kghasilperkebunan, 'hasilperkebunan' => $hasilperkebunan]);
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
        $hasilperkebunan = HasilPerkebunan::ambil($id);
        $hasilperkebunan->desa_id = $request->input('desa_id');
        $hasilperkebunan->kghasilperkebunan_id = $request->input('kghasilperkebunan_id');
        $hasilperkebunan->luasnegara = $request->input('luasnegara');
        $hasilperkebunan->hasilnegara = $request->input('hasilnegara');
        $hasilperkebunan->luasrakyat = $request->input('luasrakyat');
        $hasilperkebunan->hasilrakyat = $request->input('hasilrakyat');
        $hasilperkebunan->updated_at = now();
        $hasilperkebunan->save();
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
        $hasilperkebunan = HasilPerkebunan::find($id);
        $hasilperkebunan->delete();
        return redirect()->back();
    }
}
