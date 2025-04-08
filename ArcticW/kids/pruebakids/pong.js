const startPongBtn = document.getElementById("startPongBtn");
const pongContainer = document.getElementById("pong-container");
const canvas = document.getElementById("pongCanvas");
const ctx = canvas.getContext("2d");

let player, computer, ball;
let gameLoop;

startPongBtn.addEventListener("click", () => {
  pongContainer.style.display = "flex";
  startPongGame();
});

function startPongGame() {
  player = {
    x: 10,
    y: canvas.height / 2 - 50,
    width: 10,
    height: 100,
    dy: 0,
    speed: 5
  };

  computer = {
    x: canvas.width - 20,
    y: canvas.height / 2 - 50,
    width: 10,
    height: 100,
    dy: 0,
    speed: 4
  };

  ball = {
    x: canvas.width / 2,
    y: canvas.height / 2,
    size: 10,
    dx: 4,
    dy: -4
  };

  document.addEventListener("keydown", keyDownHandler);
  document.addEventListener("keyup", keyUpHandler);

  if (gameLoop) cancelAnimationFrame(gameLoop);
  animate();
}

function animate() {
  gameLoop = requestAnimationFrame(animate);
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  // Dibujar paletas
  ctx.fillStyle = "red";
  ctx.fillRect(player.x, player.y, player.width, player.height);
  ctx.fillRect(computer.x, computer.y, computer.width, computer.height);

  // Dibujar bola
  ctx.beginPath();
  ctx.arc(ball.x, ball.y, ball.size, 0, Math.PI * 2);
  ctx.fillStyle = "white";
  ctx.fill();
  ctx.closePath();

  // Mover jugador
  player.y += player.dy;

  if (player.y < 0) player.y = 0;
  if (player.y + player.height > canvas.height) player.y = canvas.height - player.height;

  // Mover computadora (simple AI)
  if (computer.y + computer.height / 2 < ball.y) {
    computer.y += computer.speed;
  } else {
    computer.y -= computer.speed;
  }

  if (computer.y < 0) computer.y = 0;
  if (computer.y + computer.height > canvas.height) computer.y = canvas.height - computer.height;

  // Mover bola
  ball.x += ball.dx;
  ball.y += ball.dy;

  // Rebote arriba/abajo
  if (ball.y < 0 || ball.y > canvas.height) {
    ball.dy *= -1;
  }

  // Colisiones con jugadores
  if (
    ball.x - ball.size < player.x + player.width &&
    ball.y > player.y &&
    ball.y < player.y + player.height
  ) {
    ball.dx *= -1;
    ball.x = player.x + player.width + ball.size; // Evitar que se quede pegado
  }

  if (
    ball.x + ball.size > computer.x &&
    ball.y > computer.y &&
    ball.y < computer.y + computer.height
  ) {
    ball.dx *= -1;
    ball.x = computer.x - ball.size; // Evitar que se quede pegado
  }

  // Punto para computadora o jugador
  if (ball.x < 0 || ball.x > canvas.width) {
    resetBall();
  }
}

function resetBall() {
  ball.x = canvas.width / 2;
  ball.y = canvas.height / 2;
  ball.dx *= -1;
  ball.dy = 4 * (Math.random() > 0.5 ? 1 : -1);
}

function keyDownHandler(e) {
  if (e.key === "ArrowUp") {
    player.dy = -player.speed;
  } else if (e.key === "ArrowDown") {
    player.dy = player.speed;
  }
}

function keyUpHandler(e) {
  if (e.key === "ArrowUp" || e.key === "ArrowDown") {
    player.dy = 0;
  }
}
