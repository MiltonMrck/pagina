<?php
$serverName = "10.1.0.251"; //serverName\instanceName
$connectionInfo = array( "Database"=>"10.1.0.251", "UID"=>"sa", "PWD"=>"");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}

