<?php
  ini_set ( 'display_errors', 'On' );
  error_reporting(E_ALL);
if (!isset($_GET['key1'])) {
    header("Location: /home");
} else {
    $req1 = $_GET['key1'];
    if ($req1 == "home") {
        require "home-page/router.php";
        route($_GET['key2']);
    } elseif($req1 == "hub"){
      require "hub/router.php";
      route($_GET['key2']);
    }
    // elseif($req1 == 'hr'){
    //   require "tcic_hr/router.php";
    //   route($_GET['key2']);
    // }
    else {
      echo "Where are you going?";
    }
}
