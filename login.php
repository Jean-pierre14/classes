<?php
    include './includes/configuration.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $class;?></title>
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-5">
                <div class="card card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username">Username or email</label>
                            <input type="text" placeholder="Username or email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success">Log In</button>
                        </div>
                        <p>J'ai pas un <a href="regestration.php">compte!</a> </p>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>