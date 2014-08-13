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
		$clave=$_REQUEST['clave'];
		$producto=$_REQUEST['producto'];
		$fcreacion=$_REQUEST['fcreacion'];
		$actualizar=$_REQUEST['factualizar'];
		$estado=$_REQUEST['estado'];
		$actualizar=mysql_query("UPDATE productos SET producto = '$producto', fecha_creacion = '$fcreacion', fecha_actualizacion = '$actualizar', estado = '$estado' WHERE id = '$clave'") or die (mysql_error());
		echo"El registro se Modifico Correctamente";
		?>
    </center>  
    </body>
</html>