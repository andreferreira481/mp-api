<?php

include("conexao.php");

function erro() {
    $juntar = array(
                "Status" => "Erro na Resquisição",
                "Data" => date('l jS \of F Y h:i:s A'),
                "Link_Url" => $_SERVER['REQUEST_URI'],
                "Conteudo" => array(),
            );
    echo json_encode($juntar);
    } 


    function config_admin_editar(String $config_admin) {

        include("conexao.php");

        $result = "SHOW TABLES LIKE 'admin_api'";
        $result2 = mysqli_query($conexao, $result);
        $exists = mysqli_num_rows($result2) > 0 ? true : false;

        $Email_Admin = $_SESSION['email_admin'];
        $Senha_Admin = $_SESSION['senha_admin'];

        if ($exists){ 
                        $sql = "SELECT * FROM admin_api where Email_Admin='$Email_Admin' and Senha_Admin='$Senha_Admin'";
                        $dados_i = mysqli_query($conexao, $sql);
                        $dados= mysqli_fetch_assoc($dados_i);
                        $cont = mysqli_num_rows($dados_i);
                                if($cont>0){
                                   
   
                                    
                                    
                                    return $dados;    
                                             
                                  
                                  
                                }
                    else{
                        
                        header("Location:index.php");
                    }
        }else{

            header("Location:index.php");
        }

    }
    
?>