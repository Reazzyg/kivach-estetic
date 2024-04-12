<?
$title = 'Абдоминопластика';
$subtitle = 'Подтяжка живота';
include_once $_SERVER['DOCUMENT_ROOT'] . '/components/header.php';

load_template("page-hero", array(
  'title' => $title,
  'subtitle' => $subtitle,
  'slides' => array(
    array(
      'images' => array(
        'rino1.png',
        'rino2.png',
        'rino3.png',
      )
    ),
    array(
      'images' => array(
        'rino1.png',
        'rino2.png',
        'rino3.png',
      )
    ),
    array(
      'images' => array(
        'rino1.png',
        'rino2.png',
        'rino3.png',
      )
    )
  )
));
?>


<section class="info">
  <h2 class="subtitle">Абдоминопластика</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text">Операция решает проблему обвисшего живота. Удаление растянутой кожи с его средней и
        нижней части, частичное удаление подкожно-жировой клетчатки и укрепление абдоминальных мышц приведёт в
        порядок выпирающий, дряблый живот, уменьшит его размер и сделает талию тоньше.</p>
      <p class="text info__text">Операция одинаково успешно проводится для женщин и мужчин, во всех случаях придавая
        телу более эстетичную форму, повышая сексуальную привлекательность и позволяя вернуться к ношению более
        открытой пляжной одежды.</p>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото коррекции формы носа" class="info__img brs30 ">
  </div>
</section>


<section class="info reverse">
  <h2 class="subtitle">Наилучший эстетический эффект абдоминопластика продемонстрирует в случаях:</h2>
  <div class="container">
    <div class="info-wrapper">
      <ul class="info-list">
        <li class="info-list__item text">Мужчины или женщины, находящиеся в относительно хорошей форме и желающие
          избавиться от излишних жировых отложений или дряблой кожи на животе.</li>
        <li class="info-list__item text">Мужчины или женщины, в результате похудения перенёсшие значительную потерю
          массы тела, что привело к образованию внизу живота кожаной складки.</li>
        <li class="info-list__item text">Женщины, у которых в результате беременности мышцы живота и кожа растянулись
          до такой степени, что они самостоятельно не могут вернуться в нормальное состояние.</li>
        <li class="info-list__item text">Пожилые люди, у которых в результате незначительного ожирения и естественных
          возрастных факторов ухудшилась эластичность кожи.</li>
      </ul>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото пьезот" class="info__img brs30 ">
  </div>
</section>

<section class="info">
  <h2 class="subtitle">Коррекция рубцов и растяжек / удаление пупочной грыжи</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text">Помимо эстетического эффекта по изменению формы и внешнего вида живота,
        абдоминопластика позволяет:</p>
      <ul class="info-list">
        <li class="info-list__item text">скорректировать послеоперационные рубцы в абдоминальной области;</li>
        <li class="info-list__item text">сделать менее заметными выраженные растяжки;</li>
        <li class="info-list__item text">устранить послеродовое расхождение прямых мышц живота;</li>
        <li class="info-list__item text">удалить пупочную грыжу (см <a href="">Герниопластика</a>).</li>

      </ul>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото коррекции формы носа" class="info__img brs30 ">
  </div>
</section>

<section class="info center">
  <h2 class="subtitle">Избавьтесь от эстетических ограничений и ментального дискомфорта. Верните своему телу
    естественную привлекательность и сексуальность. </h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text">Чтобы узнать, подходит ли абдоминопластика для решения вашей проблемы и какие
        результаты можно получить после операции, свяжитесь с нашим специалистом.</p>
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
      <li class="info-list__item text">Избыток подкожной жировой клетчатки в области живота.</li>
      <li class="info-list__item text">Птоз (опущение) мягких тканей передней брюшной стенки.</li>
      <li class="info-list__item text">Складки, кожно-жировой «фартук» в нижнем отделе живота.</li>
      <li class="info-list__item text">Выраженные растяжки.</li>
      <li class="info-list__item text">Слабовыраженный контур талии.</li>
      <li class="info-list__item text">Послеродовое расхождение прямых мышц живота с растяжением кожи.</li>
      <li class="info-list__item text">Послеоперационные рубцы в области живота.</li>
      <li class="info-list__item text"><a href="">Пупочная грыжа. </a></li>
    </ul>
    <ul class="info-list">
      <li class="subtitle">Противопоказания</li>
      <li class="info-list__item text">Острые и хронические заболевания в стадии обострения.</li>
      <li class="info-list__item text">Сахарный диабет в стадии суб- и декомпенсации.</li>
      <li class="info-list__item text">Заболевания щитовидной железы.</li>
      <li class="info-list__item text">Онкологические заболевания в острой форме и стадии ремиссии, длящейся менее
        5-ти лет.</li>
      <li class="info-list__item text">Системные заболевания.</li>
      <li class="info-list__item text">Выраженное ожирение.</li>
      <li class="info-list__item text">Заболевания крови, нарушения свертываемости.</li>
      <li class="info-list__item text"> Беременность, лактация.</li>
    </ul>


  </div>
  <!-- /.container -->
