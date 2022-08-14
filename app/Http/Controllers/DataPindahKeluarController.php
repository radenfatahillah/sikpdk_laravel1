<?php

namespace App\Http\Controllers;

use App\DataPenduduk;
use App\DataPindahKeluar;
use App\Desa;
use App\KlasifikasiPindah;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DataPindahKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Carbon::now()->toDateString();
        $pindahkeluar = DataPindahKeluar::ambilSemua();
        return view('admin.kelola-data.pindah-keluar.index', compact('pindahkeluar', 'today'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kelola-data.pindah-keluar.create');
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
        $klasifikasipindah_id = KlasifikasiPindah::ambilSemua();
        // mengambil data dari table sesuai pencarian data
        $datapenduduk = DataPenduduk::where('NIK', 'like', "%" . $NIK . "%")->get();
        // mengirim data datapenduduk ke view index
        return view('admin.kelola-data.pindah-keluar.ambil', ['datapenduduk' => $datapenduduk, 'desa_id' => $desa_id, 'klasifikasipindah_id' => $klasifikasipindah_id]);
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

            'no_skpwni' => 'required',
            'klasifikasipindah_id' => 'required',
            'alamat_sekarang' => 'required',
            'tanggal' => 'required',
        ], [

            'no_skpwni.required' => 'Tanggal Meninggal wajib Diisi',
            'klasifikasipindah_id.required' => 'Tempat Meninggal wajib Diisi',
            'alamat_sekarang.required' => 'Sebab Meninggal wajib Diisi',
            'tanggal.required' => 'Sebab Meninggal wajib Diisi',
        ]);

        $pindahkeluar = new DataPindahKeluar;
        $pindahkeluar->NIK = $request->NIK;
        $pindahkeluar->no_skpwni = $request->no_skpwni;
        $pindahkeluar->klasifikasipindah_id = $request->klasifikasipindah_id;
        $pindahkeluar->alamat_sekarang = $request->alamat_sekarang;
        $pindahkeluar->tanggal = Carbon::createFromFormat('m/d/Y', $request->tanggal)->format('Y-m-d');
        $pindahkeluar->desa_id = $request->desa_id;
        $pindahkeluar->save();
        return redirect()->route('keloladata-datapindahkeluar.index');
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
        $pindahkeluar = DataPindahKeluar::ambil($id);
        return view('admin.kelola-data.pindah-keluar.show', compact('desa_id', 'pindahkeluar'));
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
        $pindahkeluar = DataPindahKeluar::ambil($id);
        $klasifikasipindah_id = KlasifikasiPindah::ambilSemua();
        return view('admin.kelola-data.pindah-keluar.edit', compact('desa_id', 'pindahkeluar', 'klasifikasipindah_id'));
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

            'no_skpwni' => 'required',
            'klasifikasipindah_id' => 'required',
            'alamat_sekarang' => 'required',
            'tanggal' => 'required',
        ], [

            'no_skpwni.required' => 'Tanggal Meninggal wajib Diisi',
            'klasifikasipindah_id.required' => 'Tempat Meninggal wajib Diisi',
            'alamat_sekarang.required' => 'Sebab Meninggal wajib Diisi',
            'tanggal.required' => 'Sebab Meninggal wajib Diisi',
        ]);

        $pindahkeluar = DataPindahKeluar::ambil($id);
        $pindahkeluar->no_skpwni = $request->input('no_skpwni');
        $pindahkeluar->klasifikasipindah_id = $request->input('klasifikasipindah_id');
        $pindahkeluar->alamat_sekarang = $request->input('alamat_sekarang');
        $pindahkeluar->tanggal = Carbon::createFromFormat('m/d/Y', $request->input('tanggal'))->format('Y-m-d');
        $pindahkeluar->save();
        return redirect()->route('keloladata-datapindahkeluar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pindahkeluar = DataPindahKeluar::find($id);
        $pindahkeluar->delete();
        return redirect()->route('keloladata-datapindahkeluar.index');
    }
}
