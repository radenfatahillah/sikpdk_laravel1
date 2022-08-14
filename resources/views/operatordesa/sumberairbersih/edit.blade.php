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
                <h4 class="page-title">EDIT DATA SUMBER DAN KUALITAS AIR BERSIH</h4>
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
                    <form action="<?= route('sumber-air-bersih.update', $sumberairbersih['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div class="form-group row">
                                <label for="kgsumberairbersih_id" class="col-sm-3 text-end control-label col-form-label">Jenis</label>
                                <div class="col-sm-9">
                                    <select name="kgsumberairbersih_id" class="form-control">
                                        @foreach($kgsumberairbersih as $kgsumberairbersih)
                                        <option value="{{ $kgsumberairbersih->id }}" @if(old('kgsumberairbersih')==$kgsumberairbersih->id || $kgsumberairbersih->id == $sumberairbersih->kgsumberairbersih_id) selected @endif>{{ $kgsumberairbersih->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah" class="col-sm-3 text-end control-label col-form-label">Jumlah (Unit)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $sumberairbersih->jumlah ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kondisi" class="col-sm-3 text-end control-label col-form-label">Kondisi Rusak (Unit)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="kondisi" name="kondisi" value="<?= $sumberairbersih->kondisi ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pemanfaatan" class="col-sm-3 text-end control-label col-form-label">Pemanfaatan (KK)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="pemanfaatan" name="pemanfaatan" value="<?= $sumberairbersih->pemanfaatan ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kualitas" class="col-sm-3 text-end control-label col-form-label">Kualitas</label>
                                <div class="col-sm-9">
                                <select class="form-control" name="kualitas">
                                    <option value="Berbau" {{ old('kualitas', isset($sumberairbersih->kualitas) ? $sumberairbersih->kualitas : '') == 'Berbau' ? 'selected' : '' }}>
                                            Berbau
                                    </option>
                                    <option value="Berwarna" {{ old('kualitas', isset($sumberairbersih->kualitas) ? $sumberairbersih->kualitas : '') == 'Berwarna' ? 'selected' : '' }}>
                                            Berwarna
                                    </option>
                                    <option value="Berasa" {{ old('kualitas', isset($sumberairbersih->kualitas) ? $sumberairbersih->kualitas : '') == 'Berasa' ? 'selected' : '' }}>
                                            Berasa
                                    </option>
                                    <option value="Baik" {{ old('kualitas', isset($sumberairbersih->kualitas) ? $sumberairbersih->kualitas : '') == 'Baik' ? 'selected' : '' }}>
                                            Baik
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