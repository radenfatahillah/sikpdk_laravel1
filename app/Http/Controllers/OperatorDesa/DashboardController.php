<?php

namespace App\Http\Controllers\OperatorDesa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Desa;
use App\DataPenduduk;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahpenduduk = DataPenduduk::ambilSemua()->where('desa_id', auth()->user()->desa_id)->count();
        $lakilaki = DataPenduduk::where('jeniskelamin_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        $perempuan = DataPenduduk::where('jeniskelamin_id', '2')->where('desa_id', auth()->user()->desa_id)->count();
        $tujuhbelasatas_tahun = \Carbon\Carbon::today()->subYears(17)->format('Y-m-d');
        $wajibktp = DataPenduduk::where('tanggallahir', '<=', $tujuhbelasatas_tahun)->where('desa_id', auth()->user()->desa_id)->count();
        $ktpel = DataPenduduk::where('ktpel_id', '1')->where('desa_id', auth()->user()->desa_id)->count();
        return view('operatordesa.dashboard.index', compact('jumlahpenduduk', 'lakilaki', 'perempuan', 'wajibktp', 'ktpel'));
    }
}
