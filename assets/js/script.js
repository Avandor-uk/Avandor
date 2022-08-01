const navGrow = document.querySelector('.extend-nav');
const navToggle = document.querySelector('#nav-toggle');

navToggle.addEventListener('click', () => {
    navGrow.classList.toggle('show-mobile-nav');
})