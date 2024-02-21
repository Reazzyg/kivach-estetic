$(document).ready(function() {

  // Функция для загрузки комментариев и обновления состояния пагинации
  function loadPage(page) {
    $('.pagination-page').removeClass('pagination-page-active');
    $('.pagination-page').eq(page - 1).addClass('pagination-page-active');
    $.ajax({
      url: 'load_comments.php',
      type: 'GET',
      data: {
        page: page
      },
      success: function(response) {
        $('.comments').html(response);
        updateNavigationButtons(page);
      }
    });
  }

  // Обработчик клика на страницу пагинации
  $('.pagination-page').click(function(e) {

    e.preventDefault();
    var page = parseInt($(this).text());
    loadPage(page);
  });

  // Обработчик клика на кнопку "Назад"
  $('.pagination-prev').click(function(e) {
    e.preventDefault();
    var currentPage = parseInt($('.pagination-page-active').text());
    if (currentPage > 1) {
      var prevPage = currentPage - 1;
      loadPage(prevPage);
    }
  });

  // Обработчик клика на кнопку "Вперед"
  $('.pagination-next').click(function(e) {
    e.preventDefault();
    var currentPage = parseInt($('.pagination-page-active').text());
    var totalPages = parseInt($('.pagination-page').last().text());
    if (currentPage < totalPages) {
      var nextPage = currentPage + 1;
      loadPage(nextPage);
    }
  });

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
