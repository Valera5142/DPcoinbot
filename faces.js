function headerdown() {
    let head = document.getElementById("Myhead");
    if (head.className === "topnav") {
        head.className += " responsive";
    } else {
        head.className = "topnav";
    }
}