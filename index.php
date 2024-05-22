<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstap@5.1.3/dist/css/bootsrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhF1dvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqy12QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles_php.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inicio de sesion</title>
</head>
<body>
    <form action="iniciarsesion.php" method="POST">
        <h1>INICIAR SESION</h1>
        <hr>
            <?php
            if (isset($_GET['error'])) {
                ?>
                <p class="error">
                <?php 
                echo $_GET['error']; 
                ?>

                </p>            
            <?php
            }
            ?>

        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Clave</label>
        <input type="text" name="clave" id="clave" placeholder="Contraseña">

        <hr>
        <button type="submit">Iniciar Sesion</button>
        <a class="crearcuenta" href="crearcuenta.php">Crear Cuenta</a>
</body>
</html>