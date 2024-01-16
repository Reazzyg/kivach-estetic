fetch('../json/navigation.json')
.then((response)=> response.json())
.then((data) => appendData(data))

function appendData(data) {
  const container = document.querySelector('.navigation'); // Получаем контейнер

    data.navigation.forEach(item => {
      console.log(item);
      const name = item.name;
      const list = item.list;
      // Создаем элементы HTML
      const divElement = document.createElement('div');
      divElement.className = 'navigation-button noselect';

      const wrapperElement = document.createElement('div');
      wrapperElement.className = 'navigation-button-wrapper';

      const nameElement = document.createElement('p');
      nameElement.className = 'navigation-button__name';
      nameElement.textContent = name;

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
      list.forEach(listItem => {
        const liElement = document.createElement('li');
        liElement.className = 'navigation-list-item';

        const aElement = document.createElement('a');
        aElement.href = '#'; // Установите соответствующий URL
        aElement.className = 'navigation-list-item__link';
        aElement.textContent = listItem;

        liElement.appendChild(aElement);
        ulElement.appendChild(liElement);
      });

      // Добавляем ul внутрь div
      divElement.appendChild(ulElement);

      // Добавляем div в контейнер
      container.appendChild(divElement);
    });
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

  
