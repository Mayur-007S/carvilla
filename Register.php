<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="png" href="assets/logo/favicon.png">
  <title>Carvilla - Sign Up</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }

 .glass {
    background-color: rgba(42, 45, 84, .60);
    ;
    position: relative;
    /* top: 190px; */
    width: 100%;
    height: 100%;
    /* padding: 255px 50px 100px; */
}

.header {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    z-index: 99;
    position: fixed;
}

.wrap {
    height: 90px;
    position: relative;
    transition: all 0.3s ease-in-out 0s;
    background-color: #000000;

}

.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

.navbar-header {
    float: left;
}

.navbar-brand {
    float: left;
    height: 50px;
    font-size: 18px;
    line-height: 20px;
}

.navbar-brand,
.navbar-header {
    display: inline-block;
    color: rgb(255, 255, 255);
    font-size: 24px;
    letter-spacing: 4px;
    font-family: Rufina, serif;
    font-weight: 700;
    text-transform: uppercase;
    padding: 15px 25px;
}

.nav {
    padding-left: 15px;
    padding-right: 15px;
}

.navbox {
    float: right;
    /* margin-right: -15px; */
    font-weight: 700;
}

ul {
    display: inline-flex;
    list-style-type: none;
    margin-block-start: 3em;
    padding-right: 20px;
    padding-inline-start: 40px;
}

li {
    padding: 0px 20px;
}

li a {
    text-transform: uppercase;
    text-decoration: none;
    color: rgb(255, 255, 255);
    transition: all ease-in-out 0.3s;
}

li a:hover {
    color: blue;

}

li .active {
    color: blue;
}


    .signup-container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
html
    .signup-form {
      background-color: #fff;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      width: 400px;
      text-align: left;
      position: relative;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      color: #333;
      font-weight: bold;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-group button {
      background-color: #FF9900;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    .form-group button:hover {
      background-color: #E77600;
    }

    .form-group p {
      margin-top: 10px;
      text-align: center;
    }

    .form-group a {
      color: #1e88e5;
      text-decoration: none;
    }

    .form-group a:hover {
      text-decoration: underline;
    }

    .success-message {
      background-color: #4CAF50;
      color: white;
      text-align: center;
      padding: 10px;
      border-radius: 4px;
      margin-bottom: 20px;
    }

    h1 {
      text-align: center;
    }
  </style>
</head>
<body>
   
<div class="signup-container">
  <div class="signup-form">


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

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

    $fullname = test_input($_POST["fullname"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $repeatPassword = test_input($_POST["repeat-password"]);

    if ($password !== $repeatPassword) {
        echo '<div class="success-message">Error: Passwords do not match.</div>';
    } else {
        // Check if email already exists
        $checkEmailQuery = $conn->prepare("SELECT * FROM user WHERE email = ?");
        $checkEmailQuery->bind_param("s", $email);
        $checkEmailQuery->execute();
        $result = $checkEmailQuery->get_result();

        if ($result->num_rows > 0) {
            echo '<div class="success-message">Error: Email already exists. Please choose a different email.</div>';
        } else {
           
            $insertQuery = $conn->prepare("INSERT INTO user (fullname, email, password) VALUES (?, ?, ?)");
            $insertQuery->bind_param("sss", $fullname, $email, $password);

            if ($insertQuery->execute()) {
                
                header("Location: index1.html");
                exit();
            } else {
                echo "Error: " . $insertQuery->error;
            }

            $insertQuery->close();
        }

        $checkEmailQuery->close();
    }

   
    $conn->close();
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

    <h1>Sign Up:</h1>

    <form action="#" method="post">
      <div class="form-group">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>

      <div class="form-group">
        <label for="repeat-password">Repeat Password:</label>
        <input type="password" id="repeat-password" name="repeat-password" required>
      </div>

      <div class="form-group">
        <button type="submit">Sign Up</button>
      </div>

      <p>Already have an account? <a href="Login.php">Log in</a></p>
    </form>
  </div>
</div>

</body>
</html>