</section>
<!-- /.info grid -->


<section class="price">
  <div class="container">
    <div class="price-card">
      <h2 class="subtitle">Качество жизни после операции</h2>
      <p class="text">
        Операция избавит от многих эстетических проблем, связанных с внешним видом живота. В большинстве случаев это
        единственный способ восстановления утраченной формы, реконструкции мышечного каркаса, избавления от жирового
        «фартука», растяжек и послеоперационных рубцов.
      </p>
      <p class="text">Если из-за своей фигуры вы испытываете стеснение на пляже, в бассейне, в сексуальной сфере да и
        вообще в повседневности, абдоминопластика вернёт вам уверенность в себе. Больше открытой одежды, больше свободы
        в поведении, больше эротических переживаний, больше одобрительных взглядов со стороны окружающих.</p>
    </div>
    <!-- /.price-card -->

    <div class="price-card-small">
      <div class="price-card-wrapper">
        <h3 class="subtitle">Абдоминопластика</h3>
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
        Ринопластика ЛЮБОЙ степени сложности
      </h3>
    </div>

  </div>
  <!-- /.container -->
</section>
<!-- /.price -->


<section class="info center">
  <h2 class="subtitle">Абдоминопластика в «Кивач Эстетик» – это операция в клинике с мировым именем и безупречной
    репутацией</h2>
  <div class="container">
    <div class="info-wrapper">
      <ul class="info-list">
        <li class="info-list__item">Лечение и обслуживание в соответствии с мировыми стандартами EFQM и JCI, которые
          устанавливают эталонные критерии на оказание услуг premium-класса.
        </li>
        <li class="info-list__item">Комфортабельный стационар.</li>
        <li class="info-list__item">Круглосуточное наблюдение медперсонала.</li>
        <li class="info-list__item">Минимальная травматизация окружающих тканей.</li>
        <li class="info-list__item">Короткий период восстановления.</li>
        <li class="info-list__item">Выписка в течение 24 часов.</li>
        <li class="info-list__item">Минимальный риск осложнений.</li>
        <li class="info-list__item">Экспертная консультация специалистов.</li>
      </ul>

    </div>

  </div>
</section>

<section class="info">
  <h2 class="subtitle">Операции проводит</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text"><b>Руслан Викторович БЕРЕЗИН</b> </p>
      <p class="text info__text">Врач-хирург, врач-флеболог</p>
      <ul class="info-list">
        <li class="info-list__item">2005 – диплом об окончании Петрозаводского госуниверситета по специальности
          «Лечебное дело».
        </li>
        <li class="info-list__item">2008 – диплом об окончании ординатуры в Петрозаводском госуниверситете по
          специальности «Хирургия».
        </li>
        <li class="info-list__item">2011 – диплом о профессиональной переподготовке в Государственном Научном Центре
          колопроктологии Минздравсоцразвития РФ по специальности «Колопроктология».
        </li>
        <li class="info-list__item">2020 – сертификат специалиста по специальности «Колопроктология».
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
        Запишитесь на первичную консультацию, чтобы узнать, как с помощью абдоминопластики можно уменьшить размер вашего
        живота и скорректировать внешний вид вашей талии. Врач проведёт осмотр, назначит исследования (если они
        необходимы) и согласует с вами дату операции.
      </li>
      <li class="info-list__item">
        <h3 class="subtitle">Операция</h3>
        Проводится в клинике в день назначения. В зависимости от сложности займёт до 5-ти часов. Проходит под наркозом,
        поэтому боли вы не почувствуете.
      </li>
      <li class="info-list__item">
        <h3 class="subtitle">После операции</h3>
        Вы будете находиться в комфортабельных условиях под наблюдением медицинского персонала, а на следующий день,
        после осмотра специалистов и получения рекомендаций, сможете покинуть клинику.
      </li>
      <li class="info-list__item">
        <h3 class="subtitle">Исчезновение следов хирургического вмешательства</h3>
        Операция устранит избыток подкожно-жировой клетчатки, излишнюю кожу и укрепит абдоминальные мышцы, улучшив
        силуэт вашей талии. Разрезы производятся в тех местах, где они впоследствии будут незаметны, и ушиваются
        косметическим швом. По истечении восстановительного периода никаких внешних признаков хирургического
        вмешательства не сохранится.
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
          <li class="info-list__item tac"><a target="_blank" class="" href="">Меню для пациентов, разработанное
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
          <p>После операции предпочтение отдается 5-дневному постельному режиму. В эти дни
            вы можете провести в клинике и воспользоваться лечением, которое позволит в меньшей степени сократить время
            восстановления.</p>
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
        <a class="question__title" href="">Больше ответов на вопросы – здесь. </a>
      </li>

      <li class="info-list__item"><a class=" question__title" href="">Вопросы по анестезиологической помощи –
          здесь. </a>
      </li>

      <li class="info-list__item"> <a class=" question__title" href="">Памятка пациенту по подготовке к операции
          – здесь. </a>
      </li>
      <li class="info-list__item"> <a class=" question__title" href="">Перечень необходимых исследований –
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
