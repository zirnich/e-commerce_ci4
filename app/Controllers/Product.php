<?php

namespace App\Controllers;

use App\Models\M_product;

class Product extends BaseController
{

    public function __construct()
    {
        $this->M_product = new M_product();
        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
    }
    public function home()
    {
        return view('product/index');
    }
    public function index()
    {
        $product = $this->M_product->findAll();
        $data = [
            'title' => 'List Product',
            'product' => $product
        ];



        return view('product/data', $data);
    }
    public function chart()
    {
        $product = $this->M_product->findAll();
        $data = [
            'title' => 'List Product',
            'product' => $product
        ];



        return view('product/chart', $data);
    }

    public function create()
    {



        return view('product/create');
    }

    public function save()
    {



        $this->validate([
            'picture' => 'uploaded[picture]|max_size[picture,1024]|is_image[picture]|mime_in[picture,jpg,jpeg,png]'
        ]);

        $filepicture = $this->request->getFile('picture');
        $filepicture->move('img');
        $name = $filepicture->getName();


        $data = [

            // 'kode_product' => $this->request->getPost('kode_product'),
            'name_product' => $this->request->getPost('name_product'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock'),
            'picture' => $name
        ];

        $this->M_product->save($data);


        return redirect()->to('product');
    }

    public function delete($kode_product = null)
    {
        $model = new M_product();
        $model->delete($kode_product);

        return redirect()->to('product');
    }

    public function edit($kode_product)
    {
        $this->validate([
            'picture' => 'uploaded[picture]|max_size[picture,1024]|is_image[picture]|mime_in[picture,jpg,jpeg,png]'
        ]);

        $filepicture = $this->request->getFile('picture');
        $filepicture->move('img');
        $name = $filepicture->getName();


        $data = [

            // 'kode_product' => $this->request->getPost('kode_product'),
            'kode_product' => $kode_product,
            'name_product' => $this->request->getPost('name_product'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock'),
            'picture' => $name
        ];

        $this->M_product->save($data);


        return redirect()->to('product');
    }
}
