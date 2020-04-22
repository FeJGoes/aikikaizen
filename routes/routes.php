<?php

class Router 
{
     public function __construct(string $path)
     {
          $route['/'] = array(
               'controller' => 'HomeController',
               'action'     => 'pageHome'
          );

          $route['/home'] = array(
               'controller' => 'HomeController',
               'action'     => 'pageHome'
          );

          $route['/aikido'] = array(
               'controller' => 'AikidoController',
               'action'     => 'pageAikido'
          );

          $route['/aikikaizen'] = array(
               'controller' => 'AikikaizenController',
               'action'     => 'pageAikikaizen'
          );

          $route['/sobre-nos'] = array(
               'controller' => 'SobreNosController',
               'action'     => 'pageSobreNos'
          );

          $route['/dojo'] = array(
               'controller' => 'DojoController',
               'action'     => 'pageDojo'
          );

          $route['/contato'] = array(
               'controller' => 'ContatoController',
               'action'     => 'pageContato'
          );
          
          if (is_array($route[$path])) 
          {
               $this->run($route[$path]['controller'], $route[$path]['action']);
          }
          else 
          {
               require CONTROLLERS_DIR.'ErrorController.php';
               new ErrorController;
          }
         
     }

     public function run (string $controller, string $action)
     {
          require CONTROLLERS_DIR.$controller.'.php';
          new $controller($action);
     }

}