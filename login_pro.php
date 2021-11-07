<?php
 require_once("config.php"); 
 if(isset($_POST['login'])){ 
 $login1= $_POST['inputusername'];
 $password =$_POST['password'];

 
      $query="Select * from registrationTable where (username='$login1' OR email= '$login1')"; 
     $res=mysqli_query($dbc, $query);
     $count=mysqli_num_rows($res);
     $row=mysqli_fetch_array($res);
     if($count==1){
        $session_id=session_id();
        $_SESSION['auth']=$session_id;

       $role=$row['role'];
        if($role=='donator'){
         $_SESSION["login_sess"]="1"; 

         $_SESSION["login_email"]= $row['email'];
         
          header('Location:hello3.php');
 

        }elseif($role=='admin'){
         header('Location:admin/admin_account.php');
            
        }else{
         header("location:login.php?loginerror=".$login1);
        }
        
     }
     else{ 
        header("location:login.php?loginerror=".$login1);
           }
 
}
        
    
    
?>