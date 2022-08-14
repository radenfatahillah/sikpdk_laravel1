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
                <h4 class="page-title">EDIT DATA KEHUTANAN</h4>
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
                    <form action="<?= route('kehutanan.update', $kehutanan['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div class="form-group row">
                                <label for="kgkehutanan_id" class="col-sm-3 text-end control-label col-form-label">Jenis</label>
                                <div class="col-sm-9">
                                    <select name="kgkehutanan_id" class="form-control">
                                        @foreach($kgkehutanan as $kgkehutanan)
                                        <option value="{{ $kgkehutanan->id }}" @if(old('kgkehutanan')==$kgkehutanan->id || $kgkehutanan->id == $kehutanan->kgkehutanan_id) selected @endif>{{ $kgkehutanan->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="miliknegara" class="col-sm-3 text-end control-label col-form-label">Milik Negara (Ha)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="miliknegara" name="miliknegara" value="<?= $kehutanan->miliknegara ?>" required>
                                </div>
                            </div>                         
                            <div class="form-group row">
                                <label for="perhutani" class="col-sm-3 text-end control-label col-form-label">Perhutani/Instansi Sektoral (Ha)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="perhutani" name="perhutani" value="<?= $kehutanan->perhutani ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="milikadat" class="col-sm-3 text-end control-label col-form-label">Milik Adat/Ulayat (Ha)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="milikadat" name="milikadat" value="<?= $kehutanan->milikadat ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="milikmasyarakat" class="col-sm-3 text-end control-label col-form-label">Milik Masyarakat Perorangan (Ha)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="milikmasyarakat" name="milikmasyarakat" value="<?= $kehutanan->milikmasyarakat ?>" required>
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