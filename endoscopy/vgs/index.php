<?
$title = 'Видеогастроскопия';
$subtitle = 'Эндоскопия верхних отделов ЖКТ';
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
  <h2 class="subtitle">Видеогастроскопия</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text">Это диагностический осмотр пищевода, желудка и двенадцатиперстной кишки. Позволяет
        установить происхождение ряда взаимосвязанных симптомов: боль в животе, тошнота, рвота, отрыжка, изжога и т. п.
      </p>
      <p class="text info__text">Осмотр проводится с помощью эндоскопического оборудования экспертного класса, которое
        обеспечивает высокую точность диагностики и способно выявить на ранней стадии некоторые особо опасные патологии,
        включая онкологические.</p>
      <p class="text info__text">Цифровые технологии позволяют сохранить результаты обследования и предоставить пациенту
        их копию на цифровом носителе.</p>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото коррекции формы носа" class="info__img brs30 ">
  </div>
</section>


<section class="price">
  <div class="container">
    <div class="price-card">
      <h2 class="subtitle">Выявление заболевания на ранней стадии сделает его лечение более эффективным, более
        комфортным и менее затратным. Подавляющее большинство даже самых тяжёлых патологий при своевременном выявлении
        успешно поддаются амбулаторному лечению.</h2>
    </div>
    <!-- /.price-card -->

    <div class="price-card-small">
      <div class="price-card-wrapper">
        <h3 class="subtitle">Видеогастроскопия</h3>
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
        Видеогастроскопия
      </h3>
    </div>

  </div>
  <!-- /.container -->
</section>
<!-- /.price -->





<section class="info center">
  <h2 class="subtitle">Видеогастроскопия выявляет патологии, которые сложно диагностировать другими способами</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text">Например:</p>
      <ul class="info-list">
        <li class="info-list__item text">Повреждение слизистой и ряд других заболеваний пищевода, включая расширение
          вен, грибковое поражение и пр.</li>
        <li class="info-list__item text">Повреждение слизистой желудка, включая гастрит, полипы и язвенное поражение.
        </li>
        <li class="info-list__item text">Заброс содержимого желудка в пищевод.</li>
        <li class="info-list__item text">Заброс содержимого двенадцатиперстной кишки в желудок.</li>
        <li class="info-list__item text">Язва двенадцатиперстной кишки.</li>
        <li class="info-list__item text">Косвенные признаки нарушения оттока желчи.</li>
        <li class="info-list__item text">Новообразования верхних отделов пищеварительного тракта.</li>
      </ul>

    </div>
    <!-- /.info-wrapper -->
  </div>
  <!-- /.container -->
</section>
<!-- /.info  -->




<section class="info reverse">
  <h2 class="subtitle">Выявление заболеваний, ассоциированных с H.pylori</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text">Эндоскопия – надёжный диагностический метод, позволяющий достоверно установить наличие
        бактерии Хеликобактер пилори (H.pylori), которая провоцирует язвенную болезнь, гастрит, функциональную
        диспепсию, железодефицитную анемию и пр.</p>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото пьезот" class="info__img brs30 ">
  </div>
</section>



<section class="info center">
  <h2 class="subtitle">Тяжёлые патологии, поддающиеся ранней диагностике с помощью видеогастроскопии</h2>
  <div class="container">
    <div class="info-wrapper">
      <ul class="info-list">
        <li class="info-list__item text"><b>Эрозия пищевода. </b>Поверхностные дефекты на слизистой, опасные
          последующим образованием язв. Может проявлять себя изжогой, отрыжкой, болью за грудиной, трудностями с
          глотанием, утренней тошнотой и метеоризмом. </li>
        <li class="info-list__item text"><b>Эрозия желудка. </b>Локальный дефект слизистой, который может развиться в
          более тяжёлые патологии, включая язвенное поражение и деформацию органа. Проявляет себя дискомфортом после
          еды, болью, тошнотой, рвотой, нарушением стула.</li>
        <li class="info-list__item text"><b>Пищевод Барретта. </b>Патологическое изменение слизистой пищевода, которое
          имеет тенденцию к развитию в метаплазию – замещение нормальных клеток слизистой пищевода клетками,
          характерными для слизистой кишечника. В 25% случаев протекает бессимптомно, чем повышает риск перехода в
          наиболее тяжёлую стадию.</li>
        <li class="info-list__item text"><b>Рак желудка и пищевода. </b>Образование злокачественных опухолей.
          Возможные симптомы: боль при глотании; боль или дискомфорт в животе, за грудиной или в спине; рвота и тошнота;
          потеря веса; кашель, охриплость голоса.</li>
      </ul>

    </div>
    <!-- /.info-wrapper -->
  </div>
  <!-- /.container -->
