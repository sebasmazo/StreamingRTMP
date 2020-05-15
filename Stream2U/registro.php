<?php
  session_start();
  error_reporting(0);
  if($_SESSION['usuario'] != null){
    header('location: streaming.php');
  }
 ?>
<!DOCTYPE html>
<html>

<head>
<title>Registro</title>

</head>

<body style="background-color: cadetblue;"></body>

<link rel="stylesheet" href="styles.css">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<h1>Registro Stream2You </h1>
<section class="form-register">

    <h2>Formulario Registro</h2>
  <form action="iniciarsesion.php" method="post">

      <input class="controls" type="text" name="nombre" id="Nombre" placeholder="Ingrese nombre">
      <input class="controls" type="text" name="usuario" id="Usuario" placeholder="Ingrese usuario">
      <input class="controls" type="text" name="contraseña" id="Contraseña" placeholder="Ingrese contraseña">

      <input type="submit" onclick = "funcion();" value="Registrarse" class="botons">
        <script>
          function funcion(){
            var y = document.getElementById('Usuario').value;
            var z = document.getElementById('Contraseña').value;
            var x = document.getElementById("Nombre").value;
            var xsano = x.trim();
            var ysano = y.trim();
            var zsano = z.trim();
            if(xsano == "" || x == null || ysano == "" || zsano == "" || z == null || y == null){
              alert("Por favor revise los datos ingresados");
            }
            else{
              alert("Bienvenid@, " + x);
            }

          }
        </script>
    <br>

  </form>
  <br>
  <br>
  <p>Si tiene algún problema con el registro, <a class="btn btn-primary mt-3" href="Contactenos.html">Contactenos</a></p>
  

</section>

</body>
</html>
