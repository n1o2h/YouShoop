<?php
namespace App\controllers;

use App\core\Application;
use App\core\Controler;
use App\core\Request;
use App\service\CategoryService;
use App\service\DashboardService;
use App\service\ProductService;

class SiteController extends  Controler
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
    public  function home(Request $request)
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
        return $this->render('/home', []);
    }
    public  function front()
    {
        return $this->render('user/dashboard', []);

    }


}
