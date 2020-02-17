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