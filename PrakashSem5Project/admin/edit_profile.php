<!DOCTYPE html>
<?php require_once("config.php"); ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/loginsignup.css">
</head>
<body>
  
<div class="conatiner-fluid">
  <div class="row">
 
   <div class="col-sm-4 col-lg-4">
   
   </div>
   <div class="col-sm-4 col-lg-4" style="margin-top:40px">
  
<div class="signup_form">

		<form action="update_user.php" method="POST" enctype="multipart/form-data">
    <?php 
             $user_id=$_GET['id'];
            $query="Select*from registrationTable where id='$user_id'"; 
             $res=mysqli_query($dbc,$query);
             $row=mysqli_fetch_array($res);
          ?>
          
     <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
  <div class="form-group">
  	
        <label class="label_txt">Full Name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $row['fname']; ?>"  required="" >
  </div>
  <div class="form-group">
    <label class="label_txt">Mobile No. </label>
    <input type="text" class="form-control" name="mobile" value="<?php echo $row['mobile']; ?>"  required="" >
  </div>
 
<div class="form-group">
    <label class="label_txt">UserName </label>
    <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>" required="" >
  </div>
  <div class="form-group">
    <label class="label_txt">City </label>
    <input type="text" class="form-control" name="city" value="<?php echo $row['city']; ?>"  required="" >
  </div>

<div class="form-group">
    <label class="label_txt">Email </label>
    <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>"  required="">
  </div>
  
 
  
  <button type="submit" name="signup" class="btn btn-primary btn-group-lg form_btn" required="">Update</button>
  
</form>

</div>

<div class="col-sm-4 col-lg-4">

</div>

</div>
</div>
</div>
</body>
</html>