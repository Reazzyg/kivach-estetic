<?php
include("system/functions.php");

$table_name = "comments";

$current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$comments_per_page = 6;
$offset = ($current_page - 1) * $comments_per_page;

$query = "SELECT * FROM `$table_name` ORDER BY id LIMIT $offset, $comments_per_page";
$result = sqlQuery($query);

ob_start();

if ($result && sqlNumRows($result) > 0) {
  while ($comment = mysqli_fetch_assoc($result)) {
    ?>
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
    <p class="comment-profile__name"><?php echo $comment['name'] ?></p>
  </div>
  <img src="<?get_img_path()?>quote.svg" alt="" class="comment__quote">
</div>
<?php
  }
} else {
  echo '<p>Нет комментариев для отображения.</p>';
}

$response = ob_get_clean();
echo $response;
?>