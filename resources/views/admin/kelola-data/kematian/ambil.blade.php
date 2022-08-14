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
                <h4 class="page-title">TAMBAH DATA KEMATIAN</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kelola Data</li>
                            <li class="breadcrumb-item active" aria-current="page">Data Kematian</li>
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
        <form class="form-horizontal" action="<?= route('keloladata-datakematian.store') ?>" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <h5 class="card-title"><a href="javascript:history.back()" class="btn btn-primary">Kembali</a></h5>
                @foreach($datapenduduk as $datapdk)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="NIK" class="col-sm-4 text-end control-label col-form-label">NIK</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="NIK" name="NIK" value="{{ $datapdk->NIK }}" readonly>
                                    @if ($errors->has('NIK'))
                                    <span class="text-danger">{{ $errors->first('NIK') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_KK" class="col-sm-4 text-end control-label col-form-label">No KK</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" value="{{ $datapdk->NOKK }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 text-end control-label col-form-label">Nama Lengkap</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $datapdk->name }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jeniskelamin" class="col-sm-4 text-end control-label col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" name="jeniskelamin_id" value="{{ $datapdk->jeniskelamin->name }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tempatlahir" class="col-sm-4 text-end control-label col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" value="{{ $datapdk->tempatlahir }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggallahir" class="col-sm-4 text-end control-label col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" value="{{ date("m/d/Y", $time = strtotime($datapdk->tanggallahir)) }}" readonly>
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
                                    <label for="nama_ayah" class="col-sm-4 text-end control-label col-form-label">Nama Ayah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" value="{{ $datapdk->nama_ayah }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_ibu" class="col-sm-4 text-end control-label col-form-label">Nama Ibu</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" value="{{ $datapdk->nama_ibu }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal_meninggal" class="col-sm-4 text-end control-label col-form-label">Tanggal Meninggal</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="datepicker-autoclose" value="{{ old('tanggal_meninggal') }}" name="tanggal_meninggal" placeholder="mm/dd/yyyy">
                                            <div class="input-group-append">
                                                <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                        @if ($errors->has('tanggal_meninggal'))
                                        <span class="text-danger">{{ $errors->first('tanggal_meninggal') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tempat_meninggal" class="col-sm-4 text-end control-label col-form-label">Tempat Meninggal</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="tempat_meninggal" name="tempat_meninggal" value={{ old('tempat_meninggal') }}>
                                        @if ($errors->has('tempat_meninggal'))
                                        <span class="text-danger">{{ $errors->first('tempat_meninggal') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sebab_meninggal" class="col-sm-4 text-end control-label col-form-label">Sebab Meninggal</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="sebab_meninggal" name="sebab_meninggal" value={{ old('sebab_meninggal') }}>
                                        @if ($errors->has('sebab_meninggal'))
                                        <span class="text-danger">{{ $errors->first('sebab_meninggal') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_id" class="col-sm-4 text-end control-label col-form-label">Alamat</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="alamat_id" name="alamat_id" value="<?= $datapdk->alamat->name ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="rt" class="col-sm-4 text-end control-label col-form-label">RT</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="rt" name="rt" value="<?= $datapdk->rt ?>" readonly>
                                    </div>
                                    <label for="rw" class="col-sm-2 text-end control-label col-form-label">RW</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="rw" name="rw" value="<?= $datapdk->rw ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="desa_id" class="col-sm-4 text-end control-label col-form-label">Desa</label>
                                    <div class="col-sm-8">
                                        <select name="desa_id" class="select2 form-select shadow-none">
                                            @foreach($desa_id as $desa_id)
                                            <option value="{{ $desa_id->id }}" @if(old('desa_id')==$desa_id->id || $desa_id->id == $datapdk->desa_id) selected @endif>{{ $desa_id->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" value="Kirim" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
    </form>
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

<script>
    /*datwpicker*/
    jQuery('.mydatepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    var quill = new Quill('#editor', {
        theme: 'snow'
    });
</script>

@endsection