  <div class="form">
    <div class="form-success">
      <p class="title">Спасибо за отзыв!</p>
      <svg width="83" height="83" viewBox="0 0 83 83" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle class="path-animate" cx="41.5" cy="41.5" r="39.425" stroke="#83C9B6" stroke-width="4.15" />
        <path class="path-animate-success" d="M29.5496 42.2479L39.9246 52.6229L56.5246 29.7979" stroke="#83C9B6"
          stroke-width="4.15" stroke-linecap="round" />
      </svg>
    </div>
    <div class="form-error">
      <p class="title">Возникла ошибка при отправке отзыва</p>
      <svg width="83" height="83" viewBox="0 0 83 83" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="path-animate-error" d="M30.0879 53.0879L37.0344 46.2731L53.0764 30.0879" stroke="#C74545"
          stroke-width="4.15" stroke-linecap="round" />
        <path class="path-animate-error" d="M30 30L36.8114 36.95L52.9885 53" stroke="#C74545" stroke-width="4.15"
          stroke-linecap="round" />
        <circle class="path-animate" cx="41.5" cy="41.5" r="39.425" stroke="#C74545" stroke-width="4.15" />
      </svg>
    </div>



    <form action="" class="">
      <h3 class="title form-title tac">Здесь вы можете оставить свой отзыв</h3>

      <label class="form-rating">
        <div class="form-rating__wrapper">
          <span class="form-rating__text">Общая оценка:</span>
          <span class="form-rating__star" data-value="1">
            <svg width="20" height="20" viewBox="0 0 40 37" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path id="Star 4"
                d="M20 1.61804L24.0148 13.9742L24.127 14.3197H24.4903H37.4823L26.9715 21.9562L26.6776 22.1697L26.7899 22.5152L30.8046 34.8713L20.2939 27.2348L20 27.0213L19.7061 27.2348L9.19535 34.8713L13.2101 22.5152L13.3224 22.1697L13.0285 21.9562L2.51771 14.3197H15.5097H15.873L15.9852 13.9742L20 1.61804Z"
                stroke="#F7DB52" />
            </svg>
          </span>
          <span class="form-rating__star" data-value="2">
            <svg width="20" height="20" viewBox="0 0 40 37" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path id="Star 4"
                d="M20 1.61804L24.0148 13.9742L24.127 14.3197H24.4903H37.4823L26.9715 21.9562L26.6776 22.1697L26.7899 22.5152L30.8046 34.8713L20.2939 27.2348L20 27.0213L19.7061 27.2348L9.19535 34.8713L13.2101 22.5152L13.3224 22.1697L13.0285 21.9562L2.51771 14.3197H15.5097H15.873L15.9852 13.9742L20 1.61804Z"
                stroke="#F7DB52" />
            </svg>
          </span>
          <span class="form-rating__star" data-value="3">
            <svg width="20" height="20" viewBox="0 0 40 37" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path id="Star 4"
                d="M20 1.61804L24.0148 13.9742L24.127 14.3197H24.4903H37.4823L26.9715 21.9562L26.6776 22.1697L26.7899 22.5152L30.8046 34.8713L20.2939 27.2348L20 27.0213L19.7061 27.2348L9.19535 34.8713L13.2101 22.5152L13.3224 22.1697L13.0285 21.9562L2.51771 14.3197H15.5097H15.873L15.9852 13.9742L20 1.61804Z"
                stroke="#F7DB52" />
            </svg>
          </span>
          <span class="form-rating__star" data-value="4">
            <svg width="20" height="20" viewBox="0 0 40 37" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path id="Star 4"
                d="M20 1.61804L24.0148 13.9742L24.127 14.3197H24.4903H37.4823L26.9715 21.9562L26.6776 22.1697L26.7899 22.5152L30.8046 34.8713L20.2939 27.2348L20 27.0213L19.7061 27.2348L9.19535 34.8713L13.2101 22.5152L13.3224 22.1697L13.0285 21.9562L2.51771 14.3197H15.5097H15.873L15.9852 13.9742L20 1.61804Z"
                stroke="#F7DB52" />
            </svg>
          </span>
          <span class="form-rating__star" data-value="5">
            <svg width="20" height="20" viewBox="0 0 40 37" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path id="Star 4"
                d="M20 1.61804L24.0148 13.9742L24.127 14.3197H24.4903H37.4823L26.9715 21.9562L26.6776 22.1697L26.7899 22.5152L30.8046 34.8713L20.2939 27.2348L20 27.0213L19.7061 27.2348L9.19535 34.8713L13.2101 22.5152L13.3224 22.1697L13.0285 21.9562L2.51771 14.3197H15.5097H15.873L15.9852 13.9742L20 1.61804Z"
                stroke="#F7DB52" />
            </svg>
          </span>
        </div>
        <input type="hidden" name="rating" id="ratingInput">
      </label>

      <label>
        <input type="text" name="name" class="form-input" placeholder="ФИО*">
        <div class="form-img"></div>
        <span class="error"></span>
      </label>


      <div class="form-wrapper">
        <label>
          <input type="tel" name="phone" class="form-input" placeholder="+7 (999) 999-99-99*">
          <div class="form-img"></div>
          <div class="error"></div>
          <span class="error"></span>
        </label>

        <label>
          <input type="email" name="email" class="form-input form-email" placeholder="Email*">
          <div class="form-img"></div>
          <span class="error"></span>
        </label>


      </div>

      <textarea class="form-input form-comment" placeholder="Опишите ваши впечатления" name="comment" cols="30"
        rows="5"></textarea>



      <div class="form-wrapper">
        <button type="submit" class="button form-button">Отправить</button>
        <p class=" form-subtitle">Нажимая «Отправить», вы даете согласие на обработку <a class="" href="">персональных
            данных</a>
        </p>

      </div>
    </form>
    <!-- /.form -->
  </div>