<?php
namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Komentar;
use App\Models\Artikel;



class HomeController extends Controller{
    function showHome(){
        $data['list_artikel'] = Artikel::all();
        return view('template.home', $data);
    }

    function showSingle(){
        $data['list_komentar'] = Komentar::all();
        return view('template.single', $data);
    }
    function show(Artikel $artikel){
        $data['artikel'] = $artikel;    
        return view('template.single', $data);
    }
    function storeKomentar(){
        $komentar = new Komentar;
        $komentar->nama = request('nama');
        $komentar->komentar = request('komentar');
        $komentar->save();

        return redirect('single')->with('success', 'Data Berhasil Ditambahkan');
    }

    function showAdmin(){
        return view('admin.index');
    }


}
