<?php

namespace App\Controllers;

use App\Libraries\Hash;

class Dash extends BaseController
{
  public function __construct()
  {
    helper('form');
  }

  public function index($page = 'dash/dashboard')
  {
    if (!is_file(APPPATH . 'Views/' . $page . '.php')) {
      // Whoops, we don't have a page for that!
      throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    }

    $data = [
      'title' => 'Dashboard',
    ];

    return view('templates/page/header', $data)
      . view('templates/dash/header')
      . view($page)
      . view('templates/page/footer');
  }

  public function profile($page = 'dash/profile')
  {
    if (!is_file(APPPATH . 'Views/' . $page . '.php')) {
      // Whoops, we don't have a page for that!
      throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    }

    $data = [
      'title' => 'Minha conta',
    ];

    return view('templates/page/header', $data)
      . view('templates/dash/header')
      . view($page)
      . view('templates/page/footer');
  }

  public function payment($page = 'dash/payment')
  {
    if (!is_file(APPPATH . 'Views/' . $page . '.php')) {
      // Whoops, we don't have a page for that!
      throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    }

    $data = [
      'title' => 'Pagamento',
    ];

    return view('templates/page/header', $data)
      . view('templates/dash/header')
      . view($page)
      . view('templates/page/footer');
  }
}
