<?php
		include_once"maqueta/head.php";
		include_once"maqueta/menu.php";
  		print_r($_post);
  		session_start();
  		$session['username']=$_post['username'];
  		print_r($_GET);
  ?>

  <h3>Bienvenido:</h3>

  <h1> <?php echo $_post['username'] ?> </h1>
  <h1> Tu contraseña es: </h1>
<h1> <?php echo $_post['password'] ?> </h1>

  <?php include_once"maqueta/footer.php";?>
