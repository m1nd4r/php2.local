<?php

require __DIR__ . '/autoload.php';

$url = $_SERVER['REQUEST_URI'];

$controller = new \App\Controllers\News();

$action = $_GET['action'] ?: 'Index';

try {
    $controller->action($action);
} catch (\App\Exceptions\Core $e) {
    echo 'App exception appeared: ' . $e->getMessage();
} catch (PDOException $e) {
    echo 'Smth wrong with base';
}