<!DOCTYPE html>
<?php include "auth.php" ?>
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

   <link rel="stylesheet" href="css/about.css">
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
                        <a href="hello3.php" onclick="myFunction()" class="nav-link text-white font-weight-bold">HOME</a>
                      </li>
                      
                      <li class="nav-item">
                        <a onclick="myFunction()" href="gallery.php" class="nav-link text-white font-weight-bold">GELLERY</a>
                        </li>
                        <li class="nav-item">
                            <a href="contactus.php" onclick="myFunction()"class="nav-link text-white font-weight-bold">CONTACT US</a>
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






                  <!-- -========================================================about section=============== -->

























<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center heade">ABOUT US</h1>
			<hr class="red-bar">
		</div>
	</div>
</div>
    
<div class="container-fluid">
    <div class="row ">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 row1">
        <img src="img/image14.jpg"  height="400px" width="420px">
     </div>

   <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 row2">
   
   <ol>
<li>: Spreading awareness among the public on health and sanitation, education, evironmnet
consumer rights, road safety and other socio economic rights particlarly human rights.<br></li>
<br>
<li> : Organizing seminars, impact studies, workshops, research and awareness campaign <br>
on educational policies, statistics, health, legal issues, women aand children developmental <br>
activities.</li>

<li> : Encouraging sustainable agricultural development and organic farming, Establishing unity</li>
integrity and communal harmony, Encouraging adult education and rural masses and </br>
slum dwellers, working for persons with disablility.</br>
</br>
</ol>
   
     </div>

    </div>

</div>






<div class="container-fluid">
    <div class="row rowsetting">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 row3">
    <ol>
<li> ansitizing destitute women and adolescent girls for rights and entitlements</br></li>
</br>
<li>Providing relief and rehabilitation to the victims of Natural Calamities like floods, and</br></li>
droughts</br>
</br>
<li>Enlighting awareness about HIV/ AIDS, TB, Malaria and conduct medical health camps for </br></li>
the remote rural tribes. </br>
</br>
<li>Promoting scientific temper and establish IT in grass roots.</li>

      

<li> : Encouraging sustainable agricultural development and organic farming, Establishing unity</li>
integrity and communal harmony, Encouraging adult education and rural masses and </br>
slum dwellers, working for persons with disablility.</br>
</br>
</ol>
 </div>

   <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 row4 ">
   
   <img src="img/image6.jpg"  height="420px" width="420px">
   
     </div>

    </div>

</div> 

    <hr>
      <div class="conatiner-fluid  works">
      <h1 class="text-danger text-center">How It Works:</h1>
      <pre class="font-weight-bold">
      1. We are providing direct communication between donator and
         needy person with the help of third person. 
      2. donator can donate foof,cloths,money etc.
      3. Our team member will provide that donated things to needy 
         one or orphange.
      4. functinality of the website:
          User account management:
          1. User registration:
           The application shall allow users to register and create a profile 
          2. User authentication
           When registering, the application shall allow users to authenticate using their 
          user name and password.
          3. User Log in
           Users shall be able deactivate their account 
           Users shall be able log out
          Profile Management:
          The profiles of users shall contain the following:
          • First name
          • Last name
          • Phone number
          • Location
          • Whether they are a Donator or an admin
          2. User profile modification:
          • Users shall be able to edit/delete data on their profiles.
      </pre>
      </div>



<!-- ------------------Our Amazing Team----------------- -->

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Our Team</h1>
			<hr class="red-bar">
		</div>
	</div>
</div>
<hr>


<div class="conatainer">
  
  <div class="row">
    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" style="margin-left:150px" >
       <img src="img/pic1.png">
       <div class="card-body">
    <h5 class="card-title">Prakash Sp</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   <a href="contactus.php"> <button  name="contact" class="btn btn-outline-primary">Contact</button> </a>
  </div>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" >
       <img src="img/pic1.png">
       <div class="card-body">
    <h5 class="card-title">Aaryan Satra</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="contactus.php" class="btn btn-outline-primary">Contact</a>
  </div>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
       <img src="img/pic1.png">
       <div class="card-body">
    <h5 class="card-title">Sujit Sahu</h5>
    <a href="contactus.php"> Hello </a>
    
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="contactus.php" name="contact" onclick="myFunction()" class="btn btn-outline-primary">Contact</a>
    
  </div>
    </div>
  
  </div>
 </div>
 
  </hr>
 
        
  <script>
     function myFunction(){
      
     }
         </script>

  
<?php
   include ('index.php');
?>
  

</body>
</html>