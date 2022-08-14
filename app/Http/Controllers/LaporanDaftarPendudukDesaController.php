<?php

namespace App\Http\Controllers;

use App\DataPenduduk;
use App\Desa;
use Illuminate\Http\Request;

class LaporanDaftarPendudukDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desa = Desa::where('id', auth()->user()->desa_id)->get();
        $jumlah_lk = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', 1)->count();
        $jumlah_pr = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('jeniskelamin_id', 2)->count();
        $tujuhbelasatas_tahun = \Carbon\Carbon::today()->subYears(17)->format('Y-m-d');
        $wajibktp = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('tanggallahir', '<=', $tujuhbelasatas_tahun)->count();
        $ktpel = DataPenduduk::where('desa_id', auth()->user()->desa_id)->where('ktpel_id', '1')->count();
        return view('operatordesa.laporandaftarpenduduk.index', compact('desa', 'jumlah_lk', 'jumlah_pr', 'wajibktp', 'ktpel'));
    }
}
