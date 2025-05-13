fetch('/ArcticW/php/configuracionphp/login_usuario.php') // Reemplaza '/api/user' con la ruta de tu API
  .then(response => response.json())
  .then(data => {
    if (data.username) {
      document.getElementById('user-info').textContent = 'Bienvenido, ' + data.username;
    } else {
      console.error(data.error);
    }
  });
