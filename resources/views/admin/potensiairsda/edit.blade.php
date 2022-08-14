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
                <h4 class="page-title">EDIT DATA POTENSI AIR DAN SUMBER DAYA AIR</h4>
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
                    <form action="<?= route('potensi-air-sda-admin.update', $potensiairsda['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div id="hidden" style="display: none;">
                                <input type="text" class="form-control" id="desa_id" name="desa_id" value="<?= $potensiairsda->desa_id ?>" required>
                            </div>
                            <div class="form-group row">
                                <label for="kgpotensiairsda_id" class="col-sm-3 text-end control-label col-form-label">Jenis Sumber Air</label>
                                <div class="col-sm-9">
                                    <select name="kgpotensiairsda_id" class="form-control">
                                        @foreach($kgpotensiairsda as $kgpotensiairsda)
                                        <option value="{{ $kgpotensiairsda->id }}" @if(old('kgpotensiairsda')==$kgpotensiairsda->id || $kgpotensiairsda->id == $potensiairsda->kgpotensiairsda_id) selected @endif>{{ $kgpotensiairsda->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="debit" class="col-sm-3 text-end control-label col-form-label">Debit/Volume</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="debit">
                                        <option value="Kecil" {{ old('debit', isset($potensiairsda->debit) ? $potensiairsda->debit : '') == 'Kecil' ? 'selected' : '' }}>
                                            Kecil
                                        </option>
                                        <option value="Sedang" {{ old('debit', isset($potensiairsda->debit) ? $potensiairsda->debit : '') == 'Sedang' ? 'selected' : '' }}>
                                            Sedang
                                        </option>
                                        <option value="Besar" {{ old('debit', isset($potensiairsda->debit) ? $potensiairsda->debit : '') == 'Besar' ? 'selected' : '' }}>
                                            Besar
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