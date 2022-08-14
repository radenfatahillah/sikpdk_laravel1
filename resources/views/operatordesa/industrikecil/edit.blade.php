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
                <h4 class="page-title">EDIT DATA INDUSTRI KECIL DAN MENENGAH</h4>
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
                    <form action="<?= route('industri-kecil.update', $industrikecil['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div class="form-group row">
                                <label for="kgindustrikecil_id" class="col-sm-3 text-end control-label col-form-label">Jenis Lembaga Ekonomi</label>
                                <div class="col-sm-9">
                                    <select name="kgindustrikecil_id" class="form-control">
                                        @foreach($kgindustrikecil as $kgindustrikecil)
                                        <option value="{{ $kgindustrikecil->id }}" @if(old('kgindustrikecil')==$kgindustrikecil->id || $kgindustrikecil->id == $industrikecil->kgindustrikecil_id) selected @endif>{{ $kgindustrikecil->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah" class="col-sm-3 text-end control-label col-form-label">Jumlah</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $industrikecil->jumlah ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kegiatan" class="col-sm-3 text-end control-label col-form-label">Jumlah Kegiatan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="kegiatan" name="kegiatan" value="<?= $industrikecil->kegiatan ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pengurus" class="col-sm-3 text-end control-label col-form-label"> Jumlah Pengurus dan Anggota</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="pengurus" name="pengurus" value="<?= $industrikecil->pengurus ?>" required>
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