<?php
 
 Class mainController{
  
 public function insertTask() {

  $file_path = "uploads/";
  $file_path = $file_path . basename( $_FILES['imageTask']['name']).date('m-d-Y_hia');
  if ( move_uploaded_file($_FILES['imageTask']['tmp_name'], $file_path)) {

        $result = Task::insert_data($_POST['username'],$_POST['email'],$_POST['taskText'],$file_path,0);
        require_once('views/pages/home.php');
  }
  
}
     
  public function requestModel(){
 
    $tasks  = Task::read_tasks();    
    require_once('views/pages/adminsration.php');  
    }
 }
?>