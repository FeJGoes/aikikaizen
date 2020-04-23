<?php

require 'Controller.php';

class AikikaizenController 
{
    public function __construct($action)
    {
        $this->$action();
    }

    public function pageAikikaizen ()
    {
        $Controller = new Controller;
        /**
         * @var $title innerText da TAG <title>
         */
        $title = 'A Escola AikiKaizen';

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
        $Controller->setView(['aikikaizen.php']);
   
        $Controller->render($title,'');
    }
}