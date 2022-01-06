

// Menu Burger
if (window.matchMedia("(max-width: 1280px)").matches) {
    var menu_burger = document.getElementById('menu-burger');
    var close = document.getElementById('x');
    var burger = document.getElementById('burger');



    function displayMenu() {
        menu_burger.style.transform = 'translateX(0)';
        burger.style.transform = 'translateX(500px)';
    }
    function displayyMenu() {
        menu_burger.style.transform = 'translateX(500px)';
        burger.style.transform = 'translateX(0)';
    }

    //events on click
    burger.addEventListener('click', displayMenu);
    close.addEventListener('click', displayyMenu);
  }


document.getElementById('next_inscription').addEventListener('click', () =>{
    document.getElementById('content_inscription_1').style.display = "none";
    document.getElementById('content_inscription_2').style.display = "flex";
    document.getElementById('submit_inscription').style.display = "flex";
    document.getElementById('next_inscription').style.display = "none";
})

document.getElementById('back_inscription').addEventListener('click', () =>{
    document.getElementById('content_inscription_1').style.display = "flex";
    document.getElementById('content_inscription_2').style.display = "none";
    document.getElementById('submit_inscription').style.display = "none";
    document.getElementById('next_inscription').style.display = "block";
})


// -------------------------------------------------------------------
// Inscription options 
// -------------------------------------------------------------------


const btns_add = document.querySelectorAll(".add_option");
    btns_add.forEach((btn) =>{
        btn.addEventListener('click', function(){
            const container = btn.parentElement.parentElement.id;
            AddOption(container)});
        });
const btns_dlt = document.querySelectorAll(".dlt_option");
    btns_dlt.forEach((btn) =>{
        btn.addEventListener('click', function(){
            const container = btn.parentElement.parentElement.id;
            DltOption(container)});
        });

        
// Add Options Inscription
function AddOption(container){
    const add = document.getElementById(container).getElementsByClassName('add_option')[0];
    const dlt = document.getElementById(container).getElementsByClassName('dlt_option')[0];
    const div = document.getElementById(container).getElementsByClassName('options')[0];
    const parent = document.getElementById(container).getElementsByClassName('content')[0];

    dlt.disabled = false; // Enable button delete
    dlt.style.filter = 'none'; // Remove grayscale
    var clone = div.cloneNode(true); // Clone div Soft skills
    parent.appendChild(clone); // Add the clone as a child of the parent
    var count = parent.getElementsByTagName('div').length; // Calculate the number of div in the parent
    if (count > 1){ // If there are more than 1 div, display the Delete button
        dlt.style.display = 'flex';
        if(count >= 3){ // If there are 5 or more div, disable button add (so there are 5 options max) & add grayscale
            add.disabled = true;
            add.style.filter = "grayscale(100%)";
        }
    }
}
// Delete Option Inscription
function DltOption(container){
    const add = document.getElementById(container).getElementsByClassName('add_option')[0];
    const dlt = document.getElementById(container).getElementsByClassName('dlt_option')[0];
    const parent = document.getElementById(container).getElementsByClassName('content')[0];
    var count = parent.getElementsByTagName('div').length;
    add.disabled = false; // Enable button Add
    add.style.filter = 'none'; // Remove grayscale 
    if(count > 1){
        parent.removeChild(parent.lastChild); // Remove the last child of  the parent
        if(count == 2){ // If there are 1 div (2 because it will refresh when user click), disable button delete (so there is alway one div) & add grayscale
            dlt.disabled = true;
            dlt.style.filter = "grayscale(100%)";
        }
    }
}

