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
                <h4 class="page-title">EDIT DATA TINGKAT PARTISIPASI POLITIK</h4>
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
                    <form action="<?= route('tingkat-partisipasi-politik-admin.update', $tingkatpartisipasipolitik['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div id="hidden" style="display: none;">
                                <input type="text" class="form-control" id="desa_id" name="desa_id" value="<?= $tingkatpartisipasipolitik->desa_id ?>" required>
                            </div>
                            <div class="form-group row">
                                <label for="kgtingkatpartisipasipolitik_id" class="col-sm-3 text-end control-label col-form-label">Jenis</label>
                                <div class="col-sm-9">
                                    <select name="kgtingkatpartisipasipolitik_id" class="form-control">
                                        @foreach($kgtingkatpartisipasipolitik as $kgtingkatpartisipasipolitik)
                                        <option value="{{ $kgtingkatpartisipasipolitik->id }}" @if(old('kgtingkatpartisipasipolitik')==$kgtingkatpartisipasipolitik->id || $kgtingkatpartisipasipolitik->id == $tingkatpartisipasipolitik->kgtingkatpartisipasipolitik_id) selected @endif>{{ $kgtingkatpartisipasipolitik->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="punyahakpilih_lakilaki" class="col-sm-3 text-end control-label col-form-label">Yang Sudah Punya Hak Pilih Laki-Laki</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="punyahakpilih_lakilaki" name="punyahakpilih_lakilaki" value="<?= $tingkatpartisipasipolitik->punyahakpilih_lakilaki ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="punyahakpilih_perempuan" class="col-sm-3 text-end control-label col-form-label">Yang Sudah Punya Hak Pilih Perempuan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="punyahakpilih_perempuan" name="punyahakpilih_perempuan" value="<?= $tingkatpartisipasipolitik->punyahakpilih_perempuan ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="manfaathakpilih_lakilaki" class="col-sm-3 text-end control-label col-form-label">Yang Memanfaatkan Hak Pilih Laki-Laki</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="manfaathakpilih_lakilaki" name="manfaathakpilih_lakilaki" value="<?= $tingkatpartisipasipolitik->manfaathakpilih_lakilaki ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="manfaathakpilih_perempuan" class="col-sm-3 text-end control-label col-form-label">Yang Memanfaatkan Hak Pilih Perempuan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="manfaathakpilih_perempuan" name="manfaathakpilih_perempuan" value="<?= $tingkatpartisipasipolitik->manfaathakpilih_perempuan ?>">
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