export default class FormHandler {
  constructor(formSelector, submitButtonSelector, url) {
    this.form = document.querySelector(formSelector);
    this.submitButton = document.querySelector(submitButtonSelector);
    this.url = url;

    this.init();
  }

  init() {
    this.submitButton.addEventListener("click", this.handleSubmit.bind(this));
  }

  async sendForm(formData) {
    try {
      const response = await fetch(this.url, {
        method: "POST",
        body: formData,
      });

      if (response && response.ok) {
        return await response.json();
      } else {
        throw new Error("Ошибка при отправке формы: " + response.statusText);
      }
    } catch (error) {
      console.error("Error sending form: ", error);
      throw new Error("Ошибка при отправке формы: " + error.message);
    }
  }

  handleSubmit(event) {
    event.preventDefault();

    const formData = new FormData(this.form);

    this.sendForm(formData)
      .then((response) => {
        if (response.success === "success") {
          console.log("form sent");

          setTimeout(() => {
            console.log("timeout");
          }, 500);
        }
      })
      .catch((error) => {
        console.error("Error sending form: ", error);

        setTimeout(() => {
          console.log("timeout error");
        }, 500);
      });
  }
}
