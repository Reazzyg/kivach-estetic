<?
$title = 'Эндоскопическая полипэктомия кишечника';
$subtitle = 'Удаление полипов';
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
  //       'rino1-1.png',
  //       'rino1-2.png',
  //       'rino1-3.png',
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
  <h2 class="subtitle">Эндоскопическая полипэктомия кишечника</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text">Удаление полипов эндоскопическим методом, которое выполняется одновременно с <a
          href="/endoscopy/vks/">видеоколоноскопией.</a></p>
      <p class="text info__text">В «Кивач Эстетик» не проводится удаление полипов из пищевода и желудка в связи с
        особенностями кровообращения этих органов и повышенным риском осложнений. В этих случаях необходимо обращаться в
        многопрофильный стационар.</p>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото коррекции формы носа" class="info__img brs30 ">
  </div>
</section>



<section class="info reverse">
  <h2 class="subtitle">Полипы в могут перерасти в злокачественную форму</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text">Полипы – это доброкачественные образования, которые не представляют опасности до тех пор, пока они
        не разрослись или не имеют признаков перерождения. По мере увеличения их размера или количества возникает риск
        значительного повреждения слизистой, кровотечений, изъязвления новообразования и его перерождения в раковую
        опухоль. Поэтому удалённые во время процедуры новообразования отправляются на дополнительное исследование. Это
        необходимая мера, которая позволит снять подозрения на онкологию или выявить опасное заболевание на ранней
        стадии, чтобы облегчить его лечение.</p>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото пьезот" class="info__img brs30 ">
  </div>
</section>


<section class="info center">
  <h2 class="subtitle">Некоторые причины образования полипов:</h2>
  <div class="container">
    <div class="info-wrapper">
      <ul class="info-list">
        <li class="info-list__item text">генетическая предрасположенность;</li>
        <li class="info-list__item text">перенесенные инфекции;</li>
        <li class="info-list__item text">воспалительный процесс;</li>
        <li class="info-list__item text">гормональные нарушения.</li>

      </ul>
      <p class="text">При обнаружении полипов требуется регулярное обследование. Современное эндоскопическое
        оборудование обладает высочайшей информативностью — достаточной для обнаружения новообразований даже самых
        незначительных размеров.</p>
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /.info grid -->



<section class="info reverse">
  <h2 class="subtitle">Симптоматика</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text">Полипы могут быть доброкачественными или злокачественными. Симптомы их наличия чаще отсутствуют.
        Поэтому важно проводить регулярные обследования. В особенности это относится к людям старше 50-ти лет или к тем,
        у кого в семейном анамнезе наблюдались полипоз и/или онкология органов желудочно-кишечного тракта.</p>
      <p><b>Косвенные признаки наличия полипов в толстом кишечнике:</b> ректальное кровотечение; кровь в стуле; запор
        или диарея; боли в животе.</p>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото пьезот" class="info__img brs30 ">
  </div>
</section>



<section class="info center">
  <h2 class="subtitle">Пройдите обследование, чтобы обезопасить себя в дальнейшем. Проявите заботу о близких, выбрав для
    них диагностику в «Кивач Эстетик».</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text">Выявление заболевания на ранней стадии сделает его лечение более эффективным, более комфортным и
        менее затратным. Подавляющее большинство даже самых тяжёлых патологий при своевременном выявлении успешно
        поддаются амбулаторному лечению.</p>
      <p class="text">Свяжитесь с нашим специалистом, чтобы записаться на первичный осмотр.</p>
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /.info -->



<section class="feedback">
  <div class="container feedback-container">
    <img class="feedback__img" src="<? get_img_path() ?>form-doc.png" alt="фото врача">
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
      <li class="info-list__item text">часто повторяющиеся кровотечения из кишечника;</li>
      <li class="info-list__item text">локализация полипов в месте перехода прямой кишки в сигмовидную;</li>
      <li class="info-list__item text">образование крупных полипов или скопления полипов.</li>
    </ul>
    <ul class="info-list">
      <li class="subtitle">Противопоказания</li>
      <li class="info-list__item text">критические стенозы;</li>
      <li class="info-list__item text">острые инфекционные заболевания;</li>
      <li class="info-list__item text">полипы более 80 мм;</li>
      <li class="info-list__item text">злокачественные новообразования;</li>
      <li class="info-list__item text">инфаркт, инсульт;</li>
      <li class="info-list__item text">тяжёлые формы сердечно-лёгочной недостаточности;</li>
      <li class="info-list__item text">воспалительные процессы слизистой органов ЖКТ.</li>
    </ul>


  </div>
  <!-- /.container -->
