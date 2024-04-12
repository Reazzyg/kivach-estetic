export { createMenu };

function createMenu() {
  fetch("/json/navigation.json")
    .then((response) => response.json())
    .then((data) => appendMenu(data));

  function appendMenu(data) {
    const container = document.querySelector(".menu-list"); // Получаем контейнер для меню

    data.menu.forEach((item) => {
      const name = item.name;
      const link = item.link;

      // Создаем элементы HTML
      const liElement = document.createElement("li");

      liElement.className = "menu-list-item";

      const aElement = document.createElement("a");

      aElement.className = "menu-list-item__link";

      aElement.href = link; // Устанавливаем атрибут href для ссылки

      aElement.textContent = name;

      liElement.appendChild(aElement);

      container.appendChild(liElement);
    });
  }

  menuAction();
}

function menuAction() {
  const menu = document.querySelector(".menu");

  const openClose = document.querySelector(".menu-burger__line");

  menu.addEventListener("click", () => {
    menu.classList.toggle("menu-active");

    openClose.classList.toggle;
  });
}
