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
                <h4 class="page-title">EDIT DATA USAHA JASA PENGANGKUTAN</h4>
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
                    <form action="<?= route('usaha-jasa-pengangkutan.update', $usahajasapengangkutan['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div class="form-group row">
                                <label for="kgusahajasapengangkutan_id" class="col-sm-3 text-end control-label col-form-label">Jenis Jasa</label>
                                <div class="col-sm-9">
                                    <select name="kgusahajasapengangkutan_id" class="form-control">
                                        @foreach($kgusahajasapengangkutan as $kgusahajasapengangkutan)
                                        <option value="{{ $kgusahajasapengangkutan->id }}" @if(old('kgusahajasapengangkutan')==$kgusahajasapengangkutan->id || $kgusahajasapengangkutan->id == $usahajasapengangkutan->kgusahajasapengangkutan_id) selected @endif>{{ $kgusahajasapengangkutan->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kategorijasapengangkutan" class="col-sm-3 text-end control-label col-form-label">Kategori Jasa Pengangkutan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="kategorijasapengangkutan">
                                        <option value="Angkutan Darat" {{ old('kategorijasapengangkutan', isset($usahajasapengangkutan->kategorijasapengangkutan) ? $usahajasapengangkutan->kategorijasapengangkutan : '') == 'Angkutan Darat' ? 'selected' : '' }}>
                                            Angkutan Darat
                                        </option>
                                        <option value="Angkutan Sungai" {{ old('kategorijasapengangkutan', isset($usahajasapengangkutan->kategorijasapengangkutan) ? $usahajasapengangkutan->kategorijasapengangkutan : '') == 'Angkutan Sungai' ? 'selected' : '' }}>
                                            Angkutan Sungai
                                        </option>
                                        <option value="Angkutan Laut" {{ old('kategorijasapengangkutan', isset($usahajasapengangkutan->kategorijasapengangkutan) ? $usahajasapengangkutan->kategorijasapengangkutan : '') == 'Angkutan Laut' ? 'selected' : '' }}>
                                            Angkutan Laut
                                        </option>
                                        <option value="Angkutan Udara" {{ old('kategorijasapengangkutan', isset($usahajasapengangkutan->kategorijasapengangkutan) ? $usahajasapengangkutan->kategorijasapengangkutan : '') == 'Angkutan Udara' ? 'selected' : '' }}>
                                            Angkutan Udara
                                        </option>
                                        <option value="Ekspedisi Dan Pengiriman" {{ old('kategorijasapengangkutan', isset($usahajasapengangkutan->kategorijasapengangkutan) ? $usahajasapengangkutan->kategorijasapengangkutan : '') == 'Ekspedisi Dan Pengiriman' ? 'selected' : '' }}>
                                            Ekspedisi Dan Pengiriman
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah" class="col-sm-3 text-end control-label col-form-label">Jumlah (Unit)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $usahajasapengangkutan->jumlah ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pemilik" class="col-sm-3 text-end control-label col-form-label">Jumlah Pemilik (Orang)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="pemilik" name="pemilik" value="<?= $usahajasapengangkutan->pemilik ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kapasitas" class="col-sm-3 text-end control-label col-form-label">Kapasitas (Orang)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="kapasitas" name="kapasitas" value="<?= $usahajasapengangkutan->kapasitas ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_tenagakerja" class="col-sm-3 text-end control-label col-form-label">Jumlah Tenaga Kerja yang terserap (Orang)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah_tenagakerja" name="jumlah_tenagakerja" value="<?= $usahajasapengangkutan->jumlah_tenagakerja ?>" required>
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