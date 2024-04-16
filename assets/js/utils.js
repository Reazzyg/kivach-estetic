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

export function toggleQuestion() {
  const questions = document.querySelectorAll(".question .info-list__item");
  questions.forEach((question) => {
    if (question.querySelector(".question__img")) {
      const arrow = question.querySelector(".question__img");
      arrow.addEventListener("click", () => {
        question.querySelector(".question__answer").classList.toggle("active");
        arrow.classList.toggle("rotate");
      });
    }
  });
}

export function addNavigationEventListeners() {
  const navigationButtons = document.querySelectorAll(".navigation-button-wrapper");
  navigationButtons.forEach((button) => {
    button.addEventListener("click", function () {
      button.parentElement.classList.toggle("navigation-button-active");
      const arrow = button.querySelector(".navigation-button__arrow");
      arrow.classList.toggle("rotate");
    });
  });
}
