<?php 
require_once 'Order-list.php';

print($user_email);

$host = "localhost";
$port = 3306;
$socket = "";
$user = "root";
$password = "yPB}X`8iWX/w";
$dbname = "carvilla";


try{

    $con = new mysqli($host, $user, $password, $dbname, $port, $socket);

    $SQL = "SELECT * FROM bookings WHERE email = '$useremail'";
        $exec = $con->prepare($SQL);
        $exec->execute();

        echo "<pre>";
        $result = $exec->fetchAll(PDO::FETCH_NUM);
        // print_r($result1);
        echo "<h1>Booking Data</h1>";
        echo "<table border='1px solide black'><tr><th>Id</th><th>carName</th><th>model</th><th>price</th><th>clientId</th><th>name</th><th>email</th><th>phone</th><th>age</th><th>address</th><th>showroom</th></tr>";
        foreach($result as $row1)
        {
            echo "<tr><td>".$row1[0]."</td><td>".$row1[1]."</td><td>".$row1[2]."</td><td>".$row1[3]."</td>
            <td>".$row1[4]."</td><td>".$row1[5]."</td><td>".$row1[6]."</td><td>".$row1[7]."</td>
            <td>".$row1[8]."</td><td>".$row1[9]."</td><td>".$row1[10]."</td>
            </tr>";
        }
        echo"</table>";

} catch (PDOException $ex) 
{
	echo "Connection failed: ".$ex->getMessage();
}