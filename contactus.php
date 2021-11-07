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
    <link rel="stylesheet" href="css/contact.css">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-md sticky-top ">
                <div class="container">
                  <a href="" class="navbar-brand text-warning font-weight-bold">NO HUNGER</a>
                  <button class="navbar-toggler" type="button-outline-primary" data-toggle="collapse" data-target="#collapsenavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a href="hello3.php"  class="nav-link  font-weight-bold">HOME</a>
                      </li>
                      <li class="nav-item">
                        <a href="about.php"  class="nav-link  font-weight-bold">ABOUT US</a>
                      </li>
                      
                        <li class="nav-item">
                            <a href="GALLERY.PHP" class="nav-link  font-weight-bold">GALLERY</a>
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
  







				  <div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1 text-center">
                    Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Help</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit"name="send" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>Ekta Nagar, Inc.</strong><br>
                Shivneri road mankhurd </br>
                Mandala Mumbai 40043
                <br>
                <abbr title="Phone">
                    P:</abbr>
                (865) 720 -6737
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:prajapatiprakash81216@gmail.com">prajapatiprakash81216@gmail.com"</a>
            </address>
            </form>
        </div>
    </div>
</div>
 <?php 
 if(isset($_POST['send']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $query="insert into contact values('','$name','$email','$subject','$message')";
    $result=mysqli_query($dbc,$query);
    if($result){
        echo 'your message has been received';
    }
}
?>

<?php
   include ('index.php');
?>

</body>
</html>