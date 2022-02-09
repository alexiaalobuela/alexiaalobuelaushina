<html>
 <head>
  <title>Primer proyecto en GitHub</title>
 </head>
 <body>

<?php
    if(isset($_POST['enviar'])){
        echo "<h1>BIENVENID@ ".$_POST['nombre']."</h1>";
    }
    else{
        null;
    }
?>
 <form action="" method="post">
 <p>Introduzca su nombre: <input type="text" name="nombre" /></p>
 <p><input type="submit" name="enviar" value="enviar"/></p>
</form> 

<p>Alexia Alobuela Ushiña - Despliegue</p>

 </body>
</html>