<?php

$host = "localhost";
$User = "root";
$pass = "Raf@2002";


$db = "voleibolmalaga";

$conexion = mysqli_connect($host, $User, $pass, $db);

if (!$con) {
   echo "Conexion Fallida"; 
}
