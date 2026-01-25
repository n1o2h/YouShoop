<?php

namespace App\service;

use App\models\Category;
use App\models\Product;

class ProductService
{

    public function create(array $data): Product
    {
        $product = new Product();

        // Vérifier category_id
//        var_dump($data); die;
        $categoryId = $data['category'];

        $category = \App\models\Category::findOne(['name' => $categoryId]);

        if (!$category) {
            throw new \Exception("Category not found");
        }

        unset($data['category']);
        $data['category_id'] = $category->getId();

        $product->setCategory($category);
        //$product->setStatus(0);

        $product->loadData($data);

        if (!$product->validate()) {
            var_dump($product->errors); // ça montre ce qui manque
            throw new \Exception("Validation failed");
        }

        $product->save();
        return $product;
    }


    public function findAll() :array
    {
        return Product::findAll();
    }

    public function findOne(int $id) : ?Product
    {
        return Product::findOne(['id' => $id]);

    }
}