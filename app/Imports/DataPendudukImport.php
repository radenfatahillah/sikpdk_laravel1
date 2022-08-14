<?php

namespace App\Imports;

use App\DataPenduduk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataPendudukImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new DataPenduduk([
            'NOKK'          => $row['NOKK'],
            'NIK'           => $row['NIK'],
            'name'          => $row['name'],
            'jeniskelamin'  => $row['jeniskelamin'],
            'tempatlahir'   => $row['tempatlahir'],
            'tanggallahir'    => $row['tanggallahir'],
            'agama_id'  => $row['agama_id'],
            'etnis_id'  => $row['etnis_id'],
            'pendidikan_kk_id'  => $row['pendidikan_kk_id'],
            'pendidikan_sedang_id'  => $row['pendidikan_sedang_id'],
            'penyandangcacat_id'    => $row['penyandangcacat_id'],
            'jenispekerjaan_id' => $row['jenispekerjaan_id'],
            'golongandarah_id'  => $row['golongandarah_id'],
            'statusperkawinan_id'   => $row['statusperkawinan_id'],
            'tanggalperkawinan'   => $row['tanggalperkawinan'],
            'shdk_id' => $row['shdk_id'],
            'kewarganegaraan_id' => $row['kewarganegaraan_id'],
            'no_paspor' => $row['no_paspor'],
            'no_kitap' => $row['no_kitap'],
            'nama_ayah' => $row['nama_ayah'],
            'nama_ibu' => $row['nama_ibu'],
            'alamat_id' => $row['alamat_id'],
            'rt' => $row['rt'],
            'rw' => $row['rw'],
            'desa_id' => auth()->user()->id,
            'KTPel' => $row['KTPel'],
        ]);
    }
}
