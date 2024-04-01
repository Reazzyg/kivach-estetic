class FormValidator {
  constructor(form) {
    this.form = form;
    this.submitButton = this.form.querySelector(".form-button");
    this.stars = this.form.querySelectorAll(".form-rating__star");
    this.ratingInput = this.form.querySelector("#ratingInput");
    this.emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    this.errorUrl = "/assets/img/error.svg";
    this.validUrl = "/assets/img/done.svg";
    this.errorText = "Введены некорректные данные";
    this.emptyText = "Поле обязательно для заполнения";
    this.inputName = this.form.querySelector('input[name="name"]');
    this.inputEmail = this.form.querySelector('input[name="email"]');
    this.inputTel = this.form.querySelector('input[name="phone"]');

    this.setupEventListeners();
  }

  setupEventListeners() {
    this.inputName.addEventListener("blur", () => this.validateName());
    this.inputTel.addEventListener("blur", () => this.validateTel());
    this.inputEmail.addEventListener("blur", () => this.validateEmail());
    this.inputTel.addEventListener("input", () => this.validateTel());
    this.stars.forEach((star) => {
      star.addEventListener("click", () => this.highlightStars(star.getAttribute("data-value")));
      star.addEventListener("mouseover", () => this.highlightStars(star.getAttribute("data-value")));
    });
    this.form.addEventListener("submit", (event) => this.handleSubmit(event));
  }

  highlightStars(value) {
    this.stars.forEach((star) => {
      if (star.getAttribute("data-value") <= value) {
        star.classList.add("selected");
        this.ratingInput.value = value;
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

  validateName() {
    const value = this.inputName.value.trim();
    if (value === "") {
      this.createMessage(this.inputName, this.emptyText);
      return false;
    } else {
      this.deleteMessage(this.inputName);
      return true;
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

  validateTel() {
    const value = this.inputTel.value.trim();
    this.inputTel.value = "+" + value.replace(/\D/g, "");
    const maxLength = 12;
    if (this.inputTel.value.length > maxLength) {
      this.inputTel.value = this.inputTel.value.slice(0, maxLength);
    }
    if (value === "" || value === "+") {
      this.createMessage(this.inputTel, this.emptyText);
      return false;
    }
    this.deleteMessage(this.inputTel);
    return true;
  }

  checkIfValidated() {
    const isValidName = this.validateName();
    const isValidTel = this.validateTel();
    const isValidEmail = this.validateEmail();
    return isValidName && isValidTel && isValidEmail;
  }

  async sendForm(formData) {
    if (this.checkIfValidated()) {
      try {
        const response = await fetch("/system/send.php", {
          method: "POST",
          body: formData,
        });
        if (response && response.ok) {
          return await response.json();
        }
      } catch (error) {
        console.error("Error sending form: ", error);
      }
    } else {
      return false;
    }
  }

  handleSubmit(event) {
    event.preventDefault();
    const formData = new FormData(this.form);
    this.sendForm(formData)
      .then((response) => {
        if (response.success === "Success") {
          console.log("asd");
        }
        // if ((a = 1)) {
        //   console.log("Form submitted successfully");
        //   // Показать блок с галочкой
        //   // Пример: document.getElementById("success").style.display = "block";
        // } else {
        //   console.log("Form submission failed");
        //   // Показать блок с крестиком
        //   // Пример: document.getElementById("error").style.display = "block";
        // }
      })
      .catch((error) => {
        console.error("Error sending form: ", error);
      });
  }
}

export default function validate(form) {
  const validator = new FormValidator(form);
}
