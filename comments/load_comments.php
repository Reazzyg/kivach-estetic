<?php
include $_SERVER['DOCUMENT_ROOT'] . '/system/functions.php';


$table_name = "comments";

$current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$comments_per_page = 6;
$offset = ($current_page - 1) * $comments_per_page;

$query = "SELECT * FROM `$table_name` WHERE active = 'yes' ORDER BY id DESC LIMIT $offset, $comments_per_page ";
$result = sqlQuery($query);

ob_start();

if ($result && sqlNumRows($result) > 0) {
  while ($comment = mysqli_fetch_assoc($result)) {
    ?>

<? include '../components/comment.php' ?>
<?php
  }
} else {
  echo '<p>Нет комментариев для отображения.</p>';
}

$response = ob_get_clean();
echo $response;
?>