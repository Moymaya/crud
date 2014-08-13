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
        /* 
        Recibimos los datos ingresados en el formulario mediante el metodo POST
        */
        $buscar=$_REQUEST['buscar'];
        //llamamos el archivo que contiene la conexion a la base de datos
        include"conexionbase.php";
       //consultamos si existe algun producto con los parametros ingersados
	   $buscar_registros=mysql_query("SELECT * FROM productos WHERE producto LIKE '%$buscar%'") or die (mysql_error());
	   //contamos registros
	   $cuantos_registros=mysql_num_rows($buscar_registros);
		   if($cuantos_registros!=0){
		   echo"<table border='1'>
				<tbody>
					<tr>
						<th>Clave</th>
						<th>Producto</th>
						<th>Fecha de Creación</th>
						<th>Estado</th>
						<th>Accióon</th>
					</tr>";
				for($y=0;$y<$cuantos_registros;$y++){
				$id=mysql_result($buscar_registros,$y,'id');
				$producto=mysql_result($buscar_registros,$y,'producto');
				$fcreacion=mysql_result($buscar_registros,$y,'fecha_creacion');
				$estado=mysql_result($buscar_registros,$y,'estado');
				echo"<tr>
						<td>$id</td>
						<td>$producto</td>
						<td>$fcreacion</td>
						<td>$estado</td>
						<td><a href='modificarproducto.php?id=$id'>Modificar</a></td>
					</tr>";
				}
			echo"</tbody>
			</table>";
		   } else {
		   echo"No se encontrarón resultados de la busqueda: <b>$buscar</b>";
		   }
        ?>
    </center>  
    </body>
</html>