const screens = document.querySelectorAll('.screen');
const choose_insect_btns = document.querySelectorAll('.choose-insect-btn');
const start_btn = document.getElementById('start-btn');
const game_container = document.getElementById('game-container');
const tempsEl = document.getElementById('temps'); // Cambiado de 'time' a 'temps'
const puntuacioEl = document.getElementById('puntuacio'); // Cambiado de 'score' a 'puntuacio'
let seconds = 30; // Tiempo máximo del juego (30 segundos)
let score = 0;
let selected_insect = {};
let gameInterval;
let isGameOver = false;

start_btn.addEventListener('click', () => screens[0].classList.add('up'));

choose_insect_btns.forEach(btn => {
    btn.addEventListener('click', () => {
        const img = btn.querySelector('img');
        const src = img.getAttribute('src');
        const alt = img.getAttribute('alt');
        selected_insect = { src, alt };
        screens[1].classList.add('up');
        setTimeout(createInsect, 1000);
        startGame();
    });
});

function startGame() {
    gameInterval = setInterval(decreaseTemps, 1000); // Comienza la cuenta atrás
    setTimeout(endGame, seconds * 1000); // Termina el juego después de 30 segundos
}

function decreaseTemps() {
    let m = Math.floor(seconds / 60); // Minutos
    let s = seconds % 60; // Segundos
    m = m < 10 ? `0${m}` : m;
    s = s < 10 ? `0${s}` : s;
    tempsEl.innerHTML = `Temps: ${m}:${s}`; // Actualiza el tiempo en "Temps"
    
    if (seconds > 0) {
        seconds--;
    }
}

function createInsect() {
    if (isGameOver) return; // Evita que se creen insectos si el juego terminó

    const insect = document.createElement('div');
    insect.classList.add('insect');
    const { x, y } = getRandomLocation();
    insect.style.top = `${y}px`;
    insect.style.left = `${x}px`;
    insect.innerHTML = `<img src="${selected_insect.src}" alt="${selected_insect.alt}" style="transform: rotate(${Math.random() * 360}deg)" />`;

    insect.addEventListener('click', catchInsect);

    game_container.appendChild(insect);
}

function getRandomLocation() {
    const width = window.innerWidth;
    const height = window.innerHeight;
    const x = Math.random() * (width - 200) + 100;
    const y = Math.random() * (height - 200) + 100;
    return { x, y };
}

function catchInsect() {
    if (isGameOver) return; 

    increaseScore();
    this.classList.add('caught');
    setTimeout(() => this.remove(), 2000);
    addInsects();
}

function addInsects() {
    if (isGameOver) return;

    setTimeout(createInsect, 1000);
    setTimeout(createInsect, 1500);
}

function increaseScore() {
    score++;
    puntuacioEl.innerHTML = `Puntuació: ${score}`; 
}

function endGame() {
    isGameOver = true; 
    clearInterval(gameInterval); 
    message.innerHTML = "Game Over! Puntuació Final: " + score;
    message.classList.add('visible');
    setTimeout(() => {
        screens[2].classList.add('up');
    }, 2000);
}

const restartBtn = document.getElementById('restart-btn');
restartBtn.addEventListener('click', () => {
    window.location.href = '../kids.html';
});
