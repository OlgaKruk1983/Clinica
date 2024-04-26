<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="
    background-image:url(img/portada.jpg) !important;
    background-size: cover;
    background-repeat: no-repeat;
    height:100vh;">
    

    <form action="login.php" method="post" style="border:8px solid black; padding:20px; width:50%; margin: 0 auto; margin-inline:25%; text-align:center; position: absolute;
    top:130px;">
        <h3>Introduza su Nombre de usuario</h3>
        <input type="text" name="login" placeholder="login"><br><br>
        <h3>Introduza la contraseña</h3>
        <input type="password" name="password" placeholder="password"><br><br>
        <button type="submit" value="login">Log in</button>
    </form>

    <script src="js/js.js"></script>
</body>
</html>