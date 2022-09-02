<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index($page = 'pages/index')
    {
        if (!is_file(APPPATH . 'Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data = [
            'title' => 'Home Page'
        ];

        return view('templates/page/header', $data)
            . view('templates/external/header', $data)
            . view($page)
            . view('templates/page/footer');
    }

    public function faqs($page = 'pages/faqs')
    {
        if (!is_file(APPPATH . 'Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data = [
            'title' => 'Perguntas frequentes'
        ];

        return view('templates/page/header', $data)
            . view('templates/external/header', $data)
            . view('templates/external/secondary-header', $data)
            . view($page)
            . view('templates/page/footer');
    }

    public function pricing($page = 'pages/pricing')
    {
        if (!is_file(APPPATH . 'Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data = [
            'title' => 'Preços'
        ];

        return view('templates/page/header', $data)
            . view('templates/external/header', $data)
            . view('templates/external/secondary-header', $data)
            . view($page)
            . view('templates/page/footer');
    }
}
