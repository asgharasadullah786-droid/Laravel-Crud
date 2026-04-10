<?php

require_once "../app/core/Router.php";

$url = isset($_GET['url']) ? $_GET['url'] : 'teachers';
$url = isset($_GET['url']) ? $_GET['url'] : 'students';

$url = explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL));

$controllerName = ucfirst($url[0]) . "Controller";
$method = isset($url[1]) ? $url[1] : "index";
$params = array_slice($url, 2);

require_once "../app/controllers/$controllerName.php";

$controller = new $controllerName();

call_user_func_array([$controller, $method], $params); 
// <?php

//  $url = isset($_GET['url']) ? $_GET['url'] : 'dashboard';

//  $url = explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL));

// $controllerName = ucfirst($url[0]) . "Controller";
// $method = isset($url[1]) ? $url[1] : "index";
// $params = array_slice($url, 2);

// require_once "../app/controllers/$controllerName.php";

// $controller = new $controllerName();

// call_user_func_array([$controller, $method], $params);