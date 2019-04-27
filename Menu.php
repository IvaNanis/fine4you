<html>
<head> 
<link href="StyleSheet.css" rel="stylesheet" type="text/css" media="screen" />
   <title>Menu Principal</title>
      <style type="text/css"> 
      body {background: url("Recursos/imagenes/INICIO.png") fixed center no-repeat;} 
       #usuario
       {
           width: 284px;
           height: 54px;
       }
       .caja { font-family: Arial; 
color: #6495ED; 
font-size: 14px; 
font-weight: 400; 
text-align: center; 
background: #FFFFFF; 
margin: 0 0 25px; 
overflow: hidden; 
padding: 20px; 
border-radius: 20px 20px 20px 20px; 
-moz-border-radius: 20px 20px 20px 20px; 
-webkit-border-radius: 10px 10px 10px 10px; 
border: 2px solid #1E90FF;}
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
 font-size: 20px;
    background-color: #FFFFFF;
         text-align: center; 
       border: 0;
}
       .style1
       {
           width: 62px;
           height: 55px;
           margin-bottom: 0px;
           margin-left: 0px;
       }
   </style> 
</head>
   <p>
    
         &nbsp;</p>
<form name="Menu Principal" method=get action="menu.php" 
style="height: 500px; width: 500px; margin-left: 267px; margin-top: 210px">
<html>
<body>
<img align="left" alt="" class="style1" 
        src="Recursos/imagenes/CINVENTARIOS.png" />
<td> <a href="Inventario.php"> <input name="Inventario" Type=button class=boton value="INVENTARIO DE MEDICAMENTOS" <a/></td>
<p></p>

    <img align="left" alt="" class="style1" 
        src="Recursos/imagenes/CMEDICOS.png" />
           <a href="cmedicos.php"><input 
            name="cmedicos" Type=button class=boton  value="CONTROL DE MEDICOS" <a/><p style="height: 67px">
        <img align="left" alt="" class="style1" 
        src="Recursos/imagenes/HPACIENTES.png" />
           <a href="pacientes.php"><input 
            name="pacientes" Type=button class=boton  value="HISTORIAL DE PACIENTES" <a/><p style="height: 67px">
        <img align="left" alt="" class="style1" 
        src="Recursos/imagenes/IMAGEN_USUARIOS.png" />
           <a href="usuarios.php"><input 
            name="usuarios" Type=button class=boton  value="USUARIOS" <a/><p style="height: 67px">
        <img align="left" alt="" class="style1" 
        src="Recursos/imagenes/IMAGEN_CERRAR_SESION.jpg" />
           <a href="index.php"><input 
            name="cerrar" Type=button class=boton  value="CERRAR SESION" <a/><p style="height: 67px"></form>
<p>



</body>
 </html>