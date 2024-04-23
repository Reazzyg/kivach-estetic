<?
$title = 'Блефаропластика';
$subtitle = 'Хирургия век';
include_once $_SERVER['DOCUMENT_ROOT'] . '/components/header.php';

load_template("page-hero", array(
  'title' => $title,
  'subtitle' => $subtitle,
  // 'slides' => array(
  //   array(
  //     'images' => array(
  //       'rino1.png',
  //       'rino2.png',
  //       'rino3.png',
  //     )
  //   ),
  //   array(
  //     'images' => array(
  //       'rino1.png',
  //       'rino2.png',
  //       'rino3.png',
  //     )
  //   ),
  //   array(
  //     'images' => array(
  //       'rino1.png',
  //       'rino2.png',
  //       'rino3.png',
  //     )
  //   )
  // )
));

?>


<section class="info">
  <h2 class="subtitle">Блефаропластика</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text">Пластическая операция, которая скорректирует форму век. Хирург удалит излишки мягких
        тканей, чтобы приподнять нависшие брови, убрать глубокие морщины и мешки под глазами.</p>
      <p class="text info__text">Блефаропластика сделает ваши глаза моложе. Рекомендована как женщинам, так и мужчинам,
        стремящимся выглядеть свежо и привлекательно.</p>
      <p class="text info__text">Операция не влияет на зрение. Её можно сочетать с подтяжкой бровей, подтяжкой лица и
        шлифовкой кожи.</p>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото коррекции формы носа" class="info__img brs30 ">
  </div>
</section>

<section class="page bg">
  <div class="container">
    <h2 class="subtitle">Верхняя блефаропластика</h2>
    <p class="text">Удаляет с верхних век следы возраста и усталости, возвращая взгляду молодость, открытость и упоение
      жизнью.</p>
    <div class="page-wrapper">
      <img src="<? get_img_path() ?>rino-text-1.png" alt="фото сплинтов" class="page__img">
      <img src="<? get_img_path() ?>rino-text-1.png" alt="фото сплинтов" class="page__img">
      <img src="<? get_img_path() ?>rino-text-1.png" alt="фото сплинтов" class="page__img">
    </div>
    <!-- /.page-wrapper -->
  </div>
  <!-- /.container -->
</section>
<!-- /.page -->

<section class="page bg">
  <div class="container">
    <h2 class="subtitle">Нижняя блефаропластика</h2>
    <p class="text">Удаляет мешки под глазами, омолаживая лицо. Больше никаких следов от бессонных ночей, забот и
      прожитых лет.</p>
    <div class="page-wrapper">
      <img src="<? get_img_path() ?>rino-text-1.png" alt="фото сплинтов" class="page__img">
      <img src="<? get_img_path() ?>rino-text-1.png" alt="фото сплинтов" class="page__img">
      <img src="<? get_img_path() ?>rino-text-1.png" alt="фото сплинтов" class="page__img">
    </div>
    <!-- /.page-wrapper -->
  </div>
  <!-- /.container -->
</section>
<!-- /.page -->

<section class="page bg">
  <div class="container">
    <h2 class="subtitle">Европеизация век</h2>
    <p class="text">Если вас смущает азиатская пикантность, мы скорректируем разрез глаз, приблизив ваш взгляд к
      европейскому.</p>
    <div class="page-wrapper">
      <img src="<? get_img_path() ?>rino-text-1.png" alt="фото сплинтов" class="page__img">
      <img src="<? get_img_path() ?>rino-text-1.png" alt="фото сплинтов" class="page__img">
      <img src="<? get_img_path() ?>rino-text-1.png" alt="фото сплинтов" class="page__img">
    </div>
    <!-- /.page-wrapper -->
  </div>
  <!-- /.container -->
</section>
<!-- /.page -->

<section class="page bg">
  <div class="container">
    <h2 class="subtitle">Кантопексия</h2>
    <p class="text">Скорректировав область внешних уголков глаз, избавим вас от «грозного взгляда» и усталого вида.</p>
    <div class="page-wrapper">
      <img src="<? get_img_path() ?>rino-text-1.png" alt="фото сплинтов" class="page__img">
      <img src="<? get_img_path() ?>rino-text-1.png" alt="фото сплинтов" class="page__img">
      <img src="<? get_img_path() ?>rino-text-1.png" alt="фото сплинтов" class="page__img">
    </div>
    <!-- /.page-wrapper -->
  </div>
  <!-- /.container -->
