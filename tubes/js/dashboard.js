// Sidebar
let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".fa-magnifying-glass");

// When Hamburger menu is clicked, The Sidebar (class ".open") will run
closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
});
// End Hamburger menu for The Sidebar (class ".open")

// When Search button is clicked, The Sidebar (class ".open") will run
searchBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
});
// End Search button for The Sidebar (class ".open")

// When The Sidebar (class ".open") is run, The Hamburger menu will changes to a close icon and the opposite
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("fa-bars", "fa-xmark"); // Change Icon when to The sidebar open
 }else {
   closeBtn.classList.replace("fa-xmark","fa-bars");// Change Icon when to The Sidebar close
 }
}
// End change icon hamburger menu and a close
// End Sidebar