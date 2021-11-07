<!DOCTYPE html>
<?php require_once("config.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_POST['signup'])){
    $user_id=$_POST['user_id'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $username=$_POST['username'];
    $city=$_POST['city'];
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    
    


   
    


  $query="UPDATE registrationTable SET fname='$name', mobile='$mobile', username='$username', city='$city', email='$email',password='$password'  WHERE id='$user_id'";
 $result=mysqli_query($dbc,$query);

  if($result){
     header('Location:my_account.php');
  }
  else {
      echo 'not updated';
  }
}
?>


       
     
</p>
 
 

    
</body>
</html>