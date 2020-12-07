const navBtn = document.querySelector(".nav-btn")
const desktopNav = document.querySelector(".desktop-nav")
const main = document.querySelector(".main")
const navIcon = document.querySelector(".nav-icon")

$('.nav-list a').on('click' , function(e){
    if(this.hash !== ''){
        e.preventDefault()

        const hash = this.hash

        $('html, body').animate({
            scrollTop: $(hash).offset().top - $('#desktop-nav').outerHeight() - $('#mobile-nav').outerHeight()
        }, 200)
        console.log(hash);
    }
})

navBtn.addEventListener("click", () =>{
    desktopNav.classList.toggle('show')
    main.classList.toggle("show")
    navIcon.classList.toggle("fa-times")
    navIcon.classList.toggle("fa-bars")
    console.log(navBtn);
})