</section>
<!-- /.page -->


<section class="info center">
  <h2 class="subtitle">Влюбляются в глаза. Воспользуйтесь блефаропластикой, чтобы дать окружающим возможность влюбляться
    в вас чаще. </h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text">Чтобы узнать, какой вид блефаропластики вам нужен и какие результаты можно получить
        после операции, свяжитесь с нашим специалистом.</p>
    </div>
  </div>
</section>


<section class="feedback">
  <div class="container feedback-container">
    <img class="feedback__img" src="<? get_img_path() ?>form-doc.png" alt="">
    <p class="title">Напишите нам</p>
    <p class="text">Сотрудник клиники свяжется с вами в течение рабочего дня</p>
    <sendForm></sendForm>
  </div>
  <!-- /.container feedback-container -->
</section>
<!-- /.feedback -->


<section class="info grid contraindications">
  <div class="container">
    <ul class="info-list">
      <li class="subtitle">Показания</li>
      <li class="info-list__item text">Избыток кожи, нависание верхних и опущение нижних век.</li>
      <li class="info-list__item text">Опущение наружных уголков глаз.</li>
      <li class="info-list__item text">Складки в области нижнего века.</li>
      <li class="info-list__item text">Мешки, отеки под глазами.</li>
      <li class="info-list__item text">Жировые грыжи на веках.</li>
      <li class="info-list__item text">Асимметрия глаз.</li>
      <li class="info-list__item text">Посттравматические дефекты век.</li>

    </ul>
    <ul class="info-list">
      <li class="subtitle">Противопоказания</li>
      <li class="info-list__item text">Сахарный диабет в стадии декомпенсации.</li>
      <li class="info-list__item text">Онкологические заболевания в острой форме и стадии ремиссии, длящейся менее
        5-ти лет.</li>
      <li class="info-list__item text">Заболевания крови.</li>
      <li class="info-list__item text">Хронические и инфекционные заболевания век.</li>
      <li class="info-list__item text">Склонность к образованию келоидных рубцов.</li>
      <li class="info-list__item text">Беременность, лактация.</li>
    </ul>
  </div>
  <!-- /.container -->
</section>
<!-- /.info grid -->



<section class="price">
  <div class="container">
    <div class="price-card">
      <h2 class="subtitle">Блефаропластика омолаживает</h2>
      <ul class="info-list">
        <li class="info-list__item text">Свежий вид лица.</li>
        <li class="info-list__item text">Никаких мешков и отеков под глазами.</li>
        <li class="info-list__item text">Эластичная и упругая кожа век.</li>
        <li class="info-list__item text">Сглаживание эффекта «тяжелого века».</li>
      </ul>

      <p class="text">
        В целом, операция помогает исправить эстетические недостатки в области век, связанные с возрастными изменениями
        и физиологическими особенностями.
      </p>

    </div>
    <!-- /.price-card -->

    <div class="price-card-small">
      <div class="price-card-wrapper">
        <h3 class="subtitle">Блефаропластика</h3>
        <p>«ВСЁ ВКЛЮЧЕНО»</p>
        <p class="price-card__price">
          <span class="price__new subtitle">140 000<span class="price__value">₽</span> </span>
          <span class="price__old">150 000<span class="price__value">₽</span></span>
        </p>
      </div>
      <!-- /.price-card-wrapper -->

      <img src="<? get_img_path() ?>rino-nose.png" alt="фото ринопластики" class="price-card__bg">
    </div>
    <div class="price-card-small">
      <h3 class="subtitle ">
        Блефаропластика ЛЮБОЙ степени сложности
      </h3>
    </div>

  </div>
  <!-- /.container -->
</section>
<!-- /.price -->



