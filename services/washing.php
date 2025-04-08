<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Wash Form</title>
    <link rel="stylesheet" href="./service.css">
</head>
<body>
<div class="backButton">
        <a href="../index1.html#service"><button type="button"><span class="icon">👈</span>Back</button></a>
    </div>
    <div class="form-container">
        <h1>Car Wash Form</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="input-group">
                <span class="icon">🚗</span>
                <label for="carName">Car Name:</label>
                <input type="text" id="carName" name="carName" placeholder="Enter the car name" required>
            </div>

            <div class="input-group">
                <span class="icon">🛠️</span>
                <label for="model">Car Model:</label>
                <input type="text" id="model" name="model" placeholder="Enter car model" required>
            </div>

            <div class="input-group">
                <span class="icon">👤</span>
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>

            <div class="input-group">
                <span class="icon">📧</span>
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="input-group">
                <span class="icon">📞</span>
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>

            <div class="input-group">
                <span class="icon">🏠</span>
                <label for="address">Home Address:</label>
                <input type="text" id="address" name="address" placeholder="Enter your address" required>
            </div>

            <div class="input-group">
                <span class="icon">🌍</span>
                <label for="location">Select location:</label>
                <select id="color" name="location" class="color-select" required>
                    <option value="Ahilyanagar" readonly>Ahilyanagar</option>
                    <option
                        value="TATA Motors Showroom, Ground Floor, Nagar, Pune Highway, Kedgoav, Ahilyanagar, Maharastra, 414005">
                        TATA Motors Showroom:- Nagar, Pune Highway, Kedgoav,Ahilyanagar
                    </option>
                    <option value="Mahendra Motors Showroom, Shivaji Nagar, Ahilyanagar, Maharastra, 414001">
                        Mahendra Motors Showroom:- Shivaji Nagar,Ahilyanagar
                    </option>
                </select>
            </div>


            <div class="input-group">
                <span class="icon">🧼</span>
                <label for="washType">Select Wash Type:</label>
                <select id="washType" name="washType" required>
                    <option value="basic_wash">Basic Wash</option>
                    <option value="full_wash">Full Wash</option>
                    <option value="interior_cleaning">Interior Cleaning</option>
                    <option value="wax_polish">Wax and Polish</option>
                </select>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

<?php
// Database connection parameters
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="yPB}X`8iWX/w";
$dbname="carvilla";

    $conn = new mysqli($host, $user, $password, $dbname, $port, $socket);

// Check connection and set error reporting
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind only if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate form fields
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    if (!preg_match("/^[0-9]{10}$/", $_POST['phone'])) {
        die("Invalid phone number format, should be 10 digits.");
    }

    // Prepare and bind statement
    $stmt = $conn->prepare("INSERT INTO car_wash (car_name, car_model, full_name, email, phone, address, wash_type,location) VALUES (?, ?, ?, ?, ?, ?, ?,?)");
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("ssssssss", $carName, $carModel, $fullName, $email, $phone, $address, $washType,$location);

    // Get form data
    $carName = $_POST['carName'];
    $carModel = $_POST['model'];
    $fullName = $_POST['name'];
    $email = $_POST['email']; 
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $washType = $_POST['washType'];
    $location = $_POST['location'];

    // Execute the statement
    if ($stmt->execute()) {
        // Display a confirmation message
        echo "<script>alert('New record created successfully');</script>";
        header("Location: ../index1.html#service"); // Redirect to the service section after submission
        exit(); // Ensure no further code is executed after redirection
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
