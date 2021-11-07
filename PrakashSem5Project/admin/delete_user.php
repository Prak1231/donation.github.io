<!DOCTYPE html>
<?php require_once('config.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $user_id=$_GET['id'];

    $query ="DELETE from registrationTable where id='$user_id'";
    $result=mysqli_query($dbc,$query);

  if($result){
     header('Location:admin_account.php');
  }
  else {
      echo 'something went wrong';
  }



?>

</body>
</html>