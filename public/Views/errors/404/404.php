<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,
          maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 page</title>
    <link rel="stylesheet" href='http://ureal-project/public/Views/errors/404/404.css'>
    <link rel="icon" type="image/png" sizes="32x32" href="/public/images/errorlogo.webp">
<!--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Days+One">-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">-->
    <style>
        a {
            text-decoration: none;
        }
    </style>

</head>
<body>
<div class="scene">
    <div class = "box">
        <div class = "box__face front">4</div>
        <div class = "box__face back">0</div>
        <div class = "box__face right">4</div>
        <div class = "box__face left">0</div>
        <div class = "box__face top">Error</div>
        <div class= "box__face bottom">0</div>
    </div>
    <div class="shadow"></div>
</div>
<div class="desc">
    <h2>Oops page not found!</h2>
<!--    <button href="--><?php //echo PATH ?><!--" class = "btn">BACK TO HOME</button>-->
<!--    <button onclick="window.location.href = --><?php //echo PATH ?><!--">BACK TO HOME</button>-->
   <button><a href="<?php echo PATH?>" class="button">BACK TO HOME</a></button>
</div>



</body>
</html>



