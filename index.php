<?php

require __DIR__ . '/autoload.php';

$users = \App\Models\User::findById(5);

var_dump($users);