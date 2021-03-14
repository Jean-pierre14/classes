<?php include './header.php';?>
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
                        <p class="text-center">J'ai pas un <a href="registration.php">compte!</a> </p>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
<?php include './footer.php';?>