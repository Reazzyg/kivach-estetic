<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/system/functions.php';

// Включаем отображение ошибок (для отладки)
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $post = $_POST['post'];
  $description = $_POST['description'];
  $photo = isset($_FILES['photo']['name']) ? $_FILES['photo']['name'] : null;
  $active = isset($_POST['active']) ? 'yes' : 'no';
  $link = $_POST['doc_link'];

  // Логируем данные формы
  error_log("Name: $name, Post: $post, Description: $description, Photo: $photo, Active: $active, Link: $link");

  // Обработка файла
  if ($photo) {
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/assets/img/doctors/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    if (!move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
      echo json_encode(array("error" => "Ошибка загрузки файла."));
      exit;
    }
  }

  // Вставка данных в базу
  $sqlDoctor = "INSERT INTO doctors (name, profession, description, link, photo, active) VALUES (?, ?, ?, ?, ?, ?)";
  if ($stmt = $connect->prepare($sqlDoctor)) {
    $stmt->bind_param("ssssss", $name, $post, $description, $link, $photo, $active);

    if ($stmt->execute()) {
      // Создание файла в /doctors
      $pageDirectory = $_SERVER['DOCUMENT_ROOT'] . '/doctors/';
      $pageFileName = $pageDirectory . basename($link);

      if (!is_dir($pageDirectory)) {
        mkdir($pageDirectory, 0755, true);
      }

      // Данные для шаблона
      $templateData = array(
        'name' => $name,
        'photo' => "/assets/img/doctors/" . $photo,
        'description' => $description
      );

      // Использование функции load_template для создания страницы
      $pageContent = load_template('page-doctor', $templateData, false);

      if (file_put_contents($pageFileName, $pageContent) === false) {
        echo json_encode(array("error" => "Ошибка создания файла страницы."));
        exit;
      }

      echo json_encode(array("success" => true));
    } else {
      echo json_encode(array("error" => "Ошибка при выполнении запроса: " . $stmt->error));
    }

    $stmt->close();
  } else {
    echo json_encode(array("error" => "Ошибка подготовки запроса: " . $connect->error));
  }
  exit;
} else {
  echo json_encode(array("error" => "Неправильный метод запроса."));
  exit;
}
