<?php 


session_start();

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'carvilla';

try {
	$con = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
	$con->setAttribute(PDO::ATTR_CASE,PDO::CASE_NATURAL);
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


    // echo "Connection successful.";
    $SQL = "SELECT * FROM user ";
    $exec = $con->prepare($SQL);
    $exec->execute();

    echo "<pre>";
    $result1 = $exec->fetchAll(PDO::FETCH_NUM);
    // print_r($result1);
	$new = count($result1);
	$newId = $result1[$new-1];
    $user_id = $newId[0];
    $user_email = $newId[2];


	
} catch (PDOException $ex) 
{
	echo "Connection failed: ".$ex->getMessage();
}


?>