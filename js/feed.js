let openMenu = document.getElementById('images-div');
let closeMenu = document.getElementById('menu');
let closeNav = document.getElementById('icon-cross');
let openNav = document.getElementById('icon-burger');
let openInfoBubble = document.getElementById('icon-vifo');
let closeInfoBubble = document.getElementById('vifo-textcloud');

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

function hideNav() {
    document.getElementById('nav').style.animation = 'menuLeave 0.2s linear forwards';
    setTimeout(() => {
    document.getElementById('nav').style.display = 'none';
}, 500);
}

function showNav() {
    console.log('test');
    document.getElementById('nav').style.display = 'block';
    document.getElementById('nav').style.animation = 'menuEnter 0.2s linear forwards';
}

function showInfoBubble() {
    document.getElementById('vifo-textcloud').style.display = 'block';
    document.getElementById('vifo-textcloud').style.animation = 'fade 1s';
}

function hideInfoBubble() {
    document.getElementById('vifo-textcloud').style.display = 'none';
}

for(let i = 0; i < 1; i++) {
    openMenu.addEventListener('dblclick', showMenu);
    closeMenu.addEventListener('dblclick', hideMenu);
    closeNav.addEventListener('click', hideNav);
    openNav.addEventListener('click', showNav);
    openInfoBubble.addEventListener('click', showInfoBubble);
    closeInfoBubble.addEventListener('click', hideInfoBubble);
}