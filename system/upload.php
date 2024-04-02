<?php

// Здесь нужно сделать все проверки передаваемых файлов и вывести ошибки если нужно

// Переменная ответа

$data = array();

if (isset($_GET['uploadfiles'])) {
  $error = false;
  $files = array();

  $uploaddir = $_GET['dir']; // . - текущая папка где находится submit.php




  // Создадим папку если её нет

  if (!is_dir($uploaddir)) mkdir($uploaddir, 0777);

  // переместим файлы из временной директории в указанную
  $i = 0;
  foreach ($_FILES as $file) {
    $i++;
    $f = explode(".", basename($file['name']));

    $f = $f[count($f) - 1];
    $n = strtotime(Date("Y-m-d H:i:s")) . "$i." . $f;



    if (move_uploaded_file($file['tmp_name'], $uploaddir . $n)) {
      $files[] = realpath($uploaddir . $n);
    } else {
      $error = true;
    }
  }

  $data = $error ? array('error' => 'Ошибка загрузки файлов.') : array('files' => $files);

  echo json_encode($data);
}
