<?php

$archivo = "../../".$_POST['archivo'];
$url_nueva = "../../".$_POST['url_nueva'];
$filenew = $_POST['filenew'];

   rename($archivo, $url_nueva."/".$filenew);

?>