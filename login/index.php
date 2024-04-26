<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        <h2>BIENVENIDO</h2>
        
        <div class="input-group">

        <div class="input-container">
            <input type="text" name="name" placeholder="Nombre">
            <i class="fa-solid fa-user" ></i>
        </div>
        
        <div class="input-container">
            <input type="password" name="password" placeholder="contraseña">
            <i class="fa-solid fa-lock" ></i>
        </div>
        
        <div class="input-container">
            <input type="email" name="email" placeholder="correo">
            <i class="fa-solid fa-lock" ></i>
        </div>
        
        <div class="input-container">
            <input type="tel" name="phone" placeholder="telefono">
            <i class="fa-solid fa-phone" ></i>
        
            <a href="#">Terminos y Condiciones</a>
            
            <input type="submit" name="send"class="btn" value="Enviar">

            
        </div>
    </form>

    <?php
    include("send.php");
    ?>
    
</body>
</html>










https://clinicabmp.com/servicios/resonancia-magnetica/