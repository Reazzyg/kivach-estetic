export {createNavigation};

function createNavigation(){

fetch('../json/navigation.json').then((response)=> response.json()).then((data) => appendData(data))

function appendData(data) {

  const containers = document.querySelectorAll('navigation'); // Получаем контейнеры

  //цикл для переиспользования
    containers.forEach(formContainer =>{
     
      data.navigation.forEach(item => {

        const listName = item.listName;
        const listItems = item.listItems;

        // Создаем элементы HTML

        const divElement = document.createElement('div');

        divElement.className = 'navigation-button noselect';

        const wrapperElement = document.createElement('div');

        wrapperElement.className = 'navigation-button-wrapper';

        const nameElement = document.createElement('p');

        nameElement.className = 'navigation-button__name';
        
        nameElement.textContent = listName;

        const arrowElement = document.createElement('img');

        arrowElement.src = 'img/arrow-down-dark.svg';

        arrowElement.alt = 'стрелка вниз для развертывания меню';

        arrowElement.className = 'navigation-button__arrow';

        const ulElement = document.createElement('ul');

        ulElement.className = 'navigation-list';

              // Добавляем name внутрь тега p
        wrapperElement.appendChild(nameElement);

        // Добавляем arrow внутрь wrapper
        wrapperElement.appendChild(arrowElement);

        // Добавляем wrapper внутрь div
        divElement.appendChild(wrapperElement);

        // Проходим по каждому элементу массива list и добавляем их внутрь тегов a
        listItems.forEach(listItem => {

          const liElement = document.createElement('li');

          liElement.className = 'navigation-list-item';

          const aElement = document.createElement('a');

          aElement.href = listItem.link; // Установите соответствующий URL

          aElement.className = 'navigation-list-item__link';

          aElement.textContent = listItem.name;

          liElement.appendChild(aElement);

          ulElement.appendChild(liElement);

        });

        // Добавляем ul внутрь div
        divElement.appendChild(ulElement);


        // Добавляем div в контейнер.
        formContainer.appendChild(divElement);

    });
  })

   function navigation(){

        const navigationButtons = document.querySelectorAll('.navigation-button-wrapper')

            for(let i = 0; i < navigationButtons.length; i++){

              let item = navigationButtons[i]

              item.addEventListener('click', function(){

              item.parentElement.classList.toggle('navigation-button-active')

              let arrow = item.querySelector('.navigation-button__arrow')

              arrow.classList.toggle('rotate')

              })
            }
  }
    navigation()
}
}
