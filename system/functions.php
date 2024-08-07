<?php

define("SEND_PHP_PATH", "/system/send.php");

include_once('db_con.php');

// Функция для загрузки и отображения шаблона
function load_template($template_name, $data, $echo = true)
{
    // Проверяем существование файла шаблона
    $template_path = $_SERVER['DOCUMENT_ROOT'] . "/templates/{$template_name}.php";
    if (file_exists($template_path)) {
        // Если файл существует, загружаем его
        ob_start(); // Включаем буферизацию вывода
        include $template_path; // Подключаем шаблон
        $content = ob_get_clean(); // Получаем содержимое буфера и очищаем его

        // Заменяем динамические значения на переданные данные
        $content = replace_dynamic_values($content, $data);

        // Если нужно вывести содержимое на экран, делаем это
        if ($echo) {
            echo $content;
        }
        // Возвращаем сформированный HTML-код
        return $content;
    } else {
        // Если файл шаблона не найден, возвращаем ошибку
        return "<p>Шаблон '{$template_name}' не найден</p>";
    }
}

function replace_dynamic_values($content, $data)
{
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            // Если значение является массивом, рекурсивно вызываем эту же функцию
            $content = replace_dynamic_values($content, $value);
        } else {
            // В противном случае заменяем значение в шаблоне
            $content = str_replace("{{{$key}}}", $value, $content);
        }
    }
    return $content;
}


if (isset($_GET['exit']) && $_GET['exit'] == 1) // Разлогин пользователя
{

    session_destroy();

    js("location.replace('/')");
}
function sid()
{

    return $_SESSION['site_id'];
}

function js($text) //Вывод javascript
{

    echo "<script>$text</script>";
}
function sqlNumRows($result)
{
    if ($result instanceof mysqli_result) {
        return $result->num_rows;
    } else {
        return 0;
    }
}

function get_img_path()
{
    echo '/assets/img/';
}

$connect = mysqli_connect($server, $login, $pass, $db_name);


function sqlQuery($q)
{

    global $connect;

    $res = mysqli_query($connect, $q);

    if (mysqli_error($connect)) msg($q, 'error');

    return $res;
}
function msg($text, $css) //Вывод системных сообщений
{

    if ($text != '') echo "<div class='msg $css'>$text</div>";
}

function customSqlQuery($connect, $q)
{
    $res = mysqli_query($connect, $q);
    if (mysqli_error($connect)) msg($q, 'error');
    return $res;
}


function getDoctorInfo($doctorName)
{
    global $connect;

    // Подготавливаем SQL-запрос для выборки данных врача по имени
    $sql = "SELECT name, profession, description, photo FROM doctors WHERE name = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("s", $doctorName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Извлекаем данные врача
        $doctor = $result->fetch_assoc();


        // Формируем HTML-код
        echo '<section class="info">';
        echo '<h2 class="subtitle">Операции проводит</h2>';
        echo '<div class="container">';
        echo '<div class="info-wrapper">';
        echo '<p class="text info__text"><b>' . htmlspecialchars($doctor['name']) . '</b></p>';
        echo '<p class="text info__text">' . htmlspecialchars($doctor['profession']) . '.</p>';
        echo $doctor['description'];

        echo '</div>';
        echo '<img src="/assets/img/doctors/' . htmlspecialchars($doctor['photo']) . '" alt="Фото врача" class="info__img brs30">';
        echo '</div>';
        echo '</section>';
    } else {
        // Если данных нет, выводим сообщение
        echo '<p>Данные о враче не найдены.</p>';
    }

    // Закрываем подготовленное выражение
    $stmt->close();
}
