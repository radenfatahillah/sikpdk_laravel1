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
                <h4 class="page-title">LIHAT DATA KELAHIRAN</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kelola Data</li>
                            <li class="breadcrumb-item active" aria-current="page">Data Kelahiran</li>
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
            <h5 class="card-title"><a href="javascript:history.back()" class="btn btn-primary">Kembali</a></h5>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nama_KK" class="col-sm-4 text-end control-label col-form-label">Nama KK</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama_KK" name="nama_KK" value="<?= $datakelahiran->nama_KK ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="NOKK" class="col-sm-4 text-end control-label col-form-label">NO KK</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="NOKK" name="NOKK" value="<?= $datakelahiran->NOKK ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 text-end control-label col-form-label">Nama Bayi</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" style="text-transform:uppercase" id="name" name="name" value="<?= $datakelahiran->name ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jeniskelamin_id" class="col-sm-4 text-end control-label col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" style="text-transform:uppercase" id="jeniskelamin_id" name="jeniskelamin_id" value="<?= $datakelahiran->jeniskelamin->name ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempatlahir" class="col-sm-4 text-end control-label col-form-label">Tempat Lahir</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" style="text-transform:uppercase" id="tempatlahir" name="tempatlahir" value="<?= $datakelahiran->tempatlahir ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggallahir" class="col-sm-4 text-end control-label col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="tanggallahir" placeholder="mm/dd/yyyy" value="<?= date("m/d/Y", $time = strtotime($datakelahiran->tanggallahir)); ?>" readonly>
                                    <div class="input-group-append">
                                        <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                @if ($errors->has('tanggallahir'))
                                <span class="text-danger">{{ $errors->first('tanggallahir') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="golongandarah_id" class="col-sm-4 text-end control-label col-form-label">Golongan Darah</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="golongandarah_id" name="golongandarah_id" value="<?= $datakelahiran->golongandarah->name ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_ayah" class="col-sm-4 text-end control-label col-form-label">Nama Ayah</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= $datakelahiran->nama_ayah ?>" readonly>
                                @if ($errors->has('nama_ayah'))
                                <span class="text-danger">{{ $errors->first('nama_ayah') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_ibu" class="col-sm-4 text-end control-label col-form-label">Nama Ibu</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= $datakelahiran->nama_ibu ?>" readonly>
                                @if ($errors->has('nama_ibu'))
                                <span class="text-danger">{{ $errors->first('nama_ibu') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat_id" class="col-sm-4 text-end control-label col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="alamat_id" name="alamat_id" value="<?= $datakelahiran->alamat->name ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rt" class="col-sm-4 text-end control-label col-form-label">RT</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="rt" name="rt" value="<?= $datakelahiran->rt ?>" readonly>
                            </div>
                            <label for="rw" class="col-sm-2 text-end control-label col-form-label">RW</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="rw" name="rw" value="<?= $datakelahiran->rw ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="desa_id" class="col-sm-4 text-end control-label col-form-label">Desa</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="desa_id" name="desa_id" value="<?= $datakelahiran->desa->name ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

@endsection