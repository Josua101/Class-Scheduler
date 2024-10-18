/*const btn = document.querySelector('.btn-login');
const username = document.getElementById('email');
const password = document.getElementById('password');
const lockusername = "sticollege@gmail.com";
const lockpassword = "123";
btn.addEventListener("click", function(e){
    e.preventDefault();
if((password.value == lockpassword) && (username.value == lockusername)){
    window.location.href = "Schedule List.html";
}else{
    alert(`Access Denied`);
}
    //alert(`${username}`);
});

/*
//How to display a text using function...
function ()
let message = 'Welcome JBLDevs...';
const greet = document.querySelector('.greeting');
greet.innerText = message;
*/


const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

registerLink.addEventListener("click",()=> {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=>{
    wrapper.classList.remove('active');
});