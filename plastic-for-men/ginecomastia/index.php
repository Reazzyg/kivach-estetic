<?
$title = 'Удаление гинекомастии';
$subtitle = 'Хирургическое уменьшение размера грудных желез у мужчин';
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
  <h2 class="subtitle">Хирургическое лечение гинекомастии</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text">При гинекомастии железистая ткань обеих молочных желез у мужчин увеличивается, что
        вызывает физический и психологический дискомфорт, придавая мужской груди неестественную форму.</p>
      <p class="text info__text">В большинстве случаев гинекомастия возникает на фоне гормонального дисбаланса, что
        может быть нормальным для младенческого возраста, подросткового периода полового созревания, а также в пожилом
        возрасте.</p>
      <p class="text info__text">Гинекомастия поддаётся лечению консервативными методами или в силу восстановления
        гормонального баланса проходит самостоятельно. К хирургии прибегают в редких случаях.</p>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото коррекции формы носа" class="info__img brs30 ">
  </div>
</section>


<section class="info center">
  <h2 class="subtitle">Ряд состояний внешне могут быть похожими на гинекомастию, но ею не являются:</h2>
  <div class="container">
    <div class="info-wrapper">
      <ul class="info-list">
        <li class="info-list__item text"><b>Псевдогинекомастия. </b>У некоторых людей, особенно страдающих ожирением,
          жировая ткань молочной железы может выглядеть похожей на гинекомастию.</li>
        <li class="info-list__item text"><b>Рак молочной железы. </b>У мужчин встречается крайне редко. Ещё реже
          встречаются раковые опухоли сразу двух молочных желез (правой и левой), расположенные симметрично в области
          сосков. Если патологическое изменение наблюдается только на одной стороне груди или смещено относительно
          соска, то с высокой долей вероятности это – не гинекомастия.</li>
        <li class="info-list__item text"><b>Мастит. </b>Воспаление ткани молочной железы. У мужчин практически не
          встречается</li>
        <li class="info-list__item text"><b>Липома. </b>Доброкачественное образование, состоящее из жировых клеток.
          Онкологическим заболеванием не является, физического дискомфорта не доставляет.</li>

      </ul>
      <p class="text">Чтобы поставить правильный диагноз, требуется обследование у специалистов.</p>
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



<section class="info grid">
  <div class="container">
    <ul class="info-list">

      <li class="subtitle">Симптомы гинекомастии</li>
      <li class="info-list__item text">Видимое увеличение молочных желез и изменение их конституции.</li>
      <li class="info-list__item text">Патологические выделения из сосков.</li>
      <li class="info-list__item text">Болезненные ощущения в области груди.</li>
      <li class="info-list__item text">Повышение чувствительности сосков.</li>
      <li class="info-list__item text">Уплотнение тканей молочных желез.</li>

    </ul>

    <ul class="info-list">

      <li class="subtitle">Показания к хирургическому лечению</li>
      <li class="info-list__item text">Истинная, смешанная гинекомастия, не поддающаяся консервативному лечению.</li>
      <li class="info-list__item text">Уплотненные железы.</li>
      <li class="info-list__item text">Опухолевое перерождение.</li>
      <li class="info-list__item text">Выраженный косметический дефект.</li>
      <li class="info-list__item text">Болевой синдром.</li>

    </ul>

    <ul class="info-list">

      <li class="subtitle">Противопоказания</li>
      <li class="info-list__item text">Возраст до 18 лет.</li>
      <li class="info-list__item text">Хронические заболевания в стадии обострения.</li>
      <li class="info-list__item text">Онкологические заболевания.</li>
      <li class="info-list__item text">Некомпенсированный сахарный диабет.</li>
      <li class="info-list__item text">Нарушение свертываемости крови.</li>
      <li class="info-list__item text">Психические заболевания.</li>
      <li class="info-list__item text">III-IV степень ожирения.</li>

    </ul>


  </div>
  <!-- /.container -->
</section>
<!-- /.info grid -->



