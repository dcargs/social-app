<?php
  $title = "Your Profile";
  $onscreen_title = "My Profile";
  $alias = $_SESSION['alias'];
  $navbar_items = "<li class='active'><a href='hub'>Profile</a></li>
                   <li><a href='friends'>Friends</a></li>
                   <li><a href='messages'>Messages</a></li>";
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
