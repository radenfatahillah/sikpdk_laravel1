<?php

use Illuminate\Database\Seeder;

class JenisPekerjaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'BELUM/TIDAK BEKERJA',
            'MENGURUS RUMAH TANGGA',
            'PELAJAR/MAHASISWA',
            'PENSIUNAN',
            'PEGAWAI NEGERI SIPIL',
            'TENTARA NASIONAL INDONESIA',
            'KEPOLISIAN RI',
            'PERDAGANGAN',
            'PETANI/PEKEBUN',
            'PETERNAK',
            'NELAYAN/PERIKANAN',
            'INDUSTRI',
            'KONSTRUKSI',
            'TRANSPORTASI',
            'KARYAWAN SWASTA',
            'KARYAWAN BUMN',
            'KARYAWAN BUMD',
            'KARYAWAN HONORER',
            'BURUH HARIAN LEPAS',
            'BURUH TANI/PERKEBUNAN',
            'BURUH NELAYAN/PERIKANAN',
            'BURUH PETERNAKAN',
            'PEMBANTU RUMAH TANGGA',
            'TUKANG CUKUR',
            'TUKANG LISTRIK',
            'TUKANG BATU',
            'TUKANG KAYU','TUKANG SOL SEPATU','TUKANG LAS/PANDAI BESI','TUKANG JAHIT',
            'TUKANG GIGI','PENATA RIAS','PENATA BUSANA','PENATA RAMBUT','MEKANIK','SENIMAN',
            'TABIB','PARAJI','PERANCANG BUSANA','PENTERJEMAH','IMAM MESJID','PENDETA','PASTOR',
            'WARTAWAN','USTADZ/MUBALIGH','JURU MASAK','PROMOTOR ACARA','ANGGOTA DPR-RI','ANGGOTA DPD',
            'ANGGOTA BPK','PRESIDEN','WAKIL PRESIDEN','ANGGOTA MAHKAMAH KONSTITUSI',
            'ANGGOTA KABINET/KEMENTERIAN','DUTA BESAR','GUBERNUR','WAKIL GUBERNUR','BUPATI',
            'WAKIL BUPATI','WALIKOTA','WAKIL WALIKOTA','ANGGOTA DPRD PROVINSI','ANGGOTA DPRD KABUPATEN/KOTA',
            'DOSEN','GURU','PILOT','PENGACARA','NOTARIS','ARSITEK','AKUNTAN','KONSULTAN','DOKTER','BIDAN',
            'PERAWAT','APOTEKER','PSIKIATER/PSIKOLOG','PENYIAR TELEVISI','PENYIAR RADIO','PELAUT','PENELITI',
            'SOPIR','PIALANG','PARANORMAL','PEDAGANG','PERANGKAT DESA','KEPALA DESA','BIARAWATI','WIRASWASTA',
            'LAINNYA'
        ];
        
        for($i=0;$i<count($name);$i++){
            App\JenisPekerjaan::create([
                'name'=> $name[$i]
            ]);
        }
    }
}
