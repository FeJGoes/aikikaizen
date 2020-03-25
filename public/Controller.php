<?php
class Controller
{
    public static function renderPage($pageRequested, $title, $footer)
    {
        $title = $title;
        include 'pages/layout/head.php';
        include 'pages/layout/header.php';
        include 'pages/'.$pageRequested.'.php';
        include 'pages/layout/scripts.php';
        if ($footer)
        {
            // include 'pages/layout/footer.php';
        }
    }
}
