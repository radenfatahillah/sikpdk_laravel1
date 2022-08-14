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
                <h4 class="page-title">EDIT DATA PERANGKAT BPD</h4>
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
                    <form action="<?= route('bpd-desa-admin.update', $bpddesa['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div id="hidden" style="display: none;">
                                <input type="text" class="form-control" id="desa_id" name="desa_id" value="<?= $bpddesa->desa_id ?>" required>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 text-end control-label col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" value="<?= $bpddesa->name ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jabatan" class="col-sm-3 text-end control-label col-form-label">Jabatan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="jabatan">
                                        <option {{old('jabatan',$bpddesa->jabatan)=="Ketua"? 'selected':''}} value="Ketua">Ketua</option>
                                        <option {{old('jabatan',$bpddesa->jabatan)=="Wakil Ketua"? 'selected':''}} value="Wakil Ketua">Wakil Ketua</option>
                                        <option {{old('jabatan',$bpddesa->jabatan)=="Sekretaris"? 'selected':''}} value="Sekretaris">Sekretaris</option>
                                        <option {{old('jabatan',$bpddesa->jabatan)=="Anggota"? 'selected':''}} value="Anggota">Anggota</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pendidikan" class="col-sm-3 text-end control-label col-form-label">Pendidikan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="pendidikan">
                                        <option {{old('pendidikan',$bpddesa->pendidikan)=="SD"? 'selected':''}} value="SD">SD</option>
                                        <option {{old('pendidikan',$bpddesa->pendidikan)=="SMP"? 'selected':''}} value="SMP">SMP</option>
                                        <option {{old('pendidikan',$bpddesa->pendidikan)=="SMA"? 'selected':''}} value="SMA">SMA</option>
                                        <option {{old('pendidikan',$bpddesa->pendidikan)=="DIPLOMA"? 'selected':''}} value="DIPLOMA">DIPLOMA</option>
                                        <option {{old('pendidikan',$bpddesa->pendidikan)=="S1"? 'selected':''}} value="S1">S1</option>
                                        <option {{old('pendidikan',$bpddesa->pendidikan)=="S2"? 'selected':''}} value="S2">S2</option>
                                        <option {{old('pendidikan',$bpddesa->pendidikan)=="S3"? 'selected':''}} value="S3">S3</option>
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