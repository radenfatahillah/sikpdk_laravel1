<?php

namespace App\Http\Controllers;

use App\DataPenduduk;
use App\Desa;
use Illuminate\Http\Request;

class LaporanDaftarPendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desa = Desa::get();
        $jumlah_lk = DataPenduduk::where('jeniskelamin_id', 1)->get();
        $jumlah_pr = DataPenduduk::where('jeniskelamin_id', 2)->get();
        $jumlah_lk1 = DataPenduduk::where('jeniskelamin_id', 1)->count();
        $jumlah_pr1 = DataPenduduk::where('jeniskelamin_id', 2)->count();
        $tujuhbelasatas_tahun = \Carbon\Carbon::today()->subYears(17)->format('Y-m-d');
        $wajibktp = DataPenduduk::where('tanggallahir', '<=', $tujuhbelasatas_tahun)->get();
        $ktpel = DataPenduduk::where('ktpel_id', '1')->get();
        return view('admin.laporandaftarpenduduk.index', compact('desa', 'jumlah_lk', 'jumlah_pr', 'jumlah_lk1', 'jumlah_pr1', 'wajibktp', 'ktpel'));
    }
}
