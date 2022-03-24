<?php

include("conexao.php");

function erro_historico_acesso_admin() {
    $juntar = array(
                "Status" => "Erro na Resquisição",
                "Data" => date('l jS \of F Y h:i:s A'),
                "Link_Url" => $_SERVER['REQUEST_URI'],
                "Conteudo" => array(),
            );
    echo json_encode($juntar);
    } 


    function historico_acesso_admin($id_externo_admin, $id_login_acesso, $descricao_acesso, $id_externo_acesso_admin, $id_usuario_acesso_admin) {

        include("conexao.php");

        $result = "SHOW TABLES LIKE 'historico_acesso_admin'";
        $result2 = mysqli_query($conexao, $result);
        $exists = mysqli_num_rows($result2) > 0 ? true : false;

        if ($exists){ 

            date_default_timezone_set('America/Sao_Paulo');
           
            $Descrição_Acesso_Admin = $descricao_acesso;
            $Id_Login_Acesso_Admin = $id_login_acesso;
            $Id_Usuario_Acesso_Admin = $id_usuario_acesso_admin;
            $Data_Acesso_Admin = date("d/n/Y");
            $Hora_Acesso_Admin = date("H:i:s");
            $Id_Externo_Acesso_Admin = $id_externo_acesso_admin;
            $Id_Externo_Admin = $id_externo_admin;

            $sql_acesso = "INSERT INTO historico_acesso_admin VALUES (
                DEFAULT, 
                '$Descrição_Acesso_Admin',
                '$Id_Login_Acesso_Admin',
                '$Id_Usuario_Acesso_Admin',
                '$Data_Acesso_Admin',
                '$Hora_Acesso_Admin',
                '$Id_Externo_Acesso_Admin',
                '$Id_Externo_Admin'
                )";
           
            $acesso_historico = mysqli_query($conexao, $sql_acesso);
           
        }else{

            header("Location:index.php");
        }

    }


    
?>