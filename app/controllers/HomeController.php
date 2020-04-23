<?php

require 'Controller.php';

class HomeController 
{
    public function __construct($action)
    {
        $this->$action();
    }

    public function pageHome ()
    {
        $Controller = new Controller;
        /**
         * @var $title innerText da TAG <title>
         */
        $title = 'AikiKaizen - Rio Claro';

        /**
         * @method array setCss() Acrescenta os arquivos css nesta requisição
         */
        $Controller->setCss(['home.css']);

         /**
         * @method array setJs() Acrescenta os arquivos scripts Javascript nesta requisição
         */
        // $Controller->setJs(['header.js']);

         /**
         * @method array setView() Acrescenta os arquivos de views nesta requisição
         */
        // $Controller->setView(['home.php']);
   
        $Controller->render($title,'',false);
    }
}