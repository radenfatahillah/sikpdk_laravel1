<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agama;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agama = Agama::ambilSemua();
        return view('admin.master-data.agama.index', ['agama' => $agama]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master-data.agama.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agama = new Agama;
        $agama->name = strtoupper($request->name);
        $agama->save();
        return redirect()->route('masterdata-agama.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agama = Agama::ambil($id);
        return view('admin.master-data.agama.show', ['agama' => $agama]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agama = Agama::ambil($id);
        return view('admin.master-data.agama.edit', ['agama' => $agama]);
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
        $agama = Agama::ambil($id);
        $agama->name = strtoupper($request->input('name'));
        $agama->save();
        toast('Update Data agama Berhasil!', 'success');
        return redirect()->route('masterdata-agama.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agama = Agama::find($id);
        $agama->delete();
        toast('Hapus Data agama Berhasil!', 'success');
        //fungsi redirect untuk mengalihkan ke halaman agama index
        return redirect()->route('masterdata-agama.index');
    }
}
