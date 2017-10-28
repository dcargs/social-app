<?php
  require_once 'db.php';
  /**
   *
   */
  class postDAL extends db {

    public function create_post(){
      if (!isset($_SESSION)) { session_start(); }
      $me = $_SESSION['alias'];
      if(isset($_POST['data'])){
        $post_form = explode("&", $_POST['data']);
        $post = explode("=", $post_form[0]);
        echo $post[1];
      } else {
        echo "something went wrong in posting your post";
      }
    }

  }

 ?>
