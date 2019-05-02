function updateFooter() {
    console.log('ran');
    document.getElementById('copyright').innerText += ' ' + new Date().getFullYear();
}

function startup() {
    updateFooter();
}
