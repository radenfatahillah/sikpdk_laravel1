<?php

use Illuminate\Support\Facades\Route;


/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

// Route::get('/', function () {
//     return view('awal');
// });

Route::get('/', 'MasyarakatUmumController@index')->name('landingpageindex');
Route::get('/ceknik', 'MasyarakatUmumController@ceknik')->name('landingpageceknik');
Route::get('/sejarah', 'MasyarakatUmumController@sejarah')->name('landingpagesejarah');
Route::get('/letakgeografis', 'MasyarakatUmumController@letakgeografis')->name('landingpageletakgeografis');
Route::get('/strukturpemerintahan', 'MasyarakatUmumController@strukturpemerintahan')->name('landingpagestrukturpemerintahan');
Route::get('/visimisi', 'MasyarakatUmumController@visimisi')->name('landingpagevisimisi');
Route::get('/profildesa', 'MasyarakatUmumController@profildesa')->name('landingpageprofildesa');
Route::get('/detailprofildesa/{desa_id}', 'MasyarakatUmumController@detailprofildesa')->name('landingpagedetailprofildesa');

Auth::routes([
    'register' => false,
]);
Route::group(['middleware' => 'auth'], function () {
    Route::get('ubahpassword', 'UbahPasswordController@edit')->name('user.password.edit');
    Route::patch('ubahpassword', 'UbahPasswordController@update')->name('user.password.update');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::resource('dashboard', 'DashboardController', ['only' => ['index']]);
});

Route::group(['as' => 'operatordesa.', 'prefix' => 'operatordesa', 'namespace' => 'OperatorDesa', 'middleware' => ['auth', 'operatordesa']], function () {
    Route::resource('dashboard', 'DashboardController', ['only' => ['index']]);
});

Route::resource('admin/masterdata-desa', 'DesaController')->middleware('admin');
Route::resource('admin/masterdata-alamat', 'AlamatController')->middleware('admin');

Route::resource('admin/keloladata-datapenduduk', 'DataPendudukController')->middleware('admin');
Route::resource('admin/keloladata-datakelahiran', 'DataKelahiranController')->middleware('admin');
Route::resource('admin/keloladata-datakematian', 'DataKematianController')->middleware('admin');
Route::get('admin/keloladata-datakematian/search/get', 'DataKematianController@cari')->name('keloladata-datakematian.cari')->middleware('admin');
Route::resource('admin/keloladata-datapindahdatang', 'DataPindahDatangController')->middleware('admin');
Route::resource('admin/keloladata-datapindahkeluar', 'DataPindahKeluarController')->middleware('admin');
Route::get('admin/keloladata-datapindahkeluar/search/get', 'DataPindahKeluarController@cari')->name('keloladata-datapindahkeluar.cari')->middleware('admin');
//
Route::get('admin/profildesakecamatan', 'ProfilDesaKecamatanController@index')->name('profildesakecamatan.index')->middleware('admin');
Route::get('admin/profildesakecamatan/{id}/', 'ProfilDesaKecamatanController@edit')->name('profildesakecamatan.edit')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updatePotensiUmum', 'ProfilDesaKecamatanController@updatePotensiUmum')->name('profildesakecamatan.updatePotensiUmum')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updateDataTanah', 'ProfilDesaKecamatanController@updateDataTanah')->name('profildesakecamatan.updateDataTanah')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updateIklimJenisKesuburanTanah', 'ProfilDesaKecamatanController@updateIklimJenisKesuburanTanah')->name('profildesakecamatan.updateIklimJenisKesuburanTanah')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updateTopografiLetakOrbitasi', 'ProfilDesaKecamatanController@updateTopografiLetakOrbitasi')->name('profildesakecamatan.updateTopografiLetakOrbitasi')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updateLembagaAdat', 'ProfilDesaKecamatanController@updateLembagaAdat')->name('profildesakecamatan.updateLembagaAdat')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updateLembagaKeamanan', 'ProfilDesaKecamatanController@updateLembagaKeamanan')->name('profildesakecamatan.updateLembagaKeamanan')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updatePrasaranaAirBersih', 'ProfilDesaKecamatanController@updatePrasaranaAirBersih')->name('profildesakecamatan.updatePrasaranaAirBersih')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updatePrasaranaLKDK', 'ProfilDesaKecamatanController@updatePrasaranaLKDK')->name('profildesakecamatan.updatePrasaranaLKDK')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updatePrasaranaPemerintahan', 'ProfilDesaKecamatanController@updatePrasaranaPemerintahan')->name('profildesakecamatan.updatePrasaranaPemerintahan')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updatePrasaranaBPDDusun', 'ProfilDesaKecamatanController@updatePrasaranaBPDDusun')->name('profildesakecamatan.updatePrasaranaBPDDusun')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updatePrasaranaIrigasi', 'ProfilDesaKecamatanController@updatePrasaranaIrigasi')->name('profildesakecamatan.updatePrasaranaIrigasi')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updatePertanian', 'ProfilDesaKecamatanController@updatePertanian')->name('profildesakecamatan.updatePertanian')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updatePemasaranHasilPerkebunan', 'ProfilDesaKecamatanController@updatePemasaranHasilPerkebunan')->name('profildesakecamatan.updatePemasaranHasilPerkebunan')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updatePemasaranHasilHutan', 'ProfilDesaKecamatanController@updatePemasaranHasilHutan')->name('profildesakecamatan.updatePemasaranHasilHutan')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updateHijauanPakanTernak', 'ProfilDesaKecamatanController@updateHijauanPakanTernak')->name('profildesakecamatan.updateHijauanPakanTernak')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updatePemasaranPanganBuah', 'ProfilDesaKecamatanController@updatePemasaranPanganBuah')->name('profildesakecamatan.updatePemasaranPanganBuah')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updatePemasaranHasilTernak', 'ProfilDesaKecamatanController@updatePemasaranHasilTernak')->name('profildesakecamatan.updatePemasaranHasilTernak')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updatePemasaranLahanTernak', 'ProfilDesaKecamatanController@updatePemasaranLahanTernak')->name('profildesakecamatan.updatePemasaranLahanTernak')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updatePemasaranHasilIkan', 'ProfilDesaKecamatanController@updatePemasaranHasilIkan')->name('profildesakecamatan.updatePemasaranHasilIkan')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updateSungai', 'ProfilDesaKecamatanController@updateSungai')->name('profildesakecamatan.updateSungai')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updateRawa', 'ProfilDesaKecamatanController@updateRawa')->name('profildesakecamatan.updateRawa')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updateManfaatKondisiDanau', 'ProfilDesaKecamatanController@updateManfaatKondisiDanau')->name('profildesakecamatan.updateManfaatKondisiDanau')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updateKetersediaanLahanTernak', 'ProfilDesaKecamatanController@updateKetersediaanLahanTernak')->name('profildesakecamatan.updateKetersediaanLahanTernak')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updatePemasaranHasilGalian', 'ProfilDesaKecamatanController@updatePemasaranHasilGalian')->name('profildesakecamatan.updatePemasaranHasilGalian')->middleware('admin');
Route::patch('admin/profildesakecamatan/{id}/updateManfaatKondisiDanau', 'ProfilDesaKecamatanController@updateManfaatKondisiDanau')->name('profildesakecamatan.updateManfaatKondisiDanau')->middleware('admin');

