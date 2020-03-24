function toggleEmailVerify() {

    document.querySelector('#checkMail').style.display = 'none';
    document.querySelector('#confirmMail').style.display = 'block';

    console.log("what")
}


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