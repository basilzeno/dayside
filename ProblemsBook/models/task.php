<?php

 Class Task{


  
   public function __construct() {
           
    }

  public static function insert_data($username,$email,$taskText,$image_path,$status)
  {
   $db = Db::getInstance();
                $stmt = $db->prepare('INSERT INTO tasks (username,email,taskText,image_path,status) VALUES (:username, :email, :taskText,:image_path,:status)');
                $stmt->execute(array(
                ':username' => $username,
                ':email' => $email,
                ':taskText' => $taskText,
                ':image_path' => $image_path,
                ':status' => $status
            ));
  }

  public static function read_tasks()
  {
   $db = Db::getInstance();
   $req = $db->prepare('SELECT * FROM tasks');
   $req->execute();
   $tasks = $req->fetchAll();
   return $tasks;
  }
 }
?>