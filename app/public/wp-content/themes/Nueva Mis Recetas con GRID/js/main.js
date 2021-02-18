var myBtn = document.getElementById('btn-scroll');


window.onscroll = function () {
    if (window.pageYOffset >= 600) {
        myBtn.classList.remove('scroll');
    } else {
        myBtn.classList.add('scroll');
    }
}

myBtn.onclick = function () {
    window.scrollTo(0, 0);
}