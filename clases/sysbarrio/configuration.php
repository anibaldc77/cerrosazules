<?php
// include files
include '../../clases/bd/core_classes/core.dbfunctions.php';
//include '../piezas/core_classes/DGEN_Generator.php';

// default database
//if($_POST['piezas']){
//    $dbName = $_POST['piezas'];
//}else{
   $dbName = 'cerrosazules';
//}

// Database Configuration
$dbConn = new DbConnection();
$dbConn->useManualDefinition("localhost", $dbName, "root", "");
$dbConn->doConnection();

$GLOBALS['dbConn'] = $dbConn;

?>
