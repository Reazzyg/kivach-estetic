<?
include $_SERVER['DOCUMENT_ROOT'] . '/system/functions.php';
// Функция для получения данных из базы данных и записи их в JSON файл
// Формируем SQL запрос для получения данных
$sql = "SELECT * FROM menu_items_new WHERE active = 'yes' ORDER BY parent_id, id";

$result = sqlQuery($sql);

// Массив для хранения категорий и подкатегорий
$navigation = array();

// Проверяем, есть ли результаты
if ($result->num_rows > 0) {
  // Проходим по каждой строке результата
  while ($row = $result->fetch_assoc()) {
    // Если это корневая категория (parent_id = 0), добавляем ее в массив
    if ($row["parent_id"] == 0) {
      $navigation[] = array(
        "listName" => $row["name"],
        "listItems" => array(),
        "parent_id" => $row['id'],
        "parent_link" => $row['link']
      );
    } else {
      // Ищем родительскую категорию и добавляем текущую подкатегорию к ней
      foreach ($navigation as &$category) {
        // Если находим родительскую категорию
        if ($category["parent_id"] == $row["parent_id"]) {
          // Если родительская категория еще не содержит подкатегорий, создаем массив для их хранения
          if (!isset($category["listItems"])) {
            $category["listItems"] = array();
          }
          // Добавляем текущую подкатегорию к родительской категории
          $category["listItems"][] = array(
            "name" => $row["name"],
            "link" => $category["parent_link"] . $row["link"]
          );
          // Выходим из цикла, так как подкатегория уже добавлена к родительской категории
          break;
        }
      }
    }
  }
  // Удаляем parent_id из каждого элемента массива
  foreach ($navigation as &$category) {
    unset($category["parent_id"]);
    unset($category["parent_link"]);
  }
}
// Возвращаем данные в формате JSON
echo json_encode(array("navigation" => $navigation), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
