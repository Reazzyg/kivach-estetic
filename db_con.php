<?php

$server = "127.0.0.1";
$login = "root";
$pass = "";
$db_name = "estetic";

$link = mysqli_connect($server, $login, $pass, $db_name);

if(!$link){
  echo "xyi";
}



?>