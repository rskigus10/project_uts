<?php

namespace App\Http\Controllers;
use App\Models\Artikel;


class artikelController extends Controller {
    function index(){
        $data['list_artikel'] = Artikel::all();
        return view('artikel.index', $data);
    }
    function create(){
        return view('artikel.create');

    }
    function store(){
        $artikel = new Artikel;
        $artikel->nama = request('nama');
        $artikel->judul = request('judul');
        $artikel->artikel = request('artikel');
        $artikel->gambar = request('gambar');
        $artikel->save();

        return redirect('admin/artikel')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(Artikel $artikel){
        $data['artikel'] = $artikel;    
        return view('artikel.show', $data);
    }
    function edit(Artikel $artikel){
        $data['artikel'] = $artikel;    
        return view('artikel.edit', $data);

    }
    function update(Artikel $artikel){
        $artikel->nama = request('nama');
        $artikel->artikel = request('judul');
        $artikel->judul = request('artikel');
        $artikel->gambar = request('gambar');
        $artikel->save();

        return redirect('admin/artikel')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Artikel $artikel){
        $artikel->delete();

        return redirect('admin/artikel')->with('danger', 'Data Berhasil Dihapus');
    }
}