<?php

require 'Controller.php';

class AikidoController 
{
    public function __construct($action)
    {
        $this->$action();
    }

    public function pageAikido ()
    {
        $Controller = new Controller;
        // $Controller->setCss(['logo.css','nav.css']);
        // $Controller->setJs(['header.js']);
        $Controller->setView(['aikido.php']);
   
        $Controller->render('Aikido - AikiKaizen','');
    }
}