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
                <h4 class="page-title">EDIT DATA LEMBAGA KEMASYARAKATAN</h4>
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
                    <form action="<?= route('lembaga-kemasyarakatan.update', $lembagakemasyarakatan['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div class="form-group row">
                                <label for="kglembagakemasyarakatan_id" class="col-sm-3 text-end control-label col-form-label">Jenis</label>
                                <div class="col-sm-9">
                                    <select name="kglembagakemasyarakatan_id" class="form-control">
                                        @foreach($kglembagakemasyarakatan as $kglembagakemasyarakatan)
                                        <option value="{{ $kglembagakemasyarakatan->id }}" @if(old('kglembagakemasyarakatan')==$kglembagakemasyarakatan->id || $kglembagakemasyarakatan->id == $lembagakemasyarakatan->kglembagakemasyarakatan_id) selected @endif>{{ $kglembagakemasyarakatan->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dasarhukumpembentukan" class="col-sm-3 text-end control-label col-form-label">Dasar Hukum Pembentukan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="dasarhukumpembentukan">
                                        <option value="Berdasarkan Keputusan Lurah/Kepala Desa" {{ old('dasarhukumpembentukan', isset($lembagakemasyarakatan->dasarhukumpembentukan) ? $lembagakemasyarakatan->dasarhukumpembentukan : '') == 'Berdasarkan Keputusan Lurah/Kepala Desa' ? 'selected' : '' }}>
                                            Berdasarkan Keputusan Lurah/Kepala Desa
                                        </option>
                                        <option value="Berdasarkan Keputusan Camat" {{ old('dasarhukumpembentukan', isset($lembagakemasyarakatan->dasarhukumpembentukan) ? $lembagakemasyarakatan->dasarhukumpembentukan : '') == 'Berdasarkan Keputusan Camat' ? 'selected' : '' }}>
                                            Berdasarkan Keputusan Camat
                                        </option>
                                        <option value="Berdasarkan Keputusan Bupati/Walikota" {{ old('dasarhukumpembentukan', isset($lembagakemasyarakatan->dasarhukumpembentukan) ? $lembagakemasyarakatan->dasarhukumpembentukan : '') == 'Berdasarkan Keputusan Bupati/Walikota' ? 'selected' : '' }}>
                                            Berdasarkan Keputusan Bupati/Walikota
                                        </option>
                                        <option value="Berdasarkan Keputusan Gubernur" {{ old('dasarhukumpembentukan', isset($lembagakemasyarakatan->dasarhukumpembentukan) ? $lembagakemasyarakatan->dasarhukumpembentukan : '') == 'Berdasarkan Keputusan Gubernur' ? 'selected' : '' }}>
                                            Berdasarkan Keputusan Gubernur
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_lembaga" class="col-sm-3 text-end control-label col-form-label">Jumlah Lembaga</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah_lembaga" name="jumlah_lembaga" value="<?= $lembagakemasyarakatan->jumlah_lembaga ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_pengurus" class="col-sm-3 text-end control-label col-form-label">Jumlah Pengurus</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah_pengurus" name="jumlah_pengurus" value="<?= $lembagakemasyarakatan->jumlah_pengurus ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ruang_lingkup_kegiatan" class="col-sm-3 text-end control-label col-form-label">Ruang Lingkup Kegiatan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ruang_lingkup_kegiatan" name="ruang_lingkup_kegiatan" value="<?= $lembagakemasyarakatan->ruang_lingkup_kegiatan ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_jenis_kegiatan" class="col-sm-3 text-end control-label col-form-label">Jumlah Jenis Kegiatan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah_jenis_kegiatan" name="jumlah_jenis_kegiatan" value="<?= $lembagakemasyarakatan->jumlah_jenis_kegiatan ?>">
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