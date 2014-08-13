<!DOCTYPE html>
<!--
Pagina del formulario para poder ingresar la informacion del producto
-->
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
        echo "<form name='nuevoproducto' method='POST' action='guardarproducto.php'>";
        echo "<table>
            <tbody>
                    <tr>
                            <td>Producto:</td>
                            <td><input type='text' name='producto' placeholder='Nombre del Prducto' required /></td>
                    </tr>
                    <tr>
                            <td>Fecha de Creación:</td>
                            <td><input type='date' name='fcreacion' required /></td>
                    </tr>
                    <tr>
                            <td>Fecha de Actualización:</td>
                            <td><input type='date' name='factualizar' required /></td>
                    </tr>
                    <tr>
                            <td>Estado:</td>
                            <td><input type='radio' value='1' name='estado' checked />Sí <input type='radio' name='estado' value='0' />No</td>
                    </tr>
            </tbody>
        </table>";
        echo "<input type='submit' value='Guardar Información'>";
        echo "</form>";
        ?>
    </center>  
    </body>
</html>
