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
                <h4 class="page-title">TAMBAH DATA PENDUDUK</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kelola Data</li>
                            <li class="breadcrumb-item active" aria-current="page">Data Penduduk</li>
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
                    <form class="form-horizontal" action="<?= route('keloladata-datapendudukdesa.store') ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="NIK" class="col-sm-4 text-end control-label col-form-label">NIK</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="NIK" name="NIK" value={{ old('NIK') }}>
                                    @if ($errors->has('NIK'))
                                    <span class="text-danger">{{ $errors->first('NIK') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="NOKK" class="col-sm-4 text-end control-label col-form-label">NO KK</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="NOKK" name="NOKK" value={{ old('NOKK') }}>
                                    @if ($errors->has('NOKK'))
                                    <span class="text-danger">{{ $errors->first('NOKK') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 text-end control-label col-form-label">Nama Lengkap</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" name="name" value={{ old('name') }}>
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jeniskelamin" class="col-sm-4 text-end control-label col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <select name="jeniskelamin_id" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                        <option disabled selected>Pilih</option>
                                        <?php foreach ($jeniskelamin_id as $agm) : ?>
                                            <option value="{{ $agm->id }}" {{old('jeniskelamin_id') == $agm->id ? 'selected' : ''}}>{{ $agm->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                    @if ($errors->has('jeniskelamin_id'))
                                    <span class="text-danger">{{ $errors->first('jeniskelamin_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tempatlahir" class="col-sm-4 text-end control-label col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" value={{ old('tempatlahir') }}>
                                    @if ($errors->has('tempatlahir'))
                                    <span class="text-danger">{{ $errors->first('tempatlahir') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggallahir" class="col-sm-4 text-end control-label col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="datepicker-autoclose" name="tanggallahir" value="{{ old('tanggallahir') }}" placeholder="mm/dd/yyyy">
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
                                    <select name="agama_id" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                        <option disabled selected>Pilih</option>
                                        <?php foreach ($agama_id as $agm) : ?>
                                            <option value="{{ $agm->id }}" {{old('agama_id') == $agm->id ? 'selected' : ''}}>{{ $agm->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                    @if ($errors->has('agama_id'))
                                    <span class="text-danger">{{ $errors->first('agama_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pendidikan_kk_id" class="col-sm-4 text-end control-label col-form-label">Pendidikan dalam KK</label>
                                <div class="col-sm-8">
                                    <select name="pendidikan_kk_id" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                        <option disabled selected>Pilih</option>
                                        <?php foreach ($pendidikan_kk_id as $pdk) : ?>
                                            <option value="{{ $pdk->id }}" {{old('pendidikan_kk_id') == $pdk->id ? 'selected' : ''}}>{{ $pdk->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                    @if ($errors->has('pendidikan_kk_id'))
                                    <span class="text-danger">{{ $errors->first('pendidikan_kk_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pendidikan_sedang_id" class="col-sm-4 text-end control-label col-form-label">Pendidikan Sedang Tempuh</label>
                                <div class="col-sm-8">
                                    <select name="pendidikan_sedang_id" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                        <option disabled selected>Pilih</option>
                                        <?php foreach ($pendidikan_sedang_id as $pdks) : ?>
                                            <option value="{{ $pdks->id }}" {{old('pendidikan_sedang_id') == $pdks->id ? 'selected' : ''}}>{{ $pdks->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                    @if ($errors->has('pendidikan_sedang_id'))
                                    <span class="text-danger">{{ $errors->first('pendidikan_sedang_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenispekerjaan_id" class="col-sm-4 text-end control-label col-form-label">Jenis Pekerjaan</label>
                                <div class="col-sm-8">
                                    <select name="jenispekerjaan_id" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                        <option disabled selected>Pilih</option>
                                        <?php foreach ($jenispekerjaan_id as $krj) : ?>
                                            <option value="{{ $krj->id }}" {{old('jenispekerjaan_id') == $krj->id ? 'selected' : ''}}>{{ $krj->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                    @if ($errors->has('jenispekerjaan_id'))
                                    <span class="text-danger">{{ $errors->first('jenispekerjaan_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="golongandarah_id" class="col-sm-4 text-end control-label col-form-label">Golongan Darah</label>
                                <div class="col-sm-8">
                                    <select name="golongandarah_id" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                        <option disabled selected>Pilih</option>
                                        <?php foreach ($golongandarah_id as $gld) : ?>
                                            <option value="{{ $gld->id }}" {{old('golongandarah_id') == $gld->id ? 'selected' : ''}}>{{ $gld->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                    @if ($errors->has('golongandarah_id'))
                                    <span class="text-danger">{{ $errors->first('golongandarah_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="statusperkawinan_id" class="col-sm-4 text-end control-label col-form-label">Status Perkawinan</label>
                                <div class="col-sm-8">
                                    <select name="statusperkawinan_id" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                        <option disabled selected>Pilih</option>
                                        <?php foreach ($statusperkawinan_id as $kwn) : ?>
                                            <option value="{{ $kwn->id }}" {{old('statusperkawinan_id') == $kwn->id ? 'selected' : ''}}>{{ $kwn->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                    @if ($errors->has('statusperkawinan_id'))
                                    <span class="text-danger">{{ $errors->first('statusperkawinan_id') }}</span>
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
                                <label for="etnis_id" class="col-sm-4 text-end control-label col-form-label">Etnis</label>
                                <div class="col-sm-8">
                                    <select name="etnis_id" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                        <option disabled selected>Pilih</option>
                                        <?php foreach ($etnis_id as $etn) : ?>
                                            <option value="{{ $etn->id }}" {{old('etnis_id') == $etn->id ? 'selected' : ''}}>{{ $etn->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                    @if ($errors->has('etnis_id'))
                                    <span class="text-danger">{{ $errors->first('etnis_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="shdk_id" class="col-sm-4 text-end control-label col-form-label">SHDK</label>
                                <div class="col-sm-8">
                                    <select name="shdk_id" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                        <option disabled selected>Pilih</option>
                                        <?php foreach ($shdk_id as $shdk1) : ?>
                                            <option value="{{ $shdk1->id }}" {{old('shdk_id') == $shdk1->id ? 'selected' : ''}}>{{ $shdk1->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                    @if ($errors->has('shdk_id'))
                                    <span class="text-danger">{{ $errors->first('shdk_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kewarganegaraan_id" class="col-sm-4 text-end control-label col-form-label">Kewarganegaraan</label>
                                <div class="col-sm-8">
                                    <select name="kewarganegaraan_id" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                        <option disabled selected>Pilih</option>
                                        <?php foreach ($kewarganegaraan_id as $kwr) : ?>
                                            <option value="{{ $kwr->id }}" {{old('kewarganegaraan_id') == $kwr->id ? 'selected' : ''}}>{{ $kwr->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                    @if ($errors->has('kewarganegaraan_id'))
                                    <span class="text-danger">{{ $errors->first('kewarganegaraan_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_paspor" class="col-sm-4 text-end control-label col-form-label">No. Paspor</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="no_paspor" name="no_paspor" placeholder="No. Paspor">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_kitap" class="col-sm-4 text-end control-label col-form-label">No. KITAP</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="no_kitap" name="no_kitap" placeholder="No. KITAP">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_ayah" class="col-sm-4 text-end control-label col-form-label">Nama Ayah</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value={{ old('nama_ayah') }}>
                                    @if ($errors->has('nama_ayah'))
                                    <span class="text-danger">{{ $errors->first('nama_ayah') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_ibu" class="col-sm-4 text-end control-label col-form-label">Nama Ibu</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value={{ old('nama_ibu') }}>
                                    @if ($errors->has('nama_ibu'))
                                    <span class="text-danger">{{ $errors->first('nama_ibu') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat_id" class="col-sm-4 text-end control-label col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <select name="alamat_id" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                        <option disabled selected>Pilih</option>
                                        <?php foreach ($alamat_id as $amt) : ?>
                                            <option value="{{ $amt->id }}" {{old('alamat_id') == $amt->id ? 'selected' : ''}}>{{ $amt->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                    @if ($errors->has('alamat_id'))
                                    <span class="text-danger">{{ $errors->first('alamat_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rt" class="col-sm-4 text-end control-label col-form-label">RT</label>
                                <div class="col-sm-3">
                                    <select class="select2 form-select shadow-none" name="rt">
                                        <option disabled selected>Pilih</option>
                                        <option value="1" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '1' ? 'selected' : '' }}>
                                            1
                                        </option>
                                        <option value="2" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '2' ? 'selected' : '' }}>
                                            2
                                        </option>
                                        <option value="3" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '3' ? 'selected' : '' }}>
                                            3
                                        </option>
                                        <option value="4" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '4' ? 'selected' : '' }}>
                                            4
                                        </option>
                                        <option value="5" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '5' ? 'selected' : '' }}>
                                            5
                                        </option>
                                        <option value="6" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '6' ? 'selected' : '' }}>
                                            6
                                        </option>
                                        <option value="7" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '7' ? 'selected' : '' }}>
                                            7
                                        </option>
                                        <option value="8" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '8' ? 'selected' : '' }}>
                                            8
                                        </option>
                                        <option value="9" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '9' ? 'selected' : '' }}>
                                            9
                                        </option>
                                        <option value="10" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '10' ? 'selected' : '' }}>
                                            10
                                        </option>
                                        <option value="11" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '11' ? 'selected' : '' }}>
                                            11
                                        </option>
                                        <option value="12" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '12' ? 'selected' : '' }}>
                                            12
                                        </option>
                                        <option value="13" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '13' ? 'selected' : '' }}>
                                            13
                                        </option>
                                        <option value="14" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '14' ? 'selected' : '' }}>
                                            14
                                        </option>
                                        <option value="15" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '15' ? 'selected' : '' }}>
                                            15
                                        </option>
                                        <option value="16" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '16' ? 'selected' : '' }}>
                                            16
                                        </option>
                                        <option value="17" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '17' ? 'selected' : '' }}>
                                            17
                                        </option>
                                        <option value="18" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '18' ? 'selected' : '' }}>
                                            18
                                        </option>
                                        <option value="19" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '19' ? 'selected' : '' }}>
                                            19
                                        </option>
                                        <option value="20" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '20' ? 'selected' : '' }}>
                                            20
                                        </option>
                                        <option value="21" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '21' ? 'selected' : '' }}>
                                            21
                                        </option>
                                        <option value="22" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '22' ? 'selected' : '' }}>
                                            22
                                        </option>
                                        <option value="23" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '23' ? 'selected' : '' }}>
                                            23
                                        </option>
                                        <option value="24" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '24' ? 'selected' : '' }}>
                                            24
                                        </option>
                                        <option value="25" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '25' ? 'selected' : '' }}>
                                            25
                                        </option>
                                        <option value="26" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '26' ? 'selected' : '' }}>
                                            26
                                        </option>
                                        <option value="27" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '27' ? 'selected' : '' }}>
                                            27
                                        </option>
                                        <option value="28" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '28' ? 'selected' : '' }}>
                                            28
                                        </option>
                                        <option value="29" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '29' ? 'selected' : '' }}>
                                            29
                                        </option>
                                        <option value="30" {{ old('rt', isset($datapenduduk->rt) ? $datapenduduk->rt : '') == '30' ? 'selected' : '' }}>
                                            30
                                        </option>
                                    </select>
                                    @if ($errors->has('rt'))
                                    <span class="text-danger">{{ $errors->first('rt') }}</span>
                                    @endif
                                </div>
                                <label for="rw" class="col-sm-2 text-end control-label col-form-label">RW</label>
                                <div class="col-sm-3">
                                    <select class="select2 form-select shadow-none" name="rw">
                                        <option disabled selected>Pilih</option>
                                        <option value="1" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '1' ? 'selected' : '' }}>
                                            1
                                        </option>
                                        <option value="2" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '2' ? 'selected' : '' }}>
                                            2
                                        </option>
                                        <option value="3" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '3' ? 'selected' : '' }}>
                                            3
                                        </option>
                                        <option value="4" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '4' ? 'selected' : '' }}>
                                            4
                                        </option>
                                        <option value="5" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '5' ? 'selected' : '' }}>
                                            5
                                        </option>
                                        <option value="6" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '6' ? 'selected' : '' }}>
                                            6
                                        </option>
                                        <option value="7" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '7' ? 'selected' : '' }}>
                                            7
                                        </option>
                                        <option value="8" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '8' ? 'selected' : '' }}>
                                            8
                                        </option>
                                        <option value="9" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '9' ? 'selected' : '' }}>
                                            9
                                        </option>
                                        <option value="10" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '10' ? 'selected' : '' }}>
                                            10
                                        </option>
                                        <option value="11" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '11' ? 'selected' : '' }}>
                                            11
                                        </option>
                                        <option value="12" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '12' ? 'selected' : '' }}>
                                            12
                                        </option>
                                        <option value="13" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '13' ? 'selected' : '' }}>
                                            13
                                        </option>
                                        <option value="14" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '14' ? 'selected' : '' }}>
                                            14
                                        </option>
                                        <option value="15" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '15' ? 'selected' : '' }}>
                                            15
                                        </option>
                                        <option value="16" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '16' ? 'selected' : '' }}>
                                            16
                                        </option>
                                        <option value="17" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '17' ? 'selected' : '' }}>
                                            17
                                        </option>
                                        <option value="18" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '18' ? 'selected' : '' }}>
                                            18
                                        </option>
                                        <option value="19" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '19' ? 'selected' : '' }}>
                                            19
                                        </option>
                                        <option value="20" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '20' ? 'selected' : '' }}>
                                            20
                                        </option>
                                        <option value="21" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '21' ? 'selected' : '' }}>
                                            21
                                        </option>
                                        <option value="22" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '22' ? 'selected' : '' }}>
                                            22
                                        </option>
                                        <option value="23" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '23' ? 'selected' : '' }}>
                                            23
                                        </option>
                                        <option value="24" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '24' ? 'selected' : '' }}>
                                            24
                                        </option>
                                        <option value="25" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '25' ? 'selected' : '' }}>
                                            25
                                        </option>
                                        <option value="26" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '26' ? 'selected' : '' }}>
                                            26
                                        </option>
                                        <option value="27" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '27' ? 'selected' : '' }}>
                                            27
                                        </option>
                                        <option value="28" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '28' ? 'selected' : '' }}>
                                            28
                                        </option>
                                        <option value="29" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '29' ? 'selected' : '' }}>
                                            29
                                        </option>
                                        <option value="30" {{ old('rw', isset($datapenduduk->rw) ? $datapenduduk->rw : '') == '30' ? 'selected' : '' }}>
                                            30
                                        </option>
                                    </select>
                                    @if ($errors->has('rw'))
                                    <span class="text-danger">{{ $errors->first('rw') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="desa_id" class="col-sm-4 text-end control-label col-form-label">Desa</label>
                                <div class="col-sm-8">
                                    <select name="desa_id" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                        <?php foreach ($desa_id as $did) : ?>
                                            <option value="{{ $did->id }}" {{old('desa_id') == $did->id ? 'selected' : ''}}>{{ $did->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="penyandangcacat_id" class="col-sm-4 text-end control-label col-form-label">Penyandang Cacat</label>
                                <div class="col-sm-8">
                                    <select name="penyandangcacat_id" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                        <option disabled selected>Pilih</option>
                                        <?php foreach ($penyandangcacat_id as $did) : ?>
                                            <option value="{{ $did->id }}" {{old('penyandangcacat_id') == $did->id ? 'selected' : ''}}>{{ $did->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                    @if ($errors->has('penyandangcacat_id'))
                                    <span class="text-danger">{{ $errors->first('penyandangcacat_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ktpel_id" class="col-sm-4 text-end control-label col-form-label">KTP-el</label>
                                <div class="col-sm-8">
                                    <select name="ktpel_id" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                        <option disabled selected>Pilih</option>
                                        <?php foreach ($ktpel_id as $did) : ?>
                                            <option value="{{ $did->id }}" {{old('ktpel_id') == $did->id ? 'selected' : ''}}>{{ $did->name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                    @if ($errors->has('ktpel_id'))
                                    <span class="text-danger">{{ $errors->first('ktpel_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-sm-4 text-end control-label col-form-label">Status</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="status">
                                        <option disabled selected>Pilih</option>
                                        <option value="1" {{ old('status', isset($datapenduduk->status) ? $datapenduduk->status : '') == '1' ? 'selected' : '' }}>
                                            Ada
                                        </option>
                                        <option value="2" {{ old('status', isset($datapenduduk->status) ? $datapenduduk->status : '') == '2' ? 'selected' : '' }}>
                                            Meninggal
                                        </option>
                                        <option value="3" {{ old('status', isset($datapenduduk->status) ? $datapenduduk->status : '') == '3' ? 'selected' : '' }}>
                                            Pindah Datang
                                        </option>
                                        <option value="4" {{ old('status', isset($datapenduduk->status) ? $datapenduduk->status : '') == '4' ? 'selected' : '' }}>
                                            Pindah Keluar
                                        </option>
                                    </select>
                                    @if ($errors->has('status'))
                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
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