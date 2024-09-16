<?
$title = 'Тиреоидоэктомия';
$subtitle = 'Операции на щитовидной железе';
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
  <h2 class="subtitle">Тиреоидоэктомия</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text">Это хирургия представляющих опасность патологий щитовидной железы, если эти патологии
        не поддаются консервативному лечению.</p>
      <p class="text info__text">Современные методы хирургии позволяют провести операцию безопасно для пациента и
        практически без видимых следов вмешательства. В большинстве случаев удаётся сохранить функциональность органа и
        обеспечить пациенту привычно высокое качество жизни.</p>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото коррекции формы носа" class="info__img brs30 ">
  </div>
</section>



<section class="info center">
  <h2 class="subtitle">Решение о проведении операции принимается только при наличии опасности для жизни пациента</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text">Заболевания щитовидной железы встречаются у трети населения. В частности, такие патологии могут
        вызывать эстетический дискомфорт и деформацию внутренних органов – вплоть до осиплости голоса, затрудненного
        дыхания и глотания.</p>
      <p class="text">Чаще всего лечение таких патологий хирургическим путём не требуется. Поэтому решение о проведении
        операции принимается не спонтанно, а лишь в том случае, если консервативное лечение не обеспечивает необходимого
        результата и существует серьёзная угроза здоровью и жизни пациента.</p>
      <p class="text">Лечение представляет собой удаление всей железы или одной её доли. Статистически чаще выполняется
        второй вид операции, позволяющий сохранить часть органа и, как следствие, его функциональность.</p>
    </div>
  </div>
</section>


<section class="info reverse">
  <h2 class="subtitle">Операция практически не оставляет внешних следов вмешательства</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text">Чтобы минимизировать эстетические последствия операции, разрез производится в естественной складке
        кожи. По окончании операции он ушивается косметическим швом. После полного заживления образуется малозаметный
        рубец, который можно дополнительно нивелировать косметологическими методами.</p>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото пьезот" class="info__img brs30 ">
  </div>
</section>




<section class="info center">
  <h2 class="subtitle">Показания к проведению тиреоидэктомии</h2>
  <div class="container">
    <div class="info-wrapper">
      <ul class="info-list">
        <li class="info-list__item text">Рак щитовидной железы.</li>
        <li class="info-list__item text">Многоузловой токсический зоб.</li>
        <li class="info-list__item text">Многоузловой нетоксический зоб:
          <ul class="info-list">
            <li class="info-list__item text">при выявлении фолликулярных опухолей;</li>
            <li class="info-list__item text">при наличии больших узлов, имеющих вид косметического дефекта;</li>
            <li class="info-list__item text">при наличии признаков сдавливания шейных элементов.</li>
          </ul>
        </li>
        <li class="info-list__item text">Диффузный токсический зоб:
          <ul class="info-list">
            <li class="info-list__item text">при отсутствии результата от консервативных методов лечения;</li>
            <li class="info-list__item text">в случаях развития эндокринной офтальмопатии;</li>
            <li class="info-list__item text">при достижении органом объёма, превышающего 40 мл;</li>
            <li class="info-list__item text">при невозможности медикаментозного лечения в силу непереносимости больным
              лекарственных препаратов.</li>
          </ul>
        </li>
        <li class="info-list__item text">Токсическая аденома:
          <ul class="info-list">
            <li class="info-list__item text">при отсутствии результата от консервативных методов лечения.</li>
          </ul>
        </li>
      </ul>

    </div>
  </div>
</section>


<section class="info center">
  <h2 class="subtitle">Виды тиреоидоэктомии</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text">В зависимости от степени поражения органа, хирурги клиники проводят следующие операции на
        щитовидной железе:</p>
      <ul class="info-list">
        <li class="info-list__item text"><b>Тотальная тиреоидэктомия.</b> Полное удаление органа.</li>
        <li class="info-list__item text"><b>Гемитиреоидэктомия.</b> Удаление одной (поражённой) доли органа.</li>
        <li class="info-list__item text"><b>Тиреоидэктомия с лимфодиссекцией.</b> Удаление органа, региональных
          лимфатических узлов и жировой клетчатки. Проводится в тех случаях, когда опухоль проросла за пределы железы,
          имеются метастазы или подозрения на них.</li>
      </ul>

      <p class="text">Перечисленные виды операции спасут вашу жизнь и не нанесут заметного урона её качеству. Запишитесь
        на консультацию к нашему специалисту.</p>
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


<section class="info center">
  <div class="container">
    <div class="info-wrapper">
      <ul class="info-list">
        <li class="subtitle">Противопоказания</li>
        <li class="info-list__item text">Острые инфекционные заболевания.</li>
        <li class="info-list__item text">Сопутствующие хронические патологии в стадии декомпенсации.</li>
        <li class="info-list__item text">Выраженные нарушения свёртываемости крови.</li>
        <li class="info-list__item text">Беременность и период лактации.</li>
      </ul>
      <p class="text">Перечисленные противопоказания являются поводом для переноса операции на более поздний срок.</p>

    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /.info  -->



