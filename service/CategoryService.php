<?php

namespace App\service;

use App\models\Category;

class CategoryService
{

    public function create(array $data): Category
    {
        $category = new Category();
        $category->loadData($data);
        if(!$category->validate())
            throw new \Exception("Validation failed");

        $category->save();
        return $category;
    }

    public function update(int $id, array $data)
    {
        $category = Category::findOne(['id' => $id]);

        if(!$category){
            throw new \Exception("Category not found");
        }

        if(isset($data['name'])){
            $category->setName($data['name']);
        }

        if(isset($data['description'])){
            $category->setDescription($data['description']);
        }

        if(!$category->validate()){
            throw new \Exception("Validation failed");
        }

        $category->save();
        return $category;
    }
    public function deleteInstance(int $id) : bool
    {
        $category = Category::findOne(['id'=>$id]);

        if(!$category){
            throw new \Exception("category not found");
        }

        return $category->deleteInstance();
    }

    public function findAll() :array
    {
        return Category::findAll();
    }

    public function findOne(int $id) : ?Category
    {
        return Category::findOne(['id' => $id]);

    }

}
