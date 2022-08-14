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
                <h4 class="page-title">EDIT DATA PENDIDIKAN FORMAL</h4>
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
                    <form action="<?= route('pendidikan-formal.update', $pendidikanformal['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div class="form-group row">
                                <label for="kgpendidikanformal_id" class="col-sm-3 text-end control-label col-form-label">Jenis</label>
                                <div class="col-sm-9">
                                    <select name="kgpendidikanformal_id" class="form-control">
                                        @foreach($kgpendidikanformal as $kgpendidikanformal)
                                        <option value="{{ $kgpendidikanformal->id }}" @if(old('kgpendidikanformal')==$kgpendidikanformal->id || $kgpendidikanformal->id == $pendidikanformal->kgpendidikanformal_id) selected @endif>{{ $kgpendidikanformal->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah" class="col-sm-3 text-end control-label col-form-label">Jumlah</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $pendidikanformal->jumlah ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-sm-3 text-end control-label col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="status">
                                        <option value="Terakreditasi" {{ old('status', isset($pendidikanformal->status) ? $pendidikanformal->status : '') == 'Terakreditasi' ? 'selected' : '' }}>
                                            Terakreditasi
                                        </option>
                                        <option value="Terdaftar" {{ old('status', isset($pendidikanformal->status) ? $pendidikanformal->status : '') == 'Terdaftar' ? 'selected' : '' }}>
                                            Terdaftar
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pemerintah" class="col-sm-3 text-end control-label col-form-label">pemerintah</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="pemerintah" name="pemerintah" value="<?= $pendidikanformal->pemerintah ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="swasta" class="col-sm-3 text-end control-label col-form-label">swasta</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="swasta" name="swasta" value="<?= $pendidikanformal->swasta ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="desa" class="col-sm-3 text-end control-label col-form-label">desa</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="desa" name="desa" value="<?= $pendidikanformal->desa ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_pengajar" class="col-sm-3 text-end control-label col-form-label">Jumlah Pengajar</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah_pengajar" name="jumlah_pengajar" value="<?= $pendidikanformal->jumlah_pengajar ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_siswa" class="col-sm-3 text-end control-label col-form-label">Jumlah Siswa/Mahasiswa</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah_siswa" name="jumlah_siswa" value="<?= $pendidikanformal->jumlah_siswa ?>">
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