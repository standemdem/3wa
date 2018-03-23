  <?php
  session_start();
  require_once "../core/Request.php";
  require_once "../core/Config.php";
  require_once "../core/Router.php";
  require_once "../core/Controller.php";
  require_once "../core/Database.php";
  require_once "../src/model/User.php";
  require_once "../core/Session.php";
  require_once "../core/Alert.php";
  require_once "../core/Auth.php";


  $config = new Config;
  $db = Database::getInstance($config);
  //injection de dépendance de $config dans la classe Request
  $request = new Request($config);
  $router = new Router($config,$request);
  $router->dispatch();
