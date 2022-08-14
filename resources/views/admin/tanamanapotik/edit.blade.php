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
                <h4 class="page-title">EDIT DATA TANAMAN APOTIK HIDUP DAN SEJENISNYA</h4>
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
                    <form action="<?= route('tanaman-apotik-admin.update', $tanamanapotik['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div id="hidden" style="display: none;">
                                <input type="text" class="form-control" id="desa_id" name="desa_id" value="<?= $tanamanapotik->desa_id ?>" required>
                            </div>
                            <div class="form-group row">
                                <label for="kgtanamanapotik_id" class="col-sm-3 text-end control-label col-form-label">Nama Komoditas</label>
                                <div class="col-sm-9">
                                    <select name="kgtanamanapotik_id" class="form-control">
                                        @foreach($kgtanamanapotik as $kgtanamanapotik)
                                        <option value="{{ $kgtanamanapotik->id }}" @if(old('kgtanamanapotik')==$kgtanamanapotik->id || $kgtanamanapotik->id == $tanamanapotik->kgtanamanapotik_id) selected @endif>{{ $kgtanamanapotik->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="luas" class="col-sm-3 text-end control-label col-form-label">Luas (Ha)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="luas" name="luas" value="<?= $tanamanapotik->luas ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hasil" class="col-sm-3 text-end control-label col-form-label">Hasil Panen (Ton/Ha)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="hasil" name="hasil" value="<?= $tanamanapotik->hasil ?>" required>
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
    <!-- End Container fluid  -->
    <!-- ============================================================== -->

    @endsection