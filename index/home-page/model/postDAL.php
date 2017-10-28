<?php
  require_once 'db.php';
  /**
   *
   */
  class postDAL extends db {

    public function get_posts(){
      $stmt = $this->conn->prepare(
        "SELECT * FROM post"
      );
      $stmt->execute();
      $result = $stmt->get_result();
      $posts = "";
      while ($row = $result->fetch_assoc()) {
        $posts .= "<div class='col-md-offset-3 col-md-6 col-md-offset-3'>
                    <div class='panel panel-default'>
                      <div class='panel-heading'>".$row['user']."</div>
                      <div class='panel-body'>".$row['content']."</div>
                    </div>
                   </div>";
      }
      return $posts;
    }

    public function create_post(){
      if (!isset($_SESSION)) { session_start(); }
      $me = $_SESSION['alias'];
      if(isset($_POST['data'])){
        $post_form = explode("&", $_POST['data']);
        $temp_post = explode("=", $post_form[0]);
        $type = explode("=", $post_form[1]);
        $post = $this->char_replace($temp_post[1]);
        $stmt = $this->conn->prepare(
          "INSERT INTO post (type, content, user) VALUES (?,?,?)"
        );
        $stmt->bind_param("iss", $type[1], $post, $me);
        $stmt->execute();

      } else {
        echo "something went wrong in posting your post";
      }
    }

    public function get_post_types(){
      $stmt = $this->conn->prepare(
        "SELECT * FROM post_type"
      );
      $stmt->execute();
      $result = $stmt->get_result();
      $types = "";
      while($row = $result->fetch_assoc()){
        $types .= "<option value='".$row['id']."'>".$row['name']."</option>";
      }
      return $types;
    }

    private function char_replace($string){
      $string = str_replace("%20", " ", $string);
      $string = str_replace("%0D", "\n", $string);
      $string = str_replace("%0A", "", $string);
      $string = str_replace("%2F", "/", $string);
      return $string;
    }

  }

 ?>
