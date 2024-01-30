<?php 
include "db_con.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $rating = isset($_POST['rating']) ? intval($_POST['rating']) : null;
    $comment = $_POST['comment'];

    // Здесь можно добавить валидацию данных, если это необходимо

    // Ваш SQL-запрос для вставки данных в базу данных
    $sql = "INSERT INTO comments (name, rating, message) VALUES ('$name', '$rating', '$comment')";

    if ($link->query($sql) === TRUE) {
        echo "Данные успешно добавлены в базу данных";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $link->error;
    }

    $link->close();
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Write to JSON</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div id="data-container"></div>


  <form action="" method="POST" class="form">
    <h3 class="title form-title">Создать отзыв</h3>

    <label>
      <input type="text" name="name" class="form-input" placeholder="ФИО*">
    </label>

    <label>
      <input type="text" name="rating" class="form-input" placeholder="Рейтинг">
    </label>

    <textarea class="form-input form-comment" placeholder="Отзыв" name="comment" id="" cols="30" rows="5"></textarea>

    <button type="submit" class="button form-button">Отправить</button>

  </form>
  <!-- /.form -->


  <!-- <button onclick="editAndSaveJson()">Edit and Save JSON</button> -->



  <!-- <script>
  // Загрузка данных из JSON-файла
  fetch('json/navigation.json') // Путь к вашему JSON-файлу
    .then(response => response.json())
    .then(data => displayData(data.navigation));

  // Функция для отображения данных на странице
  function displayData(navigationData) {
    const container = document.getElementById('data-container');
    container.innerHTML = ''; // Очищаем контейнер перед отображением

    // Проходим по каждому элементу массива navigationData
    navigationData.forEach(item => {
      const name = item.name;
      const list = item.list;

      // Создаем div для каждой группы данных
      const groupDiv = document.createElement('div');

      const nameInput = createInput('text', name);
      const nameLabel = createLabel(`${name}: `, nameInput);

      groupDiv.appendChild(nameLabel);

      list.forEach(listItem => {
        const listInput = createInput('text', listItem);
        const listLabel = createLabel('', listInput);

        groupDiv.appendChild(listLabel);
      });

      // Добавляем div с группой данных в контейнер
      container.appendChild(groupDiv);
    });
  }

  // Функция для создания input элемента
  function createInput(type, value) {
    const inputElement = document.createElement('input');
    inputElement.type = type;
    inputElement.value = value;

    return inputElement;
  }

  // Функция для создания label элемента
  function createLabel(text, inputElement) {
    const labelElement = document.createElement('label');
    labelElement.textContent = text;
    labelElement.appendChild(inputElement);

    return labelElement;
  }

  // Функция для редактирования и сохранения данных
  function editAndSaveJson() {
    const container = document.getElementById('data-container');
    const groups = container.getElementsByTagName('div');

    // Создаем массив для хранения отредактированных данных
    const updatedData = [];

    // Проходим по каждой группе данных
    for (let i = 0; i < groups.length; i++) {
      const group = groups[i];
      const inputs = group.getElementsByTagName('input');

      // Создаем объект для хранения отредактированных данных
      const updatedGroup = {
        list: []
      };

      // Проходим по каждому инпуту и добавляем значения в объект
      for (let j = 0; j < inputs.length; j++) {
        const value = inputs[j].value;

        // Если индекс равен 0, это инпут для имени
        if (j === 0) {
          updatedGroup.name = value;
        }
        // Если индекс нечетный, это инпут для элемента списка
        else if (j % 2 !== 0) {
          updatedGroup.list.push(value);
        }
      }

      // Добавляем объект с отредактированными данными в массив
      updatedData.push(updatedGroup);
    }

    // Преобразуем массив в объект
    const updatedObject = {
      navigation: updatedData
    };
    console.log(updatedObject);

    // Преобразуем объект в JSON-строку
    const jsonString = JSON.stringify(updatedObject);

    // Перезаписываем JSON-файл (здесь нужно использовать асинхронные методы или отправку на сервер)
    // Пример использования fetch для отправки на сервер:
    fetch('rewrite_json.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: jsonString,
      })
      .then(response => response.json())
      .then(savedData => console.log('Data saved:', savedData))
      .catch(error => console.error('Error saving data:', error));
  }
  </script> -->




</body>

</html>