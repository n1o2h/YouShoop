<?php
namespace App\controllers;

use App\core\Application;
use App\core\Controler;
use App\core\Request;

class SiteController extends  Controler
{
    public  function home(Request $request)
    {
        return $this->render('/home', []);
    }
    public  function front()
    {
        return $this->render('user/dashboard', []);

    }


}
