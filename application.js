var navDisplayed = false;

function updateFooter() {
    document.getElementById('copyright').innerHTML += ' ' + new Date().getFullYear();
}

function startup() {
    updateFooter();
}

function toggleNav() {
    var menubar = document.getElementsByClassName('menubar')[0]
    var navbar = document.getElementsByClassName('nav-left')[0];
    if (!navDisplayed) {
        navbar.style.left = '0';
        navDisplayed = true;
        menubar.children[0].style.transform = 'rotate(45deg) translateX(2px) translateY(5px)';
        menubar.children[1].style.backgroundColor = 'rgba(0,0,0,0)';
        menubar.children[2].style.transform = 'rotate(-45deg) translateX(2px) translateY(-5px)';
    }
    else if (navDisplayed) {
        navbar.style.left = '-400px';
        navDisplayed = false;
        menubar.children[0].style.transform = '';
        menubar.children[1].style.backgroundColor = '';
        menubar.children[2].style.transform = '';
    }
}

function toggleBox(boxNum) {
    if(boxNum == "box1") {
        
    }
}
