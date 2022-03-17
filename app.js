const menuOpen = document.getElementById('menuOpen');
const menuClose = document.getElementById('menuClose');
const navMenu = document.querySelector('.nav--bar__nav');
const loginFormToggle = document.getElementById('loginFormToggle');
const regFormToggle = document.getElementById('regFormToggle');
const loginForm  = document.getElementById('loginForm');
const regForm  = document.getElementById('regForm');
const loginClose = document.querySelector('.login--close');
const regClose = document.querySelector('.reg--close');
const queryClose = document.querySelector('.query--close');
const navLinks = document.querySelectorAll('.nav--bar__link');
const queryForm = document.querySelector('.query--form');
const queryDetails = document.querySelector('.query__details');

const queryBtn = document.getElementById('queryBtn');
const searchBtn = document.getElementById('searchBtn');

// Navigation Openning functionality


// Whenever a navigation list item is clicked close the menu


// Open the login form and register from in button click


menuOpen.addEventListener('click', ()=>{
    navMenu.classList.add('show--nav');
});
menuClose.addEventListener('click', ()=> {

    navMenu.classList.remove('show--nav');
});
navLinks.forEach(link => {
    link.addEventListener('click',()=>{
        navMenu.classList.remove('show--nav');
    } );
    
});

if(loginFormToggle != null){
    loginFormToggle.addEventListener('click', ()=>{

        loginForm.classList.add('show--form')
    });
    loginClose.addEventListener('click', ()=>{

        loginForm.classList.remove('show--form')
    });
}

if(regFormToggle != null){
    regFormToggle.addEventListener('click', ()=>{

        regForm.classList.add('show--form')
    });
    
    regClose.addEventListener('click', ()=>{
    
        regForm.classList.remove('show--form')
    });
}

if(queryBtn != null){
    queryBtn.addEventListener('click', ()=>{
        console.log('clicked');
        queryForm.classList.add('show--form');
    });

    searchBtn.addEventListener('click', ()=>{
        queryDetails.classList.add('show--query');
    });
    queryClose.addEventListener('click', ()=> {

        queryForm.classList.remove('show--form');
    });
}








/* Change the navigation bar background color on scroll*/ 