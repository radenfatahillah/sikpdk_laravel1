@extends('layouts.backend.utama')
@section('isi')
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
@foreach($desa as $des)
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">LIHAT DATA APARATUR DESA {{ $des['name'] }}</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Lihat Data Aparatur Desa</li>
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
            <div class="row col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        PERANGKAT DESA
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h5 class="mb-3" id="headingThree">DATA PERANGKAT DESA</h5>
                                        <a href="<?= route('perangkat-desa-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Jabatan</th>
                                                        <th>Pendidikan</th>
                                                        <th>NIP</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($perangkatdesa as $prd)
                                                    <tr>
                                                        <td>{{ $prd['name'] }}</td>
                                                        <td>{{ $prd['jabatan'] }}</td>
                                                        <td>{{ $prd['pendidikan'] }}</td>
                                                        <td>{{ $prd['nip'] }}</td>
                                                        <td>{{ $prd['status'] }}</td>
                                                        <td>
                                                            <a href="<?= route('perangkat-desa-admin.edit', $prd['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('perangkat-desa-admin.destroy', $prd['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseThirteen">
                                        PERANGKAT BPD
                                </h2>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h5 class="mb-3" id="headingThree">DATA PERANGKAT BPD</h5>
                                        <a href="<?= route('bpd-desa-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Jabatan</th>
                                                        <th>Pendidikan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        @foreach($bpddesa as $bpd)
                                                    <tr>
                                                        <td>{{ $bpd['name'] }}</td>
                                                        <td>{{ $bpd['jabatan'] }}</td>
                                                        <td>{{ $bpd['pendidikan'] }}</td>
                                                        <td>
                                                            <a href="<?= route('bpd-desa-admin.edit', $bpd['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('bpd-desa-admin.destroy', $bpd['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThirteen">
                                        PERANGKAT DUSUN/LINGKUNGAN
                                </h2>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h5 class="mb-3" id="headingThree">DATA PERANGKAT DUSUN/LINGKUNGAN</h5>
                                        <a href="<?= route('dusun-desa-admin.create') ?>" type="button" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Nama Kepala Dusun/ Lingkungan</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($alamat as $almt)
                                                    <tr>
                                                        <td>{{ $almt['name'] }}</td>
                                                        <td>{{ $almt['nama_kadus'] }}</td>
                                                        <td>{{ $almt['status'] }}</td>
                                                        <td>
                                                            <a href="<?= route('dusun-desa-admin.edit', $almt['id']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                                            <form action="<?= route('dusun-desa-admin.destroy', $almt['id']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThirteen">
                                        PENGATURAN DESA
                                </h2>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h5 class="mb-3" id="headingFour">DESA</h5>
                                        <a href="<?= route('ubah-desa.edit', $des['id']) ?>" type="button" class="btn btn-primary btn-sm mb-2">Edit</a>
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-2 control-label col-form-label">Nama</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="name" name="name" value="{{ $des['name'] }}" readonly>
                                            </div>
                                            <label for="kode_desa" class="col-sm-2 control-label col-form-label">Kode Desa</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="kode_desa" name="kode_desa" value="{{ $des['kode_desa'] }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tahun_bentuk" class="col-sm-2 control-label col-form-label">Tahun Pembentukan</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="tahun_bentuk" name="tahun_bentuk" value="{{ $des['tahun_bentuk'] }}" readonly>
                                            </div>
                                            <label for="koordinat_bujur" class="col-sm-2 control-label col-form-label">Koordinat Bujur</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="koordinat_bujur" name="koordinat_bujur" value="{{ $des['koordinat_bujur'] }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="koordinat_lintang" class="col-sm-2 control-label col-form-label">Koordinat Lintang</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="koordinat_lintang" name="koordinat_lintang" value="{{ $des['koordinat_lintang'] }}" readonly>
                                            </div>
                                        </div>
                                        <form action="<?= route('dataaparaturdesa.updateAparaturDesa', ['id' => $des->id]) ?>" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            {{ method_field('PATCH')}}
                                            <h5 class="mb-3" id="headingFour">APARATUR DESA</h5>
                                            <div class="form-group row">
                                                <label for="dasarhukumperdes" class="col-sm-2 control-label col-form-label">Dasar Hukum Pembentukan Pemerintah Desa / Kelurahan</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="dasarhukumperdes">
                                                        <option value="Keputusan Perda" {{ old('dasarhukumperdes', isset($aparaturdesa->dasarhukumperdes) ? $aparaturdesa->dasarhukumperdes :'') == 'Keputusan Perda' ? 'selected' : '' }}>
                                                            Keputusan Perda
                                                        </option>
                                                        <option value="Keputusan Bupati" {{ old('dasarhukumperdes', isset($aparaturdesa->dasarhukumperdes) ? $aparaturdesa->dasarhukumperdes :'') == 'Keputusan Bupati' ? 'selected' : '' }}>
                                                            Keputusan Bupati
                                                        </option>
                                                        <option value="Keputusan Camat" {{ old('dasarhukumperdes', isset($aparaturdesa->dasarhukumperdes) ? $aparaturdesa->dasarhukumperdes :'') == 'Keputusan Camat' ? 'selected' : '' }}>
                                                            Keputusan Camat
                                                        </option>
                                                        <option value="Belum Ada Dasar Hukum" {{ old('dasarhukumperdes', isset($aparaturdesa->dasarhukumperdes) ? $aparaturdesa->dasarhukumperdes :'') == 'Belum Ada Dasar Hukum' ? 'selected' : '' }}>
                                                            Belum Ada Dasar Hukum
                                                        </option>
                                                    </select>
                                                </div>
                                                <label for="peta_wilayah" class="col-sm-2 control-label col-form-label">Dasar Hukum Pembentukan BPD</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="dasarhukumbpd">
                                                        <option value="Keputusan Perda" {{ old('dasarhukumbpd', isset($aparaturdesa->dasarhukumbpd) ? $aparaturdesa->dasarhukumbpd :'') == 'Keputusan Perda' ? 'selected' : '' }}>
                                                            Keputusan Perda
                                                        </option>
                                                        <option value="Keputusan Bupati" {{ old('dasarhukumbpd', isset($aparaturdesa->dasarhukumbpd) ? $aparaturdesa->dasarhukumbpd :'') == 'Keputusan Bupati' ? 'selected' : '' }}>
                                                            Keputusan Bupati
                                                        </option>
                                                        <option value="Keputusan Camat" {{ old('dasarhukumbpd', isset($aparaturdesa->dasarhukumbpd) ? $aparaturdesa->dasarhukumbpd :'') == 'Keputusan Camat' ? 'selected' : '' }}>
                                                            Keputusan Camat
                                                        </option>
                                                        <option value="Belum Ada Dasar Hukum" {{ old('dasarhukumbpd', isset($aparaturdesa->dasarhukumbpd) ? $aparaturdesa->dasarhukumbpd :'') == 'Belum Ada Dasar Hukum' ? 'selected' : '' }}>
                                                            Belum Ada Dasar Hukum
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="keberadaanbpd" class="col-sm-2 control-label col-form-label">Keberadaan BPD</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="keberadaanbpd">
                                                        <option value="Ada - Aktif" {{ old('keberadaanbpd', isset($aparaturdesa->keberadaanbpd) ? $aparaturdesa->keberadaanbpd :'') == 'Ada - Aktif' ? 'selected' : '' }}>
                                                            Ada - Aktif
                                                        </option>
                                                        <option value="Ada - Tidak Aktif" {{ old('keberadaanbpd', isset($aparaturdesa->keberadaanbpd) ? $aparaturdesa->keberadaanbpd :'') == 'Ada - Tidak Aktif' ? 'selected' : '' }}>
                                                            Ada - Tidak Aktif
                                                        </option>
                                                        <option value="Tidak Ada" {{ old('keberadaanbpd', isset($aparaturdesa->keberadaanbpd) ? $aparaturdesa->keberadaanbpd :'') == 'Tidak Ada' ? 'selected' : '' }}>
                                                            Tidak Ada
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
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
        </div>
    </div>
</div>
@endforeach
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