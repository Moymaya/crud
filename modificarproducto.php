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
        echo "<form name='nuevoproducto' method='POST' action='guardarmodidicaciones.php'>";
		$id=$_REQUEST['id'];
		include"conexionbase.php";
		$datos=mysql_query("SELECT * FROM productos WHERE id='$id'") or die (mysql_error());
		$producto=mysql_result($datos,0,'producto');
		$fcreacion=mysql_result($datos,0,'fecha_creacion');
		$factualizar=mysql_result($datos,0,'fecha_actualizacion');
		$estado=mysql_result($datos,0,'estado');
		  echo "<table>
            <tbody>
                    <tr>
                            <td>Clave:</td>
                            <td><input type='text' name='clave' value='$id' required readonly/></td>
                    </tr>
                    <tr>
                            <td>Producto:</td>
                            <td><input type='text' name='producto' value='$producto' required /></td>
                    </tr>
                    <tr>
                            <td>Fecha de Creación:</td>
                            <td><input type='text' name='fcreacion' value='$fcreacion' required /></td>
                    </tr>
                    <tr>
                            <td>Fecha de Actualización:</td>
                            <td><input type='date' name='factualizar' required /></td>
                    </tr>
                    <tr>
                            <td>Estado:</td>";
						if($estado=='1'){
						echo "<td><input type='radio' value='1' name='estado' checked />Sí <input type='radio' name='estado' value='0' />No</td>";
						} else {
						echo "<td><input type='radio' value='1' name='estado'/>Sí <input type='radio' name='estado' value='0' checked />No</td>";
						}
			echo"</tr>	
            </tbody>
        </table>";
	echo "<input type='submit' value='Guardar Información'>";
	echo"</form>";
		?>
    </center>  
    </body>
</html>