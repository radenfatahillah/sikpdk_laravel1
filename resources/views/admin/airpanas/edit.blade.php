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
                <h4 class="page-title">EDIT DATA AIR PANAS</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profil Desa</li>
                            <li class="breadcrumb-item active" aria-current="page">Air Panas</li>
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
                    <form action="<?= route('air-panas-admin.update', $airpanas['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div id="hidden" style="display: none;">
                                <input type="text" class="form-control" id="desa_id" name="desa_id" value="<?= $airpanas->desa_id ?>" required>
                            </div>
                            <div class="form-group row">
                                <label for="kgairpanas_id" class="col-sm-3 text-end control-label col-form-label">Nama Komoditas</label>
                                <div class="col-sm-9">
                                    <select name="kgairpanas_id" class="form-control">
                                        @foreach($kgairpanas as $kgairpanas)
                                        <option value="{{ $kgairpanas->id }}" @if(old('kgairpanas')==$kgairpanas->id || $kgairpanas->id == $airpanas->kgairpanas_id) selected @endif>{{ $kgairpanas->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah" class="col-sm-3 text-end control-label col-form-label">Jumlah Lokasi</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $airpanas->jumlah ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="manfaat" class="col-sm-3 text-end control-label col-form-label">Pemanfaatan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="manfaat">
                                        <option value="Wisata" {{ old('manfaat', isset($airpanas->manfaat) ? $airpanas->manfaat : '') == 'Wisata' ? 'selected' : '' }}>
                                            Wisata
                                        </option>
                                        <option value="Pengobatan Energi" {{ old('manfaat', isset($airpanas->manfaat) ? $airpanas->manfaat : '') == 'Pengobatan Energi' ? 'selected' : '' }}>
                                            Pengobatan Energi
                                        </option>
                                        <option value="Dll" {{ old('manfaat', isset($airpanas->manfaat) ? $airpanas->manfaat : '') == 'Dll' ? 'selected' : '' }}>
                                            Dll
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pemerintah" class="col-sm-3 text-end control-label col-form-label">Kepemilikan/Pengelolaan (Pemda)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="pemerintah" name="pemerintah" value="<?= $airpanas->pemerintah ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="swasta" class="col-sm-3 text-end control-label col-form-label">Kepemilikan/Pengelolaan (Swasta)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="swasta" name="swasta" value="<?= $airpanas->swasta ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="perorangan" class="col-sm-3 text-end control-label col-form-label">Kepemilikan/Pengelolaan (Perorangan)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="perorangan" name="perorangan" value="<?= $airpanas->perorangan ?>" required>
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