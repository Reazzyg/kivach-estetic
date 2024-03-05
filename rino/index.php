<?
$title = 'Ринопластика';
include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php';
?>


<section class="hero rino">
  <div class="container rino-container">
    <h1 class="subtitle">
      <?echo $title?>
    </h1>
    <h2 class="title">Коррекция формы носа</h2>
    <div class="slider-wrapper">
      <div class="swiper rinoSwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="swiper-slide-wrapper">
              <img src="<?get_img_path()?>rino1.png" alt="фото ринопластики" loading="lazy" class="swiper-slide__img">
              <img src="<?get_img_path()?>rino2.png" alt="фото ринопластики" loading="lazy" class="swiper-slide__img">
              <img src="<?get_img_path()?>rino3.png" alt="фото ринопластики" loading="lazy" class="swiper-slide__img">
            </div>
            <!-- /.swiper-slide-wrapper -->
          </div>
          <!-- /.swiper-slide -->
          <div class="swiper-slide">
            <div class="swiper-slide-wrapper">
              <img src="<?get_img_path()?>rino1-1.png" alt="фото ринопластики" loading="lazy" class="swiper-slide__img">
              <img src="<?get_img_path()?>rino1-2.png" alt="фото ринопластики" loading="lazy" class="swiper-slide__img">
              <img src="<?get_img_path()?>rino1-3.png" alt="фото ринопластики" loading="lazy" class="swiper-slide__img">
            </div>
            <!-- /.swiper-slide-wrapper -->
          </div>
          <!-- /.swiper-slide -->
        </div>
        <!--/. swiper-wraper  -->
        <div class="swiper-navigation">
          <!-- If we need pagination -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-next"></div>

        </div>
        <!-- /.swiper-navigation -->
      </div>
      <!-- /.swiper  -->
    </div>
    <!-- /.swiper-wrapper -->
  </div>
  <!-- /.container rino-container -->
</section>
<!-- /.hero rino -->


<section class="info">
  <h2 class="subtitle">Коррекция формы носа</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text">Это пластическая операция по устранению возникших и приобретенных дефектов износа.
        Планируем провести коррекцию его формы, а также, в сочетании с септопластикой, исправить носовую перегородку и
        восстановить носовое дыхание.</p>
      <p class="text info__text">В клинике проводится эстетическая ринопластика. Она позволяет изменять форму и/или
        размеры наружного ношения и соблюдать асимметрию. Одновременно с ринопластикой, при необходимости, коррекция
        носовой перегородки – для исправления объема носового дыхания, по-прежнему терпится в силе его анатомического
        строения.</p>
      <p class="text info__text">Ринопластика считается одной из самых сложных и ответственных операций в
        пластической
        хирургии, так как она непосредственно связана с дыхательной функцией носа и может иметь долгосрочные
        последствия
        для здоровья пациента.</p>
    </div>
    <img src="<?get_img_path()?>rino-text-1.png" alt="фото коррекции формы носа" class="info__img brs30 ">
  </div>
</section>

<section class="video">
  <div class="container">
    <iframe class="brs30" width="100%" height="720" src="https://www.youtube.com/embed/Kvbybot2rEg" title="Kivach Aqua"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>
  </div>
  <!-- /.container -->
</section>
<!-- /.video -->

