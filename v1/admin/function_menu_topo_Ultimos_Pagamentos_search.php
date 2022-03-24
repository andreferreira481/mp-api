<?php

    function menu_topo_Ultimos_Pagamentos_search() {

        include("conexao.php");

        $result = "SHOW TABLES LIKE 'notification_admin'";
        $result2 = mysqli_query($conexao, $result);
        $exists = mysqli_num_rows($result2) > 0 ? true : false;

        $Id_Externo_Admin = $_SESSION['id_externo_admin'];


        if ($exists){
            $busca = "SELECT * FROM notification_admin where Id_Externo_Admin='$Id_Externo_Admin' ORDER BY Id_Notification_Admin DESC";
             $resultado = mysqli_query($conexao, $busca);
                   while ($array = mysqli_fetch_assoc($resultado)) {
                     $dados[] = $array;

                     
                 }

                 $resposta_ultimos_pagamentos =  $dados;
                    return $resposta_ultimos_pagamentos;
                 
         }else{
            $resposta_ultimos_pagamentos =  "";
                    return $resposta_ultimos_pagamentos;
         }

    }
?>