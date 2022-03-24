<?php
//$login=  mysql_real_escape_string($login);
//$senha= mysql_real_escape_string($senha);

date_default_timezone_set('America/Sao_Paulo');

$Nome_Admin = "";
$Email_Admin = $_POST['c_email'];
$Senha_Admin = $_POST['c_senha'];
$Celular_Admin = "";
$Logo_Admin = "";
$E_D_Admin = date("d/m/Y");
$E_H_Admin = date("H:i:s");
$C_D_Admin = date("d/m/Y");
$C_H_Admin = date("H:i:s");
$N_A_Admin = 0;
$U_A_D_Admin = date("d/m/Y");
$U_A_H_Admin = date("H:i:s");
$Id_Externo_Admin = rand(1, 99) . date("dmYHis") . rand(1, 99);

include("conexao.php");

//mysqli_select_db($conexao,"bd_resolv");

$result = "SHOW TABLES LIKE 'admin_api'";
$result2 = mysqli_query($conexao, $result);
$exists = mysqli_num_rows($result2) > 0 ? true : false;




if ($exists) {
    $sql = "SELECT * FROM admin_api where Email_Admin='$Email_Admin' and Senha_Admin='$Senha_Admin'";
    $dados_i = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_assoc($dados_i);
    $cont = mysqli_num_rows($dados_i);
    if ($cont > 0) {
        $Id_Externo_Admin = $dados['Id_Externo_Admin'];
        $Id_Admin = $dados['Id_Admin'];
        $Email_Admin = $dados['Email_Admin'];
        $Senha_Admin = $dados['Senha_Admin'];
        $Celular_Admin = $dados['Celular_Admin'];
        $Logo_Admin = $dados['Logo_Admin'];
        $U_A_D_Admin = $dados['U_A_D_Admin'];
        $U_A_H_Admin = $dados['U_A_H_Admin'];
        $N_A_Admin = $dados['N_A_Admin'] + 1;
        $Nome_Admin = $dados['Nome_Admin'];

        $create2 = "CREATE TABLE IF NOT EXISTS historico_acesso_admin (
            Id_Acesso_Admin int NOT NULL auto_increment, 
            Descricao_Acesso_Admin VARCHAR(255), 
            Id_Login_Acesso_Admin VARCHAR(255), 
            Id_Usuario_Acesso_Admin VARCHAR(255),
            Data_Acesso_Admin VARCHAR(10),
            Hora_Acesso_Admin VARCHAR(10),
            Id_Externo_Acesso_Admin VARCHAR(255), 
            Id_Externo_Admin VARCHAR(255), 
            PRIMARY KEY (Id_Acesso_Admin))";
        $RESULT2 = mysqli_query($conexao, $create2);

        $create3 = "CREATE TABLE IF NOT EXISTS keys_admin (
                                            Id_Keys_Admin int NOT NULL auto_increment, 
                                            Access_Token_Keys_Admin VARCHAR(255), 
                                            Client_Id_Keys_Admin VARCHAR(255), 
                                            Client_Secret_Keys_Admin VARCHAR(255),
                                            Data_Cadastro_Keys_Admin VARCHAR(10),
                                            Hora_Cadastro_Keys_Admin VARCHAR(10),
                                            Id_Externo_Keys_Admin VARCHAR(255), 
                                            Id_Externo_Admin VARCHAR(255), 
                                            PRIMARY KEY (Id_Keys_Admin))";
        $RESULT3 = mysqli_query($conexao, $create3);

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
        $RESULT4 = mysqli_query($conexao, $create4);

        $create5 = "CREATE TABLE IF NOT EXISTS requisicoes_api_admin (
                                                Id_Requisicoes_Api_Admin int NOT NULL auto_increment,
                                                Id_Preference_Requisicoes_Api_Admin VARCHAR(255),
                                                Status_Requisicoes_Api_Admin VARCHAR(255),
                                                Data_Requisicoes_Api_Admin VARCHAR(255),
                                                Id_Externo_Admin VARCHAR(255),
                                                Id_Externo_Usuario VARCHAR(255),
                                                PRIMARY KEY (Id_Requisicoes_Api_Admin))";
        $RESULT5 = mysqli_query($conexao, $create5);

        include("cont_acesso_admin.php");
        $id_cont_acesso_admin = $Id_Admin;
        cont_acesso_admin($dados['N_A_Admin'], $id_cont_acesso_admin);

        include("function_historico_acesso_admin_create.php");
        $id_login_acesso = rand(1, 99) . date("dnYHis") . rand(1, 99);
        $id_externo_acesso_admin = rand(1, 99) . date("dnYHis") . rand(1, 99);
        $descricao_acesso = "LOGIN";
        $id_usuario_acesso_admin = $Id_Admin;
        historico_acesso_admin($dados['Id_Externo_Admin'], $id_login_acesso, $descricao_acesso, $id_externo_acesso_admin, $id_usuario_acesso_admin);

        session_cache_expire(10);
        session_start();
        $_SESSION['email_admin'] = $Email_Admin;
        $_SESSION['senha_admin'] = $Senha_Admin;
        $_SESSION['celular_admin'] = $Celular_Admin;
        $_SESSION['logo_admin'] = $Logo_Admin;
        $_SESSION['id_externo_admin'] = $Id_Externo_Admin;
        $_SESSION['Id_admin'] = $Id_Admin;
        $_SESSION['u_a_d_admin'] = $U_A_D_Admin;
        $_SESSION['u_a_h_Admin'] = $U_A_H_Admin;
        $_SESSION['n_a_admin'] = $N_A_Admin;
        $_SESSION['id_login_acesso_admin'] = $id_login_acesso;
        $_SESSION['id_externo_acesso_admin'] = $id_externo_acesso_admin;
        $_SESSION['id_usuario_acesso_admin'] = $id_usuario_acesso_admin;
        $_SESSION['nome_admin'] = $Nome_Admin;


        header("Location:dashboard.php");
    } else {
        header("Location:index.php");
    }
} else {

    $create_table_admin = "CREATE TABLE IF NOT EXISTS admin_api (
            Id_Admin int NOT NULL auto_increment, 
            Nome_Admin VARCHAR(255), 
            Email_Admin VARCHAR(255),
            Senha_Admin VARCHAR(255),
            Celular_Admin VARCHAR(255),
            Logo_Admin VARCHAR(255),
            E_D_Admin VARCHAR(10),
            E_H_Admin VARCHAR(10),
            C_D_Admin VARCHAR(10), 
            C_H_Admin VARCHAR(10), 
            N_A_Admin INT(255),
            U_A_D_Admin VARCHAR(10),
            U_A_H_Admin VARCHAR(10),
            Id_Externo_Admin VARCHAR(255),  
            PRIMARY KEY (Id_Admin))";
    $RESULT = mysqli_query($conexao, $create_table_admin);

    $sql_cadastra = "INSERT INTO admin_api VALUES (
            DEFAULT, 
            '$Nome_Admin',
            '$Email_Admin',
            '$Senha_Admin',
            '$Celular_Admin',
            '$Logo_Admi',
            '$E_D_Admin',
            '$E_H_Admin',
            '$C_D_Admin',
            '$C_H_Admin',
            '$N_A_Admin', 
            '$U_A_D_Admin',
            '$U_A_H_Admin',
            '$Id_Externo_Admin'
            )";

    $cadastro = mysqli_query($conexao, $sql_cadastra);

    //criar tabelas para uso posterior

    $create2 = "CREATE TABLE IF NOT EXISTS historico_acesso_admin (
                    Id_Acesso_Admin int NOT NULL auto_increment, 
                    Descricao_Acesso_Admin VARCHAR(255), 
                    Id_Login_Acesso_Admin VARCHAR(255), 
                    Id_Usuario_Acesso_Admin VARCHAR(255),
                    Data_Acesso_Admin VARCHAR(10),
                    Hora_Acesso_Admin VARCHAR(10),
                    Id_Externo_Acesso_Admin VARCHAR(255), 
                    Id_Externo_Admin VARCHAR(255), 
                    PRIMARY KEY (Id_Acesso_Admin))";
    $RESULT2 = mysqli_query($conexao, $create2);

    $create3 = "CREATE TABLE IF NOT EXISTS keys_admin (
                        Id_Keys_Admin int NOT NULL auto_increment, 
                        Access_Token_Keys_Admin VARCHAR(255), 
                        Client_Id_Keys_Admin VARCHAR(255), 
                        Client_Secret_Keys_Admin VARCHAR(255),
                        Data_Cadastro_Keys_Admin VARCHAR(10),
                        Hora_Cadastro_Keys_Admin VARCHAR(10),
                        Id_Externo_Keys_Admin VARCHAR(255), 
                        Id_Externo_Admin VARCHAR(255), 
                        PRIMARY KEY (Id_Keys_Admin))";
    $RESULT3 = mysqli_query($conexao, $create3);

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
    $RESULT4 = mysqli_query($conexao, $create4);

    $create5 = "CREATE TABLE IF NOT EXISTS requisicoes_api_admin (
                            Id_Requisicoes_Api_Admin int NOT NULL auto_increment,
                            Id_Preference_Requisicoes_Api_Admin VARCHAR(255),
                            Status_Requisicoes_Api_Admin VARCHAR(255),
                            Data_Requisicoes_Api_Admin VARCHAR(255),
                            Id_Externo_Admin VARCHAR(255),
                            Id_Externo_Usuario VARCHAR(255),
                            PRIMARY KEY (Id_Requisicoes_Api_Admin))";
    $RESULT5 = mysqli_query($conexao, $create5);




    $sql = "SELECT * FROM admin_api where Email_Admin='$Email_Admin' and Senha_Admin='$Senha_Admin'";
    $dados_i = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_assoc($dados_i);
    $cont = mysqli_num_rows($dados_i);
    if ($cont > 0) {
        $Id_Externo_Admin = $dados['Id_Externo_Admin'];
        $Id_Admin = $dados['Id_Admin'];
        $Email_Admin = $dados['Email_Admin'];
        $Senha_Admin = $dados['Senha_Admin'];
        $Celular_Admin = $dados['Celular_Admin'];
        $Acess_Token_Admin = $dados['Acess_Token_Admin'];
        $Logo_Admin = $dados['Logo_Admin'];
        $Nome_Admin = $dados['Nome_Admin'];

        include("function_historico_acesso_admin_create.php");
        $id_login_acesso = rand(1, 99) . date("dnYHis") . rand(1, 99);
        $id_externo_acesso_admin = rand(1, 99) . date("dnYHis") . rand(1, 99);
        $descricao_acesso = "LOGIN";
        $id_usuario_acesso_admin = $Id_Admin;
        historico_acesso_admin($dados['Id_Externo_Admin'], $id_login_acesso, $descricao_acesso, $id_externo_acesso_admin, $id_usuario_acesso_admin);

        session_cache_expire(10);
        session_start();
        $_SESSION['email_admin'] = $Email_Admin;
        $_SESSION['senha_admin'] = $Senha_Admin;
        $_SESSION['celular_admin'] = $Celular_Admin;
        $_SESSION['logo_admin'] = $Logo_Admin;
        $_SESSION['id_externo_admin'] = $Id_Externo_Admin;
        $_SESSION['Id_admin'] = $Id_Admin;
        $_SESSION['id_login_acesso_admin'] = $id_login_acesso;
        $_SESSION['id_externo_acesso_admin'] = $id_externo_acesso_admin;
        $_SESSION['id_usuario_acesso_admin'] = $id_usuario_acesso_admin;
        $_SESSION['nome_admin'] = $Nome_Admin;

        header("Location:dashboard.php");
    } else {
        header("Location:index.php");
    }
}

mysqli_close($conexao);
