<?php

/* Este fichero está sirviendo para manejar las rutas */

$request = $_SERVER['REQUEST_URI'];
$path = explode("/", $request);

switch ($path[1]) {
  case '':
    require __DIR__ . '/views/index.php';
    break;
  case 'posts':
    require __DIR__ . '/controllers/PostControler.php';

    $controller = new PostController();

    if (isset($path[2])) {
      $controller->show($path[2]);
    } else {
      $controller->index();
    }
    break;
  default:
    http_response_code(404);
    require __DIR__ . '/views/404.php';
    break;
}
