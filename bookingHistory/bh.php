<?php 

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
$user_email = "";
$SQL = "SELECT * FROM user";
$result = $con->query($SQL);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $user_email = $row['email'];
    }
} else {
    echo "0 results";
}

$SQL = "SELECT * FROM bookings WHERE email='$user_email'";
$result = $con->query($SQL);

if ($result->num_rows > 0) {
    echo "<h1>Booking History</h1>";
    echo "<table border='1px solid black'><tr><th>Id</th><th>carName</th><th>model</th><th>price</th><th>clientId</th><th>name</th><th>email</th><th>phone</th><th>age</th><th>address</th><th>showroom</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['bookingID']."</td><td>".$row['carName']."</td><td>".$row['model']."</td><td>".$row['price']."</td>
        <td>".$row['clientId']."</td><td>".$row['username']."</td><td>".$row['email']."</td><td>".$row['phone']."</td>
        <td>".$row['age']."</td><td>".$row['address']."</td><td>".$row['showroom']."</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$con->close();
?>
