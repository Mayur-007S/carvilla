<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarVilla - Home</title>
    <link rel="icon" type="png" href="assets/logo/favicon.png">
    <link rel="stylesheet" href="prefixCSS.css">
    <!-- <link rel="stylesheet" href="style1.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-color: rgb(205, 202, 202);
        }

        .form-container {
            width: 1000px;
            height: 540px;
            background-color: #ffffff;
            margin-top: 6rem;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            left: 1rem;
            border-radius: 30px;
            gap: 15px;
        }

        .form-container .main-form {
            display: flex;
            justify-content: start;
            align-items: self-start;
            flex-direction: column;
            width: 42.5%;
            padding: 20px;
            height: 95%;
            color: black;
            background-color: rgb(199 199 199 / 33%);
            border-radius: 30px;
        }

        .form-container .form-carousel {
            width: 53%;
            height: 95%;
            background-color: crimson;
            border-radius: 30px;
        }

        .input-field .filed {
            display: flex;
            gap: 10px;
            width: 100%;
            height: 20px;
        }

        .input-field input[type="text"],
        input[type="email"] {
            padding: 1rem;
            border-radius: 5px;
            border: none;
            width: 10.5rem;
        }

        .ccolor select {
            margin: 0;
            height: 2.5rem;
            width: 100%;
            border-radius: 6px;
            font-size: 18px;
            color: black;
            text-align: center;
            border: 1px solid black;
        }

        .input-field button {
            margin-top: 1rem;
            height: 2rem;
            width: 100%;
            border-radius: 6px;
            border: none;
            background-color: #383fff;
            color: white;
        }

        .form-carousel .form-carousel-inner .rate-desc-auth {
            display: flex;
            position: relative;
            flex-direction: column;
            justify-content: center;
            left: 1rem;
            width: 70%;
            font-size: 13px;
        }
    </style>
</head>

<body>

    <div id="loader-container">
        <div class="loading-spinner"></div>
    </div>
    <section>
        <div id="home">
            <!-- <video width="100%" height="100%" autoplay muted loop style="position: absolute;">
                <source src="/assets/images/Mahindra_XUV_3XO___Everything_you_want___more(1080p).mp4" type="video/mp4">
            </video> -->
            <div class="glass">
                <div class="header">
                    <div class="wrap">
                        <div class="container ">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    CarVilla
                                </div>
                            </div>
                            <div class="nav">
                                <ul class="navbox">
                                    <li><a class="active" href="#home">home</a></li>
                                    <li><a href="#service">service</a></li>
                                    <li><a href="#featured-cars">featured cars</a></li>
                                    <li><a href="#new-cars">new cars</a></li>
                                    <li><a href="./Contact Us.html">Contact Us</a></li>
                                </ul>
                                </ul>
                            </div>

                            <!-- Mobile vresion navbar -->
                            <div class="hamburger">

                                <nav role="navigation">
                                    <div id="menuToggle">
                                        <input type="checkbox" />

                                        <span></span>
                                        <span></span>
                                        <span></span>


                                        <ul id="menu">
                                            <a href="#home">
                                                <li>Home</li>
                                            </a>
                                            <a href="#service">
                                                <li>service</li>
                                            </a>
                                            <a href="#featured">
                                                <li>featured</li>
                                            </a>
                                            <a href="#new cars">
                                                <li>new cars</li>
                                            </a>
                                            <a href="#Contact">
                                                <li>Contact</li>
                                            </a>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- mobile version navbar end -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- form section -->
    <section>
        <div class="form-container">
            <div class="main-form">
                <div class="logo-brand" style="display: flex; gap: 10px;">
                    <img src="./assets/logo/favicon.png" alt="logo" style="width: 25px; height: 25px;">
                    <h1 style="color: white;">CarVilla</h1>
                </div>
                <div class="form-title" style="margin-top: 2rem;">
                    <h1>We'd love to help</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ex totam, aliquid modi inventore
                        obcaecati ad sequi vero, voluptas earum voluptatibus optio. Officiis, laudantium delectus.</p>
                </div>
                <div class="input-field" style="display: flex; flex-direction: column; margin-top: 2rem;">
                    <form action="" method="post">
                        <div class="filed"
                            style="display: flex; gap: 10px;justify-content:space-between;     width: 63%;">
                            <label for="fname">Fullname</label> <label for="fname">Email</label>
                        </div>
                        <div class="name-email filed" style="margin-bottom: 1.5rem;">
                            <input type="text" name="name" id="name" placeholder="Fullname" required>
                            <input type="email" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="filed"
                            style="display: flex; gap: 10px;justify-content:space-between;    width: 68.5%;">
                            <label for="phone">Phone no</label> <label for="address">Address</label>
                        </div>
                        <div class="phone-address filed" style="margin-bottom: 1.5rem;">
                            <input type="text" name="phone" id="phone" placeholder="Phone" required>
                            <input type="text" name="address" id="address" placeholder="Address" required>
                        </div>
                        <div class="filed" style="display: flex; gap: 10px;justify-content:space-between;width: 72.5%;">
                            <label for="cname">Car name</label> <label for="cmodel">Car model</label>
                        </div>
                        <div class="cname-cmodel filed" style="margin-bottom: 1.5rem;">
                            <input type="text" name="carName" id="cname" placeholder="Car name" required>
                            <input type="text" name="model" id="cmodel" placeholder="Car model" required>
                        </div>
                        <div class="ccolor">
                            <select name="color">
                                <option value="red">Red</option>
                                <option value="blue">Blue</option>
                                <option value="green">Green</option>
                                <option value="black">Black</option>
                                <option value="white">White</option>
                                <option value="yellow">Yellow</option>
                            </select>
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <div class="form-carousel">
                <img src="./assets/images/background.png" alt="" width="100%" height="100%" style="border-radius: 6%;">
                <div class="form-carousel-inner" style="display: flex;position: absolute;top: 24rem;">
                    <div class="rate-desc-auth">
                        <p class="form-rate">⭐⭐⭐⭐⭐</p>
                        <p style=" margin-top: 0.5rem;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro
                            quia sit corrupti eum
                            blanditiis voluptates. Accusantium cum odit soluta hic officia nulla, deserunt illo!</p>
                        <p style="margin-top: 1rem;">----Mayur Myana</p>
                        <p>Lorem ipsum dolor sit</p>
                    </div>
                    <div class="next-previous" style="    
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        width: auto;
                        height: auto;
                        position: relative;
                        bottom: -3rem;
                        right: -1rem;
                    ">
                        <button style="background: none;
                        border: none;
                        rotate: 180px;
                        transform: rotate(268deg);"
                    >
                    <img src="./assets/icons/icons8-up-96.png" width="40" height="40"></button>
                        <button style="background: none;
                        border: none;
                        rotate: 180px;
                        transform: rotate(90deg);">
                        <img src="./assets/icons/icons8-up-96.png" width="40" height="40"></button>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

</body>

</html>

<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

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

        // Get form data
        $carName = $_POST['carName'];
        $carModel = $_POST['model'];
        $fullName = $_POST['name'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phone'];
        $address = $_POST['address'];
        $color = $_POST['color'];

    // Prepare and bind statement
    $stmt = $conn->prepare("INSERT INTO CarPaint(full_name, email, phoneNumber, address, car_name, car_model, color) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }
    
    // Bind parameters
    $stmt->bind_param("sssssss", $fullName, $email, $phoneNumber, $address, $carName, $carModel, $color);

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