const header = document.getElementsByTagName('header')[0]; // We pick up the header or other element we want to change on scroll
const className = 'toggle'; // The name of the class we want to add
const scrollTrigger = 80; // Moment that we want to add class 

document.addEventListener('scroll', function() {
    const top = document.documentElement.scrollTop; // We check at how many pixels we are from the top 
    if (top > scrollTrigger) { // We compare the value we actually have with the one we want 
        header.classList.add(className); // a,d if it's taller than the one we want, we add the class to header
    }else { // and if it's become smaller we removed the class.
        header.classList.remove(className);
    }
});

$(document).ready( function() {
    $('.burger').click(function() {
        $('ul').slideToggle();
    });
});

const burger = document.querySelector('.burger');
var current_rotation = 0;

burger.addEventListener('click', function() {
    if (current_rotation == 0) {
        current_rotation += 90;
        burger.style.transform = 'rotate(' + current_rotation + 'deg)';
    }
    else {
        current_rotation -= 90;
        burger.style.transform = 'rotate(' + current_rotation + 'deg)';
    }
});