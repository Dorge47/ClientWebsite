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

function multihover(rowNum) {
    for (let i = 0; i < 3; i++) {
        document.getElementsByClassName(`multihover${rowNum}`)[i].style.backgroundColor = "rgba(100, 100, 230, 0.4)"
    }
}

function clearhover(rowNum) {
    for (let i = 0; i < 3; i++) {
        document.getElementsByClassName(`multihover${rowNum}`)[i].style.backgroundColor = ""
    }
}

function phphover() {
    if (document.getElementById('phprepair')) {
        multihover(1);
    }
    if (document.getElementById('phpupgrades')) {
        multihover(2);
    }
    if (document.getElementById('phpremoval')) {
        multihover(3);
    }
    if (document.getElementById('phpmonitor')) {
        multihover(4);
    }
    if (document.getElementById('phpmanage')) {
        multihover(5);
    }
    if (document.getElementById('phpfactory')) {
        multihover(6);
    }
}

