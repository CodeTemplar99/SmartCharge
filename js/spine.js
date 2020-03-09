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


// document.querySelector('#dp-face').addEventListener('mouseover',
//     function (h) {
//         if (h.event = 'mouseover') {
//             document.querySelector('.hover-board').style.display = "block"
//         }

//         else if (h.event != 'mouseover') {
//             document.querySelector('#dp-face').addEventListener('mouseout', function () {
//                 document.querySelector('.hover-board').style.display = "none"


//             }

//             )
//         }
//     })

// document.getElementById(".dp-face").addEventListener("mouseover", function (event) {
//     var target = event.target,
//         related = event.relatedTarget,
//         match;


    // exit if no matching node has been found
    if (!match) { return; }

    // loop through the parent of the related target to make sure that it's not a child of the target
    while (related && related != target && related != document) {
        related = related.parentNode;
    }

