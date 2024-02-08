export {createForm}
function createForm(){
fetch('./components/sendForm.html')
.then(response => response.text())
.then(data =>{
  let formContainers = document.querySelectorAll('sendForm')
    formContainers.forEach(container =>{
    container.innerHTML = data
  })
 
  formAction()
})

function formAction(){
const fileInput = document.querySelector('.file-input')
const dropArea = document.querySelector('.file-drop-area')
function addClassToInput(){
  dropArea.classList.add('is-active')

}
function removeClassFromInput(){
  dropArea.classList.remove('is-active')

}

if(fileInput){
  fileInput.addEventListener('dragenter', addClassToInput)
  fileInput.addEventListener('focus', addClassToInput)
  fileInput.addEventListener('click', addClassToInput)
  fileInput.addEventListener('dragleave', removeClassFromInput)
  fileInput.addEventListener('blur', removeClassFromInput)
  fileInput.addEventListener('drop', removeClassFromInput)

  fileInput.addEventListener('change', function(){
    console.log(this);
    let filesCount = this.files.length
    let textContainer = this.previousElementSibling

    if(filesCount === 1){
      let fileName= this.value.split('\\').pop()
      textContainer.textContent = fileName
    }
    else{
      textContainer.textContent = filesCount + ' файлов (-а) выбрано'
    }
  })
}

  // vaildate()
  preventSending()

}

}