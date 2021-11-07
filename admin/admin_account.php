<!DOCTYPE html>
<?php

$dbHost = 'localhost';
$dbName = 'sem5';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
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
<link rel="stylesheet" href="admin_account.css">
</head>
<body>
<nav class="navbar navbar-expand-md sticky-top">
                <div class="container">
                  <a href="" class="navbar-brand text-warning font-weight-bold">Admin Dashboard</a>
                  <button class="navbar-toggler" type="button-outline-primary" data-toggle="collapse" data-target="#collapsenavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a href="admin_account.php" class="nav-link text-black font-weight-bold">Registered Uers</a>
                      </li>
                      <li class="nav-item">
                        <a href=""  class="nav-link text-black font-weight-bold">Donated Amount</a>
                      </li>
                      <li class="nav-item">
                        <a  href="admin/donated_things.php" class="nav-link text-black font-weight-bold">Donated Things</a>
                        </li>
                        <li class="nav-item">
                            <a href="login.php" class="nav-link text-danger font-weight-bold">Logout</a>
                            </li>
                            
                        </ul>
     </div>
          </div>
     </nav>
   
     
    <div class="container">
        <h3> Registered User </h3>
        <hr>
    <table type="border" class="table">
  <thead>
    <tr>
      <th>Sr No</th>
      <th>Name</th>
      <th>Mobile No.</th>
      <th>Email</th>
      <th>city</th>
      <th>Action</th>
      
    </tr>
  </thead>
  <tbody>
      <?php 
      $i=1;
      $query="Select * from registrationTable";
      $res=mysqli_query($dbc, $query);
      $count=mysqli_num_rows($res);
      if($count>0)
      {
      while ($row=mysqli_fetch_array($res)){

      

      ?>
    <tr >
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row['fname']; ?></td>
      <td><?php echo $row['mobile']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['city']; ?></td>
      <td><a href="edit_profile.php?id=<?php echo $row['id'];?>">Edit</a> | 
      <a href="delete_user.php?id=<?php echo $row['id'];?>">Delete</a></td>
    </tr>
    
     <?php $i++; }} else{
         echo 'no data found';
     }
     ?>
  </tbody>
</table>
    </div>
</body>
</html>