<?php

include('db_con.php');

function sqlNumRows($result) {
    if ($result instanceof mysqli_result) {
        return $result->num_rows;
    } else {
        return 0;
    }
}

function get_img_path(){
   echo '/assets/img/';
}
$img_path = 'assets/img/';
$js_path = 'assets/js/';
$css_path = 'assets/css/';

$connect = mysqli_connect($server, $login, $pass, $db_name);


function sqlQuery($q){
  
  global $connect;

  $res = mysqli_query($connect, $q);
  
  if(mysqli_error($connect)) msg($q,'error');
     
  return $res;
}
 function msg($text,$css)//Вывод системных сообщений
 {
  
  if($text!='') echo "<div class='msg $css'>$text</div>";
 
 }

 function customSqlQuery($connect, $q) {
    $res = mysqli_query($connect, $q);
    if (mysqli_error($connect)) msg($q, 'error');
    return $res;
}