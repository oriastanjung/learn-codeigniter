<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function coba($params1 = '', $params2= ''){
        echo "Hello world $params1 dengan $params2";
    }
}
