<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index($page = 'pages/index')
    {

        $data = [
            'title' => 'Home Page'
        ];

        return view('templates/page/header', $data)
            . view($page)
            . view('templates/page/footer');
    }
}
