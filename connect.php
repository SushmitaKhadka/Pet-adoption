<?php
  $fullname = $_POST['fullname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];


  $con = new mysqli('127.0.0.1','root','','pet');


  if($con->connect_error){
    die('Connection Failed :'.$conn->connect_error);
    }else
    {
      $stmt = $con->prepare("insert into signup(fullname, username, password, email, phonenumber) values(?,?,?,?,?)");
      $stmt->bind_param("ssssi",$fullname, $username, $password, $email, $phonenumber);
      $stmt->execute();
      echo "registrations successfull";
      $stmt->close();
      $con->close();
    }
?>