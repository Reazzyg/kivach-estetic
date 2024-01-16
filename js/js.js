// function navigation(){
//   console.log(3213);
//   const navigationButtons = document.querySelectorAll('.navigation-button-wrapper')
//   console.log(navigationButtons);
//     for(let i = 0; i < navigationButtons.length; i++){
//       let item = navigationButtons[i]
//       item.addEventListener('click', function(){
//       item.parentElement.classList.toggle('navigation-button-active')
//       let arrow = item.querySelector('.navigation-button__arrow')
//       arrow.classList.toggle('rotate')
//       })
//     }
//   }
//   navigation()
  
  const a = document.querySelectorAll('a')
  a.forEach((item) => item.addEventListener('click', (e) => e.preventDefault()))
  console.log(123);