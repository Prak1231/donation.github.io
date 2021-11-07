<!DOCTYPE html>
<?php 
if(!isset($_SESSION["login_sess"])) 
{
    header("location:login.php"); 
}
  $email=$_SESSION["login_email"];
  $findresult = mysqli_query($dbc, "SELECT * FROM registrationTable WHERE email= '$email'");
if($res = mysqli_fetch_array($findresult))
{
  $user_id=$res['id'];
$username = $res['username']; 
$fname = $res['fname'];   
$mobile = $res['mobile'];  
$email = $res['email'];  
$city=$res['city'];
$image=$res['image'];
}
 ?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<link rel="stylesheet" href="prac.css">
</head>

<body>
    <div class="hello">
    <h1 class="text-center font-weight-bold">MAKE DONATION</h1>
    <h3 class="text-primary font-weight-bold" style="margin-left:20px;"> WHAT YOU WANT TO DONATE ?</h3>
<hr class="text-danger">
<div class="container">
  
  <div class="row text-center"  style="margin-left:30px">
    <div class="col-md-4 card-container">
      <div class="card card-flip">
        <div class="front card-block">
          <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
          <i class="fas fa-tshirt" style="font-size: 4em"></i>
          <h4 class="card-title"></h4>
          <h6 class="card-subtitle text-muted"></h6>
          <h4 class="card-text ">Cloths</h4>
        </div>
        <div class="back card-block">
          
          <a href="donate_cloths.php?id=<?php echo $user_id;?>" class="btn btn-outline-primary">Donate Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 card-container">
      <div class="card card-flip">
        <div class="front card-block">
        <i class="fas fa-bread-slice" style="font-size: 4em"></i>
          <h4 class="card-title"></h4>
          <h6 class="card-subtitle text-muted"></h6>
          <h4 class="card-text">Food</h4>
        </div>
        <div class="back card-block">
          <p></p>
          <a  href="donate_food.php?id=<?php echo $user_id;?>" class="btn btn-outline-primary">Donate Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 card-container">
      <div class="card card-flip">
        <div class="front card-block">
        <i class="fas fa-school" style="font-size: 4em"></i>
          <h4 class="card-title"></h4>
          <h6 class="card-subtitle text-muted"></h6>
          <h6 class="card-text ">Education</h6>
        </div>
        <div class="back card-block">
          <p></p>
          <a href="donate_education.php?id=<?php echo $user_id;?>" class="btn btn-outline-primary">Donate Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 card-container">
      <div class="card card-flip">
        <div class="front card-block">
        <i class="fas fa-gamepad" style="font-size: 4em"></i>
                  <!-- <span class="card-img-top fa" style="font-size: 4em">&#xf118;</span> -->
          <h4 class="card-title"></h4>
          <h6 class="card-subtitle text-muted"></h6>
          <h4 class="card-text ">Toys</h4>
        </div>
        <div class="back card-block">
         
          <a href="donate_toy.php" class="btn btn-outline-primary">Donate Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 card-container">
      <div class="card card-flip">
        <div class="front card-block">
        <i class="fas fa-rupee-sign" style="font-size: 4em"></i>          
        <h4 class="card-title"></h4>
          <h6 class="card-subtitle text-muted"></h6>
          <h4 class="card-text ">Money</h4>
        </div>
        <div class="back card-block">
          <p></p>
          <a href="donate_money.php?id=<?php echo $user_id;?>" class="btn btn-outline-primary">Donate Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 card-container">
      <div class="card card-flip">
        <div class="front card-block">
        <i class="fas fa-walking" style="font-size: 4em"></i>
          <h4 class="card-title"></h4>
          <h6 class="card-subtitle text-muted"></h6>
          <h4 class="card-text">Health</h4>
        </div>
        <div class="back card-block">
          <p></p>
          <a href="donate_health.php?id=<?php echo $user_id;?>" class="btn btn-outline-primary">Donate Now</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script src="main.js">
    </script>



</body>
</html>