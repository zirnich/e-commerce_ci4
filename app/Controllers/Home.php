<?php

namespace App\Controllers;

use App\Models\M_product;

class Home extends BaseController
{
    public function __construct()
    {

        $this->M_product = new M_product();
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
}
