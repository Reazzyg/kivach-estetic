<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/system/functions.php';

// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Создаем пустой массив для хранения данных из формы
  $formData = array();
  $parent_id = $_POST['parent-id'];

  // Перебираем все переданные значения формы
  foreach ($_POST as $key => $value) {


    // Разделяем параметр name по символу "_"
    $parts = explode("_", $key);
    // Если параметр name был разделен на две части
    if (count($parts) == 2) {
      // Первая часть будет идентификатором записи (например, id)
      $id = $parts[1];
      // Вторая часть будет именем поля
      $field = $parts[0];
      // Создаем или обновляем запись в массиве данных формы
      if (!isset($formData[$id])) {
        $formData[$id] = array();
      }
      $formData[$id][$field] = $value;
    } else {
      // Если параметр name не был разделен на две части, он может быть полем для записи без идентификатора
      // В этом случае используем значение null в качестве идентификатора
      $id = null;
      $field = $parts[0];
      // Проверяем, если это переменная parent-id, пропускаем ее
      if ($field == 'parent-id') {
        continue;
      }
      // Создаем запись в массиве данных формы
      if (!isset($formData[$id])) {
        $formData[$id] = array();
      }

      $formData[$id][$field] = $value;
    }
  }
  // var_dump($formData);
  // Теперь у вас есть массив $formData, содержащий данные из формы с разделением по идентификатору записи
  // Вы можете использовать этот массив для записи или обновления данных в базе данных
  // Например, вы можете выполнить цикл по массиву $formData и выполнить операции с базой данных для каждой записи

  $success_flag = true;
  // Выполнение SQL-запроса для каждой записи в массиве $formData
  foreach ($formData as $id => $data) {
    // Формируем SQL-запрос с использованием данных из массива $data
    $sql = "INSERT INTO menu_items_new (id, name, link, active, parent_id) 
            VALUES (?, ?, ?, ?, ?) 
            ON DUPLICATE KEY UPDATE 
                name = VALUES(name), 
                link = VALUES(link), 
                active = VALUES(active)";

    // Подготавливаем выражение для выполнения SQL-запроса
    $stmt = $connect->prepare($sql);

    // Привязываем параметры к подготовленному выражению
    $stmt->bind_param("isssi", $id, $data['name'], $data['link'], $data['active'], $parent_id);

    // Выполняем SQL-запрос
    if (!$stmt->execute()) {
      // Если возникла ошибка при выполнении запроса, устанавливаем флаг ошибки
      $success_flag = false;
    }

    // Закрываем подготовленное выражение
    $stmt->close();
  }
  if ($success_flag) {
    // Если все запросы выполнены успешно, выводим один раз сообщение об успешном выполнении
    echo json_encode(array("success" => true));
  } else {
    // Если хотя бы один запрос завершился ошибкой, выводим один раз сообщение об ошибке
    echo json_encode(array("error" => "Ошибка при обновлении данных в базе данных"));
  }
}
