var navtoggle = document.querySelector('.navbar-toggler')
var navcollapse = document.querySelector('#navbarCollapse')

    navtoggle.addEventListener('click',() => {
    navcollapse.classList.toggle('show')
    })