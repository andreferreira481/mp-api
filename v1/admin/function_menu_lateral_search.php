<?php

   // include("seguranca.php");
        function menu_lateral_search() {

            include("conexao.php");

            date_default_timezone_set('America/Sao_Paulo');

            $result = "SHOW TABLES LIKE 'admin_api'";
            $result2 = mysqli_query($conexao, $result);
            $exists = mysqli_num_rows($result2) > 0 ? true : false;

            $Email_Admin_menu = $_SESSION['email_admin'];
            $Senha_Admin_menu = $_SESSION['senha_admin'];

            $Id_Externo_Admin = "";
            $Id_Admin = "";
            $Email_Admin = "";
            $Senha_Admin = "";
            $Celular_Admin = "";
            $Logo_Admin = "assets/images/faces/face15.jpg";
            $U_A_D_Admin = date("d/m/Y");
            $U_A_H_Admin = date("H:i:s");
            $N_A_Admin = 0;
            $Nome_Admin = "Nome Admin";

            if ($exists){
                $busca = "SELECT * FROM admin_api where Email_Admin='$Email_Admin_menu' and Senha_Admin='$Senha_Admin_menu'";
                $dados = mysqli_query($conexao, $busca);
                $dados_menu= mysqli_fetch_assoc($dados);
                $cont = mysqli_num_rows($dados);
                        if($cont>0){
                                $Id_Externo_Admin = $dados_menu["Id_Externo_Admin"];
                                $Id_Admin = $dados_menu['Id_Admin'];
                                $Email_Admin = $dados_menu['Email_Admin'];
                                $Senha_Admin = $dados_menu['Senha_Admin'];
                                $Celular_Admin = $dados_menu['Celular_Admin'];
                                $Logo_Admin = "upload/img/".$dados_menu['Logo_Admin'];
                                $U_A_D_Admin = $dados_menu['U_A_D_Admin'];
                                $U_A_H_Admin = $dados_menu['U_A_H_Admin'];
                                $N_A_Admin = $dados_menu['N_A_Admin'];
                                $Nome_Admin = $dados_menu['Nome_Admin'];
                                
                                $resposta_authorized = array(
                                    "Id_Externo_Admin" => $Id_Externo_Admin,
                                    "Id_Admin" => $Id_Admin,
                                    "Email_Admin" => $Email_Admin,
                                    "Senha_Admin" => $Senha_Admin,
                                    "Celular_Admin" => $Celular_Admin,
                                    "Logo_Admin" => $Logo_Admin,
                                    "U_A_D_Admin" => $U_A_D_Admin,
                                    "U_A_H_Admin" => $U_A_H_Admin,
                                    "N_A_Admin" => $N_A_Admin,
                                    "Nome_Admin" => $Nome_Admin,);

                                    return $resposta_authorized;
                            }else{
                                $resposta_authorized = array(
                                    "Id_Externo_Admin" => $Id_Externo_Admin,
                                    "Id_Admin" => $Id_Admin,
                                    "Email_Admin" => $Email_Admin,
                                    "Senha_Admin" => $Senha_Admin,
                                    "Celular_Admin" => $Celular_Admin,
                                    "Logo_Admin" => $Logo_Admin,
                                    "U_A_D_Admin" => $U_A_D_Admin,
                                    "U_A_H_Admin" => $U_A_H_Admin,
                                    "N_A_Admin" => $N_A_Admin,
                                    "Nome_Admin" => $Nome_Admin,);

                                    return $resposta_authorized;
                            }
            }else{
                $resposta_authorized = array(
                    "Id_Externo_Admin" => $Id_Externo_Admin,
                    "Id_Admin" => $Id_Admin,
                    "Email_Admin" => $Email_Admin,
                    "Senha_Admin" => $Senha_Admin,
                    "Celular_Admin" => $Celular_Admin,
                    "Logo_Admin" => $Logo_Admin,
                    "U_A_D_Admin" => $U_A_D_Admin,
                    "U_A_H_Admin" => $U_A_H_Admin,
                    "N_A_Admin" => $N_A_Admin,
                    "Nome_Admin" => $Nome_Admin,);

                    return $resposta_authorized;
            }
        }

    //print_r(menu_lateral_search());
?>