<?php

include("conexion.php");
			$con=conectarse();
			$user=$_POST['user'];
            $pass=$_POST['pass'];
            $result=$con->query("SELECT * FROM inventario_medicamento WHERE codigo_barra='$codigo'");
php?>