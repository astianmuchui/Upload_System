var main = document.getElementById("main_menu");
var hamburger = document.getElementById("hamburger");
var cancel = document.getElementById("cancel");
hamburger.onclick = function(){
    main.style.display = "block";
    hamburger.style.display = "none";
}
cancel.onclick = function(){
    main.style.display = "none";
    hamburger.style.display = "block";
}

