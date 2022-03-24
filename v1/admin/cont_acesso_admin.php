<?php
header("Content-type: text/html; charset=utf-8");
include("seguranca.php");
include("conexao.php");

function erro_cont_acesso_admin() {
    $juntar = array(
                "Status" => "Erro na Resquisição",
                "Data" => date('l jS \of F Y h:i:s A'),
                "Link_Url" => $_SERVER['REQUEST_URI'],
                "Conteudo" => array(),
            );
    echo json_encode($juntar);
    } 


    function cont_acesso_admin($numero_cont_acesso_admin, $id_cont_acesso_admin) {

        include("conexao.php");

        $result = "SHOW TABLES LIKE 'admin_api'";
        $result2 = mysqli_query($conexao, $result);
        $exists = mysqli_num_rows($result2) > 0 ? true : false;

        $id_admin = $id_cont_acesso_admin;

        if ($exists){ 

            $numero = $numero_cont_acesso_admin + 1;

           
            date_default_timezone_set('America/Sao_Paulo');
            $data=date("d/n/Y");
            $hora= date("H:i:s");
        
            $total_acesso_loja = $numero;

            $sql_atulizar_acesso = "UPDATE admin_api SET 
            U_A_D_Admin = '$data', 
            U_A_H_Admin = '$hora', 
            N_A_Admin = '$total_acesso_loja' 
            WHERE Id_Admin = '$id_admin'";
            $salvar = mysqli_query($conexao,$sql_atulizar_acesso);
           
        }else{

            header("Location:index.php");
        }

    }


    
?>