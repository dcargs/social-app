<?php
  require_once "db.php";
  /**
   *
   */
  class friendDAL extends db {
    public function get_everyone(){
      $stmt = $this->conn->prepare(
        "SELECT alias AS Alias, f_name AS 'First Name', m_name AS 'Middle Name', l_name AS 'Last Name' FROM user"
      );
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    }

  }


 ?>
