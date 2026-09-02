const burger = document.getElementById('burger');
const navLinksLeft = document.getElementById('navLinksLeft');

const userControls = document.getElementById('userControls');
const navLinksRight = document.getElementById('navLinksRight');


burger.addEventListener('click', () => {
    navLinksLeft.classList.toggle('active');
});


userControls.addEventListener('click', () => {
    navLinksRight.classList.toggle('active');
});