<section class="feedback">
  <div class="container feedback-container">
    <img class="feedback__img" src="<?get_img_path()?>form-doc.png" alt="фото врача">
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
      <li class="subtitle">Виды ринопластики</li>
      <li class="info-list__item text">Эстетическая ринопластика</li>
      <li class="info-list__item text">Пластиковый кончик носа</li>
      <li class="info-list__item text">Пластика ноздрей</li>
      <li class="info-list__item text">Пластиковые колумеллы</li>
      <li class="info-list__item text">Риносептопластика</li>
      <li class="info-list__item text">Аугментационная ринопластика</li>
      <li class="info-list__item text">Коррекция седловидной деформации</li>
    </ul>
    <ul class="info-list">
      <li class="subtitle">Виды ринопластики</li>
      <li class="info-list__item text">Эстетическая ринопластика</li>
      <li class="info-list__item text">Пластиковый кончик носа</li>
      <li class="info-list__item text">Пластика ноздрей</li>
      <li class="info-list__item text">Пластиковые колумеллы</li>
      <li class="info-list__item text">Риносептопластика</li>
      <li class="info-list__item text">Аугментационная ринопластика</li>
      <li class="info-list__item text">Коррекция седловидной деформации</li>
    </ul>
    <ul class="info-list">
      <li class="subtitle">Виды ринопластики</li>
      <li class="info-list__item text">Эстетическая ринопластика</li>
      <li class="info-list__item text">Пластиковый кончик носа</li>
      <li class="info-list__item text">Пластика ноздрей</li>
      <li class="info-list__item text">Пластиковые колумеллы</li>
      <li class="info-list__item text">Риносептопластика</li>
      <li class="info-list__item text">Аугментационная ринопластика</li>
      <li class="info-list__item text">Коррекция седловидной деформации</li>
    </ul>
    <ul class="info-list">
      <li class="subtitle">Виды ринопластики</li>
      <li class="info-list__item text">Эстетическая ринопластика</li>
      <li class="info-list__item text">Пластиковый кончик носа</li>
      <li class="info-list__item text">Пластика ноздрей</li>
      <li class="info-list__item text">Пластиковые колумеллы</li>
      <li class="info-list__item text">Риносептопластика</li>
      <li class="info-list__item text">Аугментационная ринопластика</li>
      <li class="info-list__item text">Коррекция седловидной деформации</li>
    </ul>
    <ul class="info-list">
      <li class="subtitle">Виды ринопластики</li>
      <li class="info-list__item text">Эстетическая ринопластика</li>
      <li class="info-list__item text">Пластиковый кончик носа</li>
      <li class="info-list__item text">Пластика ноздрей</li>
      <li class="info-list__item text">Пластиковые колумеллы</li>
      <li class="info-list__item text">Риносептопластика</li>
      <li class="info-list__item text">Аугментационная ринопластика</li>
      <li class="info-list__item text">Коррекция седловидной деформации</li>
    </ul>

  </div>
  <!-- /.container -->
</section>
<!-- /.containdications -->


<section class="slider-big rino">
  <div class="container">
    <div class="advantages">
      <div class="container advantages-container">
        <div class="advantages-card">
          <img src="<?get_img_path()?>patients.svg" alt="иконка пациента" class="advantages-card__img">
          <p class="subtitle">1 000 000 000 000</p>
          <p class="advantages-card__text text">Столько пациентов приняла клиника за всё время своего существования</p>
        </div>
        <div class="advantages-card">
          <img src="<?get_img_path()?>calendar.svg" alt="иконка календаря" class="advantages-card__img">
          <p class="subtitle">300 000</p>
          <p class="advantages-card__text text">Столько операций проводится в клинике ежегодно</p>
        </div>
        <div class="advantages-card">
          <img src="<?get_img_path()?>body.svg" alt="иконка тела" class="advantages-card__img">
          <p class="subtitle">2 000 000 000 000</p>
          <p class="advantages-card__text text">Столько операций провела клиника,начиная с 2017 года</p>
        </div>
      </div>
      <!-- /.container advantages-container -->
    </div>
    <!-- /.advantages -->
    <div class="swiper rinoSwiperBig">
      <div class="swiper-wrapper">
        <img src="<?get_img_path()?>rino1.png" alt="фото ринопластики" class=" swiper-slide swiper-slide__img"> <img
          src="<?get_img_path()?>rino1.png" alt="фото ринопластики" class=" swiper-slide swiper-slide__img"> <img
          src="<?get_img_path()?>rino2.png" alt="фото ринопластики" class=" swiper-slide swiper-slide__img"> <img
          src="<?get_img_path()?>rino3.png" alt="фото ринопластики" class=" swiper-slide swiper-slide__img"> <img
          src="<?get_img_path()?>rino1-1.png" alt="фото ринопластики" class=" swiper-slide swiper-slide__img"> <img
          src="<?get_img_path()?>rino1-2.png" alt="фото ринопластики" class=" swiper-slide swiper-slide__img"> <img
          src="<?get_img_path()?>rino1-3.png" alt="фото ринопластики" class=" swiper-slide swiper-slide__img"> <img
          src="<?get_img_path()?>rino1.png" alt="фото ринопластики" class=" swiper-slide swiper-slide__img"> <img
          src="<?get_img_path()?>rino1.png" alt="фото ринопластики" class=" swiper-slide swiper-slide__img">
      </div>
      <!--/. swiper-wraper  -->
      <div class="swiper-navigation">
        <!-- If we need pagination -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-next"></div>

      </div>
      <!-- /.swiper-navigation -->
    </div>
    <!-- /.swiper  -->
  </div>
  <!-- /.container -->
