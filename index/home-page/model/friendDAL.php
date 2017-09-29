<?php
  require_once "db.php";
  /**
   *
   */
  class friendDAL extends db {
    public function get_everyone(){
      session_start();
      $me = $_SESSION['alias'];
      $stmt = $this->conn->prepare(
        "SELECT alias AS Alias, f_name AS 'First Name', m_name AS 'Middle Name', l_name AS 'Last Name' FROM user
        WHERE alias NOT LIKE ?"
      );
      $stmt->bind_param("s", $me);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    }

    public function send_request($me, $alias){
      $stmt = $this->conn->prepare(
        "INSERT INTO friends (user1, user2, accepted) VALUES (?,?,0)"
      );
      $stmt->bind_param("ss", $me, $alias);
      $stmt->execute();
    }

    public function get_requests($me){
      $stmt = $this->conn->prepare(
        "SELECT `id`, `user2` FROM friends WHERE `user1` = ? AND `accepted` = 0"
      );
      $stmt->bind_param("s", $me);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    }

    public function respond_request($id, $me){
      $stmt = $this->conn->prepare(
        "UPDATE friends SET accepted = 1 WHERE id = ?"
      );
      $stmt->bind_param("i", $id);
      $stmt->execute();
    }

  }


 ?>
