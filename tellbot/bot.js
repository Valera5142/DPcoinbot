function headerdown() {
    let head = document.getElementById("Myhead");
    if (head.className === "topnav") {
        head.className += " responsive";
    } else {
        head.className = "topnav";
    }
}

let modal = document.getElementById("myModal");
let btn = document.getElementById("hello");
let span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = 'flex';
}
span.onclick = function() {
    modal.style.display = 'none';
}