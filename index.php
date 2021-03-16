<?php include './header.php';?>
    <div class="container">
        <div class="jumbotron">
            <h2>Welcome
                <?= $username;?>
            </h2>
        </div>
        <div class="body">
            <h2>one page than can containe all data</h2>
            <h2>le 16 mars 2021 au boulot on m'a demander de revoir le siteweb de l'ecole</h2>
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
                <form action="" class="form-row">
                    <div class="form-group col-md-12">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Name of the class" value="<?= $name;?>"
                            class="form-control">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="class">Class</label>
                        <select name="class" id="class" name="class">
                            <option value="">-- select --</option>
                            <option value="P1">P1</option>
                            <option value="P2">P2</option>
                            <option value="P3">P3</option>
                        </select>
                    </div>
                </form>
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