<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Loginpetugas extends BaseController
{
    public function index()
    {

        helper(['form']);
        $aturanForm=[
             'txtUser'=>'required',
             'txtPass'=>'required'   

        ];

        if($this->validate($aturanForm)){
            $where=[
                'username'=>$this->request->getPost('txtUser'),
                'password'=>md5($this->request->getPost('txtPass'))
            ];


            $pengguna=$this->pengguna->where($where)->find();
            if(count($pengguna)==1){
                return redirect()->to('/dashboard');
            }  else {
                return redirect()->to('/login')->with('info','<p>Username password salah</p>');
            }     
        }else {
            return view('admin/formLogin');
        }
    }
}
