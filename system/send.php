<?php
include $_SERVER['DOCUMENT_ROOT'] . '/system/functions.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = htmlspecialchars($_POST["name"]);

  $tel = htmlspecialchars($_POST["phone"]);

  $email = htmlspecialchars($_POST["email"]);

  $rating = isset($_POST["rating"]) ? htmlspecialchars($_POST["rating"]) : 0;

  $comment = htmlspecialchars($_POST["comment"]);

  $files = isset($_POST["file"]) ? $_POST["file"] : null;

  // Проверяем, что все поля, кроме комментария и рейтинга, заполнены
  if (!empty($name) && !empty($tel) && !empty($email)) {

    // Подготавливаем SQL-запрос с использованием подготовленных выражений для предотвращения SQL-инъекций

    $sqlComment = "INSERT INTO mail (name, phone, email, rating, comment) VALUES (?, ?, ?, ?, ?)";

    $stmt = $connect->prepare($sqlComment);

    $stmt->bind_param("sssis", $name, $tel, $email, $rating, $comment);


    // Выполняем запрос
    if ($stmt->execute()) {

      // После успешной вставки перенаправляем пользователя на другую страницу

      echo json_encode(array("success" => "Success"));

      exit();
    } else {

      // Если возникла ошибка при выполнении запроса, выводим сообщение об ошибке

      echo json_encode(array("error" => "Ошибка при добавлении отзыва: " . $connect->error));
    }
  } else {

    // Если какое-либо из основных полей не заполнено, выводим сообщение об ошибке

    echo json_encode(array("error" => "Поля 'Имя', 'Телефон' и 'Email' обязательны для заполнения"));
  }
} else {

  // Если запрос был выполнен не методом POST, выводим сообщение об ошибке

  echo json_encode(array("error" => "Ошибка: Неверный метод запроса"));
}
