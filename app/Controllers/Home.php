<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('beranda');
    }

    public function menuJurusan(){
        $data['judulhalaman']='Daftar Jurusan';
        $data['intro']='<p>Berikut ini daftar jurusan di SMK Nusantara</p>';
        $data['daftarJurusan']=$this->jurusan->find();
        return view('jurusan',$data);
    }

    public function menuFasilitas(){
        $data['judulhalaman']='Daftar Fasilitas';
        $data['intro']='<p>Berikut ini daftar fasilitas di SMK Nusantara</p>';
        $data['daftarFasilitas']=$this->fasilitas->find();
        return view('fasilitas',$data);
    }


}
