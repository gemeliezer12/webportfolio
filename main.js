const navBtn = document.querySelector(".nav-btn")
const desktopNav = document.querySelector(".desktop-nav")
const main = document.querySelector(".main")
const navIcon = document.querySelector(".nav-icon")

navBtn.addEventListener("click", () =>{
    desktopNav.classList.toggle('show')
    main.classList.toggle("show")
    navIcon.classList.toggle("fa-times")
    navIcon.classList.toggle("fa-bars")
    console.log(navBtn);
})