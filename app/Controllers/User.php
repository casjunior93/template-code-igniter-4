<?php

namespace App\Controllers;

class User extends BaseController
{
  public function __construct()
  {
    helper('form');
  }

  public function updateProfile()
  {
    $userModel = new \App\Models\UserModel();
    $logged_user_id = session()->get('loggedUser');

    if ($logged_user_id) {

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
        'phone' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'Campo telefone não pode ficar vazio'
          ]
        ]
      ]);

      if (!$validation) {

        $user_info = $userModel->find($logged_user_id);

        $data = [
          'title' => 'Minha conta'
        ];

        return view('templates/page/header', $data)
          . view('templates/dash/header', $data)
          . view('dash/profile', ['validation' => $this->validator, 'user_info' => $user_info])
          . view('templates/page/footer');
      } else {
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');

        $values = [
          'name' => $name,
          'email' => $email,
          'phone_number' => $phone
        ];

        $query = $userModel->update($logged_user_id, $values);

        if (!$query) {
          return redirect()->back()->with('fail', 'Erro ao salvar no banco de dados');
        } else {
          return redirect()->to('/dashboard/profile')->with('success', 'Dados atualizados com sucesso!');
        }
      }
    }
  }
}
