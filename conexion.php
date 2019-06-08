<?php
$servername="localhost";
$username="root";
$pass="";
$DBname="carros";
  $conn = new mysqli($servername,$username,$pass,$DBname);
  if($conn->connect_error){
      die("Connection failed".$conn->connect_error);
  }else{
  }
?>
