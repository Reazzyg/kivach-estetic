<?php

session_start();
error_reporting(E_ALL);
// ini_set(display_errors);

require_once('../system/db_con.php');
include "../system/functions.php";
require_once('admin.php');

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Админ</title>
  <link rel="stylesheet" href="/assets/css/normalize.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <!-- <script src="/assets/js/admin.js?v=<?php echo time(); ?>"></script> -->


</head>
<style>

</style>


<body class="admin">

  <?
  auth();
  menu();
  admin();
  ?>

  <script type="module" src="/admin/js/admin.js?v=<?php echo time(); ?>"></script>
  <script type="module" src="/admin/js/main.js?v=<?php echo time(); ?>"></script>
  <!-- <script type="module" src="/assets/js/validation.js?v=<?php echo time(); ?>"></script> -->

</body>

</html>