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
                <h4 class="page-title">EDIT DATA JENIS POPULASI TERNAK</h4>
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
                    <form action="<?= route('jenis-populasi-ternak.update', $jenispopulasiternak['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div class="form-group row">
                                <label for="kgjenispopulasiternak_id" class="col-sm-3 text-end control-label col-form-label">Jenis Ternak</label>
                                <div class="col-sm-9">
                                    <select name="kgjenispopulasiternak_id" class="form-control">
                                        @foreach($kgjenispopulasiternak as $kgjenispopulasiternak)
                                        <option value="{{ $kgjenispopulasiternak->id }}" @if(old('kgjenispopulasiternak')==$kgjenispopulasiternak->id || $kgjenispopulasiternak->id == $jenispopulasiternak->kgjenispopulasiternak_id) selected @endif>{{ $kgjenispopulasiternak->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlahpemilik" class="col-sm-3 text-end control-label col-form-label">Jumlah Pemilik (Orang)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlahpemilik" name="jumlahpemilik" value="<?= $jenispopulasiternak->jumlahpemilik ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="perkiraanjumlah" class="col-sm-3 text-end control-label col-form-label">Perkiraan Jumlah Populasi (Ekor)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="perkiraanjumlah" name="perkiraanjumlah" value="<?= $jenispopulasiternak->perkiraanjumlah ?>" required>
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