<section class="info center">
  <h2 class="subtitle">Блефаропластика в «Кивач Эстетик» – это операция в клинике с мировым именем и безупречной
    репутацией</h2>
  <div class="container">
    <div class="info-wrapper">
      <ul class="info-list">
        <li class="info-list__item text">Лечение и обслуживание в соответствии с мировыми стандартами EFQM и JCI,
          которые устанавливают эталонные критерии на оказание услуг premium-класса.</li>
        <li class="info-list__item text">Комфортабельный стационар.</li>
        <li class="info-list__item text">Круглосуточное наблюдение медперсонала.</li>
        <li class="info-list__item text">Минимальная травматизация окружающих тканей.</li>
        <li class="info-list__item text">Короткий период восстановления.</li>
        <li class="info-list__item text">Выписка в течение 24 часов.</li>
        <li class="info-list__item text">Минимальный риск осложнений.</li>
        <li class="info-list__item text">Экспертная консультация специалистов.</li>
      </ul>
    </div>
  </div>
</section>



<section class="info">
  <h2 class="subtitle">Операции проводит</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text"><b>Александр Олегович ЗАЙЦЕВ</b> </p>
      <p class="text info__text">Пластический хирург.</p>
      <ul class="info-list">
        <li class="info-list__item">Окончил Петрозаводский госуниверситет и ординатуру при нём по специальности
          «Пластическая и реконструктивная хирургия».
        </li>
        <li class="info-list__item">Стажировался в BK HOSPITAL, г.Сеул, Южная Корея.
        </li>
        <li class="info-list__item">Постоянно принимает участие в международных симпозиумах и мастер-классах по
          пластической и реконструктивной хирургии.
        </li>

      </ul>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото пьезот" class="info__img brs30 ">
  </div>
</section>


<section class="order">
  <div class="container">
    <ul class="info-list info-list-order">
      <li class="info-list__item">
        <h3 class="subtitle">Первичная консультация</h3>
        Запишитесь на первичную консультацию, чтобы узнать, как с помощью блефаропластики подчеркнуть уникальную красоту
        ваших глаз. Врач проведёт осмотр, назначит исследования (если они необходимы) и согласует с вами дату операции.
      </li>
      <li class="info-list__item">
        <h3 class="subtitle">Операция</h3>
        Проводится в клинике в день назначения. В зависимости от сложности займёт до 3-х часов. Проходит под наркозом,
        поэтому боли вы не почувствуете.
      </li>
      <li class="info-list__item">
        <h3 class="subtitle">После операции</h3>
        Вы будете находиться в комфортабельных условиях под наблюдением медицинского персонала, а на следующий день,
        после осмотра специалистов и получения рекомендаций, сможете покинуть клинику.
      </li>
      <li class="info-list__item">
        <h3 class="subtitle">Исчезновение следов хирургического вмешательства</h3>
        Разрезы производятся в тех местах, где они впоследствии будут незаметны, и ушиваются косметическим швом. По
        истечении восстановительного периода внешних признаков хирургического вмешательства не сохранится.
      </li>
    </ul>
  </div>
  <!-- /.container -->
</section>
<!-- /.order -->



<section class="schedule">
  <h2 class="subtitle">Расписание пребывания в клинике</h2>
  <div class="container">
    <div class="wrapper">
      <img src="<? get_img_path() ?>room1.jpg" alt="фото номеров" class="schedule__img">
      <img src="<? get_img_path() ?>room1.jpg" alt="фото номеров" class="schedule__img">

      <div class="schedule-card brs30">
        <ul class="info-list">
          <li class="info-list__item"><span>08.00</span>asdasdasds pan</li>
          <li class="info-list__item"><span>09.00</span>sasd</li>
          <li class="info-list__item"><span>10.00</span>asdad</li>
          <li class="info-list__item"><span>11.00</span>asdasdasdasdspan</li>
          <li class="info-list__item"><span>12.00</span>asdasd</li>
          <li class="info-list__item"><span>08.00</span>asdasdasds pan</li>
          <li class="info-list__item"><span>09.00</span>sasd</li>
          <li class="info-list__item"><span>10.00</span>asdad</li>
          <li class="info-list__item"><span>11.00</span>asdasdasdasdspan</li>
          <li class="info-list__item"><span>12.00</span>asdasd</li>
          <li class="info-list__item tac"><a target="_blank" class="" href="/attachments/surgery_menu.pdf">Меню для
              пациентов, разработанное
              шеф-поваром ресторана
              клиники. </a></li>
        </ul>

      </div>

      <img src="<? get_img_path() ?>room1.jpg" alt="фото номеров" class="schedule__img">
      <img src="<? get_img_path() ?>room1.jpg" alt="фото номеров" class="schedule__img">

    </div>
    <!-- /.wrapper -->
  </div>
  <!-- /.container -->
