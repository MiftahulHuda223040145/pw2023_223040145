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

function menuBtnChange() {
    if(sidebar.classList.contains("open")){
      closeBtn.classList.replace("fa-bars", "fa-xmark"); // Change Icon when to The sidebar open
    }else {
      closeBtn.classList.replace("fa-xmark","fa-bars");// Change Icon when to The Sidebar close
    }
}
   // End change icon hamburger menu and a close
   // End Sidebar

// From Swiper JS
var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
    },
});
// End Swiper JS

$(document).ready(function () {
  $('#keyword').on('keyup', function () {
      $.get('php/ajax/pencarian.php?keyword=' + $('#keyword').val(), function (data) {

          $('.table').html(data);

      });

  });
});