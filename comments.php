<?php

// include "system/functions.php";
// $result = mysqli_query($con, "SELECT * FROM `comments` ORDER BY id DESC");


$title = 'Отзывы';
include("components/header.php");

$result = sqlQuery("SELECT * FROM `comments` ORDER BY id DESC");


?>

<section class="hero hero-comments">
  <div class="container">
    <h1 class="title hero-title">Отзывы</h1>
    <navigation class="navigation"></navigation>

    <div class="comments-container">

      <div class="comments">
        <?php 

              while($comments = mysqli_fetch_assoc($result)){
                ?>

        <div class="comment">
          <div class="comment-rating">
            <?php 
            
              $img = '<img src="assets/img/Star-filled.svg" alt="" class="comment-rating__star">';
              $final_str = "";
              $rate = intval($comments['rating']);
              $final_str = str_repeat($img, $rate);
              echo $final_str;
            ?>
          </div>
          <!-- /.star-rating -->
          <p class="comment__text"> <?php echo $comments['message'] ;?> </p>
          <div class="comment-profile">
            <img class="comment-profile__img" alt="" src="<?php
                 if ($comments['image'] == NULL){
                    echo 'assets/img/profile.svg';
                 }
                 else{
                    echo $comments['image'];
                 }
                
                 ?>">

            <p class="comment-profile__name"><?php echo $comments['name'] ?></p>
          </div>
          <!-- /.comment-profile -->


        </div>
        <!-- /.comment -->
        <?php
              }
              ?>

      </div>
      <!-- /.comments -->
      <sendForm></sendForm>

    </div>
    <!-- /.comments-container -->


  </div>
</section>


<!-- /.hero -->
</main>
<?php include("components/footer.php") ?>