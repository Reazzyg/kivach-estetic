import {createMenu} from './menu.js'
import {createNavigation} from './navigation.js'
import {createForm} from './form.js'

 window.onload = function () {

    // loadHeader().then(() => {

        // После успешной загрузки header запускаем функцию createMenu
        createMenu();

      // }).catch(error => {

      //   console.error('Error:', error);

      // });
  };

createNavigation()

createForm()


function loadHeader() {

    return new Promise((resolve, reject) => {

      fetch('./components/header.html') 

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

