<?
$table_name = "comments";

// Определение текущей страницы
$current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$comments_per_page = 4;

// Получение общего количества комментариев
$count_query = sqlQuery("SELECT COUNT(*) AS total FROM `$table_name` WHERE active = 'yes'");
$total_comments = mysqli_fetch_assoc($count_query)['total'];

// Вычисление общего количества страниц
$total_pages = ceil($total_comments / $comments_per_page);

// Определение смещения для выборки комментариев
$offset = ($current_page - 1) * $comments_per_page;

// Получение комментариев для текущей страницы
$query = "SELECT * FROM `$table_name` WHERE active = 'yes' ORDER BY id DESC LIMIT $offset, $comments_per_page ";
$result = sqlQuery($query);
?>

<section class="response">
  <div class="container response-container">
    <h2 class="title">Отзывы</h2>

    <div class="comments">

      <?php if ($result && sqlNumRows($result) > 0) : ?>

      <?php while ($comment = mysqli_fetch_assoc($result)) : ?>

      <? include 'comment.php' ?>

      <?php endwhile; ?>

      <?php else : ?>

      <p>Нет комментариев для отображения.</p>

      <?php endif; ?>

    </div>
    <!--./comments  -->

    <a href="/comments/" class="button">Все отзывы</a>
  </div>
  <!-- ./container -->
</section>