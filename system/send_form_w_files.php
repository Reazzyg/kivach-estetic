<?php
include $_SERVER['DOCUMENT_ROOT'] . '/system/functions.php';

header('Content-Type: application/json');

// Проверка наличия таблицы в базе данных
$tableExistsQuery = "SHOW TABLES LIKE 'mail'";
$tableExistsResult = $connect->query($tableExistsQuery);

if ($tableExistsResult->num_rows == 0) {
  // Если таблица не существует, создаем её
  $createTableQuery = "CREATE TABLE mail (
                            id INT(11) AUTO_INCREMENT PRIMARY KEY,
                            name VARCHAR(255) NOT NULL,
                            phone VARCHAR(255) NOT NULL,
                            email VARCHAR(255) NOT NULL,
                            rating INT(11) DEFAULT 0,
                            comment TEXT,
                            files TEXT
                        )";
  if ($connect->query($createTableQuery) === TRUE) {
    echo json_encode(array("info" => "Таблица успешно создана"));
  } else {
    echo json_encode(array("error" => "Ошибка при создании таблицы: " . $connect->error));
    exit();
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Проверка и очистка данных от HTML и SQL инъекций
  $name = htmlspecialchars(mysqli_real_escape_string($connect, $_POST["name"]));
  $tel = htmlspecialchars(mysqli_real_escape_string($connect, $_POST["phone"]));
  $email = htmlspecialchars(mysqli_real_escape_string($connect, $_POST["email"]));
  $comment = htmlspecialchars(mysqli_real_escape_string($connect, $_POST["comment"]));

  // Проверяем, что все основные поля, кроме комментария и рейтинга, заполнены
  if (!empty($name) && !empty($tel) && !empty($email)) {
    // Загрузка файлов
    $files = $_FILES['uploaded_files']; // Получаем данные о файлах
    $filePaths = array(); // Массив для хранения путей загруженных файлов

    // Проверяем, были ли загружены файлы
    if (!empty($files['name'][0])) {
      // Папка, в которую будут загружены файлы
      $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';

      // Создаем папку, если она не существует
      if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
      }

      // Обрабатываем каждый файл
      foreach ($files['tmp_name'] as $index => $tmpName) {
        $originalFileName = basename($files['name'][$index]);

        // Генерируем уникальное имя файла
        $uniqueFileName = uniqid() . '_' . $originalFileName;

        $filePath = $uploadDir . $uniqueFileName;

        // Перемещаем файл из временной папки в целевую папку
        if (move_uploaded_file($tmpName, $filePath)) {
          $filePaths[] = $filePath; // Добавляем путь к файлу в массив
        } else {
          // Если возникла ошибка при перемещении файла, выводим сообщение об ошибке
          echo json_encode(array("error" => "Ошибка при загрузке файла: $originalFileName"));
          exit();
        }
      }
    }

    // Подготавливаем SQL-запрос для добавления отзыва в базу данных
    $sqlComment = "INSERT INTO mail (name, phone, email,  comment, files) VALUES (?, ?, ?, ?, ?)";
    $stmt = $connect->prepare($sqlComment);
    $stmt->bind_param("sssis", $name, $tel, $email,  $comment, implode(',', $filePaths));

    // Выполняем запрос
    if ($stmt->execute()) {
      // Если запись в базу данных выполнена успешно, продолжаем отправку письма

      // Отправка письма с прикрепленными файлами
      $to = 'mudrsemen@ya.ru';
      $subject = 'Заявка с сайта Kivach Estetic';
      $message = '
                Имя: ' . $name . '
                Телефон: ' . $tel . '
                Email: ' . $email . '
                Комментарий: ' . $comment . '
                ';

      // Создаем разделитель для письма
      $boundary = md5(uniqid());

      // Заголовки письма
      $headers = "From: $email\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

      // Тело письма
      $body = "--$boundary\r\n";
      $body .= "Content-Type: text/plain; charset=utf-8\r\n";
      $body .= "Content-Transfer-Encoding: 8bit\r\n";
      $body .= "\r\n$message\r\n";

      // Прикрепляем файлы к письму
      foreach ($filePaths as $file) {
        $fileContent = file_get_contents($file);
        $encodedFileContent = chunk_split(base64_encode($fileContent));
        $body .= "--$boundary\r\n";
        $body .= "Content-Type: application/octet-stream; name=\"" . basename($file) . "\"\r\n";
        $body .= "Content-Disposition: attachment; filename=\"" . basename($file) . "\"\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n";
        $body .= "\r\n$encodedFileContent\r\n";
      }
      $body .= "--$boundary--";

      // Отправляем письмо
      if (mail($to, $subject, $body, $headers)) {
        // Если письмо успешно отправлено, возвращаем успешный ответ
        echo json_encode(array("success" => "Success"));
      } else {
        // Если возникла ошибка при отправке письма, возвращаем сообщение об ошибке
        echo json_encode(array("error" => "Ошибка при отправке заявки"));
      }
    } else {
      // Если возникла ошибка при выполнении запроса, отправляем сообщение об ошибке
      echo json_encode(array("error" => "Ошибка при добавлении отзыва: " . $connect->error));
    }
  } else {
    // Если какое-либо из основных полей не заполнено, возвращаем сообщение об ошибке
    echo json_encode(array("error" => "Поля 'Имя', 'Телефон' и 'Email' обязательны для заполнения"));
  }
} else {
  // Если запрос был выполнен не методом POST, возвращаем сообщение об ошибке
  echo json_encode(array("error" => "Ошибка: Неверный метод запроса"));
}
