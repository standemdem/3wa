<?php

class AdminController extends Controller {
  public function admin(){
    if(Auth::isAdmin()){
    $this->render("administration");
    }
  }
  public function product(){
    if(Auth::isAdmin()){
    $this->render("addproduct");
    }
  }
  public function productList(){
    if(Auth::isAdmin()){
    $this->render("listproduct");
    }
  }
  public function modify(){
    if(Auth::isAdmin()){
    $this->render("updateproduct");
    }
  }
  public function deleteProduct(){
    if(Auth::isAdmin()){
    $this->render("deleteproduct");
    }
  }
}
