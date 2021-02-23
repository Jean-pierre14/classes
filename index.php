<?php include('./config/datas.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>
        <?= $class; ?>
    </title>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h2>Welcome
                <?= $username;?>
            </h2>
        </div>
        <div class="body">
            <aside>
                <!-- <h3>aside side</h3> -->
                <form action="" method="post" class="inline-form">
                    <input type="search" name="search" id="search" placeholder="Searching..." class="form-control">
                    <input type="submit" value="Search" class="btn btn-success">
                </form>
                <div class="btn-group">
                    <a href="?add=addClass" class="my-3 btn btn-sm btn-block btn-primary">Add class</a>
                    <a href="?add=addstudent" class="my-3 btn btn-sm btn-block btn-info">Add Student</a>
                </div>
            </aside>
            <section>
                <!-- <h3>section side</h3> -->
                <?php if(isset($_GET['add'])):?>
                    <h3>Add form</h3>
                    <?php if($_GET['add'] == 'addClass'):?>
                        <h3>add class</h3>
                    <?php elseif($_GET['add'] == 'addstudent'):?>
                        <h4>add student</h4>
                    <?php endif;?>    
                <?php else:?>
                        <p class="alert alert-warning">data</p>
                <?php endif;?>
            </section>
        </div>
    </div>
</body>

</html>