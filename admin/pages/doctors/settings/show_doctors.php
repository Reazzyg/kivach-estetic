<?php
function show_all()
{
  if (isset($_GET['tab'])) {
    // Функция для получения всех комментариев из базы данных
    function all()
    {
      // Глобальная переменная подключения к базе данных
      global $connect;

      // Выполнение запроса к базе данных
      $res = sqlQuery("SELECT * FROM doctors ORDER BY id DESC");

      // Создание переменной для хранения HTML-кода таблицы
      $table_html = '';

      $fields = mysqli_fetch_fields($res);
      // Обработка результатов запроса

      $i = 1; // Начинаем с 1, так как 0 не имеет смысла для нумерации

      while ($row = mysqli_fetch_assoc($res)) {
        $active = ($row['active'] !== 'yes') ? 'inactive' : 'active'; // Определение активности врача

        // Формирование строки таблицы для каждого врача
        $table_html .= '<tr>';

        $table_html .= '<td td-name="' . $fields[0]->name . '" data-id=' . $row['id'] . '>'  . $i . '</td>';

        $table_html .= '<td td-name="' . $fields[4]->name . '" > <img class="table__img" src="/assets/img/doctors/' . htmlspecialchars($row['photo']) . '" alt="Фото врача"></td>';

        $table_html .= '<td td-name="' . $fields[1]->name . '">' . htmlspecialchars($row['name']) . '</td>';

        $table_html .= '<td td-name="' . $fields[2]->name . '">' . htmlspecialchars($row['profession']) . '</td>';

        $table_html .= '<td td-name="' . $fields[3]->name . '">' . $row['description'] . '</td>';

        $table_html .= '<td td-name="' . $fields[6]->name . '">' . ($active == 'active' ? 'да' : 'нет')  . '</td>';

        $table_html .= '<td td-name="change" > <a class="comment-change" href="">Изменить</a> </td>';

        $table_html .= '</tr>';

        $i++;
      }

      // Возвращаем HTML-код таблицы
      return $table_html;
    }
  }
?>
<!-- к классу добавляется имя гет параметра(all) + show показывает по умолчанию  -->
<div class="tabs-content tabs-content-comments show all">
  <table>
    <thead>
      <tr>
        <th>№</th>
        <th th-name="photo">Фото</th>
        <th th-name="name">Имя</th>
        <th th-name="prof">Должность</th>
        <th th-name="decr">Описание</th>
        <th th-name="active">Активность</th>
        <th th-name="change">Изменить</th>
      </tr>
    </thead>
    <tbody>
      <?php
        if (function_exists('all')) {
          echo all(); // Выводим HTML-код таблицы с комментариями
        }
        ?>
    </tbody>
  </table>
</div>

<?php
}
?>