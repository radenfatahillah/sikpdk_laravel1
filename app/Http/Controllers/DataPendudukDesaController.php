<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\DataPenduduk;
use App\Desa;
use App\Agama;
use App\Pendidikan;
use App\JenisPekerjaan;
use App\GolonganDarah;
use App\StatusPerkawinan;
use App\SHDK;
use App\Kewarganegaraan;
use App\Alamat;
use App\DataKelahiran;
use App\Etnis;
use App\PendidikanSedang;
use App\PenyandangCacat;
use App\Imports\DataPendudukImport;
use App\Exports\DataPendudukExport;
use App\JenisKelamin;
use App\KTPEl;
use Maatwebsite\Excel\Facades\Excel;

class DataPendudukDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Carbon::now()->toDateString();
        $datapenduduk = DataPenduduk::where('desa_id', auth()->user()->desa_id)->orderBy('NOKK', 'asc')->orderBy('rt', 'asc')->orderBy('shdk_id', 'asc')->get();
        return view('operatordesa.kelola-data.data-penduduk.index', compact('datapenduduk', 'today'));
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
        $pendidikan_kk_id = Pendidikan::ambilSemua();
        $pendidikan_sedang_id = PendidikanSedang::ambilSemua();
        $jeniskelamin_id = JenisKelamin::ambilSemua();
        $etnis_id = Etnis::ambilSemua();
        $jenispekerjaan_id = JenisPekerjaan::ambilSemua();
        $golongandarah_id = GolonganDarah::ambilSemua();
        $statusperkawinan_id = StatusPerkawinan::ambilSemua();
        $penyandangcacat_id = PenyandangCacat::ambilSemua();
        $shdk_id = SHDK::ambilSemua();
        $kewarganegaraan_id = Kewarganegaraan::ambilSemua();
        $alamat_id = Alamat::where('desa_id', auth()->user()->desa_id)->get();
        $ktpel_id = KTPEl::ambilSemua();
        return view('operatordesa.kelola-data.data-penduduk.create', compact('ktpel_id', 'jeniskelamin_id', 'desa_id', 'agama_id', 'etnis_id', 'pendidikan_kk_id', 'pendidikan_sedang_id', 'penyandangcacat_id', 'jenispekerjaan_id', 'golongandarah_id', 'statusperkawinan_id', 'shdk_id', 'kewarganegaraan_id', 'alamat_id'));
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
            'NIK' => 'required|min:16|max:16|unique:data_penduduk',
            'NOKK' => 'required|min:16|max:16',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
            'jeniskelamin_id' => 'required',
            'agama_id' => 'required',
            'pendidikan_kk_id' => 'required',
            'pendidikan_sedang_id' => 'required',
            'jenispekerjaan_id' => 'required',
            'golongandarah_id' => 'required',
            'statusperkawinan_id' => 'required',
            'etnis_id' => 'required',
            'shdk_id' => 'required',
            'kewarganegaraan_id' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'alamat_id' => 'required',
            'penyandangcacat_id' => 'required',
            'ktpel_id' => 'required',
            'status' => 'required',
            'desa_id' => 'required',
        ], [

            'name.required' => 'Nama Lengkap wajib diisi',
            'name.min' => 'Minimal 3 Huruf Abjad',
            'NIK.required' => 'NIK wajib Diisi',
            'NIK.min' => 'Masukkan 16 Digit NIK',
            'NIK.max' => 'Masukkan 16 Digit NIK',
            'NIK.unique' => 'NIK sudah ada',
            'NOKK.required' => 'NO KK wajib Diisi',
            'NOKK.min' => 'Masukkan 16 Digit No. KK',
            'NOKK.max' => 'Masukkan 16 Digit No. KK',
            'tempatlahir.required' => 'Tempat Lahir wajib Diisi',
            'tanggallahir.required' => 'Tanggal Lahir wajib Diisi',
            'jeniskelamin_id.required' => 'Jenis Kelamin wajib Diisi',
            'agama_id.required' => 'Agama wajib Diisi',
            'pendidikan_kk_id.required' => 'Pendidikan dalam KK wajib Diisi',
            'pendidikan_sedang_id.required' => 'Pendidikan Sedang Tempuh wajib Diisi',
            'jenispekerjaan_id.required' => 'Jenis Pekerjaan wajib Diisi',
            'golongandarah_id.required' => 'Golongan Darah wajib Diisi',
            'statusperkawinan_id.required' => 'Status Perkawinan wajib Diisi',
            'etnis_id.required' => 'Etnis wajib Diisi',
            'shdk_id.required' => 'SHDK wajib Diisi',
            'kewarganegaraan_id.required' => 'Kewarganegaraan wajib Diisi',
            'nama_ibu.required' => 'Nama Ibu wajib Diisi',
            'nama_ayah.required' => 'Nama Ayah wajib Diisi',
            'rt.required' => 'RT wajib Diisi',
            'rw.required' => 'RW wajib Diisi',
            'alamat_id.required' => 'Alamat wajib Diisi',
            'penyandangcacat_id.required' => 'Penyandang cacat wajib Diisi',
            'ktpel_id.required' => 'KTP-el wajib Diisi',
            'status.required' => 'Status wajib Diisi',
            'desa_id.required' => 'Desa wajib Diisi',
        ]);

        $datapenduduk = new DataPenduduk;
        $datapenduduk->NIK = $request->NIK;
        $datapenduduk->NOKK = $request->NOKK;
        $datapenduduk->name = strtoupper($request->name);
        $datapenduduk->jeniskelamin_id = $request->jeniskelamin_id;
        $datapenduduk->tempatlahir = strtoupper($request->tempatlahir);
        $datapenduduk->tanggallahir = Carbon::createFromFormat('m/d/Y', $request->tanggallahir)->format('Y-m-d');
        $datapenduduk->agama_id = $request->agama_id;
        $datapenduduk->pendidikan_kk_id = $request->pendidikan_kk_id;
        $datapenduduk->pendidikan_sedang_id = $request->pendidikan_sedang_id;
        $datapenduduk->etnis_id = $request->etnis_id;
        $datapenduduk->penyandangcacat_id = $request->penyandangcacat_id;
        $datapenduduk->jenispekerjaan_id = $request->jenispekerjaan_id;
        $datapenduduk->golongandarah_id = $request->golongandarah_id;
        $datapenduduk->statusperkawinan_id = $request->statusperkawinan_id;
        $datapenduduk->shdk_id = $request->shdk_id;
        $datapenduduk->kewarganegaraan_id = $request->kewarganegaraan_id;
        $datapenduduk->no_paspor = $request->no_paspor;
        $datapenduduk->no_kitap = $request->no_kitap;
        $datapenduduk->nama_ayah = strtoupper($request->nama_ayah);
        $datapenduduk->nama_ibu = strtoupper($request->nama_ibu);
        $datapenduduk->alamat_id = $request->alamat_id;
        $datapenduduk->rt = $request->rt;
        $datapenduduk->rw = $request->rw;
        $datapenduduk->desa_id = $request->desa_id;
        $datapenduduk->ktpel_id = $request->ktpel_id;
        $datapenduduk->status = $request->status;
        $datapenduduk->save();
        return redirect()->route('keloladata-datapendudukdesa.index', ['data' => $request]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $NIK
     * @return \Illuminate\Http\Response
     */
    public function show($NIK)
    {
        $desa_id = Desa::where('id', auth()->user()->desa_id)->get();
        $agama_id = Agama::ambilSemua();
        $pendidikan_kk_id = Pendidikan::ambilSemua();
        $pendidikan_sedang_id = PendidikanSedang::ambilSemua();
        $jeniskelamin_id = JenisKelamin::ambilSemua();
        $etnis_id = Etnis::ambilSemua();
        $penyandangcacat_id = PenyandangCacat::ambilSemua();
        $jenispekerjaan_id = JenisPekerjaan::ambilSemua();
        $golongandarah_id = GolonganDarah::ambilSemua();
        $statusperkawinan_id = statusperkawinan::ambilSemua();
        $shdk_id = SHDK::ambilSemua();
        $kewarganegaraan_id = Kewarganegaraan::ambilSemua();
        $alamat_id = Alamat::where('desa_id', auth()->user()->desa_id)->get();
        $ktpel_id = KTPEl::ambilSemua();
        $datapenduduk = DataPenduduk::ambil($NIK);
        return view('operatordesa.kelola-data.data-penduduk.show', compact('ktpel_id', 'jeniskelamin_id', 'datapenduduk', 'desa_id', 'agama_id', 'etnis_id', 'pendidikan_kk_id', 'pendidikan_sedang_id', 'penyandangcacat_id', 'jenispekerjaan_id', 'golongandarah_id', 'statusperkawinan_id', 'shdk_id', 'kewarganegaraan_id', 'alamat_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $NIK
     * @return \Illuminate\Http\Response
     */
    public function edit($NIK)
    {
        $desa_id = Desa::where('id', auth()->user()->desa_id)->get();
        $agama_id = Agama::ambilSemua();
        $pendidikan_kk_id = Pendidikan::ambilSemua();
        $pendidikan_sedang_id = PendidikanSedang::ambilSemua();
        $jeniskelamin_id = JenisKelamin::ambilSemua();
        $etnis_id = Etnis::ambilSemua();
        $penyandangcacat_id = PenyandangCacat::ambilSemua();
        $jenispekerjaan_id = JenisPekerjaan::ambilSemua();
        $golongandarah_id = GolonganDarah::ambilSemua();
        $statusperkawinan_id = statusperkawinan::ambilSemua();
        $shdk_id = SHDK::ambilSemua();
        $kewarganegaraan_id = Kewarganegaraan::ambilSemua();
        $alamat_id = Alamat::where('desa_id', auth()->user()->desa_id)->get();
        $datapenduduk = DataPenduduk::ambil($NIK);
        $ktpel_id = KTPEl::ambilSemua();
        return view('operatordesa.kelola-data.data-penduduk.edit', compact('ktpel_id', 'jeniskelamin_id', 'datapenduduk', 'desa_id', 'agama_id', 'etnis_id', 'pendidikan_kk_id', 'pendidikan_sedang_id', 'penyandangcacat_id', 'jenispekerjaan_id', 'golongandarah_id', 'statusperkawinan_id', 'shdk_id', 'kewarganegaraan_id', 'alamat_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $NIK
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $NIK)
    {
        $request->validate([

            'name' => 'required|min:3',
            'NOKK' => 'required|min:16|max:16',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
        ], [

            'name.required' => 'Nama Lengkap wajib diisi',
            'name.min' => 'Minimal 3 Huruf Abjad',
            'NOKK.required' => 'NO KK wajib Diisi',
            'NOKK.min' => 'Masukkan 16 Digit No. KK',
            'NOKK.max' => 'Masukkan 16 Digit No. KK',
            'tempatlahir.required' => 'Tempat Lahir wajib Diisi',
            'tanggallahir.required' => 'Tanggal Lahir wajib Diisi',
            'nama_ibu.required' => 'Nama Ibu wajib Diisi',
            'nama_ayah.required' => 'Nama Ayah wajib Diisi',
        ]);

        $datapenduduk = DataPenduduk::ambil($NIK);
        $datapenduduk->NIK = $request->input('NIK');
        $datapenduduk->NOKK = $request->input('NOKK');
        $datapenduduk->name = strtoupper($request->input('name'));
        $datapenduduk->jeniskelamin_id = $request->input('jeniskelamin_id');
        $datapenduduk->tempatlahir = strtoupper($request->input('tempatlahir'));
        $datapenduduk->tanggallahir = Carbon::createFromFormat('m/d/Y', $request->input('tanggallahir'))->format('Y-m-d');
        $datapenduduk->agama_id = $request->input('agama_id');
        $datapenduduk->etnis_id = $request->input('etnis_id');
        $datapenduduk->pendidikan_kk_id = $request->input('pendidikan_kk_id');
        $datapenduduk->pendidikan_sedang_id = $request->input('pendidikan_sedang_id');
        $datapenduduk->penyandangcacat_id = $request->input('penyandangcacat_id');
        $datapenduduk->jenispekerjaan_id = $request->input('jenispekerjaan_id');
        $datapenduduk->golongandarah_id = $request->input('golongandarah_id');
        $datapenduduk->statusperkawinan_id = $request->input('statusperkawinan_id');
        $datapenduduk->shdk_id = $request->input('shdk_id');
        $datapenduduk->kewarganegaraan_id = $request->input('kewarganegaraan_id');
        $datapenduduk->no_paspor = $request->input('no_paspor');
        $datapenduduk->no_kitap = $request->input('no_kitap');
        $datapenduduk->nama_ayah = strtoupper($request->input('nama_ayah'));
        $datapenduduk->nama_ibu = strtoupper($request->input('nama_ibu'));
        $datapenduduk->alamat_id = $request->input('alamat_id');
        $datapenduduk->rt = $request->input('rt');
        $datapenduduk->rw = $request->input('rw');
        $datapenduduk->desa_id = $request->input('desa_id');
        $datapenduduk->ktpel_id = $request->input('ktpel_id');
        $datapenduduk->status = $request->input('status');
        $datapenduduk->save();
        return redirect()->route('keloladata-datapendudukdesa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $NIK
     * @return \Illuminate\Http\Response
     */
    public function destroy($NIK)
    {
        $datapenduduk = DataPenduduk::find($NIK);
        $datapenduduk->delete();
        //fungsi redirect untuk mengalihkan ke halaman datapenduduk index
        return redirect()->route('keloladata-datapendudukdesa.index');
    }
}
