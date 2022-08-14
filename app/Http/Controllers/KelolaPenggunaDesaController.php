<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class KelolaPenggunaDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = User::where('id', auth()->user()->id)->get();
        return view('operatordesa.kelola-pengguna.index', compact('pengguna'));
    }
}
