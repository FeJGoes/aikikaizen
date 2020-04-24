<?php

require 'Controller.php';

class DojoController 
{
    public function __construct($action)
    {
        $this->$action();
    }

    public function pageDojo ()
    {
        $Controller = new Controller;
        /**
         * @var $title innerText da TAG <title>
         */
        $title = 'Dojo - AikiKaizen - Rio Claro';

        /**
         * @method array setCss() Acrescenta os arquivos css nesta requisição
         */
        $Controller->setCss(['dojo.css']);

         /**
         * @method array setJs() Acrescenta os arquivos scripts Javascript nesta requisição
         */
        // $Controller->setJs(['header.js']);

         /**
         * @method array setView() Acrescenta os arquivos de views nesta requisição
         */
        $Controller->setView(['dojo.php']);
   
        $Controller->render($title,'');
    }
}