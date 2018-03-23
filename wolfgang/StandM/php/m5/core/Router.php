<?php

class Router {
  private $_routes;

  function __construct($config,$request){
    $this->_routes = $config->get("*","routes");
    $this->request = $request;
  }

  function dispatch(){
    $path=$this->request->getpath();

    foreach ($this->_routes as $route) {
      if($route['path'] == $path){
        $run = explode('@',$route['run']);
        break;
      }
    }
    if(isset($run)){
      $controllerName = $run[0];
      $actionName = $run[1];

      $controllerPath='../src/Controller/'.$controllerName.'.php';

      if(!file_exists($controllerPath))
        throw new Exception ("Le fichier ".$controllerPath. " n'existe pas");
      elseif (!class_exists($controllerName))

      require_once $controllerPath;

      if(!class_exists($controllerName))
        throw new Exception("La class ".$controllerName." n'existe pas dans le fichier ". $controllerPath);

        $controller = new $controllerName();

      if(!method_exists($controllerName, $actionName))
          throw new Exception("La méthode ".$actionName." n'existe pas dans le controller ".$controllerName);

      $controller->$actionName();

  }else {
      throw new Exception("La route n'a pas été trouvée");
    }
  }
}
