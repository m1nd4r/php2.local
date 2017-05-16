<?php

require __DIR__ . '/autoload.php';

$view = new View();

$view->title = 'My top site';
$view->users = \App\Models\User::findAll();

$view->display(__DIR__ . '/App/templates/index.php');