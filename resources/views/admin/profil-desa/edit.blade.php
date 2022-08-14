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
                <h4 class="page-title">PROFIL DESA</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profil Desa</li>
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
        <div class="row">
            <div class="row col-12">
                @foreach($profildesa as $pfde)
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
                                                @foreach($profildesa as $pfde)
                                                <input type="text" class="form-control" id="kode_pum" name="kode_pum" value="61.01.02.{{ $pfde->kode_desa }}" readonly>
                                                @endforeach
                                            </div>
                                            <label for="name" class="col-sm-2 control-label col-form-label">Desa</label>
                                            <div class="col-sm-4">
                                                @foreach($profildesa as $pfde)
                                                <input type="text" class="form-control" id="name" name="name" value="{{ $pfde->name }}" readonly>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tahun_bentuk" class="col-sm-2 control-label col-form-label">Tahun Pembentukan</label>
                                            <div class="col-sm-4">
                                                @foreach($profildesa as $pfde)
                                                <input type="text" class="form-control" id="tahun_bentuk" name="tahun_bentuk" value="{{ $pfde->tahun_bentuk }}" readonly>
                                                @endforeach
                                            </div>
                                            <label for="kecamatan" class="col-sm-2 control-label col-form-label">Kecamatan</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ $profilkecamatan->kecamatan_nama }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kabupaten" class="col-sm-2 control-label col-form-label">Kabupaten</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="{{ $profilkecamatan->kabupaten_nama }}" readonly>
                                            </div>
                                            <label for="provinsi" class="col-sm-2 control-label col-form-label">Provinsi</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="provinsi" name="provinsi" value="{{ $profilkecamatan->provinsi_nama }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="koordinat_bujur" class="col-sm-2 control-label col-form-label">Koordinat Bujur</label>
                                            <div class="col-sm-4">
                                                @foreach($profildesa as $pfde)
                                                <input type="text" class="form-control" id="tahun_bentuk" name="tahun_bentuk" value="{{ $pfde->koordinat_bujur }}" readonly>
                                                @endforeach
                                            </div>
                                            <label for="koordinat_lintang" class="col-sm-2 control-label col-form-label">Koordinat Lintang</label>
                                            <div class="col-sm-4">
                                                @foreach($profildesa as $pfde)
                                                <input type="text" class="form-control" id="tahun_bentuk" name="tahun_bentuk" value="{{ $pfde->koordinat_lintang }}" readonly>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kepala_desa" class="col-sm-2 control-label col-form-label">Kepala Desa</label>
                                            <div class="col-sm-4">
                                                @foreach($kades as $kds)
                                                <input type="text" class="form-control" id="kepala_desa" name="kepala_desa" value="{{ $kds['name'] }}" readonly>
                                                @endforeach
                                            </div>
                                            <label for="nip_kepaladesa" class="col-sm-2 control-label col-form-label">NIP</label>
                                            <div class="col-sm-4">
                                                @foreach($kades as $kds)
                                                <input type="text" class="form-control" id="nip_kepaladesa" name="nip_kepaladesa" value="{{ $kds['nip'] }}" readonly>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <form action="<?= route('profildesakecamatan.updatePotensiUmum', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PATCH')}}
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
                                                    <input type="text" class="form-control text-uppercase" id="batas_utara_desa" name="batas_utara_desa" value="<?= isset($potensiumum->batas_utara_desa) ? $potensiumum->batas_utara_desa : '' ?>">
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control text-uppercase" id="batas_utara_kec" name="batas_utara_kec" value="<?= isset($potensiumum->batas_utara_kec) ? $potensiumum->batas_utara_kec : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="batas_selatan_desa" class="col-sm-2 control-label col-form-label">Batas Selatan</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control text-uppercase" id="batas_selatan_desa" name="batas_selatan_desa" value="<?= isset($potensiumum->batas_selatan_desa) ? $potensiumum->batas_selatan_desa : '' ?>">
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control text-uppercase" id="batas_selatan_kec" name="batas_selatan_kec" value="<?= isset($potensiumum->batas_selatan_kec) ? $potensiumum->batas_selatan_kec : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="batas_timur_desa" class="col-sm-2 control-label col-form-label">Batas Timur</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control text-uppercase" id="batas_timur_desa" name="batas_timur_desa" value="<?= isset($potensiumum->batas_timur_desa) ? $potensiumum->batas_timur_desa : '' ?>">
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control text-uppercase" id="batas_timur_kec" name="batas_timur_kec" value="<?= isset($potensiumum->batas_timur_kec) ? $potensiumum->batas_timur_kec : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="batas_barat_desa" class="col-sm-2 control-label col-form-label">Batas Barat</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control text-uppercase" id="batas_barat_desa" name="batas_barat_desa" value="<?= isset($potensiumum->batas_barat_desa) ? $potensiumum->batas_barat_desa : '' ?>">
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control text-uppercase" id="batas_barat_kec" name="batas_barat_kec" value="<?= isset($potensiumum->batas_barat_kec) ? $potensiumum->batas_barat_kec : ''  ?>">
                                                </div>
                                            </div>
                                            <div class="border-top">
                                                <h5 class="accordion-header text-center mt-3 mb-3"> Penetapan Batas dan Peta Wilayah</h5>
                                            </div>
                                            <div class="form-group row">
                                                <label for="penetapan_batas" class="col-sm-2 control-label col-form-label">Penetapan Batas</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="penetapan_batas">
                                                        <option value="Sudah Ada" {{ old('penetapan_batas', isset($potensiumum->penetapan_batas) ? $potensiumum->penetapan_batas :'') == 'Sudah Ada' ? 'selected' : '' }}>
                                                            Sudah Ada
                                                        </option>
                                                        <option value="Belum Ada" {{ old('penetapan_batas', isset($potensiumum->penetapan_batas) ? $potensiumum->penetapan_batas :'') == 'Belum Ada' ? 'selected' : '' }}>
                                                            Belum Ada
                                                        </option>
                                                    </select>
                                                </div>
                                                <label for="peta_wilayah" class="col-sm-2 control-label col-form-label">Peta Wilayah</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="peta_wilayah">
                                                        <option value="Ada" {{ old('peta_wilayah', isset($potensiumum->peta_wilayah) ? $potensiumum->peta_wilayah : '') == 'Ada' ? 'selected' : '' }}>
                                                            Ada
                                                        </option>
                                                        <option value="Tidak Ada" {{ old('peta_wilayah', isset($potensiumum->peta_wilayah) ? $potensiumum->peta_wilayah : '') == 'Tidak Ada' ? 'selected' : '' }}>
                                                            Tidak Ada
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="perdes_no" class="col-sm-2 control-label col-form-label">Perdes No</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="perdes_no" name="perdes_no" value="<?= isset($potensiumum->perdes_no) ? $potensiumum->perdes_no : '' ?>">
                                                </div>
                                                <label for="perda_no" class="col-sm-2 control-label col-form-label">Perda No</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="perda_no" name="perda_no" value="<?= isset($potensiumum->perda_no) ? $potensiumum->perda_no : '' ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top">
                                            <div class="card-body">
                                                <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="accordion-item">
                                <form action="<?= route('profildesakecamatan.updateDataTanah', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PATCH')}}
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
                                                    <input type="text" class="form-control" id="sawah_irigasi_teknis" name="sawah_irigasi_teknis" value="<?= isset($datatanah->sawah_irigasi_teknis) ? $datatanah->sawah_irigasi_teknis : '' ?>">
                                                </div>
                                                <label for=" sawah_irigasi_sth_teknis" class="col-sm-2 control-label col-form-label">Sawah Irigasi 1/2 Teknis</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="sawah_irigasi_sth_teknis" name="sawah_irigasi_sth_teknis" value="<?= isset($datatanah->sawah_irigasi_sth_teknis) ? $datatanah->sawah_irigasi_sth_teknis : '' ?>">
                                                </div>
                                                <label for="sawah_tadah_hujan" class="col-sm-2 control-label col-form-label">Sawah Tadah Hujan</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="sawah_tadah_hujan" name="sawah_tadah_hujan" value="<?= isset($datatanah->sawah_tadah_hujan) ? $datatanah->sawah_tadah_hujan : '' ?>">
                                                </div>
                                                <label for="sawah_pasang_surut" class="col-sm-2 control-label col-form-label">Sawah Pasang Surut</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="sawah_pasang_surut" name="sawah_pasang_surut" value="<?= isset($datatanah->sawah_pasang_surut) ? $datatanah->sawah_pasang_surut : '' ?>">
                                                </div>
                                            </div>
                                            <div class="border-top">
                                                <h5 class="accordion-header text-center mt-3 mb-3"> Tanah Kering (Ha)</h5>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tegal_ladang" class="col-sm-2 control-label col-form-label">Tegal/Ladang</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="tegal_ladang" name="tegal_ladang" value="<?= isset($datatanah->tegal_ladang) ? $datatanah->tegal_ladang : '' ?>">
                                                </div>
                                                <label for="pemukiman" class="col-sm-2 control-label col-form-label">Pemukiman</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="pemukiman" name="pemukiman" value="<?= isset($datatanah->pemukiman) ? $datatanah->pemukiman : '' ?>">
                                                </div>
                                                <label for="pekarangan" class="col-sm-2 control-label col-form-label">Pekarangan</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="pekarangan" name="pekarangan" value="<?= isset($datatanah->pekarangan) ? $datatanah->pekarangan : '' ?>">
                                                </div>
                                            </div>
                                            <div class="border-top">
                                                <h5 class="accordion-header text-center mt-3 mb-3"> Tanah Basah (Ha)</h5>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tanah_rawa" class="col-sm-2 control-label col-form-label">Tanah Rawa</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="tanah_rawa" name="tanah_rawa" value="<?= isset($datatanah->tanah_rawa) ? $datatanah->tanah_rawa : '' ?>">
                                                </div>
                                                <label for="pasang_surut" class="col-sm-2 control-label col-form-label">Pasang Surut</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="pasang_surut" name="pasang_surut" value="<?= isset($datatanah->pasang_surut) ? $datatanah->pasang_surut : '' ?>">
                                                </div>
                                                <label for="lahan_gambut" class="col-sm-2 control-label col-form-label">Lahan Gambut</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="lahan_gambut" name="lahan_gambut" value="<?= isset($datatanah->lahan_gambut) ? $datatanah->lahan_gambut : '' ?>">
                                                </div>
                                                <label for="situ_waduk_danau" class="col-sm-2 control-label col-form-label">Situ/Waduk/Danau</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="situ_waduk_danau" name="situ_waduk_danau" value="<?= isset($datatanah->situ_waduk_danau) ? $datatanah->situ_waduk_danau : '' ?>">
                                                </div>
                                            </div>
                                            <div class="border-top">
                                                <h5 class="accordion-header text-center mt-3 mb-3"> Tanah Perkebunan (Ha)</h5>
                                            </div>
                                            <div class="form-group row">
                                                <label for="perkebunan_rakyat" class="col-sm-2 control-label col-form-label">Perkebunan Rakyat</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="perkebunan_rakyat" name="perkebunan_rakyat" value="<?= isset($datatanah->perkebunan_rakyat) ? $datatanah->perkebunan_rakyat : '' ?>">
                                                </div>
                                                <label for="perkebunan_negara" class="col-sm-2 control-label col-form-label">Perkebunan Negara</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="perkebunan_negara" name="perkebunan_negara" value="<?= isset($datatanah->perkebunan_negara) ? $datatanah->perkebunan_negara : '' ?>">
                                                </div>
                                                <label for="perkebunan_swasta" class="col-sm-2 control-label col-form-label">Perkebunan Swasta</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="perkebunan_swasta" name="perkebunan_swasta" value="<?= isset($datatanah->perkebunan_swasta) ? $datatanah->perkebunan_swasta : '' ?>">
                                                </div>
                                                <label for="perkebunan_perorangan" class="col-sm-2 control-label col-form-label">Perkebunan Perorangan</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="perkebunan_perorangan" name="perkebunan_perorangan" value="<?= isset($datatanah->perkebunan_perorangan) ? $datatanah->perkebunan_perorangan : '' ?>">
                                                </div>
                                            </div>
                                            <div class="border-top">
                                                <h5 class="accordion-header text-center mt-3 mb-3"> Tanah Fasilitas Umum (Ha)</h5>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 control-label col-form-label">Kas Desa/Kelurahan:</label>
                                                <label for="tanah_bengkok" class="col-sm-2 control-label col-form-label">Tanah Bengkok</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="tanah_bengkok" name="tanah_bengkok" value="<?= isset($datatanah->tanah_bengkok) ? $datatanah->tanah_bengkok : '' ?>">
                                                </div>
                                                <label for="tanah_titi_sara" class="col-sm-2 control-label col-form-label">Tanah Titi Sara</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="tanah_titi_sara" name="tanah_titi_sara" value="<?= isset($datatanah->tanah_titi_sara) ? $datatanah->tanah_titi_sara : '' ?>">
                                                </div>
                                                <label for="kebun_desa" class="col-sm-2 control-label col-form-label">Kebun Desa</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="kebun_desa" name="kebun_desa" value="<?= isset($datatanah->kebun_desa) ? $datatanah->kebun_desa : '' ?>">
                                                </div>
                                                <label for="sawah_desa" class="col-sm-2 control-label col-form-label">Sawah Desa</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="sawah_desa" name="sawah_desa" value="<?= isset($datatanah->sawah_desa) ? $datatanah->sawah_desa : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lapangan_olahraga" class="col-sm-2 control-label col-form-label">Lapangan Olahraga</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="lapangan_olahraga" name="lapangan_olahraga" value="<?= isset($datatanah->lapangan_olahraga) ? $datatanah->lapangan_olahraga : '' ?>">
                                                </div>
                                                <label for="perkantoran_pemerintah" class="col-sm-2 control-label col-form-label">Perkantoran Pemerintah</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="perkantoran_pemerintah" name="perkantoran_pemerintah" value="<?= isset($datatanah->perkantoran_pemerintah) ? $datatanah->perkantoran_pemerintah : '' ?>">
                                                </div>
                                                <label for="ruang_publik" class="col-sm-2 control-label col-form-label">Ruang Publik/Taman</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="ruang_publik" name="ruang_publik" value="<?= isset($datatanah->ruang_publik) ? $datatanah->ruang_publik : '' ?>">
                                                </div>
                                                <label for="tempat_pemakaman_desa_umum" class="col-sm-2 control-label col-form-label">Pemakaman Desa/Umum</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="tempat_pemakaman_desa_umum" name="tempat_pemakaman_desa_umum" value="<?= isset($datatanah->tempat_pemakaman_desa_umum) ? $datatanah->tempat_pemakaman_desa_umum : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="pembuangan_sampah" class="col-sm-2 control-label col-form-label">Pembuangan Sampah</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="pembuangan_sampah" name="pembuangan_sampah" value="<?= isset($datatanah->pembuangan_sampah) ? $datatanah->pembuangan_sampah : '' ?>">
                                                </div>
                                                <label for="bangunan_sekolah_pt" class="col-sm-2 control-label col-form-label">Bangunan Sekolah/PT</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="bangunan_sekolah_pt" name="bangunan_sekolah_pt" value="<?= isset($datatanah->bangunan_sekolah_pt) ? $datatanah->bangunan_sekolah_pt : '' ?>">
                                                </div>
                                                <label for="pertokoan" class="col-sm-2 control-label col-form-label">Pertokoan</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="pertokoan" name="pertokoan" value="<?= isset($datatanah->pertokoan) ? $datatanah->pertokoan : '' ?>">
                                                </div>
                                                <label for="fasilitas_pasar" class="col-sm-2 control-label col-form-label">Fasilitas Pasar</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="fasilitas_pasar" name="fasilitas_pasar" value="<?= isset($datatanah->fasilitas_pasar) ? $datatanah->fasilitas_pasar : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="terminal" class="col-sm-2 control-label col-form-label">Terminal</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="terminal" name="terminal" value="<?= isset($datatanah->terminal) ? $datatanah->terminal : '' ?>">
                                                </div>
                                                <label for="jalan" class="col-sm-2 control-label col-form-label">Jalan</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="jalan" name="jalan" value="<?= isset($datatanah->jalan) ? $datatanah->jalan : '' ?>">
                                                </div>
                                                <label for="daerah_tangkapan_air" class="col-sm-2 control-label col-form-label">Daerah Tangkapan Air</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="daerah_tangkapan_air" name="daerah_tangkapan_air" value="<?= isset($datatanah->daerah_tangkapan_air) ? $datatanah->daerah_tangkapan_air : '' ?>">
                                                </div>
                                                <label for="usaha_perikanan" class="col-sm-2 control-label col-form-label">Usaha Perikanan</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="usaha_perikanan" name="usaha_perikanan" value="<?= isset($datatanah->usaha_perikanan) ? $datatanah->usaha_perikanan : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="sutet_aliranlistrik" class="col-sm-3 control-label col-form-label">Sutet/Aliran Listrik Tegangan Tinggi</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="sutet_aliranlistrik" name="sutet_aliranlistrik" value="<?= isset($datatanah->sutet_aliranlistrik) ? $datatanah->sutet_aliranlistrik : '' ?>">
                                                </div>
                                            </div>
                                            <div class="border-top">
                                                <h5 class="accordion-header text-center mt-3 mb-3"> Tanah Hutan (Ha)</h5>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 control-label col-form-label">Hutan Produksi:</label>
                                                <label for="hutan_produksi_tetap" class="col-sm-2 control-label col-form-label">Hutan Produksi Tetap</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="hutan_produksi_tetap" name="hutan_produksi_tetap" value="<?= isset($datatanah->hutan_produksi_tetap) ? $datatanah->hutan_produksi_tetap : '' ?>">
                                                </div>
                                                <label for="hutan_terbatas" class="col-sm-2 control-label col-form-label">Hutan Terbatas</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="hutan_terbatas" name="hutan_terbatas" value="<?= isset($datatanah->hutan_terbatas) ? $datatanah->hutan_terbatas : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="hutan_konservasi" class="col-sm-2 control-label col-form-label">Hutan Konservasi</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="hutan_konservasi" name="hutan_konservasi" value="<?= isset($datatanah->hutan_konservasi) ? $datatanah->hutan_konservasi : '' ?>">
                                                </div>
                                                <label for="hutan_adat" class="col-sm-2 control-label col-form-label">Hutan Adat</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="hutan_adat" name="hutan_adat" value="<?= isset($datatanah->hutan_adat) ? $datatanah->hutan_adat : '' ?>">
                                                </div>
                                                <label for="hutan_asli" class="col-sm-2 control-label col-form-label">Hutan Asli</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="hutan_asli" name="hutan_asli" value="<?= isset($datatanah->hutan_asli) ? $datatanah->hutan_asli : '' ?>">
                                                </div>
                                                <label for="hutan_sekunder" class="col-sm-2 control-label col-form-label">Hutan Sekunder</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="hutan_sekunder" name="hutan_sekunder" value="<?= isset($datatanah->hutan_sekunder) ? $datatanah->hutan_sekunder : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="hutan_buatan" class="col-sm-2 control-label col-form-label">Hutan Buatan</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="hutan_buatan" name="hutan_buatan" value="<?= isset($datatanah->hutan_buatan) ? $datatanah->hutan_buatan : '' ?>">
                                                </div>
                                                <label for="hutan_mangrove" class="col-sm-2 control-label col-form-label">Hutan Mangrove</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="hutan_mangrove" name="hutan_mangrove" value="<?= isset($datatanah->hutan_mangrove) ? $datatanah->hutan_mangrove : '' ?>">
                                                </div>
                                                <label for="hutan_rakyat" class="col-sm-2 control-label col-form-label">Hutan Rakyat</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="hutan_rakyat" name="hutan_rakyat" value="<?= isset($datatanah->hutan_rakyat) ? $datatanah->hutan_rakyat : '' ?>">
                                                </div>
                                                <label for="hutan_lindung" class="col-sm-2 control-label col-form-label">Hutan Lindung</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="hutan_lindung" name="hutan_lindung" value="<?= isset($datatanah->hutan_lindung) ? $datatanah->hutan_lindung : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 control-label col-form-label">Hutan Suaka:</label>
                                                <label for="suaka_alam" class="col-sm-2 control-label col-form-label">Suaka Alam</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="suaka_alam" name="suaka_alam" value="<?= isset($datatanah->suaka_alam) ? $datatanah->suaka_alam : '' ?>">
                                                </div>
                                                <label for="suaka_margasatwa" class="col-sm-2 control-label col-form-label">Suaka Margasatwa</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="suaka_margasatwa" name="suaka_margasatwa" value="<?= isset($datatanah->suaka_margasatwa) ? $datatanah->suaka_margasatwa : '' ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top">
                                            <div class="card-body">
                                                <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="accordion-item">
                                <form action="<?= route('profildesakecamatan.updateIklimJenisKesuburanTanah', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PATCH')}}
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            IKLIM, JENIS & KESUBURAN TANAH
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h5 class="accordion-header text-center mb-3">Iklim</h5>
                                            <div class="form-group row">
                                                <label for="curah_hujan" class="col-sm-2 control-label col-form-label">Curah Hujan</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="curah_hujan" name="curah_hujan" value="<?= isset($iklimjeniskesuburantanah->curah_hujan) ? $iklimjeniskesuburantanah->curah_hujan : '' ?>">
                                                </div>
                                                <label for="jumlah_bulan_hujan" class="col-sm-2 control-label col-form-label">Jumlah Bulan Hujan</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="jumlah_bulan_hujan" name="jumlah_bulan_hujan" value="<?= isset($iklimjeniskesuburantanah->jumlah_bulan_hujan) ? $iklimjeniskesuburantanah->jumlah_bulan_hujan : '' ?>">
                                                </div>
                                                <label for="kelembapan" class="col-sm-2 control-label col-form-label">Kelembapan</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="kelembapan" name="kelembapan" value="<?= isset($iklimjeniskesuburantanah->kelembapan) ? $iklimjeniskesuburantanah->kelembapan : '' ?>">
                                                </div>
                                                <label for="suhu_rata_rata_harian" class="col-sm-2 control-label col-form-label">Suhu Rata-Rata Harian</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="suhu_rata_rata_harian" name="suhu_rata_rata_harian" value="<?= isset($iklimjeniskesuburantanah->suhu_rata_rata_harian) ? $iklimjeniskesuburantanah->suhu_rata_rata_harian : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tinggi_tempat_permukaan_laut" class="col-sm-2 control-label col-form-label">Tinggi Tempat dari Permukaan Laut</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="tinggi_tempat_permukaan_laut" name="tinggi_tempat_permukaan_laut" value="<?= isset($iklimjeniskesuburantanah->tinggi_tempat_permukaan_laut) ? $iklimjeniskesuburantanah->tinggi_tempat_permukaan_laut : '' ?>">
                                                </div>
                                            </div>
                                            <div class="border-top">
                                                <h5 class="accordion-header text-center mt-3 mb-3"> Jenis dan Kesuburan Tanah</h5>
                                            </div>
                                            <div class="form-group row">
                                                <label for="warna_tanah" class="col-sm-2 control-label col-form-label">Warna Tanah</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="warna_tanah" name="warna_tanah" value="<?= isset($iklimjeniskesuburantanah->warna_tanah) ? $iklimjeniskesuburantanah->warna_tanah : '' ?>">
                                                </div>
                                                <label for="tekstur_tanah" class="col-sm-2 control-label col-form-label">Tekstur Tanah</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="tekstur_tanah" name="tekstur_tanah" value="<?= isset($iklimjeniskesuburantanah->tekstur_tanah) ? $iklimjeniskesuburantanah->tekstur_tanah : '' ?>">
                                                </div>
                                                <label for="tk_kemiringan_tanah" class="col-sm-2 control-label col-form-label">Tingkat Kemiringan Tanah</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="tk_kemiringan_tanah" name="tk_kemiringan_tanah" value="<?= isset($iklimjeniskesuburantanah->tk_kemiringan_tanah) ? $iklimjeniskesuburantanah->tk_kemiringan_tanah : '' ?>">
                                                </div>
                                                <label for="lahan_kritis" class="col-sm-2 control-label col-form-label">Lahan Kritis</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="lahan_kritis" name="lahan_kritis" value="<?= isset($iklimjeniskesuburantanah->lahan_kritis) ? $iklimjeniskesuburantanah->lahan_kritis : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lahan_terlantar" class="col-sm-2 control-label col-form-label">Lahan Terlantar</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="lahan_terlantar" name="lahan_terlantar" value="<?= isset($iklimjeniskesuburantanah->lahan_terlantar) ? $iklimjeniskesuburantanah->lahan_terlantar : '' ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top">
                                            <div class="card-body">
                                                <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="accordion-item">
                                <form action="<?= route('profildesakecamatan.updateTopografiLetakOrbitasi', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PATCH')}}
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
                                                    <input type="text" class="form-control" id="daratan_rendah" name="daratan_rendah" value="<?= isset($topografiletakorbitasi->daratan_rendah) ? $topografiletakorbitasi->daratan_rendah : '' ?>">
                                                </div>
                                                <label for="berbukit_bukit" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Berbukit-bukit</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="berbukit_bukit" name="berbukit_bukit" value="<?= isset($topografiletakorbitasi->berbukit_bukit) ? $topografiletakorbitasi->berbukit_bukit : '' ?>">
                                                </div>
                                                <label for="daratan_tinggi" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Daratan Tinggi/Pegunungan</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="daratan_tinggi" name="daratan_tinggi" value="<?= isset($topografiletakorbitasi->daratan_tinggi) ? $topografiletakorbitasi->daratan_tinggi : '' ?>">
                                                </div>
                                                <label for="lereng_gunung" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Lereng Gunung</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="lereng_gunung" name="lereng_gunung" value="<?= isset($topografiletakorbitasi->lereng_gunung) ? $topografiletakorbitasi->lereng_gunung : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tepi_pantai" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Tepi Pantai/Pesisir</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="tepi_pantai" name="tepi_pantai" value="<?= isset($topografiletakorbitasi->tepi_pantai) ? $topografiletakorbitasi->tepi_pantai : '' ?>">
                                                </div>
                                                <label for="kawasan_rawa" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Kawasan Rawa</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="kawasan_rawa" name="kawasan_rawa" value="<?= isset($topografiletakorbitasi->kawasan_rawa) ? $topografiletakorbitasi->kawasan_rawa : '' ?>">
                                                </div>
                                                <label for="kawasan_gambut" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Kawasan Gambut</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="kawasan_gambut" name="kawasan_gambut" value="<?= isset($topografiletakorbitasi->kawasan_gambut) ? $topografiletakorbitasi->kawasan_gambut : '' ?>">
                                                </div>
                                                <label for="aliran_sungai" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Aliran Sungai</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="aliran_sungai" name="aliran_sungai" value="<?= isset($topografiletakorbitasi->aliran_sungai) ? $topografiletakorbitasi->aliran_sungai : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="bantaran_sungai" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Bantaran Sungai</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="bantaran_sungai" name="bantaran_sungai" value="<?= isset($topografiletakorbitasi->bantaran_sungai) ? $topografiletakorbitasi->bantaran_sungai : '' ?>">
                                                </div>
                                            </div>
                                            <div class="border-top">
                                                <h5 class="accordion-header text-center mt-3 mb-3">Letak</h5>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kawasan_perkantoran" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Kawasan Perkantoran</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="kawasan_perkantoran" name="kawasan_perkantoran" value="<?= isset($topografiletakorbitasi->kawasan_perkantoran) ? $topografiletakorbitasi->kawasan_perkantoran : '' ?>">
                                                </div>
                                                <label for="kawasan_pertokoan" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Kawasan Pertokoan Bisnis</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="kawasan_pertokoan" name="kawasan_pertokoan" value="<?= isset($topografiletakorbitasi->kawasan_pertokoan) ? $topografiletakorbitasi->kawasan_pertokoan : '' ?>">
                                                </div>
                                                <label for="kawasan_campuran" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Kawasan Campuran</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="kawasan_campuran" name="kawasan_campuran" value="<?= isset($topografiletakorbitasi->kawasan_campuran) ? $topografiletakorbitasi->kawasan_campuran : '' ?>">
                                                </div>
                                                <label for="kawasan_industri" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Kawasan Industri</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="kawasan_industri" name="kawasan_industri" value="<?= isset($topografiletakorbitasi->kawasan_industri) ? $topografiletakorbitasi->kawasan_industri : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kepulauan" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Kepulauan</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="kepulauan" name="kepulauan" value="<?= isset($topografiletakorbitasi->kepulauan) ? $topografiletakorbitasi->kepulauan : '' ?>">
                                                </div>
                                                <label for="pantai_pesisir" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Pantai Pesisir</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="pantai_pesisir" name="pantai_pesisir" value="<?= isset($topografiletakorbitasi->pantai_pesisir) ? $topografiletakorbitasi->pantai_pesisir : '' ?>">
                                                </div>
                                                <label for="kawasan_hutan" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Kawasan Hutan</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="kawasan_hutan" name="kawasan_hutan" value="<?= isset($topografiletakorbitasi->kawasan_hutan) ? $topografiletakorbitasi->kawasan_hutan : '' ?>">
                                                </div>
                                                <label for="taman_suaka" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Taman Suaka</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="taman_suaka" name="taman_suaka" value="<?= isset($topografiletakorbitasi->taman_suaka) ? $topografiletakorbitasi->taman_suaka : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kawasan_wisata" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Kawasan Wisata</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="kawasan_wisata" name="kawasan_wisata" value="<?= isset($topografiletakorbitasi->kawasan_wisata) ? $topografiletakorbitasi->kawasan_wisata : '' ?>">
                                                </div>
                                                <label for="batas_negara_lain" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Perbatasan dengan Negara Lain</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="batas_negara_lain" name="batas_negara_lain" value="<?= isset($topografiletakorbitasi->batas_negara_lain) ? $topografiletakorbitasi->batas_negara_lain : '' ?>">
                                                </div>
                                                <label for="batas_provinsi_lain" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Perbatasan dengan Provinsi Lain</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="batas_provinsi_lain" name="batas_provinsi_lain" value="<?= isset($topografiletakorbitasi->batas_provinsi_lain) ? $topografiletakorbitasi->batas_provinsi_lain : '' ?>">
                                                </div>
                                                <label for="batas_kabupaten_lain" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Perbatasan dengan Kabupaten Lain</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="batas_kabupaten_lain" name="batas_kabupaten_lain" value="<?= isset($topografiletakorbitasi->batas_kabupaten_lain) ? $topografiletakorbitasi->batas_kabupaten_lain : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="batas_antar_kecamatan" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Perbatasan Antar Kecamatan Lain</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="batas_antar_kecamatan" name="batas_antar_kecamatan" value="<?= isset($topografiletakorbitasi->batas_antar_kecamatan) ? $topografiletakorbitasi->batas_antar_kecamatan : '' ?>">
                                                </div>
                                                <label for="das_bantaransungai" class="col-sm-2 control-label col-form-label">Desa/Kelurahan DAS/Bantaran Sungai</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="das_bantaransungai" name="das_bantaransungai" value="<?= isset($topografiletakorbitasi->das_bantaransungai) ? $topografiletakorbitasi->das_bantaransungai : '' ?>">
                                                </div>
                                                <label for="rawan_banjir" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Rawan Banjir</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="rawan_banjir" name="rawan_banjir" value="<?= isset($topografiletakorbitasi->rawan_banjir) ? $topografiletakorbitasi->rawan_banjir : '' ?>">
                                                </div>
                                                <label for="bebas_banjir" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Bebas Banjir</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="bebas_banjir" name="bebas_banjir" value="<?= isset($topografiletakorbitasi->bebas_banjir) ? $topografiletakorbitasi->bebas_banjir : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="potensial_tsunami" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Potensial Tsunami</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="potensial_tsunami" name="potensial_tsunami" value="<?= isset($topografiletakorbitasi->potensial_tsunami) ? $topografiletakorbitasi->potensial_tsunami : '' ?>">
                                                </div>
                                                <label for="rawan_jalur_gempa" class="col-sm-2 control-label col-form-label">Desa/Kelurahan Rawan Jalur Gempa Bumi</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="rawan_jalur_gempa" name="rawan_jalur_gempa" value="<?= isset($topografiletakorbitasi->rawan_jalur_gempa) ? $topografiletakorbitasi->rawan_jalur_gempa : '' ?>">
                                                </div>
                                            </div>
                                            <div class="border-top">
                                                <h5 class="accordion-header text-center mt-3 mb-3">Orbitasi</h5>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jarak_kecamatan" class="col-sm-2 control-label col-form-label">Jarak ke Ibu Kota Kecamatan (Km) </label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="jarak_kecamatan" name="jarak_kecamatan" value="<?= isset($topografiletakorbitasi->jarak_kecamatan) ? $topografiletakorbitasi->jarak_kecamatan : '' ?>">
                                                </div>
                                                <label for="waktu_kecamatan_motor" class="col-sm-2 control-label col-form-label">Lama Jarak Tempuh ke Ibukota Kecamatan dengan Kendaraan Bermotor (Jam)</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="waktu_kecamatan_motor" name="waktu_kecamatan_motor" value="<?= isset($topografiletakorbitasi->waktu_kecamatan_motor) ? $topografiletakorbitasi->waktu_kecamatan_motor : '' ?>">
                                                </div>
                                                <label for="waktu_kecamatan_nonmotor" class="col-sm-2 control-label col-form-label">Lama Jarak Tempuh ke Ibukota Kecamatan dengan Berjalan Kaki atau Kendaraan Non Bermotor (Jam)</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="waktu_kecamatan_nonmotor" name="waktu_kecamatan_nonmotor" value="<?= isset($topografiletakorbitasi->waktu_kecamatan_nonmotor) ? $topografiletakorbitasi->waktu_kecamatan_nonmotor : '' ?>">
                                                </div>
                                                <label for="jumlah_kendaraanumum_kecamatan" class="col-sm-2 control-label col-form-label">Jumlah Kendaraan Umum ke Ibu Kota Kecamatan (Unit)</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="jumlah_kendaraanumum_kecamatan" name="jumlah_kendaraanumum_kecamatan" value="<?= isset($topografiletakorbitasi->jumlah_kendaraanumum_kecamatan) ? $topografiletakorbitasi->jumlah_kendaraanumum_kecamatan : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jarak_kabupaten" class="col-sm-2 control-label col-form-label">Jarak ke Ibu Kota Kabupaten/Kota (Km) </label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="jarak_kabupaten" name="jarak_kabupaten" value="<?= isset($topografiletakorbitasi->jarak_kabupaten) ? $topografiletakorbitasi->jarak_kabupaten : '' ?>">
                                                </div>
                                                <label for="waktu_kabupaten_motor" class="col-sm-2 control-label col-form-label">Lama Jarak Tempuh ke Ibukota Kabupaten dengan Kendaraan Bermotor (Jam)</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="waktu_kabupaten_motor" name="waktu_kabupaten_motor" value="<?= isset($topografiletakorbitasi->waktu_kabupaten_motor) ? $topografiletakorbitasi->waktu_kabupaten_motor : '' ?>">
                                                </div>
                                                <label for="waktu_kabupaten_nonmotor" class="col-sm-2 control-label col-form-label">Lama Jarak Tempuh ke Ibukota Kabupaten dengan Berjalan Kaki atau Kendaraan Non Bermotor (Jam)</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="waktu_kabupaten_nonmotor" name="waktu_kabupaten_nonmotor" value="<?= isset($topografiletakorbitasi->waktu_kabupaten_nonmotor) ? $topografiletakorbitasi->waktu_kabupaten_nonmotor : '' ?>">
                                                </div>
                                                <label for="jumlah_kendaraanumum_kabupaten" class="col-sm-2 control-label col-form-label">Jumlah Kendaraan Umum ke Ibu Kota kabupaten/Kota (Unit)</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="jumlah_kendaraanumum_kabupaten" name="jumlah_kendaraanumum_kabupaten" value="<?= isset($topografiletakorbitasi->jumlah_kendaraanumum_kabupaten) ? $topografiletakorbitasi->jumlah_kendaraanumum_kabupaten : '' ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jarak_provinsi" class="col-sm-2 control-label col-form-label">Jarak ke Ibu Kota Provinsi (Km) </label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="jarak_provinsi" name="jarak_provinsi" value="<?= isset($topografiletakorbitasi->jarak_provinsi) ? $topografiletakorbitasi->jarak_provinsi : '' ?>">
                                                </div>
                                                <label for="waktu_provinsi_motor" class="col-sm-2 control-label col-form-label">Lama Jarak Tempuh ke Ibukota Provinsi dengan Kendaraan Bermotor (Jam)</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="waktu_provinsi_motor" name="waktu_provinsi_motor" value="<?= isset($topografiletakorbitasi->waktu_provinsi_motor) ? $topografiletakorbitasi->waktu_provinsi_motor : '' ?>">
                                                </div>
                                                <label for="waktu_provinsi_nonmotor" class="col-sm-2 control-label col-form-label">Lama Jarak Tempuh ke Ibukota Provinsi dengan Berjalan Kaki atau Kendaraan Non Bermotor (Jam)</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="waktu_provinsi_nonmotor" name="waktu_provinsi_nonmotor" value="<?= isset($topografiletakorbitasi->waktu_provinsi_nonmotor) ? $topografiletakorbitasi->waktu_provinsi_nonmotor : '' ?>">
                                                </div>
                                                <label for="jumlah_kendaraanumum_provinsi" class="col-sm-2 control-label col-form-label">Jumlah Kendaraan Umum ke Ibu Kota Provinsi (Unit)</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" id="jumlah_kendaraanumum_provinsi" name="jumlah_kendaraanumum_provinsi" value="<?= isset($topografiletakorbitasi->jumlah_kendaraanumum_provinsi) ? $topografiletakorbitasi->jumlah_kendaraanumum_provinsi : '' ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top">
                                            <div class="card-body">
                                                <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        POTENSI PERTANIAN
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h5 class="accordion-header text-center mb-3">Kepemilikan Lahan</h5>
                                        <h5 class="mb-3">A. PERTANIAN</h5>
                                        <form action="<?= route('profildesakecamatan.updatePertanian', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            {{ method_field('PATCH')}}
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
                                                            <td><input type="number" class="form-control" id="pangan_kurang5ha" name="pangan_kurang5ha" value="<?= isset($pertanian->pangan_kurang5ha) ? $pertanian->pangan_kurang5ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="pangan_5_10ha" name="pangan_5_10ha" value="<?= isset($pertanian->pangan_5_10ha) ? $pertanian->pangan_5_10ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="pangan_10_50ha" name="pangan_10_50ha" value="<?= isset($pertanian->pangan_10_50ha) ? $pertanian->pangan_10_50ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="pangan_50_100ha" name="pangan_50_100ha" value="<?= isset($pertanian->pangan_50_100ha) ? $pertanian->pangan_50_100ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="pangan_100_500ha" name="pangan_100_500ha" value="<?= isset($pertanian->pangan_100_500ha) ? $pertanian->pangan_100_500ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="pangan_500_1000ha" name="pangan_500_1000ha" value="<?= isset($pertanian->pangan_500_1000ha) ? $pertanian->pangan_500_1000ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="pangan_lebih1000ha" name="pangan_lebih1000ha" value="<?= isset($pertanian->pangan_lebih1000ha) ? $pertanian->pangan_lebih1000ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="pangan_memilikilahan" name="pangan_memilikilahan" value="<?= isset($pertanian->pangan_memilikilahan) ? $pertanian->pangan_memilikilahan : '' ?>" readonly></td>
                                                            <td><input type="number" class="form-control" id="pangan_tidakmemilikilahan" name="pangan_tidakmemilikilahan" value="<?= isset($pertanian->pangan_tidakmemilikilahan) ? $pertanian->pangan_tidakmemilikilahan : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="pangan_totallahan" name="pangan_totallahan" value="<?= isset($pertanian->pangan_totallahan) ? $pertanian->pangan_totallahan : '' ?>" readonly></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanaman Buah-Buahan</td>
                                                            <td><input type="number" class="form-control" id="buah_kurang5ha" name="buah_kurang5ha" value="<?= isset($pertanian->buah_kurang5ha) ? $pertanian->buah_kurang5ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="buah_5_10ha" name="buah_5_10ha" value="<?= isset($pertanian->buah_5_10ha) ? $pertanian->buah_5_10ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="buah_10_50ha" name="buah_10_50ha" value="<?= isset($pertanian->buah_10_50ha) ? $pertanian->buah_10_50ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="buah_50_100ha" name="buah_50_100ha" value="<?= isset($pertanian->buah_50_100ha) ? $pertanian->buah_50_100ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="buah_100_500ha" name="buah_100_500ha" value="<?= isset($pertanian->buah_100_500ha) ? $pertanian->buah_100_500ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="buah_500_1000ha" name="buah_500_1000ha" value="<?= isset($pertanian->buah_500_1000ha) ? $pertanian->buah_500_1000ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="buah_lebih1000ha" name="buah_lebih1000ha" value="<?= isset($pertanian->buah_lebih1000ha) ? $pertanian->buah_lebih1000ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="buah_memilikilahan" name="buah_memilikilahan" value="<?= isset($pertanian->buah_memilikilahan) ? $pertanian->buah_memilikilahan : '' ?>" readonly></td>
                                                            <td><input type="number" class="form-control" id="buah_tidakmemilikilahan" name="buah_tidakmemilikilahan" value="<?= isset($pertanian->buah_tidakmemilikilahan) ? $pertanian->buah_tidakmemilikilahan : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="buah_totallahan" name="buah_totallahan" value="<?= isset($pertanian->buah_totallahan) ? $pertanian->buah_totallahan : '' ?>" readonly></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanaman Perkebunan</td>
                                                            <td><input type="number" class="form-control" id="kebun_kurang5ha" name="kebun_kurang5ha" value="<?= isset($pertanian->kebun_kurang5ha) ? $pertanian->kebun_kurang5ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="kebun_5_10ha" name="kebun_5_10ha" value="<?= isset($pertanian->kebun_5_10ha) ? $pertanian->kebun_5_10ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="kebun_10_50ha" name="kebun_10_50ha" value="<?= isset($pertanian->kebun_10_50ha) ? $pertanian->kebun_10_50ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="kebun_50_100ha" name="kebun_50_100ha" value="<?= isset($pertanian->kebun_50_100ha) ? $pertanian->kebun_50_100ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="kebun_100_500ha" name="kebun_100_500ha" value="<?= isset($pertanian->kebun_100_500ha) ? $pertanian->kebun_100_500ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="kebun_500_1000ha" name="kebun_500_1000ha" value="<?= isset($pertanian->kebun_500_1000ha) ? $pertanian->kebun_500_1000ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="kebun_lebih1000ha" name="kebun_lebih1000ha" value="<?= isset($pertanian->kebun_lebih1000ha) ? $pertanian->kebun_lebih1000ha : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="kebun_memilikilahan" name="kebun_memilikilahan" value="<?= isset($pertanian->kebun_memilikilahan) ? $pertanian->kebun_memilikilahan : '' ?>" readonly></td>
                                                            <td><input type="number" class="form-control" id="kebun_tidakmemilikilahan" name="kebun_tidakmemilikilahan" value="<?= isset($pertanian->kebun_tidakmemilikilahan) ? $pertanian->kebun_tidakmemilikilahan : '' ?>"></td>
                                                            <td><input type="number" class="form-control" id="kebun_totallahan" name="kebun_totallahan" value="<?= isset($pertanian->kebun_totallahan) ? $pertanian->kebun_totallahan : '' ?>" readonly></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                        </form>
                                        <div class="mb-3 mt-3">
                                            <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">B. KEHUTANAN</h5>
                                        <a href="<?= route('kehutanan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle">Jenis</th>
                                                    <th class="align-middle">Milik Negara (Ha)</th>
                                                    <th class="align-middle">Perhutani/Instansi Sektoral (Ha)</th>
                                                    <th class="align-middle">Milik Adat/Ulayat (Ha)</th>
                                                    <th class="align-middle">Milik Masyarakat Perorangan (Ha)</th>
                                                    <th class="align-middle">Total Luas Hutan (Ha)</th>
                                                    <th class="align-middle">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($kehutanan as $htna)
                                                <tr>
                                                    <td><?= $htna->kgkehutanan->name ?></td>
                                                    <td><?= $htna->miliknegara ?></td>
                                                    <td><?= $htna->perhutani ?></td>
                                                    <td><?= $htna->milikadat ?></td>
                                                    <td><?= $htna->milikmasyarakat ?></td>
                                                    <td><?= $htna->totalluashutan ?></td>
                                                    <td>
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">
                                                                <a href="<?= route('kehutanan-admin.edit', $htna['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <form action="<?= route('kehutanan-admin.destroy', $htna['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Produksi Pertanian dan Perkebunan</h5>
                                        <h5 class="mb-3 mt-3">LUAS TANAMAN PANGAN MENURUT KOMODITAS PADA TAHUN INI</h5>
                                        <a href="<?= route('tanaman-pangan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                                @foreach($tanamanpangan as $htna)
                                                <tr>
                                                    <td><?= $htna->kgtanamanpangan->name ?></td>
                                                    <td><?= $htna->luas ?></td>
                                                    <td><?= $htna->hasil ?></td>
                                                    <td>
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">
                                                                <a href="<?= route('tanaman-pangan-admin.edit', $htna['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <form action="<?= route('tanaman-pangan-admin.destroy', $htna['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">JENIS KOMODITAS BUAH-BUAHAN YANG DIBUDIDAYAKAN</h5>
                                        <a href="<?= route('komoditas-buah-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                                @foreach($komoditasbuah as $htna)
                                                <tr>
                                                    <td><?= $htna->kgkomoditasbuah->name ?></td>
                                                    <td><?= $htna->luas ?></td>
                                                    <td><?= $htna->hasil ?></td>
                                                    <td>
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">
                                                                <a href="<?= route('komoditas-buah-admin.edit', $htna['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <form action="<?= route('komoditas-buah-admin.destroy', $htna['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PEMASARAN HASIL TANAMAN PANGAN DAN TANAMAN BUAH-BUAHAN</h5>
                                    </div>
                                    <form action="<?= route('profildesakecamatan.updatePemasaranPanganBuah', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{ method_field('PATCH')}}
                                        <div class="form-group row">
                                            <label for="jual_konsumen_pangan_buah" class="col-sm-2 control-label col-form-label">Dijual Langsung ke Konsumen</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_konsumen_pangan_buah" name="jual_konsumen_pangan_buah" value="<?= isset($pemasaranpanganbuah->jual_konsumen_pangan_buah) ? $pemasaranpanganbuah->jual_konsumen_pangan_buah : '' ?>">
                                            </div>
                                            <label for="jual_pasar_pangan_buah" class="col-sm-2 control-label col-form-label">Dijual ke Pasar</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_pasar_pangan_buah" name="jual_pasar_pangan_buah" value="<?= isset($pemasaranpanganbuah->jual_pasar_pangan_buah) ? $pemasaranpanganbuah->jual_pasar_pangan_buah : '' ?>">
                                            </div>
                                            <label for="jual_kud_pangan_buah" class="col-sm-2 control-label col-form-label">Dijual Melalui KUD</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_kud_pangan_buah" name="jual_kud_pangan_buah" value="<?= isset($pemasaranpanganbuah->jual_kud_pangan_buah) ? $pemasaranpanganbuah->jual_kud_pangan_buah : '' ?>">
                                            </div>
                                            <label for="jual_tengkulak_pangan_buah" class="col-sm-2 control-label col-form-label">Dijual Melalui Tengkulak</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_tengkulak_pangan_buah" name="jual_tengkulak_pangan_buah" value="<?= isset($pemasaranpanganbuah->jual_tengkulak_pangan_buah) ? $pemasaranpanganbuah->jual_tengkulak_pangan_buah : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jual_pengecer_pangan_buah" class="col-sm-2 control-label col-form-label">Dijual melalui pengecer</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_pengecer_pangan_buah" name="jual_pengecer_pangan_buah" value="<?= isset($pemasaranpanganbuah->jual_pengecer_pangan_buah) ? $pemasaranpanganbuah->jual_pengecer_pangan_buah : '' ?>">
                                            </div>
                                            <label for="jual_lumbung_pangan_buah" class="col-sm-2 control-label col-form-label">Dijual ke Lumbung Desa/Kel</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_lumbung_pangan_buah" name="jual_lumbung_pangan_buah" value="<?= isset($pemasaranpanganbuah->jual_lumbung_pangan_buah) ? $pemasaranpanganbuah->jual_lumbung_pangan_buah : '' ?>">
                                            </div>
                                            <label for="tidak_jual_pangan_buah" class="col-sm-2 control-label col-form-label">Tidak Dijual</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="tidak_jual_pangan_buah" name="tidak_jual_pangan_buah" value="<?= isset($pemasaranpanganbuah->tidak_jual_pangan_buah) ? $pemasaranpanganbuah->tidak_jual_pangan_buah : '' ?>">
                                            </div>
                                            <div class="my-3">
                                                <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">TANAMAN APOTIK HIDUP DAN SEJENISNYA</h5>
                                        <a href="<?= route('tanaman-apotik-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                                @foreach($tanamanapotik as $htna)
                                                <tr>
                                                    <td><?= $htna->kgtanamanapotik->name ?></td>
                                                    <td><?= $htna->luas ?></td>
                                                    <td><?= $htna->hasil ?></td>
                                                    <td>
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">
                                                                <a href="<?= route('tanaman-apotik-admin.edit', $htna['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <form action="<?= route('tanaman-apotik-admin.destroy', $htna['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">LUAS DAN HASIL PERKEBUNAN MENURUT JENIS KOMODITAS</h5>
                                        <a href="<?= route('hasil-perkebunan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                                @foreach($hasilperkebunan as $htna)
                                                <tr>
                                                    <td><?= $htna->kghasilperkebunan->name ?></td>
                                                    <td><?= $htna->luasnegara ?></td>
                                                    <td><?= $htna->hasilnegara ?></td>
                                                    <td><?= $htna->luasrakyat ?></td>
                                                    <td><?= $htna->hasilrakyat ?></td>
                                                    <td>
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">
                                                                <a href="<?= route('hasil-perkebunan-admin.edit', $htna['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <form action="<?= route('hasil-perkebunan-admin.destroy', $htna['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PEMASARAN HASIL PERKEBUNAN</h5>
                                    </div>
                                    <form action="<?= route('profildesakecamatan.updatePemasaranHasilPerkebunan', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{ method_field('PATCH')}}
                                        <div class="form-group row">
                                            <label for="jual_konsumen_kebun" class="col-sm-2 control-label col-form-label">Dijual Langsung ke Konsumen</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_konsumen_kebun" name="jual_konsumen_kebun" value="<?= isset($pemasaranhasilperkebunan->jual_konsumen_kebun) ? $pemasaranhasilperkebunan->jual_konsumen_kebun : '' ?>">
                                            </div>
                                            <label for="jual_pasar_kebun" class="col-sm-2 control-label col-form-label">Dijual ke Pasar</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_pasar_kebun" name="jual_pasar_kebun" value="<?= isset($pemasaranhasilperkebunan->jual_pasar_kebun) ? $pemasaranhasilperkebunan->jual_pasar_kebun : '' ?>">
                                            </div>
                                            <label for="jual_kud_kebun" class="col-sm-2 control-label col-form-label">Dijual Melalui KUD</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_kud_kebun" name="jual_kud_kebun" value="<?= isset($pemasaranhasilperkebunan->jual_kud_kebun) ? $pemasaranhasilperkebunan->jual_kud_kebun : '' ?>">
                                            </div>
                                            <label for="jual_tengkulak_kebun" class="col-sm-2 control-label col-form-label">Dijual Melalui Tengkulak</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_tengkulak_kebun" name="jual_tengkulak_kebun" value="<?= isset($pemasaranhasilperkebunan->jual_tengkulak_kebun) ? $pemasaranhasilperkebunan->jual_tengkulak_kebun : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jual_pengecer_kebun" class="col-sm-2 control-label col-form-label">Dijual melalui pengecer</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_pengecer_kebun" name="jual_pengecer_kebun" value="<?= isset($pemasaranhasilperkebunan->jual_pengecer_kebun) ? $pemasaranhasilperkebunan->jual_pengecer_kebun : '' ?>">
                                            </div>
                                            <label for="jual_lumbung_kebun" class="col-sm-2 control-label col-form-label">Dijual ke Lumbung Desa/Kel</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_lumbung_kebun" name="jual_lumbung_kebun" value="<?= isset($pemasaranhasilperkebunan->jual_lumbung_kebun) ? $pemasaranhasilperkebunan->jual_lumbung_kebun : '' ?>">
                                            </div>
                                            <label for="tidak_jual_kebun" class="col-sm-2 control-label col-form-label">Tidak Dijual</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="tidak_jual_kebun" name="tidak_jual_kebun" value="<?= isset($pemasaranhasilperkebunan->tidak_jual_kebun) ? $pemasaranhasilperkebunan->tidak_jual_kebun : '' ?>">
                                            </div>
                                            <div class="my-3">
                                                <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Kehutanan</h5>
                                    </div>
                                    <h5 class="mb-3 mt-3">HASIL HUTAN</h5>
                                    <a href="<?= route('hasil-hutan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                                @foreach($hasilhutan as $htna)
                                                <tr>
                                                    <td><?= $htna->kghasilhutan->name ?></td>
                                                    <td><?= $htna->hasil ?></td>
                                                    <td>
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">
                                                                <a href="<?= route('hasil-hutan-admin.edit', $htna['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <form action="<?= route('hasil-hutan-admin.destroy', $htna['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">KONDISI HUTAN</h5>
                                        <a href="<?= route('kondisi-hutan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                                @foreach($kondisihutan as $htna)
                                                <tr>
                                                    <td><?= $htna->kgkondisihutan->name ?></td>
                                                    <td><?= $htna->baik ?></td>
                                                    <td><?= $htna->rusak ?></td>
                                                    <td><?= $htna->total ?></td>
                                                    <td>
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">
                                                                <a href="<?= route('kondisi-hutan-admin.edit', $htna['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <form action="<?= route('kondisi-hutan-admin.destroy', $htna['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">DAMPAK YANG TIMBUL DARI PENGOLAHAN HUTAN</h5>
                                        <a href="<?= route('dampak-olah-hutan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                                @foreach($dampakolahhutan as $htna)
                                                <tr>
                                                    <td><?= $htna->kgdampakolahhutan->name ?></td>
                                                    <td><?= $htna->dampak ?></td>
                                                    <td>
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">
                                                                <a href="<?= route('dampak-olah-hutan-admin.edit', $htna['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <form action="<?= route('dampak-olah-hutan-admin.destroy', $htna['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">MEKANISME PEMASARAN HASIL HUTAN</h5>
                                    </div>
                                    <form action="<?= route('profildesakecamatan.updatePemasaranHasilHutan', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{ method_field('PATCH')}}
                                        <div class="form-group row">
                                            <label for="jual_konsumen_hutan" class="col-sm-2 control-label col-form-label">Dijual Langsung ke Konsumen</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_konsumen_hutan" name="jual_konsumen_hutan" value="<?= isset($pemasaranhasilhutan->jual_konsumen_hutan) ? $pemasaranhasilhutan->jual_konsumen_hutan : '' ?>">
                                            </div>
                                            <label for="jual_pasar_hutan" class="col-sm-2 control-label col-form-label">Dijual ke Pasar</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_pasar_hutan" name="jual_pasar_hutan" value="<?= isset($pemasaranhasilhutan->jual_pasar_hutan) ? $pemasaranhasilhutan->jual_pasar_hutan : '' ?>">
                                            </div>
                                            <label for="jual_kud_hutan" class="col-sm-2 control-label col-form-label">Dijual Melalui KUD</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_kud_hutan" name="jual_kud_hutan" value="<?= isset($pemasaranhasilhutan->jual_kud_hutan) ? $pemasaranhasilhutan->jual_kud_hutan : '' ?>">
                                            </div>
                                            <label for="jual_tengkulak_hutan" class="col-sm-2 control-label col-form-label">Dijual Melalui Tengkulak</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_tengkulak_hutan" name="jual_tengkulak_hutan" value="<?= isset($pemasaranhasilhutan->jual_tengkulak_hutan) ? $pemasaranhasilhutan->jual_tengkulak_hutan : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jual_pengecer_hutan" class="col-sm-2 control-label col-form-label">Dijual melalui pengecer</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_pengecer_hutan" name="jual_pengecer_hutan" value="<?= isset($pemasaranhasilhutan->jual_pengecer_hutan) ? $pemasaranhasilhutan->jual_pengecer_hutan : '' ?>">
                                            </div>
                                            <label for="jual_lumbung_hutan" class="col-sm-2 control-label col-form-label">Dijual ke Lumbung Desa/Kel</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_lumbung_hutan" name="jual_lumbung_hutan" value="<?= isset($pemasaranhasilhutan->jual_lumbung_hutan) ? $pemasaranhasilhutan->jual_lumbung_hutan : '' ?>">
                                            </div>
                                            <label for="tidak_jual_hutan" class="col-sm-2 control-label col-form-label">Tidak Dijual</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="tidak_jual_hutan" name="tidak_jual_hutan" value="<?= isset($pemasaranhasilhutan->tidak_jual_hutan) ? $pemasaranhasilhutan->tidak_jual_hutan : '' ?>">
                                            </div>
                                            <div class="my-3">
                                                <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Peternakan</h5>
                                    </div>
                                    <h5 class="mb-3 mt-3">JENIS POPULASI TERNAK</h5>
                                    <a href="<?= route('jenis-populasi-ternak-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                                @foreach($jenispopulasiternak as $htna)
                                                <tr>
                                                    <td><?= $htna->kgjenispopulasiternak->name ?></td>
                                                    <td><?= $htna->jumlahpemilik ?></td>
                                                    <td><?= $htna->perkiraanjumlah ?></td>
                                                    <td>
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">
                                                                <a href="<?= route('jenis-populasi-ternak-admin.edit', $htna['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <form action="<?= route('jenis-populasi-ternak-admin.destroy', $htna['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PRODUKSI PETERNAKAN</h5>
                                        <a href="<?= route('produksi-ternak-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                                @foreach($produksiternak as $htna)
                                                <tr>
                                                    <td><?= $htna->kgproduksiternak->name ?></td>
                                                    <td><?= $htna->hasil ?></td>
                                                    <td>
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">
                                                                <a href="<?= route('produksi-ternak-admin.edit', $htna['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <form action="<?= route('produksi-ternak-admin.destroy', $htna['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">KETERSEDIAAN HIJAUAN PAKAN TERNAK</h5>
                                    </div>
                                    <form action="<?= route('profildesakecamatan.updateHijauanPakanTernak', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{ method_field('PATCH')}}
                                        <div class="form-group row">
                                            <label for="ls_tanaman_pakan_ternak" class="col-sm-2 control-label col-form-label">Luas tanaman pakan ternak (rumput gajah, dll) (Ha)</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="ls_tanaman_pakan_ternak" name="ls_tanaman_pakan_ternak" value="<?= isset($hijauanpakanternak->ls_tanaman_pakan_ternak) ? $hijauanpakanternak->ls_tanaman_pakan_ternak : '' ?>">
                                            </div>
                                            <label for="produksi_hijauan_pakan_ternak" class="col-sm-2 control-label col-form-label">Produksi hijauan makanan ternak (Ton/ha)</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="produksi_hijauan_pakan_ternak" name="produksi_hijauan_pakan_ternak" value="<?= isset($hijauanpakanternak->produksi_hijauan_pakan_ternak) ? $hijauanpakanternak->produksi_hijauan_pakan_ternak : '' ?>">
                                            </div>
                                            <label for="ls_lahan_gembalaan" class="col-sm-2 control-label col-form-label">Luas lahan gembalaan (Ha)</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="ls_lahan_gembalaan" name="ls_lahan_gembalaan" value="<?= isset($hijauanpakanternak->ls_lahan_gembalaan) ? $hijauanpakanternak->ls_lahan_gembalaan : '' ?>">
                                            </div>
                                            <label for="pasok_dari_luardesa" class="col-sm-2 control-label col-form-label">Dipasok dari Luar Desa/Kelurahan (Ton)</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="pasok_dari_luardesa" name="pasok_dari_luardesa" value="<?= isset($hijauanpakanternak->pasok_dari_luardesa) ? $hijauanpakanternak->pasok_dari_luardesa : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="subsidi_dinas" class="col-sm-2 control-label col-form-label">Disubsidi Dinas (Ton)</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="subsidi_dinas" name="subsidi_dinas" value="<?= isset($hijauanpakanternak->subsidi_dinas) ? $hijauanpakanternak->subsidi_dinas : '' ?>">
                                            </div>
                                            <label for="lainnya_ketersediaan_hijauan" class="col-sm-2 control-label col-form-label">Lainnya (Ton)</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="lainnya_ketersediaan_hijauan" name="lainnya_ketersediaan_hijauan" value="<?= isset($hijauanpakanternak->lainnya_ketersediaan_hijauan) ? $hijauanpakanternak->lainnya_ketersediaan_hijauan : '' ?>">
                                            </div>
                                            <div class="my-3">
                                                <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PEMILIK USAHA PENGOLAHAN HASIL TERNAK</h5>
                                        <a href="<?= route('pemilik-usaha-ternak-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                                @foreach($pemilikusahaternak as $htna)
                                                <tr>
                                                    <td><?= $htna->kgpemilikusahaternak->name ?></td>
                                                    <td><?= $htna->jumlah ?></td>
                                                    <td>
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">
                                                                <a href="<?= route('pemilik-usaha-ternak-admin.edit', $htna['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <form action="<?= route('pemilik-usaha-ternak-admin.destroy', $htna['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PEMASARAN HASIL TERNAK</h5>
                                    </div>
                                    <form action="<?= route('profildesakecamatan.updatePemasaranHasilTernak', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{ method_field('PATCH')}}
                                        <div class="form-group row">
                                            <label for="jual_konsumen_ternak" class="col-sm-2 control-label col-form-label">Dijual Langsung ke Konsumen</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_konsumen_ternak" name="jual_konsumen_ternak" value="<?= isset($pemasaranhasilternak->jual_konsumen_ternak) ? $pemasaranhasilternak->jual_konsumen_ternak : '' ?>">
                                            </div>
                                            <label for="jual_pasar_ternak" class="col-sm-2 control-label col-form-label">Dijual ke Pasar</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_pasar_ternak" name="jual_pasar_ternak" value="<?= isset($pemasaranhasilternak->jual_pasar_ternak) ? $pemasaranhasilternak->jual_pasar_ternak : '' ?>">
                                            </div>
                                            <label for="jual_kud_ternak" class="col-sm-2 control-label col-form-label">Dijual Melalui KUD</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_kud_ternak" name="jual_kud_ternak" value="<?= isset($pemasaranhasilternak->jual_kud_ternak) ? $pemasaranhasilternak->jual_kud_ternak : '' ?>">
                                            </div>
                                            <label for="jual_tengkulak_ternak" class="col-sm-2 control-label col-form-label">Dijual Melalui Tengkulak</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_tengkulak_ternak" name="jual_tengkulak_ternak" value="<?= isset($pemasaranhasilternak->jual_tengkulak_ternak) ? $pemasaranhasilternak->jual_tengkulak_ternak : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jual_pengecer_ternak" class="col-sm-2 control-label col-form-label">Dijual melalui pengecer</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_pengecer_ternak" name="jual_pengecer_ternak" value="<?= isset($pemasaranhasilternak->jual_pengecer_ternak) ? $pemasaranhasilternak->jual_pengecer_ternak : '' ?>">
                                            </div>
                                            <label for="jual_lumbung_ternak" class="col-sm-2 control-label col-form-label">Dijual ke Lumbung Desa/Kel</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_lumbung_ternak" name="jual_lumbung_ternak" value="<?= isset($pemasaranhasilternak->jual_lumbung_ternak) ? $pemasaranhasilternak->jual_lumbung_ternak : '' ?>">
                                            </div>
                                            <label for="tidak_jual_ternak" class="col-sm-2 control-label col-form-label">Tidak Dijual</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="tidak_jual_ternak" name="tidak_jual_ternak" value="<?= isset($pemasaranhasilternak->tidak_jual_ternak) ? $pemasaranhasilternak->tidak_jual_ternak : '' ?>">
                                            </div>
                                            <div class="my-3">
                                                <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">KETERSEDIAAN LAHAN PEMELIHARAAN TERNAK/PADANG PENGEMBALAAN</h5>
                                    </div>
                                    <form action="<?= route('profildesakecamatan.updateKetersediaanLahanTernak', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{ method_field('PATCH')}}
                                        <div class="form-group row">
                                            <label for="milik_masyarakat_ternak" class="col-sm-2 control-label col-form-label">Milik Masyarakat Umum (Ha)</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="milik_masyarakat_ternak" name="milik_masyarakat_ternak" value="<?= isset($ketersediaanlahanternak->milik_masyarakat_ternak) ? $ketersediaanlahanternak->milik_masyarakat_ternak : '' ?>">
                                            </div>
                                            <label for="milik_perusahaan_ternak" class="col-sm-2 control-label col-form-label">Milik Perusahaan Peternakan (ranch) (Ha)</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="milik_perusahaan_ternak" name="milik_perusahaan_ternak" value="<?= isset($ketersediaanlahanternak->milik_perusahaan_ternak) ? $ketersediaanlahanternak->milik_perusahaan_ternak : '' ?>">
                                            </div>
                                            <label for="milik_perorangan_ternak" class="col-sm-2 control-label col-form-label">Milik Perorangan (Ha)</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="milik_perorangan_ternak" name="milik_perorangan_ternak" value="<?= isset($ketersediaanlahanternak->milik_perorangan_ternak) ? $ketersediaanlahanternak->milik_perorangan_ternak : '' ?>">
                                            </div>
                                            <label for="sewa_pakai_ternak" class="col-sm-2 control-label col-form-label">Sewa Pakai (Ha)</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="sewa_pakai_ternak" name="sewa_pakai_ternak" value="<?= isset($ketersediaanlahanternak->sewa_pakai_ternak) ? $ketersediaanlahanternak->sewa_pakai_ternak : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="milik_pemerintah_ternak" class="col-sm-2 control-label col-form-label">Milik Pemerintah (Ha)</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="milik_pemerintah_ternak" name="milik_pemerintah_ternak" value="<?= isset($ketersediaanlahanternak->milik_pemerintah_ternak) ? $ketersediaanlahanternak->milik_pemerintah_ternak : '' ?>">
                                            </div>
                                            <label for="milik_masyarakat_adat_ternak" class="col-sm-2 control-label col-form-label">Milik Masyarakat Adat (Ha)</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="milik_masyarakat_adat_ternak" name="milik_masyarakat_adat_ternak" value="<?= isset($ketersediaanlahanternak->milik_masyarakat_adat_ternak) ? $ketersediaanlahanternak->milik_masyarakat_adat_ternak : '' ?>">
                                            </div>
                                            <label for="lainnya_sedia_lahan_ternak" class="col-sm-2 control-label col-form-label">Lainnya (Ha)</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="lainnya_sedia_lahan_ternak" name="lainnya_sedia_lahan_ternak" value="<?= isset($ketersediaanlahanternak->lainnya_sedia_lahan_ternak) ? $ketersediaanlahanternak->lainnya_sedia_lahan_ternak : '' ?>">
                                            </div>
                                            <div class="my-3">
                                                <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="border-top">
                                        <h5 class="accordion-header text-center mb-3 mt-3">Perikanan</h5>
                                    </div>
                                    <h5 class="mb-3 mt-3">JENIS DAN ALAT PRODUKSI BUDIDAYA IKAN LAUT DAN PAYAU</h5>
                                    <a href="<?= route('alat-produksi-laut-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                                @foreach($alatproduksilaut as $htna)
                                                <tr>
                                                    <td><?= $htna->kgalatproduksilaut->name ?></td>
                                                    <td><?= $htna->jumlah ?></td>
                                                    <td><?= $htna->hasil ?></td>
                                                    <td>
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">
                                                                <a href="<?= route('alat-produksi-laut-admin.edit', $htna['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <form action="<?= route('alat-produksi-laut-admin.destroy', $htna['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">JENIS DAN SARANA PRODUKSI BUDIDAYA IKAN AIR TAWAR</h5>
                                        <a href="<?= route('alat-produksi-tawar-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                                @foreach($alatproduksitawar as $htna)
                                                <tr>
                                                    <td><?= $htna->kgalatproduksitawar->name ?></td>
                                                    <td><?= $htna->jumlah ?></td>
                                                    <td><?= $htna->hasil ?></td>
                                                    <td>
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">
                                                                <a href="<?= route('alat-produksi-tawar-admin.edit', $htna['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <form action="<?= route('alat-produksi-tawar-admin.destroy', $htna['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">JENIS IKAN DAN PRODUKSI</h5>
                                        <a href="<?= route('jenis-ikan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                                @foreach($jenisikan as $htna)
                                                <tr>
                                                    <td><?= $htna->kgjenisikan->name ?></td>
                                                    <td><?= $htna->hasil ?></td>
                                                    <td>
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">
                                                                <a href="<?= route('jenis-ikan-admin.edit', $htna['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <form action="<?= route('jenis-ikan-admin.destroy', $htna['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mb-3 mt-3">PEMASARAN HASIL PERIKANAN</h5>
                                    </div>
                                    <form action="<?= route('profildesakecamatan.updatePemasaranHasilIkan', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{ method_field('PATCH')}}
                                        <div class="form-group row">
                                            <label for="jual_konsumen_perikanan" class="col-sm-2 control-label col-form-label">Dijual Langsung ke Konsumen</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_konsumen_perikanan" name="jual_konsumen_perikanan" value="<?= isset($pemasaranhasilikan->jual_konsumen_perikanan) ? $pemasaranhasilikan->jual_konsumen_perikanan : '' ?>">
                                            </div>
                                            <label for="jual_pasar_perikanan" class="col-sm-2 control-label col-form-label">Dijual ke Pasar</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_pasar_perikanan" name="jual_pasar_perikanan" value="<?= isset($pemasaranhasilikan->jual_pasar_perikanan) ? $pemasaranhasilikan->jual_pasar_perikanan : '' ?>">
                                            </div>
                                            <label for="jual_kud_perikanan" class="col-sm-2 control-label col-form-label">Dijual Melalui KUD</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_kud_perikanan" name="jual_kud_perikanan" value="<?= isset($pemasaranhasilikan->jual_kud_perikanan) ? $pemasaranhasilikan->jual_kud_perikanan : '' ?>">
                                            </div>
                                            <label for="jual_tengkulak_perikanan" class="col-sm-2 control-label col-form-label">Dijual Melalui Tengkulak</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_tengkulak_perikanan" name="jual_tengkulak_perikanan" value="<?= isset($pemasaranhasilikan->jual_tengkulak_perikanan) ? $pemasaranhasilikan->jual_tengkulak_perikanan : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jual_pengecer_perikanan" class="col-sm-2 control-label col-form-label">Dijual melalui pengecer</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_pengecer_perikanan" name="jual_pengecer_perikanan" value="<?= isset($pemasaranhasilikan->jual_pengecer_perikanan) ? $pemasaranhasilikan->jual_pengecer_perikanan : '' ?>">
                                            </div>
                                            <label for="jual_lumbung_perikanan" class="col-sm-2 control-label col-form-label">Dijual ke Lumbung Desa/Kel</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="jual_lumbung_perikanan" name="jual_lumbung_perikanan" value="<?= isset($pemasaranhasilikan->jual_lumbung_perikanan) ? $pemasaranhasilikan->jual_lumbung_perikanan : '' ?>">
                                            </div>
                                            <label for="tidak_jual_perikanan" class="col-sm-2 control-label col-form-label">Tidak Dijual</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="tidak_jual_perikanan" name="tidak_jual_perikanan" value="<?= isset($pemasaranhasilikan->tidak_jual_perikanan) ? $pemasaranhasilikan->tidak_jual_perikanan : '' ?>">
                                            </div>
                                            <div class="my-3">
                                                <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                            </div>
                                    </form>
                                </div>
                                <div class="border-top">
                                    <h5 class="accordion-header text-center mb-3 mt-3">Bahan Galian</h5>
                                </div>
                                <h5 class="mb-3 mt-3">JENIS, DEPOSIT DAN KEPEMILIKAN BAHAN GALIAN</h5>
                                <a href="<?= route('bahan-galian-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($bahangalian as $htna)
                                            <tr>
                                                <td><?= $htna->kgbahangalian->name ?></td>
                                                <td><?= $htna->keberadaan ?></td>
                                                <td><?= $htna->skalaproduksi ?></td>
                                                <td><?= $htna->kepemilikan ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('bahan-galian-admin.edit', $htna['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('bahan-galian-admin.destroy', $htna['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">PEMASARAN HASIL GALIAN</h5>
                                </div>
                                <form action="<?= route('profildesakecamatan.updatePemasaranHasilGalian', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PATCH')}}
                                    <div class="form-group row">
                                        <label for="jual_konsumen_galian" class="col-sm-2 control-label col-form-label">Dijual Langsung ke Konsumen</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_konsumen_galian" name="jual_konsumen_galian" value="<?= isset($pemasaranhasilgalian->jual_konsumen_galian) ? $pemasaranhasilgalian->jual_konsumen_galian : '' ?>">
                                        </div>
                                        <label for="jual_pasar_galian" class="col-sm-2 control-label col-form-label">Dijual ke Pasar</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_pasar_galian" name="jual_pasar_galian" value="<?= isset($pemasaranhasilgalian->jual_pasar_galian) ? $pemasaranhasilgalian->jual_pasar_galian : '' ?>">
                                        </div>
                                        <label for="jual_kud_galian" class="col-sm-2 control-label col-form-label">Dijual Melalui KUD</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_kud_galian" name="jual_kud_galian" value="<?= isset($pemasaranhasilgalian->jual_kud_galian) ? $pemasaranhasilgalian->jual_kud_galian : '' ?>">
                                        </div>
                                        <label for="jual_tengkulak_galian" class="col-sm-2 control-label col-form-label">Dijual Melalui Tengkulak</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_tengkulak_galian" name="jual_tengkulak_galian" value="<?= isset($pemasaranhasilgalian->jual_tengkulak_galian) ? $pemasaranhasilgalian->jual_tengkulak_galian : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jual_pengecer_galian" class="col-sm-2 control-label col-form-label">Dijual melalui pengecer</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_pengecer_galian" name="jual_pengecer_galian" value="<?= isset($pemasaranhasilgalian->jual_pengecer_galian) ? $pemasaranhasilgalian->jual_pengecer_galian : '' ?>">
                                        </div>
                                        <label for="jual_perusahaan_galian" class="col-sm-2 control-label col-form-label">Dijual ke Perusahaan</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_perusahaan_galian" name="jual_perusahaan_galian" value="<?= isset($pemasaranhasilgalian->jual_perusahaan_galian) ? $pemasaranhasilgalian->jual_perusahaan_galian : '' ?>">
                                        </div>
                                        <label for="jual_lumbung_galian" class="col-sm-2 control-label col-form-label">Dijual ke Lumbung Desa/Kel</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jual_lumbung_galian" name="jual_lumbung_galian" value="<?= isset($pemasaranhasilgalian->jual_lumbung_galian) ? $pemasaranhasilgalian->jual_lumbung_galian : '' ?>">
                                        </div>
                                        <label for="tidak_jual_galian" class="col-sm-2 control-label col-form-label">Tidak Dijual</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="tidak_jual_galian" name="tidak_jual_galian" value="<?= isset($pemasaranhasilgalian->tidak_jual_galian) ? $pemasaranhasilgalian->tidak_jual_galian : '' ?>">
                                        </div>
                                        <div class="my-3">
                                            <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="border-top">
                                    <h5 class="accordion-header text-center mb-3 mt-3">Sumber Daya Air</h5>
                                </div>
                                <h5 class="mb-3 mt-3">POTENSI AIR DAN SUMBER DAYA AIR</h5>
                                <a href="<?= route('potensi-air-sda-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($potensiairsda as $kud)
                                            <tr>
                                                <td><?= $kud->kgpotensiairsda->name ?></td>
                                                <td><?= $kud->debit ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('potensi-air-sda-admin.edit', $kud['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('potensi-air-sda-admin.destroy', $kud['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">SUMBER DAN KUALITAS AIR BERSIH</h5>
                                    <a href="<?= route('sumber-air-bersih-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($sumberairbersih as $kud)
                                            <tr>
                                                <td><?= $kud->kgsumberairbersih->name ?></td>
                                                <td><?= $kud->jumlah ?></td>
                                                <td><?= $kud->kondisi ?></td>
                                                <td><?= $kud->pemanfaatan ?></td>
                                                <td><?= $kud->kualitas ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('sumber-air-bersih-admin.edit', $kud['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('sumber-air-bersih-admin.destroy', $kud['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">SUNGAI</h5>
                                </div>
                                <form action="<?= route('profildesakecamatan.updateSungai', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PATCH')}}
                                    <div class="form-group row">
                                        <label for="jumlah_sungai" class="col-sm-2 control-label col-form-label">Jumlah Sungai</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="jumlah_sungai" name="jumlah_sungai" value="<?= isset($sungai->jumlah_sungai) ? $sungai->jumlah_sungai : '' ?>">
                                        </div>
                                        <label for="tercemar_sungai" class="col-sm-2 control-label col-form-label">Tercemar</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="tercemar_sungai">
                                                <option value="Ya" {{ old('tercemar_sungai', isset($sungai->tercemar_sungai) ? $sungai->tercemar_sungai : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('tercemar_sungai', isset($sungai->tercemar_sungai) ? $sungai->tercemar_sungai : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="dangkal_sungai" class="col-sm-2 control-label col-form-label">Pendangkalan/Pengendapan Lumpur Tinggi</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="dangkal_sungai">
                                                <option value="Ya" {{ old('dangkal_sungai', isset($sungai->dangkal_sungai) ? $sungai->dangkal_sungai : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('dangkal_sungai', isset($sungai->dangkal_sungai) ? $sungai->dangkal_sungai : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="keruh_sungai" class="col-sm-2 control-label col-form-label">Keruh</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="keruh_sungai">
                                                <option value="Ya" {{ old('keruh_sungai', isset($sungai->keruh_sungai) ? $sungai->keruh_sungai : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('keruh_sungai', isset($sungai->keruh_sungai) ? $sungai->keruh_sungai : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jernih_sungai" class="col-sm-2 control-label col-form-label">Jernih dan Tidak Tercemar/memenuhi baku mutu air</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="jernih_sungai">
                                                <option value="Ya" {{ old('jernih_sungai', isset($sungai->jernih_sungai) ? $sungai->jernih_sungai : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('jernih_sungai', isset($sungai->jernih_sungai) ? $sungai->jernih_sungai : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="kurangbiota_sungai" class="col-sm-2 control-label col-form-label">Berkurangnya biota sungai</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="kurangbiota_sungai">
                                                <option value="Ya" {{ old('kurangbiota_sungai', isset($sungai->kurangbiota_sungai) ? $sungai->kurangbiota_sungai : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('kurangbiota_sungai', isset($sungai->kurangbiota_sungai) ? $sungai->kurangbiota_sungai : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="kering_sungai" class="col-sm-2 control-label col-form-label">Kering</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="kering_sungai">
                                                <option value="Ya" {{ old('kering_sungai', isset($sungai->kering_sungai) ? $sungai->kering_sungai : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('kering_sungai', isset($sungai->kering_sungai) ? $sungai->kering_sungai : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <div class="my-3">
                                            <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">RAWA</h5>
                                </div>
                                <form action="<?= route('profildesakecamatan.updateRawa', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PATCH')}}
                                    <div class="form-group row">
                                        <label for="luas_rawa" class="col-sm-2 control-label col-form-label">Luas Rawa</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="luas_rawa" name="luas_rawa" value="<?= isset($rawa->luas_rawa) ? $rawa->luas_rawa : '' ?>">
                                        </div>
                                        <label for="perikanandarat_rawa" class="col-sm-2 control-label col-form-label">Perikanan darat maupun laut </label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="perikanandarat_rawa">
                                                <option value="Ya" {{ old('perikanandarat_rawa', isset($rawa->perikanandarat_rawa) ? $rawa->perikanandarat_rawa : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('perikanandarat_rawa', isset($rawa->perikanandarat_rawa) ? $rawa->perikanandarat_rawa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="airbakuolah_rawa" class="col-sm-2 control-label col-form-label">Air baku untuk pengolahan air minum</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="airbakuolah_rawa">
                                                <option value="Ya" {{ old('airbakuolah_rawa', isset($rawa->airbakuolah_rawa) ? $rawa->airbakuolah_rawa : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('airbakuolah_rawa', isset($rawa->airbakuolah_rawa) ? $rawa->airbakuolah_rawa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="cucimandi_rawa" class="col-sm-2 control-label col-form-label">Cuci dan mandi</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="cucimandi_rawa">
                                                <option value="Ya" {{ old('cucimandi_rawa', isset($rawa->cucimandi_rawa) ? $rawa->cucimandi_rawa : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('cucimandi_rawa', isset($rawa->cucimandi_rawa) ? $rawa->cucimandi_rawa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="irigasi_rawa" class="col-sm-2 control-label col-form-label">Irigasi</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="irigasi_rawa">
                                                <option value="Ya" {{ old('irigasi_rawa', isset($rawa->irigasi_rawa) ? $rawa->irigasi_rawa : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('irigasi_rawa', isset($rawa->irigasi_rawa) ? $rawa->irigasi_rawa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="bab_rawa" class="col-sm-2 control-label col-form-label">Buang Air Besar</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="bab_rawa">
                                                <option value="Ya" {{ old('bab_rawa', isset($rawa->bab_rawa) ? $rawa->bab_rawa : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('bab_rawa', isset($rawa->bab_rawa) ? $rawa->bab_rawa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="perikanan_rawa" class="col-sm-2 control-label col-form-label">Perikanan</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="perikanan_rawa">
                                                <option value="Ya" {{ old('perikanan_rawa', isset($rawa->perikanan_rawa) ? $rawa->perikanan_rawa : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('perikanan_rawa', isset($rawa->perikanan_rawa) ? $rawa->perikanan_rawa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="sayuran_rawa" class="col-sm-2 control-label col-form-label">Sayuran</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="sayuran_rawa">
                                                <option value="Ya" {{ old('sayuran_rawa', isset($rawa->sayuran_rawa) ? $rawa->sayuran_rawa : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('sayuran_rawa', isset($rawa->sayuran_rawa) ? $rawa->sayuran_rawa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="mangrove_rawa" class="col-sm-2 control-label col-form-label">Pembudidayaan Hutan Manggrove</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="mangrove_rawa">
                                                <option value="Ya" {{ old('mangrove_rawa', isset($rawa->mangrove_rawa) ? $rawa->mangrove_rawa : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('mangrove_rawa', isset($rawa->mangrove_rawa) ? $rawa->mangrove_rawa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="lain_rawa" class="col-sm-2 control-label col-form-label">Lain-lain</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="lain_rawa">
                                                <option value="Ya" {{ old('lain_rawa', isset($rawa->lain_rawa) ? $rawa->lain_rawa : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('lain_rawa', isset($rawa->lain_rawa) ? $rawa->lain_rawa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <div class="my-3">
                                            <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">PEMANFAATAN DAN KONDISI DANAU/WADUK/SITU</h5>
                                </div>
                                <form action="<?= route('profildesakecamatan.updateManfaatKondisiDanau', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PATCH')}}
                                    <div class="form-group row">
                                        <label class="col-sm-12 control-label col-form-label">Pemanfaatan</label>
                                        <label for="luas_danau" class="col-sm-2 control-label col-form-label">Luas (Ha)</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="luas_danau" name="luas_danau" value="<?= isset($manfaatkondisidanau->luas_danau) ? $manfaatkondisidanau->luas_danau : '' ?>">
                                        </div>
                                        <label for="perikanan_danau" class="col-sm-2 control-label col-form-label">Perikanan</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="perikanan_danau">
                                                <option value="Ya" {{ old('perikanan_danau', isset($manfaatkondisidanau->perikanan_danau) ? $manfaatkondisidanau->perikanan_danau : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('perikanan_danau', isset($manfaatkondisidanau->perikanan_danau) ? $manfaatkondisidanau->perikanan_danau : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="airminum_danau" class="col-sm-2 control-label col-form-label">Air Minum/Air Baku</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="airminum_danau">
                                                <option value="Ya" {{ old('airminum_danau', isset($manfaatkondisidanau->airminum_danau) ? $manfaatkondisidanau->airminum_danau : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('airminum_danau', isset($manfaatkondisidanau->airminum_danau) ? $manfaatkondisidanau->airminum_danau : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="cucimandi_danau" class="col-sm-2 control-label col-form-label">Cuci dan mandi</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="cucimandi_danau">
                                                <option value="Ya" {{ old('cucimandi_danau', isset($manfaatkondisidanau->cucimandi_danau) ? $manfaatkondisidanau->cucimandi_danau : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('cucimandi_danau', isset($manfaatkondisidanau->cucimandi_danau) ? $manfaatkondisidanau->cucimandi_danau : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="irigasi_danau" class="col-sm-2 control-label col-form-label">Irigasi</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="irigasi_danau">
                                                <option value="Ya" {{ old('irigasi_danau', isset($manfaatkondisidanau->irigasi_danau) ? $manfaatkondisidanau->irigasi_danau : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('irigasi_danau', isset($manfaatkondisidanau->irigasi_danau) ? $manfaatkondisidanau->irigasi_danau : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="bab_danau" class="col-sm-2 control-label col-form-label">Buang Air Besar</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="bab_danau">
                                                <option value="Ya" {{ old('bab_danau', isset($manfaatkondisidanau->bab_danau) ? $manfaatkondisidanau->bab_danau : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('bab_danau', isset($manfaatkondisidanau->bab_danau) ? $manfaatkondisidanau->bab_danau : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="pembangkitlistrik_danau" class="col-sm-2 control-label col-form-label">Pembangkit listrik</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="pembangkitlistrik_danau">
                                                <option value="Ya" {{ old('pembangkitlistrik_danau', isset($manfaatkondisidanau->pembangkitlistrik_danau) ? $manfaatkondisidanau->pembangkitlistrik_danau : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('pembangkitlistrik_danau', isset($manfaatkondisidanau->pembangkitlistrik_danau) ? $manfaatkondisidanau->pembangkitlistrik_danau : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="prasaranatransportasi_danau" class="col-sm-2 control-label col-form-label">Prasarana transportasi</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="prasaranatransportasi_danau">
                                                <option value="Ya" {{ old('prasaranatransportasi_danau', isset($manfaatkondisidanau->prasaranatransportasi_danau) ? $manfaatkondisidanau->prasaranatransportasi_danau : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('prasaranatransportasi_danau', isset($manfaatkondisidanau->prasaranatransportasi_danau) ? $manfaatkondisidanau->prasaranatransportasi_danau : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lainnya_danau" class="col-sm-2 control-label col-form-label">Lainnya</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="lainnya_danau">
                                                <option value="Ya" {{ old('lainnya_danau', isset($manfaatkondisidanau->lainnya_danau) ? $manfaatkondisidanau->lainnya_danau : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('lainnya_danau', isset($manfaatkondisidanau->lainnya_danau) ? $manfaatkondisidanau->lainnya_danau : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12 control-label col-form-label">Kondisi</label>
                                        <label for="tercemar_danau" class="col-sm-2 control-label col-form-label">Tercemar</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="tercemar_danau">
                                                <option value="Ya" {{ old('tercemar_danau', isset($manfaatkondisidanau->tercemar_danau) ? $manfaatkondisidanau->tercemar_danau : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('tercemar_danau', isset($manfaatkondisidanau->tercemar_danau) ? $manfaatkondisidanau->tercemar_danau : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="dangkal_danau" class="col-sm-2 control-label col-form-label">Pendangkalan</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="dangkal_danau">
                                                <option value="Ya" {{ old('dangkal_danau', isset($manfaatkondisidanau->dangkal_danau) ? $manfaatkondisidanau->dangkal_danau : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('dangkal_danau', isset($manfaatkondisidanau->dangkal_danau) ? $manfaatkondisidanau->dangkal_danau : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="keruh_danau" class="col-sm-2 control-label col-form-label">Keruh</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="keruh_danau">
                                                <option value="Ya" {{ old('keruh_danau', isset($manfaatkondisidanau->keruh_danau) ? $manfaatkondisidanau->keruh_danau : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('keruh_danau', isset($manfaatkondisidanau->keruh_danau) ? $manfaatkondisidanau->keruh_danau : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="berlumpur_danau" class="col-sm-2 control-label col-form-label">Berlumpur</label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="berlumpur_danau">
                                                <option value="Ya" {{ old('berlumpur_danau', isset($manfaatkondisidanau->berlumpur_danau) ? $manfaatkondisidanau->berlumpur_danau : '') == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak" {{ old('berlumpur_danau', isset($manfaatkondisidanau->berlumpur_danau) ? $manfaatkondisidanau->berlumpur_danau : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <div class="my-3">
                                            <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">AIR PANAS</h5>
                                    <a href="<?= route('air-panas-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th rowspan="2" class="align-middle">Sumber</th>
                                                <th rowspan="2" class="align-middle">Jumlah Lokasi</th>
                                                <th rowspan="2" class="align-middle">Pemanfaatan(Wisata, Pengobatan Energi, dll)</th>
                                                <th colspan="3" class="align-middle">Kepemilikan/Pengelolaan</th>
                                                <th rowspan="2" class="align-middle">Aksi</th>
                                            </tr>
                                            <th class="align-middle">Pemerintah</th>
                                            <th class="align-middle">Swasta</th>
                                            <th class="align-middle">Perorangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($airpanas as $kud)
                                            <tr>
                                                <td><?= $kud->kgairpanas->name ?></td>
                                                <td><?= $kud->jumlah ?></td>
                                                <td><?= $kud->manfaat ?></td>
                                                <td><?= $kud->pemerintah ?></td>
                                                <td><?= $kud->swasta ?></td>
                                                <td><?= $kud->perorangan ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('air-panas-admin.edit', $kud['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('air-panas-admin.destroy', $kud['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="accordion-header mb-3 mt-3">KUALITAS UDARA</h5>
                                </div>
                                <a href="<?= route('kualitas-udara-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th rowspan="2" class="align-middle">Sumber </th>
                                                <th rowspan="2" class="align-middle">Jumlah Lokasi Sumber Pencemar</th>
                                                <th rowspan="2" class="align-middle">Polutan Pencemar</th>
                                                <th rowspan="2" class="align-middle">Efek Terhadap Kesehatan(Gangguan Penglihatan/ Kabut, ISPA, dll</th>
                                                <th colspan="3" class="align-middle">Kepemilikan</th>
                                                <th rowspan="2" class="align-middle">Aksi</th>
                                            </tr>
                                            <th class="align-middle">Pemerintah</th>
                                            <th class="align-middle">Swasta</th>
                                            <th class="align-middle">Perorangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($kualitasudara as $kud)
                                            <tr>
                                                <td><?= $kud->kgkualitasudara->name ?></td>
                                                <td><?= $kud->jumlah ?></td>
                                                <td><?= $kud->polutan ?></td>
                                                <td><?= $kud->efek ?></td>
                                                <td><?= $kud->pemda ?></td>
                                                <td><?= $kud->swasta ?></td>
                                                <td><?= $kud->perorangan ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('kualitas-udara-admin.edit', $kud['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('kualitas-udara-admin.destroy', $kud['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="accordion-header mb-3 mt-3">KEBISINGAN</h5>
                                </div>
                                <a href="<?= route('kebisingan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="align-middle">Tingkat Kebisingan</th>
                                                <th class="align-middle">Ekses Dampak Kebisingan</th>
                                                <th class="align-middle">Sumber Kebisingan</th>
                                                <th class="align-middle">Efek Terhadap Penduduk</th>
                                                <th class="align-middle">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($kebisingan as $bsg)
                                            <tr>
                                                <td><?= $bsg->kgkebisingan->name ?></td>
                                                <td><?= $bsg->dampak ?></td>
                                                <td><?= $bsg->sumber ?></td>
                                                <td><?= $bsg->efek ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('kebisingan-admin.edit', $bsg['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('kebisingan-admin.destroy', $bsg['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="accordion-header mb-3 mt-3">RUANG PUBLIK/TAMAN</h5>
                                </div>
                                <a href="<?= route('ruang-publik-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="align-middle">Ruang Publik/Taman</th>
                                                <th class="align-middle">Keberadaan</th>
                                                <th class="align-middle">Luas (M2)</th>
                                                <th class="align-middle">Tingkat Pemanfaatan</th>
                                                <th class="align-middle">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($ruangpublik as $rpt)
                                            <tr>
                                                <td><?= $rpt->kgruangpublik->name ?></td>
                                                <td><?= $rpt->keberadaan ?></td>
                                                <td><?= $rpt->luas ?></td>
                                                <td><?= $rpt->status ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('ruang-publik-admin.edit', $rpt['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('ruang-publik-admin.destroy', $rpt['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="accordion-header mb-3 mt-3">POTENSI WISATA</h5>
                                </div>
                                <a href="<?= route('potensi-wisata-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($potensiwisata as $ptws)
                                            <tr>
                                                <td><?= $ptws->kgpotensiwisata->name ?></td>
                                                <td><?= $ptws->luas ?></td>
                                                <td><?= $ptws->status ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('potensi-wisata-admin.edit', $ptws['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('potensi-wisata-admin.destroy', $ptws['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
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
                                                <th>Kepadatan Penduduk (per km)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $jumlahlakilaki }}</td>
                                                <td>{{ $jumlahperempuan }}</td>
                                                <td>{{ $jumlahpenduduk }}</td>
                                                <td>{{ $jumlahkk }}</td>
                                                <td>{{ number_format($jumlahpenduduk/1,2) }}</td>
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
                                                    <td>{{ $umur0_lk }}</td>
                                                    <td>{{ $umur0_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>{{ $umur1_lk }}</td>
                                                    <td>{{ $umur1_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>{{ $umur2_lk }}</td>
                                                    <td>{{ $umur2_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>{{ $umur3_lk }}</td>
                                                    <td>{{ $umur3_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>{{ $umur4_lk }}</td>
                                                    <td>{{ $umur4_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>{{ $umur5_lk }}</td>
                                                    <td>{{ $umur5_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>{{ $umur6_lk }}</td>
                                                    <td>{{ $umur6_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>{{ $umur7_lk }}</td>
                                                    <td>{{ $umur7_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>{{ $umur8_lk }}</td>
                                                    <td>{{ $umur8_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>{{ $umur9_lk }}</td>
                                                    <td>{{ $umur9_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>{{ $umur10_lk }}</td>
                                                    <td>{{ $umur10_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>{{ $umur11_lk }}</td>
                                                    <td>{{ $umur11_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>{{ $umur12_lk }}</td>
                                                    <td>{{ $umur12_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>{{ $umur13_lk }}</td>
                                                    <td>{{ $umur13_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>{{ $umur14_lk }}</td>
                                                    <td>{{ $umur14_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>{{ $umur15_lk }}</td>
                                                    <td>{{ $umur15_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>{{ $umur16_lk }}</td>
                                                    <td>{{ $umur16_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td>{{ $umur17_lk }}</td>
                                                    <td>{{ $umur17_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>{{ $umur18_lk }}</td>
                                                    <td>{{ $umur18_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>{{ $umur19_lk }}</td>
                                                    <td>{{ $umur19_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>{{ $umur20_lk }}</td>
                                                    <td>{{ $umur20_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td>{{ $umur21_lk }}</td>
                                                    <td>{{ $umur21_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td>{{ $umur22_lk }}</td>
                                                    <td>{{ $umur22_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>23</td>
                                                    <td>{{ $umur23_lk }}</td>
                                                    <td>{{ $umur23_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td>{{ $umur24_lk }}</td>
                                                    <td>{{ $umur24_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>25</td>
                                                    <td>{{ $umur25_lk }}</td>
                                                    <td>{{ $umur25_pr }}</td>
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
                                                    <td>{{ $umur26_lk }}</td>
                                                    <td>{{ $umur26_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>27</td>
                                                    <td>{{ $umur27_lk }}</td>
                                                    <td>{{ $umur27_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>28</td>
                                                    <td>{{ $umur28_lk }}</td>
                                                    <td>{{ $umur28_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>29</td>
                                                    <td>{{ $umur29_lk }}</td>
                                                    <td>{{ $umur29_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>30</td>
                                                    <td>{{ $umur30_lk }}</td>
                                                    <td>{{ $umur30_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>31</td>
                                                    <td>{{ $umur31_lk }}</td>
                                                    <td>{{ $umur31_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>32</td>
                                                    <td>{{ $umur32_lk }}</td>
                                                    <td>{{ $umur32_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>33</td>
                                                    <td>{{ $umur33_lk }}</td>
                                                    <td>{{ $umur33_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>34</td>
                                                    <td>{{ $umur34_lk }}</td>
                                                    <td>{{ $umur34_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>35</td>
                                                    <td>{{ $umur35_lk }}</td>
                                                    <td>{{ $umur35_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>36</td>
                                                    <td>{{ $umur36_lk }}</td>
                                                    <td>{{ $umur36_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>37</td>
                                                    <td>{{ $umur37_lk }}</td>
                                                    <td>{{ $umur37_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>38</td>
                                                    <td>{{ $umur38_lk }}</td>
                                                    <td>{{ $umur38_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>39</td>
                                                    <td>{{ $umur39_lk }}</td>
                                                    <td>{{ $umur39_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>40</td>
                                                    <td>{{ $umur40_lk }}</td>
                                                    <td>{{ $umur40_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>41</td>
                                                    <td>{{ $umur41_lk }}</td>
                                                    <td>{{ $umur41_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>42</td>
                                                    <td>{{ $umur42_lk }}</td>
                                                    <td>{{ $umur42_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>43</td>
                                                    <td>{{ $umur43_lk }}</td>
                                                    <td>{{ $umur43_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>44</td>
                                                    <td>{{ $umur44_lk }}</td>
                                                    <td>{{ $umur44_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>45</td>
                                                    <td>{{ $umur45_lk }}</td>
                                                    <td>{{ $umur45_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>46</td>
                                                    <td>{{ $umur46_lk }}</td>
                                                    <td>{{ $umur46_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>47</td>
                                                    <td>{{ $umur47_lk }}</td>
                                                    <td>{{ $umur47_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>48</td>
                                                    <td>{{ $umur48_lk }}</td>
                                                    <td>{{ $umur48_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>49</td>
                                                    <td>{{ $umur49_lk }}</td>
                                                    <td>{{ $umur49_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>50</td>
                                                    <td>{{ $umur50_lk }}</td>
                                                    <td>{{ $umur50_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>51</td>
                                                    <td>{{ $umur51_lk }}</td>
                                                    <td>{{ $umur51_pr }}</td>
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
                                                    <td>{{ $umur52_lk }}</td>
                                                    <td>{{ $umur52_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>53</td>
                                                    <td>{{ $umur53_lk }}</td>
                                                    <td>{{ $umur53_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>54</td>
                                                    <td>{{ $umur54_lk }}</td>
                                                    <td>{{ $umur54_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>55</td>
                                                    <td>{{ $umur55_lk }}</td>
                                                    <td>{{ $umur55_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>56</td>
                                                    <td>{{ $umur56_lk }}</td>
                                                    <td>{{ $umur56_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>57</td>
                                                    <td>{{ $umur57_lk }}</td>
                                                    <td>{{ $umur57_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>58</td>
                                                    <td>{{ $umur58_lk }}</td>
                                                    <td>{{ $umur58_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>59</td>
                                                    <td>{{ $umur59_lk }}</td>
                                                    <td>{{ $umur59_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>60</td>
                                                    <td>{{ $umur60_lk }}</td>
                                                    <td>{{ $umur60_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>61</td>
                                                    <td>{{ $umur61_lk }}</td>
                                                    <td>{{ $umur61_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>62</td>
                                                    <td>{{ $umur62_lk }}</td>
                                                    <td>{{ $umur62_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>63</td>
                                                    <td>{{ $umur63_lk }}</td>
                                                    <td>{{ $umur63_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>64</td>
                                                    <td>{{ $umur64_lk }}</td>
                                                    <td>{{ $umur64_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>65</td>
                                                    <td>{{ $umur65_lk }}</td>
                                                    <td>{{ $umur65_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>66</td>
                                                    <td>{{ $umur66_lk }}</td>
                                                    <td>{{ $umur66_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>67</td>
                                                    <td>{{ $umur67_lk }}</td>
                                                    <td>{{ $umur67_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>68</td>
                                                    <td>{{ $umur68_lk }}</td>
                                                    <td>{{ $umur68_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>69</td>
                                                    <td>{{ $umur69_lk }}</td>
                                                    <td>{{ $umur69_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>70</td>
                                                    <td>{{ $umur70_lk }}</td>
                                                    <td>{{ $umur70_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>71</td>
                                                    <td>{{ $umur71_lk }}</td>
                                                    <td>{{ $umur71_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>72</td>
                                                    <td>{{ $umur72_lk }}</td>
                                                    <td>{{ $umur72_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>73</td>
                                                    <td>{{ $umur73_lk }}</td>
                                                    <td>{{ $umur73_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>74</td>
                                                    <td>{{ $umur74_lk }}</td>
                                                    <td>{{ $umur74_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>75</td>
                                                    <td>{{ $umur75_lk }}</td>
                                                    <td>{{ $umur75_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>>75 Tahun</td>
                                                    <td>{{ $umur75atas_lk }}</td>
                                                    <td>{{ $umur75atas_pr }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Total</td>
                                                    <td>{{ $total_lk }}</td>
                                                    <td>{{ $total_pr }}</td>
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
                                            @if($jml_wrg_lk1 == 0 && $jml_wrg_pr1 == 0)
                                            <tr style="display:none" ;>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>WNI</td>
                                                <td>{{$jml_wrg_lk1}}</td>
                                                <td>{{$jml_wrg_pr1}}</td>
                                            </tr>
                                            @endif
                                            @if($jml_wrg_lk2 == 0 && $jml_wrg_pr2 == 0)
                                            <tr style="display:none" ;>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>WNI</td>
                                                <td>{{$jml_wrg_lk2}}</td>
                                                <td>{{$jml_wrg_pr2}}</td>
                                            </tr>
                                            @endif
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
                                            @if($jml_etn_lk1 == 0 && $jml_etn_pr1 == 0)
                                            <tr style="display:none" ;>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>{{ $etnis[0]->name }}</td>
                                                <td>{{ $jml_etn_lk1 }}</td>
                                                <td>{{ $jml_etn_pr1 }}</td>
                                            </tr>
                                            @endif
                                            @if($jml_etn_lk2 == 0 && $jml_etn_pr2 == 0)
                                            <tr style="display:none" ;>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>{{ $etnis[1]->name }}</td>
                                                <td>{{ $jml_etn_lk2 }}</td>
                                                <td>{{ $jml_etn_pr2 }}</td>
                                            </tr>
                                            @endif
                                            @if($jml_etn_lk3 == 0 && $jml_etn_pr3 == 0)
                                            <tr style="display:none" ;>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>{{ $etnis[2]->name }}</td>
                                                <td>{{ $jml_etn_lk3 }}</td>
                                                <td>{{ $jml_etn_pr3 }}</td>
                                            </tr>
                                            @endif
                                            @if($jml_etn_lk4 == 0 && $jml_etn_pr4 == 0)
                                            <tr style="display:none" ;>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>{{ $etnis[3]->name }}</td>
                                                <td>{{ $jml_etn_lk4 }}</td>
                                                <td>{{ $jml_etn_pr4 }}</td>
                                            </tr>
                                            @endif
                                            @if($jml_etn_lk5 == 0 && $jml_etn_pr5 == 0)
                                            <tr style="display:none" ;>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>{{ $etnis[4]->name }}</td>
                                                <td>{{ $jml_etn_lk5 }}</td>
                                                <td>{{ $jml_etn_pr5 }}</td>
                                            </tr>
                                            @endif
                                            @if($jml_etn_lk6 == 0 && $jml_etn_pr6 == 0)
                                            <tr style="display:none" ;>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>{{ $etnis[5]->name }}</td>
                                                <td>{{ $jml_etn_lk6 }}</td>
                                                <td>{{ $jml_etn_pr6 }}</td>
                                            </tr>
                                            @endif
                                            @if($jml_etn_lk7 == 0 && $jml_etn_pr7 == 0)
                                            <tr style="display:none" ;>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>{{ $etnis[6]->name }}</td>
                                                <td>{{ $jml_etn_lk7 }}</td>
                                                <td>{{ $jml_etn_pr7 }}</td>
                                            </tr>
                                            @endif
                                            @if($jml_etn_lk8 == 0 && $jml_etn_pr8 == 0)
                                            <tr style="display:none" ;>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>{{ $etnis[7]->name }}</td>
                                                <td>{{ $jml_etn_lk8 }}</td>
                                                <td>{{ $jml_etn_pr8 }}</td>
                                            </tr>
                                            @endif
                                            @if($jml_etn_lk9 == 0 && $jml_etn_pr9 == 0)
                                            <tr style="display:none" ;>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>{{ $etnis[8]->name }}</td>
                                                <td>{{ $jml_etn_lk9 }}</td>
                                                <td>{{ $jml_etn_pr9 }}</td>
                                            </tr>
                                            @endif
                                            @if($jml_etn_lk10 == 0 && $jml_etn_pr10 == 0)
                                            <tr style="display:none" ;>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>{{ $etnis[9]->name }}</td>
                                                <td>{{ $jml_etn_lk10 }}</td>
                                                <td>{{ $jml_etn_pr10 }}</td>
                                            </tr>
                                            @endif
                                            @if($jml_etn_lk11 == 0 && $jml_etn_pr11 == 0)
                                            <tr style="display:none" ;>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>{{ $etnis[10]->name }}</td>
                                                <td>{{ $jml_etn_lk11 }}</td>
                                                <td>{{ $jml_etn_pr11 }}</td>
                                            </tr>
                                            @endif
                                            @if($jml_etn_lk12 == 0 && $jml_etn_pr12 == 0)
                                            <tr style="display:none" ;>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>{{ $etnis[11]->name }}</td>
                                                <td>{{ $jml_etn_lk12 }}</td>
                                                <td>{{ $jml_etn_pr12 }}</td>
                                            </tr>
                                            @endif
                                            @if($jml_etn_lk13 == 0 && $jml_etn_pr13 == 0)
                                            <tr style="display:none" ;>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>{{ $etnis[12]->name }}</td>
                                                <td>{{ $jml_etn_lk13 }}</td>
                                                <td>{{ $jml_etn_pr13 }}</td>
                                            </tr>
                                            @endif
                                            @if($jml_etn_lk14 == 0 && $jml_etn_pr14 == 0)
                                            <tr style="display:none" ;>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>{{ $etnis[13]->name }}</td>
                                                <td>{{ $jml_etn_lk14 }}</td>
                                                <td>{{ $jml_etn_pr14 }}</td>
                                            </tr>
                                            @endif
                                            @if($jml_etn_lk15 == 0 && $jml_etn_pr15 == 0)
                                            <tr style="display:none" ;>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>{{ $etnis[14]->name }}</td>
                                                <td>{{ $jml_etn_lk15 }}</td>
                                                <td>{{ $jml_etn_pr15 }}</td>
                                            </tr>
                                            @endif
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
                                                <td>{{ $penyandangcacat[0]->name }}</td>
                                                <td>{{ $jml_pcct_lk1 }}</td>
                                                <td>{{ $jml_pcct_pr1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $penyandangcacat[1]->name }}</td>
                                                <td>{{ $jml_pcct_lk2 }}</td>
                                                <td>{{ $jml_pcct_pr2 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $penyandangcacat[2]->name }}</td>
                                                <td>{{ $jml_pcct_lk3 }}</td>
                                                <td>{{ $jml_pcct_pr3 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $penyandangcacat[3]->name }}</td>
                                                <td>{{ $jml_pcct_lk4 }}</td>
                                                <td>{{ $jml_pcct_pr4 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $penyandangcacat[4]->name }}</td>
                                                <td>{{ $jml_pcct_lk5 }}</td>
                                                <td>{{ $jml_pcct_pr5 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $penyandangcacat[5]->name }}</td>
                                                <td>{{ $jml_pcct_lk6 }}</td>
                                                <td>{{ $jml_pcct_pr6 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $penyandangcacat[6]->name }}</td>
                                                <td>{{ $jml_pcct_lk7 }}</td>
                                                <td>{{ $jml_pcct_pr7 }}</td>
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
                                                <td>Penduduk usia 0 - 6 tahun</td>
                                                <td>{{ $pendudukusia0tahun_lk }}</td>
                                                <td>{{ $pendudukusia0tahun_pr }}</td>
                                            </tr>
                                            <tr>
                                                <td>Penduduk usia 7 - 18 tahun yang masih sekolah</td>
                                                <td>{{ $totalpenduduksekolah_lk }}</td>
                                                <td>{{ $totalpenduduksekolah_pr }}</td>
                                            </tr>
                                            <tr>
                                                <td>Penduduk usia 18 - 56 tahun (a + b)</td>
                                                <td>{{ $totalpendudukbekerja_lk }}</td>
                                                <td>{{ $totalpendudukbekerja_pr }}</td>
                                            </tr>
                                            <tr>
                                                <td>a. Penduduk usia 18 - 56 tahun yang bekerja</td>
                                                <td>{{ $pendudukbekerja_lk }}</td>
                                                <td>{{ $pendudukbekerja_pr }}</td>
                                            </tr>
                                            <tr>
                                                <td>b. Penduduk usia 18 - 56 tahun yang belum/tidak bekerja</td>
                                                <td>{{ $penduduktidakbekerja_lk }}</td>
                                                <td>{{ $penduduktidakbekerja_pr }}</td>
                                            </tr>
                                            <tr>
                                                <td>Penduduk usia 56 tahun ke atas </td>
                                                <td>{{ $kualitas_pdk_ttsd_dewasa_lk }}</td>
                                                <td>{{ $kualitas_pdk_ttsd_dewasa_pr }}</td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah</td>
                                                <td>{{ $pendudukusia0tahun_lk+$totalpenduduksekolah_lk+$totalpendudukbekerja_lk+$kualitas_pdk_ttsd_dewasa_lk }}</td>
                                                <td>{{ $pendudukusia0tahun_pr+$totalpenduduksekolah_pr+$totalpendudukbekerja_pr+$kualitas_pdk_ttsd_dewasa_pr }}</td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td colspan="2">{{ $pendudukusia0tahun_lk+$totalpenduduksekolah_lk+$totalpendudukbekerja_lk+$kualitas_pdk_ttsd_dewasa_lk+$pendudukusia0tahun_pr+$totalpenduduksekolah_pr+$totalpendudukbekerja_pr+$kualitas_pdk_ttsd_dewasa_pr }}</td>
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
                                                <td>Penduduk usia 18 - 56 tahun yang buta aksara dan huruf/angka latin</td>
                                                <td>{{ $kualitas_pdk_ba_dewasa_lk }}</td>
                                                <td>{{ $kualitas_pdk_ba_dewasa_pr }}</td>
                                            </tr>
                                            <tr>
                                                <td>Usia 3-6 tahun yang belum masuk play group/TK</td>
                                                <td>{{ $kualitas_pdk_btk_anak_lk }}</td>
                                                <td>{{ $kualitas_pdk_btk_anak_pr }}</td>
                                            </tr>
                                            <tr>
                                                <td>Usia 3-6 tahun yang sedang play group/TK</td>
                                                <td>{{ $kualitas_pdk_mtk_anak_lk }}</td>
                                                <td>{{ $kualitas_pdk_mtk_anak_pr }}</td>
                                            </tr>
                                            <tr>
                                                <td>Usia 7-18 tahun yang tidak pernah sekolah</td>
                                                <td>{{ $kualitas_pdk_remaja_lk }}</td>
                                                <td>{{ $kualitas_pdk_remaja_pr }}</td>
                                            </tr>
                                            <tr>
                                                <td>Usia 7-18 tahun yang sedang sekolah</td>
                                                <td>{{ $totalpenduduksekolah_lk }}</td>
                                                <td>{{ $totalpenduduksekolah_pr }}</td>
                                            </tr>
                                            <tr>
                                                <td>Usia 18-56 tahun tidak pernah sekolah</td>
                                                <td>{{ $kualitas_pdk_tps_dewasa_lk }}</td>
                                                <td>{{ $kualitas_pdk_tps_dewasa_pr }}</td>
                                            </tr>
                                            <tr>
                                                <td>Usia 18-56 tahun tidak tamat SD</td>
                                                <td>{{ $penduduk56tahunatas_lk }}</td>
                                                <td>{{ $penduduk56tahunatas_pr }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $pendidikansedang[16]->name }}</td>
                                                <td>{{ $jml_pdk_lk17 }}</td>
                                                <td>{{ $jml_pdk_pr17 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $pendidikansedang[17]->name }}</td>
                                                <td>{{ $jml_pdk_lk18 }}</td>
                                                <td>{{ $jml_pdk_pr18 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $pendidikansedang[18]->name }}</td>
                                                <td>{{ $jml_pdk_lk19 }}</td>
                                                <td>{{ $jml_pdk_pr19 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $pendidikansedang[19]->name }}</td>
                                                <td>{{ $jml_pdk_lk20 }}</td>
                                                <td>{{ $jml_pdk_pr20 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $pendidikansedang[20]->name }}</td>
                                                <td>{{ $jml_pdk_lk21 }}</td>
                                                <td>{{ $jml_pdk_pr21 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $pendidikansedang[21]->name }}</td>
                                                <td>{{ $jml_pdk_lk22 }}</td>
                                                <td>{{ $jml_pdk_pr22 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $pendidikansedang[22]->name }}</td>
                                                <td>{{ $jml_pdk_lk23 }}</td>
                                                <td>{{ $jml_pdk_pr23 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $pendidikansedang[23]->name }}</td>
                                                <td>{{ $jml_pdk_lk24 }}</td>
                                                <td>{{ $jml_pdk_pr24 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $pendidikansedang[24]->name }}</td>
                                                <td>{{ $jml_pdk_lk25 }}</td>
                                                <td>{{ $jml_pdk_pr25 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $pendidikansedang[25]->name }}</td>
                                                <td>{{ $jml_pdk_lk26 }}</td>
                                                <td>{{ $jml_pdk_pr26 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $pendidikansedang[26]->name }}</td>
                                                <td>{{ $jml_pdk_lk27 }}</td>
                                                <td>{{ $jml_pdk_pr27 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $pendidikansedang[27]->name }}</td>
                                                <td>{{ $jml_pdk_lk28 }}</td>
                                                <td>{{ $jml_pdk_pr28 }}</td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah</td>
                                                <td>{{ $kualitas_pdk_ba_dewasa_lk+
                                                            $kualitas_pdk_btk_anak_lk+
                                                            $kualitas_pdk_mtk_anak_lk+
                                                            $kualitas_pdk_remaja_lk+
                                                            $totalpenduduksekolah_lk+
                                                            $kualitas_pdk_tps_dewasa_lk+
                                                            $penduduk56tahunatas_lk+
                                                            $jml_pdk_lk17+
                                                            $jml_pdk_lk18+
                                                            $jml_pdk_lk19+
                                                            $jml_pdk_lk20+
                                                            $jml_pdk_lk21+
                                                            $jml_pdk_lk22+
                                                            $jml_pdk_lk23+
                                                            $jml_pdk_lk24+
                                                            $jml_pdk_lk25+
                                                            $jml_pdk_lk26+
                                                            $jml_pdk_lk27+
                                                            $jml_pdk_lk28 }}</td>
                                                <td>{{ $kualitas_pdk_ba_dewasa_pr+
                                                            $kualitas_pdk_btk_anak_pr+
                                                            $kualitas_pdk_mtk_anak_pr+
                                                            $kualitas_pdk_remaja_pr+
                                                            $totalpenduduksekolah_pr+
                                                            $kualitas_pdk_tps_dewasa_pr+
                                                            $penduduk56tahunatas_pr+
                                                            $jml_pdk_pr17+
                                                            $jml_pdk_pr18+
                                                            $jml_pdk_pr19+
                                                            $jml_pdk_pr20+
                                                            $jml_pdk_pr21+
                                                            $jml_pdk_pr22+
                                                            $jml_pdk_pr23+
                                                            $jml_pdk_pr24+
                                                            $jml_pdk_pr25+
                                                            $jml_pdk_pr26+
                                                            $jml_pdk_pr27+
                                                            $jml_pdk_pr28 }}</td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td colspan="2">{{ $kualitas_pdk_ba_dewasa_lk+
                                                            $kualitas_pdk_btk_anak_lk+
                                                            $kualitas_pdk_mtk_anak_lk+
                                                            $kualitas_pdk_remaja_lk+
                                                            $totalpenduduksekolah_lk+
                                                            $kualitas_pdk_tps_dewasa_lk+
                                                            $penduduk56tahunatas_lk+
                                                            $jml_pdk_lk17+
                                                            $jml_pdk_lk18+
                                                            $jml_pdk_lk19+
                                                            $jml_pdk_lk20+
                                                            $jml_pdk_lk21+
                                                            $jml_pdk_lk22+
                                                            $jml_pdk_lk23+
                                                            $jml_pdk_lk24+
                                                            $jml_pdk_lk25+
                                                            $jml_pdk_lk26+
                                                            $jml_pdk_lk27+
                                                            $jml_pdk_lk28+
                                                            $kualitas_pdk_ba_dewasa_pr+
                                                            $kualitas_pdk_btk_anak_pr+
                                                            $kualitas_pdk_mtk_anak_pr+
                                                            $kualitas_pdk_remaja_pr+
                                                            $totalpenduduksekolah_pr+
                                                            $kualitas_pdk_tps_dewasa_pr+
                                                            $penduduk56tahunatas_pr+
                                                            $jml_pdk_pr17+
                                                            $jml_pdk_pr18+
                                                            $jml_pdk_pr19+
                                                            $jml_pdk_pr20+
                                                            $jml_pdk_pr21+
                                                            $jml_pdk_pr22+
                                                            $jml_pdk_pr23+
                                                            $jml_pdk_pr24+
                                                            $jml_pdk_pr25+
                                                            $jml_pdk_pr26+
                                                            $jml_pdk_pr27+
                                                            $jml_pdk_pr28 }}
                                                </td>
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
                                                @foreach($jumlahaparaturdesa as $kds)
                                                <td>Dasar Hukum Pembentukan Pemerintah Desa / Kelurahan</td>
                                                @if($kds['dasarhukumperdes'] == "Belum Ada Dasar Hukum")
                                                <td>Tidak Ada</td>
                                                @else
                                                <td>Ada</td>
                                                @endif
                                                <td>
                                                    {{ $kds['dasarhukumperdes'] }}
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                @foreach($jumlahaparaturdesa as $kds)
                                                <td>Dasar Hukum Pembentukan BPD</td>
                                                @if($kds['dasarhukumbpd'] == "Belum Ada Dasar Hukum")
                                                <td>Tidak Ada</td>
                                                @else
                                                <td>Ada</td>
                                                @endif
                                                <td>
                                                    {{ $kds['dasarhukumbpd'] }}
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td>Jumlah Aparat Pemerintahan Desa/Kelurahan</td>
                                                <td colspan="2" class="text-center">
                                                    @foreach($jumlahaparaturdesa as $kds)
                                                    {{ $kds['jumlahrwdesa']+$kds['jumlahrtdesa']+$jumlahdusun }}
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Perangkat Desa/Kelurahan</td>
                                                <td colspan="2" class="text-center">{{ $jumlahperangkatdesa }}</td>
                                            </tr>
                                            <tr>
                                                <td>Kepala Desa/Lurah</td>
                                                <td colspan="2" class="text-center">
                                                    @foreach($kades as $kds)
                                                    {{ $kds['status'] }}
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sekretaris Desa/Kelurahan</td>
                                                <td colspan="2" class="text-center">
                                                    @foreach($sekdes as $skds)
                                                    {{ $skds['status'] }}
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kepala Seksi Pemerintahan</td>
                                                <td colspan="2" class="text-center">
                                                    @foreach($seksipem as $skp)
                                                    {{ $skp['status'] }}
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kepala Seksi Kesejahteraan Rakyat</td>
                                                <td colspan="2" class="text-center">
                                                    @foreach($seksikesra as $ksr)
                                                    {{ $ksr['status'] }}
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kepala Seksi Pelayanan</td>
                                                <td colspan="2" class="text-center">
                                                    @foreach($seksipel as $pln)
                                                    {{ $pln['status'] }}
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kepala Urusan Tata Usaha dan Umum</td>
                                                <td colspan="2" class="text-center">
                                                    @foreach($seksitu as $stu)
                                                    {{ $stu['status'] }}
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kepala Urusan Keuangan</td>
                                                <td colspan="2" class="text-center">
                                                    @foreach($seksikeu as $skeu)
                                                    {{ $skeu['status'] }}
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kepala Urusan Perencanaan</td>
                                                <td colspan="2" class="text-center">
                                                    @foreach($seksiren as $sren)
                                                    {{ $sren['status'] }}
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Staf</td>
                                                <td colspan="2" class="text-center">{{ $jumlahstafdesa }}</td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Dusun di Desa/Lingkungan di Kelurahan atau sebutan lain</td>
                                                <td colspan="2" class="text-center">{{ $jumlahdusun }}</td>
                                            </tr>
                                            @foreach($kadus as $kadus)
                                            <tr>
                                                <td>Kepala Dusun/Lingkungan {{ $kadus['name'] }}</td>
                                                <td colspan="2" class="text-center">{{ $kadus['status'] }}</td>
                                            </tr>
                                            @endforeach
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
                                                <td colspan="2" class="text-center">
                                                    @foreach($kades as $kds)
                                                    {{ $kds['pendidikan'] }}
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sekretaris Desa/Kelurahan</td>
                                                <td colspan="2" class="text-center">
                                                    @foreach($sekdes as $skds)
                                                    {{ $skds['pendidikan'] }}
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kepala Seksi Pemerintahan</td>
                                                <td colspan="2" class="text-center">
                                                    @foreach($seksipem as $skp)
                                                    {{ $skp['pendidikan'] }}
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kepala Seksi Kesejahteraan Rakyat</td>
                                                <td colspan="2" class="text-center">
                                                    @foreach($seksikesra as $ksr)
                                                    {{ $ksr['pendidikan'] }}
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kepala Seksi Pelayanan</td>
                                                <td colspan="2" class="text-center">
                                                    @foreach($seksipel as $pln)
                                                    {{ $pln['pendidikan'] }}
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kepala Urusan Tata Usaha dan Umum</td>
                                                <td colspan="2" class="text-center">
                                                    @foreach($seksitu as $stu)
                                                    {{ $stu['pendidikan'] }}
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kepala Urusan Keuangan</td>
                                                <td colspan="2" class="text-center">
                                                    @foreach($seksikeu as $skeu)
                                                    {{ $skeu['pendidikan'] }}
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kepala Urusan Perencanaan</td>
                                                <td colspan="2" class="text-center">
                                                    @foreach($seksiren as $sren)
                                                    {{ $sren['pendidikan'] }}
                                                    @endforeach
                                                </td>
                                            </tr>
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
                                                <td class="text-center">
                                                    @foreach($jumlahaparaturdesa as $kds)
                                                    {{ $kds['keberadaanbpd'] }}
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Anggota BPD</td>
                                                @if($jumlahagtbpd == 1)
                                                <td class="text-center">{{ $jumlahagtbpd-1 }}</td>
                                                @else
                                                <td class="text-center">0</td>
                                                @endif
                                            </tr>
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
                                                @foreach($bpdketua as $bpdket)
                                                <td>Ketua, Nama : {{ $bpdket['name'] }}</td>
                                                <td class="text-center">{{ $bpdket['pendidikan'] }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                @foreach($bpdwaket as $bpdwket)
                                                <td>Wakil Ketua, Nama : {{ $bpdwket['name'] }}</td>
                                                <td class="text-center">{{ $bpdwket['pendidikan'] }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                @foreach($bpdsekr as $bpdsek)
                                                <td>Sekretaris, Nama : {{ $bpdsek['name'] }}</td>
                                                <td class="text-center">{{ $bpdsek['pendidikan'] }}</td>
                                                @endforeach
                                            </tr>
                                            @foreach($bpdanggota as $bpdagt)
                                            <tr>
                                                <td>Anggota, Nama : {{ $bpdagt['name'] }}</td>
                                                <td class="text-center">{{ $bpdagt['pendidikan'] }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">LEMBAGA KEMASYARAKATAN</h5>
                                </div>
                                <a href="<?= route('lembaga-kemasyarakatan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($lembagakemasyarakatan as $lmsk)
                                            <tr>
                                                <td><?= $lmsk->kglembagakemasyarakatan->name ?></td>
                                                <td><?= $lmsk['dasarhukumpembentukan'] ?></td>
                                                <td><?= $lmsk['jumlah_lembaga'] ?></td>
                                                <td><?= $lmsk['jumlah_pengurus'] ?></td>
                                                <td><?= $lmsk['ruang_lingkup_kegiatan'] ?></td>
                                                <td><?= $lmsk['jumlah_jenis_kegiatan'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('lembaga-kemasyarakatan-admin.edit', $lmsk['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('lembaga-kemasyarakatan-admin.destroy', $lmsk['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">TINGKAT PARTISIPASI POLITIK</h5>
                                </div>
                                <a href="<?= route('tingkat-partisipasi-politik-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($tingkatpartisipasipolitik as $tpp)
                                            <tr>
                                                <td><?= $tpp->kgtingkatpartisipasipolitik->name ?></td>
                                                <td><?= $tpp['punyahakpilih_lakilaki'] ?></td>
                                                <td><?= $tpp['punyahakpilih_perempuan'] ?></td>
                                                <td><?= $tpp['manfaathakpilih_lakilaki'] ?></td>
                                                <td><?= $tpp['manfaathakpilih_perempuan'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('tingkat-partisipasi-politik-admin.edit', $tpp['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('tingkat-partisipasi-politik-admin.destroy', $tpp['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
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
                                <h5 class="mb-3 mt-3">LEMBAGA EKONOMI, DAN UNIT USAHA DESA/KELURAHAN</h5>
                                <a href="<?= route('lembaga-ekonomi-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($lembagaekonomi as $lmbe)
                                            <tr>
                                                <td><?= $lmbe->kglembagaekonomi->name ?></td>
                                                <td><?= $lmbe['jumlah'] ?></td>
                                                <td><?= $lmbe['kegiatan'] ?></td>
                                                <td><?= $lmbe['pengurus'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('lembaga-ekonomi-admin.edit', $lmbe['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('lembaga-ekonomi-admin.destroy', $lmbe['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">JASA LEMBAGA KEUANGAN</h5>
                                    <a href="<?= route('jasa-lembaga-keuangan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($jasalembagakeuangan as $jlk)
                                            <tr>
                                                <td><?= $jlk->kgjasalembagakeuangan->name ?></td>
                                                <td><?= $jlk['jumlah'] ?></td>
                                                <td><?= $jlk['kegiatan'] ?></td>
                                                <td><?= $jlk['pengurus'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('jasa-lembaga-keuangan-admin.edit', $jlk['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('jasa-lembaga-keuangan-admin.destroy', $jlk['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">INDUSTRI KECIL DAN MENENGAH</h5>
                                    <a href="<?= route('industri-kecil-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($industrikecil as $indk)
                                            <tr>
                                                <td><?= $indk->kgindustrikecil->name ?></td>
                                                <td><?= $indk['jumlah'] ?></td>
                                                <td><?= $indk['kegiatan'] ?></td>
                                                <td><?= $indk['pengurus'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('industri-kecil-admin.edit', $indk['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('industri-kecil-admin.destroy', $indk['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">USAHA JASA PENGANGKUTAN</h5>
                                    <a href="<?= route('usaha-jasa-pengangkutan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                                <td colspan="6">Angkutan Darat</td>
                                            </tr>
                                            @foreach($usahajasapengangkutan1 as $uspg1)
                                            <tr>
                                                <td><?= $uspg1->kgusahajasapengangkutan->name ?></td>
                                                <td><?= $uspg1['jumlah'] ?></td>
                                                <td><?= $uspg1['pemilik'] ?></td>
                                                <td><?= $uspg1['kapasitas'] ?></td>
                                                <td><?= $uspg1['jumlah_tenagakerja'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('usaha-jasa-pengangkutan-admin.edit', $uspg1['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('usaha-jasa-pengangkutan-admin.destroy', $uspg1['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="6">Angkutan Sungai</td>
                                            </tr>
                                            @foreach($usahajasapengangkutan2 as $uspg2)
                                            <tr>
                                                <td><?= $uspg2->kgusahajasapengangkutan->name ?></td>
                                                <td><?= $uspg2['jumlah'] ?></td>
                                                <td><?= $uspg2['pemilik'] ?></td>
                                                <td><?= $uspg2['kapasitas'] ?></td>
                                                <td><?= $uspg2['jumlah_tenagakerja'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('usaha-jasa-pengangkutan-admin.edit', $uspg2['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('usaha-jasa-pengangkutan-admin.destroy', $uspg2['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="6">Angkutan Laut</td>
                                            </tr>
                                            @foreach($usahajasapengangkutan3 as $uspg3)
                                            <tr>
                                                <td><?= $uspg3->kgusahajasapengangkutan->name ?></td>
                                                <td><?= $uspg3['jumlah'] ?></td>
                                                <td><?= $uspg3['pemilik'] ?></td>
                                                <td><?= $uspg3['kapasitas'] ?></td>
                                                <td><?= $uspg3['jumlah_tenagakerja'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('usaha-jasa-pengangkutan-admin.edit', $uspg3['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('usaha-jasa-pengangkutan-admin.destroy', $uspg3['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="6">Angkutan Udara</td>
                                            </tr>
                                            @foreach($usahajasapengangkutan4 as $uspg4)
                                            <tr>
                                                <td><?= $uspg4->kgusahajasapengangkutan->name ?></td>
                                                <td><?= $uspg4['jumlah'] ?></td>
                                                <td><?= $uspg4['pemilik'] ?></td>
                                                <td><?= $uspg4['kapasitas'] ?></td>
                                                <td><?= $uspg4['jumlah_tenagakerja'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('usaha-jasa-pengangkutan-admin.edit', $uspg4['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('usaha-jasa-pengangkutan-admin.destroy', $uspg4['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="6">Ekspedisi Dan Pengiriman</td>
                                            </tr>
                                            @foreach($usahajasapengangkutan5 as $uspg5)
                                            <tr>
                                                <td><?= $uspg5->kgusahajasapengangkutan->name ?></td>
                                                <td><?= $uspg5['jumlah'] ?></td>
                                                <td><?= $uspg5['pemilik'] ?></td>
                                                <td><?= $uspg5['kapasitas'] ?></td>
                                                <td><?= $uspg5['jumlah_tenagakerja'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('usaha-jasa-pengangkutan-admin.edit', $uspg5['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('usaha-jasa-pengangkutan-admin.destroy', $uspg5['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">USAHA JASA DAN PERDAGANGAN</h5>
                                    <a href="<?= route('usaha-jasa-perdagangan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($usahajasaperdagangan as $ujp)
                                            <tr>
                                                <td><?= $ujp->kgusahajasaperdagangan->name ?></td>
                                                <td><?= $ujp['jumlah'] ?></td>
                                                <td><?= $ujp['jenis_produk'] ?></td>
                                                <td><?= $ujp['jumlah_tenagakerja'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('usaha-jasa-perdagangan-admin.edit', $ujp['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('usaha-jasa-perdagangan-admin.destroy', $ujp['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">USAHA JASA HIBURAN</h5>
                                    <a href="<?= route('usaha-jasa-hiburan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($usahajasahiburan as $ujh)
                                            <tr>
                                                <td><?= $ujh->kgusahajasahiburan->name ?></td>
                                                <td><?= $ujh['jumlah'] ?></td>
                                                <td><?= $ujh['jenis_produk'] ?></td>
                                                <td><?= $ujh['jumlah_tenagakerja'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('usaha-jasa-hiburan-admin.edit', $ujh['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('usaha-jasa-hiburan-admin.destroy', $ujh['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">USAHA JASA GAS, LISTRIK, BBM DAN AIR</h5>
                                    <a href="<?= route('usaha-jasa-gas-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($usahajasagas as $ujg)
                                            <tr>
                                                <td><?= $ujg->kgusahajasagas->name ?></td>
                                                <td><?= $ujg['jumlah'] ?></td>
                                                <td><?= $ujg['jenis_produk'] ?></td>
                                                <td><?= $ujg['jumlah_tenagakerja'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('usaha-jasa-gas-admin.edit', $ujg['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('usaha-jasa-gas-admin.destroy', $ujg['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">USAHA JASA KETERAMPILAN</h5>
                                    <a href="<?= route('usaha-jasa-keterampilan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($usahajasaketerampilan as $ujk)
                                            <tr>
                                                <td><?= $ujk->kgusahajasaketerampilan->name ?></td>
                                                <td><?= $ujk['jumlah'] ?></td>
                                                <td><?= $ujk['jenis_produk'] ?></td>
                                                <td><?= $ujk['jumlah_tenagakerja'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('usaha-jasa-keterampilan-admin.edit', $ujk['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('usaha-jasa-keterampilan-admin.destroy', $ujk['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">USAHA JASA HUKUM DAN KONSULTASI</h5>
                                    <a href="<?= route('usaha-jasa-hukum-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($usahajasahukum as $ushk)
                                            <tr>
                                                <td><?= $ushk->kgusahajasahukum->name ?></td>
                                                <td><?= $ushk['jumlah'] ?></td>
                                                <td><?= $ushk['jenis_produk'] ?></td>
                                                <td><?= $ushk['jumlah_tenagakerja'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('usaha-jasa-hukum-admin.edit', $ushk['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('usaha-jasa-hukum-admin.destroy', $ushk['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">USAHA JASA PENGINAPAN</h5>
                                    <a href="<?= route('usaha-jasa-penginapan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($usahajasapenginapan as $uspn)
                                            <tr>
                                                <td><?= $uspn->kgusahajasapenginapan->name ?></td>
                                                <td><?= $uspn['jumlah'] ?></td>
                                                <td><?= $uspn['jenis_produk'] ?></td>
                                                <td><?= $uspn['jumlah_tenagakerja'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('usaha-jasa-penginapan-admin.edit', $uspn['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('usaha-jasa-penginapan-admin.destroy', $uspn['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
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
                                <a href="<?= route('pendidikan-formal-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            <th class="align-middle">Desa/ Kelurahan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pendidikanformal as $pddf)
                                            <tr>
                                                <td><?= $pddf->kgpendidikanformal->name ?></td>
                                                <td><?= $pddf['jumlah'] ?></td>
                                                <td><?= $pddf['status'] ?></td>
                                                <td><?= $pddf['pemerintah'] ?></td>
                                                <td><?= $pddf['swasta'] ?></td>
                                                <td><?= $pddf['desa'] ?></td>
                                                <td><?= $pddf['jumlah_pengajar'] ?></td>
                                                <td><?= $pddf['jumlah_siswa'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('pendidikan-formal-admin.edit', $pddf['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('pendidikan-formal-admin.destroy', $pddf['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">PENDIDIKAN FORMAL KEAGAMAAN</h5>
                                    <a href="<?= route('pendidikan-keagamaan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                                <td colspan="9">Sekolah Islam</td>
                                            </tr>
                                            @foreach($pendidikankeagamaan1 as $pdf1)
                                            <tr>
                                                <td><?= $pdf1->kgpendidikankeagamaan->name ?></td>
                                                <td><?= $pdf1['jumlah'] ?></td>
                                                <td><?= $pdf1['status'] ?></td>
                                                <td><?= $pdf1['pemerintah'] ?></td>
                                                <td><?= $pdf1['swasta'] ?></td>
                                                <td><?= $pdf1['dll'] ?></td>
                                                <td><?= $pdf1['jumlah_pengajar'] ?></td>
                                                <td><?= $pdf1['jumlah_siswa'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('pendidikan-keagamaan-admin.edit', $pdf1['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('pendidikan-keagamaan-admin.destroy', $pdf1['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="9">Sekolah Katholik</td>
                                            </tr>
                                            @foreach($pendidikankeagamaan2 as $pdf2)
                                            <tr>
                                                <td><?= $pdf2->kgpendidikankeagamaan->name ?></td>
                                                <td><?= $pdf2['jumlah'] ?></td>
                                                <td><?= $pdf2['status'] ?></td>
                                                <td><?= $pdf2['pemerintah'] ?></td>
                                                <td><?= $pdf2['swasta'] ?></td>
                                                <td><?= $pdf2['dll'] ?></td>
                                                <td><?= $pdf2['jumlah_pengajar'] ?></td>
                                                <td><?= $pdf2['jumlah_siswa'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('pendidikan-keagamaan-admin.edit', $pdf2['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('pendidikan-keagamaan-admin.destroy', $pdf2['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="9">Sekolah Budha</td>
                                            </tr>
                                            @foreach($pendidikankeagamaan3 as $pdf3)
                                            <tr>
                                                <td><?= $pdf3->kgpendidikankeagamaan->name ?></td>
                                                <td><?= $pdf3['jumlah'] ?></td>
                                                <td><?= $pdf3['status'] ?></td>
                                                <td><?= $pdf3['pemerintah'] ?></td>
                                                <td><?= $pdf3['swasta'] ?></td>
                                                <td><?= $pdf3['dll'] ?></td>
                                                <td><?= $pdf3['jumlah_pengajar'] ?></td>
                                                <td><?= $pdf3['jumlah_siswa'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('pendidikan-keagamaan-admin.edit', $pdf3['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('pendidikan-keagamaan-admin.destroy', $pdf3['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="9">Sekolah Protestan</td>
                                            </tr>
                                            @foreach($pendidikankeagamaan4 as $pdf4)
                                            <tr>
                                                <td><?= $pdf4->kgpendidikankeagamaan->name ?></td>
                                                <td><?= $pdf4['jumlah'] ?></td>
                                                <td><?= $pdf4['status'] ?></td>
                                                <td><?= $pdf4['pemerintah'] ?></td>
                                                <td><?= $pdf4['swasta'] ?></td>
                                                <td><?= $pdf4['dll'] ?></td>
                                                <td><?= $pdf4['jumlah_pengajar'] ?></td>
                                                <td><?= $pdf4['jumlah_siswa'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('pendidikan-keagamaan-admin.edit', $pdf4['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('pendidikan-keagamaan-admin.destroy', $pdf4['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="9">Sekolah Hindu</td>
                                            </tr>
                                            @foreach($pendidikankeagamaan5 as $pdf5)
                                            <tr>
                                                <td><?= $pdf5->kgpendidikankeagamaan->name ?></td>
                                                <td><?= $pdf5['jumlah'] ?></td>
                                                <td><?= $pdf5['status'] ?></td>
                                                <td><?= $pdf5['pemerintah'] ?></td>
                                                <td><?= $pdf5['swasta'] ?></td>
                                                <td><?= $pdf5['dll'] ?></td>
                                                <td><?= $pdf5['jumlah_pengajar'] ?></td>
                                                <td><?= $pdf5['jumlah_siswa'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('pendidikan-keagamaan-admin.edit', $pdf5['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('pendidikan-keagamaan-admin.destroy', $pdf5['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="9">Sekolah Konghucu</td>
                                            </tr>
                                            @foreach($pendidikankeagamaan6 as $pdf6)
                                            <tr>
                                                <td><?= $pdf6->kgpendidikankeagamaan->name ?></td>
                                                <td><?= $pdf6['jumlah'] ?></td>
                                                <td><?= $pdf6['status'] ?></td>
                                                <td><?= $pdf6['pemerintah'] ?></td>
                                                <td><?= $pdf6['swasta'] ?></td>
                                                <td><?= $pdf6['dll'] ?></td>
                                                <td><?= $pdf6['jumlah_pengajar'] ?></td>
                                                <td><?= $pdf6['jumlah_siswa'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('pendidikan-keagamaan-admin.edit', $pdf6['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('pendidikan-keagamaan-admin.destroy', $pdf6['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">PENDIDIKAN NON FORMAL/KURSUS</h5>
                                    <a href="<?= route('pendidikan-non-formal-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($pendidikannonformal as $pdnf)
                                            <tr>
                                                <td><?= $pdnf->kgpendidikannonformal->name ?></td>
                                                <td><?= $pdnf['jumlah'] ?></td>
                                                <td><?= $pdnf['status'] ?></td>
                                                <td><?= $pdnf['kepemilikan'] ?></td>
                                                <td><?= $pdnf['jumlah_pengajar'] ?></td>
                                                <td><?= $pdnf['jumlah_siswa'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('pendidikan-non-formal-admin.edit', $pdnf['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('pendidikan-non-formal-admin.destroy', $pdnf['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="accordion-item">
                        <form action="<?= route('profildesakecamatan.updateLembagaAdat', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PATCH')}}
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
                                            <select class="form-control" name="pemangkut_adat">
                                                <option value="Ada" {{ old('pemangkut_adat', isset($lembagaadat->pemangkut_adat) ? $lembagaadat->pemangkut_adat : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('pemangkut_adat', isset($lembagaadat->pemangkut_adat) ? $lembagaadat->pemangkut_adat : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="kepengurusan_adat" class="col-sm-2 control-label col-form-label">Kepengurusan Adat</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kepengurusan_adat">
                                                <option value="Ada" {{ old('kepengurusan_adat', isset($lembagaadat->kepengurusan_adat) ? $lembagaadat->kepengurusan_adat : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('kepengurusan_adat', isset($lembagaadat->kepengurusan_adat) ? $lembagaadat->kepengurusan_adat : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">SIMBOL ADAT</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rumah_adat" class="col-sm-2 control-label col-form-label">Rumah Adat</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="rumah_adat">
                                                <option value="Ada" {{ old('rumah_adat', isset($lembagaadat->rumah_adat) ? $lembagaadat->rumah_adat : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('rumah_adat', isset($lembagaadat->rumah_adat) ? $lembagaadat->rumah_adat : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="barang_pusaka" class="col-sm-2 control-label col-form-label">Barang Pusaka</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="barang_pusaka">
                                                <option value="Ada" {{ old('barang_pusaka', isset($lembagaadat->barang_pusaka) ? $lembagaadat->barang_pusaka : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('barang_pusaka', isset($lembagaadat->barang_pusaka) ? $lembagaadat->barang_pusaka : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="naskah_naskah" class="col-sm-2 control-label col-form-label">Naskah-naskah</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="naskah_naskah">
                                                <option value="Ada" {{ old('naskah_naskah', isset($lembagaadat->naskah_naskah) ? $lembagaadat->naskah_naskah : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('naskah_naskah', isset($lembagaadat->naskah_naskah) ? $lembagaadat->naskah_naskah : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">JENIS KEGIATAN ADAT</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="musyawarah_adat" class="col-sm-2 control-label col-form-label">Musyawarah Adat</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="musyawarah_adat">
                                                <option value="Ada" {{ old('musyawarah_adat', isset($lembagaadat->musyawarah_adat) ? $lembagaadat->musyawarah_adat : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('musyawarah_adat', isset($lembagaadat->musyawarah_adat) ? $lembagaadat->musyawarah_adat : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="sanksi_adat" class="col-sm-2 control-label col-form-label">Sanksi Adat</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="sanksi_adat">
                                                <option value="Ada" {{ old('sanksi_adat', isset($lembagaadat->sanksi_adat) ? $lembagaadat->sanksi_adat : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('sanksi_adat', isset($lembagaadat->sanksi_adat) ? $lembagaadat->sanksi_adat : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="upacara_adat_perkawinan" class="col-sm-2 control-label col-form-label">Upacara Adat Perkawinan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="upacara_adat_perkawinan">
                                                <option value="Ada" {{ old('upacara_adat_perkawinan', isset($lembagaadat->upacara_adat_perkawinan) ? $lembagaadat->upacara_adat_perkawinan : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('upacara_adat_perkawinan', isset($lembagaadat->upacara_adat_perkawinan) ? $lembagaadat->upacara_adat_perkawinan : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="upacara_adat_kematian" class="col-sm-2 control-label col-form-label">Upacara Adat Kematian</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="upacara_adat_kematian">
                                                <option value="Ada" {{ old('upacara_adat_kematian', isset($lembagaadat->upacara_adat_kematian) ? $lembagaadat->upacara_adat_kematian : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('upacara_adat_kematian', isset($lembagaadat->upacara_adat_kematian) ? $lembagaadat->upacara_adat_kematian : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="upacara_adat_kelahiran" class="col-sm-2 control-label col-form-label">Upacara Adat Kelahiran</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="upacara_adat_kelahiran">
                                                <option value="Ada" {{ old('upacara_adat_kelahiran', isset($lembagaadat->upacara_adat_kelahiran) ? $lembagaadat->upacara_adat_kelahiran : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('upacara_adat_kelahiran', isset($lembagaadat->upacara_adat_kelahiran) ? $lembagaadat->upacara_adat_kelahiran : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="upacara_adat_cocok_tanam" class="col-sm-2 control-label col-form-label">Upacara Adat dalam Bercocok Tanam</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="upacara_adat_cocok_tanam">
                                                <option value="Ada" {{ old('upacara_adat_cocok_tanam', isset($lembagaadat->upacara_adat_cocok_tanam) ? $lembagaadat->upacara_adat_cocok_tanam : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('upacara_adat_cocok_tanam', isset($lembagaadat->upacara_adat_cocok_tanam) ? $lembagaadat->upacara_adat_cocok_tanam : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="upacara_adat_bidang_perikanan" class="col-sm-2 control-label col-form-label">Upacara Adat Bidang Perikanan/Laut</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="upacara_adat_bidang_perikanan">
                                                <option value="Ada" {{ old('upacara_adat_bidang_perikanan', isset($lembagaadat->upacara_adat_bidang_perikanan) ? $lembagaadat->upacara_adat_bidang_perikanan : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('upacara_adat_bidang_perikanan', isset($lembagaadat->upacara_adat_bidang_perikanan) ? $lembagaadat->upacara_adat_bidang_perikanan : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="upacara_adat_bidang_kehutanan" class="col-sm-2 control-label col-form-label">Upacara Adat Bidang Kehutanan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="upacara_adat_bidang_kehutanan">
                                                <option value="Ada" {{ old('upacara_adat_bidang_kehutanan', isset($lembagaadat->upacara_adat_bidang_kehutanan) ? $lembagaadat->upacara_adat_bidang_kehutanan : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('upacara_adat_bidang_kehutanan', isset($lembagaadat->upacara_adat_bidang_kehutanan) ? $lembagaadat->upacara_adat_bidang_kehutanan : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="upacara_adat_kelola_sda" class="col-sm-2 control-label col-form-label">Upacara Adat Dalam Pengelolaan SDA</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="upacara_adat_kelola_sda">
                                                <option value="Ada" {{ old('upacara_adat_kelola_sda', isset($lembagaadat->upacara_adat_kelola_sda) ? $lembagaadat->upacara_adat_kelola_sda : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('upacara_adat_kelola_sda', isset($lembagaadat->upacara_adat_kelola_sda) ? $lembagaadat->upacara_adat_kelola_sda : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="upacara_adat_dalam_bangun_rumah" class="col-sm-2 control-label col-form-label">Upacara Adat Dalam Pembangunan Rumah</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="upacara_adat_dalam_bangun_rumah">
                                                <option value="Ada" {{ old('upacara_adat_dalam_bangun_rumah', isset($lembagaadat->upacara_adat_dalam_bangun_rumah) ? $lembagaadat->upacara_adat_dalam_bangun_rumah : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('upacara_adat_dalam_bangun_rumah', isset($lembagaadat->upacara_adat_dalam_bangun_rumah) ? $lembagaadat->upacara_adat_dalam_bangun_rumah : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="upacara_adat_penyelesaian_masalah" class="col-sm-2 control-label col-form-label">Upacara Adat Dalam Penyelesaian Masalah/Konflik</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="upacara_adat_penyelesaian_masalah">
                                                <option value="Ada" {{ old('upacara_adat_penyelesaian_masalah', isset($lembagaadat->upacara_adat_penyelesaian_masalah) ? $lembagaadat->upacara_adat_penyelesaian_masalah : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('upacara_adat_penyelesaian_masalah', isset($lembagaadat->upacara_adat_penyelesaian_masalah) ? $lembagaadat->upacara_adat_penyelesaian_masalah : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
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
                        </form>
                    </div>
                    <div class="accordion-item">
                        <form action="<?= route('profildesakecamatan.updateLembagaKeamanan', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PATCH')}}
                            <h2 class="accordion-header" id="headingTwelve">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    LEMBAGA KEAMANAN
                            </h2>
                            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="mb-3" id="headingThree">HANSIP DAN LINMAS</h5>
                                    <div class="form-group row">
                                        <label for="keberadaanhansip" class="col-sm-2 control-label col-form-label">Keberadaan Hansip dan Linmas</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="keberadaanhansip">
                                                <option value="Ada" {{ old('keberadaanhansip', isset($lembagakeamanan->keberadaanhansip) ? $lembagakeamanan->keberadaanhansip : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('keberadaanhansip', isset($lembagakeamanan->keberadaanhansip) ? $lembagakeamanan->keberadaanhansip : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="jumlah_anggota_hansip" class="col-sm-2 control-label col-form-label">Jumlah Anggota Hansip</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_anggota_hansip" name="jumlah_anggota_hansip" value="<?= isset($lembagakeamanan->jumlah_anggota_hansip) ? $lembagakeamanan->jumlah_anggota_hansip : '' ?>">
                                        </div>
                                        <label for="jumlah_anggota_satgas_linmas" class="col-sm-2 control-label col-form-label">Jumlah Anggota Satgas Linmas</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_anggota_satgas_linmas" name="jumlah_anggota_satgas_linmas" value="<?= isset($lembagakeamanan->jumlah_anggota_satgas_linmas) ? $lembagakeamanan->jumlah_anggota_satgas_linmas : '' ?>">
                                        </div>
                                        <label for="pelaksanaan_siskamling" class="col-sm-2 control-label col-form-label">Pelaksanaan SISKAMLING</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="pelaksanaan_siskamling">
                                                <option value="Ada" {{ old('pelaksanaan_siskamling', isset($lembagakeamanan->pelaksanaan_siskamling) ? $lembagakeamanan->pelaksanaan_siskamling : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('pelaksanaan_siskamling', isset($lembagakeamanan->pelaksanaan_siskamling) ? $lembagakeamanan->pelaksanaan_siskamling : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="jumlah_poskamling" class="col-sm-2 control-label col-form-label">Jumlah Pos Kamling</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_poskamling" name="jumlah_poskamling" value="<?= isset($lembagakeamanan->jumlah_poskamling) ? $lembagakeamanan->jumlah_poskamling : '' ?>">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">SATGAS SWAKARSA</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keberadaan_satpam_swakarsa" class="col-sm-2 control-label col-form-label">Keberadaan SATPAM SWAKARSA</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="keberadaan_satpam_swakarsa">
                                                <option value="Ada" {{ old('keberadaan_satpam_swakarsa', isset($lembagakeamanan->keberadaan_satpam_swakarsa) ? $lembagakeamanan->keberadaan_satpam_swakarsa : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('keberadaan_satpam_swakarsa', isset($lembagakeamanan->keberadaan_satpam_swakarsa) ? $lembagakeamanan->keberadaan_satpam_swakarsa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="jumlah_anggota_satpam" class="col-sm-2 control-label col-form-label">Jumlah Anggota</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_anggota_satpam" name="jumlah_anggota_satpam" value="<?= isset($lembagakeamanan->jumlah_anggota_satpam) ? $lembagakeamanan->jumlah_anggota_satpam : '' ?>">
                                        </div>
                                        <label for="nama_organisasi_induk" class="col-sm-2 control-label col-form-label">Nama Organisasi Induk</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="nama_organisasi_induk" name="nama_organisasi_induk" value="<?= isset($lembagakeamanan->nama_organisasi_induk) ? $lembagakeamanan->nama_organisasi_induk : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pemilik_organisasi_swakarsa" class="col-sm-2 control-label col-form-label">Pemilik Organisasi</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="pemilik_organisasi_swakarsa">
                                                <option value="Pemerintah" {{ old('pemilik_organisasi_swakarsa', isset($lembagakeamanan->pemilik_organisasi_swakarsa) ? $lembagakeamanan->pemilik_organisasi_swakarsa : '') == 'Pemerintah' ? 'selected' : '' }}>
                                                    Pemerintah
                                                </option>
                                                <option value="Swasta" {{ old('pemilik_organisasi_swakarsa', isset($lembagakeamanan->pemilik_organisasi_swakarsa) ? $lembagakeamanan->pemilik_organisasi_swakarsa : '') == 'Swasta' ? 'selected' : '' }}>
                                                    Swasta
                                                </option>
                                                <option value="Perorangan" {{ old('pemilik_organisasi_swakarsa', isset($lembagakeamanan->pemilik_organisasi_swakarsa) ? $lembagakeamanan->pemilik_organisasi_swakarsa : '') == 'Perorangan' ? 'selected' : '' }}>
                                                    Perorangan
                                                </option>
                                            </select>
                                        </div>
                                        <label for="keberadaan_organisasi_keamanan" class="col-sm-2 control-label col-form-label">Keberadaan Org. Keamanan Lainnya</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="keberadaan_organisasi_keamanan">
                                                <option value="Ada" {{ old('keberadaan_organisasi_keamanan', isset($lembagakeamanan->keberadaan_organisasi_keamanan) ? $lembagakeamanan->keberadaan_organisasi_keamanan : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('keberadaan_organisasi_keamanan', isset($lembagakeamanan->keberadaan_organisasi_keamanan) ? $lembagakeamanan->keberadaan_organisasi_keamanan : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">KERJASAMA DESA/KELURAHAN DENGAN TNI/POLRI DALAM BIDANG TRANTIBLINMAS</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="mitra_koramil_tni" class="col-sm-2 control-label col-form-label">Mitra Koramil/TNI</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="mitra_koramil_tni">
                                                <option value="Ada" {{ old('mitra_koramil_tni', isset($lembagakeamanan->mitra_koramil_tni) ? $lembagakeamanan->mitra_koramil_tni : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('mitra_koramil_tni', isset($lembagakeamanan->mitra_koramil_tni) ? $lembagakeamanan->mitra_koramil_tni : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="jumlah_anggota_trantiblinmas" class="col-sm-2 control-label col-form-label">Jumlah Anggota</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_anggota_trantiblinmas" name="jumlah_anggota_trantiblinmas" value="<?= isset($lembagakeamanan->jumlah_anggota_trantiblinmas) ? $lembagakeamanan->jumlah_anggota_trantiblinmas : '' ?>">
                                        </div>
                                        <label for="jumlah_kegiatan_trantiblinmas" class="col-sm-2 control-label col-form-label">Jumlah Kegiatan</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_kegiatan_trantiblinmas" name="jumlah_kegiatan_trantiblinmas" value="<?= isset($lembagakeamanan->jumlah_kegiatan_trantiblinmas) ? $lembagakeamanan->jumlah_kegiatan_trantiblinmas : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="babinkamtibmas" class="col-sm-2 control-label col-form-label">Babinkamtibmas/POLRI</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="babinkamtibmas">
                                                <option value="Ada" {{ old('babinkamtibmas', isset($lembagakeamanan->babinkamtibmas) ? $lembagakeamanan->babinkamtibmas : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('babinkamtibmas', isset($lembagakeamanan->babinkamtibmas) ? $lembagakeamanan->babinkamtibmas : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="jumlah_anggota_babinkamtibmas" class="col-sm-2 control-label col-form-label">Jumlah Anggota</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_anggota_babinkamtibmas" name="jumlah_anggota_babinkamtibmas" value="<?= isset($lembagakeamanan->jumlah_anggota_babinkamtibmas) ? $lembagakeamanan->jumlah_anggota_babinkamtibmas : '' ?>">
                                        </div>
                                        <label for="jumlah_kegiatan_babinkamtibmas" class="col-sm-2 control-label col-form-label">Jumlah Kegiatan</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_kegiatan_babinkamtibmas" name="jumlah_kegiatan_babinkamtibmas" value="<?= isset($lembagakeamanan->jumlah_kegiatan_babinkamtibmas) ? $lembagakeamanan->jumlah_kegiatan_babinkamtibmas : '' ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThirteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                PRASARANA DAN SARANA TRANSPORTASI
                        </h2>
                        <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5 class="mb-3" id="headingThree">PRASARANA TRANSPORTASI DARAT</h5>
                                <a href="<?= route('prasarana-darat-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($prasaranadarat as $psd)
                                            <tr>
                                                <td><?= $psd->kgprasaranadarat->name ?></td>
                                                <td><?= $psd->kgdarat->name ?></td>
                                                <td><?= $psd['baik'] ?></td>
                                                <td><?= $psd['rusak'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('prasarana-darat-admin.edit', $psd['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('prasarana-darat-admin.destroy', $psd['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">SARANA TRANSPORTASI DARAT</h5>
                                    <a href="<?= route('sarana-darat-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($saranadarat as $srnd)
                                            <tr>
                                                <td><?= $srnd->kgsaranadarat->name ?></td>
                                                <td><?= $srnd['keberadaan'] ?></td>
                                                <td><?= $srnd['jumlah'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('sarana-darat-admin.edit', $srnd['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('sarana-darat-admin.destroy', $srnd['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">PRASARANA TRANSPORTASI LAUT/SUNGAI</h5>
                                    <a href="<?= route('prasarana-laut-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($prasaranalaut as $psrnl)
                                            <tr>
                                                <td><?= $psrnl->kgprasaranalaut->name ?></td>
                                                <td><?= $psrnl['jumlah'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('prasarana-laut-admin.edit', $psrnl['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('prasarana-laut-admin.destroy', $psrnl['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">SARANA TRANSPORTASI SUNGAI/LAUT</h5>
                                    <a href="<?= route('sarana-laut-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($saranalaut as $srnl)
                                            <tr>
                                                <td><?= $srnl->kgsaranalaut->name ?></td>
                                                <td><?= $srnl['jumlah'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('sarana-laut-admin.edit', $srnl['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('sarana-laut-admin.destroy', $srnl['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">PRASARANA TRANSPORTASI UDARA</h5>
                                    <a href="<?= route('prasarana-udara-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($prasaranaudara as $psrnud)
                                            <tr>
                                                <td><?= $psrnud->kgprasaranaudara->name ?></td>
                                                <td><?= $psrnud['jumlah'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('prasarana-udara-admin.edit', $psrnud['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('prasarana-udara-admin.destroy', $psrnud['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
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
                                <a href="<?= route('telepon-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Jenis</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($telepon as $tlp)
                                            <tr>
                                                <td><?= $tlp->kgtelepon->name ?></td>
                                                <td><?= $tlp['jumlah'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('telepon-admin.edit', $tlp['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('telepon-admin.destroy', $tlp['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">KANTOR POS</h5>
                                    <a href="<?= route('kantorpos-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($kantorpos as $ktp)
                                            <tr>
                                                <td><?= $ktp->kgkantorpos->name ?></td>
                                                <td><?= $ktp['jumlah'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('kantorpos-admin.edit', $ktp['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('kantorpos-admin.destroy', $ktp['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">RADIO/TV</h5>
                                    <a href="<?= route('radiotv-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($radiotv as $rtv)
                                            <tr>
                                                <td><?= $rtv->kgradiotv->name ?></td>
                                                <td><?= $rtv['jumlah'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('radiotv-admin.edit', $rtv['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('radiotv-admin.destroy', $rtv['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">KORAN/MAJALAH/BULETIN</h5>
                                    <a href="<?= route('koran-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($koran as $krn)
                                            <tr>
                                                <td><?= $krn->kgkoran->name ?></td>
                                                <td><?= $krn->status ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('koran-admin.edit', $krn['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('koran-admin.destroy', $krn['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <form action="<?= route('profildesakecamatan.updatePrasaranaAirBersih', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PATCH')}}
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
                                            <input type="number" class="form-control" id="jumlah_sumur_pompa" name="jumlah_sumur_pompa" value="<?= isset($prasaranaairbersih->jumlah_sumur_pompa) ? $prasaranaairbersih->jumlah_sumur_pompa : '' ?>">
                                        </div>
                                        <label for="jumlah_sumur_gali" class="col-sm-2 control-label col-form-label">Jumlah Sumur Gali</label>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control" id="jumlah_sumur_gali" name="jumlah_sumur_gali" value="<?= isset($prasaranaairbersih->jumlah_sumur_gali) ? $prasaranaairbersih->jumlah_sumur_gali : '' ?>">
                                        </div>
                                        <label for="jumlah_hidran_umum" class="col-sm-2 control-label col-form-label">Jumlah Hidran Umum</label>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control" id="jumlah_hidran_umum" name="jumlah_hidran_umum" value="<?= isset($prasaranaairbersih->jumlah_hidran_umum) ? $prasaranaairbersih->jumlah_hidran_umum : '' ?>">
                                        </div>
                                        <label for="jumlah_pah" class="col-sm-2 control-label col-form-label">Jumlah PAH</label>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control" id="jumlah_pah" name="jumlah_pah" value="<?= isset($prasaranaairbersih->jumlah_pah) ? $prasaranaairbersih->jumlah_pah : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_tangki_air_bersih" class="col-sm-2 control-label col-form-label">Jumlah Tangki Air Bersih</label>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control" id="jumlah_tangki_air_bersih" name="jumlah_tangki_air_bersih" value="<?= isset($prasaranaairbersih->jumlah_tangki_air_bersih) ? $prasaranaairbersih->jumlah_tangki_air_bersih : '' ?>">
                                        </div>
                                        <label for="jumlah_embung" class="col-sm-2 control-label col-form-label">Jumlah Embung</label>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control" id="jumlah_embung" name="jumlah_embung" value="<?= isset($prasaranaairbersih->jumlah_embung) ? $prasaranaairbersih->jumlah_embung : '' ?>">
                                        </div>
                                        <label for="jumlah_mataair" class="col-sm-2 control-label col-form-label">Jumlah Mata Air</label>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control" id="jumlah_mataair" name="jumlah_mataair" value="<?= isset($prasaranaairbersih->jumlah_mataair) ? $prasaranaairbersih->jumlah_mataair : '' ?>">
                                        </div>
                                        <label for="jumlah_bangunan_olah_air" class="col-sm-2 control-label col-form-label">Jumlah Bgn. Olah Air Bersih/Minum</label>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control" id="jumlah_bangunan_olah_air" name="jumlah_bangunan_olah_air" value="<?= isset($prasaranaairbersih->jumlah_bangunan_olah_air) ? $prasaranaairbersih->jumlah_bangunan_olah_air : '' ?>">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3"> SANITASI</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="saluran_drainase" class="col-sm-2 control-label col-form-label">Saluran drainase/saluran pembuangan air limbah</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="saluran_drainase">
                                                <option value="Ada" {{ old('saluran_drainase', isset($prasaranaairbersih->saluran_drainase) ? $prasaranaairbersih->saluran_drainase : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('saluran_drainase', isset($prasaranaairbersih->saluran_drainase) ? $prasaranaairbersih->saluran_drainase : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="sumur_resapan_rt" class="col-sm-2 control-label col-form-label">Sumur Resapan Air Rumah Tangga</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="sumur_resapan_rt" name="sumur_resapan_rt" value="<?= isset($prasaranaairbersih->sumur_resapan_rt) ? $prasaranaairbersih->sumur_resapan_rt : '' ?>">
                                        </div>
                                        <label for="jumlah_mck_umum" class="col-sm-2 control-label col-form-label">Jumlah MCK Umum</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_mck_umum" name="jumlah_mck_umum" value="<?= isset($prasaranaairbersih->jumlah_mck_umum) ? $prasaranaairbersih->jumlah_mck_umum : '' ?>">
                                        </div>
                                        <label for="pemilik_jumlah_jamban" class="col-sm-2 control-label col-form-label">Pemilik Jumlah Jamban Keluarga</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="pemilik_jumlah_jamban" name="pemilik_jumlah_jamban" value="<?= isset($prasaranaairbersih->pemilik_jumlah_jamban) ? $prasaranaairbersih->pemilik_jumlah_jamban : '' ?>">

                                        </div>
                                        <label for="kondisi_saluran_drainase" class="col-sm-2 control-label col-form-label">Kondisi Saluran Drainase/Saluran Pembuangan Air Limbah</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kondisi_saluran_drainase">
                                                <option value="Baik" {{ old('kondisi_saluran_drainase', isset($prasaranaairbersih->kondisi_saluran_drainase) ? $prasaranaairbersih->kondisi_saluran_drainase : '') == 'Baik' ? 'selected' : '' }}>
                                                    Baik
                                                </option>
                                                <option value="Rusak" {{ old('kondisi_saluran_drainase', isset($prasaranaairbersih->kondisi_saluran_drainase) ? $prasaranaairbersih->kondisi_saluran_drainase : '') == 'Rusak' ? 'selected' : '' }}>
                                                    Rusak
                                                </option>
                                                <option value="Mampet" {{ old('kondisi_saluran_drainase', isset($prasaranaairbersih->kondisi_saluran_drainase) ? $prasaranaairbersih->kondisi_saluran_drainase : '') == 'Mampet' ? 'selected' : '' }}>
                                                    Mampet
                                                </option>
                                                <option value="Kurang Memadai" {{ old('kondisi_saluran_drainase', isset($prasaranaairbersih->kondisi_saluran_drainase) ? $prasaranaairbersih->kondisi_saluran_drainase : '') == 'Kurang Memadai' ? 'selected' : '' }}>
                                                    Kurang Memadai
                                                </option>
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
                        </form>
                    </div>
                    <div class="accordion-item">
                        <form action="<?= route('profildesakecamatan.updatePrasaranaIrigasi', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PATCH')}}
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
                                            <input type="number" class="form-control" id="panjang_saluran_primer" name="panjang_saluran_primer" value="<?= isset($prasaranairigasi->panjang_saluran_primer) ? $prasaranairigasi->panjang_saluran_primer : '' ?>">
                                        </div>
                                        <label for="panjang_saluran_sekunder" class="col-sm-2 control-label col-form-label">Panjang Saluran Sekunder</label>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control" id="panjang_saluran_sekunder" name="panjang_saluran_sekunder" value="<?= isset($prasaranairigasi->panjang_saluran_sekunder) ? $prasaranairigasi->panjang_saluran_sekunder : '' ?>">
                                        </div>
                                        <label for="panjang_saluran_tersier" class="col-sm-2 control-label col-form-label">Panjang Saluran Tersier</label>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control" id="panjang_saluran_tersier" name="panjang_saluran_tersier" value="<?= isset($prasaranairigasi->panjang_saluran_tersier) ? $prasaranairigasi->panjang_saluran_tersier : '' ?>">
                                        </div>
                                        <label for="jumlah_pintu_sadap" class="col-sm-2 control-label col-form-label">Jumlah Pintu Sadap</label>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control" id="jumlah_pintu_sadap" name="jumlah_pintu_sadap" value="<?= isset($prasaranairigasi->jumlah_pintu_sadap) ? $prasaranairigasi->jumlah_pintu_sadap : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_pintu_pembagi_air" class="col-sm-2 control-label col-form-label">Jumlah Pintu Pembagi Air</label>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control" id="jumlah_pintu_pembagi_air" name="jumlah_pintu_pembagi_air" value="<?= isset($prasaranairigasi->jumlah_pintu_pembagi_air) ? $prasaranairigasi->jumlah_pintu_pembagi_air : '' ?>">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3"> KONDISI</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kondisi_saluran_primer" class="col-sm-2 control-label col-form-label">kondisi Saluran Primer Rusak</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kondisi_saluran_primer">
                                                <option value="Baik" {{ old('kondisi_saluran_primer', isset($prasaranairigasi->kondisi_saluran_primer) ? $prasaranairigasi->kondisi_saluran_primer : '') == 'Baik' ? 'selected' : '' }}>
                                                    Baik
                                                </option>
                                                <option value="Rusak" {{ old('kondisi_saluran_primer', isset($prasaranairigasi->kondisi_saluran_primer) ? $prasaranairigasi->kondisi_saluran_primer : '') == 'Rusak' ? 'selected' : '' }}>
                                                    Rusak
                                                </option>
                                                <option value="Mampet" {{ old('kondisi_saluran_primer', isset($prasaranairigasi->kondisi_saluran_primer) ? $prasaranairigasi->kondisi_saluran_primer : '') == 'Mampet' ? 'selected' : '' }}>
                                                    Mampet
                                                </option>
                                                <option value="Kurang Memadai" {{ old('kondisi_saluran_primer', isset($prasaranairigasi->kondisi_saluran_primer) ? $prasaranairigasi->kondisi_saluran_primer : '') == 'Kurang Memadai' ? 'selected' : '' }}>
                                                    Kurang Memadai
                                                </option>
                                            </select>
                                        </div>
                                        <label for="kondisi_saluran_sekunder" class="col-sm-2 control-label col-form-label">kondisi Saluran Sekunder Rusak</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kondisi_saluran_sekunder">
                                                <option value="Baik" {{ old('kondisi_saluran_sekunder', isset($prasaranairigasi->kondisi_saluran_sekunder) ? $prasaranairigasi->kondisi_saluran_sekunder : '') == 'Baik' ? 'selected' : '' }}>
                                                    Baik
                                                </option>
                                                <option value="Rusak" {{ old('kondisi_saluran_sekunder', isset($prasaranairigasi->kondisi_saluran_sekunder) ? $prasaranairigasi->kondisi_saluran_sekunder : '') == 'Rusak' ? 'selected' : '' }}>
                                                    Rusak
                                                </option>
                                                <option value="Mampet" {{ old('kondisi_saluran_sekunder', isset($prasaranairigasi->kondisi_saluran_sekunder) ? $prasaranairigasi->kondisi_saluran_sekunder : '') == 'Mampet' ? 'selected' : '' }}>
                                                    Mampet
                                                </option>
                                                <option value="Kurang Memadai" {{ old('kondisi_saluran_sekunder', isset($prasaranairigasi->kondisi_saluran_sekunder) ? $prasaranairigasi->kondisi_saluran_sekunder : '') == 'Kurang Memadai' ? 'selected' : '' }}>
                                                    Kurang Memadai
                                                </option>
                                            </select>
                                        </div>
                                        <label for="kondisi_saluran_tersier" class="col-sm-2 control-label col-form-label">kondisi Saluran Tersier Rusak</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kondisi_saluran_tersier">
                                                <option value="Baik" {{ old('kondisi_saluran_tersier', isset($prasaranairigasi->kondisi_saluran_tersier) ? $prasaranairigasi->kondisi_saluran_tersier : '') == 'Baik' ? 'selected' : '' }}>
                                                    Baik
                                                </option>
                                                <option value="Rusak" {{ old('kondisi_saluran_tersier', isset($prasaranairigasi->kondisi_saluran_tersier) ? $prasaranairigasi->kondisi_saluran_tersier : '') == 'Rusak' ? 'selected' : '' }}>
                                                    Rusak
                                                </option>
                                                <option value="Mampet" {{ old('kondisi_saluran_tersier', isset($prasaranairigasi->kondisi_saluran_tersier) ? $prasaranairigasi->kondisi_saluran_tersier : '') == 'Mampet' ? 'selected' : '' }}>
                                                    Mampet
                                                </option>
                                                <option value="Kurang Memadai" {{ old('kondisi_saluran_tersier', isset($prasaranairigasi->kondisi_saluran_tersier) ? $prasaranairigasi->kondisi_saluran_tersier : '') == 'Kurang Memadai' ? 'selected' : '' }}>
                                                    Kurang Memadai
                                                </option>
                                            </select>
                                        </div>
                                        <label for="pintu_sadap" class="col-sm-2 control-label col-form-label">Jumlah Pintu Sadap Rusak</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="pintu_sadap">
                                                <option value="Baik" {{ old('pintu_sadap', isset($prasaranairigasi->pintu_sadap) ? $prasaranairigasi->pintu_sadap : '') == 'Baik' ? 'selected' : '' }}>
                                                    Baik
                                                </option>
                                                <option value="Rusak" {{ old('pintu_sadap', isset($prasaranairigasi->pintu_sadap) ? $prasaranairigasi->pintu_sadap : '') == 'Rusak' ? 'selected' : '' }}>
                                                    Rusak
                                                </option>
                                                <option value="Mampet" {{ old('pintu_sadap', isset($prasaranairigasi->pintu_sadap) ? $prasaranairigasi->pintu_sadap : '') == 'Mampet' ? 'selected' : '' }}>
                                                    Mampet
                                                </option>
                                                <option value="Kurang Memadai" {{ old('pintu_sadap', isset($prasaranairigasi->pintu_sadap) ? $prasaranairigasi->pintu_sadap : '') == 'Kurang Memadai' ? 'selected' : '' }}>
                                                    Kurang Memadai
                                                </option>
                                            </select>
                                        </div>
                                        <label for="pintu_pembagi_air" class="col-sm-2 control-label col-form-label">Jumlah Pintu Pembagi Air Rusak</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="pintu_pembagi_air">
                                                <option value="Baik" {{ old('pintu_pembagi_air', isset($prasaranairigasi->pintu_pembagi_air) ? $prasaranairigasi->pintu_pembagi_air : '') == 'Baik' ? 'selected' : '' }}>
                                                    Baik
                                                </option>
                                                <option value="Rusak" {{ old('pintu_pembagi_air', isset($prasaranairigasi->pintu_pembagi_air) ? $prasaranairigasi->pintu_pembagi_air : '') == 'Rusak' ? 'selected' : '' }}>
                                                    Rusak
                                                </option>
                                                <option value="Mampet" {{ old('pintu_pembagi_air', isset($prasaranairigasi->pintu_pembagi_air) ? $prasaranairigasi->pintu_pembagi_air : '') == 'Mampet' ? 'selected' : '' }}>
                                                    Mampet
                                                </option>
                                                <option value="Kurang Memadai" {{ old('pintu_pembagi_air', isset($prasaranairigasi->pintu_pembagi_air) ? $prasaranairigasi->pintu_pembagi_air : '') == 'Kurang Memadai' ? 'selected' : '' }}>
                                                    Kurang Memadai
                                                </option>
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
                        </form>
                    </div>
                    <div class="accordion-item">
                        <form action="<?= route('profildesakecamatan.updatePrasaranaPemerintahan', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PATCH')}}
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
                                            <select class="form-control" name="gedung_kantor_desa">
                                                <option value="Ada" {{ old('gedung_kantor_desa', isset($prasaranapemerintahan->gedung_kantor_desa) ? $prasaranapemerintahan->gedung_kantor_desa : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('gedung_kantor_desa', isset($prasaranapemerintahan->gedung_kantor_desa) ? $prasaranapemerintahan->gedung_kantor_desa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div> <label for="kondisi_gedung_kantor_desa" class="col-sm-2 control-label col-form-label">Kondisi</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kondisi_gedung_kantor_desa">
                                                <option value="Baik" {{ old('kondisi_gedung_kantor_desa', isset($prasaranapemerintahan->kondisi_gedung_kantor_desa) ? $prasaranapemerintahan->kondisi_gedung_kantor_desa : '') == 'Baik' ? 'selected' : '' }}>
                                                    Baik
                                                </option>
                                                <option value="Rusak" {{ old('kondisi_gedung_kantor_desa', isset($prasaranapemerintahan->kondisi_gedung_kantor_desa) ? $prasaranapemerintahan->kondisi_gedung_kantor_desa : '') == 'Rusak' ? 'selected' : '' }}>
                                                    Rusak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="jumlah_ruang_kerja_desa" class="col-sm-2 control-label col-form-label">Jumlah Ruang Kerja</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_ruang_kerja_desa" name="jumlah_ruang_kerja_desa" value="<?= isset($prasaranapemerintahan->jumlah_ruang_kerja_desa) ? $prasaranapemerintahan->jumlah_ruang_kerja_desa : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="balai_desa" class="col-sm-2 control-label col-form-label">Balai Desa/Kelurahan/Sejenisnya</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="balai_desa">
                                                <option value="Ada" {{ old('balai_desa', isset($prasaranapemerintahan->balai_desa) ? $prasaranapemerintahan->balai_desa : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('balai_desa', isset($prasaranapemerintahan->balai_desa) ? $prasaranapemerintahan->balai_desa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="listrik_desa" class="col-sm-2 control-label col-form-label">Listrik</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="listrik_desa">
                                                <option value="Ada" {{ old('listrik_desa', isset($prasaranapemerintahan->listrik_desa) ? $prasaranapemerintahan->listrik_desa : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('listrik_desa', isset($prasaranapemerintahan->listrik_desa) ? $prasaranapemerintahan->listrik_desa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="air_bersih_desa" class="col-sm-2 control-label col-form-label">Air Bersih</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="air_bersih_desa">
                                                <option value="Ada - Baik" {{ old('air_bersih_desa', isset($prasaranapemerintahan->air_bersih_desa) ? $prasaranapemerintahan->air_bersih_desa : '') == 'Ada - Baik' ? 'selected' : '' }}>
                                                    Ada - Baik
                                                </option>
                                                <option value="Ada - Rusak" {{ old('air_bersih_desa', isset($prasaranapemerintahan->air_bersih_desa) ? $prasaranapemerintahan->air_bersih_desa : '') == 'Ada - Rusak' ? 'selected' : '' }}>
                                                    Ada - Rusak
                                                </option>
                                                <option value="Tidak" {{ old('air_bersih_desa', isset($prasaranapemerintahan->air_bersih_desa) ? $prasaranapemerintahan->air_bersih_desa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telepon_desa" class="col-sm-2 control-label col-form-label">Telepon</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="telepon_desa">
                                                <option value="Ada" {{ old('telepon_desa', isset($prasaranapemerintahan->telepon_desa) ? $prasaranapemerintahan->telepon_desa : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('telepon_desa', isset($prasaranapemerintahan->telepon_desa) ? $prasaranapemerintahan->telepon_desa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="rumah_dinas_kepala_desa" class="col-sm-2 control-label col-form-label">Rumah Dinas Kepala Desa/Lurah</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="rumah_dinas_kepala_desa">
                                                <option value="Ada" {{ old('rumah_dinas_kepala_desa', isset($prasaranapemerintahan->rumah_dinas_kepala_desa) ? $prasaranapemerintahan->rumah_dinas_kepala_desa : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('rumah_dinas_kepala_desa', isset($prasaranapemerintahan->rumah_dinas_kepala_desa) ? $prasaranapemerintahan->rumah_dinas_kepala_desa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="rumah_dinas_perangkat_desa" class="col-sm-2 control-label col-form-label">Rumah Dinas Perangkat Desa/Kelurahan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="rumah_dinas_perangkat_desa">
                                                <option value="Ada" {{ old('rumah_dinas_perangkat_desa', isset($prasaranapemerintahan->rumah_dinas_perangkat_desa) ? $prasaranapemerintahan->rumah_dinas_perangkat_desa : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('rumah_dinas_perangkat_desa', isset($prasaranapemerintahan->rumah_dinas_perangkat_desa) ? $prasaranapemerintahan->rumah_dinas_perangkat_desa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3"> INVENTARIS DAN ALAT TULIS KANTOR</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_mesin_tik_desa" class="col-sm-2 control-label col-form-label">Jumlah Mesin Tik</label>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control" id="jumlah_mesin_tik_desa" name="jumlah_mesin_tik_desa" value="<?= isset($prasaranapemerintahan->jumlah_mesin_tik_desa) ? $prasaranapemerintahan->jumlah_mesin_tik_desa : '' ?>">
                                        </div>
                                        <label for="jumlah_meja_desa" class="col-sm-2 control-label col-form-label">Jumlah Meja</label>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control" id="jumlah_meja_desa" name="jumlah_meja_desa" value="<?= isset($prasaranapemerintahan->jumlah_meja_desa) ? $prasaranapemerintahan->jumlah_meja_desa : '' ?>">
                                        </div>
                                        <label for="jumlah_kursi_desa" class="col-sm-2 control-label col-form-label">Jumlah Kursi</label>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control" id="jumlah_kursi_desa" name="jumlah_kursi_desa" value="<?= isset($prasaranapemerintahan->jumlah_kursi_desa) ? $prasaranapemerintahan->jumlah_kursi_desa : '' ?>">
                                        </div>
                                        <label for="jumlah_almari_arsip_desa" class="col-sm-2 control-label col-form-label">Jumlah Almari Arsip</label>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control" id="jumlah_almari_arsip_desa" name="jumlah_almari_arsip_desa" value="<?= isset($prasaranapemerintahan->jumlah_almari_arsip_desa) ? $prasaranapemerintahan->jumlah_almari_arsip_desa : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="komputer_desa" class="col-sm-2 control-label col-form-label">Komputer</label>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control" id="komputer_desa" name="komputer_desa" value="<?= isset($prasaranapemerintahan->komputer_desa) ? $prasaranapemerintahan->komputer_desa : '' ?>">
                                        </div>
                                        <label for="mesin_fax_desa" class="col-sm-2 control-label col-form-label">Mesin Fax</label>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control" id="mesin_fax_desa" name="mesin_fax_desa" value="<?= isset($prasaranapemerintahan->mesin_fax_desa) ? $prasaranapemerintahan->mesin_fax_desa : '' ?>">
                                        </div>
                                        <label for="kendaraan_dinas_desa" class="col-sm-2 control-label col-form-label">Kendaraan Dinas</label>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control" id="kendaraan_dinas_desa" name="kendaraan_dinas_desa" value="<?= isset($prasaranapemerintahan->kendaraan_dinas_desa) ? $prasaranapemerintahan->kendaraan_dinas_desa : '' ?>">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3"> ADMINISTRASI PEMERINTAHAN DESA/KELURAHAN</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_data_peraturan_desa" class="col-sm-2 control-label col-form-label">Buku Data Peraturan Desa</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_data_peraturan_desa">
                                                <option value="Ada - Terisi" {{ old('buku_data_peraturan_desa', isset($prasaranapemerintahan->buku_data_peraturan_desa) ? $prasaranapemerintahan->buku_data_peraturan_desa : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_data_peraturan_desa', isset($prasaranapemerintahan->buku_data_peraturan_desa) ? $prasaranapemerintahan->buku_data_peraturan_desa : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_data_peraturan_desa', isset($prasaranapemerintahan->buku_data_peraturan_desa) ? $prasaranapemerintahan->buku_data_peraturan_desa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_keputusan_kepala_desa" class="col-sm-2 control-label col-form-label">Buku Keputusan Kepala Desa/Lurah</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_keputusan_kepala_desa">
                                                <option value="Ada - Terisi" {{ old('buku_keputusan_kepala_desa', isset($prasaranapemerintahan->buku_keputusan_kepala_desa) ? $prasaranapemerintahan->buku_keputusan_kepala_desa : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_keputusan_kepala_desa', isset($prasaranapemerintahan->buku_keputusan_kepala_desa) ? $prasaranapemerintahan->buku_keputusan_kepala_desa : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_keputusan_kepala_desa', isset($prasaranapemerintahan->buku_keputusan_kepala_desa) ? $prasaranapemerintahan->buku_keputusan_kepala_desa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_administrasi_kependudukan" class="col-sm-2 control-label col-form-label">Buku Administrasi Kependudukan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_administrasi_kependudukan">
                                                <option value="Ada - Terisi" {{ old('buku_administrasi_kependudukan', isset($prasaranapemerintahan->buku_administrasi_kependudukan) ? $prasaranapemerintahan->buku_administrasi_kependudukan : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_administrasi_kependudukan', isset($prasaranapemerintahan->buku_administrasi_kependudukan) ? $prasaranapemerintahan->buku_administrasi_kependudukan : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_administrasi_kependudukan', isset($prasaranapemerintahan->buku_administrasi_kependudukan) ? $prasaranapemerintahan->buku_administrasi_kependudukan : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_data_inventaris" class="col-sm-2 control-label col-form-label">Buku Data Inventaris</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_data_inventaris">
                                                <option value="Ada - Terisi" {{ old('buku_data_inventaris', isset($prasaranapemerintahan->buku_data_inventaris) ? $prasaranapemerintahan->buku_data_inventaris : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_data_inventaris', isset($prasaranapemerintahan->buku_data_inventaris) ? $prasaranapemerintahan->buku_data_inventaris : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_data_inventaris', isset($prasaranapemerintahan->buku_data_inventaris) ? $prasaranapemerintahan->buku_data_inventaris : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_data_aparat" class="col-sm-2 control-label col-form-label">Buku Data Aparat</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_data_aparat">
                                                <option value="Ada - Terisi" {{ old('buku_data_aparat', isset($prasaranapemerintahan->buku_data_aparat) ? $prasaranapemerintahan->buku_data_aparat : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_data_aparat', isset($prasaranapemerintahan->buku_data_aparat) ? $prasaranapemerintahan->buku_data_aparat : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_data_aparat', isset($prasaranapemerintahan->buku_data_aparat) ? $prasaranapemerintahan->buku_data_aparat : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_data_tanah_desa" class="col-sm-2 control-label col-form-label">Buku Data Tanah Milik Desa/Kelurahan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_data_tanah_desa">
                                                <option value="Ada - Terisi" {{ old('buku_data_tanah_desa', isset($prasaranapemerintahan->buku_data_tanah_desa) ? $prasaranapemerintahan->buku_data_tanah_desa : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_data_tanah_desa', isset($prasaranapemerintahan->buku_data_tanah_desa) ? $prasaranapemerintahan->buku_data_tanah_desa : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_data_tanah_desa', isset($prasaranapemerintahan->buku_data_tanah_desa) ? $prasaranapemerintahan->buku_data_tanah_desa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_administrasi_pajak" class="col-sm-2 control-label col-form-label">Buku Administrasi Pajak dan Retribusi</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_administrasi_pajak">
                                                <option value="Ada - Terisi" {{ old('buku_administrasi_pajak', isset($prasaranapemerintahan->buku_administrasi_pajak) ? $prasaranapemerintahan->buku_administrasi_pajak : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_administrasi_pajak', isset($prasaranapemerintahan->buku_administrasi_pajak) ? $prasaranapemerintahan->buku_administrasi_pajak : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_administrasi_pajak', isset($prasaranapemerintahan->buku_administrasi_pajak) ? $prasaranapemerintahan->buku_administrasi_pajak : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_data_tanah" class="col-sm-2 control-label col-form-label">Buku Data Tanah</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_data_tanah">
                                                <option value="Ada - Terisi" {{ old('buku_data_tanah', isset($prasaranapemerintahan->buku_data_tanah) ? $prasaranapemerintahan->buku_data_tanah : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_data_tanah', isset($prasaranapemerintahan->buku_data_tanah) ? $prasaranapemerintahan->buku_data_tanah : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_data_tanah', isset($prasaranapemerintahan->buku_data_tanah) ? $prasaranapemerintahan->buku_data_tanah : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_laporan_pengaduan_masyarakat" class="col-sm-2 control-label col-form-label">Buku Laporan Pengaduan Masyarakat</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_laporan_pengaduan_masyarakat">
                                                <option value="Ada - Terisi" {{ old('buku_laporan_pengaduan_masyarakat', isset($prasaranapemerintahan->buku_laporan_pengaduan_masyarakat) ? $prasaranapemerintahan->buku_laporan_pengaduan_masyarakat : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_laporan_pengaduan_masyarakat', isset($prasaranapemerintahan->buku_laporan_pengaduan_masyarakat) ? $prasaranapemerintahan->buku_laporan_pengaduan_masyarakat : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_laporan_pengaduan_masyarakat', isset($prasaranapemerintahan->buku_laporan_pengaduan_masyarakat) ? $prasaranapemerintahan->buku_laporan_pengaduan_masyarakat : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_agenda_ekspedisi" class="col-sm-2 control-label col-form-label">Buku Agenda Ekspedisi</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_agenda_ekspedisi">
                                                <option value="Ada - Terisi" {{ old('buku_agenda_ekspedisi', isset($prasaranapemerintahan->buku_agenda_ekspedisi) ? $prasaranapemerintahan->buku_agenda_ekspedisi : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_agenda_ekspedisi', isset($prasaranapemerintahan->buku_agenda_ekspedisi) ? $prasaranapemerintahan->buku_agenda_ekspedisi : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_agenda_ekspedisi', isset($prasaranapemerintahan->buku_agenda_ekspedisi) ? $prasaranapemerintahan->buku_agenda_ekspedisi : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_profil_desa" class="col-sm-2 control-label col-form-label">Buku Profil Desa/Kelurahan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_profil_desa">
                                                <option value="Ada - Terisi" {{ old('buku_profil_desa', isset($prasaranapemerintahan->buku_profil_desa) ? $prasaranapemerintahan->buku_profil_desa : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_profil_desa', isset($prasaranapemerintahan->buku_profil_desa) ? $prasaranapemerintahan->buku_profil_desa : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_profil_desa', isset($prasaranapemerintahan->buku_profil_desa) ? $prasaranapemerintahan->buku_profil_desa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_data_induk_kependudukan" class="col-sm-2 control-label col-form-label">Buku Data Induk Kependudukan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_data_induk_kependudukan">
                                                <option value="Ada - Terisi" {{ old('buku_data_induk_kependudukan', isset($prasaranapemerintahan->buku_data_induk_kependudukan) ? $prasaranapemerintahan->buku_data_induk_kependudukan : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_data_induk_kependudukan', isset($prasaranapemerintahan->buku_data_induk_kependudukan) ? $prasaranapemerintahan->buku_data_induk_kependudukan : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_data_induk_kependudukan', isset($prasaranapemerintahan->buku_data_induk_kependudukan) ? $prasaranapemerintahan->buku_data_induk_kependudukan : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="buku_data_mutasi_penduduk" class="col-sm-2 control-label col-form-label">Buku Data Mutasi Penduduk</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_data_mutasi_penduduk">
                                                <option value="Ada - Terisi" {{ old('buku_data_mutasi_penduduk', isset($prasaranapemerintahan->buku_data_mutasi_penduduk) ? $prasaranapemerintahan->buku_data_mutasi_penduduk : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_data_mutasi_penduduk', isset($prasaranapemerintahan->buku_data_mutasi_penduduk) ? $prasaranapemerintahan->buku_data_mutasi_penduduk : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_data_mutasi_penduduk', isset($prasaranapemerintahan->buku_data_mutasi_penduduk) ? $prasaranapemerintahan->buku_data_mutasi_penduduk : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_rekap_jumlah_pdk_akhirbulan" class="col-sm-2 control-label col-form-label">Buku Rekapitulasi Jumlah Penduduk Akhir Bulan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_rekap_jumlah_pdk_akhirbulan">
                                                <option value="Ada - Terisi" {{ old('buku_rekap_jumlah_pdk_akhirbulan', isset($prasaranapemerintahan->buku_rekap_jumlah_pdk_akhirbulan) ? $prasaranapemerintahan->buku_rekap_jumlah_pdk_akhirbulan : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_rekap_jumlah_pdk_akhirbulan', isset($prasaranapemerintahan->buku_rekap_jumlah_pdk_akhirbulan) ? $prasaranapemerintahan->buku_rekap_jumlah_pdk_akhirbulan : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_rekap_jumlah_pdk_akhirbulan', isset($prasaranapemerintahan->buku_rekap_jumlah_pdk_akhirbulan) ? $prasaranapemerintahan->buku_rekap_jumlah_pdk_akhirbulan : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_registrasi_pelayanan_penduduk" class="col-sm-2 control-label col-form-label">Buku Registrasi Pelayanan Penduduk</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_registrasi_pelayanan_penduduk">
                                                <option value="Ada - Terisi" {{ old('buku_registrasi_pelayanan_penduduk', isset($prasaranapemerintahan->buku_registrasi_pelayanan_penduduk) ? $prasaranapemerintahan->buku_registrasi_pelayanan_penduduk : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_registrasi_pelayanan_penduduk', isset($prasaranapemerintahan->buku_registrasi_pelayanan_penduduk) ? $prasaranapemerintahan->buku_registrasi_pelayanan_penduduk : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_registrasi_pelayanan_penduduk', isset($prasaranapemerintahan->buku_registrasi_pelayanan_penduduk) ? $prasaranapemerintahan->buku_registrasi_pelayanan_penduduk : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_data_penduduk_sementara" class="col-sm-2 control-label col-form-label">Buku Data Penduduk Sementara</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_data_penduduk_sementara">
                                                <option value="Ada - Terisi" {{ old('buku_data_penduduk_sementara', isset($prasaranapemerintahan->buku_data_penduduk_sementara) ? $prasaranapemerintahan->buku_data_penduduk_sementara : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_data_penduduk_sementara', isset($prasaranapemerintahan->buku_data_penduduk_sementara) ? $prasaranapemerintahan->buku_data_penduduk_sementara : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_data_penduduk_sementara', isset($prasaranapemerintahan->buku_data_penduduk_sementara) ? $prasaranapemerintahan->buku_data_penduduk_sementara : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_anggaran_penerimaan" class="col-sm-2 control-label col-form-label">Buku Anggaran Penerimaan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_anggaran_penerimaan">
                                                <option value="Ada - Terisi" {{ old('buku_anggaran_penerimaan', isset($prasaranapemerintahan->buku_anggaran_penerimaan) ? $prasaranapemerintahan->buku_anggaran_penerimaan : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_anggaran_penerimaan', isset($prasaranapemerintahan->buku_anggaran_penerimaan) ? $prasaranapemerintahan->buku_anggaran_penerimaan : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_anggaran_penerimaan', isset($prasaranapemerintahan->buku_anggaran_penerimaan) ? $prasaranapemerintahan->buku_anggaran_penerimaan : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_anggaran_pengeluaran_pegawai" class="col-sm-2 control-label col-form-label">Buku Anggaran Pengeluaran Pegawai dan Pembangunan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_anggaran_pengeluaran_pegawai">
                                                <option value="Ada - Terisi" {{ old('buku_anggaran_pengeluaran_pegawai', isset($prasaranapemerintahan->buku_anggaran_pengeluaran_pegawai) ? $prasaranapemerintahan->buku_anggaran_pengeluaran_pegawai : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_anggaran_pengeluaran_pegawai', isset($prasaranapemerintahan->buku_anggaran_pengeluaran_pegawai) ? $prasaranapemerintahan->buku_anggaran_pengeluaran_pegawai : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_anggaran_pengeluaran_pegawai', isset($prasaranapemerintahan->buku_anggaran_pengeluaran_pegawai) ? $prasaranapemerintahan->buku_anggaran_pengeluaran_pegawai : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_kas_umum_desa" class="col-sm-2 control-label col-form-label">Buku Kas Umum</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_kas_umum_desa">
                                                <option value="Ada - Terisi" {{ old('buku_kas_umum_desa', isset($prasaranapemerintahan->buku_kas_umum_desa) ? $prasaranapemerintahan->buku_kas_umum_desa : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_kas_umum_desa', isset($prasaranapemerintahan->buku_kas_umum_desa) ? $prasaranapemerintahan->buku_kas_umum_desa : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_kas_umum_desa', isset($prasaranapemerintahan->buku_kas_umum_desa) ? $prasaranapemerintahan->buku_kas_umum_desa : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_kas_pembantu_penerimaan" class="col-sm-2 control-label col-form-label">Buku Kas Pembantu Penerimaan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_kas_pembantu_penerimaan">
                                                <option value="Ada - Terisi" {{ old('buku_kas_pembantu_penerimaan', isset($prasaranapemerintahan->buku_kas_pembantu_penerimaan) ? $prasaranapemerintahan->buku_kas_pembantu_penerimaan : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_kas_pembantu_penerimaan', isset($prasaranapemerintahan->buku_kas_pembantu_penerimaan) ? $prasaranapemerintahan->buku_kas_pembantu_penerimaan : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_kas_pembantu_penerimaan', isset($prasaranapemerintahan->buku_kas_pembantu_penerimaan) ? $prasaranapemerintahan->buku_kas_pembantu_penerimaan : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_kas_pembantu_pengeluaran_rutin" class="col-sm-2 control-label col-form-label">Buku Kas Pembantu Pengeluaran Rutin dan Pembangunan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_kas_pembantu_pengeluaran_rutin">
                                                <option value="Ada - Terisi" {{ old('buku_kas_pembantu_pengeluaran_rutin', isset($prasaranapemerintahan->buku_kas_pembantu_pengeluaran_rutin) ? $prasaranapemerintahan->buku_kas_pembantu_pengeluaran_rutin : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                    Ada - Terisi
                                                </option>
                                                <option value="Ada - Tidak Terisi" {{ old('buku_kas_pembantu_pengeluaran_rutin', isset($prasaranapemerintahan->buku_kas_pembantu_pengeluaran_rutin) ? $prasaranapemerintahan->buku_kas_pembantu_pengeluaran_rutin : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                    Ada - Tidak Terisi
                                                </option>
                                                <option value="Tidak" {{ old('buku_kas_pembantu_pengeluaran_rutin', isset($prasaranapemerintahan->buku_kas_pembantu_pengeluaran_rutin) ? $prasaranapemerintahan->buku_kas_pembantu_pengeluaran_rutin : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label for="buku_data_lembaga_kemasyarakatan" class="col-sm-2 control-label col-form-label">Buku Data Lembaga Kemasyarakatan</label>
                                            <div class="col-sm-2">
                                                <select class="form-control" name="buku_data_lembaga_kemasyarakatan">
                                                    <option value="Ada - Terisi" {{ old('buku_data_lembaga_kemasyarakatan', isset($prasaranapemerintahan->buku_data_lembaga_kemasyarakatan) ? $prasaranapemerintahan->buku_data_lembaga_kemasyarakatan : '') == 'Ada - Terisi' ? 'selected' : '' }}>
                                                        Ada - Terisi
                                                    </option>
                                                    <option value="Ada - Tidak Terisi" {{ old('buku_data_lembaga_kemasyarakatan', isset($prasaranapemerintahan->buku_data_lembaga_kemasyarakatan) ? $prasaranapemerintahan->buku_data_lembaga_kemasyarakatan : '') == 'Ada - Tidak Terisi' ? 'selected' : '' }}>
                                                        Ada - Tidak Terisi
                                                    </option>
                                                    <option value="Tidak" {{ old('buku_data_lembaga_kemasyarakatan', isset($prasaranapemerintahan->buku_data_lembaga_kemasyarakatan) ? $prasaranapemerintahan->buku_data_lembaga_kemasyarakatan : '') == 'Tidak' ? 'selected' : '' }}>
                                                        Tidak
                                                    </option>
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
                        </form>
                    </div>
                    <div class="accordion-item">
                        <form action="<?= route('profildesakecamatan.updatePrasaranaBPDDusun', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PATCH')}}
                            <h2 class="accordion-header" id="headingEighteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                                    PRASARANA DAN SARANA BPD DAN DUSUN/LINGKUNGAN
                            </h2>
                            <div id="collapseEighteen" class="accordion-collapse collapse" aria-labelledby="headingEighteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="mb-3" id="headingFifteen">PRASARANA DAN SARANA BADAN PERMUSYAWARATAN DESA</h5>
                                    <div class="form-group row">
                                        <label for="gedung_kantor_bpd" class="col-sm-2 control-label col-form-label">Gedung Kantor</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="gedung_kantor_bpd">
                                                <option value="Ada" {{ old('gedung_kantor_bpd', isset($prasaranabpddusun->gedung_kantor_bpd) ? $prasaranabpddusun->gedung_kantor_bpd : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('gedung_kantor_bpd', isset($prasaranabpddusun->gedung_kantor_bpd) ? $prasaranabpddusun->gedung_kantor_bpd : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="jumlah_ruang_kerja_bpd" class="col-sm-2 control-label col-form-label">Jumlah Ruang Kerja</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_ruang_kerja_bpd" name="jumlah_ruang_kerja_bpd" value="<?= isset($prasaranabpddusun->jumlah_ruang_kerja_bpd) ? $prasaranabpddusun->jumlah_ruang_kerja_bpd : '' ?>">
                                        </div>
                                        <label for="balai_bpd" class="col-sm-2 control-label col-form-label">Balai BPD</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="balai_bpd">
                                                <option value="Ada" {{ old('balai_bpd', isset($prasaranabpddusun->balai_bpd) ? $prasaranabpddusun->balai_bpd : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('balai_bpd', isset($prasaranabpddusun->balai_bpd) ? $prasaranabpddusun->balai_bpd : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kondisi_gedung_kantor_bpd" class="col-sm-2 control-label col-form-label">Kondisi</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kondisi_gedung_kantor_bpd">
                                                <option value="Baik" {{ old('kondisi_gedung_kantor_bpd', isset($prasaranabpddusun->kondisi_gedung_kantor_bpd) ? $prasaranabpddusun->kondisi_gedung_kantor_bpd : '') == 'Baik' ? 'selected' : '' }}>
                                                    Baik
                                                </option>
                                                <option value="Rusak" {{ old('kondisi_gedung_kantor_bpd', isset($prasaranabpddusun->kondisi_gedung_kantor_bpd) ? $prasaranabpddusun->kondisi_gedung_kantor_bpd : '') == 'Rusak' ? 'selected' : '' }}>
                                                    Rusak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="listrik_bpd" class="col-sm-2 control-label col-form-label">Listrik</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="listrik_bpd">
                                                <option value="Ada" {{ old('listrik_bpd', isset($prasaranabpddusun->listrik_bpd) ? $prasaranabpddusun->listrik_bpd : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('listrik_bpd', isset($prasaranabpddusun->listrik_bpd) ? $prasaranabpddusun->listrik_bpd : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="air_bersih_bpd" class="col-sm-2 control-label col-form-label">Air Bersih</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="air_bersih_bpd">
                                                <option value="Ada - Baik" {{ old('air_bersih_bpd', isset($prasaranabpddusun->air_bersih_bpd) ? $prasaranabpddusun->air_bersih_bpd : '') == 'Ada - Baik' ? 'selected' : '' }}>
                                                    Ada - Baik
                                                </option>
                                                <option value="Ada - Rusak" {{ old('air_bersih_bpd', isset($prasaranabpddusun->air_bersih_bpd) ? $prasaranabpddusun->air_bersih_bpd : '') == 'Ada - Rusak' ? 'selected' : '' }}>
                                                    Ada - Rusak
                                                </option>
                                                <option value="Tidak" {{ old('air_bersih_bpd', isset($prasaranabpddusun->air_bersih_bpd) ? $prasaranabpddusun->air_bersih_bpd : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="telepon_bpd" class="col-sm-2 control-label col-form-label">Telepon</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="telepon_bpd">
                                                <option value="Ada" {{ old('telepon_bpd', isset($prasaranabpddusun->telepon_bpd) ? $prasaranabpddusun->telepon_bpd : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('telepon_bpd', isset($prasaranabpddusun->telepon_bpd) ? $prasaranabpddusun->telepon_bpd : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">INVENTARIS DAN ALAT TULIS KANTOR</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_mesin_tik_bpd" class="col-sm-2 control-label col-form-label">Jumlah Mesin Tik</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_mesin_tik_bpd" name="jumlah_mesin_tik_bpd" value="<?= isset($prasaranabpddusun->jumlah_mesin_tik_bpd) ? $prasaranabpddusun->jumlah_mesin_tik_bpd : '' ?>">
                                        </div>
                                        <label for="jumlah_meja_bpd" class="col-sm-2 control-label col-form-label">Jumlah Meja</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_meja_bpd" name="jumlah_meja_bpd" value="<?= isset($prasaranabpddusun->jumlah_meja_bpd) ? $prasaranabpddusun->jumlah_meja_bpd : '' ?>">
                                        </div>
                                        <label for="jumlah_kursi_bpd" class="col-sm-2 control-label col-form-label">Jumlah Kursi</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_kursi_bpd" name="jumlah_kursi_bpd" value="<?= isset($prasaranabpddusun->jumlah_kursi_bpd) ? $prasaranabpddusun->jumlah_kursi_bpd : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_almari_arsip_bpd" class="col-sm-2 control-label col-form-label">Jumlah Almari Arsip</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_almari_arsip_bpd" name="jumlah_almari_arsip_bpd" value="<?= isset($prasaranabpddusun->jumlah_almari_arsip_bpd) ? $prasaranabpddusun->jumlah_almari_arsip_bpd : '' ?>">
                                        </div>
                                        <label for="komputer_bpd" class="col-sm-2 control-label col-form-label">Komputer</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="komputer_bpd" name="komputer_bpd" value="<?= isset($prasaranabpddusun->komputer_bpd) ? $prasaranabpddusun->komputer_bpd : '' ?>">
                                        </div>
                                        <label for="mesin_fax_bpd" class="col-sm-2 control-label col-form-label">Mesin Fax</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="mesin_fax_bpd" name="mesin_fax_bpd" value="<?= isset($prasaranabpddusun->mesin_fax_bpd) ? $prasaranabpddusun->mesin_fax_bpd : '' ?>">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">ADMINISTRASI BPD</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_adm_agt_bpd" class="col-sm-2 control-label col-form-label">Buku Administrasi Keanggotaan BPD</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_adm_agt_bpd">
                                                <option value="Ada" {{ old('buku_adm_agt_bpd', isset($prasaranabpddusun->buku_adm_agt_bpd) ? $prasaranabpddusun->buku_adm_agt_bpd : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('buku_adm_agt_bpd', isset($prasaranabpddusun->buku_adm_agt_bpd) ? $prasaranabpddusun->buku_adm_agt_bpd : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_adm_kgt_bpd" class="col-sm-2 control-label col-form-label">Buku Administrasi Kegiatan BPD</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="buku_adm_kgt_bpd" name="buku_adm_kgt_bpd" value="<?= isset($prasaranabpddusun->buku_adm_kgt_bpd) ? $prasaranabpddusun->buku_adm_kgt_bpd : '' ?>">
                                        </div>
                                        <label for="buku_kgt_bpd" class="col-sm-2 control-label col-form-label">Buku kegiatan BPD</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_kgt_bpd">
                                                <option value="Ada" {{ old('buku_kgt_bpd', isset($prasaranabpddusun->buku_kgt_bpd) ? $prasaranabpddusun->buku_kgt_bpd : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('buku_kgt_bpd', isset($prasaranabpddusun->buku_kgt_bpd) ? $prasaranabpddusun->buku_kgt_bpd : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_perda_bpd" class="col-sm-2 control-label col-form-label">Buku Himpunan Perda ditetapkan BPD dan Kepala Desa</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="buku_perda_bpd">
                                                <option value="Ada" {{ old('buku_perda_bpd', isset($prasaranabpddusun->buku_perda_bpd) ? $prasaranabpddusun->buku_perda_bpd : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('buku_perda_bpd', isset($prasaranabpddusun->buku_perda_bpd) ? $prasaranabpddusun->buku_perda_bpd : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">PRASARANA DAN SARANA DUSUN/LINGKUNGAN ATAU SEBUTAN LAINNYA</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gedung_kantor_dusun" class="col-sm-2 control-label col-form-label">Gedung Kantor atau Balai Pertemuan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="gedung_kantor_dusun">
                                                <option value="Ada" {{ old('gedung_kantor_dusun', isset($prasaranabpddusun->gedung_kantor_dusun) ? $prasaranabpddusun->gedung_kantor_dusun : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('gedung_kantor_dusun', isset($prasaranabpddusun->gedung_kantor_dusun) ? $prasaranabpddusun->gedung_kantor_dusun : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="atk_dusun" class="col-sm-2 control-label col-form-label">Alat Tulis Kantor</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="atk_dusun">
                                                <option value="Ada" {{ old('atk_dusun', isset($prasaranabpddusun->atk_dusun) ? $prasaranabpddusun->atk_dusun : '') == 'Aktif' ? 'selected' : '' }}>
                                                    Aktif
                                                </option>
                                                <option value="Tidak" {{ old('atk_dusun', isset($prasaranabpddusun->atk_dusun) ? $prasaranabpddusun->atk_dusun : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="barang_inventaris_dusun" class="col-sm-2 control-label col-form-label">Barang Inventaris</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="barang_inventaris_dusun">
                                                <option value="Ada" {{ old('barang_inventaris_dusun', isset($prasaranabpddusun->barang_inventaris_dusun) ? $prasaranabpddusun->barang_inventaris_dusun : '') == 'Aktif' ? 'selected' : '' }}>
                                                    Aktif
                                                </option>
                                                <option value="Tidak" {{ old('barang_inventaris_dusun', isset($prasaranabpddusun->barang_inventaris_dusun) ? $prasaranabpddusun->barang_inventaris_dusun : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_administrasi_dusun" class="col-sm-2 control-label col-form-label">Buku Administrasi</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="buku_administrasi_dusun" name="buku_administrasi_dusun" value="<?= isset($prasaranabpddusun->buku_administrasi_dusun) ? $prasaranabpddusun->buku_administrasi_dusun : '' ?>">
                                        </div>
                                        <label for="jenis_kegiatan_dusun" class="col-sm-2 control-label col-form-label">Jenis Kegiatan</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jenis_kegiatan_dusun" name="jenis_kegiatan_dusun" value="<?= isset($prasaranabpddusun->jenis_kegiatan_dusun) ? $prasaranabpddusun->jenis_kegiatan_dusun : '' ?>">
                                        </div>
                                        <label for="jumlah_pengurus_dusun" class="col-sm-2 control-label col-form-label">Jumlah Pengurus</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_pengurus_dusun" name="jumlah_pengurus_dusun" value="<?= isset($prasaranabpddusun->jumlah_pengurus_dusun) ? $prasaranabpddusun->jumlah_pengurus_dusun : '' ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="accordion-item">
                        <form action="<?= route('profildesakecamatan.updatePrasaranaLKDK', ['id' => $pfde->id]) ?>" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PATCH')}}
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
                                            <select class="form-control" name="gedung_kantor_lkd">
                                                <option value="Ada" {{ old('gedung_kantor_lkd', isset($prasaranalkdk->gedung_kantor_lkd) ? $prasaranalkdk->gedung_kantor_lkd : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('gedung_kantor_lkd', isset($prasaranalkdk->gedung_kantor_lkd) ? $prasaranalkdk->gedung_kantor_lkd : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div> <label for="komputer_lkd" class="col-sm-2 control-label col-form-label">Komputer</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="komputer_lkd">
                                                <option value="Ada" {{ old('komputer_lkd', isset($prasaranalkdk->komputer_lkd) ? $prasaranalkdk->komputer_lkd : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('komputer_lkd', isset($prasaranalkdk->komputer_lkd) ? $prasaranalkdk->komputer_lkd : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="mesin_fax_lkd" class="col-sm-2 control-label col-form-label">Mesin Fax</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="mesin_fax_lkd">
                                                <option value="Ada" {{ old('mesin_fax_lkd', isset($prasaranalkdk->mesin_fax_lkd) ? $prasaranalkdk->mesin_fax_lkd : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('mesin_fax_lkd', isset($prasaranalkdk->mesin_fax_lkd) ? $prasaranalkdk->mesin_fax_lkd : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="mesin_tik_lkd" class="col-sm-2 control-label col-form-label">Mesin Tik</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="mesin_tik_lkd">
                                                <option value="Ada" {{ old('mesin_tik_lkd', isset($prasaranalkdk->mesin_tik_lkd) ? $prasaranalkdk->mesin_tik_lkd : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('mesin_tik_lkd', isset($prasaranalkdk->mesin_tik_lkd) ? $prasaranalkdk->mesin_tik_lkd : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="kardek_lkd" class="col-sm-2 control-label col-form-label">Kardek </label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kardek_lkd">
                                                <option value="Ada" {{ old('kardek_lkd', isset($prasaranalkdk->kardek_lkd) ? $prasaranalkdk->kardek_lkd : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('kardek_lkd', isset($prasaranalkdk->kardek_lkd) ? $prasaranalkdk->kardek_lkd : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_administrasi_lkd" class="col-sm-2 control-label col-form-label">Buku Adm. Lembaga Kemasyarakatan</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="buku_administrasi_lkd" name="buku_administrasi_lkd" value="<?= isset($prasaranalkdk->buku_administrasi_lkd) ? $prasaranalkdk->buku_administrasi_lkd : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_meja_kursi_lkd" class="col-sm-2 control-label col-form-label">Jumlah Meja dan Kursi </label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_meja_kursi_lkd" name="jumlah_meja_kursi_lkd" value="<?= isset($prasaranalkdk->jumlah_meja_kursi_lkd) ? $prasaranalkdk->jumlah_meja_kursi_lkd : '' ?>">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">LKMD/LPM atau sebutan lain</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kantor_lpm" class="col-sm-2 control-label col-form-label">Memiliki Kantor Sendiri</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kantor_lpm">
                                                <option value="Ada" {{ old('kantor_lpm', isset($prasaranalkdk->kantor_lpm) ? $prasaranalkdk->kantor_lpm : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('kantor_lpm', isset($prasaranalkdk->kantor_lpm) ? $prasaranalkdk->kantor_lpm : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="komputer_lpm" class="col-sm-2 control-label col-form-label">Komputer</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="komputer_lpm">
                                                <option value="Ada" {{ old('komputer_lpm', isset($prasaranalkdk->komputer_lpm) ? $prasaranalkdk->komputer_lpm : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('komputer_lpm', isset($prasaranalkdk->komputer_lpm) ? $prasaranalkdk->komputer_lpm : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="mesin_fax_lpm" class="col-sm-2 control-label col-form-label">Mesin Fax</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="mesin_fax_lpm">
                                                <option value="Ada" {{ old('mesin_fax_lpm', isset($prasaranalkdk->mesin_fax_lpm) ? $prasaranalkdk->mesin_fax_lpm : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('mesin_fax_lpm', isset($prasaranalkdk->mesin_fax_lpm) ? $prasaranalkdk->mesin_fax_lpm : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="mesin_tik_lpm" class="col-sm-2 control-label col-form-label">Mesin Tik</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="mesin_tik_lpm">
                                                <option value="Ada" {{ old('mesin_tik_lpm', isset($prasaranalkdk->mesin_tik_lpm) ? $prasaranalkdk->mesin_tik_lpm : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('mesin_tik_lpm', isset($prasaranalkdk->mesin_tik_lpm) ? $prasaranalkdk->mesin_tik_lpm : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="kardek_lpm" class="col-sm-2 control-label col-form-label">Kardek </label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kardek_lpm">
                                                <option value="Ada" {{ old('kardek_lpm', isset($prasaranalkdk->kardek_lpm) ? $prasaranalkdk->kardek_lpm : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('kardek_lpm', isset($prasaranalkdk->kardek_lpm) ? $prasaranalkdk->kardek_lpm : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_administrasi_lmb_lpm" class="col-sm-2 control-label col-form-label">Buku Adm. Lembaga Kemasyarakatan</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="buku_administrasi_lmb_lpm" name="buku_administrasi_lmb_lpm" value="<?= isset($prasaranalkdk->buku_administrasi_lmb_lpm) ? $prasaranalkdk->buku_administrasi_lmb_lpm : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_meja_kursi_lpm" class="col-sm-2 control-label col-form-label">Jumlah Meja dan Kursi </label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_meja_kursi_lpm" name="jumlah_meja_kursi_lpm" value="<?= isset($prasaranalkdk->jumlah_meja_kursi_lpm) ? $prasaranalkdk->jumlah_meja_kursi_lpm : '' ?>">
                                        </div>
                                        <label for="buku_administrasi_lpm" class="col-sm-2 control-label col-form-label">Buku Administrasi</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="buku_administrasi_lpm" name="buku_administrasi_lpm" value="<?= isset($prasaranalkdk->buku_administrasi_lpm) ? $prasaranalkdk->buku_administrasi_lpm : '' ?>">
                                        </div>
                                        <label for="jenis_kegiatan_lpm" class="col-sm-2 control-label col-form-label">Jumlah Kegiatan</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jenis_kegiatan_lpm" name="jenis_kegiatan_lpm" value="<?= isset($prasaranalkdk->jenis_kegiatan_lpm) ? $prasaranalkdk->jenis_kegiatan_lpm : '' ?>">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3"> PKK</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pkk" class="col-sm-2 control-label col-form-label">PKK</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="pkk">
                                                <option value="Ada" {{ old('pkk', isset($prasaranalkdk->pkk) ? $prasaranalkdk->pkk : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('pkk', isset($prasaranalkdk->pkk) ? $prasaranalkdk->pkk : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="gedung_pkk" class="col-sm-2 control-label col-form-label">Gedung/Kantor</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="gedung_pkk">
                                                <option value="Ada" {{ old('gedung_pkk', isset($prasaranalkdk->gedung_pkk) ? $prasaranalkdk->gedung_pkk : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('gedung_pkk', isset($prasaranalkdk->gedung_pkk) ? $prasaranalkdk->gedung_pkk : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="atk_pkk" class="col-sm-2 control-label col-form-label">Peralatan Kantor/ATK/Inventaris</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="atk_pkk">
                                                <option value="Ada" {{ old('atk_pkk', isset($prasaranalkdk->atk_pkk) ? $prasaranalkdk->atk_pkk : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('atk_pkk', isset($prasaranalkdk->atk_pkk) ? $prasaranalkdk->atk_pkk : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kepengurusan_pkk" class="col-sm-2 control-label col-form-label">Kepengurusan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kepengurusan_pkk">
                                                <option value="Ada - Aktif" {{ old('kepengurusan_pkk', isset($prasaranalkdk->kepengurusan_pkk) ? $prasaranalkdk->kepengurusan_pkk : '') == 'Ada - Aktif' ? 'selected' : '' }}>
                                                    Ada - Aktif
                                                </option>
                                                <option value="Ada - Pasif" {{ old('kepengurusan_pkk', isset($prasaranalkdk->kepengurusan_pkk) ? $prasaranalkdk->kepengurusan_pkk : '') == 'Ada - Pasif' ? 'selected' : '' }}>
                                                    Ada - Pasif
                                                </option>
                                                <option value="Tidak" {{ old('kepengurusan_pkk', isset($prasaranalkdk->kepengurusan_pkk) ? $prasaranalkdk->kepengurusan_pkk : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_administrasi_pkk" class="col-sm-2 control-label col-form-label">Buku Administrasi</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="buku_administrasi_pkk" name="buku_administrasi_pkk" value="<?= isset($prasaranalkdk->buku_administrasi_pkk) ? $prasaranalkdk->buku_administrasi_pkk : '' ?>">
                                        </div>
                                        <label for="kegiatan_pkk" class="col-sm-2 control-label col-form-label">Kegiatan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kegiatan_pkk">
                                                <option value="Ada" {{ old('kegiatan_pkk', isset($prasaranalkdk->kegiatan_pkk) ? $prasaranalkdk->kegiatan_pkk : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('kegiatan_pkk', isset($prasaranalkdk->kegiatan_pkk) ? $prasaranalkdk->kegiatan_pkk : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_kegiatan_pkk" class="col-sm-2 control-label col-form-label">Jumlah Kegiatan</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_kegiatan_pkk" name="jumlah_kegiatan_pkk" value="<?= isset($prasaranalkdk->jumlah_kegiatan_pkk) ? $prasaranalkdk->jumlah_kegiatan_pkk : '' ?>">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">KARANG TARUNA</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="karang_taruna" class="col-sm-2 control-label col-form-label">Karang Taruna</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="karang_taruna">
                                                <option value="Ada" {{ old('karang_taruna', isset($prasaranalkdk->karang_taruna) ? $prasaranalkdk->karang_taruna : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('karang_taruna', isset($prasaranalkdk->karang_taruna) ? $prasaranalkdk->karang_taruna : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="kepengurusan_kt" class="col-sm-2 control-label col-form-label">Kepengurusan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kepengurusan_kt">
                                                <option value="Aktif" {{ old('kepengurusan_kt', isset($prasaranalkdk->kepengurusan_kt) ? $prasaranalkdk->kepengurusan_kt : '') == 'Aktif' ? 'selected' : '' }}>
                                                    Aktif
                                                </option>
                                                <option value="Tidak" {{ old('kepengurusan_kt', isset($prasaranalkdk->kepengurusan_kt) ? $prasaranalkdk->kepengurusan_kt : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_administrasi_kt" class="col-sm-2 control-label col-form-label">Buku Administrasi</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="buku_administrasi_kt" name="buku_administrasi_kt" value="<?= isset($prasaranalkdk->buku_administrasi_kt) ? $prasaranalkdk->buku_administrasi_kt : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_kegiatan_kt" class="col-sm-2 control-label col-form-label">Jumlah Kegiatan</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_kegiatan_kt" name="jumlah_kegiatan_kt" value="<?= isset($prasaranalkdk->jumlah_kegiatan_kt) ? $prasaranalkdk->jumlah_kegiatan_kt : '' ?>">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">RUKUN TETANGGA</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_rt" class="col-sm-2 control-label col-form-label">Jumlah RT</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_rt" name="jumlah_rt" value="<?= isset($prasaranalkdk->jumlah_rt) ? $prasaranalkdk->jumlah_rt : '' ?>">
                                        </div>
                                        <label for="rukun_tetangga" class="col-sm-2 control-label col-form-label">Rukun Tetangga</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="rukun_tetangga">
                                                <option value="Ada" {{ old('rukun_tetangga', isset($prasaranalkdk->rukun_tetangga) ? $prasaranalkdk->rukun_tetangga : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('rukun_tetangga', isset($prasaranalkdk->rukun_tetangga) ? $prasaranalkdk->rukun_tetangga : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="kepengurusan_rt" class="col-sm-2 control-label col-form-label">Kepengurusan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kepengurusan_rt">
                                                <option value="Aktif" {{ old('kepengurusan_rt', isset($prasaranalkdk->kepengurusan_rt) ? $prasaranalkdk->kepengurusan_rt : '') == 'Aktif' ? 'selected' : '' }}>
                                                    Aktif
                                                </option>
                                                <option value="Tidak" {{ old('kepengurusan_rt', isset($prasaranalkdk->kepengurusan_rt) ? $prasaranalkdk->kepengurusan_rt : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_administrasi_rt" class="col-sm-2 control-label col-form-label">Buku Administrasi</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="buku_administrasi_rt" name="buku_administrasi_rt" value="<?= isset($prasaranalkdk->buku_administrasi_rt) ? $prasaranalkdk->buku_administrasi_rt : '' ?>">
                                        </div>
                                        <label for="jumlah_kegiatan_rt" class="col-sm-2 control-label col-form-label">Jumlah Kegiatan</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_kegiatan_rt" name="jumlah_kegiatan_rt" value="<?= isset($prasaranalkdk->jumlah_kegiatan_rt) ? $prasaranalkdk->jumlah_kegiatan_rt : '' ?>">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">RUKUN WARGA</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_rw" class="col-sm-2 control-label col-form-label">Jumlah RW</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_rw" name="jumlah_rw" value="<?= isset($prasaranalkdk->jumlah_rw) ? $prasaranalkdk->jumlah_rw : '' ?>">
                                        </div>
                                        <label for="rukun_warga" class="col-sm-2 control-label col-form-label">Rukun Warga</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="rukun_warga">
                                                <option value="Ada" {{ old('rukun_warga', isset($prasaranalkdk->rukun_warga) ? $prasaranalkdk->rukun_warga : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('rukun_warga', isset($prasaranalkdk->rukun_warga) ? $prasaranalkdk->rukun_warga : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="kepengurusan_rw" class="col-sm-2 control-label col-form-label">Kepengurusan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kepengurusan_rw">
                                                <option value="Aktif" {{ old('kepengurusan_rw', isset($prasaranalkdk->kepengurusan_rw) ? $prasaranalkdk->kepengurusan_rw : '') == 'Aktif' ? 'selected' : '' }}>
                                                    Aktif
                                                </option>
                                                <option value="Tidak" {{ old('kepengurusan_rw', isset($prasaranalkdk->kepengurusan_rw) ? $prasaranalkdk->kepengurusan_rw : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_administrasi_rw" class="col-sm-2 control-label col-form-label">Buku Administrasi</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="buku_administrasi_rw" name="buku_administrasi_rw" value="<?= isset($prasaranalkdk->buku_administrasi_rw) ? $prasaranalkdk->buku_administrasi_rw : '' ?>">
                                        </div>
                                        <label for="jumlah_kegiatan_rw" class="col-sm-2 control-label col-form-label">Jumlah Kegiatan</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_kegiatan_rw" name="jumlah_kegiatan_rw" value="<?= isset($prasaranalkdk->jumlah_kegiatan_rw) ? $prasaranalkdk->jumlah_kegiatan_rw : '' ?>">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">LEMBAGA ADAT</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gedung_lembagaadat" class="col-sm-2 control-label col-form-label">Memiliki Kantor/Gedung/Menumpang</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="gedung_lembagaadat">
                                                <option value="Ada" {{ old('gedung_lembagaadat', isset($prasaranalkdk->gedung_lembagaadat) ? $prasaranalkdk->gedung_lembagaadat : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('gedung_lembagaadat', isset($prasaranalkdk->gedung_lembagaadat) ? $prasaranalkdk->gedung_lembagaadat : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="kepengurusan_lembagaadat" class="col-sm-2 control-label col-form-label">Kepengurusan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kepengurusan_lembagaadat">
                                                <option value="Aktif" {{ old('kepengurusan_lembagaadat', isset($prasaranalkdk->kepengurusan_lembagaadat) ? $prasaranalkdk->kepengurusan_lembagaadat : '') == 'Aktif' ? 'selected' : '' }}>
                                                    Aktif
                                                </option>
                                                <option value="Tidak" {{ old('kepengurusan_lembagaadat', isset($prasaranalkdk->kepengurusan_lembagaadat) ? $prasaranalkdk->kepengurusan_lembagaadat : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="buku_administrasi_lembagaadat" class="col-sm-2 control-label col-form-label">Buku Administrasi</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="buku_administrasi_lembagaadat" name="buku_administrasi_lembagaadat" value="<?= isset($prasaranalkdk->buku_administrasi_lembagaadat) ? $prasaranalkdk->buku_administrasi_lembagaadat : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_kegiatan_lembagaadat" class="col-sm-2 control-label col-form-label">Jumlah Kegiatan</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_kegiatan_lembagaadat" name="jumlah_kegiatan_lembagaadat" value="<?= isset($prasaranalkdk->jumlah_kegiatan_lembagaadat) ? $prasaranalkdk->jumlah_kegiatan_lembagaadat : '' ?>">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">BUMDES</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bumdes" class="col-sm-2 control-label col-form-label">BUMDES</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="bumdes">
                                                <option value="Ada" {{ old('bumdes', isset($prasaranalkdk->bumdes) ? $prasaranalkdk->bumdes : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('bumdes', isset($prasaranalkdk->bumdes) ? $prasaranalkdk->bumdes : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="gedung_bumdes" class="col-sm-2 control-label col-form-label">Memiliki Kantor/Gedung/Menumpang</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="gedung_bumdes">
                                                <option value="Ada" {{ old('gedung_bumdes', isset($prasaranalkdk->gedung_bumdes) ? $prasaranalkdk->gedung_bumdes : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('gedung_bumdes', isset($prasaranalkdk->gedung_bumdes) ? $prasaranalkdk->gedung_bumdes : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="kepengurusan_bumdes" class="col-sm-2 control-label col-form-label">Kepengurusan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kepengurusan_bumdes">
                                                <option value="Aktif" {{ old('kepengurusan_bumdes', isset($prasaranalkdk->kepengurusan_bumdes) ? $prasaranalkdk->kepengurusan_bumdes : '') == 'Aktif' ? 'selected' : '' }}>
                                                    Aktif
                                                </option>
                                                <option value="Tidak" {{ old('kepengurusan_bumdes', isset($prasaranalkdk->kepengurusan_bumdes) ? $prasaranalkdk->kepengurusan_bumdes : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_administrasi_bumdes" class="col-sm-2 control-label col-form-label">Buku Administrasi</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="buku_administrasi_bumdes" name="buku_administrasi_bumdes" value="<?= isset($prasaranalkdk->buku_administrasi_bumdes) ? $prasaranalkdk->buku_administrasi_bumdes : '' ?>">
                                        </div>
                                        <label for="jumlah_kegiatan_bumdes" class="col-sm-2 control-label col-form-label">Jumlah Kegiatan</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_kegiatan_bumdes" name="jumlah_kegiatan_bumdes" value="<?= isset($prasaranalkdk->jumlah_kegiatan_bumdes) ? $prasaranalkdk->jumlah_kegiatan_bumdes : '' ?>">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">FORUM KOMUNIKASI KADER PEMBERDAYAAN MASYARAKAT</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fkkpm" class="col-sm-2 control-label col-form-label">Forum Komunikasi Kader Pemberdayaan Masyarakat</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="fkkpm">
                                                <option value="Ada" {{ old('fkkpm', isset($prasaranalkdk->fkkpm) ? $prasaranalkdk->fkkpm : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('fkkpm', isset($prasaranalkdk->fkkpm) ? $prasaranalkdk->fkkpm : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="gedung_fkkpm" class="col-sm-2 control-label col-form-label">Memiliki Kantor/Gedung/Menumpang</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="gedung_fkkpm">
                                                <option value="Ada" {{ old('gedung_fkkpm', isset($prasaranalkdk->gedung_fkkpm) ? $prasaranalkdk->gedung_fkkpm : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('gedung_fkkpm', isset($prasaranalkdk->gedung_fkkpm) ? $prasaranalkdk->gedung_fkkpm : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="kepengurusan_fkkpm" class="col-sm-2 control-label col-form-label">Kepengurusan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kepengurusan_fkkpm">
                                                <option value="Aktif" {{ old('kepengurusan_fkkpm', isset($prasaranalkdk->kepengurusan_fkkpm) ? $prasaranalkdk->kepengurusan_fkkpm : '') == 'Aktif' ? 'selected' : '' }}>
                                                    Aktif
                                                </option>
                                                <option value="Tidak" {{ old('kepengurusan_fkkpm', isset($prasaranalkdk->kepengurusan_fkkpm) ? $prasaranalkdk->kepengurusan_fkkpm : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_administrasi_fkkpm" class="col-sm-2 control-label col-form-label">Buku Administrasi</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="buku_administrasi_fkkpm" name="buku_administrasi_fkkpm" value="<?= isset($prasaranalkdk->buku_administrasi_fkkpm) ? $prasaranalkdk->buku_administrasi_fkkpm : '' ?>">
                                        </div>
                                        <label for="jumlah_kegiatan_fkkpm" class="col-sm-2 control-label col-form-label">Jumlah Kegiatan</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="jumlah_kegiatan_fkkpm" name="jumlah_kegiatan_fkkpm" value="<?= isset($prasaranalkdk->jumlah_kegiatan_fkkpm) ? $prasaranalkdk->jumlah_kegiatan_fkkpm : '' ?>">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">ORGANISASI SOSIAL KEMASYARAKATAN</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gedung_organisasi_sosial" class="col-sm-4 control-label col-form-label">Kantor/gedung Organisasi Sosial Kemasyarakatan lainnya </label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="gedung_organisasi_sosial">
                                                <option value="Ada" {{ old('gedung_organisasi_sosial', isset($prasaranalkdk->gedung_organisasi_sosial) ? $prasaranalkdk->gedung_organisasi_sosial : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('gedung_organisasi_sosial', isset($prasaranalkdk->gedung_organisasi_sosial) ? $prasaranalkdk->gedung_organisasi_sosial : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="kepengurusan_sosial" class="col-sm-4 control-label col-form-label">Kepengurusan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kepengurusan_sosial">
                                                <option value="Aktif" {{ old('kepengurusan_sosial', isset($prasaranalkdk->kepengurusan_sosial) ? $prasaranalkdk->kepengurusan_sosial : '') == 'Aktif' ? 'selected' : '' }}>
                                                    Aktif
                                                </option>
                                                <option value="Tidak" {{ old('kepengurusan_sosial', isset($prasaranalkdk->kepengurusan_sosial) ? $prasaranalkdk->kepengurusan_sosial : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <h5 class="mt-3 mb-3">ORGANISASI PROFESI YANG ADA</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gedung_organisasi_profesi" class="col-sm-4 control-label col-form-label">Kantor/gedung Organisasi Profesi yang ada</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="gedung_organisasi_profesi">
                                                <option value="Ada" {{ old('gedung_organisasi_profesi', isset($prasaranalkdk->gedung_organisasi_profesi) ? $prasaranalkdk->gedung_organisasi_profesi : '') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak" {{ old('gedung_organisasi_profesi', isset($prasaranalkdk->gedung_organisasi_profesi) ? $prasaranalkdk->gedung_organisasi_profesi : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                        <label for="kepengurusan_organisasi_profesi" class="col-sm-4 control-label col-form-label">Kepengurusan</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kepengurusan_organisasi_profesi">
                                                <option value="Aktif" {{ old('kepengurusan_organisasi_profesi', isset($prasaranalkdk->kepengurusan_organisasi_profesi) ? $prasaranalkdk->kepengurusan_organisasi_profesi : '') == 'Aktif' ? 'selected' : '' }}>
                                                    Aktif
                                                </option>
                                                <option value="Tidak" {{ old('kepengurusan_organisasi_profesi', isset($prasaranalkdk->kepengurusan_organisasi_profesi) ? $prasaranalkdk->kepengurusan_organisasi_profesi : '') == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="buku_administrasi_org_profesi" class="col-sm-4 control-label col-form-label">Buku Administrasi</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="buku_administrasi_org_profesi" name="buku_administrasi_org_profesi" value="<?= isset($prasaranalkdk->buku_administrasi_org_profesi) ? $prasaranalkdk->buku_administrasi_org_profesi : '' ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwenty">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                PRASARANA PERIBADATAN, OLAHRAGA
                        </h2>
                        <div id="collapseTwenty" class="accordion-collapse collapse" aria-labelledby="headingTwenty" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5 class="mb-3 mt-3">PRASARANA PERIBADATAN</h5>
                                <a href="<?= route('prasarana-peribadatan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($prasaranaperibadatan as $ppd)
                                            <tr>
                                                <td><?= $ppd->kgprasaranaperibadatan->name ?></td>
                                                <td><?= $ppd['jumlah'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('prasarana-peribadatan-admin.edit', $ppd['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('prasarana-peribadatan-admin.destroy', $ppd['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">PRASARANA OLAH RAGA</h5>
                                    <a href="<?= route('prasarana-olahraga-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($prasaranaolahraga as $por)
                                            <tr>
                                                <td><?= $por->kgprasaranaolahraga->name ?></td>
                                                <td><?= $por['jumlah'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('prasarana-olahraga-admin.edit', $por['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('prasarana-olahraga-admin.destroy', $por['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
                                <a href="<?= route('prasarana-kesehatan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($prasaranakesehatan as $psksh)
                                            <tr>
                                                <td><?= $psksh->kgprasaranakesehatan->name ?></td>
                                                <td><?= $psksh['jumlah'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('prasarana-kesehatan-admin.edit', $psksh['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('prasarana-kesehatan-admin.destroy', $psksh['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">SARANA KESEHATAN</h5>
                                    <a href="<?= route('sarana-kesehatan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($saranakesehatan as $sksht)
                                            <tr>
                                                <td><?= $sksht->kgsaranakesehatan->name ?></td>
                                                <td><?= $sksht['jumlah'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('sarana-kesehatan-admin.edit', $sksht['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('sarana-kesehatan-admin.destroy', $sksht['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">PRASARANA DAN SARANA PENDIDIKAN</h5>
                                    <a href="<?= route('prasarana-sarana-pendidikan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="align-middle">Jenis</th>
                                                <th class="align-middle">Sewa (Buah)</th>
                                                <th class="align-middle">Milik Sendiri (Buah)</th>
                                                <th class="align-middle">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($prasaranasaranapendidikan as $psp)
                                            <tr>
                                                <td><?= $psp->kgprasaranasaranapendidikan->name ?></td>
                                                <td><?= $psp['sewa'] ?></td>
                                                <td><?= $psp['milik_sendiri'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('prasarana-sarana-pendidikan-admin.edit', $psp['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('prasarana-sarana-pendidikan-admin.destroy', $psp['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwentyTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyTwo" aria-expanded="false" aria-controls="collapseTwentyTwo">
                                PRASARANA ENERGI DAN PENERANGAN, HIBURAN/WISATA, KEBERSIHAN
                        </h2>
                        <div id="collapseTwentyTwo" class="accordion-collapse collapse" aria-labelledby="headingTwentyTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5 class="mb-3 mt-3">PRASARANA ENERGI DAN PENERANGAN</h5>
                                <a href="<?= route('prasarana-energi-penerangan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="align-middle">Jenis</th>
                                                <th class="align-middle">Jumlah (Keluarga)</th>
                                                <th class="align-middle">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($prasaranaenergipenerangan as $pep)
                                            <tr>
                                                <td><?= $pep->kgprasaranaenergipenerangan->name ?></td>
                                                <td><?= $pep['jumlah'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('prasarana-energi-penerangan-admin.edit', $pep['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('prasarana-energi-penerangan-admin.destroy', $pep['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">PRASARANA HIBURAN DAN WISATA</h5>
                                    <a href="<?= route('prasarana-hiburan-wisata-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($prasaranahiburanwisata as $phw)
                                            <tr>
                                                <td><?= $phw->kgprasaranahiburanwisata->name ?></td>
                                                <td><?= $phw['jumlah'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('prasarana-hiburan-wisata-admin.edit', $phw['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('prasarana-hiburan-wisata-admin.destroy', $phw['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top">
                                    <h5 class="mb-3 mt-3">PRASARANA DAN SARANA KEBERSIHAN</h5>
                                    <a href="<?= route('prasarana-sarana-kebersihan-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                            @foreach($prasaranasaranakebersihan as $psb)
                                            <tr>
                                                <td><?= $psb->kgprasaranasaranakebersihan->name ?></td>
                                                <td><?= $psb['jumlah'] ?></td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <a href="<?= route('prasarana-sarana-kebersihan-admin.edit', $psb['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form action="<?= route('prasarana-sarana-kebersihan-admin.destroy', $psb['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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