<?
$parentItemsResult = sqlQuery("SELECT * FROM menu_items_new WHERE parent_id IS NULL");

?>

<style>
button[data-action="save"] {
  display: none;
}
</style>
<div style="width: 50%;" class="">
  <?
  while ($parentItem = mysqli_fetch_assoc($parentItemsResult)) {

  ?>
  <form data-id="<? $parentItem['id']; ?>" class="navigation-button noselect navigation-button-active">
    <div class="navigation-button-wrapper">
      <p class="navigation-button__name">
        <? echo $parentItem['name']; ?>
      </p>
      <button data-action="save" data-parent="<? echo $parentItem['id']; ?>" class="button" type="button">Сохранить
        изменения</button>
      <button data-action="add" data-parent="<? echo $parentItem['id']; ?>" class="button" type="button">Добавить
        ссылку</button>
      <input type="hidden" name="parent_id" value="<? echo $parentItem['id']; ?>">
    </div>
    <ul class="navigation-list">
      <li class="navigation-list-item">
        <span>Название</span>
        <span>Ссылка</span>
      </li>
      <?
        $subItemsQuery = "SELECT * FROM menu_items_new WHERE parent_id = " . $parentItem['id'];
        $subItemsResult = sqlQuery($subItemsQuery);

        while ($subItem = mysqli_fetch_assoc($subItemsResult)) {
        ?>

      <li class="navigation-list-item">
        <input type="text" name="name" class="navigation-list-item__link" value="<? echo $subItem['name'] ?>" />
        <input type="text" name="link" value="<? echo $subItem['link'] ?>" />
        <a>Изменить</a>
      </li>
      <?
        }
        ?>

    </ul>
  </form>
  <?
  }
  ?>
</div>

<script>
class MenuFormHandler {
  constructor() {
    this.forms = document.querySelectorAll('.navigation-button');
    this.changedFields = {};
    this.attachEventListeners();
  }

  attachEventListeners() {
    this.forms.forEach(form => {
      const saveButton = form.querySelector('button[data-action="save"]');
      const addButton = form.querySelector('button[data-action="add"]');
      const linkInputs = form.querySelectorAll('.navigation-list-item__link');

      let changedFields = {}; // Объект для хранения измененных полей

      // Слушаем изменения в полях ввода
      linkInputs.forEach(input => {
        input.addEventListener('input', () => {
          this.handleInputChange(input);
        });
      });

      saveButton.addEventListener('click', () => {
        this.saveChanges(form, changedFields);
      });

      addButton.addEventListener('click', () => {
        this.addLink(form);
      });
    });
  }

  handleInputChange(input) {
    // Помечаем измененное поле в объекте changedFields
    const fieldName = input.getAttribute('name');
    const formId = input.closest('.navigation-button').getAttribute('data-id');
    this.changedFields[formId] = this.changedFields[formId] || {};
    this.changedFields[formId][fieldName] = input.value;

    // Показываем кнопку "Сохранить"
    const saveButton = input.closest('.navigation-button').querySelector('button[data-action="save"]');
    console.log(saveButton);
    saveButton.style.display = 'block';
  }

  saveChanges(form, changedFields) {
    // Получаем данные формы и отправляем на сервер только измененные поля
    const formData = new FormData(form);
    const formId = form.getAttribute('data-id');
    const changedData = changedFields[formId] || {};
    for (const key in changedData) {
      if (changedData.hasOwnProperty(key)) {
        formData.set(key, changedData[key]);
      }
    }

    // Здесь можно отправить данные на сервер с использованием fetch или других методов
    fetch('/admin/pages/menu/settings/save_menu.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        console.log(data);
        // Добавьте здесь обработку успешного сохранения или ошибки
      })
      .catch(error => {
        console.error('Ошибка:', error);
      });
    console.log('Сохранение изменений:', formData);

    // После отправки данных сбрасываем состояние changedFields
    changedFields[formId] = {};
  }

  addLink(form) {
    // Добавляем новое поле для ссылки
    const ul = form.querySelector('.navigation-list');
    const newItem = document.createElement('li');
    newItem.classList.add('navigation-list-item');
    newItem.innerHTML = `
      <input type="text" class="navigation-list-item__link" placeholder="Название" />
      <input type="text" placeholder="Ссылка" />
    `;
    ul.appendChild(newItem);
  }
}

// Создаем экземпляр класса при загрузке страницы
document.addEventListener('DOMContentLoaded', () => {
  const menuFormHandler = new MenuFormHandler();
});
</script>