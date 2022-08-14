<?php

namespace App\Http\Controllers;

use App\LembagaPemerintahan;
use Illuminate\Http\Request;

class LembagaPemerintahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('operatordesa.pengaturan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LembagaPemerintahan  $lembagaPemerintahan
     * @return \Illuminate\Http\Response
     */
    public function show(LembagaPemerintahan $lembagaPemerintahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LembagaPemerintahan  $lembagaPemerintahan
     * @return \Illuminate\Http\Response
     */
    public function edit(LembagaPemerintahan $lembagaPemerintahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LembagaPemerintahan  $lembagaPemerintahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LembagaPemerintahan $lembagaPemerintahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LembagaPemerintahan  $lembagaPemerintahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(LembagaPemerintahan $lembagaPemerintahan)
    {
        //
    }
}
