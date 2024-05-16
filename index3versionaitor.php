<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="register.php" method="post" style="border:8px solid black; padding:20px; width:50%; margin: 0 auto; margin-inline:25%; text-align:center; position: absolute;
    top:130px;">
        <h3>Introduza su Nombre de usuario</h3>
        <input type="text" name="nombre" placeholder="login" required><br><br>
        <h3>Introduza su email</h3>
        <input type="email" name="email" placeholder="login" required><br><br>
        <h3>Introduza la contraseña</h3>
        <input type="password" name="contraseña" placeholder="password" required><br><br>
        <h3>Repita la contraseña</h3>
        <input type="password" name="contraseña2" placeholder="password" required><br><br>
        <button type="submit" value="login">Registrarse</button>
    </form>

    <button>
    <a href="index2.php">iniciar sesion</a></button>
</body>
</html>