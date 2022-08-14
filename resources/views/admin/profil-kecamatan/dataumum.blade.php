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
                <h4 class="page-title">DATA UMUM KECAMATAN</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Umum Kecamatan</li>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= route('data-umum-kecamatan.updateDataUmumKecamatan', ['profil_id' => Auth::user()->role_id]) ?>" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PATCH')}}
                            <div class="col-sm-12 row">

                                <div class="row col-sm-6">
                                    <h4 class="page-title text-center">Info Wilayah</h4>
                                    <div class="border-top mb-4">
                                    </div>
                                    <div class="form-group row">
                                        <label for="kecamatan_nama" class="col-sm-4 control-label col-form-label text-end">Kecamatan<span class="required">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kecamatan_nama" name="kecamatan_nama" value="<?= isset($profilkecamatan->kecamatan_nama) ? $profilkecamatan->kecamatan_nama : '' ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tipologi" class="col-sm-4 control-label col-form-label text-end">Tipologi<span class="required">*</span></label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="tipologi" name="tipologi" rows="3"><?= isset($dataumumkecamatan->tipologi) ? $dataumumkecamatan->tipologi : '' ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ketinggian" class="col-sm-4 control-label col-form-label text-end">Ketinggian (MDPL)<span class="required">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" id="ketinggian" name="ketinggian" value="<?= isset($dataumumkecamatan->ketinggian) ? $dataumumkecamatan->ketinggian : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="luas_wilayah" class="col-sm-4 control-label col-form-label text-end">Luas Wilayah (km2)<span class="required">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="luas_wilayah" name="luas_wilayah" value="<?= isset($dataumumkecamatan->luas_wilayah) ? $dataumumkecamatan->luas_wilayah : '' ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row col-sm-6">
                                    <h4 class="page-title text-center">Batas Wilayah</h4>
                                    <div class="border-top mb-4">
                                    </div>
                                    <div class="form-group row">
                                        <label for="bts_wil_utara" class="col-sm-4 control-label col-form-label text-end">Utara<span class="required">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="bts_wil_utara" name="bts_wil_utara" value="<?= isset($dataumumkecamatan->bts_wil_utara) ? $dataumumkecamatan->bts_wil_utara : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bts_wil_timur" class="col-sm-4 control-label col-form-label text-end">Timur<span class="required">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="bts_wil_timur" name="bts_wil_timur" value="<?= isset($dataumumkecamatan->bts_wil_timur) ? $dataumumkecamatan->bts_wil_timur : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bts_wil_selatan" class="col-sm-4 control-label col-form-label text-end">Selatan<span class="required">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="bts_wil_selatan" name="bts_wil_selatan" value="<?= isset($dataumumkecamatan->bts_wil_selatan) ? $dataumumkecamatan->bts_wil_selatan : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bts_wil_barat" class="col-sm-4 control-label col-form-label text-end">Barat<span class="required">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="bts_wil_barat" name="bts_wil_barat" value="<?= isset($dataumumkecamatan->bts_wil_barat) ? $dataumumkecamatan->bts_wil_barat : '' ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
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