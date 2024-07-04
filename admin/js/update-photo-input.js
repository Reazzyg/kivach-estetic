export default function update_photo_input() {
  document.querySelectorAll('input[name="photo"]').forEach((photoInput) => {
    console.log(photoInput);
    photoInput.addEventListener("change", function (event) {
      console.log(event.target);
      const input = event.target;
      const file = input.files[0];

      if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
          const img = input.closest("label").querySelector(".admin-doctor__img");
          console.log(img);
          img.src = e.target.result;
        };

        reader.readAsDataURL(file);
      }
    });
  });
}
