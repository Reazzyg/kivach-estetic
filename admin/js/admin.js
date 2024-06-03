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

  const data = {};
  const inputValues = {};

  // Получаем все инпуты в модальном окне и создаем массив inputValues
  const modalInputs = modal.querySelectorAll("[input-name]");
  modalInputs.forEach((modalInput) => {
    const modalInputName = modalInput.getAttribute("input-name");
    inputValues[modalInputName] = "";
  });

  editLinks.forEach((link) => {
    link.addEventListener("click", function (event) {
      event.preventDefault();

      const tds = this.parentNode.parentNode.querySelectorAll("td");

      // Формируем массив data с данными из таблицы
      tds.forEach((td) => {
        const tdName = td.getAttribute("td-name");
        let tdValue = td.textContent;
        if (tdName === "id") {
          tdValue = td.getAttribute("data-id");
        }
        if (tdName === "photo") {
          tdValue = td.firstChild.nextElementSibling.getAttribute("src");
        }
        data[tdName] = tdValue;
      });

      // Сравниваем ключи из data и inputValues и записываем значения
      for (const key in inputValues) {
        if (data.hasOwnProperty(key)) {
          inputValues[key] = data[key];
        }
      }

      // Заполняем инпуты в модальном окне значениями из inputValues
      modalInputs.forEach((modalInput) => {
        const modalInputName = modalInput.getAttribute("input-name");
        if (inputValues.hasOwnProperty(modalInputName)) {
          if (modalInputName === "active" && modalInput.type === "checkbox") {
            modalInput.checked = inputValues[modalInputName] === "да";
          }
          if (modalInputName === "photo" && modalInput.type === "file") {
            modalInput.value = "";

            const imgElement = modalInput.closest("label").querySelector(".admin-doctor__img");
            if (imgElement) {
              imgElement.src = inputValues[modalInputName];
            }
          } else {
            modalInput.value = inputValues[modalInputName];
          }
        }
      });

      modal.style.display = "block";
    });
  });

  // Закрытие модального окна
  closeButton.addEventListener("click", () => {
    modal.style.display = "none";
  });

  // Закрытие модального окна при клике на кнопку "Закрыть" или вне окна
  closeButton.addEventListener("click", () => {
    modal.style.display = "none";
  });
  modal.querySelector("form").addEventListener("submit", async function (event) {
    event.preventDefault(); // Предотвращаем отправку формы по умолчанию

    let url = "";

    console.log(window.location.search.split("&")[0].split("=")[1]);

    let location = window.location.search.split("&")[0].split("=")[1];

    switch (location) {
      case "doctor":
        url = "/admin/pages/doctors/settings/send.php";
        break;

      case "comments":
        url = "/admin/pages/comments/settings/rewrite_comment.php";
        break;
    }

    try {
      const response = await submitHandler(this, url);
      console.log(response);
      if (response && response.success) {
        setTimeout(() => {
          modal.style.display = "none";
          location.reload();
        }, 500);
        console.log(response);
      }
    } catch (error) {
      console.error(error);
    } // Вызываем функцию отправки данных на сервер
  });
}

async function submitHandler(form, url) {
  const formData = new FormData(form);
  try {
    const response = await fetch(url, {
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
    saveButton.addEventListener("click", () => {
      this.saveChanges(form);
    });
  }

  handleActivity(elem) {
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

    const date = +new Date();

    newItem.innerHTML = `
      
          <td>
          </td>

          <td>
          <input type="text" name="name_new_${date}" class="navigation-list-item__link" placeholder="Название страницы">
          </td>

          <td>
          <input type="text" name="link_new_${date}" placeholder="Ссылка">
          </td>

          <td>
            <input type="checkbox" name="active_new_${date}" value="yes" checked/>
            
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

function convertTextIntoList() {
  const textarea = document.getElementById("description-to-convert");

  const input = textarea.nextElementSibling;

  const text = textarea.value;

  const lines = text.split("\n").filter((line) => line.trim() !== "");

  let output = '<ul class="info-list">';

  lines.forEach((line) => {
    output += '<li class="info-list__item">' + line + "</li>";
  });
  output += "</ul>";

  input.value = output;
}

const input = document.getElementById("description-to-convert");

input.addEventListener("blur", convertTextIntoList);

function transliterate(word) {
  const a = {
    "А": "A",
    "Б": "B",
    "В": "V",
    "Г": "G",
    "Д": "D",
    "Е": "E",
    "Ё": "E",
    "Ж": "ZH",
    "З": "Z",
    "И": "I",
    "Й": "Y",
    "К": "K",
    "Л": "L",
    "М": "M",
    "Н": "N",
    "О": "O",
    "П": "P",
    "Р": "R",
    "С": "S",
    "Т": "T",
    "У": "U",
    "Ф": "F",
    "Х": "KH",
    "Ц": "TS",
    "Ч": "CH",
    "Ш": "SH",
    "Щ": "SHCH",
    "Ъ": "",
    "Ы": "Y",
    "Ь": "",
    "Э": "E",
    "Ю": "YU",
    "Я": "YA",
    "а": "a",
    "б": "b",
    "в": "v",
    "г": "g",
    "д": "d",
    "е": "e",
    "ё": "e",
    "ж": "zh",
    "з": "z",
    "и": "i",
    "й": "y",
    "к": "k",
    "л": "l",
    "м": "m",
    "н": "n",
    "о": "o",
    "п": "p",
    "р": "r",
    "с": "s",
    "т": "t",
    "у": "u",
    "ф": "f",
    "х": "kh",
    "ц": "ts",
    "ч": "ch",
    "ш": "sh",
    "щ": "shch",
    "ъ": "",
    "ы": "y",
    "ь": "",
    "э": "e",
    "ю": "yu",
    "я": "ya",
  };

  return word
    .split("")
    .map((char) => a[char] || "")
    .join("");
}

function convertName() {
  const fullName = document.querySelector("[name='name']").value;
  const nameParts = fullName.split(" "); // Разделить на слова
  const transliteratedParts = nameParts.map((part) => transliterate(part.toLowerCase())); // Транслитерировать и преобразовать в нижний регистр
  let convertedName = transliteratedParts.join("_"); // Объединить с подчеркиваниями
  convertedName = "/doctors/" + convertedName + ".php";
  console.log(convertedName); // Вывести результат

  document.querySelector("[name='doc_link']").value = convertedName;
}

document.querySelector("[name='name']").addEventListener("blur", convertName);
