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
                <h4 class="page-title">EDIT DATA PENDIDIKAN NON FORMAL/KURSUS</h4>
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
                    <form action="<?= route('pendidikan-non-formal-admin.update', $pendidikannonformal['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div id="hidden" style="display: none;">
                                <input type="text" class="form-control" id="desa_id" name="desa_id" value="<?= $pendidikannonformal->desa_id ?>" required>
                            </div>
                            <div class="form-group row">
                                <label for="kgpendidikannonformal_id" class="col-sm-3 text-end control-label col-form-label">Jenis</label>
                                <div class="col-sm-9">
                                    <select name="kgpendidikannonformal_id" class="form-control">
                                        @foreach($kgpendidikannonformal as $kgpendidikannonformal)
                                        <option value="{{ $kgpendidikannonformal->id }}" @if(old('kgpendidikannonformal')==$kgpendidikannonformal->id || $kgpendidikannonformal->id == $pendidikannonformal->kgpendidikannonformal_id) selected @endif>{{ $kgpendidikannonformal->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah" class="col-sm-3 text-end control-label col-form-label">Jumlah</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $pendidikannonformal->jumlah ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-sm-3 text-end control-label col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="status">
                                        <option value="Terakreditasi" {{ old('status', isset($pendidikannonformal->status) ? $pendidikannonformal->status : '') == 'Terakreditasi' ? 'selected' : '' }}>
                                            Terakreditasi
                                        </option>
                                        <option value="Terdaftar" {{ old('status', isset($pendidikannonformal->status) ? $pendidikannonformal->status : '') == 'Terdaftar' ? 'selected' : '' }}>
                                            Terdaftar
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kepemilikan" class="col-sm-3 text-end control-label col-form-label">Kepemilikan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="kepemilikan">
                                        <option value="Pemerintah" {{ old('kepemilikan', isset($pendidikannonformal->kepemilikan) ? $pendidikannonformal->kepemilikan : '') == 'Pemerintah' ? 'selected' : '' }}>
                                            Pemerintah
                                        </option>
                                        <option value="Yayasan" {{ old('kepemilikan', isset($pendidikannonformal->kepemilikan) ? $pendidikannonformal->kepemilikan : '') == 'Yayasan' ? 'selected' : '' }}>
                                            Yayasan
                                        </option>
                                        <option value="Dll" {{ old('kepemilikan', isset($pendidikannonformal->kepemilikan) ? $pendidikannonformal->kepemilikan : '') == 'Dll' ? 'selected' : '' }}>
                                            Dll
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_pengajar" class="col-sm-3 text-end control-label col-form-label">Jumlah Pengajar</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah_pengajar" name="jumlah_pengajar" value="<?= $pendidikannonformal->jumlah_pengajar ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_siswa" class="col-sm-3 text-end control-label col-form-label">Jumlah Siswa/Mahasiswa</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah_siswa" name="jumlah_siswa" value="<?= $pendidikannonformal->jumlah_siswa ?>">
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