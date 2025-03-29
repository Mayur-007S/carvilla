<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>CarVilla - Booking Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h2 {
            text-align: center;
            text-decoration: underline;
            color: green;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="text"][readonly] {
            background-color: #f4f4f4;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        #showroom {
            width: 10rem;
            height: 2rem;
        }
    </style>
</head>

<body>

    <?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="yPB}X`8iWX/w";
$dbname="carvilla";

    $conn = new mysqli($host, $user, $password, $dbname, $port, $socket);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $sql = "SELECT * FROM car_data";
// $result = $conn->query($sql);

// if($result->num_rows > 0)
// {
//     while($row = $result->fetch_assoc()){
    
// if(!empty($carName = $row['CarName'] && $carID = $row['id'] && $model = $row['model'] && $price = $row['price']))
// {

    
// }
// }}

?>

    <div class="container">
        <h2>Car Booking Form :</h2>
        <form id="bookingForm" action="process_form.php" method="post">
            <div class="form-group">
                <label for="carName">Car Name:</label>
                <input type="text" id="carName" name="carName" readonly value="Mahindra Scorpio-N">
            </div>
            <div class="form-group">
                <label for="model">Model:</label>
                <input type="text" id="model" name="model" readonly value="Scorpio-N">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" readonly value="Rs. 13.60 Lack">
            </div>
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id" readonly value="A1C2">
            </div>
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" placeholder="Enter your age" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" placeholder="Enter your address" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="showroom">Select showroom Location</label>
                <select id="showroom" name="showroom" required>
                    <option readonly value="Ahilyanagar">Ahilyanagar
                    <option
                        value="TATA Motors Showroom, Ground Floor, Nagar, Pune Highway, Kedgoav, Ahilyanagar, Maharastra, 414005">
                        TATA Motors Showroom:- Nagar, Pune Highway, Kedgoav,Ahilyanagar
                    </option>
                    <option value="Mahendra Motors Showroom, Shivaji Nagar, Ahilyanagar, Maharastra, 414001">
                        Mahendra Motors Showroom:- Shivaji Nagar,Ahilyanagar
                    </option>
                    </option>
                </select>
            </div>

            <input type="submit" value="Submit Booking">
        </form>
    </div>
</body>

</html>