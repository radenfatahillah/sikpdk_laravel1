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
                <h4 class="page-title">LIHAT DATA PINDAH DATANG</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kelola Data</li>
                            <li class="breadcrumb-item active" aria-current="page">Data Pindah Datang</li>
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
                            <label for="NIK" class="col-sm-4 text-end control-label col-form-label">NIK</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="NIK" name="NIK" value="<?= $pindahdatang->NIK ?>" readonly>
                                @if ($errors->has('NIK'))
                                <span class="text-danger">{{ $errors->first('NIK') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="NOKK_asal" class="col-sm-4 text-end control-label col-form-label">NO KK Asal</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="NOKK_asal" name="NOKK_asal" value="{{ $pindahdatang->NOKK_asal }}" readonly>
                                @if ($errors->has('NOKK_asal'))
                                <span class="text-danger">{{ $errors->first('NOKK_asal') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_KK_asal" class="col-sm-4 text-end control-label col-form-label">Nama KK Asal</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama_KK_asal" name="nama_KK_asal" value="{{ $pindahdatang->nama_KK_asal }}" readonly>
                                @if ($errors->has('nama_KK_asal'))
                                <span class="text-danger">{{ $errors->first('nama_KK_asal') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 text-end control-label col-form-label">Nama Lengkap</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" style="text-transform:uppercase" id="name" name="name" value="<?= $pindahdatang->name ?>" readonly>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jeniskelamin_id" class="col-sm-4 text-end control-label col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" style="text-transform:uppercase" id="jeniskelamin_id" name="jeniskelamin_id" value="<?= $pindahdatang->jeniskelamin->name ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempatlahir" class="col-sm-4 text-end control-label col-form-label">Tempat Lahir</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" style="text-transform:uppercase" id="tempatlahir" name="tempatlahir" value="<?= $pindahdatang->tempatlahir ?>" readonly>
                                @if ($errors->has('tempatlahir'))
                                <span class="text-danger">{{ $errors->first('tempatlahir') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggallahir" class="col-sm-4 text-end control-label col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="tanggallahir" placeholder="mm/dd/yyyy" value="<?= date("m/d/Y", $time = strtotime($pindahdatang->tanggallahir)); ?>" readonly>
                                    <div class="input-group-append">
                                        <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                @if ($errors->has('tanggallahir'))
                                <span class="text-danger">{{ $errors->first('tanggallahir') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="agama_id" class="col-sm-4 text-end control-label col-form-label">Agama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= $pindahdatang->agama->name ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_ayah" class="col-sm-4 text-end control-label col-form-label">Nama Ayah</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= $pindahdatang->nama_ayah ?>" readonly>
                                @if ($errors->has('nama_ayah'))
                                <span class="text-danger">{{ $errors->first('nama_ayah') }}</span>
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
                            <div class="form-group row">
                                <label for="nama_ibu" class="col-sm-4 text-end control-label col-form-label">Nama Ibu</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= $pindahdatang->nama_ibu ?>" readonly>
                                    @if ($errors->has('nama_ibu'))
                                    <span class="text-danger">{{ $errors->first('nama_ibu') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="klasifikasipindah_id" class="col-sm-4 text-end control-label col-form-label">Klasifikasi Pindah</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="klasifikasipindah_id" name="klasifikasipindah_id" value="<?= $pindahdatang->klasifikasipindah->name ?>" readonly>
                                    @if ($errors->has('klasifikasipindah_id'))
                                    <span class="text-danger">{{ $errors->first('klasifikasipindah_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_skpwni" class="col-sm-4 text-end control-label col-form-label">No SKPWNI</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="no_skpwni" name="no_skpwni" value="<?= $pindahdatang->no_skpwni ?>" readonly>
                                    @if ($errors->has('no_skpwni'))
                                    <span class="text-danger">{{ $errors->first('no_skpwni') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal" class="col-sm-4 text-end control-label col-form-label">Tanggal Surat</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="tanggal" placeholder="mm/dd/yyyy" value="<?= date("m/d/Y", $time = strtotime($pindahdatang->tanggal)); ?>" readonly>
                                        <div class="input-group-append">
                                            <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                    @if ($errors->has('tanggal'))
                                    <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat_asal" class="col-sm-4 text-end control-label col-form-label">Alamat Asal</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" id="alamat_asal" name="alamat_asal" rows="4" cols="50" readonly><?= $pindahdatang->alamat_asal ?></textarea>
                                    @if ($errors->has('alamat_asal'))
                                    <span class="text-danger">{{ $errors->first('alamat_asal') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat_id" class="col-sm-4 text-end control-label col-form-label">Alamat Sekarang</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="alamat_id" name="alamat_id" value="<?= $pindahdatang->alamat->name ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rt" class="col-sm-4 text-end control-label col-form-label">RT</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="rt" name="rt" value="<?= $pindahdatang->rt ?>" readonly>
                                </div>
                                <label for="rw" class="col-sm-2 text-end control-label col-form-label">RW</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="rw" name="rw" value="<?= $pindahdatang->rw ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="desa_id" class="col-sm-4 text-end control-label col-form-label">Desa</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="no_skpwni" name="no_skpwni" value="<?= $pindahdatang->desa->name ?>" readonly>
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