</section>
<!-- /.schedule -->



<section class="question">
  <div class="container">
    <h2 class="subtitle">Часто задаваемые вопросы</h2>
    <ul class="info-list">
      <li class="info-list__item">
        <h3 class="subtitle question__title">Существуют ли альтернативы хирургическому вмешательству?
          <img src="<? get_img_path() ?>arrow-down-dark.svg" alt="" class="question__img">
        </h3>
        <div class="text question__answer">
          <p> К эстетической хирургии прибегают, когда возможности консервативной коррекции исчерпаны или не дают
            желаемого результата. При этом результат оперативного лечения – более яркий и долговечный.</p>
        </div>
      </li>

      <li class="info-list__item">
        <h3 class="subtitle question__title">Как долго я буду находиться в клинике?
          <img src="<? get_img_path() ?>arrow-down-dark.svg" alt="" class="question__img">
        </h3>
        <div class="text question__answer">
          <p>Чаще всего пациент находится в клинике сутки, но по показаниям может потребоваться более длительное
            пребывание в стационаре.</p>
        </div>
      </li>

      <li class="info-list__item">
        <h3 class="subtitle question__title">Понадобится ли помощь в уходе за собой после операции?
          <img src="<? get_img_path() ?>arrow-down-dark.svg" alt="" class="question__img">
        </h3>
        <div class="text question__answer">
          <p>После пластических операций у пациента сохраняется полная способность к самообслуживанию. Во время
            нахождения в стационаре в случае необходимости помощь окажет медсестра.</p>
        </div>
      </li>

      <li class="info-list__item">
        <h3 class="subtitle question__title">Будут ли проводиться перевязки и как часто?
          <img src="<? get_img_path() ?>arrow-down-dark.svg" alt="" class="question__img">
        </h3>
        <div class="text question__answer">
          <p>При нахождении в клинике перевязки проводятся 1 раз в день или по мере намокания повязки. После выписки
            перевязка производится с такой же периодичностью вплоть до снятия швов или по рекомендации врача.</p>
        </div>
      </li>

      <li class="info-list__item">
        <h3 class="subtitle question__title">Будут ли стоять дренажи? Когда их снимут?
          <img src="<? get_img_path() ?>arrow-down-dark.svg" alt="" class="question__img">
        </h3>
        <div class="text question__answer">
          <p>Если операция предусматривает установку дренажей, то они устанавливаются во время операции и снимаются в
            стационаре до выписки.</p>
        </div>
      </li>

      <li class="info-list__item">
        <a class="question__title" target="_blank" href="/attachments/surgery_memo.pdf">Больше ответов на вопросы –
          здесь. </a>
      </li>

      <li class="info-list__item">
        <a class=" question__title" target="_blank" href="/attachments/anesteziology_memo.pdf">Вопросы по
          анестезиологической помощи –
          здесь. </a>
      </li>

      <li class="info-list__item">
        <a class=" question__title" target="_blank" href="/attachments/surgery_preparation_memo.pdf">Памятка пациенту по
          подготовке к операции
          – здесь. </a>
      </li>
      <li class="info-list__item">
        <a class=" question__title" target="_blank" href="/attachments/surgery_exam_memo.pdf">Перечень необходимых
          исследований –
          здесь. </a>
      </li>
    </ul>
  </div>
  <!-- /.container -->
</section>
<!-- /.questions -->


<? include $_SERVER['DOCUMENT_ROOT'] . '/components/comments_main_page.php' ?>

<!-- ./comments -->
<div class="container">
  <navigation class="navigation"></navigation>
</div>


<section class="feedback feedback-full">
  <div class="container feedback-container">
    <p class="title">Напишите нам</p>
    <p class="text">Сотрудник клиники свяжется с вами в течение рабочего дня</p>
    <sendForm></sendForm>
  </div>
  <!-- /.container feedback-container -->
</section>
<!-- /.feedback -->

<?
include_once $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php';
