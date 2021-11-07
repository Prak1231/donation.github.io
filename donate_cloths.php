<!DOCTYPE html>

<?php require_once("config.php"); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="css/donate.css">
</head>
<body>
<?php
  include ('donationnavbar.php');
  ?>
 <div class="container " style="padding:20px; background-color:whitesmoke;">
     <div class="row">
         
         <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6">
             <form method="POST">
         <h4 class="text-primary font-weight-bold">CLOTHS DONATION</h4>
         <hr>
         
          <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
         <div class="form-group">
         <?php 
             $user_id=$_GET['id'];
            $query="Select*from registrationTable where id='$user_id'"; 
             $res=mysqli_query($dbc,$query);
             $row=mysqli_fetch_array($res);
          ?>
                <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
                            <label for="name">
                                Name</label>
                            <input type="text" name="f_name" class="form-control" value="<?php echo $row['fname'];?>" required="required" readonly/>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" name="email" class="form-control" value="<?php echo $row['email'];?>" required="required" readonly /></div>
                        </div>
                        <div class="form-group">
                            <label for="name">
                                Address</label>
                            <textarea name="f_address" id="message" class="form-control" rows="5" cols="10" required="required"
                                placeholder="Address"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="city">
                                City</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="text" class="form-control" value="<?php echo $row['city'];?>" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="items">
                                Items</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="text" name="items" class="form-control" id="items" placeholder="Enter items" required="required" /></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="description">
                                Description</label>
                            <textarea name="description" id="description" class="form-control" rows="3" cols="8" required="required"
                                placeholder="Address"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="collect" class="text-primary ">
                                HOW WE COLLECT YOUR DONATION</label></br>
                          <input type="radio" name="collect" value="hello" >  I'LL COME TO YOUR ORGANIZATION</span><br>
                          <input type="radio" name="collect" value="hello" > PICKUP IT FROM MY ADDRESS<br>
                       
                        </div></br>
                       <button class="btn btn-outline-primary" name="donate"> Donate </button>
</form>
         </div>

         <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6">
             <?php
             if(isset($_POST['donate'])){
                 $name=$_POST['f_name'];
                 $email=$_POST['email'];
                 $address=$_POST['f_address'];
                 $items=$_POST['items'];
                 $des=$_POST['description'];


                 $query="insert into donationTable values('','$name','$email','$address','$items','$des')";
                 $result=mysqli_query($dbc,$query);
             }
                 ?>
         
             <?php
                 if($result){
                   ?>  
                 <img src="img/confirm.svg" height="600px" width="400px">
                   <h2 class="text-center text-danger"> Your Donation Has been recorded </h2>
              <?php  
                 }
              ?>

             
                
         </div>
     </div>
 </div>
</body>
</html>