<?php

namespace App\Http\Controllers;

use App\Desa;
use App\KgTingkatPartisipasiPolitik;
use App\TingkatPartisipasiPolitik;
use Illuminate\Http\Request;

class TingkatPartisipasiPolitikAdminController extends Controller
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
        $kgtingkatpartisipasipolitik = KgTingkatPartisipasiPolitik::ambilSemua();
        return view('admin.tingkatpartisipasipolitik.create', ['kgtingkatpartisipasipolitik' => $kgtingkatpartisipasipolitik, 'desa_id' => $desa_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tingkatpartisipasipolitik = new TingkatPartisipasiPolitik;
        $tingkatpartisipasipolitik->desa_id = $request->desa_id;
        $tingkatpartisipasipolitik->kgtingkatpartisipasipolitik_id = $request->kgtingkatpartisipasipolitik_id;
        $tingkatpartisipasipolitik->punyahakpilih_lakilaki = $request->punyahakpilih_lakilaki;
        $tingkatpartisipasipolitik->punyahakpilih_perempuan = $request->punyahakpilih_perempuan;
        $tingkatpartisipasipolitik->manfaathakpilih_lakilaki = $request->manfaathakpilih_lakilaki;
        $tingkatpartisipasipolitik->manfaathakpilih_perempuan = $request->manfaathakpilih_perempuan;
        $tingkatpartisipasipolitik->save();
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
        $kgtingkatpartisipasipolitik = KgTingkatPartisipasiPolitik::ambilSemua();
        $tingkatpartisipasipolitik = TingkatPartisipasiPolitik::ambil($id);
        return view('admin.tingkatpartisipasipolitik.edit', ['kgtingkatpartisipasipolitik' => $kgtingkatpartisipasipolitik, 'tingkatpartisipasipolitik' => $tingkatpartisipasipolitik]);
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
        $tingkatpartisipasipolitik = TingkatPartisipasiPolitik::ambil($id);
        $tingkatpartisipasipolitik->desa_id = $request->input('desa_id');
        $tingkatpartisipasipolitik->kgtingkatpartisipasipolitik_id = $request->input('kgtingkatpartisipasipolitik_id');
        $tingkatpartisipasipolitik->punyahakpilih_lakilaki = $request->input('punyahakpilih_lakilaki');
        $tingkatpartisipasipolitik->punyahakpilih_perempuan = $request->input('punyahakpilih_perempuan');
        $tingkatpartisipasipolitik->manfaathakpilih_lakilaki = $request->input('manfaathakpilih_lakilaki');
        $tingkatpartisipasipolitik->manfaathakpilih_perempuan = $request->input('manfaathakpilih_perempuan');
        $tingkatpartisipasipolitik->updated_at = now();
        $tingkatpartisipasipolitik->save();
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
        $tingkatpartisipasipolitik = TingkatPartisipasiPolitik::find($id);
        $tingkatpartisipasipolitik->delete();
        return redirect()->back();
    }
}
