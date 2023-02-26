<?php

namespace App\Controllers;
class User{
    public $name;
    public $age;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}

class Pages extends BaseController
{
    
    public function index()
    {   
        $users = [];
        for($i = 0; $i<= 10; $i++){
            $umur = $i * 10;
            $users[$i]= new User("user ke $i","age = $umur"); // buar array of object
        }


        $data = [
            'title' => 'Home | O. Riastanjung',
            'users' => $users
        ];
        echo view('layout/header', $data);
        echo view('layout/navbar');
        echo view('Pages/home', $data);
        echo view('layout/footer');
    }
    public function about()
    {
        $api_url = 'https://dummyjson.com/users';

        $json_data=file_get_contents($api_url);
        $res = json_decode($json_data);
        $result = $res->users;
        // print_r($result);
        $data = [
            'title' => 'About',
            'employee' => $result
        ];
        echo view('layout/header', $data);
        echo view('layout/navbar');
        echo view('Pages/about', $data);
        echo view('layout/footer');
    }
}
