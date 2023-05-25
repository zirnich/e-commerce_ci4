<?php

namespace App\Controllers;

use App\Models\M_product;

class Buyercontroller extends BaseController
{
    public function __construct()
    {
        $this->M_product = new M_product();
        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        return view('user/home');
    }
    public function shop()
    {
        $product = $this->M_product->findAll();
        $data = [
            'title' => 'List Product',
            'product' => $product
        ];

        return view('user/Shopview', $data);
    }
    public function cart()
    {

        return view('user/cart');
    }
}
