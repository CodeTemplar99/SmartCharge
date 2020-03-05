// // explore buttons scroll
// var exploreButtons = document.querySelectorAll('.explore');
// exploreButtons.forEach(function (i) {
//     i.addEventListener('click', endScroll)
//     function endScroll() {
//         window.scrollTo({
//             top: 5300,
//             // left: 100,
//             behavior: 'smooth'
//         });
//         // }
//     }
// })

// See more scroll


// document.querySelector('#tab2').addEventListener('click', function () {
//     window.scrollTo({
//         top: 710,
//         behavior: 'smooth'
//     });
// })


document.querySelector('#tab2-link').addEventListener('click', function () {
    document.querySelector('#tab1').style.display = "none";
    document.querySelector('#tab2').style.display = "block";
})