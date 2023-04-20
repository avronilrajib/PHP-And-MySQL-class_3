<?php
require_once("../config/configer.php");
if(isset($_REQUEST['id']))
{
    $id=$_REQUEST['id'];
   $query="DELETE FROM `login_info` WHERE id=$id";
   if(mysqli_query($con,$query))
   {
      header("location:../read.php");
   }
}


?>