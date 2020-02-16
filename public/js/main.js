let btnMenu = document.querySelector("#btnMenu");

let menu = document.querySelector("#menu");

btnMenu.addEventListener("click", function() {
    if (btnMenu.classList.contains("change")) {
        menu.style.display = "none";
    } else {
        menu.style.display = "block";
    }
  });
  
btnMenu.addEventListener("click", function (){
    btnMenu.classList.toggle("change");
}); 

let nav = document.querySelector("#navInferior");

let btnsNav = nav.querySelectorAll("a");

for (var i = 0; i < btnsNav.length; i++) {
    let current = window.location.href;
        if (btnsNav[i].href === current) {
        btnsNav[i].classList.add("ativo")
        }
}