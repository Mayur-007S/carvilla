<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="png" href="assets/logo/favicon.png">
  <title>Carvilla - Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }

    .login-container {
      display: flex;
      position: relative;
      top: 10%;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .login-form {
      background-color: #fff;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      width: 400px;
      text-align: left;
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
      background-color: #fb641b;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    .form-group button:hover {
      background-color: #f35627;
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

<div class="login-container">
  <div class="login-form">
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

    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);

    // if ($email == "mayurmyana111@gmail.com" && $password == "AdminCarvilla") {
    //   header('Location: http://localhost/carvilla/adminkit-3.1.0/static/');
    // }


    $checkLoginQuery = $conn->prepare("SELECT * FROM user WHERE email = ?");
    $checkLoginQuery->bind_param("s", $email);
    $checkLoginQuery->execute();
    $result = $checkLoginQuery->get_result();

    if ($result->num_rows > 0) {
       
        $row = $result->fetch_assoc();
        if ($password == $row['password']) {
          
            header("Location: index1.html");
            exit();
        } else {
            echo '<div class="success-message">Error: Incorrect password.</div>';
        }
    } else {
     
        echo '<div class="success-message">Error: Email not found. Please check your email.</div>';
    }

    $checkLoginQuery->close();
    $conn->close();
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


    <h1>Login:</h1>

    <form action="#" method="post">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>

      <div class="form-group">
        <button type="submit">Login</button>
      </div>

      <p>Don't have an account? <a href="Register.php">Sign up</a></p>
    </form>
  </div>
</div>

</body>
</html>