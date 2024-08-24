const menu = document.querySelector('.menu');
const button = document.querySelector('.menu_menu');

function toggleMenu() {
  menu.classList.toggle('menu--active');
}

button.addEventListener('click', toggleMenu)