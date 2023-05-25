<?php

namespace App\Controllers;

use App\Models\M_Transaksi;

class Transaksi extends BaseController
{
    public function __construct()
    {
        $this->M_transaksi = new M_transaksi();
        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        $transaksi = $this->M_transaksi->findAll();
        $data = [
            'title' => 'List Product',
            'transaksi' => $transaksi
        ];




        return view('product/transaksii', $data);
    }
    public function edit($id)
    {


        $data = [

            // 'kode_product' => $this->request->getPost('kode_product'),
            'id' => $id,
            'status' => $this->request->getPost('status'),

        ];

        $this->M_transaksi->save($data);


        return redirect()->to('transaksi');
    }
}
