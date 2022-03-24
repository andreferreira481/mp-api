<?php

    function dashboard_requisicoes_api_search() {

        include("conexao.php");

        $result = "SHOW TABLES LIKE 'requisicoes_api_admin'";
        $result2 = mysqli_query($conexao, $result);
        $exists = mysqli_num_rows($result2) > 0 ? true : false;

        $Id_Externo_Admin = $_SESSION['id_externo_admin'];

        $pending = 0;
        $approved = 0;
        $authorized = 0;
        $in_process = 0;
        $in_mediation = 0;
        $rejected = 0;
        $cancelled = 0;
        $refunded = 0;
        $charged_back = 0;
        $create_link = 0;
        $total_requisicoes = 0;


        if ($exists){

            $busca = "SELECT * FROM requisicoes_api_admin where Id_Externo_Admin='$Id_Externo_Admin'";
             $resultado = mysqli_query($conexao, $busca);
                   while ($array = mysqli_fetch_assoc($resultado)) {
                     $dados[] = $array;

                     if($array['Status_Requisicoes_Api_Admin']== "create_link"){
                        $create_link=++$create_link;
                     }
                     
                     if($array['Status_Requisicoes_Api_Admin']== "pending"){
                        $pending=++$pending;
                     }

                     if($array['Status_Requisicoes_Api_Admin']== "approved"){
                        $approved=++$approved;
                     }

                     if($array['Status_Requisicoes_Api_Admin']== "authorized"){
                        $authorized=++$authorized;
                     }

                     if($array['Status_Requisicoes_Api_Admin']== "in_process"){
                        $in_process=++$in_process;
                     }

                     if($array['Status_Requisicoes_Api_Admin']== "in_mediation"){
                        $in_mediation=++$in_mediation;
                     }

                     if($array['Status_Requisicoes_Api_Admin']== "rejected"){
                        $rejected=++$rejected;
                     }

                     if($array['Status_Requisicoes_Api_Admin']== "cancelled"){
                        $cancelled=++$cancelled;
                     }

                     if($array['Status_Requisicoes_Api_Admin']== "refunded"){
                        $refunded=++$refunded;
                     }

                     if($array['Status_Requisicoes_Api_Admin']== "charged_back"){
                        $charged_back=++$charged_back;
                     }

                     $total_requisicoes=++$total_requisicoes;
                 }

                 $resposta_requisicoes_api = array(
                     "total_requisicoes" => $total_requisicoes,
                     "create_link" => $create_link,
                     "pending" => $pending,
                     "approved" => $approved,
                     "authorized" => $authorized,
                     "in_process" => $in_process,
                     "in_mediation" => $in_mediation,
                     "rejected" => $rejected,
                     "cancelled" => $cancelled,
                     "refunded" => $refunded,
                     "charged_back" => $charged_back,
                );
                    return $resposta_requisicoes_api;
                 
         }else{
            $resposta_requisicoes_api = array(
               "total_requisicoes" => $total_requisicoes,
               "create_link" => $create_link,
               "pending" => $pending,
               "approved" => $approved,
               "authorized" => $authorized,
               "in_process" => $in_process,
               "in_mediation" => $in_mediation,
               "rejected" => $rejected,
               "cancelled" => $cancelled,
               "refunded" => $refunded,
               "charged_back" => $charged_back,
          );
              return $resposta_requisicoes_api;
         }

    }
?>