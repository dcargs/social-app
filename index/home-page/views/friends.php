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
    $friend_requests .= "<ul class='list-group'>";
    while($row = $requests->fetch_assoc()){
      $friend_requests .= "<li class='list-group-item'>".$row['user2']." sent you a friend request.   ";
      $friend_requests .= "<button type='button' id='".$row['id']."' class='btn btn-primary' onclick='respondRequest(".$row['id'].")'>Accept</button></li>";    
    }
    $friend_requests .= "</ul>";
    $friend_requests .= "</div><hr />";
  } else {
    $friend_requests = "<div class='well'><h2><span class='label label-primary'>Friend Requests</span></h2>";
    $friend_requests .= "<h4>You have no new friend requests</h4>";
    $friend_requests .= "</div>";
  }

  if($friends->num_rows > 0){
    $list_friends = "<div class='well'><h2><span class='label label-primary'>Your Friends</span></h2>";
    $list_friends .= "<ul class='list-group'>";
    while($row = $friends->fetch_assoc()){
      if($row['user1'] == $me){
        $friend = $row['user2'];
      } else {
        $friend = $row['user1'];
      }
      $list_friends .= "<li class='list-group-item'>".$friend."";
    }
    $list_friends .= "</ul><hr />";
    $list_friends .= "</div><hr />";
  } else {
    $list_friends = "<div class='well'><h2><span class='label label-primary'>Your Friends</span></h2>";
    $list_friends .= "<h4>You do not have any friends. Try sending a request!</h4>";
    $list_friends .= "</div>";
  }



  $content = "<div class='jumbotron'>

                <div class='row'>
                  <div class='col-md-6'>
                    ".$friend_requests."
                  </div>
                  <div class='col-md-6'>
                    ".$list_friends."
                  </div>
                </div>

                ".$people."
              </div>";



  require "home-page/statics/layout.php";
 ?>
