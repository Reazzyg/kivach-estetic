class FormValidator {
  constructor(form) {
    const self = this;

    this.form = form;

    this.submitButton = this.form.querySelector(".form-button");

    this.stars = this.form.querySelectorAll(".form-rating__star");

    this.ratingInput = this.form.querySelector("#ratingInput");

    this.emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    this.errorUrl = "/assets/img/error.svg";

    this.validUrl = "/assets/img/done.svg";

    this.errorText = "Введены некорректные данные";

    this.emptyText = "Поле обязательно для заполнения";

    this.inputEmail = this.form.querySelector('input[type="email"]');

    this.inputTel = this.form.querySelector('input[type="tel"]');

    this.inputEmail.onblur = () => this.validateEmail();

    this.inputTel.addEventListener("input", () => this.validateTel(this.inputTel));

    this.stars.forEach((star) => {
      star.addEventListener("click", () => this.highlightStars(star.getAttribute("data-value")));
      star.addEventListener("mouseover", () => this.highlightStars(star.getAttribute("data-value")));
    });

    this.submitButton.addEventListener("click", function (event) {
      event.preventDefault();
      console.log(this);
      self.checkIfValidated();
    });
  }

  highlightStars(value) {
    this.stars.forEach((star) => {
      if (star.getAttribute("data-value") <= value) {
        star.classList.add("selected");
        ratingInput.value = value;
      } else {
        star.classList.remove("selected");
      }
    });
  }

  createIcon(url, elem) {
    const label = elem.closest("label");
    let icon = document.createElement("img");
    if (label.querySelector("input").value.trim() !== "") {
      icon.src = url;
      label.querySelector(".form-img").appendChild(icon);
    }
  }

  deleteIcon(elem) {
    const icon = elem.closest("label").querySelector("img");
    if (icon) {
      icon.remove();
      this.deleteMessage(elem);
    }
  }

  createMessage(elem, text) {
    const label = elem.closest("label");

    label.querySelector(".error").textContent = text;
  }

  deleteMessage(elem) {
    const error = elem.closest("label").querySelector(".error");
    if (error.textContent.trim() !== "") {
      error.textContent = "";
    }
  }

  validateEmail() {
    const value = this.inputEmail.value.trim();
    if (value === "") {
      this.createMessage(this.inputEmail, this.emptyText);
      return false;
    }

    const isValid = this.emailPattern.test(value);

    const iconUrl = isValid ? this.validUrl : this.errorUrl;

    this.deleteIcon(this.inputEmail);

    this.createIcon(iconUrl, this.inputEmail);

    isValid ? this.deleteMessage(this.inputEmail) : this.createMessage(this.inputEmail, this.errorText);

    return isValid;
  }

  validateTel(el) {
    el.value = "+" + el.value.trim().replace(/\D/g, ""); // Удаляем все нецифровые символы

    const maxLength = 12;

    if (el.value.length > maxLength) {
      el.value = el.value.slice(0, maxLength);
    }
  }

  checkIfValidated() {
    this.validateEmail() ? console.log("+") : console.log("-");
  }

  // preventSending() {
  //     this.form.addEventListener('submit', event => {
  //       let isValid = true;
  //       const emailInputs = form.querySelectorAll('.form-email');
  //       emailInputs.forEach(input => {
  //         if (!this.validate(input)) {
  //           isValid = false;
  //         }

  //       if (!isValid) {
  //         event.preventDefault();
  //         console.log('Form submission prevented');
  //       } else {
  //         console.log('Form submitted successfully');
  //       }
  //     });
  //   });
  // }
}

export default function validate(form) {
  const validator = new FormValidator(form);
}
