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
        $Controller->setCss(['aikido.css', 'loader.css']);

         /**
         * @method array setJs() Acrescenta os arquivos scripts Javascript nesta requisição
         */
        $Controller->setJs(['aikido.js']);

         /**
         * @method array setView() Acrescenta os arquivos de views nesta requisição
         */
        $Controller->setView(['aikido/aikido.php']);
   
        $Controller->render($title,'');
    }

    public function pageSobre ()
    {
        $Controller = new Controller;
        /**
         * @var $title innerText da TAG <title>
         */
        $title = 'O que é o Aikido ? - AikiKaizen - Rio Claro';

        /**
         * @method array setCss() Acrescenta os arquivos css nesta requisição
         */
        $Controller->setCss(['aikido.css']);

         /**
         * @method array setJs() Acrescenta os arquivos scripts Javascript nesta requisição
         */
        $Controller->setJs(['aikido.js']);

         /**
         * @method array setView() Acrescenta os arquivos de views nesta requisição
         */
        $Controller->setView(['aikido/sobre.php']);
   
        $Controller->ajaxView($title);
    }

    public function pageBeneficios ()
    {
        $Controller = new Controller;
        /**
         * @var $title innerText da TAG <title>
         */
        $title = 'Benefícios do Aikido - AikiKaizen - Rio Claro';

        /**
         * @method array setCss() Acrescenta os arquivos css nesta requisição
         */
        $Controller->setCss(['aikido.css']);

         /**
         * @method array setJs() Acrescenta os arquivos scripts Javascript nesta requisição
         */
        $Controller->setJs(['aikido.js']);

         /**
         * @method array setView() Acrescenta os arquivos de views nesta requisição
         */
        $Controller->setView(['aikido/beneficios.php']);
   
        $Controller->ajaxView($title);
    }

    public function pageHistoria ()
    {
        $Controller = new Controller;
        /**
         * @var $title innerText da TAG <title>
         */
        $title = 'História do Aikido - AikiKaizen - Rio Claro';

        /**
         * @method array setCss() Acrescenta os arquivos css nesta requisição
         */
        $Controller->setCss(['aikido.css']);

         /**
         * @method array setJs() Acrescenta os arquivos scripts Javascript nesta requisição
         */
        $Controller->setJs(['aikido.js']);

         /**
         * @method array setView() Acrescenta os arquivos de views nesta requisição
         */
        $Controller->setView(['aikido/historia.php']);
   
        $Controller->ajaxView($title);
    }
}