//
Route::get('admin/prasarana-sarana-kebersihan/create', 'PrasaranaSaranaKebersihanAdminController@create')->name('prasarana-sarana-kebersihan-admin.create')->middleware('admin');
Route::post('admin/prasarana-sarana-kebersihan', 'PrasaranaSaranaKebersihanAdminController@store')->name('prasarana-sarana-kebersihan-admin.store')->middleware('admin');
Route::get('admin/prasarana-sarana-kebersihan/{prasarana_sarana_kebersihan}/edit', 'PrasaranaSaranaKebersihanAdminController@edit')->name('prasarana-sarana-kebersihan-admin.edit')->middleware('admin');
Route::patch('admin/prasarana-sarana-kebersihan/{prasarana_sarana_kebersihan}/', 'PrasaranaSaranaKebersihanAdminController@update')->name('prasarana-sarana-kebersihan-admin.update')->middleware('admin');
Route::delete('admin/prasarana-sarana-kebersihan/{prasarana_sarana_kebersihan}/', 'PrasaranaSaranaKebersihanAdminController@destroy')->name('prasarana-sarana-kebersihan-admin.destroy')->middleware('admin');
//
Route::get('admin/prasarana-hiburan-wisata/create', 'PrasaranaHiburanWisataAdminController@create')->name('prasarana-hiburan-wisata-admin.create')->middleware('admin');
Route::post('admin/prasarana-hiburan-wisata', 'PrasaranaHiburanWisataAdminController@store')->name('prasarana-hiburan-wisata-admin.store')->middleware('admin');
Route::get('admin/prasarana-hiburan-wisata/{prasarana_hiburan_wisatum}/edit', 'PrasaranaHiburanWisataAdminController@edit')->name('prasarana-hiburan-wisata-admin.edit')->middleware('admin');
Route::patch('admin/prasarana-hiburan-wisata/{prasarana_hiburan_wisatum}/', 'PrasaranaHiburanWisataAdminController@update')->name('prasarana-hiburan-wisata-admin.update')->middleware('admin');
Route::delete('admin/prasarana-hiburan-wisata/{prasarana-hiburan-wisatum}/', 'PrasaranaHiburanWisataAdminController@destroy')->name('prasarana-hiburan-wisata-admin.destroy')->middleware('admin');
//
Route::get('admin/prasarana-sarana-pendidikan/create', 'PrasaranaSaranaPendidikanAdminController@create')->name('prasarana-sarana-pendidikan-admin.create')->middleware('admin');
Route::post('admin/prasarana-sarana-pendidikan', 'PrasaranaSaranaPendidikanAdminController@store')->name('prasarana-sarana-pendidikan-admin.store')->middleware('admin');
Route::get('admin/prasarana-sarana-pendidikan/{prasarana_sarana_pendidikan}/edit', 'PrasaranaSaranaPendidikanAdminController@edit')->name('prasarana-sarana-pendidikan-admin.edit')->middleware('admin');
Route::patch('admin/prasarana-sarana-pendidikan/{prasarana_sarana_pendidikan}/', 'PrasaranaSaranaPendidikanAdminController@update')->name('prasarana-sarana-pendidikan-admin.update')->middleware('admin');
Route::delete('admin/prasarana-sarana-pendidikan/{prasarana_sarana_pendidikan}/', 'PrasaranaSaranaPendidikanAdminController@destroy')->name('prasarana-sarana-pendidikan-admin.destroy')->middleware('admin');
//
Route::get('admin/prasarana-energi-penerangan/create', 'PrasaranaEnergiPeneranganAdminController@create')->name('prasarana-energi-penerangan-admin.create')->middleware('admin');
Route::post('admin/prasarana-energi-penerangan', 'PrasaranaEnergiPeneranganAdminController@store')->name('prasarana-energi-penerangan-admin.store')->middleware('admin');
Route::get('admin/prasarana-energi-penerangan/{prasarana_energi_penerangan}/edit', 'PrasaranaEnergiPeneranganAdminController@edit')->name('prasarana-energi-penerangan-admin.edit')->middleware('admin');
Route::patch('admin/prasarana-energi-penerangan/{prasarana_energi_penerangan}/', 'PrasaranaEnergiPeneranganAdminController@update')->name('prasarana-energi-penerangan-admin.update')->middleware('admin');
Route::delete('admin/prasarana-energi-penerangan/{prasarana_energi_penerangan}/', 'PrasaranaEnergiPeneranganAdminController@destroy')->name('prasarana-energi-penerangan-admin.destroy')->middleware('admin');
//
Route::get('admin/prasarana-peribadatan/create', 'PrasaranaPeribadatanAdminController@create')->name('prasarana-peribadatan-admin.create')->middleware('admin');
Route::post('admin/prasarana-peribadatan', 'PrasaranaPeribadatanAdminController@store')->name('prasarana-peribadatan-admin.store')->middleware('admin');
Route::get('admin/prasarana-peribadatan/{prasarana_peribadatan}/edit', 'PrasaranaPeribadatanAdminController@edit')->name('prasarana-peribadatan-admin.edit')->middleware('admin');
Route::patch('admin/prasarana-peribadatan/{prasarana_peribadatan}/', 'PrasaranaPeribadatanAdminController@update')->name('prasarana-peribadatan-admin.update')->middleware('admin');
Route::delete('admin/prasarana-peribadatan/{prasarana_peribadatan}/', 'PrasaranaPeribadatanAdminController@destroy')->name('prasarana-peribadatan-admin.destroy')->middleware('admin');
//
Route::get('admin/prasarana-olahraga/create', 'PrasaranaOlahragaAdminController@create')->name('prasarana-olahraga-admin.create')->middleware('admin');
Route::post('admin/prasarana-olahraga', 'PrasaranaOlahragaAdminController@store')->name('prasarana-olahraga-admin.store')->middleware('admin');
Route::get('admin/prasarana-olahraga/{prasarana_olahraga}/edit', 'PrasaranaOlahragaAdminController@edit')->name('prasarana-olahraga-admin.edit')->middleware('admin');
Route::patch('admin/prasarana-olahraga/{prasarana_olahraga}/', 'PrasaranaOlahragaAdminController@update')->name('prasarana-olahraga-admin.update')->middleware('admin');
Route::delete('admin/prasarana-olahraga/{prasarana_olahraga}/', 'PrasaranaOlahragaAdminController@destroy')->name('prasarana-olahraga-admin.destroy')->middleware('admin');
//
Route::get('admin/prasarana-kesehatan/create', 'PrasaranaKesehatanAdminController@create')->name('prasarana-kesehatan-admin.create')->middleware('admin');
Route::post('admin/prasarana-kesehatan', 'PrasaranaKesehatanAdminController@store')->name('prasarana-kesehatan-admin.store')->middleware('admin');
Route::get('admin/prasarana-kesehatan/{prasarana_kesehatan}/edit', 'PrasaranaKesehatanAdminController@edit')->name('prasarana-kesehatan-admin.edit')->middleware('admin');
Route::patch('admin/prasarana-kesehatan/{prasarana_kesehatan}/', 'PrasaranaKesehatanAdminController@update')->name('prasarana-kesehatan-admin.update')->middleware('admin');
Route::delete('admin/prasarana-kesehatan/{prasarana_kesehatan}/', 'PrasaranaKesehatanAdminController@destroy')->name('prasarana-kesehatan-admin.destroy')->middleware('admin');
//
Route::get('admin/sarana-kesehatan/create', 'SaranaKesehatanAdminController@create')->name('sarana-kesehatan-admin.create')->middleware('admin');
Route::post('admin/sarana-kesehatan', 'SaranaKesehatanAdminController@store')->name('sarana-kesehatan-admin.store')->middleware('admin');
Route::get('admin/sarana-kesehatan/{sarana_kesehatan}/edit', 'SaranaKesehatanAdminController@edit')->name('sarana-kesehatan-admin.edit')->middleware('admin');
Route::patch('admin/sarana-kesehatan/{sarana_kesehatan}/', 'SaranaKesehatanAdminController@update')->name('sarana-kesehatan-admin.update')->middleware('admin');
Route::delete('admin/sarana-kesehatan/{sarana_kesehatan}/', 'SaranaKesehatanAdminController@destroy')->name('sarana-kesehatan-admin.destroy')->middleware('admin');
//
Route::get('admin/perangkat-desa/create', 'PerangkatDesaAdminController@create')->name('perangkat-desa-admin.create')->middleware('admin');
Route::post('admin/perangkat-desa', 'PerangkatDesaAdminController@store')->name('perangkat-desa-admin.store')->middleware('admin');
Route::get('admin/perangkat-desa/{perangkat_desa}/edit', 'PerangkatDesaAdminController@edit')->name('perangkat-desa-admin.edit')->middleware('admin');
Route::patch('admin/perangkat-desa/{perangkat_desa}/', 'PerangkatDesaAdminController@update')->name('perangkat-desa-admin.update')->middleware('admin');
Route::delete('admin/perangkat-desa/{perangkat_desa}/', 'PerangkatDesaAdminController@destroy')->name('perangkat-desa-admin.destroy')->middleware('admin');
//
Route::get('admin/bpd-desa/create', 'BPDAdminController@create')->name('bpd-desa-admin.create')->middleware('admin');
Route::post('admin/bpd-desa', 'BPDAdminController@store')->name('bpd-desa-admin.store')->middleware('admin');
Route::get('admin/bpd-desa/{bpd_desa}/edit', 'BPDAdminController@edit')->name('bpd-desa-admin.edit')->middleware('admin');
Route::patch('admin/bpd-desa/{bpd_desa}/', 'BPDAdminController@update')->name('bpd-desa-admin.update')->middleware('admin');
Route::delete('admin/bpd-desa/{bpd_desa}/', 'BPDAdminController@destroy')->name('bpd-desa-admin.destroy')->middleware('admin');
//
Route::get('admin/dusun-desa/create', 'DusunDesaAdminController@create')->name('dusun-desa-admin.create')->middleware('admin');
Route::post('admin/dusun-desa', 'DusunDesaAdminController@store')->name('dusun-desa-admin.store')->middleware('admin');
Route::get('admin/dusun-desa/{dusun_desa}/edit', 'DusunDesaAdminController@edit')->name('dusun-desa-admin.edit')->middleware('admin');
Route::patch('admin/dusun-desa/{dusun_desa}/', 'DusunDesaAdminController@update')->name('dusun-desa-admin.update')->middleware('admin');
Route::delete('admin/dusun-desa/{dusun_desa}/', 'DusunDesaAdminController@destroy')->name('dusun-desa-admin.destroy')->middleware('admin');
//
Route::get('admin/telepon/create', 'TeleponAdminController@create')->name('telepon-admin.create')->middleware('admin');
Route::post('admin/telepon', 'TeleponAdminController@store')->name('telepon-admin.store')->middleware('admin');
Route::get('admin/telepon/{telepon}/edit', 'TeleponAdminController@edit')->name('telepon-admin.edit')->middleware('admin');
Route::patch('admin/telepon/{telepon}/', 'TeleponAdminController@update')->name('telepon-admin.update')->middleware('admin');
Route::delete('admin/telepon/{telepon}/', 'TeleponAdminController@destroy')->name('telepon-admin.destroy')->middleware('admin');
//
Route::get('admin/kantorpos/create', 'KantorPosAdminController@create')->name('kantorpos-admin.create')->middleware('admin');
Route::post('admin/kantorpos', 'KantorPosAdminController@store')->name('kantorpos-admin.store')->middleware('admin');
Route::get('admin/kantorpos/{kantorpos}/edit', 'KantorPosAdminController@edit')->name('kantorpos-admin.edit')->middleware('admin');
Route::patch('admin/kantorpos/{kantorpos}/', 'KantorPosAdminController@update')->name('kantorpos-admin.update')->middleware('admin');
Route::delete('admin/kantorpos/{kantorpos}/', 'KantorPosAdminController@destroy')->name('kantorpos-admin.destroy')->middleware('admin');
//
Route::get('admin/radiotv/create', 'RadioTvAdminController@create')->name('radiotv-admin.create')->middleware('admin');
Route::post('admin/radiotv', 'RadioTvAdminController@store')->name('radiotv-admin.store')->middleware('admin');
Route::get('admin/radiotv/{radiotv}/edit', 'RadioTvAdminController@edit')->name('radiotv-admin.edit')->middleware('admin');
Route::patch('admin/radiotv/{radiotv}/', 'RadioTvAdminController@update')->name('radiotv-admin.update')->middleware('admin');
Route::delete('admin/radiotv/{radiotv}/', 'RadioTvAdminController@destroy')->name('radiotv-admin.destroy')->middleware('admin');
//
Route::get('admin/koran/create', 'KoranAdminController@create')->name('koran-admin.create')->middleware('admin');
Route::post('admin/koran', 'KoranAdminController@store')->name('koran-admin.store')->middleware('admin');
Route::get('admin/koran/{koran}/edit', 'KoranAdminController@edit')->name('koran-admin.edit')->middleware('admin');
Route::patch('admin/koran/{koran}/', 'KoranAdminController@update')->name('koran-admin.update')->middleware('admin');
Route::delete('admin/koran/{koran}/', 'KoranAdminController@destroy')->name('koran-admin.destroy')->middleware('admin');
//
Route::get('admin/prasarana-darat/create', 'PrasaranaDaratAdminController@create')->name('prasarana-darat-admin.create')->middleware('admin');
Route::post('admin/prasarana-darat', 'PrasaranaDaratAdminController@store')->name('prasarana-darat-admin.store')->middleware('admin');
Route::get('admin/prasarana-darat/{prasarana_darat}/edit', 'PrasaranaDaratAdminController@edit')->name('prasarana-darat-admin.edit')->middleware('admin');
Route::patch('admin/prasarana-darat/{prasarana_darat}/', 'PrasaranaDaratAdminController@update')->name('prasarana-darat-admin.update')->middleware('admin');
Route::delete('admin/prasarana-darat/{prasarana_darat}/', 'PrasaranaDaratAdminController@destroy')->name('prasarana-darat-admin.destroy')->middleware('admin');
//
Route::get('admin/sarana-darat/create', 'SaranaDaratAdminController@create')->name('sarana-darat-admin.create')->middleware('admin');
Route::post('admin/sarana-darat', 'SaranaDaratAdminController@store')->name('sarana-darat-admin.store')->middleware('admin');
Route::get('admin/sarana-darat/{sarana_darat}/edit', 'SaranaDaratAdminController@edit')->name('sarana-darat-admin.edit')->middleware('admin');
Route::patch('admin/sarana-darat/{sarana_darat}/', 'SaranaDaratAdminController@update')->name('sarana-darat-admin.update')->middleware('admin');
Route::delete('admin/sarana-darat/{sarana_darat}/', 'SaranaDaratAdminController@destroy')->name('sarana-darat-admin.destroy')->middleware('admin');
//
Route::get('admin/prasarana-laut/create', 'PrasaranaLautAdminController@create')->name('prasarana-laut-admin.create')->middleware('admin');
Route::post('admin/prasarana-laut', 'PrasaranaLautAdminController@store')->name('prasarana-laut-admin.store')->middleware('admin');
Route::get('admin/prasarana-laut/{prasarana_laut}/edit', 'PrasaranaLautAdminController@edit')->name('prasarana-laut-admin.edit')->middleware('admin');
Route::patch('admin/prasarana-laut/{prasarana_laut}/', 'PrasaranaLautAdminController@update')->name('prasarana-laut-admin.update')->middleware('admin');
Route::delete('admin/prasarana-laut/{prasarana_laut}/', 'PrasaranaLautAdminController@destroy')->name('prasarana-laut-admin.destroy')->middleware('admin');
//
Route::get('admin/sarana-laut/create', 'SaranaLautAdminController@create')->name('sarana-laut-admin.create')->middleware('admin');
Route::post('admin/sarana-laut', 'SaranaLautAdminController@store')->name('sarana-laut-admin.store')->middleware('admin');
Route::get('admin/sarana-laut/{sarana_laut}/edit', 'SaranaLautAdminController@edit')->name('sarana-laut-admin.edit')->middleware('admin');
Route::patch('admin/sarana-laut/{sarana_laut}/', 'SaranaLautAdminController@update')->name('sarana-laut-admin.update')->middleware('admin');
Route::delete('admin/sarana-laut/{sarana_laut}/', 'SaranaLautAdminController@destroy')->name('sarana-laut-admin.destroy')->middleware('admin');
//
Route::get('admin/prasarana-udara/create', 'PrasaranaUdaraAdminController@create')->name('prasarana-udara-admin.create')->middleware('admin');
Route::post('admin/prasarana-udara', 'PrasaranaUdaraAdminController@store')->name('prasarana-udara-admin.store')->middleware('admin');
Route::get('admin/prasarana-udara/{prasarana_udara}/edit', 'PrasaranaUdaraAdminController@edit')->name('prasarana-udara-admin.edit')->middleware('admin');
Route::patch('admin/prasarana-udara/{prasarana_udara}/', 'PrasaranaUdaraAdminController@update')->name('prasarana-udara-admin.update')->middleware('admin');
Route::delete('admin/prasarana-udara/{prasarana_udara}/', 'PrasaranaUdaraAdminController@destroy')->name('prasarana-udara-admin.destroy')->middleware('admin');
//
Route::get('admin/pendidikan-formal/create', 'PendidikanFormalAdminController@create')->name('pendidikan-formal-admin.create')->middleware('admin');
Route::post('admin/pendidikan-formal', 'PendidikanFormalAdminController@store')->name('pendidikan-formal-admin.store')->middleware('admin');
Route::get('admin/pendidikan-formal/{pendidikan_formal}/edit', 'PendidikanFormalAdminController@edit')->name('pendidikan-formal-admin.edit')->middleware('admin');
Route::patch('admin/pendidikan-formal/{pendidikan_formal}/', 'PendidikanFormalAdminController@update')->name('pendidikan-formal-admin.update')->middleware('admin');
Route::delete('admin/pendidikan-formal/{pendidikan_formal}/', 'PendidikanFormalAdminController@destroy')->name('pendidikan-formal-admin.destroy')->middleware('admin');
//
Route::get('admin/pendidikan-keagamaan/create', 'PendidikanKeagamaanAdminController@create')->name('pendidikan-keagamaan-admin.create')->middleware('admin');
Route::post('admin/pendidikan-keagamaan', 'PendidikanKeagamaanAdminController@store')->name('pendidikan-keagamaan-admin.store')->middleware('admin');
Route::get('admin/pendidikan-keagamaan/{pendidikan_keagamaan}/edit', 'PendidikanKeagamaanAdminController@edit')->name('pendidikan-keagamaan-admin.edit')->middleware('admin');
Route::patch('admin/pendidikan-keagamaan/{pendidikan_keagamaan}/', 'PendidikanKeagamaanAdminController@update')->name('pendidikan-keagamaan-admin.update')->middleware('admin');
Route::delete('admin/pendidikan-keagamaan/{pendidikan_keagamaan}/', 'PendidikanKeagamaanAdminController@destroy')->name('pendidikan-keagamaan-admin.destroy')->middleware('admin');
//
Route::get('admin/pendidikan-non-formal/create', 'PendidikanNonFormalAdminController@create')->name('pendidikan-non-formal-admin.create')->middleware('admin');
Route::post('admin/pendidikan-non-formal', 'PendidikanNonFormalAdminController@store')->name('pendidikan-non-formal-admin.store')->middleware('admin');
Route::get('admin/pendidikan-non-formal/{pendidikan_non_formal}/edit', 'PendidikanNonFormalAdminController@edit')->name('pendidikan-non-formal-admin.edit')->middleware('admin');
Route::patch('admin/pendidikan-non-formal/{pendidikan_non_formal}/', 'PendidikanNonFormalAdminController@update')->name('pendidikan-non-formal-admin.update')->middleware('admin');
Route::delete('admin/pendidikan-non-formal/{pendidikan_non_formal}/', 'PendidikanNonFormalAdminController@destroy')->name('pendidikan-non-formal-admin.destroy')->middleware('admin');
//
Route::get('admin/lembaga-kemasyarakatan/create', 'LembagaKemasyarakatanAdminController@create')->name('lembaga-kemasyarakatan-admin.create')->middleware('admin');
Route::post('admin/lembaga-kemasyarakatan', 'LembagaKemasyarakatanAdminController@store')->name('lembaga-kemasyarakatan-admin.store')->middleware('admin');
Route::get('admin/lembaga-kemasyarakatan/{lembaga_kemasyarakatan}/edit', 'LembagaKemasyarakatanAdminController@edit')->name('lembaga-kemasyarakatan-admin.edit')->middleware('admin');
Route::patch('admin/lembaga-kemasyarakatan/{lembaga_kemasyarakatan}/', 'LembagaKemasyarakatanAdminController@update')->name('lembaga-kemasyarakatan-admin.update')->middleware('admin');
Route::delete('admin/lembaga-kemasyarakatan/{lembaga_kemasyarakatan}/', 'LembagaKemasyarakatanAdminController@destroy')->name('lembaga-kemasyarakatan-admin.destroy')->middleware('admin');
//
Route::get('admin/tingkat-partisipasi-politik/create', 'TingkatPartisipasiPolitikAdminController@create')->name('tingkat-partisipasi-politik-admin.create')->middleware('admin');
Route::post('admin/tingkat-partisipasi-politik', 'TingkatPartisipasiPolitikAdminController@store')->name('tingkat-partisipasi-politik-admin.store')->middleware('admin');
Route::get('admin/tingkat-partisipasi-politik/{tingkat_partisipasi_politik}/edit', 'TingkatPartisipasiPolitikAdminController@edit')->name('tingkat-partisipasi-politik-admin.edit')->middleware('admin');
Route::patch('admin/tingkat-partisipasi-politik/{tingkat_partisipasi_politik}/', 'TingkatPartisipasiPolitikAdminController@update')->name('tingkat-partisipasi-politik-admin.update')->middleware('admin');
Route::delete('admin/tingkat-partisipasi-politik/{tingkat_partisipasi_politik}/', 'TingkatPartisipasiPolitikAdminController@destroy')->name('tingkat-partisipasi-politik-admin.destroy')->middleware('admin');
//
Route::get('admin/lembaga-ekonomi/create', 'LembagaEkonomiAdminController@create')->name('lembaga-ekonomi-admin.create')->middleware('admin');
Route::post('admin/lembaga-ekonomi', 'LembagaEkonomiAdminController@store')->name('lembaga-ekonomi-admin.store')->middleware('admin');
Route::get('admin/lembaga-ekonomi/{lembaga_ekonomi}/edit', 'LembagaEkonomiAdminController@edit')->name('lembaga-ekonomi-admin.edit')->middleware('admin');
Route::patch('admin/lembaga-ekonomi/{lembaga_ekonomi}/', 'LembagaEkonomiAdminController@update')->name('lembaga-ekonomi-admin.update')->middleware('admin');
Route::delete('admin/lembaga-ekonomi/{lembaga_ekonomi}/', 'LembagaEkonomiAdminController@destroy')->name('lembaga-ekonomi-admin.destroy')->middleware('admin');
//
Route::get('admin/jasa-lembaga-keuangan/create', 'JasaLembagaKeuanganAdminController@create')->name('jasa-lembaga-keuangan-admin.create')->middleware('admin');
Route::post('admin/jasa-lembaga-keuangan', 'JasaLembagaKeuanganAdminController@store')->name('jasa-lembaga-keuangan-admin.store')->middleware('admin');
Route::get('admin/jasa-lembaga-keuangan/{jasa_lembaga_keuangan}/edit', 'JasaLembagaKeuanganAdminController@edit')->name('jasa-lembaga-keuangan-admin.edit')->middleware('admin');
Route::patch('admin/jasa-lembaga-keuangan/{jasa_lembaga_keuangan}/', 'JasaLembagaKeuanganAdminController@update')->name('jasa-lembaga-keuangan-admin.update')->middleware('admin');
Route::delete('admin/jasa-lembaga-keuangan/{jasa_lembaga_keuangan}/', 'JasaLembagaKeuanganAdminController@destroy')->name('jasa-lembaga-keuangan-admin.destroy')->middleware('admin');
//
Route::get('admin/industri-kecil/create', 'IndustriKecilAdminController@create')->name('industri-kecil-admin.create')->middleware('admin');
Route::post('admin/industri-kecil', 'IndustriKecilAdminController@store')->name('industri-kecil-admin.store')->middleware('admin');
Route::get('admin/industri-kecil/{industri_kecil}/edit', 'IndustriKecilAdminController@edit')->name('industri-kecil-admin.edit')->middleware('admin');
Route::patch('admin/industri-kecil/{industri_kecil}/', 'IndustriKecilAdminController@update')->name('industri-kecil-admin.update')->middleware('admin');
Route::delete('admin/industri-kecil/{industri_kecil}/', 'IndustriKecilAdminController@destroy')->name('industri-kecil-admin.destroy')->middleware('admin');
//
Route::get('admin/usaha-jasa-pengangkutan/create', 'UsahaJasaPengangkutanAdminController@create')->name('usaha-jasa-pengangkutan-admin.create')->middleware('admin');
Route::post('admin/usaha-jasa-pengangkutan', 'UsahaJasaPengangkutanAdminController@store')->name('usaha-jasa-pengangkutan-admin.store')->middleware('admin');
Route::get('admin/usaha-jasa-pengangkutan/{usaha_jasa_pengangkutan}/edit', 'UsahaJasaPengangkutanAdminController@edit')->name('usaha-jasa-pengangkutan-admin.edit')->middleware('admin');
Route::patch('admin/usaha-jasa-pengangkutan/{usaha_jasa_pengangkutan}/', 'UsahaJasaPengangkutanAdminController@update')->name('usaha-jasa-pengangkutan-admin.update')->middleware('admin');
Route::delete('admin/usaha-jasa-pengangkutan/{usaha_jasa_pengangkutan}/', 'UsahaJasaPengangkutanAdminController@destroy')->name('usaha-jasa-pengangkutan-admin.destroy')->middleware('admin');
//
Route::get('admin/usaha-jasa-perdagangan/create', 'UsahaJasaPerdaganganAdminController@create')->name('usaha-jasa-perdagangan-admin.create')->middleware('admin');
Route::post('admin/usaha-jasa-perdagangan', 'UsahaJasaPerdaganganAdminController@store')->name('usaha-jasa-perdagangan-admin.store')->middleware('admin');
Route::get('admin/usaha-jasa-perdagangan/{usaha_jasa_perdagangan}/edit', 'UsahaJasaPerdaganganAdminController@edit')->name('usaha-jasa-perdagangan-admin.edit')->middleware('admin');
Route::patch('admin/usaha-jasa-perdagangan/{usaha_jasa_perdagangan}/', 'UsahaJasaPerdaganganAdminController@update')->name('usaha-jasa-perdagangan-admin.update')->middleware('admin');
Route::delete('admin/usaha-jasa-perdagangan/{usaha_jasa_perdagangan}/', 'UsahaJasaPerdaganganAdminController@destroy')->name('usaha-jasa-perdagangan-admin.destroy')->middleware('admin');
//
Route::get('admin/usaha-jasa-hiburan/create', 'UsahaJasaHiburanAdminController@create')->name('usaha-jasa-hiburan-admin.create')->middleware('admin');
Route::post('admin/usaha-jasa-hiburan', 'UsahaJasaHiburanAdminController@store')->name('usaha-jasa-hiburan-admin.store')->middleware('admin');
Route::get('admin/usaha-jasa-hiburan/{usaha_jasa_hiburan}/edit', 'UsahaJasaHiburanAdminController@edit')->name('usaha-jasa-hiburan-admin.edit')->middleware('admin');
Route::patch('admin/usaha-jasa-hiburan/{usaha_jasa_hiburan}/', 'UsahaJasaHiburanAdminController@update')->name('usaha-jasa-hiburan-admin.update')->middleware('admin');
Route::delete('admin/usaha-jasa-hiburan/{usaha_jasa_hiburan}/', 'UsahaJasaHiburanAdminController@destroy')->name('usaha-jasa-hiburan-admin.destroy')->middleware('admin');
//
Route::get('admin/usaha-jasa-gas/create', 'UsahaJasaGasAdminController@create')->name('usaha-jasa-gas-admin.create')->middleware('admin');
Route::post('admin/usaha-jasa-gas', 'UsahaJasaGasAdminController@store')->name('usaha-jasa-gas-admin.store')->middleware('admin');
Route::get('admin/usaha-jasa-gas/{usaha_jasa_ga}/edit', 'UsahaJasaGasAdminController@edit')->name('usaha-jasa-gas-admin.edit')->middleware('admin');
Route::patch('admin/usaha-jasa-gas/{usaha_jasa_ga}/', 'UsahaJasaGasAdminController@update')->name('usaha-jasa-gas-admin.update')->middleware('admin');
Route::delete('admin/usaha-jasa-gas/{usaha_jasa_ga}/', 'UsahaJasaGasAdminController@destroy')->name('usaha-jasa-gas-admin.destroy')->middleware('admin');
//
Route::get('admin/usaha-jasa-keterampilan/create', 'UsahaJasaKeterampilanAdminController@create')->name('usaha-jasa-keterampilan-admin.create')->middleware('admin');
Route::post('admin/usaha-jasa-keterampilan', 'UsahaJasaKeterampilanAdminController@store')->name('usaha-jasa-keterampilan-admin.store')->middleware('admin');
Route::get('admin/usaha-jasa-keterampilan/{usaha_jasa_keterampilan}/edit', 'UsahaJasaKeterampilanAdminController@edit')->name('usaha-jasa-keterampilan-admin.edit')->middleware('admin');
Route::patch('admin/usaha-jasa-keterampilan/{usaha_jasa_keterampilan}/', 'UsahaJasaKeterampilanAdminController@update')->name('usaha-jasa-keterampilan-admin.update')->middleware('admin');
Route::delete('admin/usaha-jasa-keterampilan/{usaha_jasa_keterampilan}/', 'UsahaJasaKeterampilanAdminController@destroy')->name('usaha-jasa-keterampilan-admin.destroy')->middleware('admin');
//
Route::get('admin/usaha-jasa-hukum/create', 'UsahaJasaHukumAdminController@create')->name('usaha-jasa-hukum-admin.create')->middleware('admin');
Route::post('admin/usaha-jasa-hukum', 'UsahaJasaHukumAdminController@store')->name('usaha-jasa-hukum-admin.store')->middleware('admin');
Route::get('admin/usaha-jasa-hukum/{usaha-jasa-hukum}/edit', 'UsahaJasaHukumAdminController@edit')->name('usaha-jasa-hukum-admin.edit')->middleware('admin');
Route::patch('admin/usaha-jasa-hukum/{usaha-jasa-hukum}/', 'UsahaJasaHukumAdminController@update')->name('usaha-jasa-hukum-admin.update')->middleware('admin');
Route::delete('admin/usaha-jasa-hukum/{usaha-jasa-hukum}/', 'UsahaJasaHukumAdminController@destroy')->name('usaha-jasa-hukum-admin.destroy')->middleware('admin');
//
Route::get('admin/usaha-jasa-penginapan/create', 'UsahaJasaPenginapanAdminController@create')->name('usaha-jasa-penginapan-admin.create')->middleware('admin');
Route::post('admin/usaha-jasa-penginapan', 'UsahaJasaPenginapanAdminController@store')->name('usaha-jasa-penginapan-admin.store')->middleware('admin');
Route::get('admin/usaha-jasa-penginapan/{usaha_jasa_penginapan}/edit', 'UsahaJasaPenginapanAdminController@edit')->name('usaha-jasa-penginapan-admin.edit')->middleware('admin');
Route::patch('admin/usaha-jasa-penginapan/{usaha_jasa_penginapan}/', 'UsahaJasaPenginapanAdminController@update')->name('usaha-jasa-penginapan-admin.update')->middleware('admin');
Route::delete('admin/usaha-jasa-penginapan/{usaha_jasa_penginapan}/', 'UsahaJasaPenginapanAdminController@destroy')->name('usaha-jasa-penginapan-admin.destroy')->middleware('admin');
//
Route::get('admin/potensi-wisata/create', 'PotensiWisataAdminController@create')->name('potensi-wisata-admin.create')->middleware('admin');
Route::post('admin/potensi-wisata', 'PotensiWisataAdminController@store')->name('potensi-wisata-admin.store')->middleware('admin');
Route::get('admin/potensi-wisata/{potensi_wisatum}/edit', 'PotensiWisataAdminController@edit')->name('potensi-wisata-admin.edit')->middleware('admin');
Route::patch('admin/potensi-wisata/{potensi_wisatum}/', 'PotensiWisataAdminController@update')->name('potensi-wisata-admin.update')->middleware('admin');
Route::delete('admin/potensi-wisata/{potensi_wisatum}/', 'PotensiWisataAdminController@destroy')->name('potensi-wisata-admin.destroy')->middleware('admin');
//
Route::get('admin/ruang-publik/create', 'RuangPublikAdminController@create')->name('ruang-publik-admin.create')->middleware('admin');
Route::post('admin/ruang-publik', 'RuangPublikAdminController@store')->name('ruang-publik-admin.store')->middleware('admin');
Route::get('admin/ruang-publik/{ruang_publik}/edit', 'RuangPublikAdminController@edit')->name('ruang-publik-admin.edit')->middleware('admin');
Route::patch('admin/ruang-publik/{ruang_publik}/', 'RuangPublikAdminController@update')->name('ruang-publik-admin.update')->middleware('admin');
Route::delete('admin/ruang-publik/{ruang_publik}/', 'RuangPublikAdminController@destroy')->name('ruang-publik-admin.destroy')->middleware('admin');
//
Route::get('admin/kebisingan/create', 'KebisinganAdminController@create')->name('kebisingan-admin.create')->middleware('admin');
Route::post('admin/kebisingan', 'KebisinganAdminController@store')->name('kebisingan-admin.store')->middleware('admin');
Route::get('admin/kebisingan/{kebisingan}/edit', 'KebisinganAdminController@edit')->name('kebisingan-admin.edit')->middleware('admin');
Route::patch('admin/kebisingan/{kebisingan}/', 'KebisinganAdminController@update')->name('kebisingan-admin.update')->middleware('admin');
Route::delete('admin/kebisingan/{kebisingan}/', 'KebisinganAdminController@destroy')->name('kebisingan-admin.destroy')->middleware('admin');
//
Route::get('admin/kualitas-udara/create', 'KualitasUdaraAdminController@create')->name('kualitas-udara-admin.create')->middleware('admin');
Route::post('admin/kualitas-udara', 'KualitasUdaraAdminController@store')->name('kualitas-udara-admin.store')->middleware('admin');
Route::get('admin/kualitas-udara/{kualitas_udara}/edit', 'KualitasUdaraAdminController@edit')->name('kualitas-udara-admin.edit')->middleware('admin');
Route::patch('admin/kualitas-udara/{kualitas_udara}/', 'KualitasUdaraAdminController@update')->name('kualitas-udara-admin.update')->middleware('admin');
Route::delete('admin/kualitas-udara/{kualitas_udara}/', 'KualitasUdaraAdminController@destroy')->name('kualitas-udara-admin.destroy')->middleware('admin');
//
Route::get('admin/air-panas/create', 'AirPanasAdminController@create')->name('air-panas-admin.create')->middleware('admin');
Route::post('admin/air-panas', 'AirPanasAdminController@store')->name('air-panas-admin.store')->middleware('admin');
Route::get('admin/air-panas/{air_pana}/edit', 'AirPanasAdminController@edit')->name('air-panas-admin.edit')->middleware('admin');
Route::patch('admin/air-panas/{air_pana}/', 'AirPanasAdminController@update')->name('air-panas-admin.update')->middleware('admin');
Route::delete('admin/air-panas/{air_pana}/', 'AirPanasAdminController@destroy')->name('air-panas-admin.destroy')->middleware('admin');
//
Route::get('admin/kehutanan/create', 'KehutananAdminController@create')->name('kehutanan-admin.create')->middleware('admin');
Route::post('admin/kehutanan', 'KehutananAdminController@store')->name('kehutanan-admin.store')->middleware('admin');
Route::get('admin/kehutanan/{kehutanan}/edit', 'KehutananAdminController@edit')->name('kehutanan-admin.edit')->middleware('admin');
Route::patch('admin/kehutanan/{kehutanan}/', 'KehutananAdminController@update')->name('kehutanan-admin.update')->middleware('admin');
Route::delete('admin/kehutanan/{kehutanan}/', 'KehutananAdminController@destroy')->name('kehutanan-admin.destroy')->middleware('admin');
//
Route::get('admin/tanaman-pangan/create', 'TanamanPanganAdminController@create')->name('tanaman-pangan-admin.create')->middleware('admin');
Route::post('admin/tanaman-pangan', 'TanamanPanganAdminController@store')->name('tanaman-pangan-admin.store')->middleware('admin');
Route::get('admin/tanaman-pangan/{tanaman_pangan}/edit', 'TanamanPanganAdminController@edit')->name('tanaman-pangan-admin.edit')->middleware('admin');
Route::patch('admin/tanaman-pangan/{tanaman_pangan}/', 'TanamanPanganAdminController@update')->name('tanaman-pangan-admin.update')->middleware('admin');
Route::delete('admin/tanaman-pangan/{tanaman_pangan}/', 'TanamanPanganAdminController@destroy')->name('tanaman-pangan-admin.destroy')->middleware('admin');
//
Route::get('admin/komoditas-buah/create', 'KomoditasBuahAdminController@create')->name('komoditas-buah-admin.create')->middleware('admin');
Route::post('admin/komoditas-buah', 'KomoditasBuahAdminController@store')->name('komoditas-buah-admin.store')->middleware('admin');
Route::get('admin/komoditas-buah/{komoditas_buah}/edit', 'KomoditasBuahAdminController@edit')->name('komoditas-buah-admin.edit')->middleware('admin');
Route::patch('admin/komoditas-buah/{komoditas_buah}/', 'KomoditasBuahAdminController@update')->name('komoditas-buah-admin.update')->middleware('admin');
Route::delete('admin/komoditas-buah/{komoditas_buah}/', 'KomoditasBuahAdminController@destroy')->name('komoditas-buah-admin.destroy')->middleware('admin');
//
Route::get('admin/tanaman-apotik/create', 'TanamanApotikAdminController@create')->name('tanaman-apotik-admin.create')->middleware('admin');
Route::post('admin/tanaman-apotik', 'TanamanApotikAdminController@store')->name('tanaman-apotik-admin.store')->middleware('admin');
Route::get('admin/tanaman-apotik/{tanaman_apotik}/edit', 'TanamanApotikAdminController@edit')->name('tanaman-apotik-admin.edit')->middleware('admin');
Route::patch('admin/tanaman-apotik/{tanaman_apotik}/', 'TanamanApotikAdminController@update')->name('tanaman-apotik-admin.update')->middleware('admin');
Route::delete('admin/tanaman-apotik/{tanaman_apotik}/', 'TanamanApotikAdminController@destroy')->name('tanaman-apotik-admin.destroy')->middleware('admin');
//
Route::get('admin/hasil-perkebunan/create', 'HasilPerkebunanAdminController@create')->name('hasil-perkebunan-admin.create')->middleware('admin');
Route::post('admin/hasil-perkebunan', 'HasilPerkebunanAdminController@store')->name('hasil-perkebunan-admin.store')->middleware('admin');
Route::get('admin/hasil-perkebunan/{hasil_perkebunan}/edit', 'HasilPerkebunanAdminController@edit')->name('hasil-perkebunan-admin.edit')->middleware('admin');
Route::patch('admin/hasil-perkebunan/{hasil_perkebunan}/', 'HasilPerkebunanAdminController@update')->name('hasil-perkebunan-admin.update')->middleware('admin');
Route::delete('admin/hasil-perkebunan/{hasil_perkebunan}/', 'HasilPerkebunanAdminController@destroy')->name('hasil-perkebunan-admin.destroy')->middleware('admin');
//
Route::get('admin/hasil-hutan/create', 'HasilHutanAdminController@create')->name('hasil-hutan-admin.create')->middleware('admin');
Route::post('admin/hasil-hutan', 'HasilHutanAdminController@store')->name('hasil-hutan-admin.store')->middleware('admin');
Route::get('admin/hasil-hutan/{hasil_hutan}/edit', 'HasilHutanAdminController@edit')->name('hasil-hutan-admin.edit')->middleware('admin');
Route::patch('admin/hasil-hutan/{hasil_hutan}/', 'HasilHutanAdminController@update')->name('hasil-hutan-admin.update')->middleware('admin');
Route::delete('admin/hasil-hutan/{hasil_hutan}/', 'HasilHutanAdminController@destroy')->name('hasil-hutan-admin.destroy')->middleware('admin');
//
Route::get('admin/kondisi-hutan/create', 'KondisiHutanAdminController@create')->name('kondisi-hutan-admin.create')->middleware('admin');
Route::post('admin/kondisi-hutan', 'KondisiHutanAdminController@store')->name('kondisi-hutan-admin.store')->middleware('admin');
Route::get('admin/kondisi-hutan/{kondisi_hutan}/edit', 'KondisiHutanAdminController@edit')->name('kondisi-hutan-admin.edit')->middleware('admin');
Route::patch('admin/kondisi-hutan/{kondisi_hutan}/', 'KondisiHutanAdminController@update')->name('kondisi-hutan-admin.update')->middleware('admin');
Route::delete('admin/kondisi-hutan/{kondisi_hutan}/', 'KondisiHutanAdminController@destroy')->name('kondisi-hutan-admin.destroy')->middleware('admin');
//
Route::get('admin/dampak-olah-hutan/create', 'DampakOlahHutanAdminController@create')->name('dampak-olah-hutan-admin.create')->middleware('admin');
Route::post('admin/dampak-olah-hutan', 'DampakOlahHutanAdminController@store')->name('dampak-olah-hutan-admin.store')->middleware('admin');
Route::get('admin/dampak-olah-hutan/{dampak_olah_hutan}/edit', 'DampakOlahHutanAdminController@edit')->name('dampak-olah-hutan-admin.edit')->middleware('admin');
Route::patch('admin/dampak-olah-hutan/{dampak_olah_hutan}/', 'DampakOlahHutanAdminController@update')->name('dampak-olah-hutan-admin.update')->middleware('admin');
Route::delete('admin/dampak-olah-hutan/{dampak_olah_hutan}/', 'DampakOlahHutanAdminController@destroy')->name('dampak-olah-hutan-admin.destroy')->middleware('admin');
//
Route::get('admin/jenis-populasi-ternak/create', 'JenisPopulasiTernakAdminController@create')->name('jenis-populasi-ternak-admin.create')->middleware('admin');
Route::post('admin/jenis-populasi-ternak', 'JenisPopulasiTernakAdminController@store')->name('jenis-populasi-ternak-admin.store')->middleware('admin');
Route::get('admin/jenis-populasi-ternak/{jenis_populasi_ternak}/edit', 'JenisPopulasiTernakAdminController@edit')->name('jenis-populasi-ternak-admin.edit')->middleware('admin');
Route::patch('admin/jenis-populasi-ternak/{jenis_populasi_ternak}/', 'JenisPopulasiTernakAdminController@update')->name('jenis-populasi-ternak-admin.update')->middleware('admin');
Route::delete('admin/jenis-populasi-ternak/{jenis_populasi_ternak}/', 'JenisPopulasiTernakAdminController@destroy')->name('jenis-populasi-ternak-admin.destroy')->middleware('admin');
//
Route::get('admin/produksi-ternak/create', 'ProduksiTernakAdminController@create')->name('produksi-ternak-admin.create')->middleware('admin');
Route::post('admin/produksi-ternak', 'ProduksiTernakAdminController@store')->name('produksi-ternak-admin.store')->middleware('admin');
Route::get('admin/produksi-ternak/{produksi_ternak}/edit', 'ProduksiTernakAdminController@edit')->name('produksi-ternak-admin.edit')->middleware('admin');
Route::patch('admin/produksi-ternak/{produksi_ternak}/', 'ProduksiTernakAdminController@update')->name('produksi-ternak-admin.update')->middleware('admin');
Route::delete('admin/produksi-ternak/{produksi_ternak}/', 'ProduksiTernakAdminController@destroy')->name('produksi-ternak-admin.destroy')->middleware('admin');
//
Route::get('admin/pemilik-usaha-ternak/create', 'PemilikUsahaTernakAdminController@create')->name('pemilik-usaha-ternak-admin.create')->middleware('admin');
Route::post('admin/pemilik-usaha-ternak', 'PemilikUsahaTernakAdminController@store')->name('pemilik-usaha-ternak-admin.store')->middleware('admin');
Route::get('admin/pemilik-usaha-ternak/{pemilik_usaha_ternak}/edit', 'PemilikUsahaTernakAdminController@edit')->name('pemilik-usaha-ternak-admin.edit')->middleware('admin');
Route::patch('admin/pemilik-usaha-ternak/{pemilik_usaha_ternak}/', 'PemilikUsahaTernakAdminController@update')->name('pemilik-usaha-ternak-admin.update')->middleware('admin');
Route::delete('admin/pemilik-usaha-ternak/{pemilik_usaha_ternak}/', 'PemilikUsahaTernakAdminController@destroy')->name('pemilik-usaha-ternak-admin.destroy')->middleware('admin');
//
Route::get('admin/alat-produksi-laut/create', 'AlatProduksiLautAdminController@create')->name('alat-produksi-laut-admin.create')->middleware('admin');
Route::post('admin/alat-produksi-laut', 'AlatProduksiLautAdminController@store')->name('alat-produksi-laut-admin.store')->middleware('admin');
Route::get('admin/alat-produksi-laut/{alat_produksi_laut}/edit', 'AlatProduksiLautAdminController@edit')->name('alat-produksi-laut-admin.edit')->middleware('admin');
Route::patch('admin/alat-produksi-laut/{alat_produksi_laut}/', 'AlatProduksiLautAdminController@update')->name('alat-produksi-laut-admin.update')->middleware('admin');
Route::delete('admin/alat-produksi-laut/{alat_produksi_laut}/', 'AlatProduksiLautAdminController@destroy')->name('alat-produksi-laut-admin.destroy')->middleware('admin');
//
Route::get('admin/alat-produksi-tawar/create', 'AlatProduksiTawarAdminController@create')->name('alat-produksi-tawar-admin.create')->middleware('admin');
Route::post('admin/alat-produksi-tawar', 'AlatProduksiTawarAdminController@store')->name('alat-produksi-tawar-admin.store')->middleware('admin');
Route::get('admin/alat-produksi-tawar/{alat_produksi_tawar}/edit', 'AlatProduksiTawarAdminController@edit')->name('alat-produksi-tawar-admin.edit')->middleware('admin');
Route::patch('admin/alat-produksi-tawar/{alat_produksi_tawar}/', 'AlatProduksiTawarAdminController@update')->name('alat-produksi-tawar-admin.update')->middleware('admin');
Route::delete('admin/alat-produksi-tawar/{alat_produksi_tawar}/', 'AlatProduksiTawarAdminController@destroy')->name('alat-produksi-tawar-admin.destroy')->middleware('admin');
//
Route::get('admin/jenis-ikan/create', 'JenisIkanAdminController@create')->name('jenis-ikan-admin.create')->middleware('admin');
Route::post('admin/jenis-ikan', 'JenisIkanAdminController@store')->name('jenis-ikan-admin.store')->middleware('admin');
Route::get('admin/jenis-ikan/{jenis_kan}/edit', 'JenisIkanAdminController@edit')->name('jenis-ikan-admin.edit')->middleware('admin');
Route::patch('admin/jenis-ikan/{jenis_ikan}/', 'JenisIkanAdminController@update')->name('jenis-ikan-admin.update')->middleware('admin');
Route::delete('admin/jenis-ikan/{jenis_ikan}/', 'JenisIkanAdminController@destroy')->name('jenis-ikan-admin.destroy')->middleware('admin');
//
Route::get('admin/bahan-galian/create', 'BahanGalianAdminController@create')->name('bahan-galian-admin.create')->middleware('admin');
Route::post('admin/bahan-galian', 'BahanGalianAdminController@store')->name('bahan-galian-admin.store')->middleware('admin');
Route::get('admin/bahan-galian/{bahan_galian}/edit', 'BahanGalianAdminController@edit')->name('bahan-galian-admin.edit')->middleware('admin');
Route::patch('admin/bahan-galian/{bahan_galian}/', 'BahanGalianAdminController@update')->name('bahan-galian-admin.update')->middleware('admin');
Route::delete('admin/bahan-galian/{bahan_galian}/', 'BahanGalianAdminController@destroy')->name('bahan-galian-admin.destroy')->middleware('admin');
//
Route::get('admin/potensi-air-sda/create', 'PotensiAirSdaAdminController@create')->name('potensi-air-sda-admin.create')->middleware('admin');
Route::post('admin/potensi-air-sda', 'PotensiAirSdaAdminController@store')->name('potensi-air-sda-admin.store')->middleware('admin');
Route::get('admin/potensi-air-sda/{potensi_air_sda}/edit', 'PotensiAirSdaAdminController@edit')->name('potensi-air-sda-admin.edit')->middleware('admin');
Route::patch('admin/potensi-air-sda/{potensi_air_sda}/', 'PotensiAirSdaAdminController@update')->name('potensi-air-sda-admin.update')->middleware('admin');
Route::delete('admin/potensi-air-sda/{potensi_air_sda}/', 'PotensiAirSdaAdminController@destroy')->name('potensi-air-sda-admin.destroy')->middleware('admin');
//
Route::get('admin/sumber-air-bersih/create', 'SumberAirBersihAdminController@create')->name('sumber-air-bersih-admin.create')->middleware('admin');
Route::post('admin/sumber-air-bersih', 'SumberAirBersihAdminController@store')->name('sumber-air-bersih-admin.store')->middleware('admin');
Route::get('admin/sumber-air-bersih/{sumber_air_bersih}/edit', 'SumberAirBersihAdminController@edit')->name('sumber-air-bersih-admin.edit')->middleware('admin');
Route::patch('admin/sumber-air-bersih/{sumber_air_bersih}/', 'SumberAirBersihAdminController@update')->name('sumber-air-bersih-admin.update')->middleware('admin');
Route::delete('admin/sumber-air-bersih/{sumber_air_bersih}/', 'SumberAirBersihAdminController@destroy')->name('sumber-air-bersih-admin.destroy')->middleware('admin');
//
Route::get('admin/dataaparaturdesa', 'DataAparaturDesaController@index')->name('dataaparaturdesa.index')->middleware('admin');
Route::get('admin/dataaparaturdesa/{id}/', 'DataAparaturDesaController@edit')->name('dataaparaturdesa.edit')->middleware('admin');
Route::patch('admin/dataaparaturdesa/{id}/updateAparaturDesa', 'DataAparaturDesaController@updateAparaturDesa')->name('dataaparaturdesa.updateAparaturDesa')->middleware('admin');
Route::get('admin/profilkecamatan', 'ProfilKecamatanController@edit')->name('profil-kecamatan.edit')->middleware('admin');
Route::patch('admin/profilkecamatan/{kec}/updateProfilKecamatan', 'ProfilKecamatanController@updateProfilKecamatan')->name('profil-kecamatan.updateProfilKecamatan')->middleware('admin');
Route::get('admin/dataumumkecamatan', 'DataUmumKecamatanController@edit')->name('data-umum-kecamatan.edit')->middleware('admin');
Route::patch('admin/dataumumkecamatan/{profil_id}/updateDataUmumKecamatan', 'DataUmumKecamatanController@updateDataUmumKecamatan')->name('data-umum-kecamatan.updateDataUmumKecamatan')->middleware('admin');
Route::resource('admin/kelolapengguna', 'KelolaPenggunaController', ['only' => ['index', 'edit', 'create', 'destroy', 'store', 'update']])->middleware('admin');
Route::resource('admin/laporandaftarpenduduk', 'LaporanDaftarPendudukController', ['only' => ['index']])->middleware('admin');
//-Operator
Route::resource('operatordesa/kelolapenggunaoperatordesa', 'KelolaPenggunaDesaController', ['only' => ['index']])->middleware('operatordesa');
Route::resource('operatordesa/keloladata-datapendudukdesa', 'DataPendudukDesaController')->middleware('operatordesa');
Route::resource('operatordesa/keloladata-datakelahirandesa', 'DataKelahiranDesaController')->middleware('operatordesa');
Route::resource('operatordesa/keloladata-datakematiandesa', 'DataKematianDesaController')->middleware('operatordesa');
Route::get('operatordesa/keloladata-datakematiandesa/search/get', 'DataKematianDesaController@cari')->name('keloladata-datakematiandesa.cari')->middleware('operatordesa');
Route::resource('operatordesa/keloladata-datapindahdatangdesa', 'DataPindahDatangDesaController')->middleware('operatordesa');
Route::resource('operatordesa/keloladata-datapindahkeluardesa', 'DataPindahKeluarDesaController')->middleware('operatordesa');
Route::get('operatordesa/keloladata-datapindahkeluardesa/search/get', 'DataPindahKeluarDesaController@cari')->name('keloladata-datapindahkeluardesa.cari')->middleware('operatordesa');
Route::resource('operatordesa/masterdata-alamatdesa', 'AlamatDesaController')->middleware('operatordesa');
Route::resource('operatordesa/ubah-desa', 'UbahDesaController')->middleware('operatordesa');
Route::resource('operatordesa/laporandaftarpendudukoperatordesa', 'LaporanDaftarPendudukDesaController', ['only' => ['index']])->middleware('operatordesa');
Route::get('operatordesa/profil-desa', 'ProfilDesaController@edit')->name('profil-desa.edit')->middleware('operatordesa');
Route::get('operatordesa/profil-desa/cetak', 'ProfilDesaController@cetak')->name('profil-desa.cetak')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updatePotensiUmum', 'ProfilDesaController@updatePotensiUmum')->name('profil-desa.updatePotensiUmum')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updateDataTanah', 'ProfilDesaController@updateDataTanah')->name('profil-desa.updateDataTanah')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updateIklimJenisKesuburanTanah', 'ProfilDesaController@updateIklimJenisKesuburanTanah')->name('profil-desa.updateIklimJenisKesuburanTanah')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updateTopografiLetakOrbitasi', 'ProfilDesaController@updateTopografiLetakOrbitasi')->name('profil-desa.updateTopografiLetakOrbitasi')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updateLembagaAdat', 'ProfilDesaController@updateLembagaAdat')->name('profil-desa.updateLembagaAdat')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updateLembagaKeamanan', 'ProfilDesaController@updateLembagaKeamanan')->name('profil-desa.updateLembagaKeamanan')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updatePrasaranaAirBersih', 'ProfilDesaController@updatePrasaranaAirBersih')->name('profil-desa.updatePrasaranaAirBersih')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updatePrasaranaLKDK', 'ProfilDesaController@updatePrasaranaLKDK')->name('profil-desa.updatePrasaranaLKDK')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updatePrasaranaPemerintahan', 'ProfilDesaController@updatePrasaranaPemerintahan')->name('profil-desa.updatePrasaranaPemerintahan')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updatePrasaranaBPDDusun', 'ProfilDesaController@updatePrasaranaBPDDusun')->name('profil-desa.updatePrasaranaBPDDusun')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updatePrasaranaIrigasi', 'ProfilDesaController@updatePrasaranaIrigasi')->name('profil-desa.updatePrasaranaIrigasi')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updatePertanian', 'ProfilDesaController@updatePertanian')->name('profil-desa.updatePertanian')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updatePemasaranHasilPerkebunan', 'ProfilDesaController@updatePemasaranHasilPerkebunan')->name('profil-desa.updatePemasaranHasilPerkebunan')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updatePemasaranHasilHutan', 'ProfilDesaController@updatePemasaranHasilHutan')->name('profil-desa.updatePemasaranHasilHutan')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updateHijauanPakanTernak', 'ProfilDesaController@updateHijauanPakanTernak')->name('profil-desa.updateHijauanPakanTernak')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updatePemasaranPanganBuah', 'ProfilDesaController@updatePemasaranPanganBuah')->name('profil-desa.updatePemasaranPanganBuah')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updatePemasaranHasilTernak', 'ProfilDesaController@updatePemasaranHasilTernak')->name('profil-desa.updatePemasaranHasilTernak')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updatePemasaranLahanTernak', 'ProfilDesaController@updatePemasaranLahanTernak')->name('profil-desa.updatePemasaranLahanTernak')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updatePemasaranHasilIkan', 'ProfilDesaController@updatePemasaranHasilIkan')->name('profil-desa.updatePemasaranHasilIkan')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updateSungai', 'ProfilDesaController@updateSungai')->name('profil-desa.updateSungai')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updateRawa', 'ProfilDesaController@updateRawa')->name('profil-desa.updateRawa')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updateManfaatKondisiDanau', 'ProfilDesaController@updateManfaatKondisiDanau')->name('profil-desa.updateManfaatKondisiDanau')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updateKetersediaanLahanTernak', 'ProfilDesaController@updateKetersediaanLahanTernak')->name('profil-desa.updateKetersediaanLahanTernak')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updatePemasaranHasilGalian', 'ProfilDesaController@updatePemasaranHasilGalian')->name('profil-desa.updatePemasaranHasilGalian')->middleware('operatordesa');
Route::patch('operatordesa/profil-desa/{id}/updateManfaatKondisiDanau', 'ProfilDesaController@updateManfaatKondisiDanau')->name('profil-desa.updateManfaatKondisiDanau')->middleware('operatordesa');
Route::patch('operatordesa/pengaturan-desa/{id}/updateAparaturDesa', 'PengaturanDesaController@updateAparaturDesa')->name('pengaturan-desa.updateAparaturDesa')->middleware('operatordesa');
Route::resource('operatordesa/prasarana-sarana-kebersihan', 'PrasaranaSaranaKebersihanController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/prasarana-hiburan-wisata', 'PrasaranaHiburanWisataController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/prasarana-sarana-pendidikan', 'PrasaranaSaranaPendidikanController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/prasarana-energi-penerangan', 'PrasaranaEnergiPeneranganController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/prasarana-peribadatan', 'PrasaranaPeribadatanController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/prasarana-olahraga', 'PrasaranaOlahragaController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/prasarana-kesehatan', 'PrasaranaKesehatanController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/sarana-kesehatan', 'SaranaKesehatanController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/pengaturan-desa', 'PengaturanDesaController')->middleware('operatordesa');
Route::resource('operatordesa/perangkat-desa', 'PerangkatDesaController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/bpd-desa', 'BPDController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/telepon', 'TeleponController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/kantorpos', 'KantorPosController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/radiotv', 'RadioTvController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/koran', 'KoranController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/prasarana-darat', 'PrasaranaDaratController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/sarana-darat', 'SaranaDaratController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/prasarana-laut', 'PrasaranaLautController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/sarana-laut', 'SaranaLautController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/prasarana-udara', 'PrasaranaUdaraController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/pendidikan-formal', 'PendidikanFormalController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/pendidikan-keagamaan', 'PendidikanKeagamaanController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/pendidikan-non-formal', 'PendidikanNonFormalController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/lembaga-kemasyarakatan', 'LembagaKemasyarakatanController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/tingkat-partisipasi-politik', 'TingkatPartisipasiPolitikController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/lembaga-ekonomi', 'LembagaEkonomiController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/jasa-lembaga-keuangan', 'JasaLembagaKeuanganController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/industri-kecil', 'IndustriKecilController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/usaha-jasa-pengangkutan', 'UsahaJasaPengangkutanController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/usaha-jasa-perdagangan', 'UsahaJasaPerdaganganController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/usaha-jasa-hiburan', 'UsahaJasaHiburanController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/usaha-jasa-gas', 'UsahaJasaGasController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/usaha-jasa-keterampilan', 'UsahaJasaKeterampilanController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/usaha-jasa-hukum', 'UsahaJasaHukumController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/usaha-jasa-penginapan', 'UsahaJasaPenginapanController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/potensi-wisata', 'PotensiWisataController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/ruang-publik', 'RuangPublikController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/kebisingan', 'KebisinganController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/kualitas-udara', 'KualitasUdaraController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/air-panas', 'AirPanasController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/kehutanan', 'KehutananController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/tanaman-pangan', 'TanamanPanganController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/komoditas-buah', 'KomoditasBuahController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/tanaman-apotik', 'TanamanApotikController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/hasil-perkebunan', 'HasilPerkebunanController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/hasil-hutan', 'HasilHutanController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/kondisi-hutan', 'KondisiHutanController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/dampak-olah-hutan', 'DampakOlahHutanController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/jenis-populasi-ternak', 'JenisPopulasiTernakController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/produksi-ternak', 'ProduksiTernakController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/pemilik-usaha-ternak', 'PemilikUsahaTernakController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/alat-produksi-laut', 'AlatProduksiLautController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/alat-produksi-tawar', 'AlatProduksiTawarController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/jenis-ikan', 'JenisIkanController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/bahan-galian', 'BahanGalianController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/potensi-air-sda', 'PotensiAirSdaController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
Route::resource('operatordesa/sumber-air-bersih', 'SumberAirBersihController', ['only' => ['edit', 'create', 'destroy', 'store', 'update']])->middleware('operatordesa');
