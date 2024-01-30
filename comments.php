<?php

include "db_con.php";

$result = mysqli_query($link, "SELECT * FROM `comments`");

// while($comments = mysqli_fetch_assoc($result)){

//   echo $comments['name'];
//   echo "<br>";
// }

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Кивач Эстетик +</title>
</head>

<body>
  <header class="header">

  </header>
  <!-- /.header -->
  <main>
    <section class="hero">
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
                <img src="img/Star-filled.svg" alt="" class="comment-rating__star">
                <img src="img/Star-filled.svg" alt="" class="comment-rating__star">
                <img src="img/Star-filled.svg" alt="" class="comment-rating__star">
                <img src="img/Star-filled.svg" alt="" class="comment-rating__star">
                <img src="img/Star-filled.svg" alt="" class="comment-rating__star">
              </div>
              <!-- /.star-rating -->
              <?php echo '<p class="comment__text">  '.$comments['message'].' </p> ';?>
              <div class="comment-profile">
                <img class="comment-profile__img" alt="" src="<?php
                 if ($comments['image'] == NULL){
                    echo 'img/profile.svg';
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
  <footer class="footer">
    <div class="container footer-container">
      <div class="footer-wrapper">
        <ul title="Информация" class="footer-list footer-info">

        </ul>
        <ul title="Хирургия" class="footer-list footer-surgery">

        </ul>
      </div>
      <!-- /.footer-wrapper -->
      <div class="footer-wrapper">
        <ul title="Пластические операции" class="footer-list footer-plastic">

        </ul>
      </div>
      <!-- /.footer-wrapper -->
      <div class="footer-wrapper">
        <ul title="Интимная пластика" class="footer-list footer-intim">

        </ul>
        <ul title="Общая хирургия" class="footer-list footer-all-surg">

        </ul>
      </div>
      <!-- /.footer-wrapper -->
      <div class="footer-wrapper">
        <div class="footer-wrapper">
          <h3 class="title footer__title">Клиника «Кивач Эстетик Плюс»</h3>
          <p class="footer__text">Российская Федерация, Республика Карелия, Кондопожский муниципальный район,
            Кончезерское
            поселение, с. Кончезеро, ул. Советов, д. 64</p>
          <a href="tel:+7 (8142) 599-880" class="footer__link">+7 (8142) 599-880</a>
          <a href="mailto:admin@кивачэстетик.рф" class="footer__link">admin@кивачэстетик.рф</a>
        </div>
        <!-- /.footer-wrapper -->
        <div class="footer-wrapper">
          <h3 class="title footer__title">Режим работы:</h3>
          <p class="footer__text">Пн - Пт: 09:00-21:00</p>
          <p class="footer__text">Сб, против: выходные</p>
          <p class="footer__text">График приёма руководителя гражданской клиники:</p>
          <p class="footer__text">Главный врач - еженедельно по средам с 12:00 до 13:00</p>

        </div>
        <!-- /.footer-wrapper -->
        <div class="footer-wrapper">
          <div class="footer-wrap">
            <img src="./img/efqm.png" alt="" class="footer__img">
            <p class="footer__text">Многие клиники предлагают комфортные условия пребывания для пациентов, включая
              уютные
              палаты, заботливый персонал и разнообразное меню.</p>
          </div>
          <!-- /.footer-wrap -->
          <div class="footer-wrap">
            <img src="./img/coin.jpg" alt="" class="footer__img">
            <p class="footer__text">Многие клиники предлагают комфортные условия пребывания для пациентов, включая
              уютные
              палаты, заботливый персонал и разнообразное меню.</p>
          </div>
          <!-- /.footer-wrap -->
        </div>
        <!-- /.footer-wrapper -->
      </div>
      <!-- /.footer-wrapper -->

    </div>
    <!-- /.container footer-container -->
  </footer>
  <!-- /.footer -->
  <script type="module" src="js/menu.js"></script>
  <script type="module" src="js/navigation.js"></script>
  <script src="js/validation.js"></script>
  <script type="module" src="js/footer.js"></script>
  <script type="module" src="js/form.js"></script>
  <script type="module" src="js/js.js"></script>
</body>

</html>