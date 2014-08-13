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
        echo "<form name='nuevoproducto' method='POST' action='buscarproducto.php'>";
        echo "<table>
            <tbody>
                    <tr>
                            <td>Buscar Producto:</td>
                            <td><input type='search' name='buscar' placeholder='Buscar por nombre ' required /></td>
                    </tr>
            </tbody>
        </table>";
        echo "<input type='submit' value='Buscar'>";
        echo "</form>";
        ?>
    </center>  
    </body>
</html>
