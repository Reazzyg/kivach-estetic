export {createFooter}
createFooter()
function createFooter(){

fetch('../json/navigation.json')
.then((response)=> response.json())
.then((data) => appendData(data))

function appendData(data) {
const containerInfo = document.querySelector('.footer-info');
const titleElement = document.createElement('h3')
titleElement.className = 'title footer__title'


data.menu.forEach(item =>{
    const menuName = item.name

    const menuLink = item.link

    titleElement.textContent = 'Информация'


    const liElement = document.createElement('li');

    liElement.className = 'footer-list-item';

    const aElement = document.createElement('a');

    aElement.className = 'footer-list-item__link'

    aElement.href = menuLink; // Устанавливаем атрибут href для ссылки

    aElement.textContent = menuName;

    liElement.appendChild(aElement);
    
    containerInfo.appendChild(liElement);

    containerInfo.prepend(titleElement);

})

}
}