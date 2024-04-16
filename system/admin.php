 <?

  $_SESSION['site_id'] = $site_id;
  function auth()
  {

    $err = '';

    if (!isset($_SESSION['uid']) or $_SESSION['uid'] < 1) {

      if (isset($_POST['login'])) {

        $err = 'Неверная пара логин/пароль';

        $res = sqlQuery("SELECT id FROM users WHERE login='" . $_POST['login'] . "' AND pass='" . md5($_POST['pass']) . "' AND type=1 AND (site='" . sid() . "' OR site=0)");

        $row = mysqli_fetch_array($res);

        if ($row[0] > 0) {

          $_SESSION['uid'] = $row[0];

          js("location.replace('/admin/');");
        }
      }

      msg($err, 'error');
  ?>
 <div class="login">
   <form class="form-inline" method='POST'>
     <div class="form-group">
       <label class="sr-only" for="inputEmail">Email</label>
       <input type="text" class="form-control brs30" id="inputLogin" name='login' placeholder="Логин">
     </div>
     <div class="form-group">
       <label class="sr-only" for="inputPassword">Пароль</label>
       <input type="password" class="form-control brs30" id="inputPassword" name='pass' placeholder="Пароль">
     </div>
     <button type="submit" onClick='submit();' class="button form-button">Войти</button>
   </form>
 </div>
 <!-- /.login -->
 <?php

      exit;
    }
  }


  function admin()
  {

    $page = 'settings';

    $view = 'default';

    if (isset($_GET['page'])) $page = $_GET['page'];

    if (isset($_GET['view'])) $view = $_GET['view'];
    ?>
 <div class="content-container">
   <?
      require_once('../admin/pages/' . $page . '/' . $view . '.php');
      ?>
 </div>
 <?
  }
  ?>

 <?
  function menu()
  {

    $res = sqlQuery("SELECT name, link FROM menu_items_admin");
    $page = 'settings';
    $link_names = array();

    while ($rows = mysqli_fetch_array($res)) {
      $link_names[$rows['link']] = $rows['name'];
    }
    // var_dump($link_names);
    if (isset($_GET['page'])) $page = $_GET['page'];
  ?>

 <aside class="admin-menu">
   <h2 class="subtitle">
     <? echo  isset($link_names[$page]) ? $link_names[$page] : 'Главная'; ?>
   </h2>
   <ul class="admin-menu-list">
     <?

        mysqli_data_seek($res, 0);
        while ($row = mysqli_fetch_assoc($res)) {

          $active = '';
          $add = '';
          if ($page == $row['link']) $active = 'active';
          if ($row['name'] == 'Отзывы') $add = '&tab=all'
        ?>

     <li class="admin-menu-list__item <? echo $active ?>">
       <a href="/admin/?page=<? echo $row['link'] . $add ?>" class="admin-menu-list__link">
         <? echo $row['name'] ?>
       </a>
     </li>
     <?
        }
        ?>
   </ul>
   <a href="/?exit=1" class="admin-menu__exit button">Выход</a>
 </aside>
 <!-- /.menu -->
 <?
  }
  ?>


 <?
  function showError($field)
  {
    echo "<p class='error'>Заполните поле $field</p>";
  }

  function validateInput($input)
  {
    return !empty($input);
  }