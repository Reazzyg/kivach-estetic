<?php
$title = 'Отзывы';
include("components/header.php");
$table_name = "comments";

// Определение текущей страницы
$current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$comments_per_page = 6;

// Получение общего количества комментариев
$count_query = sqlQuery("SELECT COUNT(*) AS total FROM `$table_name`");
$total_comments = mysqli_fetch_assoc($count_query)['total'];

// Вычисление общего количества страниц
$total_pages = ceil($total_comments / $comments_per_page);

// Определение смещения для выборки комментариев
$offset = ($current_page - 1) * $comments_per_page;

// Получение комментариев для текущей страницы
$query = "SELECT * FROM `$table_name` ORDER BY id LIMIT $offset, $comments_per_page";
$result = sqlQuery($query);
?>

<section class="hero hero-comments">
  <div class="container">
    <h1 class="title">Отзывы</h1>

    <div class="comments-container">
      <div class="comments">
        <?php if ($result && sqlNumRows($result) > 0) : ?>
        <?php while ($comment = mysqli_fetch_assoc($result)) : ?>
        <div class="comment">
          <div class="comment-rating">
            <?php
                $img = '<img src="assets/img/Star-filled.svg" alt="" class="comment-rating__star">';
                $final_str = str_repeat($img, intval($comment['rating']));
                echo $final_str;
                ?>
          </div>
          <p class="comment__text"><?php echo $comment['message'] ?></p>
          <div class="comment-profile">
            <p class="comment-profile__name"><?php 
            echo $comment['name'];
            echo $comment['id'];
            
            ?></p>
          </div>
          <img src="<?get_img_path()?>quote.svg" alt="" class="comment__quote">
        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <p>Нет комментариев для отображения.</p>
        <?php endif; ?>
      </div>
      <!-- /.comments -->

      <!-- Отправка комментария -->
      <sendForm></sendForm>
    </div>
    <!-- /.comments-container -->

    <!-- Пагинация -->
    <section class="pagination">
      <div class="pagination-prev">
        <a href="?page=<?php echo $current_page - 1 ?>">
          <img src="<?php get_img_path() ?>arrow-prev.svg" alt="" class="pagination__img">
        </a>
      </div>

      <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
      <div class="pagination-page <?php echo ($i == $current_page) ? 'pagination-page-active' : ''; ?>">
        <a href="?page=<?php echo $i ?>"><?php echo $i ?></a>
      </div>
      <?php endfor; ?>

      <?php if ($current_page < $total_pages) : ?>
      <div class="pagination-next">
        <a href="?page=<?php echo $current_page + 1 ?>">
          <img src="<?php get_img_path() ?>arrow-next.svg" alt="" class="pagination__img">
        </a>
      </div>
      <?php endif; ?>
    </section>
    <!-- /.pagination -->



  </div>
</section>

<!-- /.hero -->
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/assets/js/pagination.js"></script>
<?php include("components/footer.php") ?>