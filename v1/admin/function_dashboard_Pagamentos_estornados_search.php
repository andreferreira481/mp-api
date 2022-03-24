<?php


    function dashboard_Pagamentos_estornados_search() {

        include("conexao.php");

        $result = "SHOW TABLES LIKE 'notification_admin'";
        $result2 = mysqli_query($conexao, $result);
        $exists = mysqli_num_rows($result2) > 0 ? true : false;

        $Status_Notification_Admin = "refunded";
        $Id_Externo_Admin = $_SESSION['id_externo_admin'];

        $credit_card = 0;
        $debit_card = 0;
        $ticket = 0;
        $atm = 0;
        $account_money = 0;
        $digital_currency = 0;
        $digital_wallet = 0;
        $bank_transfer = 0;
        $prepaid_card = 0;


        if ($exists){
            $busca = "SELECT * FROM notification_admin where Status_Notification_Admin='$Status_Notification_Admin' and Id_Externo_Admin='$Id_Externo_Admin'";
             $resultado = mysqli_query($conexao, $busca);
                   while ($array = mysqli_fetch_assoc($resultado)) {
                     $dados[] = $array;
                     
                     if($array['Payment_Type_Id_Notification_Admin']== "credit_card"){
                        $credit_card=$array['Transaction_Amount_Notification_Admin']+$credit_card;
                     }

                     if($array['Payment_Type_Id_Notification_Admin']== "debit_card"){
                        $debit_card=$array['Transaction_Amount_Notification_Admin']+$debit_card;
                     }

                     if($array['Payment_Type_Id_Notification_Admin']== "ticket"){
                        $ticket=$array['Transaction_Amount_Notification_Admin']+$ticket;
                     }

                     if($array['Payment_Type_Id_Notification_Admin']== "atm"){
                        $atm=$array['Transaction_Amount_Notification_Admin']+$atm;
                     }

                     if($array['Payment_Type_Id_Notification_Admin']== "account_money"){
                        $account_money=$array['Transaction_Amount_Notification_Admin']+$account_money;
                     }

                     if($array['Payment_Type_Id_Notification_Admin']== "digital_currency"){
                        $digital_currency=$array['Transaction_Amount_Notification_Admin']+$digital_currency;
                     }

                     if($array['Payment_Type_Id_Notification_Admin']== "digital_wallet"){
                        $digital_wallet=$array['Transaction_Amount_Notification_Admin']+$digital_wallet;
                     }

                     if($array['Payment_Type_Id_Notification_Admin']== "bank_transfer"){
                        $bank_transfer=$array['Transaction_Amount_Notification_Admin']+$bank_transfer;
                     }

                     if($array['Payment_Type_Id_Notification_Admin']== "prepaid_card"){
                        $prepaid_card=$array['Transaction_Amount_Notification_Admin']+$prepaid_card;
                     }

                     
                 }

                 $resposta_estornados = array(
                    "credit_card" => $credit_card,
                    "debit_card" => $debit_card,
                    "ticket" => $ticket,
                    "atm" => $atm,
                    "account_money" => $account_money,
                    "digital_currency" => $digital_currency,
                    "digital_wallet" => $digital_wallet,
                    "bank_transfer" => $bank_transfer,
                    "prepaid_card" => $prepaid_card,
                );
                   return $resposta_estornados;
                 
         }else{
            $resposta_estornados = array(
               "credit_card" => $credit_card,
               "debit_card" => $debit_card,
               "ticket" => $ticket,
               "atm" => $atm,
               "account_money" => $account_money,
               "digital_currency" => $digital_currency,
               "digital_wallet" => $digital_wallet,
               "bank_transfer" => $bank_transfer,
               "prepaid_card" => $prepaid_card,
           );
              return $resposta_estornados;
         }

    }
   
?>