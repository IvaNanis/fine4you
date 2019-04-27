
<head> 
<link href="StyleSheet.css" rel="stylesheet" type="text/css" media="screen" />
   <title>Login</title>
      <style type="text/css"> 
      body {background: url("Recursos/imagenes/MARCOINICIO.png") fixed center no-repeat;} 
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
   .boton { font-family: Arial; 
color: #FFFFFF; 
font-size: 14px; 
font-weight: 400; 
text-align: center; 
background: #6495ED; 
margin: 0 0 25px; 
overflow: hidden; 
padding: 20px; 
border-radius: 20px 20px 20px 20px; 
-moz-border-radius: 20px 20px 20px 20px; 
-webkit-border-radius: 10px 10px 10px 10px; 
border: 2px solid #1E90FF;
           height: 57px;
           width: 307px;
       }
       
.texto        
{font-family: Arial;
 color: #6495ED;
 font-size: 20px;
    background-color: #FFFFFF;
         text-align: center; 
       border: 0;
}
   </style> 
</head>
<form name="Fine4You" method=get action="form.php"></form>
<body>
<center><p>
    &nbsp;</p>
<p>
    &nbsp;</input></p>
        <p>
    
         &nbsp;</p>

    <p>
    
         &nbsp;</p>
    <p>
    
         &nbsp;</p>
    <p>
    
         &nbsp;</p>
    <p>
    
         &nbsp;</p>
    <p>
    
         &nbsp;</p>
     <p>
    
         &nbsp;</p>

    <p>
    
         &nbsp;</p>
    <input type="text" class="texto" value="INICIAR SESION" input><p>
    &nbsp;<input id="usuario" name="user" type="text" class="caja" value="INGRESE SU USUARIO" onclick="this.value=''";></p>
    <p>
    
    <input id="contrasena" align="middle" type="text" name="pass" class="caja" value="INGRESE SU CONTRASEÑA" onclick="this.value=''"; 
            style="width: 314px; height: 56px;"></p>


<td> <a href="Menu.php"><input name="Menu" Type=button class=boton value="ACEPTAR"  <a/></td>

</center>
</body>
<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['cc']) || empty($_POST['pass'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['cc'];
$password=$_POST['pass'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include("conexion.php");
$con=conectarse();
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = $con->real_escape_string($username);
$password = $con->real_escape_string($password);


// SQL query to fetch information of registerd users and finds user match.
$query = $con->query("select * from usuario where contrasena='$contrasena' AND usuario='$usuario'");
$rows = $query->num_rows;
if ($rows == 1) {
$r=$query->fetch_array();
$nomusuario = $r['usuario'];
$ape = $r['contrasena'];
$rol = $r['idrol'];
$_SESSION['ok']="ok";
$_SESSION['nomusuario']=$nom; // Initializing Session
$_SESSION['apeusuario']=$ape;
$_SESSION['rol']=$rol;
$query->free();
header("location: menu.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
header("location: index.php"); 
}

}
}
?>
 </html>
 
