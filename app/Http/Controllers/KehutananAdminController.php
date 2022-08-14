<?php

namespace App\Http\Controllers;

use App\Desa;
use App\Kehutanan;
use App\KgKehutanan;
use Illuminate\Http\Request;

class KehutananAdminController extends Controller
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
        $kgkehutanan = KgKehutanan::ambilSemua();
        return view('admin.kehutanan.create', ['kgkehutanan' => $kgkehutanan, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([

            'desa_id' => 'required',
            'kgkehutanan_id' => 'required',
            'miliknegara' => 'required',
            'perhutani' => 'required',
            'milikadat' => 'required',
            'milikmasyarakat' => 'required',
        ], [

            'desa_id.required' => 'Desa wajib diisi',
            'kgkehutanan_id.required' => 'Jenis wajib diisi',
            'miliknegara.required' => 'Milik Negara wajib diisi',
            'perhutani.required' => 'Perhutani/Instansi Sektoral wajib diisi',
            'milikadat.required' => 'Milik Adat/Ulayat wajib diisi',
            'milikmasyarakat.required' => 'Milik Masyarakat Perorangan wajib diisi',
        ]);
        $kehutanan = new Kehutanan();
        $kehutanan->kgkehutanan_id = $request->kgkehutanan_id;
        $kehutanan->desa_id = $request->desa_id;
        $kehutanan->miliknegara = $request->miliknegara;
        $kehutanan->perhutani = $request->perhutani;
        $kehutanan->milikadat = $request->milikadat;
        $kehutanan->milikmasyarakat = $request->milikmasyarakat;
        $kehutanan->totalluashutan = $request->miliknegara + $request->perhutani + $request->milikadat + $request->milikmasyarakat;
        $kehutanan->created_at = now();
        $kehutanan->updated_at = now();
        $kehutanan->save();
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
        $kgkehutanan = KgKehutanan::ambilSemua();
        $kehutanan = Kehutanan::ambil($id);
        return view('admin.kehutanan.edit', ['kgkehutanan' => $kgkehutanan, 'kehutanan' => $kehutanan]);
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
        $kehutanan = Kehutanan::ambil($id);
        $kehutanan->desa_id = $request->input('desa_id');
        $kehutanan->kgkehutanan_id = $request->input('kgkehutanan_id');
        $kehutanan->miliknegara = $request->input('miliknegara');
        $kehutanan->perhutani = $request->input('perhutani');
        $kehutanan->milikadat = $request->input('milikadat');
        $kehutanan->milikmasyarakat = $request->input('milikmasyarakat');
        $kehutanan->totalluashutan = $request->input('miliknegara') + $request->input('perhutani') + $request->input('milikadat') + $request->input('milikmasyarakat');
        $kehutanan->updated_at = now();
        $kehutanan->save();
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
        $kehutanan = Kehutanan::find($id);
        $kehutanan->delete();
        return redirect()->back();
    }
}
