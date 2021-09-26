<?php
if(isset($_POST['register'])){
  include "dbconfig.php";

  $empname=$_POST['empname'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $designation=$_POST['designation'];
  $salary=$_POST['salary'];
  $password=$_POST['password'];

  

  //insert data into table
  $sql="insert into empdata values(0,'$empname','$email','$phone','$designation',$salary,'$password')";
  if($con->query($sql)){
    echo "data inserted successfully............";
  }
  else{
    echo "try again.......";
  }
}

?>