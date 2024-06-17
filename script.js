
//body related vars here
var homeSection = document.getElementById('home');
var productSection = document.getElementById('products');
var testimonialSection = document.getElementById('testimonials');
var contactUsSection = document.getElementById('contactUs');
var bodyBackgroundContainer = document.getElementsByClassName('body-background-container');



//sign up and sign in containers here 
var signInContainer = document.getElementById('sign-in-container');
var signUpContainer = document.getElementById('sign-up-container');

//sign up and sign in buttons 
var signInButton = document.getElementById('sign-in-button');
var signUpButton = document.getElementById('sign-up-button');
var signInAnother = document.getElementById('sign-in-button-one');
var signUpAnother = document.getElementById('sign-up-button-one');


//sign up and sign in close buttons 
var signInCloseButton = document.getElementById('close-button');
var signUpCloseButton = document.getElementById('sign-up-close-button');


function popUp(screen, secondary){
    homeSection.style.filter = 'blur(2px)';
    homeSection.style.pointerEvents = 'none';
    homeSection.style.userSelect = 'none';
    bodyBackgroundContainer[0].style.filter = 'blur(2px)';

    productSection.style.display = 'none';
    contactUsSection.style.display = 'none';
    testimonialSection.style.display = 'none';

    secondary.style.display = 'none';
    screen.style.display = 'flex';
}

function closePopUp(screen){
    homeSection.style.filter = 'none';
    homeSection.style.pointerEvents = 'all';
    homeSection.style.userSelect = 'auto';
    bodyBackgroundContainer[0].style.filter = 'none';

    productSection.style.display = 'flex';
    contactUsSection.style.display = 'flex';
    testimonialSection.style.display = 'flex';

    screen.style.display = 'none';

}

signInButton.addEventListener('mousedown', () => {
    popUp(signInContainer, signUpContainer);
});

signUpButton.addEventListener('mousedown', () => {
    popUp(signUpContainer, signInContainer);
});

signInCloseButton.addEventListener('mousedown', () => {
    closePopUp(signInContainer);
});

signUpCloseButton.addEventListener('mousedown', () => {
    closePopUp(signUpContainer);
});

signInAnother.addEventListener('mousedown', () =>{
    popUp(signInContainer, signUpContainer);
});

signUpAnother.addEventListener('mousedown', () =>{
    popUp(signUpContainer, signInContainer);
});