</section>
<!-- /.info  -->



<section class="info reverse">
  <h2 class="subtitle">Патологии верхних отделов ЖКТ имеют схожую симптоматику</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text">Все перечисленные патологии имеют схожую симптоматику, а сами симптомы могут указывать
        на заболевания других органов – не только ЖКТ. Видеогастроскопия позволит поставить правильный диагноз и
        назначить адекватное лечение.</p>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото пьезот" class="info__img brs30 ">
  </div>
</section>



<section class="page bg">
  <div class="container">
    <h2 class="subtitle">Минимум послеоперационного дискомфорта</h2>
    <p class="text">Мы не используем турунды. Эти тампоны вводят в нос сразу после операции, чтобы на время
      восстановительного периода поддержать форму носовых проходов. Однако турунды затрудняют дыхание и вызывают
      постоянный дискомфорт.</p>
    <p class="text">Чтобы обеспечить возможность свободного, полноценного дыхания, мы используем полые гибкие вставки из
      силикона – сплинты. Они образуют необходимый каркас, мало ощутимы в носу и не препятствуют дыханию.</p>
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
  <h2 class="subtitle">Основные поводы для проведения видеограстроскопии</h2>
  <div class="container">
    <div class="info-wrapper">
      <ul class="info-list">
        <li class="info-list__item text">Изжога, отрыжка, кислый привкус во рту.</li>
        <li class="info-list__item text">Боли, ощущение распирания, тяжести в верхних отделах живота.</li>
        <li class="info-list__item text">Тошнота и рвота.</li>
        <li class="info-list__item text">Диарея или запор.</li>
        <li class="info-list__item text">Трудности при проглатывании пищи.</li>
        <p><b>Также обследование могут назначить при:</b></p>
        <li class="info-list__item text">необъяснимой потере массы тела;</li>
        <li class="info-list__item text">неприятном запахе изо рта (при отсутствии заболеваний ротовой полости);</li>
        <li class="info-list__item text">анемии неуточнённого генеза;</li>
        <li class="info-list__item text">длительном приёме обезболивающих препаратов;</li>
        <li class="info-list__item text">подозрении на заболевания, ассоциированные с H.pylori;</li>
        <li class="info-list__item text">заболеваниях печени, желчного пузыря, поджелудочной железы;</li>
        <li class="info-list__item text">онконастороженности и в качестве онкоскрининга.</li>
      </ul>
    </div>
  </div>
</section>



<section class="info reverse">
  <h2 class="subtitle">Дополнительные поводы для проведения исследования</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text"><b>Перед операцией. </b>Назначается в рамках диагностики перед хирургическими
        вмешательствами по поводу, например, язвенной и желчнокаменной болезни. Исследование назначают также после
        обнаружения опухолей с целью определения их локализации.</p>
      <p class="text info__text"><b>Для контроля лечения. </b>Назначается в ходе терапии с целью мониторинга состояния
        внутренних органов и оценки эффективности применения лекарственных препаратов.</p>
      <p class="text info__text"><b>Для раннего выявления онкологии. </b>Рекомендована людям старше 40 лет для
        исключения или раннего выявления онкологических заболеваний.</p>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото пьезот" class="info__img brs30 ">
  </div>
</section>



<section class="info">
  <h2 class="subtitle">Видеогастроскопия – это результат развития цифровых технологий</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text">Устаревший вариант процедуры называется ФГДС (фиброгастродуоденоскопия) и проводится в
        аналоговом режиме с применением эндоскопа на основе оптоволокна.</p>
      <p class="text info__text">Цифровые технологии кратно увеличили информативность исследования. Теперь специалисту
        доступна картинка сверхвысокой чёткости, что в несколько раз повышает точность диагностики и создаёт возможность
        для малотравматичного лечения или уточнённого проведения биопсии – изъятия кусочка слизистой для дальнейшего
        углубленного анализа в лаборатории.</p>
      <p class="text info__text">Результаты диагностики пациент получает на цифровом носителе.</p>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото пьезот" class="info__img brs30 ">
  </div>
</section>



