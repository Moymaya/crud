<?php
/* 
Conexion a la Base de Datos.
 */
$conexion = mysql_connect("localhost","root","") or die ("Error de hosting");
$base= mysql_select_db("productos",$conexion) or die ("Error en base");
//esta linea nos devuelve acentos y caracteres especiales almacenados en la base
mysql_query("SET NAMES 'utf8'");
?>
