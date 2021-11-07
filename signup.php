<!DOCTYPE html>
<?php include "auth.php" ?>
<?php require_once("config.php"); ?>
<html lang="en">
<head>
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
<nav class="navbar navbar-expand-md  sticky-top">
                <div class="container">
                  <a href="" class="navbar-brand text-warning font-weight-bold">NO HUNGER</a>
                  <button class="navbar-toggler" type="button-outline-primary" data-toggle="collapse" data-target="#collapsenavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a href="hello3.php" class="nav-link text-white font-weight-bold">HOME</a>
                      </li>
                      <li class="nav-item">
                        <a href="" onclick="myFunction()" class="nav-link text-white font-weight-bold">ABOUT US</a>
                      </li>
                      <li class="nav-item">
                        <a onclick="myFunction()" href="" class="nav-link text-white font-weight-bold">GELLERY</a>
                        </li>
                        <li class="nav-item">
                            <a href="" onclick="myFunction()"class="nav-link text-white font-weight-bold">CONTACT US</a>
                            </li>
                            <li class="nav-item">
                                <a href="login.php" class="nav-link text-white font-weight-bold">LOGIN</a>
                                </li>
                        </ul>
     </div>
          </div>
     </nav>

     <!-- ========================signup form============= -->


<div class="text-center heading">
      <h1>SignUp Now</h1>

    </div>
<!-- <div class="container">
  <div class="row">
    <div class="col-sm-4">
    </div>
     <div class="col-sm-4">
     
					
    </div>
     <div class="col-sm-4">
    </div>
  </div> -->
	<div class="row">
  <?php

