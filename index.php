<?php
// include('system/functions.php');
$title = 'Главная';
include('components/header.php');
// get_header();

?>
<section class="hero hero-main">
  <div class="container hero-container hero-main-container">
    <div class="hero-wrapper">
      <h1 class="title hero-title">Пластические операции</h1>
      <h2 class="subtitle hero-subtitle">Штрихи, которые преобразят вас</h2>
      <ul class="hero-list hero-main-list">
        <li class="hero-list__item hero-main-list__item">Первоклассные хирурги с именем и репутацией</li>
        <li class="hero-list__item hero-main-list__item">Хирургия на базе anti-age клиники</li>
        <li class="hero-list__item hero-main-list__item">С обслуживанием премиум-класса</li>
        <li class="hero-list__item hero-main-list__item">По международным стандартам EFQM и JCI</li>
      </ul>
    </div>
    <!-- /.hero-wrapper -->
    <img src="assets/img/hero-team.png" alt="" class="hero-main__bg">
    <navigation class="navigation"></navigation>

  </div>
  <!-- /.container hero-container -->
</section>
<!-- /.hero -->
<section class="year">
  <div class="container year-container">
    <img src="<?get_img_path()?>logo.png" alt="" class="logo">
    <p class="subtitle">начиная с 2017 года</p>
  </div>
  <!-- /.container year-container -->
</section>
<!-- /.year -->

<section class="advantages">
  <div class="container advantages-container">
    <div class="advantages-card">
      <img src="<?get_img_path()?>patients.svg" alt="" class="advantages-card__img">
      <p class="subtitle">1 000 000 000 000</p>
      <p class="advantages-card__text text">Столько пациентов приняла клиника за всё время своего существования</p>
    </div>
    <div class="advantages-card">
      <img src="<?get_img_path()?>calendar.svg" alt="" class="advantages-card__img">
      <p class="subtitle">300 000</p>
      <p class="advantages-card__text text">Столько операций проводится в клинике ежегодно</p>
    </div>
    <div class="advantages-card">
      <img src="<?get_img_path()?>body.svg" alt="" class="advantages-card__img">
      <p class="subtitle">2 000 000 000 000</p>
      <p class="advantages-card__text text">Столько операций провела клиника,начиная с 2017 года</p>
    </div>
  </div>
  <!-- /.container advantages-container -->
</section>
<!-- /.advantages -->
<section class="feedback">
  <div class="container feedback-container">
    <img class="feedback__img" src="<?get_img_path()?>form-doc.png" alt="">
    <p class="title">Напишите нам</p>
    <p class="text">Сотрудник клиники свяжется с вами в течение рабочего дня</p>
    <sendForm></sendForm>
  </div>
  <!-- /.container feedback-container -->
</section>
<!-- /.feedback -->

<?php
include('components/footer.php');

// get_footer();
?>