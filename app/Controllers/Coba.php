<?php
namespace App\Controllers;

class Coba extends BaseController{
   
    public function index($params1 ='', $params2=''){
        echo "Ini halaman Coba $params1 dengan umur $params2";
    }
}
