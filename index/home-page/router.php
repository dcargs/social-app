<?php
  function route($req2){
    require "controller.php";
    $controller = new home_controller();

    if($req2 == ""){
      $controller->landing();
    } elseif($req2 == "create_account"){
      echo "create_account";
    } elseif($req2 == "login"){
      echo "login";
    } elseif($req2 == "logout"){
      echo "logout";
    }
  }
 ?>
