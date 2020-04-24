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
        /**
         * @var $title innerText da TAG <title>
         */
        $title = 'Aikido - AikiKaizen - Rio Claro';

        /**
         * @method array setCss() Acrescenta os arquivos css nesta requisição
         */
        $Controller->setCss(['aikido.css']);

         /**
         * @method array setJs() Acrescenta os arquivos scripts Javascript nesta requisição
         */
        // $Controller->setJs(['header.js']);

         /**
         * @method array setView() Acrescenta os arquivos de views nesta requisição
         */
        $Controller->setView(['aikido.php']);
   
        $Controller->render($title,'');
    }
}