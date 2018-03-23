<?php

class Request {
  public $base;

  function __construct(Config $config){
    $this->base=$config->get('base','app');
  }
  function getPath(){
    $path=str_replace($this->base,'',$_SERVER['REQUEST_URI']);
    $path=strtok($path,'?');
    $path=rtrim($path,'/');
    return empty($path) ? '/' : $path;
  }

}
