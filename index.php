<?php
$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '/':
        require "pages/home.php";
        break;
    default:
        http_response_code(404);
        require "errorpages/404.html";
        break;
}
