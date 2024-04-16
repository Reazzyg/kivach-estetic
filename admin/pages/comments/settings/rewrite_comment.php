<?php
// Проверяем, был ли отправлен POST-запрос
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Проверяем наличие необходимых данных в POST-запросе
  if (isset($_POST['id'], $_POST['name'], $_POST['rating'], $_POST['comment'], $_POST['active'])) {
    // Получаем данные из POST-запроса
    $id = $_POST['id'];
    $name = $_POST['name'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];
    $active = $_POST['active']; // Преобразуем в формат, используемый в базе данных

    // Подключаемся к базе данных
    include_once $_SERVER['DOCUMENT_ROOT'] . '/system/functions.php';


    // Подготавливаем SQL-запрос для обновления данных в базе данных
    $sql = "UPDATE comments SET name=?, rating=?, message=?, active=? WHERE id=?";

    // Подготавливаем выражение для выполнения SQL-запроса
    $stmt = $connect->prepare($sql);

    // Привязываем параметры к подготовленному выражению
    $stmt->bind_param("ssssi", $name, $rating, $comment, $active, $id);

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
  } else {
    // Если не хватает данных в POST-запросе, возвращаем сообщение об ошибке
    echo json_encode(array("error" => "Недостаточно данных для обновления"));
  }
} else {
  // Если запрос не является POST-запросом, возвращаем сообщение об ошибке
  // echo json_encode(array("errorrr" => "Метод запроса должен быть POST"));
}