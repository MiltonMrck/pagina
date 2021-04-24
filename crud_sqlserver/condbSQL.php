<?php
///////////////////// conneccion con sqlsrv ///////////////////////////////////////////

$serverName = "10.1.0.251"; //serverName\instanceName
$connectionInfo = array( "Database"=>"TeleMGM", "UID"=>"sa", "PWD"=>"");
$conn = sqlsrv_connect( $serverName, $connectionInfo);


if( $conn ) {
	echo "Conexión establecida.<br />";
	echo "<br />";
	
	$sql = "SELECT * FROM TeleMKTMitsu";
	$ejecuta = sqlsrv_query($conn, $sql);  
	while ($fila = sqlsrv_fetch_array($ejecuta, SQLSRV_FETCH_ASSOC)){
		print_r($fila);
	}

}else{
	echo "Conexión no se pudo establecer.<br />";
	echo "<br />";
	die( print_r( sqlsrv_errors(), true));
}





/////////////////////// conneccion con PDO //////////////////////////////////////// 

/*$dsn = "sqlsrv:Server=10.1.0.251;Database=TeleMGM";

$usuario = 'sa';
$contrasenna = '';
$conn = new PDO($dns, $usuario, $contrasenna);
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

$sql = "SELECT * FROM TeleMKTMitsu";

foreach($conn->query($sql) as $row){
	print_r($row);
}

*/
/* Conectar a una base de datos de MySQL invocando al controlador 
$dsn = 'sqlsrv:Server=10.1.0.251;Database=TeleMGM';
$usuario = 'sa';
$contraseña = '';

try {
    $gbd = new PDO($dsn, $usuario, $contraseña);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}
*/
//no se cierra la etiqueta php para mayor eficiencia en el codigo 
/*
$dsn = 'sqlsrv:server=10.1.0.251;database=TeleMGM';
$usuario = 'sa';
$pass = '';

try{
	$pdo = new PDO($dns,$usuario,$pass);

	echo 'Conectado';

}catch (PDOException $e){
print "!Error!: " . $e->getMessage() . "<br/>";
die();
}*/

