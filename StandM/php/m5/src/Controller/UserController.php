<?php
class UserController extends Controller{

  function loadModel($modelName){
    require_once ('../src/model/'.$modelName.'.php');
  }

  public function register(){

    if(!empty($_POST))
      {
        $db= Database::getInstance();
        $this->loadModel("User");
        $user = new User;
        $user->addUser($_POST['last_name'],
        $_POST['first_name'],
        $_POST['birthdate'],
        $_POST['address'],
        $_POST['city'],
        $_POST['postalCode'],
        $_POST['phone'],
        $_POST['email'],
        $_POST['password']);
        header('location: connexion');
      }
      $this->render("register");
  }

  public function connect(){
    if(!empty($_POST)){
      $db= Database::getInstance();
      $this->loadModel("User");
      $userModel = new User;
      $user=$userModel->getUserByCredentials($_POST['email'],$_POST['password']);

      if($user){
        Session::set('user',$user);

        Alert::set("bienvenue".$user['first_name']);
        header('location: home');
        exit;
      }else{
        Alert::set('Les identifiants sont incorrects', 'error');
      }
    }
    $this->render("connexion");
  }

  public function deconnexion(){
    Session::remove("user");
    header('location: connexion');
  }

  }
