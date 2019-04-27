<?php
session_start();
if($_SESSION['ok']=="ok")
{
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="StyleSheet.css" rel="stylesheet" type="text/css" media="screen" />
<title>inventario Medicamentos</title>  
 <style type="text/css"> 
      body {background: url("Recursos/imagenes/banerm.png") fixed top no-repeat;} 
       #usuario
       {
           width: 284px;
           height: 54px;
           color: #FFFFFF;
       }
.boton {
           font-family: Arial;
           color: #FFFFFF;
           font-size: 14px;
           font-weight: 40;
           text-align: center;
           vertical-align: top;
           background: #6495ED;
           margin: 6 0 5px 0;
           overflow: hidden;
           padding: 5px;
           border-radius: 20px 20px 20px 20px;
           -moz-border-radius: 20px 20px 20px 20px;
           -webkit-border-radius: 10px 10px 10px 10px;
           border: 2px solid #1E90FF;
           height: 35px;
           width: 262px;
           vertical-align: middle;
       }
       .texto        
{font-family: Arial;
 color: #6495ED;
 font-size: 18px;
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
margin: 0 0 25px; 
overflow: hidden; 
padding: px; 
border-radius: 20px 20px 20px 20px; 
-moz-border-radius: 20px 20px 20px 20px; 
-webkit-border-radius: 10px 10px 10px 10px; 
border: 2px solid #1E90FF;}
       </style>
</head>
<body id="main_body">
	

	
		<form id="form_1075005"  method="post" action="inventario.php">
					<div class="form_description">
	       <p>
    
         &nbsp;</p>
            <p>
    
         &nbsp;</p>
            <p>
    
         &nbsp;</p>
            <p>
    
         &nbsp;</p>
			<p></p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="texto" for="element_1">CODIGO DE BARRA </label>
		<div>
			<input id="cc" name="id" class="caja" type="text" maxlength="255" value="" required /> 
		</div> 
		</li>					
					
                    <a href="agregar.php"><input 
            name="agregar" Type=button class=boton  value="Agregar" <a/>&nbsp;&nbsp;
			    <input type="hidden" name="form_id" value="1075005" />
			    &nbsp;&nbsp;<input id="saveForm" class="boton" type="submit" name="submit" value="Buscar" </a>
           &nbsp;&nbsp;&nbsp;&nbsp;<a href="Menu.php"><input 
            name="Inicio" Type=button class=boton  value="Inicio" <a/>			
</ul>
			
		
		</form>	
		<div id="footer">
			
		</div>
	</div>
		
	<style>
	
	table
	{
		border: 2px solid #0000FF;		
		width: 100%;
    }
    
	h3
	{
		color: #4169E1;
		text-align: center;
		text-decoration: line-through;
	}
	img{
		 height: 18px;
         width: 18px;
	}
	
	</style>	
	
	<?php

		if(isset($_POST['submit']))
		{
			include("conexion.php");
			$con=conectarse();
			$id=$_POST['id'];
			$result=$con->query("SELECT * FROM inventario_medicamento WHERE SaveForm='$codigo_barra'");
			
	?>
	
	&nbsp;<center><a href="inventario.php"><Regresar</a></center>
	<div id="form_container" class="texto">
	
		<?php
		if($result->num_rows > 0)
		{
		?>
		
		<table id="form_1075005" cellspacing="8" cellpadding="3">
		
				
		<tr>
		 <td align="center">ID</td>
		 <td align="center">CODIGO DE BARRA</td>
		 <td align="center">NOMBRE</td>
		 <td align="center">PRESENTACION</td>
		 <td align="center">PRECIO</td>
		 <td align="center">STOCK</td>
		</tr>
		
		<?php
		$row = $result->fetch_array();
		?>
			
			<tr>
			 <td align="center"><?php echo $row['id']; ?></td>
			 <td align="center"><?php echo $row['codigo_barra'];?></td>
			 <td align="center"><?php echo $row['nombre']; ?></td>
			 <td align="center"><?php echo $row['presentacion']; ?></td>
			 <td align="center"><?php echo $row['precio']; ?></td>
			 <td align="center"><?php echo $row['stock']; ?></td>
			 <td align="center"><a title=" Eliminar? " href="eliminar_producto.php?id=<?php echo $row['id']; ?>"><font size='5' color="#FF8071">x</font></a>&nbsp <a title=" Editar? " href="editar.php?id=<?php echo $row['id']; ?>">  <img src="recursos/imagenes/edit.jpg">  </a> </td>
			</tr>
			<tr>
				<td align="center" colspan="9"><a href="inventario.php"><--</a></td>
			</tr>
		</table>	
		
	</div>
      
	<?php
	
		}
		else
		{
			echo "<H3>SIN RESULTADOS</H3>";
		}
		}	

		if(!isset($_POST['submit']))
		{
			include("conexion.php");
			$con=conectarse();
			
			$result=$con->query("SELECT *, nombre as nom FROM inventario_medicamento");
			
	?>
	
	<img id="top" src="css/top.png" alt="">
	<center><a href="Inventario.php"><---</a></center>
	<div id="form_container" class="texto">
	
		<?php
		if($result->num_rows > 0)
		{
		?>
		
		<table id="form_1075005" class="appnitro" cellspacing="8" cellpadding="3">
		
				
		<tr>
		 <td align="center">ID</td>
		 <td align="center">CODIGO DE BARRA</td>
		 <td align="center">NOMBRE</td>
		 <td align="center">PRESENTACION</td>
		 <td align="center">PRECIO</td>
		 <td align="center">STOCK</td>
		</tr>
		
		<?php
		while($row = $result->fetch_array())
		{
		?>
			
			<tr>
			 <td align="center"><?php echo $row['id']; ?></td>
			 <td align="center"><?php echo $row['codigo_barra'];?></td>
			 <td align="center"><?php echo $row['nombre']; ?></td>
			 <td align="center"><?php echo $row['presentacion']; ?></td>
			 <td align="center"><?php echo $row['precio']; ?></td>
			 <td align="center"><?php echo $row['stock']; ?></td>
			 <td align="center"><a title=" Eliminar? " href="eliminar.php?id=<?php echo $row['id']; ?>"><font size='5' color="#FF8071">x</font></a>&nbsp <a title=" Editar? " href="editar.php?id=<?php echo $row['id']; ?>">  <img src="recursos/imagenes/edit.jpg">  </a> </td>
			</tr>
		<?php
		}
		?>		
		</table>	
		
	</div>
      
	<?php
		}
		}		
		
	?>	
		
	<img id="bottom" src="css/bottom.png" alt="">
	<center><a href="Inventario.php"><---</a></center>
	</body>
<?php
}
else
{
	header("location: index.php");
}
?>
</html>