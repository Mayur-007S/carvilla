<html>

<head>
    <title>
        Carvilla - Repair_Service
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="repair.css">
    <link rel="icon" type="png" href="../assets/logo/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
    .upbutton img{
        width: 5rem;
    }
</style>
</head>

<body>
    <section class="section1" id="up">
        <div class="navbar">
            <div class="logo">
                <span>
                    CARVILLA
                </span>
            </div>
            <div class="menu">
                <a href="../index1.html">
                    Home
                </a>
                <a href="#service">
                    Service
                </a>
                <a href="#">
                    Gallery
                </a>
                <a href="#booking">
                    BookAppointment
                </a>
            </div>
            <div class="menu-icon">
                <i class="fas fa-bars">
                </i>
            </div>
        </div>
        <div class="hero carousel">
            <img alt="Two workers washing a car in a service center" class="carousel-image" height="400"
                src="./images/carousel-bg-1.jpg" width="1200" />
            <div class="overlay">
                <p>
                    // CAR SERVICING //
                </p>
                <h1>
                    Qualified Car Wash Service Center
                </h1>
                <a class="btn" href="#">
                    LEARN MORE
                </a>
            </div>
            <button class="prev">
                <i class="fas fa-chevron-left">
                    ⬅
                </i>
            </button>
            <button class="next">
                <i class="fas fa-chevron-right">
                    ➡
                </i>
            </button>
        </div>
        <div class="services">
            <div class="service-item">
                <i class="fas fa-star">
                </i>
                <h3>
                    Quality Servicing
                </h3>
                <p>
                    Diam dolor dian ipsum sit amet diam et eos erat ipsum
                </p>
                <a href="#">
                    Read More
                </a>
            </div>
            <div class="service-item highlight">
                <i class="fas fa-users-cog">
                </i>
                <h3>
                    Expert Workers
                </h3>
                <p>
                    Diam dolor dian ipsum sit amet diam et eos erat ipsum
                </p>
                <a href="#">
                    Read More
                </a>
            </div>
            <div class="service-item">
                <i class="fas fa-tools">
                </i>
                <h3>
                    Modern Equipment
                </h3>
                <p>
                    Diam dolor diam ipsum sit amet diam et eos erat ipsum
                </p>
                <a href="#">
                    Read More
                </a>
            </div>
        </div>
    </section>
    <section class="section2">
        <div class="container">
            <div class="header-image">
                <img alt="Close-up of a red sports car with a Pirelli logo and a person standing next to it"
                    height="100%" src="./images/pexels-pixabay-261986.jpg" width="100%" />
                <div class="experience">
                    15 Years Experience
                </div>
            </div>
            <div class="about-us">
                <h2>
                    // ABOUT US //
                </h2>
                <h1>
                    CarServ Is The Best Place For Your Auto Care
                </h1>
                <p>
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
                    ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                </p>
                <div class="features">
                    <div class="feature">
                        <div class="feature-number">
                            01
                        </div>
                        <div class="feature-text">
                            <h3>
                                Professional &amp; Expert
                            </h3>
                            <p>
                                Diam dolor diam ipsum sit amet diam et eos
                            </p>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="feature-number">
                            02
                        </div>
                        <div class="feature-text">
                            <h3>
                                Quality Servicing Center
                            </h3>
                            <p>
                                Diam dolor diam ipsum sit amet diam et eos
                            </p>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="feature-number">
                            03
                        </div>
                        <div class="feature-text">
                            <h3>
                                Awards Winning Workers
                            </h3>
                            <p>
                                Diam dolor diam ipsum sit amet diam et eos
                            </p>
                        </div>
                    </div>
                </div>
                <a class="read-more" href="#">
                    Read More
                    <i class="fas fa-arrow-right">
                    </i>
                </a>
            </div>
        </div>
        <div class="stats">
            <div class="stat">
                <i class="fas fa-check">
                </i>
                <h3 id="years-experience">
                    1234
                </h3>
                <p>
                    Years Experience
                </p>
            </div>
            <div class="stat">
                <i class="fas fa-users">
                </i>
                <h3 id="expert-technicians">
                    1234
                </h3>
                <p>
                    Expert Technicians
                </p>
            </div>
            <div class="stat">
                <i class="fas fa-smile">
                </i>
                <h3 id="satisfied-clients">
                    1234
                </h3>
                <p>
                    Satisfied Clients
                </p>
            </div>
            <div class="stat">
                <i class="fas fa-car">
                </i>
                <h3 id="complete-projects">
                    1234
                </h3>
                <p>
                    Complete Projects
                </p>
            </div>
        </div>
        <script>
            const stats = {
                "yearsExperience": 15,
                "expertTechnicians": 50,
                "satisfiedClients": 1234,
                "completeProjects": 5678
            };

            document.getElementById('years-experience').innerText = stats.yearsExperience;
            document.getElementById('expert-technicians').innerText = stats.expertTechnicians;
            document.getElementById('satisfied-clients').innerText = stats.satisfiedClients;
            document.getElementById('complete-projects').innerText = stats.completeProjects;
        </script>
    </section>
    <section class="thirdSection" id="service">
        <div class="container">
            <div class="header">
                <p>
                    // OUR SERVICES //
                </p>
                <h1>
                    Explore Our Services
                </h1>
            </div>
            <div class="services">
                <div class="service-item active" onclick="changeContent('diagnostic')">
                    <i class="fas fa-car">
                    </i>
                    Diagnostic Test
                </div>
                <div class="service-item" onclick="changeContent('engine')">
                    <i class="fas fa-cogs">
                    </i>
                    Engine Servicing
                </div>
                <div class="service-item" onclick="changeContent('tires')">
                    <i class="fas fa-tools">
                    </i>
                    Tires Replacement
                </div>
                <div class="service-item" onclick="changeContent('oil')">
                    <i class="fas fa-oil-can">
                    </i>
                    Oil Changing
                </div>
            </div>
            <div class="content">
                <img id="service-image" alt="Two mechanics working under a lifted car in an auto service center"
                    height="300"
                    src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-BVbpSZmLndA7MfHIxv2ahIKS/user-IBY8IaMXtVn7IVIdZeyvjx16/img-rSDzHYpmvWYssfiApjhijKMP.png?st=2024-09-04T11%3A24%3A33Z&amp;se=2024-09-04T13%3A24%3A33Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-03T23%3A58%3A05Z&amp;ske=2024-09-04T23%3A58%3A05Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=mCZ8UYYmCZK4amaM9HHIykcLDcXGtSTAtbbgjbyoYgw%3D"
                    width="400" />
                <div class="text">
                    <h2 id="service-title">
                        15 Years Of Experience In Auto Servicing
                    </h2>
                    <p id="service-description">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita
                        erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <ul id="service-list">
                        <li>
                            <i class="fas fa-check">
                            </i>
                            Quality Servicing
                        </li>
                        <li>
                            <i class="fas fa-check">
                            </i>
                            Expert Workers
                        </li>
                        <li>
                            <i class="fas fa-check">
                            </i>
                            Modern Equipment
                        </li>
                    </ul>
                    <a class="btn" href="#">
                        READ MORE
                        <i class="fas fa-arrow-right">
                        </i>
                    </a>
                </div>
            </div>
        </div>
        <script>
            function changeContent(service) {
                let imageUrl, imageAlt, title, description, listItems;

                switch (service) {
                    case 'diagnostic':
                        imageUrl = './images/pexels-maltelu-2244746 (1).jpg';
                        imageAlt = 'Mechanic performing a diagnostic test on a car';
                        title = 'Comprehensive Diagnostic Test';
                        description = 'Our diagnostic tests help identify issues with your vehicle quickly and accurately.';
                        listItems = `
                                 <li><i class="fas fa-check"></i> Advanced Diagnostic Tools</li>
                                 <li><i class="fas fa-check"></i> Accurate Issue Identification</li>
                                 <li><i class="fas fa-check"></i> Quick and Reliable Service</li>
                             `;
                        break;
                    case 'engine':
                        imageUrl = './images/car-mechanic-car-service-checking-up-car.jpg';
                        imageAlt = 'Mechanic working on an engine in an auto service center';
                        title = 'Expert Engine Servicing';
                        description = 'Our expert mechanics provide top-notch engine servicing to ensure your vehicle runs smoothly and efficiently.';
                        listItems = `
                                 <li><i class="fas fa-check"></i> Comprehensive Engine Check</li>
                                 <li><i class="fas fa-check"></i> Engine Repair and Maintenance</li>
                                 <li><i class="fas fa-check"></i> Use of High-Quality Parts</li>
                             `;
                        break;
                    case 'tires':
                        imageUrl = './images/pexels-gustavo-fring-6870331.jpg';
                        imageAlt = 'Mechanic replacing tires in an auto service center';
                        title = 'Professional Tires Replacement';
                        description = 'We offer professional tire replacement services to ensure your safety on the road.';
                        listItems = `
                                 <li><i class="fas fa-check"></i> Wide Range of Tires</li>
                                 <li><i class="fas fa-check"></i> Expert Installation</li>
                                 <li><i class="fas fa-check"></i> Tire Balancing and Alignment</li>
                             `;
                        break;
                    case 'oil':
                        imageUrl = './images/pexels-daniel-andraski-197681005-13065690.jpg';
                        imageAlt = 'Mechanic changing oil in a car';
                        title = 'Efficient Oil Changing';
                        description = 'Regular oil changes are essential for the longevity and performance of your vehicle.';
                        listItems = `
                                 <li><i class="fas fa-check"></i> High-Quality Oil</li>
                                 <li><i class="fas fa-check"></i> Quick Service</li>
                                 <li><i class="fas fa-check"></i> Engine Performance Improvement</li>
                             `;
                        break;
                    default:
                        return;
                }

                document.getElementById('service-image').src = imageUrl;
                document.getElementById('service-image').alt = imageAlt;
                document.getElementById('service-title').innerText = title;
                document.getElementById('service-description').innerText = description;
                document.getElementById('service-list').innerHTML = listItems;

                // Change the active class
                const serviceItems = document.querySelectorAll('.service-item');
                serviceItems.forEach(item => item.classList.remove('active'));
                event.currentTarget.classList.add('active');
            }
        </script>
    </section>
    <section class="fourSection" id="booking">
        <div class="container1">
            <div class="left-section">
                <h1>Certified and Award Winning Car Repair Service Provider</h1>
                <p>Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea
                    ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et.
                    Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata
                    takimata sanctus sed.</p>
            </div>
            <div class="right-section">
                <div class="form-container">
                    <h2>Book For A Service</h2>
                    <form method="post">
                        <input type="text" placeholder="Your Name" name="name" required autocomplete="off">
                        <input type="email" placeholder="Your Email" name="email" required autocomplete="off">
                        <select name="Repair_service" required>
                            <option disabled>Periodic Maintenance Service</option>
                            <option value="Diagnostic Test">Diagnostic Test</option>
                            <option value="Engine Servicing">Engine Servicing</option>
                            <option value="Tires Replacement">Tires Replacement</option>
                            <option value="Oil Changing">Oil Changing</option>
                        </select>
                        <input type="date" placeholder="Service Date" name="date" required>
                        <textarea placeholder="Special Request" style="width: 100%;" name="request" required
                            autocomplete="off"></textarea>
                        <button type="submit">BOOK AN APPOINTMENT</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="upbutton" style="display: flex;
    margin-top: -10rem;
    width: 100%;
    justify-content: right;"><a href="#up"><img src="..//assets/icons/icons8-up-96.png" alt=""></a></div>
    </section>


    <script>
        const images = [
            './images/carousel-bg-1.jpg',
            './images/carousel-bg-2.jpg',
            './images/carlos-torres-qNqCmwXaHeQ-unsplash.jpg'
        ];
        let currentIndex = 0;

        const carouselImage = document.querySelector('.carousel-image');
        const prevButton = document.querySelector('.prev');
        const nextButton = document.querySelector('.next');

        function showImage(index) {
            carouselImage.src = images[index];
        }

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex === 0) ? images.length - 1 : currentIndex - 1;
            showImage(currentIndex);
        });

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex === images.length - 1) ? 0 : currentIndex + 1;
            showImage(currentIndex);
        });

        showImage(currentIndex);
    </script>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "carvilla";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $Repair_service = $_POST["Repair_service"];
        $request = $_POST["request"];
        $date = $_POST["date"];
    
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO repair_service (Name, Email, repair_type, Booking_Date, Special_note) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $Repair_service, $date, $request);
    
        // Execute
        if ($stmt->execute()) {
            echo "";
        } else {
            echo "Error inserting record: " . $stmt->error;
        }
    
        $stmt->close();
    }
    
    $conn->close();
    ?>
</body>

</html>