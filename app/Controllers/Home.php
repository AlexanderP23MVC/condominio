<?php
/* login para realizar en los logins */
namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function home(){
        echo view('index');
    }
}
