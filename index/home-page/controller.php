<?php

  class home_controller {

    $homeDAL;

    function __construct() {
      require ("/home-page/model/homeDAL.php");
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
