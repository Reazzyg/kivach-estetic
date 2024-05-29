<?
require_once 'settings/show_doctors.php';
require_once 'settings/rewrite_doctor.php';
require_once 'settings/add_doctor.php';


// $url = $_SERVER['REQUEST_URI'];

?>

<!-- обработка табов (nav tabs) происходит по последнему гет параметру ссылки -->
<nav class="nav tabs">
  <ul class="nav-list">
    <li class="nav-list__item">
      <a href="/admin/?page=doctors&tab=all" class="nav-list__link">Все врачи</a>
    </li>
    <li class="nav-list__item">
      <a href="/admin/?page=doctors&tab=insert" class="nav-list__link">Добавить врача</a>
    </li>
  </ul>
</nav>



<!-- к классу добавляется имя гет параметра + show показывает по умолчанию  -->
<?php
show_all();
?>




<?
add_doctor();
?>



<!-- HTML для модального окна -->
<div id="myModal" class="modal admin-modal">
  <div class="modal-content">

    <h2>Врач</h2>
    <form id="reviewContent" method="POST">
      <label class="active" for="">
        Активность
        <input id="active" type="checkbox">
        <input type="hidden" name="active">
      </label>

      <label for="">
        Имя
        <input name="name" id="name" type="text">

      </label>
      <label for="">
        Должность
        <input name="post" id="post" type="text">

      </label>
      <label for="">
        Описание
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

<script>
class FormHandler {
  constructor(formSelector, submitButtonSelector, url) {
    this.form = document.querySelector(formSelector);
    this.submitButton = document.querySelector(submitButtonSelector);
    this.url = url;

    this.handleSubmit = this.handleSubmit.bind(this);
    this.submitButton.addEventListener("click", this.handleSubmit);
  }

  async sendForm(formData) {
    try {
      const response = await fetch(this.url, {
        method: "POST",
        body: formData,
      });
      if (response && response.ok) {
        const responseText = await response.text();
        try {
          return JSON.parse(responseText);
        } catch (error) {
          console.error("Error parsing JSON: ", error);
          throw new Error("Ошибка при разборе JSON: " + error.message);
        }
      } else {
        throw new Error("Ошибка ответа сервера: " + response.status);
      }
    } catch (error) {
      console.error("Error sending form: ", error);
      throw new Error("Ошибка при отправке формы: " + error.message);
    }
  }

  handleSubmit(event) {
    event.preventDefault();

    const formData = new FormData(this.form);
    console.log([...formData.entries()]); // Логируем данные формы для проверки

    this.sendForm(formData)
      .then((response) => {
        if (response.success) {
          console.log("form sent");
          window.location.replace('/admin/?page=doctors&tab=all')

          setTimeout(() => {
            console.log("timeout");
          }, 500);
        } else {
          console.error("Server error: ", response.error);
        }
      })
      .catch((error) => {
        console.error("Error sending form: ", error);

        setTimeout(() => {
          console.log("timeout error");
        }, 500);
      });
  }
}

// Создаем экземпляр класса FormHandler
const formHandler = new FormHandler('form', 'button[name="submit_doctor"]', '/admin/pages/doctors/settings/send.php');
</script>