const burger = document.getElementById('burger');
const navLinksLeft = document.getElementById('navLinksLeft');

burger.addEventListener('click', () => {
  navLinksLeft.classList.toggle('active');
});


