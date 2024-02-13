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


<section class="devider">
  <!-- 5 вариантов картинок на каждое разрешение???? -->
  <!-- <img src="<?get_img_path()?>body-bg.svg" alt="" class="devider-bg devider-bg-left">
  <img src="<?get_img_path()?>body-bg.svg" alt="" class="devider-bg devider-bg-right"> -->
  <!--  -->
  <div class="container devider-container">
    <h2 class="title">Пластические операции <b>премиум-класса</b> с соблюдением международных стандартов</h2>
  </div>
  <!-- /.container devider-container -->
</section>
<!-- /.devider -->


<section class="about">
  <div class="container about-container">
    <img src="<?get_img_path()?>clinic.png" alt="" class="about__img">
    <div class="about-wrapper">
      <div class="about-card">
        <h3 class="about-card__title">Premium-класс</h3>
        <!-- /.about-card__title -->
        <p class="about-card__text text">Premium-класс – это не привилегия. Это естественное желание профессионалов
          делать свою работу блестяще. Нам нравится много трудиться, чтобы обеспечить вам лечение и обслуживание
          исключительного качества. Лучшее всегда создаётся на базе лучшего, поэтому только премиальный класс делает
          медицину по-настоящему эффективной.</p>
        <!-- /.about-card__text text -->
      </div>
      <!-- /.about-card -->
      <div class="about-card">
        <h3 class="about-card__title">Перфекционизм во всём</h3>
        <!-- /.about-card__title -->
        <p class="about-card__text text">Следуя четвертьвековому опыту нашего головного бренда «Кивач», мы вывели
          хирургические операции на новый уровень технологичности, безопасности и эффективности. Мастерство нашего
          персонала плюс диагностика, оборудование, препараты, расходные материалы, пост-операционный уход – абсолютно
          всё подчинено идее предоставить вам бескомпромиссный результат</p>
        <!-- /.about-card__text text -->
      </div>
      <!-- /.about-card -->
      <div class="about-card">
        <h3 class="about-card__title">Перемены к лучшему</h3>
        <!-- /.about-card__title -->
        <p class="about-card__text text">Проводя операции с ювелирной точностью, мы одновременно создаём для вас
          улучшенную версию будущего. Восстановление здоровья и преображение внешности расширяет горизонт ваших
          возможностей. Становится доступным то, в чём вы себе отказывали. Это новое качество жизни, которого вы
          достойны в полной мере</p>
        <!-- /.about-card__text text -->
      </div>
      <!-- /.about-card -->
    </div>
    <!-- /.about-wrapper -->
  </div>
  <!-- /.container about-container -->
</section>
<!-- /.about -->


<section class="standart">
  <div class="standart-overlay"></div>
  <!-- /.standart-overlay -->
  <div class="container standart-container">
    <h2 class="title standart__title">Международные стандарты, которые соблюдаются в клинике</h2>
    <div class="standart-wrapper">
      <div class="standart-card">
        <img src="<?get_img_path()?>efqm.png" alt="" class="standart-card__img">
        <p class="text standart-card__text">Этому стандарту следуют более 50 000 организаций по всему миру. Наличие
          сертификата EFQM означает, что процессы обслуживания, лечения, развития, планирования и управления инновациями
          в клинике организованы совершенно и соответствуют образу идеальной модели Европейского фонда управления
          качеством</p>
        <!-- /.text standart-card__text -->
      </div>
      <!-- /.standart-card -->
      <div class="standart-card">
        <img src="<?get_img_path()?>coin.png" alt="" class="standart-card__img">
        <p class="text standart-card__text">Cерия универсальных стандартов, разработанных американской компанией Joint
          Commission International, которая стандартизировала качество услуг, оказываемых в медицинской отрасли, по
          всему миру. Аккредитация по этим стандартам указывает на высший уровень здравоохранения, принятый в данном
          медицинском учреждении</p>
        <!-- /.text standart-card__text -->
      </div>
      <!-- /.standart-card -->
    </div>
    <!-- /.standart-wrapper -->
  </div>
  <!-- /.container standart-container -->
</section>
<!-- /.standart -->

<?php
include('components/footer.php');

// get_footer();
?>