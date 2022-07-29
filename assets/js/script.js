const navGrow = document.querySelector('.extend-nav');
const navToggle = document.querySelector('#nav-toggle');
const contactForm = document.querySelector('#contact-form');


contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    e.target.elements.name.value = '';
    e.target.elements.email.value = '';
    e.target.elements.message.value = '';
});


navToggle.addEventListener('click', () => {
    navGrow.classList.toggle('show-mobile-nav');
})