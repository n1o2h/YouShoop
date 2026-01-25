<?php

namespace App\service;

use App\models\Category;
use App\models\Product;

class ProductService
{

    public function create(array $data): Product
    {
        $product = new Product();
        $categoryId = $data['category'];

        $category = \App\models\Category::findOne(['name' => $categoryId]);

        if (!$category) {
            var_dump($category);
            exit;
            throw new \Exception("Category not found");
        }

        unset($data['category']);
        $data['category_id'] = $category->getId();

        $product->setCategory($category);
        $product->loadData($data);

        if (!$product->validate()) {
            var_dump($product->errors); // ça montre ce qui manque
            throw new \Exception("Validation failed");
        }

        $product->save();
        return $product;
    }

    public function update(int $id, array $data)
    {
        $product = Product::findOne(['id' => $id]);

        if(!$product){
            throw new \Exception("Product not found");
        }

//        if(isset($data['description'])){
//            $product->setDescription($data['description']);
//        }
//
//        if(isset($data['price'])){
//            $product->setDescription($data['price']);
//        }
//
//        if(isset($data['stock'])){
//            $product->setDescription($data['stock']);
//        }
       $product->loadData($data);
        if(!$product->validate()){
            throw new \Exception("Validation failed");
        }

        $product->save();
        return $product;
    }

    public function deleteInstance(int $id) : bool
    {
        $product = Product::findOne(['id'=>$id]);

        if(!$product){
            throw new \Exception("Product not found");
        }

        return $product->deleteInstance();
    }


    public function findAll(): array
    {
        $products = Product::findAll();

        foreach ($products as $product) {
            if ($product->category_id) {
                $product->category = Category::findOne([
                    'id' => $product->category_id
                ]);
            }
        }

        return $products;
    }

    public function findOne(int $id) : ?Product
    {
        return Product::findOne(['id' => $id]);

    }
}