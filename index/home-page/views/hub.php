<?php
  $title = "Your Profile";
  $onscreen_title = "My Profile";
  session_start();
  $alias = $_SESSION['alias'];
  $content = "
    <div class='jumbotron'>
      <div class='row text-center'>
        <h2>Welcome to your profile, ".$alias."</h2>
      </div>
      <hr />

    </div> <!-- end jumbotron -->
  ";

  require "home-page/statics/layout.php";
 ?>
