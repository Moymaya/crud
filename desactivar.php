<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>iFrame</title>
    </head>
    <body>
    <center>
		<?php
		 // put your code here
        echo"<h2>Sistema CRUD Productos</h2>";
        echo"<br>";
         //incluimos el archivo menu.html que contiene el menu de la aplicacion
        include "menu.html";
        echo"<br><br>";
		include"conexionbase.php";
		$clave=$_REQUEST['id'];
		$actualizar=mysql_query("UPDATE productos SET estado = '0' WHERE id = '$clave'") or die (mysql_error());
		echo"El registro no se Elimino fisicamente, solo de desactivo.";
		?>
    </center>  
    </body>
</html>