<?php

namespace App\controllers;

use App\core\Controler;
use App\core\Request;
use App\service\CategoryService;
use App\service\DashboardService;
use App\service\ProductService;

class ProductController extends Controler
{
    private ProductService $productService;
    private CategoryService $categoryService;
    private DashboardService $dashboardService;

    public function __construct()
    {
        $this->productService= new ProductService();
        $this->categoryService = new CategoryService();
        $this->dashboardService = new DashboardService();
    }

    public function index(Request $request): array|bool|string
    {

        $products = $this->productService->findAll();
        $categories = $this->categoryService->findAll();
        $stats = $this->dashboardService->getStats();
        if(str_starts_with($request->getPath(), '/admin')) {
            return $this->render('admin/dashboard', [
                'products' => $products,
                'categories' => $categories,
                'stats' => $stats,
            ]);
        }
        return $this->render('user/dashboard', [
            'products' => $products,
            'categories' => $categories,
            'stats' => $stats,
        ]);
    }


    public function store(Request $request)
    {
        $data = $request->getBody();
        $data['category_id'] = $data['category'] ?? null;

        $data['stock'] = (int) ($data['stock'] ?? 0);
        $data['price'] = (float) ($data['price'] ?? 0.0);

        $data['image_path'] = $data['image_path'] ?? 'default.png';

        $product = $this->productService->create($data);

        return $this->redirect('/admin/dashboard');
    }

    public function update(Request $request)
    {
        $data = $request->getBody();

        $this->productService->update($data['id'], $data);
        return $this->redirect('/admin/dashboard');
    }

    public function delete(Request $request)
    {
        $id = $request->getBody()['id'];
        $this->productService->deleteInstance($id);
        return $this->redirect('/admin/dashboard');


    }
}