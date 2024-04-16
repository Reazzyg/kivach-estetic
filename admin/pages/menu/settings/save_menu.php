<?php
// Проверяем, был ли отправлен POST-запрос
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Проверяем наличие необходимых данных в POST-запросе
  if (isset($_POST['parent_id'], $_POST['name'], $_POST['link'])) {
    // Получаем данные из POST-запроса
    $parent_id = $_POST['parent_id'];
    $name = $_POST['name'];
    $link = $_POST['link'];

    // Подключаемся к базе данных
    include_once $_SERVER['DOCUMENT_ROOT'] . '/system/functions.php';

    // Проверяем, является ли элемент новым или существующим
    if (isset($_POST['id'])) {
      // Обновляем существующий элемент
      $id = $_POST['id'];
      // Подготавливаем SQL-запрос для обновления данных в базе данных
      $sql = "UPDATE menu_items_new SET name=?, link=?, parent_id=? WHERE id=?";
      // Подготавливаем выражение для выполнения SQL-запроса
      $stmt = $connect->prepare($sql);
      // Привязываем параметры к подготовленному выражению
      $stmt->bind_param("ssii", $name, $link, $parent_id, $id);
    } else {
      // Добавляем новый элемент
      // Подготавливаем SQL-запрос для вставки данных в базу данных
      $sql = "INSERT INTO menu_items_new (name, link, parent_id) VALUES (?, ?, ?)";
      // Подготавливаем выражение для выполнения SQL-запроса
      $stmt = $connect->prepare($sql);
      // Привязываем параметры к подготовленному выражению
      $stmt->bind_param("ssi", $name, $link, $parent_id);
    }

    // Выполняем SQL-запрос
    if ($stmt->execute()) {
      // Если запрос выполнен успешно, возвращаем успешный ответ
      echo json_encode(array("success" => true));
    } else {
      // Если возникла ошибка при выполнении запроса, возвращаем сообщение об ошибке
      echo json_encode(array("error" => "Ошибка при обновлении/добавлении данных в базу данных"));
    }

    // Закрываем подготовленное выражение и соединение с базой данных
    $stmt->close();
    $connect->close();
  } else {
    // Если не хватает данных в POST-запросе, возвращаем сообщение об ошибке
    echo json_encode(array("error" => "Недостаточно данных для обновления/добавления"));
  }
} else {
  // Если запрос не является POST-запросом, возвращаем сообщение об ошибке
  echo json_encode(array("error" => "Метод запроса должен быть POST"));
}
