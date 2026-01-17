<?php

namespace App\core\forms;

use App\core\Model;

class Form
{
    public function __construct()
    {
    }

    public static  function begin($action, $methode): Form
    {

       echo  sprintf('<form class="w-50 m-auto" action="%s" method="%s">', $action, $methode);
       return new Form();
    }

    public static  function end(): string
    {
        return '</form>';
    }

    public static function field(Model $model, $attribute): Field
    {
        return new Field($model, $attribute);
    }

    public static  function button(): string
    {
        return '<button type="submit" class="btn btn-primary w-100">Submit</button>';
    }
}