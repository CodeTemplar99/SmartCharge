// explore buttons scroll
var exploreButtons = document.querySelectorAll('.explore');
exploreButtons.forEach(function (i) {
    i.addEventListener('click', endScroll)
    function endScroll() {
        window.scrollTo({
            top: 5300,
            // left: 100,
            behavior: 'smooth'
        });
        // }
    }
})

// See more scroll


document.querySelector('.learn-more').addEventListener('click', function () {
    window.scrollTo({
        top: 710,
        behavior: 'smooth'
    });
})


