<?php

use App\Models\User;

require __DIR__ . '/autoload.php';


$user = new User();

$user->update(13, 'Ololoyev ololo', 'ololo@azaza.ru');