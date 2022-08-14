<?php

namespace App\Http\Controllers;

use App\BPD;
use Illuminate\Http\Request;

class BPDController extends Controller
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
        return view('operatordesa.pengaturan.bpd.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bpddesa = new BPD();
        $bpddesa->desa_id = auth()->user()->desa_id;
        $bpddesa->name = $request->name;
        $bpddesa->jabatan = $request->jabatan;
        $bpddesa->pendidikan = $request->pendidikan;
        $bpddesa->created_at = now();
        $bpddesa->updated_at = now();
        $bpddesa->save();
        return redirect()->route('pengaturan-desa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BPD  $bPD
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BPD  $bPD
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bpddesa = BPD::ambil($id);
        return view('operatordesa.pengaturan.bpd.edit', ['bpddesa' => $bpddesa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BPD  $bPD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bpddesa = BPD::ambil($id);
        $bpddesa->desa_id = auth()->user()->desa_id;
        $bpddesa->name = $request->input('name');
        $bpddesa->jabatan = $request->input('jabatan');
        $bpddesa->pendidikan = $request->input('pendidikan');
        $bpddesa->created_at = now();
        $bpddesa->updated_at = now();
        $bpddesa->save();
        return redirect()->route('pengaturan-desa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BPD  $bPD
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bpddesa = BPD::find($id);
        $bpddesa->delete();
        return redirect()->back();
    }
}
