<?php

use App\Models\User;

require __DIR__ . '/autoload.php';

$user = new User();
$user->name = 'Vasya Pupkin';
$user->email = 'v@pupkin.ru';
$user->id = 20;

$user->save();