<?

$title = $data['name'];

include $_SERVER['DOCUMENT_ROOT'] . '/components/header-admin.php';

?>

<section class="info reverse info-doctor">
  <h2 class="subtitle"><?php echo htmlspecialchars($data['name']); ?></h2>
  <div class="container">
    <div class="info-wrapper">
      <?php echo $data['description']; ?>
    </div>
    <img src="<?php echo htmlspecialchars($data['photo']); ?>" alt="" class="info__img info-doctor__img brs30 ">
  </div>
</section>


<?
include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php';
