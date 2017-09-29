<?php
  function route($req2){
    require "controller.php";
    $controller = new home_controller();

    if($req2 == ""){
      $controller->landing();
    } elseif($req2 == "create_account"){
      $controller->create_account();
    } elseif($req2 == "login"){
      $controller->login();
    } elseif($req2 == "hub"){
      $controller->hub();
    } elseif($req2 == "messages"){
      $controller->messages();
    } elseif($req2 == "friends"){
      $controller->friends();
    }
  }
 ?>
