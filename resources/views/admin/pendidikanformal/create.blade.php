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
                <h4 class="page-title">TAMBAH DATA PENDIDIKAN FORMAL</h4>
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
                    <form class="form-horizontal" action="<?= route('pendidikan-formal-admin.store') ?>" method="POST" enctype="multipart/form-data">
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
                                <label for="kgpendidikanformal_id" class="col-sm-3 text-end control-label col-form-label">Jenis Pendidikan</label>
                                <div class="col-sm-9">
                                    <select name="kgpendidikanformal_id" class="form-control">
                                        <?php foreach ($kgpendidikanformal as $kgt) : ?>
                                            <option value="{{ $kgt->id }}">{{ $kgt->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah" class="col-sm-3 text-end control-label col-form-label">Jumlah</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Contoh : 1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-sm-3 text-end control-label col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select name="status" class="form-control">
                                        <option value="Terakreditasi">Terakreditasi</option>
                                        <option value="Terdaftar">Terdaftar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pemerintah" class="col-sm-3 text-end control-label col-form-label">Milik Pemerintah</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="pemerintah" name="pemerintah" placeholder="Contoh : 1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="swasta" class="col-sm-3 text-end control-label col-form-label">Milik Swasta</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="swasta" name="swasta" placeholder="Contoh : 1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="desa" class="col-sm-3 text-end control-label col-form-label">Milik Desa/Kelurahan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="desa" name="desa" placeholder="Contoh : 1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_pengajar" class="col-sm-3 text-end control-label col-form-label">Jumlah Tenaga Pengajar</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah_pengajar" name="jumlah_pengajar" placeholder="Contoh : 1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_siswa" class="col-sm-3 text-end control-label col-form-label">Jumlah siswa/ Mahasiswa</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah_siswa" name="jumlah_siswa" placeholder="Contoh : 1">
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