</section>
<!-- /.info grid -->


<section class="page bg">
  <div class="container">
    <h2 class="subtitle">Эндоскопическая полипэктомия в «Кивач Эстетик» – это операция в клинике с мировым именем и
      безупречной репутацией</h2>

    <ul class="info-list">
      <li class="info-list__item text">Лечение и обслуживание в соответствии с мировыми стандартами EFQM и JCI,
        которые устанавливают эталонные критерии качества и безопасности на оказание услуг premium-класса.</li>
      <li class="info-list__item text">Щадящий режим обследования и проведения операции.</li>
      <li class="info-list__item text">Применение эффективных анестетиков или медикаментозной седации.</li>
      <li class="info-list__item text">Короткий период восстановления и быстрая выписка.</li>
      <li class="info-list__item text">При необходимости: комфортабельный стационар и круглосуточное наблюдение
        медперсонала.</li>
      <li class="info-list__item text">Экспертная консультация специалистов.</li>
    </ul>
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



<section class="price">
  <div class="container">
    <div class="price-card">
      <h2 class="subtitle">Другие эндоскопические процедуры в «Кивач Эстетик»</h2>
      <p class="text">
        Если в ходе обследования будет выявлен ряд патологий, включая язвенное поражение, опухоли и полипы, пациент для
        уточнения диагноза или удаления полипов может быть направлен на другие эндоскопические процедуры:
      </p>
      <ul class="info-list">
        <li class="info-list__item">
          <b>Видеогастроскопия.</b> Диагностический осмотр пищевода и желудка с помощью эндоскопического оборудования
          экспертного класса.
          <a href="/endoscopy/vgs/"> Подробнее – здесь.</a>
        </li>
        <li class="info-list__item">
          <b>Видеокапсульная эндоскопия.</b> Неинвазивное высокоточное обследование желудочно-кишечного тракта с
          применением Hi-Tech оборудования.
          <a href="/endoscopy/vks/"> Подробнее – здесь.</a>
        </li>
        <li class="info-list__item">
          <b>Видеоколоноскопия.</b> Диагностический осмотр толстого кишечника с помощью эндоскопического оборудования
          экспертного класса.
          <a href="/endoscopy/vks/"> Подробнее – здесь. </a>
        </li>
      </ul>
    </div>
    <!-- /.price-card -->

    <div class="price-card-small">
      <div class="price-card-wrapper">
        <h3 class="subtitle">Видеокапсульная эндоскопия</h3>
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
        Видеокапсульная эндоскопия
      </h3>
    </div>

  </div>
  <!-- /.container -->
</section>
<!-- /.price -->


<? getDoctorInfo('Олег ПАНЧЕНКО');
?>

<? getDoctorInfo('Кирилл ПЯТКИН');
?>


