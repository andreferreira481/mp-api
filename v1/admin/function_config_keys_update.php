<?php
include("seguranca.php");

//$login=  mysql_real_escape_string($login);
//$senha= mysql_real_escape_string($senha);

date_default_timezone_set('America/Sao_Paulo');

$Access_Token_Update = $_POST['access_token_admin'];
$Client_Id_Update = $_POST['client_id_admin'];
$Client_Secret_Update = $_POST['client_secret_admin'];
$Id_Externo_keys_Update = $_POST['id_externo_keys_admin'];
$Id_Keys_Update = $_POST['id_keys_admin'];
$Data_Update = date("d/m/Y");
$Hora_Update = date("H:i:s");
$Id_Externo_Admin = $_SESSION['id_externo_admin'];

include("conexao.php");

include("function_historico_acesso_admin_create.php");
$id_login_acesso = $_SESSION['id_login_acesso_admin'];
$id_externo_acesso_admin = $_SESSION['id_externo_acesso_admin'];
$id_usuario_acesso_admin = $_SESSION['id_usuario_acesso_admin'];
$id_externo_admin = $_SESSION['id_externo_admin'];

//mysqli_select_db($conexao,"bd_resolv");

$result = "SHOW TABLES LIKE 'keys_admin'";
$result2 = mysqli_query($conexao, $result);
$exists = mysqli_num_rows($result2) > 0 ? true : false;



if ($exists) {
    $sql = "SELECT * FROM keys_admin where Id_Externo_Admin='$Id_Externo_Admin' and Id_Keys_Admin='$Id_Keys_Update'";
    $dados_i = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_assoc($dados_i);
    $cont = mysqli_num_rows($dados_i);
    if ($cont > 0) {

        $sql_Update = "UPDATE keys_admin SET 
                                Access_Token_Keys_Admin = '$Access_Token_Update', 
                                Client_Id_Keys_Admin = '$Client_Id_Update', 
                                Client_Secret_Keys_Admin = '$Client_Secret_Update', 
                                Data_Cadastro_Keys_Admin = '$Data_Update', 
                                Hora_Cadastro_Keys_Admin = '$Hora_Update', 
                                Id_Externo_Keys_Admin = '$Id_Externo_keys_Update', 
                                Id_Externo_Admin = '$Id_Externo_Admin' 
                                WHERE Id_Externo_Admin = '$Id_Externo_Admin' and Id_Keys_Admin = '$Id_Keys_Update'";
        $salvar = mysqli_query($conexao, $sql_Update);

        $descricao_acesso = "UPDATE KEYS MERCADO PAGO";
        historico_acesso_admin($id_externo_admin, $id_login_acesso, $descricao_acesso, $id_externo_acesso_admin, $id_usuario_acesso_admin);
        header("Location:config_keys.php");
    } else {

        $sql_cadastra = "INSERT INTO keys_admin VALUES (
                                    DEFAULT, 
                                    '$Access_Token_Update',
                                    '$Client_Id_Update',
                                    '$Client_Secret_Update',
                                    '$Data_Update',
                                    '$Hora_Update',
                                    '$Id_Externo_keys_Update',
                                    '$Id_Externo_Admin'
                                    )";

        $descricao_acesso = "CADASTRO KEYS MERCADO PAGO";
        historico_acesso_admin($id_externo_admin, $id_login_acesso, $descricao_acesso, $id_externo_acesso_admin, $id_usuario_acesso_admin);


        $cadastro = mysqli_query($conexao, $sql_cadastra);

        header("Location:config_keys.php");
    }
}
