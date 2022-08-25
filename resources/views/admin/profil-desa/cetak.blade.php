<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 2px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>

<body>
  Dicetak pada :
  <table>
    <tr>
      <th colspan="4">PROFIL DESA
        @foreach($profildesa as $pfde)
        {{ $pfde->name }}
        @endforeach
      </th>
    </tr>
    <tr>
      <th colspan="4">MONOGRAFI PROFIL DESA</th>
    </tr>
    <br>
    <tr>
      <td colspan="4">Profil Desa</td>
    </tr>
    <tr>
      <td>Kode PUM</td>
      <td>@foreach($profildesa as $pfde)
        61.01.02.{{ $pfde->kode_desa }}
        @endforeach</td>
      <td>Desa</td>
      <td>@foreach($profildesa as $pfde)
        {{ $pfde->name }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Tahun Pembentukan</td>
      <td>@foreach($profildesa as $pfde)
        {{ $pfde->tahun_bentuk }}
        @endforeach
      </td>
      <td>Kecamatan</td>
      <td>Teluk Keramat</td>
    </tr>
    <tr>
      <td>Kabupaten</td>
      <td>Sambas</td>
      <td>Provinsi</td>
      <td>Kalimantan Barat</td>
    </tr>
    <tr>
      <td>Koordinat Bujur</td>
      <td>@foreach($profildesa as $pfde)
        {{ $pfde->koordinat_bujur }}
        @endforeach
      </td>
      <td>Koordinat Lintang</td>
      <td>@foreach($profildesa as $pfde)
        {{ $pfde->koordinat_lintang }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Kepala Desa</td>
      <td>@foreach($kades as $kds)
        {{ $kds['name'] }}
        @endforeach
      </td>
      <td>NIP</td>
      <td>@foreach($kades as $kds)
        {{ $kds['nip'] }}
        @endforeach
      </td>
    </tr>
  </table>
  <br>
  <table>
    <tr>
      <th colspan="4">POTENSI UMUM</th>
    </tr>
    <tr>
      <td colspan="4">Batas Wilayah</td>
    </tr>
    <tr>
      <td colspan="2">Batas</td>
      <td>Desa/Kelurahan</td>
      <td>Kecamatan</td>
    </tr>
    <tr>
      <td colspan="2">Sebelah Utara</td>
      <td><?= isset($potensiumum->batas_utara_desa) ? $potensiumum->batas_utara_desa : '' ?></td>
      <td><?= isset($potensiumum->batas_utara_kec) ? $potensiumum->batas_utara_kec : '' ?></td>
    </tr>
    <tr>
      <td colspan="2">Sebelah Selatan</td>
      <td><?= isset($potensiumum->batas_selatan_desa) ? $potensiumum->batas_selatan_desa : '' ?></td>
      <td><?= isset($potensiumum->batas_selatan_kec) ? $potensiumum->batas_selatan_kec : '' ?></td>
    </tr>
    <tr>
      <td colspan="2">Sebelah Timur</td>
      <td><?= isset($potensiumum->batas_timur_desa) ? $potensiumum->batas_timur_desa : '' ?></td>
      <td><?= isset($potensiumum->batas_timur_kec) ? $potensiumum->batas_timur_kec : '' ?></td>
    </tr>
    <tr>
      <td colspan="2">Sebelah Barat</td>
      <td><?= isset($potensiumum->batas_barat_desa) ? $potensiumum->batas_barat_desa : '' ?></td>
      <td><?= isset($potensiumum->batas_barat_kec) ? $potensiumum->batas_barat_kec : '' ?></td>
    </tr>
    <tr>
      <td colspan="4">Penetapan Batas dan Peta Wilayah</td>
    </tr>
    <tr>
      <td>Penetapan Batas</td>
      <td><?= isset($potensiumum->penetapan_batas) ? $potensiumum->penetapan_batas : '' ?></td>
      <td>Peta Wilayah</td>
      <td><?= isset($potensiumum->peta_wilayah) ? $potensiumum->peta_wilayah : '' ?></td>
    </tr>
    <tr>
      <td>Perdes No</td>
      <td><?= isset($potensiumum->perdes_no) ? $potensiumum->perdes_no : '' ?></td>
      <td>Perda No</td>
      <td><?= isset($potensiumum->perda_no) ? $potensiumum->perda_no : '' ?></td>
    </tr>
  </table>
  <br>
  <table>
    <tr>
      <th colspan="8">DATA TANAH</th>
    </tr>
    <tr>
      <td colspan="8">Tanah Sawah (Ha)</td>
    </tr>
    <tr>
      <td>Sawah Irigasi Teknis</td>
      <td><?= isset($datatanah->sawah_irigasi_teknis) ? $datatanah->sawah_irigasi_teknis : '' ?></td>
      <td>Sawah Irigasi 1/2 Teknis</td>
      <td><?= isset($datatanah->sawah_irigasi_sth_teknis) ? $datatanah->sawah_irigasi_sth_teknis : '' ?></td>
      <td>Sawah Tadah Hujan</td>
      <td><?= isset($datatanah->sawah_tadah_hujan) ? $datatanah->sawah_tadah_hujan : '' ?></td>
      <td>Sawah Pasang Surut</td>
      <td><?= isset($datatanah->sawah_pasang_surut) ? $datatanah->sawah_pasang_surut : '' ?></td>
    </tr>
    <tr>
      <td colspan="8">Tanah Kering (Ha)</td>
    </tr>
    <tr>
      <td>Tegal/Ladang</td>
      <td><?= isset($datatanah->tegal_ladang) ? $datatanah->tegal_ladang : '' ?></td>
      <td>Pemukiman</td>
      <td><?= isset($datatanah->pemukiman) ? $datatanah->pemukiman : '' ?></td>
      <td>Pekarangan</td>
      <td colspan="3"><?= isset($datatanah->pekarangan) ? $datatanah->pekarangan : '' ?></td>
    </tr>
    <tr>
      <td colspan="8">Tanah Basah (Ha)</td>
    </tr>
    <tr>
      <td>Tanah Rawa</td>
      <td><?= isset($datatanah->tanah_rawa) ? $datatanah->tanah_rawa : '' ?></td>
      <td>Pasang Surut</td>
      <td><?= isset($datatanah->pasang_surut) ? $datatanah->pasang_surut : '' ?></td>
      <td>Lahan Gambut</td>
      <td><?= isset($datatanah->lahan_gambut) ? $datatanah->lahan_gambut : '' ?></td>
      <td>Situ/Waduk/Danau</td>
      <td><?= isset($datatanah->situ_waduk_danau) ? $datatanah->situ_waduk_danau : '' ?></td>
    </tr>
    <tr>
      <td colspan="8">Tanah Perkebunan (Ha)</td>
    </tr>
    <tr>
      <td>Perkebunan Rakyat</td>
      <td><?= isset($datatanah->perkebunan_rakyat) ? $datatanah->perkebunan_rakyat : '' ?></td>
      <td>Perkebunan Negara</td>
      <td><?= isset($datatanah->perkebunan_negara) ? $datatanah->perkebunan_negara : '' ?></td>
      <td>Perkebunan Swasta</td>
      <td><?= isset($datatanah->perkebunan_swasta) ? $datatanah->perkebunan_swasta : '' ?></td>
      <td>Perkebunan Perorangan</td>
      <td><?= isset($datatanah->perkebunan_perorangan) ? $datatanah->perkebunan_perorangan : '' ?></td>
    </tr>
    <tr>
      <td colspan="8">Tanah Fasilitas Umum (Ha)</td>
    </tr>
    <tr>
      <td>Tanah Bengkok</td>
      <td><?= isset($datatanah->tanah_bengkok) ? $datatanah->tanah_bengkok : '' ?></td>
      <td>Tanah Titi Sara</td>
      <td><?= isset($datatanah->tanah_titi_sara) ? $datatanah->tanah_titi_sara : '' ?></td>
      <td>Kebun Desa</td>
      <td><?= isset($datatanah->kebun_desa) ? $datatanah->kebun_desa : '' ?></td>
      <td>Sawah Desa</td>
      <td><?= isset($datatanah->sawah_desa) ? $datatanah->sawah_desa : '' ?></td>
    </tr>
    <tr>
      <td>Lapangan Olahraga</td>
      <td><?= isset($datatanah->lapangan_olahraga) ? $datatanah->lapangan_olahraga : '' ?></td>
      <td>Perkantoran Pemerintah</td>
      <td><?= isset($datatanah->perkantoran_pemerintah) ? $datatanah->perkantoran_pemerintah : '' ?></td>
      <td>Ruang Publik/Taman</td>
      <td><?= isset($datatanah->ruang_publik) ? $datatanah->ruang_publik : '' ?></td>
      <td>Pemakaman Desa/Umum</td>
      <td><?= isset($datatanah->tempat_pemakaman_desa_umum) ? $datatanah->tempat_pemakaman_desa_umum : '' ?></td>
    </tr>
    <tr>
      <td>Pembuangan Sampah</td>
      <td><?= isset($datatanah->pembuangan_sampah) ? $datatanah->pembuangan_sampah : '' ?></td>
      <td>Bangunan Sekolah/PT</td>
      <td><?= isset($datatanah->bangunan_sekolah_pt) ? $datatanah->bangunan_sekolah_pt : '' ?></td>
      <td>Pertokoan</td>
      <td><?= isset($datatanah->pertokoan) ? $datatanah->pertokoan : '' ?></td>
      <td>Fasilitas Pasar</td>
      <td><?= isset($datatanah->fasilitas_pasar) ? $datatanah->fasilitas_pasar : '' ?></td>
    </tr>
    <tr>
      <td>Terminal</td>
      <td><?= isset($datatanah->terminal) ? $datatanah->terminal : '' ?></td>
      <td>Jalan</td>
      <td><?= isset($datatanah->jalan) ? $datatanah->jalan : '' ?></td>
      <td>Daerah Tangkapan Air</td>
      <td><?= isset($datatanah->daerah_tangkapan_air) ? $datatanah->daerah_tangkapan_air : '' ?></td>
      <td>Usaha Perikanan</td>
      <td><?= isset($datatanah->usaha_perikanan) ? $datatanah->usaha_perikanan : '' ?></td>
    </tr>
    <tr>
      <td>Sutet/Aliran Listrik Tegangan Tinggi</td>
      <td colspan="7"><?= isset($datatanah->sutet_aliranlistrik) ? $datatanah->sutet_aliranlistrik : '' ?></td>
    </tr>
    <tr>
      <td colspan="8">Tanah Hutan (Ha)</td>
    </tr>
    <tr>
      <td colspan="8">Hutan Produksi:</td>
    </tr>
    <tr>
      <td>Hutan Produksi Tetap</td>
      <td><?= isset($datatanah->hutan_produksi_tetap) ? $datatanah->hutan_produksi_tetap : '' ?></td>
      <td>Hutan Terbatas</td>
      <td><?= isset($datatanah->hutan_terbatas) ? $datatanah->hutan_terbatas : '' ?></td>
      <td>Hutan Konservasi</td>
      <td><?= isset($datatanah->hutan_konservasi) ? $datatanah->hutan_konservasi : '' ?></td>
      <td>Hutan Adat</td>
      <td><?= isset($datatanah->hutan_adat) ? $datatanah->hutan_adat : '' ?></td>
    </tr>
    <tr>
      <td>Hutan Asli</td>
      <td><?= isset($datatanah->hutan_asli) ? $datatanah->hutan_asli : '' ?></td>
      <td>Hutan Sekunder</td>
      <td><?= isset($datatanah->hutan_sekunder) ? $datatanah->hutan_sekunder : '' ?></td>
      <td>Hutan Buatan</td>
      <td><?= isset($datatanah->hutan_buatan) ? $datatanah->hutan_buatan : '' ?></td>
      <td>Hutan Mangrove</td>
      <td><?= isset($datatanah->hutan_mangrove) ? $datatanah->hutan_mangrove : '' ?></td>
    </tr>
    <tr>
      <td>Hutan Rakyat</td>
      <td><?= isset($datatanah->hutan_rakyat) ? $datatanah->hutan_rakyat : '' ?></td>
      <td>Hutan Lindung</td>
      <td><?= isset($datatanah->hutan_lindung) ? $datatanah->hutan_lindung : '' ?></td>
    </tr>
    <tr>
      <td colspan="8">Hutan Suaka:</td>
    </tr>
    <tr>
      <td>Suaka Alam</td>
      <td><?= isset($datatanah->suaka_alam) ? $datatanah->suaka_alam : '' ?></td>
      <td>Suaka Margasatwa</td>
      <td><?= isset($datatanah->suaka_margasatwa) ? $datatanah->suaka_margasatwa : '' ?></td>
    </tr>
  </table>
  <br>
  <table>
    <tr>
      <th colspan="8">IKLIM, JENIS & KESUBURAN TANAH</th>
    </tr>
    <tr>
      <td colspan="8">Iklim</td>
    </tr>
    <tr>
      <td>Curah Hujan</td>
      <td><?= isset($iklimjeniskesuburantanah->curah_hujan) ? $iklimjeniskesuburantanah->curah_hujan : '' ?></td>
      <td>Jumlah Bulan Hujan</td>
      <td><?= isset($iklimjeniskesuburantanah->jumlah_bulan_hujan) ? $iklimjeniskesuburantanah->jumlah_bulan_hujan : '' ?></td>
      <td>Kelembapan</td>
      <td><?= isset($iklimjeniskesuburantanah->kelembapan) ? $iklimjeniskesuburantanah->kelembapan : '' ?></td>
      <td>Suhu Rata-Rata Harian</td>
      <td><?= isset($iklimjeniskesuburantanah->suhu_rata_rata_harian) ? $iklimjeniskesuburantanah->suhu_rata_rata_harian : '' ?></td>
    </tr>
    <tr>
      <td>Tinggi Tempat dari Permukaan Laut</td>
      <td colspan="7"><?= isset($iklimjeniskesuburantanah->tinggi_tempat_permukaan_laut) ? $iklimjeniskesuburantanah->tinggi_tempat_permukaan_laut : '' ?></td>
    </tr>
    <tr>
      <td colspan="8">Jenis dan Kesuburan Tanah</td>
    </tr>
    <tr>
      <td>Warna Tanah</td>
      <td><?= isset($iklimjeniskesuburantanah->warna_tanah) ? $iklimjeniskesuburantanah->warna_tanah : '' ?></td>
      <td>Tekstur Tanah</td>
      <td><?= isset($iklimjeniskesuburantanah->tekstur_tanah) ? $iklimjeniskesuburantanah->tekstur_tanah : '' ?></td>
      <td>Tingkat Kemiringan Tanah</td>
      <td><?= isset($iklimjeniskesuburantanah->tk_kemiringan_tanah) ? $iklimjeniskesuburantanah->tk_kemiringan_tanah : '' ?></td>
      <td>Lahan Kritis</td>
      <td><?= isset($iklimjeniskesuburantanah->lahan_kritis) ? $iklimjeniskesuburantanah->lahan_kritis : '' ?></td>
    </tr>
    <tr>
      <td>Lahan Terlantar</td>
      <td colspan="7"><?= isset($iklimjeniskesuburantanah->lahan_terlantar) ? $iklimjeniskesuburantanah->lahan_terlantar : '' ?></td>
    </tr>
  </table>
  <br>
  <table>
    <tr>
      <th colspan="8">TOPOGRAFI, LETAK, ORBITASI</th>
    </tr>
    <tr>
      <td colspan="8">Bentangan Wilayah</td>
    </tr>
    <tr>
      <td>Desa/Kelurahan Daratan Rendah</td>
      <td><?= isset($topografiletakorbitasi->daratan_rendah) ? $topografiletakorbitasi->daratan_rendah : '' ?></td>
      <td>Desa/Kelurahan Berbukit-bukit</td>
      <td><?= isset($topografiletakorbitasi->berbukit_bukit) ? $topografiletakorbitasi->berbukit_bukit : '' ?></td>
      <td>Desa/Kelurahan Daratan Tinggi/Pegunungan</td>
      <td><?= isset($topografiletakorbitasi->daratan_tinggi) ? $topografiletakorbitasi->daratan_tinggi : '' ?></td>
      <td>Desa/Kelurahan Lereng Gunung</td>
      <td><?= isset($topografiletakorbitasi->lereng_gunung) ? $topografiletakorbitasi->lereng_gunung : '' ?></td>
    </tr>
    <tr>
      <td>Desa/Kelurahan Tepi Pantai/Pesisir</td>
      <td><?= isset($topografiletakorbitasi->tepi_pantai) ? $topografiletakorbitasi->tepi_pantai : '' ?></td>
      <td>Desa/Kelurahan Kawasan Rawa</td>
      <td><?= isset($topografiletakorbitasi->kawasan_rawa) ? $topografiletakorbitasi->kawasan_rawa : '' ?></td>
      <td>Desa/Kelurahan Kawasan Gambut</td>
      <td><?= isset($topografiletakorbitasi->kawasan_gambut) ? $topografiletakorbitasi->kawasan_gambut : '' ?></td>
      <td>Desa/Kelurahan Aliran Sungai</td>
      <td><?= isset($topografiletakorbitasi->aliran_sungai) ? $topografiletakorbitasi->aliran_sungai : '' ?></td>
    </tr>
    <tr>
      <td>Desa/Kelurahan Bantaran Sungai</td>
      <td colspan="7"><?= isset($topografiletakorbitasi->bantaran_sungai) ? $topografiletakorbitasi->bantaran_sungai : '' ?></td>
    </tr>
    <tr>
      <td colspan="8">Letak</td>
    </tr>
    <tr>
      <td>Desa/Kelurahan Kawasan Perkantoran</td>
      <td><?= isset($topografiletakorbitasi->kawasan_perkantoran) ? $topografiletakorbitasi->kawasan_perkantoran : '' ?></td>
      <td>Desa/Kelurahan Kawasan Pertokoan Bisnis</td>
      <td><?= isset($topografiletakorbitasi->kawasan_pertokoan) ? $topografiletakorbitasi->kawasan_pertokoan : '' ?></td>
      <td>Desa/Kelurahan Kawasan Campuran</td>
      <td><?= isset($topografiletakorbitasi->kawasan_campuran) ? $topografiletakorbitasi->kawasan_campuran : '' ?></td>
      <td>Desa/Kelurahan Kawasan Industri</td>
      <td><?= isset($topografiletakorbitasi->kawasan_industri) ? $topografiletakorbitasi->kawasan_industri : '' ?></td>
    </tr>
    <tr>
      <td>Desa/Kelurahan Kepulauan</td>
      <td><?= isset($topografiletakorbitasi->kepulauan) ? $topografiletakorbitasi->kepulauan : '' ?></td>
      <td>Desa/Kelurahan Pantai Pesisir</td>
      <td><?= isset($topografiletakorbitasi->pantai_pesisir) ? $topografiletakorbitasi->pantai_pesisir : '' ?></td>
      <td>Desa/Kelurahan Kawasan Hutan</td>
      <td><?= isset($topografiletakorbitasi->kawasan_hutan) ? $topografiletakorbitasi->kawasan_hutan : '' ?></td>
      <td>Desa/Kelurahan Taman Suaka</td>
      <td><?= isset($topografiletakorbitasi->taman_suaka) ? $topografiletakorbitasi->taman_suaka : '' ?></td>
    </tr>
    <tr>
      <td>Desa/Kelurahan Kawasan Wisata</td>
      <td><?= isset($topografiletakorbitasi->kawasan_wisata) ? $topografiletakorbitasi->kawasan_wisata : '' ?></td>
      <td>Desa/Kelurahan Perbatasan dengan Negara Lain</td>
      <td><?= isset($topografiletakorbitasi->batas_negara_lain) ? $topografiletakorbitasi->batas_negara_lain : '' ?></td>
      <td>Desa/Kelurahan Perbatasan dengan Provinsi Lain</td>
      <td><?= isset($topografiletakorbitasi->batas_provinsi_lain) ? $topografiletakorbitasi->batas_provinsi_lain : '' ?></td>
      <td>Desa/Kelurahan Perbatasan dengan Kabupaten Lain</td>
      <td><?= isset($topografiletakorbitasi->batas_kabupaten_lain) ? $topografiletakorbitasi->batas_kabupaten_lain : '' ?></td>
    </tr>
    <tr>
      <td>Desa/Kelurahan Perbatasan Antar Kecamatan Lain</td>
      <td><?= isset($topografiletakorbitasi->batas_antar_kecamatan) ? $topografiletakorbitasi->batas_antar_kecamatan : '' ?></td>
      <td>Desa/Kelurahan DAS/Bantaran Sungai</td>
      <td><?= isset($topografiletakorbitasi->das_bantaransungai) ? $topografiletakorbitasi->das_bantaransungai : '' ?></td>
      <td>Desa/Kelurahan Rawan Banjir</td>
      <td><?= isset($topografiletakorbitasi->rawan_banjir) ? $topografiletakorbitasi->rawan_banjir : '' ?></td>
      <td>Desa/Kelurahan Bebas Banjir</td>
      <td><?= isset($topografiletakorbitasi->bebas_banjir) ? $topografiletakorbitasi->bebas_banjir : '' ?></td>
    </tr>
    <tr>
      <td>Desa/Kelurahan Potensial Tsunami</td>
      <td><?= isset($topografiletakorbitasi->potensial_tsunami) ? $topografiletakorbitasi->potensial_tsunami : '' ?></td>
      <td>Desa/Kelurahan Rawan Jalur Gempa Bumi</td>
      <td colspan="5"><?= isset($topografiletakorbitasi->rawan_jalur_gempa) ? $topografiletakorbitasi->rawan_jalur_gempa : '' ?></td>
    </tr>
    <tr>
      <td colspan="8">Orbitasi</td>
    </tr>
    <tr>
      <td>Jarak ke Ibu Kota Kecamatan (Km)</td>
      <td><?= isset($topografiletakorbitasi->jarak_kecamatan) ? $topografiletakorbitasi->jarak_kecamatan : '' ?></td>
      <td>Lama Jarak Tempuh ke Ibukota Kecamatan dengan Kendaraan Bermotor (Jam)</td>
      <td><?= isset($topografiletakorbitasi->waktu_kecamatan_motor) ? $topografiletakorbitasi->waktu_kecamatan_motor : '' ?></td>
      <td>Lama Jarak Tempuh ke Ibukota Kecamatan dengan Berjalan Kaki atau Kendaraan Non Bermotor (Jam)</td>
      <td><?= isset($topografiletakorbitasi->waktu_kecamatan_nonmotor) ? $topografiletakorbitasi->waktu_kecamatan_nonmotor : '' ?></td>
      <td>Jumlah Kendaraan Umum ke Ibu Kota Kecamatan (Unit)</td>
      <td><?= isset($topografiletakorbitasi->jumlah_kendaraanumum_kecamatan) ? $topografiletakorbitasi->jumlah_kendaraanumum_kecamatan : '' ?></td>
    </tr>
    <tr>
      <td>Jarak ke Ibu Kota Kabupaten/Kota (Km)</td>
      <td><?= isset($topografiletakorbitasi->jarak_kabupaten) ? $topografiletakorbitasi->jarak_kabupaten : '' ?></td>
      <td>Lama Jarak Tempuh ke Ibukota Kabupaten dengan Kendaraan Bermotor (Jam)</td>
      <td><?= isset($topografiletakorbitasi->waktu_kabupaten_motor) ? $topografiletakorbitasi->waktu_kabupaten_motor : '' ?></td>
      <td>Lama Jarak Tempuh ke Ibukota Kabupaten dengan Berjalan Kaki atau Kendaraan Non Bermotor (Jam)</td>
      <td><?= isset($topografiletakorbitasi->waktu_kabupaten_nonmotor) ? $topografiletakorbitasi->waktu_kabupaten_nonmotor : '' ?></td>
      <td>Jumlah Kendaraan Umum ke Ibu Kota kabupaten/Kota (Unit)</td>
      <td><?= isset($topografiletakorbitasi->jumlah_kendaraanumum_kabupaten) ? $topografiletakorbitasi->jumlah_kendaraanumum_kabupaten : '' ?></td>
    </tr>
    <tr>
      <td>Jarak ke Ibu Kota Provinsi (Km)</td>
      <td><?= isset($topografiletakorbitasi->jarak_provinsi) ? $topografiletakorbitasi->jarak_provinsi : '' ?></td>
      <td>Lama Jarak Tempuh ke Ibukota Provinsi dengan Kendaraan Bermotor (Jam)</td>
      <td><?= isset($topografiletakorbitasi->waktu_provinsi_motor) ? $topografiletakorbitasi->waktu_provinsi_motor : '' ?></td>
      <td>Lama Jarak Tempuh ke Ibukota Provinsi dengan Berjalan Kaki atau Kendaraan Non Bermotor (Jam)</td>
      <td><?= isset($topografiletakorbitasi->waktu_provinsi_nonmotor) ? $topografiletakorbitasi->waktu_provinsi_nonmotor : '' ?></td>
      <td>Jumlah Kendaraan Umum ke Ibu Kota Provinsi (Unit)</td>
      <td><?= isset($topografiletakorbitasi->jumlah_kendaraanumum_provinsi) ? $topografiletakorbitasi->jumlah_kendaraanumum_provinsi : '' ?></td>
    </tr>
  </table>
  <br><br>
  <table>
    <tr>
      <th colspan="11">POTENSI PERTANIAN</th>
    </tr>
    <tr>
      <td colspan="11">Kepemilikan Lahan</td>
    </tr>
    <tr>
      <td colspan="11">A. PERTANIAN</td>
    </tr>
    <tr>
      <td>Jenis Lahan</td>
      <td>
        <5 Ha (KK)</td>
      <td>5-10 Ha (KK)</td>
      <td>10–50 Ha (KK)</td>
      <td>50–100 Ha (KK)</td>
      <td>100-500 Ha (KK)</td>
      <td>500-1000 Ha (KK)</td>
      <td>>1000 Ha(KK)</td>
      <td>Memiliki Lahan (KK)</td>
      <td>Tidak Memiliki Lahan (KK)</td>
      <td>Total Keluarga Petani (KK)</td>
    </tr>
    <tr>
      <td>Tanaman Pangan</td>
      <td><?= isset($pertanian->pangan_kurang5ha) ? $pertanian->pangan_kurang5ha : '' ?></td>
      <td><?= isset($pertanian->pangan_5_10ha) ? $pertanian->pangan_5_10ha : '' ?></td>
      <td><?= isset($pertanian->pangan_10_50ha) ? $pertanian->pangan_10_50ha : '' ?></td>
      <td><?= isset($pertanian->pangan_50_100ha) ? $pertanian->pangan_50_100ha : '' ?></td>
      <td><?= isset($pertanian->pangan_100_500ha) ? $pertanian->pangan_100_500ha : '' ?></td>
      <td><?= isset($pertanian->pangan_500_1000ha) ? $pertanian->pangan_500_1000ha : '' ?></td>
      <td><?= isset($pertanian->pangan_lebih1000ha) ? $pertanian->pangan_lebih1000ha : '' ?></td>
      <td><?= isset($pertanian->pangan_memilikilahan) ? $pertanian->pangan_memilikilahan : '' ?></td>
      <td><?= isset($pertanian->pangan_tidakmemilikilahan) ? $pertanian->pangan_tidakmemilikilahan : '' ?></td>
      <td><?= isset($pertanian->pangan_totallahan) ? $pertanian->pangan_totallahan : '' ?></td>
    </tr>
    <tr>
      <td>Tanaman Buah-Buahan</td>
      <td><?= isset($pertanian->buah_kurang5ha) ? $pertanian->buah_kurang5ha : '' ?></td>
      <td><?= isset($pertanian->buah_5_10ha) ? $pertanian->buah_5_10ha : '' ?></td>
      <td><?= isset($pertanian->buah_10_50ha) ? $pertanian->buah_10_50ha : '' ?></td>
      <td><?= isset($pertanian->buah_50_100ha) ? $pertanian->buah_50_100ha : '' ?></td>
      <td><?= isset($pertanian->buah_100_500ha) ? $pertanian->buah_100_500ha : '' ?></td>
      <td><?= isset($pertanian->buah_500_1000ha) ? $pertanian->buah_500_1000ha : '' ?></td>
      <td><?= isset($pertanian->buah_lebih1000ha) ? $pertanian->buah_lebih1000ha : '' ?></td>
      <td><?= isset($pertanian->buah_memilikilahan) ? $pertanian->buah_memilikilahan : '' ?></td>
      <td><?= isset($pertanian->buah_tidakmemilikilahan) ? $pertanian->buah_tidakmemilikilahan : '' ?></td>
      <td><?= isset($pertanian->buah_totallahan) ? $pertanian->buah_totallahan : '' ?></td>
    </tr>
    <tr>
      <td>Tanaman Perkebunan</td>
      <td><?= isset($pertanian->kebun_kurang5ha) ? $pertanian->kebun_kurang5ha : '' ?></td>
      <td><?= isset($pertanian->kebun_5_10ha) ? $pertanian->kebun_5_10ha : '' ?></td>
      <td><?= isset($pertanian->kebun_10_50ha) ? $pertanian->kebun_10_50ha : '' ?></td>
      <td><?= isset($pertanian->kebun_50_100ha) ? $pertanian->kebun_50_100ha : '' ?></td>
      <td><?= isset($pertanian->kebun_100_500ha) ? $pertanian->kebun_100_500ha : '' ?></td>
      <td><?= isset($pertanian->kebun_500_1000ha) ? $pertanian->kebun_500_1000ha : '' ?></td>
      <td><?= isset($pertanian->kebun_lebih1000ha) ? $pertanian->kebun_lebih1000ha : '' ?></td>
      <td><?= isset($pertanian->kebun_memilikilahan) ? $pertanian->kebun_memilikilahan : '' ?></td>
      <td><?= isset($pertanian->kebun_tidakmemilikilahan) ? $pertanian->kebun_tidakmemilikilahan : '' ?></td>
      <td><?= isset($pertanian->kebun_totallahan) ? $pertanian->kebun_totallahan : '' ?></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="6">B. KEHUTANAN</td>
    </tr>
    <tr>
      <td>Jenis</td>
      <td>Milik Negara (Ha)</td>
      <td>Perhutani/Instansi Sektoral (Ha)</td>
      <td>Milik Adat/Ulayat (Ha)</td>
      <td>Milik Masyarakat Perorangan (Ha)</td>
      <td>Total Luas Hutan (Ha)</td>
    </tr>
    @foreach($kehutanan as $htna)
    <tr>
      <td><?= $htna->kgkehutanan->name ?></td>
      <td><?= $htna->miliknegara ?></td>
      <td><?= $htna->perhutani ?></td>
      <td><?= $htna->milikadat ?></td>
      <td><?= $htna->milikmasyarakat ?></td>
      <td><?= $htna->totalluashutan ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="3">Produksi Pertanian dan Perkebunan</td>
    </tr>
    <tr>
      <td colspan="3">LUAS TANAMAN PANGAN MENURUT KOMODITAS PADA TAHUN INI</td>
    </tr>
    <tr>
      <td>Nama Komoditas</td>
      <td>Luas (Ha)</td>
      <td>Hasil Panen (Ton/Ha)</td>
    </tr>
    @foreach($tanamanpangan as $htna)
    <tr>
      <td><?= $htna->kgtanamanpangan->name ?></td>
      <td><?= $htna->luas ?></td>
      <td><?= $htna->hasil ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="3">Produksi Pertanian dan Perkebunan</td>
    </tr>
    <tr>
      <td colspan="3">JENIS KOMODITAS BUAH-BUAHAN YANG DIBUDIDAYAKAN</td>
    </tr>
    <tr>
      <td>Nama Komoditas</td>
      <td>Luas (Ha)</td>
      <td>Hasil Panen (Ton/Ha)</td>
    </tr>
    @foreach($komoditasbuah as $htna)
    <tr>
      <td><?= $htna->kgkomoditasbuah->name ?></td>
      <td><?= $htna->luas ?></td>
      <td><?= $htna->hasil ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="8">PEMASARAN HASIL TANAMAN PANGAN DAN TANAMAN BUAH-BUAHAN</td>
    </tr>
    <tr>
      <td>Dijual Langsung ke Konsumen</td>
      <td><?= isset($pemasaranpanganbuah->jual_konsumen_pangan_buah) ? $pemasaranpanganbuah->jual_konsumen_pangan_buah : '' ?></td>
      <td>Dijual ke Pasar</td>
      <td><?= isset($pemasaranpanganbuah->jual_pasar_pangan_buah) ? $pemasaranpanganbuah->jual_pasar_pangan_buah : '' ?></td>
      <td>Dijual Melalui KUD</td>
      <td><?= isset($pemasaranpanganbuah->jual_kud_pangan_buah) ? $pemasaranpanganbuah->jual_kud_pangan_buah : '' ?></td>
      <td>Dijual Melalui Tengkulak</td>
      <td><?= isset($pemasaranpanganbuah->jual_tengkulak_pangan_buah) ? $pemasaranpanganbuah->jual_tengkulak_pangan_buah : '' ?></td>
    </tr>
    <tr>
      <td>Dijual melalui pengecer</td>
      <td><?= isset($pemasaranpanganbuah->jual_pengecer_pangan_buah) ? $pemasaranpanganbuah->jual_pengecer_pangan_buah : '' ?></td>
      <td>Dijual ke Lumbung Desa/Kel</td>
      <td><?= isset($pemasaranpanganbuah->jual_lumbung_pangan_buah) ? $pemasaranpanganbuah->jual_lumbung_pangan_buah : '' ?></td>
      <td>Tidak Dijual</td>
      <td><?= isset($pemasaranpanganbuah->tidak_jual_pangan_buah) ? $pemasaranpanganbuah->tidak_jual_pangan_buah : '' ?></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="3">TANAMAN APOTIK HIDUP DAN SEJENISNYA</td>
    </tr>
    <tr>
      <td>Jenis Tanaman</td>
      <td>Luas (Ha)</td>
      <td>Hasil Panen (Ton/Ha)</td>
    </tr>
    @foreach($tanamanapotik as $htna)
    <tr>
      <td><?= $htna->kgtanamanapotik->name ?></td>
      <td><?= $htna->luas ?></td>
      <td><?= $htna->hasil ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="3">LUAS DAN HASIL PERKEBUNAN MENURUT JENIS KOMODITAS</td>
    </tr>
    <tr>
      <td rowspan="2">Jenis Komoditas</td>
      <td colspan="2">Luas (Ha)</td>
      <td colspan="2">Hasil Panen (Ton/Ha)</td>
    </tr>
    <th>Luas (Ha)</th>
    <th>Hasil(Ton/Ha)</th>
    <th>Luas (Ha)</th>
    <th>Hasil(Ton/Ha)</th>
    </tr>
    @foreach($hasilperkebunan as $htna)
    <tr>
      <td><?= $htna->kghasilperkebunan->name ?></td>
      <td><?= $htna->luasnegara ?></td>
      <td><?= $htna->hasilnegara ?></td>
      <td><?= $htna->luasrakyat ?></td>
      <td><?= $htna->hasilrakyat ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="8">PEMASARAN HASIL PERKEBUNAN</td>
    </tr>
    <tr>
      <td>Dijual Langsung ke Konsumen</td>
      <td><?= isset($pemasaranhasilperkebunan->jual_konsumen_kebun) ? $pemasaranhasilperkebunan->jual_konsumen_kebun : '' ?></td>
      <td>Dijual ke Pasar</td>
      <td><?= isset($pemasaranhasilperkebunan->jual_pasar_kebun) ? $pemasaranhasilperkebunan->jual_pasar_kebun : '' ?></td>
      <td>Dijual Melalui KUD</td>
      <td><?= isset($pemasaranhasilperkebunan->jual_kud_kebun) ? $pemasaranhasilperkebunan->jual_kud_kebun : '' ?></td>
      <td>Dijual Melalui Tengkulak</td>
      <td><?= isset($pemasaranhasilperkebunan->jual_tengkulak_kebun) ? $pemasaranhasilperkebunan->jual_tengkulak_kebun : '' ?></td>
    </tr>
    <tr>
      <td>Dijual melalui pengecer</td>
      <td><?= isset($pemasaranhasilperkebunan->jual_pengecer_kebun) ? $pemasaranhasilperkebunan->jual_pengecer_kebun : '' ?></td>
      <td>Dijual ke Lumbung Desa/Kel</td>
      <td><?= isset($pemasaranhasilperkebunan->jual_lumbung_kebun) ? $pemasaranhasilperkebunan->jual_lumbung_kebun : '' ?></td>
      <td>Tidak Dijual</td>
      <td><?= isset($pemasaranhasilperkebunan->tidak_jual_kebun) ? $pemasaranhasilperkebunan->tidak_jual_kebun : '' ?></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="2">Kehutanan</td>
    </tr>
    <tr>
      <td colspan="2">HASIL HUTAN</td>
    </tr>
    <tr>
      <td>Nama Komoditas</td>
      <td>Hasil Panen</td>
    </tr>
    @foreach($hasilhutan as $htna)
    <tr>
      <td><?= $htna->kghasilhutan->name ?></td>
      <td><?= $htna->hasil ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="4">KONDISI HUTAN</td>
    </tr>
    <tr>
      <td>Jenis Hutan</td>
      <td>Kondisi Baik (Ha)</td>
      <td>Kondisi Rusak (Ha)</td>
      <td>Total</td>
    </tr>
    @foreach($kondisihutan as $htna)
    <tr>
      <td><?= $htna->kgkondisihutan->name ?></td>
      <td><?= $htna->baik ?></td>
      <td><?= $htna->rusak ?></td>
      <td><?= $htna->total ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="2">DAMPAK YANG TIMBUL DARI PENGOLAHAN HUTAN</td>
    </tr>
    <tr>
      <td>Jenis Dampak</td>
      <td>Dampak</td>
    </tr>
    @foreach($dampakolahhutan as $htna)
    <tr>
      <td><?= $htna->kgdampakolahhutan->name ?></td>
      <td><?= $htna->dampak ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="8">MEKANISME PEMASARAN HASIL HUTAN</td>
    </tr>
    <tr>
      <td>Dijual Langsung ke Konsumen</td>
      <td><?= isset($pemasaranhasilhutan->jual_konsumen_hutan) ? $pemasaranhasilhutan->jual_konsumen_hutan : '' ?></td>
      <td>Dijual ke Pasar</td>
      <td><?= isset($pemasaranhasilhutan->jual_pasar_hutan) ? $pemasaranhasilhutan->jual_pasar_hutan : '' ?></td>
      <td>Dijual Melalui KUD</td>
      <td><?= isset($pemasaranhasilhutan->jual_kud_hutan) ? $pemasaranhasilhutan->jual_kud_hutan : '' ?></td>
      <td>Dijual Melalui Tengkulak</td>
      <td><?= isset($pemasaranhasilhutan->jual_tengkulak_hutan) ? $pemasaranhasilhutan->jual_tengkulak_hutan : '' ?></td>
    </tr>
    <tr>
      <td>Dijual melalui pengecer</td>
      <td><?= isset($pemasaranhasilhutan->jual_pengecer_hutan) ? $pemasaranhasilhutan->jual_pengecer_hutan : '' ?></td>
      <td>Dijual ke Lumbung Desa/Kel</td>
      <td><?= isset($pemasaranhasilhutan->jual_lumbung_hutan) ? $pemasaranhasilhutan->jual_lumbung_hutan : '' ?></td>
      <td>Tidak Dijual</td>
      <td><?= isset($pemasaranhasilhutan->tidak_jual_hutan) ? $pemasaranhasilhutan->tidak_jual_hutan : '' ?></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="3">Peternakan</td>
    </tr>
    <tr>
      <td colspan="3">JENIS POPULASI TERNAK</td>
    </tr>
    <tr>
      <td>Jenis Ternak</td>
      <td>Jumlah Pemilik (Orang)</td>
      <td>Perkiraan Jumlah Populasi (Ekor)</td>
    </tr>
    @foreach($jenispopulasiternak as $htna)
    <tr>
      <td><?= $htna->kgjenispopulasiternak->name ?></td>
      <td><?= $htna->jumlahpemilik ?></td>
      <td><?= $htna->perkiraanjumlah ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="3">PRODUKSI PETERNAKAN</td>
    </tr>
    <tr>
      <td>Jenis Produksi</td>
      <td colspan="2">Hasil Produksi</td>
    </tr>
    @foreach($produksiternak as $htna)
    <tr>
      <td><?= $htna->kgproduksiternak->name ?></td>
      <td colspan="2"><?= $htna->hasil ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="8">KETERSEDIAAN HIJAUAN PAKAN TERNAK</td>
    </tr>
    <tr>
      <td>Luas tanaman pakan ternak (rumput gajah, dll) (Ha)</td>
      <td><?= isset($hijauanpakanternak->ls_tanaman_pakan_ternak) ? $hijauanpakanternak->ls_tanaman_pakan_ternak : '' ?></td>
      <td>Produksi hijauan makanan ternak (Ton/ha)</td>
      <td><?= isset($hijauanpakanternak->produksi_hijauan_pakan_ternak) ? $hijauanpakanternak->produksi_hijauan_pakan_ternak : '' ?></td>
      <td>Luas lahan gembalaan (Ha)</td>
      <td><?= isset($hijauanpakanternak->ls_lahan_gembalaan) ? $hijauanpakanternak->ls_lahan_gembalaan : '' ?></td>
      <td>Dipasok dari Luar Desa/Kelurahan (Ton)</td>
      <td><?= isset($hijauanpakanternak->pasok_dari_luardesa) ? $hijauanpakanternak->pasok_dari_luardesa : '' ?></td>
    </tr>
    <tr>
      <td>Disubsidi Dinas (Ton)</td>
      <td><?= isset($hijauanpakanternak->subsidi_dinas) ? $hijauanpakanternak->subsidi_dinas : '' ?></td>
      <td>Lainnya (Ton)</td>
      <td><?= isset($hijauanpakanternak->lainnya_ketersediaan_hijauan) ? $hijauanpakanternak->lainnya_ketersediaan_hijauan : '' ?></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="2">PEMILIK USAHA PENGOLAHAN HASIL TERNAK</td>
    </tr>
    <tr>
      <td>Jenis Usaha</td>
      <td>Jumlah Pemilik Usaha (Orang)</td>
    </tr>
    @foreach($pemilikusahaternak as $htna)
    <tr>
      <td><?= $htna->kgpemilikusahaternak->name ?></td>
      <td><?= $htna->jumlah ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="8">PEMASARAN HASIL TERNAK</td>
    </tr>
    <tr>
      <td>Dijual Langsung ke Konsumen</td>
      <td><?= isset($pemasaranhasilternak->jual_konsumen_ternak) ? $pemasaranhasilternak->jual_konsumen_ternak : '' ?></td>
      <td>Dijual ke Pasar</td>
      <td><?= isset($pemasaranhasilternak->jual_pasar_ternak) ? $pemasaranhasilternak->jual_pasar_ternak : '' ?></td>
      <td>Dijual Melalui KUD</td>
      <td><?= isset($pemasaranhasilternak->jual_kud_ternak) ? $pemasaranhasilternak->jual_kud_ternak : '' ?></td>
      <td>Dijual Melalui Tengkulak</td>
      <td><?= isset($pemasaranhasilternak->jual_tengkulak_ternak) ? $pemasaranhasilternak->jual_tengkulak_ternak : '' ?></td>
    </tr>
    <tr>
      <td>Dijual melalui pengecer</td>
      <td><?= isset($pemasaranhasilternak->jual_pengecer_ternak) ? $pemasaranhasilternak->jual_pengecer_ternak : '' ?></td>
      <td>Dijual ke Lumbung Desa/Kel</td>
      <td><?= isset($pemasaranhasilternak->jual_lumbung_ternak) ? $pemasaranhasilternak->jual_lumbung_ternak : '' ?></td>
      <td>Tidak Dijual</td>
      <td><?= isset($pemasaranhasilternak->tidak_jual_ternak) ? $pemasaranhasilternak->tidak_jual_ternak : '' ?></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="8">KETERSEDIAAN LAHAN PEMELIHARAAN TERNAK/PADANG PENGEMBALAAN</td>
    </tr>
    <tr>
      <td>Milik Masyarakat Umum (Ha)</td>
      <td><?= isset($ketersediaanlahanternak->milik_masyarakat_ternak) ? $ketersediaanlahanternak->milik_masyarakat_ternak : '' ?></td>
      <td>Milik Perusahaan Peternakan (ranch) (Ha)</td>
      <td><?= isset($ketersediaanlahanternak->milik_perusahaan_ternak) ? $ketersediaanlahanternak->milik_perusahaan_ternak : '' ?></td>
      <td>Milik Perorangan (Ha)</td>
      <td><?= isset($ketersediaanlahanternak->milik_perorangan_ternak) ? $ketersediaanlahanternak->milik_perorangan_ternak : '' ?></td>
      <td>Sewa Pakai (Ha)</td>
      <td><?= isset($ketersediaanlahanternak->sewa_pakai_ternak) ? $ketersediaanlahanternak->sewa_pakai_ternak : '' ?></td>
    </tr>
    <tr>
      <td>Milik Pemerintah (Ha)</td>
      <td><?= isset($ketersediaanlahanternak->milik_pemerintah_ternak) ? $ketersediaanlahanternak->milik_pemerintah_ternak : '' ?></td>
      <td>Milik Masyarakat Adat (Ha)</td>
      <td><?= isset($ketersediaanlahanternak->milik_masyarakat_adat_ternak) ? $ketersediaanlahanternak->milik_masyarakat_adat_ternak : '' ?></td>
      <td>Lainnya (Ha)</td>
      <td><?= isset($ketersediaanlahanternak->lainnya_sedia_lahan_ternak) ? $ketersediaanlahanternak->lainnya_sedia_lahan_ternak : '' ?></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="3">Perikanan</td>
    </tr>
    <tr>
      <td colspan="3">JENIS DAN ALAT PRODUKSI BUDIDAYA IKAN LAUT DAN PAYAU</td>
    </tr>
    <tr>
      <td>Jenis Alat</td>
      <td>Jumlah</td>
      <td>Hasil Produksi (Ton/Tahun)</td>
    </tr>
    @foreach($alatproduksilaut as $htna)
    <tr>
      <td><?= $htna->kgalatproduksilaut->name ?></td>
      <td><?= $htna->jumlah ?></td>
      <td><?= $htna->hasil ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="3">JENIS DAN SARANA PRODUKSI BUDIDAYA IKAN AIR TAWAR</td>
    </tr>
    <tr>
      <td>Jenis Sarana</td>
      <td>Jumlah</td>
      <td>Hasil Produksi (Ton/Tahun)</td>
    </tr>
    @foreach($alatproduksitawar as $htna)
    <tr>
      <td><?= $htna->kgalatproduksitawar->name ?></td>
      <td><?= $htna->jumlah ?></td>
      <td><?= $htna->hasil ?></td>
    </tr>
    @endforeach
    <tr>
  </table>
  <table>
    <tr>
      <td colspan="2">JENIS IKAN DAN PRODUKSI</td>
    </tr>
    <tr>
      <td>Jenis Usaha</td>
      <td>Jumlah Pemilik Usaha (Orang)</td>
    </tr>
    @foreach($jenisikan as $htna)
    <tr>
      <td><?= $htna->kgjenisikan->name ?></td>
      <td><?= $htna->hasil ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="8">PEMASARAN HASIL PERIKANAN</td>
    </tr>
    <tr>
      <td>Dijual Langsung ke Konsumen</td>
      <td><?= isset($pemasaranhasilikan->jual_konsumen_perikanan) ? $pemasaranhasilikan->jual_konsumen_perikanan : '' ?></td>
      <td>Dijual ke Pasar</td>
      <td><?= isset($pemasaranhasilikan->jual_pasar_perikanan) ? $pemasaranhasilikan->jual_pasar_perikanan : '' ?></td>
      <td>Dijual Melalui KUD</td>
      <td><?= isset($pemasaranhasilikan->jual_kud_perikanan) ? $pemasaranhasilikan->jual_kud_perikanan : '' ?></td>
      <td>Dijual Melalui Tengkulak</td>
      <td><?= isset($pemasaranhasilikan->jual_tengkulak_perikanan) ? $pemasaranhasilikan->jual_tengkulak_perikanan : '' ?></td>
    </tr>
    <tr>
      <td>Dijual melalui pengecer</td>
      <td><?= isset($pemasaranhasilikan->jual_pengecer_perikanan) ? $pemasaranhasilikan->jual_pengecer_perikanan : '' ?></td>
      <td>Dijual ke Lumbung Desa/Kel</td>
      <td><?= isset($pemasaranhasilikan->jual_lumbung_perikanan) ? $pemasaranhasilikan->jual_lumbung_perikanan : '' ?></td>
      <td>Tidak Dijual</td>
      <td><?= isset($pemasaranhasilikan->tidak_jual_perikanan) ? $pemasaranhasilikan->tidak_jual_perikanan : '' ?></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="4">Bahan Galian</td>
    </tr>
    <tr>
      <td colspan="4">JENIS, DEPOSIT DAN KEPEMILIKAN BAHAN GALIAN</td>
    </tr>
    <tr>
      <td>Jenis Bahan Galian</td>
      <td>Keberadaan</td>
      <td>Skala Produksi</td>
      <td>Kepemilikan</td>
    </tr>
    @foreach($bahangalian as $htna)
    <tr>
      <td><?= $htna->kgbahangalian->name ?></td>
      <td><?= $htna->keberadaan ?></td>
      <td><?= $htna->skalaproduksi ?></td>
      <td><?= $htna->kepemilikan ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="8">PEMASARAN HASIL GALIAN</td>
    </tr>
    <tr>
      <td>Dijual Langsung ke Konsumen</td>
      <td><?= isset($pemasaranhasilgalian->jual_konsumen_galian) ? $pemasaranhasilgalian->jual_konsumen_galian : '' ?></td>
      <td>Dijual ke Pasar</td>
      <td><?= isset($pemasaranhasilgalian->jual_pasar_galian) ? $pemasaranhasilgalian->jual_pasar_galian : '' ?></td>
      <td>Dijual Melalui KUD</td>
      <td><?= isset($pemasaranhasilgalian->jual_kud_galian) ? $pemasaranhasilgalian->jual_kud_galian : '' ?></td>
      <td>Dijual Melalui Tengkulak</td>
      <td><?= isset($pemasaranhasilgalian->jual_tengkulak_galian) ? $pemasaranhasilgalian->jual_tengkulak_galian : '' ?></td>
    </tr>
    <tr>
      <td>Dijual melalui pengecer</td>
      <td><?= isset($pemasaranhasilgalian->jual_pengecer_galian) ? $pemasaranhasilgalian->jual_pengecer_galian : '' ?></td>
      <td>Dijual ke Perusahaan</td>
      <td><?= isset($pemasaranhasilgalian->jual_perusahaan_galian) ? $pemasaranhasilgalian->jual_perusahaan_galian : '' ?></td>
      <td>Dijual ke Lumbung Desa/Kel</td>
      <td><?= isset($pemasaranhasilgalian->jual_lumbung_galian) ? $pemasaranhasilgalian->jual_lumbung_galian : '' ?></td>
      <td>Tidak Dijual</td>
      <td><?= isset($pemasaranhasilgalian->tidak_jual_galian) ? $pemasaranhasilgalian->tidak_jual_galian : '' ?></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="2">Sumber Daya Air</td>
    </tr>
    <tr>
      <td colspan="2">POTENSI AIR DAN SUMBER DAYA AIR</td>
    </tr>
    <tr>
      <td>Jenis Sumber Air</td>
      <td>Debit/Volume</td>
    </tr>
    @foreach($potensiairsda as $kud)
    <tr>
      <td><?= $kud->kgpotensiairsda->name ?></td>
      <td><?= $kud->debit ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="5">SUMBER DAN KUALITAS AIR BERSIH</td>
    </tr>
    <tr>
      <td>Jenis</td>
      <td>Jumlah</td>
      <td>Kondisi</td>
      <td>Pemanfaatan (KK)</td>
      <td>Kualitas</td>
    </tr>
    @foreach($sumberairbersih as $kud)
    <tr>
      <td><?= $kud->kgsumberairbersih->name ?></td>
      <td><?= $kud->jumlah ?></td>
      <td><?= $kud->kondisi ?></td>
      <td><?= $kud->pemanfaatan ?></td>
      <td><?= $kud->kualitas ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="8">SUNGAI</td>
    </tr>
    <tr>
      <td>Jumlah Sungai</td>
      <td><?= isset($sungai->jumlah_sungai) ? $sungai->jumlah_sungai : '' ?></td>
      <td>Tercemar</td>
      <td><?= isset($sungai->tercemar_sungai) ? $sungai->tercemar_sungai : '' ?></td>
      <td>Pendangkalan/Pengendapan Lumpur Tinggi</td>
      <td><?= isset($sungai->dangkal_sungai) ? $sungai->dangkal_sungai : '' ?></td>
      <td>Keruh</td>
      <td><?= isset($sungai->keruh_sungai) ? $sungai->keruh_sungai : '' ?></td>
    </tr>
    <tr>
      <td>Jernih dan Tidak Tercemar/memenuhi baku mutu air</td>
      <td><?= isset($sungai->jernih_sungai) ? $sungai->jernih_sungai : '' ?></td>
      <td>Berkurangnya biota sungai</td>
      <td><?= isset($sungai->kurangbiota_sungai) ? $sungai->kurangbiota_sungai : '' ?></td>
      <td>Kering</td>
      <td colspan="3"><?= isset($sungai->kering_sungai) ? $sungai->kering_sungai : '' ?></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="8">RAWA</td>
    </tr>
    <tr>
      <td>Luas Rawa</td>
      <td><?= isset($rawa->luas_rawa) ? $rawa->luas_rawa : '' ?></td>
      <td>Perikanan darat maupun laut</td>
      <td><?= isset($rawa->perikanandarat_rawa) ? $rawa->perikanandarat_rawa : '' ?></td>
      <td>Air baku untuk pengolahan air minum</td>
      <td><?= isset($rawa->airbakuolah_rawa) ? $rawa->airbakuolah_rawa : '' ?></td>
      <td>Cuci dan mandi</td>
      <td><?= isset($rawa->cucimandi_rawa) ? $rawa->cucimandi_rawa : '' ?></td>
    </tr>
    <tr>
      <td>Irigasi</td>
      <td><?= isset($rawa->irigasi_rawa) ? $rawa->irigasi_rawa : '' ?></td>
      <td>Buang Air Besar</td>
      <td><?= isset($rawa->bab_rawa) ? $rawa->bab_rawa : '' ?></td>
      <td>Perikanan</td>
      <td><?= isset($rawa->perikanan_rawa) ? $rawa->perikanan_rawa : '' ?></td>
      <td>Sayuran</td>
      <td><?= isset($rawa->sayuran_rawa) ? $rawa->sayuran_rawa : '' ?></td>
    </tr>
    <tr>
      <td>Pembudidayaan Hutan Manggrove</td>
      <td><?= isset($rawa->mangrove_rawa) ? $rawa->mangrove_rawa : '' ?></td>
      <td>Lain-lain</td>
      <td colspan="5"><?= isset($rawa->lain_rawa) ? $rawa->lain_rawa : '' ?></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="8">PEMANFAATAN DAN KONDISI DANAU/WADUK/SITU</td>
    </tr>
    <tr>
      <td colspan="8">Pemanfaatan</td>
    </tr>
    <tr>
      <td>Luas (Ha)</td>
      <td><?= isset($manfaatkondisidanau->luas_danau) ? $manfaatkondisidanau->luas_danau : '' ?></td>
      <td>Perikanan</td>
      <td><?= isset($manfaatkondisidanau->perikanan_danau) ? $manfaatkondisidanau->perikanan_danau : '' ?></td>
      <td>Air Minum/Air Baku</td>
      <td><?= isset($manfaatkondisidanau->airminum_danau) ? $manfaatkondisidanau->airminum_danau : '' ?></td>
      <td>Cuci dan mandi</td>
      <td><?= isset($manfaatkondisidanau->cucimandi_danau) ? $manfaatkondisidanau->cucimandi_danau : '' ?></td>
    </tr>
    <tr>
      <td>Irigasi</td>
      <td><?= isset($manfaatkondisidanau->irigasi_danau) ? $manfaatkondisidanau->irigasi_danau : '' ?></td>
      <td>Buang Air Besar</td>
      <td><?= isset($manfaatkondisidanau->bab_danau) ? $manfaatkondisidanau->bab_danau : '' ?></td>
      <td>Pembangkit listrik</td>
      <td><?= isset($manfaatkondisidanau->pembangkitlistrik_danau) ? $manfaatkondisidanau->pembangkitlistrik_danau : '' ?></td>
      <td>Prasarana transportasi</td>
      <td><?= isset($manfaatkondisidanau->prasaranatransportasi_danau) ? $manfaatkondisidanau->prasaranatransportasi_danau : '' ?></td>
    </tr>
    <tr>
      <td>Lainnya</td>
      <td colspan="7"><?= isset($manfaatkondisidanau->lainnya_danau) ? $manfaatkondisidanau->lainnya_danau : '' ?></td>
    </tr>
    <tr>
      <td colspan="8">Kondisi</td>
    </tr>
    <tr>
      <td>Tercemar</td>
      <td><?= isset($manfaatkondisidanau->tercemar_danau) ? $manfaatkondisidanau->tercemar_danau : '' ?></td>
      <td>Pendangkalan</td>
      <td><?= isset($manfaatkondisidanau->dangkal_danau) ? $manfaatkondisidanau->dangkal_danau : '' ?></td>
      <td>Keruh</td>
      <td><?= isset($manfaatkondisidanau->keruh_danau) ? $manfaatkondisidanau->keruh_danau : '' ?></td>
      <td>Berlumpur</td>
      <td><?= isset($manfaatkondisidanau->berlumpur_danau) ? $manfaatkondisidanau->berlumpur_danau : '' ?></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="6">LUAS DAN HASIL PERKEBUNAN MENURUT JENIS KOMODITAS</td>
    </tr>
    <tr>
      <td rowspan="2">Sumber</td>
      <td rowspan="2">Jumlah Lokasi</td>
      <td rowspan="2">Pemanfaatan(Wisata, Pengobatan Energi, dll)</td>
      <td colspan="3">Kepemilikan/Pengelolaan</td>
    </tr>
    <th>Pemerintah</th>
    <th>Swasta</th>
    <th>Perorangan</th>
    </tr>
    @foreach($airpanas as $kud)
    <tr>
      <td><?= $kud->kgairpanas->name ?></td>
      <td><?= $kud->jumlah ?></td>
      <td><?= $kud->manfaat ?></td>
      <td><?= $kud->pemerintah ?></td>
      <td><?= $kud->swasta ?></td>
      <td><?= $kud->perorangan ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="7">KUALITAS UDARA</td>
    </tr>
    <tr>
      <td rowspan="2">Sumber</td>
      <td rowspan="2">Jumlah Lokasi Sumber Pencemar</td>
      <td rowspan="2">Polutan Pencemar</td>
      <td rowspan="2">Efek Terhadap Kesehatan</td>
      <td colspan="3">Kepemilikan</td>
    </tr>
    <th>Pemerintah</th>
    <th>Swasta</th>
    <th>Perorangan</th>
    </tr>
    @foreach($kualitasudara as $kud)
    <tr>
      <td><?= $kud->kgkualitasudara->name ?></td>
      <td><?= $kud->jumlah ?></td>
      <td><?= $kud->polutan ?></td>
      <td><?= $kud->efek ?></td>
      <td><?= $kud->pemda ?></td>
      <td><?= $kud->swasta ?></td>
      <td><?= $kud->perorangan ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="4">KEBISINGAN</td>
    </tr>
    <tr>
      <td>Tingkat Kebisingan</td>
      <td>Ekses Dampak Kebisingan</td>
      <td>Sumber Kebisingan</td>
      <td>Efek Terhadap Penduduk</td>
    </tr>
    @foreach($kebisingan as $bsg)
    <tr>
      <td><?= $bsg->kgkebisingan->name ?></td>
      <td><?= $bsg->dampak ?></td>
      <td><?= $bsg->sumber ?></td>
      <td><?= $bsg->efek ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="4">RUANG PUBLIK/TAMAN</td>
    </tr>
    <tr>
      <td>Ruang Publik/Taman</td>
      <td>Keberadaan</td>
      <td>Luas (M2)</td>
      <td>Tingkat Pemanfaatan</td>
    </tr>
    @foreach($ruangpublik as $rpt)
    <tr>
      <td><?= $rpt->kgruangpublik->name ?></td>
      <td><?= $rpt->keberadaan ?></td>
      <td><?= $rpt->luas ?></td>
      <td><?= $rpt->status ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="3">POTENSI WISATA</td>
    </tr>
    <tr>
      <td>Lokasi/Tempat/Area Wisata</td>
      <td>Luas (Ha)</td>
      <td>Tingkat Pemanfaatan</td>
    </tr>
    @foreach($potensiwisata as $ptws)
    <tr>
      <td><?= $ptws->kgpotensiwisata->name ?></td>
      <td><?= $ptws->luas ?></td>
      <td><?= $ptws->status ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="5">POTENSI SUMBER DAYA MANUSIA</td>
    </tr>
    <tr>
      <td colspan="5">Jumlah</td>
    </tr>
    <tr>
      <td>Jumlah Laki-Laki</td>
      <td>Jumlah Perempuan</td>
      <td>Jumlah Total</td>
      <td>Jumlah Kepala Keluarga</td>
      <td>Kepadatan Penduduk (per km)</td>
    </tr>
    <tr>
      <td>{{ $jumlahlakilaki }}</td>
      <td>{{ $jumlahperempuan }}</td>
      <td>{{ $jumlahpenduduk }}</td>
      <td>{{ $jumlahkk }}</td>
      <td>{{ number_format($jumlahpenduduk/1,2) }}</td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="9">Usia</td>
    </tr>
    <tr>
      <td>Usia</td>
      <td>Laki-Laki (Orang)</td>
      <td>Perempuan (Orang)</td>
      <td>Usia</td>
      <td>Laki-Laki (Orang)</td>
      <td>Perempuan (Orang)</td>
      <td>Usia</td>
      <td>Laki-Laki (Orang)</td>
      <td>Perempuan (Orang)</td>
    </tr>
    <tr>
      <td>0-12 bulan</td>
      <td>{{ $umur0_lk }}</td>
      <td>{{ $umur0_pr }}</td>
      <td>26</td>
      <td>{{ $umur26_lk }}</td>
      <td>{{ $umur26_pr }}</td>
      <td>52</td>
      <td>{{ $umur52_lk }}</td>
      <td>{{ $umur52_pr }}</td>
    </tr>
    <tr>
      <td>1</td>
      <td>{{ $umur1_lk }}</td>
      <td>{{ $umur1_pr }}</td>
      <td>27</td>
      <td>{{ $umur27_lk }}</td>
      <td>{{ $umur27_pr }}</td>
      <td>53</td>
      <td>{{ $umur53_lk }}</td>
      <td>{{ $umur53_pr }}</td>
    </tr>
    <tr>
      <td>2</td>
      <td>{{ $umur2_lk }}</td>
      <td>{{ $umur2_pr }}</td>
      <td>28</td>
      <td>{{ $umur28_lk }}</td>
      <td>{{ $umur28_pr }}</td>
      <td>54</td>
      <td>{{ $umur54_lk }}</td>
      <td>{{ $umur54_pr }}</td>
    </tr>
    <tr>
      <td>3</td>
      <td>{{ $umur3_lk }}</td>
      <td>{{ $umur3_pr }}</td>
      <td>29</td>
      <td>{{ $umur29_lk }}</td>
      <td>{{ $umur29_pr }}</td>
      <td>55</td>
      <td>{{ $umur55_lk }}</td>
      <td>{{ $umur55_pr }}</td>
    </tr>
    <tr>
      <td>4</td>
      <td>{{ $umur4_lk }}</td>
      <td>{{ $umur4_pr }}</td>
      <td>30</td>
      <td>{{ $umur30_lk }}</td>
      <td>{{ $umur30_pr }}</td>
      <td>56</td>
      <td>{{ $umur56_lk }}</td>
      <td>{{ $umur56_pr }}</td>
    </tr>
    <tr>
      <td>5</td>
      <td>{{ $umur5_lk }}</td>
      <td>{{ $umur5_pr }}</td>
      <td>31</td>
      <td>{{ $umur31_lk }}</td>
      <td>{{ $umur31_pr }}</td>
      <td>57</td>
      <td>{{ $umur57_lk }}</td>
      <td>{{ $umur57_pr }}</td>
    </tr>
    <tr>
      <td>6</td>
      <td>{{ $umur6_lk }}</td>
      <td>{{ $umur6_pr }}</td>
      <td>32</td>
      <td>{{ $umur32_lk }}</td>
      <td>{{ $umur32_pr }}</td>
      <td>58</td>
      <td>{{ $umur58_lk }}</td>
      <td>{{ $umur58_pr }}</td>
    </tr>
    <tr>
      <td>7</td>
      <td>{{ $umur7_lk }}</td>
      <td>{{ $umur7_pr }}</td>
      <td>33</td>
      <td>{{ $umur33_lk }}</td>
      <td>{{ $umur33_pr }}</td>
      <td>59</td>
      <td>{{ $umur59_lk }}</td>
      <td>{{ $umur59_pr }}</td>
    </tr>
    <tr>
      <td>8</td>
      <td>{{ $umur8_lk }}</td>
      <td>{{ $umur8_pr }}</td>
      <td>34</td>
      <td>{{ $umur34_lk }}</td>
      <td>{{ $umur34_pr }}</td>
      <td>60</td>
      <td>{{ $umur60_lk }}</td>
      <td>{{ $umur60_pr }}</td>
    </tr>
    <tr>
      <td>9</td>
      <td>{{ $umur9_lk }}</td>
      <td>{{ $umur9_pr }}</td>
      <td>35</td>
      <td>{{ $umur35_lk }}</td>
      <td>{{ $umur35_pr }}</td>
      <td>61</td>
      <td>{{ $umur61_lk }}</td>
      <td>{{ $umur61_pr }}</td>
    </tr>
    <tr>
      <td>10</td>
      <td>{{ $umur10_lk }}</td>
      <td>{{ $umur10_pr }}</td>
      <td>36</td>
      <td>{{ $umur36_lk }}</td>
      <td>{{ $umur36_pr }}</td>
      <td>62</td>
      <td>{{ $umur62_lk }}</td>
      <td>{{ $umur62_pr }}</td>
    </tr>
    <tr>
      <td>11</td>
      <td>{{ $umur11_lk }}</td>
      <td>{{ $umur11_pr }}</td>
      <td>37</td>
      <td>{{ $umur37_lk }}</td>
      <td>{{ $umur37_pr }}</td>
      <td>63</td>
      <td>{{ $umur63_lk }}</td>
      <td>{{ $umur63_pr }}</td>
    </tr>
    <tr>
      <td>12</td>
      <td>{{ $umur12_lk }}</td>
      <td>{{ $umur12_pr }}</td>
      <td>38</td>
      <td>{{ $umur38_lk }}</td>
      <td>{{ $umur38_pr }}</td>
      <td>64</td>
      <td>{{ $umur64_lk }}</td>
      <td>{{ $umur64_pr }}</td>
    </tr>
    <tr>
      <td>13</td>
      <td>{{ $umur13_lk }}</td>
      <td>{{ $umur13_pr }}</td>
      <td>39</td>
      <td>{{ $umur39_lk }}</td>
      <td>{{ $umur39_pr }}</td>
      <td>65</td>
      <td>{{ $umur65_lk }}</td>
      <td>{{ $umur65_pr }}</td>
    </tr>
    <tr>
      <td>14</td>
      <td>{{ $umur14_lk }}</td>
      <td>{{ $umur14_pr }}</td>
      <td>40</td>
      <td>{{ $umur40_lk }}</td>
      <td>{{ $umur40_pr }}</td>
      <td>66</td>
      <td>{{ $umur66_lk }}</td>
      <td>{{ $umur66_pr }}</td>
    </tr>
    <tr>
      <td>15</td>
      <td>{{ $umur15_lk }}</td>
      <td>{{ $umur15_pr }}</td>
      <td>41</td>
      <td>{{ $umur41_lk }}</td>
      <td>{{ $umur41_pr }}</td>
      <td>67</td>
      <td>{{ $umur67_lk }}</td>
      <td>{{ $umur67_pr }}</td>
    </tr>
    <tr>
      <td>16</td>
      <td>{{ $umur16_lk }}</td>
      <td>{{ $umur16_pr }}</td>
      <td>42</td>
      <td>{{ $umur42_lk }}</td>
      <td>{{ $umur42_pr }}</td>
      <td>68</td>
      <td>{{ $umur68_lk }}</td>
      <td>{{ $umur68_pr }}</td>
    </tr>
    <tr>
      <td>17</td>
      <td>{{ $umur17_lk }}</td>
      <td>{{ $umur17_pr }}</td>
      <td>43</td>
      <td>{{ $umur43_lk }}</td>
      <td>{{ $umur43_pr }}</td>
      <td>69</td>
      <td>{{ $umur69_lk }}</td>
      <td>{{ $umur69_pr }}</td>
    </tr>
    <tr>
      <td>18</td>
      <td>{{ $umur18_lk }}</td>
      <td>{{ $umur18_pr }}</td>
      <td>44</td>
      <td>{{ $umur44_lk }}</td>
      <td>{{ $umur44_pr }}</td>
      <td>70</td>
      <td>{{ $umur70_lk }}</td>
      <td>{{ $umur70_pr }}</td>
    </tr>
    <tr>
      <td>19</td>
      <td>{{ $umur19_lk }}</td>
      <td>{{ $umur19_pr }}</td>
      <td>45</td>
      <td>{{ $umur45_lk }}</td>
      <td>{{ $umur45_pr }}</td>
      <td>71</td>
      <td>{{ $umur71_lk }}</td>
      <td>{{ $umur71_pr }}</td>
    </tr>
    <tr>
      <td>20</td>
      <td>{{ $umur20_lk }}</td>
      <td>{{ $umur20_pr }}</td>
      <td>46</td>
      <td>{{ $umur46_lk }}</td>
      <td>{{ $umur46_pr }}</td>
      <td>72</td>
      <td>{{ $umur72_lk }}</td>
      <td>{{ $umur72_pr }}</td>
    </tr>
    <tr>
      <td>21</td>
      <td>{{ $umur21_lk }}</td>
      <td>{{ $umur21_pr }}</td>
      <td>47</td>
      <td>{{ $umur47_lk }}</td>
      <td>{{ $umur47_pr }}</td>
      <td>73</td>
      <td>{{ $umur73_lk }}</td>
      <td>{{ $umur73_pr }}</td>
    </tr>
    <tr>
      <td>22</td>
      <td>{{ $umur22_lk }}</td>
      <td>{{ $umur22_pr }}</td>
      <td>48</td>
      <td>{{ $umur48_lk }}</td>
      <td>{{ $umur48_pr }}</td>
      <td>74</td>
      <td>{{ $umur74_lk }}</td>
      <td>{{ $umur74_pr }}</td>
    </tr>
    <tr>
      <td>23</td>
      <td>{{ $umur23_lk }}</td>
      <td>{{ $umur23_pr }}</td>
      <td>49</td>
      <td>{{ $umur49_lk }}</td>
      <td>{{ $umur49_pr }}</td>
      <td>75</td>
      <td>{{ $umur75_lk }}</td>
      <td>{{ $umur75_pr }}</td>
    </tr>
    <tr>
      <td>24</td>
      <td>{{ $umur24_lk }}</td>
      <td>{{ $umur24_pr }}</td>
      <td>50</td>
      <td>{{ $umur50_lk }}</td>
      <td>{{ $umur50_pr }}</td>
      <td>>75 Tahun</td>
      <td>{{ $umur75atas_lk }}</td>
      <td>{{ $umur75atas_pr }}</td>
    </tr>
    <tr>
      <td>25</td>
      <td>{{ $umur25_lk }}</td>
      <td>{{ $umur25_pr }}</td>
      <td>51</td>
      <td>{{ $umur51_lk }}</td>
      <td>{{ $umur51_pr }}</td>
      <td>Total</td>
      <td>{{ $total_lk }}</td>
      <td>{{ $total_pr }}</td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="3">Pendidikan</td>
    </tr>
    <tr>
      <td>Tingkat Pendidikan</td>
      <td>Laki-Laki (Orang)</td>
      <td>Perempuan (Orang)</td>
    </tr>
    @if($jml_pdk_lk1 == 0 && $jml_pdk_pr1 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[0]->name }}</td>
      <td>{{ $jml_pdk_lk1 }}</td>
      <td>{{ $jml_pdk_pr1 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk2 == 0 && $jml_pdk_pr2 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[1]->name }}</td>
      <td>{{ $jml_pdk_lk2 }}</td>
      <td>{{ $jml_pdk_pr2 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk3 == 0 && $jml_pdk_pr3 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[2]->name }}</td>
      <td>{{ $jml_pdk_lk3 }}</td>
      <td>{{ $jml_pdk_pr3 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk4 == 0 && $jml_pdk_pr4 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[3]->name }}</td>
      <td>{{ $jml_pdk_lk4 }}</td>
      <td>{{ $jml_pdk_pr4 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk5 == 0 && $jml_pdk_pr5 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[4]->name }}</td>
      <td>{{ $jml_pdk_lk5 }}</td>
      <td>{{ $jml_pdk_pr5 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk6 == 0 && $jml_pdk_pr6 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[5]->name }}</td>
      <td>{{ $jml_pdk_lk6 }}</td>
      <td>{{ $jml_pdk_pr6 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk7 == 0 && $jml_pdk_pr7 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[6]->name }}</td>
      <td>{{ $jml_pdk_lk7 }}</td>
      <td>{{ $jml_pdk_pr7 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk8 == 0 && $jml_pdk_pr8 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[7]->name }}</td>
      <td>{{ $jml_pdk_lk8 }}</td>
      <td>{{ $jml_pdk_pr8 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk9 == 0 && $jml_pdk_pr9 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[8]->name }}</td>
      <td>{{ $jml_pdk_lk9 }}</td>
      <td>{{ $jml_pdk_pr9 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk10 == 0 && $jml_pdk_pr10 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[9]->name }}</td>
      <td>{{ $jml_pdk_lk10 }}</td>
      <td>{{ $jml_pdk_pr10 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk11 == 0 && $jml_pdk_pr11 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[10]->name }}</td>
      <td>{{ $jml_pdk_lk11 }}</td>
      <td>{{ $jml_pdk_pr11 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk12 == 0 && $jml_pdk_pr12 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[11]->name }}</td>
      <td>{{ $jml_pdk_lk12 }}</td>
      <td>{{ $jml_pdk_pr12 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk13 == 0 && $jml_pdk_pr13 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[12]->name }}</td>
      <td>{{ $jml_pdk_lk13 }}</td>
      <td>{{ $jml_pdk_pr13 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk14 == 0 && $jml_pdk_pr14 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[13]->name }}</td>
      <td>{{ $jml_pdk_lk14 }}</td>
      <td>{{ $jml_pdk_pr14 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk15 == 0 && $jml_pdk_pr15 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[14]->name }}</td>
      <td>{{ $jml_pdk_lk15 }}</td>
      <td>{{ $jml_pdk_pr15 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk16 == 0 && $jml_pdk_pr16 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[15]->name }}</td>
      <td>{{ $jml_pdk_lk16 }}</td>
      <td>{{ $jml_pdk_pr16 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk17 == 0 && $jml_pdk_pr17 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[16]->name }}</td>
      <td>{{ $jml_pdk_lk17 }}</td>
      <td>{{ $jml_pdk_pr17 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk18 == 0 && $jml_pdk_pr18 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[17]->name }}</td>
      <td>{{ $jml_pdk_lk18 }}</td>
      <td>{{ $jml_pdk_pr18 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk19 == 0 && $jml_pdk_pr19 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[18]->name }}</td>
      <td>{{ $jml_pdk_lk19 }}</td>
      <td>{{ $jml_pdk_pr19 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk20 == 0 && $jml_pdk_pr20 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[19]->name }}</td>
      <td>{{ $jml_pdk_lk20 }}</td>
      <td>{{ $jml_pdk_pr20 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk21 == 0 && $jml_pdk_pr21 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[20]->name }}</td>
      <td>{{ $jml_pdk_lk21 }}</td>
      <td>{{ $jml_pdk_pr21 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk22 == 0 && $jml_pdk_pr22 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[21]->name }}</td>
      <td>{{ $jml_pdk_lk22 }}</td>
      <td>{{ $jml_pdk_pr22 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk23 == 0 && $jml_pdk_pr23 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[22]->name }}</td>
      <td>{{ $jml_pdk_lk23 }}</td>
      <td>{{ $jml_pdk_pr23 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk24 == 0 && $jml_pdk_pr24 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[23]->name }}</td>
      <td>{{ $jml_pdk_lk24 }}</td>
      <td>{{ $jml_pdk_pr24 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk25 == 0 && $jml_pdk_pr25 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[24]->name }}</td>
      <td>{{ $jml_pdk_lk25 }}</td>
      <td>{{ $jml_pdk_pr25 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk26 == 0 && $jml_pdk_pr26 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[25]->name }}</td>
      <td>{{ $jml_pdk_lk26 }}</td>
      <td>{{ $jml_pdk_pr26 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk27 == 0 && $jml_pdk_pr27 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[26]->name }}</td>
      <td>{{ $jml_pdk_lk27 }}</td>
      <td>{{ $jml_pdk_pr27 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk28 == 0 && $jml_pdk_pr28 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[27]->name }}</td>
      <td>{{ $jml_pdk_lk28 }}</td>
      <td>{{ $jml_pdk_pr28 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk29 == 0 && $jml_pdk_pr29 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[28]->name }}</td>
      <td>{{ $jml_pdk_lk29 }}</td>
      <td>{{ $jml_pdk_pr29 }}</td>
    </tr>
    @endif

    @if($jml_pdk_lk30 == 0 && $jml_pdk_pr30 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $pendidikansedang[29]->name }}</td>
      <td>{{ $jml_pdk_lk30 }}</td>
      <td>{{ $jml_pdk_pr30 }}</td>
    </tr>
    @endif
  </table>
  <table>
    <tr>
      <td colspan="3">Mata Pencaharian Pokok</td>
    </tr>
    <tr>
      <td>Jenis Pekerjaan</td>
      <td>Laki-Laki (Orang)</td>
      <td>Perempuan (Orang)</td>
    </tr>
    @if($jml_krj_lk1 == 0 && $jml_krj_pr1 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[0]->name }}</td>
      <td>{{ $jml_krj_lk1 }}</td>
      <td>{{ $jml_krj_pr1 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk2 == 0 && $jml_krj_pr2 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[1]->name }}</td>
      <td>{{ $jml_krj_lk2 }}</td>
      <td>{{ $jml_krj_pr2 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk3 == 0 && $jml_krj_pr3 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[2]->name }}</td>
      <td>{{ $jml_krj_lk3 }}</td>
      <td>{{ $jml_krj_pr3 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk4 == 0 && $jml_krj_pr4 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[3]->name }}</td>
      <td>{{ $jml_krj_lk4 }}</td>
      <td>{{ $jml_krj_pr4 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk5 == 0 && $jml_krj_pr5 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[4]->name }}</td>
      <td>{{ $jml_krj_lk5 }}</td>
      <td>{{ $jml_krj_pr5 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk6 == 0 && $jml_krj_pr6 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[5]->name }}</td>
      <td>{{ $jml_krj_lk6 }}</td>
      <td>{{ $jml_krj_pr6 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk7 == 0 && $jml_krj_pr7 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[6]->name }}</td>
      <td>{{ $jml_krj_lk7 }}</td>
      <td>{{ $jml_krj_pr7 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk8 == 0 && $jml_krj_pr8 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[7]->name }}</td>
      <td>{{ $jml_krj_lk8 }}</td>
      <td>{{ $jml_krj_pr8 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk9 == 0 && $jml_krj_pr9 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[8]->name }}</td>
      <td>{{ $jml_krj_lk9 }}</td>
      <td>{{ $jml_krj_pr9 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk10 == 0 && $jml_krj_pr10 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[9]->name }}</td>
      <td>{{ $jml_krj_lk10 }}</td>
      <td>{{ $jml_krj_pr10 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk11 == 0 && $jml_krj_pr11 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[10]->name }}</td>
      <td>{{ $jml_krj_lk11 }}</td>
      <td>{{ $jml_krj_pr11 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk12 == 0 && $jml_krj_pr12 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[11]->name }}</td>
      <td>{{ $jml_krj_lk12 }}</td>
      <td>{{ $jml_krj_pr12 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk13 == 0 && $jml_krj_pr13 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[12]->name }}</td>
      <td>{{ $jml_krj_lk13 }}</td>
      <td>{{ $jml_krj_pr13 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk14 == 0 && $jml_krj_pr14 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[13]->name }}</td>
      <td>{{ $jml_krj_lk14 }}</td>
      <td>{{ $jml_krj_pr14 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk15 == 0 && $jml_krj_pr15 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[14]->name }}</td>
      <td>{{ $jml_krj_lk15 }}</td>
      <td>{{ $jml_krj_pr15 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk16 == 0 && $jml_krj_pr16 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[15]->name }}</td>
      <td>{{ $jml_krj_lk16 }}</td>
      <td>{{ $jml_krj_pr16 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk17 == 0 && $jml_krj_pr17 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[16]->name }}</td>
      <td>{{ $jml_krj_lk17 }}</td>
      <td>{{ $jml_krj_pr17 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk18 == 0 && $jml_krj_pr18 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[17]->name }}</td>
      <td>{{ $jml_krj_lk18 }}</td>
      <td>{{ $jml_krj_pr18 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk19 == 0 && $jml_krj_pr19 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[18]->name }}</td>
      <td>{{ $jml_krj_lk19 }}</td>
      <td>{{ $jml_krj_pr19 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk20 == 0 && $jml_krj_pr20 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[19]->name }}</td>
      <td>{{ $jml_krj_lk20 }}</td>
      <td>{{ $jml_krj_pr20 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk21 == 0 && $jml_krj_pr21 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[20]->name }}</td>
      <td>{{ $jml_krj_lk21 }}</td>
      <td>{{ $jml_krj_pr21 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk22 == 0 && $jml_krj_pr22 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[21]->name }}</td>
      <td>{{ $jml_krj_lk22 }}</td>
      <td>{{ $jml_krj_pr22 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk23 == 0 && $jml_krj_pr23 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[22]->name }}</td>
      <td>{{ $jml_krj_lk23 }}</td>
      <td>{{ $jml_krj_pr23 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk24 == 0 && $jml_krj_pr24 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[23]->name }}</td>
      <td>{{ $jml_krj_lk24 }}</td>
      <td>{{ $jml_krj_pr24 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk25 == 0 && $jml_krj_pr25 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[24]->name }}</td>
      <td>{{ $jml_krj_lk25 }}</td>
      <td>{{ $jml_krj_pr25 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk26 == 0 && $jml_krj_pr26 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[25]->name }}</td>
      <td>{{ $jml_krj_lk26 }}</td>
      <td>{{ $jml_krj_pr26 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk27 == 0 && $jml_krj_pr27 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[26]->name }}</td>
      <td>{{ $jml_krj_lk27 }}</td>
      <td>{{ $jml_krj_pr27 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk28 == 0 && $jml_krj_pr28 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[27]->name }}</td>
      <td>{{ $jml_krj_lk28 }}</td>
      <td>{{ $jml_krj_pr28 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk29 == 0 && $jml_krj_pr29 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[28]->name }}</td>
      <td>{{ $jml_krj_lk29 }}</td>
      <td>{{ $jml_krj_pr29 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk30 == 0 && $jml_krj_pr30 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[29]->name }}</td>
      <td>{{ $jml_krj_lk30 }}</td>
      <td>{{ $jml_krj_pr30 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk31 == 0 && $jml_krj_pr31 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[30]->name }}</td>
      <td>{{ $jml_krj_lk31 }}</td>
      <td>{{ $jml_krj_pr31 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk32 == 0 && $jml_krj_pr32 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[31]->name }}</td>
      <td>{{ $jml_krj_lk32 }}</td>
      <td>{{ $jml_krj_pr32 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk33 == 0 && $jml_krj_pr33 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[32]->name }}</td>
      <td>{{ $jml_krj_lk33 }}</td>
      <td>{{ $jml_krj_pr33 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk34 == 0 && $jml_krj_pr34 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[33]->name }}</td>
      <td>{{ $jml_krj_lk34 }}</td>
      <td>{{ $jml_krj_pr34 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk35 == 0 && $jml_krj_pr35 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[34]->name }}</td>
      <td>{{ $jml_krj_lk35 }}</td>
      <td>{{ $jml_krj_pr35 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk36 == 0 && $jml_krj_pr36 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[35]->name }}</td>
      <td>{{ $jml_krj_lk36 }}</td>
      <td>{{ $jml_krj_pr36 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk37 == 0 && $jml_krj_pr37 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[36]->name }}</td>
      <td>{{ $jml_krj_lk37 }}</td>
      <td>{{ $jml_krj_pr37 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk38 == 0 && $jml_krj_pr38 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[37]->name }}</td>
      <td>{{ $jml_krj_lk38 }}</td>
      <td>{{ $jml_krj_pr38 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk39 == 0 && $jml_krj_pr39 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[38]->name }}</td>
      <td>{{ $jml_krj_lk39 }}</td>
      <td>{{ $jml_krj_pr39 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk40 == 0 && $jml_krj_pr40 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[39]->name }}</td>
      <td>{{ $jml_krj_lk40 }}</td>
      <td>{{ $jml_krj_pr40 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk41 == 0 && $jml_krj_pr41 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[40]->name }}</td>
      <td>{{ $jml_krj_lk41 }}</td>
      <td>{{ $jml_krj_pr41 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk42 == 0 && $jml_krj_pr42 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[41]->name }}</td>
      <td>{{ $jml_krj_lk42 }}</td>
      <td>{{ $jml_krj_pr42 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk43 == 0 && $jml_krj_pr43 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[42]->name }}</td>
      <td>{{ $jml_krj_lk43 }}</td>
      <td>{{ $jml_krj_pr43 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk44 == 0 && $jml_krj_pr44 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[43]->name }}</td>
      <td>{{ $jml_krj_lk44 }}</td>
      <td>{{ $jml_krj_pr44 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk45 == 0 && $jml_krj_pr45 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[44]->name }}</td>
      <td>{{ $jml_krj_lk45 }}</td>
      <td>{{ $jml_krj_pr45 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk46 == 0 && $jml_krj_pr46 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[45]->name }}</td>
      <td>{{ $jml_krj_lk46 }}</td>
      <td>{{ $jml_krj_pr46 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk47 == 0 && $jml_krj_pr47 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[46]->name }}</td>
      <td>{{ $jml_krj_lk47 }}</td>
      <td>{{ $jml_krj_pr47 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk48 == 0 && $jml_krj_pr48 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[47]->name }}</td>
      <td>{{ $jml_krj_lk48 }}</td>
      <td>{{ $jml_krj_pr48 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk49 == 0 && $jml_krj_pr49 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[48]->name }}</td>
      <td>{{ $jml_krj_lk49 }}</td>
      <td>{{ $jml_krj_pr49 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk50 == 0 && $jml_krj_pr50 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[49]->name }}</td>
      <td>{{ $jml_krj_lk50 }}</td>
      <td>{{ $jml_krj_pr50 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk51 == 0 && $jml_krj_pr51 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[50]->name }}</td>
      <td>{{ $jml_krj_lk51 }}</td>
      <td>{{ $jml_krj_pr51 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk52 == 0 && $jml_krj_pr52 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[51]->name }}</td>
      <td>{{ $jml_krj_lk52 }}</td>
      <td>{{ $jml_krj_pr52 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk53 == 0 && $jml_krj_pr53 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[52]->name }}</td>
      <td>{{ $jml_krj_lk53 }}</td>
      <td>{{ $jml_krj_pr53 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk54 == 0 && $jml_krj_pr54 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[53]->name }}</td>
      <td>{{ $jml_krj_lk54 }}</td>
      <td>{{ $jml_krj_pr54 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk55 == 0 && $jml_krj_pr55 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[54]->name }}</td>
      <td>{{ $jml_krj_lk55 }}</td>
      <td>{{ $jml_krj_pr55 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk56 == 0 && $jml_krj_pr56 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[55]->name }}</td>
      <td>{{ $jml_krj_lk56 }}</td>
      <td>{{ $jml_krj_pr56 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk57 == 0 && $jml_krj_pr57 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[56]->name }}</td>
      <td>{{ $jml_krj_lk57 }}</td>
      <td>{{ $jml_krj_pr57 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk58 == 0 && $jml_krj_pr58 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[57]->name }}</td>
      <td>{{ $jml_krj_lk58 }}</td>
      <td>{{ $jml_krj_pr58 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk59 == 0 && $jml_krj_pr59 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[58]->name }}</td>
      <td>{{ $jml_krj_lk59 }}</td>
      <td>{{ $jml_krj_pr59 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk60 == 0 && $jml_krj_pr60 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[59]->name }}</td>
      <td>{{ $jml_krj_lk60 }}</td>
      <td>{{ $jml_krj_pr60 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk61 == 0 && $jml_krj_pr61 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[60]->name }}</td>
      <td>{{ $jml_krj_lk61 }}</td>
      <td>{{ $jml_krj_pr61 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk62 == 0 && $jml_krj_pr62 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[61]->name }}</td>
      <td>{{ $jml_krj_lk62 }}</td>
      <td>{{ $jml_krj_pr62 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk63 == 0 && $jml_krj_pr63 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[62]->name }}</td>
      <td>{{ $jml_krj_lk63 }}</td>
      <td>{{ $jml_krj_pr63 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk64 == 0 && $jml_krj_pr64 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[63]->name }}</td>
      <td>{{ $jml_krj_lk64 }}</td>
      <td>{{ $jml_krj_pr64 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk65 == 0 && $jml_krj_pr65 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[64]->name }}</td>
      <td>{{ $jml_krj_lk65 }}</td>
      <td>{{ $jml_krj_pr65 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk66 == 0 && $jml_krj_pr66 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[65]->name }}</td>
      <td>{{ $jml_krj_lk66 }}</td>
      <td>{{ $jml_krj_pr66 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk67 == 0 && $jml_krj_pr67 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[66]->name }}</td>
      <td>{{ $jml_krj_lk67 }}</td>
      <td>{{ $jml_krj_pr67 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk68 == 0 && $jml_krj_pr68 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[67]->name }}</td>
      <td>{{ $jml_krj_lk68 }}</td>
      <td>{{ $jml_krj_pr68 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk69 == 0 && $jml_krj_pr69 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[68]->name }}</td>
      <td>{{ $jml_krj_lk69 }}</td>
      <td>{{ $jml_krj_pr69 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk70 == 0 && $jml_krj_pr70 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[69]->name }}</td>
      <td>{{ $jml_krj_lk70 }}</td>
      <td>{{ $jml_krj_pr70 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk71 == 0 && $jml_krj_pr71 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[70]->name }}</td>
      <td>{{ $jml_krj_lk71 }}</td>
      <td>{{ $jml_krj_pr71 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk72 == 0 && $jml_krj_pr72 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[71]->name }}</td>
      <td>{{ $jml_krj_lk72 }}</td>
      <td>{{ $jml_krj_pr72 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk73 == 0 && $jml_krj_pr73 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[72]->name }}</td>
      <td>{{ $jml_krj_lk73 }}</td>
      <td>{{ $jml_krj_pr73 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk74 == 0 && $jml_krj_pr74 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[73]->name }}</td>
      <td>{{ $jml_krj_lk74 }}</td>
      <td>{{ $jml_krj_pr74 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk75 == 0 && $jml_krj_pr75 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[74]->name }}</td>
      <td>{{ $jml_krj_lk75 }}</td>
      <td>{{ $jml_krj_pr75 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk76 == 0 && $jml_krj_pr76 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[75]->name }}</td>
      <td>{{ $jml_krj_lk76 }}</td>
      <td>{{ $jml_krj_pr76 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk77 == 0 && $jml_krj_pr77 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[76]->name }}</td>
      <td>{{ $jml_krj_lk77 }}</td>
      <td>{{ $jml_krj_pr77 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk78 == 0 && $jml_krj_pr78 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[77]->name }}</td>
      <td>{{ $jml_krj_lk78 }}</td>
      <td>{{ $jml_krj_pr78 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk79 == 0 && $jml_krj_pr79 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[78]->name }}</td>
      <td>{{ $jml_krj_lk79 }}</td>
      <td>{{ $jml_krj_pr79 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk80 == 0 && $jml_krj_pr80 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[79]->name }}</td>
      <td>{{ $jml_krj_lk80 }}</td>
      <td>{{ $jml_krj_pr80 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk81 == 0 && $jml_krj_pr81 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[80]->name }}</td>
      <td>{{ $jml_krj_lk81 }}</td>
      <td>{{ $jml_krj_pr81 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk82 == 0 && $jml_krj_pr82 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[81]->name }}</td>
      <td>{{ $jml_krj_lk82 }}</td>
      <td>{{ $jml_krj_pr82 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk83 == 0 && $jml_krj_pr83 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[82]->name }}</td>
      <td>{{ $jml_krj_lk83 }}</td>
      <td>{{ $jml_krj_pr83 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk84 == 0 && $jml_krj_pr84 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[83]->name }}</td>
      <td>{{ $jml_krj_lk84 }}</td>
      <td>{{ $jml_krj_pr84 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk85 == 0 && $jml_krj_pr85 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[84]->name }}</td>
      <td>{{ $jml_krj_lk85 }}</td>
      <td>{{ $jml_krj_pr85 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk86 == 0 && $jml_krj_pr86 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[85]->name }}</td>
      <td>{{ $jml_krj_lk86 }}</td>
      <td>{{ $jml_krj_pr86 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk87 == 0 && $jml_krj_pr87 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[86]->name }}</td>
      <td>{{ $jml_krj_lk87 }}</td>
      <td>{{ $jml_krj_pr87 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk88 == 0 && $jml_krj_pr88 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[87]->name }}</td>
      <td>{{ $jml_krj_lk88 }}</td>
      <td>{{ $jml_krj_pr88 }}</td>
    </tr>
    @endif
    @if($jml_krj_lk89 == 0 && $jml_krj_pr89 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $jenispekerjaan_id[88]->name }}</td>
      <td>{{ $jml_krj_lk89 }}</td>
      <td>{{ $jml_krj_pr89 }}</td>
    </tr>
    @endif
  </table>
  <table>
    <tr>
      <td colspan="3">Agama/Aliran Kepercayaan</td>
    </tr>
    <tr>
      <td>Agama</td>
      <td>Laki-Laki (Orang)</td>
      <td>Perempuan (Orang)</td>
    </tr>
    @if($jml_agm_lk1 == 0 && $jml_agm_pr1 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $agama_id[0]->name }}</td>
      <td>{{ $jml_agm_lk1 }}</td>
      <td>{{ $jml_agm_pr1 }}</td>
    </tr>
    @endif
    @if($jml_agm_lk2 == 0 && $jml_agm_pr2 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $agama_id[1]->name }}</td>
      <td>{{ $jml_agm_lk2 }}</td>
      <td>{{ $jml_agm_pr2 }}</td>
    </tr>
    @endif
    @if($jml_agm_lk3 == 0 && $jml_agm_pr3 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $agama_id[2]->name }}</td>
      <td>{{ $jml_agm_lk3 }}</td>
      <td>{{ $jml_agm_pr3 }}</td>
    </tr>
    @endif
    @if($jml_agm_lk4 == 0 && $jml_agm_pr4 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $agama_id[3]->name }}</td>
      <td>{{ $jml_agm_lk4 }}</td>
      <td>{{ $jml_agm_pr4 }}</td>
    </tr>
    @endif
    @if($jml_agm_lk5 == 0 && $jml_agm_pr5 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $agama_id[4]->name }}</td>
      <td>{{ $jml_agm_lk5 }}</td>
      <td>{{ $jml_agm_pr5 }}</td>
    </tr>
    @endif
    @if($jml_agm_lk6 == 0 && $jml_agm_pr6 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $agama_id[5]->name }}</td>
      <td>{{ $jml_agm_lk6 }}</td>
      <td>{{ $jml_agm_pr6 }}</td>
    </tr>
    @endif
    @if($jml_agm_lk7 == 0 && $jml_agm_pr7 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $agama_id[6]->name }}</td>
      <td>{{ $jml_agm_lk7 }}</td>
      <td>{{ $jml_agm_pr7 }}</td>
    </tr>
    @endif
  </table>
  <table>
    <tr>
      <td colspan="3">Kewarganegaraan</td>
    </tr>
    <tr>
      <td>Kewarganegaraan</td>
      <td>Laki-Laki (Orang)</td>
      <td>Perempuan (Orang)</td>
    </tr>
    @if($jml_wrg_lk1 == 0 && $jml_wrg_pr1 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>WNI</td>
      <td>{{$jml_wrg_lk1}}</td>
      <td>{{$jml_wrg_pr1}}</td>
    </tr>
    @endif
    @if($jml_wrg_lk2 == 0 && $jml_wrg_pr2 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>WNI</td>
      <td>{{$jml_wrg_lk2}}</td>
      <td>{{$jml_wrg_pr2}}</td>
    </tr>
    @endif
  </table>
  <table>
    <tr>
      <td colspan="3">Etnis</td>
    </tr>
    <tr>
      <td>Etnis</td>
      <td>Laki-Laki (Orang)</td>
      <td>Perempuan (Orang)</td>
    </tr>
    @if($jml_etn_lk1 == 0 && $jml_etn_pr1 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $etnis[0]->name }}</td>
      <td>{{ $jml_etn_lk1 }}</td>
      <td>{{ $jml_etn_pr1 }}</td>
    </tr>
    @endif
    @if($jml_etn_lk2 == 0 && $jml_etn_pr2 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $etnis[1]->name }}</td>
      <td>{{ $jml_etn_lk2 }}</td>
      <td>{{ $jml_etn_pr2 }}</td>
    </tr>
    @endif
    @if($jml_etn_lk3 == 0 && $jml_etn_pr3 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $etnis[2]->name }}</td>
      <td>{{ $jml_etn_lk3 }}</td>
      <td>{{ $jml_etn_pr3 }}</td>
    </tr>
    @endif
    @if($jml_etn_lk4 == 0 && $jml_etn_pr4 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $etnis[3]->name }}</td>
      <td>{{ $jml_etn_lk4 }}</td>
      <td>{{ $jml_etn_pr4 }}</td>
    </tr>
    @endif
    @if($jml_etn_lk5 == 0 && $jml_etn_pr5 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $etnis[4]->name }}</td>
      <td>{{ $jml_etn_lk5 }}</td>
      <td>{{ $jml_etn_pr5 }}</td>
    </tr>
    @endif
    @if($jml_etn_lk6 == 0 && $jml_etn_pr6 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $etnis[5]->name }}</td>
      <td>{{ $jml_etn_lk6 }}</td>
      <td>{{ $jml_etn_pr6 }}</td>
    </tr>
    @endif
    @if($jml_etn_lk7 == 0 && $jml_etn_pr7 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $etnis[6]->name }}</td>
      <td>{{ $jml_etn_lk7 }}</td>
      <td>{{ $jml_etn_pr7 }}</td>
    </tr>
    @endif
    @if($jml_etn_lk8 == 0 && $jml_etn_pr8 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $etnis[7]->name }}</td>
      <td>{{ $jml_etn_lk8 }}</td>
      <td>{{ $jml_etn_pr8 }}</td>
    </tr>
    @endif
    @if($jml_etn_lk9 == 0 && $jml_etn_pr9 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $etnis[8]->name }}</td>
      <td>{{ $jml_etn_lk9 }}</td>
      <td>{{ $jml_etn_pr9 }}</td>
    </tr>
    @endif
    @if($jml_etn_lk10 == 0 && $jml_etn_pr10 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $etnis[9]->name }}</td>
      <td>{{ $jml_etn_lk10 }}</td>
      <td>{{ $jml_etn_pr10 }}</td>
    </tr>
    @endif
    @if($jml_etn_lk11 == 0 && $jml_etn_pr11 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $etnis[10]->name }}</td>
      <td>{{ $jml_etn_lk11 }}</td>
      <td>{{ $jml_etn_pr11 }}</td>
    </tr>
    @endif
    @if($jml_etn_lk12 == 0 && $jml_etn_pr12 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $etnis[11]->name }}</td>
      <td>{{ $jml_etn_lk12 }}</td>
      <td>{{ $jml_etn_pr12 }}</td>
    </tr>
    @endif
    @if($jml_etn_lk13 == 0 && $jml_etn_pr13 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $etnis[12]->name }}</td>
      <td>{{ $jml_etn_lk13 }}</td>
      <td>{{ $jml_etn_pr13 }}</td>
    </tr>
    @endif
    @if($jml_etn_lk14 == 0 && $jml_etn_pr14 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $etnis[13]->name }}</td>
      <td>{{ $jml_etn_lk14 }}</td>
      <td>{{ $jml_etn_pr14 }}</td>
    </tr>
    @endif
    @if($jml_etn_lk15 == 0 && $jml_etn_pr15 == 0)
    <tr style="display:none" ;>
    </tr>
    @else
    <tr>
      <td>{{ $etnis[14]->name }}</td>
      <td>{{ $jml_etn_lk15 }}</td>
      <td>{{ $jml_etn_pr15 }}</td>
    </tr>
    @endif
  </table>
  <table>
    <tr>
      <td colspan="3">Cacat Mental dan Fisik</td>
    </tr>
    <tr>
      <td>Jenis Cacat</td>
      <td>Laki-Laki (Orang)</td>
      <td>Perempuan (Orang)</td>
    </tr>
    <tr>
      <td>{{ $penyandangcacat[0]->name }}</td>
      <td>{{ $jml_pcct_lk1 }}</td>
      <td>{{ $jml_pcct_pr1 }}</td>
    </tr>
    <tr>
      <td>{{ $penyandangcacat[1]->name }}</td>
      <td>{{ $jml_pcct_lk2 }}</td>
      <td>{{ $jml_pcct_pr2 }}</td>
    </tr>
    <tr>
      <td>{{ $penyandangcacat[2]->name }}</td>
      <td>{{ $jml_pcct_lk3 }}</td>
      <td>{{ $jml_pcct_pr3 }}</td>
    </tr>
    <tr>
      <td>{{ $penyandangcacat[3]->name }}</td>
      <td>{{ $jml_pcct_lk4 }}</td>
      <td>{{ $jml_pcct_pr4 }}</td>
    </tr>
    <tr>
      <td>{{ $penyandangcacat[4]->name }}</td>
      <td>{{ $jml_pcct_lk5 }}</td>
      <td>{{ $jml_pcct_pr5 }}</td>
    </tr>
    <tr>
      <td>{{ $penyandangcacat[5]->name }}</td>
      <td>{{ $jml_pcct_lk6 }}</td>
      <td>{{ $jml_pcct_pr6 }}</td>
    </tr>
    <tr>
      <td>{{ $penyandangcacat[6]->name }}</td>
      <td>{{ $jml_pcct_lk7 }}</td>
      <td>{{ $jml_pcct_pr7 }}</td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="3">Tenaga Kerja</td>
    </tr>
    <tr>
      <td>Tenaga Kerja</td>
      <td>Laki-Laki (Orang)</td>
      <td>Perempuan (Orang)</td>
    </tr>
    <tr>
      <td>Penduduk usia 0 - 6 tahun</td>
      <td>{{ $pendudukusia0tahun_lk }}</td>
      <td>{{ $pendudukusia0tahun_pr }}</td>
    </tr>
    <tr>
      <td>Penduduk usia 7 - 18 tahun yang masih sekolah</td>
      <td>{{ $totalpenduduksekolah_lk }}</td>
      <td>{{ $totalpenduduksekolah_pr }}</td>
    </tr>
    <tr>
      <td>Penduduk usia 18 - 56 tahun (a + b)</td>
      <td>{{ $totalpendudukbekerja_lk }}</td>
      <td>{{ $totalpendudukbekerja_pr }}</td>
    </tr>
    <tr>
      <td>a. Penduduk usia 18 - 56 tahun yang bekerja</td>
      <td>{{ $pendudukbekerja_lk }}</td>
      <td>{{ $pendudukbekerja_pr }}</td>
    </tr>
    <tr>
      <td>b. Penduduk usia 18 - 56 tahun yang belum/tidak bekerja</td>
      <td>{{ $penduduktidakbekerja_lk }}</td>
      <td>{{ $penduduktidakbekerja_pr }}</td>
    </tr>
    <tr>
      <td>Penduduk usia 56 tahun ke atas </td>
      <td>{{ $kualitas_pdk_ttsd_dewasa_lk }}</td>
      <td>{{ $kualitas_pdk_ttsd_dewasa_pr }}</td>
    </tr>
    <tr>
      <td>Jumlah</td>
      <td>{{ $pendudukusia0tahun_lk+$totalpenduduksekolah_lk+$totalpendudukbekerja_lk+$kualitas_pdk_ttsd_dewasa_lk }}</td>
      <td>{{ $pendudukusia0tahun_pr+$totalpenduduksekolah_pr+$totalpendudukbekerja_pr+$kualitas_pdk_ttsd_dewasa_pr }}</td>
    </tr>
    <tr>
      <td>Total</td>
      <td colspan="2">{{ $pendudukusia0tahun_lk+$totalpenduduksekolah_lk+$totalpendudukbekerja_lk+$kualitas_pdk_ttsd_dewasa_lk+$pendudukusia0tahun_pr+$totalpenduduksekolah_pr+$totalpendudukbekerja_pr+$kualitas_pdk_ttsd_dewasa_pr }}</td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="3">Kualitas Angkatan Kerja</td>
    </tr>
    <tr>
      <td>Angkatan Kerja</td>
      <td>Laki-Laki (Orang)</td>
      <td>Perempuan (Orang)</td>
    </tr>
    <tr>
      <td>Penduduk usia 18 - 56 tahun yang buta aksara dan huruf/angka latin</td>
      <td>{{ $kualitas_pdk_ba_dewasa_lk }}</td>
      <td>{{ $kualitas_pdk_ba_dewasa_pr }}</td>
    </tr>
    <tr>
      <td>Usia 3-6 tahun yang belum masuk play group/TK</td>
      <td>{{ $kualitas_pdk_btk_anak_lk }}</td>
      <td>{{ $kualitas_pdk_btk_anak_pr }}</td>
    </tr>
    <tr>
      <td>Usia 3-6 tahun yang sedang play group/TK</td>
      <td>{{ $kualitas_pdk_mtk_anak_lk }}</td>
      <td>{{ $kualitas_pdk_mtk_anak_pr }}</td>
    </tr>
    <tr>
      <td>Usia 7-18 tahun yang tidak pernah sekolah</td>
      <td>{{ $kualitas_pdk_remaja_lk }}</td>
      <td>{{ $kualitas_pdk_remaja_pr }}</td>
    </tr>
    <tr>
      <td>Usia 7-18 tahun yang sedang sekolah</td>
      <td>{{ $totalpenduduksekolah_lk }}</td>
      <td>{{ $totalpenduduksekolah_pr }}</td>
    </tr>
    <tr>
      <td>Usia 18-56 tahun tidak pernah sekolah</td>
      <td>{{ $kualitas_pdk_tps_dewasa_lk }}</td>
      <td>{{ $kualitas_pdk_tps_dewasa_pr }}</td>
    </tr>
    <tr>
      <td>Usia 18-56 tahun tidak tamat SD</td>
      <td>{{ $penduduk56tahunatas_lk }}</td>
      <td>{{ $penduduk56tahunatas_pr }}</td>
    </tr>
    <tr>
      <td>{{ $pendidikansedang[16]->name }}</td>
      <td>{{ $jml_pdk_lk17 }}</td>
      <td>{{ $jml_pdk_pr17 }}</td>
    </tr>
    <tr>
      <td>{{ $pendidikansedang[17]->name }}</td>
      <td>{{ $jml_pdk_lk18 }}</td>
      <td>{{ $jml_pdk_pr18 }}</td>
    </tr>
    <tr>
      <td>{{ $pendidikansedang[18]->name }}</td>
      <td>{{ $jml_pdk_lk19 }}</td>
      <td>{{ $jml_pdk_pr19 }}</td>
    </tr>
    <tr>
      <td>{{ $pendidikansedang[19]->name }}</td>
      <td>{{ $jml_pdk_lk20 }}</td>
      <td>{{ $jml_pdk_pr20 }}</td>
    </tr>
    <tr>
      <td>{{ $pendidikansedang[20]->name }}</td>
      <td>{{ $jml_pdk_lk21 }}</td>
      <td>{{ $jml_pdk_pr21 }}</td>
    </tr>
    <tr>
      <td>{{ $pendidikansedang[21]->name }}</td>
      <td>{{ $jml_pdk_lk22 }}</td>
      <td>{{ $jml_pdk_pr22 }}</td>
    </tr>
    <tr>
      <td>{{ $pendidikansedang[22]->name }}</td>
      <td>{{ $jml_pdk_lk23 }}</td>
      <td>{{ $jml_pdk_pr23 }}</td>
    </tr>
    <tr>
      <td>{{ $pendidikansedang[23]->name }}</td>
      <td>{{ $jml_pdk_lk24 }}</td>
      <td>{{ $jml_pdk_pr24 }}</td>
    </tr>
    <tr>
      <td>{{ $pendidikansedang[24]->name }}</td>
      <td>{{ $jml_pdk_lk25 }}</td>
      <td>{{ $jml_pdk_pr25 }}</td>
    </tr>
    <tr>
      <td>{{ $pendidikansedang[25]->name }}</td>
      <td>{{ $jml_pdk_lk26 }}</td>
      <td>{{ $jml_pdk_pr26 }}</td>
    </tr>
    <tr>
      <td>{{ $pendidikansedang[26]->name }}</td>
      <td>{{ $jml_pdk_lk27 }}</td>
      <td>{{ $jml_pdk_pr27 }}</td>
    </tr>
    <tr>
      <td>{{ $pendidikansedang[27]->name }}</td>
      <td>{{ $jml_pdk_lk28 }}</td>
      <td>{{ $jml_pdk_pr28 }}</td>
    </tr>
    <tr>
      <td>Jumlah</td>
      <td>{{ $kualitas_pdk_ba_dewasa_lk+$kualitas_pdk_btk_anak_lk+$kualitas_pdk_mtk_anak_lk+$kualitas_pdk_remaja_lk+$totalpenduduksekolah_lk+$kualitas_pdk_tps_dewasa_lk+$penduduk56tahunatas_lk+$jml_pdk_lk17+$jml_pdk_lk18+$jml_pdk_lk19+$jml_pdk_lk20+$jml_pdk_lk21+$jml_pdk_lk22+$jml_pdk_lk23+$jml_pdk_lk24+$jml_pdk_lk25+$jml_pdk_lk26+$jml_pdk_lk27+$jml_pdk_lk28 }}
      </td>
      <td>{{ $kualitas_pdk_ba_dewasa_pr+$kualitas_pdk_btk_anak_pr+$kualitas_pdk_mtk_anak_pr+$kualitas_pdk_remaja_pr+$totalpenduduksekolah_pr+$kualitas_pdk_tps_dewasa_pr+$penduduk56tahunatas_pr+$jml_pdk_pr17+$jml_pdk_pr18+$jml_pdk_pr19+$jml_pdk_pr20+$jml_pdk_pr21+$jml_pdk_pr22+$jml_pdk_pr23+$jml_pdk_pr24+$jml_pdk_pr25+$jml_pdk_pr26+$jml_pdk_pr27+$jml_pdk_pr28 }}</td>
    </tr>
    <tr>
      <td>Total</td>
      <td colspan="2">{{ $kualitas_pdk_ba_dewasa_lk+$kualitas_pdk_btk_anak_lk+$kualitas_pdk_mtk_anak_lk+$kualitas_pdk_remaja_lk+$totalpenduduksekolah_lk+$kualitas_pdk_tps_dewasa_lk+$penduduk56tahunatas_lk+$jml_pdk_lk17+$jml_pdk_lk18+$jml_pdk_lk19+$jml_pdk_lk20+$jml_pdk_lk21+$jml_pdk_lk22+$jml_pdk_lk23+$jml_pdk_lk24+$jml_pdk_lk25+$jml_pdk_lk26+$jml_pdk_lk27+$jml_pdk_lk28+$kualitas_pdk_ba_dewasa_pr+$kualitas_pdk_btk_anak_pr+$kualitas_pdk_mtk_anak_pr+$kualitas_pdk_remaja_pr+$totalpenduduksekolah_pr+$kualitas_pdk_tps_dewasa_pr+$penduduk56tahunatas_pr+$jml_pdk_pr17+$jml_pdk_pr18+$jml_pdk_pr19+$jml_pdk_pr20+$jml_pdk_pr21+$jml_pdk_pr22+$jml_pdk_pr23+$jml_pdk_pr24+$jml_pdk_pr25+$jml_pdk_pr26+$jml_pdk_pr27+$jml_pdk_pr28 }}
      </td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="3">LEMBAGA PEMERINTAHAN</td>
    </tr>
    <tr>
      <td colspan="3">PEMERINTAH DESA/KELURAHAN</td>
    </tr>
    <tr>
      @foreach($jumlahaparaturdesa as $kds)
      <td>Dasar Hukum Pembentukan Pemerintah Desa / Kelurahan</td>
      @if($kds['dasarhukumperdes'] == "Belum Ada Dasar Hukum")
      <td>Tidak Ada</td>
      @else
      <td>Ada</td>
      @endif
      <td>
        {{ $kds['dasarhukumperdes'] }}
      </td>
      @endforeach
    </tr>
    <tr>
      @foreach($jumlahaparaturdesa as $kds)
      <td>Dasar Hukum Pembentukan BPD</td>
      @if($kds['dasarhukumbpd'] == "Belum Ada Dasar Hukum")
      <td>Tidak Ada</td>
      @else
      <td>Ada</td>
      @endif
      <td>
        {{ $kds['dasarhukumbpd'] }}
      </td>
      @endforeach
    </tr>
    <tr>
      <td>Jumlah Aparat Pemerintahan Desa/Kelurahan</td>
      <td colspan="2" class="text-center">
        @foreach($jumlahaparaturdesa as $kds)
        {{ $kds['jumlahrwdesa']+$kds['jumlahrtdesa']+$jumlahdusun }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Jumlah Perangkat Desa/Kelurahan</td>
      <td colspan="2" class="text-center">{{ $jumlahperangkatdesa }}</td>
    </tr>
    <tr>
      <td>Kepala Desa/Lurah</td>
      <td colspan="2" class="text-center">
        @foreach($kades as $kds)
        {{ $kds['status'] }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Sekretaris Desa/Kelurahan</td>
      <td colspan="2" class="text-center">
        @foreach($sekdes as $skds)
        {{ $skds['status'] }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Kepala Seksi Pemerintahan</td>
      <td colspan="2" class="text-center">
        @foreach($seksipem as $skp)
        {{ $skp['status'] }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Kepala Seksi Kesejahteraan Rakyat</td>
      <td colspan="2" class="text-center">
        @foreach($seksikesra as $ksr)
        {{ $ksr['status'] }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Kepala Seksi Pelayanan</td>
      <td colspan="2" class="text-center">
        @foreach($seksipel as $pln)
        {{ $pln['status'] }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Kepala Urusan Tata Usaha dan Umum</td>
      <td colspan="2" class="text-center">
        @foreach($seksitu as $stu)
        {{ $stu['status'] }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Kepala Urusan Keuangan</td>
      <td colspan="2" class="text-center">
        @foreach($seksikeu as $skeu)
        {{ $skeu['status'] }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Kepala Urusan Perencanaan</td>
      <td colspan="2" class="text-center">
        @foreach($seksiren as $sren)
        {{ $sren['status'] }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Jumlah Staf</td>
      <td colspan="2" class="text-center">{{ $jumlahstafdesa }}</td>
    </tr>
    <tr>
      <td>Jumlah Dusun di Desa/Lingkungan di Kelurahan atau sebutan lain</td>
      <td colspan="2" class="text-center">{{ $jumlahdusun }}</td>
    </tr>
    @foreach($kadus as $kadus)
    <tr>
      <td>Kepala Dusun/Lingkungan {{ $kadus['name'] }}</td>
      <td colspan="2" class="text-center">{{ $kadus['status'] }}</td>
    </tr>
    @endforeach
    <tr>
  </table>
  <table>
    <tr>
      <td colspan="2">TINGKAT PENDIDIKAN APARAT DESA/KELURAHAN</td>
    </tr>
    <tr>
      <td>Kepala Desa/Lurah</td>
      <td class="text-center">
        @foreach($kades as $kds)
        {{ $kds['pendidikan'] }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Sekretaris Desa/Kelurahan</td>
      <td class="text-center">
        @foreach($sekdes as $skds)
        {{ $skds['pendidikan'] }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Kepala Seksi Pemerintahan</td>
      <td class="text-center">
        @foreach($seksipem as $skp)
        {{ $skp['pendidikan'] }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Kepala Seksi Kesejahteraan Rakyat</td>
      <td class="text-center">
        @foreach($seksikesra as $ksr)
        {{ $ksr['pendidikan'] }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Kepala Seksi Pelayanan</td>
      <td class="text-center">
        @foreach($seksipel as $pln)
        {{ $pln['pendidikan'] }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Kepala Urusan Tata Usaha dan Umum</td>
      <td class="text-center">
        @foreach($seksitu as $stu)
        {{ $stu['pendidikan'] }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Kepala Urusan Keuangan</td>
      <td class="text-center">
        @foreach($seksikeu as $skeu)
        {{ $skeu['pendidikan'] }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Kepala Urusan Perencanaan</td>
      <td class="text-center">
        @foreach($seksiren as $sren)
        {{ $sren['pendidikan'] }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td colspan="2">BADAN PERMUSYAWARATAN DESA</td>
    </tr>
    <tr>
      <td>Keberadaan BPD</td>
      <td class="text-center">
        @foreach($jumlahaparaturdesa as $kds)
        {{ $kds['keberadaanbpd'] }}
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Jumlah Anggota BPD</td>
      @if($jumlahagtbpd == 1)
      <td class="text-center">{{ $jumlahagtbpd-1 }}</td>
      @else
      <td class="text-center">0</td>
      @endif
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="2">PENDIDIKAN ANGGOTA BPD</td>
    </tr>
    <tr>
      @foreach($bpdketua as $bpdket)
      <td>Ketua, Nama : {{ $bpdket['name'] }}</td>
      <td class="text-center">{{ $bpdket['pendidikan'] }}</td>
      @endforeach
    </tr>
    <tr>
      @foreach($bpdwaket as $bpdwket)
      <td>Wakil Ketua, Nama : {{ $bpdwket['name'] }}</td>
      <td class="text-center">{{ $bpdwket['pendidikan'] }}</td>
      @endforeach
    </tr>
    <tr>
      @foreach($bpdsekr as $bpdsek)
      <td>Sekretaris, Nama : {{ $bpdsek['name'] }}</td>
      <td class="text-center">{{ $bpdsek['pendidikan'] }}</td>
      @endforeach
    </tr>
    @foreach($bpdanggota as $bpdagt)
    <tr>
      <td>Anggota, Nama : {{ $bpdagt['name'] }}</td>
      <td class="text-center">{{ $bpdagt['pendidikan'] }}</td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="6">LEMBAGA KEMASYARAKATAN</td>
    </tr>
    <tr>
      <th>Nama Lembaga</th>
      <th>Dasar Hukum Pembentukan</th>
      <th>Jumlah Lembaga</th>
      <th>Jumlah Pengurus</th>
      <th>Ruang Lingkup Kegiatan</th>
      <th>Jumlah Jenis Kegiatan</th>
    </tr>
    @foreach($lembagakemasyarakatan as $lmsk)
    <tr>
      <td><?= $lmsk->kglembagakemasyarakatan->name ?></td>
      <td><?= $lmsk['dasarhukumpembentukan'] ?></td>
      <td><?= $lmsk['jumlah_lembaga'] ?></td>
      <td><?= $lmsk['jumlah_pengurus'] ?></td>
      <td><?= $lmsk['ruang_lingkup_kegiatan'] ?></td>
      <td><?= $lmsk['jumlah_jenis_kegiatan'] ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="5">TINGKAT PARTISIPASI POLITIK</td>
    </tr>
    <tr>
      <th rowspan="2" class="align-middle">Jenis Pemilu</th>
      <th colspan="2" class="align-middle">Yang Sudah Punya Hak Pilih </th>
      <th colspan="2" class="align-middle">Yang Memanfaatkan Hak Pilih</th>
    </tr>
    <th class="align-middle">Laki-Laki (Orang </th>
    <th class="align-middle">Perempuan (Orang)</th>
    <th class="align-middle">Laki-Laki (Orang </th>
    <th class="align-middle">Perempuan (Orang)</th>
    </tr>
    @foreach($tingkatpartisipasipolitik as $tpp)
    <tr>
      <td><?= $tpp->kgtingkatpartisipasipolitik->name ?></td>
      <td><?= $tpp['punyahakpilih_lakilaki'] ?></td>
      <td><?= $tpp['punyahakpilih_perempuan'] ?></td>
      <td><?= $tpp['manfaathakpilih_lakilaki'] ?></td>
      <td><?= $tpp['manfaathakpilih_perempuan'] ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="4">LEMBAGA EKONOMI</td>
    </tr>
    <tr>
      <td colspan="4">LEMBAGA EKONOMI, DAN UNIT USAHA DESA/KELURAHAN</td>
    </tr>
    <tr>
      <td>Jenis Lembaga Ekonomi</td>
      <td>Jumlah/Unit</td>
      <td>Jumlah Kegiatan</td>
      <td>Jumlah Pengurus dan Anggota </td>
    </tr>
    @foreach($lembagaekonomi as $lmbe)
    <tr>
      <td><?= $lmbe->kglembagaekonomi->name ?></td>
      <td><?= $lmbe['jumlah'] ?></td>
      <td><?= $lmbe['kegiatan'] ?></td>
      <td><?= $lmbe['pengurus'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="4">JASA LEMBAGA KEUANGAN</td>
    </tr>
    <tr>
      <td>Jenis Lembaga Keuangan</td>
      <td>Jumlah/Unit</td>
      <td>Jumlah Kegiatan</td>
      <td>Jumlah Pengurus dan Anggota </td>
    </tr>
    @foreach($jasalembagakeuangan as $jlk)
    <tr>
      <td><?= $jlk->kgjasalembagakeuangan->name ?></td>
      <td><?= $jlk['jumlah'] ?></td>
      <td><?= $jlk['kegiatan'] ?></td>
      <td><?= $jlk['pengurus'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="4">INDUSTRI KECIL DAN MENENGAH</td>
    </tr>
    <tr>
      <td>Jenis Industri</td>
      <td>Jumlah/Unit</td>
      <td>Jumlah Kegiatan</td>
      <td>Jumlah Pengurus dan Anggota </td>
    </tr>
    @foreach($industrikecil as $indk)
    <tr>
      <td><?= $indk->kgindustrikecil->name ?></td>
      <td><?= $indk['jumlah'] ?></td>
      <td><?= $indk['kegiatan'] ?></td>
      <td><?= $indk['pengurus'] ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="5">USAHA JASA PENGANGKUTAN</td>
    </tr>
    <tr>
      <th>Jenis Jasa</th>
      <th>Jumlah (Unit)</th>
      <th>Jumlah Pemilik</th>
      <th>Kapasitas</th>
      <th>Tenaga Kerja (Orang)</th>
    </tr>
    <tr>
      <td colspan="6">Angkutan Darat</td>
    </tr>
    @foreach($usahajasapengangkutan1 as $uspg1)
    <tr>
      <td><?= $uspg1->kgusahajasapengangkutan->name ?></td>
      <td><?= $uspg1['jumlah'] ?></td>
      <td><?= $uspg1['pemilik'] ?></td>
      <td><?= $uspg1['kapasitas'] ?></td>
      <td><?= $uspg1['jumlah_tenagakerja'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="6">Angkutan Sungai</td>
    </tr>
    @foreach($usahajasapengangkutan2 as $uspg2)
    <tr>
      <td><?= $uspg2->kgusahajasapengangkutan->name ?></td>
      <td><?= $uspg2['jumlah'] ?></td>
      <td><?= $uspg2['pemilik'] ?></td>
      <td><?= $uspg2['kapasitas'] ?></td>
      <td><?= $uspg2['jumlah_tenagakerja'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="6">Angkutan Laut</td>
    </tr>
    @foreach($usahajasapengangkutan3 as $uspg3)
    <tr>
      <td><?= $uspg3->kgusahajasapengangkutan->name ?></td>
      <td><?= $uspg3['jumlah'] ?></td>
      <td><?= $uspg3['pemilik'] ?></td>
      <td><?= $uspg3['kapasitas'] ?></td>
      <td><?= $uspg3['jumlah_tenagakerja'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="6">Angkutan Udara</td>
    </tr>
    @foreach($usahajasapengangkutan4 as $uspg4)
    <tr>
      <td><?= $uspg4->kgusahajasapengangkutan->name ?></td>
      <td><?= $uspg4['jumlah'] ?></td>
      <td><?= $uspg4['pemilik'] ?></td>
      <td><?= $uspg4['kapasitas'] ?></td>
      <td><?= $uspg4['jumlah_tenagakerja'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="6">Ekspedisi Dan Pengiriman</td>
    </tr>
    @foreach($usahajasapengangkutan5 as $uspg5)
    <tr>
      <td><?= $uspg5->kgusahajasapengangkutan->name ?></td>
      <td><?= $uspg5['jumlah'] ?></td>
      <td><?= $uspg5['pemilik'] ?></td>
      <td><?= $uspg5['kapasitas'] ?></td>
      <td><?= $uspg5['jumlah_tenagakerja'] ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="4">USAHA JASA DAN PERDAGANGAN</td>
    </tr>
    <tr>
      <th>Jenis Usaha</th>
      <th>Jumlah (Unit)</th>
      <th>Jenis produk yang diperdagangkan (Jenis)</th>
      <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
    </tr>
    @foreach($usahajasaperdagangan as $ujp)
    <tr>
      <td><?= $ujp->kgusahajasaperdagangan->name ?></td>
      <td><?= $ujp['jumlah'] ?></td>
      <td><?= $ujp['jenis_produk'] ?></td>
      <td><?= $ujp['jumlah_tenagakerja'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="4">USAHA JASA HIBURAN</td>
    </tr>
    <tr>
      <th>Jenis Usaha</th>
      <th>Jumlah (Unit)</th>
      <th>Jenis produk yang diperdagangkan (Jenis)</th>
      <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
    </tr>
    @foreach($usahajasahiburan as $ujh)
    <tr>
      <td><?= $ujh->kgusahajasahiburan->name ?></td>
      <td><?= $ujh['jumlah'] ?></td>
      <td><?= $ujh['jenis_produk'] ?></td>
      <td><?= $ujh['jumlah_tenagakerja'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="4">USAHA JASA GAS, LISTRIK, BBM DAN AIR</td>
    </tr>
    <tr>
      <th>Jenis Usaha</th>
      <th>Jumlah (Unit)</th>
      <th>Jenis produk yang diperdagangkan (Jenis)</th>
      <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
    </tr>
    @foreach($usahajasagas as $ujg)
    <tr>
      <td><?= $ujg->kgusahajasagas->name ?></td>
      <td><?= $ujg['jumlah'] ?></td>
      <td><?= $ujg['jenis_produk'] ?></td>
      <td><?= $ujg['jumlah_tenagakerja'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="4">USAHA JASA KETERAMPILAN</td>
    </tr>
    <tr>
      <th>Jenis Usaha</th>
      <th>Jumlah (Unit)</th>
      <th>Jenis produk yang diperdagangkan (Jenis)</th>
      <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
    </tr>
    <tr>
      <td colspan="4">USAHA JASA HUKUM DAN KONSULTASI</td>
    </tr>
    <tr>
      <th>Jenis Usaha</th>
      <th>Jumlah (Unit)</th>
      <th>Jenis produk yang diperdagangkan (Jenis)</th>
      <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
    </tr>
    @foreach($usahajasaketerampilan as $ujk)
    <tr>
      <td><?= $ujk->kgusahajasaketerampilan->name ?></td>
      <td><?= $ujk['jumlah'] ?></td>
      <td><?= $ujk['jenis_produk'] ?></td>
      <td><?= $ujk['jumlah_tenagakerja'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="4">USAHA JASA PENGINAPAN</td>
    </tr>
    <tr>
      <th>Jenis Usaha</th>
      <th>Jumlah (Unit)</th>
      <th>Jenis produk yang diperdagangkan (Jenis)</th>
      <th>Jumlah Tenaga Kerja yang terserap (Orang)</th>
    </tr>
    @foreach($usahajasahukum as $ushk)
    <tr>
      <td><?= $ushk->kgusahajasahukum->name ?></td>
      <td><?= $ushk['jumlah'] ?></td>
      <td><?= $ushk['jenis_produk'] ?></td>
      <td><?= $ushk['jumlah_tenagakerja'] ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="8">LEMBAGA PENDIDIKAN</td>
    </tr>
    <tr>
      <td colspan="8">PENDIDIKAN FORMAL</td>
    </tr>
    <tr>
      <th rowspan="2" class="align-middle">Nama</th>
      <th rowspan="2" class="align-middle">Jumlah</th>
      <th rowspan="2" class="align-middle">Status (Terdaftar, Terakreditasi)</th>
      <th colspan="3" class="align-middle">Kepemilikan </th>
      <th rowspan="2" class="align-middle">Jumlah Tenaga Pengajar</th>
      <th rowspan="2" class="align-middle">Jumlah Siswa/Mahasiswa</th>
    </tr>
    <th class="align-middle">Pemerintah</th>
    <th class="align-middle">Swasta</th>
    <th class="align-middle">Desa/ Kelurahan</th>
    </tr>
    @foreach($pendidikanformal as $pddf)
    <tr>
      <td><?= $pddf->kgpendidikanformal->name ?></td>
      <td><?= $pddf['jumlah'] ?></td>
      <td><?= $pddf['status'] ?></td>
      <td><?= $pddf['pemerintah'] ?></td>
      <td><?= $pddf['swasta'] ?></td>
      <td><?= $pddf['desa'] ?></td>
      <td><?= $pddf['jumlah_pengajar'] ?></td>
      <td><?= $pddf['jumlah_siswa'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="8">PENDIDIKAN FORMAL KEAGAMAAN</td>
    </tr>
    <tr>
      <th rowspan="2" class="align-middle">Nama</th>
      <th rowspan="2" class="align-middle">Jumlah</th>
      <th rowspan="2" class="align-middle">Status (Terdaftar, Terakreditasi)</th>
      <th colspan="3" class="align-middle">Kepemilikan </th>
      <th rowspan="2" class="align-middle">Jumlah Tenaga Pengajar</th>
      <th rowspan="2" class="align-middle">Jumlah Siswa/Mahasiswa</th>
    </tr>
    <th class="align-middle">Pemerintah</th>
    <th class="align-middle">Swasta</th>
    <th class="align-middle">Dll</th>
    </tr>
    <tr>
      <td colspan="9">Sekolah Islam</td>
    </tr>
    @foreach($pendidikankeagamaan1 as $pdf1)
    <tr>
      <td><?= $pdf1->kgpendidikankeagamaan->name ?></td>
      <td><?= $pdf1['jumlah'] ?></td>
      <td><?= $pdf1['status'] ?></td>
      <td><?= $pdf1['pemerintah'] ?></td>
      <td><?= $pdf1['swasta'] ?></td>
      <td><?= $pdf1['dll'] ?></td>
      <td><?= $pdf1['jumlah_pengajar'] ?></td>
      <td><?= $pdf1['jumlah_siswa'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="9">Sekolah Katholik</td>
    </tr>
    @foreach($pendidikankeagamaan2 as $pdf2)
    <tr>
      <td><?= $pdf2->kgpendidikankeagamaan->name ?></td>
      <td><?= $pdf2['jumlah'] ?></td>
      <td><?= $pdf2['status'] ?></td>
      <td><?= $pdf2['pemerintah'] ?></td>
      <td><?= $pdf2['swasta'] ?></td>
      <td><?= $pdf2['dll'] ?></td>
      <td><?= $pdf2['jumlah_pengajar'] ?></td>
      <td><?= $pdf2['jumlah_siswa'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="9">Sekolah Budha</td>
    </tr>
    @foreach($pendidikankeagamaan3 as $pdf3)
    <tr>
      <td><?= $pdf3->kgpendidikankeagamaan->name ?></td>
      <td><?= $pdf3['jumlah'] ?></td>
      <td><?= $pdf3['status'] ?></td>
      <td><?= $pdf3['pemerintah'] ?></td>
      <td><?= $pdf3['swasta'] ?></td>
      <td><?= $pdf3['dll'] ?></td>
      <td><?= $pdf3['jumlah_pengajar'] ?></td>
      <td><?= $pdf3['jumlah_siswa'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="9">Sekolah Protestan</td>
    </tr>
    @foreach($pendidikankeagamaan4 as $pdf4)
    <tr>
      <td><?= $pdf4->kgpendidikankeagamaan->name ?></td>
      <td><?= $pdf4['jumlah'] ?></td>
      <td><?= $pdf4['status'] ?></td>
      <td><?= $pdf4['pemerintah'] ?></td>
      <td><?= $pdf4['swasta'] ?></td>
      <td><?= $pdf4['dll'] ?></td>
      <td><?= $pdf4['jumlah_pengajar'] ?></td>
      <td><?= $pdf4['jumlah_siswa'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="9">Sekolah Hindu</td>
    </tr>
    @foreach($pendidikankeagamaan5 as $pdf5)
    <tr>
      <td><?= $pdf5->kgpendidikankeagamaan->name ?></td>
      <td><?= $pdf5['jumlah'] ?></td>
      <td><?= $pdf5['status'] ?></td>
      <td><?= $pdf5['pemerintah'] ?></td>
      <td><?= $pdf5['swasta'] ?></td>
      <td><?= $pdf5['dll'] ?></td>
      <td><?= $pdf5['jumlah_pengajar'] ?></td>
      <td><?= $pdf5['jumlah_siswa'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="9">Sekolah Konghucu</td>
    </tr>
    @foreach($pendidikankeagamaan6 as $pdf6)
    <tr>
      <td><?= $pdf6->kgpendidikankeagamaan->name ?></td>
      <td><?= $pdf6['jumlah'] ?></td>
      <td><?= $pdf6['status'] ?></td>
      <td><?= $pdf6['pemerintah'] ?></td>
      <td><?= $pdf6['swasta'] ?></td>
      <td><?= $pdf6['dll'] ?></td>
      <td><?= $pdf6['jumlah_pengajar'] ?></td>
      <td><?= $pdf6['jumlah_siswa'] ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="6">PENDIDIKAN NON FORMAL/KURSUS</td>
    </tr>
    <tr>
      <th class="align-middle">Nama</th>
      <th class="align-middle">Jumlah</th>
      <th class="align-middle">Status (Terdaftar, Terakreditasi)</th>
      <th class="align-middle">Kepemilikan (Pemerintah, Yayasan, dll)</th>
      <th class="align-middle">Jumlah Tenaga Pengajar</th>
      <th class="align-middle">Jumlah Siswa/Mahasiswa</th>
    </tr>
    @foreach($pendidikannonformal as $pdnf)
    <tr>
      <td><?= $pdnf->kgpendidikannonformal->name ?></td>
      <td><?= $pdnf['jumlah'] ?></td>
      <td><?= $pdnf['status'] ?></td>
      <td><?= $pdnf['kepemilikan'] ?></td>
      <td><?= $pdnf['jumlah_pengajar'] ?></td>
      <td><?= $pdnf['jumlah_siswa'] ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="6">LEMBAGA ADAT</td>
    </tr>
    <tr>
      <td colspan="6">KEBERADAAN LEMBAGA ADAT</td>
    </tr>
    <tr>
      <td>Pemangku Adat</td>
      <td><?= isset($lembagaadat->pemangkut_adat) ? $lembagaadat->pemangkut_adat : '' ?></td>
      <td>Kepengurusan Adat</td>
      <td colspan="3"><?= isset($lembagaadat->kepengurusan_adat) ? $lembagaadat->kepengurusan_adat : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">SIMBOL ADAT</td>
    </tr>
    <tr>
      <td>Rumah Adat</td>
      <td><?= isset($lembagaadat->rumah_adat) ? $lembagaadat->rumah_adat : '' ?></td>
      <td>Barang Pusaka</td>
      <td><?= isset($lembagaadat->barang_pusaka) ? $lembagaadat->barang_pusaka : '' ?></td>
      <td>Naskah-Naskah</td>
      <td><?= isset($lembagaadat->naskah_naskah) ? $lembagaadat->naskah_naskah : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">JENIS KEGIATAN ADAT</td>
    </tr>
    <tr>
      <td>Musyawarah Adat</td>
      <td><?= isset($lembagaadat->musyawarah_adat) ? $lembagaadat->musyawarah_adat : '' ?></td>
      <td>Sanksi Adat</td>
      <td><?= isset($lembagaadat->sanksi_adat) ? $lembagaadat->sanksi_adat : '' ?></td>
      <td>Upacara Adat Perkawinan</td>
      <td><?= isset($lembagaadat->upacara_adat_perkawinan) ? $lembagaadat->upacara_adat_perkawinan : '' ?></td>
    </tr>
    <tr>
      <td>Upacara Adat Kematian</td>
      <td><?= isset($lembagaadat->upacara_adat_kematian) ? $lembagaadat->upacara_adat_kematian : '' ?></td>
      <td>Upacara Adat Kelahiran</td>
      <td><?= isset($lembagaadat->upacara_adat_kelahiran) ? $lembagaadat->upacara_adat_kelahiran : '' ?></td>
      <td>Upacara Adat dalam Bercocok Tanam</td>
      <td><?= isset($lembagaadat->upacara_adat_cocok_tanam) ? $lembagaadat->upacara_adat_cocok_tanam : '' ?></td>
    </tr>
    <tr>
      <td>Upacara Adat Bidang Perikanan/Laut</td>
      <td><?= isset($lembagaadat->upacara_adat_bidang_perikanan) ? $lembagaadat->upacara_adat_bidang_perikanan : '' ?></td>
      <td>Upacara Adat Bidang Kehutanan</td>
      <td><?= isset($lembagaadat->upacara_adat_bidang_kehutanan) ? $lembagaadat->upacara_adat_bidang_kehutanan : '' ?></td>
      <td>Upacara Adat Dalam Pengelolaan SDA</td>
      <td><?= isset($lembagaadat->upacara_adat_kelola_sda) ? $lembagaadat->upacara_adat_kelola_sda : '' ?></td>
    </tr>
    <tr>
      <td>Upacara Adat Dalam Pembangunan Rumah</td>
      <td><?= isset($lembagaadat->upacara_adat_dalam_bangun_rumah) ? $lembagaadat->upacara_adat_dalam_bangun_rumah : '' ?></td>
      <td>Upacara Adat Dalam Penyelesaian Masalah/Konflik</td>
      <td colspan="3"><?= isset($lembagaadat->upacara_adat_penyelesaian_masalah) ? $lembagaadat->upacara_adat_penyelesaian_masalah : '' ?></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="6">LEMBAGA KEAMANAN</td>
    </tr>
    <tr>
      <td colspan="6">HANSIP DAN LINMAS</td>
    </tr>
    <tr>
      <td>Keberadaan Hansip dan Linmas</td>
      <td><?= isset($lembagakeamanan->keberadaanhansip) ? $lembagakeamanan->keberadaanhansip : '' ?></td>
      <td>Jumlah Anggota Hansip</td>
      <td><?= isset($lembagakeamanan->jumlah_anggota_hansip) ? $lembagakeamanan->jumlah_anggota_hansip : '' ?></td>
      <td>Jumlah Anggota Satgas Linmas</td>
      <td><?= isset($lembagakeamanan->jumlah_anggota_satgas_linmas) ? $lembagakeamanan->jumlah_anggota_satgas_linmas : '' ?></td>
    </tr>
    <tr>
      <td>Pelaksanaan SISKAMLING</td>
      <td><?= isset($lembagakeamanan->pelaksanaan_siskamling) ? $lembagakeamanan->pelaksanaan_siskamling : '' ?></td>
      <td>Jumlah Pos Kamling</td>
      <td colspan="3"><?= isset($lembagakeamanan->jumlah_poskamling) ? $lembagakeamanan->jumlah_poskamling : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">SATGAS SWAKARSA</td>
    </tr>
    <tr>
      <td>Keberadaan SATPAM SWAKARSA</td>
      <td><?= isset($lembagakeamanan->keberadaan_satpam_swakarsa) ? $lembagakeamanan->keberadaan_satpam_swakarsa : '' ?></td>
      <td>Jumlah Anggota</td>
      <td><?= isset($lembagakeamanan->jumlah_anggota_satpam) ? $lembagakeamanan->jumlah_anggota_satpam : '' ?></td>
      <td>Nama Organisasi Induk</td>
      <td><?= isset($lembagakeamanan->nama_organisasi_induk) ? $lembagakeamanan->nama_organisasi_induk : '' ?></td>
    </tr>
    <tr>
      <td>Pemilik Organisasi</td>
      <td><?= isset($lembagakeamanan->pemilik_organisasi_swakarsa) ? $lembagakeamanan->pemilik_organisasi_swakarsa : '' ?></td>
      <td>Keberadaan Org. Keamanan Lainnya</td>
      <td colspan="3"><?= isset($lembagakeamanan->keberadaan_organisasi_keamanan) ? $lembagakeamanan->keberadaan_organisasi_keamanan : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">KERJASAMA DESA/KELURAHAN DENGAN TNI/POLRI DALAM BIDANG TRANTIBLINMAS</td>
    </tr>
    <tr>
      <td>Mitra Koramil/TNI</td>
      <td><?= isset($lembagakeamanan->mitra_koramil_tni) ? $lembagakeamanan->mitra_koramil_tni : '' ?></td>
      <td>Jumlah Anggota</td>
      <td><?= isset($lembagakeamanan->jumlah_anggota_trantiblinmas) ? $lembagakeamanan->jumlah_anggota_trantiblinmas : '' ?></td>
      <td>Jumlah Kegiatan</td>
      <td><?= isset($lembagakeamanan->jumlah_kegiatan_trantiblinmas) ? $lembagakeamanan->jumlah_kegiatan_trantiblinmas : '' ?></td>
    </tr>
    <tr>
      <td>Babinkamtibmas/POLRI</td>
      <td><?= isset($lembagakeamanan->babinkamtibmas) ? $lembagakeamanan->babinkamtibmas : '' ?></td>
      <td>Jumlah Anggota</td>
      <td><?= isset($lembagakeamanan->jumlah_anggota_babinkamtibmas) ? $lembagakeamanan->jumlah_anggota_babinkamtibmas : '' ?></td>
      <td>Jumlah Kegiatan</td>
      <td><?= isset($lembagakeamanan->jumlah_kegiatan_babinkamtibmas) ? $lembagakeamanan->jumlah_kegiatan_babinkamtibmas : '' ?></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="4">PRASARANA DAN SARANA TRANSPORTASI</td>
    </tr>
    <tr>
      <td colspan="4">PRASARANA TRANSPORTASI DARAT</td>
    </tr>
    <tr>
      <td>Jenis Sarana dan Prasarana</td>
      <td>Kategori</td>
      <td>Baik (Km atau Unit)</td>
      <td>Rusak (Km atau Unit)</td>
    </tr>
    @foreach($prasaranadarat as $psd)
    <tr>
      <td><?= $psd->kgprasaranadarat->name ?></td>
      <td><?= $psd->kgdarat->name ?></td>
      <td><?= $psd['baik'] ?></td>
      <td><?= $psd['rusak'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="4">SARANA TRANSPORTASI DARAT</td>
    </tr>
    <tr>
      <td>Jenis Sarana</td>
      <td>Keberadaan</td>
      <td colspan="2">Jumlah Unit</td>
    </tr>
    @foreach($saranadarat as $srnd)
    <tr>
      <td><?= $srnd->kgsaranadarat->name ?></td>
      <td><?= $srnd['keberadaan'] ?></td>
      <td colspan="2"><?= $srnd['jumlah'] ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="2">PRASARANA TRANSPORTASI LAUT/SUNGAI</td>
    </tr>
    <tr>
      <td>Jenis Prasarana</td>
      <td>Jumlah Unit</td>
    </tr>
    @foreach($prasaranalaut as $psrnl)
    <tr>
      <td><?= $psrnl->kgprasaranalaut->name ?></td>
      <td><?= $psrnl['jumlah'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="2">SARANA TRANSPORTASI SUNGAI/LAUT</td>
    </tr>
    <tr>
      <td>Jenis Sarana</td>
      <td>Jumlah Unit</td>
    </tr>
    @foreach($saranalaut as $srnl)
    <tr>
      <td><?= $srnl->kgsaranalaut->name ?></td>
      <td><?= $srnl['jumlah'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="2">PRASARANA TRANSPORTASI UDARA</td>
    </tr>
    <tr>
      <td>Jenis Prasarana</td>
      <td>Jumlah Unit</td>
    </tr>
    @foreach($prasaranaudara as $psrnud)
    <tr>
      <td><?= $psrnud->kgprasaranaudara->name ?></td>
      <td><?= $psrnud['jumlah'] ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="2">PRASARANA KOMUNIKASI DAN INFORMASI</td>
    </tr>

    <tr>
      <td colspan="2">TELEPON</td>
    </tr>
    <tr>
      <td colspan="2">Jenis</td>
    </tr>
    @foreach($telepon as $tlp)
    <tr>
      <td><?= $tlp->kgtelepon->name ?></td>
      <td><?= $tlp['jumlah'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="2">KANTOR POS</td>
    </tr>
    <tr>
      <td colspan="2">Jenis</td>
    </tr>
    @foreach($kantorpos as $ktp)
    <tr>
      <td><?= $ktp->kgkantorpos->name ?></td>
      <td><?= $ktp['jumlah'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="2">RADIO/TV</td>
    </tr>
    <tr>
      <td colspan="2">Jenis</td>
    </tr>
    @foreach($radiotv as $rtv)
    <tr>
      <td><?= $rtv->kgradiotv->name ?></td>
      <td><?= $rtv['jumlah'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="2">KORAN/MAJALAH/BULETIN</td>
    </tr>
    <tr>
      <td colspan="2">Jenis</td>
    </tr>
    @foreach($koran as $krn)
    <tr>
      <td><?= $krn->kgkoran->name ?></td>
      <td><?= $krn->status ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="6">PRASARANA AIR BERSIH DAN SANITASI</td>
    </tr>
    <tr>
      <td colspan="6">PRASARANA AIR BERSIH</td>
    </tr>
    <tr>
      <td>Jumlah Sumur Pompa</td>
      <td><?= isset($prasaranaairbersih->jumlah_sumur_pompa) ? $prasaranaairbersih->jumlah_sumur_pompa : '' ?></td>
      <td>Jumlah Sumur Gali</td>
      <td><?= isset($prasaranaairbersih->jumlah_sumur_gali) ? $prasaranaairbersih->jumlah_sumur_gali : '' ?></td>
      <td>Jumlah Hidran Umum</td>
      <td><?= isset($prasaranaairbersih->jumlah_hidran_umum) ? $prasaranaairbersih->jumlah_hidran_umum : '' ?></td>
    </tr>
    <tr>
      <td>Jumlah PAH</td>
      <td><?= isset($prasaranaairbersih->jumlah_pah) ? $prasaranaairbersih->jumlah_pah : '' ?></td>
      <td>Jumlah Tangki Air Bersih</td>
      <td><?= isset($prasaranaairbersih->jumlah_tangki_air_bersih) ? $prasaranaairbersih->jumlah_tangki_air_bersih : '' ?></td>
      <td>Jumlah Embung</td>
      <td><?= isset($prasaranaairbersih->jumlah_embung) ? $prasaranaairbersih->jumlah_embung : '' ?></td>
    </tr>
    <tr>
      <td>Jumlah Mata Air</td>
      <td><?= isset($prasaranaairbersih->jumlah_mataair) ? $prasaranaairbersih->jumlah_mataair : '' ?></td>
      <td>Jumlah Bgn. Olah Air Bersih/Minum</td>
      <td><?= isset($prasaranaairbersih->jumlah_bangunan_olah_air) ? $prasaranaairbersih->jumlah_bangunan_olah_air : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">SANITASI</td>
    </tr>
    <tr>
      <td>Saluran drainase/saluran pembuangan air limbah</td>
      <td><?= isset($prasaranaairbersih->saluran_drainase) ? $prasaranaairbersih->saluran_drainase : '' ?></td>
      <td>Sumur Resapan Air Rumah Tangga</td>
      <td><?= isset($prasaranaairbersih->sumur_resapan_rt) ? $prasaranaairbersih->sumur_resapan_rt : '' ?></td>
      <td>Jumlah MCK Umum</td>
      <td><?= isset($prasaranaairbersih->jumlah_mck_umum) ? $prasaranaairbersih->jumlah_mck_umum : '' ?></td>
    </tr>
    <tr>
      <td>Pemilik Jumlah Jamban Keluarga</td>
      <td><?= isset($prasaranaairbersih->pemilik_jumlah_jamban) ? $prasaranaairbersih->pemilik_jumlah_jamban : '' ?></td>
      <td>Kondisi Saluran Drainase/Saluran Pembuangan Air Limbah</td>
      <td><?= isset($prasaranaairbersih->kondisi_saluran_drainase) ? $prasaranaairbersih->kondisi_saluran_drainase : '' ?></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="6">PRASARANA DAN SARANA PEMERINTAHAN</td>
    </tr>
    <tr>
      <td colspan="6">PRASARANA DAN SARANA PEMERINTAH DESA/KELURAHAN</td>
    </tr>
    <tr>
      <td>Gedung Kantor</td>
      <td><?= isset($prasaranapemerintahan->gedung_kantor_desa) ? $prasaranapemerintahan->gedung_kantor_desa : '' ?></td>
      <td>Kondisi</td>
      <td><?= isset($prasaranapemerintahan->kondisi_gedung_kantor_desa) ? $prasaranapemerintahan->kondisi_gedung_kantor_desa : '' ?></td>
      <td>Jumlah Ruang Kerja</td>
      <td><?= isset($prasaranapemerintahan->jumlah_ruang_kerja_desa) ? $prasaranapemerintahan->jumlah_ruang_kerja_desa : '' ?></td>
    </tr>
    <tr>
      <td>Balai Desa/Kelurahan/Sejenisnya</td>
      <td><?= isset($prasaranapemerintahan->balai_desa) ? $prasaranapemerintahan->balai_desa : '' ?></td>
      <td>Listrik</td>
      <td><?= isset($prasaranapemerintahan->listrik_desa) ? $prasaranapemerintahan->listrik_desa : '' ?></td>
      <td>Air Bersih</td>
      <td><?= isset($prasaranapemerintahan->air_bersih_desa) ? $prasaranapemerintahan->air_bersih_desa : '' ?></td>
    </tr>
    <tr>
      <td>Telepon</td>
      <td><?= isset($prasaranapemerintahan->telepon_desa) ? $prasaranapemerintahan->telepon_desa : '' ?></td>
      <td>Rumah Dinas Kepala Desa/Lurah</td>
      <td><?= isset($prasaranapemerintahan->rumah_dinas_kepala_desa) ? $prasaranapemerintahan->rumah_dinas_kepala_desa : '' ?></td>
      <td>Rumah Dinas Perangkat Desa/Kelurahan</td>
      <td><?= isset($prasaranapemerintahan->rumah_dinas_perangkat_desa) ? $prasaranapemerintahan->rumah_dinas_perangkat_desa : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">INVENTARIS DAN ALAT TULIS KANTOR</td>
    </tr>
    <tr>
      <td>Jumlah Mesin Tik</td>
      <td><?= isset($prasaranapemerintahan->jumlah_mesin_tik_desa) ? $prasaranapemerintahan->jumlah_mesin_tik_desa : '' ?></td>
      <td>Jumlah Meja</td>
      <td><?= isset($prasaranapemerintahan->jumlah_meja_desa) ? $prasaranapemerintahan->jumlah_meja_desa : '' ?></td>
      <td>Jumlah Kursi</td>
      <td><?= isset($prasaranapemerintahan->jumlah_kursi_desa) ? $prasaranapemerintahan->jumlah_kursi_desa : '' ?></td>
    </tr>
    <tr>
      <td>Jumlah Almari Arsip</td>
      <td><?= isset($prasaranapemerintahan->jumlah_almari_arsip_desa) ? $prasaranapemerintahan->jumlah_almari_arsip_desa : '' ?></td>
      <td>Komputer</td>
      <td><?= isset($prasaranapemerintahan->komputer_desa) ? $prasaranapemerintahan->komputer_desa : '' ?></td>
      <td>Mesin Fax</td>
      <td><?= isset($prasaranapemerintahan->mesin_fax_desa) ? $prasaranapemerintahan->mesin_fax_desa : '' ?></td>
    </tr>
    <tr>
      <td>Kendaraan Dinas</td>
      <td colspan="5"><?= isset($prasaranapemerintahan->kendaraan_dinas_desa) ? $prasaranapemerintahan->kendaraan_dinas_desa : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">ADMINISTRASI PEMERINTAHAN DESA/KELURAHAN</td>
    </tr>
    <tr>
      <td>Buku Data Peraturan Desa</td>
      <td><?= isset($prasaranapemerintahan->buku_data_peraturan_desa) ? $prasaranapemerintahan->buku_data_peraturan_desa : '' ?></td>
      <td>Buku Keputusan Kepala Desa/Lurah</td>
      <td><?= isset($prasaranapemerintahan->buku_keputusan_kepala_desa) ? $prasaranapemerintahan->buku_keputusan_kepala_desa : '' ?></td>
      <td>Buku Administrasi Kependudukan</td>
      <td><?= isset($prasaranapemerintahan->buku_administrasi_kependudukan) ? $prasaranapemerintahan->buku_administrasi_kependudukan : '' ?></td>
    </tr>
    <tr>
      <td>Buku Data Inventaris</td>
      <td><?= isset($prasaranapemerintahan->buku_data_inventaris) ? $prasaranapemerintahan->buku_data_inventaris : '' ?></td>
      <td>Buku Data Aparat</td>
      <td><?= isset($prasaranapemerintahan->buku_data_aparat) ? $prasaranapemerintahan->buku_data_aparat : '' ?></td>
      <td>Buku Data Tanah Milik Desa/Kelurahan</td>
      <td><?= isset($prasaranapemerintahan->buku_data_tanah_desa) ? $prasaranapemerintahan->buku_data_tanah_desa : '' ?></td>
    </tr>
    <tr>
      <td>Buku Administrasi Pajak dan Retribusi</td>
      <td><?= isset($prasaranapemerintahan->buku_administrasi_pajak) ? $prasaranapemerintahan->buku_administrasi_pajak : '' ?></td>
      <td>Buku Data Tanah</td>
      <td><?= isset($prasaranapemerintahan->buku_data_tanah) ? $prasaranapemerintahan->buku_data_tanah : '' ?></td>
      <td>Buku Laporan Pengaduan Masyarakat</td>
      <td><?= isset($prasaranapemerintahan->buku_laporan_pengaduan_masyarakat) ? $prasaranapemerintahan->buku_laporan_pengaduan_masyarakat : '' ?></td>
    </tr>
    <tr>
      <td>Buku Agenda Ekspedisi</td>
      <td><?= isset($prasaranapemerintahan->buku_agenda_ekspedisi) ? $prasaranapemerintahan->buku_agenda_ekspedisi : '' ?></td>
      <td>Buku Profil Desa/Kelurahan</td>
      <td><?= isset($prasaranapemerintahan->buku_profil_desa) ? $prasaranapemerintahan->buku_profil_desa : '' ?></td>
      <td>Buku Data Induk Kependudukan</td>
      <td><?= isset($prasaranapemerintahan->buku_data_induk_kependudukan) ? $prasaranapemerintahan->buku_data_induk_kependudukan : '' ?></td>
    </tr>
    <tr>
      <td>Buku Data Mutasi Penduduk</td>
      <td><?= isset($prasaranapemerintahan->buku_data_mutasi_penduduk) ? $prasaranapemerintahan->buku_data_mutasi_penduduk : '' ?></td>
      <td>Buku Rekapitulasi Jumlah Penduduk Akhir Bulan</td>
      <td><?= isset($prasaranapemerintahan->buku_rekap_jumlah_pdk_akhirbulan) ? $prasaranapemerintahan->buku_rekap_jumlah_pdk_akhirbulan : '' ?></td>
      <td>Buku Registrasi Pelayanan Penduduk</td>
      <td><?= isset($prasaranapemerintahan->buku_registrasi_pelayanan_penduduk) ? $prasaranapemerintahan->buku_registrasi_pelayanan_penduduk : '' ?></td>
    </tr>
    <tr>
      <td>Buku Data Penduduk Sementara</td>
      <td><?= isset($prasaranapemerintahan->buku_data_penduduk_sementara) ? $prasaranapemerintahan->buku_data_penduduk_sementara : '' ?></td>
      <td>Buku Anggaran Penerimaan</td>
      <td><?= isset($prasaranapemerintahan->buku_anggaran_penerimaan) ? $prasaranapemerintahan->buku_anggaran_penerimaan : '' ?></td>
      <td>Buku Anggaran Pengeluaran Pegawai dan Pembangunan</td>
      <td><?= isset($prasaranapemerintahan->buku_anggaran_pengeluaran_pegawai) ? $prasaranapemerintahan->buku_anggaran_pengeluaran_pegawai : '' ?></td>
    </tr>
    <tr>
      <td>Buku Kas Umum</td>
      <td><?= isset($prasaranapemerintahan->buku_kas_umum_desa) ? $prasaranapemerintahan->buku_kas_umum_desa : '' ?></td>
      <td>Buku Kas Pembantu Penerimaan</td>
      <td><?= isset($prasaranapemerintahan->buku_kas_pembantu_penerimaan) ? $prasaranapemerintahan->buku_kas_pembantu_penerimaan : '' ?></td>
      <td>Buku Kas Pembantu Pengeluaran Rutin dan Pembangunan</td>
      <td><?= isset($prasaranapemerintahan->buku_kas_pembantu_pengeluaran_rutin) ? $prasaranapemerintahan->buku_kas_pembantu_pengeluaran_rutin : '' ?></td>
    </tr>
    <tr>
      <td>Buku Data Lembaga Kemasyarakatan</td>
      <td colspan="5"><?= isset($prasaranapemerintahan->buku_data_lembaga_kemasyarakatan) ? $prasaranapemerintahan->buku_data_lembaga_kemasyarakatan : '' ?></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="6">PRASARANA DAN SARANA BPD DAN DUSUN/LINGKUNGAN</td>
    </tr>
    <tr>
      <td colspan="6">PRASARANA DAN SARANA BADAN PERMUSYAWARATAN DESA</td>
    </tr>
    <tr>
      <td>Gedung Kantor</td>
      <td><?= isset($prasaranabpddusun->gedung_kantor_bpd) ? $prasaranabpddusun->gedung_kantor_bpd : '' ?></td>
      <td>Jumlah Ruang Kerja</td>
      <td><?= isset($prasaranabpddusun->jumlah_ruang_kerja_bpd) ? $prasaranabpddusun->jumlah_ruang_kerja_bpd : '' ?></td>
      <td>Balai BPD</td>
      <td><?= isset($prasaranabpddusun->balai_bpd) ? $prasaranabpddusun->balai_bpd : '' ?></td>
    </tr>
    <tr>
      <td>Kondisi</td>
      <td><?= isset($prasaranabpddusun->kondisi_gedung_kantor_bpd) ? $prasaranabpddusun->kondisi_gedung_kantor_bpd : '' ?></td>
      <td>Listrik</td>
      <td><?= isset($prasaranabpddusun->listrik_bpd) ? $prasaranabpddusun->listrik_bpd : '' ?></td>
      <td>Air Bersih</td>
      <td><?= isset($prasaranabpddusun->air_bersih_bpd) ? $prasaranabpddusun->air_bersih_bpd : '' ?></td>
    </tr>
    <tr>
      <td>Telepon</td>
      <td colspan="5"><?= isset($prasaranabpddusun->telepon_bpd) ? $prasaranabpddusun->telepon_bpd : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">INVENTARIS DAN ALAT TULIS KANTOR</td>
    </tr>
    <tr>
      <td>Jumlah Mesin Tik</td>
      <td><?= isset($prasaranabpddusun->jumlah_mesin_tik_bpd) ? $prasaranabpddusun->jumlah_mesin_tik_bpd : '' ?></td>
      <td>Jumlah Meja</td>
      <td><?= isset($prasaranabpddusun->jumlah_meja_bpd) ? $prasaranabpddusun->jumlah_meja_bpd : '' ?></td>
      <td>Jumlah Kursi</td>
      <td><?= isset($prasaranabpddusun->jumlah_kursi_bpd) ? $prasaranabpddusun->jumlah_kursi_bpd : '' ?></td>
    </tr>
    <tr>
      <td>Jumlah Almari Arsip</td>
      <td><?= isset($prasaranabpddusun->jumlah_almari_arsip_bpd) ? $prasaranabpddusun->jumlah_almari_arsip_bpd : '' ?></td>
      <td>Komputer</td>
      <td><?= isset($prasaranabpddusun->komputer_bpd) ? $prasaranabpddusun->komputer_bpd : '' ?></td>
      <td>Mesin Fax</td>
      <td><?= isset($prasaranabpddusun->mesin_fax_bpd) ? $prasaranabpddusun->mesin_fax_bpd : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">ADMINISTRASI BPD</td>
    </tr>
    <tr>
      <td>Buku Administrasi Keanggotaan BPD</td>
      <td><?= isset($prasaranabpddusun->buku_adm_agt_bpd) ? $prasaranabpddusun->buku_adm_agt_bpd : '' ?></td>
      <td>Buku Administrasi Kegiatan BPD</td>
      <td><?= isset($prasaranabpddusun->buku_adm_kgt_bpd) ? $prasaranabpddusun->buku_adm_kgt_bpd : '' ?></td>
      <td>Buku kegiatan BPD</td>
      <td><?= isset($prasaranabpddusun->buku_kgt_bpd) ? $prasaranabpddusun->buku_kgt_bpd : '' ?></td>
    </tr>
    <tr>
      <td>Buku Himpunan Perda ditetapkan BPD dan Kepala Desa</td>
      <td colspan="5"><?= isset($prasaranabpddusun->buku_perda_bpd) ? $prasaranabpddusun->buku_perda_bpd : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">PRASARANA DAN SARANA DUSUN/LINGKUNGAN ATAU SEBUTAN LAINNYA</td>
    </tr>
    <tr>
      <td>Gedung Kantor atau Balai Pertemuan</td>
      <td><?= isset($prasaranabpddusun->gedung_kantor_dusun) ? $prasaranabpddusun->gedung_kantor_dusun : '' ?></td>
      <td>Alat Tulis Kantor</td>
      <td><?= isset($prasaranabpddusun->atk_dusun) ? $prasaranabpddusun->atk_dusun : '' ?></td>
      <td>Barang Inventaris</td>
      <td><?= isset($prasaranabpddusun->barang_inventaris_dusun) ? $prasaranabpddusun->barang_inventaris_dusun : '' ?></td>
    </tr>
    <tr>
      <td>Buku Administrasi</td>
      <td><?= isset($prasaranabpddusun->buku_administrasi_dusun) ? $prasaranabpddusun->buku_administrasi_dusun : '' ?></td>
      <td>Jenis Kegiatan</td>
      <td><?= isset($prasaranabpddusun->jenis_kegiatan_dusun) ? $prasaranabpddusun->jenis_kegiatan_dusun : '' ?></td>
      <td>Jumlah Pengurus</td>
      <td><?= isset($prasaranabpddusun->jumlah_pengurus_dusun) ? $prasaranabpddusun->jumlah_pengurus_dusun : '' ?></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="6">PRASARANA DAN SARANA LEMBAGA KEMASYARAKATAN DESA/KELURAHAN</td>
    </tr>
    <tr>
      <td colspan="6">LEMBAGA KEMASYARAKATAN DESA DAN KELURAHAN/LKD/LK</td>
    </tr>
    <tr>
      <td>Gedung Kantor</td>
      <td><?= isset($prasaranalkdk->gedung_kantor_lkd) ? $prasaranalkdk->gedung_kantor_lkd : '' ?></td>
      <td>Komputer</td>
      <td><?= isset($prasaranalkdk->komputer_lkd) ? $prasaranalkdk->komputer_lkd : '' ?></td>
      <td>Mesin Fax</td>
      <td><?= isset($prasaranalkdk->mesin_fax_lkd) ? $prasaranalkdk->mesin_fax_lkd : '' ?></td>
    </tr>
    <tr>
      <td>Mesin Tik</td>
      <td><?= isset($prasaranalkdk->mesin_tik_lkd) ? $prasaranalkdk->mesin_tik_lkd : '' ?></td>
      <td>Kardek</td>
      <td><?= isset($prasaranalkdk->kardek_lkd) ? $prasaranalkdk->kardek_lkd : '' ?></td>
      <td>Buku Adm. Lembaga Kemasyarakatan</td>
      <td><?= isset($prasaranalkdk->buku_administrasi_lkd) ? $prasaranalkdk->buku_administrasi_lkd : '' ?></td>
    </tr>
    <tr>
      <td>Jumlah Meja dan Kursi</td>
      <td colspan="5"><?= isset($prasaranalkdk->jumlah_meja_kursi_lkd) ? $prasaranalkdk->jumlah_meja_kursi_lkd : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">LKMD/LPM atau sebutan lain</td>
    </tr>
    <tr>
      <td>Memiliki Kantor Sendiri</td>
      <td><?= isset($prasaranalkdk->kantor_lpm) ? $prasaranalkdk->kantor_lpm : '' ?></td>
      <td>Komputer</td>
      <td><?= isset($prasaranalkdk->komputer_lpm) ? $prasaranalkdk->komputer_lpm : '' ?></td>
      <td>Mesin Fax</td>
      <td><?= isset($prasaranalkdk->mesin_fax_lpm) ? $prasaranalkdk->mesin_fax_lpm : '' ?></td>
    </tr>
    <tr>
      <td>Mesin Tik</td>
      <td><?= isset($prasaranalkdk->mesin_tik_lpm) ? $prasaranalkdk->mesin_tik_lpm : '' ?></td>
      <td>Kardek</td>
      <td><?= isset($prasaranalkdk->kardek_lpm) ? $prasaranalkdk->kardek_lpm : '' ?></td>
      <td>Buku Adm. Lembaga Kemasyarakatan</td>
      <td><?= isset($prasaranalkdk->buku_administrasi_lmb_lpm) ? $prasaranalkdk->buku_administrasi_lmb_lpm : '' ?></td>
    </tr>
    <tr>
      <td>Jumlah Meja dan Kursi</td>
      <td><?= isset($prasaranalkdk->jumlah_meja_kursi_lpm) ? $prasaranalkdk->jumlah_meja_kursi_lpm : '' ?></td>
      <td>Buku Administrasi</td>
      <td><?= isset($prasaranalkdk->buku_administrasi_lpm) ? $prasaranalkdk->buku_administrasi_lpm : '' ?></td>
      <td>Jumlah Kegiatan</td>
      <td><?= isset($prasaranalkdk->jenis_kegiatan_lpm) ? $prasaranalkdk->jenis_kegiatan_lpm : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">PKK</td>
    </tr>
    <tr>
      <td>PKK</td>
      <td><?= isset($prasaranalkdk->pkk) ? $prasaranalkdk->pkk : '' ?></td>
      <td>Gedung/Kantor</td>
      <td><?= isset($prasaranalkdk->gedung_pkk) ? $prasaranalkdk->gedung_pkk : '' ?></td>
      <td>Peralatan Kantor/ATK/Inventaris</td>
      <td><?= isset($prasaranalkdk->atk_pkk) ? $prasaranalkdk->atk_pkk : '' ?></td>
    </tr>
    <tr>
      <td>Kepengurusan</td>
      <td><?= isset($prasaranalkdk->kepengurusan_pkk) ? $prasaranalkdk->kepengurusan_pkk : '' ?></td>
      <td>Buku Administrasi</td>
      <td><?= isset($prasaranalkdk->buku_administrasi_pkk) ? $prasaranalkdk->buku_administrasi_pkk : '' ?></td>
      <td>Kegiatan</td>
      <td><?= isset($prasaranalkdk->kegiatan_pkk) ? $prasaranalkdk->kegiatan_pkk : '' ?></td>
    </tr>
    <tr>
      <td>Jumlah Kegiatan</td>
      <td colspan="5"><?= isset($prasaranalkdk->jumlah_kegiatan_pkk) ? $prasaranalkdk->jumlah_kegiatan_pkk : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">KARANG TARUNA</td>
    </tr>
    <tr>
      <td>Karang Taruna</td>
      <td><?= isset($prasaranalkdk->karang_taruna) ? $prasaranalkdk->karang_taruna : '' ?></td>
      <td>Kepengurusan</td>
      <td><?= isset($prasaranalkdk->kepengurusan_kt) ? $prasaranalkdk->kepengurusan_kt : '' ?></td>
      <td>Buku Administrasi</td>
      <td><?= isset($prasaranalkdk->buku_administrasi_kt) ? $prasaranalkdk->buku_administrasi_kt : '' ?></td>
    </tr>
    <tr>
      <td>Jumlah Kegiatan</td>
      <td colspan="5"><?= isset($prasaranalkdk->jumlah_kegiatan_kt) ? $prasaranalkdk->jumlah_kegiatan_kt : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">RUKUN TETANGGA</td>
    </tr>
    <tr>
      <td>Jumlah RT</td>
      <td><?= isset($prasaranalkdk->jumlah_rt) ? $prasaranalkdk->jumlah_rt : '' ?></td>
      <td>Rukun Tetangga</td>
      <td><?= isset($prasaranalkdk->rukun_tetangga) ? $prasaranalkdk->rukun_tetangga : '' ?></td>
      <td>Kepengurusan</td>
      <td><?= isset($prasaranalkdk->kepengurusan_rt) ? $prasaranalkdk->kepengurusan_rt : '' ?></td>
    </tr>
    <tr>
      <td>Buku Administrasi</td>
      <td><?= isset($prasaranalkdk->buku_administrasi_rt) ? $prasaranalkdk->buku_administrasi_rt : '' ?></td>
      <td>Jumlah Kegiatan</td>
      <td colspan="5"><?= isset($prasaranalkdk->jumlah_kegiatan_rt) ? $prasaranalkdk->jumlah_kegiatan_rt : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">RUKUN WARGA</td>
    </tr>
    <tr>
      <td>Jumlah RW</td>
      <td><?= isset($prasaranalkdk->jumlah_rw) ? $prasaranalkdk->jumlah_rw : '' ?></td>
      <td>Rukun Warga</td>
      <td><?= isset($prasaranalkdk->rukun_warga) ? $prasaranalkdk->rukun_warga : '' ?></td>
      <td>Kepengurusan</td>
      <td><?= isset($prasaranalkdk->kepengurusan_rw) ? $prasaranalkdk->kepengurusan_rw : '' ?></td>
    </tr>
    <tr>
      <td>Buku Administrasi</td>
      <td><?= isset($prasaranalkdk->buku_administrasi_rw) ? $prasaranalkdk->buku_administrasi_rw : '' ?></td>
      <td>Jumlah Kegiatan</td>
      <td colspan="5"><?= isset($prasaranalkdk->jumlah_kegiatan_rw) ? $prasaranalkdk->jumlah_kegiatan_rw : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">LEMBAGA ADAT</td>
    </tr>
    <tr>
      <td>Memiliki Kantor/Gedung/Menumpang</td>
      <td><?= isset($prasaranalkdk->gedung_lembagaadat) ? $prasaranalkdk->gedung_lembagaadat : '' ?></td>
      <td>Kepengurusan</td>
      <td><?= isset($prasaranalkdk->kepengurusan_lembagaadat) ? $prasaranalkdk->kepengurusan_lembagaadat : '' ?></td>
      <td>Buku Administrasi</td>
      <td><?= isset($prasaranalkdk->buku_administrasi_lembagaadat) ? $prasaranalkdk->buku_administrasi_lembagaadat : '' ?></td>
    </tr>
    <tr>
      <td>Jumlah Kegiatan</td>
      <td colspan="5"><?= isset($prasaranalkdk->jumlah_kegiatan_lembagaadat) ? $prasaranalkdk->jumlah_kegiatan_lembagaadat : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">BUMDES</td>
    </tr>
    <tr>
      <td>BUMDES</td>
      <td><?= isset($prasaranalkdk->bumdes) ? $prasaranalkdk->bumdes : '' ?></td>
      <td>Memiliki Kantor/Gedung/Menumpang</td>
      <td><?= isset($prasaranalkdk->gedung_bumdes) ? $prasaranalkdk->gedung_bumdes : '' ?></td>
      <td>Kepengurusan</td>
      <td><?= isset($prasaranalkdk->kepengurusan_bumdes) ? $prasaranalkdk->kepengurusan_bumdes : '' ?></td>
    </tr>
    <tr>
      <td>Buku Administrasi</td>
      <td><?= isset($prasaranalkdk->buku_administrasi_bumdes) ? $prasaranalkdk->buku_administrasi_bumdes : '' ?></td>
      <td>Jumlah Kegiatan</td>
      <td colspan="3"><?= isset($prasaranalkdk->jumlah_kegiatan_bumdes) ? $prasaranalkdk->jumlah_kegiatan_bumdes : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">FORUM KOMUNIKASI KADER PEMBERDAYAAN MASYARAKAT</td>
    </tr>
    <tr>
      <td>Forum Komunikasi Kader Pemberdayaan Masyarakat</td>
      <td><?= isset($prasaranalkdk->fkkpm) ? $prasaranalkdk->fkkpm : '' ?></td>
      <td>Memiliki Kantor/Gedung/Menumpang</td>
      <td><?= isset($prasaranalkdk->gedung_fkkpm) ? $prasaranalkdk->gedung_fkkpm : '' ?></td>
      <td>Kepengurusan</td>
      <td><?= isset($prasaranalkdk->kepengurusan_fkkpm) ? $prasaranalkdk->kepengurusan_fkkpm : '' ?></td>
    </tr>
    <tr>
      <td>Buku Administrasi</td>
      <td><?= isset($prasaranalkdk->buku_administrasi_fkkpm) ? $prasaranalkdk->buku_administrasi_fkkpm : '' ?></td>
      <td>Jumlah Kegiatan</td>
      <td colspan="3"><?= isset($prasaranalkdk->jumlah_kegiatan_fkkpm) ? $prasaranalkdk->jumlah_kegiatan_fkkpm : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">ORGANISASI SOSIAL KEMASYARAKATAN</td>
    </tr>
    <tr>
      <td>Kantor/gedung Organisasi Sosial Kemasyarakatan lainnya</td>
      <td><?= isset($prasaranalkdk->gedung_organisasi_sosial) ? $prasaranalkdk->gedung_organisasi_sosial : '' ?></td>
      <td>Kepengurusan</td>
      <td colspan="3"><?= isset($prasaranalkdk->kepengurusan_sosial) ? $prasaranalkdk->kepengurusan_sosial : '' ?></td>
    </tr>
    <tr>
      <td colspan="6">ORGANISASI PROFESI YANG ADA</td>
    </tr>
    <tr>
      <td>Kantor/gedung Organisasi Profesi yang ada</td>
      <td><?= isset($prasaranalkdk->gedung_organisasi_profesi) ? $prasaranalkdk->gedung_organisasi_profesi : '' ?></td>
      <td>Kepengurusan</td>
      <td><?= isset($prasaranalkdk->kepengurusan_organisasi_profesi) ? $prasaranalkdk->kepengurusan_organisasi_profesi : '' ?></td>
      <td>Buku Administrasi</td>
      <td><?= isset($prasaranalkdk->buku_administrasi_org_profesi) ? $prasaranalkdk->buku_administrasi_org_profesi : '' ?></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="2">PRASARANA PERIBADATAN, OLAHRAGA</td>
    </tr>
    <tr>
      <td colspan="2">PRASARANA PERIBADATAN</td>
    </tr>
    <tr>
      <td class="align-middle">Jenis Prasarana</td>
      <td class="align-middle">Jumlah (Buah)</td>
    </tr>
    @foreach($prasaranaperibadatan as $ppd)
    <tr>
      <td><?= $ppd->kgprasaranaperibadatan->name ?></td>
      <td><?= $ppd['jumlah'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="2">PRASARANA OLAH RAGA</td>
    </tr>
    <tr>
      <td class="align-middle">Jenis Prasarana</td>
      <td class="align-middle">Jumlah (Buah)</td>
    </tr>
    @foreach($prasaranaolahraga as $por)
    <tr>
      <td><?= $por->kgprasaranaolahraga->name ?></td>
      <td><?= $por['jumlah'] ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="2">PRASARANA DAN SARANA KESEHATAN, PENDIDIKAN</td>
    </tr>
    <tr>
      <td colspan="2">PRASARANA KESEHATAN</td>
    </tr>
    <tr>
      <td class="align-middle">Jenis Prasarana</td>
      <td class="align-middle">Jumlah (Buah)</td>
    </tr>
    @foreach($prasaranakesehatan as $psksh)
    <tr>
      <td><?= $psksh->kgprasaranakesehatan->name ?></td>
      <td><?= $psksh['jumlah'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="2">SARANA KESEHATAN</td>
    </tr>
    <tr>
      <td class="align-middle">Jenis Sarana</td>
      <td class="align-middle">Jumlah (Orang)</td>
    </tr>
    @foreach($saranakesehatan as $sksht)
    <tr>
      <td><?= $sksht->kgsaranakesehatan->name ?></td>
      <td><?= $sksht['jumlah'] ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="3">PRASARANA DAN SARANA PENDIDIKAN</td>
    </tr>
    <tr>
      <td class="align-middle">Jenis</td>
      <td class="align-middle">Sewa (Buah)</td>
      <td class="align-middle">Milik Sendiri (Buah)</td>
    </tr>
    @foreach($prasaranasaranapendidikan as $psp)
    <tr>
      <td><?= $psp->kgprasaranasaranapendidikan->name ?></td>
      <td><?= $psp['sewa'] ?></td>
      <td><?= $psp['milik_sendiri'] ?></td>
    </tr>
    @endforeach
  </table>
  <table>
    <tr>
      <td colspan="2">PRASARANA ENERGI DAN PENERANGAN, HIBURAN/WISATA, KEBERSIHAN</td>
    </tr>
    <tr>
      <td colspan="2">PRASARANA ENERGI DAN PENERANGAN</td>
    </tr>
    <tr>
      <td class="align-middle">Jenis</td>
      <td class="align-middle">Jumlah (Keluarga)</td>
    </tr>
    @foreach($prasaranaenergipenerangan as $pep)
    <tr>
      <td><?= $pep->kgprasaranaenergipenerangan->name ?></td>
      <td><?= $pep['jumlah'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="2">PRASARANA HIBURAN DAN WISATA</td>
    </tr>
    <tr>
      <td class="align-middle">Jenis</td>
      <td class="align-middle">Jumlah (Orang)</td>
    </tr>
    @foreach($prasaranahiburanwisata as $phw)
    <tr>
      <td><?= $phw->kgprasaranahiburanwisata->name ?></td>
      <td><?= $phw['jumlah'] ?></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="2">PRASARANA DAN SARANA KEBERSIHAN</td>
    </tr>
    <tr>
      <td class="align-middle">Prasarana dan Sarana</td>
      <td class="align-middle">Jumlah</td>
    </tr>
    @foreach($prasaranasaranakebersihan as $psb)
    <tr>
      <td><?= $psb->kgprasaranasaranakebersihan->name ?></td>
      <td><?= $psb['jumlah'] ?></td>
    </tr>
    @endforeach
  </table>
</body>

</html>