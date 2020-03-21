
let isOpen = false

function showBoard() {
    document.querySelector('.hover-board').style.display = "block";
}

function hideBoard() {
    document.querySelector('.hover-board').style.display = "none";
}

function showBar() {
    document.querySelector('#navbarSupportedContent').style.display = isOpen ? "none" : "block"
    isOpen = !isOpen

}