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
                <h4 class="page-title">EDIT DATA SARANA TRANSPORTASI DARAT</h4>
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
                    <form action="<?= route('sarana-darat-admin.update', $saranadarat['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div id="hidden" style="display: none;">
                                <input type="text" class="form-control" id="desa_id" name="desa_id" value="<?= $saranadarat->desa_id ?>" required>
                            </div>
                            <div class="form-group row">
                                <label for="kgsaranadarat_id" class="col-sm-3 text-end control-label col-form-label">Jenis Sarana</label>
                                <div class="col-sm-9">
                                    <select name="kgsaranadarat_id" class="form-control">
                                        @foreach($kgsaranadarat as $kgsaranadarat)
                                        <option value="{{ $kgsaranadarat->id }}" @if(old('kgsaranadarat')==$kgsaranadarat->id || $kgsaranadarat->id == $saranadarat->kgsaranadarat_id) selected @endif>{{ $kgsaranadarat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="keberadaan" class="col-sm-3 text-end control-label col-form-label">Keberadaan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="keberadaan">
                                        <option {{old('keberadaan',$saranadarat->keberadaan)=="Tidak Ada"? 'selected':''}} value="Tidak Ada">Tidak Ada</option>
                                        <option {{old('keberadaan',$saranadarat->keberadaan)=="Ada"? 'selected':''}} value="Ada">Ada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah" class="col-sm-3 text-end control-label col-form-label">Jumlah</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $saranadarat->jumlah ?>" placeholder="Lewati jika Tidak Ada">
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