<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Clave</title>
	<link rel="icon" type="700/jpg" href="img/logo.png" sizes="100x100">
</head>


<body body style="
    background-image:url(img/portada.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    height:100vh;">




<form name="login" style="border:8px solid black; padding:20px; width:50%; margin: 0 auto; margin-inline:25%; text-align:center; position: absolute;
    top:130px;">
        <h3>Introduza su Nombre de usuario</h3>
        <input type="text" name="usuario" placeholder="introducir nombre" value=""><br><br>
        <h3>Introduza la contraseña</h3>
        <input type="password" name="password" placeholder="password" value=""><br><br>
        <button type="reset">Reset</button>
        <input value="Entrar" target="_parent" onclick="Login()" type="button" class="boton" />
    </form>
    
    
    
    <script language="JavaScript">
        function Login() {
            var done = 0;
            var usuario = document.login.usuario.value;
            var password = document.login.password.value;
			
			//soporte tecnico
            if (usuario == "medico" && password == "1234") {
                window.location = "registrar.php";
            }
			
			//profesor
            if (usuario == "recepcion" && password == "1234") {
                window.location = "registro.php";
            }
			
			//estudiante
            if (usuario == "" && password == "") {
                window.location = "clase1.html";
            }
			
			
			if (usuario == "" && password == "") {
                window.location = "";
            }
			
			
			
			
        }
    </script>
    </center>
    <script language="Javascript">

<!--    Begin
        document.oncontextmenu = function () { return false }
// End -->
    </script>
</body>
</html>








