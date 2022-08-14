<?php

namespace App\Http\Controllers;

use App\Agama;
use App\Alamat;
use App\DataKelahiran;
use App\DataPenduduk;
use App\Desa;
use App\Etnis;
use App\GolonganDarah;
use App\JenisKelamin;
use App\JenisPekerjaan;
use App\Kewarganegaraan;
use App\PenyandangCacat;
use App\SHDK;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DataKelahiranDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datakelahiran = DataKelahiran::where('desa_id', auth()->user()->desa_id)->get();
        return view('operatordesa.kelola-data.kelahiran.index', compact('datakelahiran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desa_id = Desa::where('id', auth()->user()->desa_id)->get();
        $agama_id = Agama::ambilSemua();
        $etnis_id = Etnis::ambilSemua();
        $jeniskelamin_id = JenisKelamin::ambilSemua();
        $golongandarah_id = GolonganDarah::ambilSemua();
        $alamat_id = Alamat::where('desa_id', auth()->user()->desa_id)->get();
        return view('operatordesa.kelola-data.kelahiran.create', compact('jeniskelamin_id', 'desa_id', 'agama_id', 'etnis_id', 'golongandarah_id', 'alamat_id'));
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

            'name' => 'required|min:3',
            'nama_KK' => 'required',
            'NOKK' => 'required|digits:16',
            'tempatlahir' => 'required',
            'jeniskelamin_id' => 'required',
            'tanggallahir' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
            'alamat_id' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'golongandarah_id' => 'required',
        ], [

            'name.required' => 'Nama Lengkap wajib diisi',
            'name.min' => 'Minimal 3 Huruf Abjad',
            'nama_KK.required' => 'Nama KK wajib Diisi',
            'NOKK.required' => 'NO KK wajib Diisi',
            'NOKK.digits' => 'Masukkan 16 Digit/Angka No. KK',
            'tempatlahir.required' => 'Tempat Lahir wajib Diisi',
            'tanggallahir.required' => 'Tanggal Lahir wajib Diisi',
            'jeniskelamin_id.required' => 'Jenis Kelamin wajib Diisi',
            'nama_ibu.required' => 'Nama Ibu wajib Diisi',
            'nama_ayah.required' => 'Nama Ayah wajib Diisi',
            'alamat_id.required' => 'Alamat wajib Diisi',
            'rt.required' => 'RT wajib Diisi',
            'rw.required' => 'RW wajib Diisi',
            'golongandarah_id.required' => 'Golongan Darah wajib Diisi',
        ]);

        $datakelahiran = new DataKelahiran;
        $datakelahiran->NOKK = $request->NOKK;
        $datakelahiran->nama_KK = $request->nama_KK;
        $datakelahiran->name = strtoupper($request->name);
        $datakelahiran->jeniskelamin_id = $request->jeniskelamin_id;
        $datakelahiran->tempatlahir = strtoupper($request->tempatlahir);
        $datakelahiran->tanggallahir = Carbon::createFromFormat('m/d/Y', $request->tanggallahir)->format('Y-m-d');
        $datakelahiran->golongandarah_id = $request->golongandarah_id;
        $datakelahiran->nama_ayah = strtoupper($request->nama_ayah);
        $datakelahiran->nama_ibu = strtoupper($request->nama_ibu);
        $datakelahiran->alamat_id = $request->alamat_id;
        $datakelahiran->rt = $request->rt;
        $datakelahiran->rw = $request->rw;
        $datakelahiran->desa_id = $request->desa_id;
        $datakelahiran->save();
        return redirect()->route('keloladata-datakelahirandesa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datakelahiran = DataKelahiran::ambil($id);
        $desa_id = Desa::where('id', auth()->user()->desa_id)->get();
        $agama_id = Agama::ambilSemua();
        $jeniskelamin_id = JenisKelamin::ambilSemua();
        $golongandarah_id = GolonganDarah::ambilSemua();
        $alamat_id = Alamat::where('desa_id', auth()->user()->desa_id)->get();
        return view('operatordesa.kelola-data.kelahiran.show', compact('datakelahiran', 'desa_id', 'agama_id', 'jeniskelamin_id', 'golongandarah_id', 'alamat_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $desa_id = Desa::where('id', auth()->user()->desa_id)->get();
        $agama_id = Agama::ambilSemua();
        $jeniskelamin_id = JenisKelamin::ambilSemua();
        $etnis_id = Etnis::ambilSemua();
        $jenispekerjaan_id = JenisPekerjaan::ambilSemua();
        $golongandarah_id = GolonganDarah::ambilSemua();
        $shdk_id = SHDK::ambilSemua();
        $kewarganegaraan_id = Kewarganegaraan::ambilSemua();
        $alamat_id = Alamat::where('desa_id', auth()->user()->desa_id)->get();
        $datakelahiran = DataKelahiran::ambil($id);
        return view('operatordesa.kelola-data.kelahiran.edit', compact('jeniskelamin_id', 'datakelahiran', 'desa_id', 'agama_id', 'etnis_id', 'golongandarah_id', 'alamat_id'));
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

            'name' => 'required|min:3',
            'nama_KK' => 'required',
            'NOKK' => 'required|digits:16',
            'tempatlahir' => 'required',
            'jeniskelamin_id' => 'required',
            'tanggallahir' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
            'alamat_id' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'golongandarah_id' => 'required',
        ], [

            'name.required' => 'Nama Lengkap wajib diisi',
            'name.min' => 'Minimal 3 Huruf Abjad',
            'nama_KK.required' => 'Nama KK wajib Diisi',
            'NOKK.required' => 'NO KK wajib Diisi',
            'NOKK.digits' => 'Masukkan 16 Digit/Angka No. KK',
            'tempatlahir.required' => 'Tempat Lahir wajib Diisi',
            'tanggallahir.required' => 'Tanggal Lahir wajib Diisi',
            'jeniskelamin_id.required' => 'Jenis Kelamin wajib Diisi',
            'nama_ibu.required' => 'Nama Ibu wajib Diisi',
            'nama_ayah.required' => 'Nama Ayah wajib Diisi',
            'alamat_id.required' => 'Alamat wajib Diisi',
            'rt.required' => 'RT wajib Diisi',
            'rw.required' => 'RW wajib Diisi',
            'golongandarah_id.required' => 'Golongan Darah wajib Diisi',
        ]);

        $datakelahiran = DataKelahiran::ambil($id);
        $datakelahiran->nama_KK = $request->input('nama_KK');
        $datakelahiran->NOKK = $request->input('NOKK');
        $datakelahiran->name = strtoupper($request->input('name'));
        $datakelahiran->jeniskelamin_id = $request->input('jeniskelamin_id');
        $datakelahiran->tempatlahir = strtoupper($request->input('tempatlahir'));
        $datakelahiran->tanggallahir = Carbon::createFromFormat('m/d/Y', $request->input('tanggallahir'))->format('Y-m-d');
        $datakelahiran->golongandarah_id = $request->input('golongandarah_id');
        $datakelahiran->nama_ayah = strtoupper($request->input('nama_ayah'));
        $datakelahiran->nama_ibu = strtoupper($request->input('nama_ibu'));
        $datakelahiran->alamat_id = $request->input('alamat_id');
        $datakelahiran->rt = $request->input('rt');
        $datakelahiran->rw = $request->input('rw');
        $datakelahiran->desa_id = $request->input('desa_id');
        $datakelahiran->save();
        return redirect()->route('keloladata-datakelahirandesa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datakelahiran = DataKelahiran::find($id);
        $datakelahiran->delete();
        return redirect()->route('keloladata-datakelahirandesa.index');
    }
}
