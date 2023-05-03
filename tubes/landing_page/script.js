// Animation Navigation List When Hamburger button exists
let menuToggle = document.querySelector('.menu-toggle input');
let navUl = document.querySelector('nav ul');

menuToggle.addEventListener('click', function () {
    navUl.classList.toggle('slide'); // when transparent checkbox clicked, The nav list will appear
});

// Changing color of navigation when scrolltop 20 from top
let nav = document.querySelector('nav');
window.addEventListener('scroll', ()=> {
    if (document.documentElement.scrollTop > 20 ) {
        nav.classList.add('sticky'); // If scrolltop 20 from top, add class sticky
    } else {
        nav.classList.remove('sticky'); // else not remove class sticky
    }

});
// End Changing color
// End Animation Navigation List

// From Swiper JS
var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
    },
});
// End Swiper JS