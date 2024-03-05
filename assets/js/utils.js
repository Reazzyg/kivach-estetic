export function createDOMElement(tagName, className, textContent = null, src = null) {
    const element = document.createElement(tagName);
    element.className = className;
    if (textContent !== null) {
        element.textContent = textContent;
    }
    if (src !== null) {
        element.src = src;
    }
    return element;
}

export function toggleQuestion(){
    const questions = document.querySelectorAll('.question .info-list__item')
    questions.forEach(question =>{
        const arrow = question.querySelector('.question__img')
        arrow.addEventListener('click', ()=>{
            question.querySelector('.question__answer').classList.toggle('active')
            arrow.classList.toggle('rotate')
            
        })

    })
}