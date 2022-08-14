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
                <h4 class="page-title">EDIT DATA PINDAH KELUAR</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kelola Data</li>
                            <li class="breadcrumb-item active" aria-current="page">Data Pindah Keluar</li>
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
        @foreach($datapenduduk as $datapdk)
        <div class="row">
            <h5 class="card-title"><a href="javascript:history.back()" class="btn btn-primary">Kembali</a></h5>
            <div class="col-md-6">
                <div class="card">
                    <form action="<?= route('keloladata-datapindahkeluardesa.update', $pindahkeluar['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="NIK" class="col-sm-4 text-end control-label col-form-label">NIK</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="NIK" name="NIK" value="<?= $datapdk->NIK ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="NOKK" class="col-sm-4 text-end control-label col-form-label">NO KK</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="NOKK" name="NOKK" value="{{ $datapdk->NOKK }}" readonly>
                                    @if ($errors->has('NOKK'))
                                    <span class="text-danger">{{ $errors->first('NOKK') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 text-end control-label col-form-label">Nama Lengkap</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" style="text-transform:uppercase" id="name" name="name" value="{{ $datapdk->name }}" readonly>
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jeniskelamin_id" class="col-sm-4 text-end control-label col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" style="text-transform:uppercase" id="jeniskelamin_id" name="jeniskelamin_id" value="{{ $datapdk->jeniskelamin->name }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tempatlahir" class="col-sm-4 text-end control-label col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" style="text-transform:uppercase" id="tempatlahir" name="tempatlahir" value="<?= $datapdk->tempatlahir ?>" readonly>
                                    @if ($errors->has('tempatlahir'))
                                    <span class="text-danger">{{ $errors->first('tempatlahir') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggallahir" class="col-sm-4 text-end control-label col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="tanggallahir" placeholder="mm/dd/yyyy" value="<?= date("m/d/Y", $time = strtotime($pindahkeluar->tanggallahir)); ?>" readonly>
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
                                <label for="nama_ayah" class="col-sm-4 text-end control-label col-form-label">Nama Ayah</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= $datapdk->nama_ayah ?>" readonly>
                                    @if ($errors->has('nama_ayah'))
                                    <span class="text-danger">{{ $errors->first('nama_ayah') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_ibu" class="col-sm-4 text-end control-label col-form-label">Nama Ibu</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= $datapdk->nama_ibu ?>" readonly>
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
                                <label for="no_skpwni" class="col-sm-4 text-end control-label col-form-label">NO SKPWNI</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="no_skpwni" name="no_skpwni" value="<?= $pindahkeluar->no_skpwni ?>">
                                    @if ($errors->has('no_skpwni'))
                                    <span class="text-danger">{{ $errors->first('no_skpwni') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="klasifikasipindah_id" class="col-sm-4 text-end control-label col-form-label">Klasifikasi Pindah</label>
                                <div class="col-sm-8">
                                    <select name="klasifikasipindah_id" class="select2 form-select shadow-none">
                                        @foreach($klasifikasipindah_id as $klasifikasipindah_id)
                                        <option value="{{ $klasifikasipindah_id->id }}" @if(old('klasifikasipindah_id')==$klasifikasipindah_id->id || $klasifikasipindah_id->id == $pindahkeluar->klasifikasipindah_id) selected @endif>{{ $klasifikasipindah_id->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal" class="col-sm-4 text-end control-label col-form-label">Tanggal Surat</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="datepicker-autoclose" name="tanggal" value="<?= date("m/d/Y", $time = strtotime($pindahkeluar->tanggal)); ?>">
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
                                <label for="alamat_sekarang" class="col-sm-4 text-end control-label col-form-label">Alamat Sekarang</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" id="alamat_sekarang" name="alamat_sekarang" rows="4" cols="50"><?= $pindahkeluar->alamat_sekarang ?></textarea>
                                    @if ($errors->has('alamat_sekarang'))
                                    <span class="text-danger">{{ $errors->first('alamat_sekarang') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat_id" class="col-sm-4 text-end control-label col-form-label">Alamat Asal</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= $datapdk->alamat->name ?>" readonly>
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
                                    <input type="text" class="form-control" id="desa_id" name="desa_id" value="<?= $datapdk->desa->name ?>" readonly>
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
            </div>
        </div>
        @endforeach
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
</div>

<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

@endsection