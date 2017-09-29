<?php

  class home_controller {
    private $homeDAL;
    private $friendDAL;
    private $messageDAL;

    function __construct() {
      require ("model/homeDAL.php");
      require ("model/friendDAL.php");
      require ("model/messageDAL.php");
      $this->homeDAL = new homeDAL;
      $this->friendDAL = new friendDAL;
      $this->messageDAL = new messageDAL;
    }

    // Start views

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

    // End views

    private function get_people(){

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
