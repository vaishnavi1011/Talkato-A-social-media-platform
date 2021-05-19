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

// function plus_sign() {
//     if (b.style.display === "none") {
//         document.getElementById("plus").style.display = "block";
//         return 0;
//     } else {
//         document.getElementById("plus").style.display = "none";
//         return 1;
//     }
// }
