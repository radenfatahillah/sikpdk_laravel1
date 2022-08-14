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
                <h4 class="page-title">EDIT DATA JENIS, DEPOSIT DAN KEPEMILIKAN BAHAN GALIAN</h4>
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
                    <form action="<?= route('bahan-galian.update', $bahangalian['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div class="form-group row">
                                <label for="kgbahangalian_id" class="col-sm-3 text-end control-label col-form-label">Jenis Bahan Galian</label>
                                <div class="col-sm-9">
                                    <select name="kgbahangalian_id" class="form-control">
                                        @foreach($kgbahangalian as $kgbahangalian)
                                        <option value="{{ $kgbahangalian->id }}" @if(old('kgbahangalian')==$kgbahangalian->id || $kgbahangalian->id == $bahangalian->kgbahangalian_id) selected @endif>{{ $kgbahangalian->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>                        
                            <div class="form-group row">
                                <label for="keberadaan" class="col-sm-3 text-end control-label col-form-label">Keberadaan</label>
                                <div class="col-sm-9">
                                <select class="form-control" name="keberadaan">
                                    <option value="Ada" {{ old('keberadaan', isset($bahangalian->keberadaan) ? $bahangalian->keberadaan : '') == 'Ada' ? 'selected' : '' }}>
                                        Ada
                                    </option>
                                    <option value="Tidak Ada" {{ old('keberadaan', isset($bahangalian->keberadaan) ? $bahangalian->keberadaan : '') == 'Tidak Ada' ? 'selected' : '' }}>
                                        Tidak Ada
                                    </option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="skalaproduksi" class="col-sm-3 text-end control-label col-form-label">Skala Produksi</label>
                                <div class="col-sm-9">
                                <select class="form-control" name="skalaproduksi">
                                    <option value="Besar" {{ old('skalaproduksi', isset($bahangalian->skalaproduksi) ? $bahangalian->skalaproduksi : '') == 'Besar' ? 'selected' : '' }}>
                                        Besar
                                    </option>
                                    <option value="Sedang" {{ old('skalaproduksi', isset($bahangalian->skalaproduksi) ? $bahangalian->skalaproduksi : '') == 'Sedang' ? 'selected' : '' }}>
                                        Sedang
                                    </option>
                                    <option value="Kecil" {{ old('skalaproduksi', isset($bahangalian->skalaproduksi) ? $bahangalian->skalaproduksi : '') == 'Kecil' ? 'selected' : '' }}>
                                        Kecil
                                    </option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kepemilikan" class="col-sm-3 text-end control-label col-form-label">Kepemilikan</label>
                                <div class="col-sm-9">
                                <select class="form-control" name="kepemilikan">
                                    <option value="Pemerintah" {{ old('kepemilikan', isset($bahangalian->kepemilikan) ? $bahangalian->kepemilikan : '') == 'Pemerintah' ? 'selected' : '' }}>
                                        Pemerintah
                                    </option>
                                    <option value="Swasta" {{ old('kepemilikan', isset($bahangalian->kepemilikan) ? $bahangalian->kepemilikan : '') == 'Swasta' ? 'selected' : '' }}>
                                        Swasta
                                    </option>
                                    <option value="Perorangan" {{ old('kepemilikan', isset($bahangalian->kepemilikan) ? $bahangalian->kepemilikan : '') == 'Perorangan' ? 'selected' : '' }}>
                                        Perorangan
                                    </option>
                                    <option value="Adat" {{ old('kepemilikan', isset($bahangalian->kepemilikan) ? $bahangalian->kepemilikan : '') == 'Adat' ? 'selected' : '' }}>
                                        Adat
                                    </option>
                                    <option value="Lain-lain" {{ old('kepemilikan', isset($bahangalian->kepemilikan) ? $bahangalian->kepemilikan : '') == 'Lain-lain' ? 'selected' : '' }}>
                                        Lain-lain
                                    </option>
                                </select>
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