const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
const errorUrl  = '../img/error.svg'
const validUrl  = '../img/done.svg'
const errorText = 'Введены некорректные данные'

function createIcon(url,elem){
  
  const label = elem.closest('label')

  let icon = document.createElement('img')

    if(label.querySelector('input').value.trim() !== ''){
        
        icon.src = url
        
        label.querySelector('.form-img').appendChild(icon)
      }
}


function deleteIcon(elem){

  elem.closest('label').querySelector('img') ? elem.closest('label').querySelector('img').remove() : null;

 deleteMessage(elem)
}


function createMessage(elem){

  const label = elem.closest('label')

    if(label.querySelector('input').value.trim() !== ''){
      
      elem.closest('label').querySelector('.error').textContent = errorText

      }

}


function deleteMessage(elem){

    if
        (elem.closest('label').querySelector('.error').textContent.trim() !== '')
          {
            elem.closest('label').querySelector('.error').textContent = ''
          }  
}





function validate(inputItem){

  inputItem.forEach(input =>{

    input.onblur = function(){

       if (!emailPattern.test(input.value)) {
         
          deleteIcon(input)

          createIcon(errorUrl, input)

          createMessage(input)

          return false
          // event.preventDefault(); // Отмена отправки формы, если email некорректный
          } 
            else {

            deleteIcon(input)

            createIcon(validUrl,input)

            return true
          }
        }
  })
}

function preventSending(){

  const emailInputs = document.querySelectorAll('.form-email')
  
    validate(emailInputs)

  const forms = document.querySelectorAll('.form')

    forms.forEach(form =>{

      form.onsubmit = function(event)

      {

        let isValid = true; // Изначально считаем, что форма валидна

      emailInputs.forEach(input => {

        if ( !validate(input)) {

          isValid = false; // Если хотя бы одно поле не валидно, считаем форму не валидной
        }

      })

      if (!isValid) {

        event.preventDefault(); // Отмена отправки формы, если хотя бы одно поле не валидно
        console.log('Form submission prevented');

      } else {

        console.log('Form submitted successfully');

      }
      }
    })
}


