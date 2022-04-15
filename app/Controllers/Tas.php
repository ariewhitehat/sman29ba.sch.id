<?php

namespace App\Controllers;

class Tas extends BaseController
{
    public function index()
    {
        //echo view('templates/header');
        echo view('tas');
        echo view('layout/footer');
    }

    public function ceksurat()
    {
        echo view('layout/header');
        echo view('ceksurat');
        echo view('layout/footer');
    }
}
