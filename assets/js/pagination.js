$(document).ready(function() {

  // Функция для загрузки комментариев и обновления состояния пагинации
function loadPage(page) {
  // Очищаем активный класс у всех элементов пагинации
  var paginationPages = document.querySelectorAll('.pagination-page');
  paginationPages.forEach(function(element) {
    element.classList.remove('pagination-page-active');
  });

  // Добавляем активный класс к нужной странице пагинации
  paginationPages[page - 1].classList.add('pagination-page-active');

  // Формируем URL для запроса
  var url = 'load_comments.php?page=' + page;

  // Выполняем AJAX-запрос с помощью fetch
  fetch(url)
    .then(function(response) {
      if (!response.ok) {
        throw new Error('Ошибка HTTP: ' + response.status);
      }
      return response.text();
    })
    .then(function(data) {
      // Обновляем содержимое блока комментариев
      document.querySelector('.comments').innerHTML = data;

      // Обновляем состояние кнопок навигации
      updateNavigationButtons(page);
    })
    .catch(function(error) {
      console.error('Произошла ошибка:', error);
    });
}
  function scrollTop(){
    window.scroll({
        left: 0, 
        top: 100, 
        behavior: 'smooth'
    })
  }
  // Обработчик клика на страницу пагинации (делегирование событий)
  $(document).on('click', '.pagination-page', function(e) {
    e.preventDefault();
    scrollTop()

    var page = parseInt($(this).text());
    loadPage(page);
  });

  // Обработчик клика на кнопку "Назад"
  $(document).on('click', '.pagination-prev', function(e) {
    e.preventDefault();
    var currentPage = parseInt($('.pagination-page-active').text());
    if (currentPage > 1) {
      var prevPage = currentPage - 1;
      loadPage(prevPage);
    }
  });

  // Обработчик клика на кнопку "Вперед"
  $(document).on('click', '.pagination-next', function(e) {
    e.preventDefault();
    scrollTop()

    var currentPage = parseInt($('.pagination-page-active').text());
    var totalPages = parseInt($('.pagination-page').last().text());
    if (currentPage < totalPages) {
      var nextPage = currentPage + 1;
      loadPage(nextPage);
    }
  });

  // Функция для обновления состояния кнопок навигации
 // Функция для обновления состояния кнопок навигации и скрытия ненужных страниц
function updateNavigationButtons(page) {
  var totalPages = parseInt($('.pagination-page').last().text());
  var visiblePages = 4;
  var startPage = Math.max(1, Math.min(page - Math.floor(visiblePages / 2), totalPages - visiblePages + 1));
  var endPage = Math.min(startPage + visiblePages - 1, totalPages);

  // Скрытие ненужных страниц и показ видимых страниц
  $('.pagination-page').each(function(index) {
    if (index + 1 >= startPage && index + 1 <= endPage) {
      $(this).show();
    } else {
      $(this).hide();
    }
  });

  // Показ или скрытие кнопки "Назад"
  if (page === 1) {
    $('.pagination-prev').hide();
  } else {
    $('.pagination-prev').show();
  }

  // Показ или скрытие кнопки "Вперед"
  if (page === totalPages) {
    $('.pagination-next').hide();
  } else {
    $('.pagination-next').show();
  }
}

  // Загрузка комментариев для текущей страницы при загрузке страницы
  var currentPage = parseInt($('.pagination-page-active').text());
  loadPage(currentPage);
});
