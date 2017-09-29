<?php
  require_once "db.php";
  /**
   *
   */
  class friendDAL extends db {
    public function get_everyone(){
      $stmt = $this->conn->prepare(
        "SELECT alias, f_name, m_name, l_name FROM user";
      );
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    }

  }


 ?>
