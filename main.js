const menu = document.querySelector('.menu');
const button = document.querySelector('.butt-menu');

function toggleMenu() {
  menu.classList.toggle('menu--active');
}

button.addEventListener('click', toggleMenu)