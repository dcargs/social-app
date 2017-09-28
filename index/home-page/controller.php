<?php

  class home_controller {
    private $homeDAL;

    function __construct() {
      require ("model/homeDAL.php");
      $this->homeDAL = new homeDAL;
    }

    public function landing(){

      require "views/landing.php";
    }

    public function create_account(){
      $this->homeDAL->create_account();
    }

    public function login(){
      $this->homeDAL->login();
    }
  }


 ?>
