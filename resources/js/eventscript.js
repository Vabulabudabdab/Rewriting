function showMenu() {
    var menu = document.getElementById('dropdownMenu');

    if(menu.style.display == 'block'){
        menu.style.display = 'none';
    }else {
        menu.style.display = 'block';
    }
}

function rotate() {
    var lngBtn = document.getElementById('lngBtn');

    lngBtn.classList.toggle('btnLngAnimate');
}
