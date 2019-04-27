
<html>
<?php
if(isset($_GET['id']))
{
	include("conexion.php");
	$con=conectarse();
	$id=$_GET['id'];
	$result=$con->query("SELECT * FROM inventario_medicamento WHERE id='$id'");
	$row = $result->fetch_array();
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Modificar Datos Del Medicamento</title>
<link rel="stylesheet" type="text/css" media="all">
<script type="text/javascript" src="view.js"></script>
<style type="text/css">   
       body {background: url("Recursos/imagenes/banerm.png") fixed top no-repeat;} 
       #usuario
       {
           width: 284px;
           height: 54px;
           color: #FFFFFF;
       }
       .texto        
{font-family: Arial;
 color: #6495ED;
 font-size: 20px;
    background-color: #FFFFFF;
         text-align: center; 
       border: 0;
}
       .caja { font-family: Arial; 
color: #6495ED; 
font-size: 14px; 
font-weight: 400; 
text-align: center; 
background: #FFFFFF; 
margin: 0 0 0px; 
overflow: hidden; 
padding: 1px; 
border-radius: 20px 20px 20px 20px; 
-moz-border-radius: 20px 20px 20px 20px; 
-webkit-border-radius: 10px 10px 10px 10px; 
border: 2px solid #1E90FF;
          height: 34px;
      }
       .titulo { font-family: Arial; 
color: #FFFFFF; 
font-size: 14px; 
font-weight: 400; 
text-align: center; 
background: #6495ED; 
margin: 0 0 0px; 
overflow: hidden; 
padding: 1px; 
border-radius: 20px 20px 20px 20px; 
-moz-border-radius: 20px 20px 20px 20px; 
-webkit-border-radius: 10px 10px 10px 10px; 
border: 2px solid #1E90FF;
          height: 34px;
      }
   .boton { font-family: Arial; 
color: #FFFFFF; 
font-size: 14px; 
font-weight: 400; 
text-align: center; 
background: #6495ED; 
margin: 0 0 25px; 
overflow: hidden; 
padding: 0px; 
border-radius: 20px 20px 20px 20px; 
-moz-border-radius: 20px 20px 20px 20px; 
-webkit-border-radius: 10px 10px 10px 10px; 
border: 2px solid #1E90FF;
           height: 45px;
           width: 213px;
       }
.texto        
{font-family: Arial;
 color: #6495ED;
 font-size: 28px;
    background-color: #FFFFFF;
         text-align: center; 
       border: 0;
}
</style>

</head>
<body id="main_body" >
	
	<img id="top" src="css/top.png" alt="">
	<div id="form_container">
	
		<form id="form_1075005" class="appnitro"  method="post" action="editar.php"
 style="height: 400px; width: 500px; margin-left: 500px; margin-top: 210px">
					<div class="form_description">
			<h1 class="texto">MODIFICAR DATOS DEL MEDICAMENTO</h1>
			<p></p>
		</div>						
			<ul >
			

		<label class="titulo">ID </label>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input id="cc" name="id" class="caja" type="text" maxlength="255" value="<?php echo $row['id']; ?>" readonly /> 
		

         <p></p>

		<label class="titulo">CODIGO BARRAS </label>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input id="cc" name="codigo_barra" class="caja" type="text" maxlength="255" value="<?php echo $row['codigo_barra']; ?>" required /> 


 <p></p>			

		<label class="titulo">NOMBRE </label>
		&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;
			<input id="cargo" name="nombre" class="caja" type="text" maxlength="255" value="<?php echo $row['nombre']; ?>" required /> 	


 <p></p>

		<label class="titulo">PRESENTACION </label>
        &nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;
			<input id="password" name="presentacion" class="caja" type="text" maxlength="255" value="<?php echo $row['presentacion']; ?>" required />  


 <p></p>

		<label class="titulo">PRECIO </label>
		&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;
			<input id="password" name="precio" class="caja" type="text" maxlength="255" value="<?php echo $row['precio']; ?>" required /> 


 <p></p>

		<label class="titulo">STOCK</label>
		&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;
			<input id="password" name="stock" class="caja" type="text" maxlength="255" value="<?php echo $row['stock']; ?>" required /> 			</select> 
		</div> 

			
	
			    <input type="hidden" name="form_id" value="1075005" />
			    
				<input id="saveForm" class="boton" type="submit" name="submit" value="MODIFICAR" style="height: 40px; width: 150px; margin-left: 300px; margin-top: -200px"/>
     <p></p>
                <td> <a href="menu.php"><input name="menu" Type=button class=boton value="INICIO"style="height: 40px; width: 150px; margin-left: 300px; margin-top: -300px" <a/></td>
<p></p>
                <td> <a href="Inventario.php"><input name="inventario" Type=button class=boton value="REGRESAR"style="height: 40px; width: 150px; margin-left: 300px; margin-top: -150px" <a/></td>
                
			</ul>
		</form>	
		<div id="footer">
			
		</div>
	</div>
	<img id="bottom" src="css/bottom.png" alt="">
	</body>
<?php
}
else
{
	if(isset($_POST['submit']))
	{
		include("conexion.php");
	    $con=conectarse();
		$id=$_POST['id'];
		$codigo_barra=$_POST['codigo_barra'];
		$nombre=$_POST['nombre'];
		$presentacion=$_POST['presentacion'];	
		$precio=$_POST['precio'];	
		$stock=$_POST['stock'];			
		$result=$con->query("UPDATE inventario_medicamento SET codigo_barra='$codigo_barra', nombre='$nombre', presentacion='$presentacion', precio='$precio', stock='$stock' WHERE id='$id'");
        if($result>=1)
{
	echo "<center><h1>DATOS MODIFICADOS CON EXITO</h1></center>";
}
else
{
	echo "<center><h1>SE HA PRODUCIDO UN ERROR</h1></center>".$con->error;
}
	}
?>
	<meta http-equiv='refresh' content='1; url=Inventario.php' />
<?php
}



?>
</html>