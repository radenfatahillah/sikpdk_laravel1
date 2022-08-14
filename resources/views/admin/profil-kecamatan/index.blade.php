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
                <h4 class="page-title">PROFIL KECAMATAN</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profil Kecamatan</li>
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
                <div class="card">
                    <div class="card-body">
                        <form action="<?= route('profil-kecamatan.updateProfilKecamatan', ['kec' => Auth::user()->role_id]) ?>" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PATCH')}}
                            <div class="col-sm-12 row">
                                <div class="row col-sm-6">
                                    <div class="form-group row">
                                        <label for="provinsi" class="col-sm-4 control-label col-form-label text-end">Provinsi</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="provinsi_id" name="provinsi_id" value="<?= isset($profilkecamatan->provinsi_id) ? $profilkecamatan->provinsi_id : '' ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="provinsi_nama" name="provinsi_nama" value="<?= isset($profilkecamatan->provinsi_nama) ? $profilkecamatan->provinsi_nama : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kabupaten" class="col-sm-4 control-label col-form-label text-end">Kabupaten</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="kabupaten_id" name="kabupaten_id" value="<?= isset($profilkecamatan->kabupaten_id) ? $profilkecamatan->kabupaten_id : '' ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="kabupaten_nama" name="kabupaten_nama" value="<?= isset($profilkecamatan->kabupaten_nama) ? $profilkecamatan->kabupaten_nama : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kecamatan" class="col-sm-4 control-label col-form-label text-end">Kecamatan</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="kecamatan_id" name="kecamatan_id" value="<?= isset($profilkecamatan->kecamatan_id) ? $profilkecamatan->kecamatan_id : '' ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="kecamatan_nama" name="kecamatan_nama" value="<?= isset($profilkecamatan->kecamatan_nama) ? $profilkecamatan->kecamatan_nama : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tahun_pembentukan" class="col-sm-4 control-label col-form-label text-end">Tahun Pembentukan</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" id="tahun_pembentukan" name="tahun_pembentukan" value="<?= isset($profilkecamatan->tahun_pembentukan) ? $profilkecamatan->tahun_pembentukan : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="dasar_pembentukan" class="col-sm-4 control-label col-form-label text-end">Dasar Hukum Pembentukan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="dasar_pembentukan" name="dasar_pembentukan" value="<?= isset($profilkecamatan->dasar_pembentukan) ? $profilkecamatan->dasar_pembentukan : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-4 control-label col-form-label text-end">Alamat</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= isset($profilkecamatan->alamat) ? $profilkecamatan->alamat : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kode_pos" class="col-sm-4 control-label col-form-label text-end">Kode Pos</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="<?= isset($profilkecamatan->kode_pos) ? $profilkecamatan->kode_pos : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telepon" class="col-sm-4 control-label col-form-label text-end">Telepon</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="telepon" name="telepon" value="<?= isset($profilkecamatan->telepon) ? $profilkecamatan->telepon : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-4 control-label col-form-label text-end">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" id="email" name="email" value="<?= isset($profilkecamatan->email) ? $profilkecamatan->email : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="file_struktur_organisasi" class="col-sm-4 control-label col-form-label text-end">Struktur Organisasi</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="file" id="file_struktur_organisasi" name="file_struktur_organisasi" placeholder="image">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <div class="col-sm-4">
                                        </div>
                                        <div class="col-sm-8">
                                            @if($profilkecamatan->file_struktur_organisasi == NULL)
                                            <img src="{{ asset('/image/noimage.png') }}" class="img-fluid rounded mx-auto d-block" alt="Responsive image" value="<?= isset($profilkecamatan->file_struktur_organisasi) ? $profilkecamatan->file_struktur_organisasi : '' ?>">
                                            @else
                                            <img src="{{ url('/'. $profilkecamatan->file_struktur_organisasi) }}" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row col-sm-6">
                                    <div class="form-group row">
                                        <label for="nama_camat" class="col-sm-4 control-label col-form-label text-end">Nama Camat</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nama_camat" name="nama_camat" value="<?= isset($profilkecamatan->nama_camat) ? $profilkecamatan->nama_camat : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sekretaris_camat" class="col-sm-4 control-label col-form-label text-end">Sekretaris</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="sekretaris_camat" name="sekretaris_camat" value="<?= isset($profilkecamatan->sekretaris_camat) ? $profilkecamatan->sekretaris_camat : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kepsek_pemerintahan_umum" class="col-sm-4 control-label col-form-label text-end">Kepala Seksi Pemerintahan Umum</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kepsek_pemerintahan_umum" name="kepsek_pemerintahan_umum" value="<?= isset($profilkecamatan->kepsek_pemerintahan_umum) ? $profilkecamatan->kepsek_pemerintahan_umum : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kepsek_kesejahteraan_masyarakat" class="col-sm-4 control-label col-form-label text-end">Kepala Seksi Kesejahteraan Masyarakat</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kepsek_kesejahteraan_masyarakat" name="kepsek_kesejahteraan_masyarakat" value="<?= isset($profilkecamatan->kepsek_kesejahteraan_masyarakat) ? $profilkecamatan->kepsek_kesejahteraan_masyarakat : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kepsek_pemberdayaan_masyarakat" class="col-sm-4 control-label col-form-label text-end">Kepala Seksi Pemberdayaan Masyarakat</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kepsek_pemberdayaan_masyarakat" name="kepsek_pemberdayaan_masyarakat" value="<?= isset($profilkecamatan->kepsek_pemberdayaan_masyarakat) ? $profilkecamatan->kepsek_pemberdayaan_masyarakat : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kepsek_pelayanan_umum" class="col-sm-4 control-label col-form-label text-end">Kepala Seksi Pelayanan Umum</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kepsek_pelayanan_umum" name="kepsek_pelayanan_umum" value="<?= isset($profilkecamatan->kepsek_pelayanan_umum) ? $profilkecamatan->kepsek_pelayanan_umum : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kepsek_trantib" class="col-sm-4 control-label col-form-label text-end">Kepala Seksi TRANTIB</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kepsek_trantib" name="kepsek_trantib" value="<?= isset($profilkecamatan->kepsek_trantib) ? $profilkecamatan->kepsek_trantib : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="file_logo" class="col-sm-4 control-label col-form-label text-end">Logo</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="file" id="file_logo" name="file_logo" placeholder="image">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <div class="col-sm-4">
                                        </div>
                                        <div class="col-sm-3">
                                            @if($profilkecamatan->file_logo == NULL)
                                            <img src="{{ asset('/image/noimage.png') }}" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
                                            @else
                                            <img src="{{ url('/'. $profilkecamatan->file_logo) }}" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row col-sm-6">
                                    <div class="form-group row">
                                        <label for="nama_camat" class="col-sm-4 control-label col-form-label text-end">Visi</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="visi" id="visi" rows="3"><?= isset($profilkecamatan->visi) ? $profilkecamatan->visi : '' ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row col-sm-6">
                                    <div class="form-group row">
                                        <label for="nama_camat" class="col-sm-4 control-label col-form-label text-end">Misi</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="misi" id="misi" rows="3"><?= isset($profilkecamatan->misi) ? $profilkecamatan->misi : '' ?></textarea>
                                        </div>
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

    @endsection