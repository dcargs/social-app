<?php

  class hub_controller {
    private $hubDAL;

    function __construct() {
      require ("model/hubDAL.php");
      $this->hubDAL = new hubDAL;
    }

    public function landing(){

      require "views/landing.php";
    }
    
  }


 ?>
