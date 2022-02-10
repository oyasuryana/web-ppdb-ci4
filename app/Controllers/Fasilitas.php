<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Fasilitas extends BaseController
{
    public function index()
    {
        $data['judulHalaman']='<h2>Fasilitas Sekolah</h2>';
        $data['intro']='<p>Berikut ini adalah daftar fasilitas SMK Nusantara</p>';
        $data['tombolTambah']='<p><a href="'.site_url('/form-fasilitas').'" class="btn btn-primary">Tambah Fasilitas</a></p>';
        $data['daftarFasilitas']=$this->fasilitas->find();
        return view('admin/fasilitas',$data);
    }

    public function tambah(){
        helper(['form']);
        $aturan=[
            'txtNamaFasilitas'=>'required',
            'txtDeskripsiFasilitas'=>'required',
        //    'txtFilenya'=>'required'

        ];

        if($this->validate($aturan)){
            $file=$this->request->getFile('txtFilenya');
            $file->move('uploads');

            $data=[
                'nama_fasilitas'=>$this->request->getPost('txtNamaFasilitas'),
                'deskripsi_fasilitas'=>$this->request->getPost('txtDeskripsiFasilitas'),
                'foto_fasilitas'=>$file->getClientName()
            ];
            $this->fasilitas->save($data);
            return redirect()->to('/tampil-fasilitas');
        } else{

        }
        $data['judulHalaman']='<h2>Penambahan Fasilitas Sekolah</h2>';
        $data['intro']='<p>Gunakan form dibawah ini untuk menambah fasilitas sekolah</p>';
        return view('admin/formFasilitas',$data);
    }

    public function edit($idFasilitas){
        $syarat=['id_fasilitas'=>$idFasilitas];
        $data['detailFasilitas']=$this->fasilitas->where($syarat)->find();

        $data['judulHalaman']='<h2>Perubahan Fasilitas Sekolah</h2>';
        $data['intro']='<p>Lakukan perubahan data fasilitas SMK Nusantara pada form dibawah ini</p>';
        return view('admin/editFasilitas',$data);
    }   
    
    
    public function hapus($idFasilitas){
        // ambil detail data yang akan dihapus untuk mengambil nama file
        $syarat=['id_fasilitas'=>$idFasilitas];
        $infoFile=$this->fasilitas->where($syarat)->find();
        // hapus file foto
        unlink('uploads/'.$infoFile[0]['foto_fasilitas']);
        // hapus data di database
        $this->fasilitas->delete($idFasilitas);
        // arahkan ke halaman tampil
        return redirect()->to('/tampil-fasilitas');
    }
}
