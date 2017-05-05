<?php

require __DIR__ . '/../autoload.php';


$db = new \App\Db();

$p_array = ['id'=>1];

$res = $db->query('SELECT * FROM users WHERE id=:id',\App\Db::class, $p_array);

var_dump($res);