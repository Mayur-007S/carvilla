<html>
<head>
    <title>Booking History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <body>
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
    echo "<table class='table table-striped table-bordered table-hover'>
    <tr class='thead-dark'>
    <th scope='col'>Id</th>
    <th scope='col'>carName</th>
    <th scope='col'>model</th>
    <th scope='col'>price</th>
    <th scope='col'>clientId</th>
    <th scope='col'>name</th>
    <th scope='col'>email</th>
    <th scope='col'>phone</th>
    <th scope='col'>age</th>
    <th scope='col'>address</th>
    <th scope='col'>showroom</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr scope='row'>
        <td>".$row['bookingID']."</td>
        <td>".$row['carName']."</td>
        <td>".$row['model']."</td>
        <td>".$row['price']."</td>
        <td>".$row['clientId']."</td>
        <td>".$row['username']."</td>
        <td>".$row['email']."</td>
        <td>".$row['phone']."</td>
        <td>".$row['age']."</td>
        <td>".$row['address']."</td>
        <td>".$row['showroom']."</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$con->close();
?>
</body>
</head>
</html>
