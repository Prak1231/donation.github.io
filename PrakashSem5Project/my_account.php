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
  $user_id=$res['id'];
$username = $res['username']; 
$fname = $res['fname'];   
$mobile = $res['mobile'];  
$email = $res['email'];  
$city=$res['city'];
$image=$res['image'];
}
 ?> 
<html>
<head>
    <title> My Accout- Donor </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/my_account.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



</head>
<body>
<nav class="navbar navbar-expand-md  sticky-top">
                <div class="container">
                  <a href="" class="navbar-brand text-warning font-weight-bold">User Dashboard</a>
                  <button class="navbar-toggler" type="button-outline-primary" data-toggle="collapse" data-target="#collapsenavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="hello3.php" class="nav-link text-black font-weight-bold">HOME</a>
                      </li>
                      <li class="nav-item">
                        <a href="my_account.php" class="nav-link text-black font-weight-bold">PROFILE</a>
                      </li>
                      <li class="nav-item">
                        <a href="u_history.php" onclick="myFunction()" class="nav-link text-black font-weight-bold">HISTORY</a>
                      </li>
                     
                        <li class="nav-item">
                            <a href="login.php" onclick="myFunction()"class="nav-link text-danger font-weight-bold">LOGOUT</a>
                            </li>
                            
                        </ul>
     </div>
          </div>
     </nav>





     <!-- ========================details============================================ -->
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-4">
  <!-- Sidebar -->
<div class="w3-sidebar w3-light-gray w3-bar-block" style="width:20%">
  <h4 class="w3-bar-item font-weight-bold"> <a href="update_photo"><img src="<?php echo $image;?>"style="color:blue;border-radius:50%;height:30px;width:30px;"> </a><span class=""> <?php echo $username;?></span> 
</h4>
   ----------------------------------------
  <a href=""  class="w3-bar-item w3-button font-weight-bold text-danger">Profile</a>

  <a href="edit_details.php?id=<?php echo $user_id;?>" class="w3-bar-item w3-button font-weight-bold text-danger">Update</a>
  <a href="delete_account.php?id=<?php echo $user_id;?>" class="w3-bar-item w3-button text-danger font-weight-bold">Delete Account</a>
  <a href="u_history.php?id=<?php echo $user_id;?>" class="w3-bar-item w3-button text-danger font-weight-bold">History</a>
  <a href="login.php" class="w3-bar-item w3-button text-danger font-weight-bold">Logout</a>

</div>

        </div>
        <div class="col-sm-4">
     <form action="login_process.php" method="POST">
  <div class="login_form">
  <br> 
     
          <h3> Welcome! <span style="color:#33CC00"><?php echo $username; ?></span> </h3>
         
              
             <!-- <img class="text-center" src="<?php echo $image; ?>" style="color:blue;border-radius:50%;height:100px;width:100px;"> -->
          
          <table class="table">
          <tr>
            <td class="text-center">
            <a href="update_pic.php"> <img  src="<?php echo $image; ?>" style="color:blue;border-radius:50%;height:120px;width:120px;"></a>
           </td>
         </tr> 
          <tr>
              <th>Name </th>
              <td><?php echo $fname; ?></td>
          </tr>
          <tr>
              <th>Mobile </th>
              <td><?php echo $mobile; ?></td>
          </tr>
          <tr>
              <th>Username </th>
              <td><?php echo $username; ?></td>
          </tr>
           <tr>
              <th>Email </th>
              <td><?php echo $email; ?></td>
          </tr>
          <tr>
              <th>City </th>
              <td><?php echo $city; ?></td>
          </tr>
          </table>
        </div>
        <div class="col-sm-4">
        </div>
    </div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>