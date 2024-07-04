<?php
// Подключаемся к базе данных
include_once $_SERVER['DOCUMENT_ROOT'] . '/system/functions.php';

// Проверяем, был ли отправлен POST-запрос
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Проверяем наличие необходимых данных в POST-запросе
  $id = $_POST['id'];

  // Получаем данные из POST-запроса
  $name = $_POST['name'];

  $profession = $_POST['post'];

  $description = isset($_POST['description']) ? $_POST['description'] : '';

  $photo = $_FILES["file"]["error"] = 4 ?  $_POST['photo_unchanged'] : $_FILES['photo']['name'];


  $photoe =  $_POST['photo_unchanged'];

  // echo gettype($photo);
  // echo gettype($_POST['photo']);
  echo $photo;
  echo $description;


  // Преобразуем в формат, используемый в базе данных
  // $active =  $_POST['active'];
  $active = isset($_POST['active']) && $_POST['active'] == "да" ? "yes" : "no";
  // echo isset($_POST['active']);

  // $link = $_POST['doc_link'];

  // Обработка файла, если он был загружен
  if ($photo) {

    $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/assets/img/doctors/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);

    if (!move_uploaded_file(
      $_FILES["photo"]["tmp_name"],
      $target_file
    )) {
      echo json_encode(array("error" => "Ошибка загрузки файла."));
      exit;
    }
  } else {
    // Оставляем значение фото без изменений
    $photo = $_POST['photo_unchanged'];
  }



  // Подготавливаем SQL-запрос для обновления данных в базе данных
  $sql = "UPDATE doctors SET name=?, profession=?, description=?, photo=?, active=? WHERE id=?";

  // Подготавливаем выражение для выполнения SQL-запроса
  $stmt = $connect->prepare($sql);

  // Привязываем параметры к подготовленному выражению
  $stmt->bind_param("sssssi", $name, $profession, $description, $photo, $active, $id);

  // Выполняем SQL-запрос
  if ($stmt->execute()) {
    // Если запрос выполнен успешно, возвращаем успешный ответ
    echo json_encode(array("success" => true));
  } else {
    // Если возникла ошибка при выполнении запроса, возвращаем сообщение об ошибке
    echo json_encode(array("error" => "Ошибка при обновлении данных в базе данных"));
  }

  // Закрываем подготовленное выражение и соединение с базой данных
  $stmt->close();
  $connect->close();
}