</section>


<section class="info reverse">
  <h2 class="subtitle">Применение Пьезотом</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text">При операциях, затрагивающих целостность костей, специалисты клиники отказывались
        от использования консервативных инструментов в виде пилки и долота. Такая операция проводится с применением
        Piezotome – пьезохирургического аппарата ультразвуковой хирургии.</p>
      <p class="text info__text">С помощью такого устройства под воздействием ультразвука производятся точечные надпилы
        и истончения костей для получения результата, максимально соответствующего, который был запланирован.</p>
      <p class="text info__text">Аппарат обеспечивает высокоточные разрезы, при этом кости не ломаются и не затрагивают
        мягкие ткани. Снижение во время проведения физических потоков, направленных на область ношения,
        в послеоперационный период значительно снижает дискомфортные ощущения.</p>
    </div>
    <img src="<?get_img_path()?>rino-text-1.png" alt="фото пьезот" class="info__img brs30 ">
  </div>
</section>

<section class="info center">
  <h2 class="subtitle">Операция</h2>
  <div class="container">
    <div class="info-wrapper">
      <p class="text info__text">Проводится в день приема пациента. Помимо хирурга и среднего медицинского персонала в
        операции принимает участие анестезиологическая бригада – как правило, операция проводится под наркозом. При
        необходимости оставить второго хирурга..</p>
      <p class="text info__text">Выбор метода ринопластики врачом определяется и зависит от сложности поставленной
        задачи. Суть операции заключалась в исправлении хрящевых и костных структур ношения</p>
      <ul class="info-list">
        <li class="info-list__item">Открытая ринопластика. Операция проводится через разрезы внутри контура ношения.
          Хирург делает в носовой полости внутренние разрезы и работает через них, в случае необходимости действующего
          видеоэндоскопического оборудования. При этом не задевается внешний кожный чехол. Наружные рубцы отсутствуют.
        </li>
        <li class="info-list__item">Открытая ринопластика. Отличается самый маленький рубец на колумелле (на перегородке
          преддверия носа), который используется на месте хирургического доступа. Этот доступ используется при
          исправлении асимметрии носа или при структурной ринопластике. Такая операция подключается для более точного
          контроля и визуализации носовых структур во время операции. Доступ заживает в течение месяца после операции, а
          образовавшийся рубец через 6-12 месяцев становится слабо развитым.</li>
      </ul>
      <p class="text info__text">По окончании операции хирург вводит в носовые ходы силиконовые шины. Сверху на носу
        место размещается специально – для поддержки формы и защиты от случайного механического воздействия. Для швов,
        как правило, используются биодеградирующие (саморассасывающиеся) нити.</p>
    </div>

  </div>
</section>

