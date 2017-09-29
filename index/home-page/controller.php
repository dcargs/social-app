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

    public function hub(){
      $this->check_status();
      require "views/hub.php";
    }

    public function messages(){

      require "views/messages.php";
    }

    public function friends(){

      require "views/friends.php";
    }

    public function create_account(){
      $this->homeDAL->create_account();
    }

    public function login(){
      $this->homeDAL->login();
    }

    private function check_status(){
      session_start();
      if(isset($_SESSION['status'])){
        if($_SESSION['status'] == "authenticated"){

        } else {
          header("Location: /home");
        }
      } else {
        header("Location: /home");
      }
    }
  }


 ?>
