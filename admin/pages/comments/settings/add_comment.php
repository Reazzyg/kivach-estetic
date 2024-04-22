<?

function add_comment()
{
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit_comment'])) {
      $name = $_POST['name'];
      $rating = isset($_POST['rating']) ? intval($_POST['rating']) : null;
      $comment = $_POST['comment'];

      if (!validateInput($name)) {
        showError('ФИО');
      } elseif (!validateInput($comment)) {
        showError('Отзыв');
      } else {
        $sqlComment = "INSERT INTO comments (name, rating, message) VALUES ('$name', '$rating', '$comment')";

        $res = customSqlQuery($connect, $sqlComment);

        if ($res === TRUE) {
          echo "Отзыв успешно добавлен";
          header("Location: {$_SERVER['PHP_SELF']}");
          exit();
        } else {
          echo "Ошибка при добавлении отзыва: " . $connect->error;
        }
      }
    }
  }
?>
<!--  -->
<div class="tabs-content insert">
  <div class="form">
    <h3 class="title form-title">Создать отзыв</h3>

    <form method="post">
      <label>
        <input type="text" name="name" class="form-input" placeholder="ФИО*">
      </label>

      <label>
        <input type="number" name="rating" class="form-input" placeholder="Рейтинг">
      </label>

      <textarea class="form-input form-comment" placeholder="Отзыв" name="comment" id="" cols="30" rows="5"></textarea>

      <button class="button form-button" name="submit_comment">Отправить отзыв</button>
    </form>

  </div>
  <!-- /.form -->
</div>

<?
}