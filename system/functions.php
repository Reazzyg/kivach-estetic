<?php

include('system/db_con.php');


function get_img_path(){
   echo 'assets/img/';
}
$img_path = 'assets/img/';
$js_path = 'assets/js/';
$css_path = 'assets/css/';

$connect = mysqli_connect($server, $login, $pass, $db_name);


function sqlQuery($q){
  
  global $connect;

  $res = mysqli_query($connect, $q);
  
  if(mysqli_error($connect)) msg('error');
     
  return $res;
}