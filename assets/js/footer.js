import { createDOMElement } from './utils.js';
export { createFooter };

function createFooter() {
    fetch('../json/navigation.json')
        .then(response => response.json())
        .then(data => footerSurg(data));
}

// Функция footerSurg создает футер на основе данных из файла navigation.json
function footerSurg(data) {
    data.footerNavigation.forEach(item => {
        // Получаем название раздела меню
        const menuNames = item.listName;
        // Находим элемент, куда будем добавлять раздел меню
        const elementToAppent = document.querySelector(`[title="${menuNames}"]`);
        // Создаем стрелку для раздела меню
        const footerArrow = createDOMElement('img', 'footer-list__arrow');
        footerArrow.src = '/assets/img/arrow-down.svg'; // Устанавливаем путь к изображению стрелки
        // Создаем контейнер для названия раздела меню и стрелки
        const titleWrap = createDOMElement('div', 'footer-list-wrap');
        // Создаем элемент для названия раздела меню и добавляем его в контейнер
        titleWrap.appendChild(createDOMElement('h3', 'footer__title', menuNames));
        // Добавляем стрелку в контейнер
        titleWrap.appendChild(footerArrow);
        
        // Для каждого пункта в разделе меню создаем элемент списка и добавляем его в раздел меню
        item.listItems.forEach(menuItem => {
            const { name, link } = menuItem;
            const liElement = createDOMElement('li', 'footer-list-item');
            const aElement = createDOMElement('a', 'footer-list-item__link', name);
            aElement.href = link; // Устанавливаем ссылку для пункта меню
            liElement.appendChild(aElement);
            elementToAppent.appendChild(liElement);
        });

        // Добавляем контейнер с названием раздела и списком пунктов меню в DOM
        elementToAppent.prepend(titleWrap);
    });

    // Добавляем обработчики событий для плавного раскрытия и закрытия разделов меню
    footerAction();
}

// Функция footerAction добавляет обработчики событий для разделов меню, позволяя плавно раскрывать и закрывать их
function footerAction() {
    const menus = document.querySelectorAll('.footer-list-wrap');
    menus.forEach(menu => {
        menu.addEventListener('click', function (e) {
            const target = e.target;
            // Находим ближайший родительский элемент с классом 'footer-list', который является разделом меню
            const menu = target.closest('.footer-list');
            // Переключаем класс 'rotate' для стрелки, чтобы показать или скрыть ее
            menu.querySelector('.footer-list__arrow').classList.toggle('rotate');
            // Плавно показываем или скрываем пункты меню
            const menuElements = menu.querySelectorAll('li');
            menuElements.forEach(li => {
                li.classList.toggle('active');
            });
        });
    });
}
