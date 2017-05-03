<?php


include_once "maqueta/head.php";
include_once "maqueta/menu.php";
//print_r($_POST);
session_start();

$_SESSION['username']=$_POST['username']
?>

<div class="text-center">
<h2 class="text-center">Bienvenido</h2>
<div class="row">
<h1><?php echo $_POST['nombres'] ?></h1>


<h2 class="text-center">Tu contraseña es: </h2>

<h1><?php echo $_POST['pass1'] ?></h1>

<?php

include_once "maqueta/footer.php";
