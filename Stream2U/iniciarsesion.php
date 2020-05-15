<?php
if($_POST){

   session_start();
   $usuario = $_POST['nombre'];
   $contraseña = $_POST['contraseña'];
   $username = $_POST['usuario'];
   $usuariosano = trim($usuario);
   $usernamesano = trim($username);
   $contraseñasana = trim($contraseña);
   $_SESSION['usuario'] = $usuariosano;

   if($usuariosano == " " || $usuariosano == null || $usernamesano == "" || $contraseñasana == "" || $usernamesano == null || $contraseñasana == null){
     echo('<script language="javascript"> alert("Por favor revise los datos ingresados");   </script>');
     echo('<script type="text/javascript">window.location="registro.php"; </script>');
     session_destroy();
   }
   else{


     echo('<script language="javascript"> alert("Sesión iniciada");   </script>');

     echo('<script type="text/javascript">window.location="streaming.php"; </script>');

   }
}
else{
  echo('<script type="text/javascript">window.location="registro.php"; </script>');
}
 ?>
