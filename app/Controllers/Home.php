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

        if (session()->has('loggedUser')) {
            return view('templates/page/header', $data)
                . view('templates/dash/header', $data)
                . view($page)
                . view('templates/page/footer');
        }

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

        if (session()->has('loggedUser')) {
            return view('templates/page/header', $data)
                . view('templates/dash/header', $data)
                . view('templates/external/secondary-header', $data)
                . view($page)
                . view('templates/page/footer');
        }

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

        if (session()->has('loggedUser')) {
            return view('templates/page/header', $data)
                . view('templates/dash/header', $data)
                . view('templates/external/secondary-header', $data)
                . view($page)
                . view('templates/page/footer');
        }

        return view('templates/page/header', $data)
            . view('templates/external/header', $data)
            . view('templates/external/secondary-header', $data)
            . view($page)
            . view('templates/page/footer');
    }

    public function features($page = 'pages/features')
    {
        if (!is_file(APPPATH . 'Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data = [
            'title' => 'Recursos'
        ];

        if (session()->has('loggedUser')) {
            return view('templates/page/header', $data)
                . view('templates/dash/header', $data)
                . view('templates/external/secondary-header', $data)
                . view($page)
                . view('templates/page/footer');
        }
        return view('templates/page/header', $data)
            . view('templates/external/header', $data)
            . view('templates/external/secondary-header', $data)
            . view($page)
            . view('templates/page/footer');
    }

    public function about($page = 'pages/about')
    {
        if (!is_file(APPPATH . 'Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data = [
            'title' => 'Sobre'
        ];

        if (session()->has('loggedUser')) {
            return view('templates/page/header', $data)
                . view('templates/dash/header', $data)
                . view('templates/external/secondary-header', $data)
                . view($page)
                . view('templates/page/footer');
        }

        return view('templates/page/header', $data)
            . view('templates/external/header', $data)
            . view('templates/external/secondary-header', $data)
            . view($page)
            . view('templates/page/footer');
    }
}
