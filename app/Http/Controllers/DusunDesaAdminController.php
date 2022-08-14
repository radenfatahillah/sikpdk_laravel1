<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alamat;
use App\Desa;

class DusunDesaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desa = Desa::ambilSemua();
        $alamat = Alamat::orderBy('desa_id')->get();
        return view('admin.pengaturan.dusun.index', compact('desa', 'alamat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desa_id = Desa::ambilSemua();
        return view('admin.pengaturan.dusun.create', compact('desa_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $alamat = new Alamat;
        $alamat->name = $request->name;
        $alamat->desa_id = $request->desa_id;
        $alamat->nama_kadus = $request->nama_kadus;
        $alamat->status = $request->status;
        $alamat->save();
        return redirect()->route('dataaparaturdesa.edit', $request->desa_id);
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
        $desa = Desa::ambilSemua();
        $alamat = Alamat::ambil($id);
        return view('admin.pengaturan.dusun.edit', ['alamat' => $alamat, 'desa' => $desa]);
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
        $alamat = Alamat::ambil($id);
        $alamat->name = $request->input('name');
        $alamat->desa_id = $request->input('desa_id');
        $alamat->nama_kadus = $request->input('nama_kadus');
        $alamat->status = $request->input('status');
        $alamat->save();
        return redirect()->route('dataaparaturdesa.edit', $request->input('desa_id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alamat = Alamat::find($id);
        $alamat->delete();
        //fungsi redirect untuk mengalihkan ke halaman alamat index
        return redirect()->back();
    }
}
