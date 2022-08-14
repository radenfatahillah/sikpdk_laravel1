<?php

namespace App\Http\Controllers;

use App\DataKematian;
use App\DataPenduduk;
use App\Desa;
use App\JenisPekerjaan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DataKematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datakematian = DataKematian::ambilSemua();
        return view('admin.kelola-data.kematian.index', compact('datakematian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kelola-data.kematian.create');
    }

    public function cari(Request $request)
    {
        $request->validate([

            'NIK' => 'required|digits:16|',
        ], [

            'NIK.required' => 'NIK wajib Diisi',
            'NIK.digits' => 'Masukkan 16 Digit/Angka NIK',
        ]);
        $desa_id = Desa::ambilSemua();
        // menangkap data pencarian
        $NIK = $request->NIK;
        // mengambil data dari table sesuai pencarian data
        $datapenduduk = DataPenduduk::where('NIK', 'like', "%" . $NIK . "%")->get();
        // mengirim data datapenduduk ke view index
        return view('admin.kelola-data.kematian.ambil', ['datapenduduk' => $datapenduduk, 'desa_id' => $desa_id]);
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

            'tanggal_meninggal' => 'required',
            'tempat_meninggal' => 'required',
            'sebab_meninggal' => 'required',
        ], [

            'tanggal_meninggal.required' => 'Tanggal Meninggal wajib Diisi',
            'tempat_meninggal.required' => 'Tempat Meninggal wajib Diisi',
            'sebab_meninggal.required' => 'Sebab Meninggal wajib Diisi',
        ]);

        $datakematian = new DataKematian;
        $datakematian->NIK = $request->NIK;
        $datakematian->tanggal_meninggal = Carbon::createFromFormat('m/d/Y', $request->tanggal_meninggal)->format('Y-m-d');
        $datakematian->tempat_meninggal = $request->tempat_meninggal;
        $datakematian->sebab_meninggal = $request->sebab_meninggal;
        $datakematian->desa_id = $request->desa_id;
        $datakematian->save();
        return redirect()->route('keloladata-datakematian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $desa_id = Desa::ambilSemua();
        $datakematian = DataKematian::ambil($id);
        return view('admin.kelola-data.kematian.show', compact('desa_id', 'datakematian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $desa_id = Desa::ambilSemua();
        $datakematian = DataKematian::ambil($id);
        return view('admin.kelola-data.kematian.edit', compact('desa_id', 'datakematian'));
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
        $request->validate([

            'tanggal_meninggal' => 'required',
            'tempat_meninggal' => 'required',
            'sebab_meninggal' => 'required',
        ], [

            'tanggal_meninggal.required' => 'Tanggal Meninggal wajib Diisi',
            'tempat_meninggal.required' => 'Tempat Meninggal wajib Diisi',
            'sebab_meninggal.required' => 'Sebab Meninggal wajib Diisi',
        ]);

        $datakematian = DataKematian::ambil($id);
        $datakematian->tanggal_meninggal = Carbon::createFromFormat('m/d/Y', $request->input('tanggal_meninggal'))->format('Y-m-d');
        $datakematian->tempat_meninggal = $request->input('tempat_meninggal');
        $datakematian->sebab_meninggal = $request->input('sebab_meninggal');
        $datakematian->save();
        return redirect()->route('keloladata-datakematian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datakematian = DataKematian::find($id);
        $datakematian->delete();
        return redirect()->route('keloladata-datakematian.index');
    }
}
