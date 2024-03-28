<?
include $_SERVER['DOCUMENT_ROOT'] . '/system/functions.php';
// header("Location: {$_SERVER['/comments']}");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $tel = $_POST["phone"];
  $email = $_POST["email"];
  $rating = $_POST["rating"];
  $comment = $_POST["comment"];
  $sqlComment = "INSERT INTO mail (name, phone, email, rating, comment ) VALUES ('$name', '$tel', '$email', '$rating', '$comment')";
  $res = customSqlQuery($connect, $sqlComment);
  if ($res === TRUE) {
    echo "Отзыв успешно добавлен";
    header("Location: {$_SERVER['PHP_SELF']}");
    exit();
  } else {
    echo "Ошибка при добавлении отзыва: " . $connect->error;
  }
  echo "Полученные данные:<br>";
  echo "Имя: " . $name . "<br>";
  echo "Email: " . $email . "<br>";
  echo "Телефон: " . $tel . "<br>";
} else {
  // Если запрос был выполнен не методом POST, вы можете вернуть ошибку или выполнить другие действия
  echo "Ошибка: Неверный метод запроса";
}
