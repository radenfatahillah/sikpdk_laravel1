<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KgDampakOlahHutan;
use App\DampakOlahHutan;

class DampakOlahHutanController extends Controller
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
        $kgdampakolahhutan = KgDampakOlahHutan::ambilSemua();
        return view('operatordesa.dampakolahhutan.create', ['kgdampakolahhutan' => $kgdampakolahhutan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dampakolahhutan = new DampakOlahHutan;
        $dampakolahhutan->kgdampakolahhutan_id = $request->kgdampakolahhutan_id;
        $dampakolahhutan->desa_id = auth()->user()->desa_id;
        $dampakolahhutan->dampak = $request->dampak;
        $dampakolahhutan->created_at = now();
        $dampakolahhutan->updated_at = now();
        $dampakolahhutan->save();
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
        $kgdampakolahhutan = KgDampakOlahHutan::ambilSemua();
        $dampakolahhutan = DampakOlahHutan::ambil($id);
        return view('operatordesa.dampakolahhutan.edit', ['kgdampakolahhutan' => $kgdampakolahhutan, 'dampakolahhutan' => $dampakolahhutan]);
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
        $dampakolahhutan = DampakOlahHutan::ambil($id);
        $dampakolahhutan->desa_id = auth()->user()->desa_id;
        $dampakolahhutan->kgdampakolahhutan_id = $request->input('kgdampakolahhutan_id');
        $dampakolahhutan->dampak = $request->input('dampak');
        $dampakolahhutan->updated_at = now();
        $dampakolahhutan->save();
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
        $dampakolahhutan = DampakOlahHutan::find($id);
        $dampakolahhutan->delete();
        return redirect()->route('profil-desa.edit');
    }
}
