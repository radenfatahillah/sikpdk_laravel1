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
                <h4 class="page-title">EDIT DATA PERANGKAT DESA</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
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
                    <form action="<?= route('perangkat-desa.update', $perangkatdesa['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div id="hidden" style="display: none;">
                                <input type="text" class="form-control" id="desa_id" name="desa_id" value="<?= $perangkatdesa->desa_id ?>" required>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 text-end control-label col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" value="<?= $perangkatdesa->name ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nip" class="col-sm-3 text-end control-label col-form-label">NIP</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nip" name="nip" value="<?= $perangkatdesa->nip ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jabatan" class="col-sm-3 text-end control-label col-form-label">Jabatan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="jabatan">
                                        <option {{old('jabatan',$perangkatdesa->jabatan)=="Kepala Desa/Lurah"? 'selected':''}} value="Kepala Desa/Lurah">Kepala Desa/Lurah</option>
                                        <option {{old('jabatan',$perangkatdesa->jabatan)=="Sekretaris Desa"? 'selected':''}} value="Sekretaris Desa">Sekretaris Desa</option>
                                        <option {{old('jabatan',$perangkatdesa->jabatan)=="Kepala Seksi Pemerintahan"? 'selected':''}} value="Kepala Seksi Pemerintahan">Kepala Seksi Pemerintahan</option>
                                        <option {{old('jabatan',$perangkatdesa->jabatan)=="Kepala Seksi Kesejahteraan Rakyat"? 'selected':''}} value="Kepala Seksi Kesejahteraan Rakyat">Kepala Seksi Kesejahteraan Rakyat</option>
                                        <option {{old('jabatan',$perangkatdesa->jabatan)=="Kepala Seksi Pelayanan"? 'selected':''}} value="Kepala Seksi Pelayanan">Kepala Seksi Pelayanan</option>
                                        <option {{old('jabatan',$perangkatdesa->jabatan)=="Kepala Urusan Tata Usaha dan Umum"? 'selected':''}} value="Kepala Urusan Tata Usaha dan Umum">Kepala Urusan Tata Usaha dan Umum</option>
                                        <option {{old('jabatan',$perangkatdesa->jabatan)=="Kepala Urusan Keuangan"? 'selected':''}} value="Kepala Urusan Keuangan">Kepala Urusan Keuangan</option>
                                        <option {{old('jabatan',$perangkatdesa->jabatan)=="Kepala Urusan Perencanaan"? 'selected':''}} value="Kepala Urusan Perencanaan">Kepala Urusan Perencanaan</option>
                                        <option {{old('jabatan',$perangkatdesa->jabatan)=="Staf"? 'selected':''}} value="Staf">Staf</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pendidikan" class="col-sm-3 text-end control-label col-form-label">Pendidikan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="pendidikan">
                                        <option {{old('pendidikan',$perangkatdesa->pendidikan)=="SD"? 'selected':''}} value="SD">SD</option>
                                        <option {{old('pendidikan',$perangkatdesa->pendidikan)=="SMP"? 'selected':''}} value="SMP">SMP</option>
                                        <option {{old('pendidikan',$perangkatdesa->pendidikan)=="SMA"? 'selected':''}} value="SMA">SMA</option>
                                        <option {{old('pendidikan',$perangkatdesa->pendidikan)=="DIPLOMA"? 'selected':''}} value="DIPLOMA">DIPLOMA</option>
                                        <option {{old('pendidikan',$perangkatdesa->pendidikan)=="S1"? 'selected':''}} value="S1">S1</option>
                                        <option {{old('pendidikan',$perangkatdesa->pendidikan)=="S2"? 'selected':''}} value="S2">S2</option>
                                        <option {{old('pendidikan',$perangkatdesa->pendidikan)=="S3"? 'selected':''}} value="S3">S3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-sm-3 text-end control-label col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="status">
                                        <option {{old('status',$perangkatdesa->status)=="Ada"? 'selected':''}} value="Ada">Ada</option>
                                        <option {{old('status',$perangkatdesa->status)=="Ada - Aktif"? 'selected':''}} value="Ada - Aktif">Ada - Aktif</option>
                                        <option {{old('status',$perangkatdesa->status)=="Ada - Tidak Aktif"? 'selected':''}} value="Ada - Tidak Aktif">Ada - Tidak Aktif</option>
                                        <option {{old('status',$perangkatdesa->status)=="Tidak Ada"? 'selected':''}} value="Tidak Ada">Tidak Ada</option>
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