<section class="info center">
  <h2 class="subtitle">Основные причины возникновения гинекомастии</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text">Гинекомастия вызвана дисбалансом между гормонами эстрогеном и тестостероном .Этот
        дисбаланс часто возникает естественным образом:</p>
      <ul class="info-list info__text">
        <li class="info-list__item text">у младенцев в возрасте от 0 до 3 недель;</li>
        <li class="info-list__item text">у подростков в период полового созревания в возрасте от 10 до 17 лет;</li>
        <li class="info-list__item text">у взрослых мужчин в возрасте 50+ лет.</li>
      </ul>

      <p class="text info__text">Гинекомастия также может быть вызвана:</p>

      <ul class="info-list info__text">

        <li class="info-list__item text">гормональными препаратами;</li>
        <li class="info-list__item text">некоторыми генетическими заболеваниями;</li>
        <li class="info-list__item text">некоторыми пищевыми добавками;</li>
        <li class="info-list__item text">ожирением или плохо сбалансированным питанием;</li>
        <li class="info-list__item text">злоупотреблением алкоголем;</li>
        <li class="info-list__item text">заболеваниями почек или печени;</li>
        <li class="info-list__item text">гипертиреозом;</li>
        <li class="info-list__item text">опухолями в яичках или надпочечниках.</li>
      </ul>
      <p class="text">В подавляющем большинстве случаев для лечения гинекомастии хирургическое вмешательство не
        требуется.</p>
    </div>

  </div>
</section>



<section class="info">
  <h2 class="subtitle">Исследования, которые могут понадобиться для постановки правильного диагноза и принятия решения о
    хирургическом вмешательстве:</h2>
  <div class="container">
    <div class="info-wrapper">

      <ul class="info-list">
        <li class="info-list__item text">Анализы крови.</li>
        <li class="info-list__item text">Рентген молочной железы (маммограмма).</li>
        <li class="info-list__item text">Компьютерная томография (КТ).</li>
        <li class="info-list__item text">Магнитно-резонансная томография (МРТ).</li>
        <li class="info-list__item text">Ультразвуковое исследование яичек (УЗИ).</li>
        <li class="info-list__item text">Биопсия тканей.</li>

      </ul>
      <p class="text">Прежде, чем делать эти исследования, проконсультируйтесь с нашим специалистом. Возможно, всё
        обстоит проще, чем вы думаете.</p>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото коррекции формы носа" class="info__img brs30 ">
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




<section class="info center">
  <h2 class="subtitle">Удаление гинекомастии в «Кивач Эстетик» – это операция в клинике с мировым именем и безупречной
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



<section class="info reverse">
  <h2 class="subtitle">Два варианта операции по удалению гинекомастии:</h2>
  <div class="container">
    <div class="info-wrapper">

      <ul class="info-list">
        <li class="info-list__item text"><b>Липосакция. </b>Удаление части жировой ткани из груди.</li>
        <li class="info-list__item text"><b>Мастэктомия. </b>Удаление ткани молочной железы. При небольшом количестве
          удаляемой ткани операцию можно выполнить через небольшие разрезы. Это сокращает время восстановления.</li>


      </ul>
      <p class="text">Иногда липосакцию и мастэктомию совмещают.</p>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото коррекции формы носа" class="info__img brs30 ">
  </div>
</section>




<section class="info">
  <h2 class="subtitle">Операции проводит</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text"><b>Рузанна Вардановна ХАЧАТРЯН</b> </p>
      <p class="text info__text">Пластический хирург</p>
      <ul class="info-list">

        <li class="info-list__item">Диплом Петрозаводского госуниверситета по специальности «Лечебное дело».
        </li>
        <li class="info-list__item">Клиническая интернатура на кафедре общей хирургии в С.-Петербургской медицинской
          академии последипломного образования по специальности «Челюстно-лицевая хирургия».
        </li>
        <li class="info-list__item">Московский областной НИИ им. Владимирского, ординатура по специальности «Врач -
          пластический хирург».
        </li>
        <li class="info-list__item">Удостоверение о повышении квалификации в С.-З. медицинском университете им.
          Мечникова по программе дополнительного профессионального образования «Хирургия».
        </li>
        <li class="info-list__item">Удостоверение о повышении квалификации в С.-З. медицинском университете им.
          Мечникова по программе дополнительного профессионального образования по циклу «Актуальные вопросы
          челюстно-лицевой хирургии».
        </li>
        <li class="info-list__item">Удостоверение о повышении квалификации в Национальной академии современных
          технологий по программе «Хирургия».
        </li>
        <li class="info-list__item">Удостоверение о повышении квалификации в Национальной академии современных
          технологий по программе «Челюстно-лицевая хирургия».
        </li>
        <li class="info-list__item">Сертификат специалиста по специальности «Хирургия»
        </li>
        <li class="info-list__item">Сертификат специалиста по специальности «Челюстно-лицевая хирургия».
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
        Запишитесь на первичную консультацию. Врач проведёт осмотр, назначит исследования (если они необходимы) и
        согласует с вами дату операции.
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
        Операция позволит устранить последствия гинекомастии и привести грудь в нормальную форму. Разрезы производятся в
        тех местах, где они впоследствии будут незаметны, и ушиваются косметическим швом. По истечении
        восстановительного периода никаких внешних признаков хирургического вмешательства не сохранится.
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
