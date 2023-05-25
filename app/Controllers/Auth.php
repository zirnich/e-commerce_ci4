<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\M_product;

class Auth extends BaseController
{
    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->LoginModel = new LoginModel();
        $this->M_product = new M_product();

        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $product = $this->M_product->findAll();
        $data = [
            'title' => 'List Product',
            'product' => $product
        ];

        return view('index', $data);
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {

        return view('register');
    }
    public function ak_login()
    {
        $get = $this->request->getPost();

        $data = $this->LoginModel->where('username', $get['username'])->first();


        if ($data) {

            if ($data['password'] != md5($get['password'])) {
                session()->setFlashdata('error', 'Password salah');
                return redirect()->to('Auth');
            } else {

                $session = [

                    'username' => $data['username'],
                    'role' => $data['role']
                ];
                $this->session->set($session);
                if ($data['role'] == 'admin') {
                    session()->setFlashdata('status', 'Selamat datang Admin');
                    return redirect()->to('Product/home');
                } elseif ($data['role'] == 'buyer') {
                    session()->setFlashdata('status', 'Selamat datang penjual : Sukses selalu');
                    return redirect()->to('Buyercontroller');
                } else {
                    session()->setFlashdata('status', 'Selamat datang');
                    return redirect()->to('');
                }
            }
        } else {
            //jika username tidak ditemukan, balikkan ke halaman login
            session()->setFlashdata('error', 'Username tidak ditemukan');
            return redirect()->to('Auth');
        }
    }
    public function logout()
    {

        return redirect()->to('/Auth/login');
    }
}
