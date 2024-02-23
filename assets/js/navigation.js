import { createDOMElement } from './utils.js';
export { createNavigation };

function createNavigation() {
    fetch('../json/navigation.json')
        .then(response => response.json())
        .then(data => appendData(data));
}

function appendData(data) {
    const navigationContainers = document.querySelectorAll('.navigation');
    navigationContainers.forEach(container => {
        data.navigation.forEach(navItem => {
            const { listName, listItems } = navItem;
            const navigationButton = createDOMElement('div', 'navigation-button noselect');
            const wrapper = createDOMElement('div', 'navigation-button-wrapper');
            const nameElement = createDOMElement('p', 'navigation-button__name', listName);
            const arrowElement = createDOMElement('img', 'navigation-button__arrow', null, '/assets/img/arrow-down-dark.svg');
            const list = createNavigationList(listItems);
            wrapper.append(nameElement, arrowElement);
            navigationButton.appendChild(wrapper);
            navigationButton.appendChild(list);
            container.appendChild(navigationButton);
        });
    });
    addNavigationEventListeners();
}

function createNavigationList(listItems) {
    const list = createDOMElement('ul', 'navigation-list');
    listItems.forEach(item => {
        const listItem = createDOMElement('li', 'navigation-list-item');
        const link = createDOMElement('a', 'navigation-list-item__link', item.name);
        link.href = item.link;
        listItem.appendChild(link);
        list.appendChild(listItem);
    });
    return list;
}

function addNavigationEventListeners() {
    const navigationButtons = document.querySelectorAll('.navigation-button-wrapper');
    navigationButtons.forEach(button => {
        button.addEventListener('click', function () {
            button.parentElement.classList.toggle('navigation-button-active');
            const arrow = button.querySelector('.navigation-button__arrow');
            arrow.classList.toggle('rotate');
        });
    });
}
