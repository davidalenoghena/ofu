
$(document).ready(function() {

    $('#ofu-navbar').css('background','#E7ECFF');
    $('.switch').css('color', '#3C64B1');
    $('.nav-grey').css('color', '#373f41');
    $('.one').css('background-color', '#3c64b1');
    $('.two').css('background-color', '#3c64b1');
    $('.three').css('background-color', '#3c64b1');
});


const burger = document.querySelector('div.navbar-toggler');
const navLinks1 = document.querySelector('.nav-links');
const navLinks2 = document.querySelector('.login-btns');
const body = document.querySelector('.content');
console.log(burger);

const navSlide = () => {
    // Toggle Nav
    burger.addEventListener('click' , () => {
        navLinks1.classList.toggle('nav-active');
        navLinks2.classList.toggle('nav-active');

        burger.classList.toggle('toggle');
    });  
};

const navClose = () => {
    // Toggle Nav
    body.addEventListener('click' , () => {
        navLinks1.classList.remove('nav-active');
        navLinks2.classList.remove('nav-active');

        burger.classList.remove('toggle');
    });

}

navSlide();
navClose();
