<?php

 require_once("../config/configer.php");
  if(isset($_REQUEST['id']))
  {

    $id=$_REQUEST['id'];
   $query="SELECT * FROM `login_info` WHERE id=$id";
 
$data=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($data))
{

  $id=$row['id'];
    $user=$row['username'];
   $email=$row['email'];
   $pass=$row['password'];
   ?>

      <form action="update.php" method="post">
        <input type="text" name="username" value="<?php echo $user ?>" id="">
        <input type="email" name="email" value="<?php echo $email ?>" id="">
        <input type="password" name="password" value="<?php echo $pass ?>" id="">
        <input type="submit" value="Update" name="submit" id="">
        <input type="hidden" name="id" value="<?php echo $id ?>" id="">
    
    </form>



<?php
}
  

  }
?>
   
