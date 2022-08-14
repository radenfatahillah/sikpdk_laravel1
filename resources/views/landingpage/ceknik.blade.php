@extends('layouts.landingpage.utama')
@section('isi')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2 data-aos="fade-up">Sistem Informasi Kependudukan dan Profil Desa Kec. Teluk Keramat</h2>
                <div class="card text-white bg-dark mb-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-header">Cek Nomor Data Penduduk (NIK)</div>
                    <div class="card-body">
                        @if($ceknik->isNotEmpty())
                        @foreach ($ceknik as $cknik)
                        <table class="table table-dark">
                            <tr>
                                <td>
                                    <h6 class="card-title">NIK</h6>
                                </td>
                                <td>
                                    <h6 class="card-title">{{ substr($cknik->NIK,0,-12) }}********{{ substr($cknik->NIK,12) }}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="card-title">Nama</h6>
                                </td>
                                <td>
                                    <h6 class="card-title">{{ $cknik->name }}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="card-title">Desa</h6>
                                </td>
                                <td>
                                    <h6 class="card-title">{{ $cknik->desa->name }}</h6>
                                </td>
                            </tr>
                        </table>
                        @endforeach
                        @else
                        <div>
                            <h5 class="card-title">Data NIK tidak ditemukan</h5>
                        </div>
                        @endif
                        <h5 class="card-title mb-4"><a href="{{ route('landingpageindex') }}" class="btn btn-primary">Kembali</a></h5>
                    </div>
                </div>
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $jumlahlakilaki }}" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Jumlah Penduduk (Laki-Laki)</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $jumlahperempuan }}" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Jumlah Penduduk (Perempuan)</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $jumlahpenduduk }}" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Total Penduduk</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $desa }}" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Desa</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>
            </div>

            <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                <img src="{{ asset('landingpage/assets/img/hero-img.svg')}}" class="img-fluid mb-3 mb-lg-0" alt="">
            </div>

        </div>
    </div>
</section><!-- End Hero Section -->
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span>SIKPDK</span>
                </a>
                <p>Sistem Informasi Kependudukan dan Profil Desa Kecamatan Teluk Keramat Kabupaten Sambas Provinsi Kalimantan Barat</p>
                <div class="social-links d-flex mt-4">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 footer-links">
                <h4>Menu</h4>
                <ul>
                    <li><a href="{{ route('landingpageindex') }}">Beranda</a></li>
                    <li><a href="{{ route('landingpagesejarah') }}">Sejarah</a></li>
                    <li><a href="{{ route('landingpageletakgeografis') }}">Letak Geografis</a></li>
                    <li><a href="{{ route('landingpagestrukturpemerintahan') }}">Struktur Pemerintahan</a></li>
                    <li><a href="{{ route('landingpagevisimisi') }}">Visi dan Misi</a></li>
                    <li><a href="{{ route('landingpageprofildesa') }}">Profil Desa</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
                <h4>Alamat</h4>
                <p><?= isset($profilkecamatan->alamat) ? $profilkecamatan->alamat : '' ?><br><br>
                    <strong>Kode Pos: </strong><?= isset($profilkecamatan->kode_pos) ? $profilkecamatan->kode_pos : '' ?><br>
                    <strong>Email: </strong><?= isset($profilkecamatan->email) ? $profilkecamatan->email : '' ?><br>
                    <strong>Telepon: </strong><?= isset($profilkecamatan->telepon) ? $profilkecamatan->telepon : '' ?><br>
                </p>

            </div>

        </div>
    </div>

    <div class="container mt-4">
        <div class="copyright">
            2022 &copy; Copyright <strong><span>SIKPDK</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>

</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('landingpage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('landingpage/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{ asset('landingpage/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{ asset('landingpage/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('landingpage/assets/vendor/aos/aos.js')}}"></script>
<script src="{{ asset('landingpage/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('landingpage/assets/js/main.js')}}"></script>

</body>

</html>
@endsection