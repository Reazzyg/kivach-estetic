export {createFooter}

function createFooter(){

fetch('../json/navigation.json')
.then((response)=> response.json())
.then((data) => appendData(data))

function appendData(data) {
footerSurg(data)
}

function  footerSurg(data){

    const info = 'Информация'
    const surg = 'Хирургия'
    const plastic = 'Пластические операции'
    const intim = 'Интимная пластика'
    const allSurg = 'Общая хирургия'

        data.footerNavigation.forEach(item =>{

            const menuNames = item.listName

            switch(menuNames){
                case info:
                    check(info)
                    break;
                case surg:
                    check(surg)
                    break;
                case plastic:
                    check(plastic)
                    break;
                case intim:
                    check(intim)
                    break;
                case allSurg:
                    check(allSurg)
                    break;
            }


            function check(name){
                if (menuNames === name){

                    const elementToAppent = document.querySelector(`[title="${name}"]`)

                    const footerArrow = document.createElement('img')

                    footerArrow.className = 'footer-list__arrow'

                    footerArrow.src = 'assets/img/arrow-down.svg'

                    const titleWrap = document.createElement('div')

                    titleWrap.className = 'footer-list-wrap'
                    
                    //устанавливаем заголовок 
                    const footerTitle = document.createElement('h3')

                    footerTitle.className = 'footer__title'

                    footerTitle.textContent = name

                    titleWrap.appendChild(footerTitle)
                    titleWrap.appendChild(footerArrow)

                    //получаем пункуты раздела
                    const menuItems = item.listItems

                    //перебираем пункты раздела
                    menuItems.forEach(item =>{

                        //получаем название пункта
                        const menuName = item.name
                        
                        //получаем ссылку пункта
                        const menuLink = item.link

                        const liElement = document.createElement('li');

                        liElement.className = 'footer-list-item';

                        const aElement = document.createElement('a');

                        aElement.className = 'footer-list-item__link'

                        aElement.href = menuLink; // Устанавливаем атрибут href для ссылки

                        aElement.textContent = menuName;

                        liElement.appendChild(aElement);

                        elementToAppent.appendChild(liElement);

                        elementToAppent.prepend(titleWrap);

                    })

                }
            }

        })
        footerAction()
    }
}

function footerAction(){

    const menus = document.querySelectorAll('.footer-list-wrap')

        menus.forEach(menu =>{

            menu.addEventListener('click', function(e){

            const target  = e.target
            
            const menu = target.closest('.footer-list')

            menu.querySelector('.footer-list__arrow').classList.toggle('rotate')

                const menuElements = menu.querySelectorAll('li')

                menuElements.forEach(li=>{

                    li.classList.toggle('active')
                    
                })
            })
        })
}