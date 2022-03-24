<?php

include("conexao.php");


    function historico_acesso_admin_search() {

        include("conexao.php");

        $result = "SHOW TABLES LIKE 'historico_acesso_admin'";
        $result2 = mysqli_query($conexao, $result);
        $exists = mysqli_num_rows($result2) > 0 ? true : false;

        if ($exists){ 

            $sql = "SELECT *FROM historico_acesso_admin ORDER BY Id_Acesso_Admin DESC ";
            $resultado = mysqli_query($conexao, $sql);
            while($linha = mysqli_fetch_array($resultado))
                {
                    echo "<tr>";
                        echo "<td>".$linha['Id_Acesso_Admin']."</td>";
                        echo "<td>".$linha['Descrição_Acesso_Admin']."</td>"; 
                        echo "<td>".$linha['Data_Acesso_Admin']."</td>"; 
                        echo "<td>".$linha['Hora_Acesso_Admin']."</td>";
                        echo "<td>".$linha['Id_Login_Acesso_Admin']."</td>"; 
                        echo "<td>".$linha['Id_Usuario_Acesso_Admin']."</td>"; 
                        echo "<td>".$linha['Id_Externo_Acesso_Admin']."</td>"; 
                        echo "<td>".$linha['Id_Externo_Admin']."</td>"; 
                    echo "</tr>";
                }
        }else{

           
        }

    }


    
?>