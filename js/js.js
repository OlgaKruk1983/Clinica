<script type="text/javascript">
function Input(){
login_ok = false;
user_name = "";
password = "";
user_name = prompt("Логин","");
user_name = user_name.toLowerCase();
password = prompt("Пароль","");
password = password.toLowerCase();
if (user_name=="login" && password=="pass"){
 login_ok = true;
 window.location = "index.php";
}
if (user_name=="login2" && password=="pass2"){
 login_ok = true;
 window.location = "forum/index.php";
}

if (login_ok==false) alert("Неверный логин или пароль!");
}
</script>