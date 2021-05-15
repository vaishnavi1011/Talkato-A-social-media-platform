var a;
a = document.getElementById("hide_show");

function hide() {
    if (a.style.display === "none") {
        document.getElementById("hide_show").style.display = "block";
        return 0;
    } else {
        document.getElementById("hide_show").style.display = "none";
        return 1;
    }
}