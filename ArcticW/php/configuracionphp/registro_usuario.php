<?php
include 'configuracion.php';

$nombre = $_POST['user'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];
$pass_encripted = hash('sha1' ,$pass);   //encriptacion de la contraseña utilizando un hash  sha1//

$query = "INSERT INTO usuarios(usuario, correo, contrasena) 
            VALUES ('$nombre', '$correo', '$pass_encripted')";

//verificar que el nombre de usuario no se vaya a repetir, sin embargo otros datos si se pueden repetir sin ningun problema
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$nombre' ");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo ' 
        <script>
            alert ("Este usuario ya ha sido registrado, intenta con otro diferente ");
            window.location = "../register.php"
         </script>
     
    ';
    exit(); 
}



$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
        alert("Usuario almacenado exitósamente");
        window.location = "../login.php";
    </script>
    ';
} else {
    echo '
    <script>
        alert("Intentalo de nuevo, usuario no almacenado ");
        window.location = "../register.php ";
    </script>
    ';
}

mysqli_close($conexion);
?>
