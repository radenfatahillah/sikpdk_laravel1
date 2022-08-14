<?php

namespace App\Http\Controllers;

use App\Desa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KelolaPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = User::where('role_id', '2')->get();
        return view('admin.kelola-pengguna.index', compact('pengguna'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desa_id = Desa::ambilSemua();
        return view('admin.kelola-pengguna.create', compact('desa_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'desa_id' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'telepon' => 'required',
        ], [

            'name.required' => 'Nama Lengkap wajib diisi',
            'desa_id.required' => 'Desa wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah ada',
            'password.required' => 'Password wajib diisi',
            'telepon.required' => 'No. Telepon wajib diisi',
        ]);

        $pengguna = new User;
        $pengguna->name = $request->name;
        $pengguna->desa_id = $request->desa_id;
        $pengguna->role_id = 2;
        $pengguna->email = $request->email;
        $pengguna->telepon = $request->telepon;
        $pengguna->password = Hash::make($request->password);
        $pengguna->save();
        return redirect()->route('kelolapengguna.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengguna = User::ambil($id);
        return view('admin.kelola-pengguna.show', ['pengguna' => $pengguna]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $desa_id = Desa::ambilSemua();
        $pengguna = User::ambil($id);
        return view('admin.kelola-pengguna.edit', compact('desa_id', 'pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => 'required',
            'desa_id' => 'required',
            'email' => 'required',
            'telepon' => 'required',
        ], [

            'name.required' => 'Nama Lengkap wajib diisi',
            'desa_id.required' => 'Desa wajib diisi',
            'email.required' => 'Email wajib diisi',
            'telepon.required' => 'No. Telepon wajib diisi',
        ]);

        $pengguna = User::ambil($id);
        $pengguna->name = $request->input('name');
        $pengguna->desa_id = $request->input('desa_id');
        $pengguna->email = $request->input('email');
        $pengguna->telepon = $request->input('telepon');
        $pengguna->password = Hash::make($request->input('password'));
        $pengguna->save();
        return redirect()->route('kelolapengguna.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = User::find($id);
        $member->delete();
        return redirect()->back();
    }
}
