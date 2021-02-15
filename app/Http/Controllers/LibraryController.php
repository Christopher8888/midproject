<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;

class LibraryController extends Controller
{
    public function index() 
    {
        $books =book::all();
        return view('library', compact('books'));
    }

    public function create()
    {
        return view ('create');
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
            'judul_buku' =>'required|min:5|max:20',
            'penulis_buku'=>'required|min:5|max:20',
            'jumlah_halaman'=>'required|numeric|min:1',
            'tahun_terbit'=>'required|numeric|min:2000|max:2021'
        ]);

        //cara lama
        
        // book::create ([
        //     'judul_buku'=> $request->judul_buku,
        //     'penulis_buku'=> $request->penulis_buku,
        //     'jumlah_halaman'=> $request->jumlah_halaman,
        //     'tahun_terbit'=> $request->tahun_terbit
        // ]);

        //cara cepet 
        book::create($request->all());

                                        //notifikasi
        return redirect ('/library')->with ('status' , 'Book successfully added');
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
        $book = book::find($id);
        return view('edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
                    //data untuk di request //data yg di edit
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'judul_buku' =>'required|min:5|max:20',
            'penulis_buku'=>'required|min:5|max:20',
            'jumlah_halaman'=>'required|numeric|min:1',
            'tahun_terbit'=>'required|numeric|min:2000|max:2021'
        ]);

        // book::where('id', $book->id)
        //     ->update([
        //     'judul_buku'=> $request->judul_buku,
        //     'penulis_buku'=> $request->penulis_buku,
        //     'jumlah_halaman'=> $request->jumlah_halaman,
        //     'tahun_terbit'=> $request->tahun_terbits
        //     ]);
       

        $book = book::find($id);
        $book->update($request->all());
            return redirect ('/library')->with ('status' , 'update success');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        book::destroy($id);
        return redirect ('/library');
    }
}
