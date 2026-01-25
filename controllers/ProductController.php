<?php

namespace App\controllers;

use App\core\Controler;
use App\core\Request;
use App\service\CategoryService;
use App\service\ProductService;

class ProductController extends Controler
{
    private ProductService $productService;
    private CategoryService $categoryService;

    public function __construct()
    {
        $this->productService= new ProductService();
        $this->categoryService = new CategoryService();
    }

    public function index(): array|bool|string
    {
        $products = $this->productService->findAll();
        $products = $this->productService->findAll();
        $categories = $this->categoryService->findAll();

        return $this->render('admin/dashboard', [
            'products' => $products,
            'categories' => $categories
        ]);
    }


    public function store(Request $request)
    {
        $data = $request->getBody();
        $data['category_id'] = $data['category'] ?? null;

// S'assurer que stock est un int et price un float
        $data['stock'] = (int) ($data['stock'] ?? 0);
        $data['price'] = (float) ($data['price'] ?? 0.0);

// Pour l'image, si c'est un fichier uploadé, il faut le gérer avant
        $data['image_path'] = $data['image_path'] ?? 'default.png';

        $product = $this->productService->create($data);

        return $this->redirect('/admin/dashboard');
    }

}