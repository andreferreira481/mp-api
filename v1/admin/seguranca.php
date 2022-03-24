<?php
session_cache_expire(25);
session_start();
//VERIFICACAO PARA VER SE O USUARIO ESTÁ LOGADO
if(($_SESSION['email_admin']== "") || ($_SESSION['senha_admin']== "")){
    header("Location:index.php");
}
?>