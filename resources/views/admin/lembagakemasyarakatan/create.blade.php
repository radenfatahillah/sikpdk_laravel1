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
                <h4 class="page-title">TAMBAH DATA LEMBAGA KEMASYARAKATAN</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Master Data</li>
                            <li class="breadcrumb-item active" aria-current="page">Agama</li>
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
                <h5 class="card-title"><a href="javascript:history.back()" class="btn btn-primary">Kembali</a></h5>
                <div class="card">
                    <form class="form-horizontal" action="<?= route('lembaga-kemasyarakatan-admin.store') ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div class="form-group row">
                                <label for="desa_id" class="col-sm-3 text-end control-label col-form-label">Desa</label>
                                <div class="col-sm-9">
                                    <select name="desa_id" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                        <option disabled selected>Pilih</option>
                                        <?php foreach ($desa_id as $did) : ?>
                                            <option value="{{ $did->id }}">{{ $did->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                    @if ($errors->has('desa_id'))
                                    <span class="text-danger">{{ $errors->first('desa_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kglembagakemasyarakatan_id" class="col-sm-3 text-end control-label col-form-label">Jenis Pendidikan</label>
                                <div class="col-sm-9">
                                    <select name="kglembagakemasyarakatan_id" class="form-control">
                                        <?php foreach ($kglembagakemasyarakatan as $kgt) : ?>
                                            <option value="{{ $kgt->id }}">{{ $kgt->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dasarhukumpembentukan" class="col-sm-3 text-end control-label col-form-label">Dasar Hukum Pembentukan</label>
                                <div class="col-sm-9">
                                    <select name="dasarhukumpembentukan" class="form-control">
                                        <option value="Berdasarkan Keputusan Lurah/Kepala Desa">Berdasarkan Keputusan Lurah/Kepala Desa</option>
                                        <option value="Berdasarkan Keputusan Camat">Berdasarkan Keputusan Camat</option>
                                        <option value="Berdasarkan Keputusan Bupati/Walikota">Berdasarkan Keputusan Bupati/Walikota</option>
                                        <option value="Berdasarkan Keputusan Gubernur">Berdasarkan Keputusan Gubernur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_lembaga" class="col-sm-3 text-end control-label col-form-label">Jumlah Lembaga</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah_lembaga" name="jumlah_lembaga" placeholder="Contoh : 1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_pengurus" class="col-sm-3 text-end control-label col-form-label">Jumlah Pengurus</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah_pengurus" name="jumlah_pengurus" placeholder="Contoh : 1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ruang_lingkup_kegiatan" class="col-sm-3 text-end control-label col-form-label">Ruang Lingkup Kegiatan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ruang_lingkup_kegiatan" name="ruang_lingkup_kegiatan" placeholder="Contoh : 1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_jenis_kegiatan" class="col-sm-3 text-end control-label col-form-label">Jumlah Jenis Kegiatan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah_jenis_kegiatan" name="jumlah_jenis_kegiatan" placeholder="Contoh : 1">
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