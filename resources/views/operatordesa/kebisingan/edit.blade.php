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
                <h4 class="page-title">EDIT DATA KEBISINGAN</h4>
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
                    <form action="<?= route('kebisingan.update', $kebisingan['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div class="form-group row">
                                <label for="kgkebisingan_id" class="col-sm-3 text-end control-label col-form-label">Jenis</label>
                                <div class="col-sm-9">
                                    <select name="kgkebisingan_id" class="form-control">
                                        @foreach($kgkebisingan as $kgkebisingan)
                                        <option value="{{ $kgkebisingan->id }}" @if(old('kgkebisingan')==$kgkebisingan->id || $kgkebisingan->id == $kebisingan->kgkebisingan_id) selected @endif>{{ $kgkebisingan->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dampak" class="col-sm-3 text-end control-label col-form-label">Ekses Dampak Kebisingan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="dampak">
                                        <option {{old('dampak',$kebisingan->dampak)=="Ya"? 'selected':''}} value="Ya">Ya</option>
                                        <option {{old('dampak',$kebisingan->dampak)=="Tidak"? 'selected':''}} value="Tidak">Tidak</option>
                                    </select>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label for="sumber" class="col-sm-3 text-end control-label col-form-label">sumber</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="sumber">
                                        <option {{old('sumber',$kebisingan->sumber)=="Kendaraan Bermotor"? 'selected':''}} value="Kendaraan Bermotor">Kendaraan Bermotor</option>
                                        <option {{old('sumber',$kebisingan->sumber)=="Kereta Api"? 'selected':''}} value="Kereta Api">Kereta Api</option>
                                        <option {{old('sumber',$kebisingan->sumber)=="Pelabuhan"? 'selected':''}} value="Pelabuhan">Pelabuhan</option>
                                        <option {{old('sumber',$kebisingan->sumber)=="Airport"? 'selected':''}} value="Airport">Airport</option>
                                        <option {{old('sumber',$kebisingan->sumber)=="Pabrik"? 'selected':''}} value="Pabrik">Pabrik</option>
                                        <option {{old('sumber',$kebisingan->sumber)=="Dll"? 'selected':''}} value="Dll">Dll</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="efek" class="col-sm-3 text-end control-label col-form-label">Efek Terhadap Penduduk</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="efek" name="efek" value="<?= $kebisingan->efek ?>" required>
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