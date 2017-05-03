<?php
  include_once ("maqueta/head.php");
  include_once("maqueta/menu.php");
  session_start();

  ?>
    <div class="row">
      <?php
        print_r($_POST);
        print_r($_SESSION);
      ?>
        <div id="formularioIngresoAlumno" class="panel panel-primary ochenta auto " style="width: 50%; margin: auto " >
                  <div class="panel-heading">
                      <h3 class="panel-title text-center">
                          Registro
                      </h3>
                  </div>
                  <div class="panel-body">
                      <form method="post" action="ingreso.php" id="ingresaUsuario" class="form-horizontal">
                          <div class="input-group marg-bot-20">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Nombre(s)">
                                    </div>
                            <div  class="input-group marg-bot-20">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="contraseña">
                            </div>
                                    <div class="row text-center">
                              <button class="btn btn-success"> <span class="glyphicon glyphicon-ok"></span> Entrar</button>
                          </div>
                      </form>
                  </div>
                  <a href="ingreso.php?nombre=brand" class="btn btn-primary">GET</a>
                  </div>

<?php include_once("maqueta/footer.php");?>
