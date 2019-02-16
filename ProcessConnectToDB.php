<?php


session_start();
$mysqli =  new mysqli('localhost', 'root',NULL, 'cuddb')or die(mysqli_error($mysqli));
$id = 0;
$update = false;
$name ='';
$location = '';

if (isset($_POST['save'])) {
    
    $name = $_POST['firstName'];
    $location = $_POST['location'];    
    $mysqli ->query("insert into cuddata (location, name) values('$location', '$name')") or die($mysqli-> error); 
    
    $_SESSION['message'] = "The record has been inserted";
    $_SESSION['msg_type'] = "success";
    header("location:PhpCrud.php");  
    
}

if (isset($_GET['delete'])) {
    
    $id = $_GET['delete'];
    
    
   $mysqli ->query("delete from cuddata where id = $id") or die($mysqli->error) ;
   $_SESSION['message'] = "The record has been deleted";
    $_SESSION['msg_type'] = "danger";
    
    header("location:PhpCrud.php");
      
}
if (isset($_GET['edit'])) {
   
    $id = $_GET['edit']; 
    $update = true;
   $result =  $mysqli -> query("select * from cuddata where id = $id") or die($mysqli->error);
  

       $row = $result->fetch_array(); //explain here 
       $name = $row['name'];
       $location = $row['location'];
      
}
if (isset($_POST['update'])) {
   $id = $_POST['id'];   
   $location = $_POST['location'];
   $name =$_POST['name'];
   $mysqli ->query("update cuddata set location = '$location',  name ='$name'  where id = $id")
           or die($mysqli->error);  
   
   $_SESSION['message'] = "The record has been updated";
    $_SESSION['msg_type'] = "warning";
    header("location:PhpCrud.php");
           
}



 

