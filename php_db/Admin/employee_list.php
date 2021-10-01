<?php
include "dbconfig.php";
session_start();
if(isset($_SESSION['email'])){
  $qry="select * from empdata";
  $result=$con->query($qry);
  if($result->num_rows>0){
    ?>
      <table border="1">
        <tr>
          <th>Employee Name</th>
          <th>email</th>
          <th>phone</th>
          <th>Designation</th>
          <th>Salary</th>
        </tr>
        <?php
        while($data=$result->fetch_assoc()){
          $empname=$data['empname'];
          $email=$data['email'];
          $phone=$data['phone'];
          $designation=$data['designation'];
          $salary=$data['salary'];
        ?>
        <tr>
          <td><?php echo $empname;?></td>
          <td><?php echo $email;?></td>
          <td><?php echo $phone;?></td>
          <td><?php echo $designation;?></td>
          <td><?php echo $salary;?></td>
          <?php
         echo " <td><a href='delete.php?uid=$data[id]'>Delete</a></td>";
          ?>
        </tr>
    <?php
        }
  }
}
?>
</table>