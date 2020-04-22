<?php

require 'Controller.php';

class ErrorController 
{
    public function __construct()
    {
        $Controller = new Controller;
        $Controller->setView(['404.php']);
    
        $Controller->renderError('NOT FOUND');
    }
}