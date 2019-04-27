<?php 
if ( isset($_POST['Menu']) )  
    $url = Menu.php;  

header("Location: $url"); 
exit;