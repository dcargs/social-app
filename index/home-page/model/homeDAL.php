<?php
  require 'db.php';

  class homeDAL extends db {

    public function create_account(){
      $alias = $_POST['alias'];
      $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
      $f_name = ucwords($_POST['f_name']);
      $m_name = ucwords($_POST['m_name']);
      $l_name = ucwords($_POST['l_name']);
      $email = $_POST['email'];

      if($this->check_exist($alias, $email) == 1){
        $stmt = $this->conn->prepare(
          "INSERT INTO user (alias, pass, f_name, m_name, l_name, email) VALUES (?,?,?,?,?,?)"
        );
        $stmt->bind_param("ssssss", $alias, $pass, $f_name, $m_name, $l_name, $email);
        $stmt->execute();
        header("Location: /home");
      } else {
        echo "alias / email already in use";
      }
    }

    public function login(){
      $alias = $_POST['alias'];
      $pass = $_POST['pass'];

      if($this->check_exist($alias) == 0){
        $stmt = $this->conn->prepare(
          "SELECT pass FROM user WHERE alias = ?"
        );
        $stmt->bind_param("s", $alias);
        $stmt->execute();
        $result = $stmt->get_result();
        $result = $result->fetch_assoc();
        if(password_verify($pass, $result['pass'])){
          session_start();
          $_SESSION['status'] = "authenticated";
          $_SESSION['alias'] = $alias;
          header("Location: ../hub");
        } else {
          echo "incorrect password";
        }
      } else {
        echo "alias does not exist";
      }

    }

    // returns 0 if exist and 1 if not
    private function check_exist($alias){
      $stmt = $this->conn->prepare(
        "SELECT * FROM user WHERE alias = ?"
      );
      $stmt->bind_param("s", $alias);
      $stmt->execute();
      $result = $stmt->get_result();
      if($result->num_rows > 0){
        return 0;
      } else {
        return 1;
      }
    }

  }


 ?>
