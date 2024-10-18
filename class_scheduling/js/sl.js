const btnLogout = document.querySelector('.logout');
btnLogout.addEventListener("click", function(e){
    e.preventDefault();
    window.location.href = "index.html";
});