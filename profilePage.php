<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarVilla - User Profile</title>
    <link rel="icon" type="png" href="./assets/logo/favicon.png">
    <link rel="stylesheet" href="./mobilestyel.css">
    <link rel="stylesheet" href="./profilePage.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

<style>
.UserName {
height: 6rem;
background: linear-gradient(90deg, rgba(238, 130, 238, 1) 0%, rgba(0, 209, 255, 1100%));
 }
</style>
</head>

<body>

    <section>


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
                            <li><a  href="index1.html">home</a></li>
                            <li><a class="active" href="#">User Account</a></li>
                            <!-- <li><a href="#featured-cars">featured cars</a></li>
                            <li><a href="#new-cars">new cars</a></li> -->
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="Login.php">logout</a></li>
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
                                    <a href="index1.html">
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
                        <!-- mobile version navbar end -->
    </section>
<div>
<?php

session_start();

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

$SQL = "SELECT * FROM user";
$result = $con->query($SQL);

if ($result->num_rows > 0) {
    $result1 = $result->fetch_all(MYSQLI_NUM);
    $new = count($result1);
    $newId = $result1[$new-1];
    $user_id = $newId[0];
    $user_email = $newId[2];
    $user_name = $newId[1];
    echo "<pre>";
    // print_r($result1);
} else {
    echo "0 results";
}

?>
</div>


    <div class="pbox">
        <section>
            <div class="item-1 " id="item-1">
                <div class="UserName">
                    <div class="pimage"> </div>
                    <div class="name">
                        <div class="pname">
                        <?php 
                            echo  $user_name;  
                        ?>
                        </div>
                        <div class="pemail">
                        <?php
                            echo   $user_email;  
                        ?>
                        </div>
                    </div>
                    <div class="elemets">
                        <td><img class="img1" src="assets/logo/secure.png" alt="Orders">
                            <li><a id="itext" href="bh.php">Bookins history</a>
                            </li>
                        </td>
                        <td><img class="img2" src="assets/logo/secure.png" alt="Security">
                            <li><a id="itext" href="index1.html">Security</a></li>
                        </td>
                        <td><img class="img4" src="assets/logo/settings.png" alt="setting">
                            <li><a id="itext" href="index1.html">Setting</a></li>
                        </td>
                    </div>
                </div>
                <div class="logout">
                    <hr>
                    <img class="img5" src="assets/logo/do-not-disturb.png" alt=""><a class="logoutButton" href=""
                        id="logoutText">Logout</a>
                </div>
            </div>
        </section>

        <section class="information">
            <div class="orderBox">
                <a href="bh.php" style="color: rgb(255, 255, 255);">
                    <div class="orderB b1">
                        <img class="l1" src="/carvilla/assets/logo/refresh.png" alt="icon"><span>Bookins history</span>
                        <p class="btext">Welcome to our bookings section</p>
                        <p class="btext b1-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                            amet nisi
                            fugiat placeat alias dolor?</p>
                    </div>
                </a>


                <a href="Login.php" style="color: rgb(255, 255, 255);">
                    <div class="secureBox b1">
                        <img class="l1" src="assets/logo/unlocked.png" alt=""><span>Login & security</span>
                        <p class="btext">Edit login, name, and mobile number</p>
                        <p class="btext b1-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                            amet nisi
                            fugiat placeat alias dolor?</p>
                    </div>
                </a>
                <a href="Login.php" style="color: rgb(255, 255, 255);">
                    <div class="yourAddr b1">
                        <img class="l1" src="assets/logo/placeholder.png" alt=""><span>Your Address</span>
                        <p class="btext">Edit Address for bookings</p>
                        <p class="btext b1-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                            amet nisi
                            fugiat placeat alias dolor?</p>
                    </div>
                </a>

                <a href="" style="color: rgb(255, 255, 255);">
                    <div class="ContactUs b1">
                        <img class="l1" src="assets/logo/operator.png" alt=""><span>Contact Us</span>
                        <p class="btext">ContactUs for more details.</p>
                        <p class="btext b1-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                            amet nisi
                            fugiat placeat alias dolor?</p>
                    </div>
                </a>
            </div>
        </section>


    </div>
</html>
</body>