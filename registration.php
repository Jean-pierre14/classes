<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-5">
                    <div class="card card-body">
                        <h4>Enregistrement</h4>
                        <?php
                            include './includes/configuration.php';
                        ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" placeholder="Username"
                                    value="<?= $username;?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" placeholder="email" value="<?= $email;?>"
                                    class="form-control">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="pass1">Password</label>
                                    <input type="password" name="pass" id="pass1" placeholder="Password"
                                        value="<?= $pass; ?>" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pass2">Confirm Password</label>
                                    <input type="password" name="cpass" id="pass2" placeholder="Confirm Password"
                                        value="<?= $cpass; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                            <p class="text-center">J'ai un <a href="login.php">compte!</a> </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>