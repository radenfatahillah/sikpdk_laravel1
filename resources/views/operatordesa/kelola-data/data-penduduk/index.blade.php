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
                <h4 class="page-title">KELOLA DATA PENDUDUK</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kelola Data</li>
                            <li class="breadcrumb-item active" aria-current="page">Penduduk</li>
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
                <h5 class="card-title">
                    <a href="<?= route('keloladata-datapendudukdesa.create') ?>" type="button" class="btn btn-primary btn-sm">Tambah Data</a>
                </h5>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Desa</th>
                                        <th>NIK</th>
                                        <th>No. KK</th>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Umur</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datapenduduk as $pdk)
                                    <tr>
                                        <td>{{ $pdk->desa->name }}</td>
                                        <td>
                                            <a href="<?= route('keloladata-datapendudukdesa.show', $pdk['NIK']) ?>">{{ $pdk['NIK'] }}</a>
                                        </td>
                                        <td>{{ $pdk['NOKK'] }}</td>
                                        <td>{{ $pdk['name'] }}</td>
                                        <td>{{ $pdk['tanggallahir'] }}</td>
                                        <td>{{ $pdk->jeniskelamin->name }}</td>
                                        <td>{{ Carbon::parse($pdk['tanggallahir'])->diff($today)->y }}</td>
                                        <td>
                                            <a href="<?= route('keloladata-datapendudukdesa.edit', $pdk['NIK']) ?>" type="button" class="btn btn-sm btn-success">Edit</a>
                                            <form action="<?= route('keloladata-datapendudukdesa.destroy', $pdk['NIK']) ?>" method="POST" onclick="return confirm('Confirm delete?')">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Desa</th>
                                        <th>NIK</th>
                                        <th>No. KK</th>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Umur</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

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
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->

    @endsection