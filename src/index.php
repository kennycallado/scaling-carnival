<?php

$request = $_SERVER['REQUEST_URI'];
switch ($request) {
  case '':
  case '/':
    require __DIR__ . '/views/index.php';
    break;
  case '/posts':
    require __DIR__ . '/controllers/PostControler.php';

    $controller = new PostController();
    $controller->index();

    break;
  default:
    http_response_code(404);
    require __DIR__ . '/views/404.php';
    break;
}
