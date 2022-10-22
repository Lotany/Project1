const toggle = document.querySelector(".toggle");
const menu = document.querySelector(".menu");
const items = document.querySelectorAll(".item");

/* toggle mobile menu */
function toggleMenu(){
    if(menu.classList.contains("active")){
     menu.classList.remove("active");
     toggle.querySelector("a").innerHTML = "<i class='fas fa-bars'></i>";
    }else{
        menu.classList.add("active");
        toggle.querySelector("a").innerHTML = "<i class='fas fa-bars'></i>";
    }
}
