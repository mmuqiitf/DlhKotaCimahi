<?php

namespace App\Controllers;


use App\Models\Users;


class Auth extends BaseController
{
    public function index()
    {
        return view('/pages/auth');
    }


    public function login()
    {
        $session = session();
        $model = new Users();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('user_email', $email)->first();
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_name'     => $data['user_name'],
                    'user_email'    => $data['user_email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            }else{
                $session->setFlashdata('msg', 'Password Yang Anda Masukan Salah');
                return redirect()->to('/Auth');
            }
        }else{
            $session->setFlashdata('msg', 'Email Tidak Di Temukan');
            return redirect()->to('/Auth');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/auth');
    }



}