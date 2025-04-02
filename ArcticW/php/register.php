<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>Registrese en Arctic</title>
</head>

<body>
    <div class="container">
        <div class="container-profile">
            <span class="logo">
            </span>
        </div>
        <div class="container-form">
            <div class="logo-form">
                <img src="../img/icono-logo/LETRASLOGO.png" alt="logo Arctic Wolves"> 
            </div>
            <form class="form" action="../php/configuracionphp/registro_usuario.php" method="post" class="prueba">
                <input type="text" placeholder="Nom d'usuari" name="user">
                <input type="text" placeholder="Correu electronic" name="correo">
                <input type="password" id="confirm-password" placeholder="Contrasenya" name="pass">
                <button type="submit" value="Crear un compte nou" name="ingresar" style="background-color: bluef;">
                <!--<span><a href="#">¿Has oblidat la teva contrasenya?</a></span>
                <div class="border"></div>
                <button><a href="#">Tens compte? Inicia Sessió</a></button>!-->
            </form>
           <!-- <p class="create-page">
                <a href="#"></a> Termes i condicions de Arctic Wolves®, drets reservats. Visita els nostres termes<br> -->
            </p>
        </div>
    </div>
</body>

</html>



