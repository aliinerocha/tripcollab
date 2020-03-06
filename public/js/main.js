let btnMenu = document.querySelector("#btnMenu");

let menu = document.querySelector("#menu");

btnMenu.addEventListener("click", function() {
    if (btnMenu.classList.contains("change")) {
        menu.style.display = "none";
        document.querySelector(".timeline").classList.remove("d-none");
    } else {
        menu.style.display = "block";
        document.querySelector(".timeline").classList.add("d-none");
    }
});

btnMenu.addEventListener("click", function() {
    btnMenu.classList.toggle("change");
});

$("div.alert")
    .not(".alert-important")
    .delay(3000)
    .fadeOut(350);
