@extends('layouts.backend.utama')
@section('isi')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    var jumlah_lk = <?php echo $jumlah_lk; ?>;
    var jumlah_pr = <?php echo $jumlah_pr; ?>;
    // Load google charts
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Jumlah'],
            ['Laki-Laki', jumlah_lk],
            ['Perempuan', jumlah_pr]
        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {
            'title': '',
            'width': 500,
            'height': 300
        };

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>
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
                <h4 class="page-title">LAPORAN DAFTAR PENDUDUK</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Laporan Daftar Penduduk</li>
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
                        <h4 class="card-title text-center">Jumlah Penduduk Laki-Laki dan Perempuan dalam Diagram Pie</h4>
                        <div class="d-flex justify-content-center" id="piechart"></div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center align-middle" rowspan="2">Desa</th>
                                        <th class="text-center" colspan="3">Penduduk</th>
                                        <th class="text-center" colspan="3">E-KTP</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">Laki-Laki</td>
                                        <td class="text-center">Perempuan</td>
                                        <td class="text-center">Total</td>
                                        <td class="text-center">Kepemilikan</td>
                                        <td class="text-center">Wajib E-KTP</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($desa as $des)
                                    <tr>
                                        <td>{{ $des['name'] }}</td>
                                        <td>{{ $jumlah_lk }}</td>
                                        <td>{{ $jumlah_pr }}</td>
                                        <td>{{ $jumlah_lk+$jumlah_pr }}</td>
                                        <td>{{ $ktpel }}</td>
                                        <td>{{ $wajibktp }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
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