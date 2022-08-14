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
                <h4 class="page-title">LIHAT DATA PENDUDUK</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kelola Data</li>
                            <li class="breadcrumb-item active" aria-current="page">Data Penduduk</li>
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
                                <input type="text" class="form-control" id="NIK" name="NIK" value="<?= $datapenduduk->NIK ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="NOKK" class="col-sm-4 text-end control-label col-form-label">NO KK</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="NOKK" name="NOKK" value="<?= $datapenduduk->NOKK ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 text-end control-label col-form-label">Nama Lengkap</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" style="text-transform:uppercase" id="name" name="name" value="<?= $datapenduduk->name ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jeniskelamin_id" class="col-sm-4 text-end control-label col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" style="text-transform:uppercase" id="jeniskelamin_id" name="jeniskelamin_id" value="<?= $datapenduduk->jeniskelamin->name ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempatlahir" class="col-sm-4 text-end control-label col-form-label">Tempat Lahir</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" style="text-transform:uppercase" id="tempatlahir" name="tempatlahir" value="<?= $datapenduduk->tempatlahir ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggallahir" class="col-sm-4 text-end control-label col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" style="text-transform:uppercase" id="tempatlahir" name="tempatlahir" value="<?= date("m/d/Y", $time = strtotime($datapenduduk->tanggallahir)); ?>" readonly>
                                    <div class="input-group-append">
                                        <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="agama_id" class="col-sm-4 text-end control-label col-form-label">Agama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="penyandangcacat_id" name="penyandangcacat_id" value="<?= $datapenduduk->agama->name ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pendidikan_kk_id" class="col-sm-4 text-end control-label col-form-label">Pendidikan dalam KK</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="penyandangcacat_id" name="penyandangcacat_id" value="<?= $datapenduduk->pendidikan_kk->name ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pendidikan_sedang_id" class="col-sm-4 text-end control-label col-form-label">Pendidikan Sedang Tempuh</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="penyandangcacat_id" name="penyandangcacat_id" value="<?= $datapenduduk->pendidikan_sedang->name ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenispekerjaan_id" class="col-sm-4 text-end control-label col-form-label">Jenis Pekerjaan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="penyandangcacat_id" name="penyandangcacat_id" value="<?= $datapenduduk->jenispekerjaan->name ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="golongandarah_id" class="col-sm-4 text-end control-label col-form-label">Golongan Darah</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="penyandangcacat_id" name="penyandangcacat_id" value="<?= $datapenduduk->golongandarah->name ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="statusperkawinan_id" class="col-sm-4 text-end control-label col-form-label">Status Perkawinan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="penyandangcacat_id" name="penyandangcacat_id" value="<?= $datapenduduk->statusperkawinan->name ?>" readonly>
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
                                <label for="etnis_id" class="col-sm-4 text-end control-label col-form-label">Etnis</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="penyandangcacat_id" name="penyandangcacat_id" value="<?= $datapenduduk->etnis->name ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="shdk_id" class="col-sm-4 text-end control-label col-form-label">SHDK</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="penyandangcacat_id" name="penyandangcacat_id" value="<?= $datapenduduk->shdk->name ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kewarganegaraan_id" class="col-sm-4 text-end control-label col-form-label">Kewarganegaraan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="penyandangcacat_id" name="penyandangcacat_id" value="<?= $datapenduduk->kewarganegaraan->name ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_paspor" class="col-sm-4 text-end control-label col-form-label">No. Paspor</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="no_paspor" name="no_paspor" value="<?= $datapenduduk->no_paspor ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_kitap" class="col-sm-4 text-end control-label col-form-label">No. KITAP</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="no_kitap" name="no_kitap" value="<?= $datapenduduk->no_kitap ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_ayah" class="col-sm-4 text-end control-label col-form-label">Nama Ayah</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= $datapenduduk->nama_ayah ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_ibu" class="col-sm-4 text-end control-label col-form-label">Nama Ibu</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= $datapenduduk->nama_ibu ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat_id" class="col-sm-4 text-end control-label col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="alamat_id" name="alamat_id" value="<?= $datapenduduk->alamat->name ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rt" class="col-sm-4 text-end control-label col-form-label">RT</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="rt" name="rt" value="<?= $datapenduduk->rt ?>" readonly>
                                </div>
                                <label for="rw" class="col-sm-2 text-end control-label col-form-label">RW</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="rw" name="rw" value="<?= $datapenduduk->rw ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="desa_id" class="col-sm-4 text-end control-label col-form-label">Desa</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="desa_id" name="desa_id" value="<?= $datapenduduk->desa->name ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="penyandangcacat_id" class="col-sm-4 text-end control-label col-form-label">Penyandang Cacat</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="penyandangcacat_id" name="penyandangcacat_id" value="<?= $datapenduduk->penyandangcacat->name ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ktpel_id" class="col-sm-4 text-end control-label col-form-label">KTP-el</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="ktpel_id" name="ktpel_id" value="<?= $datapenduduk->ktpel->name ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-sm-4 text-end control-label col-form-label">Status</label>
                                <div class="col-sm-8">
                                    @if($datapenduduk->status == 1)
                                    <input type="text" class="form-control" id="status" name="status" value="Ada" readonly>
                                    @elseif ($datapenduduk->status == 2)
                                    <input type="text" class="form-control" id="status" name="status" value="Meninggal" readonly>
                                    @elseif ($datapenduduk->status == 3)
                                    <input type="text" class="form-control" id="status" name="status" value="Pindah Datang" readonly>
                                    @elseif ($datapenduduk->status == 4)
                                    <input type="text" class="form-control" id="status" name="status" value="Pindah Keluar" readonly>
                                    @endif
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