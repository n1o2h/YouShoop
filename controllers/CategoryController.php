<?php

namespace App\controllers;
use App\core\Controler;
use  App\service\CategoryService;
use App\core\Request;
class CategoryController extends Controler
{
    private CategoryService $service;

    public function __construct()
    {
        $this->service = new CategoryService();
    }

    public function index(): array|bool|string
    {
        $categories = $this->service->findAll();
        return $this->render('admin/categories/index', ['categories' => $categories]);
    }

    public function create()
    {
        return $this->render('admin/categories/create', []);
    }

    public function store(Request $request)
    {
        $data = $request->getBody();
        $this->service->create($data);
        return $this->redirect('/admin/categories');
    }

    /*public function edit(Request $request)
    {
        $id = $request->getBody()['id'] ?? null;
        $categories = $this->service->findAll();
        $categoryEdit = $this->service->findOne($id);

        return $this->render("admin/categories/index",
            ['categories' => $categories,
                'categoryEdit' => $categoryEdit
            ]);
    }*/

    public function update(Request $request)
    {
        $data = $request->getBody();
        $this->service->update($data['id'], $data);
        return $this->redirect('/admin/categories');
    }

    public function delete(Request $request)
    {
        $id = $request->getBody()['id'];
        $this->service->deleteInstance($id);
        return $this->redirect('/admin/categories');


    }




}