
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Nuevo Medicamento</title>
<link rel="stylesheet" type="text/css" href="css/view.css" media="all">
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
	
		
		<form id="form_1075005" class="appnitro"  method="post" action="Agregar2.php"
        style="height: 400px; width: 500px; margin-left: 500px; margin-top: 210px">
					<div class="form_description">
                    <h1><a class="texto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NUEVO MEDICAMENTO</a></h1>
			<p></p>
  <p>
    
         &nbsp;</p>

 
		</div>						
			<ul >
					
		
		<label class="titulo">CODIGO BARRAS </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			<input id="cargo" name="codigo_barra" class="caja" type="text" maxlength="255" onclick="this.value=''" value="INGRESE CODIGO BARRAS"  required /> 
		
        <p></p>

		<label class="titulo" for="element_4">NOMBRE </label>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;
			<input id="password" name="nombre" class="caja" type="text" maxlength="255" onclick="this.value=''" value="INGRESE NOMBRE" required /> 
		
        <p></p>
		
		<label class="titulo" for="element_4">PRESENTACION </label>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;
	
			<input id="password" name="presentacion" class="caja" type="text" maxlength="255" onclick="this.value=''" value="INGRESE PRESENTACION" required /> 
		
		
        <p></p>
	
		<label class="titulo" for="element_4">PRECIO </label>&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;
	
			<input id="password" name="precio" class="caja" type="text" maxlength="255" onclick="this.value=''" value="INGRESE PRECIO" required /> 
		
		<p></p>

        
		<label class="titulo" for="element_4">STOCK </label>&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;
		
			<input id="password" name="stock" class="caja" type="text" maxlength="255" onclick="this.value=''" value="INGRESE STOCK" required /> 
</select> 		
	</div> 
		
			
				
			    <input type="hidden" name="form_id" value="1075005" />
			    
				<input id="saveForm" class="boton" type="submit" name="submit" value="AGREGAR"style="height: 40px; width: 150px; margin-left: 300px; margin-top: -250px" />
                <p></p>
                <td> <a href="Menu.php"><input name="menu" Type=button class=boton value="INICIO" style="height: 40px; width: 150px; margin-left: 300px; margin-top: -350px"<a/></td><p></p>
                <td> <a href="Inventario.php"><input name="inventario" Type=button class=boton value="REGRESAR"style="height: 40px; width: 150px; margin-left: 300px; margin-top: -200px" <a/></td>
                
			</ul>
		</form>	
		<div id="footer">
			
		</div>
	</div>

	</body>

</html>