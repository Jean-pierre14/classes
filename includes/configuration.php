<?php
// session_start();

$username = '';$email = '';$name = '';$pass = '';$cpass = '';

// $ecole = $_SESSION['ecole_name'];

$con = mysqli_connect("localhost", "root", "", "Classes_db") or die('cannot be connect to this Database');
// $select_Class = mysqli_query($con, "SELECT ecole_name FROM ecoles_tb WHERE ecole_name = ${$ecole}");
$class = 'ISOKO LA SOURCE';

