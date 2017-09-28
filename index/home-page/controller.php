<?php

  class home_controller {
    require_once("/home-page/model/homeDAL.php");
    $homeDAL;

    function __construct() {
      $this->homeDAL = new homeDAL;
    }

    public function landing(){

      require "views/landing.php";
    }

    public function create_account(){
      $this->homeDAL->create_account();
    }
  }


 ?>