<section class="rino bg">
  <div class="container">
    <h2 class="subtitle">Использование сплинтов вместо турунда</h2>
    <p class="text">Чтобы обеспечить пациенту в послеоперационный период свободу, свободу выбора, хирург после операции
      вводит в носовые ходы силиконовые шины, которые ограничивают внутренний каркас. Это отличается от нынешнего
      метода, предполагающего использование турунда (тампонов) и препятствовавшего нормальному носовому дыханию, когда
      пациент в течение нескольких дней получал дыхание через рот.</p>
    <div class="rino-wrapper">
      <img src="<?get_img_path()?>rino-text-1.png" alt="фото сплинтов" class="rino__img">
      <img src="<?get_img_path()?>rino-text-1.png" alt="фото сплинтов" class="rino__img">
      <img src="<?get_img_path()?>rino-text-1.png" alt="фото сплинтов" class="rino__img">
    </div>
    <!-- /.rino-wrapper -->
  </div>
  <!-- /.container -->
</section>
<!-- /.rino -->

<section class="order">
  <div class="container">
    <ul class="info-list info-list-order">
      <li class="info-list__item">
        <h3 class="subtitle">Первичная консультация</h3>
        Пациент проходит первичную консультацию у хирурга клиники. В ходе консультации врач удостоверится в наличии
        показаний, назначит необходимую проверку и подберет дату операции. Консультация возможна как в электронном виде,
        так и в формате «онлайн».
      </li>
      <li class="info-list__item">
        <h3 class="subtitle">Перед операцией</h3>
        Операция проводится в клинике. Пациент может добраться до нее собственным транспортом. По желанию гости могут
        принять комфортабельный автомобиль с водителем или заказать такси (услуга оплачивается отдельно).
      </li>
      <li class="info-list__item">
        <h3 class="subtitle">Операция</h3>
        Проводится в день приема пациента. Помимо хирурга и среднего медицинского персонала в операции принимает участие
        анестезиологическая бригада – как правило, операция проводится под наркозом. При необходимости оставить второго
        хирурга.
      </li>
      <li class="info-list__item">
        <h3 class="subtitle">После операции</h3>
        После операции пациент находится в стационаре клиники под наблюдением медицинского персонала. После выхода из
        наркоза пациента осматривает анестезиолог. На следующий день проводится осмотр хирурга. Пациент получает
        рекомендации.
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
      <img src="<?get_img_path()?>room1.jpg" alt="фото номеров" class="schedule__img">
      <img src="<?get_img_path()?>room1.jpg" alt="фото номеров" class="schedule__img">

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

      <img src="<?get_img_path()?>room1.jpg" alt="фото номеров" class="schedule__img">
      <img src="<?get_img_path()?>room1.jpg" alt="фото номеров" class="schedule__img">

    </div>
    <!-- /.wrapper -->
  </div>
  <!-- /.container -->
</section>
<!-- /.schedule -->

<section class="price">
  <div class="container">
    <div class="price-card">
      <h2 class="subtitle">Эстетический аспект операции</h2>
      <p class="text">
        Операция позволяет устранить эстетические дефекты ношения. При закрытой ринопластике в течение
        восстановительного периода снаружи не остается никакого следа хирургического вмешательства; при открытой
        ринопластике стоит короткий рубец, который за год практически полностью исчезает.
      </p>
      <h3 class="subtitle">Результаты</h3>
      <ul class="info-list">
        <li class="info-list__item">Нос приобретает красивую форму, оптимальную длину и пропорциональные размеры.</li>
        <li class="info-list__item">Обычно используется горбинка, в результате чего спинка носа становится ровной.</li>
        <li class="info-list__item">Крылья носа приобретают аккуратных размеров.</li>
        <li class="info-list__item">Корректируется не только форма носа, но и улучшается носовое дыхание.</li>
      </ul>
    </div>
    <!-- /.price-card -->

    <div class="price-card-small">
      <div class="price-card-wrapper">
        <h3 class="subtitle">РИНОПЛАСТИКА</h3>
        <p>«ВСЁ ВКЛЮЧЕНО»</p>
        <p class="price-card__price">
          <span class="price__new subtitle">140 000<span class="price__value">₽</span> </span>
          <span class="price__old">150 000<span class="price__value">₽</span></span>
        </p>
      </div>
      <!-- /.price-card-wrapper -->

      <img src="<?get_img_path()?>rino-nose.png" alt="фото ринопластики" class="price-card__bg">
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