if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $username=$_POST['username'];
    $city=$_POST['city'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $role=$_POST['role'];
    
    $passwordConfirm=$_POST['passwordConfirm']; 
    $files=$_FILES['file'];


    $filename=$files['name'];
    $fileerror=$files['error'];
    $filetmp=$files['tmp_name'];

    $fileext=explode('.',$filename);
    $filecheck=strtolower(end($fileext));

    $fileextstored=array('png','jpg','jpeg');
    if(in_array($filecheck,$fileextstored)){
      $destinationfile='upload/'.$filename;
      move_uploaded_file($filetmp,$destinationfile);
    }


    


    if(strlen($name)<3){ // Minimum 
        $error[] = 'Please enter First Name using 3 charaters atleast.';
          }
  if(strlen($name)>40){  // Max 
        $error[] = 'First Name: Max length 20 Characters Not allowed';
          }
  if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $name)){
              $error[] = 'Invalid Entry First Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
          }    
  // if(strlen($lname)<3){ // Minimum 
  //       $error[] = 'Please enter Last Name using 3 charaters atleast.';
  //         }
  // if(strlen($lname)>20){  // Max 
  //       $error[] = 'Last Name: Max length 20 Characters Not allowed';
  //         }
  // if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $lname)){
  //             $error[] = 'Invalid Entry Last Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
  //               }    
        if(strlen($username)<3){ // Change Minimum Lenghth   
              $error[] = 'Please enter Username using 3 charaters atleast.';
          }
    if(strlen($username)>50){ // Change Max Length 
              $error[] = 'Username : Max length 50 Characters Not allowed';
          }
    if(!preg_match("/^^[^0-9][a-z0-9]+([_-]?[a-z0-9])*$/", $username)){
              $error[] = 'Invalid Entry for Username. Enter lowercase letters without any space and No number at the start- Eg - myusername, okuniqueuser or myusername123';
          }  
  if(strlen($email)>50){  // Max 
              $error[] = 'Email: Max length 50 Characters Not allowed';
          }
     if($passwordConfirm ==''){
              $error[] = 'Please confirm the password.';
          }
          if($password != $passwordConfirm){
              $error[] = 'Passwords do not match.';
          }
            if(strlen($password)<5){ // min 
              $error[] = 'The password is 6 characters long.';
          }
          
           if(strlen($password)>20){ // Max 
              $error[] = 'Password: Max length 20 Characters Not allowed';
          }
            $sql="select * from registrationTable where (username='$username' or email='$email');";
        $res=mysqli_query($dbc,$sql);
     if (mysqli_num_rows($res) > 0) {
  $row = mysqli_fetch_assoc($res);
  
       if($username==$row['username'])
       {
             $error[] ='Username alredy Exists.';
            } 
         if($email==$row['email'])
         {
              $error[] ='Email alredy Exists.';
            } 
        }
        if(!isset($error)){ 
          $date=date('Y-m-d');
        $options = array("cost"=>4);
// $password = password_hash($password,PASSWORD_BCRYPT,$options);
        
       $result = mysqli_query($dbc,"INSERT into registrationTable values('','$name','$mobile','$username','$email','$password','$role','$city','$destinationfile')");

       if($result)
{
 $done=2; 
}
else{
  $error[] ='Failed : Something went wrong';
}
}
} ?>




  <div class="col-sm-1">
  <?php 
  if(isset($error)){ 
foreach($error as $error){ 
  echo '<p class="errmsg">&#x26A0;'.$error.' </p>'; 
}
}
   ?> 
		</div>
		<div class="col-sm-5">
      <?php if(isset($done)) 
      { 
       header('Location:login.php');
       ?>
    <!-- <div class="successmsg"><span style="font-size:100px;">&#9989;</span> <br> You have registered successfully . <br> <a href="login.php" style="color:#fff;">Login here... </a> </div> -->
      <?php } else { ?>
       <div class="signup_form">
		<form action="" method="POST" enctype="multipart/form-data">
 <!-- <h3 class="text-center text-danger font-weight-bold">No More Hunger</h3> <br> -->
        
  <div class="form-group">
  	
        <label class="label_txt">Full Name</label>
    <input type="text" class="form-control" name="name" value="<?php if(isset($error)){ echo $_POST['name'];}?>" required="" >
  </div>
  <div class="form-group">
    <label class="label_txt">Mobile No. </label>
    <input type="text" class="form-control" name="mobile" required="" >
  </div>
 
<div class="form-group">
    <label class="label_txt">UserName </label>
    <input type="text" class="form-control" name="username" value="<?php if(isset($error)){ echo $_POST['username'];}?>"required="" >
  </div>
  <div class="form-group">
    <label class="label_txt">City </label>
    <input type="text" class="form-control" name="city" required="" >
  </div>

<div class="form-group">
    <label class="label_txt">Email </label>
    <input type="email" class="form-control" name="email" value="<?php if(isset($error)){ echo $_POST['email'];}?>" required="">
  </div>
  <div class="form-group">
  Select registation type: 
      <!-- <select name="profile">
          <option value="Donator" >Donator</option>
          <option value="Voluneeteer" >Voluneenteer</option>
        </select> -->
        <label>
          <input type="radio" name="role" id="role" value="admin" checked=""> admin
          <input type="radio" name="role" id="role" value="donator" checked=""> donator
        </label>
        
          
      </div>
  <div class="form-group">
    <label class="label_txt">Password </label>
    <input type="password" name="password" class="form-control" required="">
  </div>
   <div class="form-group">
    <label class="label_txt">Confirm Password </label>
    <input type="password" name="passwordConfirm" class="form-control"required="" >
  </div>
  <div class="form-group">
    <label for="file">Profile pic</label>
    <input type="file" class="form-control" name="file" required="">
  </div>
  <button type="submit" name="signup" class="btn btn-primary btn-group-lg form_btn" required="">SignUp</button>
   <p>Have an account?  <a href="login.php">Log in</a> </p>
</form>
<?php } ?> 
</div>
		</div>
		<div class="col-sm-6">
      <img src="img/register.svg" height="500px" width="500px" style="margin-left:60px;">
		</div>

	</div>
</div> 





<?php
   include ('index.php');
?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

</html>