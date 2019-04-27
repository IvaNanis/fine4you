<!doctype html>
<html>
<head> 
<title> Agregar Medicamento </title>
<html lang="es">
<meta charset="UTF-8">
</head>
<body bgcolor="#FFFFFF">
<style>
h1   {color:#0174DF}
</style>

<?php

if(isset($_POST['submit']))
{
include("conexion.php");
$con=conectarse();

$codigo_barra=$_POST['codigo_barra'];
$nombre=$_POST['nombre'];
$presentacion=$_POST['presentacion'];
$precio=$_POST['precio'];	
$stock=$_POST['stock'];	

$result=$con->query("INSERT INTO inventario_medicamento(codigo_barra, nombre, presentacion, precio, stock) 
VALUES ('$codigo_barra', '$nombre', '$presentacion', '$precio', '$stock')");
if($result>=1)
{
	echo "<center><h1> DATOS ALMACENADOS CON EXITO</h1></center>";
}
else
{
	echo "<center><h1>SE HA PRODUCIDO UN ERROR</h1></center>".$con->error;
}
}
?>
<meta http-equiv='refresh' content='1; url=Agregar.php' />
</body>
</html>