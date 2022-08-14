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
                <h4 class="page-title">EDIT DATA PINDAH DATANG</h4>
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
                    <form class="form-horizontal" action="<?= route('keloladata-datapindahdatang.update', $pindahdatang['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="NIK" class="col-sm-4 text-end control-label col-form-label">NIK</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="NIK" name="NIK" value="<?= $pindahdatang->NIK ?>">
                                    @if ($errors->has('NIK'))
                                    <span class="text-danger">{{ $errors->first('NIK') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="NOKK_asal" class="col-sm-4 text-end control-label col-form-label">NO KK Asal</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="NOKK_asal" name="NOKK_asal" value={{ $pindahdatang->NOKK_asal }}>
                                    @if ($errors->has('NOKK_asal'))
                                    <span class="text-danger">{{ $errors->first('NOKK_asal') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_KK_asal" class="col-sm-4 text-end control-label col-form-label">Nama KK Asal</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_KK_asal" name="nama_KK_asal" value={{ $pindahdatang->nama_KK_asal }}>
                                    @if ($errors->has('nama_KK_asal'))
                                    <span class="text-danger">{{ $errors->first('nama_KK_asal') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 text-end control-label col-form-label">Nama Lengkap</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" style="text-transform:uppercase" id="name" name="name" value="<?= $pindahdatang->name ?>">
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jeniskelamin_id" class="col-sm-4 text-end control-label col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <select name="jeniskelamin_id" class="select2 form-select shadow-none">
                                        @foreach($jeniskelamin_id as $jeniskelamin_id)
                                        <option value="{{ $jeniskelamin_id->id }}" @if(old('jeniskelamin_id')==$jeniskelamin_id->id || $jeniskelamin_id->id == $pindahdatang->jeniskelamin_id) selected @endif>{{ $jeniskelamin_id->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tempatlahir" class="col-sm-4 text-end control-label col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" style="text-transform:uppercase" id="tempatlahir" name="tempatlahir" value="<?= $pindahdatang->tempatlahir ?>">
                                    @if ($errors->has('tempatlahir'))
                                    <span class="text-danger">{{ $errors->first('tempatlahir') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggallahir" class="col-sm-4 text-end control-label col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="datepicker-autoclose" name="tanggallahir" placeholder="mm/dd/yyyy" value="<?= date("m/d/Y", $time = strtotime($pindahdatang->tanggallahir)); ?>">
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
                                    <select name="agama_id" class="select2 form-select shadow-none">
                                        @foreach($agama_id as $agama_id)
                                        <option value="{{ $agama_id->id }}" @if(old('agama_id')==$agama_id->id || $agama_id->id == $pindahdatang->agama_id) selected @endif>{{ $agama_id->name }}</option>
                                        @endforeach
                                    </select>
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
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= $pindahdatang->nama_ayah ?>">
                                    @if ($errors->has('nama_ayah'))
                                    <span class="text-danger">{{ $errors->first('nama_ayah') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_ibu" class="col-sm-4 text-end control-label col-form-label">Nama Ibu</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= $pindahdatang->nama_ibu ?>">
                                    @if ($errors->has('nama_ibu'))
                                    <span class="text-danger">{{ $errors->first('nama_ibu') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="klasifikasipindah_id" class="col-sm-4 text-end control-label col-form-label">Klasifikasi Pindah</label>
                                <div class="col-sm-8">
                                    <select name="klasifikasipindah_id" class="select2 form-select shadow-none">
                                        @foreach($klasifikasipindah_id as $klasifikasipindah_id)
                                        <option value="{{ $klasifikasipindah_id->id }}" @if(old('klasifikasipindah_id')==$klasifikasipindah_id->id || $klasifikasipindah_id->id == $pindahdatang->klasifikasipindah_id) selected @endif>{{ $klasifikasipindah_id->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('klasifikasipindah_id'))
                                    <span class="text-danger">{{ $errors->first('klasifikasipindah_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_skpwni" class="col-sm-4 text-end control-label col-form-label">No SKPWNI</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="no_skpwni" name="no_skpwni" value="<?= $pindahdatang->no_skpwni ?>">
                                    @if ($errors->has('no_skpwni'))
                                    <span class="text-danger">{{ $errors->first('no_skpwni') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal" class="col-sm-4 text-end control-label col-form-label">Tanggal Surat</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="datepicker-autoclose" name="tanggal" placeholder="mm/dd/yyyy" value="<?= date("m/d/Y", $time = strtotime($pindahdatang->tanggal)); ?>">
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
                                    <input type="text" class="form-control" id="alamat_asal" name="alamat_asal" value="<?= $pindahdatang->alamat_asal ?>">
                                    @if ($errors->has('alamat_asal'))
                                    <span class="text-danger">{{ $errors->first('alamat_asal') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat_id" class="col-sm-4 text-end control-label col-form-label">Alamat Sekarang</label>
                                <div class="col-sm-8">
                                    <select name="alamat_id" class="select2 form-select shadow-none">
                                        @foreach($alamat_id as $alamat_id)
                                        <option value="{{ $alamat_id->id }}" @if(old('alamat_id')==$alamat_id->id || $alamat_id->id == $pindahdatang->alamat_id) selected @endif>{{ $alamat_id->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rt" class="col-sm-4 text-end control-label col-form-label">RT</label>
                                <div class="col-sm-3">
                                    <select class="select2 form-select shadow-none" name="rt">
                                        <option value="1" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '1' ? 'selected' : '' }}>
                                            1
                                        </option>
                                        <option value="2" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '2' ? 'selected' : '' }}>
                                            2
                                        </option>
                                        <option value="3" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '3' ? 'selected' : '' }}>
                                            3
                                        </option>
                                        <option value="4" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '4' ? 'selected' : '' }}>
                                            4
                                        </option>
                                        <option value="5" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '5' ? 'selected' : '' }}>
                                            5
                                        </option>
                                        <option value="6" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '6' ? 'selected' : '' }}>
                                            6
                                        </option>
                                        <option value="7" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '7' ? 'selected' : '' }}>
                                            7
                                        </option>
                                        <option value="8" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '8' ? 'selected' : '' }}>
                                            8
                                        </option>
                                        <option value="9" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '9' ? 'selected' : '' }}>
                                            9
                                        </option>
                                        <option value="10" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '10' ? 'selected' : '' }}>
                                            10
                                        </option>
                                        <option value="11" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '11' ? 'selected' : '' }}>
                                            11
                                        </option>
                                        <option value="12" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '12' ? 'selected' : '' }}>
                                            12
                                        </option>
                                        <option value="13" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '13' ? 'selected' : '' }}>
                                            13
                                        </option>
                                        <option value="14" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '14' ? 'selected' : '' }}>
                                            14
                                        </option>
                                        <option value="15" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '15' ? 'selected' : '' }}>
                                            15
                                        </option>
                                        <option value="16" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '16' ? 'selected' : '' }}>
                                            16
                                        </option>
                                        <option value="17" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '17' ? 'selected' : '' }}>
                                            17
                                        </option>
                                        <option value="18" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '18' ? 'selected' : '' }}>
                                            18
                                        </option>
                                        <option value="19" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '19' ? 'selected' : '' }}>
                                            19
                                        </option>
                                        <option value="20" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '20' ? 'selected' : '' }}>
                                            20
                                        </option>
                                        <option value="21" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '21' ? 'selected' : '' }}>
                                            21
                                        </option>
                                        <option value="22" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '22' ? 'selected' : '' }}>
                                            22
                                        </option>
                                        <option value="23" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '23' ? 'selected' : '' }}>
                                            23
                                        </option>
                                        <option value="24" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '24' ? 'selected' : '' }}>
                                            24
                                        </option>
                                        <option value="25" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '25' ? 'selected' : '' }}>
                                            25
                                        </option>
                                        <option value="26" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '26' ? 'selected' : '' }}>
                                            26
                                        </option>
                                        <option value="27" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '27' ? 'selected' : '' }}>
                                            27
                                        </option>
                                        <option value="28" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '28' ? 'selected' : '' }}>
                                            28
                                        </option>
                                        <option value="29" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '29' ? 'selected' : '' }}>
                                            29
                                        </option>
                                        <option value="30" {{ old('rt', isset($pindahdatang->rt) ? $pindahdatang->rt : '') == '30' ? 'selected' : '' }}>
                                            30
                                        </option>
                                    </select>
                                </div>
                                <label for="rw" class="col-sm-2 text-end control-label col-form-label">RW</label>
                                <div class="col-sm-3">
                                    <select class="select2 form-select shadow-none" name="rw">
                                        <option value="1" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '1' ? 'selected' : '' }}>
                                            1
                                        </option>
                                        <option value="2" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '2' ? 'selected' : '' }}>
                                            2
                                        </option>
                                        <option value="3" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '3' ? 'selected' : '' }}>
                                            3
                                        </option>
                                        <option value="4" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '4' ? 'selected' : '' }}>
                                            4
                                        </option>
                                        <option value="5" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '5' ? 'selected' : '' }}>
                                            5
                                        </option>
                                        <option value="6" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '6' ? 'selected' : '' }}>
                                            6
                                        </option>
                                        <option value="7" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '7' ? 'selected' : '' }}>
                                            7
                                        </option>
                                        <option value="8" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '8' ? 'selected' : '' }}>
                                            8
                                        </option>
                                        <option value="9" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '9' ? 'selected' : '' }}>
                                            9
                                        </option>
                                        <option value="10" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '10' ? 'selected' : '' }}>
                                            10
                                        </option>
                                        <option value="11" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '11' ? 'selected' : '' }}>
                                            11
                                        </option>
                                        <option value="12" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '12' ? 'selected' : '' }}>
                                            12
                                        </option>
                                        <option value="13" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '13' ? 'selected' : '' }}>
                                            13
                                        </option>
                                        <option value="14" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '14' ? 'selected' : '' }}>
                                            14
                                        </option>
                                        <option value="15" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '15' ? 'selected' : '' }}>
                                            15
                                        </option>
                                        <option value="16" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '16' ? 'selected' : '' }}>
                                            16
                                        </option>
                                        <option value="17" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '17' ? 'selected' : '' }}>
                                            17
                                        </option>
                                        <option value="18" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '18' ? 'selected' : '' }}>
                                            18
                                        </option>
                                        <option value="19" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '19' ? 'selected' : '' }}>
                                            19
                                        </option>
                                        <option value="20" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '20' ? 'selected' : '' }}>
                                            20
                                        </option>
                                        <option value="21" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '21' ? 'selected' : '' }}>
                                            21
                                        </option>
                                        <option value="22" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '22' ? 'selected' : '' }}>
                                            22
                                        </option>
                                        <option value="23" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '23' ? 'selected' : '' }}>
                                            23
                                        </option>
                                        <option value="24" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '24' ? 'selected' : '' }}>
                                            24
                                        </option>
                                        <option value="25" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '25' ? 'selected' : '' }}>
                                            25
                                        </option>
                                        <option value="26" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '26' ? 'selected' : '' }}>
                                            26
                                        </option>
                                        <option value="27" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '27' ? 'selected' : '' }}>
                                            27
                                        </option>
                                        <option value="28" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '28' ? 'selected' : '' }}>
                                            28
                                        </option>
                                        <option value="29" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '29' ? 'selected' : '' }}>
                                            29
                                        </option>
                                        <option value="30" {{ old('rw', isset($pindahdatang->rw) ? $pindahdatang->rw : '') == '30' ? 'selected' : '' }}>
                                            30
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="desa_id" class="col-sm-4 text-end control-label col-form-label">Desa</label>
                                <div class="col-sm-8">
                                    <select name="desa_id" class="select2 form-select shadow-none">
                                        @foreach($desa_id as $desa_id)
                                        <option value="{{ $desa_id->id }}" @if(old('desa_id')==$desa_id->id || $desa_id->id == $pindahdatang->desa_id) selected @endif>{{ $desa_id->name }}</option>
                                        @endforeach
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