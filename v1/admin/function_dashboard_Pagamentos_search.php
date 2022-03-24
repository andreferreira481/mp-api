<?php




    function dashboard_Pagamentos_search() {

        include("conexao.php");

        $result = "SHOW TABLES LIKE 'notification_admin'";
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


        if ($exists){
            $busca = "SELECT * FROM notification_admin where Id_Externo_Admin='$Id_Externo_Admin'";
             $resultado = mysqli_query($conexao, $busca);
                   while ($array = mysqli_fetch_assoc($resultado)) {
                     $dados[] = $array;
                     
                     if($array['Status_Notification_Admin']== "pending"){
                        $pending=$array['Transaction_Amount_Notification_Admin']+$pending;
                     }

                     if($array['Status_Notification_Admin']== "approved"){
                        $approved=$array['Transaction_Amount_Notification_Admin']+$approved;
                     }

                     if($array['Status_Notification_Admin']== "authorized"){
                        $authorized=$array['Transaction_Amount_Notification_Admin']+$authorized;
                     }

                     if($array['Status_Notification_Admin']== "in_process"){
                        $in_process=$array['Transaction_Amount_Notification_Admin']+$in_process;
                     }

                     if($array['Status_Notification_Admin']== "in_mediation"){
                        $in_mediation=$array['Transaction_Amount_Notification_Admin']+$in_mediation;
                     }

                     if($array['Status_Notification_Admin']== "rejected"){
                        $rejected=$array['Transaction_Amount_Notification_Admin']+$rejected;
                     }

                     if($array['Status_Notification_Admin']== "cancelled"){
                        $cancelled=$array['Transaction_Amount_Notification_Admin']+$cancelled;
                     }

                     if($array['Status_Notification_Admin']== "refunded"){
                        $refunded=$array['Transaction_Amount_Notification_Admin']+$refunded;
                     }

                     if($array['Status_Notification_Admin']== "charged_back"){
                        $charged_back=$array['Transaction_Amount_Notification_Admin']+$charged_back;
                     }

                     
                 }

                 $resposta_pagamentos = array(
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
                    return $resposta_pagamentos;
                 
         }else{
            $resposta_pagamentos = array(
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
               return $resposta_pagamentos;
         }

    }
?>