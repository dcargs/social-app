<?php
  require 'db.php';

  class homeDAL extends db {

    public function create_account(){
      print_r($_POST);
      // $alias = $_POST['alias'];
      // $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
      // $f_name = ucwords($_POST['f_name']);
      // $m_name = ucwords($_POST['m_name']);
      // $l_name = ucwords($_POST['l_name']);
      // $email = $_POST['email'];
      //
      // if($this->check_exist($alias, $email) == 1){
      //   $stmt = $this->conn->prepare(
      //     "INSERT INTO user (alias, pass, f_name, m_name, l_name, email) VALUES (?,?,?,?,?,?)"
      //   );
      //   $stmt->bind_param("ssssss", $alias, $pass, $f_name, $m_name, $l_name, $email);
      //   $stmt->execute();
      // } else {
      //   echo "alias / email already in use";
      // }
    }

    private function check_exist($alias, $email){
      $stmt = $this->conn->prepare(
        "SELECT * FROM user WHERE alias = ?"
      );
      $stmt->bind_param("s", $alias);
      $stmt->execute();
      $result = $stmt->get_result();
      if($result->num_rows > 0){
        return 0;
      } else {
        $stmt = $this->conn->prepare(
          "SELECT * FROM user WHERE email = ?"
        );
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0){
          return 0;
        } else {
          return 1; //success
        }
      }
    }

  }


 ?>
