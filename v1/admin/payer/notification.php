<?php
include("../conexao.php");

if (isset($_GET['data_id'])) {
    $id = $_GET['data_id'];
} else {
    $id = "";
}

if (isset($_GET['Access_Token_Keys_Admin'])) {
    $token = $_GET['Access_Token_Keys_Admin'];
} else {
    $token = "";
}

if (isset($_GET['Id_Externo_Admin'])) {
    $Id_Externo_Admin = $_GET['Id_Externo_Admin'];
} else {
    $Id_Externo_Admin = "";
}

if (isset($_GET['Id_Externo_Usuario'])) {
    $Id_Externo_Usuario = $_GET['Id_Externo_Usuario'];
} else {
    $Id_Externo_Usuario = "";
}

$result = "SHOW TABLES LIKE 'keys_admin'";
$result2 = mysqli_query($conexao, $result);
$exists = mysqli_num_rows($result2) > 0 ? true : false;



if ($exists) {
    $sql = "SELECT * FROM keys_admin where Id_Externo_Admin='$Id_Externo_Admin'";
    $dados_i = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_assoc($dados_i);
    $cont = mysqli_num_rows($dados_i);
    if ($cont > 0) {
    } else {


        $dados = array(
            "Access_Token_Keys_Admin" => "",
            "Id_Externo_Admin" => $Id_Externo_Admin,
        );
    }
}
if ($Id_Externo_Admin == "") {
    $Id_Externo_Admin = $dados['Id_Externo_Admin'];
}

if ($token == "") {
    $token = $dados['Access_Token_Keys_Admin'];
}

