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
                <h4 class="page-title">TAMBAH DATA AIR PANAS</h4>
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
                    <form class="form-horizontal" action="<?= route('air-panas-admin.store') ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div class="form-group row">
                                <label for="desa_id" class="col-sm-3 text-end control-label col-form-label">Desa</label>
                                <div class="col-sm-9">
                                    <select name="desa_id" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                        <option disabled selected>Pilih</option>
                                        <?php foreach ($desa_id as $did) : ?>
                                            <option value="{{ $did->id }}">{{ $did->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                    @if ($errors->has('desa_id'))
                                    <span class="text-danger">{{ $errors->first('desa_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kgairpanas_id" class="col-sm-3 text-end control-label col-form-label">Sumber</label>
                                <div class="col-sm-9">
                                    <select name="kgairpanas_id" class="form-control">
                                        <?php foreach ($kgairpanas as $kgt) : ?>
                                            <option value="{{ $kgt->id }}">{{ $kgt->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                    @if ($errors->has('kgairpanas_id'))
                                    <span class="text-danger">{{ $errors->first('kgairpanas_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah" class="col-sm-3 text-end control-label col-form-label">Jumlah Lokasi</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{ old('jumlah') }}">
                                    @if ($errors->has('jumlah'))
                                    <span class="text-danger">{{ $errors->first('jumlah') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="manfaat" class="col-sm-3 text-end control-label col-form-label">Pemanfaatan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="manfaat">
                                        <option disabled selected>Pilih</option>
                                        <option value="Wisata"> Wisata </option>
                                        <option value="Pengobatan Energi"> Pengobatan Energi </option>
                                        <option value="Dll"> Dll </option>
                                    </select>
                                    @if ($errors->has('manfaat'))
                                    <span class="text-danger">{{ $errors->first('manfaat') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pemerintah" class="col-sm-3 text-end control-label col-form-label">Kepemilikan/Pengelolaan (Pemda)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="pemerintah" name="pemerintah" value="{{ old('pemerintah') }}">
                                    @if ($errors->has('pemerintah'))
                                    <span class="text-danger">{{ $errors->first('pemerintah') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="swasta" class="col-sm-3 text-end control-label col-form-label">Kepemilikan/Pengelolaan (Swasta)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="swasta" name="swasta" value="{{ old('swasta') }}">
                                    @if ($errors->has('swasta'))
                                    <span class="text-danger">{{ $errors->first('swasta') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="perorangan" class="col-sm-3 text-end control-label col-form-label">Kepemilikan/Pengelolaan (Perorangan)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="perorangan" name="perorangan" value="{{ old('perorangan') }}">
                                    @if ($errors->has('perorangan'))
                                    <span class="text-danger">{{ $errors->first('perorangan') }}</span>
                                    @endif
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
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->

    @endsection