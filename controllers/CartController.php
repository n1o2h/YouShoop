<?php

namespace App\controllers;

use App\core\Controler;
use App\core\Request;
use App\models\Product;
use App\service\ProductService;

class CartController extends Controler
{
    private ProductService $productService;
    public function __construct()
    {
        $this->productService = new ProductService();
    }


    public function addToCart(Request $request)
    {
        $data = $request->getBody();
        $productId = $data['product_id'] ?? null;
        $quantity = $data['quantity'] ?? 1;

        if (!$productId) {
            $_SESSION['flash_error'] = "Produit invalide";
            return $this->redirect('/user/dashboard');
        }

        $product = $this->productService->findOne((int)$productId);

        if (!$product) {
            $_SESSION['flash_error'] = "Produit introuvable";
            return $this->redirect('/user/dashboard');
        }

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]['quantity'] += $quantity;
        } else {
            $_SESSION['cart'][$productId] = [
                'name' => $product->getName(),
                'price' => $product->getPrice(),
                'quantity' => $quantity
            ];
        }

        $_SESSION['flash_success'] = "Produit ajouté au panier !";
        return $this->redirect('/user/dashboard');
    }

    public function remove(Request $request)
    {
        $productId = (int)$request->getBody()['product_id'];
        unset($_SESSION['cart'][$productId]);
        $this->redirect('/user/dashboard');
    }



}