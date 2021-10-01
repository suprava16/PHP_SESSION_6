<?php
//database connection
$con=new mysqli("localhost","root","","employee");
if($con->connect_error){
  die("something wrong in database connection...try again!!!!!!!!!");
}

?>