const hamburger = document.getElementById('hamburger');
const sideMenu = document.getElementById('sideMenu');
const closeBtn = document.getElementById('closeBtn');
const overlay = document.getElementById('overlay');
const menuLinks = document.querySelectorAll('.side-menu .menu-links a');

hamburger.addEventListener('click', () => {
  sideMenu.classList.add('active');
  overlay.classList.add('active');
});

closeBtn.addEventListener('click', () => {
  sideMenu.classList.remove('active');
  overlay.classList.remove('active');
});

overlay.addEventListener('click', () => {
  sideMenu.classList.remove('active');
  overlay.classList.remove('active');
});

menuLinks.forEach(link => {
  link.addEventListener('click', () => {
    menuLinks.forEach(l => l.classList.remove('active-link'));
    link.classList.add('active-link');
    sideMenu.classList.remove('active');
    overlay.classList.remove('active');
  });
});
