<?php
  $email = $_POST['email'];

  //Database connection
  $conn = new mysqli('localhost','root','','ip');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into nofi(email) values(?)");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->close();
    $conn->close();
  }
  header("location: ../index.php");
?>
