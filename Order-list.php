<?php 

session_start();

$host = "localhost";
$port = 3306;
$socket = "";
$user = "root";
$password = "yPB}X`8iWX/w";
$dbname = "carvilla";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$SQL = "SELECT * FROM user";
$result = $con->query($SQL);

if ($result->num_rows > 0) {
    $result1 = $result->fetch_all(MYSQLI_NUM);
    $new = count($result1);
    $newId = $result1[$new-1];
    $user_id = $newId[0];
    $user_email = $newId[2];
    echo "<pre>";
    print_r($result1);
} else {
    echo "0 results";
}

?>
