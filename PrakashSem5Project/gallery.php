<!DOCTYPE html>
<?php require_once("config.php");
if(!isset($_SESSION["login_sess"])) 
{
    header("location:login.php"); 
}
  $email=$_SESSION["login_email"];
  $findresult = mysqli_query($dbc, "SELECT * FROM registrationTable WHERE email= '$email'");
if($res = mysqli_fetch_array($findresult))
{
$username = $res['username']; 

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
    <link rel="stylesheet" href="css/gallery.css">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-md sticky-top">
                <div class="container-fluid">
                  <a href="" class="navbar-brand text-warning font-weight-bold">NO HUNGER</a>
                  <button class="navbar-toggler" type="button-outline-primary" data-toggle="collapse" data-target="#collapsenavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a href="hello3.php"  class="nav-link text-white font-weight-bold">HOME</a>
                      </li>
                      <li class="nav-item">
                        <a href="about.php"  class="nav-link text-white font-weight-bold">ABOUT US</a>
                      </li>
                      
                        <li class="nav-item">
                            <a href="contactus.php" class="nav-link text-white font-weight-bold">CONTACT US</a>
                            </li>
                           
                          
                                

                                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="<?php echo $image;?>"style="color:blue;border-radius:50%;height:30px;width:30px;"> <span class="text-danger"> <?php echo $username;?></span> 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          
          <a class="dropdown-item" href="my_account.php"><i class="fa fa-user" aria-hidden="true"></i>Profile</a>

          <a class="dropdown-item" href="my_account.php"><i class="fa fa-edit" aria-hidden="true"></i>
Update Profile</a>

          <a class="dropdown-item" href="my_account.php">
          <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>

Logout</a>
          </div>
                        </ul>
                  </div>
                  </div>
                  </nav>
  




<div class="conatiner text-center bg-warning ">
  <h1 class="font-weight-bold"> Gallery </h1>
</div>
<div class="row">
    <div class="column">
      <img class="demo cursor" src="img/image1.jpg" style="width:100%" onclick="currentSlide(1)" alt="No More Hunger ">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/image2.jpg" style="width:100%" onclick="currentSlide(2)" alt="No More Hunger ">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/image3.jpg" style="width:100%" onclick="currentSlide(3)" alt="No More Hunger ">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/image14.jpg" style="width:100%" onclick="currentSlide(4)" alt="No More Hunger ">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/image5.jpg" style="width:100%" onclick="currentSlide(5)" alt="No More Hunger ">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/image6.jpg" style="width:100%" onclick="currentSlide(6)" alt="No More Hunger ">
    </div>
  </div>
</div>
    <hr class="red">
<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
      <img src="img/image1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="img/image2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="img/image3.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="img/image14.jpg"  style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="img/image5.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="img/image6.jpg" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail images -->
  


<script src="gallery.js">

</script>
<?php
   include ('index.php');
?>
</body>
</html>