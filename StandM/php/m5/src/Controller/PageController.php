<?php
class PageController extends Controller{

  public function index(){
    $this->render("home");
  }
  public function admin(){
    $this->render("adminConnexion");
  }
  public function admin_edit(){
    $this->render("admin_edit");
  }
}
