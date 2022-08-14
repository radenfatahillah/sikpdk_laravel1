<?php

namespace App\Http\Controllers;

use App\Alamat;
use Illuminate\Http\Request;
use App\PerangkatDesa;
use App\PerangkatDusun;
use App\BPD;
use App\Desa;
use App\AparaturDesa;
use Auth;

class PengaturanDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perangkatdesa = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->get();
        $bpddesa = BPD::where('desa_id', auth()->user()->desa_id)->get();
        $alamat = Alamat::where('desa_id', auth()->user()->desa_id)->get();
        $desa = Desa::where('id', auth()->user()->desa_id)->get();
        $aparaturdesa = AparaturDesa::where('desa_id', auth()->user()->desa_id)->first();
        return view('operatordesa.pengaturan.index', ['perangkatdesa' => $perangkatdesa, 'bpddesa' => $bpddesa, 'alamat' => $alamat, 'desa' => $desa, 'aparaturdesa' => $aparaturdesa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desa = Desa::where('id', auth()->user()->desa_id)->get();
        return view('operatordesa.pengaturan.dusun.create', compact('desa'));
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
        $alamat->desa_id = auth()->user()->desa_id;
        $alamat->nama_kadus = strtoupper($request->nama_kadus);
        $alamat->status = $request->status;
        $alamat->save();
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
        $desa = Desa::where('id', auth()->user()->desa_id)->get();
        $alamat = Alamat::ambil($id);
        return view('operatordesa.pengaturan.dusun.edit', ['alamat' => $alamat, 'desa' => $desa]);
    }

    public function updateAparaturDesa(Request $request, $id)
    {
        $aparaturdesa = AparaturDesa::updateOrCreate([
            'desa_id' => auth()->user()->desa_id,
        ], [
            'dasarhukumperdes' => $request->dasarhukumperdes,
            'dasarhukumbpd' => $request->dasarhukumbpd,
            'keberadaanbpd' => $request->keberadaanbpd,
        ]);
        return redirect()->back();
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
        $alamat = Alamat::find($id);
        $alamat->delete();
        toast('Hapus Data alamat Berhasil!', 'success');
        //fungsi redirect untuk mengalihkan ke halaman alamat index
        return redirect()->route('pengaturan-desa.index');
    }
}
