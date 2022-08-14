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
                <h4 class="page-title">EDIT DATA PRASARANA TRANSPORTASI DARAT</h4>
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
                    <form action="<?= route('prasarana-darat-admin.update', $prasaranadarat['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div id="hidden" style="display: none;">
                                <input type="text" class="form-control" id="desa_id" name="desa_id" value="<?= $prasaranadarat->desa_id ?>" required>
                            </div>
                            <div class="form-group row">
                                <label for="kgprasaranadarat_id" class="col-sm-3 text-end control-label col-form-label">Jenis Sarana dan Prasarana</label>
                                <div class="col-sm-9">
                                    <select name="kgprasaranadarat_id" class="form-control">
                                        @foreach($kgprasaranadarat as $kgprasaranadarat)
                                        <option value="{{ $kgprasaranadarat->id }}" @if(old('kgprasaranadarat')==$kgprasaranadarat->id || $kgprasaranadarat->id == $prasaranadarat->kgprasaranadarat_id) selected @endif>{{ $kgprasaranadarat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kgdarat_id" class="col-sm-3 text-end control-label col-form-label">Kategori</label>
                                <div class="col-sm-9">
                                    <select name="kgdarat_id" class="form-control">
                                        @foreach($kgdarat as $kgdarat)
                                        <option value="{{ $kgdarat->id }}" @if(old('kgdarat')==$kgdarat->id || $kgdarat->id == $prasaranadarat->kgdarat_id) selected @endif>{{ $kgdarat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="baik" class="col-sm-3 text-end control-label col-form-label">Baik (Km atau Unit)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="baik" name="baik" value="<?= $prasaranadarat->baik ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rusak" class="col-sm-3 text-end control-label col-form-label">Rusak (Km atau Unit)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="rusak" name="rusak" value="<?= $prasaranadarat->rusak ?>" required>
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