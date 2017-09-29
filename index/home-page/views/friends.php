<?php
  $title = "Friends";
  $onscreen_title = "Connect with your friends";
  $navbar_items = "<li><a href='hub'>Profile</a></li>
                   <li class='active'><a href='friends'>Friends</a></li>
                   <li><a href='messages'>Messages</a></li>";

  $people = "<h2><span class='label label-primary'>List of Users</span></h2><table style='overflow: auto;'class='table rounded table-striped table-responsive table-bordered'><thead>";
  while($fieldName = mysqli_fetch_field($everyone)) {
    $people .= "<th class='text-center'>" . $fieldName->name . "</th>";
  }
  $people .= "<th class='text-center'>Request</th>";
  $people .= "</thead><tbody>";
  while($row = $everyone->fetch_array(MYSQLI_NUM)) {
    $people .= "<tr>";
      foreach ($row as $i => $value) {
        $people .= "<td>".$value."</td>";
      }
      $alias = '"'.$row[0].'"';
      $people .= "<td><button type='button' id='".$row[0]."' class='btn btn-primary btn-block' onclick='sendRequest(".$alias.")'>Send Request</button></td>";
    $people .= "</tr>";
  }
  $people .= "</tbody></table>";

  if($requests->num_rows > 0){
    $friend_requests = "<div class='well'><h2><span class='label label-primary'>Friend Requests</span></h2>";
    while($row = $requests->fetch_assoc()){
      $friend_requests .= "<ul class='list-group'>";
      $friend_requests .= "<li class='list-group-item'>".$row['user2']." sent you a friend request.   ";
      $friend_requests .= "<button type='button' id='".$row['id']."' class='btn btn-primary' onclick='respondRequest(".$row['id'].")'>Accept</button></li>";
      $friend_requests .= "</ul><hr />";
    }
    $friend_requests .= "</div><hr />";
  } else {
    $friend_requests = "<div class='well'><h2><span class='label label-primary'>Friend Requests</span></h2>";
    $friend_requests .= "<h4>You have no new friend requests</h4>";
    $friend_requests .= "</div>";
  }


  $content = "<div class='jumbotron'>
                ".$friend_requests."
                ".$people."
              </div>";



  require "home-page/statics/layout.php";
 ?>
