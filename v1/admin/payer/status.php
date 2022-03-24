<?php

if (isset($_GET['Id_Externo_Usuario'])) {
    $Id_Externo_Usuario = $_GET['Id_Externo_Usuario'];
}else{
    $Id_Externo_Usuario = "";
}

if (isset($_GET['External_Reference'])) {
    $External_Reference = $_GET['External_Reference'];
}else{
    $External_Reference = "";
}

if (isset($_GET['Id_Externo_Admin'])) {
    $Id_Externo_Admin = $_GET['Id_Externo_Admin'];
}else{
    $Id_Externo_Admin = "";
}

include("../conexao.php");

        $result = "SHOW TABLES LIKE 'notification_admin'";
        $result2 = mysqli_query($conexao, $result);
        $exists = mysqli_num_rows($result2) > 0 ? true : false;


        if ($exists){
            if($Id_Externo_Usuario !=""){
                $busca = "SELECT * FROM notification_admin WHERE Id_Externo_Usuario = '$Id_Externo_Usuario'";
                    $resultado = mysqli_query($conexao, $busca);
                        while ($array = mysqli_fetch_assoc($resultado)) {
                            $dados[] = $array;
                            $json = json_encode($dados);
                        }if (isset($json)) {
                            echo $json;
                        } else {
                            echo json_encode("não existe");
                        }
            }elseif($Id_Externo_Admin !=""){
                $busca = "SELECT * FROM notification_admin WHERE Id_Externo_Admin = '$Id_Externo_Admin'";
                    $resultado = mysqli_query($conexao, $busca);
                        while ($array = mysqli_fetch_assoc($resultado)) {
                            $dados[] = $array;
                            $json = json_encode($dados);
                        }if (isset($json)) {
                            echo $json;
                        } else {
                            echo json_encode("não existe");
                        }

            }elseif ($External_Reference != "") {
                $busca = "SELECT * FROM notification_admin WHERE External_Reference_Notification_Admin = '$External_Reference'";
                    $resultado = mysqli_query($conexao, $busca);
                        while ($array = mysqli_fetch_assoc($resultado)) {
                            $dados[] = $array;
                            $json = json_encode($dados);
                        }if (isset($json)) {
                            echo $json;
                        } else {
                            echo json_encode("não existe");
                        }
                
            }else{
                echo json_encode("erro");
            }
            
        }else{
            echo json_encode("erro");
        }

    ?>