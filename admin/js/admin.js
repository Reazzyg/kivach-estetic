//отступ от меню
document.querySelector(".content-container").style.marginLeft =
  document.querySelector(".admin-menu").offsetWidth + "px";

// createCommentModal();

tabs();

const modal = document.getElementById("myModal");
const editLinks = document.querySelectorAll(".comment-change");
if (modal) {
  const modalForm = modal.querySelector("#reviewContent");

  const closeButton = modal.querySelector(".exit");

  const rateArea = modal.querySelector("#rating");

  const nameArea = modal.querySelector("#name");

  const commentArea = modal.querySelector("#comment");

  const activeArea = modal.querySelector("#active");

  const activeInput = modal.querySelector('[name="active"]');

  const idArea = modal.querySelector("#id");

  editLinks.forEach((link) => {
    link.addEventListener("click", function (event) {
      event.preventDefault();

      const td = this.parentNode.parentNode.querySelectorAll("td");

      const [id, rate, name, comment, active] = td;

      rateArea.value = rate.textContent;

      nameArea.value = name.textContent;

      commentArea.value = comment.textContent;

      idArea.value = id.getAttribute("data-id");

      activeArea.checked = active.textContent === "да";

      activeArea.addEventListener("click", function () {
        activeArea.checked ? (this.nextElementSibling.value = "yes") : (this.nextElementSibling.value = "no");
      });

      modal.style.display = "block";
    });
  });

  // Закрытие модального окна при клике на кнопку "Закрыть" или вне окна
  closeButton.addEventListener("click", () => {
    modal.style.display = "none";
  });
  modal.querySelector("form").addEventListener("submit", async function (event) {
    event.preventDefault(); // Предотвращаем отправку формы по умолчанию

    try {
      const response = await submitHandler(this);
      console.log(response);
      if (response && response.success) {
        setTimeout(() => {
          modal.style.display = "none";
          location.reload();
        }, 500);
      }
    } catch (error) {
      console.error(error);
    } // Вызываем функцию отправки данных на сервер
  });
}

async function submitHandler(form) {
  const formData = new FormData(form);
  try {
    const response = await fetch("/admin/pages/comments/settings/rewrite_comment.php", {
      method: "POST",
      body: formData,
    });
    if (response && response.ok) {
      // return await response.json();
      const data = await response.json();

      // Пример обработки ответа
      return data;
    }
  } catch (error) {
    console.error(error);
  }
}

// tabs
function tabs() {
  const tabLinks = document.querySelectorAll(".tabs a");
  const tabs = document.querySelectorAll(".tabs-content");

  tabLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();

      const tabId = this.getAttribute("href").split("=");

      showTab(tabId[tabId.length - 1]);

      history.pushState(null, null, this.getAttribute("href"));

      if (link.classList.contains("menu")) {
        const menuFormHandler = new MenuFormHandler();
      }
    });
  });

  function showTab(tabId) {
    tabs.forEach((tab) => {
      if (tab.classList.contains(tabId)) {
        tab.classList.add("show");
      } else {
        tab.classList.remove("show");
      }
    });
  }
}

class MenuFormHandler {
  constructor() {
    this.forms = document.querySelectorAll(".navigation-button.show");

    this.changedFields = {};

    this.attachEventListeners();
  }

  attachEventListeners() {
    this.forms.forEach((form) => {
      const saveButton = form.querySelector('button[data-action="save"]');

      const addButton = form.querySelector('button[data-action="add"]');

      const linkInputs = form.querySelectorAll('input[type="text"]');

      const activeInputs = form.querySelectorAll('input[type="checkbox"]');

      const editLinks = form.querySelectorAll(".change-link");

      const activityBtn = form.querySelectorAll('[data-name="active_toggle"]');

      // Слушаем изменения в полях ввода
      activeInputs.forEach((input) => {
        input.addEventListener("input", () => {
          this.showSaveBtn(form);
          // this.handleInputChange(input);
        });
      });

      linkInputs.forEach((input) => {
        input.addEventListener("input", () => {
          this.showSaveBtn(form);
          // this.handleInputChange(input);
        });
      });

      addButton.addEventListener("click", () => {
        this.addLink(form);
        this.deleteLink(form);
        this.showSaveBtn(form);
      });

      saveButton ? this.handleSave(saveButton, form) : null;

      editLinks.forEach((link) => {
        link.addEventListener("click", () => {
          this.hadleChangeEvent(link);
        });
      });

      activityBtn.forEach((btn) => {
        btn.addEventListener("click", () => {
          this.handleActivity(btn);
        });
      });
    });
  }

  handleSave(saveButton, form) {
    let changedFields = {};

    saveButton.addEventListener("click", () => {
      this.saveChanges(form);
    });
  }

  handleActivity(elem) {
    console.log(123);
    const saveInput = elem.closest("tr").querySelector('input[type="hidden"]');

    elem.checked ? (saveInput.value = "yes") : (saveInput.value = "no");

    return saveInput.value;
  }

  showSaveBtn(form) {
    const saveBtn = form.querySelector('[data-action="save"]');

    saveBtn.style.display = "inline-block";
  }

  addLink(form) {
    // Добавляем новое поле для ссылки
    const table = form.querySelector("table");

    const tbody = form.querySelector("tbody");

    const newItem = document.createElement("tr");

    newItem.style.backgroundColor = "rgb(104 162 239 / 77%)";

    newItem.innerHTML = `
      
          <td>
          </td>

          <td>
          <input type="text" name="name" class="navigation-list-item__link" placeholder="Название страницы">
          </td>

          <td>
          <input type="text" name="link" placeholder="Ссылка">
          </td>

          <td>
            <input type="checkbox" name="active" value="yes" checked/>
            
          </td>

          <td> 
          <button data-action="delete" style="background: #ff6464;" type="button" class="button">Удалить</button>
          </td>
        
    `;

    tbody.insertAdjacentElement("afterbegin", newItem);

    if (!form.querySelector(".menu-save-button")) {
      const saveButton = document.createElement("tr");

      saveButton.innerHTML = `
        
     <td></td>
     <td></td>
     <td></td>
     <td></td>

     <td>
     <a data-action="save" class="button menu-save-button">Сохранить</a>
     </td>
    `;

      // table.appendChild(saveButton);
    }
  }

  deleteLink(form) {
    const deleteBtns = form.querySelectorAll('[data-action="delete"]');
    deleteBtns.forEach((btn) => {
      btn.addEventListener("click", () => {
        btn.closest("tr").remove();
      });
    });
  }

  saveChanges(form) {
    // Получаем данные формы и отправляем на сервер только измененные поля

    const formData = new FormData(form);

    // Здесь можно отправить данные на сервер с использованием fetch или других методов
    fetch("/admin/pages/menu/settings/save_menu.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => {
        // Проверяем статус ответа
        if (!response.ok) {
          throw new Error("Ошибка HTTP, статус " + response.status);
        }
        // Возвращаем JSON
        console.log(response);
        return response.json();
      })
      .then((data) => {
        // Проверяем, успешен ли был ответ
        if (data.success === true) {
          // Если ответ успешен, выполните нужные действия
          console.log("Данные успешно сохранены");
          setTimeout(() => {
            location.reload();
          }, 500);
        } else {
          // Если ответ содержит ошибку, обработайте это
          console.error("Ошибка: Данные не были успешно сохранены");
        }
      })
      .catch((error) => {
        console.error("Ошибка:", error);
      });
  }
}
