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
  // navigation()
function menu(){
  const menu = document.querySelector('.menu')
  const openClose = document.querySelector('.menu-burger__line')
 menu.addEventListener('click', ()=>{
  menu.classList.toggle('menu-active')
  openClose.classList.toggle
 })
}
menu()
  const a = document.querySelectorAll('a')
  a.forEach((item) => item.addEventListener('click', (e) => e.preventDefault()))