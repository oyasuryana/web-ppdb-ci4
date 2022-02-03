<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pendaftaran extends BaseController
{
    public function index()
    {
        $data['judulHalaman']='Form Pendaftaran Online';
        $data['intro']='<p>Silahkan masukan data Anda pada form yang disediakan dibawah ini</p>';
        $data['dataJurusan']=$this->jurusan->find();
        return view('formDaftar',$data);
    }

    public function simpan(){
        $data=[
            'nisn'=>$this->request->getPost('txtNISN'),
            'nama_lengkap'=>$this->request->getPost('txtNama'),
            'tempat_lahir'=>$this->request->getPost('txtTempatLahir'),
            'tanggal_lahir'=>$this->request->getPost('txtTanggalLahir'),
            'jenis_kelamin'=>$this->request->getPost('txtJenisKelamin'),
            'email'=>$this->request->getPost('txtEmail'),
            'no_wa'=>$this->request->getPost('txtNoWa'),
            'alamat'=>$this->request->getPost('txtAlamat'),
            'asal_sekolah'=>$this->request->getPost('txtAsalSekolah'),
            'id_jurusan'=>$this->request->getPost('txtPilihanJurusan')
        ];
        $this->pendaftaran->save($data);
        return redirect()->to('/daftar')->with('info','<div class="alert alert-success alert-sm">Pendaftaran anda telah berhasil </div>');

    }
}
