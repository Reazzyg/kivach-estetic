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

  <img src="<?get_img_path()?>body-bg-left.svg" alt="" class="devider-bg devider-bg-left devider-bg-max">
  <img src="<?get_img_path()?>body-bg-right.svg" alt="" class="devider-bg devider-bg-right devider-bg-max">
  <!--  -->

  <img src="<?get_img_path()?>body-bg-left-1500.svg" alt="" class="devider-bg devider-bg-left devider-bg-1500">
  <img src="<?get_img_path()?>body-bg-right-1500.svg" alt="" class="devider-bg devider-bg-right devider-bg-1500">
  <!--  -->

  <img src="<?get_img_path()?>body-bg-left-1200.svg" alt="" class="devider-bg devider-bg-left devider-bg-1200">
  <img src="<?get_img_path()?>body-bg-right-1200.svg" alt="" class="devider-bg devider-bg-right devider-bg-1200">
  <!--  -->

  <img src="<?get_img_path()?>body-bg-left-992.svg" alt="" class="devider-bg devider-bg-left devider-bg-992">
  <img src="<?get_img_path()?>body-bg-right-992.svg" alt="" class="devider-bg devider-bg-right devider-bg-992">
  <!--  -->

  <img src="<?get_img_path()?>body-bg-left-768.svg" alt="" class="devider-bg devider-bg-left devider-bg-768">
  <img src="<?get_img_path()?>body-bg-right-768.svg" alt="" class="devider-bg devider-bg-right devider-bg-768">
  <!--  -->
  <div class="container devider-container">
    <h2 class="title">Пластические операции <b>премиум-класса</b> с соблюдением международных стандартов</h2>
  </div>
  <!-- /.container devider-container -->
</section>
<!-- /.devider -->


<section class="about">
  <div class="container about-container">
    <img src="<?get_img_path()?>clinic.png" alt="" class="about__img brs30">
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
    <div class="standart-wrapper brs30">
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


<section class="aftercare">
  <div class="container aftercare-container">
    <div class="aftercare-wrapper">
      <div class="aftercare-card brs30">
        <h2 class="title aftercare-card__title">Пост-операционная реабилитация на основе <b>anti-age технологий</b></h2>
        <p class="text aftercare-card__text">Это завершающий этап хирургического вмешательства. Для его успешного
          прохождения вы можете руководствоваться нашими рекомендациями по восстановлению или воспользоваться
          специальной программой.
        </p>
        <p class="text aftercare-card__text ">Эта программа разработана на основе многолетних исследований
          в области
          реабилитологии и anti-age медицины. Используя эти знания, мы подобрали курс процедур, ускоряющих заживление
          тканей и снижающих риск осложнений</p>

        <div class="aftercare-description">
          <img src="<?get_img_path()?>tech-bg.jpg" alt="" class="aftercare-description__img">
          <p class="text aftercare-description__text brs30">Хирург А.В.Иванов, хирург В.А.Петров, медсестра
            А.А.Васильева в
            операционной клиники</p>
        </div>
        <!-- /.aftercare-description -->
        <a href="" class="button aftercare-card__button">Подробнее</a>
      </div>
      <!-- /.aftercare-card -->
    </div>
    <!-- /.aftercare-wrapper -->
  </div>
  <!-- /.container aftercare-container -->
</section>
<!-- /.aftercare -->


<section class="devider devider-big">
  <!-- 5 вариантов картинок на каждое разрешение???? -->

  <img src="<?get_img_path()?>body-bg-left.svg" alt="" class="devider-bg devider-bg-left devider-bg-max">
  <img src="<?get_img_path()?>body-bg-right.svg" alt="" class="devider-bg devider-bg-right devider-bg-max">
  <!--  -->

  <img src="<?get_img_path()?>body-bg-left-1500.svg" alt="" class="devider-bg devider-bg-left devider-bg-1500">
  <img src="<?get_img_path()?>body-bg-right-1500.svg" alt="" class="devider-bg devider-bg-right devider-bg-1500">
  <!--  -->

  <img src="<?get_img_path()?>body-bg-left-1200.svg" alt="" class="devider-bg devider-bg-left devider-bg-1200">
  <img src="<?get_img_path()?>body-bg-right-1200.svg" alt="" class="devider-bg devider-bg-right devider-bg-1200">
  <!--  -->

  <img src="<?get_img_path()?>body-bg-left-992.svg" alt="" class="devider-bg devider-bg-left devider-bg-992">
  <img src="<?get_img_path()?>body-bg-right-992.svg" alt="" class="devider-bg devider-bg-right devider-bg-992">
  <!--  -->

  <img src="<?get_img_path()?>body-bg-left-768.svg" alt="" class="devider-bg devider-bg-left devider-bg-768">
  <img src="<?get_img_path()?>body-bg-right-768.svg" alt="" class="devider-bg devider-bg-right devider-bg-768">
  <!--  -->
  <div class="container devider-container">
    <h2 class="title">Новое качество жизни вместе с «Кивач Эстетик»</h2>
    <p class="text">1. При обращении в клинику вы получите консультацию хирурга. Если необходимы дополнительные
      исследования, сможете воспользоваться нашим диагностическим комплексом.
    </p>
    <p class="text">2. При наличии показаний будет проведена операция. Наш персонал непрерывно работает над тем,
      чтобы обеспечить вам лечение и обслуживание премиального класса, а также безопасность и конфиденциальность.
    </p>
    <p class="text">3. После операции вы получите рекомендации хирурга. В некоторых случаях требуется особый уход,
      поэтому к вашим услугам комфортный номер и питание из меню нашего ресторана, а также тактичное наблюдение
      со стороны медперсонала.
    </p>
    <p class="text">4. При соблюдении рекомендаций хирурга реабилитационный период пройдёт без осложнений. Возможен
      ряд ограничений, но все они носят временный характер. По мере восстановления тканей ограничения снимаются.
    </p>
    <p class="text">5. По истечении реабилитационного периода начнётся новый этап вашей жизни. Состояние вашего
      здоровья, преобразившаяся внешность, изменившееся самоощущение вдохновят вас на достижение целей, которые раньше
      казались недоступными. Вы станете более активны, привлекательны и уверены в себе. Вы подниметесь на следующую
      ступень, чтобы смело приступить к реализации своих планов.</p>
  </div>
  <!-- /.container devider-container -->
</section>
<!-- /.devider -->


<section class="rooms">
  <div class="container rooms-container">
    <h2 class="subtitle">Пациентам клиники, проходящим программу реабилитации, предоставляются </h2>
    <h2 class="title">комфортабельные номера категории «5 звёзд»</h2>
    <div class="rooms-wrapper">
      <img src="<?get_img_path()?>room1.jpg" alt="" class="rooms__img">
      <div class="rooms-wrap">
        <img src="<?get_img_path()?>room2.jpg" alt="" class="rooms__img">
        <img src="<?get_img_path()?>room3.jpg" alt="" class="rooms__img">
      </div>
      <!-- /.rooms-wrap -->
    </div>
    <!-- /.rooms-wrapper -->
  </div>
  <!-- /.container rooms-container -->
</section>
<!-- /.rooms -->

<? include('components/specialists.php') ?>



<? include('components/footer.php') ?>