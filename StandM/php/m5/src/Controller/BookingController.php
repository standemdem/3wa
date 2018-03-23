<?php
class BookingController extends Controller{
  public function booking(){
    if(!empty($_POST))
      {
        $db= Database::getInstance();
        $this->loadModel("User");
        $user = new User;
        $user->addUser($_POST[''],

        header('location: connexion');
      $this->render('booking');
  }

}
