<?php
  class Config{

    private $_config=[];
    function load($configName) {
      $this->_config[$configName]=include('../config/' . $configName. '.php');
    }

    function get($name, $configName){
      $this->load($configName);
      if($name=="*"){
        return ($this->_config[$configName]);
      }
      else {
        return ($this->_config[$configName][$name]);
      }
    }
  }
