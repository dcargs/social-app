<?php
  function route($req2){
    require "controller.php";
    $controller = new hub_controller();

    if($req2 == ""){
      $controller->landing();
    }
    // elseif($req2 == "create_account"){
    //   $controller->create_account();
    // } elseif($req2 == "login"){
    //   $controller->login();
    // }
  }
 ?>
