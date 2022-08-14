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
                <h4 class="page-title">TAMBAH DATA KEBISINGAN</h4>
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
                    <form class="form-horizontal" action="<?= route('kebisingan-admin.store') ?>" method="POST" enctype="multipart/form-data">
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
                                <label for="kgkebisingan_id" class="col-sm-3 text-end control-label col-form-label">Lokasi/Tempat/Area Wisata</label>
                                <div class="col-sm-9">
                                    <select name="kgkebisingan_id" class="form-control">
                                        <?php foreach ($kgkebisingan as $kgt) : ?>
                                            <option value="{{ $kgt->id }}">{{ $kgt->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dampak" class="col-sm-3 text-end control-label col-form-label">Ekses Dampak Kebisingan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="dampak">
                                        <option value="Ya"> Ya </option>
                                        <option value="Tidak"> Tidak </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="sumber" class="col-sm-3 text-end control-label col-form-label">Sumber Kebisingan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="sumber">
                                        <option value="Kendaraan Bermotor"> Kendaraan Bermotor </option>
                                        <option value="Kereta Api"> Kereta Api </option>
                                        <option value="Pelabuhan"> Pelabuhan </option>
                                        <option value="Airport"> Airport </option>
                                        <option value="Pabrik"> Pabrik </option>
                                        <option value="Dll"> Dll </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="efek" class="col-sm-3 text-end control-label col-form-label">Efek Terhadap Penduduk</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="efek" name="efek">
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