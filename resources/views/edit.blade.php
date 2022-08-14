@extends('layouts.backend.utama')
@section('isi')
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">SELAMAT DATANG
                    <br>ADMINISTRATOR
                </h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">MONOGRAFI PROFIL DESA</h4>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    PROFIL DESA
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="form-group row">
                                        <label for="kode_pum" class="col-sm-2 control-label col-form-label">Kode PUM</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="kode_pum" name="kode_pum" value="61.01.02.2031" readonly>
                                        </div>
                                        <label for="name" class="col-sm-2 control-label col-form-label">Desa</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="name" name="name" value="Sekura" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tahun_bentuk" class="col-sm-2 control-label col-form-label">Tahun Pembentukan</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="tahun_bentuk" name="tahun_bentuk" value="2012" readonly>
                                        </div>
                                        <label for="kecamatan" class="col-sm-2 control-label col-form-label">Kecamatan</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="Teluk Keramat" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kabupaten" class="col-sm-2 control-label col-form-label">Kabupaten</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="Sambas" readonly>
                                        </div>
                                        <label for="provinsi" class="col-sm-2 control-label col-form-label">Provinsi</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="provinsi" name="provinsi" value="Kalimantan Barat" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="koordinat_bujur" class="col-sm-2 control-label col-form-label">Koordinat Bujur</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="koordinat_bujur" name="koordinat_bujur" value="125.81 Ha" readonly>
                                        </div>
                                        <label for="koordinat_lintang" class="col-sm-2 control-label col-form-label">Koordinat Lintang</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="koordinat_lintang" name="koordinat_lintang" value="79465" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kepala_desa" class="col-sm-2 control-label col-form-label">Kepala Desa</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="kepala_desa" name="kepala_desa" value="RADEN FATAHILLAH" readonly>
                                        </div>
                                        <label for="nip_kepaladesa" class="col-sm-2 control-label col-form-label">NIP</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="nip_kepaladesa" name="nip_kepaladesa" value="199810282023011001" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    POTENSI UMUM
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="accordion-header text-center mb-3">Batas Wilayah</h5>
                                    <div class="form-group row">
                                        <label for="batas_utara_desa" class="col-sm-2 control-label col-form-label">Batas Utara</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="batas_utara_desa" name="batas_utara_desa" placeholder="Desa">
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="batas_utara_kec" name="batas_utara_kec" placeholder="Kecamatan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="batas_selatan_desa" class="col-sm-2 control-label col-form-label">Batas Selatan</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="batas_selatan_desa" name="batas_selatan_desa" placeholder="Desa">
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="batas_selatan_kec" name="batas_selatan_kec" placeholder="Kecamatan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="batas_timur_desa" class="col-sm-2 control-label col-form-label">Batas Timur</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="batas_timur_desa" name="batas_timur_desa" placeholder="Desa">
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="batas_timur_kec" name="batas_timur_kec" placeholder="Kecamatan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="batas_barat_desa" class="col-sm-2 control-label col-form-label">Batas Barat</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="batas_barat_desa" name="batas_barat_desa" placeholder="Desa">
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="batas_barat_kec" name="batas_barat_kec" placeholder="Kecamatan">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mt-3 mb-3"> Penetapan Batas dan Peta Wilayah</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="penetapan_batas" class="col-sm-2 control-label col-form-label">Penetapan Batas</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="penetapan_batas" name="penetapan_batas" placeholder="Ya/Tidak">
                                        </div>
                                        <label for="peta_wilayah" class="col-sm-2 control-label col-form-label">Peta Wilayah</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="peta_wilayah" name="peta_wilayah" placeholder="Yes/No">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="perdes_no" class="col-sm-2 control-label col-form-label">Perdes No</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="perdes_no" name="perdes_no" placeholder="Perdes No.">
                                        </div>
                                        <label for="perda_no" class="col-sm-2 control-label col-form-label">Perda No</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="perda_no" name="perda_no" placeholder="Perda No.">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    DATA TANAH
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="accordion-header text-center mb-3" id="headingThree">Tanah Sawah (Ha)</h5>
                                    <div class="form-group row">
                                        <label for="sawah_irigasi_teknis" class="col-sm-2 control-label col-form-label">Sawah Irigasi Teknis</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="sawah_irigasi_teknis" name="sawah_irigasi_teknis" placeholder="0.00">
                                        </div>
                                        <label for="sawah_irigasi_sth_teknis" class="col-sm-2 control-label col-form-label">Sawah Irigasi 1/2 Teknis</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="sawah_irigasi_sth_teknis" name="sawah_irigasi_sth_teknis" placeholder="0.00">
                                        </div>
                                        <label for="sawah_tadah_hujan" class="col-sm-2 control-label col-form-label">Sawah Tadah Hujan</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="sawah_tadah_hujan" name="sawah_tadah_hujan" placeholder="0.00">
                                        </div>
                                        <label for="sawah_pasang_surut" class="col-sm-2 control-label col-form-label">Sawah Pasang Surut</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="sawah_pasang_surut" name="sawah_pasang_surut" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mt-3 mb-3"> Tanah Kering (Ha)</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tegal_ladang" class="col-sm-2 control-label col-form-label">Tegal/Ladang</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="tegal_ladang" name="tegal_ladang" placeholder="0.00">
                                        </div>
                                        <label for="pemukiman" class="col-sm-2 control-label col-form-label">Pemukiman</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="pemukiman" name="pemukiman" placeholder="0.00">
                                        </div>
                                        <label for="pekarangan" class="col-sm-2 control-label col-form-label">Pekarangan</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="pekarangan" name="pekarangan" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mt-3 mb-3"> Tanah Basah (Ha)</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanah_rawa" class="col-sm-2 control-label col-form-label">Tanah Rawa</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="tanah_rawa" name="tanah_rawa" placeholder="0.00">
                                        </div>
                                        <label for="pasang_surut" class="col-sm-2 control-label col-form-label">Pasang Surut</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="pasang_surut" name="pasang_surut" placeholder="0.00">
                                        </div>
                                        <label for="lahan_gambut" class="col-sm-2 control-label col-form-label">Lahan Gambut</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="lahan_gambut" name="lahan_gambut" placeholder="0.00">
                                        </div>
                                        <label for="situ_waduk_danau" class="col-sm-2 control-label col-form-label">Situ/Waduk/Danau</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="situ_waduk_danau" name="situ_waduk_danau" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mt-3 mb-3"> Tanah Perkebunan (Ha)</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="perkebunan_rakyat" class="col-sm-2 control-label col-form-label">Perkebunan Rakyat</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="perkebunan_rakyat" name="perkebunan_rakyat" placeholder="0.00">
                                        </div>
                                        <label for="perkebunan_negara" class="col-sm-2 control-label col-form-label">Perkebunan Negara</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="perkebunan_negara" name="perkebunan_negara" placeholder="0.00">
                                        </div>
                                        <label for="perkebunan_swasta" class="col-sm-2 control-label col-form-label">Perkebunan Swasta</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="perkebunan_swasta" name="perkebunan_swasta" placeholder="0.00">
                                        </div>
                                        <label for="perkebunan_perorangan" class="col-sm-2 control-label col-form-label">Perkebunan Perorangan</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="perkebunan_perorangan" name="perkebunan_perorangan" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mt-3 mb-3"> Tanah Fasilitas Umum (Ha)</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 control-label col-form-label">Kas Desa/Kelurahan:</label>
                                        <label for="tanah_bengkok" class="col-sm-2 control-label col-form-label">Tanah Bengkok</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="tanah_bengkok" name="tanah_bengkok" placeholder="0.00">
                                        </div>
                                        <label for="tanah_titi_sara" class="col-sm-2 control-label col-form-label">Tanah Titi Sara</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="tanah_titi_sara" name="tanah_titi_sara" placeholder="0.00">
                                        </div>
                                        <label for="kebun_desa" class="col-sm-2 control-label col-form-label">Kebun Desa</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="kebun_desa" name="kebun_desa" placeholder="0.00">
                                        </div>
                                        <label for="sawah_desa" class="col-sm-2 control-label col-form-label">Sawah Desa</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="sawah_desa" name="sawah_desa" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lapangan_olahraga" class="col-sm-2 control-label col-form-label">Lapangan Olahraga</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="lapangan_olahraga" name="lapangan_olahraga" placeholder="0.00">
                                        </div>
                                        <label for="perkantoran_pemerintah" class="col-sm-2 control-label col-form-label">Perkantoran Pemerintah</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="perkantoran_pemerintah" name="perkantoran_pemerintah" placeholder="0.00">
                                        </div>
                                        <label for="ruang_publik" class="col-sm-2 control-label col-form-label">Ruang Publik/Taman</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="ruang_publik" name="ruang_publik" placeholder="0.00">
                                        </div>
                                        <label for="tempat_pemakaman_desa_umum" class="col-sm-2 control-label col-form-label">Pemakaman Desa/Umum</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="tempat_pemakaman_desa_umum" name="tempat_pemakaman_desa_umum" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pembuangan_sampah" class="col-sm-2 control-label col-form-label">Pembuangan Sampah</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="pembuangan_sampah" name="pembuangan_sampah" placeholder="0.00">
                                        </div>
                                        <label for="bangunan_sekolah_pt" class="col-sm-2 control-label col-form-label">Bangunan Sekolah/PT</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="bangunan_sekolah_pt" name="bangunan_sekolah_pt" placeholder="0.00">
                                        </div>
                                        <label for="pertokoan" class="col-sm-2 control-label col-form-label">Pertokoan</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="pertokoan" name="pertokoan" placeholder="0.00">
                                        </div>
                                        <label for="fasilitas_pasar" class="col-sm-2 control-label col-form-label">Fasilitas Pasar</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="fasilitas_pasar" name="fasilitas_pasar" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="terminal" class="col-sm-2 control-label col-form-label">Terminal</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="terminal" name="terminal" placeholder="0.00">
                                        </div>
                                        <label for="jalan" class="col-sm-2 control-label col-form-label">Jalan</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jalan" name="jalan" placeholder="0.00">
                                        </div>
                                        <label for="daerah_tangkapan_air" class="col-sm-2 control-label col-form-label">Daerah Tangkapan Air</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="daerah_tangkapan_air" name="daerah_tangkapan_air" placeholder="0.00">
                                        </div>
                                        <label for="usaha_perikanan" class="col-sm-2 control-label col-form-label">Usaha Perikanan</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="usaha_perikanan" name="usaha_perikanan" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sutet_aliranlistrik" class="col-sm-3 control-label col-form-label">Sutet/Aliran Listrik Tegangan Tinggi</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="sutet_aliranlistrik" name="sutet_aliranlistrik" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mt-3 mb-3"> Tanah Hutan (Ha)</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 control-label col-form-label">Hutan Produksi:</label>
                                        <label for="hutan_produksi_tetap" class="col-sm-2 control-label col-form-label">Hutan Produksi Tetap</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="hutan_produksi_tetap" name="hutan_produksi_tetap" placeholder="0.00">
                                        </div>
                                        <label for="hutan_terbatas" class="col-sm-2 control-label col-form-label">Hutan Terbatas</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="hutan_terbatas" name="hutan_terbatas" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hutan_konservasi" class="col-sm-2 control-label col-form-label">Hutan Konservasi</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="hutan_konservasi" name="hutan_konservasi" placeholder="0.00">
                                        </div>
                                        <label for="hutan_adat" class="col-sm-2 control-label col-form-label">Hutan Adat</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="hutan_adat" name="hutan_adat" placeholder="0.00">
                                        </div>
                                        <label for="hutan_asli" class="col-sm-2 control-label col-form-label">Hutan Asli</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="hutan_asli" name="hutan_asli" placeholder="0.00">
                                        </div>
                                        <label for="hutan_sekunder" class="col-sm-2 control-label col-form-label">Hutan Sekunder</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="hutan_sekunder" name="hutan_sekunder" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hutan_buatan" class="col-sm-2 control-label col-form-label">Hutan Buatan</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="hutan_buatan" name="hutan_buatan" placeholder="0.00">
                                        </div>
                                        <label for="hutan_mangrove" class="col-sm-2 control-label col-form-label">Hutan Mangrove</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="hutan_mangrove" name="hutan_mangrove" placeholder="0.00">
                                        </div>
                                        <label for="hutan_rakyat" class="col-sm-2 control-label col-form-label">Hutan Rakyat</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="hutan_rakyat" name="hutan_rakyat" placeholder="0.00">
                                        </div>
                                        <label for="hutan_lindung" class="col-sm-2 control-label col-form-label">Hutan Lindung</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="hutan_lindung" name="hutan_lindung" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 control-label col-form-label">Hutan Suaka:</label>
                                        <label for="suaka_alam" class="col-sm-2 control-label col-form-label">Suaka Alam</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="suaka_alam" name="suaka_alam" placeholder="0.00">
                                        </div>
                                        <label for="suaka_margasatwa" class="col-sm-2 control-label col-form-label">Suaka Margasatwa</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="suaka_margasatwa" name="suaka_margasatwa" placeholder="0.00">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    IKLIM, JENIS & KESUBURAN TANAH
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="accordion-header text-center mb-3">Batas Wilayah</h5>
                                    <div class="form-group row">
                                        <label for="curah_hujan" class="col-sm-2 control-label col-form-label">Curah Hujan</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="curah_hujan" name="curah_hujan" placeholder="0.00">
                                        </div>
                                        <label for="jumlah_bulan_hujan" class="col-sm-2 control-label col-form-label">Jumlah Bulan Hujan</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_bulan_hujan" name="jumlah_bulan_hujan" placeholder="0.00">
                                        </div>
                                        <label for="kelembapan" class="col-sm-2 control-label col-form-label">Kelembapan</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="kelembapan" name="kelembapan" placeholder="0.00">
                                        </div>
                                        <label for="suhu_rata_rata_harian" class="col-sm-2 control-label col-form-label">Suhu Rata-Rata Harian</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="suhu_rata_rata_harian" name="suhu_rata_rata_harian" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tinggi_tempat_permukaan_laut" class="col-sm-2 control-label col-form-label">Tinggi Tempat dari Permukaan Laut</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="tinggi_tempat_permukaan_laut" name="tinggi_tempat_permukaan_laut" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mt-3 mb-3"> Jenis dan Kesuburan Tanah</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="warna_tanah" class="col-sm-2 control-label col-form-label">Warna Tanah</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="warna_tanah" name="warna_tanah" placeholder="0.00">
                                        </div>
                                        <label for="tekstur_tanah" class="col-sm-2 control-label col-form-label">Tekstur Tanah</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="tekstur_tanah" name="tekstur_tanah" placeholder="0.00">
                                        </div>
                                        <label for="tk_kemiringan_tanah" class="col-sm-2 control-label col-form-label">Tingkat Kemiringan Tanah</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="tk_kemiringan_tanah" name="tk_kemiringan_tanah" placeholder="0.00">
                                        </div>
                                        <label for="lahan_kritis" class="col-sm-2 control-label col-form-label">Lahan Kritis</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="lahan_kritis" name="lahan_kritis" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lahan_terlantar" class="col-sm-2 control-label col-form-label">Lahan Terlantar</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="lahan_terlantar" name="lahan_terlantar" placeholder="0.00">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    TOPOGRAFI, LETAK, ORBITASI
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="accordion-header text-center mb-3">Bentangan Wilayah</h5>
                                    <div class="form-group row">
                                        <label for="daratan_rendah" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Daratan Rendah</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="daratan_rendah" name="daratan_rendah" placeholder="0.00">
                                        </div>
                                        <label for="berbukit-bukit" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Berbukit-bukit</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="berbukit-bukit" name="berbukit-bukit" placeholder="0.00">
                                        </div>
                                        <label for="daratan_tinggi" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Daratan Tinggi/Pegunungan</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="daratan_tinggi" name="daratan_tinggi" placeholder="0.00">
                                        </div>
                                        <label for="lereng_gunung" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Lereng Gunung</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="lereng_gunung" name="lereng_gunung" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tepi_pantai" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Tepi Pantai/Pesisir</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="tepi_pantai" name="tepi_pantai" placeholder="0.00">
                                        </div>
                                        <label for="kawasan_rawa" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Kawasan Rawa</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="kawasan_rawa" name="kawasan_rawa" placeholder="0.00">
                                        </div>
                                        <label for="kawasan_gambut" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Kawasan Gambut</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="kawasan_gambut" name="kawasan_gambut" placeholder="0.00">
                                        </div>
                                        <label for="aliran_sungai" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Aliran Sungai</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="aliran_sungai" name="aliran_sungai" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bantaran_sungai" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Bantaran Sungai</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="bantaran_sungai" name="bantaran_sungai" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mt-3 mb-3">Letak</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kawasan_perkantoran" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Kawasan Perkantoran</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="kawasan_perkantoran" name="kawasan_perkantoran" placeholder="0.00">
                                        </div>
                                        <label for="kawasan_pertokoan" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Kawasan Pertokoan Bisnis</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="kawasan_pertokoan" name="kawasan_pertokoan" placeholder="0.00">
                                        </div>
                                        <label for="kawasan_campuran" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Kawasan Campuran</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="kawasan_campuran" name="kawasan_campuran" placeholder="0.00">
                                        </div>
                                        <label for="kawasan_industri" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Kawasan Industri</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="kawasan_industri" name="kawasan_industri" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kepulauan" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Kepulauan</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="kepulauan" name="kepulauan" placeholder="0.00">
                                        </div>
                                        <label for="pantai_pesisir" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Pantai Pesisir</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="pantai_pesisir" name="pantai_pesisir" placeholder="0.00">
                                        </div>
                                        <label for="kawasan_hutan" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Kawasan Hutan</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="kawasan_hutan" name="kawasan_hutan" placeholder="0.00">
                                        </div>
                                        <label for="taman_suaka" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Taman Suaka</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="taman_suaka" name="taman_suaka" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kawasan_wisata" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Kawasan Wisata</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="kawasan_wisata" name="kawasan_wisata" placeholder="0.00">
                                        </div>
                                        <label for="batas_negara_lain" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Perbatasan dengan Negara Lain</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="batas_negara_lain" name="batas_negara_lain" placeholder="0.00">
                                        </div>
                                        <label for="batas_provinsi_lain" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Perbatasan dengan Provinsi Lain</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="batas_provinsi_lain" name="batas_provinsi_lain" placeholder="0.00">
                                        </div>
                                        <label for="batas_kabupaten_lain" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Perbatasan dengan Kabupaten Lain</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="batas_kabupaten_lain" name="batas_kabupaten_lain" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="batar_antar_kecamatan" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Perbatasan Antar Kecamatan Lain</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="batar_antar_kecamatan" name="batar_antar_kecamatan" placeholder="0.00">
                                        </div>
                                        <label for="das_bantaransungai" class="col-sm-2 control-label col-form-label">Desa/Kelurahan DAS/Bantaran Sungai</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="das_bantaransungai" name="das_bantaransungai" placeholder="0.00">
                                        </div>
                                        <label for="rawan_banjir" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Rawan Banjir</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="rawan_banjir" name="rawan_banjir" placeholder="0.00">
                                        </div>
                                        <label for="bebas_banjir" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Bebas Banjir</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="bebas_banjir" name="bebas_banjir" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="potensial_tsunami" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Potensial Tsunami</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="potensial_tsunami" name="potensial_tsunami" placeholder="0.00">
                                        </div>
                                        <label for="rawan_jalur_gempa" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Rawan Jalur Gempa Bumi</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="rawan_jalur_gempa" name="rawan_jalur_gempa" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mt-3 mb-3">Orbitasi</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jarak_kecamatan" class="col-sm-2 control-label col-form-label">Jarak ke Ibu Kota Kecamatan (Km) </label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jarak_kecamatan" name="jarak_kecamatan" placeholder="0.00">
                                        </div>
                                        <label for="waktu_kecamatan_motor" class="col-sm-2 control-label col-form-label">Lama Jarak Tempuh ke Ibukota Kecamatan dengan Kendaraan Bermotor (Jam)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="waktu_kecamatan_motor" name="waktu_kecamatan_motor" placeholder="0.00">
                                        </div>
                                        <label for="waktu_kecamatan_nonmotor" class="col-sm-2 control-label col-form-label">Lama Jarak Tempuh ke Ibukota Kecamatan dengan Berjalan Kaki atau Kendaraan Non Bermotor (Jam)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="waktu_kecamatan_nonmotor" name="waktu_kecamatan_nonmotor" placeholder="0.00">
                                        </div>
                                        <label for="jumlah_kendaraanumum_kecamatan" class="col-sm-2 control-label col-form-label">Jumlah Kendaraan Umum ke Ibu Kota Kecamatan (Unit)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_kendaraanumum_kecamatan" name="jumlah_kendaraanumum_kecamatan" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jarak_kabupaten" class="col-sm-2 control-label col-form-label">Jarak ke Ibu Kota Kabupaten/Kota (Km) </label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jarak_kabupaten" name="jarak_kabupaten" placeholder="0.00">
                                        </div>
                                        <label for="waktu_kabupaten_motor" class="col-sm-2 control-label col-form-label">Lama Jarak Tempuh ke Ibukota Kabupaten dengan Kendaraan Bermotor (Jam)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="waktu_kabupaten_motor" name="waktu_kabupaten_motor" placeholder="0.00">
                                        </div>
                                        <label for="waktu_kabupaten_nonmotor" class="col-sm-2 control-label col-form-label">Lama Jarak Tempuh ke Ibukota Kabupaten dengan Berjalan Kaki atau Kendaraan Non Bermotor (Jam)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="waktu_kabupaten_nonmotor" name="waktu_kabupaten_nonmotor" placeholder="0.00">
                                        </div>
                                        <label for="jumlah_kendaraanumum_kabupaten" class="col-sm-2 control-label col-form-label">Jumlah Kendaraan Umum ke Ibu Kota kabupaten/Kota (Unit)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_kendaraanumum_kabupaten" name="jumlah_kendaraanumum_kabupaten" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jarak_provinsi" class="col-sm-2 control-label col-form-label">Jarak ke Ibu Kota Provinsi (Km) </label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jarak_provinsi" name="jarak_provinsi" placeholder="0.00">
                                        </div>
                                        <label for="waktu_provinsi_motor" class="col-sm-2 control-label col-form-label">Lama Jarak Tempuh ke Ibukota Provinsi dengan Kendaraan Bermotor (Jam)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="waktu_provinsi_motor" name="waktu_provinsi_motor" placeholder="0.00">
                                        </div>
                                        <label for="waktu_provinsi_nonmotor" class="col-sm-2 control-label col-form-label">Lama Jarak Tempuh ke Ibukota Provinsi dengan Berjalan Kaki atau Kendaraan Non Bermotor (Jam)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="waktu_provinsi_nonmotor" name="waktu_provinsi_nonmotor" placeholder="0.00">
                                        </div>
                                        <label for="jumlah_kendaraanumum_provinsi" class="col-sm-2 control-label col-form-label">Jumlah Kendaraan Umum ke Ibu Kota Provinsi (Unit)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_kendaraanumum_provinsi" name="jumlah_kendaraanumum_provinsi" placeholder="0.00">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    POTENSI PERTANIAN
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card">
                                        <h5 class="accordion-header text-center mb-3">Kepemilikan Lahan</h5>
                                        <h5 class="mb-3">A. PERTANIAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Jenis Lahan</th>
                                                        <th>
                                                            <5 Ha (KK)</th>
                                                        <th>5-10 Ha (KK)</th>
                                                        <th>10–50 Ha (KK)</th>
                                                        <th>50–100 Ha (KK) </th>
                                                        <th>100-500 Ha (KK) </th>
                                                        <th>500-1000 Ha (KK) </th>
                                                        <th>>1000 Ha(KK)</th>
                                                        <th>Memiliki Lahan (KK)</th>
                                                        <th>Tidak Memiliki Lahan (KK)</th>
                                                        <th>Total Keluarga Petani (KK)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tanaman Pangan</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanaman Buah-Buahan</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanaman Perkebunan</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="border-top">
                                            <h5 class="mb-3 mt-3">B. KEHUTANAN</h5>
                                            <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th class="align-middle">Milik Negara (Ha)</th>
                                                        <th class="align-middle">Perhutani/Instansi Sektoral (Ha)</th>
                                                        <th class="align-middle">Milik Adat/Ulayat (Ha)</th>
                                                        <th class="align-middle">Milik Masyarakat Perorangan (Ha)</th>
                                                        <th class="align-middle">Total Luas Hutan (Ha)</th>
                                                        <th class="align-middle">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tanaman Pangan</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="border-top">
                                            <h5 class="accordion-header text-center mb-3 mt-3">Produksi Pertanian dan Perkebunan</h5>
                                            <h5 class="mb-3 mt-3">LUAS TANAMAN PANGAN MENURUT KOMODITAS PADA TAHUN INI</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="align-middle">Nama Komoditas</th>
                                                        <th class="align-middle">Luas (Ha)</th>
                                                        <th class="align-middle">Hasil Panen (Ton/Ha)</th>
                                                        <th class="align-middle">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tanaman Pangan</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="border-top">
                                            <h5 class="mb-3 mt-3">JENIS KOMODITAS BUAH-BUAHAN YANG DIBUDIDAYAKAN</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="align-middle">Nama Komoditas</th>
                                                        <th class="align-middle">Luas (Ha)</th>
                                                        <th class="align-middle">Hasil Panen (Ton/Ha)</th>
                                                        <th class="align-middle">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tanaman Pangan</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="border-top">
                                            <h5 class="mb-3 mt-3">PEMASARAN HASIL TANAMAN PANGAN DAN TANAMAN BUAH-BUAHAN</h5>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jual_konsumen_pangan_buah" class="col-sm-2 control-label col-form-label">Dijual Langsung ke Konsumen</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_konsumen_pangan_buah" name="jual_konsumen_pangan_buah" placeholder="0.00">
                                            </div>
                                            <label for="jual_pasar_pangan_buah" class="col-sm-2 control-label col-form-label">Dijual ke Pasar</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_pasar_pangan_buah" name="jual_pasar_pangan_buah" placeholder="0.00">
                                            </div>
                                            <label for="jual_kud_pangan_buah" class="col-sm-2 control-label col-form-label">Dijual Melalui KUD</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_kud_pangan_buah" name="jual_kud_pangan_buah" placeholder="0.00">
                                            </div>
                                            <label for="jual_tengkulak_pangan_buah" class="col-sm-2 control-label col-form-label">Dijual Melalui Tengkulak</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_tengkulak_pangan_buah" name="jual_tengkulak_pangan_buah" placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jual_pengecer_pangan_buah" class="col-sm-2 control-label col-form-label">Dijual melalui pengecer</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_pengecer_pangan_buah" name="jual_pengecer_pangan_buah" placeholder="0.00">
                                            </div>
                                            <label for="jual_lumbung_pangan_buah" class="col-sm-2 control-label col-form-label">Dijual ke Lumbung Desa/Kel</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_lumbung_pangan_buah" name="jual_lumbung_pangan_buah" placeholder="0.00">
                                            </div>
                                            <label for="tidak_jual_pangan_buah" class="col-sm-2 control-label col-form-label">Tidak Dijual</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="tidak_jual_pangan_buah" name="tidak_jual_pangan_buah" placeholder="0.00">
                                            </div>
                                            <div class="my-3">
                                                <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                        <div class="border-top">
                                            <h5 class="mb-3 mt-3">TANAMAN APOTIK HIDUP DAN SEJENISNYA</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="align-middle">Jenis Tanaman</th>
                                                        <th class="align-middle">Luas (Ha)</th>
                                                        <th class="align-middle">Hasil Panen (Ton/Ha)</th>
                                                        <th class="align-middle">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tanaman Pangan</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="border-top">
                                            <h5 class="mb-3 mt-3">LUAS DAN HASIL PERKEBUNAN MENURUT JENIS KOMODITAS</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2" class="align-middle">Jenis Komoditas</th>
                                                        <th colspan="2" class="align-middle">Swasta/Negara</th>
                                                        <th colspan="2" class="align-middle">Rakyat</th>
                                                        <th rowspan="2" class="align-middle">Aksi</th>
                                                    </tr>
                                                    <th class="align-middle">Luas (Ha)</th>
                                                    <th class="align-middle">Hasil(Ton/Ha)</th>
                                                    <th class="align-middle">Luas (Ha)</th>
                                                    <th class="align-middle">Hasil(Ton/Ha)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tanaman Pangan</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td>None</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="border-top">
                                            <h5 class="mb-3 mt-3">PEMASARAN HASIL PERKEBUNAN</h5>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jual_konsumen_kebun" class="col-sm-2 control-label col-form-label">Dijual Langsung ke Konsumen</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_konsumen_kebun" name="jual_konsumen_kebun" placeholder="0.00">
                                            </div>
                                            <label for="jual_pasar_kebun" class="col-sm-2 control-label col-form-label">Dijual ke Pasar</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_pasar_kebun" name="jual_pasar_kebun" placeholder="0.00">
                                            </div>
                                            <label for="jual_kud_kebun" class="col-sm-2 control-label col-form-label">Dijual Melalui KUD</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_kud_kebun" name="jual_kud_kebun" placeholder="0.00">
                                            </div>
                                            <label for="jual_tengkulak_kebun" class="col-sm-2 control-label col-form-label">Dijual Melalui Tengkulak</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_tengkulak_kebun" name="jual_tengkulak_kebun" placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jual_pengecer_kebun" class="col-sm-2 control-label col-form-label">Dijual melalui pengecer</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_pengecer_kebun" name="jual_pengecer_kebun" placeholder="0.00">
                                            </div>
                                            <label for="jual_lumbung_kebun" class="col-sm-2 control-label col-form-label">Dijual ke Lumbung Desa/Kel</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_lumbung_kebun" name="jual_lumbung_kebun" placeholder="0.00">
                                            </div>
                                            <label for="tidak_jual_kebun" class="col-sm-2 control-label col-form-label">Tidak Dijual</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="tidak_jual_kebun" name="tidak_jual_kebun" placeholder="0.00">
                                            </div>
                                            <div class="my-3">
                                                <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Kehutanan</h5>
                                    </div>
                                    <h5 class="mb-3 mt-3">HASIL HUTAN</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Nama Komoditas</th>
                                                    <th class="align-middle">Hasil Panen</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">KONDISI HUTAN</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Jenis Hutan</th>
                                                    <th class="align-middle">Kondisi Baik (Ha)</th>
                                                    <th class="align-middle">Kondisi Rusak (Ha)</th>
                                                    <th class="align-middle">Total</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">DAMPAK YANG TIMBUL DARI PENGOLAHAN HUTAN</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Jenis Dampak</th>
                                                    <th class="align-middle">Dampak</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">MEKANISME PEMASARAN HASIL HUTAN</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jual_konsumen_hutan" class="col-sm-2 control-label col-form-label">Dijual Langsung ke Konsumen</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_konsumen_hutan" name="jual_konsumen_hutan" placeholder="0.00">
                                        </div>
                                        <label for="jual_pasar_hutan" class="col-sm-2 control-label col-form-label">Dijual ke Pasar</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_pasar_hutan" name="jual_pasar_hutan" placeholder="0.00">
                                        </div>
                                        <label for="jual_kud_hutan" class="col-sm-2 control-label col-form-label">Dijual Melalui KUD</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_kud_hutan" name="jual_kud_hutan" placeholder="0.00">
                                        </div>
                                        <label for="jual_tengkulak_hutan" class="col-sm-2 control-label col-form-label">Dijual Melalui Tengkulak</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_tengkulak_hutan" name="jual_tengkulak_hutan" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jual_pengecer_hutan" class="col-sm-2 control-label col-form-label">Dijual melalui pengecer</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_pengecer_hutan" name="jual_pengecer_hutan" placeholder="0.00">
                                        </div>
                                        <label for="jual_lumbung_hutan" class="col-sm-2 control-label col-form-label">Dijual ke Lumbung Desa/Kel</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_lumbung_hutan" name="jual_lumbung_hutan" placeholder="0.00">
                                        </div>
                                        <label for="tidak_jual_hutan" class="col-sm-2 control-label col-form-label">Tidak Dijual</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="tidak_jual_hutan" name="tidak_jual_hutan" placeholder="0.00">
                                        </div>
                                        <div class="my-3">
                                            <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Peternakan</h5>
                                    </div>
                                    <h5 class="mb-3 mt-3">JENIS POPULASI TERNAK</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Jenis Ternak</th>
                                                    <th class="align-middle">Jumlah Pemilik (Orang)</th>
                                                    <th class="align-middle">Perkiraan Jumlah Populasi (Ekor)</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PRODUKSI PETERNAKAN</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Jenis Produksi</th>
                                                    <th class="align-middle">Hasil Produksi</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">KETERSEDIAAN HIJAUAN PAKAN TERNAK</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ls_tanaman_pakan_ternak" class="col-sm-2 control-label col-form-label">Luas tanaman pakan ternak (rumput gajah, dll) (Ha)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="ls_tanaman_pakan_ternak" name="ls_tanaman_pakan_ternak" placeholder="0.00">
                                        </div>
                                        <label for="produksi_hijauan_pakan_ternak" class="col-sm-2 control-label col-form-label">Produksi hijauan makanan ternak (Ton/ha)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="produksi_hijauan_pakan_ternak" name="produksi_hijauan_pakan_ternak" placeholder="0.00">
                                        </div>
                                        <label for="ls_lahan_gembalaan" class="col-sm-2 control-label col-form-label">Luas lahan gembalaan (Ha)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="ls_lahan_gembalaan" name="ls_lahan_gembalaan" placeholder="0.00">
                                        </div>
                                        <label for="pasok_dari_luardesa" class="col-sm-2 control-label col-form-label">Dipasok dari Luar Desa/Kelurahan (Ton)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="pasok_dari_luardesa" name="pasok_dari_luardesa" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="subsidi_dinas" class="col-sm-2 control-label col-form-label">Disubsidi Dinas (Ton)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="subsidi_dinas" name="subsidi_dinas" placeholder="0.00">
                                        </div>
                                        <label for="lainnya_ketersediaan_hijauan" class="col-sm-2 control-label col-form-label">Lainnya (Ton)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="lainnya_ketersediaan_hijauan" name="lainnya_ketersediaan_hijauan" placeholder="0.00">
                                        </div>
                                        <div class="my-3">
                                            <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PEMILIK USAHA PENGOLAHAN HASIL TERNAK</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Jenis Usaha</th>
                                                    <th class="align-middle">Jumlah Pemilik Usaha (Orang)</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PEMASARAN HASIL TERNAK</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jual_konsumen_ternak" class="col-sm-2 control-label col-form-label">Dijual Langsung ke Konsumen</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_konsumen_ternak" name="jual_konsumen_ternak" placeholder="0.00">
                                        </div>
                                        <label for="jual_pasar_ternak" class="col-sm-2 control-label col-form-label">Dijual ke Pasar</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_pasar_ternak" name="jual_pasar_ternak" placeholder="0.00">
                                        </div>
                                        <label for="jual_kud_ternak" class="col-sm-2 control-label col-form-label">Dijual Melalui KUD</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_kud_ternak" name="jual_kud_ternak" placeholder="0.00">
                                        </div>
                                        <label for="jual_tengkulak_ternak" class="col-sm-2 control-label col-form-label">Dijual Melalui Tengkulak</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_tengkulak_ternak" name="jual_tengkulak_ternak" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jual_pengecer_ternak" class="col-sm-2 control-label col-form-label">Dijual melalui pengecer</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_pengecer_ternak" name="jual_pengecer_ternak" placeholder="0.00">
                                        </div>
                                        <label for="jual_lumbung_ternak" class="col-sm-2 control-label col-form-label">Dijual ke Lumbung Desa/Kel</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_lumbung_ternak" name="jual_lumbung_ternak" placeholder="0.00">
                                        </div>
                                        <label for="tidak_jual_ternak" class="col-sm-2 control-label col-form-label">Tidak Dijual</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="tidak_jual_ternak" name="tidak_jual_ternak" placeholder="0.00">
                                        </div>
                                        <div class="my-3">
                                            <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">KETERSEDIAAN LAHAN PEMELIHARAAN TERNAK/PADANG PENGEMBALAAN</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="milik_masyarakat_ternak" class="col-sm-2 control-label col-form-label">Milik Masyarakat Umum (Ha)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="milik_masyarakat_ternak" name="milik_masyarakat_ternak" placeholder="0.00">
                                        </div>
                                        <label for="milik_perusahaan_ternak" class="col-sm-2 control-label col-form-label">Milik Perusahaan Peternakan (ranch) (Ha)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="milik_perusahaan_ternak" name="milik_perusahaan_ternak" placeholder="0.00">
                                        </div>
                                        <label for="milik_perorangan_ternak" class="col-sm-2 control-label col-form-label">Milik Perorangan (Ha)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="milik_perorangan_ternak" name="milik_perorangan_ternak" placeholder="0.00">
                                        </div>
                                        <label for="sewa_pakai_ternak" class="col-sm-2 control-label col-form-label">Sewa Pakai (Ha)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="sewa_pakai_ternak" name="sewa_pakai_ternak" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="milik_pemerintah_ternak" class="col-sm-2 control-label col-form-label">Milik Pemerintah (Ha)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="milik_pemerintah_ternak" name="milik_pemerintah_ternak" placeholder="0.00">
                                        </div>
                                        <label for="milik_masyarakat_adat_ternak" class="col-sm-2 control-label col-form-label">Milik Masyarakat Adat (Ha)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="milik_masyarakat_adat_ternak" name="milik_masyarakat_adat_ternak" placeholder="0.00">
                                        </div>
                                        <label for="lainnya_sedia_lahan_ternak" class="col-sm-2 control-label col-form-label">Lainnya (Ha)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="lainnya_sedia_lahan_ternak" name="lainnya_sedia_lahan_ternak" placeholder="0.00">
                                        </div>
                                        <div class="my-3">
                                            <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Perikanan</h5>
                                    </div>
                                    <h5 class="mb-3 mt-3">JENIS DAN ALAT PRODUKSI BUDIDAYA IKAN LAUT DAN PAYAU</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Jenis Alat</th>
                                                    <th class="align-middle">Jumlah</th>
                                                    <th class="align-middle">Hasil Produksi (Ton/Tahun)</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">JENIS DAN SARANA PRODUKSI BUDIDAYA IKAN AIR TAWAR</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Jenis Sarana</th>
                                                    <th class="align-middle">Jumlah</th>
                                                    <th class="align-middle">Hasil Produksi (Ton/Tahun)</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">JENIS IKAN DAN PRODUKSI</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Jenis Ikan</th>
                                                    <th class="align-middle">Hasil Produksi (Ton/Tahun)</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PEMASARAN HASIL PERIKANAN</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jual_konsumen_perikanan" class="col-sm-2 control-label col-form-label">Dijual Langsung ke Konsumen</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_konsumen_perikanan" name="jual_konsumen_perikanan" placeholder="0.00">
                                        </div>
                                        <label for="jual_pasar_perikanan" class="col-sm-2 control-label col-form-label">Dijual ke Pasar</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_pasar_perikanan" name="jual_pasar_perikanan" placeholder="0.00">
                                        </div>
                                        <label for="jual_kud_perikanan" class="col-sm-2 control-label col-form-label">Dijual Melalui KUD</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_kud_perikanan" name="jual_kud_perikanan" placeholder="0.00">
                                        </div>
                                        <label for="jual_tengkulak_perikanan" class="col-sm-2 control-label col-form-label">Dijual Melalui Tengkulak</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_tengkulak_perikanan" name="jual_tengkulak_perikanan" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jual_pengecer_perikanan" class="col-sm-2 control-label col-form-label">Dijual melalui pengecer</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_pengecer_perikanan" name="jual_pengecer_perikanan" placeholder="0.00">
                                        </div>
                                        <label for="jual_lumbung_perikanan" class="col-sm-2 control-label col-form-label">Dijual ke Lumbung Desa/Kel</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_lumbung_perikanan" name="jual_lumbung_perikanan" placeholder="0.00">
                                        </div>
                                        <label for="tidak_jual_perikanan" class="col-sm-2 control-label col-form-label">Tidak Dijual</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="tidak_jual_perikanan" name="tidak_jual_perikanan" placeholder="0.00">
                                        </div>
                                        <div class="my-3">
                                            <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Bahan Galian</h5>
                                    </div>
                                    <h5 class="mb-3 mt-3">JENIS, DEPOSIT DAN KEPEMILIKAN BAHAN GALIAN</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Jenis Bahan Galian</th>
                                                    <th class="align-middle">Keberadaan</th>
                                                    <th class="align-middle">Skala Produksi</th>
                                                    <th class="align-middle">Kepemilikan</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PEMASARAN HASIL GALIAN</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jual_konsumen_galian" class="col-sm-2 control-label col-form-label">Dijual Langsung ke Konsumen</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_konsumen_galian" name="jual_konsumen_galian" placeholder="0.00">
                                        </div>
                                        <label for="jual_pasar_galian" class="col-sm-2 control-label col-form-label">Dijual ke Pasar</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_pasar_galian" name="jual_pasar_galian" placeholder="0.00">
                                        </div>
                                        <label for="jual_kud_galian" class="col-sm-2 control-label col-form-label">Dijual Melalui KUD</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_kud_galian" name="jual_kud_galian" placeholder="0.00">
                                        </div>
                                        <label for="jual_tengkulak_galian" class="col-sm-2 control-label col-form-label">Dijual Melalui Tengkulak</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_tengkulak_galian" name="jual_tengkulak_galian" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jual_pengecer_galian" class="col-sm-2 control-label col-form-label">Dijual melalui pengecer</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_pengecer_galian" name="jual_pengecer_galian" placeholder="0.00">
                                        </div>
                                        <label for="jual_perusahaan_galian" class="col-sm-2 control-label col-form-label">Dijual ke Perusahaan</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_perusahaan_galian" name="jual_perusahaan_galian" placeholder="0.00">
                                        </div>
                                        <label for="jual_lumbung_galian" class="col-sm-2 control-label col-form-label">Dijual ke Lumbung Desa/Kel</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_lumbung_galian" name="jual_lumbung_galian" placeholder="0.00">
                                        </div>
                                        <label for="tidak_jual_galian" class="col-sm-2 control-label col-form-label">Tidak Dijual</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="tidak_jual_galian" name="tidak_jual_galian" placeholder="0.00">
                                        </div>
                                        <div class="my-3">
                                            <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Sumber Daya Air</h5>
                                    </div>
                                    <h5 class="mb-3 mt-3">POTENSI AIR DAN SUMBER DAYA AIR</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Jenis Sumber Air</th>
                                                    <th class="align-middle">Debit/Volume</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">SUMBER DAN KUALITAS AIR BERSIH</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Jenis</th>
                                                    <th class="align-middle">Jumlah</th>
                                                    <th class="align-middle">Kondisi</th>
                                                    <th class="align-middle">Pemanfaatan (KK)</th>
                                                    <th class="align-middle">Kualitas</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">SUNGAI</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_sungai" class="col-sm-2 control-label col-form-label">Jumlah Sungai</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_sungai" name="jumlah_sungai" placeholder="0.00">
                                        </div>
                                        <label for="tercemar_sungai" class="col-sm-2 control-label col-form-label">Tercemar</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="tercemar_sungai" name="tercemar_sungai" placeholder="0.00">
                                        </div>
                                        <label for="dangkal_sungai" class="col-sm-2 control-label col-form-label">Pendangkalan/Pengendapan Lumpur Tinggi</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="dangkal_sungai" name="dangkal_sungai" placeholder="0.00">
                                        </div>
                                        <label for="keruh_sungai" class="col-sm-2 control-label col-form-label">Keruh</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="keruh_sungai" name="keruh_sungai" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jernih_sungai" class="col-sm-2 control-label col-form-label">Jernih dan Tidak Tercemar/memenuhi baku mutu air</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jernih_sungai" name="jernih_sungai" placeholder="0.00">
                                        </div>
                                        <label for="kurangbiota_sungai" class="col-sm-2 control-label col-form-label">Berkurangnya biota sungai</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="kurangbiota_sungai" name="kurangbiota_sungai" placeholder="0.00">
                                        </div>
                                        <label for="kering_sungai" class="col-sm-2 control-label col-form-label">Kering</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="kering_sungai" name="kering_sungai" placeholder="0.00">
                                        </div>
                                        <div class="my-3">
                                            <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">RAWA</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="form-group row">
                                        <label for="luas_rawa" class="col-sm-2 control-label col-form-label">Luas Rawa</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="luas_rawa" name="luas_rawa" placeholder="0.00">
                                        </div>
                                        <label for="perikanandarat_rawa" class="col-sm-2 control-label col-form-label">Perikanan darat maupun laut </label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="perikanandarat_rawa" name="perikanandarat_rawa" placeholder="0.00">
                                        </div>
                                        <label for="airbakuolah_rawa" class="col-sm-2 control-label col-form-label">Air baku untuk pengolahan air minum</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="airbakuolah_rawa" name="airbakuolah_rawa" placeholder="0.00">
                                        </div>
                                        <label for="cucimandi_rawa" class="col-sm-2 control-label col-form-label">Cuci dan mandi</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="cucimandi_rawa" name="cucimandi_rawa" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="irigasi_rawa" class="col-sm-2 control-label col-form-label">Irigasi</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="irigasi_rawa" name="irigasi_rawa" placeholder="0.00">
                                        </div>
                                        <label for="bab_rawa" class="col-sm-2 control-label col-form-label">Buang Air Besar</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="bab_rawa" name="bab_rawa" placeholder="0.00">
                                        </div>
                                        <label for="perikanan_rawa" class="col-sm-2 control-label col-form-label">Perikanan</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="perikanan_rawa" name="perikanan_rawa" placeholder="0.00">
                                        </div>
                                        <label for="sayuran_rawa" class="col-sm-2 control-label col-form-label">Sayuran</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="sayuran_rawa" name="sayuran_rawa" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="mangrove_rawa" class="col-sm-2 control-label col-form-label">Pembudidayaan hutan manggrove</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="mangrove_rawa" name="mangrove_rawa" placeholder="0.00">
                                        </div>
                                        <label for="lain_rawa" class="col-sm-2 control-label col-form-label">Lain-lain</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="lain_rawa" name="lain_rawa" placeholder="0.00">
                                        </div>
                                        <div class="my-3">
                                            <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PEMANFAATAN DAN KONDISI DANAU/WADUK/SITU</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12 control-label col-form-label">Pemanfaatan</label>
                                        <label for="luas_danau" class="col-sm-2 control-label col-form-label">Luas</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="luas_danau" name="luas_danau" placeholder="0.00">
                                        </div>
                                        <label for="perikanan_danau" class="col-sm-2 control-label col-form-label">Perikanan</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="perikanan_danau" name="perikanan_danau" placeholder="0.00">
                                        </div>
                                        <label for="airminum_danau" class="col-sm-2 control-label col-form-label">Air Minum/Air Baku</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="airminum_danau" name="airminum_danau" placeholder="0.00">
                                        </div>
                                        <label for="cucimandi_danau" class="col-sm-2 control-label col-form-label">Cuci dan mandi</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="cucimandi_danau" name="cucimandi_danau" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="irigasi_danau" class="col-sm-2 control-label col-form-label">Irigasi</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="irigasi_danau" name="irigasi_danau" placeholder="0.00">
                                        </div>
                                        <label for="bab_danau" class="col-sm-2 control-label col-form-label">Buang Air Besar</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="bab_danau" name="bab_danau" placeholder="0.00">
                                        </div>
                                        <label for="pembangkitlistrik_danau" class="col-sm-2 control-label col-form-label">Pembangkit listrik</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="pembangkitlistrik_danau" name="pembangkitlistrik_danau" placeholder="0.00">
                                        </div>
                                        <label for="prasaranatransportasi_danau" class="col-sm-2 control-label col-form-label">Prasarana transportasi</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="prasaranatransportasi_danau" name="prasaranatransportasi_danau" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lainnya_danau" class="col-sm-2 control-label col-form-label">Pembudidayaan hutan manggrove</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="lainnya_danau" name="lainnya_danau" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12 control-label col-form-label">Kondisi</label>
                                        <label for="tercemar_danau" class="col-sm-2 control-label col-form-label">Tercemar</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="tercemar_danau" name="tercemar_danau" placeholder="0.00">
                                        </div>
                                        <label for="dangkal_danau" class="col-sm-2 control-label col-form-label">Pendangkalan</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="dangkal_danau" name="dangkal_danau" placeholder="0.00">
                                        </div>
                                        <label for="keruh_danau" class="col-sm-2 control-label col-form-label">Keruh</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="keruh_danau" name="keruh_danau" placeholder="0.00">
                                        </div>
                                        <label for="berlumpur_danau" class="col-sm-2 control-label col-form-label">Berlumpur</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="berlumpur_danau" name="berlumpur_danau" placeholder="0.00">
                                        </div>
                                        <div class="my-3">
                                            <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="my-3">
                                            <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">AIR PANAS</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Sumber</th>
                                                    <th class="align-middle">Jumlah Lokasi</th>
                                                    <th class="align-middle">Pemanfaatan(Wisata, Pengobatan Energi, dll)</th>
                                                    <th class="align-middle">Kepemilikan/Pengelolaan</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">KUALITAS UDARA</h5>
                                    </div>
                                    <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Sumber </th>
                                                    <th class="align-middle">Jumlah Lokasi Sumber Pencemar</th>
                                                    <th class="align-middle">Polutan Pencemar</th>
                                                    <th class="align-middle">Efek terhadap Kesehatan(gangguan penglihatan/ kabut, ISPA, dll</th>
                                                    <th class="align-middle">Kepemilikan</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">KEBISINGAN</h5>
                                    </div>
                                    <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Tingkat Kebisingan</th>
                                                    <th class="align-middle">Ekses dampak kebisingan</th>
                                                    <th class="align-middle">Sumber Kebisingan(kendaraanbermotor, Kereta Api, Pelabuhan, Airport, pabrik, dll)</th>
                                                    <th class="align-middle">Efek Terhadap Penduduk</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">RUANG PUBLIK/TAMAN</h5>
                                    </div>
                                    <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Ruang Publik/Taman</th>
                                                    <th class="align-middle">Keberadaan</th>
                                                    <th class="align-middle">Luas</th>
                                                    <th class="align-middle">Tingkat Pemanfaatan</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">POTENSI WISATA</h5>
                                    </div>
                                    <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Lokasi/Tempat/Area Wisata</th>
                                                    <th class="align-middle">Luas (Ha)</th>
                                                    <th class="align-middle">Tingkat Pemanfaatan</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    POTENSI SUMBER DAYA MANUSIA
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="accordion-header text-center mb-3">Jumlah</h5>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jumlah Laki-Laki</th>
                                                    <th>Jumlah Perempuan</th>
                                                    <th>Jumlah Total</th>
                                                    <th>Jumlah Kepala Keluarga</th>
                                                    <th>Kepadatan Penduduk</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Usia</h5>
                                    </div>
                                    <div class="row">
                                        <div class="table-responsive col-sm-4">
                                            <table class="table table-striped table-bordered ">
                                                <thead>
                                                    <tr>
                                                        <th class="align-middle">Usia</th>
                                                        <th class="align-middle">Laki-Laki (Orang)</th>
                                                        <th class="align-middle">Perempuan (Orang)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>0-12 bulan</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>19</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>20</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>21</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>22</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>23</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>24</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>25</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive col-sm-4">
                                            <table class="table table-striped table-bordered ">
                                                <thead>
                                                    <tr>
                                                        <th class="align-middle">Usia</th>
                                                        <th class="align-middle">Laki-Laki (Orang)</th>
                                                        <th class="align-middle">Perempuan (Orang)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>26</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>27</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>29</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>30</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>31</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>32</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>33</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>34</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>35</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>36</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>37</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>38</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>39</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>40</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>41</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>42</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>43</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>44</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>45</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>46</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>47</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>48</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>49</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>50</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>51</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive col-sm-4">
                                            <table class="table table-striped table-bordered ">
                                                <thead>
                                                    <tr>
                                                        <th class="align-middle">Usia</th>
                                                        <th class="align-middle">Laki-Laki (Orang)</th>
                                                        <th class="align-middle">Perempuan (Orang)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>52</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>53</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>54</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>55</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>56</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>57</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>58</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>59</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>60</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>61</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>62</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>63</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>64</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>65</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>66</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>67</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>68</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>69</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>70</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>71</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>72</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>73</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>74</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>75</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lebih dari 75 Tahun</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Pendidikan</h5>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Tingkat Pendidikan</th>
                                                    <th>Laki-Laki (Orang)</th>
                                                    <th>Perempuan (Orang)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Mata Pencaharian Pokok</h5>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Pekerjaan</th>
                                                    <th>Laki-Laki (Orang)</th>
                                                    <th>Perempuan (Orang)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Agama/Aliran Kepercayaan</h5>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Agama</th>
                                                    <th>Laki-Laki (Orang)</th>
                                                    <th>Perempuan (Orang)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Kewarganegaraan</h5>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Kewarganegaraan</th>
                                                    <th>Laki-Laki (Orang)</th>
                                                    <th>Perempuan (Orang)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Etnis</h5>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Etnis</th>
                                                    <th>Laki-Laki (Orang)</th>
                                                    <th>Perempuan (Orang)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Cacat Mental dan Fisik</h5>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Cacat</th>
                                                    <th>Laki-Laki (Orang)</th>
                                                    <th>Perempuan (Orang)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Tenaga Kerja</h5>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Tenaga Kerja</th>
                                                    <th>Laki-Laki (Orang)</th>
                                                    <th>Perempuan (Orang)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Kualitas Angkatan Kerja</h5>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Angkatan Kerja</th>
                                                    <th>Laki-Laki (Orang)</th>
                                                    <th>Perempuan (Orang)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    LEMBAGA PEMERINTAHAN
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="mb-3 mt-3">PEMERINTAH DESA/KELURAHAN</h5>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>Dasar hukum pembentukan Pemerintah Desa / Kelurahan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Dasar hukum pembentukan BPD</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah aparat pemerintahan Desa/Kelurahan</td>
                                                    <td colspan="2" class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah perangkat desa/kelurahan</td>
                                                    <td colspan="2" class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Kepala Desa/Lurah</td>
                                                    <td colspan="2" class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Sekretaris Desa/Kelurahan</td>
                                                    <td colspan="2" class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Kepala Urusan Pemerintahan</td>
                                                    <td colspan="2" class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Kepala Urusan Pembangunan</td>
                                                    <td colspan="2" class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Kepala Urusan Pemberdayaan Masyarakat</td>
                                                    <td colspan="2" class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Kepala Urusan Kesejahteraan Rakyat</td>
                                                    <td colspan="2" class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Kepala Urusan Umum</td>
                                                    <td colspan="2" class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Kepala Urusan Keuangan</td>
                                                    <td colspan="2" class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah Staf</td>
                                                    <td colspan="2" class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah Dusun di Desa/Lingkungan di Kelurahan atau sebutan lain</td>
                                                    <td colspan="2" class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Kepala Dusun/Lingkungan ........</td>
                                                    <td colspan="2" class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Kepala Dusun/Lingkungan ........</td>
                                                    <td colspan="2" class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Kepala Dusun/Lingkungan ........</td>
                                                    <td colspan="2" class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Kepala Dusun/Lingkungan ........</td>
                                                    <td colspan="2" class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Kepala Dusun/Lingkungan ........</td>
                                                    <td colspan="2" class="text-center">None</td>
                                                </tr>
                                                <tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">TINGKAT PENDIDIKAN APARAT DESA/KELURAHAN</h5>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>Kepala Desa/Lurah</td>
                                                    <td class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Sekretaris Desa/Kelurahan</td>
                                                    <td class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Kepala Urusan Pemerintahan</td>
                                                    <td class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Kepala Urusan Pembangunan</td>
                                                    <td class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Kepala Urusan Pemberdayaan Masyarakat</td>
                                                    <td class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Kepala Urusan Kesejahteraan Rakyat</td>
                                                    <td class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Kepala Urusan Umum</td>
                                                    <td class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Kepala Urusan Keuangan</td>
                                                    <td class="text-center">None</td>
                                                </tr>
                                                <tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">BADAN PERMUSYAWARATAN DESA</h5>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>Keberadaan BPD</td>
                                                    <td class="text-center">None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah Anggota BPD</td>
                                                    <td class="text-center">None</td>
                                                </tr>
                                                <tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PENDIDIKAN ANGGOTA BPD</h5>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>Ketua, Nama : </td>
                                                    <td class="text-center">SMA</td>
                                                </tr>
                                                <tr>
                                                    <td>Wakil Ketua, Nama : </td>
                                                    <td class="text-center">SMA</td>
                                                </tr>
                                                <tr>
                                                    <td>Sekretaris, Nama : </td>
                                                    <td class="text-center">SMA</td>
                                                </tr>
                                                <tr>
                                                    <td>Anggota, Nama : </td>
                                                    <td class="text-center">SMA</td>
                                                </tr>
                                                <tr>
                                                    <td>Anggota, Nama : </td>
                                                    <td class="text-center">SMA</td>
                                                </tr>
                                                <tr>
                                                    <td>Anggota, Nama : </td>
                                                    <td class="text-center">SMA</td>
                                                </tr>
                                                <tr>
                                                    <td>Anggota, Nama : </td>
                                                    <td class="text-center">SMA</td>
                                                </tr>
                                                <tr>
                                                    <td>Anggota, Nama : </td>
                                                    <td class="text-center">SMA</td>
                                                </tr>
                                                <tr>
                                                    <td>Anggota, Nama : </td>
                                                    <td class="text-center">SMA</td>
                                                </tr>
                                                <tr>
                                                    <td>Anggota, Nama : </td>
                                                    <td class="text-center">SMA</td>
                                                </tr>
                                                <tr>
                                                    <td>Anggota, Nama : </td>
                                                    <td class="text-center">SMA</td>
                                                </tr>
                                                <tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">LEMBAGA KEMASYARAKATAN</h5>
                                    </div>
                                    <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nama Lembaga</th>
                                                    <th>Dasar Hukum Pembentukan</th>
                                                    <th>Jumlah Lembaga</th>
                                                    <th>Jumlah Pengurus</th>
                                                    <th>Ruang Lingkup Kegiatan</th>
                                                    <th>Jumlah Jenis Kegiatan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>LKMD/LKMK</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">TINGKAT PARTISIPASI POLITIK</h5>
                                    </div>
                                    <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2" class="align-middle">Jenis Pemilu</th>
                                                    <th colspan="2" class="align-middle">Yang Sudah Punya Hak Pilih </th>
                                                    <th colspan="2" class="align-middle">Yang Memanfaatkan Hak Pilih</th>
                                                    <th rowspan="2" class="align-middle">Aksi</th>
                                                </tr>
                                                <th class="align-middle">Laki-Laki (Orang </th>
                                                <th class="align-middle">Perempuan (Orang)</th>
                                                <th class="align-middle">Laki-Laki (Orang </th>
                                                <th class="align-middle">Perempuan (Orang)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Lembaga Ekonomi</h5>
                                        <h5 class="mb-3 mt-3">LEMBAGA EKONOMI, DAN UNIT USAHA DESA/KELURAHAN</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Lembaga Ekonomi</th>
                                                    <th>Jumlah/Unit</th>
                                                    <th>Jumlah Kegiatan</th>
                                                    <th>Jumlah Pengurus dan Anggota </th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">JASA LEMBAGA KEUANGAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Lembaga Keuangan</th>
                                                    <th>Jumlah/Unit</th>
                                                    <th>Jumlah Kegiatan</th>
                                                    <th>Jumlah Pengurus dan Anggota </th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">INDUSTRI KECIL DAN MENENGAH</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Industri</th>
                                                    <th>Jumlah/Unit</th>
                                                    <th>Jumlah Kegiatan</th>
                                                    <th>Jumlah Pengurus dan Anggota </th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA PENGANGKUTAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Jasa</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jumlah Pemilik</th>
                                                    <th>Kapasitas</th>
                                                    <th>Tenaga Kerja (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA PERDAGANGAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jenis produk yang diperdagangkan (Jenis)</th>
                                                    <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA HIBURAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jenis produk yang diperdagangkan (Jenis)</th>
                                                    <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA GAS, LISTRIK, BBM DAN AIR</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jenis produk yang diperdagangkan (Jenis)</th>
                                                    <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA KETERAMPILAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jenis produk yang diperdagangkan (Jenis)</th>
                                                    <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA HUKUM DAN KONSULTASI</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jenis produk yang diperdagangkan (Jenis)</th>
                                                    <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA PENGINAPAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jenis produk yang diperdagangkan (Jenis)</th>
                                                    <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Lembaga Ekonomi</h5>
                                        <h5 class="mb-3 mt-3">LEMBAGA EKONOMI, DAN UNIT USAHA DESA/KELURAHAN</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Lembaga Ekonomi</th>
                                                    <th>Jumlah/Unit</th>
                                                    <th>Jumlah Kegiatan</th>
                                                    <th>Jumlah Pengurus dan Anggota </th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    LEMBAGA EKONOMI
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="mb-3 mt-3">LEMBAGA EKONOMI, DAN UNIT USAHA DESA/KELURAHAN</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Lembaga Ekonomi</th>
                                                    <th>Jumlah/Unit</th>
                                                    <th>Jumlah Kegiatan</th>
                                                    <th>Jumlah Pengurus dan Anggota </th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">JASA LEMBAGA KEUANGAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Lembaga Keuangan</th>
                                                    <th>Jumlah/Unit</th>
                                                    <th>Jumlah Kegiatan</th>
                                                    <th>Jumlah Pengurus dan Anggota </th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">INDUSTRI KECIL DAN MENENGAH</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Industri</th>
                                                    <th>Jumlah/Unit</th>
                                                    <th>Jumlah Kegiatan</th>
                                                    <th>Jumlah Pengurus dan Anggota </th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA PENGANGKUTAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Jasa</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jumlah Pemilik</th>
                                                    <th>Kapasitas</th>
                                                    <th>Tenaga Kerja (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA PERDAGANGAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jenis produk yang diperdagangkan (Jenis)</th>
                                                    <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA HIBURAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jenis produk yang diperdagangkan (Jenis)</th>
                                                    <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA GAS, LISTRIK, BBM DAN AIR</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jenis produk yang diperdagangkan (Jenis)</th>
                                                    <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA KETERAMPILAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jenis produk yang diperdagangkan (Jenis)</th>
                                                    <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA HUKUM DAN KONSULTASI</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jenis produk yang diperdagangkan (Jenis)</th>
                                                    <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA PENGINAPAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jenis produk yang diperdagangkan (Jenis)</th>
                                                    <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Lembaga Ekonomi</h5>
                                        <h5 class="mb-3 mt-3">LEMBAGA EKONOMI, DAN UNIT USAHA DESA/KELURAHAN</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Lembaga Ekonomi</th>
                                                    <th>Jumlah/Unit</th>
                                                    <th>Jumlah Kegiatan</th>
                                                    <th>Jumlah Pengurus dan Anggota </th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    LEMBAGA PENDIDIKAN
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="mb-3 mt-3">PENDIDIKAN FORMAL</h5>
                                    <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2" class="align-middle">Nama</th>
                                                    <th rowspan="2" class="align-middle">Jumlah</th>
                                                    <th rowspan="2" class="align-middle">Status (Terdaftar, Terakreditasi)</th>
                                                    <th colspan="3" class="align-middle">Kepemilikan </th>
                                                    <th rowspan="2" class="align-middle">Jumlah Tenaga Pengajar</th>
                                                    <th rowspan="2" class="align-middle">Jumlah Siswa/Mahasiswa</th>
                                                    <th rowspan="2" class="align-middle">Aksi</th>
                                                </tr>
                                                <th class="align-middle">Pemerintah</th>
                                                <th class="align-middle">Swasta</th>
                                                <th class="align-middle">Desa/Kelurahan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PENDIDIKAN FORMAL KEAGAMAAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2" class="align-middle">Nama</th>
                                                    <th rowspan="2" class="align-middle">Jumlah</th>
                                                    <th rowspan="2" class="align-middle">Status (Terdaftar, Terakreditasi)</th>
                                                    <th colspan="3" class="align-middle">Kepemilikan </th>
                                                    <th rowspan="2" class="align-middle">Jumlah Tenaga Pengajar</th>
                                                    <th rowspan="2" class="align-middle">Jumlah Siswa/Mahasiswa</th>
                                                    <th rowspan="2" class="align-middle">Aksi</th>
                                                </tr>
                                                <th class="align-middle">Pemerintah</th>
                                                <th class="align-middle">Swasta</th>
                                                <th class="align-middle">Dll</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PENDIDIKAN NON FORMAL/KURSUS</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Nama</th>
                                                    <th class="align-middle">Jumlah</th>
                                                    <th class="align-middle">Status (Terdaftar, Terakreditasi)</th>
                                                    <th class="align-middle">Kepemilikan (Pemerintah, Yayasan, dll)</th>
                                                    <th class="align-middle">Jumlah Tenaga Pengajar</th>
                                                    <th class="align-middle">Jumlah Siswa/Mahasiswa</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    LEMBAGA ADAT
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="mb-3" id="headingThree">KEBERADAAN LEMBAGA ADAT</h5>
                                    <div class="form-group row">
                                        <label for="pemangkut_adat" class="col-sm-2 control-label col-form-label">Pemangku Adat</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="kepengurusan_adat" class="col-sm-2 control-label col-form-label">Kepengurusan Adat</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">SIMBOL ADAT</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rumah_adat" class="col-sm-2 control-label col-form-label">Rumah Adat</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="barang_pusaka" class="col-sm-2 control-label col-form-label">Barang Pusaka</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="naskah_naskah" class="col-sm-2 control-label col-form-label">Naskah-naskah</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">JENIS KEGIATAN ADAT</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="musyawarah_adat" class="col-sm-2 control-label col-form-label">Musyawarah Adat</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="sanksi_adat" class="col-sm-2 control-label col-form-label">Sanksi Adat</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="upacara_adat_perkawinan" class="col-sm-2 control-label col-form-label">Upacara Adat Perkawinan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="upacara_adat_kematian" class="col-sm-2 control-label col-form-label">Upacara Adat Kematian</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="upacara_adat_kelahiran" class="col-sm-2 control-label col-form-label">Upacara Adat Kelahiran</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="upacara_adat_cocok_tanam" class="col-sm-2 control-label col-form-label">Upacara Adat dalam Bercocok Tanam</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="upacara_adat_bidang_perikanan" class="col-sm-2 control-label col-form-label">Upacara Adat Bidang Perikanan/Laut</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="upacara_adat_bidang_kehutanan" class="col-sm-2 control-label col-form-label">Upacara Adat Bidang Kehutanan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="upacara_adat_kelola_sda" class="col-sm-2 control-label col-form-label">Upacara Adat Dalam Pengelolaan SDA</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="upacara_adat_dalam_bangun_rumah" class="col-sm-2 control-label col-form-label">Upacara Adat Dalam Pembangunan Rumah</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="upacara_adat_penyelesaian_masalah" class="col-sm-2 control-label col-form-label">Upacara Adat Dalam Penyelesaian Masalah/Konflik</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwelve">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    LEMBAGA KEAMANAN
                            </h2>
                            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="mb-3" id="headingThree">HANSIP DAN LINMAS</h5>
                                    <div class="form-group row">
                                        <label for="pemangkut_adat" class="col-sm-2 control-label col-form-label">Keberadaan Hansip dan Linmas</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="jumlah_anggota_hansip" class="col-sm-2 control-label col-form-label">Jumlah Anggota Hansip</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="jumlah_anggota_satgas_linmas" class="col-sm-2 control-label col-form-label">Jumlah Anggota Satgas Linmas</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="pelaksanaan_siskamling" class="col-sm-2 control-label col-form-label">Pelaksanaan SISKAMLING</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="jumlah_poskamling" class="col-sm-2 control-label col-form-label">Jumlah Pos Kamling</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">SATGAS SWAKARSA</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keberadaan_satpam_swakarsa" class="col-sm-2 control-label col-form-label">Keberadaan SATPAM SWAKARSA</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="jumlah_anggota_satpam" class="col-sm-2 control-label col-form-label">Jumlah Anggota</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="nama_organisasi_induk" class="col-sm-2 control-label col-form-label">Nama Organisasi Induk</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keberadaan_satpam_swakarsa" class="col-sm-2 control-label col-form-label">Pemilik Organisasi</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Pemerintah">Pemerintah</option>
                                                <option value="Swasta">Swasta</option>
                                                <option value="Perorangan">Perorangan</option>
                                            </select>
                                        </div>
                                        <label for="keberadaan_organisasi_keamanan" class="col-sm-2 control-label col-form-label">Keberadaan Org. Keamanan Lainnya</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">KERJASAMA DESA/KELURAHAN DENGAN TNI/POLRI DALAM BIDANG TRANTIBLINMAS</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="mitra_koramil_tni" class="col-sm-2 control-label col-form-label">Mitra Koramil/TNI</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="jumlah_anggota_trantiblinmas" class="col-sm-2 control-label col-form-label">Jumlah Anggota</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="jumlah_kegiatan_trantiblinmas" class="col-sm-2 control-label col-form-label">Jumlah Kegiatan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="babinkamtibmas" class="col-sm-2 control-label col-form-label">Babinkamtibmas/POLRI</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="jumlah_anggota_babinkamtibmas" class="col-sm-2 control-label col-form-label">Jumlah Anggota</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="jumlah_kegiatan_babinkamtibmas" class="col-sm-2 control-label col-form-label">Jumlah Kegiatan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThirteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                    PRASARANA DAN SARANA TRANSPORTASI
                            </h2>
                            <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="mb-3" id="headingThree">PRASARANA TRANSPORTASI DARAT</h5>
                                    <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Sarana dan Prasarana</th>
                                                    <th>Kategori</th>
                                                    <th>Baik (Km atau Unit)</th>
                                                    <th>Rusak (Km atau Unit)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">SARANA TRANSPORTASI DARAT</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Sarana</th>
                                                    <th>Keberadaan</th>
                                                    <th>Jumlah Unit</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PRASARANA TRANSPORTASI LAUT/SUNGAI</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Prasarana</th>
                                                    <th>Jumlah Unit</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">SARANA TRANSPORTASI SUNGAI/LAUT</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Sarana</th>
                                                    <th>Jumlah Unit</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">SARANA TRANSPORTASI UDARA</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Prasarana</th>
                                                    <th>Jumlah Unit</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFourteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                    PRASARANA KOMUNIKASI DAN INFORMASI
                            </h2>
                            <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="mb-3" id="headingThree">TELEPON</h5>
                                    <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Jenis</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">KANTOR POS</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Jenis</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">RADIO/TV</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Jenis</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">KORAN/MAJALAH/BULETIN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Jenis</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFifteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                    PRASARANA AIR BERSIH DAN SANITASI
                            </h2>
                            <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="mb-3" id="headingFifteen">PRASARANA AIR BERSIH</h5>
                                    <div class="form-group row">
                                        <label for="jumlah_sumur_pompa" class="col-sm-2 control-label col-form-label">Jumlah Sumur Pompa</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_sumur_pompa" name="jumlah_sumur_pompa" placeholder="0.00">
                                        </div>
                                        <label for="jumlah_sumur_gali" class="col-sm-2 control-label col-form-label">Jumlah Sumur Gali</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_sumur_gali" name="jumlah_sumur_gali" placeholder="0.00">
                                        </div>
                                        <label for="jumlah_hidran_umum" class="col-sm-2 control-label col-form-label">Jumlah Hidran Umum</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_hidran_umum" name="jumlah_hidran_umum" placeholder="0.00">
                                        </div>
                                        <label for="jumlah_pah" class="col-sm-2 control-label col-form-label">Jumlah PAH</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_pah" name="jumlah_pah" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_tangki_air_bersih" class="col-sm-2 control-label col-form-label">Jumlah Tangki Air Bersih</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_tangki_air_bersih" name="jumlah_tangki_air_bersih" placeholder="0.00">
                                        </div>
                                        <label for="jumlah_embung" class="col-sm-2 control-label col-form-label">Jumlah Embung</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_embung" name="jumlah_embung" placeholder="0.00">
                                        </div>
                                        <label for="jumlah_mataair" class="col-sm-2 control-label col-form-label">Jumlah Mata Air</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_mataair" name="jumlah_mataair" placeholder="0.00">
                                        </div>
                                        <label for="jumlah_bangunan_olah_air" class="col-sm-2 control-label col-form-label">Jumlah Bgn. Olah Air Bersih/Minum</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_bangunan_olah_air" name="jumlah_bangunan_olah_air" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3"> SANITASI</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="saluran_drainase" class="col-sm-3 control-label col-form-label">Saluran drainase/saluran pembuangan air limbah</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="saluran_drainase" name="saluran_drainase" placeholder="0.00">
                                        </div>
                                        <label for="sumur_resapan_rt" class="col-sm-3 control-label col-form-label">Sumur Resapan Air Rumah Tangga</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="sumur_resapan_rt" name="sumur_resapan_rt" placeholder="0.00">
                                        </div>
                                        <label for="jumlah_mck_umum" class="col-sm-3 control-label col-form-label">Jumlah MCK Umum</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_mck_umum" name="jumlah_mck_umum" placeholder="0.00">
                                        </div>
                                        <label for="pemilik_jumlah_jamban" class="col-sm-2 control-label col-form-label">Pemilik Jumlah Jamban Keluarga</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="kondisi_saluran_drainase" class="col-sm-2 control-label col-form-label">Situ/Waduk/Danau</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSixteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                    PRASARANA DAN KONDISI IRIGASI
                            </h2>
                            <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="mb-3" id="headingFifteen">PRASARANA IRIGASI</h5>
                                    <div class="form-group row">
                                        <label for="panjang_saluran_primer" class="col-sm-2 control-label col-form-label">Panjang Saluran Primer</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="panjang_saluran_primer" name="panjang_saluran_primer" placeholder="0.00">
                                        </div>
                                        <label for="panjang_saluran_sekunder" class="col-sm-2 control-label col-form-label">Panjang Saluran Sekunder</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="panjang_saluran_sekunder" name="panjang_saluran_sekunder" placeholder="0.00">
                                        </div>
                                        <label for="panjang_saluran_tersier" class="col-sm-2 control-label col-form-label">Panjang Saluran Tersier</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="panjang_saluran_tersier" name="panjang_saluran_tersier" placeholder="0.00">
                                        </div>
                                        <label for="jumlah_pintu_sadap" class="col-sm-2 control-label col-form-label">Jumlah Pintu Sadap</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_pintu_sadap" name="jumlah_pintu_sadap" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_pintu_pembagi_air" class="col-sm-2 control-label col-form-label">Jumlah Pintu Pembagi Air</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_pintu_pembagi_air" name="jumlah_pintu_pembagi_air" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3"> KONDISI</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="panjang_saluran_primer_rusak" class="col-sm-2 control-label col-form-label">Panjang Saluran Primer Rusak</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="panjang_saluran_primer_rusak" name="panjang_saluran_primer_rusak" placeholder="0.00">
                                        </div>
                                        <label for="panjang_saluran_sekunder_rusak" class="col-sm-2 control-label col-form-label">Panjang Saluran Sekunder Rusak</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="panjang_saluran_sekunder_rusak" name="panjang_saluran_sekunder_rusak" placeholder="0.00">
                                        </div>
                                        <label for="panjang_saluran_tersier_rusak" class="col-sm-2 control-label col-form-label">Panjang Saluran Tersier Rusak</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="panjang_saluran_tersier_rusak" name="panjang_saluran_tersier_rusak" placeholder="0.00">
                                        </div>
                                        <label for="jumlah_pintu_sadap_rusak" class="col-sm-2 control-label col-form-label">Jumlah Pintu Sadap Rusak</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_pintu_sadap_rusak" name="jumlah_pintu_sadap_rusak" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_pintu_pembagi_air_rusak" class="col-sm-2 control-label col-form-label">Jumlah Pintu Pembagi Air Rusak</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_pintu_pembagi_air_rusak" name="jumlah_pintu_pembagi_air_rusak" placeholder="0.00">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeventeen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                    PRASARANA DAN SARANA PEMERINTAHAN
                            </h2>
                            <div id="collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="mb-3" id="headingFifteen">PRASARANA DAN SARANA PEMERINTAH DESA/KELURAHAN</h5>
                                    <div class="form-group row">
                                        <label for="gedung_kantor_desa" class="col-sm-2 control-label col-form-label">Gedung Kantor</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div> <label for="kondisi_gedung_kantor_desa" class="col-sm-2 control-label col-form-label">Kondisi</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="jumlah_ruang_kerja_desa" class="col-sm-2 control-label col-form-label">Jumlah Ruang Kerja</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="jumlah_ruang_kerja_desa" name="jumlah_ruang_kerja_desa" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="balai_desa" class="col-sm-2 control-label col-form-label">Balai Desa/Kelurahan/Sejenisnya</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="listrik_desa" class="col-sm-2 control-label col-form-label">Listrik</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="air_bersih_desa" class="col-sm-2 control-label col-form-label">Air Bersih</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telepon_desa" class="col-sm-2 control-label col-form-label">Telepon</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="rumah_dinas_kepala_desa" class="col-sm-2 control-label col-form-label">Rumah Dinas Kepala Desa/Lurah</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="rumah_dinas_perangkat_desa" class="col-sm-2 control-label col-form-label">Rumah Dinas Perangkat Desa/Kelurahan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3"> INVENTARIS DAN ALAT TULIS KANTOR</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_mesin_tik_desa" class="col-sm-2 control-label col-form-label">Jumlah Mesin Tik</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_mesin_tik_desa" name="jumlah_mesin_tik_desa" placeholder="0.00">
                                        </div>
                                        <label for="jumlah_meja_desa" class="col-sm-2 control-label col-form-label">Jumlah Meja</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_meja_desa" name="jumlah_meja_desa" placeholder="0.00">
                                        </div>
                                        <label for="jumlah_kursi_desa" class="col-sm-2 control-label col-form-label">Jumlah Kursi</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_kursi_desa" name="jumlah_kursi_desa" placeholder="0.00">
                                        </div>
                                        <label for="jumlah_almari_arsip_desa" class="col-sm-2 control-label col-form-label">Jumlah Almari Arsip</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_almari_arsip_desa" name="jumlah_almari_arsip_desa" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="komputer_desa" class="col-sm-2 control-label col-form-label">Komputer</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="komputer_desa" name="komputer_desa" placeholder="0.00">
                                        </div>
                                        <label for="mesin_fax_desa" class="col-sm-2 control-label col-form-label">Mesin Fax</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="mesin_fax_desa" name="mesin_fax_desa" placeholder="0.00">
                                        </div>
                                        <label for="kendaraan_dinas_desa" class="col-sm-2 control-label col-form-label">Kendaraan Dinas</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="kendaraan_dinas_desa" name="kendaraan_dinas_desa" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3"> ADMINISTRASI PEMERINTAHAN DESA/KELURAHAN</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_data_peraturan_desa" class="col-sm-2 control-label col-form-label">Buku Data Peraturan Desa</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                        <label for="buku_keputusan_kepala_desa" class="col-sm-2 control-label col-form-label">Buku Keputusan Kepala Desa/Lurah</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                        <label for="buku_administrasi_kependudukan" class="col-sm-2 control-label col-form-label">Buku Administrasi Kependudukan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_data_inventaris" class="col-sm-2 control-label col-form-label">Buku Data Inventaris</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                        <label for="buku_data_aparat" class="col-sm-2 control-label col-form-label">Buku Data Aparat</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                        <label for="buku_data_tanah_desa" class="col-sm-2 control-label col-form-label">Buku Data Tanah Milik Desa/Kelurahan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_administrasi_pajak" class="col-sm-2 control-label col-form-label">Buku Administrasi Pajak dan Retribusi</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                        <label for="buku_data_tanah" class="col-sm-2 control-label col-form-label">Buku Data Tanah</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                        <label for="buku_laporan_pengaduan_masyarakat" class="col-sm-2 control-label col-form-label">Buku Laporan Pengaduan Masyarakat</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_agenda_ekspedisi" class="col-sm-2 control-label col-form-label">Buku Agenda Ekspedisi</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                        <label for="buku_profil_desa" class="col-sm-2 control-label col-form-label">Buku Profil Desa/Kelurahan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                        <label for="buku_data_induk_kependudukan" class="col-sm-2 control-label col-form-label">Buku Data Induk Kependudukan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="buku_data_mutasi_penduduk" class="col-sm-2 control-label col-form-label">Buku Data Mutasi Penduduk</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                        <label for="buku_rekap_jumlah_pdk_akhirbulan" class="col-sm-2 control-label col-form-label">Buku Rekapitulasi Jumlah Penduduk Akhir Bulan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                        <label for="buku_registrasi_pelayanan_penduduk" class="col-sm-2 control-label col-form-label">Buku Registrasi Pelayanan Penduduk</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_data_penduduk_sementara" class="col-sm-2 control-label col-form-label">Buku Data Penduduk Sementara</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                        <label for="buku_anggaran_penerimaan" class="col-sm-2 control-label col-form-label">Buku Anggaran Penerimaan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                        <label for="buku_anggaran_pengeluaran_pegawai" class="col-sm-2 control-label col-form-label">Buku Anggaran Pengeluaran Pegawai dan Pembangunan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_kas_umum_desa" class="col-sm-2 control-label col-form-label">Buku Kas Umum</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                        <label for="buku_kas_pembantu_penerimaan" class="col-sm-2 control-label col-form-label">Buku Kas Pembantu Penerimaan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                        <label for="buku_kas_pembantu_pengeluaran_rutin" class="col-sm-2 control-label col-form-label">Buku Kas Pembantu Pengeluaran Rutin dan Pembangunan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Terisi">Ada - Terisi</option>
                                                <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label for="buku_data_lembaga_kemasyarakatan" class="col-sm-2 control-label col-form-label">Buku Data Lembaga Kemasyarakatan</label>
                                            <div class="col-sm-2">
                                                <select class="select2 form-select shadow-none">
                                                    <option value="Ada - Terisi">Ada - Terisi</option>
                                                    <option value="Ada - Tidak Terisi">Ada - Tidak Terisi</option>
                                                    <option value="Tidak Ada">Tidak Ada</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEighteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                                    PRASARANA DAN SARANA BPD DAN DUSUN/LINGKUNGAN
                            </h2>
                            <div id="collapseEighteen" class="accordion-collapse collapse" aria-labelledby="headingEighteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="mb-3 mt-3">LEMBAGA EKONOMI, DAN UNIT USAHA DESA/KELURAHAN</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Lembaga Ekonomi</th>
                                                    <th>Jumlah/Unit</th>
                                                    <th>Jumlah Kegiatan</th>
                                                    <th>Jumlah Pengurus dan Anggota </th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">JASA LEMBAGA KEUANGAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Lembaga Keuangan</th>
                                                    <th>Jumlah/Unit</th>
                                                    <th>Jumlah Kegiatan</th>
                                                    <th>Jumlah Pengurus dan Anggota </th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">INDUSTRI KECIL DAN MENENGAH</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Industri</th>
                                                    <th>Jumlah/Unit</th>
                                                    <th>Jumlah Kegiatan</th>
                                                    <th>Jumlah Pengurus dan Anggota </th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA PENGANGKUTAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Jasa</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jumlah Pemilik</th>
                                                    <th>Kapasitas</th>
                                                    <th>Tenaga Kerja (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA PERDAGANGAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jenis produk yang diperdagangkan (Jenis)</th>
                                                    <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA HIBURAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jenis produk yang diperdagangkan (Jenis)</th>
                                                    <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA GAS, LISTRIK, BBM DAN AIR</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jenis produk yang diperdagangkan (Jenis)</th>
                                                    <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA KETERAMPILAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jenis produk yang diperdagangkan (Jenis)</th>
                                                    <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA HUKUM DAN KONSULTASI</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jenis produk yang diperdagangkan (Jenis)</th>
                                                    <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">USAHA JASA PENGINAPAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Jumlah (Unit)</th>
                                                    <th>Jenis produk yang diperdagangkan (Jenis)</th>
                                                    <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Lembaga Ekonomi</h5>
                                        <h5 class="mb-3 mt-3">LEMBAGA EKONOMI, DAN UNIT USAHA DESA/KELURAHAN</h5><a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Lembaga Ekonomi</th>
                                                    <th>Jumlah/Unit</th>
                                                    <th>Jumlah Kegiatan</th>
                                                    <th>Jumlah Pengurus dan Anggota </th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNineteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                                    PRASARANA DAN SARANA LEMBAGA KEMASYARAKATAN DESA/KELURAHAN
                            </h2>
                            <div id="collapseNineteen" class="accordion-collapse collapse" aria-labelledby="headingNineteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="mb-3" id="headingFifteen">LEMBAGA KEMASYARAKATAN DESA DAN KELURAHAN/LKD/LK</h5>
                                    <div class="form-group row">
                                        <label for="gedung_kantor_lkd" class="col-sm-2 control-label col-form-label">Gedung Kantor</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div> <label for="komputer_lkd" class="col-sm-2 control-label col-form-label">Komputer</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="mesin_fax_lkd" class="col-sm-2 control-label col-form-label">Mesin Fax</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="mesin_tik_lkd" class="col-sm-2 control-label col-form-label">Mesin Tik</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="kardek_lkd" class="col-sm-2 control-label col-form-label">Kardek </label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="buku_administrasi_lk" class="col-sm-2 control-label col-form-label">Buku Adm. Lembaga Kemasyarakatan</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="buku_administrasi_lk" name="buku_administrasi_lk" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_meja_kursi_lk" class="col-sm-2 control-label col-form-label">Jumlah Meja dan Kursi </label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="jumlah_meja_kursi_lk" name="jumlah_meja_kursi_lk" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">LKMD/LPM atau sebutan lain</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kantor_lpm" class="col-sm-2 control-label col-form-label">Memiliki Kantor Sendiri</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div> <label for="komputer_lpm" class="col-sm-2 control-label col-form-label">Komputer</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="mesin_fax_lpm" class="col-sm-2 control-label col-form-label">Mesin Fax</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="mesin_tik_lpm" class="col-sm-2 control-label col-form-label">Kardek </label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="kardek_lpm" class="col-sm-2 control-label col-form-label">Kardek </label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="buku_administrasi_lpm" class="col-sm-2 control-label col-form-label">Buku Adm. Lembaga Kemasyarakatan</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="buku_administrasi_lk" name="buku_administrasi_lk" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_meja_kursi_lpm" class="col-sm-2 control-label col-form-label">Jumlah Meja dan Kursi </label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="jumlah_meja_kursi_lk" name="jumlah_meja_kursi_lk" placeholder="0.00">
                                        </div>
                                        <label for="buku_administrasi_lpm" class="col-sm-2 control-label col-form-label">Buku Administrasi</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="jenis_kegiatan_lpm" class="col-sm-2 control-label col-form-label">Jenis Kegiatan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3"> PKK</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pkk" class="col-sm-2 control-label col-form-label">PKK</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="gedung_pkk" class="col-sm-2 control-label col-form-label">Gedung/Kantor</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="atk_pkk class=" class="col-sm-2 control-label col-form-label">Peralatan Kantor/ATK/Inventaris</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="mesin_fax_bpd" name="mesin_fax_bpd" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kepengurusan_pkk" class="col-sm-2 control-label col-form-label">Kepengurusan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Aktif">Ada - Aktif</option>
                                                <option value="Ada - Pasif">Ada - Pasif</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="buku_administrasi_pkk" class="col-sm-2 control-label col-form-label">Buku Administrasi</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Aktif">Ada - Aktif</option>
                                                <option value="Ada - Pasif">Ada - Pasif</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="kegiatan_pkk" class="col-sm-2 control-label col-form-label">Kegiatan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada - Aktif">Ada - Aktif</option>
                                                <option value="Ada - Pasif">Ada - Pasif</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_kegiatan_pkk" class="col-sm-2 control-label col-form-label">Jumlah Kegiatan</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="jumlah_kegiatan_pkk" name="jumlah_kegiatan_pkk" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">KARANG TARUNA</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="karang_taruna" class="col-sm-2 control-label col-form-label">Karang Taruna</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="kepengurusan_kt" class="col-sm-2 control-label col-form-label">Kepengurusan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="buku_administrasi_kt" class="col-sm-2 control-label col-form-label">Buku Administrasi</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="buku_administrasi_kt" name="buku_administrasi_kt" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_kegiatan_kt" class="col-sm-2 control-label col-form-label">Jumlah Kegiatan</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="jumlah_kegiatan_kt" name="jumlah_kegiatan_kt" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">RUKUN TETANGGA</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rukun_tetangga" class="col-sm-2 control-label col-form-label">Rukun Tetangga</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="kepengurusan_rt" class="col-sm-2 control-label col-form-label">Kepengurusan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="buku_administrasi_rt" class="col-sm-2 control-label col-form-label">Buku Administrasi</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="buku_administrasi_rt" name="buku_administrasi_rt" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_kegiatan_rt" class="col-sm-2 control-label col-form-label">Jumlah Kegiatan</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="jumlah_kegiatan_rt" name="jumlah_kegiatan_rt" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">RUKUN WARGA</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rukun_warga" class="col-sm-2 control-label col-form-label">Rukun Warga</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="kepengurusan_rw" class="col-sm-2 control-label col-form-label">Kepengurusan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="buku_administrasi_rw" class="col-sm-2 control-label col-form-label">Buku Administrasi</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="buku_administrasi_rw" name="buku_administrasi_rw" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_kegiatan_rw" class="col-sm-2 control-label col-form-label">Jumlah Kegiatan</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="jumlah_kegiatan_rw" name="jumlah_kegiatan_rw" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">LEMBAGA ADAT</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gedung_lembagaadat" class="col-sm-2 control-label col-form-label">Memiliki Kantor/Gedung/Menumpang</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="kepengurusan_lembagaadat" class="col-sm-2 control-label col-form-label">Kepengurusan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="buku_administrasi_lembagaadat" class="col-sm-2 control-label col-form-label">Buku Administrasi</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="buku_administrasi_lembagaadat" name="buku_administrasi_lembagaadat" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_kegiatan_lembagaadat" class="col-sm-2 control-label col-form-label">Jumlah Kegiatan</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="jumlah_kegiatan_lembagaadat" name="jumlah_kegiatan_lembagaadat" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">BUMDES</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gedung_bumdes" class="col-sm-2 control-label col-form-label">Memiliki Kantor/Gedung/Menumpang</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="kepengurusan_bumdes" class="col-sm-2 control-label col-form-label">Kepengurusan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="buku_administrasi_bumdes" class="col-sm-2 control-label col-form-label">Buku Administrasi</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="buku_administrasi_bumdes" name="buku_administrasi_bumdes" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_kegiatan_bumdes" class="col-sm-2 control-label col-form-label">Jumlah Kegiatan</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="jumlah_kegiatan_bumdes" name="jumlah_kegiatan_bumdes" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">FORUM KOMUNIKASI KADER PEMBERDAYAAN MASYARAKAT</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fkkpm" class="col-sm-2 control-label col-form-label">Forum Komunikasi Kader Pemberdayaan Masyarakat</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="gedung_fkkpm" class="col-sm-2 control-label col-form-label">Memiliki Kantor/Gedung/Menumpang</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="kepengurusan_fkkpm" class="col-sm-2 control-label col-form-label">Kepengurusan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_administrasi_fkkpm" class="col-sm-2 control-label col-form-label">Buku Administrasi</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="buku_administrasi_fkkpm" name="buku_administrasi_fkkpm" placeholder="0.00">
                                        </div>
                                        <label for="jumlah_kegiatan_fkkpm" class="col-sm-2 control-label col-form-label">Jumlah Kegiatan</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="jumlah_kegiatan_fkkpm" name="jumlah_kegiatan_fkkpm" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">ORGANISASI SOSIAL KEMASYARAKATAN</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gedung_organisasi_sosial" class="col-sm-4 control-label col-form-label">Kantor/gedung Organisasi Sosial Kemasyarakatan lainnya </label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="kepengurusan_sosial" class="col-sm-4 control-label col-form-label">Kepengurusan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">ORGANISASI SOSIAL KEMASYARAKATAN</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gedung_organisasi_profesi" class="col-sm-4 control-label col-form-label">Kantor/gedung Organisasi Profesi yang ada</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="kepengurusan_organisasi_profesi" class="col-sm-4 control-label col-form-label">Kepengurusan</label>
                                        <div class="col-sm-2">
                                            <select class="select2 form-select shadow-none">
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for=" buku_administrasi_org_profesi" class="col-sm-4 control-label col-form-label">Buku Administrasi</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="buku_administrasi_org_profesi" name="buku_administrasi_org_profesi" placeholder="0.00">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwenty">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                    PRASARANA PERIBADATAN, OLAHRAGA
                            </h2>
                            <div id="collapseTwenty" class="accordion-collapse collapse" aria-labelledby="headingTwenty" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="mb-3 mt-3">PRASARANA PERIBADATAN</h5>
                                    <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Jenis Prasarana</th>
                                                    <th class="align-middle">Jumlah (Buah)</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PRASARANA OLAH RAGA</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Jenis Prasarana</th>
                                                    <th class="align-middle">Jumlah (Buah)</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwentyOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyOne" aria-expanded="false" aria-controls="collapseTwentyOne">
                                    PRASARANA DAN SARANA KESEHATAN, PENDIDIKAN
                            </h2>
                            <div id="collapseTwentyOne" class="accordion-collapse collapse" aria-labelledby="headingTwentyOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="mb-3 mt-3">PRASARANA KESEHATAN</h5>
                                    <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Jenis Prasarana</th>
                                                    <th class="align-middle">Jumlah (Buah)</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">SARANA KESEHATAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Jenis Sarana</th>
                                                    <th class="align-middle">Jumlah (Orang)</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PRASARANA DAN SARANA PENDIDIKAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Jenis</th>
                                                    <th class="align-middle">Sewa (Buah)</th>
                                                    <th class="align-middle">Milik Sendiri (Orang)</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwentyTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyTwo" aria-expanded="false" aria-controls="collapseTwentyTwo">
                                    PRASARANA DAN SARANA PENDIDIKAN, ENERGI / PENERANGAN, HIBURAN/WISATA, KEBERSIHAN
                            </h2>
                            <div id="collapseTwentyTwo" class="accordion-collapse collapse" aria-labelledby="headingTwentyTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="mb-3 mt-3">PRASARANA DAN SARANA PENDIDIKAN</h5>
                                    <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Jenis</th>
                                                    <th class="align-middle">Keluarga</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PRASARANA HIBURAN DAN WISATA</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Jenis</th>
                                                    <th class="align-middle">Jumlah (Orang)</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PRASARANA DAN SARANA KEBERSIHAN</h5>
                                        <a href="" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Prasarana dan Sarana</th>
                                                    <th class="align-middle">Jumlah</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanaman Pangan</td>
                                                    <td>None</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

        @endsection