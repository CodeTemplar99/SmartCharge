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