<section class="info reverse">
  <h2 class="subtitle">Восстановительный период</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text">После удаления железы или её части на протяжении некоторого времени возможны болевые ощущения в
        области шеи. Как правило, дискомфорт бывает вызван отёком тканей. По мере восстановления проходит
        самостоятельно.</p>
      <p class="text">Если показанием к удалению была злокачественная опухоль, врач назначит консультацию онколога с
        результатами гистологии.</p>
      <p class="text">Во время оперативного вмешательства возможно нарушение работы паращитовидных желез, деятельность
        которых регулирует содержание кальция в крови. При отсутствии заболеваний этих желез хирурги стараются их
        сохранить, однако в результате операции может возникнуть их отёк или нарушиться кровоснабжение. Это
        распространённый эффект, обусловленный анатомическими особенностями. В таких случаях развивается гипокальциемия
        (недостаток кальция), поэтому дополнительно назначаются препараты кальция, фосфора, витамина D. Однако
        исследования показывают, что в 96% случаев после операций на щитовидной железе уровень кальция в крови
        нормализуется в течение года и необходимость в приёме этих препаратов отпадает.</p>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото пьезот" class="info__img brs30 ">
  </div>
</section>




<section class="page bg">
  <div class="container">
    <h2 class="subtitle">Качество жизни после операции</h2>
    <p class="text">Операция оказывает минимальное влияние на качество жизни. Заместительная гормональная терапия не
      является обременительной. Назначаемые препараты доступны, отличаются высоким качеством и полностью безопасны для
      организма. Их дозировка регулируется на основании мониторинга, который рекомендуется проводить раз в полгода –
      осмотр у эндокринолога, УЗИ и лабораторные анализы на содержание тиреоидных гормонов.</p>
    <p class="text">После операции пациент сохраняет привычную активность во всех областях своей деятельности –
      профессия, досуг, спорт. На репродуктивные функции гормонозаместительная терапия не влияет.</p>
    <p class="text">Послеоперационный рубец располагается в естественной складке кожи, и через 6 месяцев становится
      практически незаметен.</p>
    <p class="text">Ограничений на привычный стиль питания операция не накладывает, но специалисты клиники рекомендуют
      скорректировать рацион в сторону здорового питания: овощи и фрукты, нежирные сорта мяса, зерновой хлеб,
      морепродукты, растительные масла и т. п.</p>
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



<section class="info reverse">
  <h2 class="subtitle">Инвалидность</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text">Проведение операции по удалению щитовидной железы или её части не является основанием для
        получения инвалидности. Группа инвалидности может быть присвоена в отдельных случаях, при этом человека нельзя
        назвать инвалидом в общепринятом смысле; указанное обстоятельство – лишь юридическая формальность, необходимая
        для получения ряда льгот. Во всём остальном человек продолжает жить обычной жизнью.</p>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото пьезот" class="info__img brs30 ">
  </div>
</section>






<section class="info center">
  <div class="container">
    <div class="info-wrapper">
      <ul class="info-list">
        <li class="info-list__item">Лечение и обслуживание в соответствии с мировыми стандартами EFQM и JCI, которые
          устанавливают эталонные критерии качества и безопасности на оказание услуг premium-класса.</li>
        <li class="info-list__item">Круглосуточное наблюдение медперсонала.</li>
        <li class="info-list__item">Минимальная травматизация окружающих тканей.</li>
        <li class="info-list__item">Короткий период восстановления.</li>
        <li class="info-list__item">Выписка в течение 24 часов.</li>
        <li class="info-list__item">Минимальный риск осложнений.</li>
        <li class="info-list__item">Экспертная консультация специалистов.</li>
      </ul>
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /.info  -->


<? getDoctorInfo('Руслан Викторович БЕРЕЗИН');
?>



<section class="order">
  <div class="container">
    <ul class="info-list info-list-order">
      <li class="info-list__item">
        <h3 class="subtitle">Первичная консультация</h3>
        Имея на руках направление на оперативное лечение (или выписной эпикриз с соответствующей рекомендацией), а также
        результаты исследований, пациент проходит первичную консультацию с хирургом клиники. В ходе консультации врач
        удостоверится в наличии показаний для оперативного лечения и подберет дату операции.
      </li>
      <li class="info-list__item">
        <h3 class="subtitle">Операция</h3>
        Проводится в клинике в день назначения. В зависимости от сложности займёт до 2-х часов. Проходит под наркозом,
        поэтому боли вы не почувствуете.
      </li>
      <li class="info-list__item">
        <h3 class="subtitle">После операции</h3>
        Вы будете находиться в комфортабельных условиях под наблюдением медицинского персонала, а на следующий день,
        после осмотра специалистов и получения рекомендаций, сможете покинуть клинику.
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
          <p> К хирургии прибегают, когда возможности консервативного лечения не дают желаемого результата и возникает
            серьёзная угроза здоровью и жизни пациента.</p>
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
          <p>После операции у пациента сохраняется полная способность к самообслуживанию. Во время нахождения в
            стационаре в случае необходимости помощь окажет медсестра.</p>
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