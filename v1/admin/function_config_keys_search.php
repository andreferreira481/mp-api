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


    function config_key_search(String $config_key_admin) {

        include("conexao.php");

        $result = "SHOW TABLES LIKE 'keys_admin'";
        $result2 = mysqli_query($conexao, $result);
        $exists = mysqli_num_rows($result2) > 0 ? true : false;

        $Id_Externo_Admin = $_SESSION['id_externo_admin'];
        
        
        if ($exists){ 
                        $sql = "SELECT * FROM keys_admin where Id_Externo_Admin='$Id_Externo_Admin'";
                        $dados_i = mysqli_query($conexao, $sql);
                        $dados= mysqli_fetch_assoc($dados_i);
                        $cont = mysqli_num_rows($dados_i);
                                if($cont>0){
                                   
   
                                    
                                    
                                    return $dados;    
                                             
                                  
                                  
                                }
                    else{
                        date_default_timezone_set('America/Sao_Paulo');
                        $Id_Externo_Keys_Admin = rand(1, 99).date("dmYHis").rand(1, 99);

                        $dados = array(
                            "Id_Keys_Admin" => "1",
                            "Access_Token_Keys_Admin" => "",
                            "Client_Id_Keys_Admin" => "",
                            "Client_Secret_Keys_Admin" => "",
                            "Data_Cadastro_Keys_Admin" =>  date('d/m/Y'),
                            "Hora_Cadastro_Keys_Admin" => date('H:i:s'),
                            "Id_Externo_Keys_Admin" =>$Id_Externo_Keys_Admin,
                            "Id_Externo_Admin" => $Id_Externo_Admin,
                        );
                        return $dados;  
                    }
        }else{

            
        }

    }
    
?>