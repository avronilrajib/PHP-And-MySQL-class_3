<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once("config/configer.php");
    ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Users</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          
                <?php 
                  $data="SELECT * FROM `login_info` ";
                  $query=mysqli_query($con,$data);
                  while($row=mysqli_fetch_assoc($query))
                  {
                      $id=$row['id'];
                      $user=$row['username'];
                      $email=$row['email'];
                      $pass=$row['password'];
                      ?>
                        <tr>
                      <td><?php echo $id;?></td>
                      <td><?php echo $user;?></td>
                      <td><?php echo $email;?></td>
                      <td><?php echo $pass;?></td>
                      <td><a href="php_core/edit.php?id=<?php echo $id ?>">Edit </a>||<a href="php_core/delete.php?id=<?php echo $id ?>"> delete</a></td>



                      <?php
                  }
                
                ?>
              
            </tr>
        </tbody>
    </table>
</body>
</html>