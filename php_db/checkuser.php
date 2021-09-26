<?php

if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
include "dbconfig.php";

$sql=" select * from empdata where email='$email' and password='$password'";
$result=$con->query($sql);
if($result->num_rows>0){
  $data=$result->fetch_assoc();
  session_start();
  $_SESSION['email']=$data['email'];
  $_SESSION['id']=$data['id'];
  header("location:home.php");

}
else{
  echo "wrong username or password";
}


}

?>