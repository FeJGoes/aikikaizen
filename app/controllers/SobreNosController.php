<?php

require 'Controller.php';

class SobreNosController 
{
    public function __construct($action)
    {
        $this->$action();
    }

    public function pageSobreNos ()
    {
        $Controller = new Controller;
        /**
         * @var $title innerText da TAG <title>
         */
        $title = 'Sobre nós - AikiKaizen - Rio Claro';

        /**
         * @method array setCss() Acrescenta os arquivos css nesta requisição
         */
        // $Controller->setCss(['contato.css']);

         /**
         * @method array setJs() Acrescenta os arquivos scripts Javascript nesta requisição
         */
        // $Controller->setJs(['header.js']);

         /**
         * @method array setView() Acrescenta os arquivos de views nesta requisição
         */
        $Controller->setView(['sobre-nos.php']);
   
        $Controller->render($title,'');
    }
}