<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PotensiUmum;
use App\DataTanah;
use App\IklimJenisKesuburanTanah;
use App\LembagaKeamanan;
use App\LembagaAdat;
use App\TopografiLetakOrbitasi;
use App\PrasaranaSaranaKebersihan;
use App\PrasaranaHiburanWisata;
use App\PrasaranaEnergiPenerangan;
use App\PrasaranaSaranaPendidikan;
use App\PrasaranaKesehatan;
use App\PrasaranaOlahraga;
use App\PrasaranaPeribadatan;
use App\SaranaKesehatan;
use App\PrasaranaLKDK;
use App\PrasaranaPemerintahan;
use App\PrasaranaBPDDusun;
use App\PrasaranaIrigasi;
use App\PrasaranaAirBersih;
use App\DataPenduduk;
use App\Pendidikan;
use App\JenisPekerjaan;
use App\Agama;
use App\Alamat;
use App\Kewarganegaraan;
use App\Etnis;
use App\PerangkatDesa;
use App\BPD;
use App\Desa;
use App\IndustriKecil;
use App\JasaLembagaKeuangan;
use App\Telepon;
use App\KantorPos;
use App\RadioTv;
use App\Koran;
use App\LembagaEkonomi;
use App\LembagaKemasyarakatan;
use App\PrasaranaDarat;
use App\SaranaDarat;
use App\PrasaranaLaut;
use App\SaranaLaut;
use App\PrasaranaUdara;
use App\PendidikanFormal;
use App\PendidikanKeagamaan;
use App\PendidikanNonFormal;
use App\PendidikanSedang;
use App\PenyandangCacat;
use App\TingkatPartisipasiPolitik;
use App\UsahaJasaGas;
use App\UsahaJasaHiburan;
use App\UsahaJasaHukum;
use App\UsahaJasaKeterampilan;
use App\UsahaJasaPengangkutan;
use App\UsahaJasaPenginapan;
use App\UsahaJasaPerdagangan;
use App\Pertanian;
use App\User;
use Auth;
use App\PotensiWisata;
use App\RuangPublik;
use App\Kebisingan;
use App\KualitasUdara;
use App\AirPanas;
use App\Kehutanan;
use App\TanamanPangan;
use App\KomoditasBuah;
use App\PemasaranPanganBuah;
use App\TanamanApotik;
use App\HasilPerkebunan;
use App\PemasaranHasilPerkebunan;
use App\HasilHutan;
use App\KondisiHutan;
use App\DampakOlahHutan;
use App\PemasaranHasilHutan;
use App\ManfaatKondisiDanau;
use App\Rawa;
use App\Sungai;
use App\PotensiAirSda;
use App\SumberAirBersih;
use App\PemasaranHasilGalian;
use App\PemasaranHasilIkan;
use App\KetersediaanLahanTernak;
use App\PemasaranHasilTernak;
use App\HijauanPakanTernak;
use App\JenisPopulasiTernak;
use App\ProduksiTernak;
use App\PemilikUsahaTernak;
use App\AlatProduksiLaut;
use App\AlatProduksiTawar;
use App\JenisIkan;
use App\BahanGalian;
use App\AparaturDesa;
use App\ProfilKecamatan;

