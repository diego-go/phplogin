<?php
  include_once("maqueta/head.php");
  include_once("maqueta/menu.php");
  ?>
    <div class="row">

        <div id="formularioIngresoAlumno" class="panel panel-primary ochenta auto " style="width: 50%; margin: auto " >
                  <div class="panel-heading">
                      <h3 class="panel-title text-center">
                          Alumnos
                      </h3>
                  </div>
                  <div class="panel-body">
                      <form method="post" action="ingreso.php" id="ingresaUsuario" class="form-horizontal">
                          <div class="input-group marg-bot-20">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="nombres" value="" placeholder="Nombre(s)" required="">
                            </div>
                            <div class="input-group marg-bot-20">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="apellidos" value="" placeholder="Apellido(s)" required="">
                            </div>
                            <div class="input-group marg-bot-20">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input id="login-username" type="email" class="form-control" name="email" value="" placeholder="Email" required="">
                            </div>
                            <div class="input-group marg-bot-20">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-username" type="password" class="form-control" name="pass1" value="" placeholder="password" required="">
                            </div>
                            <div class="input-group marg-bot-20">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-username" type="password" class="form-control" name="pass2" value="" onchange="validaPassword()" placeholder="Confirmar password" required="">
                            </div>
                            <div class="input-group marg-bot-20">
                            <label>
                            Grado de estudio
                                        <select class="form-control" name="gradoEstudio" required="">
                                          <option value=""></option>
                                          <option value="1">Primaria</option>
                                          <option value="2">Secundaria </option>
                                          <option value="3">Preparatoria</option>
                                          <option value="4">Licenciatura</option>
                                          <option value="5">Posgrado</option>

                                        </select>
                            </label>
                            </div>
                            <div  class="input-group marg-bot-20">
                            <label>Genero
                                        <select class="form-control" name="genero" required="">
                                          <option value=""></option>
                                          <option value="1">Hombre</option>
                                          <option value="2">Mujer</option>
                                        </select>
                            </label>
                            </div>
                                    <div class="row text-center">
                              <button class="btn btn-success"> <span class="glyphicon glyphicon-ok"></span> Entrar</button>
                          </div>
                      </form>
                  </div>
                  </div>

<script>
  function validaPassword(){
   // alert("Metodo alerta");
    console.log("Metodo Consola");
  let pass1=  $("input[name=pass1]").val();
  let pass2=  $("input[name=pass2]").val();
  //alert(pass1);
  //alert(pass2);

  if(pass1===pass2){
//    alert("Las contraseñas son iguales");
  }
  else{
    alert("Las contraseñas no son iguales");
    $("input[name=pass2]").val("");
  }

}

</script>
<?php include_once("maqueta/footer.php");?>
