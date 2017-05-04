<?php

namespace App\Model;


use App\Model;

class User extends Model {

    const TABLE = 'users';

    public $email;
    public $name;
}