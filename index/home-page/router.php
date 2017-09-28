<?php
  function route($req2){
    require "controller.php";
    $controller = new home_controller();

    if($req2 == ""){
      $controller->landing();
    } elseif($req2 == "login"){
      $controller->login();
    } elseif($req2 == "hub"){
      $controller->hub();
    } elseif($req2 == "logout"){
      $controller->logout();
    }
  }
 ?>
