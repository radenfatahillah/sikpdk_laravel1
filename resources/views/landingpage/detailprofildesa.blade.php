@extends('layouts.landingpage.utama')
@section('isi')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('{{ asset('landingpage/assets/img/page-header.jpg')}}');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Desa</h2>
                        <p>Kecamatan Teluk Keramat Kabupaten Sambas Provinsi Kalimantan Barat.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{ route('landingpageindex') }}">Beranda</a></li>
                    <li>Profil Desa</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Get a Quote Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
        <div class="container" data-aos="fade-up">
            <h5 class="card-title mb-4"><a href="{{ route('landingpageprofildesa') }}" class="btn btn-primary">Kembali</a></h5>
            <div class="row g-0">
                <div class="col-lg-12">
                    <form action="forms/quote.php" method="post" class="php-email-form">
                        <h3>Monografi Desa</h3>
                        <div class="row">
                            <div class="col-md-2">Desa
                            </div>
                            <div class="col-md-4"><strong>
                                    @foreach($profildesa as $pfde)
                                    {{ $pfde->name }}
                                    @endforeach
                                </strong>
                            </div>
                            <div class="col-md-2">Tahun Pembentukan
                            </div>
                            <div class="col-md-4"><strong>
                                    @foreach($profildesa as $pfde)
                                    {{ $pfde->tahun_bentuk }}
                                    @endforeach
                                </strong>
                            </div>
                            <div class="col-md-2">Koordinat Bujur
                            </div>
                            <div class="col-md-4"><strong>
                                    @foreach($profildesa as $pfde)
                                    {{ $pfde->koordinat_bujur }}
                                    @endforeach
                                </strong>
                            </div>
                            <div class="col-md-2">Koordinat Lintang
                            </div>
                            <div class="col-md-4"><strong>
                                    @foreach($profildesa as $pfde)
                                    {{ $pfde->koordinat_lintang }}
                                    @endforeach
                                </strong>
                            </div>
                        </div>
                        <br>
                        <h3>Data Perangkat Desa</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">NIP</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($perangkatdesa as $prd)
                                <tr>
                                    <td>{{ $prd['name'] }}</td>
                                    <td>{{ $prd['jabatan'] }}</td>
                                    <td>{{ $prd['nip'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <h3>Data Perangkat Badan Permusyawaratan Desa</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bpddesa as $bpd)
                                <tr>
                                    <td>{{ $bpd['name'] }}</td>
                                    <td>{{ $bpd['jabatan'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <h3>Data Perangkat Dusun/Lingkungan</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Dusun/Lingkungan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($alamat as $almt)
                                <tr>
                                    <td>{{ $almt['nama_kadus'] }}</td>
                                    <td>{{ $almt['name'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <h3>Batas Wilayah</h3>
                        <div class="row">
                            <div class="col-md-2">Sebelah Utara
                            </div>
                            <div class="col-md-4"><strong></strong>
                            </div>
                            <div class="col-md-2">Sebelah Selatan
                            </div>
                            <div class="col-md-4"><strong></strong>
                            </div>
                            <div class="col-md-2">Sebelah Timur
                            </div>
                            <div class="col-md-4"><strong></strong>
                            </div>
                            <div class="col-md-2">Sebelah Barat
                            </div>
                            <div class="col-md-4"><strong></strong>
                            </div>
                        </div>
                        <br>
                        <h3>Potensi Sumber Daya Manusia</h3>
                        <div class="row">
                            <div class="col-md-2">Jumlah Laki-Laki
                            </div>
                            <div class="col-md-4"><strong>{{ $jumlahlakilaki }}</strong>
                            </div>
                            <div class="col-md-2">Jumlah Perempuan
                            </div>
                            <div class="col-md-4"><strong>{{ $jumlahperempuan }}</strong>
                            </div>
                            <div class="col-md-2">Total Penduduk
                            </div>
                            <div class="col-md-4"><strong>{{ $jumlahpenduduk }}</strong>
                            </div>
                            <div class="col-md-2">Jumlah Kepala Keluarga
                            </div>
                            <div class="col-md-4"><strong>{{ $jumlahkk }}</strong>
                            </div>
                        </div>
                        <br>
                        <h3>Pendidikan</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Tingkat Pendidikan</th>
                                    <th scope="col">Laki-Laki (Orang)</th>
                                    <th scope="col">Perempuan (Orang)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($jml_pdk_lk1 == 0 && $jml_pdk_pr1 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[0]->name }}</td>
                                    <td>{{ $jml_pdk_lk1 }}</td>
                                    <td>{{ $jml_pdk_pr1 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk2 == 0 && $jml_pdk_pr2 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[1]->name }}</td>
                                    <td>{{ $jml_pdk_lk2 }}</td>
                                    <td>{{ $jml_pdk_pr2 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk3 == 0 && $jml_pdk_pr3 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[2]->name }}</td>
                                    <td>{{ $jml_pdk_lk3 }}</td>
                                    <td>{{ $jml_pdk_pr3 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk4 == 0 && $jml_pdk_pr4 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[3]->name }}</td>
                                    <td>{{ $jml_pdk_lk4 }}</td>
                                    <td>{{ $jml_pdk_pr4 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk5 == 0 && $jml_pdk_pr5 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[4]->name }}</td>
                                    <td>{{ $jml_pdk_lk5 }}</td>
                                    <td>{{ $jml_pdk_pr5 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk6 == 0 && $jml_pdk_pr6 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[5]->name }}</td>
                                    <td>{{ $jml_pdk_lk6 }}</td>
                                    <td>{{ $jml_pdk_pr6 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk7 == 0 && $jml_pdk_pr7 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[6]->name }}</td>
                                    <td>{{ $jml_pdk_lk7 }}</td>
                                    <td>{{ $jml_pdk_pr7 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk8 == 0 && $jml_pdk_pr8 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[7]->name }}</td>
                                    <td>{{ $jml_pdk_lk8 }}</td>
                                    <td>{{ $jml_pdk_pr8 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk9 == 0 && $jml_pdk_pr9 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[8]->name }}</td>
                                    <td>{{ $jml_pdk_lk9 }}</td>
                                    <td>{{ $jml_pdk_pr9 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk10 == 0 && $jml_pdk_pr10 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[9]->name }}</td>
                                    <td>{{ $jml_pdk_lk10 }}</td>
                                    <td>{{ $jml_pdk_pr10 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk11 == 0 && $jml_pdk_pr11 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[10]->name }}</td>
                                    <td>{{ $jml_pdk_lk11 }}</td>
                                    <td>{{ $jml_pdk_pr11 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk12 == 0 && $jml_pdk_pr12 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[11]->name }}</td>
                                    <td>{{ $jml_pdk_lk12 }}</td>
                                    <td>{{ $jml_pdk_pr12 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk13 == 0 && $jml_pdk_pr13 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[12]->name }}</td>
                                    <td>{{ $jml_pdk_lk13 }}</td>
                                    <td>{{ $jml_pdk_pr13 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk14 == 0 && $jml_pdk_pr14 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[13]->name }}</td>
                                    <td>{{ $jml_pdk_lk14 }}</td>
                                    <td>{{ $jml_pdk_pr14 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk15 == 0 && $jml_pdk_pr15 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[14]->name }}</td>
                                    <td>{{ $jml_pdk_lk15 }}</td>
                                    <td>{{ $jml_pdk_pr15 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk16 == 0 && $jml_pdk_pr16 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[15]->name }}</td>
                                    <td>{{ $jml_pdk_lk16 }}</td>
                                    <td>{{ $jml_pdk_pr16 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk17 == 0 && $jml_pdk_pr17 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[16]->name }}</td>
                                    <td>{{ $jml_pdk_lk17 }}</td>
                                    <td>{{ $jml_pdk_pr17 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk18 == 0 && $jml_pdk_pr18 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[17]->name }}</td>
                                    <td>{{ $jml_pdk_lk18 }}</td>
                                    <td>{{ $jml_pdk_pr18 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk19 == 0 && $jml_pdk_pr19 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[18]->name }}</td>
                                    <td>{{ $jml_pdk_lk19 }}</td>
                                    <td>{{ $jml_pdk_pr19 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk20 == 0 && $jml_pdk_pr20 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[19]->name }}</td>
                                    <td>{{ $jml_pdk_lk20 }}</td>
                                    <td>{{ $jml_pdk_pr20 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk21 == 0 && $jml_pdk_pr21 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[20]->name }}</td>
                                    <td>{{ $jml_pdk_lk21 }}</td>
                                    <td>{{ $jml_pdk_pr21 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk22 == 0 && $jml_pdk_pr22 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[21]->name }}</td>
                                    <td>{{ $jml_pdk_lk22 }}</td>
                                    <td>{{ $jml_pdk_pr22 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk23 == 0 && $jml_pdk_pr23 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[22]->name }}</td>
                                    <td>{{ $jml_pdk_lk23 }}</td>
                                    <td>{{ $jml_pdk_pr23 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk24 == 0 && $jml_pdk_pr24 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[23]->name }}</td>
                                    <td>{{ $jml_pdk_lk24 }}</td>
                                    <td>{{ $jml_pdk_pr24 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk25 == 0 && $jml_pdk_pr25 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[24]->name }}</td>
                                    <td>{{ $jml_pdk_lk25 }}</td>
                                    <td>{{ $jml_pdk_pr25 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk26 == 0 && $jml_pdk_pr26 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[25]->name }}</td>
                                    <td>{{ $jml_pdk_lk26 }}</td>
                                    <td>{{ $jml_pdk_pr26 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk27 == 0 && $jml_pdk_pr27 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[26]->name }}</td>
                                    <td>{{ $jml_pdk_lk27 }}</td>
                                    <td>{{ $jml_pdk_pr27 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk28 == 0 && $jml_pdk_pr28 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[27]->name }}</td>
                                    <td>{{ $jml_pdk_lk28 }}</td>
                                    <td>{{ $jml_pdk_pr28 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk29 == 0 && $jml_pdk_pr29 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[28]->name }}</td>
                                    <td>{{ $jml_pdk_lk29 }}</td>
                                    <td>{{ $jml_pdk_pr29 }}</td>
                                </tr>
                                @endif

                                @if($jml_pdk_lk30 == 0 && $jml_pdk_pr30 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $pendidikansedang[29]->name }}</td>
                                    <td>{{ $jml_pdk_lk30 }}</td>
                                    <td>{{ $jml_pdk_pr30 }}</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        <br>
                        <h3>Mata Pencaharian Pokok</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Jenis Pekerjaan</th>
                                    <th scope="col">Laki-Laki (Orang)</th>
                                    <th scope="col">Perempuan (Orang)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($jml_krj_lk1 == 0 && $jml_krj_pr1 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[0]->name }}</td>
                                    <td>{{ $jml_krj_lk1 }}</td>
                                    <td>{{ $jml_krj_pr1 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk2 == 0 && $jml_krj_pr2 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[1]->name }}</td>
                                    <td>{{ $jml_krj_lk2 }}</td>
                                    <td>{{ $jml_krj_pr2 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk3 == 0 && $jml_krj_pr3 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[2]->name }}</td>
                                    <td>{{ $jml_krj_lk3 }}</td>
                                    <td>{{ $jml_krj_pr3 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk4 == 0 && $jml_krj_pr4 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[3]->name }}</td>
                                    <td>{{ $jml_krj_lk4 }}</td>
                                    <td>{{ $jml_krj_pr4 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk5 == 0 && $jml_krj_pr5 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[4]->name }}</td>
                                    <td>{{ $jml_krj_lk5 }}</td>
                                    <td>{{ $jml_krj_pr5 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk6 == 0 && $jml_krj_pr6 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[5]->name }}</td>
                                    <td>{{ $jml_krj_lk6 }}</td>
                                    <td>{{ $jml_krj_pr6 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk7 == 0 && $jml_krj_pr7 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[6]->name }}</td>
                                    <td>{{ $jml_krj_lk7 }}</td>
                                    <td>{{ $jml_krj_pr7 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk8 == 0 && $jml_krj_pr8 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[7]->name }}</td>
                                    <td>{{ $jml_krj_lk8 }}</td>
                                    <td>{{ $jml_krj_pr8 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk9 == 0 && $jml_krj_pr9 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[8]->name }}</td>
                                    <td>{{ $jml_krj_lk9 }}</td>
                                    <td>{{ $jml_krj_pr9 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk10 == 0 && $jml_krj_pr10 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[9]->name }}</td>
                                    <td>{{ $jml_krj_lk10 }}</td>
                                    <td>{{ $jml_krj_pr10 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk11 == 0 && $jml_krj_pr11 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[10]->name }}</td>
                                    <td>{{ $jml_krj_lk11 }}</td>
                                    <td>{{ $jml_krj_pr11 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk12 == 0 && $jml_krj_pr12 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[11]->name }}</td>
                                    <td>{{ $jml_krj_lk12 }}</td>
                                    <td>{{ $jml_krj_pr12 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk13 == 0 && $jml_krj_pr13 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[12]->name }}</td>
                                    <td>{{ $jml_krj_lk13 }}</td>
                                    <td>{{ $jml_krj_pr13 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk14 == 0 && $jml_krj_pr14 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[13]->name }}</td>
                                    <td>{{ $jml_krj_lk14 }}</td>
                                    <td>{{ $jml_krj_pr14 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk15 == 0 && $jml_krj_pr15 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[14]->name }}</td>
                                    <td>{{ $jml_krj_lk15 }}</td>
                                    <td>{{ $jml_krj_pr15 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk16 == 0 && $jml_krj_pr16 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[15]->name }}</td>
                                    <td>{{ $jml_krj_lk16 }}</td>
                                    <td>{{ $jml_krj_pr16 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk17 == 0 && $jml_krj_pr17 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[16]->name }}</td>
                                    <td>{{ $jml_krj_lk17 }}</td>
                                    <td>{{ $jml_krj_pr17 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk18 == 0 && $jml_krj_pr18 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[17]->name }}</td>
                                    <td>{{ $jml_krj_lk18 }}</td>
                                    <td>{{ $jml_krj_pr18 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk19 == 0 && $jml_krj_pr19 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[18]->name }}</td>
                                    <td>{{ $jml_krj_lk19 }}</td>
                                    <td>{{ $jml_krj_pr19 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk20 == 0 && $jml_krj_pr20 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[19]->name }}</td>
                                    <td>{{ $jml_krj_lk20 }}</td>
                                    <td>{{ $jml_krj_pr20 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk21 == 0 && $jml_krj_pr21 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[20]->name }}</td>
                                    <td>{{ $jml_krj_lk21 }}</td>
                                    <td>{{ $jml_krj_pr21 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk22 == 0 && $jml_krj_pr22 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[21]->name }}</td>
                                    <td>{{ $jml_krj_lk22 }}</td>
                                    <td>{{ $jml_krj_pr22 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk23 == 0 && $jml_krj_pr23 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[22]->name }}</td>
                                    <td>{{ $jml_krj_lk23 }}</td>
                                    <td>{{ $jml_krj_pr23 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk24 == 0 && $jml_krj_pr24 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[23]->name }}</td>
                                    <td>{{ $jml_krj_lk24 }}</td>
                                    <td>{{ $jml_krj_pr24 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk25 == 0 && $jml_krj_pr25 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[24]->name }}</td>
                                    <td>{{ $jml_krj_lk25 }}</td>
                                    <td>{{ $jml_krj_pr25 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk26 == 0 && $jml_krj_pr26 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[25]->name }}</td>
                                    <td>{{ $jml_krj_lk26 }}</td>
                                    <td>{{ $jml_krj_pr26 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk27 == 0 && $jml_krj_pr27 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[26]->name }}</td>
                                    <td>{{ $jml_krj_lk27 }}</td>
                                    <td>{{ $jml_krj_pr27 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk28 == 0 && $jml_krj_pr28 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[27]->name }}</td>
                                    <td>{{ $jml_krj_lk28 }}</td>
                                    <td>{{ $jml_krj_pr28 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk29 == 0 && $jml_krj_pr29 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[28]->name }}</td>
                                    <td>{{ $jml_krj_lk29 }}</td>
                                    <td>{{ $jml_krj_pr29 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk30 == 0 && $jml_krj_pr30 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[29]->name }}</td>
                                    <td>{{ $jml_krj_lk30 }}</td>
                                    <td>{{ $jml_krj_pr30 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk31 == 0 && $jml_krj_pr31 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[30]->name }}</td>
                                    <td>{{ $jml_krj_lk31 }}</td>
                                    <td>{{ $jml_krj_pr31 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk32 == 0 && $jml_krj_pr32 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[31]->name }}</td>
                                    <td>{{ $jml_krj_lk32 }}</td>
                                    <td>{{ $jml_krj_pr32 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk33 == 0 && $jml_krj_pr33 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[32]->name }}</td>
                                    <td>{{ $jml_krj_lk33 }}</td>
                                    <td>{{ $jml_krj_pr33 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk34 == 0 && $jml_krj_pr34 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[33]->name }}</td>
                                    <td>{{ $jml_krj_lk34 }}</td>
                                    <td>{{ $jml_krj_pr34 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk35 == 0 && $jml_krj_pr35 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[34]->name }}</td>
                                    <td>{{ $jml_krj_lk35 }}</td>
                                    <td>{{ $jml_krj_pr35 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk36 == 0 && $jml_krj_pr36 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[35]->name }}</td>
                                    <td>{{ $jml_krj_lk36 }}</td>
                                    <td>{{ $jml_krj_pr36 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk37 == 0 && $jml_krj_pr37 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[36]->name }}</td>
                                    <td>{{ $jml_krj_lk37 }}</td>
                                    <td>{{ $jml_krj_pr37 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk38 == 0 && $jml_krj_pr38 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[37]->name }}</td>
                                    <td>{{ $jml_krj_lk38 }}</td>
                                    <td>{{ $jml_krj_pr38 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk39 == 0 && $jml_krj_pr39 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[38]->name }}</td>
                                    <td>{{ $jml_krj_lk39 }}</td>
                                    <td>{{ $jml_krj_pr39 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk40 == 0 && $jml_krj_pr40 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[39]->name }}</td>
                                    <td>{{ $jml_krj_lk40 }}</td>
                                    <td>{{ $jml_krj_pr40 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk41 == 0 && $jml_krj_pr41 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[40]->name }}</td>
                                    <td>{{ $jml_krj_lk41 }}</td>
                                    <td>{{ $jml_krj_pr41 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk42 == 0 && $jml_krj_pr42 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[41]->name }}</td>
                                    <td>{{ $jml_krj_lk42 }}</td>
                                    <td>{{ $jml_krj_pr42 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk43 == 0 && $jml_krj_pr43 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[42]->name }}</td>
                                    <td>{{ $jml_krj_lk43 }}</td>
                                    <td>{{ $jml_krj_pr43 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk44 == 0 && $jml_krj_pr44 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[43]->name }}</td>
                                    <td>{{ $jml_krj_lk44 }}</td>
                                    <td>{{ $jml_krj_pr44 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk45 == 0 && $jml_krj_pr45 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[44]->name }}</td>
                                    <td>{{ $jml_krj_lk45 }}</td>
                                    <td>{{ $jml_krj_pr45 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk46 == 0 && $jml_krj_pr46 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[45]->name }}</td>
                                    <td>{{ $jml_krj_lk46 }}</td>
                                    <td>{{ $jml_krj_pr46 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk47 == 0 && $jml_krj_pr47 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[46]->name }}</td>
                                    <td>{{ $jml_krj_lk47 }}</td>
                                    <td>{{ $jml_krj_pr47 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk48 == 0 && $jml_krj_pr48 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[47]->name }}</td>
                                    <td>{{ $jml_krj_lk48 }}</td>
                                    <td>{{ $jml_krj_pr48 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk49 == 0 && $jml_krj_pr49 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[48]->name }}</td>
                                    <td>{{ $jml_krj_lk49 }}</td>
                                    <td>{{ $jml_krj_pr49 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk50 == 0 && $jml_krj_pr50 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[49]->name }}</td>
                                    <td>{{ $jml_krj_lk50 }}</td>
                                    <td>{{ $jml_krj_pr50 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk51 == 0 && $jml_krj_pr51 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[50]->name }}</td>
                                    <td>{{ $jml_krj_lk51 }}</td>
                                    <td>{{ $jml_krj_pr51 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk52 == 0 && $jml_krj_pr52 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[51]->name }}</td>
                                    <td>{{ $jml_krj_lk52 }}</td>
                                    <td>{{ $jml_krj_pr52 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk53 == 0 && $jml_krj_pr53 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[52]->name }}</td>
                                    <td>{{ $jml_krj_lk53 }}</td>
                                    <td>{{ $jml_krj_pr53 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk54 == 0 && $jml_krj_pr54 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[53]->name }}</td>
                                    <td>{{ $jml_krj_lk54 }}</td>
                                    <td>{{ $jml_krj_pr54 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk55 == 0 && $jml_krj_pr55 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[54]->name }}</td>
                                    <td>{{ $jml_krj_lk55 }}</td>
                                    <td>{{ $jml_krj_pr55 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk56 == 0 && $jml_krj_pr56 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[55]->name }}</td>
                                    <td>{{ $jml_krj_lk56 }}</td>
                                    <td>{{ $jml_krj_pr56 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk57 == 0 && $jml_krj_pr57 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[56]->name }}</td>
                                    <td>{{ $jml_krj_lk57 }}</td>
                                    <td>{{ $jml_krj_pr57 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk58 == 0 && $jml_krj_pr58 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[57]->name }}</td>
                                    <td>{{ $jml_krj_lk58 }}</td>
                                    <td>{{ $jml_krj_pr58 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk59 == 0 && $jml_krj_pr59 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[58]->name }}</td>
                                    <td>{{ $jml_krj_lk59 }}</td>
                                    <td>{{ $jml_krj_pr59 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk60 == 0 && $jml_krj_pr60 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[59]->name }}</td>
                                    <td>{{ $jml_krj_lk60 }}</td>
                                    <td>{{ $jml_krj_pr60 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk61 == 0 && $jml_krj_pr61 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[60]->name }}</td>
                                    <td>{{ $jml_krj_lk61 }}</td>
                                    <td>{{ $jml_krj_pr61 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk62 == 0 && $jml_krj_pr62 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[61]->name }}</td>
                                    <td>{{ $jml_krj_lk62 }}</td>
                                    <td>{{ $jml_krj_pr62 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk63 == 0 && $jml_krj_pr63 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[62]->name }}</td>
                                    <td>{{ $jml_krj_lk63 }}</td>
                                    <td>{{ $jml_krj_pr63 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk64 == 0 && $jml_krj_pr64 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[63]->name }}</td>
                                    <td>{{ $jml_krj_lk64 }}</td>
                                    <td>{{ $jml_krj_pr64 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk65 == 0 && $jml_krj_pr65 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[64]->name }}</td>
                                    <td>{{ $jml_krj_lk65 }}</td>
                                    <td>{{ $jml_krj_pr65 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk66 == 0 && $jml_krj_pr66 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[65]->name }}</td>
                                    <td>{{ $jml_krj_lk66 }}</td>
                                    <td>{{ $jml_krj_pr66 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk67 == 0 && $jml_krj_pr67 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[66]->name }}</td>
                                    <td>{{ $jml_krj_lk67 }}</td>
                                    <td>{{ $jml_krj_pr67 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk68 == 0 && $jml_krj_pr68 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[67]->name }}</td>
                                    <td>{{ $jml_krj_lk68 }}</td>
                                    <td>{{ $jml_krj_pr68 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk69 == 0 && $jml_krj_pr69 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[68]->name }}</td>
                                    <td>{{ $jml_krj_lk69 }}</td>
                                    <td>{{ $jml_krj_pr69 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk70 == 0 && $jml_krj_pr70 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[69]->name }}</td>
                                    <td>{{ $jml_krj_lk70 }}</td>
                                    <td>{{ $jml_krj_pr70 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk71 == 0 && $jml_krj_pr71 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[70]->name }}</td>
                                    <td>{{ $jml_krj_lk71 }}</td>
                                    <td>{{ $jml_krj_pr71 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk72 == 0 && $jml_krj_pr72 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[71]->name }}</td>
                                    <td>{{ $jml_krj_lk72 }}</td>
                                    <td>{{ $jml_krj_pr72 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk73 == 0 && $jml_krj_pr73 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[72]->name }}</td>
                                    <td>{{ $jml_krj_lk73 }}</td>
                                    <td>{{ $jml_krj_pr73 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk74 == 0 && $jml_krj_pr74 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[73]->name }}</td>
                                    <td>{{ $jml_krj_lk74 }}</td>
                                    <td>{{ $jml_krj_pr74 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk75 == 0 && $jml_krj_pr75 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[74]->name }}</td>
                                    <td>{{ $jml_krj_lk75 }}</td>
                                    <td>{{ $jml_krj_pr75 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk76 == 0 && $jml_krj_pr76 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[75]->name }}</td>
                                    <td>{{ $jml_krj_lk76 }}</td>
                                    <td>{{ $jml_krj_pr76 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk77 == 0 && $jml_krj_pr77 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[76]->name }}</td>
                                    <td>{{ $jml_krj_lk77 }}</td>
                                    <td>{{ $jml_krj_pr77 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk78 == 0 && $jml_krj_pr78 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[77]->name }}</td>
                                    <td>{{ $jml_krj_lk78 }}</td>
                                    <td>{{ $jml_krj_pr78 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk79 == 0 && $jml_krj_pr79 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[78]->name }}</td>
                                    <td>{{ $jml_krj_lk79 }}</td>
                                    <td>{{ $jml_krj_pr79 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk80 == 0 && $jml_krj_pr80 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[79]->name }}</td>
                                    <td>{{ $jml_krj_lk80 }}</td>
                                    <td>{{ $jml_krj_pr80 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk81 == 0 && $jml_krj_pr81 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[80]->name }}</td>
                                    <td>{{ $jml_krj_lk81 }}</td>
                                    <td>{{ $jml_krj_pr81 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk82 == 0 && $jml_krj_pr82 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[81]->name }}</td>
                                    <td>{{ $jml_krj_lk82 }}</td>
                                    <td>{{ $jml_krj_pr82 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk83 == 0 && $jml_krj_pr83 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[82]->name }}</td>
                                    <td>{{ $jml_krj_lk83 }}</td>
                                    <td>{{ $jml_krj_pr83 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk84 == 0 && $jml_krj_pr84 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[83]->name }}</td>
                                    <td>{{ $jml_krj_lk84 }}</td>
                                    <td>{{ $jml_krj_pr84 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk85 == 0 && $jml_krj_pr85 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[84]->name }}</td>
                                    <td>{{ $jml_krj_lk85 }}</td>
                                    <td>{{ $jml_krj_pr85 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk86 == 0 && $jml_krj_pr86 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[85]->name }}</td>
                                    <td>{{ $jml_krj_lk86 }}</td>
                                    <td>{{ $jml_krj_pr86 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk87 == 0 && $jml_krj_pr87 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[86]->name }}</td>
                                    <td>{{ $jml_krj_lk87 }}</td>
                                    <td>{{ $jml_krj_pr87 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk88 == 0 && $jml_krj_pr88 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[87]->name }}</td>
                                    <td>{{ $jml_krj_lk88 }}</td>
                                    <td>{{ $jml_krj_pr88 }}</td>
                                </tr>
                                @endif
                                @if($jml_krj_lk89 == 0 && $jml_krj_pr89 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $jenispekerjaan_id[88]->name }}</td>
                                    <td>{{ $jml_krj_lk89 }}</td>
                                    <td>{{ $jml_krj_pr89 }}</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        <br>
                        <h3>Agama/Aliran Kepercayaan</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Agama</th>
                                    <th scope="col">Laki-Laki (Orang)</th>
                                    <th scope="col">Perempuan (Orang)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($jml_agm_lk1 == 0 && $jml_agm_pr1 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $agama_id[0]->name }}</td>
                                    <td>{{ $jml_agm_lk1 }}</td>
                                    <td>{{ $jml_agm_pr1 }}</td>
                                </tr>
                                @endif
                                @if($jml_agm_lk2 == 0 && $jml_agm_pr2 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $agama_id[1]->name }}</td>
                                    <td>{{ $jml_agm_lk2 }}</td>
                                    <td>{{ $jml_agm_pr2 }}</td>
                                </tr>
                                @endif
                                @if($jml_agm_lk3 == 0 && $jml_agm_pr3 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $agama_id[2]->name }}</td>
                                    <td>{{ $jml_agm_lk3 }}</td>
                                    <td>{{ $jml_agm_pr3 }}</td>
                                </tr>
                                @endif
                                @if($jml_agm_lk4 == 0 && $jml_agm_pr4 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $agama_id[3]->name }}</td>
                                    <td>{{ $jml_agm_lk4 }}</td>
                                    <td>{{ $jml_agm_pr4 }}</td>
                                </tr>
                                @endif
                                @if($jml_agm_lk5 == 0 && $jml_agm_pr5 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $agama_id[4]->name }}</td>
                                    <td>{{ $jml_agm_lk5 }}</td>
                                    <td>{{ $jml_agm_pr5 }}</td>
                                </tr>
                                @endif
                                @if($jml_agm_lk6 == 0 && $jml_agm_pr6 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $agama_id[5]->name }}</td>
                                    <td>{{ $jml_agm_lk6 }}</td>
                                    <td>{{ $jml_agm_pr6 }}</td>
                                </tr>
                                @endif
                                @if($jml_agm_lk7 == 0 && $jml_agm_pr7 == 0)
                                <tr style="display:none" ;>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $agama_id[6]->name }}</td>
                                    <td>{{ $jml_agm_lk7 }}</td>
                                    <td>{{ $jml_agm_pr7 }}</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </form>
                </div><!-- End Quote Form -->

            </div>

        </div>
    </section><!-- End Get a Quote Section -->

