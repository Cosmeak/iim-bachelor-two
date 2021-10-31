let header = document.getElementsByTagName('header')[0];
const className = "toggle";

window.addEventListener('scroll', function() {
    let windowposition = window.screenY > 0;
    header.classList.toggle(className, windowposition);
})