<?php
  $title = "Your Profile";
  $onscreen_title = "My Profile";
  $alias = $_SESSION['alias'];
  $navbar_items = "<li class='active'><a href='hub'>Profile</a></li>
                   <li><a href='friends'>Friends</a></li>
                   <li><a href='messages'>Messages</a></li>
                   <li><a href='logout'>Logout</a></li>";
  $content = "
    <div class='jumbotron'>
      <div class='row text-center'>
        <h2>Welcome to your profile, ".$alias."</h2>
      </div>
      <hr />

      <div class='row'>

        <div class='col-md-offset-3 col-md-6 col-md-offset-3 text-center'>
          <h4>Share a post with the world:</h4><br>
          <div class='form-group'>
            <label for='post'>Post:</label>
            <textarea class='form-control' rows='5' id='post'></textarea>
          </div>
        </div>

      </div>

    </div> <!-- end jumbotron -->
  ";

  require "home-page/statics/layout.php";
 ?>
