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
      <div class="comment" data-name="<?php echo $comment['name']; ?>" data-rating="<?php echo $comment['rating']; ?>">
        <div class="comment-rating">
          <?php
                $img = '<img src="/assets/img/Star-filled.svg" alt="" class="comment-rating__star">';
                $rating = intval($comment['rating']);
                $rating = min($rating, 5); // Ограничение рейтинга до 5 звезд
                $final_str = str_repeat($img, $rating);
                echo $final_str;
                ?>
        </div>
        <p class="comment__text"><?php echo $comment['message'] ?></p>
        <div class="comment-profile">
          <p class="comment-profile__name"><?php 
            echo $comment['name'];
            ?></p>
        </div>
        <!-- <img src="<?get_img_path()?>quote.svg" alt="" class="comment__quote"> -->
      </div>
      <?php endwhile; ?>
      <?php else : ?>
      <p>Нет комментариев для отображения.</p>
      <?php endif; ?>
    </div>
    <!--./comments  -->

    <a href="/comments.php" class="button">Все отзывы</a>
  </div>
  <!-- ./container -->
</section>