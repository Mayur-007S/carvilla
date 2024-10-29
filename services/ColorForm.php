
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Customization Form</title>
    <style>
        /* General form styling */
        .form-container {
            width: 100%;
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background: linear-gradient(135deg, #e0eafc, #cfdef3);
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 28px;
            margin-bottom: 25px;
            font-family: 'Arial', sans-serif;
        }

        .input-group {
            margin-bottom: 20px;
            position: relative; /* To position the icon */
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
            font-family: 'Verdana', sans-serif;
        }

        /* Input styling */
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 12px 12px 12px 50px; /* Add padding for the icon */
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            transition: 0.3s;
            background-color: #f7f9fc;
            color: #333;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        select:focus {
            border-color: #74b9ff;
            background-color: #eaf3ff;
            box-shadow: 0 0 8px rgba(116, 185, 255, 0.5);
            outline: none;
        }

        /* Icon styling */
        .input-group .icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 24px; /* Increased icon size */
            color: #888; /* Icon color */
        }

        /* Styling for the dropdown */
        select.color-select {
            appearance: none;
            background-color: #fff;
            color: #333; /* Make the selected text color black */
            font-size: 16px;
        }

        select.color-select option {
            color: #333;
        }

        /* Styling for submit button */
        button {
            width: 100%;
            padding: 12px;
            background-color: rgb(2, 213, 2);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            font-family: 'Arial', sans-serif;
        }

        button:hover {
            background-color: rgb(2, 110, 2);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        /* Styling for placeholder text */
        input::placeholder {
            color: #999;
        }
        .backButton{
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30%;
            height: 10%;
        }
        .backButton button{
            width: 100%;
            padding: 12px;
            background-color: rgb(52 2 213 / 69%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            font-family: 'Arial', sans-serif;
        }
        .backButton button:hover {
            background-color: rgb(7, 2, 110);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="backButton">
        <a href="../index1.html#service"><button type="button"><span class="icon">👈</span>Back</button></a>
    </div>
    <div class="form-container">
        <h1>Car Paint Color Selection Form</h1>
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
                <span class="icon">🎨</span>
                <label for="color">Select Car Color:</label>
                <select id="color" name="color" class="color-select" required>
                    <option value="red">Red</option>
                    <option value="blue">Blue</option>
                    <option value="black">Black</option>
                    <option value="white">White</option>
                    <option value="silver">Silver</option>
                    <option value="green">Green</option>
                    <option value="yellow">Yellow</option>
                    <option value="purple">Purple</option>
                    <option value="orange">Orange</option>
                    <option value="gray">Gray</option>
                </select>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
<?php
// Database connection parameters
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'carvilla';

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

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
    $stmt = $conn->prepare("INSERT INTO car_details (car_name, car_model, full_name, email, phone, address, color) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("sssssss", $carName, $carModel, $fullName, $email, $phone, $address, $color);

    // Get form data
    $carName = $_POST['carName'];
    $carModel = $_POST['model'];
    $fullName = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $color = $_POST['color'];

    // Execute the statement
    if ($stmt->execute()) {
        // Display a confirmation message
        echo "<script>alert('New record created successfully');</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