<section class="question">
  <div class="container">
    <h2 class="subtitle">Часто задаваемые вопросы</h2>
    <ul class="info-list">
      <li class="info-list__item">
        <h3 class="subtitle question__title">Сроки лечения? <img src="<?get_img_path()?>arrow-down-dark.svg" alt=""
            class="question__img"> </h3>
        <div class="text question__answer">
          <p> Весь период лечения занимает достаточно времени. Первичный отёк происходит
            через 1-2 месяца. При полной реабилитации, вероятно, займётся около года.</p>
        </div>
      </li>
      <li class="info-list__item">
        <h3 class="subtitle question__title">Когда я получу окончательный вид носа? <img
            src="<?get_img_path()?>arrow-down-dark.svg" alt="" class="question__img"> </h3>
        <div class="text question__answer">
          <p>Через 2-3 месяца после операции носить будет достаточно мыслительный вид. Уже
            вряд ли кто-то догадался о том, что перенесли операцию. Об этом знают только вы и хирург.</p>
          <p>Окончательный вид носа будет получен по итогам реабилитационного периода,
            т.е.
            е. через 12 месяцев. У пациентов с плотной, толстой кожей этот срок может увеличиться до 18 месяцев.</p>
        </div>
      </li>
      <li class="info-list__item">
        <h3 class="subtitle question__title">Когда после операции можно будет выйти на работу, вернуться к учебе? <img
            src="<?get_img_path()?>arrow-down-dark.svg" alt="" class="question__img"> </h3>
        <div class="text question__answer">
          <p>После операции предпочтение отдается 5-дневному постельному режиму. В эти дни
            вы можете провести в клинике и воспользоваться лечением, которое позволит в меньшей степени сократить время
            восстановления.</p>
        </div>
        <div class="text question__answer">
          <p>К работе, учёбе и иной повседневной деятельности можно вернуться через 10
            дней
            после операции. Если такая активность не связана с физическими нагрузками (например, офисная работа), то –
            на
            5-е сутки.</p>
        </div>
      </li>
      <li class="info-list__item">
        <h3 class="subtitle question__title">Когда после операции можно будет отправиться на отдых, вернуться к занятиям
          спортом? <img src="<?get_img_path()?>arrow-down-dark.svg" alt="" class="question__img"> </h3>
        <div class="text question__answer">
          <p>Попадание прямых солнечных лучей в прооперированную область рекомендуется
            наблюдать в течение 6-ти месяцев. К спорту можно перейти через 2 месяца после операции, начиная с
            минимальных
            показателей, при этом в течение месяца рекомендуется не выполнять упражнения, прогнозирующие наклоны или
            головы выше положения ног. Активизировать спортивные занятия можно в течение 3-х месяцев.</p>
        </div>
      </li>
      <li class="info-list__item">
        <h3 class="subtitle question__title">Получится ли после операции света самостоятельно? <img
            src="<?get_img_path()?>arrow-down-dark.svg" alt="" class="question__img"> </h3>
        <div class="text question__answer">
          <p>Сразу после операции в носке появляются поддерживающие формы полые
            силиконовые
            сплиты. Они позволяют свободно дышать, во время сна не беспокоят.</p>
        </div>
      </li>
      <li class="info-list__item">
        <h3 class="subtitle question__title">Операция болезненная? Нужно ли принимать обезболивающие? <img
            src="<?get_img_path()?>arrow-down-dark.svg" alt="" class="question__img"> </h3>
        <div class="text question__answer">
          <p>Операция проходит под наркозом, боли вы не ощутите. В послеоперационный
            период
            в индивидуальном порядке хирург может назначить обезболивающие препараты. В большинстве случаев
            необходимость
            их приема наступает в первые сутки после операции.</p>
        </div>
      </li>
    </ul>
  </div>
  <!-- /.container -->
</section>
<!-- /.questions -->


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


<? include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php' ?>