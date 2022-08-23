<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

  protected $table = 'users';
  protected $primayKey = 'id_user';
  protected $allowedFields = ['name', 'email', 'password', 'phone_number'];

  public function getUsers()
  {
    $db = db_connect();
    $sql = 'SELECT * FROM users';
    $resultado = $db->query($sql);
    return $resultado->getResultArray();
  }

  public function resetPassword($id, $hash)
  {
    $db = db_connect();
    $sql = "UPDATE users SET password = '$hash' WHERE id_user = $id";
    $resultado = $db->query($sql);
    return $resultado;
  }
}
