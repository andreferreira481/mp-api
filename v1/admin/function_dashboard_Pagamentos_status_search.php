<?php

    function dashboard_Pagamentos_status_search() {

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
                        $pending=++$pending;
                     }

                     if($array['Status_Notification_Admin']== "approved"){
                        $approved=++$approved;
                     }

                     if($array['Status_Notification_Admin']== "authorized"){
                        $authorized=++$authorized;
                     }

                     if($array['Status_Notification_Admin']== "in_process"){
                        $in_process=++$in_process;
                     }

                     if($array['Status_Notification_Admin']== "in_mediation"){
                        $in_mediation=++$in_mediation;
                     }

                     if($array['Status_Notification_Admin']== "rejected"){
                        $rejected=++$rejected;
                     }

                     if($array['Status_Notification_Admin']== "cancelled"){
                        $cancelled=++$cancelled;
                     }

                     if($array['Status_Notification_Admin']== "refunded"){
                        $refunded=++$refunded;
                     }

                     if($array['Status_Notification_Admin']== "charged_back"){
                        $charged_back=++$charged_back;
                     }

                     
                 }

                 $resposta_Status = array(
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
                    return $resposta_Status;
                 
         }else{
            $resposta_Status = array(
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
               return $resposta_Status;
         }

    }
?>