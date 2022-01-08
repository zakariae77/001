let login_btn= document.querySelector("#show-login");
let login_card = document.querySelector(".popup");
let blur_card = document.querySelector(".blur");

let signup_btn = document.querySelector("#show-logUP");
let signup_card = document.querySelector(".popup2");


login_btn.addEventListener("click",function(){

    login_card.classList.add("active");
    blur_card.classList.add("active");

});
/**  Selelct popup card and add class/remove active  **/
document.querySelector(".popup .close-btn").addEventListener("click",function(){

    login_card.classList.remove("active");
    blur_card.classList.remove("active");

});

/**  Selelct popup card for Sign UP and add class/remove active  **/

signup_btn.addEventListener("click",function(){

    signup_card.classList.add("active");
    blur_card.classList.add("active");
    login_card.classList.remove("active");

});

document.querySelector(".popup2 .close-btn").addEventListener("click",function(){

    signup_card.classList.remove("active");
    blur_card.classList.remove("active");

});
document.querySelector("#show-loginText").addEventListener("click",function(){

    signup_card.classList.remove("active");
    login_card.classList.add("active");

});

/******* this for navba  changer nav style when scroll            **********/
window.addEventListener("scroll", function(){
    let nav = document.querySelector("nav");
    nav.classList.toggle("sticky",  window.scrollY > 0 );
});