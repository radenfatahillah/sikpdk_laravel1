<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\DataPenduduk;
use App\Desa;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahpenduduk = DataPenduduk::ambilSemua()->count();
        $lakilaki = DataPenduduk::where('jeniskelamin_id', '1')->count();
        $perempuan = DataPenduduk::where('jeniskelamin_id', '2')->count();
        $tujuhbelasatas_tahun = \Carbon\Carbon::today()->subYears(17)->format('Y-m-d');
        $wajibktp = DataPenduduk::where('tanggallahir', '<=', $tujuhbelasatas_tahun)->count();
        $ktpel = DataPenduduk::where('ktpel_id', '1')->count();
        $desa = Desa::ambilSemua()->count();
        return view('admin.dashboard.index', compact('jumlahpenduduk', 'lakilaki', 'perempuan', 'wajibktp', 'ktpel', 'desa'));
    }
}
