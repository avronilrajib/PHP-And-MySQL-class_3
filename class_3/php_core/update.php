<?php
   require_once("../config/configer.php");

    if(isset($_REQUEST['submit']))
    {
         $id=$_REQUEST['id'];
        $user=$_REQUEST['username'];
        $email=$_REQUEST['email'];
        $pass=$_REQUEST['password'];
       $update="UPDATE `login_info` SET `username`=' $user',`email`='$email',`password`='$pass' WHERE id=$id";
       if(mysqli_query($con,$update))
       {
        header("location:../read.php?updated");
       }
      
    }
?>