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
</div>