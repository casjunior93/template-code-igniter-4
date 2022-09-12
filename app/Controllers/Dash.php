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

    $userModel = new \App\Models\UserModel();
    $logged_user_id = session()->get('loggedUser');
    $user_info = $userModel->find($logged_user_id);

    $data = [
      'title' => 'Minha conta',
      'user_info' => $user_info
    ];

    return view('templates/page/header', $data)
      . view('templates/dash/header', $data)
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
      . view('templates/dash/header', $data)
      . view($page)
      . view('templates/page/footer');
  }
}
