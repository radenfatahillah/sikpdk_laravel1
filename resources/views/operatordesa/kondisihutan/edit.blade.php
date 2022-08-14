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
                <h4 class="page-title">EDIT DATA KONDISI HUTAN</h4>
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
                    <form action="<?= route('kondisi-hutan.update', $kondisihutan['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div class="form-group row">
                                <label for="kgkondisihutan_id" class="col-sm-3 text-end control-label col-form-label">Nama Komoditas</label>
                                <div class="col-sm-9">
                                    <select name="kgkondisihutan_id" class="form-control">
                                        @foreach($kgkondisihutan as $kgkondisihutan)
                                        <option value="{{ $kgkondisihutan->id }}" @if(old('kgkondisihutan')==$kgkondisihutan->id || $kgkondisihutan->id == $kondisihutan->kgkondisihutan_id) selected @endif>{{ $kgkondisihutan->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>                        
                            <div class="form-group row">
                                <label for="baik" class="col-sm-3 text-end control-label col-form-label">Kondisi Baik (Ha)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="baik" name="baik" value="<?= $kondisihutan->baik ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rusak" class="col-sm-3 text-end control-label col-form-label">Kondisi Rusak (Ha)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="rusak" name="rusak" value="<?= $kondisihutan->rusak ?>" required>
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