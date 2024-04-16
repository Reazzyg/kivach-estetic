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

//  function valid() {
//     let buttons = document.querySelectorAll('.form-button');

//     buttons.forEach(button => {
//       button.addEventListener('click', function(event) {
//         let form = this.closest('form');
//         let inputs = form.querySelectorAll('input, textarea');
//         let isValid = true;

//         inputs.forEach(input => {
//           if (input.value.trim() === '') {
//             isValid = false;
//             let error = document.createElement('p');
//             error.classList.add('error');
//             error.textContent = 'Заполните поле';
//             input.insertAdjacentElement('afterend', error);
//           }
//         });

//         if (!isValid) {
//           event.preventDefault();
//         }
//       });
//     });
//   }

//   valid();