<section class="question">
  <div class="container">
    <h2 class="subtitle">Часто задаваемые вопросы</h2>
    <ul class="info-list">
      <li class="info-list__item">
        <h3 class="subtitle question__title">Насколько дискомфортна процедура?<img
            src="<? get_img_path() ?>arrow-down-dark.svg" alt="" class="question__img"> </h3>
        <div class="text question__answer">
          <p> Процедура может быть несколько неприятной. Чтобы снизить дискомфорт, следует детально выполнять
            рекомендации врача. Для полного устранения дискомфорта рекомендуется медикаментозная седация.</p>
        </div>
      </li>
      <li class="info-list__item">
        <h3 class="subtitle question__title">Почему лучше проводить процедуру под седацией?
          <img src="<? get_img_path() ?>arrow-down-dark.svg" alt="" class="question__img">
        </h3>
        <div class="text question__answer">
          <p>Медикаментозная седация – это вид анестезии, предполагающий погружение пациента в непродолжительный сон.
            Это комфортно не только для пациента, но и рекомендуется в целях повышения информативности обследования, т.
            к. седация исключает рефлекторные или случайные движения пациента, могущие помешать осмотру.</p>
        </div>
      </li>
      <li class="info-list__item">
        <h3 class="subtitle question__title">Существуют ли ограничения после проведения седации (в постнаркозном
          периоде)?
          <img src="<? get_img_path() ?>arrow-down-dark.svg" alt="" class="question__img">
        </h3>
        <div class="text question__answer">
          <p>В ближайшие 3 часа после анестезии не рекомендуется плавание и управление транспортными средствами.</p>
        </div>
      </li>
      <li class="info-list__item">
        <h3 class="subtitle question__title">Как долго продолжается обследование?
          <img src="<? get_img_path() ?>arrow-down-dark.svg" alt="" class="question__img">
        </h3>
        <div class="text question__answer">
          <p>В среднем с учётом биопсии обследование длится 20 минут.</p>
        </div>
      </li>
      <li class="info-list__item">
        <h3 class="subtitle question__title">Как долго я пробуду в клинике?
          <img src="<? get_img_path() ?>arrow-down-dark.svg" alt="" class="question__img">
        </h3>
        <div class="text question__answer">
          <p>Рекомендуется прибытие в клинику за 1 час до обследования. Длительность всей процедуры, включая
            консультацию врачей и проведение обследования с учётом седации и периода восстановления составляет до 1,5
            часов. Общее время пребывания в клинике составит от 2-х часов (если пациент отправится домой на такси) до
            5-ти часов (если пациент задержится на период полного восстановления). Мы рекомендуем остаться в клинике на
            один день. Вам будет предоставлен комфортабельный номер, полное обслуживание и круглосуточное медицинское
            наблюдение.</p>
        </div>
      </li>
      <li class="info-list__item">
        <h3 class="subtitle question__title">Когда я узнаю результаты?
          <img src="<? get_img_path() ?>arrow-down-dark.svg" alt="" class="question__img">
        </h3>
        <div class="text question__answer">
          <p>Результаты известны сразу. Они передаются вам на цифровом носителе. Если во время процедуры проводилась
            биопсия, то понадобится дополнительное время на лабораторное исследование тканей. Результаты биопсии будут
            предоставлены позже — тоже в цифровом виде.</p>
        </div>
      </li>
      <li class="info-list__item">
        <h3 class="subtitle question__title">Возможно ли проведение процедуры при беременности или при грудном
          вскармливании?
          <img src="<? get_img_path() ?>arrow-down-dark.svg" alt="" class="question__img">
        </h3>
        <div class="text question__answer">
          <p>Возможно, но с рядом оговорок. Необходимо соотнести все предполагаемые риски с той пользой, которую можно
            получить от обследования. Для принятия решения требуется консультация со специалистами.</p>
        </div>
      </li>
      <li class="info-list__item">
        <h3 class="subtitle question__title">Как подготовиться к обследованию?
          <img src="<? get_img_path() ?>arrow-down-dark.svg" alt="" class="question__img">
        </h3>
        <div class="text question__answer">
          <p>Подготовка не требует от пациента специальных знаний, но потребует определённого внимания к деталям.
            Исчерпывающая информация содержится в памятке.</p>
        </div>
      </li>
    </ul>
  </div>
  <!-- /.container -->
</section>
<!-- /.questions -->



<section class="info center">
  <h2 class="subtitle">Информация для скачивания</h2>
  <div class="container">

    <ul class="info-list">
      <li class="info-list__item text"><a href="/attachments/" target="_blank" rel="noopener noreferrer">Больше
          ответов на вопросы об эндоскопии. </a></li>
      <li class="info-list__item text"><a href="/attachments/anesteziology_memo.pdf" target="_blank"
          rel="noopener noreferrer">Об анестезии во время обследования. </a></li>
      <li class="info-list__item text"><a href="/attachments/" target="_blank" rel="noopener noreferrer">О
          видеогастроскопии и подготовке к обследованию. </a></li>
      <li class="info-list__item text"><a href="/attachments/" target="_blank" rel="noopener noreferrer">О
          видеокапсульной эндоскопии и подготовке к ней. </a></li>
      <li class="info-list__item text"><a href="/attachments/" target="_blank" rel="noopener noreferrer">О
          видеоколоноскопии и подготовке к обследованию. </a></li>
    </ul>

  </div>
</section>



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



<!-- comments -->

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


<? include_once $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php' ?>