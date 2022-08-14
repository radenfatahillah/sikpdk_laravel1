<?php

namespace App\Http\Controllers;

use App\KgTingkatPartisipasiPolitik;
use App\TingkatPartisipasiPolitik;
use Illuminate\Http\Request;

class TingkatPartisipasiPolitikController extends Controller
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
        $kgtingkatpartisipasipolitik = KgTingkatPartisipasiPolitik::ambilSemua();
        return view('operatordesa.tingkatpartisipasipolitik.create', ['kgtingkatpartisipasipolitik' => $kgtingkatpartisipasipolitik]);
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
        $tingkatpartisipasipolitik->desa_id = auth()->user()->desa_id;
        $tingkatpartisipasipolitik->kgtingkatpartisipasipolitik_id = $request->kgtingkatpartisipasipolitik_id;
        $tingkatpartisipasipolitik->punyahakpilih_lakilaki = $request->punyahakpilih_lakilaki;
        $tingkatpartisipasipolitik->punyahakpilih_perempuan = $request->punyahakpilih_perempuan;
        $tingkatpartisipasipolitik->manfaathakpilih_lakilaki = $request->manfaathakpilih_lakilaki;
        $tingkatpartisipasipolitik->manfaathakpilih_perempuan = $request->manfaathakpilih_perempuan;
        $tingkatpartisipasipolitik->save();
        return redirect()->route('profil-desa.edit');
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
        return view('operatordesa.tingkatpartisipasipolitik.edit', ['kgtingkatpartisipasipolitik' => $kgtingkatpartisipasipolitik, 'tingkatpartisipasipolitik' => $tingkatpartisipasipolitik]);
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
        $tingkatpartisipasipolitik->desa_id = auth()->user()->desa_id;
        $tingkatpartisipasipolitik->kgtingkatpartisipasipolitik_id = $request->input('kgtingkatpartisipasipolitik_id');
        $tingkatpartisipasipolitik->punyahakpilih_lakilaki = $request->input('punyahakpilih_lakilaki');
        $tingkatpartisipasipolitik->punyahakpilih_perempuan = $request->input('punyahakpilih_perempuan');
        $tingkatpartisipasipolitik->manfaathakpilih_lakilaki = $request->input('manfaathakpilih_lakilaki');
        $tingkatpartisipasipolitik->manfaathakpilih_perempuan = $request->input('manfaathakpilih_perempuan');
        $tingkatpartisipasipolitik->updated_at = now();
        $tingkatpartisipasipolitik->save();
        return redirect()->route('profil-desa.edit');
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
        return redirect()->route('profil-desa.edit');
    }
}
