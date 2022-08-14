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
                <h4 class="page-title">TAMBAH DATA DESA</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Master Data</li>
                            <li class="breadcrumb-item active" aria-current="page">Desa</li>
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
                    <form class="form-horizontal" action="<?= route('masterdata-desa.store') ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 text-end control-label col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Desa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_desa" class="col-sm-3 text-end control-label col-form-label">Kode Desa</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="kode_desa" name="kode_desa" placeholder="Kode Desa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tahun_bentuk" class="col-sm-3 text-end control-label col-form-label">Tahun Pembentukan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="tahun_bentuk" name="tahun_bentuk" placeholder="Tahun Pembentukan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="koordinat_bujur" class="col-sm-3 text-end control-label col-form-label">Koordinat Bujur</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="koordinat_bujur" name="koordinat_bujur" placeholder="Koordinat Bujur">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="koordinat_lintang" class="col-sm-3 text-end control-label col-form-label">Koordinat Lintang</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="koordinat_lintang" name="koordinat_lintang" placeholder="Koordinat Lintang">
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