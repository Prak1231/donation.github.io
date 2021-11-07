<!DOCTYPE html>
<html lang="en">
<head>

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
<nav class="navbar navbar-expand-md sticky-top">
                <div class="container">
                  <a href="" class="navbar-brand text-warning font-weight-bold">NO HUNGER</a>
                  <button class="navbar-toggler" type="button-outline-primary" data-toggle="collapse" data-target="#collapsenavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a href="" onclick="myFunction()" class="nav-link text-white font-weight-bold">HOME</a>
                      </li>
                      <li class="nav-item">
                        <a href="" onclick="myFunction()" class="nav-link text-white font-weight-bold">ABOUT US</a>
                      </li>
                      <li class="nav-item">
                        <a onclick="myFunction()" href="" class="nav-link text-white font-weight-bold">GALLERY</a>
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
    <!-- ==================================login form-=================================> -->

    <div class="container">
	<div class="row">
		<div class="col-sm-6">
    <img src="img/image3.svg" height="500px" width="500px">
		</div>
		<div class="col-sm-4">
		<div class="login_form">
 	<form action="login_pro.php" method="POST">
  <div class="form-group">
 <h3 class="text-center text-danger font-weight-bold">No More Hunger</h3>
<?php 
if(isset($_GET['loginerror'])) {
	$loginerror=$_GET['loginerror'];
}
 if(!empty($loginerror)){  echo '<p class="errmsg bg-danger font-weight-bold">Invalid login credentials, Please Try Again..</p>'; } 
//  if(isset($_SESSION['error'])){
//   echo $_SESSION['error'];
//  }
?>
    <label class="label_txt">Username or Email </label>
    <input type="text" name="inputusername"  value="<?php if(!empty($loginerror)){ echo  $loginerror; } ?>" class="form-control" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">Password </label>
    <input type="text" name="password"   class="form-control" required="">
  </div>
  <button type="submit" name="login"  class="btn btn-primary btn-group-lg form_btn">Login</button>
</form>
<p style="font-size: 12px;text-align: center;margin-top: 10px;"><a href="forgot-password.php" style="color: #00376b;">Forgot Password?</a> </p>
   <br> 
    <p>Don't have an account? <a href="signup.php">Sign up</a> </p>
		</div>
		<div class="col-sm-2">
		</div>
		</div>
	</div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
         function myFunction(){
            alert("Please login to get access to the website");
         }
         </script>
<?php
   include ('index.php');
?>
</html>