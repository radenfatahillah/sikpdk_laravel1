@extends('layouts.landingpage.utama')
@section('isi')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('{{asset('landingpage/assets/img/page-header.jpg')}}');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Struktur Pemerintahan</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{ route('landingpageindex') }}">Beranda</a></li>
                    <li>Struktur Pemerintahan</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-item">
                        <h3 class="text-center">Struktur Pemerintahan</h3>
                        <div class="d-flex justify-content-center">
                            <div class="col-sm-7">
                                @if($profilkecamatan->file_struktur_organisasi == NULL)
                                <img src="/image/default.jpg" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
                                @else
                                <img src="{{ url('/'. $profilkecamatan->file_struktur_organisasi) }}" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
                                @endif
                            </div>
                        </div>
                        <div class="mt-4 row">
                            <div class="col-md-4">Nama Camat
                            </div>
                            <div class="col-md-8"><strong><?= isset($profilkecamatan->nama_camat) ? $profilkecamatan->nama_camat : '' ?></strong>
                            </div>
                            <div class="col-md-4">Sekretaris Camat
                            </div>
                            <div class="col-md-8"><strong><?= isset($profilkecamatan->sekretaris_camat) ? $profilkecamatan->sekretaris_camat : '' ?></strong>
                            </div>
                            <div class="col-md-4">Kepala Seksi Pemerintahan Umum
                            </div>
                            <div class="col-md-8"><strong><?= isset($profilkecamatan->kepsek_pemerintahan_umum) ? $profilkecamatan->kepsek_pemerintahan_umum : '' ?></strong>
                            </div>
                            <div class="col-md-4">Kepala Seksi Kesejahteraan Masyarakat
                            </div>
                            <div class="col-md-8"><strong><?= isset($profilkecamatan->kepsek_kesejahteraan_masyarakat) ? $profilkecamatan->kepsek_kesejahteraan_masyarakat : '' ?></strong>
                            </div>
                            <div class="col-md-4">Kepala Seksi Pemberdayaan Masyarakat
                            </div>
                            <div class="col-md-8"><strong><?= isset($profilkecamatan->kepsek_pemberdayaan_masyarakat) ? $profilkecamatan->kepsek_pemberdayaan_masyarakat : '' ?></strong>
                            </div>
                            <div class="col-md-4">Kepala Seksi Pelayanan Umum
                            </div>
                            <div class="col-md-8"><strong><?= isset($profilkecamatan->kepsek_pelayanan_umum) ? $profilkecamatan->kepsek_pelayanan_umum : '' ?></strong>
                            </div>
                            <div class="col-md-4">Kepala Seksi TRANTIB
                            </div>
                            <div class="col-md-8"><strong><?= isset($profilkecamatan->kepsek_trantib) ? $profilkecamatan->kepsek_trantib : '' ?></strong>
                            </div>
                        </div>
                    </div>
                </div><!-- End Pricing Item -->

            </div>

        </div>
    </section><!-- End Pricing Section -->

</main><!-- End #main -->
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