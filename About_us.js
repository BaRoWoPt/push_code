const closeSideBar = document.getElementById("icon_close_sidebar");
const closeNavBar = document.getElementById("icon_close_navbar");
const sidebar = document.querySelector(".sidebar");
const navsidebar = document.getElementById("navsidebar");
const openSideBar = document.getElementById("icon_open_sidebar");
const openNavSideBar = document.getElementById("icon_chart");

// // process close
function ShowSideBar() {
  sidebar.classList.add("open");
}
openSideBar.addEventListener("click", ShowSideBar);

function ShowNavSideBar() {
  navsidebar.classList.add("open");
}
openNavSideBar.addEventListener("click", ShowNavSideBar);

// //////////////////////////////////////////////////////////////////////////////////////////

function HiddenSideBar() {
  sidebar.classList.remove("open");
}
closeSideBar.addEventListener("click", HiddenSideBar);



function HiddenNavSideBar() {
  navsidebar.classList.remove("open");
}
closeNavBar.addEventListener("click", HiddenNavSideBar);


// //////////////////////////////////////////////////////////////////////////////////////////
