<?php
session_start();
include "dbconfig.php";
if(isset($_POST['edit'])){
  $empname=$_POST['empname'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $designation=$_POST['designation'];
  $salary=$_POST['salary'];

$qry="update empdata set empname='$empname',email='$email',phone='$phone',designation='$designation',salary=$salary where id=$_SESSION[id] ";
if($con->query($qry)){
  header("location:profile.php");
}
else{
  echo "something wrong.try again";
}
}

$sql="select * from empdata where id=$_SESSION[id]";

$result=$con->query($sql);
if($result->num_rows>0){
  $data=$result->fetch_assoc();
  $empname=$data['empname'];
  $email=$data['email'];
  $phone=$data['phone'];
  $designation=$data['designation'];
  $salary=$data['salary'];

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="empname" value="<?php echo $empname;?>" id="" placeholder="enter name"><br>
    <input type="email" name="email"  value="<?php echo $email;?>" id="" placeholder="enter email"><br>
    <input type="text" name="phone"  value="<?php echo $phone;?>" id="" placeholder="enter phone"><br>
    <input type="text" name="designation"  value="<?php echo $designation;?>" id="" placeholder="enter designation"><br>
    <input type="text" name="salary"  value="<?php echo $salary;?>" id="" placeholder="enter salary"><br>
    <input type="submit" value="Edit" name="edit">
  </form>
</body>
</html>