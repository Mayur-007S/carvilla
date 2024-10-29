<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carvilla";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$carName = isset($_POST["carName"]) ? $_POST["carName"] : "";
$model = isset($_POST["model"]) ? $_POST["model"] : "";
$price = isset($_POST["price"]) ? $_POST["price"] : "";
$clientId = isset($_POST["id"]) ? $_POST["id"] : "";
$name = isset($_POST["name"]) ? $_POST["name"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
$age = isset($_POST["age"]) ? $_POST["age"] : 0;
$address = isset($_POST["address"]) ? $_POST["address"] : "";
$showroom = isset($_POST['showroom']) ? $_POST['showroom'] : "";

$sql = "INSERT INTO bookings (carName, model, price, clientId, name, email, phone, age, address, showroom) VALUES ('$carName', '$model', '$price', '$clientId', '$name', '$email', '$phone', '$age', '$address' ,'$showroom')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo " ";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>CarVilla - Booking Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 5px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
            position: relative;
            white-space: nowrap;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:last-child td {
            border-bottom: none;
        }
        .success-message {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #5cb85c;
            color: #fff;
            padding: 40px; 
            border-radius: 20px; 
            animation: fadeOut 7s ease forwards; 
        }
        @keyframes fadeOut {
            0% { opacity: 1; }
            100% { opacity: 0; }
        }
        th:first-child {
            border-right: 1px solid #ddd;
        }
        td:first-child {
            border-right: 1px solid #ddd;
        }
        .btn-container {
            display: flex;
            justify-content: right; 
            align-items: right; 
            margin-top: 20px;
        }
        .btn-container a {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-container a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo '<div class="success-message">Successful Booking!</div>';
            echo '<div class="booking-details">';
            echo '<h2>Booking Details:</h2>';
            echo '<table>';
            echo '<tr><th>Field</th><th>Value</th></tr>';
            $fields = array(
                "Car Name:" => $_POST['carName'],
                "Model:" => $_POST['model'],
                "Price:" => $_POST['price'],
                "ID:" => $_POST['id'],
                "Client Name:" => $_POST['name'],
                "Email:" => $_POST['email'],
                "Phone Number:" => $_POST['phone'],
                "Age:" => $_POST['age'],
                "Address:" => $_POST['address'],
                "Showroom:" => $_POST['showroom']
            );
            foreach ($fields as $key => $value) {
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
            echo '</table>';
            echo '<div class="btn-container">';
            echo '<a class="print-link" href="#" onclick="window.print()">Print Page</a>';
            echo '</div>';
            echo '</div>'; 
        }
        ?>
    </div>
</body>
</html>
