<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use App\Models\kategori;
use App\Models\buku;
use App\Models\pinjam;
use Illuminate\Http\Request;
use Perpustakaan;

class PerpusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $check = "Arif";   //Isi sebagai pengambilan pada method LIKE
        $anggota = anggota::all(); //select all
        $book = buku::join('kategori','buku.kategori_id','=','kategori.kategori_id')->get(); //join saja
        $like = anggota::where('anggota_nama','LIKE','%'.$check.'%')->get();
        
        return view('perpus0077',[
            'anggota' => $anggota,
            'book'=>$book,
            'like' =>$like
        ]);
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
