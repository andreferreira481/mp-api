<?php
include("seguranca.php");
//$login=  mysql_real_escape_string($login);
//$senha= mysql_real_escape_string($senha);

date_default_timezone_set('America/Sao_Paulo');

$Nome_Admin_Update = $_POST['nome_admin'];
$Email_Admin_Update = $_POST['email_admin'];
$Senha_Admin_Update = $_POST['senha_admin'];
$Celular_Admin_Update = $_POST['celular_admin'];
$Id_Admin_Update = $_POST['id_admin'];
$Data_Update = date("d/m/Y");
$Hora_Update = date("H:i:s");
$Id_Externo_Admin = $_POST['id_externo_admin'];
$Logo_Antigo_Admin = $_POST['logo_antigo_admin'];

include("conexao.php");

include("function_historico_acesso_admin_create.php");
$id_login_acesso = $_SESSION['id_login_acesso_admin'];
$id_externo_acesso_admin = $_SESSION['id_externo_acesso_admin'];
$id_usuario_acesso_admin = $_SESSION['id_usuario_acesso_admin'];
$id_externo_admin = $_SESSION['id_externo_admin'];

//mysqli_select_db($conexao,"bd_resolv");

$result = "SHOW TABLES LIKE 'admin_api'";
$result2 = mysqli_query($conexao, $result);
$exists = mysqli_num_rows($result2) > 0 ? true : false;

if ($exists) {
  $sql = "SELECT * FROM admin_api where Id_Admin='$Id_Admin_Update' and Id_Externo_Admin='$Id_Externo_Admin'";
  $dados_i = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($dados_i);
  $cont = mysqli_num_rows($dados_i);
  if ($cont > 0) {


    $extensao = strtolower(substr($_FILES['logo_admin']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "upload/img/";

    move_uploaded_file($_FILES['logo_admin']['tmp_name'], $diretorio . $novo_nome);
    $deletar_foto = "upload/img/" . $Logo_Antigo_Admin;
    $arquivo = "teste.txt";
    if (!unlink($deletar_foto)) {
    } else {
    }


    $sql_Update = "UPDATE admin_api SET 
                                Nome_Admin = '$Nome_Admin_Update', 
                                Email_Admin = '$Email_Admin_Update', 
                                Senha_Admin = '$Senha_Admin_Update', 
                                Celular_Admin = '$Celular_Admin_Update', 
                                Logo_Admin = '$novo_nome', 
                                E_D_Admin = '$Data_Update', 
                                E_H_Admin = '$Hora_Update' 
                                WHERE Id_Admin = '$Id_Admin_Update' and Id_Externo_Admin = '$Id_Externo_Admin'";
    $salvar = mysqli_query($conexao, $sql_Update);

    $descricao_acesso = "UPDATE CONFIGURAÇÃO ADMIN";
    historico_acesso_admin($id_externo_admin, $id_login_acesso, $descricao_acesso, $id_externo_acesso_admin, $id_usuario_acesso_admin);


    header("Location:config_admin.php");
  } else {

    header("Location:config_admin.php");
  }
}
