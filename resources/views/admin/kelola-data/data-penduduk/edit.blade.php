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
                <h4 class="page-title">EDIT DATA PENDUDUK</h4>
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
                    <form action="<?= route('keloladata-datapenduduk.update', $datapenduduk['NIK']) ?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="NIK" class="col-sm-4 text-end control-label col-form-label">NIK</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="NIK" name="NIK" value="<?= $datapenduduk->NIK ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="NOKK" class="col-sm-4 text-end control-label col-form-label">NO KK</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="NOKK" name="NOKK" value="<?= $datapenduduk->NOKK ?>">
                                    @if ($errors->has('NOKK'))
                                    <span class="text-danger">{{ $errors->first('NOKK') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 text-end control-label col-form-label">Nama Lengkap</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" style="text-transform:uppercase" id="name" name="name" value="<?= $datapenduduk->name ?>">
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
                                        <option value="{{ $jeniskelamin_id->id }}" @if(old('jeniskelamin_id')==$jeniskelamin_id->id || $jeniskelamin_id->id == $datapenduduk->jeniskelamin_id) selected @endif>{{ $jeniskelamin_id->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tempatlahir" class="col-sm-4 text-end control-label col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" style="text-transform:uppercase" id="tempatlahir" name="tempatlahir" value="<?= $datapenduduk->tempatlahir ?>">
                                    @if ($errors->has('tempatlahir'))
                                    <span class="text-danger">{{ $errors->first('tempatlahir') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggallahir" class="col-sm-4 text-end control-label col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="datepicker-autoclose" name="tanggallahir" placeholder="mm/dd/yyyy" value="<?= date("m/d/Y", $time = strtotime($datapenduduk->tanggallahir)); ?>">
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
                                        <option value="{{ $agama_id->id }}" @if(old('agama_id')==$agama_id->id || $agama_id->id == $datapenduduk->agama_id) selected @endif>{{ $agama_id->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pendidikan_kk_id" class="col-sm-4 text-end control-label col-form-label">Pendidikan dalam KK</label>
                                <div class="col-sm-8">
                                    <select name="pendidikan_kk_id" class="select2 form-select shadow-none">
                                        @foreach($pendidikan_kk_id as $pendidikan_kk_id)
                                        <option value="{{ $pendidikan_kk_id->id }}" @if(old('pendidikan_kk_id')==$pendidikan_kk_id->id || $pendidikan_kk_id->id == $datapenduduk->pendidikan_kk_id) selected @endif>{{ $pendidikan_kk_id->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pendidikan_sedang_id" class="col-sm-4 text-end control-label col-form-label">Pendidikan Sedang Tempuh</label>
                                <div class="col-sm-8">
                                    <select name="pendidikan_sedang_id" class="select2 form-select shadow-none">
                                        @foreach($pendidikan_sedang_id as $pendidikan_sedang_id)
                                        <option value="{{ $pendidikan_sedang_id->id }}" @if(old('pendidikan_sedang_id')==$pendidikan_sedang_id->id || $pendidikan_sedang_id->id == $datapenduduk->pendidikan_sedang_id) selected @endif>{{ $pendidikan_sedang_id->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenispekerjaan_id" class="col-sm-4 text-end control-label col-form-label">Jenis Pekerjaan</label>
                                <div class="col-sm-8">
                                    <select name="jenispekerjaan_id" class="select2 form-select shadow-none">
                                        @foreach($jenispekerjaan_id as $jenispekerjaan_id)
                                        <option value="{{ $jenispekerjaan_id->id }}" @if(old('jenispekerjaan_id')==$jenispekerjaan_id->id || $jenispekerjaan_id->id == $datapenduduk->jenispekerjaan_id) selected @endif>{{ $jenispekerjaan_id->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="golongandarah_id" class="col-sm-4 text-end control-label col-form-label">Golongan Darah</label>
                                <div class="col-sm-8">
                                    <select name="golongandarah_id" class="select2 form-select shadow-none">
                                        @foreach($golongandarah_id as $golongandarah_id)
                                        <option value="{{ $golongandarah_id->id }}" @if(old('golongandarah_id')==$golongandarah_id->id || $golongandarah_id->id == $datapenduduk->golongandarah_id) selected @endif>{{ $golongandarah_id->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="statusperkawinan_id" class="col-sm-4 text-end control-label col-form-label">Status Perkawinan</label>
                                <div class="col-sm-8">
                                    <select name="statusperkawinan_id" class="select2 form-select shadow-none">
                                        @foreach($statusperkawinan_id as $statusperkawinan_id)
                                        <option value="{{ $statusperkawinan_id->id }}" @if(old('statusperkawinan_id')==$statusperkawinan_id->id || $statusperkawinan_id->id == $datapenduduk->statusperkawinan_id) selected @endif>{{ $statusperkawinan_id->name }}</option>
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
                                <label for="etnis_id" class="col-sm-4 text-end control-label col-form-label">Etnis</label>
                                <div class="col-sm-8">
                                    <select name="etnis_id" class="select2 form-select shadow-none">
                                        @foreach($etnis_id as $etnis_id)
                                        <option value="{{ $etnis_id->id }}" @if(old('etnis_id')==$etnis_id->id || $etnis_id->id == $datapenduduk->etnis_id) selected @endif>{{ $etnis_id->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="shdk_id" class="col-sm-4 text-end control-label col-form-label">SHDK</label>
                                <div class="col-sm-8">
                                    <select name="shdk_id" class="select2 form-select shadow-none">
                                        @foreach($shdk_id as $shdk_id)
                                        <option value="{{ $shdk_id->id }}" @if(old('shdk_id')==$shdk_id->id || $shdk_id->id == $datapenduduk->shdk_id) selected @endif>{{ $shdk_id->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kewarganegaraan_id" class="col-sm-4 text-end control-label col-form-label">Kewarganegaraan</label>
                                <div class="col-sm-8">
                                    <select name="kewarganegaraan_id" class="select2 form-select shadow-none">
                                        @foreach($kewarganegaraan_id as $kewarganegaraan_id)
                                        <option value="{{ $kewarganegaraan_id->id }}" @if(old('kewarganegaraan_id')==$kewarganegaraan_id->id || $kewarganegaraan_id->id == $datapenduduk->kewarganegaraan_id) selected @endif>{{ $kewarganegaraan_id->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_paspor" class="col-sm-4 text-end control-label col-form-label">No. Paspor</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="no_paspor" name="no_paspor" value="<?= $datapenduduk->no_paspor ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_kitap" class="col-sm-4 text-end control-label col-form-label">No. KITAP</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="no_kitap" name="no_kitap" value="<?= $datapenduduk->no_kitap ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_ayah" class="col-sm-4 text-end control-label col-form-label">Nama Ayah</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= $datapenduduk->nama_ayah ?>">
                                    @if ($errors->has('nama_ayah'))
                                    <span class="text-danger">{{ $errors->first('nama_ayah') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_ibu" class="col-sm-4 text-end control-label col-form-label">Nama Ibu</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= $datapenduduk->nama_ibu ?>">
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
                                        <option value="{{ $alamat_id->id }}" @if(old('alamat_id')==$alamat_id->id || $alamat_id->id == $datapenduduk->alamat_id) selected @endif>{{ $alamat_id->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rt" class="col-sm-4 text-end control-label col-form-label">RT</label>
                                <div class="col-sm-3">
                                    <select class="select2 form-select shadow-none" name="rt">
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
                                </div>
                                <label for="rw" class="col-sm-2 text-end control-label col-form-label">RW</label>
                                <div class="col-sm-3">
                                    <select class="select2 form-select shadow-none" name="rw">
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
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="desa_id" class="col-sm-4 text-end control-label col-form-label">Desa</label>
                                <div class="col-sm-8">
                                    <select name="desa_id" class="select2 form-select shadow-none">
                                        @foreach($desa_id as $desa_id)
                                        <option value="{{ $desa_id->id }}" @if(old('desa_id')==$desa_id->id || $desa_id->id == $datapenduduk->desa_id) selected @endif>{{ $desa_id->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="penyandangcacat_id" class="col-sm-4 text-end control-label col-form-label">Penyandang Cacat</label>
                                <div class="col-sm-8">
                                    <select name="penyandangcacat_id" class="select2 form-select shadow-none">
                                        @foreach($penyandangcacat_id as $penyandangcacat_id)
                                        <option value="{{ $penyandangcacat_id->id }}" @if(old('penyandangcacat_id')==$penyandangcacat_id->id || $penyandangcacat_id->id == $datapenduduk->penyandangcacat_id) selected @endif>{{ $penyandangcacat_id->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ktpel_id" class="col-sm-4 text-end control-label col-form-label">KTP-el</label>
                                <div class="col-sm-8">
                                    <select name="ktpel_id" class="select2 form-select shadow-none">
                                        @foreach($ktpel_id as $ktpel_id)
                                        <option value="{{ $ktpel_id->id }}" @if(old('ktpel_id')==$ktpel_id->id || $ktpel_id->id == $datapenduduk->ktpel_id) selected @endif>{{ $ktpel_id->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-sm-4 text-end control-label col-form-label">Status</label>
                                <div class="col-sm-8">
                                    <select class="select2 form-select shadow-none" name="status">
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