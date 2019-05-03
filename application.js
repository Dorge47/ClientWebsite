function updateFooter() {
    console.log('ran');
    document.getElementById('copyright').innerHTML += ' ' + new Date().getFullYear();
}

function startup() {
    updateFooter();
}
