<?php

$error = $_SERVER['REDIRECT_STATUS'];

$error_title = '';
$error_message = '';

if($error == 404){
    $error_title = "404 page not Found";
    $error_message = "This file doesn't existe";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 page not found</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container text-center">
            <?= $error_title; ?>
            <?= $error_message; ?>
            <a href="">Back</a>
        </div>
    </div>
</body>
</html>