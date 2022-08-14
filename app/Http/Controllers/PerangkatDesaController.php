<?php

namespace App\Http\Controllers;

use App\PerangkatDesa;
use Illuminate\Http\Request;

class PerangkatDesaController extends Controller
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
        return view('operatordesa.pengaturan.perangkatdesa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perangkatdesa = new PerangkatDesa();
        $perangkatdesa->desa_id = auth()->user()->desa_id;
        $perangkatdesa->name = $request->name;
        $perangkatdesa->nip = $request->nip;
        $perangkatdesa->jabatan = $request->jabatan;
        $perangkatdesa->pendidikan = $request->pendidikan;
        $perangkatdesa->status = $request->status;
        $perangkatdesa->created_at = now();
        $perangkatdesa->updated_at = now();
        $perangkatdesa->save();
        return redirect()->route('pengaturan-desa.index');
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
        $perangkatdesa = PerangkatDesa::ambil($id);
        return view('operatordesa.pengaturan.perangkatdesa.edit', ['perangkatdesa' => $perangkatdesa]);
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
        $perangkatdesa = PerangkatDesa::ambil($id);
        $perangkatdesa->desa_id = auth()->user()->desa_id;
        $perangkatdesa->name = $request->input('name');
        $perangkatdesa->nip = $request->input('nip');
        $perangkatdesa->jabatan = $request->input('jabatan');
        $perangkatdesa->pendidikan = $request->input('pendidikan');
        $perangkatdesa->status = $request->input('status');
        $perangkatdesa->created_at = now();
        $perangkatdesa->updated_at = now();
        $perangkatdesa->save();
        return redirect()->route('pengaturan-desa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perangkatdesa = PerangkatDesa::find($id);
        $perangkatdesa->delete();
        return redirect()->back();
    }
}
