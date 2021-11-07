<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/news.css">

</head>
<body>
    <?php

     $url="https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=de9e7aefa51545a09e9ca8bc1cbdb733";
    $response=file_get_contents($url);
    $NewsData=json_decode($response);


    ?>
    <div class="jumbotron">
        <h1>Google news Api |php </h1>
    </div>
    <div class="container-fluid">
        <?php 
        foreach($NewsData->articles as $News)
        {

        ?>
        <div class="row NewsGrid">
            <div class="col-md-3">
            <img src="<?php echo $News-> urlToImage ?>" alt="" >
            </div>
            <div class="col-md-3">
                <h2>tite : <?php echo $News-> title ?> </h2>
                <h5>Description : <?php echo $News-> description ?></h5>
                <p>Content :  <?php echo $News-> content ?></p>
                <h6>Aurther:  <?php echo $News-> author ?></h6>
                <h6>Published :  <?php echo $News-> publishedAt ?></h6>
            </div>
        </div>
    
        <?php
        }
        ?>
    </div>

</body>
</html>