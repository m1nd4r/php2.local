<?php

use App\Models\User;

require __DIR__ . '/autoload.php';

$user = new User();

$user->delete(14);