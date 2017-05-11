<?php

namespace App\Models;

use App\Model;

class User extends Model
    implements HasEmail
{
    const TABLE = 'users';

    public $email;
    public $name;

    public function getEmail()
    {
        return $this->email;
    }

    public function getId()
    {
        return $this->id;
    }
}