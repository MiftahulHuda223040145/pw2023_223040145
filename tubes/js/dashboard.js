// Sidebar
let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");

// When Hamburger menu is clicked, The Sidebar (class ".open") will run
closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
});
// End Hamburger menu for The Sidebar (class ".open")

function menuBtnChange() {
  if(sidebar.classList.contains("open")){
    closeBtn.classList.replace("fa-xmark", "fa-bars"); // Change Icon when to The sidebar open
  }else {
    closeBtn.classList.replace("fa-bars","fa-xmark");// Change Icon when to The Sidebar close
  }
}
 // End change icon hamburger menu and a close
 // End Sidebar

function dashboard() {
  var db = document.getElementById("dashboard");
  db.classList.add("collapse-in");
}
function users() {
  var users = document.getElementById("users");
  users.classList.add("collapse-in");
}
function setting() {
  var set = document.getElementById("setting");
  set.classList.add("collapse-in");
}

$(document).ready(function () {
  $('#keyword').on('keyup', function () {
      $.get('../../php/ajax/search.php?keyword=' + $('#keyword').val(), function (data) {

          $('.table').html(data);

      });

  });
});