<section class="info reverse">
  <h2 class="subtitle">Видеогастроскопия – это минимум дискомфорта</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text">Помимо повышения информативности обследования, применение цифровых технологий позволило
        уменьшить диаметр эндоскопической трубки. Поэтому теперь исследование проходит в щадящем режиме. Возможные
        дискомфортные ощущения купируются специальным спреем, которым орошается корень языка пациента.</p>
      <p class="text info__text">Также пациенту предлагается медикаментозная седация – комфортный и безопасный вид
        анестезии с погружением в непродолжительный сон, полностью исключающий все неприятные физические ощущения,
        которыми может сопровождаться осмотр.</p>
    </div>
    <img src="<? get_img_path() ?>rino-text-1.png" alt="фото пьезот" class="info__img brs30 ">
  </div>
</section>




<section class="info center">
  <h2 class="subtitle">Передовые диагностические технологии снижают риск развития тяжёлых заболеваний. Пройдите
    обследование, чтобы обезопасить себя. Проявите заботу о близких, выбрав для них диагностику в «Кивач Эстетик».</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text">
        Доступно проведение комплексного исследования, <a href="/endoscopy/vks/">включая видеоколоноскопию.</a> Если в
        ходе исследования не удаётся достоверно установить происхождение тех или иных симптомов патологии, пациент может
        быть направлен на <a href="/endoscopy/endoscopy/">видеокапсульную эндоскопию</a> для исследования тонкого
        кишечника, недоступного к осмотру при колоноскопии.
      </p>
      <p class="text">Обследование предусматривает предварительную подготовку. Свяжитесь с нашим специалистом, чтобы
        получить инструкцию. </p>
    </div>
  </div>
</section>


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


<section class="info center">
  <h2 class="subtitle">Противопоказания</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text">Для большинства пациентов не существует ограничений к проведению исследования, но в ряде случаев
        процедура не рекомендована:</p>
      <ul class="info-list">
        <li class="info-list__item text">при заболеваниях в стадии обострения;</li>
        <li class="info-list__item text">при неконтролируемом течении заболевания, когда существует риск ухудшения
          состояния пациента в ходе проведения эндоскопической процедуры;</li>
        <li class="info-list__item text">при патологии свёртываемости крови (риск кровотечения);</li>
        <li class="info-list__item text">при судорожном синдроме, бронхиальной астме, эпилепсии и других заболеваниях,
          при которых медицинское вмешательство может спровоцировать приступ;</li>
        <li class="info-list__item text">избыточный вес (индекс массы тела более 40) - особенно при проведении
          исследования под седацией.</li>
      </ul>
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /.info grid -->


<section class="page bg">
  <div class="container">
    <h2 class="subtitle">Видеогастроскопия в «Кивач Эстетик» – это диагностика в клинике с мировым именем и безупречной
      репутацией</h2>
    <ul class="info-list">
      <li class="info-list__item">Лечение и обслуживание в соответствии с мировыми стандартами EFQM и JCI, которые
        устанавливают эталонные критерии качества и безопасности на оказание услуг premium-класса.</li>
      <li class="info-list__item">Щадящий режим обследования.</li>
      <li class="info-list__item">Применение эффективных анестетиков или медикаментозной седации</li>
      <li class="info-list__item">Короткий период восстановления и быстрая выписка.</li>
      <li class="info-list__item">При необходимости: комфортабельный стационар и круглосуточное наблюдение
        медперсонала.</li>
      <li class="info-list__item">Экспертная консультация специалистов.</li>
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
          <b>Видеоколоноскопия.</b> Диагностический осмотр толстого кишечника с помощью эндоскопического оборудования
          экспертного класса.
          <a href="/endoscopy/vks/"> Подробнее – здесь.</a>
        </li>
        <li class="info-list__item">
          <b>Видеокапсульная эндоскопия.</b> Неинвазивное высокоточное обследование желудочно-кишечного тракта с
          применением Hi-Tech оборудования.
          <a href="/endoscopy/endoscopy/"> Подробнее – здесь.</a>
        </li>
        <li class="info-list__item">
          <b>Полипэктомия.</b> Удаление полипов из толстого кишечника, которое может проводиться непосредственно в
          момент обследования.
          <a href="/endoscopy/polipectomy/"> Подробнее – здесь. </a>
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
          <p>Процедура может быть несколько неприятной,особенно для людей с сильным рвотным рефлексом. Для уменьшения
            чувствительности пациенту опрыскивают полость рта анестетиком. Для полного устранения дискомфорта
            рекомендуется медикаментозная седация.</p>
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