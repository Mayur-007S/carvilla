# CARVILLA 🚗

A modern car dealership platform designed to provide a seamless experience for browsing, comparing, and booking vehicles.

![CarVilla Logo](assets/logo/favicon.png)

## 📌 Table of Contents
- [Overview](#overview)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Overview

CARVILLA is a comprehensive web application that serves as a bridge between car dealers and potential buyers. The platform offers an intuitive interface for users to explore various vehicles, manage their profiles, and track their booking history.

## Features

### 🔑 User Authentication
- Secure login and registration system
- User profile management
- Password recovery options

### 👤 User Profile
- Personalized dashboard
- Booking history tracking
- Profile information management
- Security settings

### 🚙 Vehicle Management
- Detailed car listings
- Featured cars section
- New arrivals showcase
- Advanced search and filter options

### 📱 Responsive Design
- Mobile-friendly interface
- Cross-browser compatibility
- Intuitive navigation

## Technologies Used

### Frontend
- HTML5
- CSS3
- JavaScript
- Responsive Design
- Google Fonts

### Backend
- PHP
- PDO for database operations
- MySQL database

### Tools & Libraries
- Git for version control
- Visual Studio Code
- Adobe XD/Figma for design

## Installation

1. Clone the repository

    git clone https://github.com/yourusername/carvilla.git

2. Set up your local server environment (XAMPP/WAMP/MAMP)

3. Import the database
     mysql -u root -p carvilla < database/carvilla.sql

4. Configure database connection
      // Update config.php with your credentials
    - define('DB_HOST', 'localhost');
    - define('DB_USER', 'your_username');
    - define('DB_PASS', 'your_password');
    - define('DB_NAME', 'carvilla');

5. Start your local server and navigate to the project directory    

##  Usage
1. Access the application through your web browser
2. Register for a new account or login with existing credentials
3. Browse available vehicles
4. Book test drives or make inquiries
5. Track your booking history through the user dashboard

## Contributing
We welcome contributions to CARVILLA! Please follow these steps:

1. Fork the repository
2. Create your feature branch (git checkout -b feature/AmazingFeature)
3. Commit your changes (git commit -m 'Add some AmazingFeature')
4. Push to the branch (git push origin feature/AmazingFeature)
5. Open a Pull Request

## CRAETE SQL TABLE 

1. USER TABLE
 ```bash
   CREATE TABLE `user` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci
```

3. BOOKING TABLE
```bash
- CREATE TABLE `bookings` (
  `bookingID` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `carName` varchar(45) DEFAULT NULL,
  `model` varchar(45) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `showroom` varchar(200) DEFAULT NULL,
  `clientId` int DEFAULT NULL,
  PRIMARY KEY (`bookingID`),
  KEY `ClientID_idx` (`clientId`),
  CONSTRAINT `ClientID` FOREIGN KEY (`clientId`) REFERENCES `user` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci
```
4. CAR PAINT TABLE
```bash
CREATE TABLE `car_paint` (
  `colorID` int NOT NULL AUTO_INCREMENT,
  `car_name` varchar(45) DEFAULT NULL,
  `car_model` varchar(45) DEFAULT NULL,
  `full_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`colorID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci
```

5. CAR WAH TABLE
```bash
CREATE TABLE `car_wash` (
  `wid` int NOT NULL AUTO_INCREMENT,
  `car_name` varchar(45) DEFAULT NULL,
  `car_model` varchar(45) DEFAULT NULL,
  `full_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `wash_type` varchar(45) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci
```

5. CAR REPAIER TABLE
```bash
CREATE TABLE `car_repair` (
  `repairID` int NOT NULL AUTO_INCREMENT,
  `car_name` varchar(45) DEFAULT NULL,
  `car_model` varchar(45) DEFAULT NULL,
  `full_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `repair` varchar(45) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`repairID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci
```
6. CONTACT TABLE
```bash
CREATE TABLE `contact` (
  `contactID` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phoneno` varchar(15) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `feedback` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`contactID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci
```

## License
This project is licensed under the MIT License - see the LICENSE file for details.

## Contact

Project Maintainer: Mayur Myana

- Email: mayurmyana111@gmail.com
- LinkedIn: Mayur Myana
- GitHub: Mayur-007S 

## © 2024 CARVILLA. All Rights Reserved.
