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
        $producto=$_REQUEST['producto'];
        $fcreacion=$_REQUEST['fcreacion'];
        $estado=$_REQUEST['estado'];
        //llamamos el archivo que contiene la conexion a la base de datos
        include"conexionbase.php";
        $insertardatos=  mysql_query("INSERT INTO productos(producto, fecha_creacion, fecha_actualizacion, estado) VALUES('$producto','$fcreacion','null','$estado')") or die (mysql_error());
        echo "El producto  se registro correctamente";
        ?>
    </center>  
    </body>
</html>