function updateFooter() {
    document.getElementById('copyright').innerHTML += ' ' + new Date().getFullYear();
}

function startup() {
    updateFooter();
}