class ProfilDesaController extends Controller
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
     * @param  int  $desa_
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

    public function cetak()
    {
        $profilkecamatan = ProfilKecamatan::first();
        $potensiumum = PotensiUmum::where('desa_id', auth()->user()->desa_id)->first();
        $datatanah = DataTanah::where('desa_id', auth()->user()->desa_id)->first();
        $iklimjeniskesuburantanah = IklimJenisKesuburanTanah::where('desa_id', auth()->user()->desa_id)->first();
        $topografiletakorbitasi = TopografiLetakOrbitasi::where('desa_id', auth()->user()->desa_id)->first();
        $pertanian = Pertanian::where('desa_id', auth()->user()->desa_id)->first();
        $pemasaranpanganbuah = PemasaranPanganBuah::where('desa_id', auth()->user()->desa_id)->first();
        $pemasaranhasilperkebunan = PemasaranHasilPerkebunan::where('desa_id', auth()->user()->desa_id)->first();
        $pemasaranhasilhutan = PemasaranHasilHutan::where('desa_id', auth()->user()->desa_id)->first();
        $pemasaranhasilgalian = PemasaranHasilGalian::where('desa_id', auth()->user()->desa_id)->first();
        $pemasaranhasilikan = PemasaranHasilIkan::where('desa_id', auth()->user()->desa_id)->first();
        $manfaatkondisidanau = ManfaatKondisiDanau::where('desa_id', auth()->user()->desa_id)->first();
        $ketersediaanlahanternak = KetersediaanLahanTernak::where('desa_id', auth()->user()->desa_id)->first();
        $pemasaranhasilternak = PemasaranHasilTernak::where('desa_id', auth()->user()->desa_id)->first();
        $hijauanpakanternak = HijauanPakanTernak::where('desa_id', auth()->user()->desa_id)->first();
        $rawa = Rawa::where('desa_id', auth()->user()->desa_id)->first();
        $sungai = Sungai::where('desa_id', auth()->user()->desa_id)->first();
        $prasaranasaranakebersihan = PrasaranaSaranaKebersihan::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranahiburanwisata = PrasaranaHiburanWisata::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranaenergipenerangan = PrasaranaEnergiPenerangan::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranasaranapendidikan = PrasaranaSaranaPendidikan::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranaperibadatan = PrasaranaPeribadatan::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranaolahraga = PrasaranaOlahraga::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranakesehatan = PrasaranaKesehatan::where('desa_id', auth()->user()->desa_id)->get();
        $saranakesehatan = SaranaKesehatan::where('desa_id', auth()->user()->desa_id)->get();
        $telepon = Telepon::where('desa_id', auth()->user()->desa_id)->get();
        $radiotv = RadioTv::where('desa_id', auth()->user()->desa_id)->get();
        $koran = Koran::where('desa_id', auth()->user()->desa_id)->get();
        $potensiwisata = PotensiWisata::where('desa_id', auth()->user()->desa_id)->get();
        $ruangpublik = RuangPublik::where('desa_id', auth()->user()->desa_id)->get();
        $tanamanpangan = TanamanPangan::where('desa_id', auth()->user()->desa_id)->get();
        $komoditasbuah = KomoditasBuah::where('desa_id', auth()->user()->desa_id)->get();
        $tanamanapotik = TanamanApotik::where('desa_id', auth()->user()->desa_id)->get();
        $hasilhutan = HasilHutan::where('desa_id', auth()->user()->desa_id)->get();
        $kondisihutan = KondisiHutan::where('desa_id', auth()->user()->desa_id)->get();
        $dampakolahhutan = DampakOlahHutan::where('desa_id', auth()->user()->desa_id)->get();

        $jenispopulasiternak = JenisPopulasiTernak::where('desa_id', auth()->user()->desa_id)->get();
        $produksiternak = ProduksiTernak::where('desa_id', auth()->user()->desa_id)->get();
        $pemilikusahaternak = PemilikUsahaTernak::where('desa_id', auth()->user()->desa_id)->get();
        $alatproduksilaut = AlatProduksiLaut::where('desa_id', auth()->user()->desa_id)->get();
        $alatproduksitawar = AlatProduksiTawar::where('desa_id', auth()->user()->desa_id)->get();
        $jenisikan = JenisIkan::where('desa_id', auth()->user()->desa_id)->get();
        $bahangalian = BahanGalian::where('desa_id', auth()->user()->desa_id)->get();

        $potensiairsda = PotensiAirSda::where('desa_id', auth()->user()->desa_id)->get();
        $sumberairbersih = SumberAirBersih::where('desa_id', auth()->user()->desa_id)->get();
        $hasilperkebunan = HasilPerkebunan::where('desa_id', auth()->user()->desa_id)->get();
        $kebisingan = Kebisingan::where('desa_id', auth()->user()->desa_id)->get();
        $kualitasudara = KualitasUdara::where('desa_id', auth()->user()->desa_id)->get();
        $kehutanan = Kehutanan::where('desa_id', auth()->user()->desa_id)->get();
        $airpanas = AirPanas::where('desa_id', auth()->user()->desa_id)->get();
        $kantorpos = KantorPos::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranadarat = PrasaranaDarat::where('desa_id', auth()->user()->desa_id)->get();
        $saranadarat = SaranaDarat::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranalaut = PrasaranaLaut::where('desa_id', auth()->user()->desa_id)->get();
        $saranalaut = SaranaLaut::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranaudara = PrasaranaUdara::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranalkdk = PrasaranaLKDK::where('desa_id', auth()->user()->desa_id)->first();
        $prasaranapemerintahan = PrasaranaPemerintahan::where('desa_id', auth()->user()->desa_id)->first();
        $prasaranabpddusun = PrasaranaBPDDusun::where('desa_id', auth()->user()->desa_id)->first();
        $prasaranairigasi = PrasaranaIrigasi::where('desa_id', auth()->user()->desa_id)->first();
        $prasaranaairbersih = PrasaranaAirBersih::where('desa_id', auth()->user()->desa_id)->first();
        $lembagakeamanan = LembagaKeamanan::where('desa_id', auth()->user()->desa_id)->first();
        $lembagaadat = LembagaAdat::where('desa_id', auth()->user()->desa_id)->first();
        $jumlahlakilaki = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->count();
        $jumlahperempuan = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->count();
        $jumlahpenduduk = DataPenduduk::where('desa_id', auth()->user()->desa_id)->count();
        $jumlahkk = DataPenduduk::where('desa_id', auth()->user()->desa_id)->distinct('NOKK')->count();
        $pendidikan = Pendidikan::ambilSemua();
        $pendidikansedang = PendidikanSedang::ambilSemua();
        $jenispekerjaan_id = JenisPekerjaan::ambilSemua();
        $kewarganegaraan_id = Kewarganegaraan::ambilSemua();
        $penyandangcacat = PenyandangCacat::ambilSemua();
        $etnis = Etnis::ambilSemua();
        // Laki-Laki
        // Atas Umur 75 Th
        $tujuhpuluhlimaatas_tahun = \Carbon\Carbon::today()->subYears(75)->format('Y-m-d');
        $umur75atas_lk = DataPenduduk::where('tanggallahir', '<=', $tujuhpuluhlimaatas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 75 Th
        $tujuhpuluhlima_tahun = \Carbon\Carbon::today()->subYears(75)->format('Y-m-d');
        $umur75_lk = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhlimaatas_tahun)->where('tanggallahir', '<=', $tujuhpuluhlima_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 74 Th
        $tujuhpuluhempat_tahun = \Carbon\Carbon::today()->subYears(74)->format('Y-m-d');
        $umur74_lk = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhlima_tahun)->where('tanggallahir', '<=', $tujuhpuluhempat_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 73 Th
        $tujuhpuluhtiga_tahun = \Carbon\Carbon::today()->subYears(73)->format('Y-m-d');
        $umur73_lk = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhempat_tahun)->where('tanggallahir', '<=', $tujuhpuluhtiga_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 72 Th
        $tujuhpuluhdua_tahun = \Carbon\Carbon::today()->subYears(72)->format('Y-m-d');
        $umur72_lk = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhtiga_tahun)->where('tanggallahir', '<=', $tujuhpuluhdua_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 71 Th
        $tujuhpuluhsatu_tahun = \Carbon\Carbon::today()->subYears(71)->format('Y-m-d');
        $umur71_lk = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhdua_tahun)->where('tanggallahir', '<=', $tujuhpuluhsatu_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 70 Th
        $tujuhpuluh_tahun = \Carbon\Carbon::today()->subYears(70)->format('Y-m-d');
        $umur70_lk = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhsatu_tahun)->where('tanggallahir', '<=', $tujuhpuluh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 69 Th
        $enampuluhsembilan_tahun = \Carbon\Carbon::today()->subYears(69)->format('Y-m-d');
        $umur69_lk = DataPenduduk::where('tanggallahir', '>', $tujuhpuluh_tahun)->where('tanggallahir', '<=', $enampuluhsembilan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 68 Th
        $enampuluhdelapan_tahun = \Carbon\Carbon::today()->subYears(68)->format('Y-m-d');
        $umur68_lk = DataPenduduk::where('tanggallahir', '>', $enampuluhsembilan_tahun)->where('tanggallahir', '<=', $enampuluhdelapan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 67 Th
        $enampuluhtujuh_tahun = \Carbon\Carbon::today()->subYears(67)->format('Y-m-d');
        $umur67_lk = DataPenduduk::where('tanggallahir', '>', $enampuluhdelapan_tahun)->where('tanggallahir', '<=', $enampuluhtujuh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 66 Th
        $enampuluhenam_tahun = \Carbon\Carbon::today()->subYears(66)->format('Y-m-d');
        $umur66_lk = DataPenduduk::where('tanggallahir', '>', $enampuluhtujuh_tahun)->where('tanggallahir', '<=', $enampuluhenam_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 65 Th
        $enampuluhlima_tahun = \Carbon\Carbon::today()->subYears(65)->format('Y-m-d');
        $umur65_lk = DataPenduduk::where('tanggallahir', '>', $enampuluhenam_tahun)->where('tanggallahir', '<=', $enampuluhlima_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 64 Th
        $enampuluhempat_tahun = \Carbon\Carbon::today()->subYears(64)->format('Y-m-d');
        $umur64_lk = DataPenduduk::where('tanggallahir', '>', $enampuluhlima_tahun)->where('tanggallahir', '<=', $enampuluhempat_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 63 Th
        $enampuluhtiga_tahun = \Carbon\Carbon::today()->subYears(63)->format('Y-m-d');
        $umur63_lk = DataPenduduk::where('tanggallahir', '>', $enampuluhempat_tahun)->where('tanggallahir', '<=', $enampuluhtiga_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 62 Th
        $enampuluhdua_tahun = \Carbon\Carbon::today()->subYears(62)->format('Y-m-d');
        $umur62_lk = DataPenduduk::where('tanggallahir', '>', $enampuluhtiga_tahun)->where('tanggallahir', '<=', $enampuluhdua_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 61 Th
        $enampuluhsatu_tahun = \Carbon\Carbon::today()->subYears(61)->format('Y-m-d');
        $umur61_lk = DataPenduduk::where('tanggallahir', '>', $enampuluhdua_tahun)->where('tanggallahir', '<=', $enampuluhsatu_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 60 Th
        $enampuluh_tahun = \Carbon\Carbon::today()->subYears(60)->format('Y-m-d');
        $umur60_lk = DataPenduduk::where('tanggallahir', '>', $enampuluhsatu_tahun)->where('tanggallahir', '<=', $enampuluh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 59 Th
        $limapuluhsembilan_tahun = \Carbon\Carbon::today()->subYears(59)->format('Y-m-d');
        $umur59_lk = DataPenduduk::where('tanggallahir', '>', $enampuluh_tahun)->where('tanggallahir', '<=', $limapuluhsembilan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 58 Th
        $limapuluhdelapan_tahun = \Carbon\Carbon::today()->subYears(58)->format('Y-m-d');
        $umur58_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhsembilan_tahun)->where('tanggallahir', '<=', $limapuluhdelapan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 57 Th
        $limapuluhtujuh_tahun = \Carbon\Carbon::today()->subYears(57)->format('Y-m-d');
        $umur57_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhdelapan_tahun)->where('tanggallahir', '<=', $limapuluhtujuh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 56 Th
        $limapuluhenam_tahun = \Carbon\Carbon::today()->subYears(56)->format('Y-m-d');
        $umur56_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhtujuh_tahun)->where('tanggallahir', '<=', $limapuluhenam_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 55 Th
        $limapuluhlima_tahun = \Carbon\Carbon::today()->subYears(55)->format('Y-m-d');
        $umur55_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhenam_tahun)->where('tanggallahir', '<=', $limapuluhlima_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 54 Th
        $limapuluhempat_tahun = \Carbon\Carbon::today()->subYears(54)->format('Y-m-d');
        $umur54_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhlima_tahun)->where('tanggallahir', '<=', $limapuluhempat_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 53 Th
        $limapuluhtiga_tahun = \Carbon\Carbon::today()->subYears(53)->format('Y-m-d');
        $umur53_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhempat_tahun)->where('tanggallahir', '<=', $limapuluhtiga_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 52 Th
        $limapuluhdua_tahun = \Carbon\Carbon::today()->subYears(52)->format('Y-m-d');
        $umur52_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhtiga_tahun)->where('tanggallahir', '<=', $limapuluhdua_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 51 Th
        $limapuluhsatu_tahun = \Carbon\Carbon::today()->subYears(51)->format('Y-m-d');
        $umur51_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhdua_tahun)->where('tanggallahir', '<=', $limapuluhsatu_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 50 Th
        $limapuluh_tahun = \Carbon\Carbon::today()->subYears(50)->format('Y-m-d');
        $umur50_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhsatu_tahun)->where('tanggallahir', '<=', $limapuluh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 49 Th
        $empatpuluhsembilan_tahun = \Carbon\Carbon::today()->subYears(49)->format('Y-m-d');
        $umur49_lk = DataPenduduk::where('tanggallahir', '>', $limapuluh_tahun)->where('tanggallahir', '<=', $empatpuluhsembilan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 48 Th
        $empatpuluhdelapan_tahun = \Carbon\Carbon::today()->subYears(48)->format('Y-m-d');
        $umur48_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluhsembilan_tahun)->where('tanggallahir', '<=', $empatpuluhdelapan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 47 Th
        $empatpuluhtujuh_tahun = \Carbon\Carbon::today()->subYears(47)->format('Y-m-d');
        $umur47_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluhdelapan_tahun)->where('tanggallahir', '<=', $empatpuluhtujuh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 46 Th
        $empatpuluhenam_tahun = \Carbon\Carbon::today()->subYears(46)->format('Y-m-d');
        $umur46_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluhtujuh_tahun)->where('tanggallahir', '<=', $empatpuluhenam_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 45 Th
        $empatpuluhlima_tahun = \Carbon\Carbon::today()->subYears(45)->format('Y-m-d');
        $umur45_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluhenam_tahun)->where('tanggallahir', '<=', $empatpuluhlima_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 44 Th
        $empatpuluhempat_tahun = \Carbon\Carbon::today()->subYears(44)->format('Y-m-d');
        $umur44_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluhlima_tahun)->where('tanggallahir', '<=', $empatpuluhempat_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 43 Th
        $empatpuluhtiga_tahun = \Carbon\Carbon::today()->subYears(43)->format('Y-m-d');
        $umur43_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluhempat_tahun)->where('tanggallahir', '<=', $empatpuluhtiga_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 42 Th
        $empatpuluhdua_tahun = \Carbon\Carbon::today()->subYears(42)->format('Y-m-d');
        $umur42_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluhtiga_tahun)->where('tanggallahir', '<=', $empatpuluhdua_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 41 Th
        $empatpuluhsatu_tahun = \Carbon\Carbon::today()->subYears(41)->format('Y-m-d');
        $umur41_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluhdua_tahun)->where('tanggallahir', '<=', $empatpuluhsatu_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 40 Th
        $empatpuluh_tahun = \Carbon\Carbon::today()->subYears(40)->format('Y-m-d');
        $umur40_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluhsatu_tahun)->where('tanggallahir', '<=', $empatpuluh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 39 Th
        $tigapuluhsembilan_tahun = \Carbon\Carbon::today()->subYears(39)->format('Y-m-d');
        $umur39_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluh_tahun)->where('tanggallahir', '<=', $tigapuluhsembilan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 38 Th
        $tigapuluhdelapan_tahun = \Carbon\Carbon::today()->subYears(38)->format('Y-m-d');
        $umur38_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluhsembilan_tahun)->where('tanggallahir', '<=', $tigapuluhdelapan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 37 Th
        $tigapuluhtujuh_tahun = \Carbon\Carbon::today()->subYears(37)->format('Y-m-d');
        $umur37_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluhdelapan_tahun)->where('tanggallahir', '<=', $tigapuluhtujuh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 36 Th
        $tigapuluhenam_tahun = \Carbon\Carbon::today()->subYears(36)->format('Y-m-d');
        $umur36_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluhtujuh_tahun)->where('tanggallahir', '<=', $tigapuluhenam_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 35 Th
        $tigapuluhlima_tahun = \Carbon\Carbon::today()->subYears(35)->format('Y-m-d');
        $umur35_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluhenam_tahun)->where('tanggallahir', '<=', $tigapuluhlima_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 34 Th
        $tigapuluhempat_tahun = \Carbon\Carbon::today()->subYears(34)->format('Y-m-d');
        $umur34_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluhlima_tahun)->where('tanggallahir', '<=', $tigapuluhempat_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 33 Th
        $tigapuluhtiga_tahun = \Carbon\Carbon::today()->subYears(33)->format('Y-m-d');
        $umur33_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluhempat_tahun)->where('tanggallahir', '<=', $tigapuluhtiga_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 32 Th
        $tigapuluhdua_tahun = \Carbon\Carbon::today()->subYears(32)->format('Y-m-d');
        $umur32_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluhtiga_tahun)->where('tanggallahir', '<=', $tigapuluhdua_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 31 Th
        $tigapuluhsatu_tahun = \Carbon\Carbon::today()->subYears(31)->format('Y-m-d');
        $umur31_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluhdua_tahun)->where('tanggallahir', '<=', $tigapuluhsatu_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 30 Th
        $tigapuluh_tahun = \Carbon\Carbon::today()->subYears(30)->format('Y-m-d');
        $umur30_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluhsatu_tahun)->where('tanggallahir', '<=', $tigapuluh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 29 Th
        $duapuluhsembilan_tahun = \Carbon\Carbon::today()->subYears(29)->format('Y-m-d');
        $umur29_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluh_tahun)->where('tanggallahir', '<=', $duapuluhsembilan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 28 Th
        $duapuluhdelapan_tahun = \Carbon\Carbon::today()->subYears(28)->format('Y-m-d');
        $umur28_lk = DataPenduduk::where('tanggallahir', '>', $duapuluhsembilan_tahun)->where('tanggallahir', '<=', $duapuluhdelapan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 27 Th
        $duapuluhtujuh_tahun = \Carbon\Carbon::today()->subYears(27)->format('Y-m-d');
        $umur27_lk = DataPenduduk::where('tanggallahir', '>', $duapuluhdelapan_tahun)->where('tanggallahir', '<=', $duapuluhtujuh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 26 Th
        $duapuluhenam_tahun = \Carbon\Carbon::today()->subYears(26)->format('Y-m-d');
        $umur26_lk = DataPenduduk::where('tanggallahir', '>', $duapuluhtujuh_tahun)->where('tanggallahir', '<=', $duapuluhenam_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 25 Th
        $duapuluhlima_tahun = \Carbon\Carbon::today()->subYears(25)->format('Y-m-d');
        $umur25_lk = DataPenduduk::where('tanggallahir', '>', $duapuluhenam_tahun)->where('tanggallahir', '<=', $duapuluhlima_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 24 Th
        $duapuluhempat_tahun = \Carbon\Carbon::today()->subYears(24)->format('Y-m-d');
        $umur24_lk = DataPenduduk::where('tanggallahir', '>', $duapuluhlima_tahun)->where('tanggallahir', '<=', $duapuluhempat_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 23 Th
        $duapuluhtiga_tahun = \Carbon\Carbon::today()->subYears(23)->format('Y-m-d');
        $umur23_lk = DataPenduduk::where('tanggallahir', '>', $duapuluhempat_tahun)->where('tanggallahir', '<=', $duapuluhtiga_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 22 Th
        $duapuluhdua_tahun = \Carbon\Carbon::today()->subYears(22)->format('Y-m-d');
        $umur22_lk = DataPenduduk::where('tanggallahir', '>', $duapuluhtiga_tahun)->where('tanggallahir', '<=', $duapuluhdua_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 21 Th
        $duapuluhsatu_tahun = \Carbon\Carbon::today()->subYears(21)->format('Y-m-d');
        $umur21_lk = DataPenduduk::where('tanggallahir', '>', $duapuluhdua_tahun)->where('tanggallahir', '<=', $duapuluhsatu_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 20 Th
        $duapuluh_tahun = \Carbon\Carbon::today()->subYears(20)->format('Y-m-d');
        $umur20_lk = DataPenduduk::where('tanggallahir', '>', $duapuluhsatu_tahun)->where('tanggallahir', '<=', $duapuluh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 19 Th
        $sembilanbelas_tahun = \Carbon\Carbon::today()->subYears(19)->format('Y-m-d');
        $umur19_lk = DataPenduduk::where('tanggallahir', '>', $duapuluh_tahun)->where('tanggallahir', '<=', $sembilanbelas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 18 Th
        $delapanbelas_tahun = \Carbon\Carbon::today()->subYears(18)->format('Y-m-d');
        $umur18_lk = DataPenduduk::where('tanggallahir', '>', $sembilanbelas_tahun)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 17 Th
        $tujuhbelas_tahun = \Carbon\Carbon::today()->subYears(17)->format('Y-m-d');
        $umur17_lk = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuhbelas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 16 Th
        $enambelas_tahun = \Carbon\Carbon::today()->subYears(16)->format('Y-m-d');
        $umur16_lk = DataPenduduk::where('tanggallahir', '>', $tujuhbelas_tahun)->where('tanggallahir', '<=', $enambelas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 15 Th
        $limabelas_tahun = \Carbon\Carbon::today()->subYears(15)->format('Y-m-d');
        $umur15_lk = DataPenduduk::where('tanggallahir', '>', $enambelas_tahun)->where('tanggallahir', '<=', $limabelas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 14 Th
        $empatbelas_tahun = \Carbon\Carbon::today()->subYears(14)->format('Y-m-d');
        $umur14_lk = DataPenduduk::where('tanggallahir', '>', $limabelas_tahun)->where('tanggallahir', '<=', $empatbelas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 13 Th
        $tigabelas_tahun = \Carbon\Carbon::today()->subYears(13)->format('Y-m-d');
        $umur13_lk = DataPenduduk::where('tanggallahir', '>', $empatbelas_tahun)->where('tanggallahir', '<=', $tigabelas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 12 Th
        $duabelas_tahun = \Carbon\Carbon::today()->subYears(12)->format('Y-m-d');
        $umur12_lk = DataPenduduk::where('tanggallahir', '>', $tigabelas_tahun)->where('tanggallahir', '<=', $duabelas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 11 Th
        $sebelas_tahun = \Carbon\Carbon::today()->subYears(11)->format('Y-m-d');
        $umur11_lk = DataPenduduk::where('tanggallahir', '>', $duabelas_tahun)->where('tanggallahir', '<=', $sebelas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 10 Th
        $sepuluh_tahun = \Carbon\Carbon::today()->subYears(10)->format('Y-m-d');
        $umur10_lk = DataPenduduk::where('tanggallahir', '>', $sebelas_tahun)->where('tanggallahir', '<=', $sepuluh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 9 Th
        $sembilan_tahun = \Carbon\Carbon::today()->subYears(9)->format('Y-m-d');
        $umur9_lk = DataPenduduk::where('tanggallahir', '>', $sepuluh_tahun)->where('tanggallahir', '<=', $sembilan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 8 Th
        $delapan_tahun = \Carbon\Carbon::today()->subYears(8)->format('Y-m-d');
        $umur8_lk = DataPenduduk::where('tanggallahir', '>', $sembilan_tahun)->where('tanggallahir', '<=', $delapan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 7 Th
        $tujuh_tahun = \Carbon\Carbon::today()->subYears(7)->format('Y-m-d');
        $umur7_lk = DataPenduduk::where('tanggallahir', '>', $delapan_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 6 Th
        $enam_tahun = \Carbon\Carbon::today()->subYears(6)->format('Y-m-d');
        $umur6_lk = DataPenduduk::where('tanggallahir', '>', $tujuh_tahun)->where('tanggallahir', '<=', $enam_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 5 Th
        $lima_tahun = \Carbon\Carbon::today()->subYears(5)->format('Y-m-d');
        $umur5_lk = DataPenduduk::where('tanggallahir', '>', $enam_tahun)->where('tanggallahir', '<=', $lima_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 4 Th
        $empat_tahun = \Carbon\Carbon::today()->subYears(4)->format('Y-m-d');
        $umur4_lk = DataPenduduk::where('tanggallahir', '>', $lima_tahun)->where('tanggallahir', '<=', $empat_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 3 Th
        $tiga_tahun = \Carbon\Carbon::today()->subYears(3)->format('Y-m-d');
        $umur3_lk = DataPenduduk::where('tanggallahir', '>', $empat_tahun)->where('tanggallahir', '<=', $tiga_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 2 Th
        $dua_tahun = \Carbon\Carbon::today()->subYears(2)->format('Y-m-d');
        $umur2_lk = DataPenduduk::where('tanggallahir', '>', $tiga_tahun)->where('tanggallahir', '<=', $dua_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 1 Th
        $satu_tahun = \Carbon\Carbon::today()->subYears(1)->format('Y-m-d');
        $umur1_lk = DataPenduduk::where('tanggallahir', '>', $dua_tahun)->where('tanggallahir', '<=', $satu_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 0 Th
        $bawah1th_tahun = \Carbon\Carbon::today()->subYears(0)->format('Y-m-d');
        $umur0_lk = DataPenduduk::where('tanggallahir', '>', $satu_tahun)->where('tanggallahir', '<=', $bawah1th_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Total
        $total_lk = DataPenduduk::where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Perempuan
        // Atas Umur 75 Th
        $umur75atas_pr = DataPenduduk::where('tanggallahir', '<=', $tujuhpuluhlimaatas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 75 Th
        $umur75_pr = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhlimaatas_tahun)->where('tanggallahir', '<=', $tujuhpuluhlima_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 74 Th
        $umur74_pr = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhlima_tahun)->where('tanggallahir', '<=', $tujuhpuluhempat_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 73 Th
        $umur73_pr = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhempat_tahun)->where('tanggallahir', '<=', $tujuhpuluhtiga_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 72 Th
        $umur72_pr = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhtiga_tahun)->where('tanggallahir', '<=', $tujuhpuluhdua_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 71 Th
        $umur71_pr = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhdua_tahun)->where('tanggallahir', '<=', $tujuhpuluhsatu_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 70 Th
        $umur70_pr = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhsatu_tahun)->where('tanggallahir', '<=', $tujuhpuluh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 69 Th
        $umur69_pr = DataPenduduk::where('tanggallahir', '>', $tujuhpuluh_tahun)->where('tanggallahir', '<=', $enampuluhsembilan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 68 Th
        $umur68_pr = DataPenduduk::where('tanggallahir', '>', $enampuluhsembilan_tahun)->where('tanggallahir', '<=', $enampuluhdelapan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 67 Th
        $umur67_pr = DataPenduduk::where('tanggallahir', '>', $enampuluhdelapan_tahun)->where('tanggallahir', '<=', $enampuluhtujuh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 66 Th
        $umur66_pr = DataPenduduk::where('tanggallahir', '>', $enampuluhtujuh_tahun)->where('tanggallahir', '<=', $enampuluhenam_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 65 Th
        $umur65_pr = DataPenduduk::where('tanggallahir', '>', $enampuluhenam_tahun)->where('tanggallahir', '<=', $enampuluhlima_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 64 Th
        $umur64_pr = DataPenduduk::where('tanggallahir', '>', $enampuluhlima_tahun)->where('tanggallahir', '<=', $enampuluhempat_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 63 Th
        $umur63_pr = DataPenduduk::where('tanggallahir', '>', $enampuluhempat_tahun)->where('tanggallahir', '<=', $enampuluhtiga_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 62 Th
        $umur62_pr = DataPenduduk::where('tanggallahir', '>', $enampuluhtiga_tahun)->where('tanggallahir', '<=', $enampuluhdua_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 61 Th
        $umur61_pr = DataPenduduk::where('tanggallahir', '>', $enampuluhdua_tahun)->where('tanggallahir', '<=', $enampuluhsatu_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 60 Th
        $umur60_pr = DataPenduduk::where('tanggallahir', '>', $enampuluhsatu_tahun)->where('tanggallahir', '<=', $enampuluh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 59 Th
        $umur59_pr = DataPenduduk::where('tanggallahir', '>', $enampuluh_tahun)->where('tanggallahir', '<=', $limapuluhsembilan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 58 Th
        $umur58_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhsembilan_tahun)->where('tanggallahir', '<=', $limapuluhdelapan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 57 Th
        $umur57_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhdelapan_tahun)->where('tanggallahir', '<=', $limapuluhtujuh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 56 Th
        $umur56_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhtujuh_tahun)->where('tanggallahir', '<=', $limapuluhenam_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 55 Th
        $umur55_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhenam_tahun)->where('tanggallahir', '<=', $limapuluhlima_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 54 Th
        $umur54_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhlima_tahun)->where('tanggallahir', '<=', $limapuluhempat_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 53 Th
        $umur53_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhempat_tahun)->where('tanggallahir', '<=', $limapuluhtiga_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 52 Th
        $umur52_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhtiga_tahun)->where('tanggallahir', '<=', $limapuluhdua_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 51 Th
        $umur51_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhdua_tahun)->where('tanggallahir', '<=', $limapuluhsatu_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 50 Th
        $umur50_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhsatu_tahun)->where('tanggallahir', '<=', $limapuluh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 49 Th
        $umur49_pr = DataPenduduk::where('tanggallahir', '>', $limapuluh_tahun)->where('tanggallahir', '<=', $empatpuluhsembilan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 48 Th
        $umur48_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluhsembilan_tahun)->where('tanggallahir', '<=', $empatpuluhdelapan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 47 Th
        $umur47_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluhdelapan_tahun)->where('tanggallahir', '<=', $empatpuluhtujuh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 46 Th
        $umur46_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluhtujuh_tahun)->where('tanggallahir', '<=', $empatpuluhenam_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 45 Th
        $umur45_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluhenam_tahun)->where('tanggallahir', '<=', $empatpuluhlima_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 44 Th
        $umur44_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluhlima_tahun)->where('tanggallahir', '<=', $empatpuluhempat_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 43 Th
        $umur43_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluhempat_tahun)->where('tanggallahir', '<=', $empatpuluhtiga_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 42 Th
        $umur42_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluhtiga_tahun)->where('tanggallahir', '<=', $empatpuluhdua_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 41 Th
        $umur41_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluhdua_tahun)->where('tanggallahir', '<=', $empatpuluhsatu_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 40 Th
        $umur40_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluhsatu_tahun)->where('tanggallahir', '<=', $empatpuluh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 39 Th
        $umur39_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluh_tahun)->where('tanggallahir', '<=', $tigapuluhsembilan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 38 Th
        $umur38_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluhsembilan_tahun)->where('tanggallahir', '<=', $tigapuluhdelapan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 37 Th
        $umur37_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluhdelapan_tahun)->where('tanggallahir', '<=', $tigapuluhtujuh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 36 Th
        $umur36_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluhtujuh_tahun)->where('tanggallahir', '<=', $tigapuluhenam_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 35 Th
        $umur35_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluhenam_tahun)->where('tanggallahir', '<=', $tigapuluhlima_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 34 Th
        $umur34_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluhlima_tahun)->where('tanggallahir', '<=', $tigapuluhempat_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 33 Th
        $umur33_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluhempat_tahun)->where('tanggallahir', '<=', $tigapuluhtiga_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 32 Th
        $umur32_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluhtiga_tahun)->where('tanggallahir', '<=', $tigapuluhdua_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 31 Th
        $umur31_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluhdua_tahun)->where('tanggallahir', '<=', $tigapuluhsatu_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 30 Th
        $umur30_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluhsatu_tahun)->where('tanggallahir', '<=', $tigapuluh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 29 Th
        $umur29_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluh_tahun)->where('tanggallahir', '<=', $duapuluhsembilan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 28 Th
        $umur28_pr = DataPenduduk::where('tanggallahir', '>', $duapuluhsembilan_tahun)->where('tanggallahir', '<=', $duapuluhdelapan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 27 Th
        $umur27_pr = DataPenduduk::where('tanggallahir', '>', $duapuluhdelapan_tahun)->where('tanggallahir', '<=', $duapuluhtujuh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 26 Th
        $umur26_pr = DataPenduduk::where('tanggallahir', '>', $duapuluhtujuh_tahun)->where('tanggallahir', '<=', $duapuluhenam_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 25 Th
        $umur25_pr = DataPenduduk::where('tanggallahir', '>', $duapuluhenam_tahun)->where('tanggallahir', '<=', $duapuluhlima_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 24 Th
        $umur24_pr = DataPenduduk::where('tanggallahir', '>', $duapuluhlima_tahun)->where('tanggallahir', '<=', $duapuluhempat_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 23 Th
        $umur23_pr = DataPenduduk::where('tanggallahir', '>', $duapuluhempat_tahun)->where('tanggallahir', '<=', $duapuluhtiga_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 22 Th
        $umur22_pr = DataPenduduk::where('tanggallahir', '>', $duapuluhtiga_tahun)->where('tanggallahir', '<=', $duapuluhdua_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 21 Th
        $umur21_pr = DataPenduduk::where('tanggallahir', '>', $duapuluhdua_tahun)->where('tanggallahir', '<=', $duapuluhsatu_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 20 Th
        $umur20_pr = DataPenduduk::where('tanggallahir', '>', $duapuluhsatu_tahun)->where('tanggallahir', '<=', $duapuluh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 19 Th
        $umur19_pr = DataPenduduk::where('tanggallahir', '>', $duapuluh_tahun)->where('tanggallahir', '<=', $sembilanbelas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 18 Th
        $umur18_pr = DataPenduduk::where('tanggallahir', '>', $sembilanbelas_tahun)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 17 Th
        $umur17_pr = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuhbelas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 16 Th
        $umur16_pr = DataPenduduk::where('tanggallahir', '>', $tujuhbelas_tahun)->where('tanggallahir', '<=', $enambelas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 15 Th
        $umur15_pr = DataPenduduk::where('tanggallahir', '>', $enambelas_tahun)->where('tanggallahir', '<=', $limabelas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 14 Th
        $umur14_pr = DataPenduduk::where('tanggallahir', '>', $limabelas_tahun)->where('tanggallahir', '<=', $empatbelas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 13 Th
        $umur13_pr = DataPenduduk::where('tanggallahir', '>', $empatbelas_tahun)->where('tanggallahir', '<=', $tigabelas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 12 Th
        $umur12_pr = DataPenduduk::where('tanggallahir', '>', $tigabelas_tahun)->where('tanggallahir', '<=', $duabelas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 11 Th
        $umur11_pr = DataPenduduk::where('tanggallahir', '>', $duabelas_tahun)->where('tanggallahir', '<=', $sebelas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 10 Th
        $umur10_pr = DataPenduduk::where('tanggallahir', '>', $sebelas_tahun)->where('tanggallahir', '<=', $sepuluh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 9 Th
        $umur9_pr = DataPenduduk::where('tanggallahir', '>', $sepuluh_tahun)->where('tanggallahir', '<=', $sembilan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 8 Th
        $umur8_pr = DataPenduduk::where('tanggallahir', '>', $sembilan_tahun)->where('tanggallahir', '<=', $delapan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 7 Th
        $umur7_pr = DataPenduduk::where('tanggallahir', '>', $delapan_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 6 Th
        $umur6_pr = DataPenduduk::where('tanggallahir', '>', $tujuh_tahun)->where('tanggallahir', '<=', $enam_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 5 Th
        $umur5_pr = DataPenduduk::where('tanggallahir', '>', $enam_tahun)->where('tanggallahir', '<=', $lima_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 4 Th
        $umur4_pr = DataPenduduk::where('tanggallahir', '>', $lima_tahun)->where('tanggallahir', '<=', $empat_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 3 Th
        $umur3_pr = DataPenduduk::where('tanggallahir', '>', $empat_tahun)->where('tanggallahir', '<=', $tiga_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 2 Th
        $umur2_pr = DataPenduduk::where('tanggallahir', '>', $tiga_tahun)->where('tanggallahir', '<=', $dua_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 1 Th
        $umur1_pr = DataPenduduk::where('tanggallahir', '>', $dua_tahun)->where('tanggallahir', '<=', $satu_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 0 Th
        $umur0_pr = DataPenduduk::where('tanggallahir', '>', $satu_tahun)->where('tanggallahir', '<=', $bawah1th_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Total
        $total_pr = DataPenduduk::where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // -------------------------------------------------------------------------------------------------------------------
        // Tenaga Kerja
        // Laki Laki
        // Penduduk Usia 56 Tahun ke atas
        $penduduk56tahunatas_lk = DataPenduduk::where('tanggallahir', '<=', $limapuluhenam_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 18 - 56 tahun yang belum/tidak bekerja
        $penduduktidakbekerja_lk = DataPenduduk::where('tanggallahir', '>', $penduduk56tahunatas_lk)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('jenispekerjaan_id', '1')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 18 - 56 tahun yang bekerja
        $pendudukbekerja_lk = DataPenduduk::where('tanggallahir', '>', $penduduk56tahunatas_lk)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('jenispekerjaan_id', '>=', '5')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 18 - 56 tahun (a + b)
        $totalpendudukbekerja_lk = $pendudukbekerja_lk + $penduduktidakbekerja_lk;

        // Penduduk usia 7 - 18 tahun yang masih sekolah (SD)
        $penduduksd_lk = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '4')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        $pendudukslba_lk = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '14')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 7 - 18 tahun yang masih sekolah (SMP)
        $penduduksmp_lk = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '6')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        $pendudukslbb_lk = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '15')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 7 - 18 tahun yang masih sekolah (SMA)
        $penduduksma_lk = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '7')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        $pendudukslbc_lk = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '16')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Total Penduduk usia 7 - 18 tahun yang masih sekolah
        $totalpenduduksekolah_lk = $penduduksd_lk + $penduduksmp_lk + $penduduksma_lk + $pendudukslba_lk + $pendudukslbc_lk + $pendudukslbc_lk;

        // Penduduk usia 0 - 6 tahun
        $pendudukusia0tahun_lk = DataPenduduk::where('tanggallahir', '>', $enam_tahun)->where('tanggallahir', '<=', $bawah1th_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Tenaga Kerja
        // Perempuan
        // Penduduk Usia 56 Tahun ke atas
        $penduduk56tahunatas_pr = DataPenduduk::where('tanggallahir', '<=', $limapuluhenam_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 18 - 56 tahun yang belum/tidak bekerja
        $penduduktidakbekerja_pr = DataPenduduk::where('tanggallahir', '>', $penduduk56tahunatas_pr)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('jenispekerjaan_id', '1')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 18 - 56 tahun yang bekerja
        $pendudukbekerja_pr = DataPenduduk::where('tanggallahir', '>', $penduduk56tahunatas_pr)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('jenispekerjaan_id', '>=', '5')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 18 - 56 tahun (a + b)
        $totalpendudukbekerja_pr = $pendudukbekerja_pr + $penduduktidakbekerja_pr;

        // Penduduk usia 7 - 18 tahun yang masih sekolah (SD)
        $penduduksd_pr = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '4')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        $pendudukslba_pr = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '14')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 7 - 18 tahun yang masih sekolah (SMP)
        $penduduksmp_pr = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '6')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        $pendudukslbb_pr = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '15')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 7 - 18 tahun yang masih sekolah (SMA)
        $penduduksma_pr = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '7')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        $pendudukslbc_pr = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '16')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Total Penduduk usia 7 - 18 tahun yang masih sekolah
        $totalpenduduksekolah_pr = $penduduksd_pr + $penduduksmp_pr + $penduduksma_pr + $pendudukslba_pr + $pendudukslbc_pr + $pendudukslbc_pr;

        // Penduduk usia 0 - 6 tahun
        $pendudukusia0tahun_pr = DataPenduduk::where('tanggallahir', '>', $enam_tahun)->where('tanggallahir', '<=', $bawah1th_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Kualitas Angkatan Kerja
        // Laki-Laki
        // Penduduk usia 18 - 56 tahun yang buta aksara dan huruf/angka latin
        $kualitas_pdk_ba_dewasa_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhenam_tahun)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('pendidikan_sedang_id', '29')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 3-6 tahun yang belum masuk play group/TK
        $kualitas_pdk_btk_anak_lk = DataPenduduk::where('tanggallahir', '>', $enam_tahun)->where('tanggallahir', '<=', $tiga_tahun)->where('pendidikan_sedang_id', '1')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 3-6 tahun yang sedang play group/TK
        $kualitas_pdk_mtk_anak_lk = DataPenduduk::where('tanggallahir', '>', $enam_tahun)->where('tanggallahir', '<=', $tiga_tahun)->where('pendidikan_sedang_id', '2')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 7-18 tahun yang tidak pernah sekolah
        $kualitas_pdk_remaja_lk = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '3')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 7-18 tahun yang sedang sekolah
        //
        // Usia 18-56 tahun tidak pernah sekolah
        $kualitas_pdk_tps_dewasa_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhenam_tahun)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('pendidikan_sedang_id', '3')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 18-56 tahun tidak tamat SD
        $kualitas_pdk_ttsd_dewasa_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhenam_tahun)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('pendidikan_sedang_id', '5')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Kualitas Angkatan Kerja
        // Perempuan
        // Penduduk usia 18 - 56 tahun yang buta aksara dan huruf/angka latin
        $kualitas_pdk_ba_dewasa_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhenam_tahun)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('pendidikan_sedang_id', '29')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 3-6 tahun yang belum masuk play group/TK
        $kualitas_pdk_btk_anak_pr = DataPenduduk::where('tanggallahir', '>', $enam_tahun)->where('tanggallahir', '<=', $tiga_tahun)->where('pendidikan_sedang_id', '1')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 3-6 tahun yang sedang play group/TK
        $kualitas_pdk_mtk_anak_pr = DataPenduduk::where('tanggallahir', '>', $enam_tahun)->where('tanggallahir', '<=', $tiga_tahun)->where('pendidikan_sedang_id', '2')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 7-18 tahun yang tidak pernah sekolah
        $kualitas_pdk_remaja_pr = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '3')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 7-18 tahun yang sedang sekolah
        //
        // Usia 18-56 tahun tidak pernah sekolah
        $kualitas_pdk_tps_dewasa_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhenam_tahun)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('pendidikan_sedang_id', '3')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 18-56 tahun tidak tamat SD
        $kualitas_pdk_ttsd_dewasa_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhenam_tahun)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('pendidikan_sedang_id', '5')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        $agama_id = Agama::ambilSemua();
        $jumlahaparaturdesa = AparaturDesa::where('desa_id', auth()->user()->desa_id)->get();
        $kades = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Kepala Desa/Lurah')->get();
        $sekdes = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Sekretaris Desa')->get();
        $seksipem = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Kepala Seksi Pemerintahan')->get();
        $seksikesra = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Kepala Seksi Kesejahteraan Rakyat')->get();
        $seksipel = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Kepala Seksi Pelayanan')->get();
        $seksitu = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Kepala Urusan Tata Usaha dan Umum')->get();
        $seksikeu = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Kepala Urusan Keuangan')->get();
        $seksiren = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Kepala Urusan Perencanaan')->get();
        $bpdketua = BPD::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Ketua')->get();
        $bpdwaket = BPD::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Wakil Ketua')->get();
        $bpdsekr = BPD::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Sekretaris')->get();
        $bpdanggota = BPD::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Anggota')->get();
        $jumlahagtbpd = BPD::where('desa_id', auth()->user()->desa_id)->count();
        $jumlahstafdesa = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Staf')->count();
        $jumlahperangkatdesa = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->count();
        $pendidikanformal = PendidikanFormal::where('desa_id', auth()->user()->desa_id)->get();
        $pendidikankeagamaan1 = PendidikanKeagamaan::where('desa_id', auth()->user()->desa_id)->where('kategoripendidikan', 'Sekolah Islam')->get();
        $pendidikankeagamaan2 = PendidikanKeagamaan::where('desa_id', auth()->user()->desa_id)->where('kategoripendidikan', 'Sekolah Katholik')->get();
        $pendidikankeagamaan3 = PendidikanKeagamaan::where('desa_id', auth()->user()->desa_id)->where('kategoripendidikan', 'Sekolah Budha')->get();
        $pendidikankeagamaan4 = PendidikanKeagamaan::where('desa_id', auth()->user()->desa_id)->where('kategoripendidikan', 'Sekolah Protestan')->get();
        $pendidikankeagamaan5 = PendidikanKeagamaan::where('desa_id', auth()->user()->desa_id)->where('kategoripendidikan', 'Sekolah Hindu')->get();
        $pendidikankeagamaan6 = PendidikanKeagamaan::where('desa_id', auth()->user()->desa_id)->where('kategoripendidikan', 'Sekolah Konghucu')->get();
        $pendidikannonformal = PendidikanNonFormal::where('desa_id', auth()->user()->desa_id)->get();
        $lembagakemasyarakatan = LembagaKemasyarakatan::where('desa_id', auth()->user()->desa_id)->get();
        $tingkatpartisipasipolitik = TingkatPartisipasiPolitik::where('desa_id', auth()->user()->desa_id)->get();
        $profildesa = Desa::where('id', auth()->user()->desa_id)->get();
        $lembagaekonomi = LembagaEkonomi::where('desa_id', auth()->user()->desa_id)->get();
        $jasalembagakeuangan = JasaLembagaKeuangan::where('desa_id', auth()->user()->desa_id)->get();
        $industrikecil = IndustriKecil::where('desa_id', auth()->user()->desa_id)->get();
        $usahajasapengangkutan1 = UsahaJasaPengangkutan::where('desa_id', auth()->user()->desa_id)->where('kategorijasapengangkutan', 'Angkutan Darat')->get();
        $usahajasapengangkutan2 = UsahaJasaPengangkutan::where('desa_id', auth()->user()->desa_id)->where('kategorijasapengangkutan', 'Angkutan Sungai')->get();
        $usahajasapengangkutan3 = UsahaJasaPengangkutan::where('desa_id', auth()->user()->desa_id)->where('kategorijasapengangkutan', 'Angkutan Laut')->get();
        $usahajasapengangkutan4 = UsahaJasaPengangkutan::where('desa_id', auth()->user()->desa_id)->where('kategorijasapengangkutan', 'Angkutan Udara')->get();
        $usahajasapengangkutan5 = UsahaJasaPengangkutan::where('desa_id', auth()->user()->desa_id)->where('kategorijasapengangkutan', 'Ekspedisi dan Pengiriman')->get();
        $usahajasaperdagangan = UsahaJasaPerdagangan::where('desa_id', auth()->user()->desa_id)->get();
        $usahajasahiburan = UsahaJasaHiburan::where('desa_id', auth()->user()->desa_id)->get();
        $usahajasagas = UsahaJasaGas::where('desa_id', auth()->user()->desa_id)->get();
        $usahajasaketerampilan = UsahaJasaKeterampilan::where('desa_id', auth()->user()->desa_id)->get();
        $usahajasahukum = UsahaJasaHukum::where('desa_id', auth()->user()->desa_id)->get();
        $usahajasapenginapan = UsahaJasaPenginapan::where('desa_id', auth()->user()->desa_id)->get();
        $kadus = Alamat::where('desa_id', auth()->user()->desa_id)->get();
        $jumlahdusun = Alamat::where('desa_id', auth()->user()->desa_id)->count();
        $jml_pdk_lk1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '1')->count();
        $jml_pdk_lk2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '2')->count();
        $jml_pdk_lk3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '3')->count();
        $jml_pdk_lk4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '4')->count();
        $jml_pdk_lk5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '5')->count();
        $jml_pdk_lk6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '6')->count();
        $jml_pdk_lk7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '7')->count();
        $jml_pdk_lk8 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '8')->count();
        $jml_pdk_lk9 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '9')->count();
        $jml_pdk_lk10 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '10')->count();
        $jml_pdk_lk11 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '11')->count();
        $jml_pdk_lk12 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '12')->count();
        $jml_pdk_lk13 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '13')->count();
        $jml_pdk_lk14 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '14')->count();
        $jml_pdk_lk15 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '15')->count();
        $jml_pdk_lk16 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '16')->count();
        $jml_pdk_lk17 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '17')->count();
        $jml_pdk_lk18 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '18')->count();
        $jml_pdk_lk19 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '19')->count();
        $jml_pdk_lk20 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '20')->count();
        $jml_pdk_lk21 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '21')->count();
        $jml_pdk_lk22 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '22')->count();
        $jml_pdk_lk23 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '23')->count();
        $jml_pdk_lk24 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '24')->count();
        $jml_pdk_lk25 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '25')->count();
        $jml_pdk_lk26 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '26')->count();
        $jml_pdk_lk27 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '27')->count();
        $jml_pdk_lk28 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '28')->count();
        $jml_pdk_lk29 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '29')->count();
        $jml_pdk_lk30 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '30')->count();

        $jml_pdk_pr1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '1')->count();
        $jml_pdk_pr2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '2')->count();
        $jml_pdk_pr3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '3')->count();
        $jml_pdk_pr4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '4')->count();
        $jml_pdk_pr5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '5')->count();
        $jml_pdk_pr6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '6')->count();
        $jml_pdk_pr7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '7')->count();
        $jml_pdk_pr8 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '8')->count();
        $jml_pdk_pr9 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '9')->count();
        $jml_pdk_pr10 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '10')->count();
        $jml_pdk_pr11 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '11')->count();
        $jml_pdk_pr12 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '12')->count();
        $jml_pdk_pr13 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '13')->count();
        $jml_pdk_pr14 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '14')->count();
        $jml_pdk_pr15 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '15')->count();
        $jml_pdk_pr16 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '16')->count();
        $jml_pdk_pr17 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '17')->count();
        $jml_pdk_pr18 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '18')->count();
        $jml_pdk_pr19 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '19')->count();
        $jml_pdk_pr20 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '20')->count();
        $jml_pdk_pr21 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '21')->count();
        $jml_pdk_pr22 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '22')->count();
        $jml_pdk_pr23 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '23')->count();
        $jml_pdk_pr24 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '24')->count();
        $jml_pdk_pr25 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '25')->count();
        $jml_pdk_pr26 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '26')->count();
        $jml_pdk_pr27 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '27')->count();
        $jml_pdk_pr28 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '28')->count();
        $jml_pdk_pr29 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '29')->count();
        $jml_pdk_pr30 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '30')->count();

        $jml_etn_lk1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '1')->count();
        $jml_etn_lk2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '2')->count();
        $jml_etn_lk3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '3')->count();
        $jml_etn_lk4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '4')->count();
        $jml_etn_lk5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '5')->count();
        $jml_etn_lk6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '6')->count();
        $jml_etn_lk7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '7')->count();
        $jml_etn_lk8 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '8')->count();
        $jml_etn_lk9 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '9')->count();
        $jml_etn_lk10 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '10')->count();
        $jml_etn_lk11 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '11')->count();
        $jml_etn_lk12 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '12')->count();
        $jml_etn_lk13 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '13')->count();
        $jml_etn_lk14 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '14')->count();
        $jml_etn_lk15 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '15')->count();

        $jml_etn_pr1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '1')->count();
        $jml_etn_pr2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '2')->count();
        $jml_etn_pr3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '3')->count();
        $jml_etn_pr4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '4')->count();
        $jml_etn_pr5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '5')->count();
        $jml_etn_pr6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '6')->count();
        $jml_etn_pr7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '7')->count();
        $jml_etn_pr8 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '8')->count();
        $jml_etn_pr9 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '9')->count();
        $jml_etn_pr10 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '10')->count();
        $jml_etn_pr11 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '11')->count();
        $jml_etn_pr12 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '12')->count();
        $jml_etn_pr13 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '13')->count();
        $jml_etn_pr14 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '14')->count();
        $jml_etn_pr15 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '15')->count();

        $jml_krj_pr1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '1')->count();
        $jml_krj_pr2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '2')->count();
        $jml_krj_pr3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '3')->count();
        $jml_krj_pr4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '4')->count();
        $jml_krj_pr5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '5')->count();
        $jml_krj_pr6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '6')->count();
        $jml_krj_pr7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '7')->count();
        $jml_krj_pr8 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '8')->count();
        $jml_krj_pr9 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '9')->count();
        $jml_krj_pr10 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '10')->count();
        $jml_krj_pr11 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '11')->count();
        $jml_krj_pr12 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '12')->count();
        $jml_krj_pr13 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '13')->count();
        $jml_krj_pr14 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '14')->count();
        $jml_krj_pr15 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '15')->count();
        $jml_krj_pr16 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '16')->count();
        $jml_krj_pr17 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '17')->count();
        $jml_krj_pr18 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '18')->count();
        $jml_krj_pr19 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '19')->count();
        $jml_krj_pr20 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '20')->count();
        $jml_krj_pr21 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '21')->count();
        $jml_krj_pr22 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '22')->count();
        $jml_krj_pr23 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '23')->count();
        $jml_krj_pr24 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '24')->count();
        $jml_krj_pr25 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '25')->count();
        $jml_krj_pr26 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '26')->count();
        $jml_krj_pr27 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '27')->count();
        $jml_krj_pr28 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '28')->count();
        $jml_krj_pr29 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '29')->count();
        $jml_krj_pr30 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '30')->count();
        $jml_krj_pr31 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '31')->count();
        $jml_krj_pr32 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '32')->count();
        $jml_krj_pr33 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '33')->count();
        $jml_krj_pr34 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '34')->count();
        $jml_krj_pr35 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '35')->count();
        $jml_krj_pr36 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '36')->count();
        $jml_krj_pr37 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '37')->count();
        $jml_krj_pr38 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '38')->count();
        $jml_krj_pr39 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '39')->count();
        $jml_krj_pr40 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '40')->count();
        $jml_krj_pr41 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '41')->count();
        $jml_krj_pr42 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '42')->count();
        $jml_krj_pr43 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '43')->count();
        $jml_krj_pr44 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '44')->count();
        $jml_krj_pr45 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '45')->count();
        $jml_krj_pr46 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '46')->count();
        $jml_krj_pr47 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '47')->count();
        $jml_krj_pr48 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '48')->count();
        $jml_krj_pr49 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '49')->count();
        $jml_krj_pr50 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '50')->count();
        $jml_krj_pr51 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '51')->count();
        $jml_krj_pr52 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '52')->count();
        $jml_krj_pr53 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '53')->count();
        $jml_krj_pr54 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '54')->count();
        $jml_krj_pr55 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '55')->count();
        $jml_krj_pr56 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '56')->count();
        $jml_krj_pr57 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '57')->count();
        $jml_krj_pr58 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '58')->count();
        $jml_krj_pr59 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '59')->count();
        $jml_krj_pr60 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '60')->count();
        $jml_krj_pr61 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '61')->count();
        $jml_krj_pr62 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '62')->count();
        $jml_krj_pr63 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '63')->count();
        $jml_krj_pr64 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '64')->count();
        $jml_krj_pr65 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '65')->count();
        $jml_krj_pr66 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '66')->count();
        $jml_krj_pr67 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '67')->count();
        $jml_krj_pr68 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '68')->count();
        $jml_krj_pr69 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '69')->count();
        $jml_krj_pr70 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '70')->count();
        $jml_krj_pr71 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '71')->count();
        $jml_krj_pr72 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '72')->count();
        $jml_krj_pr73 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '73')->count();
        $jml_krj_pr74 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '74')->count();
        $jml_krj_pr75 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '75')->count();
        $jml_krj_pr76 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '76')->count();
        $jml_krj_pr77 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '77')->count();
        $jml_krj_pr78 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '78')->count();
        $jml_krj_pr79 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '79')->count();
        $jml_krj_pr80 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '80')->count();
        $jml_krj_pr81 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '81')->count();
        $jml_krj_pr82 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '82')->count();
        $jml_krj_pr83 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '83')->count();
        $jml_krj_pr84 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '84')->count();
        $jml_krj_pr85 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '85')->count();
        $jml_krj_pr86 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '86')->count();
        $jml_krj_pr87 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '87')->count();
        $jml_krj_pr88 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '88')->count();
        $jml_krj_pr89 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '89')->count();

        $jml_krj_lk1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '1')->count();
        $jml_krj_lk2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '2')->count();
        $jml_krj_lk3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '3')->count();
        $jml_krj_lk4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '4')->count();
        $jml_krj_lk5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '5')->count();
        $jml_krj_lk6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '6')->count();
        $jml_krj_lk7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '7')->count();
        $jml_krj_lk8 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '8')->count();
        $jml_krj_lk9 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '9')->count();
        $jml_krj_lk10 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '10')->count();
        $jml_krj_lk11 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '11')->count();
        $jml_krj_lk12 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '12')->count();
        $jml_krj_lk13 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '13')->count();
        $jml_krj_lk14 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '14')->count();
        $jml_krj_lk15 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '15')->count();
        $jml_krj_lk16 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '16')->count();
        $jml_krj_lk17 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '17')->count();
        $jml_krj_lk18 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '18')->count();
        $jml_krj_lk19 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '19')->count();
        $jml_krj_lk20 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '20')->count();
        $jml_krj_lk21 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '21')->count();
        $jml_krj_lk22 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '22')->count();
        $jml_krj_lk23 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '23')->count();
        $jml_krj_lk24 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '24')->count();
        $jml_krj_lk25 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '25')->count();
        $jml_krj_lk26 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '26')->count();
        $jml_krj_lk27 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '27')->count();
        $jml_krj_lk28 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '28')->count();
        $jml_krj_lk29 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '29')->count();
        $jml_krj_lk30 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '30')->count();
        $jml_krj_lk31 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '31')->count();
        $jml_krj_lk32 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '32')->count();
        $jml_krj_lk33 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '33')->count();
        $jml_krj_lk34 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '34')->count();
        $jml_krj_lk35 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '35')->count();
        $jml_krj_lk36 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '36')->count();
        $jml_krj_lk37 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '37')->count();
        $jml_krj_lk38 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '38')->count();
        $jml_krj_lk39 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '39')->count();
        $jml_krj_lk40 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '40')->count();
        $jml_krj_lk41 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '41')->count();
        $jml_krj_lk42 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '42')->count();
        $jml_krj_lk43 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '43')->count();
        $jml_krj_lk44 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '44')->count();
        $jml_krj_lk45 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '45')->count();
        $jml_krj_lk46 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '46')->count();
        $jml_krj_lk47 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '47')->count();
        $jml_krj_lk48 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '48')->count();
        $jml_krj_lk49 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '49')->count();
        $jml_krj_lk50 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '50')->count();
        $jml_krj_lk51 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '51')->count();
        $jml_krj_lk52 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '52')->count();
        $jml_krj_lk53 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '53')->count();
        $jml_krj_lk54 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '54')->count();
        $jml_krj_lk55 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '55')->count();
        $jml_krj_lk56 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '56')->count();
        $jml_krj_lk57 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '57')->count();
        $jml_krj_lk58 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '58')->count();
        $jml_krj_lk59 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '59')->count();
        $jml_krj_lk60 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '60')->count();
        $jml_krj_lk61 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '61')->count();
        $jml_krj_lk62 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '62')->count();
        $jml_krj_lk63 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '63')->count();
        $jml_krj_lk64 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '64')->count();
        $jml_krj_lk65 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '65')->count();
        $jml_krj_lk66 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '66')->count();
        $jml_krj_lk67 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '67')->count();
        $jml_krj_lk68 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '68')->count();
        $jml_krj_lk69 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '69')->count();
        $jml_krj_lk70 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '70')->count();
        $jml_krj_lk71 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '71')->count();
        $jml_krj_lk72 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '72')->count();
        $jml_krj_lk73 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '73')->count();
        $jml_krj_lk74 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '74')->count();
        $jml_krj_lk75 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '75')->count();
        $jml_krj_lk76 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '76')->count();
        $jml_krj_lk77 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '77')->count();
        $jml_krj_lk78 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '78')->count();
        $jml_krj_lk79 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '79')->count();
        $jml_krj_lk80 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '80')->count();
        $jml_krj_lk81 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '81')->count();
        $jml_krj_lk82 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '82')->count();
        $jml_krj_lk83 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '83')->count();
        $jml_krj_lk84 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '84')->count();
        $jml_krj_lk85 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '85')->count();
        $jml_krj_lk86 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '86')->count();
        $jml_krj_lk87 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '87')->count();
        $jml_krj_lk88 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '88')->count();
        $jml_krj_lk89 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '89')->count();

        $jml_agm_lk1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '1')->count();
        $jml_agm_lk2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '2')->count();
        $jml_agm_lk3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '3')->count();
        $jml_agm_lk4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '4')->count();
        $jml_agm_lk5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '5')->count();
        $jml_agm_lk6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '6')->count();
        $jml_agm_lk7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '7')->count();

        $jml_agm_pr1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '1')->count();
        $jml_agm_pr2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '2')->count();
        $jml_agm_pr3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '3')->count();
        $jml_agm_pr4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '4')->count();
        $jml_agm_pr5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '5')->count();
        $jml_agm_pr6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '6')->count();
        $jml_agm_pr7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '7')->count();

        $jml_wrg_lk1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('kewarganegaraan_id', '1')->count();
        $jml_wrg_pr1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('kewarganegaraan_id', '1')->count();
        $jml_wrg_lk2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('kewarganegaraan_id', '2')->count();
        $jml_wrg_pr2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('kewarganegaraan_id', '2')->count();

        $jml_pcct_lk1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('penyandangcacat_id', '1')->count();
        $jml_pcct_lk2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('penyandangcacat_id', '2')->count();
        $jml_pcct_lk3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('penyandangcacat_id', '3')->count();
        $jml_pcct_lk4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('penyandangcacat_id', '4')->count();
        $jml_pcct_lk5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('penyandangcacat_id', '5')->count();
        $jml_pcct_lk6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('penyandangcacat_id', '6')->count();
        $jml_pcct_lk7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('penyandangcacat_id', '7')->count();

        $jml_pcct_pr1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('penyandangcacat_id', '1')->count();
        $jml_pcct_pr2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('penyandangcacat_id', '2')->count();
        $jml_pcct_pr3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('penyandangcacat_id', '3')->count();
        $jml_pcct_pr4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('penyandangcacat_id', '4')->count();
        $jml_pcct_pr5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('penyandangcacat_id', '5')->count();
        $jml_pcct_pr6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('penyandangcacat_id', '6')->count();
        $jml_pcct_pr7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('penyandangcacat_id', '7')->count();

        return view('operatordesa.profil-desa.cetak', compact(
            'profilkecamatan',
            'lembagaekonomi',
            'jasalembagakeuangan',
            'industrikecil',
            'usahajasapengangkutan1',
            'usahajasapengangkutan2',
            'usahajasapengangkutan3',
            'usahajasapengangkutan4',
            'usahajasapengangkutan5',
            'usahajasaperdagangan',
            'usahajasahiburan',
            'usahajasagas',
            'usahajasaketerampilan',
            'usahajasahukum',
            'usahajasapenginapan',
            'profildesa',
            'potensiumum',
            'jumlahaparaturdesa',
            'datatanah',
            'iklimjeniskesuburantanah',
            'topografiletakorbitasi',
            'prasaranasaranakebersihan',
            'prasaranahiburanwisata',
            'prasaranaenergipenerangan',
            'prasaranasaranapendidikan',
            'prasaranaperibadatan',
            'prasaranaolahraga',
            'prasaranakesehatan',
            'saranakesehatan',
            'telepon',
            'radiotv',
            'koran',
            'potensiwisata',
            'ruangpublik',
            'tanamanpangan',
            'komoditasbuah',
            'tanamanapotik',
            'hasilhutan',
            'kondisihutan',
            'dampakolahhutan',
            'jenispopulasiternak',
            'produksiternak',
            'pemilikusahaternak',
            'alatproduksilaut',
            'alatproduksitawar',
            'jenisikan',
            'bahangalian',
            'potensiairsda',
            'sumberairbersih',
            'hasilperkebunan',
            'kebisingan',
            'kualitasudara',
            'kehutanan',
            'airpanas',
            'kantorpos',
            'tingkatpartisipasipolitik',
            'lembagakemasyarakatan',
            'prasaranadarat',
            'saranadarat',
            'prasaranalaut',
            'saranalaut',
            'prasaranaudara',
            'prasaranalkdk',
            'prasaranapemerintahan',
            'prasaranabpddusun',
            'prasaranairigasi',
            'prasaranaairbersih',
            'lembagakeamanan',
            'lembagaadat',
            'jumlahlakilaki',
            'jumlahperempuan',
            'jumlahpenduduk',
            'jumlahkk',
            'pendidikan',
            'kewarganegaraan_id',
            'agama_id',
            'jenispekerjaan_id',
            'kades',
            'sekdes',
            'seksipem',
            'seksikesra',
            'seksipel',
            'seksitu',
            'seksikeu',
            'seksiren',
            'bpdketua',
            'bpdwaket',
            'bpdsekr',
            'bpdanggota',
            'jumlahagtbpd',
            'jumlahstafdesa',
            'jumlahperangkatdesa',
            'pendidikanformal',
            'pendidikankeagamaan1',
            'pendidikankeagamaan2',
            'pendidikankeagamaan3',
            'pendidikankeagamaan4',
            'pendidikankeagamaan5',
            'pendidikankeagamaan6',
            'pendidikannonformal',
            'pendidikansedang',
            'penyandangcacat',
            'etnis',
            'jml_pcct_lk1',
            'jml_pcct_lk2',
            'jml_pcct_lk3',
            'jml_pcct_lk4',
            'jml_pcct_lk5',
            'jml_pcct_lk6',
            'jml_pcct_lk7',
            'jml_pcct_pr1',
            'jml_pcct_pr2',
            'jml_pcct_pr3',
            'jml_pcct_pr4',
            'jml_pcct_pr5',
            'jml_pcct_pr6',
            'jml_pcct_pr7',

            'jml_etn_lk1',
            'jml_etn_lk2',
            'jml_etn_lk3',
            'jml_etn_lk4',
            'jml_etn_lk5',
            'jml_etn_lk6',
            'jml_etn_lk7',
            'jml_etn_lk8',
            'jml_etn_lk9',
            'jml_etn_lk10',
            'jml_etn_lk11',
            'jml_etn_lk12',
            'jml_etn_lk13',
            'jml_etn_lk14',
            'jml_etn_lk15',

            'jml_etn_pr1',
            'jml_etn_pr2',
            'jml_etn_pr3',
            'jml_etn_pr4',
            'jml_etn_pr5',
            'jml_etn_pr6',
            'jml_etn_pr7',
            'jml_etn_pr8',
            'jml_etn_pr9',
            'jml_etn_pr10',
            'jml_etn_pr11',
            'jml_etn_pr12',
            'jml_etn_pr13',
            'jml_etn_pr14',
            'jml_etn_pr15',

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

            'jml_wrg_lk1',
            'jml_wrg_pr1',
            'jml_wrg_lk2',
            'jml_wrg_pr2',

            'umur75_lk',
            'umur75atas_lk',
            'umur74_lk',
            'umur73_lk',
            'umur72_lk',
            'umur71_lk',
            'umur70_lk',
            'umur69_lk',
            'umur68_lk',
            'umur67_lk',
            'umur66_lk',
            'umur65_lk',
            'umur64_lk',
            'umur63_lk',
            'umur62_lk',
            'umur61_lk',
            'umur60_lk',
            'umur59_lk',
            'umur58_lk',
            'umur57_lk',
            'umur56_lk',
            'umur55_lk',
            'umur54_lk',
            'umur53_lk',
            'umur52_lk',
            'umur51_lk',
            'umur50_lk',
            'umur49_lk',
            'umur48_lk',
            'umur47_lk',
            'umur46_lk',
            'umur45_lk',
            'umur44_lk',
            'umur43_lk',
            'umur42_lk',
            'umur41_lk',
            'umur40_lk',
            'umur39_lk',
            'umur38_lk',
            'umur37_lk',
            'umur36_lk',
            'umur35_lk',
            'umur34_lk',
            'umur33_lk',
            'umur32_lk',
            'umur31_lk',
            'umur30_lk',
            'umur29_lk',
            'umur28_lk',
            'umur27_lk',
            'umur26_lk',
            'umur25_lk',
            'umur24_lk',
            'umur23_lk',
            'umur22_lk',
            'umur21_lk',
            'umur20_lk',
            'umur19_lk',
            'umur18_lk',
            'umur17_lk',
            'umur16_lk',
            'umur15_lk',
            'umur14_lk',
            'umur13_lk',
            'umur12_lk',
            'umur11_lk',
            'umur10_lk',
            'umur9_lk',
            'umur8_lk',
            'umur7_lk',
            'umur6_lk',
            'umur5_lk',
            'umur4_lk',
            'umur3_lk',
            'umur2_lk',
            'umur1_lk',
            'umur0_lk',
            'total_lk',

            'umur75_pr',
            'umur75atas_pr',
            'umur74_pr',
            'umur73_pr',
            'umur72_pr',
            'umur71_pr',
            'umur70_pr',
            'umur69_pr',
            'umur68_pr',
            'umur67_pr',
            'umur66_pr',
            'umur65_pr',
            'umur64_pr',
            'umur63_pr',
            'umur62_pr',
            'umur61_pr',
            'umur60_pr',
            'umur59_pr',
            'umur58_pr',
            'umur57_pr',
            'umur56_pr',
            'umur55_pr',
            'umur54_pr',
            'umur53_pr',
            'umur52_pr',
            'umur51_pr',
            'umur50_pr',
            'umur49_pr',
            'umur48_pr',
            'umur47_pr',
            'umur46_pr',
            'umur45_pr',
            'umur44_pr',
            'umur43_pr',
            'umur42_pr',
            'umur41_pr',
            'umur40_pr',
            'umur39_pr',
            'umur38_pr',
            'umur37_pr',
            'umur36_pr',
            'umur35_pr',
            'umur34_pr',
            'umur33_pr',
            'umur32_pr',
            'umur31_pr',
            'umur30_pr',
            'umur29_pr',
            'umur28_pr',
            'umur27_pr',
            'umur26_pr',
            'umur25_pr',
            'umur24_pr',
            'umur23_pr',
            'umur22_pr',
            'umur21_pr',
            'umur20_pr',
            'umur19_pr',
            'umur18_pr',
            'umur17_pr',
            'umur16_pr',
            'umur15_pr',
            'umur14_pr',
            'umur13_pr',
            'umur12_pr',
            'umur11_pr',
            'umur10_pr',
            'umur9_pr',
            'umur8_pr',
            'umur7_pr',
            'umur6_pr',
            'umur5_pr',
            'umur4_pr',
            'umur3_pr',
            'umur2_pr',
            'umur1_pr',
            'umur0_pr',
            'total_pr',

            'penduduk56tahunatas_lk',
            'penduduktidakbekerja_lk',
            'pendudukbekerja_lk',
            'totalpendudukbekerja_lk',
            'penduduksd_lk',
            'penduduksmp_lk',
            'penduduksma_lk',
            'totalpenduduksekolah_lk',
            'pendudukusia0tahun_lk',

            'penduduk56tahunatas_pr',
            'penduduktidakbekerja_pr',
            'pendudukbekerja_pr',
            'totalpendudukbekerja_pr',
            'penduduksd_pr',
            'penduduksmp_pr',
            'penduduksma_pr',
            'totalpenduduksekolah_pr',
            'pendudukusia0tahun_pr',
            'kualitas_pdk_ba_dewasa_lk',
            'kualitas_pdk_btk_anak_lk',
            'kualitas_pdk_mtk_anak_lk',
            'kualitas_pdk_remaja_lk',
            'kualitas_pdk_tps_dewasa_lk',
            'kualitas_pdk_ttsd_dewasa_lk',
            'kualitas_pdk_ba_dewasa_pr',
            'kualitas_pdk_btk_anak_pr',
            'kualitas_pdk_mtk_anak_pr',
            'kualitas_pdk_remaja_pr',
            'kualitas_pdk_tps_dewasa_pr',
            'kualitas_pdk_ttsd_dewasa_pr',
            'jumlahdusun',
            'kadus',
            'pertanian',
            'pemasaranpanganbuah',
            'pemasaranhasilperkebunan',
            'pemasaranhasilhutan',
            'manfaatkondisidanau',
            'pemasaranhasilgalian',
            'pemasaranhasilikan',
            'ketersediaanlahanternak',
            'pemasaranhasilternak',
            'hijauanpakanternak',
            'sungai',
            'rawa'
        ));
    }
    public function edit()
    {
        $profilkecamatan = ProfilKecamatan::first();
        $potensiumum = PotensiUmum::where('desa_id', auth()->user()->desa_id)->first();
        $datatanah = DataTanah::where('desa_id', auth()->user()->desa_id)->first();
        $iklimjeniskesuburantanah = IklimJenisKesuburanTanah::where('desa_id', auth()->user()->desa_id)->first();
        $topografiletakorbitasi = TopografiLetakOrbitasi::where('desa_id', auth()->user()->desa_id)->first();
        $pertanian = Pertanian::where('desa_id', auth()->user()->desa_id)->first();
        $pemasaranpanganbuah = PemasaranPanganBuah::where('desa_id', auth()->user()->desa_id)->first();
        $pemasaranhasilperkebunan = PemasaranHasilPerkebunan::where('desa_id', auth()->user()->desa_id)->first();
        $pemasaranhasilhutan = PemasaranHasilHutan::where('desa_id', auth()->user()->desa_id)->first();
        $pemasaranhasilgalian = PemasaranHasilGalian::where('desa_id', auth()->user()->desa_id)->first();
        $pemasaranhasilikan = PemasaranHasilIkan::where('desa_id', auth()->user()->desa_id)->first();
        $manfaatkondisidanau = ManfaatKondisiDanau::where('desa_id', auth()->user()->desa_id)->first();
        $ketersediaanlahanternak = KetersediaanLahanTernak::where('desa_id', auth()->user()->desa_id)->first();
        $pemasaranhasilternak = PemasaranHasilTernak::where('desa_id', auth()->user()->desa_id)->first();
        $hijauanpakanternak = HijauanPakanTernak::where('desa_id', auth()->user()->desa_id)->first();
        $rawa = Rawa::where('desa_id', auth()->user()->desa_id)->first();
        $sungai = Sungai::where('desa_id', auth()->user()->desa_id)->first();
        $prasaranasaranakebersihan = PrasaranaSaranaKebersihan::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranahiburanwisata = PrasaranaHiburanWisata::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranaenergipenerangan = PrasaranaEnergiPenerangan::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranasaranapendidikan = PrasaranaSaranaPendidikan::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranaperibadatan = PrasaranaPeribadatan::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranaolahraga = PrasaranaOlahraga::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranakesehatan = PrasaranaKesehatan::where('desa_id', auth()->user()->desa_id)->get();
        $saranakesehatan = SaranaKesehatan::where('desa_id', auth()->user()->desa_id)->get();
        $telepon = Telepon::where('desa_id', auth()->user()->desa_id)->get();
        $radiotv = RadioTv::where('desa_id', auth()->user()->desa_id)->get();
        $koran = Koran::where('desa_id', auth()->user()->desa_id)->get();
        $potensiwisata = PotensiWisata::where('desa_id', auth()->user()->desa_id)->get();
        $ruangpublik = RuangPublik::where('desa_id', auth()->user()->desa_id)->get();
        $tanamanpangan = TanamanPangan::where('desa_id', auth()->user()->desa_id)->get();
        $komoditasbuah = KomoditasBuah::where('desa_id', auth()->user()->desa_id)->get();
        $tanamanapotik = TanamanApotik::where('desa_id', auth()->user()->desa_id)->get();
        $hasilhutan = HasilHutan::where('desa_id', auth()->user()->desa_id)->get();
        $kondisihutan = KondisiHutan::where('desa_id', auth()->user()->desa_id)->get();
        $dampakolahhutan = DampakOlahHutan::where('desa_id', auth()->user()->desa_id)->get();

        $jenispopulasiternak = JenisPopulasiTernak::where('desa_id', auth()->user()->desa_id)->get();
        $produksiternak = ProduksiTernak::where('desa_id', auth()->user()->desa_id)->get();
        $pemilikusahaternak = PemilikUsahaTernak::where('desa_id', auth()->user()->desa_id)->get();
        $alatproduksilaut = AlatProduksiLaut::where('desa_id', auth()->user()->desa_id)->get();
        $alatproduksitawar = AlatProduksiTawar::where('desa_id', auth()->user()->desa_id)->get();
        $jenisikan = JenisIkan::where('desa_id', auth()->user()->desa_id)->get();
        $bahangalian = BahanGalian::where('desa_id', auth()->user()->desa_id)->get();

        $potensiairsda = PotensiAirSda::where('desa_id', auth()->user()->desa_id)->get();
        $sumberairbersih = SumberAirBersih::where('desa_id', auth()->user()->desa_id)->get();
        $hasilperkebunan = HasilPerkebunan::where('desa_id', auth()->user()->desa_id)->get();
        $kebisingan = Kebisingan::where('desa_id', auth()->user()->desa_id)->get();
        $kualitasudara = KualitasUdara::where('desa_id', auth()->user()->desa_id)->get();
        $kehutanan = Kehutanan::where('desa_id', auth()->user()->desa_id)->get();
        $airpanas = AirPanas::where('desa_id', auth()->user()->desa_id)->get();
        $kantorpos = KantorPos::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranadarat = PrasaranaDarat::where('desa_id', auth()->user()->desa_id)->get();
        $saranadarat = SaranaDarat::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranalaut = PrasaranaLaut::where('desa_id', auth()->user()->desa_id)->get();
        $saranalaut = SaranaLaut::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranaudara = PrasaranaUdara::where('desa_id', auth()->user()->desa_id)->get();
        $prasaranalkdk = PrasaranaLKDK::where('desa_id', auth()->user()->desa_id)->first();
        $prasaranapemerintahan = PrasaranaPemerintahan::where('desa_id', auth()->user()->desa_id)->first();
        $prasaranabpddusun = PrasaranaBPDDusun::where('desa_id', auth()->user()->desa_id)->first();
        $prasaranairigasi = PrasaranaIrigasi::where('desa_id', auth()->user()->desa_id)->first();
        $prasaranaairbersih = PrasaranaAirBersih::where('desa_id', auth()->user()->desa_id)->first();
        $lembagakeamanan = LembagaKeamanan::where('desa_id', auth()->user()->desa_id)->first();
        $lembagaadat = LembagaAdat::where('desa_id', auth()->user()->desa_id)->first();
        $jumlahlakilaki = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->count();
        $jumlahperempuan = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->count();
        $jumlahpenduduk = DataPenduduk::where('desa_id', auth()->user()->desa_id)->count();
        $jumlahkk = DataPenduduk::where('desa_id', auth()->user()->desa_id)->distinct('NOKK')->count();
        $pendidikan = Pendidikan::ambilSemua();
        $pendidikansedang = PendidikanSedang::ambilSemua();
        $jenispekerjaan_id = JenisPekerjaan::ambilSemua();
        $kewarganegaraan_id = Kewarganegaraan::ambilSemua();
        $penyandangcacat = PenyandangCacat::ambilSemua();
        $etnis = Etnis::ambilSemua();
        // Laki-Laki
        // Atas Umur 75 Th
        $tujuhpuluhlimaatas_tahun = \Carbon\Carbon::today()->subYears(75)->format('Y-m-d');
        $umur75atas_lk = DataPenduduk::where('tanggallahir', '<=', $tujuhpuluhlimaatas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 75 Th
        $tujuhpuluhlima_tahun = \Carbon\Carbon::today()->subYears(75)->format('Y-m-d');
        $umur75_lk = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhlimaatas_tahun)->where('tanggallahir', '<=', $tujuhpuluhlima_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 74 Th
        $tujuhpuluhempat_tahun = \Carbon\Carbon::today()->subYears(74)->format('Y-m-d');
        $umur74_lk = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhlima_tahun)->where('tanggallahir', '<=', $tujuhpuluhempat_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 73 Th
        $tujuhpuluhtiga_tahun = \Carbon\Carbon::today()->subYears(73)->format('Y-m-d');
        $umur73_lk = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhempat_tahun)->where('tanggallahir', '<=', $tujuhpuluhtiga_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 72 Th
        $tujuhpuluhdua_tahun = \Carbon\Carbon::today()->subYears(72)->format('Y-m-d');
        $umur72_lk = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhtiga_tahun)->where('tanggallahir', '<=', $tujuhpuluhdua_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 71 Th
        $tujuhpuluhsatu_tahun = \Carbon\Carbon::today()->subYears(71)->format('Y-m-d');
        $umur71_lk = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhdua_tahun)->where('tanggallahir', '<=', $tujuhpuluhsatu_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 70 Th
        $tujuhpuluh_tahun = \Carbon\Carbon::today()->subYears(70)->format('Y-m-d');
        $umur70_lk = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhsatu_tahun)->where('tanggallahir', '<=', $tujuhpuluh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 69 Th
        $enampuluhsembilan_tahun = \Carbon\Carbon::today()->subYears(69)->format('Y-m-d');
        $umur69_lk = DataPenduduk::where('tanggallahir', '>', $tujuhpuluh_tahun)->where('tanggallahir', '<=', $enampuluhsembilan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 68 Th
        $enampuluhdelapan_tahun = \Carbon\Carbon::today()->subYears(68)->format('Y-m-d');
        $umur68_lk = DataPenduduk::where('tanggallahir', '>', $enampuluhsembilan_tahun)->where('tanggallahir', '<=', $enampuluhdelapan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 67 Th
        $enampuluhtujuh_tahun = \Carbon\Carbon::today()->subYears(67)->format('Y-m-d');
        $umur67_lk = DataPenduduk::where('tanggallahir', '>', $enampuluhdelapan_tahun)->where('tanggallahir', '<=', $enampuluhtujuh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 66 Th
        $enampuluhenam_tahun = \Carbon\Carbon::today()->subYears(66)->format('Y-m-d');
        $umur66_lk = DataPenduduk::where('tanggallahir', '>', $enampuluhtujuh_tahun)->where('tanggallahir', '<=', $enampuluhenam_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 65 Th
        $enampuluhlima_tahun = \Carbon\Carbon::today()->subYears(65)->format('Y-m-d');
        $umur65_lk = DataPenduduk::where('tanggallahir', '>', $enampuluhenam_tahun)->where('tanggallahir', '<=', $enampuluhlima_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 64 Th
        $enampuluhempat_tahun = \Carbon\Carbon::today()->subYears(64)->format('Y-m-d');
        $umur64_lk = DataPenduduk::where('tanggallahir', '>', $enampuluhlima_tahun)->where('tanggallahir', '<=', $enampuluhempat_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 63 Th
        $enampuluhtiga_tahun = \Carbon\Carbon::today()->subYears(63)->format('Y-m-d');
        $umur63_lk = DataPenduduk::where('tanggallahir', '>', $enampuluhempat_tahun)->where('tanggallahir', '<=', $enampuluhtiga_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 62 Th
        $enampuluhdua_tahun = \Carbon\Carbon::today()->subYears(62)->format('Y-m-d');
        $umur62_lk = DataPenduduk::where('tanggallahir', '>', $enampuluhtiga_tahun)->where('tanggallahir', '<=', $enampuluhdua_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 61 Th
        $enampuluhsatu_tahun = \Carbon\Carbon::today()->subYears(61)->format('Y-m-d');
        $umur61_lk = DataPenduduk::where('tanggallahir', '>', $enampuluhdua_tahun)->where('tanggallahir', '<=', $enampuluhsatu_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 60 Th
        $enampuluh_tahun = \Carbon\Carbon::today()->subYears(60)->format('Y-m-d');
        $umur60_lk = DataPenduduk::where('tanggallahir', '>', $enampuluhsatu_tahun)->where('tanggallahir', '<=', $enampuluh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 59 Th
        $limapuluhsembilan_tahun = \Carbon\Carbon::today()->subYears(59)->format('Y-m-d');
        $umur59_lk = DataPenduduk::where('tanggallahir', '>', $enampuluh_tahun)->where('tanggallahir', '<=', $limapuluhsembilan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 58 Th
        $limapuluhdelapan_tahun = \Carbon\Carbon::today()->subYears(58)->format('Y-m-d');
        $umur58_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhsembilan_tahun)->where('tanggallahir', '<=', $limapuluhdelapan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 57 Th
        $limapuluhtujuh_tahun = \Carbon\Carbon::today()->subYears(57)->format('Y-m-d');
        $umur57_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhdelapan_tahun)->where('tanggallahir', '<=', $limapuluhtujuh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 56 Th
        $limapuluhenam_tahun = \Carbon\Carbon::today()->subYears(56)->format('Y-m-d');
        $umur56_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhtujuh_tahun)->where('tanggallahir', '<=', $limapuluhenam_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 55 Th
        $limapuluhlima_tahun = \Carbon\Carbon::today()->subYears(55)->format('Y-m-d');
        $umur55_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhenam_tahun)->where('tanggallahir', '<=', $limapuluhlima_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 54 Th
        $limapuluhempat_tahun = \Carbon\Carbon::today()->subYears(54)->format('Y-m-d');
        $umur54_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhlima_tahun)->where('tanggallahir', '<=', $limapuluhempat_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 53 Th
        $limapuluhtiga_tahun = \Carbon\Carbon::today()->subYears(53)->format('Y-m-d');
        $umur53_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhempat_tahun)->where('tanggallahir', '<=', $limapuluhtiga_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 52 Th
        $limapuluhdua_tahun = \Carbon\Carbon::today()->subYears(52)->format('Y-m-d');
        $umur52_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhtiga_tahun)->where('tanggallahir', '<=', $limapuluhdua_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 51 Th
        $limapuluhsatu_tahun = \Carbon\Carbon::today()->subYears(51)->format('Y-m-d');
        $umur51_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhdua_tahun)->where('tanggallahir', '<=', $limapuluhsatu_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 50 Th
        $limapuluh_tahun = \Carbon\Carbon::today()->subYears(50)->format('Y-m-d');
        $umur50_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhsatu_tahun)->where('tanggallahir', '<=', $limapuluh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 49 Th
        $empatpuluhsembilan_tahun = \Carbon\Carbon::today()->subYears(49)->format('Y-m-d');
        $umur49_lk = DataPenduduk::where('tanggallahir', '>', $limapuluh_tahun)->where('tanggallahir', '<=', $empatpuluhsembilan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 48 Th
        $empatpuluhdelapan_tahun = \Carbon\Carbon::today()->subYears(48)->format('Y-m-d');
        $umur48_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluhsembilan_tahun)->where('tanggallahir', '<=', $empatpuluhdelapan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 47 Th
        $empatpuluhtujuh_tahun = \Carbon\Carbon::today()->subYears(47)->format('Y-m-d');
        $umur47_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluhdelapan_tahun)->where('tanggallahir', '<=', $empatpuluhtujuh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 46 Th
        $empatpuluhenam_tahun = \Carbon\Carbon::today()->subYears(46)->format('Y-m-d');
        $umur46_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluhtujuh_tahun)->where('tanggallahir', '<=', $empatpuluhenam_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 45 Th
        $empatpuluhlima_tahun = \Carbon\Carbon::today()->subYears(45)->format('Y-m-d');
        $umur45_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluhenam_tahun)->where('tanggallahir', '<=', $empatpuluhlima_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 44 Th
        $empatpuluhempat_tahun = \Carbon\Carbon::today()->subYears(44)->format('Y-m-d');
        $umur44_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluhlima_tahun)->where('tanggallahir', '<=', $empatpuluhempat_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 43 Th
        $empatpuluhtiga_tahun = \Carbon\Carbon::today()->subYears(43)->format('Y-m-d');
        $umur43_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluhempat_tahun)->where('tanggallahir', '<=', $empatpuluhtiga_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 42 Th
        $empatpuluhdua_tahun = \Carbon\Carbon::today()->subYears(42)->format('Y-m-d');
        $umur42_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluhtiga_tahun)->where('tanggallahir', '<=', $empatpuluhdua_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 41 Th
        $empatpuluhsatu_tahun = \Carbon\Carbon::today()->subYears(41)->format('Y-m-d');
        $umur41_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluhdua_tahun)->where('tanggallahir', '<=', $empatpuluhsatu_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 40 Th
        $empatpuluh_tahun = \Carbon\Carbon::today()->subYears(40)->format('Y-m-d');
        $umur40_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluhsatu_tahun)->where('tanggallahir', '<=', $empatpuluh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 39 Th
        $tigapuluhsembilan_tahun = \Carbon\Carbon::today()->subYears(39)->format('Y-m-d');
        $umur39_lk = DataPenduduk::where('tanggallahir', '>', $empatpuluh_tahun)->where('tanggallahir', '<=', $tigapuluhsembilan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 38 Th
        $tigapuluhdelapan_tahun = \Carbon\Carbon::today()->subYears(38)->format('Y-m-d');
        $umur38_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluhsembilan_tahun)->where('tanggallahir', '<=', $tigapuluhdelapan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 37 Th
        $tigapuluhtujuh_tahun = \Carbon\Carbon::today()->subYears(37)->format('Y-m-d');
        $umur37_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluhdelapan_tahun)->where('tanggallahir', '<=', $tigapuluhtujuh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 36 Th
        $tigapuluhenam_tahun = \Carbon\Carbon::today()->subYears(36)->format('Y-m-d');
        $umur36_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluhtujuh_tahun)->where('tanggallahir', '<=', $tigapuluhenam_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 35 Th
        $tigapuluhlima_tahun = \Carbon\Carbon::today()->subYears(35)->format('Y-m-d');
        $umur35_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluhenam_tahun)->where('tanggallahir', '<=', $tigapuluhlima_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 34 Th
        $tigapuluhempat_tahun = \Carbon\Carbon::today()->subYears(34)->format('Y-m-d');
        $umur34_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluhlima_tahun)->where('tanggallahir', '<=', $tigapuluhempat_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 33 Th
        $tigapuluhtiga_tahun = \Carbon\Carbon::today()->subYears(33)->format('Y-m-d');
        $umur33_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluhempat_tahun)->where('tanggallahir', '<=', $tigapuluhtiga_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 32 Th
        $tigapuluhdua_tahun = \Carbon\Carbon::today()->subYears(32)->format('Y-m-d');
        $umur32_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluhtiga_tahun)->where('tanggallahir', '<=', $tigapuluhdua_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 31 Th
        $tigapuluhsatu_tahun = \Carbon\Carbon::today()->subYears(31)->format('Y-m-d');
        $umur31_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluhdua_tahun)->where('tanggallahir', '<=', $tigapuluhsatu_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 30 Th
        $tigapuluh_tahun = \Carbon\Carbon::today()->subYears(30)->format('Y-m-d');
        $umur30_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluhsatu_tahun)->where('tanggallahir', '<=', $tigapuluh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 29 Th
        $duapuluhsembilan_tahun = \Carbon\Carbon::today()->subYears(29)->format('Y-m-d');
        $umur29_lk = DataPenduduk::where('tanggallahir', '>', $tigapuluh_tahun)->where('tanggallahir', '<=', $duapuluhsembilan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 28 Th
        $duapuluhdelapan_tahun = \Carbon\Carbon::today()->subYears(28)->format('Y-m-d');
        $umur28_lk = DataPenduduk::where('tanggallahir', '>', $duapuluhsembilan_tahun)->where('tanggallahir', '<=', $duapuluhdelapan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 27 Th
        $duapuluhtujuh_tahun = \Carbon\Carbon::today()->subYears(27)->format('Y-m-d');
        $umur27_lk = DataPenduduk::where('tanggallahir', '>', $duapuluhdelapan_tahun)->where('tanggallahir', '<=', $duapuluhtujuh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 26 Th
        $duapuluhenam_tahun = \Carbon\Carbon::today()->subYears(26)->format('Y-m-d');
        $umur26_lk = DataPenduduk::where('tanggallahir', '>', $duapuluhtujuh_tahun)->where('tanggallahir', '<=', $duapuluhenam_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 25 Th
        $duapuluhlima_tahun = \Carbon\Carbon::today()->subYears(25)->format('Y-m-d');
        $umur25_lk = DataPenduduk::where('tanggallahir', '>', $duapuluhenam_tahun)->where('tanggallahir', '<=', $duapuluhlima_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 24 Th
        $duapuluhempat_tahun = \Carbon\Carbon::today()->subYears(24)->format('Y-m-d');
        $umur24_lk = DataPenduduk::where('tanggallahir', '>', $duapuluhlima_tahun)->where('tanggallahir', '<=', $duapuluhempat_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 23 Th
        $duapuluhtiga_tahun = \Carbon\Carbon::today()->subYears(23)->format('Y-m-d');
        $umur23_lk = DataPenduduk::where('tanggallahir', '>', $duapuluhempat_tahun)->where('tanggallahir', '<=', $duapuluhtiga_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 22 Th
        $duapuluhdua_tahun = \Carbon\Carbon::today()->subYears(22)->format('Y-m-d');
        $umur22_lk = DataPenduduk::where('tanggallahir', '>', $duapuluhtiga_tahun)->where('tanggallahir', '<=', $duapuluhdua_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 21 Th
        $duapuluhsatu_tahun = \Carbon\Carbon::today()->subYears(21)->format('Y-m-d');
        $umur21_lk = DataPenduduk::where('tanggallahir', '>', $duapuluhdua_tahun)->where('tanggallahir', '<=', $duapuluhsatu_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 20 Th
        $duapuluh_tahun = \Carbon\Carbon::today()->subYears(20)->format('Y-m-d');
        $umur20_lk = DataPenduduk::where('tanggallahir', '>', $duapuluhsatu_tahun)->where('tanggallahir', '<=', $duapuluh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 19 Th
        $sembilanbelas_tahun = \Carbon\Carbon::today()->subYears(19)->format('Y-m-d');
        $umur19_lk = DataPenduduk::where('tanggallahir', '>', $duapuluh_tahun)->where('tanggallahir', '<=', $sembilanbelas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 18 Th
        $delapanbelas_tahun = \Carbon\Carbon::today()->subYears(18)->format('Y-m-d');
        $umur18_lk = DataPenduduk::where('tanggallahir', '>', $sembilanbelas_tahun)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 17 Th
        $tujuhbelas_tahun = \Carbon\Carbon::today()->subYears(17)->format('Y-m-d');
        $umur17_lk = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuhbelas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 16 Th
        $enambelas_tahun = \Carbon\Carbon::today()->subYears(16)->format('Y-m-d');
        $umur16_lk = DataPenduduk::where('tanggallahir', '>', $tujuhbelas_tahun)->where('tanggallahir', '<=', $enambelas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 15 Th
        $limabelas_tahun = \Carbon\Carbon::today()->subYears(15)->format('Y-m-d');
        $umur15_lk = DataPenduduk::where('tanggallahir', '>', $enambelas_tahun)->where('tanggallahir', '<=', $limabelas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 14 Th
        $empatbelas_tahun = \Carbon\Carbon::today()->subYears(14)->format('Y-m-d');
        $umur14_lk = DataPenduduk::where('tanggallahir', '>', $limabelas_tahun)->where('tanggallahir', '<=', $empatbelas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 13 Th
        $tigabelas_tahun = \Carbon\Carbon::today()->subYears(13)->format('Y-m-d');
        $umur13_lk = DataPenduduk::where('tanggallahir', '>', $empatbelas_tahun)->where('tanggallahir', '<=', $tigabelas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 12 Th
        $duabelas_tahun = \Carbon\Carbon::today()->subYears(12)->format('Y-m-d');
        $umur12_lk = DataPenduduk::where('tanggallahir', '>', $tigabelas_tahun)->where('tanggallahir', '<=', $duabelas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 11 Th
        $sebelas_tahun = \Carbon\Carbon::today()->subYears(11)->format('Y-m-d');
        $umur11_lk = DataPenduduk::where('tanggallahir', '>', $duabelas_tahun)->where('tanggallahir', '<=', $sebelas_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 10 Th
        $sepuluh_tahun = \Carbon\Carbon::today()->subYears(10)->format('Y-m-d');
        $umur10_lk = DataPenduduk::where('tanggallahir', '>', $sebelas_tahun)->where('tanggallahir', '<=', $sepuluh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 9 Th
        $sembilan_tahun = \Carbon\Carbon::today()->subYears(9)->format('Y-m-d');
        $umur9_lk = DataPenduduk::where('tanggallahir', '>', $sepuluh_tahun)->where('tanggallahir', '<=', $sembilan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 8 Th
        $delapan_tahun = \Carbon\Carbon::today()->subYears(8)->format('Y-m-d');
        $umur8_lk = DataPenduduk::where('tanggallahir', '>', $sembilan_tahun)->where('tanggallahir', '<=', $delapan_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 7 Th
        $tujuh_tahun = \Carbon\Carbon::today()->subYears(7)->format('Y-m-d');
        $umur7_lk = DataPenduduk::where('tanggallahir', '>', $delapan_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 6 Th
        $enam_tahun = \Carbon\Carbon::today()->subYears(6)->format('Y-m-d');
        $umur6_lk = DataPenduduk::where('tanggallahir', '>', $tujuh_tahun)->where('tanggallahir', '<=', $enam_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 5 Th
        $lima_tahun = \Carbon\Carbon::today()->subYears(5)->format('Y-m-d');
        $umur5_lk = DataPenduduk::where('tanggallahir', '>', $enam_tahun)->where('tanggallahir', '<=', $lima_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 4 Th
        $empat_tahun = \Carbon\Carbon::today()->subYears(4)->format('Y-m-d');
        $umur4_lk = DataPenduduk::where('tanggallahir', '>', $lima_tahun)->where('tanggallahir', '<=', $empat_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 3 Th
        $tiga_tahun = \Carbon\Carbon::today()->subYears(3)->format('Y-m-d');
        $umur3_lk = DataPenduduk::where('tanggallahir', '>', $empat_tahun)->where('tanggallahir', '<=', $tiga_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 2 Th
        $dua_tahun = \Carbon\Carbon::today()->subYears(2)->format('Y-m-d');
        $umur2_lk = DataPenduduk::where('tanggallahir', '>', $tiga_tahun)->where('tanggallahir', '<=', $dua_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 1 Th
        $satu_tahun = \Carbon\Carbon::today()->subYears(1)->format('Y-m-d');
        $umur1_lk = DataPenduduk::where('tanggallahir', '>', $dua_tahun)->where('tanggallahir', '<=', $satu_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 0 Th
        $bawah1th_tahun = \Carbon\Carbon::today()->subYears(0)->format('Y-m-d');
        $umur0_lk = DataPenduduk::where('tanggallahir', '>', $satu_tahun)->where('tanggallahir', '<=', $bawah1th_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        // Total
        $total_lk = DataPenduduk::where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Perempuan
        // Atas Umur 75 Th
        $umur75atas_pr = DataPenduduk::where('tanggallahir', '<=', $tujuhpuluhlimaatas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 75 Th
        $umur75_pr = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhlimaatas_tahun)->where('tanggallahir', '<=', $tujuhpuluhlima_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 74 Th
        $umur74_pr = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhlima_tahun)->where('tanggallahir', '<=', $tujuhpuluhempat_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 73 Th
        $umur73_pr = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhempat_tahun)->where('tanggallahir', '<=', $tujuhpuluhtiga_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 72 Th
        $umur72_pr = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhtiga_tahun)->where('tanggallahir', '<=', $tujuhpuluhdua_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 71 Th
        $umur71_pr = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhdua_tahun)->where('tanggallahir', '<=', $tujuhpuluhsatu_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 70 Th
        $umur70_pr = DataPenduduk::where('tanggallahir', '>', $tujuhpuluhsatu_tahun)->where('tanggallahir', '<=', $tujuhpuluh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 69 Th
        $umur69_pr = DataPenduduk::where('tanggallahir', '>', $tujuhpuluh_tahun)->where('tanggallahir', '<=', $enampuluhsembilan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 68 Th
        $umur68_pr = DataPenduduk::where('tanggallahir', '>', $enampuluhsembilan_tahun)->where('tanggallahir', '<=', $enampuluhdelapan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 67 Th
        $umur67_pr = DataPenduduk::where('tanggallahir', '>', $enampuluhdelapan_tahun)->where('tanggallahir', '<=', $enampuluhtujuh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 66 Th
        $umur66_pr = DataPenduduk::where('tanggallahir', '>', $enampuluhtujuh_tahun)->where('tanggallahir', '<=', $enampuluhenam_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 65 Th
        $umur65_pr = DataPenduduk::where('tanggallahir', '>', $enampuluhenam_tahun)->where('tanggallahir', '<=', $enampuluhlima_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 64 Th
        $umur64_pr = DataPenduduk::where('tanggallahir', '>', $enampuluhlima_tahun)->where('tanggallahir', '<=', $enampuluhempat_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 63 Th
        $umur63_pr = DataPenduduk::where('tanggallahir', '>', $enampuluhempat_tahun)->where('tanggallahir', '<=', $enampuluhtiga_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 62 Th
        $umur62_pr = DataPenduduk::where('tanggallahir', '>', $enampuluhtiga_tahun)->where('tanggallahir', '<=', $enampuluhdua_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 61 Th
        $umur61_pr = DataPenduduk::where('tanggallahir', '>', $enampuluhdua_tahun)->where('tanggallahir', '<=', $enampuluhsatu_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 60 Th
        $umur60_pr = DataPenduduk::where('tanggallahir', '>', $enampuluhsatu_tahun)->where('tanggallahir', '<=', $enampuluh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 59 Th
        $umur59_pr = DataPenduduk::where('tanggallahir', '>', $enampuluh_tahun)->where('tanggallahir', '<=', $limapuluhsembilan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 58 Th
        $umur58_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhsembilan_tahun)->where('tanggallahir', '<=', $limapuluhdelapan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 57 Th
        $umur57_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhdelapan_tahun)->where('tanggallahir', '<=', $limapuluhtujuh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 56 Th
        $umur56_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhtujuh_tahun)->where('tanggallahir', '<=', $limapuluhenam_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 55 Th
        $umur55_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhenam_tahun)->where('tanggallahir', '<=', $limapuluhlima_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 54 Th
        $umur54_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhlima_tahun)->where('tanggallahir', '<=', $limapuluhempat_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 53 Th
        $umur53_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhempat_tahun)->where('tanggallahir', '<=', $limapuluhtiga_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 52 Th
        $umur52_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhtiga_tahun)->where('tanggallahir', '<=', $limapuluhdua_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 51 Th
        $umur51_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhdua_tahun)->where('tanggallahir', '<=', $limapuluhsatu_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 50 Th
        $umur50_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhsatu_tahun)->where('tanggallahir', '<=', $limapuluh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 49 Th
        $umur49_pr = DataPenduduk::where('tanggallahir', '>', $limapuluh_tahun)->where('tanggallahir', '<=', $empatpuluhsembilan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 48 Th
        $umur48_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluhsembilan_tahun)->where('tanggallahir', '<=', $empatpuluhdelapan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 47 Th
        $umur47_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluhdelapan_tahun)->where('tanggallahir', '<=', $empatpuluhtujuh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 46 Th
        $umur46_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluhtujuh_tahun)->where('tanggallahir', '<=', $empatpuluhenam_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 45 Th
        $umur45_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluhenam_tahun)->where('tanggallahir', '<=', $empatpuluhlima_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 44 Th
        $umur44_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluhlima_tahun)->where('tanggallahir', '<=', $empatpuluhempat_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 43 Th
        $umur43_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluhempat_tahun)->where('tanggallahir', '<=', $empatpuluhtiga_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 42 Th
        $umur42_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluhtiga_tahun)->where('tanggallahir', '<=', $empatpuluhdua_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 41 Th
        $umur41_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluhdua_tahun)->where('tanggallahir', '<=', $empatpuluhsatu_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 40 Th
        $umur40_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluhsatu_tahun)->where('tanggallahir', '<=', $empatpuluh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 39 Th
        $umur39_pr = DataPenduduk::where('tanggallahir', '>', $empatpuluh_tahun)->where('tanggallahir', '<=', $tigapuluhsembilan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 38 Th
        $umur38_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluhsembilan_tahun)->where('tanggallahir', '<=', $tigapuluhdelapan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 37 Th
        $umur37_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluhdelapan_tahun)->where('tanggallahir', '<=', $tigapuluhtujuh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 36 Th
        $umur36_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluhtujuh_tahun)->where('tanggallahir', '<=', $tigapuluhenam_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 35 Th
        $umur35_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluhenam_tahun)->where('tanggallahir', '<=', $tigapuluhlima_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 34 Th
        $umur34_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluhlima_tahun)->where('tanggallahir', '<=', $tigapuluhempat_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 33 Th
        $umur33_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluhempat_tahun)->where('tanggallahir', '<=', $tigapuluhtiga_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 32 Th
        $umur32_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluhtiga_tahun)->where('tanggallahir', '<=', $tigapuluhdua_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 31 Th
        $umur31_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluhdua_tahun)->where('tanggallahir', '<=', $tigapuluhsatu_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 30 Th
        $umur30_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluhsatu_tahun)->where('tanggallahir', '<=', $tigapuluh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 29 Th
        $umur29_pr = DataPenduduk::where('tanggallahir', '>', $tigapuluh_tahun)->where('tanggallahir', '<=', $duapuluhsembilan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 28 Th
        $umur28_pr = DataPenduduk::where('tanggallahir', '>', $duapuluhsembilan_tahun)->where('tanggallahir', '<=', $duapuluhdelapan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 27 Th
        $umur27_pr = DataPenduduk::where('tanggallahir', '>', $duapuluhdelapan_tahun)->where('tanggallahir', '<=', $duapuluhtujuh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 26 Th
        $umur26_pr = DataPenduduk::where('tanggallahir', '>', $duapuluhtujuh_tahun)->where('tanggallahir', '<=', $duapuluhenam_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 25 Th
        $umur25_pr = DataPenduduk::where('tanggallahir', '>', $duapuluhenam_tahun)->where('tanggallahir', '<=', $duapuluhlima_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 24 Th
        $umur24_pr = DataPenduduk::where('tanggallahir', '>', $duapuluhlima_tahun)->where('tanggallahir', '<=', $duapuluhempat_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 23 Th
        $umur23_pr = DataPenduduk::where('tanggallahir', '>', $duapuluhempat_tahun)->where('tanggallahir', '<=', $duapuluhtiga_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 22 Th
        $umur22_pr = DataPenduduk::where('tanggallahir', '>', $duapuluhtiga_tahun)->where('tanggallahir', '<=', $duapuluhdua_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 21 Th
        $umur21_pr = DataPenduduk::where('tanggallahir', '>', $duapuluhdua_tahun)->where('tanggallahir', '<=', $duapuluhsatu_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 20 Th
        $umur20_pr = DataPenduduk::where('tanggallahir', '>', $duapuluhsatu_tahun)->where('tanggallahir', '<=', $duapuluh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 19 Th
        $umur19_pr = DataPenduduk::where('tanggallahir', '>', $duapuluh_tahun)->where('tanggallahir', '<=', $sembilanbelas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 18 Th
        $umur18_pr = DataPenduduk::where('tanggallahir', '>', $sembilanbelas_tahun)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 17 Th
        $umur17_pr = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuhbelas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 16 Th
        $umur16_pr = DataPenduduk::where('tanggallahir', '>', $tujuhbelas_tahun)->where('tanggallahir', '<=', $enambelas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 15 Th
        $umur15_pr = DataPenduduk::where('tanggallahir', '>', $enambelas_tahun)->where('tanggallahir', '<=', $limabelas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 14 Th
        $umur14_pr = DataPenduduk::where('tanggallahir', '>', $limabelas_tahun)->where('tanggallahir', '<=', $empatbelas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 13 Th
        $umur13_pr = DataPenduduk::where('tanggallahir', '>', $empatbelas_tahun)->where('tanggallahir', '<=', $tigabelas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 12 Th
        $umur12_pr = DataPenduduk::where('tanggallahir', '>', $tigabelas_tahun)->where('tanggallahir', '<=', $duabelas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 11 Th
        $umur11_pr = DataPenduduk::where('tanggallahir', '>', $duabelas_tahun)->where('tanggallahir', '<=', $sebelas_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 10 Th
        $umur10_pr = DataPenduduk::where('tanggallahir', '>', $sebelas_tahun)->where('tanggallahir', '<=', $sepuluh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 9 Th
        $umur9_pr = DataPenduduk::where('tanggallahir', '>', $sepuluh_tahun)->where('tanggallahir', '<=', $sembilan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 8 Th
        $umur8_pr = DataPenduduk::where('tanggallahir', '>', $sembilan_tahun)->where('tanggallahir', '<=', $delapan_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 7 Th
        $umur7_pr = DataPenduduk::where('tanggallahir', '>', $delapan_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 6 Th
        $umur6_pr = DataPenduduk::where('tanggallahir', '>', $tujuh_tahun)->where('tanggallahir', '<=', $enam_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 5 Th
        $umur5_pr = DataPenduduk::where('tanggallahir', '>', $enam_tahun)->where('tanggallahir', '<=', $lima_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 4 Th
        $umur4_pr = DataPenduduk::where('tanggallahir', '>', $lima_tahun)->where('tanggallahir', '<=', $empat_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 3 Th
        $umur3_pr = DataPenduduk::where('tanggallahir', '>', $empat_tahun)->where('tanggallahir', '<=', $tiga_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 2 Th
        $umur2_pr = DataPenduduk::where('tanggallahir', '>', $tiga_tahun)->where('tanggallahir', '<=', $dua_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 1 Th
        $umur1_pr = DataPenduduk::where('tanggallahir', '>', $dua_tahun)->where('tanggallahir', '<=', $satu_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Umur 0 Th
        $umur0_pr = DataPenduduk::where('tanggallahir', '>', $satu_tahun)->where('tanggallahir', '<=', $bawah1th_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // Total
        $total_pr = DataPenduduk::where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        // -------------------------------------------------------------------------------------------------------------------
        // Tenaga Kerja
        // Laki Laki
        // Penduduk Usia 56 Tahun ke atas
        $penduduk56tahunatas_lk = DataPenduduk::where('tanggallahir', '<=', $limapuluhenam_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 18 - 56 tahun yang belum/tidak bekerja
        $penduduktidakbekerja_lk = DataPenduduk::where('tanggallahir', '>', $penduduk56tahunatas_lk)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('jenispekerjaan_id', '1')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 18 - 56 tahun yang bekerja
        $pendudukbekerja_lk = DataPenduduk::where('tanggallahir', '>', $penduduk56tahunatas_lk)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('jenispekerjaan_id', '>=', '5')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 18 - 56 tahun (a + b)
        $totalpendudukbekerja_lk = $pendudukbekerja_lk + $penduduktidakbekerja_lk;

        // Penduduk usia 7 - 18 tahun yang masih sekolah (SD)
        $penduduksd_lk = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '4')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        $pendudukslba_lk = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '14')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 7 - 18 tahun yang masih sekolah (SMP)
        $penduduksmp_lk = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '6')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        $pendudukslbb_lk = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '15')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 7 - 18 tahun yang masih sekolah (SMA)
        $penduduksma_lk = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '7')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        $pendudukslbc_lk = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '16')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Total Penduduk usia 7 - 18 tahun yang masih sekolah
        $totalpenduduksekolah_lk = $penduduksd_lk + $penduduksmp_lk + $penduduksma_lk + $pendudukslba_lk + $pendudukslbc_lk + $pendudukslbc_lk;

        // Penduduk usia 0 - 6 tahun
        $pendudukusia0tahun_lk = DataPenduduk::where('tanggallahir', '>', $enam_tahun)->where('tanggallahir', '<=', $bawah1th_tahun)->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Tenaga Kerja
        // Perempuan
        // Penduduk Usia 56 Tahun ke atas
        $penduduk56tahunatas_pr = DataPenduduk::where('tanggallahir', '<=', $limapuluhenam_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 18 - 56 tahun yang belum/tidak bekerja
        $penduduktidakbekerja_pr = DataPenduduk::where('tanggallahir', '>', $penduduk56tahunatas_pr)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('jenispekerjaan_id', '1')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 18 - 56 tahun yang bekerja
        $pendudukbekerja_pr = DataPenduduk::where('tanggallahir', '>', $penduduk56tahunatas_pr)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('jenispekerjaan_id', '>=', '5')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 18 - 56 tahun (a + b)
        $totalpendudukbekerja_pr = $pendudukbekerja_pr + $penduduktidakbekerja_pr;

        // Penduduk usia 7 - 18 tahun yang masih sekolah (SD)
        $penduduksd_pr = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '4')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        $pendudukslba_pr = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '14')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 7 - 18 tahun yang masih sekolah (SMP)
        $penduduksmp_pr = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '6')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        $pendudukslbb_pr = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '15')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Penduduk usia 7 - 18 tahun yang masih sekolah (SMA)
        $penduduksma_pr = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '7')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        $pendudukslbc_pr = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '16')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Total Penduduk usia 7 - 18 tahun yang masih sekolah
        $totalpenduduksekolah_pr = $penduduksd_pr + $penduduksmp_pr + $penduduksma_pr + $pendudukslba_pr + $pendudukslbc_pr + $pendudukslbc_pr;

        // Penduduk usia 0 - 6 tahun
        $pendudukusia0tahun_pr = DataPenduduk::where('tanggallahir', '>', $enam_tahun)->where('tanggallahir', '<=', $bawah1th_tahun)->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Kualitas Angkatan Kerja
        // Laki-Laki
        // Penduduk usia 18 - 56 tahun yang buta aksara dan huruf/angka latin
        $kualitas_pdk_ba_dewasa_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhenam_tahun)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('pendidikan_sedang_id', '29')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 3-6 tahun yang belum masuk play group/TK
        $kualitas_pdk_btk_anak_lk = DataPenduduk::where('tanggallahir', '>', $enam_tahun)->where('tanggallahir', '<=', $tiga_tahun)->where('pendidikan_sedang_id', '1')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 3-6 tahun yang sedang play group/TK
        $kualitas_pdk_mtk_anak_lk = DataPenduduk::where('tanggallahir', '>', $enam_tahun)->where('tanggallahir', '<=', $tiga_tahun)->where('pendidikan_sedang_id', '2')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 7-18 tahun yang tidak pernah sekolah
        $kualitas_pdk_remaja_lk = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '3')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 7-18 tahun yang sedang sekolah
        //
        // Usia 18-56 tahun tidak pernah sekolah
        $kualitas_pdk_tps_dewasa_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhenam_tahun)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('pendidikan_sedang_id', '3')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 18-56 tahun tidak tamat SD
        $kualitas_pdk_ttsd_dewasa_lk = DataPenduduk::where('tanggallahir', '>', $limapuluhenam_tahun)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('pendidikan_sedang_id', '5')->where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();

        // Kualitas Angkatan Kerja
        // Perempuan
        // Penduduk usia 18 - 56 tahun yang buta aksara dan huruf/angka latin
        $kualitas_pdk_ba_dewasa_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhenam_tahun)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('pendidikan_sedang_id', '29')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 3-6 tahun yang belum masuk play group/TK
        $kualitas_pdk_btk_anak_pr = DataPenduduk::where('tanggallahir', '>', $enam_tahun)->where('tanggallahir', '<=', $tiga_tahun)->where('pendidikan_sedang_id', '1')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 3-6 tahun yang sedang play group/TK
        $kualitas_pdk_mtk_anak_pr = DataPenduduk::where('tanggallahir', '>', $enam_tahun)->where('tanggallahir', '<=', $tiga_tahun)->where('pendidikan_sedang_id', '2')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 7-18 tahun yang tidak pernah sekolah
        $kualitas_pdk_remaja_pr = DataPenduduk::where('tanggallahir', '>', $delapanbelas_tahun)->where('tanggallahir', '<=', $tujuh_tahun)->where('pendidikan_sedang_id', '3')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 7-18 tahun yang sedang sekolah
        //
        // Usia 18-56 tahun tidak pernah sekolah
        $kualitas_pdk_tps_dewasa_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhenam_tahun)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('pendidikan_sedang_id', '3')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        // Usia 18-56 tahun tidak tamat SD
        $kualitas_pdk_ttsd_dewasa_pr = DataPenduduk::where('tanggallahir', '>', $limapuluhenam_tahun)->where('tanggallahir', '<=', $delapanbelas_tahun)->where('pendidikan_sedang_id', '5')->where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();

        $agama_id = Agama::ambilSemua();
        $jumlahaparaturdesa = AparaturDesa::where('desa_id', auth()->user()->desa_id)->get();
        $kades = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Kepala Desa/Lurah')->get();
        $sekdes = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Sekretaris Desa')->get();
        $seksipem = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Kepala Seksi Pemerintahan')->get();
        $seksikesra = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Kepala Seksi Kesejahteraan Rakyat')->get();
        $seksipel = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Kepala Seksi Pelayanan')->get();
        $seksitu = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Kepala Urusan Tata Usaha dan Umum')->get();
        $seksikeu = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Kepala Urusan Keuangan')->get();
        $seksiren = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Kepala Urusan Perencanaan')->get();
        $bpdketua = BPD::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Ketua')->get();
        $bpdwaket = BPD::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Wakil Ketua')->get();
        $bpdsekr = BPD::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Sekretaris')->get();
        $bpdanggota = BPD::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Anggota')->get();
        $jumlahagtbpd = BPD::where('desa_id', auth()->user()->desa_id)->count();
        $jumlahstafdesa = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->where('jabatan', 'Staf')->count();
        $jumlahperangkatdesa = PerangkatDesa::where('desa_id', auth()->user()->desa_id)->count();
        $pendidikanformal = PendidikanFormal::where('desa_id', auth()->user()->desa_id)->get();
        $pendidikankeagamaan1 = PendidikanKeagamaan::where('desa_id', auth()->user()->desa_id)->where('kategoripendidikan', 'Sekolah Islam')->get();
        $pendidikankeagamaan2 = PendidikanKeagamaan::where('desa_id', auth()->user()->desa_id)->where('kategoripendidikan', 'Sekolah Katholik')->get();
        $pendidikankeagamaan3 = PendidikanKeagamaan::where('desa_id', auth()->user()->desa_id)->where('kategoripendidikan', 'Sekolah Budha')->get();
        $pendidikankeagamaan4 = PendidikanKeagamaan::where('desa_id', auth()->user()->desa_id)->where('kategoripendidikan', 'Sekolah Protestan')->get();
        $pendidikankeagamaan5 = PendidikanKeagamaan::where('desa_id', auth()->user()->desa_id)->where('kategoripendidikan', 'Sekolah Hindu')->get();
        $pendidikankeagamaan6 = PendidikanKeagamaan::where('desa_id', auth()->user()->desa_id)->where('kategoripendidikan', 'Sekolah Konghucu')->get();
        $pendidikannonformal = PendidikanNonFormal::where('desa_id', auth()->user()->desa_id)->get();
        $lembagakemasyarakatan = LembagaKemasyarakatan::where('desa_id', auth()->user()->desa_id)->get();
        $tingkatpartisipasipolitik = TingkatPartisipasiPolitik::where('desa_id', auth()->user()->desa_id)->get();
        $profildesa = Desa::where('id', auth()->user()->desa_id)->get();
        $lembagaekonomi = LembagaEkonomi::where('desa_id', auth()->user()->desa_id)->get();
        $jasalembagakeuangan = JasaLembagaKeuangan::where('desa_id', auth()->user()->desa_id)->get();
        $industrikecil = IndustriKecil::where('desa_id', auth()->user()->desa_id)->get();
        $usahajasapengangkutan1 = UsahaJasaPengangkutan::where('desa_id', auth()->user()->desa_id)->where('kategorijasapengangkutan', 'Angkutan Darat')->get();
        $usahajasapengangkutan2 = UsahaJasaPengangkutan::where('desa_id', auth()->user()->desa_id)->where('kategorijasapengangkutan', 'Angkutan Sungai')->get();
        $usahajasapengangkutan3 = UsahaJasaPengangkutan::where('desa_id', auth()->user()->desa_id)->where('kategorijasapengangkutan', 'Angkutan Laut')->get();
        $usahajasapengangkutan4 = UsahaJasaPengangkutan::where('desa_id', auth()->user()->desa_id)->where('kategorijasapengangkutan', 'Angkutan Udara')->get();
        $usahajasapengangkutan5 = UsahaJasaPengangkutan::where('desa_id', auth()->user()->desa_id)->where('kategorijasapengangkutan', 'Ekspedisi dan Pengiriman')->get();
        $usahajasaperdagangan = UsahaJasaPerdagangan::where('desa_id', auth()->user()->desa_id)->get();
        $usahajasahiburan = UsahaJasaHiburan::where('desa_id', auth()->user()->desa_id)->get();
        $usahajasagas = UsahaJasaGas::where('desa_id', auth()->user()->desa_id)->get();
        $usahajasaketerampilan = UsahaJasaKeterampilan::where('desa_id', auth()->user()->desa_id)->get();
        $usahajasahukum = UsahaJasaHukum::where('desa_id', auth()->user()->desa_id)->get();
        $usahajasapenginapan = UsahaJasaPenginapan::where('desa_id', auth()->user()->desa_id)->get();
        $kadus = Alamat::where('desa_id', auth()->user()->desa_id)->get();
        $jumlahdusun = Alamat::where('desa_id', auth()->user()->desa_id)->count();
        $jml_pdk_lk1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '1')->count();
        $jml_pdk_lk2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '2')->count();
        $jml_pdk_lk3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '3')->count();
        $jml_pdk_lk4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '4')->count();
        $jml_pdk_lk5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '5')->count();
        $jml_pdk_lk6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '6')->count();
        $jml_pdk_lk7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '7')->count();
        $jml_pdk_lk8 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '8')->count();
        $jml_pdk_lk9 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '9')->count();
        $jml_pdk_lk10 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '10')->count();
        $jml_pdk_lk11 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '11')->count();
        $jml_pdk_lk12 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '12')->count();
        $jml_pdk_lk13 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '13')->count();
        $jml_pdk_lk14 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '14')->count();
        $jml_pdk_lk15 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '15')->count();
        $jml_pdk_lk16 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '16')->count();
        $jml_pdk_lk17 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '17')->count();
        $jml_pdk_lk18 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '18')->count();
        $jml_pdk_lk19 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '19')->count();
        $jml_pdk_lk20 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '20')->count();
        $jml_pdk_lk21 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '21')->count();
        $jml_pdk_lk22 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '22')->count();
        $jml_pdk_lk23 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '23')->count();
        $jml_pdk_lk24 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '24')->count();
        $jml_pdk_lk25 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '25')->count();
        $jml_pdk_lk26 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '26')->count();
        $jml_pdk_lk27 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '27')->count();
        $jml_pdk_lk28 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '28')->count();
        $jml_pdk_lk29 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '29')->count();
        $jml_pdk_lk30 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('pendidikan_sedang_id', '30')->count();

        $jml_pdk_pr1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '1')->count();
        $jml_pdk_pr2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '2')->count();
        $jml_pdk_pr3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '3')->count();
        $jml_pdk_pr4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '4')->count();
        $jml_pdk_pr5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '5')->count();
        $jml_pdk_pr6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '6')->count();
        $jml_pdk_pr7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '7')->count();
        $jml_pdk_pr8 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '8')->count();
        $jml_pdk_pr9 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '9')->count();
        $jml_pdk_pr10 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '10')->count();
        $jml_pdk_pr11 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '11')->count();
        $jml_pdk_pr12 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '12')->count();
        $jml_pdk_pr13 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '13')->count();
        $jml_pdk_pr14 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '14')->count();
        $jml_pdk_pr15 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '15')->count();
        $jml_pdk_pr16 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '16')->count();
        $jml_pdk_pr17 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '17')->count();
        $jml_pdk_pr18 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '18')->count();
        $jml_pdk_pr19 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '19')->count();
        $jml_pdk_pr20 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '20')->count();
        $jml_pdk_pr21 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '21')->count();
        $jml_pdk_pr22 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '22')->count();
        $jml_pdk_pr23 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '23')->count();
        $jml_pdk_pr24 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '24')->count();
        $jml_pdk_pr25 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '25')->count();
        $jml_pdk_pr26 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '26')->count();
        $jml_pdk_pr27 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '27')->count();
        $jml_pdk_pr28 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '28')->count();
        $jml_pdk_pr29 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '29')->count();
        $jml_pdk_pr30 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('pendidikan_sedang_id', '30')->count();

        $jml_etn_lk1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '1')->count();
        $jml_etn_lk2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '2')->count();
        $jml_etn_lk3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '3')->count();
        $jml_etn_lk4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '4')->count();
        $jml_etn_lk5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '5')->count();
        $jml_etn_lk6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '6')->count();
        $jml_etn_lk7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '7')->count();
        $jml_etn_lk8 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '8')->count();
        $jml_etn_lk9 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '9')->count();
        $jml_etn_lk10 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '10')->count();
        $jml_etn_lk11 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '11')->count();
        $jml_etn_lk12 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '12')->count();
        $jml_etn_lk13 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '13')->count();
        $jml_etn_lk14 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '14')->count();
        $jml_etn_lk15 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('etnis_id', '15')->count();

        $jml_etn_pr1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '1')->count();
        $jml_etn_pr2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '2')->count();
        $jml_etn_pr3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '3')->count();
        $jml_etn_pr4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '4')->count();
        $jml_etn_pr5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '5')->count();
        $jml_etn_pr6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '6')->count();
        $jml_etn_pr7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '7')->count();
        $jml_etn_pr8 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '8')->count();
        $jml_etn_pr9 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '9')->count();
        $jml_etn_pr10 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '10')->count();
        $jml_etn_pr11 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '11')->count();
        $jml_etn_pr12 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '12')->count();
        $jml_etn_pr13 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '13')->count();
        $jml_etn_pr14 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '14')->count();
        $jml_etn_pr15 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('etnis_id', '15')->count();

        $jml_krj_pr1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '1')->count();
        $jml_krj_pr2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '2')->count();
        $jml_krj_pr3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '3')->count();
        $jml_krj_pr4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '4')->count();
        $jml_krj_pr5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '5')->count();
        $jml_krj_pr6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '6')->count();
        $jml_krj_pr7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '7')->count();
        $jml_krj_pr8 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '8')->count();
        $jml_krj_pr9 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '9')->count();
        $jml_krj_pr10 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '10')->count();
        $jml_krj_pr11 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '11')->count();
        $jml_krj_pr12 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '12')->count();
        $jml_krj_pr13 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '13')->count();
        $jml_krj_pr14 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '14')->count();
        $jml_krj_pr15 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '15')->count();
        $jml_krj_pr16 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '16')->count();
        $jml_krj_pr17 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '17')->count();
        $jml_krj_pr18 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '18')->count();
        $jml_krj_pr19 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '19')->count();
        $jml_krj_pr20 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '20')->count();
        $jml_krj_pr21 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '21')->count();
        $jml_krj_pr22 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '22')->count();
        $jml_krj_pr23 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '23')->count();
        $jml_krj_pr24 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '24')->count();
        $jml_krj_pr25 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '25')->count();
        $jml_krj_pr26 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '26')->count();
        $jml_krj_pr27 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '27')->count();
        $jml_krj_pr28 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '28')->count();
        $jml_krj_pr29 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '29')->count();
        $jml_krj_pr30 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '30')->count();
        $jml_krj_pr31 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '31')->count();
        $jml_krj_pr32 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '32')->count();
        $jml_krj_pr33 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '33')->count();
        $jml_krj_pr34 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '34')->count();
        $jml_krj_pr35 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '35')->count();
        $jml_krj_pr36 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '36')->count();
        $jml_krj_pr37 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '37')->count();
        $jml_krj_pr38 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '38')->count();
        $jml_krj_pr39 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '39')->count();
        $jml_krj_pr40 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '40')->count();
        $jml_krj_pr41 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '41')->count();
        $jml_krj_pr42 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '42')->count();
        $jml_krj_pr43 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '43')->count();
        $jml_krj_pr44 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '44')->count();
        $jml_krj_pr45 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '45')->count();
        $jml_krj_pr46 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '46')->count();
        $jml_krj_pr47 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '47')->count();
        $jml_krj_pr48 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '48')->count();
        $jml_krj_pr49 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '49')->count();
        $jml_krj_pr50 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '50')->count();
        $jml_krj_pr51 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '51')->count();
        $jml_krj_pr52 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '52')->count();
        $jml_krj_pr53 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '53')->count();
        $jml_krj_pr54 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '54')->count();
        $jml_krj_pr55 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '55')->count();
        $jml_krj_pr56 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '56')->count();
        $jml_krj_pr57 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '57')->count();
        $jml_krj_pr58 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '58')->count();
        $jml_krj_pr59 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '59')->count();
        $jml_krj_pr60 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '60')->count();
        $jml_krj_pr61 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '61')->count();
        $jml_krj_pr62 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '62')->count();
        $jml_krj_pr63 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '63')->count();
        $jml_krj_pr64 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '64')->count();
        $jml_krj_pr65 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '65')->count();
        $jml_krj_pr66 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '66')->count();
        $jml_krj_pr67 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '67')->count();
        $jml_krj_pr68 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '68')->count();
        $jml_krj_pr69 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '69')->count();
        $jml_krj_pr70 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '70')->count();
        $jml_krj_pr71 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '71')->count();
        $jml_krj_pr72 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '72')->count();
        $jml_krj_pr73 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '73')->count();
        $jml_krj_pr74 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '74')->count();
        $jml_krj_pr75 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '75')->count();
        $jml_krj_pr76 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '76')->count();
        $jml_krj_pr77 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '77')->count();
        $jml_krj_pr78 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '78')->count();
        $jml_krj_pr79 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '79')->count();
        $jml_krj_pr80 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '80')->count();
        $jml_krj_pr81 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '81')->count();
        $jml_krj_pr82 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '82')->count();
        $jml_krj_pr83 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '83')->count();
        $jml_krj_pr84 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '84')->count();
        $jml_krj_pr85 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '85')->count();
        $jml_krj_pr86 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '86')->count();
        $jml_krj_pr87 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '87')->count();
        $jml_krj_pr88 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '88')->count();
        $jml_krj_pr89 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('jenispekerjaan_id', '89')->count();

        $jml_krj_lk1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '1')->count();
        $jml_krj_lk2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '2')->count();
        $jml_krj_lk3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '3')->count();
        $jml_krj_lk4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '4')->count();
        $jml_krj_lk5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '5')->count();
        $jml_krj_lk6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '6')->count();
        $jml_krj_lk7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '7')->count();
        $jml_krj_lk8 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '8')->count();
        $jml_krj_lk9 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '9')->count();
        $jml_krj_lk10 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '10')->count();
        $jml_krj_lk11 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '11')->count();
        $jml_krj_lk12 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '12')->count();
        $jml_krj_lk13 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '13')->count();
        $jml_krj_lk14 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '14')->count();
        $jml_krj_lk15 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '15')->count();
        $jml_krj_lk16 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '16')->count();
        $jml_krj_lk17 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '17')->count();
        $jml_krj_lk18 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '18')->count();
        $jml_krj_lk19 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '19')->count();
        $jml_krj_lk20 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '20')->count();
        $jml_krj_lk21 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '21')->count();
        $jml_krj_lk22 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '22')->count();
        $jml_krj_lk23 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '23')->count();
        $jml_krj_lk24 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '24')->count();
        $jml_krj_lk25 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '25')->count();
        $jml_krj_lk26 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '26')->count();
        $jml_krj_lk27 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '27')->count();
        $jml_krj_lk28 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '28')->count();
        $jml_krj_lk29 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '29')->count();
        $jml_krj_lk30 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '30')->count();
        $jml_krj_lk31 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '31')->count();
        $jml_krj_lk32 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '32')->count();
        $jml_krj_lk33 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '33')->count();
        $jml_krj_lk34 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '34')->count();
        $jml_krj_lk35 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '35')->count();
        $jml_krj_lk36 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '36')->count();
        $jml_krj_lk37 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '37')->count();
        $jml_krj_lk38 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '38')->count();
        $jml_krj_lk39 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '39')->count();
        $jml_krj_lk40 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '40')->count();
        $jml_krj_lk41 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '41')->count();
        $jml_krj_lk42 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '42')->count();
        $jml_krj_lk43 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '43')->count();
        $jml_krj_lk44 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '44')->count();
        $jml_krj_lk45 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '45')->count();
        $jml_krj_lk46 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '46')->count();
        $jml_krj_lk47 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '47')->count();
        $jml_krj_lk48 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '48')->count();
        $jml_krj_lk49 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '49')->count();
        $jml_krj_lk50 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '50')->count();
        $jml_krj_lk51 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '51')->count();
        $jml_krj_lk52 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '52')->count();
        $jml_krj_lk53 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '53')->count();
        $jml_krj_lk54 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '54')->count();
        $jml_krj_lk55 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '55')->count();
        $jml_krj_lk56 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '56')->count();
        $jml_krj_lk57 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '57')->count();
        $jml_krj_lk58 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '58')->count();
        $jml_krj_lk59 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '59')->count();
        $jml_krj_lk60 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '60')->count();
        $jml_krj_lk61 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '61')->count();
        $jml_krj_lk62 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '62')->count();
        $jml_krj_lk63 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '63')->count();
        $jml_krj_lk64 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '64')->count();
        $jml_krj_lk65 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '65')->count();
        $jml_krj_lk66 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '66')->count();
        $jml_krj_lk67 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '67')->count();
        $jml_krj_lk68 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '68')->count();
        $jml_krj_lk69 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '69')->count();
        $jml_krj_lk70 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '70')->count();
        $jml_krj_lk71 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '71')->count();
        $jml_krj_lk72 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '72')->count();
        $jml_krj_lk73 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '73')->count();
        $jml_krj_lk74 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '74')->count();
        $jml_krj_lk75 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '75')->count();
        $jml_krj_lk76 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '76')->count();
        $jml_krj_lk77 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '77')->count();
        $jml_krj_lk78 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '78')->count();
        $jml_krj_lk79 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '79')->count();
        $jml_krj_lk80 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '80')->count();
        $jml_krj_lk81 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '81')->count();
        $jml_krj_lk82 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '82')->count();
        $jml_krj_lk83 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '83')->count();
        $jml_krj_lk84 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '84')->count();
        $jml_krj_lk85 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '85')->count();
        $jml_krj_lk86 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '86')->count();
        $jml_krj_lk87 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '87')->count();
        $jml_krj_lk88 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '88')->count();
        $jml_krj_lk89 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('jenispekerjaan_id', '89')->count();

        $jml_agm_lk1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '1')->count();
        $jml_agm_lk2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '2')->count();
        $jml_agm_lk3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '3')->count();
        $jml_agm_lk4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '4')->count();
        $jml_agm_lk5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '5')->count();
        $jml_agm_lk6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '6')->count();
        $jml_agm_lk7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('agama_id', '7')->count();

        $jml_agm_pr1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '1')->count();
        $jml_agm_pr2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '2')->count();
        $jml_agm_pr3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '3')->count();
        $jml_agm_pr4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '4')->count();
        $jml_agm_pr5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '5')->count();
        $jml_agm_pr6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '6')->count();
        $jml_agm_pr7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('agama_id', '7')->count();

        $jml_wrg_lk1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('kewarganegaraan_id', '1')->count();
        $jml_wrg_pr1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('kewarganegaraan_id', '1')->count();
        $jml_wrg_lk2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('kewarganegaraan_id', '2')->count();
        $jml_wrg_pr2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('kewarganegaraan_id', '2')->count();

        $jml_pcct_lk1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('penyandangcacat_id', '1')->count();
        $jml_pcct_lk2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('penyandangcacat_id', '2')->count();
        $jml_pcct_lk3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('penyandangcacat_id', '3')->count();
        $jml_pcct_lk4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('penyandangcacat_id', '4')->count();
        $jml_pcct_lk5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('penyandangcacat_id', '5')->count();
        $jml_pcct_lk6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('penyandangcacat_id', '6')->count();
        $jml_pcct_lk7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '1')->where('penyandangcacat_id', '7')->count();

        $jml_pcct_pr1 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('penyandangcacat_id', '1')->count();
        $jml_pcct_pr2 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('penyandangcacat_id', '2')->count();
        $jml_pcct_pr3 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('penyandangcacat_id', '3')->count();
        $jml_pcct_pr4 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('penyandangcacat_id', '4')->count();
        $jml_pcct_pr5 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('penyandangcacat_id', '5')->count();
        $jml_pcct_pr6 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('penyandangcacat_id', '6')->count();
        $jml_pcct_pr7 = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', '2')->where('penyandangcacat_id', '7')->count();

        return view('operatordesa.profil-desa.index', compact(
            'profilkecamatan',
            'lembagaekonomi',
            'jasalembagakeuangan',
            'industrikecil',
            'usahajasapengangkutan1',
            'usahajasapengangkutan2',
            'usahajasapengangkutan3',
            'usahajasapengangkutan4',
            'usahajasapengangkutan5',
            'usahajasaperdagangan',
            'usahajasahiburan',
            'usahajasagas',
            'usahajasaketerampilan',
            'usahajasahukum',
            'usahajasapenginapan',
            'profildesa',
            'potensiumum',
            'jumlahaparaturdesa',
            'datatanah',
            'iklimjeniskesuburantanah',
            'topografiletakorbitasi',
            'prasaranasaranakebersihan',
            'prasaranahiburanwisata',
            'prasaranaenergipenerangan',
            'prasaranasaranapendidikan',
            'prasaranaperibadatan',
            'prasaranaolahraga',
            'prasaranakesehatan',
            'saranakesehatan',
            'telepon',
            'radiotv',
            'koran',
            'potensiwisata',
            'ruangpublik',
            'tanamanpangan',
            'komoditasbuah',
            'tanamanapotik',
            'hasilhutan',
            'kondisihutan',
            'dampakolahhutan',
            'jenispopulasiternak',
            'produksiternak',
            'pemilikusahaternak',
            'alatproduksilaut',
            'alatproduksitawar',
            'jenisikan',
            'bahangalian',
            'potensiairsda',
            'sumberairbersih',
            'hasilperkebunan',
            'kebisingan',
            'kualitasudara',
            'kehutanan',
            'airpanas',
            'kantorpos',
            'tingkatpartisipasipolitik',
            'lembagakemasyarakatan',
            'prasaranadarat',
            'saranadarat',
            'prasaranalaut',
            'saranalaut',
            'prasaranaudara',
            'prasaranalkdk',
            'prasaranapemerintahan',
            'prasaranabpddusun',
            'prasaranairigasi',
            'prasaranaairbersih',
            'lembagakeamanan',
            'lembagaadat',
            'jumlahlakilaki',
            'jumlahperempuan',
            'jumlahpenduduk',
            'jumlahkk',
            'pendidikan',
            'kewarganegaraan_id',
            'agama_id',
            'jenispekerjaan_id',
            'kades',
            'sekdes',
            'seksipem',
            'seksikesra',
            'seksipel',
            'seksitu',
            'seksikeu',
            'seksiren',
            'bpdketua',
            'bpdwaket',
            'bpdsekr',
            'bpdanggota',
            'jumlahagtbpd',
            'jumlahstafdesa',
            'jumlahperangkatdesa',
            'pendidikanformal',
            'pendidikankeagamaan1',
            'pendidikankeagamaan2',
            'pendidikankeagamaan3',
            'pendidikankeagamaan4',
            'pendidikankeagamaan5',
            'pendidikankeagamaan6',
            'pendidikannonformal',
            'pendidikansedang',
            'penyandangcacat',
            'etnis',
            'jml_pcct_lk1',
            'jml_pcct_lk2',
            'jml_pcct_lk3',
            'jml_pcct_lk4',
            'jml_pcct_lk5',
            'jml_pcct_lk6',
            'jml_pcct_lk7',
            'jml_pcct_pr1',
            'jml_pcct_pr2',
            'jml_pcct_pr3',
            'jml_pcct_pr4',
            'jml_pcct_pr5',
            'jml_pcct_pr6',
            'jml_pcct_pr7',

            'jml_etn_lk1',
            'jml_etn_lk2',
            'jml_etn_lk3',
            'jml_etn_lk4',
            'jml_etn_lk5',
            'jml_etn_lk6',
            'jml_etn_lk7',
            'jml_etn_lk8',
            'jml_etn_lk9',
            'jml_etn_lk10',
            'jml_etn_lk11',
            'jml_etn_lk12',
            'jml_etn_lk13',
            'jml_etn_lk14',
            'jml_etn_lk15',

            'jml_etn_pr1',
            'jml_etn_pr2',
            'jml_etn_pr3',
            'jml_etn_pr4',
            'jml_etn_pr5',
            'jml_etn_pr6',
            'jml_etn_pr7',
            'jml_etn_pr8',
            'jml_etn_pr9',
            'jml_etn_pr10',
            'jml_etn_pr11',
            'jml_etn_pr12',
            'jml_etn_pr13',
            'jml_etn_pr14',
            'jml_etn_pr15',

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

            'jml_wrg_lk1',
            'jml_wrg_pr1',
            'jml_wrg_lk2',
            'jml_wrg_pr2',

            'umur75_lk',
            'umur75atas_lk',
            'umur74_lk',
            'umur73_lk',
            'umur72_lk',
            'umur71_lk',
            'umur70_lk',
            'umur69_lk',
            'umur68_lk',
            'umur67_lk',
            'umur66_lk',
            'umur65_lk',
            'umur64_lk',
            'umur63_lk',
            'umur62_lk',
            'umur61_lk',
            'umur60_lk',
            'umur59_lk',
            'umur58_lk',
            'umur57_lk',
            'umur56_lk',
            'umur55_lk',
            'umur54_lk',
            'umur53_lk',
            'umur52_lk',
            'umur51_lk',
            'umur50_lk',
            'umur49_lk',
            'umur48_lk',
            'umur47_lk',
            'umur46_lk',
            'umur45_lk',
            'umur44_lk',
            'umur43_lk',
            'umur42_lk',
            'umur41_lk',
            'umur40_lk',
            'umur39_lk',
            'umur38_lk',
            'umur37_lk',
            'umur36_lk',
            'umur35_lk',
            'umur34_lk',
            'umur33_lk',
            'umur32_lk',
            'umur31_lk',
            'umur30_lk',
            'umur29_lk',
            'umur28_lk',
            'umur27_lk',
            'umur26_lk',
            'umur25_lk',
            'umur24_lk',
            'umur23_lk',
            'umur22_lk',
            'umur21_lk',
            'umur20_lk',
            'umur19_lk',
            'umur18_lk',
            'umur17_lk',
            'umur16_lk',
            'umur15_lk',
            'umur14_lk',
            'umur13_lk',
            'umur12_lk',
            'umur11_lk',
            'umur10_lk',
            'umur9_lk',
            'umur8_lk',
            'umur7_lk',
            'umur6_lk',
            'umur5_lk',
            'umur4_lk',
            'umur3_lk',
            'umur2_lk',
            'umur1_lk',
            'umur0_lk',
            'total_lk',

            'umur75_pr',
            'umur75atas_pr',
            'umur74_pr',
            'umur73_pr',
            'umur72_pr',
            'umur71_pr',
            'umur70_pr',
            'umur69_pr',
            'umur68_pr',
            'umur67_pr',
            'umur66_pr',
            'umur65_pr',
            'umur64_pr',
            'umur63_pr',
            'umur62_pr',
            'umur61_pr',
            'umur60_pr',
            'umur59_pr',
            'umur58_pr',
            'umur57_pr',
            'umur56_pr',
            'umur55_pr',
            'umur54_pr',
            'umur53_pr',
            'umur52_pr',
            'umur51_pr',
            'umur50_pr',
            'umur49_pr',
            'umur48_pr',
            'umur47_pr',
            'umur46_pr',
            'umur45_pr',
            'umur44_pr',
            'umur43_pr',
            'umur42_pr',
            'umur41_pr',
            'umur40_pr',
            'umur39_pr',
            'umur38_pr',
            'umur37_pr',
            'umur36_pr',
            'umur35_pr',
            'umur34_pr',
            'umur33_pr',
            'umur32_pr',
            'umur31_pr',
            'umur30_pr',
            'umur29_pr',
            'umur28_pr',
            'umur27_pr',
            'umur26_pr',
            'umur25_pr',
            'umur24_pr',
            'umur23_pr',
            'umur22_pr',
            'umur21_pr',
            'umur20_pr',
            'umur19_pr',
            'umur18_pr',
            'umur17_pr',
            'umur16_pr',
            'umur15_pr',
            'umur14_pr',
            'umur13_pr',
            'umur12_pr',
            'umur11_pr',
            'umur10_pr',
            'umur9_pr',
            'umur8_pr',
            'umur7_pr',
            'umur6_pr',
            'umur5_pr',
            'umur4_pr',
            'umur3_pr',
            'umur2_pr',
            'umur1_pr',
            'umur0_pr',
            'total_pr',

            'penduduk56tahunatas_lk',
            'penduduktidakbekerja_lk',
            'pendudukbekerja_lk',
            'totalpendudukbekerja_lk',
            'penduduksd_lk',
            'penduduksmp_lk',
            'penduduksma_lk',
            'totalpenduduksekolah_lk',
            'pendudukusia0tahun_lk',

            'penduduk56tahunatas_pr',
            'penduduktidakbekerja_pr',
            'pendudukbekerja_pr',
            'totalpendudukbekerja_pr',
            'penduduksd_pr',
            'penduduksmp_pr',
            'penduduksma_pr',
            'totalpenduduksekolah_pr',
            'pendudukusia0tahun_pr',
            'kualitas_pdk_ba_dewasa_lk',
            'kualitas_pdk_btk_anak_lk',
            'kualitas_pdk_mtk_anak_lk',
            'kualitas_pdk_remaja_lk',
            'kualitas_pdk_tps_dewasa_lk',
            'kualitas_pdk_ttsd_dewasa_lk',
            'kualitas_pdk_ba_dewasa_pr',
            'kualitas_pdk_btk_anak_pr',
            'kualitas_pdk_mtk_anak_pr',
            'kualitas_pdk_remaja_pr',
            'kualitas_pdk_tps_dewasa_pr',
            'kualitas_pdk_ttsd_dewasa_pr',
            'jumlahdusun',
            'kadus',
            'pertanian',
            'pemasaranpanganbuah',
            'pemasaranhasilperkebunan',
            'pemasaranhasilhutan',
            'manfaatkondisidanau',
            'pemasaranhasilgalian',
            'pemasaranhasilikan',
            'ketersediaanlahanternak',
            'pemasaranhasilternak',
            'hijauanpakanternak',
            'sungai',
            'rawa'
        ));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updatePotensiUmum(Request $request, $id)
    {
        $potensiumum = PotensiUmum::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'batas_utara_desa' => strtoupper($request->batas_utara_desa),
            'batas_utara_kec' => strtoupper($request->batas_utara_kec),
            'batas_selatan_desa' => strtoupper($request->batas_selatan_desa),
            'batas_selatan_kec' => strtoupper($request->batas_selatan_kec),
            'batas_timur_desa' => strtoupper($request->batas_timur_desa),
            'batas_timur_kec' => strtoupper($request->batas_timur_kec),
            'batas_barat_desa' => strtoupper($request->batas_barat_desa),
            'batas_barat_kec' => strtoupper($request->batas_barat_kec),
            'penetapan_batas' => $request->penetapan_batas,
            'peta_wilayah' => $request->peta_wilayah,
            'perdes_no' => $request->perdes_no,
            'perda_no' => $request->perda_no,
        ]);
        return redirect()->back();
    }

    public function updateDataTanah(Request $request, $id)
    {
        $datatanah = DataTanah::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'sawah_irigasi_teknis' => $request->sawah_irigasi_teknis,
            'sawah_irigasi_sth_teknis' => $request->sawah_irigasi_sth_teknis,
            'sawah_tadah_hujan' => $request->sawah_tadah_hujan,
            'sawah_pasang_surut' => $request->sawah_pasang_surut,
            'tegal_ladang' => $request->tegal_ladang,
            'pemukiman' => $request->pemukiman,
            'pekarangan' => $request->pekarangan,
            'tanah_rawa' => $request->tanah_rawa,
            'pasang_surut' => $request->pasang_surut,
            'lahan_gambut' => $request->lahan_gambut,
            'situ_waduk_danau' => $request->situ_waduk_danau,
            'perkebunan_rakyat' => $request->perkebunan_rakyat,
            'perkebunan_negara' => $request->perkebunan_negara,
            'perkebunan_swasta' => $request->perkebunan_swasta,
            'perkebunan_perorangan' => $request->perkebunan_perorangan,
            'tanah_bengkok' => $request->tanah_bengkok,
            'tanah_titi_sara' => $request->tanah_titi_sara,
            'kebun_desa' => $request->kebun_desa,
            'sawah_desa' => $request->sawah_desa,
            'lapangan_olahraga' => $request->lapangan_olahraga,
            'perkantoran_pemerintah' => $request->perkantoran_pemerintah,
            'ruang_publik' => $request->ruang_publik,
            'tempat_pemakaman_desa_umum' => $request->tempat_pemakaman_desa_umum,
            'pembuangan_sampah' => $request->pembuangan_sampah,
            'bangunan_sekolah_pt' => $request->bangunan_sekolah_pt,
            'pertokoan' => $request->pertokoan,
            'fasilitas_pasar' => $request->fasilitas_pasar,
            'terminal' => $request->terminal,
            'jalan' => $request->jalan,
            'daerah_tangkapan_air' => $request->daerah_tangkapan_air,
            'usaha_perikanan' => $request->usaha_perikanan,
            'sutet_aliranlistrik' => $request->sutet_aliranlistrik,
            'hutan_produksi_tetap' => $request->hutan_produksi_tetap,
            'hutan_terbatas' => $request->hutan_terbatas,
            'hutan_konservasi' => $request->hutan_konservasi,
            'hutan_adat' => $request->hutan_adat,
            'hutan_asli' => $request->hutan_asli,
            'hutan_sekunder' => $request->hutan_sekunder,
            'hutan_buatan' => $request->hutan_buatan,
            'hutan_mangrove' => $request->hutan_mangrove,
            'hutan_rakyat' => $request->hutan_rakyat,
            'hutan_lindung' => $request->hutan_lindung,
            'suaka_alam' => $request->suaka_alam,
            'suaka_margasatwa' => $request->suaka_margasatwa,
        ]);
        return redirect()->back();
    }

    public function updateIklimJenisKesuburanTanah(Request $request, $id)
    {
        $iklimjeniskesuburantanah = IklimJenisKesuburanTanah::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'curah_hujan' => $request->curah_hujan,
            'jumlah_bulan_hujan' => $request->jumlah_bulan_hujan,
            'kelembapan' => $request->kelembapan,
            'suhu_rata_rata_harian' => $request->suhu_rata_rata_harian,
            'tinggi_tempat_permukaan_laut' => $request->tinggi_tempat_permukaan_laut,
            'warna_tanah' => $request->warna_tanah,
            'tekstur_tanah' => $request->tekstur_tanah,
            'tk_kemiringan_tanah' => $request->tk_kemiringan_tanah,
            'lahan_kritis' => $request->lahan_kritis,
            'lahan_terlantar' => $request->lahan_terlantar,
        ]);
        return redirect()->back();
    }

    public function updateTopografiLetakOrbitasi(Request $request, $id)
    {
        $topografiletakorbitasi = TopografiLetakOrbitasi::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'daratan_rendah' => $request->daratan_rendah,
            'berbukit_bukit' => $request->berbukit_bukit,
            'daratan_tinggi' => $request->daratan_tinggi,
            'lereng_gunung' => $request->lereng_gunung,
            'tepi_pantai' => $request->tepi_pantai,
            'kawasan_rawa' => $request->kawasan_rawa,
            'kawasan_gambut' => $request->kawasan_gambut,
            'aliran_sungai' => $request->aliran_sungai,
            'bantaran_sungai' => $request->bantaran_sungai,
            'kawasan_perkantoran' => $request->kawasan_perkantoran,
            'kawasan_pertokoan' => $request->kawasan_pertokoan,
            'kawasan_campuran' => $request->kawasan_campuran,
            'kawasan_industri' => $request->kawasan_industri,
            'kepulauan' => $request->kepulauan,
            'pantai_pesisir' => $request->pantai_pesisir,
            'kawasan_hutan' => $request->kawasan_hutan,
            'taman_suaka' => $request->taman_suaka,
            'kawasan_wisata' => $request->kawasan_wisata,
            'batas_negara_lain' => $request->batas_negara_lain,
            'batas_provinsi_lain' => $request->batas_provinsi_lain,
            'batas_kabupaten_lain' => $request->batas_kabupaten_lain,
            'batas_antar_kecamatan' => $request->batas_antar_kecamatan,
            'das_bantaransungai' => $request->das_bantaransungai,
            'rawan_banjir' => $request->rawan_banjir,
            'bebas_banjir' => $request->bebas_banjir,
            'potensial_tsunami' => $request->potensial_tsunami,
            'rawan_jalur_gempa' => $request->rawan_jalur_gempa,
            'jarak_kecamatan' => $request->jarak_kecamatan,
            'waktu_kecamatan_motor' => $request->waktu_kecamatan_motor,
            'waktu_kecamatan_nonmotor' => $request->waktu_kecamatan_nonmotor,
            'jumlah_kendaraanumum_kecamatan' => $request->jumlah_kendaraanumum_kecamatan,
            'jarak_kabupaten' => $request->jarak_kabupaten,
            'waktu_kabupaten_motor' => $request->waktu_kabupaten_motor,
            'waktu_kabupaten_nonmotor' => $request->waktu_kabupaten_nonmotor,
            'jumlah_kendaraanumum_kabupaten' => $request->jumlah_kendaraanumum_kabupaten,
            'jarak_provinsi' => $request->jarak_provinsi,
            'waktu_provinsi_motor' => $request->waktu_provinsi_motor,
            'waktu_provinsi_nonmotor' => $request->waktu_provinsi_nonmotor,
            'jumlah_kendaraanumum_provinsi' => $request->jumlah_kendaraanumum_provinsi,
        ]);
        return redirect()->back();
    }

    public function updateLembagaAdat(Request $request, $id)
    {
        $lembagaadat = LembagaAdat::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'pemangkut_adat' => $request->pemangkut_adat,
            'kepengurusan_adat' => $request->kepengurusan_adat,
            'rumah_adat' => $request->rumah_adat,
            'barang_pusaka' => $request->barang_pusaka,
            'naskah_naskah' => $request->naskah_naskah,
            'musyawarah_adat' => $request->musyawarah_adat,
            'sanksi_adat' => $request->sanksi_adat,
            'upacara_adat_perkawinan' => $request->upacara_adat_perkawinan,
            'upacara_adat_kematian' => $request->upacara_adat_kematian,
            'upacara_adat_kelahiran' => $request->upacara_adat_kelahiran,
            'upacara_adat_cocok_tanam' => $request->upacara_adat_cocok_tanam,
            'upacara_adat_bidang_perikanan' => $request->upacara_adat_bidang_perikanan,
            'upacara_adat_bidang_kehutanan' => $request->upacara_adat_bidang_kehutanan,
            'upacara_adat_kelola_sda' => $request->upacara_adat_kelola_sda,
            'upacara_adat_dalam_bangun_rumah' => $request->upacara_adat_dalam_bangun_rumah,
            'upacara_adat_penyelesaian_masalah' => $request->upacara_adat_penyelesaian_masalah,
        ]);
        return redirect()->back();
    }

    public function updateLembagaKeamanan(Request $request, $id)
    {
        $lembagakeamanan = LembagaKeamanan::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'keberadaanhansip' => $request->keberadaanhansip,
            'jumlah_anggota_hansip' => $request->jumlah_anggota_hansip,
            'jumlah_anggota_satgas_linmas' => $request->jumlah_anggota_satgas_linmas,
            'pelaksanaan_siskamling' => $request->pelaksanaan_siskamling,
            'jumlah_poskamling' => $request->jumlah_poskamling,
            'keberadaan_satpam_swakarsa' => $request->keberadaan_satpam_swakarsa,
            'jumlah_anggota_satpam' => $request->jumlah_anggota_satpam,
            'nama_organisasi_induk' => $request->nama_organisasi_induk,
            'pemilik_organisasi_swakarsa' => $request->pemilik_organisasi_swakarsa,
            'keberadaan_organisasi_keamanan' => $request->keberadaan_organisasi_keamanan,
            'mitra_koramil_tni' => $request->mitra_koramil_tni,
            'jumlah_anggota_trantiblinmas' => $request->jumlah_anggota_trantiblinmas,
            'jumlah_kegiatan_trantiblinmas' => $request->jumlah_kegiatan_trantiblinmas,
            'babinkamtibmas' => $request->babinkamtibmas,
            'jumlah_anggota_babinkamtibmas' => $request->jumlah_anggota_babinkamtibmas,
            'jumlah_kegiatan_babinkamtibmas' => $request->jumlah_kegiatan_babinkamtibmas,
        ]);
        return redirect()->back();
    }

    public function updatePrasaranaAirBersih(Request $request, $id)
    {
        $prasaranaairbersih = PrasaranaAirBersih::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'jumlah_sumur_pompa' => $request->jumlah_sumur_pompa,
            'jumlah_sumur_gali' => $request->jumlah_sumur_gali,
            'jumlah_hidran_umum' => $request->jumlah_hidran_umum,
            'jumlah_pah' => $request->jumlah_pah,
            'jumlah_tangki_air_bersih' => $request->jumlah_tangki_air_bersih,
            'jumlah_embung' => $request->jumlah_embung,
            'jumlah_mataair' => $request->jumlah_mataair,
            'jumlah_bangunan_olah_air' => $request->jumlah_bangunan_olah_air,
            'saluran_drainase' => $request->saluran_drainase,
            'sumur_resapan_rt' => $request->sumur_resapan_rt,
            'jumlah_mck_umum' => $request->jumlah_mck_umum,
            'pemilik_jumlah_jamban' => $request->pemilik_jumlah_jamban,
            'kondisi_saluran_drainase' => $request->kondisi_saluran_drainase,
        ]);
        return redirect()->back();
    }

    public function updatePrasaranaLKDK(Request $request, $id)
    {
        $prasaranalkdk = PrasaranaLKDK::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'gedung_kantor_lkd' => $request->gedung_kantor_lkd,
            'komputer_lkd' => $request->komputer_lkd,
            'mesin_fax_lkd' => $request->mesin_fax_lkd,
            'mesin_tik_lkd' => $request->mesin_tik_lkd,
            'kardek_lkd' => $request->kardek_lkd,
            'buku_administrasi_lkd' => $request->buku_administrasi_lkd,
            'jumlah_meja_kursi_lkd' => $request->jumlah_meja_kursi_lkd,
            'kantor_lpm' => $request->kantor_lpm,
            'komputer_lpm' => $request->komputer_lpm,
            'mesin_fax_lpm' => $request->mesin_fax_lpm,
            'mesin_tik_lpm' => $request->mesin_tik_lpm,
            'kardek_lpm' => $request->kardek_lpm,
            'buku_administrasi_lmb_lpm' => $request->buku_administrasi_lmb_lpm,
            'jumlah_meja_kursi_lpm' => $request->jumlah_meja_kursi_lpm,
            'buku_administrasi_lpm' => $request->buku_administrasi_lpm,
            'jenis_kegiatan_lpm' => $request->jenis_kegiatan_lpm,
            'pkk' => $request->pkk,
            'gedung_pkk' => $request->gedung_pkk,
            'atk_pkk' => $request->atk_pkk,
            'kepengurusan_pkk' => $request->kepengurusan_pkk,
            'buku_administrasi_pkk' => $request->buku_administrasi_pkk,
            'kegiatan_pkk' => $request->kegiatan_pkk,
            'jumlah_kegiatan_pkk' => $request->jumlah_kegiatan_pkk,
            'karang_taruna' => $request->karang_taruna,
            'kepengurusan_kt' => $request->kepengurusan_kt,
            'buku_administrasi_kt' => $request->buku_administrasi_kt,
            'jumlah_kegiatan_kt' => $request->jumlah_kegiatan_kt,
            'jumlah_rt' => $request->jumlah_rt,
            'rukun_tetangga' => $request->rukun_tetangga,
            'kepengurusan_rt' => $request->kepengurusan_rt,
            'buku_administrasi_rt' => $request->buku_administrasi_rt,
            'jumlah_kegiatan_rt' => $request->jumlah_kegiatan_rt,
            'jumlah_rw' => $request->jumlah_rw,
            'rukun_warga' => $request->rukun_warga,
            'kepengurusan_rw' => $request->kepengurusan_rw,
            'buku_administrasi_rw' => $request->buku_administrasi_rw,
            'jumlah_kegiatan_rw' => $request->jumlah_kegiatan_rw,
            'gedung_lembagaadat' => $request->gedung_lembagaadat,
            'kepengurusan_lembagaadat' => $request->kepengurusan_lembagaadat,
            'buku_administrasi_lembagaadat' => $request->buku_administrasi_lembagaadat,
            'jumlah_kegiatan_lembagaadat' => $request->jumlah_kegiatan_lembagaadat,
            'bumdes' => $request->bumdes,
            'gedung_bumdes' => $request->gedung_bumdes,
            'kepengurusan_bumdes' => $request->kepengurusan_bumdes,
            'buku_administrasi_bumdes' => $request->buku_administrasi_bumdes,
            'jumlah_kegiatan_bumdes' => $request->jumlah_kegiatan_bumdes,
            'fkkpm' => $request->fkkpm,
            'gedung_fkkpm' => $request->gedung_fkkpm,
            'kepengurusan_fkkpm' => $request->kepengurusan_fkkpm,
            'buku_administrasi_fkkpm' => $request->buku_administrasi_fkkpm,
            'jumlah_kegiatan_fkkpm' => $request->jumlah_kegiatan_fkkpm,
            'gedung_organisasi_sosial' => $request->gedung_organisasi_sosial,
            'kepengurusan_sosial' => $request->kepengurusan_sosial,
            'gedung_organisasi_profesi' => $request->gedung_organisasi_profesi,
            'kepengurusan_organisasi_profesi' => $request->kepengurusan_organisasi_profesi,
            'buku_administrasi_org_profesi' => $request->buku_administrasi_org_profesi,
        ]);
        return redirect()->back();
    }

    public function updatePrasaranaPemerintahan(Request $request, $id)
    {
        $prasaranapemerintahan = PrasaranaPemerintahan::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'gedung_kantor_desa' => $request->gedung_kantor_desa,
            'kondisi_gedung_kantor_desa' => $request->kondisi_gedung_kantor_desa,
            'jumlah_ruang_kerja_desa' => $request->jumlah_ruang_kerja_desa,
            'balai_desa' => $request->balai_desa,
            'listrik_desa' => $request->listrik_desa,
            'air_bersih_desa' => $request->air_bersih_desa,
            'telepon_desa' => $request->telepon_desa,
            'rumah_dinas_kepala_desa' => $request->rumah_dinas_kepala_desa,
            'rumah_dinas_perangkat_desa' => $request->rumah_dinas_perangkat_desa,
            'jumlah_mesin_tik_desa' => $request->jumlah_mesin_tik_desa,
            'jumlah_meja_desa' => $request->jumlah_meja_desa,
            'jumlah_kursi_desa' => $request->jumlah_kursi_desa,
            'jumlah_almari_arsip_desa' => $request->jumlah_almari_arsip_desa,
            'komputer_desa' => $request->komputer_desa,
            'mesin_fax_desa' => $request->mesin_fax_desa,
            'kendaraan_dinas_desa' => $request->kendaraan_dinas_desa,
            'buku_data_peraturan_desa' => $request->buku_data_peraturan_desa,
            'buku_keputusan_kepala_desa' => $request->buku_keputusan_kepala_desa,
            'buku_administrasi_kependudukan' => $request->buku_administrasi_kependudukan,
            'buku_data_inventaris' => $request->buku_data_inventaris,
            'buku_data_aparat' => $request->buku_data_aparat,
            'buku_data_tanah_desa' => $request->buku_data_tanah_desa,
            'buku_administrasi_pajak' => $request->buku_administrasi_pajak,
            'buku_data_tanah' => $request->buku_data_tanah,
            'buku_laporan_pengaduan_masyarakat' => $request->buku_laporan_pengaduan_masyarakat,
            'buku_agenda_ekspedisi' => $request->buku_agenda_ekspedisi,
            'buku_profil_desa' => $request->buku_profil_desa,
            'buku_data_induk_kependudukan' => $request->buku_data_induk_kependudukan,
            'buku_data_mutasi_penduduk' => $request->buku_data_mutasi_penduduk,
            'buku_rekap_jumlah_pdk_akhirbulan' => $request->buku_rekap_jumlah_pdk_akhirbulan,
            'buku_registrasi_pelayanan_penduduk' => $request->buku_registrasi_pelayanan_penduduk,
            'buku_data_penduduk_sementara' => $request->buku_data_penduduk_sementara,
            'buku_anggaran_penerimaan' => $request->buku_anggaran_penerimaan,
            'buku_anggaran_pengeluaran_pegawai' => $request->buku_anggaran_pengeluaran_pegawai,
            'buku_kas_umum_desa' => $request->buku_kas_umum_desa,
            'buku_kas_pembantu_penerimaan' => $request->buku_kas_pembantu_penerimaan,
            'buku_kas_pembantu_pengeluaran_rutin' => $request->buku_kas_pembantu_pengeluaran_rutin,
            'buku_data_lembaga_kemasyarakatan' => $request->buku_data_lembaga_kemasyarakatan,
        ]);
        return redirect()->back();
    }

    public function updatePrasaranaBPDDusun(Request $request, $id)
    {
        $prasaranabpddusun = PrasaranaBPDDusun::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'gedung_kantor_bpd' => $request->gedung_kantor_bpd,
            'kondisi_gedung_kantor_bpd' => $request->kondisi_gedung_kantor_bpd,
            'jumlah_ruang_kerja_bpd' => $request->jumlah_ruang_kerja_bpd,
            'balai_bpd' => $request->balai_bpd,
            'listrik_bpd' => $request->listrik_bpd,
            'air_bersih_bpd' => $request->air_bersih_bpd,
            'telepon_bpd' => $request->telepon_bpd,
            'jumlah_mesin_tik_bpd' => $request->jumlah_mesin_tik_bpd,
            'jumlah_meja_bpd' => $request->jumlah_meja_bpd,
            'jumlah_kursi_bpd' => $request->jumlah_kursi_bpd,
            'jumlah_almari_arsip_bpd' => $request->jumlah_almari_arsip_bpd,
            'komputer_bpd' => $request->komputer_bpd,
            'mesin_fax_bpd' => $request->mesin_fax_bpd,
            'buku_adm_agt_bpd' => $request->buku_adm_agt_bpd,
            'buku_adm_kgt_bpd' => $request->buku_adm_kgt_bpd,
            'buku_kgt_bpd' => $request->buku_kgt_bpd,
            'buku_perda_bpd' => $request->buku_perda_bpd,
            'gedung_kantor_dusun' => $request->gedung_kantor_dusun,
            'atk_dusun' => $request->atk_dusun,
            'barang_inventaris_dusun' => $request->barang_inventaris_dusun,
            'buku_administrasi_dusun' => $request->buku_administrasi_dusun,
            'jenis_kegiatan_dusun' => $request->jenis_kegiatan_dusun,
            'jumlah_pengurus_dusun' => $request->jumlah_pengurus_dusun,
        ]);
        return redirect()->back();
    }

    public function updatePrasaranaIrigasi(Request $request, $id)
    {
        $prasaranairigasi = PrasaranaIrigasi::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'panjang_saluran_primer' => $request->panjang_saluran_primer,
            'panjang_saluran_sekunder' => $request->panjang_saluran_sekunder,
            'panjang_saluran_tersier' => $request->panjang_saluran_tersier,
            'jumlah_pintu_sadap' => $request->jumlah_pintu_sadap,
            'jumlah_pintu_pembagi_air' => $request->jumlah_pintu_pembagi_air,
            'kondisi_saluran_primer' => $request->kondisi_saluran_primer,
            'kondisi_saluran_sekunder' => $request->kondisi_saluran_sekunder,
            'kondisi_saluran_tersier' => $request->kondisi_saluran_tersier,
            'pintu_sadap' => $request->pintu_sadap,
            'pintu_pembagi_air' => $request->pintu_pembagi_air,
        ]);
        return redirect()->back();
    }

    public function updatePertanian(Request $request, $id)
    {
        $pertanian = Pertanian::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'pangan_kurang5ha' => $request->pangan_kurang5ha,
            'pangan_5_10ha' => $request->pangan_5_10ha,
            'pangan_10_50ha' => $request->pangan_10_50ha,
            'pangan_50_100ha' => $request->pangan_50_100ha,
            'pangan_100_500ha' => $request->pangan_100_500ha,
            'pangan_500_1000ha' => $request->pangan_500_1000ha,
            'pangan_lebih1000ha' => $request->pangan_lebih1000ha,
            'pangan_memilikilahan' => $request->pangan_kurang5ha +
                $request->pangan_5_10ha +
                $request->pangan_10_50ha +
                $request->pangan_50_100ha +
                $request->pangan_100_500ha +
                $request->pangan_500_1000ha +
                $request->pangan_lebih1000ha,
            'pangan_tidakmemilikilahan' => $request->pangan_tidakmemilikilahan,
            'pangan_totallahan' => $request->pangan_kurang5ha +
                $request->pangan_5_10ha +
                $request->pangan_10_50ha +
                $request->pangan_50_100ha +
                $request->pangan_100_500ha +
                $request->pangan_500_1000ha +
                $request->pangan_lebih1000ha +
                $request->pangan_tidakmemilikilahan,
            'buah_kurang5ha' => $request->buah_kurang5ha,
            'buah_5_10ha' => $request->buah_5_10ha,
            'buah_10_50ha' => $request->buah_10_50ha,
            'buah_50_100ha' => $request->buah_50_100ha,
            'buah_100_500ha' => $request->buah_100_500ha,
            'buah_500_1000ha' => $request->buah_500_1000ha,
            'buah_lebih1000ha' => $request->buah_lebih1000ha,
            'buah_memilikilahan' => $request->buah_kurang5ha +
                $request->buah_5_10ha +
                $request->buah_10_50ha +
                $request->buah_50_100ha +
                $request->buah_100_500ha +
                $request->buah_500_1000ha +
                $request->buah_lebih1000ha,
            'buah_tidakmemilikilahan' => $request->buah_tidakmemilikilahan,
            'buah_totallahan' => $request->buah_kurang5ha +
                $request->buah_5_10ha +
                $request->buah_10_50ha +
                $request->buah_50_100ha +
                $request->buah_100_500ha +
                $request->buah_500_1000ha +
                $request->buah_lebih1000ha +
                $request->buah_tidakmemilikilahan,
            'kebun_kurang5ha' => $request->kebun_kurang5ha,
            'kebun_5_10ha' => $request->kebun_5_10ha,
            'kebun_10_50ha' => $request->kebun_10_50ha,
            'kebun_50_100ha' => $request->kebun_50_100ha,
            'kebun_100_500ha' => $request->kebun_100_500ha,
            'kebun_500_1000ha' => $request->kebun_500_1000ha,
            'kebun_lebih1000ha' => $request->kebun_lebih1000ha,
            'kebun_memilikilahan' => $request->kebun_kurang5ha +
                $request->kebun_5_10ha +
                $request->kebun_10_50ha +
                $request->kebun_50_100ha +
                $request->kebun_100_500ha +
                $request->kebun_500_1000ha +
                $request->kebun_lebih1000ha,
            'kebun_tidakmemilikilahan' => $request->kebun_tidakmemilikilahan,
            'kebun_totallahan' => $request->kebun_kurang5ha +
                $request->kebun_5_10ha +
                $request->kebun_10_50ha +
                $request->kebun_50_100ha +
                $request->kebun_100_500ha +
                $request->kebun_500_1000ha +
                $request->kebun_lebih1000ha +
                $request->kebun_tidakmemilikilahan,
        ]);
        return redirect()->back();
    }

    public function updatePemasaranPanganBuah(Request $request, $id)
    {
        $pemasaranpanganbuah = PemasaranPanganBuah::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'jual_konsumen_pangan_buah' => $request->jual_konsumen_pangan_buah,
            'jual_pasar_pangan_buah' => $request->jual_pasar_pangan_buah,
            'jual_kud_pangan_buah' => $request->jual_kud_pangan_buah,
            'jual_tengkulak_pangan_buah' => $request->jual_tengkulak_pangan_buah,
            'jual_pengecer_pangan_buah' => $request->jual_pengecer_pangan_buah,
            'jual_lumbung_pangan_buah' => $request->jual_lumbung_pangan_buah,
            'tidak_jual_pangan_buah' => $request->tidak_jual_pangan_buah,
        ]);
        return redirect()->back();
    }

    public function updatePemasaranHasilPerkebunan(Request $request, $id)
    {
        $pemasaranhasilperkebunan = PemasaranHasilPerkebunan::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'jual_konsumen_kebun' => $request->jual_konsumen_kebun,
            'jual_pasar_kebun' => $request->jual_pasar_kebun,
            'jual_kud_kebun' => $request->jual_kud_kebun,
            'jual_tengkulak_kebun' => $request->jual_tengkulak_kebun,
            'jual_pengecer_kebun' => $request->jual_pengecer_kebun,
            'jual_lumbung_kebun' => $request->jual_lumbung_kebun,
            'tidak_jual_kebun' => $request->tidak_jual_kebun,
        ]);
        return redirect()->back();
    }

    public function updatePemasaranHasilHutan(Request $request, $id)
    {
        $pemasaranhasilhutan = PemasaranHasilHutan::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'jual_konsumen_hutan' => $request->jual_konsumen_hutan,
            'jual_pasar_hutan' => $request->jual_pasar_hutan,
            'jual_kud_hutan' => $request->jual_kud_hutan,
            'jual_tengkulak_hutan' => $request->jual_tengkulak_hutan,
            'jual_pengecer_hutan' => $request->jual_pengecer_hutan,
            'jual_lumbung_hutan' => $request->jual_lumbung_hutan,
            'tidak_jual_hutan' => $request->tidak_jual_hutan,
        ]);
        return redirect()->back();
    }
    public function updateSungai(Request $request, $id)
    {
        $sungai = Sungai::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'jumlah_sungai' => $request->jumlah_sungai,
            'tercemar_sungai' => $request->tercemar_sungai,
            'dangkal_sungai' => $request->dangkal_sungai,
            'keruh_sungai' => $request->keruh_sungai,
            'jernih_sungai' => $request->jernih_sungai,
            'kurangbiota_sungai' => $request->kurangbiota_sungai,
            'kering_sungai' => $request->kering_sungai,
        ]);
        return redirect()->back();
    }

    public function updateRawa(Request $request, $id)
    {
        $rawa = Rawa::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'luas_rawa' => $request->luas_rawa,
            'perikanandarat_rawa' => $request->perikanandarat_rawa,
            'airbakuolah_rawa' => $request->airbakuolah_rawa,
            'cucimandi_rawa' => $request->cucimandi_rawa,
            'irigasi_rawa' => $request->irigasi_rawa,
            'bab_rawa' => $request->bab_rawa,
            'perikanan_rawa' => $request->perikanan_rawa,
            'sayuran_rawa' => $request->sayuran_rawa,
            'mangrove_rawa' => $request->mangrove_rawa,
            'lain_rawa' => $request->lain_rawa,
        ]);
        return redirect()->back();
    }

    public function updateManfaatKondisiDanau(Request $request, $id)
    {
        $manfaatkondisidanau = ManfaatKondisiDanau::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'luas_danau' => $request->luas_danau,
            'perikanan_danau' => $request->perikanan_danau,
            'airminum_danau' => $request->airminum_danau,
            'cucimandi_danau' => $request->cucimandi_danau,
            'irigasi_danau' => $request->irigasi_danau,
            'bab_danau' => $request->bab_danau,
            'pembangkitlistrik_danau' => $request->pembangkitlistrik_danau,
            'prasaranatransportasi_danau' => $request->prasaranatransportasi_danau,
            'lainnya_danau' => $request->lainnya_danau,
            'tercemar_danau' => $request->tercemar_danau,
            'dangkal_danau' => $request->dangkal_danau,
            'keruh_danau' => $request->keruh_danau,
            'berlumpur_danau' => $request->berlumpur_danau,
        ]);
        return redirect()->back();
    }
    public function updatePemasaranHasilGalian(Request $request, $id)
    {
        $pemasaranhasilgalian = PemasaranHasilGalian::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'jual_konsumen_galian' => $request->jual_konsumen_galian,
            'jual_pasar_galian' => $request->jual_pasar_galian,
            'jual_kud_galian' => $request->jual_kud_galian,
            'jual_tengkulak_galian' => $request->jual_tengkulak_galian,
            'jual_pengecer_galian' => $request->jual_pengecer_galian,
            'jual_perusahaan_galian' => $request->jual_perusahaan_galian,
            'jual_lumbung_galian' => $request->jual_lumbung_galian,
            'tidak_jual_galian' => $request->tidak_jual_galian,
        ]);
        return redirect()->back();
    }

    public function updatePemasaranHasilIkan(Request $request, $id)
    {
        $pemasaranhasilikan = PemasaranHasilIkan::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'jual_konsumen_perikanan' => $request->jual_konsumen_perikanan,
            'jual_pasar_perikanan' => $request->jual_pasar_perikanan,
            'jual_kud_perikanan' => $request->jual_kud_perikanan,
            'jual_tengkulak_perikanan' => $request->jual_tengkulak_perikanan,
            'jual_pengecer_perikanan' => $request->jual_pengecer_perikanan,
            'jual_lumbung_perikanan' => $request->jual_lumbung_perikanan,
            'tidak_jual_perikanan' => $request->tidak_jual_perikanan,
        ]);
        return redirect()->back();
    }

    public function updateKetersediaanLahanTernak(Request $request, $id)
    {
        $ketersediaanlahanternak = KetersediaanLahanTernak::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'milik_masyarakat_ternak' => $request->milik_masyarakat_ternak,
            'milik_perusahaan_ternak' => $request->milik_perusahaan_ternak,
            'milik_perorangan_ternak' => $request->milik_perorangan_ternak,
            'sewa_pakai_ternak' => $request->sewa_pakai_ternak,
            'milik_pemerintah_ternak' => $request->milik_pemerintah_ternak,
            'milik_masyarakat_adat_ternak' => $request->milik_masyarakat_adat_ternak,
            'lainnya_sedia_lahan_ternak' => $request->lainnya_sedia_lahan_ternak,
        ]);
        return redirect()->back();
    }

    public function updatePemasaranHasilTernak(Request $request, $id)
    {
        $pemasaranhasilternak = PemasaranHasilTernak::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [

            'jual_konsumen_ternak' => $request->jual_konsumen_ternak,
            'jual_pasar_ternak' => $request->jual_pasar_ternak,
            'jual_kud_ternak' => $request->jual_kud_ternak,
            'jual_tengkulak_ternak' => $request->jual_tengkulak_ternak,
            'jual_pengecer_ternak' => $request->jual_pengecer_ternak,
            'jual_lumbung_ternak' => $request->jual_lumbung_ternak,
            'tidak_jual_ternak' => $request->tidak_jual_ternak,
        ]);
        return redirect()->back();
    }

    public function updateHijauanPakanTernak(Request $request, $id)
    {
        $hijauanpakanternak = HijauanPakanTernak::updateOrCreate([
            'desa_id' => Auth::user()->desa_id,
        ], [
            'ls_tanaman_pakan_ternak' => $request->ls_tanaman_pakan_ternak,
            'produksi_hijauan_pakan_ternak' => $request->produksi_hijauan_pakan_ternak,
            'ls_lahan_gembalaan' => $request->ls_lahan_gembalaan,
            'pasok_dari_luardesa' => $request->pasok_dari_luardesa,
            'subsidi_dinas' => $request->subsidi_dinas,
            'lainnya_ketersediaan_hijauan' => $request->lainnya_ketersediaan_hijauan,
        ]);
        return redirect()->back();
    }
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
