<?php
    session_start();
    session_destroy(); //Cierra sesión
    echo('<script language="javascript"> alert("Sesión cerrada");   </script>');
    echo('<script type="text/javascript">window.location="registro.php"; </script>');
?>
