<?php

include("conexao.php");

function erro_historico_api_admin_search() {
    $juntar = array(
                "Status" => "Erro na Resquisição",
                "Data" => date('l jS \of F Y h:i:s A'),
                "Link_Url" => $_SERVER['REQUEST_URI'],
                "Conteudo" => array(),
            );
    echo json_encode($juntar);
    } 


    function historico_api_admin_search() {

        include("conexao.php");

        $result = "SHOW TABLES LIKE 'notification_admin'";
        $result2 = mysqli_query($conexao, $result);
        $exists = mysqli_num_rows($result2) > 0 ? true : false;

        if ($exists){ 

            $sql = "SELECT *FROM notification_admin ORDER BY Id_Notification_Admin DESC";
            $resultado = mysqli_query($conexao, $sql);
            while($linha = mysqli_fetch_array($resultado))
                {
                    echo "<tr>";
                        echo "<td>".$linha['Id_Notification_Admin']."</td>";
                        echo "<td>".$linha['Id_Preference_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Description_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Payment_Method_Id_Notification_Admin']."</td>";
                        echo "<td>".$linha['Payment_Type_Id_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Status_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Status_Detail_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Transaction_Amount_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Transaction_Amount_Refunded_Notification_Admin']."</td>";
                        echo "<td>".$linha['Installments_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['External_Reference_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Date_Created_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Date_Last_Updated_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Date_Of_Expiration_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Date_Approved_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Currency_Id_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Binary_Mode_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Collector_Id_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Operation_Type_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Payer_Email_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Payer_First_Name_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Payer_Last_Name_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Payer_Identification_Number_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Payer_Identification_Type_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Payer_Phone_Area_Code_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Payer_Phone_Number_Notification_Admin']."</td>"; 
                        echo "<td>".$linha['Id_Externo_Admin']."</td>"; 
                        echo "<td>".$linha['Id_Externo_Usuario']."</td>"; 
                        echo "<td>".$linha['Notification_Url_Notification_Admin']."</td>"; 
                    echo "</tr>";
                }
        }else{

           
        }

    }


    
?>