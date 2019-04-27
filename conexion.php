<?php
function conectarse()
{
$mysqli = new mysqli("svr.systems", "svrsyste_analisi", "aTC()EUK_}u1", "svrsyste_analisis_sistemas");	
if ($mysqli->connect_errno)
{
echo'ERROR CONECTANDO CON EL SERVIDOR' . $mysqli->connect_errno ;
exit();
}
return $mysqli;
}
conectarse();
?>
