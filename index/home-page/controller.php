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
      $everyone = $this->get_people();
      $requests = $this->get_requests();
      $friends = $this->get_friends();
      $me = $_SESSION['alias'];
      require "views/friends.php";
    }

    // End views

    public function post_hub(){
      if(isset($_POST['action'])){
        $action = $_POST['action'];
        switch ($action) {
          case 'add_friend': $this->add_friend(); break;
          case 'respond_request': $this->respond_request(); break;

          default: echo "case not defined in post_hub"; break;
        }
      } else {
        echo "something went wrong";
      }
    }

    private function get_friends(){
      $me = $_SESSION['alias'];
      return $this->friendDAL->get_friends($me);
    }

    private function respond_request(){
      session_start();
      $me = $_SESSION['alias'];
      $id = $_POST['id'];
      $this->friendDAL->respond_request($id, $me);
    }

    private function get_requests(){
      $me = $_SESSION['alias'];
      $requests = $this->friendDAL->get_requests($me);
      return $requests;
    }

    private function add_friend(){
      session_start();
      $me = $_SESSION['alias'];
      $alias = $_POST['alias'];
      $this->friendDAL->send_request($me, $alias);
    }

    private function get_people(){
      $people = $this->friendDAL->get_everyone();
      return $people;
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
