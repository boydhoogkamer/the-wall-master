let toLogin = document.getElementById('login-button');
let toRegister = document.getElementById('register-button');
let arrowBack = document.getElementById('backarrow');
let arrowBack2 = document.getElementById('backarrow2');

for(let i = 0; i < 1; i++) {
    toLogin.addEventListener('click', showLogin);
    toRegister.addEventListener('click', showRegister);
    arrowBack.addEventListener('click', goBack);
    arrowBack2.addEventListener('click', goBack2);
}

function showLogin() {
    document.getElementById('loginpage-buttons').style.animation = 'hoverLeft 0.5s linear forwards';
    setTimeout(() => {
        document.getElementById('login').style.animation = 'hoverRight 0.5s linear forwards';
        document.getElementById('backarrow').style.display = 'block';
        document.getElementById('backarrow').style.animation = 'hoverRight 0.5s linear forwards';
    }, 500);
}

function showRegister() {
    document.getElementById('loginpage-buttons').style.animation = 'hoverLeft 0.5s linear forwards';
    setTimeout(() => {
        document.getElementById('register').style.animation = 'hoverRight 0.5s linear forwards';
        document.getElementById('backarrow2').style.display = 'block';
        document.getElementById('backarrow2').style.animation = 'hoverRight 0.5s linear forwards';
    }, 500);
}

function goBack() {
    document.getElementById('login').style.animation = 'hoverLeft 0.5s linear forwards';
    document.getElementById('backarrow').style.animation = 'hoverLeft 0.5s linear forwards';
    setTimeout(() => {
        document.getElementById('loginpage-buttons').style.animation = 'hoverRight 0.5s linear forwards';
    }, 500);
}

function goBack2() {
    document.getElementById('register').style.animation = 'hoverLeft 0.5s linear forwards';
    document.getElementById('backarrow2').style.animation = 'hoverLeft 0.5s linear forwards';
    setTimeout(() => {
        document.getElementById('loginpage-buttons').style.animation = 'hoverRight 0.5s linear forwards';
    }, 500);
}