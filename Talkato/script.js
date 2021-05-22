var a;
a = document.getElementById("hide_show");

var b = document.getElementById("plus");

function hide() {

    if (a.style.display === "none") {
        document.getElementById("hide_show").style.display = "block";
        document.getElementById("foo1").style.display = "none";
        document.getElementById("foo2").style.display = "block";
        return 0;
    } else {
        document.getElementById("hide_show").style.display = "none";
        document.getElementById("foo1").style.display = "block";
        document.getElementById("foo2").style.display = "none";
        return 1;
    }
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("share_upSide_btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function () {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


