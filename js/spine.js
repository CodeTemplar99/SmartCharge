// hover board
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

// slide for landing
var on = true;
var myVar = setInterval(function () { if (on) { slides() } on = true; }, 5000);

function slides() {
    document.getElementsByTagName("img")[0].style.width = "0px";
    document.getElementsByTagName("img")[1].style.width = "100%";
    var slide = document.getElementsByTagName("img")[0];
    document.getElementById("slide").appendChild(slide);

}


// AJAX for recharge forms

// function ajax_func() {
//     let xmlHttp = new XMLHttpRequest();
//     xmlHttp.onreadystatechange = () => {
//         if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
//             var receiver = document.getElementById("get_data");
//             receiver.innerHTML = xmlHttp.responseText;
//         }
//     }

//     xmlHttp.open('GET', 'core.php', true);
//     xmlHttp.send();
// }
