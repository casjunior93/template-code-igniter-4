<?php

namespace App\Controllers;

use App\Libraries\Hash;

class Auth extends BaseController
{
  public function __construct()
  {
    helper('form');
  }

  public function sigin($page = 'auth/sigin')
  {

    if (!is_file(APPPATH . 'Views/' . $page . '.php')) {
      // Whoops, we don't have a page for that!
      throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    }

    $data = [
      'title' => 'Entrar'
    ];

    return view('templates/page/header', $data)
      . view($page);
  }

  public function registration($page = 'auth/registration')
  {

    if (!is_file(APPPATH . 'Views/' . $page . '.php')) {
      // Whoops, we don't have a page for that!
      throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    }

    $data = [
      'title' => 'Registro'
    ];

    return view('templates/page/header', $data)
      . view($page);
  }

  public function recoverPassword($page = 'auth/recover-password')
  {
    if (!is_file(APPPATH . 'Views/' . $page . '.php')) {
      // Whoops, we don't have a page for that!
      throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    }

    $data = [
      'title' => 'Recuperar senha'
    ];

    return view('templates/page/header', $data)
      . view('auth/recover-password');
  }

  public function saveRegistration()
  {
    //validando campos do formulario
    $validation = $this->validate([
      'name' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Campo nome não pode ficar vazio'
        ]
      ],
      'email' => [
        'rules' => 'required|valid_email|is_unique[users.email]',
        'errors' => [
          'required' => 'Campo email não pode ficar vazio',
          'valid_email' => 'Email inválido',
          'is_unique' => 'Email já cadastrado'
        ]
      ],
      'password' => [
        'rules' => 'required|min_length[5]|max_length[12]',
        'errors' => [
          'required' => 'Campo senha não pode ficar vazio',
          'min_length' => 'Senha deve ter mais de 5 caracteres',
          'max_length' => 'Senha deve ter menos de 12 caracteres'
        ]
      ],
      'password2' => [
        'rules' => 'required|min_length[5]|max_length[12]|matches[password]',
        'errors' => [
          'required' => 'Campo senha não pode ficar vazio',
          'min_length' => 'Senha deve ter mais de 5 caracteres',
          'max_length' => 'Senha deve ter menos de 12 caracteres',
          'matches' => 'As senhas não correspondem',
        ]
      ],
      'phone' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Campo telefone não pode ficar vazio'
        ]
      ]
    ]);

    if (!$validation) {
      return view('auth/registration', ['validation' => $this->validator]);
    } else {
      $name = $this->request->getPost('name');
      $email = $this->request->getPost('email');
      $password = $this->request->getPost('password');
      $phone = $this->request->getPost('phone');

      $values = [
        'name' => $name,
        'email' => $email,
        'password' => Hash::make($password),
        'phone_number' => $phone
      ];

      $userModel = new \App\Models\UserModel();
      $query = $userModel->insert($values);
      if (!$query) {
        return redirect()->back()->with('fail', 'Erro ao salvar no banco de dados');
      } else {
        $id_usuario = $userModel->insertID();
        session()->set('loggedUser', $id_usuario);
        return redirect()->to('/dashboard');
      }
    }
  }

  function login()
  {
    $validation = $this->validate([
      'email' => [
        'rules' => 'required|valid_email|is_not_unique[users.email]',
        'errors' => [
          'required' => 'Campo email não pode ficar vazio',
          'valid_email' => 'Email inválido',
          'is_not_unique' => 'Email não cadastrado'
        ]
      ],
      'password' => [
        'rules' => 'required|min_length[5]|max_length[12]',
        'errors' => [
          'required' => 'Campo senha não pode ficar vazio',
          'min_length' => 'Senha deve ter mais de 5 caracteres',
          'max_length' => 'Senha deve ter menos de 12 caracteres',
        ]
      ]
    ]);

    if (!$validation) {
      return view('auth/sigin', ['validation' => $this->validator]);
    } else {
      $email = $this->request->getPost('email');
      $senha = $this->request->getPost('password');
      $userModel = new \App\Models\UserModel();

      $usuario_info = $userModel->where('email', $email)->first();
      $check_senha = Hash::check($senha, $usuario_info['password']);

      if (!$check_senha) {
        session()->setFlashdata('fail', 'Senha incorreta');
        return redirect()->to('auth/sigin')->withInput();
      } else {
        $user_id = $usuario_info['id'];
        session()->set('loggedUser', $user_id);
        return redirect()->to('/dashboard');
      }
    }
  }

  function logout()
  {
    if (session()->has('loggedUser')) {
      session()->remove('loggedUser');
      return redirect()->to('auth/sigin/?access=out')->with('fail', 'Você saiu!');
    }
  }
}
