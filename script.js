// Creating the modal popup
    // variables for the id's
    var container = document.getElementById("bg-modal");
    var content = document.getElementById("modal");
    var close = document.getElementById("close");
    var button = document.getElementById("book");
    var footer = document.getElementById("opener");

    // Functions to open the modal
    button.onclick = function () {
        container.style.display = "block";
        content.style.display = "block";
    }
    // Programming the close button
    close.onclick = function () {
        container.style.display = "none";
        content.style.display = "none";
    }
var bar = document.getElementById("nav");
    window.onkeydown = function (){
        bar.style.background= "white";
    }
    window.onscroll = function (){
        bar.style.background= "white";
    }
