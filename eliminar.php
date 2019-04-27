<?php
session_start();
//if($_SESSION['rol']=="Administrador")
if(isset($_GET['id']))
{
$id = $_GET['id'];	
include("conexion.php");
$con=conectarse();
$con->query("DELETE FROM inventario_medicamento WHERE id='$id'");
}
else
{
	?>
			<script language="javascript"type="text/javascript">
						alert("Usuario no autorizado");
			</script>
			<meta http-equiv='refresh' content='1; url=Inventario.php' />
	<?php
	//header("location: inventario.php");
}
?>
<meta http-equiv='refresh' content='0; url=Inventario.php' />