<?php

namespace App\controllers;

use App\core\Controler;
use App\core\Request;
use App\models\RegisterModel;

class AuthController extends  Controler
{

    public function login(Request $request)
    {
        $this->setLayout('auth');
        return $this->render('login', []);
    }
    public function register(Request $request)
    {
         $registerModel = new RegisterModel();
        if($request->isPost()) {
            $registerModel->loadData($request->getBody());
            if($registerModel->validate() && $registerModel->register()){
                return "succes";
            }
            #echo '<pre>';
            #var_dump($registerModel->errors);
            #echo '</pre>';
            $this->setLayout('auth');
            return $this->render('register', [
                'model' => $registerModel
            ]);
        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $registerModel
        ]);

    }



}