<?php

namespace App\Http\Controllers;

use App\Agama;
use App\Alamat;
use App\BPD;
use App\DataPenduduk;
use App\DataUmumKecamatan;
use App\Desa;
use App\JenisPekerjaan;
use App\PendidikanSedang;
use App\PerangkatDesa;
use App\PotensiUmum;
use App\ProfilKecamatan;
use Illuminate\Http\Request;

class MasyarakatUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlahlakilaki = DataPenduduk::where('jeniskelamin_id', '1')->count();
        $jumlahperempuan = DataPenduduk::where('jeniskelamin_id', '2')->count();
        $jumlahpenduduk = DataPenduduk::count();
        $desa = Desa::ambilSemua()->count();
        $profilkecamatan = ProfilKecamatan::ambilSemua()->first();
        return view('landingpage.index', [
            'jumlahlakilaki' => $jumlahlakilaki,
            'jumlahperempuan' => $jumlahperempuan,
            'jumlahpenduduk' => $jumlahpenduduk,
            'desa' => $desa,
            'profilkecamatan' => $profilkecamatan,
        ]);
    }

    public function profildesa()
    {
        $desa = Desa::ambilSemua();
        $profilkecamatan = ProfilKecamatan::ambilSemua()->first();
        return view('landingpage.profildesa', ['desa' => $desa, 'profilkecamatan' => $profilkecamatan]);
    }

    public function sejarah()
    {
        $desa = Desa::ambilSemua();
        $profilkecamatan = ProfilKecamatan::ambilSemua()->first();
        $dataumumkecamatan = DataUmumKecamatan::first();
        return view('landingpage.sejarah', ['desa' => $desa, 'profilkecamatan' => $profilkecamatan, 'dataumumkecamatan' => $dataumumkecamatan]);
    }

    public function letakgeografis()
    {
        $desa = Desa::ambilSemua();
        $profilkecamatan = ProfilKecamatan::ambilSemua()->first();
        $dataumumkecamatan = DataUmumKecamatan::first();
        return view('landingpage.letakgeografis', ['desa' => $desa, 'profilkecamatan' => $profilkecamatan, 'dataumumkecamatan' => $dataumumkecamatan]);
    }

    public function strukturpemerintahan()
    {
        $profilkecamatan = ProfilKecamatan::ambilSemua()->first();
        $desa = Desa::ambilSemua();
        return view('landingpage.strukturpemerintahan', ['desa' => $desa, 'profilkecamatan' => $profilkecamatan]);
    }

    public function visimisi()
    {
        $profilkecamatan = ProfilKecamatan::ambilSemua()->first();
        $desa = Desa::ambilSemua();
        return view('landingpage.visimisi', ['desa' => $desa, 'profilkecamatan' => $profilkecamatan]);
    }

    public function detailprofildesa($desa_id)
    {
        $profilkecamatan = ProfilKecamatan::ambilSemua()->first();
        $profildesa = Desa::where('id', $desa_id)->get();
        $perangkatdesa = PerangkatDesa::where('desa_id', $desa_id)->get();
        $bpddesa = BPD::where('desa_id', $desa_id)->get();
        $alamat = Alamat::where('desa_id', $desa_id)->get();
        $potensiumum = PotensiUmum::where('desa_id', $desa_id)->first();
        $jumlahlakilaki = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->count();
        $jumlahperempuan = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->count();
        $jumlahpenduduk = DataPenduduk::where('desa_id', $desa_id)->count();
        $jumlahkk = DataPenduduk::where('desa_id', $desa_id)->distinct('NOKK')->count();
        $jml_pdk_lk1 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '1')->count();
        $jml_pdk_lk2 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '2')->count();
        $jml_pdk_lk3 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '3')->count();
        $jml_pdk_lk4 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '4')->count();
        $jml_pdk_lk5 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '5')->count();
        $jml_pdk_lk6 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '6')->count();
        $jml_pdk_lk7 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '7')->count();
        $jml_pdk_lk8 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '8')->count();
        $jml_pdk_lk9 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '9')->count();
        $jml_pdk_lk10 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '10')->count();
        $jml_pdk_lk11 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '11')->count();
        $jml_pdk_lk12 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '12')->count();
        $jml_pdk_lk13 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '13')->count();
        $jml_pdk_lk14 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '14')->count();
        $jml_pdk_lk15 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '15')->count();
        $jml_pdk_lk16 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '16')->count();
        $jml_pdk_lk17 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '17')->count();
        $jml_pdk_lk18 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '18')->count();
        $jml_pdk_lk19 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '19')->count();
        $jml_pdk_lk20 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '20')->count();
        $jml_pdk_lk21 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '21')->count();
        $jml_pdk_lk22 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '22')->count();
        $jml_pdk_lk23 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '23')->count();
        $jml_pdk_lk24 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '24')->count();
        $jml_pdk_lk25 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '25')->count();
        $jml_pdk_lk26 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '26')->count();
        $jml_pdk_lk27 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '27')->count();
        $jml_pdk_lk28 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '28')->count();
        $jml_pdk_lk29 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '29')->count();
        $jml_pdk_lk30 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '30')->count();
        $jml_pdk_pr1 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '1')->count();
        $jml_pdk_pr2 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '2')->count();
        $jml_pdk_pr3 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '3')->count();
        $jml_pdk_pr4 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '4')->count();
        $jml_pdk_pr5 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '5')->count();
        $jml_pdk_pr6 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '6')->count();
        $jml_pdk_pr7 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '7')->count();
        $jml_pdk_pr8 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '8')->count();
        $jml_pdk_pr9 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '9')->count();
        $jml_pdk_pr10 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '10')->count();
        $jml_pdk_pr11 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '11')->count();
        $jml_pdk_pr12 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '12')->count();
        $jml_pdk_pr13 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '13')->count();
        $jml_pdk_pr14 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '14')->count();
        $jml_pdk_pr15 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '15')->count();
        $jml_pdk_pr16 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '16')->count();
        $jml_pdk_pr17 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '17')->count();
        $jml_pdk_pr18 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '18')->count();
        $jml_pdk_pr19 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '19')->count();
        $jml_pdk_pr20 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '20')->count();
        $jml_pdk_pr21 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '21')->count();
        $jml_pdk_pr22 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '22')->count();
        $jml_pdk_pr23 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '23')->count();
        $jml_pdk_pr24 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '24')->count();
        $jml_pdk_pr25 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '25')->count();
        $jml_pdk_pr26 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '26')->count();
        $jml_pdk_pr27 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '27')->count();
        $jml_pdk_pr28 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '28')->count();
        $jml_pdk_pr29 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '29')->count();
        $jml_pdk_pr30 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '30')->count();
        $jml_krj_pr1 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '1')->count();
        $jml_krj_pr2 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '2')->count();
        $jml_krj_pr3 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '3')->count();
        $jml_krj_pr4 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '4')->count();
        $jml_krj_pr5 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '5')->count();
        $jml_krj_pr6 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '6')->count();
        $jml_krj_pr7 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '7')->count();
        $jml_krj_pr8 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '8')->count();
        $jml_krj_pr9 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '9')->count();
        $jml_krj_pr10 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '10')->count();
        $jml_krj_pr11 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '11')->count();
        $jml_krj_pr12 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '12')->count();
        $jml_krj_pr13 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '13')->count();
        $jml_krj_pr14 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '14')->count();
        $jml_krj_pr15 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '15')->count();
        $jml_krj_pr16 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '16')->count();
        $jml_krj_pr17 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '17')->count();
        $jml_krj_pr18 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '18')->count();
        $jml_krj_pr19 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '19')->count();
        $jml_krj_pr20 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '20')->count();
        $jml_krj_pr21 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '21')->count();
        $jml_krj_pr22 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '22')->count();
        $jml_krj_pr23 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '23')->count();
        $jml_krj_pr24 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '24')->count();
        $jml_krj_pr25 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '25')->count();
        $jml_krj_pr26 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '26')->count();
        $jml_krj_pr27 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '27')->count();
        $jml_krj_pr28 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '28')->count();
        $jml_krj_pr29 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '29')->count();
        $jml_krj_pr30 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '30')->count();
        $jml_krj_pr31 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '31')->count();
        $jml_krj_pr32 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '32')->count();
        $jml_krj_pr33 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '33')->count();
        $jml_krj_pr34 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '34')->count();
        $jml_krj_pr35 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '35')->count();
        $jml_krj_pr36 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '36')->count();
        $jml_krj_pr37 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '37')->count();
        $jml_krj_pr38 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '38')->count();
        $jml_krj_pr39 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '39')->count();
        $jml_krj_pr40 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '40')->count();
        $jml_krj_pr41 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '41')->count();
        $jml_krj_pr42 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '42')->count();
        $jml_krj_pr43 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '43')->count();
        $jml_krj_pr44 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '44')->count();
        $jml_krj_pr45 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '45')->count();
        $jml_krj_pr46 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '46')->count();
        $jml_krj_pr47 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '47')->count();
        $jml_krj_pr48 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '48')->count();
        $jml_krj_pr49 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '49')->count();
        $jml_krj_pr50 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '50')->count();
        $jml_krj_pr51 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '51')->count();
        $jml_krj_pr52 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '52')->count();
        $jml_krj_pr53 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '53')->count();
        $jml_krj_pr54 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '54')->count();
        $jml_krj_pr55 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '55')->count();
        $jml_krj_pr56 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '56')->count();
        $jml_krj_pr57 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '57')->count();
        $jml_krj_pr58 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '58')->count();
        $jml_krj_pr59 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '59')->count();
        $jml_krj_pr60 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '60')->count();
        $jml_krj_pr61 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '61')->count();
        $jml_krj_pr62 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '62')->count();
        $jml_krj_pr63 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '63')->count();
        $jml_krj_pr64 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '64')->count();
        $jml_krj_pr65 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '65')->count();
        $jml_krj_pr66 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '66')->count();
        $jml_krj_pr67 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '67')->count();
        $jml_krj_pr68 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '68')->count();
        $jml_krj_pr69 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '69')->count();
        $jml_krj_pr70 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '70')->count();
        $jml_krj_pr71 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '71')->count();
        $jml_krj_pr72 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '72')->count();
        $jml_krj_pr73 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '73')->count();
        $jml_krj_pr74 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '74')->count();
        $jml_krj_pr75 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '75')->count();
        $jml_krj_pr76 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '76')->count();
        $jml_krj_pr77 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '77')->count();
        $jml_krj_pr78 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '78')->count();
        $jml_krj_pr79 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '79')->count();
        $jml_krj_pr80 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '80')->count();
        $jml_krj_pr81 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '81')->count();
        $jml_krj_pr82 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '82')->count();
        $jml_krj_pr83 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '83')->count();
        $jml_krj_pr84 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '84')->count();
        $jml_krj_pr85 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '85')->count();
        $jml_krj_pr86 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '86')->count();
        $jml_krj_pr87 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '87')->count();
        $jml_krj_pr88 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '88')->count();
        $jml_krj_pr89 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '89')->count();

        $jml_krj_lk1 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '1')->count();
        $jml_krj_lk2 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '2')->count();
        $jml_krj_lk3 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '3')->count();
        $jml_krj_lk4 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '4')->count();
        $jml_krj_lk5 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '5')->count();
        $jml_krj_lk6 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '6')->count();
        $jml_krj_lk7 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '7')->count();
        $jml_krj_lk8 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '8')->count();
        $jml_krj_lk9 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '9')->count();
        $jml_krj_lk10 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '10')->count();
        $jml_krj_lk11 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '11')->count();
        $jml_krj_lk12 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '12')->count();
        $jml_krj_lk13 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '13')->count();
        $jml_krj_lk14 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '14')->count();
        $jml_krj_lk15 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '15')->count();
        $jml_krj_lk16 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '16')->count();
        $jml_krj_lk17 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '17')->count();
        $jml_krj_lk18 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '18')->count();
        $jml_krj_lk19 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '19')->count();
        $jml_krj_lk20 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '20')->count();
        $jml_krj_lk21 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '21')->count();
        $jml_krj_lk22 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '22')->count();
        $jml_krj_lk23 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '23')->count();
        $jml_krj_lk24 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '24')->count();
        $jml_krj_lk25 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '25')->count();
        $jml_krj_lk26 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '26')->count();
        $jml_krj_lk27 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '27')->count();
        $jml_krj_lk28 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '28')->count();
        $jml_krj_lk29 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '29')->count();
        $jml_krj_lk30 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '30')->count();
        $jml_krj_lk31 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '31')->count();
        $jml_krj_lk32 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '32')->count();
        $jml_krj_lk33 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '33')->count();
        $jml_krj_lk34 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '34')->count();
        $jml_krj_lk35 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '35')->count();
        $jml_krj_lk36 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '36')->count();
        $jml_krj_lk37 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '37')->count();
        $jml_krj_lk38 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '38')->count();
        $jml_krj_lk39 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '39')->count();
        $jml_krj_lk40 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '40')->count();
        $jml_krj_lk41 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '41')->count();
        $jml_krj_lk42 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '42')->count();
        $jml_krj_lk43 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '43')->count();
        $jml_krj_lk44 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '44')->count();
        $jml_krj_lk45 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '45')->count();
        $jml_krj_lk46 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '46')->count();
        $jml_krj_lk47 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '47')->count();
        $jml_krj_lk48 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '48')->count();
        $jml_krj_lk49 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '49')->count();
        $jml_krj_lk50 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '50')->count();
        $jml_krj_lk51 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '51')->count();
        $jml_krj_lk52 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '52')->count();
        $jml_krj_lk53 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '53')->count();
        $jml_krj_lk54 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '54')->count();
        $jml_krj_lk55 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '55')->count();
        $jml_krj_lk56 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '56')->count();
        $jml_krj_lk57 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '57')->count();
        $jml_krj_lk58 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '58')->count();
        $jml_krj_lk59 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '59')->count();
        $jml_krj_lk60 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '60')->count();
        $jml_krj_lk61 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '61')->count();
        $jml_krj_lk62 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '62')->count();
        $jml_krj_lk63 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '63')->count();
        $jml_krj_lk64 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '64')->count();
        $jml_krj_lk65 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '65')->count();
        $jml_krj_lk66 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '66')->count();
        $jml_krj_lk67 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '67')->count();
        $jml_krj_lk68 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '68')->count();
        $jml_krj_lk69 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '69')->count();
        $jml_krj_lk70 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '70')->count();
        $jml_krj_lk71 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '71')->count();
        $jml_krj_lk72 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '72')->count();
        $jml_krj_lk73 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '73')->count();
        $jml_krj_lk74 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '74')->count();
        $jml_krj_lk75 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '75')->count();
        $jml_krj_lk76 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '76')->count();
        $jml_krj_lk77 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '77')->count();
        $jml_krj_lk78 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '78')->count();
        $jml_krj_lk79 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '79')->count();
        $jml_krj_lk80 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '80')->count();
        $jml_krj_lk81 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '81')->count();
        $jml_krj_lk82 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '82')->count();
        $jml_krj_lk83 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '83')->count();
        $jml_krj_lk84 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '84')->count();
        $jml_krj_lk85 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '85')->count();
        $jml_krj_lk86 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '86')->count();
        $jml_krj_lk87 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '87')->count();
        $jml_krj_lk88 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '88')->count();
        $jml_krj_lk89 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '89')->count();

        $jml_agm_lk1 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '1')->count();
        $jml_agm_lk2 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '2')->count();
        $jml_agm_lk3 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '3')->count();
        $jml_agm_lk4 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '4')->count();
        $jml_agm_lk5 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '5')->count();
        $jml_agm_lk6 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '6')->count();
        $jml_agm_lk7 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '7')->count();

        $jml_agm_pr1 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '1')->count();
        $jml_agm_pr2 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '2')->count();
        $jml_agm_pr3 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '3')->count();
        $jml_agm_pr4 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '4')->count();
        $jml_agm_pr5 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '5')->count();
        $jml_agm_pr6 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '6')->count();
        $jml_agm_pr7 = DataPenduduk::where('desa_id', $desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '7')->count();
        $pendidikansedang = PendidikanSedang::ambilSemua();
        $jenispekerjaan_id = JenisPekerjaan::ambilSemua();
        $agama_id = Agama::ambilSemua();
        return view('landingpage.detailprofildesa', compact(
            'profilkecamatan',
            'agama_id',
            'pendidikansedang',
            'jenispekerjaan_id',
            'profildesa',
            'potensiumum',
            'perangkatdesa',
            'bpddesa',
            'alamat',
            'jumlahlakilaki',
            'jumlahperempuan',
            'jumlahpenduduk',
            'jumlahkk',
            'jml_pdk_lk1',
            'jml_pdk_lk2',
            'jml_pdk_lk3',
            'jml_pdk_lk4',
            'jml_pdk_lk5',
            'jml_pdk_lk6',
            'jml_pdk_lk7',
            'jml_pdk_lk8',
            'jml_pdk_lk9',
            'jml_pdk_lk10',
            'jml_pdk_lk11',
            'jml_pdk_lk12',
            'jml_pdk_lk13',
            'jml_pdk_lk14',
            'jml_pdk_lk15',
            'jml_pdk_lk16',
            'jml_pdk_lk17',
            'jml_pdk_lk18',
            'jml_pdk_lk19',
            'jml_pdk_lk20',
            'jml_pdk_lk21',
            'jml_pdk_lk22',
            'jml_pdk_lk23',
            'jml_pdk_lk24',
            'jml_pdk_lk25',
            'jml_pdk_lk26',
            'jml_pdk_lk27',
            'jml_pdk_lk28',
            'jml_pdk_lk29',
            'jml_pdk_lk30',
            'jml_pdk_pr1',
            'jml_pdk_pr2',
            'jml_pdk_pr3',
            'jml_pdk_pr4',
            'jml_pdk_pr5',
            'jml_pdk_pr6',
            'jml_pdk_pr7',
            'jml_pdk_pr8',
            'jml_pdk_pr9',
            'jml_pdk_pr10',
            'jml_pdk_pr11',
            'jml_pdk_pr12',
            'jml_pdk_pr13',
            'jml_pdk_pr14',
            'jml_pdk_pr15',
            'jml_pdk_pr16',
            'jml_pdk_pr17',
            'jml_pdk_pr18',
            'jml_pdk_pr19',
            'jml_pdk_pr20',
            'jml_pdk_pr21',
            'jml_pdk_pr22',
            'jml_pdk_pr23',
            'jml_pdk_pr24',
            'jml_pdk_pr25',
            'jml_pdk_pr26',
            'jml_pdk_pr27',
            'jml_pdk_pr28',
            'jml_pdk_pr29',
            'jml_pdk_pr30',

            'jml_krj_lk1',
            'jml_krj_lk2',
            'jml_krj_lk3',
            'jml_krj_lk4',
            'jml_krj_lk5',
            'jml_krj_lk6',
            'jml_krj_lk7',
            'jml_krj_lk8',
            'jml_krj_lk9',
            'jml_krj_lk10',
            'jml_krj_lk11',
            'jml_krj_lk12',
            'jml_krj_lk13',
            'jml_krj_lk14',
            'jml_krj_lk15',
            'jml_krj_lk16',
            'jml_krj_lk17',
            'jml_krj_lk18',
            'jml_krj_lk19',
            'jml_krj_lk20',
            'jml_krj_lk21',
            'jml_krj_lk22',
            'jml_krj_lk23',
            'jml_krj_lk24',
            'jml_krj_lk25',
            'jml_krj_lk26',
            'jml_krj_lk27',
            'jml_krj_lk28',
            'jml_krj_lk29',
            'jml_krj_lk30',
            'jml_krj_lk31',
            'jml_krj_lk32',
            'jml_krj_lk33',
            'jml_krj_lk34',
            'jml_krj_lk35',
            'jml_krj_lk36',
            'jml_krj_lk37',
            'jml_krj_lk38',
            'jml_krj_lk39',
            'jml_krj_lk40',
            'jml_krj_lk41',
            'jml_krj_lk42',
            'jml_krj_lk43',
            'jml_krj_lk44',
            'jml_krj_lk45',
            'jml_krj_lk46',
            'jml_krj_lk47',
            'jml_krj_lk48',
            'jml_krj_lk49',
            'jml_krj_lk50',
            'jml_krj_lk51',
            'jml_krj_lk52',
            'jml_krj_lk53',
            'jml_krj_lk54',
            'jml_krj_lk55',
            'jml_krj_lk56',
            'jml_krj_lk57',
            'jml_krj_lk58',
            'jml_krj_lk59',
            'jml_krj_lk60',
            'jml_krj_lk61',
            'jml_krj_lk62',
            'jml_krj_lk63',
            'jml_krj_lk64',
            'jml_krj_lk65',
            'jml_krj_lk66',
            'jml_krj_lk67',
            'jml_krj_lk68',
            'jml_krj_lk69',
            'jml_krj_lk70',
            'jml_krj_lk71',
            'jml_krj_lk72',
            'jml_krj_lk73',
            'jml_krj_lk74',
            'jml_krj_lk75',
            'jml_krj_lk76',
            'jml_krj_lk77',
            'jml_krj_lk78',
            'jml_krj_lk79',
            'jml_krj_lk80',
            'jml_krj_lk81',
            'jml_krj_lk82',
            'jml_krj_lk83',
            'jml_krj_lk84',
            'jml_krj_lk85',
            'jml_krj_lk86',
            'jml_krj_lk87',
            'jml_krj_lk88',
            'jml_krj_lk89',

            'jml_krj_pr1',
            'jml_krj_pr2',
            'jml_krj_pr3',
            'jml_krj_pr4',
            'jml_krj_pr5',
            'jml_krj_pr6',
            'jml_krj_pr7',
            'jml_krj_pr8',
            'jml_krj_pr9',
            'jml_krj_pr10',
            'jml_krj_pr11',
            'jml_krj_pr12',
            'jml_krj_pr13',
            'jml_krj_pr14',
            'jml_krj_pr15',
            'jml_krj_pr16',
            'jml_krj_pr17',
            'jml_krj_pr18',
            'jml_krj_pr19',
            'jml_krj_pr20',
            'jml_krj_pr21',
            'jml_krj_pr22',
            'jml_krj_pr23',
            'jml_krj_pr24',
            'jml_krj_pr25',
            'jml_krj_pr26',
            'jml_krj_pr27',
            'jml_krj_pr28',
            'jml_krj_pr29',
            'jml_krj_pr30',
            'jml_krj_pr31',
            'jml_krj_pr32',
            'jml_krj_pr33',
            'jml_krj_pr34',
            'jml_krj_pr35',
            'jml_krj_pr36',
            'jml_krj_pr37',
            'jml_krj_pr38',
            'jml_krj_pr39',
            'jml_krj_pr40',
            'jml_krj_pr41',
            'jml_krj_pr42',
            'jml_krj_pr43',
            'jml_krj_pr44',
            'jml_krj_pr45',
            'jml_krj_pr46',
            'jml_krj_pr47',
            'jml_krj_pr48',
            'jml_krj_pr49',
            'jml_krj_pr50',
            'jml_krj_pr51',
            'jml_krj_pr52',
            'jml_krj_pr53',
            'jml_krj_pr54',
            'jml_krj_pr55',
            'jml_krj_pr56',
            'jml_krj_pr57',
            'jml_krj_pr58',
            'jml_krj_pr59',
            'jml_krj_pr60',
            'jml_krj_pr61',
            'jml_krj_pr62',
            'jml_krj_pr63',
            'jml_krj_pr64',
            'jml_krj_pr65',
            'jml_krj_pr66',
            'jml_krj_pr67',
            'jml_krj_pr68',
            'jml_krj_pr69',
            'jml_krj_pr70',
            'jml_krj_pr71',
            'jml_krj_pr72',
            'jml_krj_pr73',
            'jml_krj_pr74',
            'jml_krj_pr75',
            'jml_krj_pr76',
            'jml_krj_pr77',
            'jml_krj_pr78',
            'jml_krj_pr79',
            'jml_krj_pr80',
            'jml_krj_pr81',
            'jml_krj_pr82',
            'jml_krj_pr83',
            'jml_krj_pr84',
            'jml_krj_pr85',
            'jml_krj_pr86',
            'jml_krj_pr87',
            'jml_krj_pr88',
            'jml_krj_pr89',

            'jml_agm_lk1',
            'jml_agm_lk2',
            'jml_agm_lk3',
            'jml_agm_lk4',
            'jml_agm_lk5',
            'jml_agm_lk6',
            'jml_agm_lk7',
            'jml_agm_pr1',
            'jml_agm_pr2',
            'jml_agm_pr3',
            'jml_agm_pr4',
            'jml_agm_pr5',
            'jml_agm_pr6',
            'jml_agm_pr7',
        ));
    }

    public function ceknik(Request $request)
    {
        $request->validate([

            'NIK' => 'numeric|digits:16',
        ], [
            'NIK.digits' => 'Minimal 16 Digit Nomor Induk Kependudukan (NIK)',
            'NIK.numeric' => 'Masukkan Angka!',
        ]);

        $jumlahlakilaki = DataPenduduk::where('jeniskelamin_id', '1')->count();
        $jumlahperempuan = DataPenduduk::where('jeniskelamin_id', '2')->count();
        $jumlahpenduduk = DataPenduduk::count();
        $desa = Desa::ambilSemua()->count();
        // Get the search value from the request
        $NIK = $request->input('NIK');

        // Search in the title and body columns from the posts table
        $ceknik = DataPenduduk::where('NIK', 'LIKE', "%{$NIK}%")->get();

        // Return the search view with the resluts compacted
        return view('landingpage.ceknik', [
            'jumlahlakilaki' => $jumlahlakilaki,
            'jumlahperempuan' => $jumlahperempuan,
            'jumlahpenduduk' => $jumlahpenduduk,
            'desa' => $desa,
            'ceknik' => $ceknik,
            'data' => $request,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
