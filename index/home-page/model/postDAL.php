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
      if(isset($_POST['post'])){
        $post_form = explode("&", $_POST['post']);
        $temp_post = explode("=", $post_form[0]);
        $post = $this->char_replace($temp_post[1]);
        $stmt = $this->conn->prepare(
          "INSERT INTO post (content, user) VALUES (?,?)"
        );
        $stmt->bind_param("ss", $post, $me);
        $stmt->execute();

      } else {
        echo "something went wrong in posting your post";
      }
    }

    private function char_replace($string){
      $string = str_replace("%20", " ", $string);
      $string = str_replace("%0D", "\n", $string);
      $string = str_replace("%0A", "", $string);
      $string = str_replace("%2F", "/", $string);
      $string = str_replace("%3F", "?", $string);
      $string = str_replace("%2C", ",", $string);
      return $string;
    }

  }

 ?>
