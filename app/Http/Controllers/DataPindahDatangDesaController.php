<?php

namespace App\Http\Controllers;

use App\Agama;
use App\Alamat;
use App\DataPenduduk;
use App\DataPindahDatang;
use App\Desa;
use App\Etnis;
use App\GolonganDarah;
use App\JenisKelamin;
use App\KlasifikasiPindah;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DataPindahDatangDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Carbon::now()->toDateString();
        $pindahdatang = DataPindahDatang::where('desa_id', auth()->user()->desa_id)->get();
        return view('operatordesa.kelola-data.pindah-datang.index', compact('pindahdatang', 'today'));
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
        $klasifikasipindah_id = KlasifikasiPindah::ambilSemua();
        return view('operatordesa.kelola-data.pindah-datang.create', compact('klasifikasipindah_id', 'jeniskelamin_id', 'desa_id', 'agama_id', 'etnis_id', 'golongandarah_id', 'alamat_id'));
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
            'NIK' => 'required|digits:16',
            'NOKK_asal' => 'required|digits:16',
            'nama_KK_asal' => 'required',
            'name' => 'required',
            'jeniskelamin_id' => 'required',
            'tanggallahir' => 'required',
            'tempatlahir' => 'required',
            'agama_id' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'klasifikasipindah_id' => 'required',
            'alamat_asal' => 'required',
            'alamat_id' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'desa_id' => 'required',
        ], [

            'no_skpwni.required' => 'No SKPWNI wajib Diisi',
            'NIK.required' => 'NIK wajib Diisi',
            'NIK.digits' => 'Masukkan 16 Digit/Angka NIK',
            'NOKK_asal.required' => 'No KK Asal wajib Diisi',
            'NOKK_asal.digits' => 'Masukkan 16 Digit/Angka NIK',
            'nama_KK_asal.required' => 'Nama KK Asal Surat wajib Diisi',
            'name.required' => 'Nama Lengkap wajib Diisi',
            'jeniskelamin_id.required' => 'Jenis Kelamin wajib Diisi',
            'tempatlahir.required' => 'Tempat Lahir wajib Diisi',
            'tanggallahir.required' => 'Tanggal Lahir wajib Diisi',
            'agama_id.required' => 'Agama wajib Diisi',
            'nama_ayah.required' => 'Nama Ayah wajib Diisi',
            'nama_ibu.required' => 'Nama Ibu wajib Diisi',
            'klasifikasipindah_id.required' => 'Klasifikasi Pindah wajib Diisi',
            'alamat_asal.required' => 'Alamat Asal wajib Diisi',
            'alamat_id.required' => 'Alamat Sekarang wajib Diisi',
            'rt.required' => 'RT wajib Diisi',
            'rw.required' => 'RW wajib Diisi',
            'desa_id.required' => 'Desa wajib Diisi',
        ]);

        $pindahdatang = new DataPindahDatang;
        $pindahdatang->no_skpwni = $request->no_skpwni;
        $pindahdatang->NOKK_asal = $request->NOKK_asal;
        $pindahdatang->nama_KK_asal = strtoupper($request->nama_KK_asal);
        $pindahdatang->NIK = $request->NIK;
        $pindahdatang->name = strtoupper($request->name);
        $pindahdatang->jeniskelamin_id = $request->jeniskelamin_id;
        $pindahdatang->tempatlahir = strtoupper($request->tempatlahir);
        $pindahdatang->agama_id = $request->agama_id;
        $pindahdatang->tanggallahir = Carbon::createFromFormat('m/d/Y', $request->tanggallahir)->format('Y-m-d');
        $pindahdatang->nama_ayah = strtoupper($request->nama_ayah);
        $pindahdatang->nama_ibu = strtoupper($request->nama_ibu);
        $pindahdatang->alamat_id = $request->alamat_id;
        $pindahdatang->rt = $request->rt;
        $pindahdatang->rw = $request->rw;
        $pindahdatang->alamat_asal = strtoupper($request->alamat_asal);
        $pindahdatang->klasifikasipindah_id = $request->klasifikasipindah_id;
        $pindahdatang->tanggal = Carbon::createFromFormat('m/d/Y', $request->tanggal)->format('Y-m-d');
        $pindahdatang->desa_id = $request->desa_id;
        $pindahdatang->save();
        return redirect()->route('keloladata-datapindahdatangdesa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $desa_id = Desa::where('id', auth()->user()->desa_id)->get();
        $agama_id = Agama::ambilSemua();
        $etnis_id = Etnis::ambilSemua();
        $jeniskelamin_id = JenisKelamin::ambilSemua();
        $golongandarah_id = GolonganDarah::ambilSemua();
        $alamat_id = Alamat::where('desa_id', auth()->user()->desa_id)->get();
        $klasifikasipindah_id = KlasifikasiPindah::ambilSemua();
        $pindahdatang = DataPindahDatang::ambil($id);
        return view('operatordesa.kelola-data.pindah-datang.show', compact('pindahdatang', 'klasifikasipindah_id', 'jeniskelamin_id', 'desa_id', 'agama_id', 'etnis_id', 'golongandarah_id', 'alamat_id'));
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
        $etnis_id = Etnis::ambilSemua();
        $jeniskelamin_id = JenisKelamin::ambilSemua();
        $golongandarah_id = GolonganDarah::ambilSemua();
        $alamat_id = Alamat::where('desa_id', auth()->user()->desa_id)->get();
        $klasifikasipindah_id = KlasifikasiPindah::ambilSemua();
        $pindahdatang = DataPindahDatang::ambil($id);
        return view('operatordesa.kelola-data.pindah-datang.edit', compact('pindahdatang', 'klasifikasipindah_id', 'jeniskelamin_id', 'desa_id', 'agama_id', 'etnis_id', 'golongandarah_id', 'alamat_id'));
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
            'NIK' => 'required|digits:16',
            'NOKK_asal' => 'required|digits:16',
            'nama_KK_asal' => 'required',
            'name' => 'required',
            'jeniskelamin_id' => 'required',
            'tanggallahir' => 'required',
            'tempatlahir' => 'required',
            'agama_id' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'klasifikasipindah_id' => 'required',
            'alamat_asal' => 'required',
            'alamat_id' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'desa_id' => 'required',
        ], [

            'no_skpwni.required' => 'No SKPWNI wajib Diisi',
            'NIK.required' => 'NIK wajib Diisi',
            'NIK.digits' => 'Masukkan 16 Digit/Angka NIK',
            'NOKK_asal.required' => 'No KK Asal wajib Diisi',
            'NOKK_asal.digits' => 'Masukkan 16 Digit/Angka NIK',
            'nama_KK_asal.required' => 'Nama KK Asal Surat wajib Diisi',
            'name.required' => 'Nama Lengkap wajib Diisi',
            'jeniskelamin_id.required' => 'Jenis Kelamin wajib Diisi',
            'tempatlahir.required' => 'Tempat Lahir wajib Diisi',
            'tanggallahir.required' => 'Tanggal Lahir wajib Diisi',
            'agama_id.required' => 'Agama wajib Diisi',
            'nama_ayah.required' => 'Nama Ayah wajib Diisi',
            'nama_ibu.required' => 'Nama Ibu wajib Diisi',
            'klasifikasipindah_id.required' => 'Klasifikasi Pindah wajib Diisi',
            'alamat_asal.required' => 'Alamat Asal wajib Diisi',
            'alamat_id.required' => 'Alamat Sekarang wajib Diisi',
            'rt.required' => 'RT wajib Diisi',
            'rw.required' => 'RW wajib Diisi',
            'desa_id.required' => 'Desa wajib Diisi',
        ]);

        $pindahdatang = DataPindahDatang::ambil($id);
        $pindahdatang->no_skpwni = $request->input('no_skpwni');
        $pindahdatang->NOKK_asal = $request->input('NOKK_asal');
        $pindahdatang->nama_KK_asal = strtoupper($request->input('nama_KK_asal'));
        $pindahdatang->NIK = $request->input('NIK');
        $pindahdatang->name = strtoupper($request->input('name'));
        $pindahdatang->jeniskelamin_id = $request->input('jeniskelamin_id');
        $pindahdatang->tempatlahir = strtoupper($request->input('tempatlahir'));
        $pindahdatang->agama_id = $request->input('agama_id');
        $pindahdatang->tanggallahir = Carbon::createFromFormat('m/d/Y', $request->input('tanggallahir'))->format('Y-m-d');
        $pindahdatang->nama_ayah = strtoupper($request->input('nama_ayah'));
        $pindahdatang->nama_ibu = strtoupper($request->input('nama_ibu'));
        $pindahdatang->alamat_id = $request->input('alamat_id');
        $pindahdatang->rt = $request->input('rt');
        $pindahdatang->rw = $request->input('rw');
        $pindahdatang->alamat_asal = strtoupper($request->input('alamat_asal'));
        $pindahdatang->klasifikasipindah_id = $request->input('klasifikasipindah_id');
        $pindahdatang->tanggal = Carbon::createFromFormat('m/d/Y', $request->input('tanggal'))->format('Y-m-d');
        $pindahdatang->desa_id = $request->input('desa_id');
        $pindahdatang->save();
        return redirect()->route('keloladata-datapindahdatangdesa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pindahdatang = DataPindahDatang::find($id);
        $pindahdatang->delete();
        return redirect()->route('keloladata-datapindahdatangdesa.index');
    }
}
