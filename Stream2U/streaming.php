<?php
  session_start(); //Reanuda la sesión

      error_reporting(0); //Esto se usa para evitar que el html muestre los errores en pantalla, solo se hace cuando se acaba el proyecto
      if($_POST){
        $clave = $_POST['clave'];
      }

      if(isset($_SESSION['usuario']) ){
        $nombre = $_SESSION['usuario'];

      }
      else{
        echo 'Usted no tiene autorización <br>';

        echo '<a href="registro.php">Registrese aquí</a>';
        die();
      }

 ?>

<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo "Sesión de " . $_SESSION['usuario'];?></title>
    <script src="http://releases.flowplayer.org/js/flowplayer-3.2.12.min.js"></script>


</head>
<body>
   <?php
    echo '<h1 style="color:grey"> Bienvenid@, ' . $nombre . '<h1>';
   ?>
   <br>
   <br>
   <label>Por favor, inserte la clave de su stream aquí antes de darle reproducir</label>
   <br>
   <form method="post">
     <br>
    <input type="text" name="clave" id="clave" placeholder="Clave del stream">
    <button type="submit">Empezar</button>
   </form>
   <br>
<div class="stream">
   <a  id="player"></a>


   <script>
           $f("player", "http://releases.flowplayer.org/swf/flowplayer-3.2.16.swf ", {
           clip: {
               url: 'rtmp://3.83.102.54/livestream/<?php echo $clave; ?>',
               scaling: 'orig',
               provider: 'rtmp'
           },

           plugins: {
               rtmp: {
                   url: "flowplayer.rtmp-3.2.13.swf",

                   netConnectionUrl: 'rtmp://3.86.232.23/livestream/'
               }
           },
           canvas: {
               backgroundGradient: 'none'
           }
           });
       </script>
</div>

</br>
</br>
<label>PARA TRANSMITIR DEBES DESCARGAR LA APP CAMERA RTMP EN TU CELULAR <br> Datos para transmitir: <br> -StreamName es la clave de tu stream <br> -La url del server tiene la siguiente sintaxis, rtmp://3.83.102.54/livestream </label>
 <br>
 <a href="cerrarsesion.php">Cerrar sesión</a>
</body>
</html>
