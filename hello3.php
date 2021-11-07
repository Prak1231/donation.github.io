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
    <title>donor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<link rel="stylesheet" href="css/hellocss.css">

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
                        <a href=""  class="nav-link text-white font-weight-bold">HOME</a>
                      </li>
                      <li class="nav-item">
                        <a href="about.php"  class="nav-link text-white font-weight-bold">ABOUT US</a>
                      </li>
                      <li class="nav-item">
                        <a  href="gallery.php" class="nav-link text-white font-weight-bold">GELLERY</a>
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

               

 <!-- +++++++++++++++++++++++++++++++Header section===================================================== -->


                 <div class="container-fluid headerc" style="margin-bottom:50px;">
                     <div class="row" >
                         <div class="col-sm-6 col-lg-6 col-md-6 col-xl-6">
                         <h1 style="margin-top:150px; margin-left:10px; font-family="Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif";>Making a donation is the ultimate sign of solidarity. Action speak louder than word </h1>
                      <h3 class="font-weight-bold" style="margin-left:100px; text-transform: uppercase;">Happy India</h3></br>
                      <button class="btn btn-outline-primary btn1" style="margin-left:80px; height:40px; width:180px;">Donate Now</button>
                 </div>
                         <div class="col-sm-6 col-lg-6 col-md-6 col-xl-6">
                         <img src="img/donate.jpg" height="500px" width="600px">
                         </div>
                         
                     </div>
                 </div>






  <!-- ===============================================Donatation Section========================================= -->
 
  
 
    












<?php
 include ('prac.php');
 ?>











     <!-- ++++++++++++++++++++++++++++++++++=============About Us======================================== -->








     <hr>
          <div class="container-fluid">
	<div class="row" >
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center font-weight-bold">ABOUT US</h1>
			<hr class="red-bar">
		</div>
	</div>
</div>
    
<div class="container-fluid">
    <div class="row ">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 row1">
    <img src="img/aboutus1.png">
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

   <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 row4">
   
   <img src="img/image6.jpg"  height="420px" width="420px">
   
     </div>

    </div>

</div> 

    <hr>
      <div class="conatiner-fluid  works" >
      <h1 class="font-weight-bold text-center">How It Works:</h1>
      <hr>
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

      <hr>
          <div class="container-fluid">
	<div class="row" >
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center font-weight-bold">NEWS</h1>
			<hr class="red-bar">
		</div>
	</div>
</div>
    
      <div class="container-fluid">
 <div class="row" style="margin-top:50px; margin-bottom:30px;">
   <div class="col-sm-3 col-md-3 col-xl-3 col-lg-3">
      <iframe src="https://zeenews.india.com/video/india/tears-instead-of-smiles-on-peoples-faces-due-to-monsoon-storm-of-crisis-from-up-to-mp-2394865.html" height="200px" title="W3Schools Free Online Web Tutorials">
</iframe>
</div>
<div class="col-sm-3 col-md-3 col-xl-3 col-lg-3">
<iframe src="https://zeenews.india.com/world/3-4-million-people-to-suffer-hunger-in-myanmar-in-coming-six-months-world-food-programme-2356870.html" height="200px"> </iframe>
</div>
<div class="col-sm-3 col-md-3 col-xl-3 col-lg-3">
<iframe src="https://www.indiatvnews.com/india" height="200px"> </iframe>

</div>
<div class="col-sm-3 col-md-3 col-xl-3 col-lg-3">
<iframe src="https://zeenews.india.com/india" height="200px"> </iframe>

</div>


</div>
</div>
      
   <
      <?php
   include ('get.php');
?>


      <?php
   include ('index.php');
?>
</body>
</html>