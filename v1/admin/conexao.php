<?php
/*The MySQL server. It can also include a port number, eg "server:port" or a path to a local socket, eg ":/path/to/socket" for the local server (localhost).
If the mysql.default_host PHP directive is not set (default), then the default value is 'localhost:3306'
*/
$hostname = "localhost";

/*The username. The default value is the name of the user who owns the server process. */
$user = "root";

/*The password. The default value is an empty password. */
$password = "";

/*The database name */
$database = "checkout-pro";

$conexao = mysqli_connect($hostname,$user,$password,$database);

if (!$conexao){
    print "Falha na Conexão com o Banco de Dados";
}

