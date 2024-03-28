<?php

define("SEND_PHP_PATH", "/system/send.php");
include('db_con.php');

if (isset($_GET['exit']) && $_GET['exit'] == 1) // Разлогин пользователя
{

    session_destroy();

    js("location.replace('/')");
}
function sid()
{

    return $_SESSION['site_id'];
}

function js($text) //Вывод javascript
{

    echo "<script>$text</script>";
}
function sqlNumRows($result)
{
    if ($result instanceof mysqli_result) {
        return $result->num_rows;
    } else {
        return 0;
    }
}

function get_img_path()
{
    echo '/assets/img/';
}

$connect = mysqli_connect($server, $login, $pass, $db_name);


function sqlQuery($q)
{

    global $connect;

    $res = mysqli_query($connect, $q);

    if (mysqli_error($connect)) msg($q, 'error');

    return $res;
}
function msg($text, $css) //Вывод системных сообщений
{

    if ($text != '') echo "<div class='msg $css'>$text</div>";
}

function customSqlQuery($connect, $q)
{
    $res = mysqli_query($connect, $q);
    if (mysqli_error($connect)) msg($q, 'error');
    return $res;
}
