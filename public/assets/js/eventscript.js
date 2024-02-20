const div = document.querySelector( '#languageChooser');
var menu = document.getElementById('dropdownMenu');
var lngBtn = document.getElementById('lngBtn');

function showMenu() {

    if(menu.style.display == 'block'){
        menu.style.display = 'none';
        rotateBack();
    } else {
        menu.style.display = 'block';
        rotate();
    }

}

function close() {
    menu.style.display = 'none';
}

function rotate() {
    lngBtn.classList.toggle('btnLngAnimate');
}

function rotateBack() {
    lngBtn.classList.toggle('btnLngAnimateBack');
}

document.addEventListener( 'click', (e) => {
    const withinBoundaries = e.composedPath().includes(div);

    if(!withinBoundaries) {
        close();
        lngBtn.classList.toggle('btnLngAnimate');
        lngBtn.classList.toggle('btnLngAnimateBack');
    }

})
