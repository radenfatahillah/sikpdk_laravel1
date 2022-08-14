<?php

namespace App\Exports;

use App\DataPenduduk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class DataPendudukExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return DataPenduduk::where('desa_id', auth()->user()->desa_id)->orderBy('NOKK', 'asc')->orderBy('rt', 'asc')->orderBy('shdk_id', 'asc')->select(
            'NOKK',
            'NIK',
            'name',
            'jeniskelamin_id',
            'tempatlahir',
            'tanggallahir',
            'agama_id',
            'etnis_id',
            'pendidikan_kk_id',
            'pendidikan_sedang_id',
            'penyandangcacat_id',
            'jenispekerjaan_id',
            'golongandarah_id',
            'statusperkawinan_id',
            'tanggalperkawinan',
            'shdk_id',
            'kewarganegaraan_id',
            'no_paspor',
            'no_kitap',
            'nama_ayah',
            'nama_ibu',
            'alamat_id',
            'rt',
            'rw',
            'desa_id',
            'ktpel_id',
        )->get();
    }

    public function map($datapenduduk): array
    {
        return [
            $datapenduduk->NOKK,
            $datapenduduk->NIK,
            $datapenduduk->name,
            $datapenduduk->jeniskelamin->name,
            $datapenduduk->tempatlahir,
            $datapenduduk->tanggallahir,
            $datapenduduk->agama->name,
            $datapenduduk->etnis->name,
            $datapenduduk->pendidikan_kk->name,
            $datapenduduk->pendidikan_sedang->name,
            $datapenduduk->penyandangcacat->name,
            $datapenduduk->jenispekerjaan->name,
            $datapenduduk->golongandarah->name,
            $datapenduduk->statusperkawinan->name,
            $datapenduduk->tanggalperkawinan,
            $datapenduduk->shdk->name,
            $datapenduduk->kewarganegaraan->name,
            $datapenduduk->no_paspor,
            $datapenduduk->no_kitap,
            $datapenduduk->nama_ayah,
            $datapenduduk->nama_ibu,
            $datapenduduk->alamat->name,
            $datapenduduk->rt,
            $datapenduduk->rw,
            $datapenduduk->desa->name,
            $datapenduduk->ktpel->name,
        ];
    }

    public function headings(): array
    {
        return [
            'No. KK',
            'NIK',
            'Nama Lengkap',
            'Jenis Kelamin',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Agama',
            'Etnis',
            'Pendidikan dalam KK',
            'Pendidikan Sedang Tempuh',
            'Penyandang Cacat',
            'Jenis Pekerjaan',
            'Golongan Darah',
            'Status Perkawinan',
            'Tanggal Perkawinan',
            'SHDK',
            'Kewarganegaraan',
            'No. Paspor',
            'No. Kitap',
            'Nama Ayah',
            'Nama Ibu',
            'Alamat',
            'RT',
            'RW',
            'Desa',
            'KTP-el',
        ];
    }
}
