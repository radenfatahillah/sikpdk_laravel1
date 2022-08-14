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
                <h4 class="page-title">EDIT DATA KUALITAS UDARA</h4>
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
                    <form action="<?= route('kualitas-udara.update', $kualitasudara['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div class="form-group row">
                                <label for="kgkualitasudara_id" class="col-sm-3 text-end control-label col-form-label">Sumber</label>
                                <div class="col-sm-9">
                                    <select name="kgkualitasudara_id" class="form-control">
                                        @foreach($kgkualitasudara as $kgkualitasudara)
                                        <option value="{{ $kgkualitasudara->id }}" @if(old('kgkualitasudara')==$kgkualitasudara->id || $kgkualitasudara->id == $kualitasudara->kgkualitasudara_id) selected @endif>{{ $kgkualitasudara->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah" class="col-sm-3 text-end control-label col-form-label">Jumlah Lokasi Sumber Pencemar</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $kualitasudara->jumlah ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="polutan" class="col-sm-3 text-end control-label col-form-label">Polutan Pencemar</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="polutan" name="polutan" value="<?= $kualitasudara->polutan ?>" required>
                                </div>
                            </div>                          
                            <div class="form-group row">
                                <label for="efek" class="col-sm-3 text-end control-label col-form-label">Efek Terhadap Kesehatan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="efek">
                                        <option {{old('efek',$kualitasudara->efek)=="Gangguan Penglihatan/Kabut"? 'selected':''}} value="Gangguan Penglihatan/Kabut">Gangguan Penglihatan/Kabut</option>
                                        <option {{old('efek',$kualitasudara->efek)=="ISPA"? 'selected':''}} value="ISPA">ISPA</option>
                                        <option {{old('efek',$kualitasudara->efek)=="Dll"? 'selected':''}} value="Dll">Dll</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pemerintah" class="col-sm-3 text-end control-label col-form-label">Kepemilikan (Pemerintah)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="pemerintah" name="pemerintah" value="<?= $kualitasudara->pemerintah ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="swasta" class="col-sm-3 text-end control-label col-form-label">Kepemilikan (Swasta)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="swasta" name="swasta" value="<?= $kualitasudara->swasta ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="perorangan" class="col-sm-3 text-end control-label col-form-label">Kepemilikan (Perorangan)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="perorangan" name="perorangan" value="<?= $kualitasudara->perorangan ?>" required>
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