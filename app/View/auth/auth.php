<?php
use Model\User;
require_once APP . '/Model/User.php';
//
$model = new User();
$model->checkAuth();
//
//pp($_POST['full_name']);
//pp($_SESSION['full_name']);
////?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/app/View/auth/auth.css">
    <link rel="icon" href="/public/images/logo.png">
    <title>Authentication</title>
</head>
<body>
<form action="" method="post">
    <div class="input-form">
        <div class="h2"><h2>Authorization</h2></div><br>
        <input type="text" name="full_name" placeholder="Головач Лена"> <br>
        <input type="text" name="unique_code" placeholder="lestnede97690hiiu31"> <br>
        <div class="button">
            <input type="submit" name="submit">
        </div>
    </div>

</form>

</body>
</html>
