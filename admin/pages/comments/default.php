<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit_comment'])) {
        $name = $_POST['name'];
        $rating = isset($_POST['rating']) ? intval($_POST['rating']) : null;
        $comment = $_POST['comment'];

        if (!validateInput($name)) {
            showError('ФИО');
        } elseif (!validateInput($comment)) {
            showError('Отзыв');
        } else {
            $sqlComment = "INSERT INTO comments (name, rating, message) VALUES ('$name', '$rating', '$comment')";
            
            $res = customSqlQuery($connect, $sqlComment);

            if ($res === TRUE) {
                echo "Отзыв успешно добавлен";
                header("Location: {$_SERVER['PHP_SELF']}");
                exit();
            } else {
                echo "Ошибка при добавлении отзыва: " . $connect->error;
            }
        }
    }
  }
  $url = $_SERVER['REQUEST_URI'];
?>
<div class="content-container">

  <nav class="nav">
    <ul class="nav-list">
      <li class="nav-list__item">
        <a href="/admin/?page=comments&tab=all" class="nav-list__link">Все отзывы</a>
      </li>
      <li class="nav-list__item">
        <a href="/admin/?page=comments&tab=insert" class="nav-list__link">Создать отзыв</a>
      </li>
    </ul>
  </nav>

  <table>
    <thead>
      <tr>
        <th>Номер</th>
        <th>Рейтинг</th>
        <th>Имя</th>
        <th>Отзыв</th>
        <th>Активность</th>
        <th>Изменить</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>5</td>
        <td>asd</td>
        <td>asasdasd</td>
        <td>да</td>
        <td>ИЗменить</td>
      </tr>
    </tbody>
  </table>
  <?

  if(isset($_GET['tab'])){

    function all_comments(){
      $res = sqlQuery("SELECT * FROM comments ORDER BY id DESC");
      while($row = mysqli_fetch_assoc($res)){
        $active = 'active';
        if($row['active'] !== 'yes') $active = '';

      }

      
    }


  }
  ?>

  <div class="form">
    <h3 class="title form-title">Создать отзыв</h3>

    <form method="post">
      <label>
        <input type="text" name="name" class="form-input" placeholder="ФИО*">
      </label>

      <label>
        <input type="number" name="rating" class="form-input" placeholder="Рейтинг">
      </label>

      <textarea class="form-input form-comment" placeholder="Отзыв" name="comment" id="" cols="30" rows="5"></textarea>

      <button class="button form-button" name="submit_comment">Отправить отзыв</button>
    </form>

  </div>
  <!-- /.form -->
</div>
<script>
document.querySelector('.content-container').style.marginLeft = document.querySelector('.admin-menu').offsetWidth +
  'px'


function valid() {
  let buttons = document.querySelectorAll('.form-button');

  buttons.forEach(button => {
    button.addEventListener('click', function(event) {
      let form = this.closest('form');
      let inputs = form.querySelectorAll('input, textarea');
      let isValid = true;

      inputs.forEach(input => {
        if (input.value.trim() === '') {
          isValid = false;
          let error = document.createElement('p');
          error.classList.add('error');
          error.textContent = 'Заполните поле';
          input.insertAdjacentElement('afterend', error);
        }
      });

      if (!isValid) {
        event.preventDefault();
      }
    });
  });
}

valid();
</script>