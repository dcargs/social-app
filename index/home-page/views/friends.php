<?php
  $title = "Friends";
  $onscreen_title = "Connect with your friends";
  $navbar_items = "<li><a href='hub'>Profile</a></li>
                   <li class='active'><a href='friends'>Friends</a></li>
                   <li><a href='messages'>Messages</a></li>";

  $people = "<table style='overflow: auto;'class='table rounded table-striped table-responsive table-bordered'><thead>";
  while($fieldName = mysqli_fetch_field($result)) {
    $people .= "<th class='text-center'>" . $fieldName->name . "</th>";
  }
  $people .= "<th class='text-center'>Request</th>";
  $people .= "</thead><tbody>";
  while($row = $result->fetch_array(MYSQLI_NUM)) {
    $people .= "<tr>";
      foreach ($row as $i => $value) {
        $people .= "<td>".$value."</td>";
      }
      $alias = "'".$row[0]."'";
      $people .= "<td><button type='button' class='btn btn-primary btn-block' onclick='sendRequest(".$alias.")'>Send Request</button></td>";
    $people .= "</tr>";
  }
  $people .= "</tbody></table>";

  $content = "<div class='jumbotron'>
                ".$people."
              </div>";



  require "home-page/statics/layout.php";
 ?>
