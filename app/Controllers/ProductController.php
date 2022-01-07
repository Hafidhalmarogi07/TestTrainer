<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    protected $product;
    public function __construct()
    {
        $this->products = new ProductModel();
    }

    public function index()
    {
        $data['product'] = $this->products->findAll();
        echo view('Product', $data);
    }

    public function create()
    {
        $this->products->insert([
            'nama_produk' => $this->request->getPost('nama'),
            'kategori' => $this->request->getPost('kategori'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ]);

        return redirect('Product')->with('success', 'Data Added Successfully');
    }
}
