$(document).ready(function() {
      console.log($('.pagination-prev'));

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

  // Функция для обновления состояния кнопок навигации
  function updateNavigationButtons(page) {
    var totalPages = parseInt($('.pagination-page').last().text());
      console.log($('.pagination-next'));

    if (page === 1) {
      $('.pagination-prev').hide();
      console.log(111);
    } else {
      $('.pagination-prev').show();
      console.log(222);
      console.log($('.pagination-prev'));
    }
    if (page === totalPages) {
      $('.pagination-next').hide();
      console.log(333);
    } else {
      $('.pagination-next').show();
      console.log(444);
    }
  }

  // Загрузка комментариев для текущей страницы при загрузке страницы
  var currentPage = parseInt($('.pagination-page-active').text());
  loadPage(currentPage);
});
