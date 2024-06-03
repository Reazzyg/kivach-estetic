<?
function show_all_comments()
{

  if (isset($_GET['tab'])) {
    // Функция для получения всех комментариев из базы данных
    function all_comments()
    {
      // global $connect; // Подключение к базе данных

      // Выполнение запроса к базе данных
      $res = sqlQuery("SELECT * FROM comments ORDER BY id DESC");

      // Создание переменной для хранения HTML-кода таблицы
      $table_html = '';

      $fields = mysqli_fetch_fields($res);

      // Обработка результатов запроса
      $i = 0;
      while ($row = mysqli_fetch_assoc($res)) {
        $active = ($row['active'] !== 'yes') ? 'inactive' : 'active'; // Определение активности комментария

        // Формирование строки таблицы для каждого комментария
        $table_html .= '<tr>';
        $table_html .= '<td td-name="' . $fields[0]->name . '"  data-id=' . $row['id'] . '>'  . $i + 1 . '</td>';
        $table_html .= '<td td-name="' . $fields[1]->name . '" >' . $row['rating'] . '</td>';
        $table_html .= '<td td-name="' . $fields[2]->name . '" >' . $row['name'] . '</td>';
        $table_html .= '<td td-name="' . $fields[3]->name . '" >' . $row['message'] . '</td>';
        $table_html .= '<td td-name="' . $fields[5]->name . '" >' . ($active == 'active' ? 'да' : 'нет')  . '</td>';
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
          <th>Рейтинг</th>
          <th>Имя</th>
          <th>Отзыв</th>
          <th>Активность</th>
          <th>Изменить</th>
        </tr>
      </thead>
      <tbody>
        <?php echo all_comments(); // Выводим HTML-код таблицы с комментариями 
        ?>
      </tbody>
    </table>
  </div>

<?
}