</main><!-- End #main -->
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span>SIKPDK</span>
                </a>
                <p>Sistem Informasi Kependudukan dan Profil Desa Kecamatan Teluk Keramat Kabupaten Sambas Provinsi Kalimantan Barat</p>
                <div class="social-links d-flex mt-4">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 footer-links">
                <h4>Menu</h4>
                <ul>
                    <li><a href="{{ route('landingpageindex') }}">Beranda</a></li>
                    <li><a href="{{ route('landingpagesejarah') }}">Sejarah</a></li>
                    <li><a href="{{ route('landingpageletakgeografis') }}">Letak Geografis</a></li>
                    <li><a href="{{ route('landingpagestrukturpemerintahan') }}">Struktur Pemerintahan</a></li>
                    <li><a href="{{ route('landingpagevisimisi') }}">Visi dan Misi</a></li>
                    <li><a href="{{ route('landingpageprofildesa') }}">Profil Desa</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
                <h4>Alamat</h4>
                <p><?= isset($profilkecamatan->alamat) ? $profilkecamatan->alamat : '' ?><br><br>
                    <strong>Kode Pos: </strong><?= isset($profilkecamatan->kode_pos) ? $profilkecamatan->kode_pos : '' ?><br>
                    <strong>Email: </strong><?= isset($profilkecamatan->email) ? $profilkecamatan->email : '' ?><br>
                    <strong>Telepon: </strong><?= isset($profilkecamatan->telepon) ? $profilkecamatan->telepon : '' ?><br>
                </p>

            </div>

        </div>
    </div>

    <div class="container mt-4">
        <div class="copyright">
            2022 &copy; Copyright <strong><span>SIKPDK</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>

</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('landingpage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('landingpage/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{ asset('landingpage/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{ asset('landingpage/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('landingpage/assets/vendor/aos/aos.js')}}"></script>
<script src="{{ asset('landingpage/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('landingpage/assets/js/main.js')}}"></script>

</body>

</html>
@endsection