<?
require_once 'settings/show_comments.php';
require_once 'settings/rewrite_comment.php';
require_once 'settings/add_comment.php';


// $url = $_SERVER['REQUEST_URI'];
?>


<!-- обработка табов (nav tabs) происходит по последнему гет параметру ссылки -->
<nav class="nav tabs">
  <ul class="nav-list">
    <li class="nav-list__item">
      <a href="/admin/?page=comments&tab=all" class="nav-list__link">Все отзывы</a>
    </li>
    <li class="nav-list__item">
      <a href="/admin/?page=comments&tab=insert" class="nav-list__link">Создать отзыв</a>
    </li>
  </ul>
</nav>



<!-- к классу добавляется имя гет параметра + show показывает по умолчанию  -->
<?php
show_all_comments();
?>




<?
add_comment();
?>



<!-- HTML для модального окна -->
<div id="myModal" class="modal admin-modal">
  <div class="modal-content">

    <h2>Отзыв</h2>
    <form id="reviewContent" method="POST">
      <label class="active" for="">
        Активность
        <input id="active" type="checkbox">
        <input type="hidden" name="active">
      </label>
      <label for="">
        Рейтинг
        <input name="rating" id="rating" type="text">

      </label>
      <label for="">
        Имя
        <input name="name" id="name" type="text">

      </label>
      <label for="">
        Комментарий
        <textarea name="comment" id="comment" cols="80" rows="10"></textarea>

      </label>
      <input id="id" name="id" type="hidden">
      <div class="admin-modal-wrapper">
        <button type="button" class="button warning exit">Выйти без сохранения</button>
        <button type="submit" class="button save">Сохранить</button>
      </div>
    </form>

  </div>
</div>