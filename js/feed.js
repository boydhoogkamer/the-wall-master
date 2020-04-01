let openMenu = document.getElementById('images-div');
let closeMenu = document.getElementById('menu');


function showMenu() {
    document.getElementById('topicons').style.animation = 'menuLeave 0.2s linear forwards';
    document.getElementById('menu').style.display = 'flex';
    document.getElementById('menu').style.animation = 'menuEnter 0.2s linear forwards';
}

function hideMenu() {
    document.getElementById('menu').style.animation = 'menuLeave 0.2s linear forwards';
    document.getElementById('topicons').style.animation = 'menuEnter 0.1s linear forwards';
    setTimeout(() => {
    document.getElementById('menu').style.display = 'none';
}, 500);
}


for(let i = 0; i < 1; i++) {
    openMenu.addEventListener('dblclick', showMenu);
    closeMenu.addEventListener('dblclick', hideMenu);
}
