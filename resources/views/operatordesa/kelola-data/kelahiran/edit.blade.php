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
                <h4 class="page-title">EDIT DATA KELAHIRAN</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kelola Data</li>
                            <li class="breadcrumb-item active" aria-current="page">Data Kelahiran</li>
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
                    <form class="form-horizontal" action="<?= route('keloladata-datakelahirandesa.update', $datakelahiran['id']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="NOKK" class="col-sm-4 text-end control-label col-form-label">NO KK</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="NOKK" name="NOKK" value="<?= $datakelahiran->NOKK ?>">
                                    @if ($errors->has('NOKK'))
                                    <span class="text-danger">{{ $errors->first('NOKK') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="NIK" class="col-sm-4 text-end control-label col-form-label">Nama KK</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_KK" name="nama_KK" value="<?= $datakelahiran->nama_KK ?>">
                                    @if ($errors->has('nama_KK'))
                                    <span class="text-danger">{{ $errors->first('nama_KK') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 text-end control-label col-form-label">Nama Bayi</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" name="name" value="<?= $datakelahiran->name ?>">
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jeniskelamin" class="col-sm-4 text-end control-label col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <select name="jeniskelamin_id" class="select2 form-select shadow-none">
                                        @foreach($jeniskelamin_id as $jeniskelamin_id)
                                        <option value="{{ $jeniskelamin_id->id }}" @if(old('jeniskelamin_id')==$jeniskelamin_id->id || $jeniskelamin_id->id == $datakelahiran->jeniskelamin_id) selected @endif>{{ $jeniskelamin_id->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tempatlahir" class="col-sm-4 text-end control-label col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" value="<?= $datakelahiran->tempatlahir ?>">
                                    @if ($errors->has('tempatlahir'))
                                    <span class="text-danger">{{ $errors->first('tempatlahir') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggallahir" class="col-sm-4 text-end control-label col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="datepicker-autoclose" name="tanggallahir" placeholder="mm/dd/yyyy" value="<?= date("m/d/Y", $time = strtotime($datakelahiran->tanggallahir)); ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                    @if ($errors->has('tanggallahir'))
                                    <span class="text-danger">{{ $errors->first('tanggallahir') }}</span>
                                    @endif
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
                                <label for="golongandarah_id" class="col-sm-4 text-end control-label col-form-label">Golongan Darah</label>
                                <div class="col-sm-8">
                                    <select name="golongandarah_id" id="golongandarah_id" class="select2 form-select shadow-none" style="width: 100%; height:36px;" required>
                                        @foreach($golongandarah_id as $golongandarah_id)
                                        <option value="{{ $golongandarah_id->id }}" @if(old('golongandarah_id')==$golongandarah_id->id || $golongandarah_id->id == $datakelahiran->golongandarah_id) selected @endif>{{ $golongandarah_id->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('golongandarah_id'))
                                    <span class="text-danger">{{ $errors->first('golongandarah_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_ayah" class="col-sm-4 text-end control-label col-form-label">Nama Ayah</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= $datakelahiran->nama_ayah ?>">
                                    @if ($errors->has('nama_ayah'))
                                    <span class="text-danger">{{ $errors->first('nama_ayah') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_ibu" class="col-sm-4 text-end control-label col-form-label">Nama Ibu</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= $datakelahiran->nama_ibu ?>">
                                    @if ($errors->has('nama_ibu'))
                                    <span class="text-danger">{{ $errors->first('nama_ibu') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat_id" class="col-sm-4 text-end control-label col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <select name="alamat_id" class="select2 form-select shadow-none">
                                        @foreach($alamat_id as $alamat_id)
                                        <option value="{{ $alamat_id->id }}" @if(old('alamat_id')==$alamat_id->id || $alamat_id->id == $datakelahiran->alamat_id) selected @endif>{{ $alamat_id->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rt" class="col-sm-4 text-end control-label col-form-label">RT</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="rt">
                                        <option value="1" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '1' ? 'selected' : '' }}>
                                            1
                                        </option>
                                        <option value="2" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '2' ? 'selected' : '' }}>
                                            2
                                        </option>
                                        <option value="3" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '3' ? 'selected' : '' }}>
                                            3
                                        </option>
                                        <option value="4" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '4' ? 'selected' : '' }}>
                                            4
                                        </option>
                                        <option value="5" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '5' ? 'selected' : '' }}>
                                            5
                                        </option>
                                        <option value="6" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '6' ? 'selected' : '' }}>
                                            6
                                        </option>
                                        <option value="7" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '7' ? 'selected' : '' }}>
                                            7
                                        </option>
                                        <option value="8" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '8' ? 'selected' : '' }}>
                                            8
                                        </option>
                                        <option value="9" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '9' ? 'selected' : '' }}>
                                            9
                                        </option>
                                        <option value="10" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '10' ? 'selected' : '' }}>
                                            10
                                        </option>
                                        <option value="11" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '11' ? 'selected' : '' }}>
                                            11
                                        </option>
                                        <option value="12" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '12' ? 'selected' : '' }}>
                                            12
                                        </option>
                                        <option value="13" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '13' ? 'selected' : '' }}>
                                            13
                                        </option>
                                        <option value="14" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '14' ? 'selected' : '' }}>
                                            14
                                        </option>
                                        <option value="15" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '15' ? 'selected' : '' }}>
                                            15
                                        </option>
                                        <option value="16" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '16' ? 'selected' : '' }}>
                                            16
                                        </option>
                                        <option value="17" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '17' ? 'selected' : '' }}>
                                            17
                                        </option>
                                        <option value="18" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '18' ? 'selected' : '' }}>
                                            18
                                        </option>
                                        <option value="19" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '19' ? 'selected' : '' }}>
                                            19
                                        </option>
                                        <option value="20" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '20' ? 'selected' : '' }}>
                                            20
                                        </option>
                                        <option value="21" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '21' ? 'selected' : '' }}>
                                            21
                                        </option>
                                        <option value="22" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '22' ? 'selected' : '' }}>
                                            22
                                        </option>
                                        <option value="23" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '23' ? 'selected' : '' }}>
                                            23
                                        </option>
                                        <option value="24" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '24' ? 'selected' : '' }}>
                                            24
                                        </option>
                                        <option value="25" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '25' ? 'selected' : '' }}>
                                            25
                                        </option>
                                        <option value="26" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '26' ? 'selected' : '' }}>
                                            26
                                        </option>
                                        <option value="27" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '27' ? 'selected' : '' }}>
                                            27
                                        </option>
                                        <option value="28" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '28' ? 'selected' : '' }}>
                                            28
                                        </option>
                                        <option value="29" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '29' ? 'selected' : '' }}>
                                            29
                                        </option>
                                        <option value="30" {{ old('rt', isset($datakelahiran->rt) ? $datakelahiran->rt : '') == '30' ? 'selected' : '' }}>
                                            30
                                        </option>
                                    </select>
                                </div>
                                <label for="rw" class="col-sm-2 text-end control-label col-form-label">RW</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="rw">
                                        <option value="1" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '1' ? 'selected' : '' }}>
                                            1
                                        </option>
                                        <option value="2" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '2' ? 'selected' : '' }}>
                                            2
                                        </option>
                                        <option value="3" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '3' ? 'selected' : '' }}>
                                            3
                                        </option>
                                        <option value="4" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '4' ? 'selected' : '' }}>
                                            4
                                        </option>
                                        <option value="5" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '5' ? 'selected' : '' }}>
                                            5
                                        </option>
                                        <option value="6" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '6' ? 'selected' : '' }}>
                                            6
                                        </option>
                                        <option value="7" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '7' ? 'selected' : '' }}>
                                            7
                                        </option>
                                        <option value="8" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '8' ? 'selected' : '' }}>
                                            8
                                        </option>
                                        <option value="9" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '9' ? 'selected' : '' }}>
                                            9
                                        </option>
                                        <option value="10" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '10' ? 'selected' : '' }}>
                                            10
                                        </option>
                                        <option value="11" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '11' ? 'selected' : '' }}>
                                            11
                                        </option>
                                        <option value="12" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '12' ? 'selected' : '' }}>
                                            12
                                        </option>
                                        <option value="13" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '13' ? 'selected' : '' }}>
                                            13
                                        </option>
                                        <option value="14" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '14' ? 'selected' : '' }}>
                                            14
                                        </option>
                                        <option value="15" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '15' ? 'selected' : '' }}>
                                            15
                                        </option>
                                        <option value="16" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '16' ? 'selected' : '' }}>
                                            16
                                        </option>
                                        <option value="17" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '17' ? 'selected' : '' }}>
                                            17
                                        </option>
                                        <option value="18" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '18' ? 'selected' : '' }}>
                                            18
                                        </option>
                                        <option value="19" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '19' ? 'selected' : '' }}>
                                            19
                                        </option>
                                        <option value="20" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '20' ? 'selected' : '' }}>
                                            20
                                        </option>
                                        <option value="21" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '21' ? 'selected' : '' }}>
                                            21
                                        </option>
                                        <option value="22" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '22' ? 'selected' : '' }}>
                                            22
                                        </option>
                                        <option value="23" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '23' ? 'selected' : '' }}>
                                            23
                                        </option>
                                        <option value="24" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '24' ? 'selected' : '' }}>
                                            24
                                        </option>
                                        <option value="25" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '25' ? 'selected' : '' }}>
                                            25
                                        </option>
                                        <option value="26" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '26' ? 'selected' : '' }}>
                                            26
                                        </option>
                                        <option value="27" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '27' ? 'selected' : '' }}>
                                            27
                                        </option>
                                        <option value="28" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '28' ? 'selected' : '' }}>
                                            28
                                        </option>
                                        <option value="29" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '29' ? 'selected' : '' }}>
                                            29
                                        </option>
                                        <option value="30" {{ old('rw', isset($datakelahiran->rw) ? $datakelahiran->rw : '') == '30' ? 'selected' : '' }}>
                                            30
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="desa_id" class="col-sm-4 text-end control-label col-form-label">Desa</label>
                                <div class="col-sm-8">
                                    <select name="desa_id" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                        <?php foreach ($desa_id as $did) : ?>
                                            <option value="{{ $did->id }}">{{ $did->name }}</option>
                                        <?php endforeach ?>
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