import {createMenu} from './menu.js'
import {createNavigation} from './navigation.js'
import {createForm} from './form.js'
 window.onload = function () {
    loadHeader()
      .then(() => {
        // После успешной загрузки header запускаем функцию createMenu
        createMenu();
        createNavigation()
        createForm()
      })
      .catch(error => {
        console.error('Error:', error);
      });
  };

  function loadHeader() {
    return new Promise((resolve, reject) => {
      fetch('./components/header.html') // Замените на путь к вашему файлу header.html
        .then(response => response.text())
        .then(data => {
          let header = document.querySelector('header')
          header.innerHTML = data;
          resolve();
        })
        .catch(error => {
          console.error('Error loading header:', error);
          reject(error);
        })
    })
  }




// const a = document.querySelectorAll('a')
// a.forEach((item) => item.addEventListener('click', (e) => e.preventDefault()))

