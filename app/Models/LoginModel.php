<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model {
    protected $table = 'kayttaja';

    protected $allowedFields = ['username', 'password','firstname','lastname'];
}