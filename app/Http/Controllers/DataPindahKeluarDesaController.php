<?php

namespace App\Http\Controllers;

use App\DataPenduduk;
use App\DataPindahKeluar;
use App\Desa;
use App\KlasifikasiPindah;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DataPindahKeluarDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Carbon::now()->toDateString();
        $pindahkeluar = DataPindahKeluar::where('desa_id', auth()->user()->desa_id)->get();
        return view('operatordesa.kelola-data.pindah-keluar.index', compact('pindahkeluar', 'today'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operatordesa.kelola-data.pindah-keluar.create');
    }

    public function cari(Request $request)
    {
        $request->validate([

            'NIK' => 'required|digits:16',
        ], [

            'NIK.required' => 'NIK wajib Diisi',
            'NIK.digits' => 'Masukkan 16 Digit/Angka NIK',
        ]);
        $desa_id = Desa::where('id', auth()->user()->desa_id)->get();
        $klasifikasipindah_id = KlasifikasiPindah::get();
        // menangkap data pencarian
        $NIK = $request->NIK;
        // mengambil data dari table sesuai pencarian data
        $datapenduduk = DataPenduduk::where('NIK', 'like', "%" . $NIK . "%")->get();
        // mengirim data datapenduduk ke view index
        return view('operatordesa.kelola-data.pindah-keluar.ambil', ['datapenduduk' => $datapenduduk, 'desa_id' => $desa_id, 'klasifikasipindah_id' => $klasifikasipindah_id]);
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
            'tanggal' => 'required',
            'alamat_sekarang' => 'required',
        ], [

            'no_skpwni.required' => 'NO SKPWNI wajib Diisi',
            'klasifikasipindah_id.required' => 'Klasifikasi Pindah wajib Diisi',
            'tanggal.required' => 'Tanggal Surat wajib Diisi',
            'alamat_sekarang.required' => 'Alamat Sekarang wajib Diisi',
        ]);

        $pindahkeluar = new DataPindahKeluar;
        $pindahkeluar->NIK = $request->NIK;
        $pindahkeluar->klasifikasipindah_id = $request->klasifikasipindah_id;
        $pindahkeluar->alamat_sekarang = $request->alamat_sekarang;
        $pindahkeluar->no_skpwni = $request->no_skpwni;
        $pindahkeluar->tanggal = Carbon::createFromFormat('m/d/Y', $request->tanggal)->format('Y-m-d');
        $pindahkeluar->desa_id = $request->desa_id;
        $pindahkeluar->save();
        return redirect()->route('keloladata-datapindahkeluardesa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $NIK = $request->NIK;
        $desa_id = Desa::where('id', auth()->user()->desa_id)->get();
        $klasifikasipindah_id = KlasifikasiPindah::get();
        $datapenduduk = DataPenduduk::where('NIK', 'like', "%" . $NIK . "%")->get();
        $pindahkeluar = DataPindahKeluar::ambil($id);
        return view('operatordesa.kelola-data.pindah-keluar.show', compact('desa_id', 'pindahkeluar', 'datapenduduk', 'klasifikasipindah_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $NIK = $request->NIK;
        $desa_id = Desa::where('id', auth()->user()->desa_id)->get();
        $klasifikasipindah_id = KlasifikasiPindah::ambilSemua();
        $datapenduduk = DataPenduduk::where('NIK', 'like', "%" . $NIK . "%")->get();
        $pindahkeluar = DataPindahKeluar::ambil($id);
        return view('operatordesa.kelola-data.pindah-keluar.edit', compact('desa_id', 'pindahkeluar', 'datapenduduk', 'klasifikasipindah_id'));
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
            'tanggal' => 'required',
            'alamat_sekarang' => 'required',
        ], [

            'no_skpwni.required' => 'NO SKPWNI wajib Diisi',
            'klasifikasipindah_id.required' => 'Klasifikasi Pindah wajib Diisi',
            'tanggal.required' => 'Tanggal Surat wajib Diisi',
            'alamat_sekarang.required' => 'Alamat Sekarang wajib Diisi',
        ]);
        $pindahkeluar = DataPindahKeluar::ambil($id);
        $pindahkeluar->tanggal = Carbon::createFromFormat('m/d/Y', $request->input('tanggal'))->format('Y-m-d');
        $pindahkeluar->no_skpwni = $request->input('no_skpwni');
        $pindahkeluar->alamat_sekarang = $request->input('alamat_sekarang');
        $pindahkeluar->klasifikasipindah_id = $request->input('klasifikasipindah_id');
        $pindahkeluar->save();
        return redirect()->route('keloladata-datapindahkeluardesa.index');
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
        return redirect()->route('keloladata-datapindahkeluardesa.index');
    }
}
