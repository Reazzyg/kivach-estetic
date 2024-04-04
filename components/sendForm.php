 <div class="form">
   <div class="form-success">
     <p class="title">Спасибо за обращение!</p>
     <p class="text">Мы свяжмеся с Вами в ближайшее время!</p>
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

   <form data-action="files" class="">
     <h3 class="title form-title">Напишите нам</h3>
     <p class="form-subtitle form-subtitle-top">Сотрудник клиники свяжется с вами в течение рабочего дня</p>

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

     <textarea class="form-input form-comment"
       placeholder="Поле для комментария. Например, можете указать удобное для вас время для связи" name="comment"
       cols="30" rows="5"></textarea>

     <p class=" form-subtitle">Можете прикрепить копии медицинских документов:</p>

     <label class="file-drop-area">
       <span class="fake-btn">Выберите файл</span>
       <span class="file-msg">или перетащите сюда</span>
       <input class="file-input" name="uploaded_files[]" type="file" multiple>
       <div class="error"></div>
       <span class="error"></span>
     </label>

     <div class="form-wrapper">
       <button type="submit" class="button form-button">Отправить</button>
       <p class=" form-subtitle">Нажимая «Отправить», вы даете согласие на обработку <a class="" href="">персональных
           данных</a>
       </p>

     </div>
   </form>
   <!-- /.form -->
 </div>