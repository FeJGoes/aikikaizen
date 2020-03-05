<?php
require './public/Controller.php';

$request = str_replace('/aikikaizen/aikikaizen/public/','',$_SERVER['REQUEST_URI']);
$title = 'home';
Controller::renderPage($request, $title, true);


?>
