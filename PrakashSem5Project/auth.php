<?php

if(isset($_session['auth']))
{
    header('Location:login.php');
}
?>