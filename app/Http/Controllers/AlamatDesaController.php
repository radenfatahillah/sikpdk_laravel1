<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alamat;
use App\Desa;

class AlamatDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desa = Desa::ambilSemua();
        $alamat = Alamat::where('desa_id', auth()->user()->desa_id)->get();
        return view('operatordesa.master-data.alamat.index', compact('desa', 'alamat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desa = Desa::where('id', auth()->user()->desa_id)->get();
        return view('operatordesa.master-data.alamat.create', compact('desa'));
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
        $alamat->name = strtoupper($request->name);
        $alamat->desa_id = auth()->user()->desa_id;
        $alamat->nama_kadus = strtoupper($request->nama_kadus);
        $alamat->status = $request->status;
        $alamat->save();
        return redirect()->route('masterdata-alamatdesa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alamat = Alamat::ambil($id);
        return view('operatordesa.master-data.alamat.show', ['alamat' => $alamat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $desa = Desa::where('id', auth()->user()->desa_id)->get();
        $alamat = Alamat::ambil($id);
        return view('operatordesa.master-data.alamat.edit', ['alamat' => $alamat, 'desa' => $desa]);
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
        $alamat->name = strtoupper($request->input('name'));
        $alamat->desa_id = auth()->user()->desa_id;
        $alamat->nama_kadus = strtoupper($request->input('nama_kadus'));
        $alamat->status = $request->input('status');
        $alamat->save();
        toast('Update Data alamat Berhasil!', 'success');
        return redirect()->route('masterdata-alamatdesa.index');
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
        toast('Hapus Data alamat Berhasil!', 'success');
        //fungsi redirect untuk mengalihkan ke halaman alamat index
        return redirect()->route('masterdata-alamatdesa.index');
    }
}
