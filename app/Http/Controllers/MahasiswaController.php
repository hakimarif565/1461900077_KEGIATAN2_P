<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = DB::table('buku')->select('buku_id', 'buku_judul', 'kategori_id', 'buku_deskripsi', 'buku_jumlah', 'buku_cover') -> get();
        $mahasiswa = DB::table('buku')->selectLike('1', 'buku_id') -> get();
        $mahasiswa = DB::table('buku')->selectJoin('buku_id', 'buku_judul', '=', 'buku_id.buku_judul') ->get();
        $mahasiswa = DB::table('buku')->selectJoin('buku_id', 'buku_judul', '=', 'buku_id.buku_judul') 
        -> selectLike('buku_id') ->get();
        return view('mahasiswa_0077', ['mahasiswa_0077' => $mahasiswa]);

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}