if ($token != "") {
    if ($id != "") {

        $url = "https://api.mercadopago.com/v1/payments/" . $id;

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Authorization: Bearer $token",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = json_decode(curl_exec($curl), true);
        curl_close($curl);
    }


    echo '<pre>';
    // print_r($resp);

    echo '<br><br>Data_Id: '.$id;
    
    echo '<br><br>Access_Token: '.$token;
    
    echo '<br><br>Id_Externo_Admin: '.$Id_Externo_Admin;
    
    echo '<br><br>Id_Externo_Usuario: '.$Id_Externo_Usuario;

    echo '<br><br>Id_Preference: ';
    if (isset($resp['id'])) {
        $Id_Preference_Notification_Admin = $resp['id'];
        echo $Id_Preference_Notification_Admin;
    } else {
        $Id_Preference_Notification_Admin = "";
    }

    echo '<br><br>Payment_Method_Id: ';
    if (isset($resp['payment_method_id'])) {
        $Payment_Method_Id_Notification_Admin = $resp['payment_method_id'];
        echo $Payment_Method_Id_Notification_Admin;
    } else {
        $Payment_Method_Id_Notification_Admin = "";
    }

    echo '<br><br>Payment_Type_Id: ';
    if (isset($resp['payment_type_id'])) {
        $Payment_Type_Id_Notification_Admin = $resp['payment_type_id'];
        echo $Payment_Type_Id_Notification_Admin;
    } else {
        $Payment_Type_Id_Notification_Admin = "";
    }

    echo '<br><br>Status: ';
    if (isset($resp['status'])) {
        $Status_Notification_Admin = $resp['status'];
        echo $Status_Notification_Admin;
    } else {
        $Status_Notification_Admin = "";
    }

    echo '<br><br>Status_Detail: ';
    if (isset($resp['status_detail'])) {
        $Status_Detail_Notification_Admin = $resp['status_detail'];
        echo $Status_Detail_Notification_Admin;
    } else {
        $Status_Detail_Notification_Admin = "";
    }

    echo '<br><br>Transaction_Amount: ';
    if (isset($resp['transaction_amount'])) {
        $Transaction_Amount_Notification_Admin = $resp['transaction_amount'];
        echo $Transaction_Amount_Notification_Admin;
    } else {
        $Transaction_Amount_Notification_Admin = "";
    }

    echo '<br><br>Transaction_Amount_Refunded: ';
    if (isset($resp['transaction_amount_refunded'])) {
        $Transaction_Amount_Refunded_Notification_Admin = $resp['transaction_amount_refunded'];
        echo $Transaction_Amount_Refunded_Notification_Admin;
    } else {
        $Transaction_Amount_Refunded_Notification_Admin = "";
    }

    echo '<br><br>Installments: ';
    if (isset($resp['installments'])) {
        $Installments_Notification_Admin = $resp['installments'];
        echo $Installments_Notification_Admin;
    } else {
        $Installments_Notification_Admin = "";
    }

    echo '<br><br>External_Reference: ';
    if (isset($resp['external_reference'])) {
        $External_Reference_Notification_Admin = $resp['external_reference'];
        echo $External_Reference_Notification_Admin;
    } else {
        $External_Reference_Notification_Admin = "";
    }

    echo '<br><br>Description: ';
    if (isset($resp['description'])) {
        $Description_Notification_Admin = $resp['description'];
        echo $Description_Notification_Admin;
    } else {
        $Description_Notification_Admin = "";
    }

    echo '<br><br>Date_Created: ';
    if (isset($resp['date_created'])) {
        $Date_Created_Notification_Admin = $resp['date_created'];
        echo $Date_Created_Notification_Admin;
    } else {
        $Date_Created_Notification_Admin = "";
    }

    echo '<br><br>Date_Last_Updated: ';
    if (isset($resp['date_last_updated'])) {
        $Date_Last_Updated_Notification_Admin = $resp['date_last_updated'];
        echo $Date_Last_Updated_Notification_Admin;
    } else {
        $Date_Last_Updated_Notification_Admin = "";
    }

    echo '<br><br>Date_Of_Expiration: ';
    if (isset($resp['date_of_expiration'])) {
        $Date_Of_Expiration_Notification_Admin = $resp['date_of_expiration'];
        echo $Date_Of_Expiration_Notification_Admin;
    } else {
        $Date_Of_Expiration_Notification_Admin = "";
    }

    echo '<br><br>Date_Approved: ';
    if (isset($resp['date_approved'])) {
        $Date_Approved_Notification_Admin = $resp['date_approved'];
        echo $Date_Approved_Notification_Admin;
    } else {
        $Date_Approved_Notification_Admin = "";
    }

    echo '<br><br>Currency_Id: ';
    if (isset($resp['currency_id'])) {
        $Currency_Id_Notification_Admin = $resp['currency_id'];
        echo $Currency_Id_Notification_Admin;
    } else {
        $Currency_Id_Notification_Admin = "";
    }

    echo '<br><br>Binary_Mode: ';
    if (isset($resp['binary_mode'])) {
        $Binary_Mode_Notification_Admin = $resp['binary_mode']? 'true' : 'false';;
        echo $Binary_Mode_Notification_Admin;
    } else {
        $Binary_Mode_Notification_Admin = "";
    }

    echo '<br><br>Collector_Id: ';
    if (isset($resp['collector_id'])) {
        $Collector_Id_Notification_Admin = $resp['collector_id'];
        echo $Collector_Id_Notification_Admin;
    } else {
        echo $Collector_Id_Notification_Admin = "";
    }

    echo '<br><br>Operation_Type: ';
    if (isset($resp['operation_type'])) {
        $Operation_Type_Notification_Admin = $resp['operation_type'];
        echo $Operation_Type_Notification_Admin;
    } else {
        $Operation_Type_Notification_Admin = "";
    }

    echo '<br><br>Payer_Email: ';
    if (isset($resp['payer']['email'])) {
        $Payer_Email_Notification_Admin = $resp['payer']['email'];
        echo $Payer_Email_Notification_Admin;
    } else {
        if (isset($resp['collector']['email'])) {
            $Payer_Email_Notification_Admin = $resp['collector']['email'];
            echo $Payer_Email_Notification_Admin;
        } else {
            echo $Payer_Email_Notification_Admin = "";
        }
    }

    echo '<br><br>Payer_First_Name: ';
    if (isset($resp['payer']['first_name'])) {
        $Payer_First_Name_Notification_Admin = $resp['payer']['first_name'];
        echo $Payer_First_Name_Notification_Admin;
    } else {
        if (isset($resp['collector']['first_name'])) {
            $Payer_First_Name_Notification_Admin = $resp['collector']['first_name'];
            echo $Payer_First_Name_Notification_Admin;
        } else {
            if (isset($resp['card']['cardholder']['name'])) {
                $Payer_First_Name_Notification_Admin = $resp['card']['cardholder']['name'];
                echo $Payer_First_Name_Notification_Admin;
            } else {
                echo $Payer_First_Name_Notification_Admin = "";
            }
        }
    }

    echo '<br><br>Payer_Last_Name: ';
    if (isset($resp['payer']['last_name'])) {
        $Payer_Last_Name_Notification_Admin = $resp['payer']['last_name'];
        echo $Payer_Last_Name_Notification_Admin;
    } else {
        if (isset($resp['collector']['last_name'])) {
            $Payer_Last_Name_Notification_Admin = $resp['collector']['last_name'];
            echo $Payer_Last_Name_Notification_Admin;
        } else {
            echo $Payer_Last_Name_Notification_Admin = "";
        }
    }

    echo '<br><br>Payer_Identification_Number: ';
    if (isset($resp['payer']['identification']['number'])) {
        $Payer_Identification_Number_Notification_Admin = $resp['payer']['identification']['number'];
        echo $Payer_Identification_Number_Notification_Admin;
    } else {
        if (isset($resp['collector']['identification']['number'])) {
            $Payer_Identification_Number_Notification_Admin = $resp['collector']['identification']['number'];
            echo $Payer_Identification_Number_Notification_Admin;
        } else {
            if (isset($resp['card']['cardholder']['identification']['number'])) {
                $Payer_Identification_Number_Notification_Admin = $resp['card']['cardholder']['identification']['number'];
                echo $Payer_Identification_Number_Notification_Admin;
            } else {
                echo $Payer_Identification_Number_Notification_Admin = "";
            }
        }
    }

    echo '<br><br>Payer_Identification_Type: ';
    if (isset($resp['payer']['identification']['type'])) {
        $Payer_Identification_Type_Notification_Admin = $resp['payer']['identification']['type'];
        echo $Payer_Identification_Type_Notification_Admin;
    } else {
        if (isset($resp['collector']['identification']['type'])) {
            $Payer_Identification_Type_Notification_Admin = $resp['collector']['identification']['type'];
            echo $Payer_Identification_Type_Notification_Admin;
        } else {
            if (isset($resp['card']['cardholder']['identification']['type'])) {
                $Payer_Identification_Type_Notification_Admin = $resp['card']['cardholder']['identification']['type'];
                echo $Payer_Identification_Type_Notification_Admin;
            } else {
                echo $Payer_Identification_Type_Notification_Admin = "";
            }
        }
    }

    echo '<br><br>Payer_Phone_Area_Code: ';
    if (isset($resp['payer']['phone']['area_code'])) {
        $Payer_Phone_Area_Code_Notification_Admin = $resp['payer']['phone']['area_code'];
        echo $Payer_Phone_Area_Code_Notification_Admin;
    } else {
        if (isset($resp['collector']['phone']['area_code'])) {
            $Payer_Phone_Area_Code_Notification_Admin = $resp['collector']['phone']['area_code'];
            echo $Payer_Phone_Area_Code_Notification_Admin;
        } else {
            echo $Payer_Phone_Area_Code_Notification_Admin = "";
        }
    }

    echo '<br><br>Payer_Phone_Number: ';
    if (isset($resp['payer']['phone']['number'])) {
        $Payer_Phone_Number_Notification_Admin = $resp['payer']['phone']['number'];
        echo $Payer_Phone_Number_Notification_Admin;
    } else {
        if (isset($resp['collector']['phone']['number'])) {
            $Payer_Phone_Number_Notification_Admin = $resp['collector']['phone']['number'];
            echo $Payer_Phone_Number_Notification_Admin;
        } else {
            echo $Payer_Phone_Number_Notification_Admin = "";
        }
    }

    echo '<br><br>Payer_Date_Created: ';
    if (isset($resp['payer']['date_created'])) {
        $Payer_Date_Created_Notification_Admin = $resp['payer']['date_created'];
        echo $Payer_Date_Created_Notification_Admin;
    } else {
        echo $Payer_Date_Created_Notification_Admin = "";
    }

    echo '<br><br>Payer_Address_Street_Name: ';
    if (isset($resp['payer']['address']['street_name'])) {
        $Payer_Address_Street_Name_Notification_Admin = $resp['payer']['address']['street_name'];
        echo $Payer_Address_Street_Name_Notification_Admin;
    } else {
        echo $Payer_Address_Street_Name_Notification_Admin = "";
    }

    echo '<br><br>Payer_Address_Street_Number: ';
    if (isset($resp['payer']['address']['street_number'])) {
        $Payer_Address_Street_Number_Notification_Admin = $resp['payer']['address']['street_number'];
        echo $Payer_Address_Street_Number_Notification_Admin;
    } else {
        echo $Payer_Address_Street_Number_Notification_Admin = "";
    }

    echo '<br><br>Payer_Address_Zip_Code: ';
    if (isset($resp['payer']['address']['zip_code'])) {
        $Payer_Address_Zip_Code_Notification_Admin = $resp['payer']['address']['zip_code'];
        echo $Payer_Address_Zip_Code_Notification_Admin;
    } else {
        echo $Payer_Address_Zip_Code_Notification_Admin = "";
    }

    echo '<br><br>notification_url: ';
    if (isset($resp['notification_url'])) {
        $Notification_Url_Notification_Admin = $resp['notification_url'];
        echo $Notification_Url_Notification_Admin;
    } else {
        echo $Notification_Url_Notification_Admin = "";
    }

    echo '<br><br>init_point: ';
    if (isset($resp['init_point'])) {
        $Init_Point_Notification_Admin = $resp['init_point'];
        echo $Init_Point_Notification_Admin;
    } else {
        if (isset($resp['transaction_details']['external_resource_url'])) {
            $Init_Point_Notification_Admin = $resp['transaction_details']['external_resource_url'];
            echo $Init_Point_Notification_Admin;
        } else {
            echo $Init_Point_Notification_Admin = "";
        }
    }



    echo '<br><br>Shipments_Dimensions: ';
    if (isset($resp['shipments']['dimensions'])) {
        $Shipments_Dimensions_Notification_Admin = $resp['shipments']['dimensions'];
        echo $Shipments_Dimensions_Notification_Admin;
    } else {
        echo $Shipments_Dimensions_Notification_Admin = "";
    }

    echo '<br><br>Shipments_Cost: ';
    if (isset($resp['shipments']['cost'])) {
        $Shipments_Cost_Notification_Admin = $resp['shipments']['cost'];
        echo $Shipments_Cost_Notification_Admin;
    } else {
        echo $Shipments_Cost_Notification_Admin = "";
    }

    echo '<br><br>Shipments_Receiver_Address_Zip_Code: ';
    if (isset($resp['shipments']['receiver_address']['zip_code'])) {
        $Shipments_Receiver_Address_Zip_Code_Notification_Admin = $resp['shipments']['receiver_address']['zip_code'];
        echo $Shipments_Receiver_Address_Zip_Code_Notification_Admin;
    } else {
        echo $Shipments_Receiver_Address_Zip_Code_Notification_Admin = "";
    }

    echo '<br><br>Shipments_Receiver_Address_Street_Name: ';
    if (isset($resp['shipments']['receiver_address']['street_name'])) {
        $Shipments_Receiver_Address_Street_Name_Notification_Admin = $resp['shipments']['receiver_address']['street_name'];
        echo $Shipments_Receiver_Address_Street_Name_Notification_Admin;
    } else {
        echo $Shipments_Receiver_Address_Street_Name_Notification_Admin = "";
    }

    echo '<br><br>Shipments_Receiver_Address_City_Name: ';
    if (isset($resp['shipments']['receiver_address']['city_name'])) {
        $Shipments_Receiver_Address_City_Name_Notification_Admin = $resp['shipments']['receiver_address']['city_name'];
        echo $Shipments_Receiver_Address_City_Name_Notification_Admin;
    } else {
        echo $Shipments_Receiver_Address_City_Name_Notification_Admin = "";
    }

    echo '<br><br>Shipments_Receiver_Address_State_Name: ';
    if (isset($resp['shipments']['receiver_address']['state_name'])) {
        $Shipments_Receiver_Address_State_Name_Notification_Admin = $resp['shipments']['receiver_address']['state_name'];
        echo $Shipments_Receiver_Address_State_Name_Notification_Admin;
    } else {
        echo $Shipments_Receiver_Address_State_Name_Notification_Admin = "";
    }

    echo '<br><br>Shipments_Receiver_Address_Street_Number: ';
    if (isset($resp['shipments']['receiver_address']['street_number'])) {
        $Shipments_Receiver_Address_Street_Number_Notification_Admin = $resp['shipments']['receiver_address']['street_number'];
        echo $Shipments_Receiver_Address_Street_Number_Notification_Admin;
    } else {
        echo $Shipments_Receiver_Address_Street_Number_Notification_Admin = "";
    }

    echo '<br><br>Shipments_Receiver_Address_Floor: ';
    if (isset($resp['shipments']['receiver_address']['floor'])) {
        $Shipments_Receiver_Address_Floor_Notification_Admin = $resp['shipments']['receiver_address']['floor'];
        echo $Shipments_Receiver_Address_Floor_Notification_Admin;
    } else {
        echo $Shipments_Receiver_Address_Floor_Notification_Admin = "";
    }

    echo '<br><br>Shipments_Receiver_Address_Apartment: ';
    if (isset($resp['shipments']['receiver_address']['apartment'])) {
        $Shipments_Receiver_Address_Apartment_Notification_Admin = $resp['shipments']['receiver_address']['apartment'];
        echo $Shipments_Receiver_Address_Apartment_Notification_Admin;
    } else {
        echo $Shipments_Receiver_Address_Apartment_Notification_Admin = "";
    }

    echo '<br><br>Qr_Code: ';
    if (isset($resp['point_of_interaction']['transaction_data']['qr_code'])) {
        $Qr_Code_Notification_Admin = $resp['point_of_interaction']['transaction_data']['qr_code'];
        echo $Qr_Code_Notification_Admin;
    } else {
        echo $Qr_Code_Notification_Admin = "";
    }

    echo '<br><br>Qr_Code_Base64: ';
    if (isset($resp['point_of_interaction']['transaction_data']['qr_code_base64'])) {
        $Qr_Code_Base64_Notification_Admin = $resp['point_of_interaction']['transaction_data']['qr_code_base64'];
        echo $Qr_Code_Base64_Notification_Admin;
    } else {
        echo $Qr_Code_Base64_Notification_Admin = "";
    }


    $create4 = "CREATE TABLE IF NOT EXISTS notification_admin (
            Id_Notification_Admin int NOT NULL auto_increment, 
            Id_Preference_Notification_Admin VARCHAR(255),
            Payment_Method_Id_Notification_Admin VARCHAR(255),
            Payment_Type_Id_Notification_Admin VARCHAR(255),
            Status_Notification_Admin VARCHAR(255),
            Status_Detail_Notification_Admin VARCHAR(255),
            Transaction_Amount_Notification_Admin VARCHAR(255),
            Transaction_Amount_Refunded_Notification_Admin VARCHAR(255),
            Installments_Notification_Admin VARCHAR(255),
            External_Reference_Notification_Admin VARCHAR(255),
            Description_Notification_Admin VARCHAR(255),
            Date_Created_Notification_Admin VARCHAR(255),
            Date_Last_Updated_Notification_Admin VARCHAR(255),
            Date_Of_Expiration_Notification_Admin VARCHAR(255),
            Date_Approved_Notification_Admin VARCHAR(255),
            Currency_Id_Notification_Admin VARCHAR(255),
            Binary_Mode_Notification_Admin VARCHAR(255),
            Collector_Id_Notification_Admin VARCHAR(255),
            Operation_Type_Notification_Admin VARCHAR(255),
            Payer_Email_Notification_Admin VARCHAR(255),
            Payer_First_Name_Notification_Admin VARCHAR(255),
            Payer_Last_Name_Notification_Admin VARCHAR(255),
            Payer_Date_Created_Notification_Admin VARCHAR(255),
            Payer_Identification_Number_Notification_Admin VARCHAR(255),
            Payer_Identification_Type_Notification_Admin VARCHAR(255),
            Payer_Phone_Area_Code_Notification_Admin VARCHAR(255),
            Payer_Phone_Number_Notification_Admin VARCHAR(255),
            Payer_Address_Street_Name_Notification_Admin VARCHAR(255),
            Payer_Address_Street_Number_Notification_Admin VARCHAR(255),
            Payer_Address_Zip_Code_Notification_Admin VARCHAR(255),
            Shipments_Dimensions_Notification_Admin VARCHAR(255),
            Shipments_Cost_Notification_Admin VARCHAR(255),
            Shipments_Receiver_Address_Zip_Code_Notification_Admin VARCHAR(255),
            Shipments_Receiver_Address_Street_Name_Notification_Admin VARCHAR(255),
            Shipments_Receiver_Address_City_Name_Notification_Admin VARCHAR(255),
            Shipments_Receiver_Address_State_Name_Notification_Admin VARCHAR(255),
            Shipments_Receiver_Address_Street_Number_Notification_Admin VARCHAR(255),
            Shipments_Receiver_Address_Floor_Notification_Admin VARCHAR(255),
            Shipments_Receiver_Address_Apartment_Notification_Admin VARCHAR(255),
            Notification_Url_Notification_Admin VARCHAR(255),
            Init_Point_Notification_Admin VARCHAR(255),
            Qr_Code_Notification_Admin VARCHAR(255),
            Qr_Code_Base64_Notification_Admin VARCHAR(3000),
            Id_Externo_Admin VARCHAR(255),
            Id_Externo_Usuario VARCHAR(255),
            PRIMARY KEY (Id_Notification_Admin))";
    $RESULT2 = mysqli_query($conexao, $create4);

    if ($Id_Preference_Notification_Admin != "") {

        $sql = "SELECT * FROM notification_admin where Id_Preference_Notification_Admin='$Id_Preference_Notification_Admin'";
        $dados_i = mysqli_query($conexao, $sql);
        $dados = mysqli_fetch_assoc($dados_i);
        $cont = mysqli_num_rows($dados_i);
        if ($cont > 0) {

            $sql_Update = "UPDATE notification_admin SET 
                                     Id_Preference_Notification_Admin = '$Id_Preference_Notification_Admin',
                                     Payment_Method_Id_Notification_Admin = '$Payment_Method_Id_Notification_Admin',
                                     Payment_Type_Id_Notification_Admin = '$Payment_Type_Id_Notification_Admin',
                                     Status_Notification_Admin = '$Status_Notification_Admin',
                                     Status_Detail_Notification_Admin = '$Status_Detail_Notification_Admin',
                                     Transaction_Amount_Notification_Admin = '$Transaction_Amount_Notification_Admin',
                                     Transaction_Amount_Refunded_Notification_Admin = '$Transaction_Amount_Refunded_Notification_Admin',
                                     Installments_Notification_Admin = '$Installments_Notification_Admin',
                                     External_Reference_Notification_Admin = '$External_Reference_Notification_Admin',
                                     Description_Notification_Admin = '$Description_Notification_Admin',
                                     Date_Created_Notification_Admin = '$Date_Created_Notification_Admin',
                                     Date_Last_Updated_Notification_Admin = '$Date_Last_Updated_Notification_Admin',
                                     Date_Of_Expiration_Notification_Admin = '$Date_Of_Expiration_Notification_Admin',
                                     Date_Approved_Notification_Admin = '$Date_Approved_Notification_Admin',
                                     Currency_Id_Notification_Admin = '$Currency_Id_Notification_Admin',
                                     Binary_Mode_Notification_Admin = '$Binary_Mode_Notification_Admin',
                                     Collector_Id_Notification_Admin = '$Collector_Id_Notification_Admin',
                                     Operation_Type_Notification_Admin = '$Operation_Type_Notification_Admin',
                                     Payer_Email_Notification_Admin = '$Payer_Email_Notification_Admin',
                                     Payer_First_Name_Notification_Admin = '$Payer_First_Name_Notification_Admin',
                                     Payer_Last_Name_Notification_Admin = '$Payer_Last_Name_Notification_Admin',
                                     Payer_Date_Created_Notification_Admin = '$Payer_Date_Created_Notification_Admin',
                                     Payer_Identification_Number_Notification_Admin = '$Payer_Identification_Number_Notification_Admin',
                                     Payer_Identification_Type_Notification_Admin = '$Payer_Identification_Type_Notification_Admin',
                                     Payer_Phone_Area_Code_Notification_Admin = '$Payer_Phone_Area_Code_Notification_Admin',
                                     Payer_Phone_Number_Notification_Admin = '$Payer_Phone_Number_Notification_Admin',
                                     Payer_Address_Street_Name_Notification_Admin = '$Payer_Address_Street_Name_Notification_Admin',
                                     Payer_Address_Street_Number_Notification_Admin = '$Payer_Address_Street_Number_Notification_Admin',
                                     Payer_Address_Zip_Code_Notification_Admin = '$Payer_Address_Zip_Code_Notification_Admin',
                                     Shipments_Dimensions_Notification_Admin = '$Shipments_Dimensions_Notification_Admin',
                                     Shipments_Cost_Notification_Admin = '$Shipments_Cost_Notification_Admin',
                                     Shipments_Receiver_Address_Zip_Code_Notification_Admin = '$Shipments_Receiver_Address_Zip_Code_Notification_Admin',
                                     Shipments_Receiver_Address_Street_Name_Notification_Admin = '$Shipments_Receiver_Address_Street_Name_Notification_Admin',
                                     Shipments_Receiver_Address_City_Name_Notification_Admin = '$Shipments_Receiver_Address_City_Name_Notification_Admin',
                                     Shipments_Receiver_Address_State_Name_Notification_Admin = '$Shipments_Receiver_Address_State_Name_Notification_Admin',
                                     Shipments_Receiver_Address_Street_Number_Notification_Admin = '$Shipments_Receiver_Address_Street_Number_Notification_Admin',
                                     Shipments_Receiver_Address_Floor_Notification_Admin = '$Shipments_Receiver_Address_Floor_Notification_Admin',
                                     Shipments_Receiver_Address_Apartment_Notification_Admin = '$Shipments_Receiver_Address_Apartment_Notification_Admin',
                                     Notification_Url_Notification_Admin = '$Notification_Url_Notification_Admin',
                                     Init_Point_Notification_Admin = '$Init_Point_Notification_Admin',
                                     Qr_Code_Notification_Admin = '$Qr_Code_Notification_Admin',
                                     Qr_Code_Base64_Notification_Admin = '$Qr_Code_Base64_Notification_Admin',
                                     Id_Externo_Admin = '$Id_Externo_Admin',
                                     Id_Externo_Usuario = '$Id_Externo_Usuario' 
                                WHERE Id_Preference_Notification_Admin = '$Id_Preference_Notification_Admin'";
            $salvar = mysqli_query($conexao, $sql_Update);
        } else {

            $sql_cadastra = "INSERT INTO notification_admin VALUES (
                                    DEFAULT, 
                                    '$Id_Preference_Notification_Admin',
                                    '$Payment_Method_Id_Notification_Admin',
                                    '$Payment_Type_Id_Notification_Admin',
                                    '$Status_Notification_Admin',
                                    '$Status_Detail_Notification_Admin',
                                    '$Transaction_Amount_Notification_Admin',
                                    '$Transaction_Amount_Refunded_Notification_Admin',
                                    '$Installments_Notification_Admin',
                                    '$External_Reference_Notification_Admin',
                                    '$Description_Notification_Admin',
                                    '$Date_Created_Notification_Admin',
                                    '$Date_Last_Updated_Notification_Admin',
                                    '$Date_Of_Expiration_Notification_Admin',
                                    '$Date_Approved_Notification_Admin',
                                    '$Currency_Id_Notification_Admin',
                                    '$Binary_Mode_Notification_Admin',
                                    '$Collector_Id_Notification_Admin',
                                    '$Operation_Type_Notification_Admin',
                                    '$Payer_Email_Notification_Admin',
                                    '$Payer_First_Name_Notification_Admin',
                                    '$Payer_Last_Name_Notification_Admin',
                                    '$Payer_Date_Created_Notification_Admin',
                                    '$Payer_Identification_Number_Notification_Admin',
                                    '$Payer_Identification_Type_Notification_Admin',
                                    '$Payer_Phone_Area_Code_Notification_Admin',
                                    '$Payer_Phone_Number_Notification_Admin',
                                    '$Payer_Address_Street_Name_Notification_Admin',
                                    '$Payer_Address_Street_Number_Notification_Admin',
                                    '$Payer_Address_Zip_Code_Notification_Admin',
                                    '$Shipments_Dimensions_Notification_Admin',
                                    '$Shipments_Cost_Notification_Admin',
                                    '$Shipments_Receiver_Address_Zip_Code_Notification_Admin',
                                    '$Shipments_Receiver_Address_Street_Name_Notification_Admin',
                                    '$Shipments_Receiver_Address_City_Name_Notification_Admin',
                                    '$Shipments_Receiver_Address_State_Name_Notification_Admin',
                                    '$Shipments_Receiver_Address_Street_Number_Notification_Admin',
                                    '$Shipments_Receiver_Address_Floor_Notification_Admin',
                                    '$Shipments_Receiver_Address_Apartment_Notification_Admin',
                                    '$Notification_Url_Notification_Admin',
                                    '$Init_Point_Notification_Admin',
                                    '$Qr_Code_Notification_Admin',
                                    '$Qr_Code_Base64_Notification_Admin',
                                    '$Id_Externo_Admin',
                                    '$Id_Externo_Usuario'
                                    )";

            $cadastro = mysqli_query($conexao, $sql_cadastra);
        }

        $sql_cadastra_Requisicoes_Api = "INSERT INTO requisicoes_api_admin VALUES (
                                DEFAULT, 
                                '$Id_Preference_Notification_Admin',
                                '$Status_Notification_Admin',
                                '$Date_Last_Updated_Notification_Admin',
                                '$Id_Externo_Admin',
                                '$Id_Externo_Usuario'
                                )";

        $cadastro_Requisicoes_Api = mysqli_query($conexao, $sql_cadastra_Requisicoes_Api);
    }
}
